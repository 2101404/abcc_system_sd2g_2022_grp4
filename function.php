<?php 
    // ログインしているか判定する
    function isLogin(){
        if(session_id() == ""){
            session_start();
        }
        if(isset($_SESSION['memberId']) && isset($_SESSION['password'])){
            return true;
        }else{
            return false;
        }
    }

    // ログインしていれば会員IDを返す、していなければログインページへ遷移させる
    function getMemberIdFromSession($isSaveURL = false, $URL = ""){
        if(isLogin() == true){
            return $_SESSION['memberId'];
        }else{
            
            if($isSaveURL == true){
                // trueの時ページ遷移する前に、URLをセッションに保存しておく
                if($URL != ""){
                    $prevURL = $URL;
                }else{
                    $prevURL = getURL();
                }
                $_SESSION['prevURL'] = $prevURL;
            }
            echo '<script>alert("ログインしてください");document.location.href= "./login.php";</script>';

            exit();
        }
    }

    // 現在のページのURLを返す
    function getURL(){
        return (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    }

    
?>