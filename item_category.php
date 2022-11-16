<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style1.css">

    <title>カテゴリー別商品</title>
</head>
<body>
    <!-- ヘッダーの読み込み -->
    <?php include "header.php" ?>

     <!-- サイドバーの読み込み -->
     <?php include "sade.php" 
     ?>

    <h2>カテゴリー別商品</h2>
    <h3>
        <?php 
            $category = $_GET['category'];
            echo "カテゴリー名:$category";
        ?>
    </h3>

     <!-- セレクトボックスの読み込み -->
     <label class="col-sm-4 control-label">並び替え</label>
    <div class="text-center mt-5 mb-5">
    <select class="form-select" name="num">
      <option selected>並び替え</option>
      <option value="1">最新順</option>
      <option value="2">安い順</option>
      <option value="2">高い順</option>
    </select>
    </div>

    <a href="./item_detail.php">商品詳細</a>
    <!-- 戻るボタン -->
		<div class="text-center mt-5 mb-5">
            <a type="button" href="./index.php?" class="btn btn-lg btn-outline-primary mt-5">トップページに戻る</a>
		</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>