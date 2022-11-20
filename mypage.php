<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>マイページ</title>
</head>
<body>
    <!-- ヘッダーの読み込み -->
    <?php include "header.php" ?>
    <?php 
        require_once "DBManager.php";
        require_once "function.php";
        $memberId = getMemberIdFromSession();
        
        $dbm = new DBManager();
        $member = $dbm->getMember($memberId);
    ?>

    <div class="container text-center mt-5">
        <h1 class="my-5">ようこそ！<?=$member['sei']." ".$member['mei']?>様！</h2>
        <a href="./member_info.php" class="btn btn-lg btn-primary my-5">会員情報確認</a><br>
        <a href="./buy_history.php" class="btn btn-lg btn-primary my-5">購入履歴一覧</a><br>
        <a href="./index.php" class="btn btn-lg btn-outline-primary my-5">トップページに戻る</a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

