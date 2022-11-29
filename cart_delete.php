<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>買い物かご削除確認</title>
</head>
<body>
    <!-- ヘッダーの読み込み -->
    <?php include "header.php" ?>
    <?php 
        require_once "function.php";
        require_once "DBManager.php";
        // ログインしているか判定する
        $memberId = getMemberIdFromSession();

        $dbm = new DBManager();
        $itemId = 0;
        if(isset($_POST['delete'])){
            $itemId = $_POST['itemId'];
        }
        $row = $dbm->getCartItem($memberId,$itemId);
    ?>

    <div class="container list-area">
        
        <h3>買い物かご</h3>

        <p class="text-center">以下の商品を買い物かごから<br>削除してよろしいですか？</p>

        <div class="row gy-2 my-5">
        <div class="col-12" >
                    <!-- カード -->
                    <div class="card item-card h-100" >
                        <div class="row g-0" >

                            <!-- 商品画像 -->
                            <div class="col-3 col-md-3 h-100" >
                                <a href="./item_detail.php?itemId=<?= $row['item_id']?>">
                                    <!-- <div class="ratio ratio-1x1"> -->
                                        <img src="<?='./imgs/items/'.$row['item_image']?>"  alt="..." >
                                    <!-- </div> -->
                                </a>
                            </div>
                            
                            <!-- 商品名とか -->
                            <div class="col-9 col-md-9 h-100">
                                <div class="card-body py-1 h-100">
                                    <div class="row">
                                        <div class="card-Title">
                                            <div class="col-12 text-truncate">
                                                <a href="./item_detail.php?itemId=<?=$row['item_id']?>">
                                                    <?= $row['item_name'] ?>
                                                </a>
                                            </div>
                                        </div>
                                            <div class="col-12">
                                                <span class="" style="float:right;"><?= number_format($row['sellingPrice'])?>円</span>

                                            </div>

                                        
                                    </div>
                                    <div class="card-text">
                                            <span>数量:<?= $row['cart_suryo']?></span>
                                            <span>　サイズ:<?= $row['cart_size']?></span><br>

                                                <span style="float:right;"><?="小計 ". number_format($row['shoukei'])?>円</span><br>

                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
        </div>

        <form action="./cart_delete_complete.php" method="post" class="text-center">
            <input type="submit" class="btn btn-primary m-3" value="削除する">
            <input type="hidden" name="delete" value="<?=$itemId?>">

        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>