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

    <title>注文完了</title>
</head>
<body>
    <?php 
        require_once "function.php";
        // ログインしているか判定する
        $memberId = getMemberIdFromSession();
    ?>


    <?php
        require_once "DBManager.php";
        $dbm = new DBManager();
        $dbm->buyItems($memberId);
    ?>

    <div class="container">
        <h3 >注文完了</h3>
        
        <div class="text-center m-5">
            <p class="m-5">確定しました。</p>
            <a class="btn btn-primary" href="./index.php">トップページに戻る</a>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>