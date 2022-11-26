<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/style1.css">

  <title>商品検索結果</title>
</head>
<body>
  <!-- ヘッダーの読み込み -->
  <?php include "header.php" ?>
  <!-- サイドバーの読み込み -->
  <?php include "side.php"?>

  <div id="container"class="container-fluid">

  <?php
    require_once "DBManager.php";
  ?>

    <h2 class="text-center mt-5 mb-3">検索キーワード:<?=$keyword?></h2>
    <h2 class="text-center mt-5 mb-3">検索一致件数:<?=$itemCnt?>件</h2>

    <!-- セレクトボックスの読み込み -->
    <label for="sortSelect" class="col-sm-4 control-label">並び替え</label>
    <select id="sortSelect" class="form-select mt-1 mb-5" name="sort" onchange="sortby(this.value)">
      <option value="newest" <?php if(!isset($_POST['order']) || $_POST['order']=="newst") echo 'selected'?>>最新順</option>
      <option value="lowest" <?php if(isset($_POST['order']) && $_POST['order']=="lowest") echo 'selected'?>>安い順</option>
      <option value="highest" <?php if(isset($_POST['order']) && $_POST['order']=="highest") echo 'selected'?>>高い順</option>
    </select>
    
    
    <!-- カード -->
    <div class="row gy-2">
      <!-- ループで回して商品情報を表示 -->
      <?php foreach($itemTbl as $row):?>
        <div class="col-6 col-md-3">

          <div class="card p-2" style="height:360px">
            
            <div class="image-area h-50">
              <a href="./item_detail.php?itemId=<?=$row['item_id']?>">
                <img class="w-100 h-100 rounded-3" style="object-fit:cover"  src="<?=$row['item_image']?>" alt="" >
              </a>
            </div>

            <div class ="content">
              <div class="card-wrap">
                <div class ="card-list">
                  <h3 class = "card-Title "><?=$row['item_name']?></h3>
                  <p class ="card-listText text-center">￥<?=number_format($row['sellingPrice'])?>(税込)</p>
                </div>
              </div>
            </div>

          </div>

        </div>
      <?php endforeach;?>

    </div>

    <!-- ページボタン -->
    
      <a type="button" href="./item_search_result.php?" class="btn btn-link mt-5">1</a>
      <a type="button" href="./item_search_result.php?" class="btn btn-link mt-5">2</a>
      <a type="button" href="./item_search_result.php?" class="btn btn-link mt-5">3</a>
      <a type="button" href="./item_search_result.php?" class="btn btn-link mt-5">4</a>
    

    <!-- 戻るボタン -->
    <div class="text-center mt-5 mb-5">
      <!-- 後でリンク先入れる -->
            <a type="button" href="./index.php?" class="btn btn-lg btn-outline-primary mt-5">トップページに戻る</a>
    </div>

  </div>
  <script>
    // 並び替えする
    function sortby(order){
      let tag = document.getElementById("order"); //サイドバーのinputタグを取得
      tag.value = order;
      let btn = document.getElementById("filter"); //絞り込みボタンを取得
      btn.click();//ボタンクリックしたときと同じ動作
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>