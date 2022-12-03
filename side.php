<link rel="stylesheet" href="./css/sideStyle.css">
<?php
  require_once "DBManager.php";
  require_once "function.php";

  // 初期値を入れる
  $page = 1;
  $keyword = "";
  $category = "all";
  $size = "";
  $color = [];
  $price = 0;
  $type = "all";
  $order="item_registration_date";
  $direction ="DESC";

  // URLから検索キーワードの取得
  if(isset($_GET['keyword'])){
    $keyword = $_GET['keyword'];
  }

  //URLにカテゴリー名がセットされていれば取得する
  if(isset($_GET['category'])){
    $category = $_GET['category'];
  }

  // URLからpageの取得
  if(isset($_GET['page'])){
    $page = $_GET['page'];
  }

  $itemTbl=[];
  $itemCnt = 0;

  // 絞り込みボタンをクリックした場合検索する
  if(isset($_GET['filter'])){

    if(isset($_GET['colors'])){
      $color = $_GET['colors']; 
    }else{
      $color = [];
    }
    

    $price = (int)$_GET['price'];
    $type = $_GET['rdoname'];
    $keyword =$_GET['txt1'];

    // 並び順の指定によってセットする変数を変える
    $orderby = $_GET['order'];
   
    switch ($orderby) {
      case 'newest':
        $order = 'item_registration_date';
        $direction = 'DESC';
        break;
      case 'highest':
        $order = 'sellingPrice';
        $direction = 'DESC';
        break;
      case 'lowest':
        $order = 'sellingPrice';
        $direction = 'ASC';
        break;
      
      default:
        $order = 'item_registration_date';
        $direction = 'DESC';
        break;
    }
  }
  // echo "<script>alert('page:$page key:$keyword category:$category size:$size price:$price type:$type order:$order direction:$direction')</script>";
  $SHOWLIMIT = 48;
  $dbm = new DBManager();
  $itemTbl = $dbm->searchItems($page,$keyword,$category,$size,$color,$price,$type,$order,$direction,$SHOWLIMIT);
  $cnt = $dbm->countSearchItems($keyword,$category,$size,$color,$price,$type);

  
  $itemCnt = $cnt;
  $totalPage = ceil($cnt / $SHOWLIMIT); // 総件数÷1ページに表示する件数 を切り上げたものが総ページ数
  
  function isCheckColor($value){
    if(isset($_GET['colors'])){
      if(in_array($value,$_GET['colors'])){
        echo "checked";
      }
      
    }
      
  }
?>

