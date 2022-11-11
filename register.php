
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>登録</title>
</head>

<body>
    <!-- ヘッダーの読み込み -->
    <?php include "header.php" ?>
    <h2>新規会員登録</h2>
    <p>◎...必須項目</p>

    <form action="register2.php" method="post" class="form_log">
    <p>メールアドレス</p>
    <input type="email" name="email" class="textbox un" placeholder="メールアドレス"><br>
    <p>パスワード ＊半角数字、英字のみ</p>
    <input type="password" name="password" class="textbox pass" placeholder="パスワード"><br>
    <p>パスワード （確認用）</p>
    <input type="password" name="password" class="textbox pass" placeholder="パスワード"><br>
    </form>

    <div class="mt-5 d-grid gap-2 text-center">
        <a href="register2.php">
            <button type="button" class="btn btn-outline-dark col-6">新規会員登録</button>
        </a>
    </div>

    <div class="mt-5 d-grid gap-2 text-center">
        <a href="login.php">
            <button type="button" class="btn btn-outline-dark col-6">ログイン画面に戻る</button>
        </a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>