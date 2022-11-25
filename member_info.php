<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>お客様情報</title>
</head>
<body>
    <!-- ヘッダーの読み込み -->
    <?php include "header.php" ?>
    <?php 
        require_once "DBManager.php";
        require_once "function.php";
        // ログインしているか判定する
        $memberId = getMemberIdFromSession();
        $dbm = new DBManager();
        $member = $dbm->getMember($memberId);
    ?>
    <div class="container">
        <h3>お客様情報</h3>
        <div>
            <p><b>氏名</b></p>
            <p><?=$member['sei']." ".$member['mei'] ?></p>
            <p ><b>カナ氏名</b></p>
            <p><?=$member['hurigana_sei']." ".$member['hurigana_mei'] ?></p>
            <p><?=date("Y年 n月j日",strtotime($member['birth'])) ?></p>
            <p><?=$member['mail'] ?></p>
            <p><?=$member['phone_num'] ?></p>
            <p><?=$member['jusho'] ?></p>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>