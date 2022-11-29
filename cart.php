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
        <?php $sum += $row['shoukei']; ?>
            
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
                                                <form action="./cart_delete.php" method="post" class="text-end my-2" >
                                                    <input type="submit"  name="delete" value="削除">
                                                    <input type="hidden" name="itemId" value="<?=$row['item_id']?>">
                                                </form>

                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

        <?php endforeach;?>
    </div>

    <?php if(!empty($tbl)):?>
        <!-- 合計金額 -->
        <div class="row">
            <div class="col-12">
                <p class="text-end my-3 fs-5"> 合計  <?=number_format($sum)?>円</p>
            </div>
        </div>      

        <div class="text-end my-3">    
            <a type="button" class="btn btn-outline-primary" href="./order_confirmation.php">注文</a>
        </div>

        
    <?php else:?>
        <p class="text-center">買い物かごに商品が何も入っていません。</p>

    <?php endif;?>
    
    
    
    
    <div class="text-center my-5">    
        <a type="button" class="btn btn-outline-primary" href="index.php">トップページに戻る</a>
    </div>
                 
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>