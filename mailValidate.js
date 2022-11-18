function mailValidate(mailInput,output){
    /*入力フォームの要素*/
    var form = document.getElementById(mailInput);
    /*結果出力用の要素*/
    var result=document.getElementById(output);
    /*メールアドレスのパターン 正規表現*/
    var pattern = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]+.[A-Za-z0-9]+$/;

    /*フォーム入力のイベントハンドラ*/
    form.addEventListener("input", (e) => {
        /*メールアドレスのパターンにマッチするかチェック*/
        if (pattern.test(form.value)) {
            /*パターンにマッチした場合*/
            result.textContent = "メールアドレスです";
        } else {
            /*パターンにマッチしない場合*/
            result.textContent = "メールアドレスではありません";
        }
    })    
}