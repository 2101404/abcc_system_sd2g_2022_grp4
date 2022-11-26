<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/registerStyle.css">

    <title>登録</title>
</head>

<body>
    <!-- ヘッダーの読み込み -->
    <?php include "header.php" ?>

    <div class="container" style="max-width: 800px;">
        <h2>新規会員登録</h2>
        <p class="requiredItem">◎...必須項目</p>

        <!-- フォームで囲う -->
        <form action="./register2.php" method="post">
           
            <!-- メールアドレス -->
            <div class="my-4">
                <label class="mb-2" for="meil"><span class="requiredItem">◎</span>メールアドレス</label>
                <input type="email" class="mb-3 form-control" placeholder="メールアドレス" name="meil" id="meil">
            </div>

            <!-- パスワード -->
            <div class="my-4">
                <label class="mb-2" for="pass"><span class="requiredItem">◎</span>パスワード　＊半角数字、英字のみ</label>
                <input type="password" class="mb-3 form-control" placeholder="パスワード" name="pass" id="pass">
            </div>

            <!-- パスワード確認 -->
            <div class="my-4">
                <label class="mb-2" for="pass2"><span class="requiredItem">◎</span>パスワード　（確認用）</label>
                <input type="password" class="mb-3 form-control" placeholder="上記と同様のパスワード" name="pass2" id="pass2">
            </div>

            <!-- 氏名 -->
            <div class="my-4">
                <label class="mb-2"><span class="requiredItem">◎</span>氏名　＊全角のみ</label>
                <div class="row gy-1">
                    <!-- 名字 -->
                    <div class="col-12 col-md-6">
                        <input type="text" class="form-control"  placeholder="例：山田" name="myouj">
                    </div>
                    
                    <!-- 名前 -->
                    <div class="col-12 col-md-6">
                        <input type="text" class="form-control" placeholder="例：太郎" name="namae">
                    </div>
                </div>
            </div>

            <!-- 性別 -->
            <div class="row gy-1 my-4">
                <p class="m-0"><span class="requiredItem">◎</span>性別</p>
                <div class="col-12 col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="seibetuRadios" id="male">
                        <label class="form-check-label" for="male">男性</label>
                    </div>
                </div>

                <div class="col-12 col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="seibetuRadios" id="female">
                        <label class="form-check-label" for="female">女性</label>
                    </div>
                </div>

                <div class="col-12 col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="seibetuRadios" id="unspecified" checked>
                        <label class="form-check-label" for="unspecified">未指定</label>
                    </div>
                </div>
            </div>

            <!-- 生年月日 -->
            <p class="my-2"><span class="requiredItem">◎</span>生年月日</p>
            <div class="input-group mb-3">
                <!-- 年 -->
                <select class=" form-select" aria-label="Default select example" name="" id="year">
                    <?php for($i=1922; $i<=2007; $i++): ?>
                        <?php if($i == 2000):?>
                            <option value="<?=$i;?>" selected><?=$i;?></option>
                        <?php else:?>
                            <option value="<?=$i;?>"><?=$i;?></option>
                        <?php endif;?>

                    <?php endfor;?>
                </select>
                <label class="input-group-text" for="year">年</label>
                    

                <!-- 月 -->
                <select class="form-select" aria-label="Default select example" name="" id="month">
                    <?php for($i=1; $i<=12; $i++): ?>
                        <option value="<?=$i;?>"><?=$i;?></option>
                    <?php endfor;?>
                    <p></p>
                </select>
                <label class="input-group-text" for="month">月</label>


                <!-- 日 -->
                <select class="form-select" aria-label="Default select example" name="" id="day">
                    <?php for($i=1; $i<=31; $i++): ?>
                        <option value="<?=$i;?>"><?=$i;?></option>
                    <?php endfor;?>

                    <p></p>
                </select>
                <label class="input-group-text" for="day">日</label>
            </div>

            <!-- 電話番号 -->
            <div class="mb-3">
                <label for="tel" class="my-2"><span class="requiredItem">◎</span>電話番号　＊ハイフンなし半角</label>
                <input type="text" class="form-control mb-3" name="tel" id="tel" placeholder="例：08012345678">
            </div>

            <!-- 住所 -->
            <div class="mb-3">
                <label for="juusyo" class="my-2"><span class="requiredItem">◎</span>住所</label>
                <input type="text" class="form-control " name="juusyo" id="juusyo" placeholder="例：福岡県福岡市〇〇区1-1-1">
            </div>

            <!-- 建物名 -->
            <div class="mb-3">
                <label for="tatemono" class="my-2">建物名・部屋番号</label>
                <input type="text" class="form-control " name="tatemono" id="tatemono" placeholder="例：〇〇ビル 101号室">
            </div>

            <div class="mt-5 text-center">
                    <input type="submit" class="btn btn-outline-dark col-6" value="新規会員登録">
            </div>
        </form>

        <div class="my-5 d-grid gap-2 text-center">
            <a href="login.php">
                <button type="button" class="btn btn-outline-dark col-6">ログイン画面に戻る</button>
            </a>
        </div>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>