<!-- サイドバーの表示 -->
<aside id="sub" >
  <h2 class="text-center mt-5 mb-3">絞り込み</h2>

  <form name="sortForm"method="get">

    <!-- サイズの表示 -->
    <!-- <label class=" control-label">サイズ</label>
      <select class="form-select mb-3" name="size">
      <option value="" <?php if(!isset($_GET['size']) || $_GET['size']=="") echo 'selected'?>></option>
      <option value="S" <?php if(isset($_GET['size']) && $_GET['size']=="S") echo 'selected'?>>S</option>
      <option value="M" <?php if(isset($_GET['size']) && $_GET['size']=="M") echo 'selected'?>>M</option>
      <option value="L" <?php if(isset($_GET['size']) && $_GET['size']=="L") echo 'selected'?>>L</option>
      </select> -->

    <!-- カラーの表示 -->
    <label class="control-label">カラー</label>
    <div class="d-flex">
      <input type="checkbox" id="check1" name="colors[]" value="ブラック" <?php isCheckColor("ブラック")?>>
      <label for="check1" style="background-color: black;"></label>

      <input type="checkbox" id="check2" name="colors[]" value="グレー" <?php isCheckColor("グレー")?>>
      <label for="check2" style="background-color: gray;"></label>

      <input type="checkbox" id="check3" name="colors[]" value="ホワイト" <?php isCheckColor("ホワイト")?>>
      <label for="check3" style="background-color: white;"></label>

      <input type="checkbox" id="check4" name="colors[]" value="ネイビー" <?php isCheckColor("ネイビー")?>>
      <label for="check4" style="background-color: navy;"></label>

      <input type="checkbox" id="check5" name="colors[]" value="ブラウン" <?php isCheckColor("ブラウン")?>>
      <label for="check5" style="background-color: brown;"></label>
    </div>
    <div class="d-flex mb-3">
      <input type="checkbox" id="check6" name="colors[]" value="ベージュ" <?php isCheckColor("ベージュ")?>>
      <label for="check6" style="background-color:burlywood;"></label>

      <input type="checkbox" id="check7" name="colors[]" value="グリーン" <?php isCheckColor("グリーン")?>>
      <label for="check7" style="background-color:green;"></label>

      <input type="checkbox" id="check8" name="colors[]" value="オレンジ" <?php isCheckColor("オレンジ")?>>
      <label for="check8" style="background-color: orange;"></label>

      <input type="checkbox" id="check9" name="colors[]" value="レッド" <?php isCheckColor("レッド")?>>
      <label for="check9" style="background-color:red;"></label>

      <input type="checkbox" id="check10" name="colors[]" value="イエロー" <?php isCheckColor("イエロー")?>>
      <label for="check10" style="background-color:yellow;"></label>
    </div>

    <!-- 価格の表示 -->
    <div class="form-group mb-3">
      <label class="control-label" for="price">価格</label>
        <select class="form-select" name="price" id="price">
            <option value="" <?php if(!isset($_GET['price']) || $_GET['price']=="") echo 'selected'?>>選択してください。</option>
            <option value="10000" <?php if(isset($_GET['price']) && $_GET['price']=="10000") echo 'selected'?>>～10,000円</option>
            <option value="20000" <?php if(isset($_GET['price']) && $_GET['price']=="20000") echo 'selected'?>>10,000～20,000円</option>
            <option value="30000" <?php if(isset($_GET['price']) && $_GET['price']=="30000") echo 'selected'?>>20,000～30,000円</option>
            <option value="40000" <?php if(isset($_GET['price']) && $_GET['price']=="40000") echo 'selected'?>>30,000～40,000円</option>
            <option value="50000" <?php if(isset($_GET['price']) && $_GET['price']=="50000") echo 'selected'?>>40,000～50,000円</option>
            <option value="60000" <?php if(isset($_GET['price']) && $_GET['price']=="60000") echo 'selected'?>>50,000～60,000円</option>
            <option value="70000" <?php if(isset($_GET['price']) && $_GET['price']=="70000") echo 'selected'?>>60,000～70,000円</option>
            <option value="80000" <?php if(isset($_GET['price']) && $_GET['price']=="80000") echo 'selected'?>>70,000～80,000円</option>
            <option value="90000" <?php if(isset($_GET['price']) && $_GET['price']=="90000") echo 'selected'?>>80,000～90,000円</option>
            <option value="100000" <?php if(isset($_GET['price']) && $_GET['price']=="100000") echo 'selected'?>>90,000～</option>
        </select>
    </div>

    <!-- プライス(価格)の表示 -->
    <label class="control-label ">価格タイプ</label>
    <ul>
      <div class="form-check">
        <input  type="radio" class="form-check-input" name="rdoname" id="rd1" value="all" <?php if(!isset($_GET['rdoname']) || $_GET['rdoname']=="all") echo 'checked'?>>
        <label class="form-check-label" for="rd1">すべてのアイテム</label>
      </div>

      <div class="form-check">
        <input  type="radio" class="form-check-input" name="rdoname" id="rd2" value="normal" <?php if(isset($_GET['rdoname']) && $_GET['rdoname']=="normal") echo 'checked'?>>
        <label class="form-check-label" for="rd2">通常商品</label>
      </div>

      <div class="form-check">
        <input  type="radio" class="form-check-input" name="rdoname" id="rd3" value="sale" <?php if(isset($_GET['rdoname'])  && $_GET['rdoname']=="sale") echo 'checked'?>>
        <label class="form-check-label" for="rd3">セール商品</label>
      </div>
    </ul>

    
    
    <!-- キーワード -->
    <input type="text"  class="form-control my-4" id="txt1" name="txt1" value="<?php if(isset($_GET['txt1'])){echo $_GET['txt1'];}else{echo $keyword;} ?>" placeholder="キーワード">

    <!-- 並び順(隠し値) -->
    <input type="hidden" name="order" id="order">
    
    <!-- カテゴリー(隠し値) -->
    <input type="hidden" name="category" value="<?= $category?>">


    <!-- 絞り込みボタン  -->
    <div class="text-center mt-5">
      <button type="submit" class="btn btn-primary" style="text-align:center" id=filter value="filter" name="filter">この条件で絞り込み</button>
    </div>
  </form>
  

  <!-- クリアの表示 -->
  <?php $URL = getURL(); ?>
  <div class="text-center">
    <a type="button" href="<?= $URL ?>" class="btn btn-link mt-2">すべての条件をクリア</a>
  </div>
</aside>


<script>
    // 並び替えする
    function sortby(order){
      let tag = document.getElementById("order"); //サイドバーのinputタグを取得
      tag.value = order;
      let btn = document.getElementById("filter"); //絞り込みボタンを取得
      btn.click();//絞り込みボタンクリックしたときと同じ動作
    }
</script>






