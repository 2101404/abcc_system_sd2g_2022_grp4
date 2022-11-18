<?php
    require_once "DBManager.php";
    $suryo = $_POST['suryo'];
    $size = $_POST['size'];
    $memberId = $_POST['memId'];
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