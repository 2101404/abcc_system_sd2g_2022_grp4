<?php
    require_once "DBManager.php";
    session_start();
    try{
        $dbm = new DBManager();

        $member = $dbm->loginCheck($_POST['mail'],$_POST['pass']);
    
        // ログイン成功したらセッションに会員IDとパスワードを保持する
        $_SESSION['memberId'] = $member['member_id'];
        $_SESSION['password'] = $member['pass'];
        
        // URLが保存されていればそのURLに遷移、なければトップページへ
        if(isset($_SESSION['prevURL']) && $_SESSION['prevURL'] != ""){
            $URL = $_SESSION['prevURL'];
            unset($_SESSION['prevURL']);
        }else{
            $URL = "./index.php";
        }
        header('Location: '.$URL);

    }catch(UnexpectedValueException $e){
        $message = $e->getMessage();
        echo "<script>alert('".$message."');history.back();</script>";
    }

    
    
?>

