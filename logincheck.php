<?php
    require_once "DBManager.php";
    session_start();
    // POSTでIDとパスワード取ってきて、ログインする処理入れる


    
    // ログイン成功後の処理。会員IDとパスワードを仮で入れている
    $_SESSION['memberId'] = 1;
    $_SESSION['password'] = "password";
    

    // URLが保存されていればそのURLに遷移、なければトップページへ
    if(isset($_SESSION['prevURL']) && $_SESSION['prevURL'] != ""){
        $URL = $_SESSION['prevURL'];
        unset($_SESSION['prevURL']);
    }else{
        $URL = "./index.php";
    }
    header('Location: '.$URL);
?>

<!-- if(!isset($_SESSION['mail']) || !isset($_SESSION['username'])){
        header('Location: login.php');
    }else{
        header('Location: menu.php');
    }


    $dbManager = new DBManager();
    $user = $dbManager->loginCheck($_POST['mail'],$_POST['password']);
    if(empty($user)){
        // ログイン失敗
        header('location:login.php');
    }else{
        // ログイン成功
        $_SESSION['mail'] = $user['user_mail'];
        $_SESSION['username'] = $user['user_name'];
        header('Location: menu.php');

    } -->
