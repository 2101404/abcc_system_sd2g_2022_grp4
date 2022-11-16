<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>特集詳細画面２</title>
</head>
<body>
    <!-- ヘッダーの読み込み -->
    <?php include "header.php" ?>

<div class ="container">

    <div class ="text-center">
    <img class="img-fluid rounded" src="./imgs/sample/tokusyuu2.png" alt="tokusyuu2">
    <p>どのサイズを選んだらいいのか分からない。ジャストサイズな着こなしって？<br>
    そんなお悩みの方にぴったりのスーツの選び方ガイドです。</p>
    </div>

    <!-- 1 -->
    <div class="container alert-dark text-center">
    <p>-ポイント1-</p>
    <h4>サイズ</h4>
    <p>まず自分のサイズを確認しましょう。<br>
    基本となるサイズが分かれば、そのサイズをベースに好みのシルエットを探す事ができます。</p>
    </div>

    <div class="container">
    <div class ="row">
    <div class ="col-md-6"><img class="img-fluid rounded" src="./imgs/sample/ts2-1.png" alt="tag"></div>
    <div class ="col-md-6"><img class="img-fluid rounded" src="./imgs/sample/ts2-2.png" alt="size"></div>

    
    <!-- 2 -->
    <div class="container alert-dark text-center">
    <p>-ポイント2-</p>
    <h4>肩</h4>
    <p>肩幅まわりに<br>
    重みが均等だと着心地が軽い</p>
    </div>

    <div class="container">
    <div class ="row">
        <div class ="col-md-6"><img class="img-fluid rounded" src="./imgs/sample/ts1-2.jpg" alt="kata"></div>
        <div class ="col-md-6"><h4>肩</h4>
    <p>ジャケットの肩山と肩のトップ位置がちょうど<br>
    合っている状態で、ジャケットの肩をつまんで<br>
    1㎝程度のゆとりがあるのが適正サイズです。<br>
    それ以上つまめると大きく、ジャケットの肩が<br>
    落ちてしまうのでだらしのない印象になります。<br>
    つまめる余裕がない場合は小さく、<br>
    動きにくくなります。</p>
        </div>
    </div>


    <!-- movie -->
    <div class ="text-center">
    <iframe width="560" height="315" src="https://youtu.be/8kH0P3Ka6L0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
    </div>

    <!-- 戻るボタン -->
		<div class="text-center mt-5 mb-5">
            <a type="button" href="./index.php?" class="btn btn-lg btn-outline-primary mt-5">トップページに戻る</a>
		</div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>