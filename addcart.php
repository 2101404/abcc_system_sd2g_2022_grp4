<?php
    require_once "DBManager.php";
    require_once "function.php";
    
    // ログインしていない場合、ログインページへ遷移。その後商品ページに戻す。
    $URL="";
    if(isset($_POST['URL'])){
        $URL=$_POST['URL'];
    }
    $memberId = getMemberIdFromSession(true,$URL);
    
    $suryo = $_POST['suryo'];
    $size = $_POST['size'];
    $itemId = $_POST['itemId'];
    $tourokubi = date("Y-m-d");
    
    $url = "item_detail.php?itemid=".$itemId;

    
    try{
        if($size == ""){
            throw new UnexpectedValueException("サイズを選択してください");
        }

        $dbm = new DBManager();
        $dbm->addToCart($memberId,$itemId,$suryo,$tourokubi,$size);
        header('Location: '.$url);
    }catch(PDOException $ex){
        echo "買い物かごに入れることが出来ませんでした。<br>
        買い物かごに同じ商品を入れていないか確認してください。";
        
    }catch(UnexpectedValueException $ex){
        echo $ex->getMessage();
    }catch(Exception $ex){
        echo 'エラーが発生しました。';
    }finally{
        echo "<br>";
        echo "<a href=".$url.">戻る</a>";
    }
?>