<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>cart</title>
</head>
<body>
    <!-- ヘッダーの読み込み -->
    <?php include "header.php" 

    $ps = $pdo->prepare($sql);
    
    $ps->bindValue(1, $_POST['item_id'], PDO::PARAM_STR);
    $ps->bindValue(1, $_POST['cart_size'], PDO::PARAM_STR);
    $ps->bindValue(1, $_POST['cart_suryo'], PDO::PARAM_STR);
    $ps->bindValue(1, $_POST['item_price'], PDO::PARAM_STR);

    $ps->execute();
    
    echo "メアド（アカウント）:$_POST['user_mail']<br>";
    ?>


    
    <h2>買い物かご</h2>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>