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
    <label class="mb-3">◎メールアドレス</label>
    <input type="text" class="mb-3" placeholder="メールアドレス" name="meil">
    </div>

    <th><input type="text" maxlength="100" placeholder="山田太郎" id="name">
<th id="name_chk" style="display: none; color: red;">名前が漢字になっていません</th>
</tr>
<tr>

    <div class="mb-3">
    <label class="mb-3">◎パスワード　＊半角数字、英字のみ</label>
    <input type="password" class="mb-3" placeholder="パスワード" name="pass">
    </div>

    <div class="mb-3">
    <label class="mb-3">◎パスワード　（確認用）</label>
    <input type="password" class="mb-3" placeholder="上記と同様のパスワード" name="pass2">
    </div>

    <div class="mb-3">
    <label class="mb-3">◎氏名　＊全角のみ</label>
    <input type="text" class="form-control" placeholder="例：山田" name="myouj">
    <input type="text" class="form-control" placeholder="例：太郎" name="namae">
    </div>

    <div class="form-check">
    <p>◎性別</p>
    <input class="form-check-input" type="radio" name="exampleRadios">
    <label class="form-check-label" for="exampleRadios1">男性</label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios">
    <label class="form-check-label" for="exampleRadios2">女性</label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios">
    <label class="form-check-label" for="exampleRadios3">未指定</label>
    </div>

    <p>◎生年月日</p>
    <select class="mb-3" aria-label="Default select example" name="">
    <option selected>2024</option>
    <option value="1">2023</option>
    <option value="2">2022</option>
    <option value="3">2021</option>
    <p></p>
    </select>
    <select class="mb-3" aria-label="Default select example" name="">
    <option selected>2024</option>
    <option value="1">2023</option>
    <option value="2">2022</option>
    <option value="3">2021</option>
    <p></p>
    </select>
    <select class="mb-3" aria-label="Default select example" name="">
    <option selected>2024</option>
    <p></p>
    </select>

    <div class="mb-3">
    <label class="mb-3">◎電話番号　＊ハイフンなし半角</label>
    <input type="text" class="mb-3" name="tel" placeholder="例：080123456789">
    </div>

    <div class="mb-3">
    <label class="mb-3">◎住所</label>
    <input type="text" class="mb-3" name="juusyo" placeholder="例：福岡県福岡市〇〇区1-1-1">
    </div>

    <div class="mb-3">
    <label class="mb-3">◎建物名・部屋番号</label>
    <input type="text" class="mb-3" name="tatemono" placeholder="例：〇〇ビル 101号室">
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