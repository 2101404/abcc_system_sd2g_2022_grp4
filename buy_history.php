<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <?php
        function showHistory($date,$image,$itemName,$suryo,$size,$price){
            echo'
                <!-- 商品のリスト -->
                <div class="col-12">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-4 col-md-3">
                                <div class="ratio ratio-1x1">
                                    <img src="'.$image.'"   alt="..." >
                                </div>
                            </div>
                            <div class="col-8 col-md-9">
                                <div class="card-body">
                                    <h3 class="card-title">'.$itemName.'</h5>
                                    <p class="card-text fs-4">
                                            <span class="me-3">数量：'.$suryo.'</span>
                                            <span>サイズ：'.$size.'</span>
                                            <span style="float:right;">'.$price.'円</span>
                                    </p>
                                    <!-- <a href="" style="float:right;">削除</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';

        }
        function showSum($sum){
            echo' <!-- 合計金額 -->
                    <div class="row">
                        <div class="col-12">
                            <p class="text-end my-3 fs-3"> 合計金額 '.$sum.'円</p>
                        </div>
                    </div>    
                ';

        }
        function showDate($date){
            echo'
                <div class="col-12">
                    <h3 class="">'.$date.'</h3>
                </div>
            ';
            


        }
    ?>

    <title>購入履歴</title>
</head>
<body>
    <?php require_once "DBManager.php"; ?>

    <!-- ヘッダーの読み込み -->
    <?php include "header.php"; ?>
    <div class="container" style="max-width:800px">

        <h2 class="my-3">購入履歴</h2>
        
        <?php 
            $memberId = 1;

            $dbm = new DBManager();
            $tbl = $dbm->getBuyHistory($memberId);
            echo "<div class=\"row gy-1\">";
            
            $sum = 0;
            $orderId = 0;
            $cnt = 0;
            foreach($tbl as $row){
                $rowcnt = count($tbl);
                if($cnt == 0){
                    $orderId = $row['order_id'];
                    showDate($row['order_date']);
                }
                if($orderId == $row['order_id'] || $cnt == 0){
                    $sum += $row['item_price'];
                    
                }else{
                    showSum($sum);
                    showDate($row['order_date']);
                    $sum = 0;
                    $sum += $row['item_price'];
                }

                showHistory($row['order_date'],$row['item_image'],$row['item_name'],$row['suryo_data'],$row['item_size'],$row['item_price']);

                $orderId = $row['order_id'];
                $cnt++;
                if($cnt == $rowcnt){
                    showSum($sum);
                }
            }
            echo "</div> ";
        ?>
        
        
       

        
        <div class="text-center my-3">    
            <a type="button" class="btn btn-outline-primary" href="">マイページに戻る</a>
        </div>
                     
    </div>
    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>