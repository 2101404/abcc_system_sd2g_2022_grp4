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

    <!-- サイドバーの表示 -->
    <header id="header"></header>

<aside id="sub">
  <h2 class="text-center mt-5 mb-3">絞り込み</h2>

    <!-- サイズの表示 -->
    <label class="col-sm-4 control-label">サイズ</label>
    <div class="col-sm-8">
      <select class="form-select" name="num">
      <option selected></option>
      <option value="1">S</option>
      <option value="2">M</option>
      <option value="3">L</option>
      </select>
    </div>

  <!-- カラーの表示 -->
  <label class="col-sm-4 control-label">カラー</label>
  <div class="col-sm-8">
  <ul>
  <a type="button" href="./item_search_result.php?" class="btn">🔴🔵🟡⚪️🟢⚫️🟣🟠</a>
  </ul>

<!-- 価格の表示 -->
  <div class="form-group">
		    <label class="col-sm-4 control-label">価格</label>
		    <div class="col-sm-8">
			    <select class="from-select" name="price">
			        <option value="">選択してください。</option>
			        <option value="10000">～10,000円</option>
			        <option value="20000">10,000～20,000円</option>
			        <option value="30000">20,000～30,000円</option>
			        <option value="40000">30,000～40,000円</option>
			        <option value="50000">40,000～50,000円</option>
			        <option value="60000">50,000～60,000円</option>
			        <option value="70000">60,000～70,000円</option>
			        <option value="80000">70,000～80,000円</option>
			        <option value="90000">80,000～90,000円</option>
			        <option value="100000">90,000～</option>
          </select>
        </div>
      </div>

  <!-- プライス(価格)の表示 -->
  <label class="col-sm-8 control-label">価格タイプ</label>
  <ul>
    <div class="form-check">
      <input  type="radio" class="form-check-input" name="rdoname" id="rd1">
      <label class="form-check-label" for="rd1">すべてのアイテム</label>
    </div>

    <div class="form-check">
      <input  type="radio" class="form-check-input" name="rdoname" id="rd2">
      <label class="form-check-label" for="rd2">通常商品</label>
    </div>

    <div class="form-check">
      <input  type="radio" class="form-check-input" name="rdoname" id="rd3">
      <label class="form-check-label" for="rd3">セール商品</label>
    </div>
  </ul>

   <!-- キーワードの表示 -->
  <ul>
  <input type="text"  class="form-control" id="txt1" placeholder="キーワード">
  </ul>

  <!-- ボックスの表示 -->
  <ul>

  </ul>

  <!-- クリアの表示 -->
  <a type="button" href="./item_search_result.php?" class="btn btn-link mt-2">すべての条件をクリア</a>
</aside>

    <!-- ヘッダーの読み込み -->
    <?php include "header.php" ?>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>