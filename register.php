
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

    <div class="mb-3">
    <label action="register2.php" class="form_log">◎メールアドレス</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="メールアドレス">
    </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">◎パスワード　＊半角数字、英字のみ</label>
    <input type="password" class="form_log" id="exampleInputPassword1" placeholder="パスワード">
    </div>

    <div class="mb-3">
    <label for="inputPassword5" class="form-label">◎パスワード　（確認用）</label>
    <input type="password" class="form_log" id="exampleInputPassword1" placeholder="上記と同様のパスワード">
    </div>

    <div class="mb-3">
    <label action="register2.php" class="form_log">◎氏名　＊全角のみ</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="例：山田">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="例：太郎">
    </div>

    <div class="form-check">
    <p>◎性別</p>
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
    <label class="form-check-label" for="exampleRadios1">男性</label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    <label class="form-check-label" for="exampleRadios2">女性</label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    <label class="form-check-label" for="exampleRadios3">未指定</label>
    </div>

    <p>◎生年月日</p>
    <select class="form-select" aria-label="Default select example">
    <option selected>2024</option>
    <option value="1">2023</option>
    <option value="2">2022</option>
    <option value="3">2021</option>
    </select>

    <div class="mb-3">
    <label action="register2.php" class="form_log">◎電話番号　＊ハイフンなし半角</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="例：080123456789">
    </div>

    <div class="mb-3">
    <label action="register2.php" class="form_log">◎住所</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="例：福岡県福岡市〇〇区1-1-1">
    </div>

    <div class="mb-3">
    <label action="register2.php" class="form_log">◎建物名・部屋番号</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="例：〇〇ビル 101号室">
    </div>

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