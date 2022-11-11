<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <script type="text/javascript">
            function calcPrice(){
                let suryo = document.getElementById("suryo").value;
                suryo = parseInt(suryo);
                let price = document.getElementById("price").innerHTML;
                price = parseInt(price);

                let sum = price * suryo;
                let sumArea = document.getElementById("sum");
                sumArea.innerHTML = sum; 
            }

            $("[data-toggle=popover]").popover();
    </script>
    <title>商品詳細</title>
</head>
<body class="my-3">
    <!-- ヘッダーの読み込み -->
    <?php include "header.php" ?>
    
    <div class="container">

        <!-- パンくずリスト -->
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Top</a></li>
                <li class="breadcrumb-item">カテゴリ</li>
                <li class="breadcrumb-item active" aria-current="page">商品詳細</li>
            </ol>
        </nav>        

        <!-- 商品詳細ここから -->
        <div class="row gy-3">
            <!-- 商品画像 -->
            <div class="col-12 col-md-6">
                <img src="imgs\sample\ikeoji.png" alt="" width="100%" style="max-height:400px;object-fit:contain;">

            </div>
            <!-- 商品名・金額・サイズ・数量 -->
            <div class="col-12 col-md-6 ps-md-5">
                <span class="badge bg-danger">new</span>
                <h5 class="text-muted text-start">カテゴリ【スーツ】</h5>
                <h3>イケオジになっちゃうスタイリッシュスーツ！！</h3>
                <p class="my-5 fs-3 text-end">￥<span class="fs-3" id="price">750000</span></p>
                <div class="text-start my-4">

                    <select class="form-select form-select-lg" name="size">
                            <option selected>サイズを選択
                            </option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                    </select>

                </div>
                <div class="text-start mt-5">
                    <select class="form-select form-select-lg" onchange="calcPrice()" id="suryo">
                        <option value="0"selected>数量を選択</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>


                </div>
            </div>

        </div>
        <p class="text-end fs-4  my-3">選択内容：商品価格<span id="sum">0</span>円</p>

        <h6 class="text-muted mt-4">【商品説明】</h3>
            <p class="m-0">
                大人の雰囲気を醸し出す、スタイリッシュなスーツです。
                これを着ればあなたもきっとイケオジに。
            </p>


        <!-- ボタン -->
        <div class="row gy-4 mt-4">
            <div class="col-12 col-md-6 text-center mb-3">
                <button class="btn btn-lg btn-primary">購入に進む</button>
            </div>

            <div class="col-12 col-md-6 text-center mb-5">
                <button class="btn  btn-lg btn-primary">買い物かごに入れる</button>
            </div>
            <div class="col-12 text-center my-5">
                <button class="btn btn-lg btn-outline-primary" onclick="history.back()">一つ前に戻る</button>
            </div>
        </div>
        <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>