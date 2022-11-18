<!-- サイドバーの表示 -->
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
  <label class="col-sm-7 control-label">価格タイプ</label>
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