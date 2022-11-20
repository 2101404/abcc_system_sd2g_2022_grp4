<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>商品詳細</title>
</head>
<body class="my-3">
    <!-- ヘッダーの読み込み -->
    <?php include "header.php"; ?>
    <?php
        require_once "DBManager.php";
        require_once "function.php";
        
        // URLから商品IDを取得する
        if(isset($_GET['itemid'])){
            $itemId = $_GET['itemid'];
        }else{
            // パラメーターを付けずにページを表示した場合トップページに遷移させる
            header('Location: index.php');
            exit("パラメーターが設定されていません");
        }
        
        // DBから商品情報を取得する
        try {
            $dbm = new DBManager();
            $item = $dbm->getItemById($itemId);
        } catch (Exception $ex) {
            // DBから取得出来なかった場合エラーを表示する
            echo $ex->getMessage();
            echo '<br><a href="javascript:history.back()">戻る</a>';
            exit();
        }

        // サイズを配列に入れる
        $sizes = explode(",",$item['item_size']);
    ?>

    <div class="container">
    <form action="./addcart.php" method="post">
        <input type="hidden" name="URL" value="<?php echo getURL(); ?>">
        <input type="hidden" name="itemId" value="<?php echo $itemId ?>">

    

        <!-- パンくずリスト -->
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Top</a></li>
                <li class="breadcrumb-item">カテゴリ【<?php echo $item['category_name']; ?>】</li>
                <li class="breadcrumb-item active" aria-current="page">商品詳細</li>
            </ol>
        </nav>        

        <!-- 商品詳細ここから -->
        <div class="row gy-3">
            <!-- 商品画像 -->
            <div class="col-12 col-md-6">
                <img src=<?php echo $item['item_image'];?> alt="" width="100%" style="max-height:400px;object-fit:contain;">

            </div>
            <!-- 商品名・金額・サイズ・数量 -->
            <div class="col-12 col-md-6 ps-md-5">
                <?php 
                    //30日以内に登録された商品にNEWをつける(2592000秒=30日)
                    if(strtotime(date("Y-m-d")) -strtotime( $item['item_registration_date'])  <= 2592000){
                        echo '<span class="badge bg-danger">new</span>';
                    } 
                ?>
                <h5 class="text-muted text-start">カテゴリ【<?php echo $item['category_name']; ?>】</h5>
                <h3><?php echo $item['item_name']; ?></h3>
                <p class="my-5 fs-3 text-end">￥<span class="fs-3" id="price"><?php echo number_format($item['item_price']); ?></span></p>
                <div class="text-start my-4">

                    <label for="size">サイズ</label>
                    <select class="form-select form-select-lg" name="size">
                            <option value="" selected>サイズを選択</option>
                            <?php foreach($sizes as $size){
                                echo "<option value=\"$size\">$size</option>";
                            } ?>
                    </select>

                </div>
                <div class="text-start mt-5">
                    <label for="suryo">数量</label>
                    <select class="form-select form-select-lg" onchange="calcPrice()" id="suryo" name="suryo">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>


                </div>
            </div>

        </div>
        <p class="text-end fs-4  my-3">選択内容：商品価格<span id="sum"><?php echo number_format($item['item_price']) ?> </span>円</p>

        <h6 class="text-muted mt-4">【商品説明】</h3>
            <p class="m-0">
                <?php echo $item['item_description']; ?>
            </p>


        <!-- ボタン -->
        <div class="row gy-4 mt-4">
            <div class="col-12 col-md-6 text-center mb-3">
                <a href="./cart.php" class="btn btn-lg btn-primary">購入に進む</a>
            </div>

            <div class="col-12 col-md-6 text-center mb-5">
                <input type="submit" class="btn btn-lg btn-primary" value="買い物かごに入れる">
            </div>
            <div class="col-12 text-center my-5">
                <button type="button" class="btn btn-lg btn-outline-primary" onclick="history.back()">一つ前に戻る</button>
            </div>
        </div>

    </form>
    </div>
    <script>
            function calcPrice(){
                let suryo = document.getElementById("suryo").value;
                suryo = parseInt(suryo);
                let price = document.getElementById("price").innerHTML;
                price = parseInt(<?php echo $item['item_price'] ?>);

                let sum = (price * suryo).toLocaleString();
                let sumArea = document.getElementById("sum");
                sumArea.innerHTML = sum; 
            }

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>