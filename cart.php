<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>買い物かご</title>
</head>
<body>
  
<?php require_once "DBManager.php"; ?>

<!-- ヘッダーの読み込み -->
<?php include "header.php"; ?>
<div class="container list-area">

    <h2 class="my-3">買い物かご</h2>
    
    <?php 
        require_once "function.php";
        $memberId = getMemberIdFromSession(true);

        $dbm = new DBManager();
        $tbl = $dbm->getCart($memberId);
        
        $sum = 0;
    ?>
    <div class="row gy-2">
        <?php foreach($tbl as $row): ?>
                <div class="col-12" >
                    <!-- カード -->
                    <div class="card item-card h-100" >
                        <div class="row g-0" style="max-height:200px">

                            <!-- 商品画像 -->
                            <div class="col-4 col-md-3 h-100" >
                                <a href="./item_detail.php?itemId=<?= $row['item_id']?>">
                                    <!-- <div class="ratio ratio-1x1"> -->
                                        <img style="width:100%;height:100%;object-fit:cover;" src="<?php echo $row['item_image']?>"   alt="..." >
                                    <!-- </div> -->
                                </a>
                            </div>
                            
                            <!-- 商品名とか -->
                            <div class="col-8 col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['item_name'] ?></h5>
                                    <span style="float:right;"><?= number_format($row['item_price'])?>円</span><br>

                                    <p class="card-text">
                                            <span>数量：<?= $row['cart_suryo']?></span>
                                            <span>サイズ：<?= $row['cart_size']?></span><br>
                                            <span style="float:right;"><?="小計　". number_format($row['item_price'])?>円</span><br>
                                            <form action="./cart_delete.php" method="post" class="text-end" style="position:absolute;bottom:3%;right:1%;">
                                                <input type="submit"  style="border:none" name="delete" value="削除">
                                                <input type="hidden" name="itemId" value="<?=$row['item_id']?>">
                                            </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <?php endforeach;?>
    </div>
        
    
    
    <div class="text-end my-3">    
        <a type="button" class="btn btn-outline-primary" href="./order_complete.php">注文</a>
    </div>
    
    <div class="text-center my-3">    
        <a type="button" class="btn btn-outline-primary" href="index.php">トップページに戻る</a>
    </div>
                 
</div>

<?php
    function showSum($sum){
        echo' <!-- 合計金額 -->
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-end my-3 fs-3"> 合計 '.$sum.'円</h3>
                    </div>
                </div>    
            ';


    }
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>