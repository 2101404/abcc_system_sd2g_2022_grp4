<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <style>
        .form-control-plaintext{
            margin-left:10px;
            margin-bottom: 3%;
            
        }
        label{
            font-size:0.9rem;
            font-weight: bold;
            margin-bottom: 0;
        }

    </style>
    <title>登録確認</title>
</head>

<body>
    <!-- ヘッダーの読み込み -->
    <?php include "header.php" ?>
    <?php
        require_once "DBManager.php";
        if(isset($_POST)){
            $post = $_POST;
            $dbm = new DBManager();
            $member = $dbm->getMemberByMail($post['mail']);
            if(!empty($member)){
                echo "<script>alert('このメールアドレスは既に登録されています。別のメールアドレスを使用してください。');history.back();</script>";

            }

        }else{
            echo "<script>alert('エラー:ポストされていません')</script>";
        }
    ?>

    <div class="container" style="max-width: 800px;">
    <form action="./register3.php" method="post" >

        <div class="row m-3 p-3" >
            <div class="col-3"></div>
            <div class="col p-4" style="background-color:rgb(245,245,245);">
                <label>メールアドレス</label>
                <input type="text" readonly class="form-control-plaintext" id="mail" name="mail" value="<?=$post['mail']?>">
                <div class="row g-0">
                    <label>氏名</label>
                    <div class="col-2">
                        <input type="text" readonly class="form-control-plaintext" name="myouji" value="<?=$post['myouji']?>">
                    </div>
                    <div class="col-2">
                        <input type="text" readonly class="form-control-plaintext" name="namae" value="<?=$post['namae']?>">

                    </div>
                </div>
                <div class="row g-0">
                    <label>フリガナ</label>
                    <div class="col-2">
                        <input type="text" readonly class="form-control-plaintext" name="hmyouji" value="<?=$post['h_myouji']?>">
                    </div>
                    <div class="col-2">
                        <input type="text" readonly class="form-control-plaintext" name="hnamae" value="<?=$post['h_namae']?>">

                    </div>
                </div>
                <label>性別</label>
                <input type="text" readonly class="form-control-plaintext" name="seibetsu" value="<?=$post['seibetuRadios']?>">

                <label>生年月日</label>
                <input type="text" readonly class="form-control-plaintext" name="birth" value="<?=$post['year']."年".$post['month']."月".$post['day']."日"?>">

                <label>電話番号</label>
                <input type="text" readonly class="form-control-plaintext" name="tel" value="<?=$post['tel']?>">
                
                <label>住所</label>
                <input type="text" readonly class="form-control-plaintext" name="juusyo" value="<?php echo "$post[juusyo]";if(isset($post['tatemono'])){echo "$post[tatemono]";}?>">

                <input type="hidden" name="pass" value="<?=$post['pass']?>">
            </div>
            <div class="col-3"></div>

            

        </div>


        <!-- ボタン-->
        <div class="text-center my-5">
            <p>上記で会員登録します。<br>よろしいですか？</p>
            <input type="submit" class="btn btn-outline-dark col-6 my-3" value="登録する">
                
            <button type="button" class="btn btn-outline-dark col-6 my-3" onclick="history.back()">戻る</button>

        </div>
        
    </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>