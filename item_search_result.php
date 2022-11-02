<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>商品検索結果</title>
</head>
<body>
    <!-- ヘッダーの読み込み -->
    <?php include "header.php" ?>

    <h2>商品検索結果</h2>
    <form action="index.php" method="POST">
    検索キーワード:<input type="text" name="key"><br>
    検索一致件数:<input type="text" name="ken"><br>
    </form>

    <!-- セレクトボックスの読み込み -->
    <?php require '../index.php';?>
    <p>並び順</p>
    <from action="index.php" method="POST">
        <select name="seat">
            <option value="最新順">最新順</option>
            <option value="サイズ順">サイズ順</option>
    </select>
    <p><input type="submit" value="確定"></p>
    </from>
    <?php require '../item_search_result.php';?>

    <!-- 商品の読み込み -->
    <div class=" p-3 frame">
			<div class="row">
			<?php
					$itemImg =['./imgs/sample/noimage.png','./imgs/sample/noimage.png','./imgs/sample/noimage.png','./imgs/sample/noimage.png','./imgs/sample/noimage.png','./imgs/sample/noimage.png','./imgs/sample/noimage.png','./imgs/sample/noimage.png','./imgs/sample/noimage.png','./imgs/sample/noimage.png','./imgs/sample/noimage.png','./imgs/sample/noimage.png','./imgs/sample/noimage.png','./imgs/sample/noimage.png','./imgs/sample/noimage.png','./imgs/sample/noimage.png','./imgs/sample/noimage.png','./imgs/sample/noimage.png','./imgs/sample/noimage.png','./imgs/sample/noimage.png',];
					$text =['商品1','商品2','商品3','商品4','商品5','商品6','商品7','商品8','商品9','商品10','商品11','商品12','商品13','商品14','商品15','商品16','商品17','商品18','商品19','商品20'];
					$itemLink =['100000','100000','100000','100000','100000','100000','100000','100000','100000','100000','100000','100000','100000','100000','100000','100000','100000','100000','100000','100000',];
					showCategory($itemLink,$itemImg,$text);
				?>

    <!-- ボタン -->
	<div class="text-center mt-5 mb-5">
		<button type="button" class="btn btn-lg btn-outline-primary">トップページに戻る</button>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>