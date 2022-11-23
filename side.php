<link rel="stylesheet" href="./css/sideStyle.css">
<?php
  require_once "DBManager.php";
  require_once "function.php";

  // URLから検索キーワードの取得
  $keyword = "";
  if(isset($_GET['keyword'])){
    $keyword = $_GET['keyword'];
  }
  $itemTbl=[];
  $itemCnt = 0;
  // 絞り込みボタンをクリックしている時の処理
  if(isset($_POST['filter'])){
    echo "<script>alert('絞り込み検索します')</script>";

    $size = $_POST['size'];
    $color ="黒"; //POSTで取れるようにする
    $price = (int)$_POST['price'];
    $type = $_POST['rdoname'];
    $keyword =$_POST['txt1'];

    // 並び順の指定によってセットする変数を変える
    $orderby = $_POST['order'];
   
    switch ($orderby) {
      case 'newest':
        $order1 = 'item_registration_date';
        $order2 = 'DESC';
        break;
      case 'highest':
        $order1 = 'sellingPrice';
        $order2 = 'DESC';
        break;
      case 'lowest':
        $order1 = 'sellingPrice';
        $order2 = 'ASC';
        break;
      
      default:
        $order1 = 'item_registration_date';
        $order2 = 'DESC';
        break;
    }
    $dbm = new DBManager();
    $itemTbl = $dbm->searchItems($keyword,$size,$color,$price,$type,$order1,$order2);
  }else {

    // キーワードが入力されている場合検索を行う
    if(empty($itemTbl) && !empty($keyword)){
    echo "<script>alert('キーワード検索します')</script>";
      
      $dbm = new DBManager();
      $itemTbl = $dbm->searchItems($keyword);
    }
  }
   $itemCnt = count($itemTbl);
?>
<!-- サイドバーの表示 -->
<aside id="sub">
  <h2 class="text-center mt-5 mb-3">絞り込み</h2>

  <form name="sortForm"method="post">

    <!-- サイズの表示 -->
    <label class="col-sm-4 control-label">サイズ</label>
    <div class="col-sm-8">
      <select class="form-select" name="size">
      <option value="" <?php if(!isset($_POST['size']) || $_POST['size']=="") echo 'selected'?>></option>
      <option value="S" <?php if(isset($_POST['size']) && $_POST['size']=="S") echo 'selected'?>>S</option>
      <option value="M" <?php if(isset($_POST['size']) && $_POST['size']=="M") echo 'selected'?>>M</option>
      <option value="L" <?php if(isset($_POST['size']) && $_POST['size']=="L") echo 'selected'?>>L</option>
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
                <option value="" <?php if(!isset($_POST['price']) || $_POST['price']=="") echo 'selected'?>>選択してください。</option>
                <option value="10000" <?php if(isset($_POST['price']) && $_POST['price']=="10000") echo 'selected'?>>～10,000円</option>
                <option value="20000" <?php if(isset($_POST['price']) && $_POST['price']=="20000") echo 'selected'?>>10,000～20,000円</option>
                <option value="30000" <?php if(isset($_POST['price']) && $_POST['price']=="30000") echo 'selected'?>>20,000～30,000円</option>
                <option value="40000" <?php if(isset($_POST['price']) && $_POST['price']=="40000") echo 'selected'?>>30,000～40,000円</option>
                <option value="50000" <?php if(isset($_POST['price']) && $_POST['price']=="50000") echo 'selected'?>>40,000～50,000円</option>
                <option value="60000" <?php if(isset($_POST['price']) && $_POST['price']=="60000") echo 'selected'?>>50,000～60,000円</option>
                <option value="70000" <?php if(isset($_POST['price']) && $_POST['price']=="70000") echo 'selected'?>>60,000～70,000円</option>
                <option value="80000" <?php if(isset($_POST['price']) && $_POST['price']=="80000") echo 'selected'?>>70,000～80,000円</option>
                <option value="90000" <?php if(isset($_POST['price']) && $_POST['price']=="90000") echo 'selected'?>>80,000～90,000円</option>
                <option value="100000" <?php if(isset($_POST['price']) && $_POST['price']=="100000") echo 'selected'?>>90,000～</option>
            </select>
          </div>
        </div>

    <!-- プライス(価格)の表示 -->
    <label class="col-sm-8 control-label">価格タイプ</label>
    <ul>
      <div class="form-check">
        <input  type="radio" class="form-check-input" name="rdoname" id="rd1" value="all" <?php if(!isset($_POST['rdoname']) || $_POST['rdoname']=="all") echo 'checked'?>>
        <label class="form-check-label" for="rd1">すべてのアイテム</label>
      </div>

      <div class="form-check">
        <input  type="radio" class="form-check-input" name="rdoname" id="rd2" value="normal" <?php if(isset($_POST['rdoname']) && $_POST['rdoname']=="normal") echo 'checked'?>>
        <label class="form-check-label" for="rd2">通常商品</label>
      </div>

      <div class="form-check">
        <input  type="radio" class="form-check-input" name="rdoname" id="rd3" value="sale" <?php if(isset($_POST['rdoname'])  && $_POST['rdoname']=="sale") echo 'checked'?>>
        <label class="form-check-label" for="rd3">セール商品</label>
      </div>
    </ul>

    
    
      
    <input type="text"  class="form-control" id="txt1" name="txt1" value="<?php if(isset($_POST['txt1'])){echo $_POST['txt1'];}else{echo $keyword;} ?>" placeholder="キーワード">
    <input type="hidden" name="order" id="order">
    <button type="submit" class="btn btn-primary" id=filter value="filter" name="filter">この条件で絞り込み</button>
  </form>
  

  <!-- クリアの表示 -->
  <?php $URL = getURL(); ?>
  <a type="button" href="<?= $URL ?>" class="btn btn-link mt-2">すべての条件をクリア</a>
</aside>



