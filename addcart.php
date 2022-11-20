<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>商品追加</title>
</head>
<body>
    <!-- ヘッダーの読み込み -->
    <?php include "header.php" ?>

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

    ?>
    <div class="text-center my-5"><p>
        
    <?php
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
            echo "</p>";
            echo "<a href=".$url."  class='btn btn-primary'>戻る</a>";
        }
    ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
