<?php include "header.php" ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>注文確認</title>
</head>
<body>
    <?php
        require_once "DBManager.php"; 
        require_once "function.php";
        // ログインしているか判定する
        $memberId = getMemberIdFromSession();

        $dbm = new DBManager();
        $cart = $dbm->getCart($memberId);
        $isInCart = (count($cart) > 0) ?  true : false ;
    ?>

    
    <div class="container list-area">
        <h3 class="pt-3">注文確認</h3>
        <div class="row gy-2">
        <?php 
            $sum = 0;//商品の合計金額表示用 
            $cnt = 0;//商品点数表示用
        ?> 
        <!-- 買い物かごの商品をループで回して表示させる -->
        <?php foreach($cart as $row): ?>
            <?php $sum += $row['shoukei']; $cnt += $row['cart_suryo']; ?>
            <div class="col-12">
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
        <?php endforeach; ?>
        </div>

        <!-- 買い物かごに商品が入っているかどうかで表示内容を変える -->
        <?php if($isInCart): ?>    
            <!-- 商品が入っている時 -->
            <p class="text-end">商品点数：<?=$cnt ?>点　合計金額:<?= number_format($sum) ?>円</p>
            <p class="text-center">上記内容で注文確定します。</p>
            <p class="text-center">よろしいですか？</p>
        

            <div class="text-center m-5">
                <a class="btn btn-primary" href="./order_complete.php">注文する</a>
            </div>

        <?php else: ?>
            <!-- 商品が入っていないとき -->
            <p class="text-center">買い物かごに商品が何も入っていません。</p>
        <?php endif; ?>    

        <div class="text-center m-5">
            <a class="btn btn-primary" href="./cart.php">戻る</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>