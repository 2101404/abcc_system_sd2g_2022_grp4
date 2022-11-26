<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>登録確認</title>
</head>

<body>
    <!-- ヘッダーの読み込み -->
    <?php include "header.php" ?>
    <?php
        if(isset($_POST)){
            $post = $_POST;

        }else{
            echo "<script>alert('エラー:ポストされていません')</script>";
        }
    ?>

    <div class="container" style="max-width: 800px;">
        <div class="row">
            <div class="col"></div>
            <div class="col-3">
                <p>メールアドレス</p>
                <p>氏名</p>
                <p>フリガナ</p>
                <p>性別</p>
                <p>生年月日</p>
                <p>電話番号</p>
                <p>住所</p>
                
            </div>
            <div class="col-4">
                <p><?=$post['mail']?></p>
                <p><?=$post['myouji']." ".$post['namae']?></p>
                <p><?=$post['h_myouji']." ".$post['h_namae']?></p>
                <p><?=$post['seibetuRadios']?></p>
                <p><?=$post['year']."年".$post['month']."月".$post['day']."日"?></p>
                <p><?=$post['tel']?></p>
                <p><?php echo "$post[juusyo]";if(isset($post['tatemono'])){echo "$post[tatemono]";}?></p>
            </div>
            <div class="col"></div>

        </div>


        <!-- ボタン-->
        <div class="text-center my-5">
            <p>上記で会員登録します。<br>よろしいですか？</p>
            
            <a class="btn btn-outline-dark col-6 my-3" href="register.php">登録する</a>
                
            <button type="button" class="btn btn-outline-dark col-6 my-3" onclick="history.back()">戻る</button>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>