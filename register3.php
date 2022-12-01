<?php include "header.php";?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>登録完了</title>
</head>

<body>
    
    <?php 
        require_once "DBManager.php";
        $dbm = new DBManager();
        if(isset($_POST)){
            $dbm->insertmember($_POST['mail'],$_POST['pass'],$_POST['myouji'],$_POST['namae'],$_POST['hmyouji'],$_POST['hnamae'],$_POST['seibetsu'],$_POST['birth'],$_POST['tel'],$_POST['juusyo']);
            
        }
    ?>

    <div class="mt-5 pb-5">
    <h2 class="center-block text-center">登録しました</h2>
    </div>

    <div class="mt-5 d-grid gap-2 text-center">
        <a href="login.php">
            <button type="button" class="btn btn-outline-dark col-6">ログイン</button>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>