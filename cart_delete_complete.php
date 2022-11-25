<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>買い物かご削除完了</title>
</head>
<body>
    <!-- ヘッダーの読み込み -->
    <?php include "header.php" ?>
    <?php 
        require_once "function.php";
        require_once "DBManager.php";
        // ログインしているか判定する
        $memberId = getMemberIdFromSession();
        $itemId = 0;
        if(isset($_POST['delete'])){
            $itemId = $_POST['delete'];
        }
        echo "<script>alert('$itemId')</script>";
        $dbm = new DBManager();
        $dbm->deleteCartItem($memberId,$itemId);

    ?>

    <div class="container">
        <h3>買い物かご削除完了</h3>
        <div class="text-center">

            <p class="text-center m-5">削除しました。</p>
            <a class="btn btn-primary m-5" href="./cart.php">買い物かごにもどる</a>
        </div>

    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>