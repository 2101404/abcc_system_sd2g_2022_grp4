<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="./css/style.css">
	<title>TopPage</title>

	<?php
		function showCategory($itemLink,$itemImg,$text){
			for ($i=0; $i < 8; $i++) { 
				echo'	<div class="col-6 col-md-3">
							<a href="./item_category.php?category='.$text[$i].'">
								<div class="ratio ratio-1x1">
									<img src="'.$itemImg[$i].'" class="img-fluid" alt="'.$text[$i].'">
								</div>
								<p class="text-center text-secondary">'.$text[$i].'</p>
							</a>
						</div>
					';
			}
		}
	?>
</head>


<body>
	<!-- ヘッダーの読み込み -->
	<?php include "header.php" ?>

	<div class="container-fluid p-0">

		<!-- カルーセル -->
		<div id="carouselIndicators" class="carousel carousel-dark slide mb-5" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>

			<div class="carousel-inner text-center">
				<div class="carousel-item active">
					<!-- リンク入れる -->
					<a href="./item_detail.php?itemId=5">
						<img src="imgs/sample/carousel01.webp" class="w-100" alt="...">
					</a>
				</div>
				<div class="carousel-item">
					<!-- リンク入れる -->
					<a href="./item_detail.php">
						<img src="imgs/sample/suit8.jpg" class="w-100" alt="...">
					</a>
				</div>
				<div class="carousel-item">
					<!-- リンク入れる -->
					<a href="./item_detail.php">
						<img src="imgs/sample/suit9.jpg" class="w-100" alt="..." style="object-position:0% 0%">
					</a>
				</div>
			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>

			<button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

		<!-- セット商品一覧のボタン -->
		<div class="text-center">
			<!-- 後でリンク先確認 -->
			<a type="button" href="./item_category.php?category=セット商品" class="btn btn-lg btn-outline-primary mt-5">セット商品一覧へ</a>
		</div>

		<!-- メンズカテゴリー -->
		<h2 class="text-center mt-5 mb-3">MENS</h2>
		<div class=" p-3 frame category" >
			<div class="row">
				<?php
					$itemImg =['./imgs/category/suit01.jpg','./imgs/category/jacket01.jpg','./imgs/category/shoes01.jpg','./imgs/category/tie01.jpg','./imgs/category/bag03.png','./imgs/category/belt03.png','./imgs/category/coat01.jpg','./imgs/category/socks01.png',];
					$text =['スーツ','ジャケット','靴','ネクタイ','バッグ','ベルト','コート','靴下',];
					$itemLink =['','','','','','','','',];
					showCategory($itemLink,$itemImg,$text);
				?>
			</div>
		</div>

		<!-- レディスカテゴリ -->
		<h2 class="text-center mt-5 mb-3">LADIES</h2>
		<div class=" p-3 frame category">
			<div class="row">
			<?php
					$itemImg =['./imgs/category/setup01.png','./imgs/category/skirt01.png','./imgs/category/pants01.png','./imgs/category/shoes02.png','./imgs/category/bag02.png','./imgs/category/belt04.png','./imgs/category/coat02.png','./imgs/category/socks01.png',];
					$text =['セットアップ','スカート','パンツ','靴','バッグ','ベルト','コート','靴下',];
					$itemLink =['','','','','','','','',];
					showCategory($itemLink,$itemImg,$text);
				?>

			</div>
		</div>

		<!-- 特集 -->
		<h2 class="text-center mt-5 mb-3">特集</h2>
		<!-- <div class="row mx-5 gy-3 tokushu">
                <div class="col-12 col-md-4">
					<a href="./tokusyuusyousai1.php">
						<img src="./imgs/sample/tokusyuu1.png" alt="">
					</a>
                </div>
                <div class="col-12 col-md-4">
					<a href="./tokusyuusyousai2.php">
						<img  src="./imgs/sample/tokusyuu2.png" alt="">
					</a>
                </div>
				<div class="col-12 col-md-4">
					<a href="./tokusyuusyousai3.php">
						<img  src="./imgs/sample/tokusyuu3.jpg" alt="">
					</a>
				</div>

		</div> -->
		<div class="row">
			<div class="offset-3 col-6">
				<!-- カルーセル -->
				<div id="carouselIndicators-tokushu" class="carousel carousel-dark slide mb-3" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselIndicators-tokushu" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselIndicators-tokushu" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselIndicators-tokushu" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>

					<div class="carousel-inner text-center tokushu">
						<div class="carousel-item active">
							<!-- リンク入れる -->
							<a href="./tokusyuusyousai1.php">
								<img src="imgs/sample/tokusyuu1.png"  alt="...">
							</a>
						</div>
						<div class="carousel-item">
							<!-- リンク入れる -->
							<a href="./tokusyuusyousai2.php">
								<img src="imgs/sample/tokusyuu2.png"  alt="...">
							</a>
						</div>
						<div class="carousel-item">
							<!-- リンク入れる -->
							<a href="./tokusyuusyousai3.php">
								<img src="imgs/sample/tokusyuu3.jpg"  alt="..." >
							</a>
						</div>
					</div>

					<button class="carousel-control-prev " type="button" data-bs-target="#carouselIndicators-tokushu" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>

					<button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators-tokushu" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>

			</div>
		</div>


		<!-- 特集ボタン -->
		<div class="text-center mt-5 mb-5">
			<!-- 後でリンク先入れる -->
			<a type="button" href="./tokusyuuitiran.php"class="btn btn-lg btn-outline-primary">特集一覧へ</a>
		</div>





	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>