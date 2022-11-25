<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>ログイン</title>

</head>
<body>
    <!-- ヘッダーの読み込み -->
    <?php include "header.php" ?>
    <div class="container" style="max-width:500px">
        <h2>ログイン</h2>
        <form action="./logincheck.php" method="post">
            <div class="my-4">
                <label for="mail">メールアドレス</label>
                <input type="text"  class="form-control" name="mail" id="mail" placeholder="メールアドレス" value="abc@example.com">
                
            </div>
            <div id="result"></div>
            
            <div class="my-5">
                <label for="pass">パスワード</label>
                <input type="password"  class="form-control" name="pass" id="pass" placeholder="パスワード" value="12345">
            </div>
            <div class="text-center">

                <input type="submit" class="btn btn-outline-primary my-4" value="ログイン"><br>
                <a href="register.php" class="btn btn-outline-primary my-4">新規会員登録</a>
            </div>
        </form>
    </div>

    <script src="./mailValidate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>