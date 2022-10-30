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
</head>


<body>
	<!-- ヘッダーの読み込み -->
	<?php include "header.php" ?>

	<div class="container">

		<!-- カルーセル -->
		<div id="carouselIndicators" class="carousel slide " data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<a href="index4.php">
						<img src="imgs/sample/suit7.jpg" class="d-block w-100" alt="...">
					</a>
				</div>
				<div class="carousel-item">
					<img src="imgs/sample/suit8.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="imgs/sample/suit9.jpg" class="d-block w-100" alt="...">
				</div>
			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>

			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

		<!-- セット商品一覧のボタン -->
		<div style="text-align:center">
			<button type="button" class="btn btn-lg btn-outline-primary">セット商品一覧へ</button>
		</div>

		<!-- メンズカテゴリー -->
		<h2 class="caption">MENS</h2>
		<div class="category">

		</div>

		<!-- レディスカテゴリ -->
		<h2 class="caption">LADIES</h2>
		<div class="category">

		</div>

		<!-- 特集 -->
		<h2 class="caption">特集</h2>
		<div class="row">
                <div class="col-5 feature">
                    a
                </div>
				<div class="col-2" ></div>
                <div class="col-5 feature">
                    a
                </div>

		</div>

		<!-- 特集ボタン -->
		<div style="text-align:center;margin-top:3em;margin-bottom:3em">
			<button type="button" class="btn btn-lg btn-outline-primary">特集一覧へ</button>
		</div>





	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>