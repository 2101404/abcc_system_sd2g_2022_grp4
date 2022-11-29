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
        <form action="./register2.php" method="post" name="register">
           
            <!-- メールアドレス -->
            <div class="my-4">
                <label class="mb-2" for="meil"><span class="requiredItem">◎</span>メールアドレス</label>
                <input type="email" class="form-control" placeholder="メールアドレス" name="mail" id="mail">
                <div class="error" id="errorMail"></div>
            </div>

            <!-- パスワード -->
            <div class="my-4">
                <label class="mb-2" for="pass"><span class="requiredItem">◎</span>パスワード　＊8文字以上24文字以下 半角英数字のみ</label>
                <input type="password" class="mb-3 form-control" placeholder="パスワード" name="pass" id="pass">
                <div class="error" id="errorPass"></div>

            </div>

            <!-- パスワード確認 -->
            <div class="my-4">
                <label class="mb-2" for="pass2"><span class="requiredItem">◎</span>パスワード　（確認用）</label>
                <input type="password" class="mb-3 form-control" placeholder="上記と同様のパスワード" name="pass2" id="pass2">
                <div class="error" id="errorPass2"></div>

            </div>

            <!-- 氏名 -->
            <div class="my-4">
                <label class="mb-2"><span class="requiredItem">◎</span>氏名　＊全角のみ</label>
                <div class="row gy-1">
                    <!-- 名字 -->
                    <div class="col-12 col-md-6">
                        <input type="text" class="form-control"  placeholder="例：山田" name="myouji" id="myouji">
                    </div>
                    
                    <!-- 名前 -->
                    <div class="col-12 col-md-6">
                        <input type="text" class="form-control" placeholder="例：太郎" name="namae" id="namae">
                    </div>
                </div>
                <div class="error" id="errorName"></div>

            </div>

            <!-- フリガナ -->
            <div class="my-4">
                <label class="mb-2"><span class="requiredItem">◎</span>フリガナ　＊全角のみ</label>
                <div class="row gy-1">
                    <!-- 名字 -->
                    <div class="col-12 col-md-6">
                        <input type="text" class="form-control"  placeholder="例：ヤマダ" name="h_myouji" id="h_myouji">
                    </div>
                    
                    <!-- 名前 -->
                    <div class="col-12 col-md-6">
                        <input type="text" class="form-control" placeholder="例：タロウ" name="h_namae" id="h_namae">
                    </div>
                </div>
                <div class="error" id="errorHName"></div>

            </div>

            <!-- 性別 -->
            <div class="row gy-1 my-4">
                <p class="m-0"><span class="requiredItem">◎</span>性別</p>
                <div class="col-12 col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="seibetuRadios" id="male" value="男性">
                        <label class="form-check-label" for="male">男性</label>
                    </div>
                </div>

                <div class="col-12 col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="seibetuRadios" id="female" value="女性">
                        <label class="form-check-label" for="female">女性</label>
                    </div>
                </div>

                <div class="col-12 col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="seibetuRadios" id="unspecified" value="未指定" checked>
                        <label class="form-check-label" for="unspecified">未指定</label>
                    </div>
                </div>
            </div>

            <!-- 生年月日 -->
            <p class="my-2"><span class="requiredItem">◎</span>生年月日</p>
            <div class="input-group">
                <!-- 年 -->
                <select class=" form-select" aria-label="Default select example" name="year" id="year">
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
                <select class="form-select" aria-label="Default select example" name="month" id="month">
                    <?php for($i=1; $i<=12; $i++): ?>
                        <option value="<?=$i;?>"><?=$i;?></option>
                    <?php endfor;?>
                    <p></p>
                </select>
                <label class="input-group-text" for="month">月</label>


                <!-- 日 -->
                <select class="form-select" aria-label="Default select example" name="day" id="day">
                    <?php for($i=1; $i<=31; $i++): ?>
                        <option value="<?=$i;?>"><?=$i;?></option>
                    <?php endfor;?>

                    <p></p>
                </select>
                <label class="input-group-text" for="day">日</label>
                
            </div>
            <div class="error mb-3" id="errorDate"></div>

            <!-- 電話番号 -->
            <div class="mb-3">
                <label for="tel" class="my-2"><span class="requiredItem">◎</span>電話番号　＊ハイフンなし半角</label>
                <input type="text" class="form-control mb-3" name="tel" id="tel" placeholder="例：08012345678">
                <div class="error" id="errorTel"></div>

            </div>

            <!-- 住所 -->
            <div class="mb-3">
                <label for="juusyo" class="my-2"><span class="requiredItem">◎</span>住所</label>
                <input type="text" class="form-control " name="juusyo" id="juusyo" placeholder="例：福岡県福岡市〇〇区1-1-1">
                <div class="error" id="errorJuusyo"></div>

            </div>

            <!-- 建物名 -->
            <div class="mb-3">
                <label for="tatemono" class="my-2">建物名・部屋番号</label>
                <input type="text" class="form-control " name="tatemono" id="tatemono" placeholder="例：〇〇ビル 101号室">
            </div>

            <div class="mt-5 text-center">
                <button type="button" class="btn btn-outline-dark col-6" onclick="check()">新規会員登録 </button>
                    <!-- <input type="submit" class="btn btn-outline-dark col-6" value="新規会員登録" name="submit"> -->
            </div>
        </form>

        <div class="my-5 d-grid gap-2 text-center">
            <a href="login.php">
                <button type="button" class="btn btn-outline-dark col-6">ログイン画面に戻る</button>
            </a>
        </div>
        
    </div>
    <script>
        function check(){
            let isError = false;

            if(!validationMail())isError = true;
            if(!validationPass())isError = true;
            if(!validationPass2())isError = true;
            if(!validationName())isError = true;
            if(!validationHName())isError = true;
            if(!validationDate())isError = true;
            if(!validationTel())isError = true;
            if(!validationJuusyo())isError = true;

            if(isError){
                window.scroll({top: 0, behavior: 'smooth'});
            }else{
                document.register.submit();
            }
        }

        function validationMail(){
            const regex = /^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/;
            let mail = document.getElementById('mail').value;
            let errorDiv = document.getElementById('errorMail');
            let isOK = regex.test(mail);
            if(isOK){
                errorDiv.innerHTML ="";
            }else{
                errorDiv.innerHTML ="メールアドレスの形式で入力してください";
            }

            return isOK;
        }

        

        function validationPass(){
            const regex = /^[a-zA-Z0-9.?/-]{8,24}$/;
            let pass = document.getElementById('pass').value;
            let errorDiv = document.getElementById('errorPass');
            let isOK = regex.test(pass);
            if(isOK){
                errorDiv.innerHTML ="";
            }else{
                errorDiv.innerHTML ="8文字以上24文字以下 半角英数字で入力してください";
            }

            return isOK;
        }
        function validationPass2(){
            let pass = document.getElementById('pass').value;
            let pass2 = document.getElementById('pass2').value;
            let errorDiv = document.getElementById('errorPass2');
            let isOK = (pass == pass2);
            if(isOK){
                errorDiv.innerHTML ="";
            }else{
                errorDiv.innerHTML ="パスワードが一致しません";
            }

            return isOK;
        }
        function validationName(){
            const regex = /[^\x01-\x7E]+/;
            let myouji = document.getElementById('myouji').value;
            let namae = document.getElementById('namae').value;

            let errorDiv = document.getElementById('errorName');
            let isOK = regex.test(myouji);
            let isOK2 = regex.test(namae);
            if(isOK && isOK2){
                errorDiv.innerHTML ="";
            }else{
                errorDiv.innerHTML ="全角で入力してください";
            }

            return isOK;
        }
        function validationHName(){
            const regex = /[^\x01-\x7E]+/;
            let myouji = document.getElementById('h_myouji').value;
            let namae = document.getElementById('h_namae').value;

            let errorDiv = document.getElementById('errorHName');
            let isOK = regex.test(myouji);
            let isOK2 = regex.test(namae);
            if(isOK && isOK2){
                errorDiv.innerHTML ="";
            }else{
                errorDiv.innerHTML ="全角で入力してください";
            }

            return isOK;
        }

        function validationDate(){
            let year = document.getElementById('year').value;
            let month = document.getElementById('month').value;
            let day = document.getElementById('day').value;
            let strdate = year +"/" + month +"/"+ day;
            let date = new Date(strdate);
            let isOK = true;
            if(year != date.getFullYear() || month != date.getMonth() + 1 || day != date.getDate()){
                isOK = false;
            }

            let errorDiv = document.getElementById('errorDate');
            if(isOK){
                errorDiv.innerHTML ="";
            }else{
                errorDiv.innerHTML ="正しい生年月日を入力してください";
            }

            return isOK;
        }

        function validationTel(){
            const regex = /^0[0-9]{9,10}$/;
            let tel = document.getElementById('tel').value;
            let errorDiv = document.getElementById('errorTel');
            let isOK = regex.test(tel);
            if(isOK){
                errorDiv.innerHTML ="";
            }else{
                errorDiv.innerHTML ="正しい電話番号を入力してください";
            }

            return isOK;
        }


        function validationJuusyo(){
            let juusyo = document.getElementById('juusyo').value;
            juusyo = juusyo.replace(/( |　)/g, '');
            let errorDiv = document.getElementById('errorJuusyo');
            let isOK = juusyo ? true : false;
            if(isOK){
                errorDiv.innerHTML ="";
            }else{
                errorDiv.innerHTML ="住所が空白です";
            }

            return isOK;
        }


    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>