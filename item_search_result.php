<?php include "header.php" ?>
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
  <?php 
    require_once "DBManager.php";
    require_once "function.php";
    $_SESSION['itemListPage'] = getURL();
  ?>
  
  <!-- スマホ表示用絞り込み -->
  <div class="offcanvas-md offcanvas-end"  tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">

    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasResponsiveLabel"></h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="閉じる"></button>
    </div>
    <div class="offcanvas-body p-0">
      <!-- サイドバーの読み込み -->
      <?php include "side.php"?>
    </div>
  
  </div>

  
  <div id="container"class="container-fluid">
    
    <h3>「<?=$keyword?>」の検索結果  </h3>
    <p class=" mb-3">
      検索結果:<?=$itemCnt?>件
      <?php if($itemCnt < $SHOWLIMIT) ?>
    </p>

    
    <label for="sortSelect" class=" control-label">並び順</label>
    <div class="row mb-3"  >
      <!-- セレクトボックスの読み込み -->
      <div class="col">
        <select id="sortSelect" class="form-select " name="sort" onchange="sortby(this.value)">
          <option value="newest" <?php if(!isset($_GET['order']) || $_GET['order']=="newst") echo 'selected'?>>最新順</option>
          <option value="lowest" <?php if(isset($_GET['order']) && $_GET['order']=="lowest") echo 'selected'?>>安い順</option>
          <option value="highest" <?php if(isset($_GET['order']) && $_GET['order']=="highest") echo 'selected'?>>高い順</option>
        </select>

      </div>
      <div class="col-4">
        <!-- スマホ表示用絞り込みボタン -->
        <div class="text-end ">
          <button class="btn btn-outline-primary d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">絞り込み</button>
        </div>

      </div>

    </div>

    <div class="border-bottom my-3"></div>
    
    <!-- カード -->
    <div class="row gy-3">
      <!-- ループで回して商品情報を表示 -->
      <?php foreach($itemTbl as $row):?>  
        <div class="col-6  col-md-4 col-lg-3" style="height:360px">

          <div class="card p-2 h-100" >
            
            <div class="image-area">
              <a href="./item_detail.php?itemId=<?=$row['item_id']?>">
                <img class="rounded-3" width=100%  src="<?='./imgs/items/'.$row['item_image']?>" alt="" >
              </a>
            </div>

            <div class ="content">
              <div class="card-wrap">
                <div class="card-body p-1">
                <div class ="card-list">
                  

                  <h3 class="card-Title my-2 texttr">
                    <?php 
                        
                        //30日以内に登録された商品にNEWをつける(2592000秒=30日)
                        if(strtotime(date("Y-m-d")) -strtotime( $row['item_registration_date'])  <= 2592000){
                            echo '<div class="badge bg-danger">new</div>';
                        }
                        
                    ?>
                    <a href="./item_detail.php?itemId=<?=$row['item_id']?>">
                      <?=$row['item_name']?>
                    </a>
                  </h3>
                  <div class="card-text">
                    <p class ="card-listText">￥<?=number_format($row['sellingPrice'])?>(税込)</p>

                  </div>
                </div>

                </div>
              </div>
            </div>

          </div>

        </div>
      <?php endforeach;?>

    </div>
    
    <!-- ページボタン -->
    <!-- 検索結果がある場合表示する -->
    <?php if($itemCnt > 0): ?>
      <nav aria-label="Page navigation example" >
        <ul class="pagination justify-content-center my-3">

        <?php 
          require_once "function.php";
          if(isset($_GET['page'])){
            $nowPage = $_GET['page'];
          }else{
            $nowPage = 1;
          }
          $URL = getURL();
          $prevPage = $nowPage - 1;
          $outputURL = preg_replace('/page=.*&|&page=.*$/','',$URL);
          $outputURL = $outputURL."&page=$prevPage";

        ?>

        <!-- 1ページ目のとき選択できなくする -->
        <?php if(1 == $nowPage) :?>
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
        <?php else:?>
          <li class="page-item">
            <a class="page-link" href="<?=$outputURL?>" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
        <?php endif;?>

        
        <?php for($i=1; $i <= $totalPage; $i++) :?>
          
          <?php
            $outputURL = preg_replace('/page=.*&|&page=.*$/','',$URL);
            $outputURL = $outputURL."&page=$i";
          ?>

          <!-- ページ番号が同じ時ボタンに色をつける -->
          <?php if($i == $nowPage) :?>
            <li class="page-item active"><a class="page-link" href="<?=$outputURL?>"><?=$i?></a></li>
          <?php else:?>
            <li class="page-item"><a class="page-link" href="<?=$outputURL?>"><?=$i?></a></li>
          <?php endif?>

        <?php endfor; ?>

        <?php
          $nextPage = $nowPage + 1;
          $outputURL = preg_replace('/page=.*&|&page=.*$/','',$URL);
          $outputURL = $outputURL."&page=$nextPage";
        ?>


        <!-- 最後のページのとき選択できなくする -->
        <?php if($totalPage == $nowPage) :?>
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        <?php else:?>
          <li class="page-item">
            <a class="page-link" href="<?=$outputURL?>" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        <?php endif;?>

        </ul>
      </nav>

    <?php endif;?>
      
    


    <!-- 戻るボタン -->
    <div class="text-center mt-5 mb-5">
            <a type="button" href="./index.php?" class="btn btn-lg btn-outline-primary mt-5">トップページに戻る</a>
    </div>

  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>