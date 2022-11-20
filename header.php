<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
  <div class="container-fluid">
    <!-- タイトル -->
    <a class="navbar-brand" href="index.php">
      <img src="./imgs/logo.png" height="46px" alt="">
      AKAYAMA
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
      <!-- 検索 -->
      <form class="d-flex" action="./item_search_result.php" method="get">
          <input class="form-control me-2" type="search" placeholder="商品を検索" aria-label="検索" name="keyword">
          <input class="btn btn-outline-success" type="submit" value="検索">
      </form>

      <!-- 右側のボタン類 -->
      <ul class="navbar-nav  mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./mypage.php"><i class="bi bi-person-circle"></i>マイページ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./cart.php"><i class="bi bi-cart"></i>買い物カゴ</a>
        </li>
        <li class="nav-item">
          <a id="login" class="nav-link" href="./login.php"><i class="bi bi-door-open"></i><span id="logintxt">ログイン</span></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php session_start(); ?>

<?php if(isset($_SESSION['memberId']) && isset($_SESSION['password'])): ?>
    <script>
      let loginatag = document.getElementById("login");
      loginatag.href ="./logout.php";
      let logintxt = document.getElementById("logintxt");
      logintxt.innerHTML = "ログアウト";
    </script>
  
<?php endif; ?>

