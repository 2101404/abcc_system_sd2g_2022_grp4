<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style1.css">

    <title>商品検索結果</title>
</head>
<body>
    <!-- ヘッダーの読み込み -->
    <?php include "header.php" ?>
    
    
    <!-- サイドバーの読み込み -->
    <?php include "side.php"?>

    <div class="container-fluid p-0" style="width:max-content;margin-left:250px">

        <h2 class="text-center mt-5 mb-3">検索キーワード:</h2>
    <h2 class="text-center mt-5 mb-3">検索一致件数:18件</h2>

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

    <!-- カード -->
    <div class="row">
      <div class="col-4">
        <div class ="content">
          <div class="card-wrap">
            <div class ="card-list">
            <button type="button"><img href="./item_detail.php?" class="image-test" src="./imgs/sample/noimage.png" width="80%" alt="" ></button>
              <h2 class = "card-listTitel">洗える ストレッチ 2パンツスーツ</h2>
              <p class ="card-listText">￥1234567890(税込)</p>
            </div>
          </div>
        </div>
      </div>

    <div class="col-4">
      <div class ="content">
        <div class="card-wrap">
          <div class ="card-list">
            <button type="button"><img href="./item_detail.php?" class="image-test" src="./imgs/sample/noimage.png" width="80%" alt="" ></button>
            <h2 class = "card-listTitel">洗える ストレッチ 2パンツスーツ</h2>
            <p class ="card-listText">￥10000(税込)</p>
          </div>
        </div>
      </div>
    </div>
  
    <div class="col-4">
      <div class ="content">
        <div class="card-wrap">
          <div class ="card-list">
            <button type="button"><img href="./item_detail.php?" class="image-test" src="./imgs/sample/noimage.png" width="80%" alt="" ></button>
            <h2 class = "card-listTitel">洗える ストレッチ 2パンツスーツ</h2>
            <p class ="card-listText">￥10000(税込)</p>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="row">
      <div class="col-4">
        <div class ="content">
          <div class="card-wrap">
            <div class ="card-list">
            <button type="button"><img href="./item_detail.php?" class="image-test" src="./imgs/sample/noimage.png" width="80%" alt="" ></button>
              <h2 class = "card-listTitel">洗える ストレッチ 2パンツスーツ</h2>
              <p class ="card-listText">￥10000(税込)</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class ="content">
          <div class="card-wrap">
            <div class ="card-list">
            <button type="button"><img href="./item_detail.php?" class="image-test" src="./imgs/sample/noimage.png" width="80%" alt="" ></button>
              <h2 class = "card-listTitel">洗える ストレッチ 2パンツスーツ</h2>
              <p class ="card-listText">￥10000(税込)</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class ="content">
          <div class="card-wrap">
            <div class ="card-list">
            <button type="button"><img href="./item_detail.php?" class="image-test" src="./imgs/sample/noimage.png" width="80%" alt="" ></button>
              <h2 class = "card-listTitel">洗える ストレッチ 2パンツスーツ</h2>
              <p class ="card-listText">￥10000(税込)</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-4">
        <div class ="content">
          <div class="card-wrap">
            <div class ="card-list">
              <button type="button"><img href="./item_detail.php?" class="image-test" src="./imgs/sample/noimage.png" width="80%" alt="" ></button>
              <h2 class = "card-listTitel">洗える ストレッチ 2パンツスーツ</h2>
              <p class ="card-listText">￥10000(税込)</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class ="content">
          <div class="card-wrap">
            <div class ="card-list">
              <button type="button"><img href="./item_detail.php?" class="image-test" src="./imgs/sample/noimage.png" width="80%" alt="" ></button>
              <h2 class = "card-listTitel">洗える ストレッチ 2パンツスーツ</h2>
              <p class ="card-listText">￥10000(税込)</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class ="content">
          <div class="card-wrap">
            <div class ="card-list">
              <button type="button"><img href="./item_detail.php?" class="image-test" src="./imgs/sample/noimage.png" width="80%" alt="" ></button>
              <h2 class = "card-listTitel">洗える ストレッチ 2パンツスーツ</h2>
              <p class ="card-listText">￥10000(税込)</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-4">
        <div class ="content">
          <div class="card-wrap">
            <div class ="card-list">
              <button type="button"><img href="./item_detail.php?" class="image-test" src="./imgs/sample/noimage.png" width="80%" alt="" ></button>
              <h2 class = "card-listTitel">洗える ストレッチ 2パンツスーツ</h2>
              <p class ="card-listText">￥10000(税込)</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class ="content">
          <div class="card-wrap">
            <div class ="card-list">
              <button type="button"><img href="./item_detail.php?" class="image-test" src="./imgs/sample/noimage.png" width="80%" alt="" ></button>
              <h2 class = "card-listTitel">洗える ストレッチ 2パンツスーツ</h2>
              <p class ="card-listText">￥10000(税込)</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class ="content">
          <div class="card-wrap">
            <div class ="card-list">
              <button type="button"><img href="./item_detail.php?" class="image-test" src="./imgs/sample/noimage.png" width="80%" alt="" ></button>
              <h2 class = "card-listTitel">洗える ストレッチ</h2>
              <p class ="card-listText">￥10000(税込)</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-4">
        <div class ="content">
          <div class="card-wrap">
            <div class ="card-list">
              <button type="button"><img href="./item_detail.php?" class="image-test" src="./imgs/sample/noimage.png" width="80%" alt="" ></button>
              <h2 class = "card-listTitel">洗える ストレッチ 2パンツスーツ</h2>
              <p class ="card-listText">￥10000(税込)</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class ="content">
          <div class="card-wrap">
            <div class ="card-list">
              <button type="button"><img href="./item_detail.php?" class="image-test" src="./imgs/sample/noimage.png" width="80%" alt="" ></button>
              <h2 class = "card-listTitel">洗える ストレッチ 2パンツスーツ</h2>
              <p class ="card-listText">￥10000(税込)</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class ="content">
          <div class="card-wrap">
            <div class ="card-list">
              <button type="button"><img href="./item_detail.php?" class="image-test" src="./imgs/sample/noimage.png" width="80%" alt="" ></button>
              <h2 class = "card-listTitel">洗える ストレッチ 2パンツスーツ 紺ストライプ JOURNAL WORKS スリム</h2>
              <p class ="card-listText">￥10000(税込)</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-4">
        <div class ="content">
          <div class="card-wrap">
            <div class ="card-list">
              <button type="button"><img href="./item_detail.php?" class="image-test" src="./imgs/sample/noimage.png" width="80%" alt="" ></button>
              <h2 class = "card-listTitel">洗える ストレッチ 2パンツスーツ</h2>
              <p class ="card-listText">￥10000(税込)</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class ="content">
          <div class="card-wrap">
            <div class ="card-list">
              <button type="button"><img href="./item_detail.php?" class="image-test" src="./imgs/sample/noimage.png" width="80%" alt="" ></button>
              <h2 class = "card-listTitel">洗える ストレッチ 2パンツスーツ</h2>
              <p class ="card-listText">￥10000(税込)</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class ="content">
          <div class="card-wrap">
            <div class ="card-list">
              <button type="button"><img href="./item_detail.php?" class="image-test" src="./imgs/sample/noimage.png" width="80%" alt="" ></button>
              <h2 class = "card-listTitel">洗える ストレッチ 2パンツスーツ</h2>
              <p class ="card-listText">￥10000(税込)</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ページボタン -->
    <div class="text-right mt-5 mb-5">
      <a type="button" href="./item_search_result.php?" class="btn btn-link mt-5">1</a>
      <a type="button" href="./item_search_result.php?" class="btn btn-link mt-5">2</a>
      <a type="button" href="./item_search_result.php?" class="btn btn-link mt-5">3</a>
      <a type="button" href="./item_search_result.php?" class="btn btn-link mt-5">4</a>
    </div>

    <!-- 戻るボタン -->
		<div class="text-center mt-5 mb-5">
			<!-- 後でリンク先入れる -->
            <a type="button" href="./index.php?" class="btn btn-lg btn-outline-primary mt-5">トップページに戻る</a>
		</div>

    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>