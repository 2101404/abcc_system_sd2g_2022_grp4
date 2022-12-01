<?php
    class DBManager{
        private function dbConnect(){
            $pdo = new PDO('mysql:host=localhost;dbname=dev;charset=utf8','webuser', 'abccsd2');
            return $pdo;
        }

        // 商品IDで商品の情報を取ってくる
        public function getItemById($id){
            $pdo = $this->dbConnect();
            $sql = "SELECT * FROM item AS I INNER JOIN category AS C ON I.category_id = C.category_id WHERE item_id = ?";
            $ps = $pdo->prepare($sql);
            $ps->bindValue(1,$id,PDO::PARAM_INT);
            $ps->execute();
            $result = $ps->fetch();
            if($result == false){
                throw new Exception("データを取得できませんでした");
            }
            return $result;
        }
        

        // 会員登録
        public function insertmember(
            $mail,$pass,$sei,$mei,$hurigana_sei,$hurigana_mei,$seibetsu,$birth,$phone_num,$jusho)
            {
                $pdo = $this->dbConnect();
                $sql = "INSERT INTO member(mail,pass,sei,mei,hurigana_sei,hurigana_mei,seibetsu,birth,phone_num,jusho)
                VALUES(?,?,?,?,?,?,?,?,?,?)";
                $ps = $pdo->prepare($sql);
                $ps->bindValue(1,$mail,PDO::PARAM_STR);         $ps->bindValue(2,password_hash($_POST["pass"],PASSWORD_DEFAULT),PDO::PARAM_STR);
                $ps->bindValue(3,$sei,PDO::PARAM_STR);          $ps->bindValue(4,$mei,PDO::PARAM_STR);
                $ps->bindValue(5,$hurigana_sei,PDO::PARAM_STR); $ps->bindValue(6,$hurigana_mei,PDO::PARAM_STR);
                $ps->bindValue(7,$seibetsu,PDO::PARAM_STR);     $ps->bindValue(8,$birth,PDO::PARAM_STR);
                $ps->bindValue(9,$phone_num,PDO::PARAM_STR);    $ps->bindValue(10,$jusho,PDO::PARAM_STR);
                $ps->execute();
                
            }

        // 会員IDを使って、注文表・注文詳細表・商品表から購入履歴を取得する
        public function getBuyHistory($memberId){
            $pdo = $this->dbConnect();
            $sql = "SELECT * FROM orders AS O INNER JOIN order_details AS OD ON O.order_id = OD.order_id 
                                              INNER JOIN item AS I ON OD.item_id = I.item_id WHERE O.member_id = ?
                                              ORDER BY  O.order_date DESC, OD.order_id DESC";
            $ps = $pdo->prepare($sql);
            $ps->bindValue(1,$memberId,PDO::PARAM_INT);
            $ps->execute();

            return $ps->fetchAll();
        }

        // 商品購入機能
        public function buyItems($memberId){
            $pdo = $this->dbConnect();
            // 買い物かごテーブルの取得
            $cartTbl = $this->getCart($memberId);

            // 注文表に会員IDを登録
            $sql2 = "INSERT INTO orders(member_id,order_date) VALUES(?,CURRENT_DATE())";
            $ps2 = $pdo->prepare($sql2);
            $ps2->bindValue(1,$memberId,PDO::PARAM_INT);
            $ps2->execute();

            // 注文詳細表に買い物かごテーブルの情報を登録
            $sql3 = "INSERT INTO order_details(order_id, item_id, od_suryo, od_size, od_price) VALUES(LAST_INSERT_ID(),?,?,?,?)";
            $ps3 = $pdo->prepare($sql3);
            foreach($cartTbl as $row){
                $ps3->bindValue(1,$row['item_id'],PDO::PARAM_INT);
                $ps3->bindValue(2,$row['cart_suryo'],PDO::PARAM_INT);
                $ps3->bindValue(3,$row['cart_size'],PDO::PARAM_STR);
                $ps3->bindValue(4,$row['item_price'],PDO::PARAM_INT);
                $ps3->execute();
            }

            // 買い物かごの削除
            $this->deleteCart($memberId);
        }

        // 指定した会員IDの買い物かご情報を削除する
        private function deleteCart($memberId){
            $pdo = $this->dbConnect();
            $sql = "DELETE FROM cart WHERE member_id = ?";
            $ps = $pdo->prepare($sql);
            $ps->bindValue(1,$memberId,PDO::PARAM_INT);
            $ps->execute();
        }

        // 買い物かごに商品を入れる
        public function addToCart($memberId, $itemId, $suryo, $torokubi, $size){
            $pdo = $this->dbConnect();
            $sql = "INSERT INTO cart VALUES(?,?,?,?,?)";
            $ps = $pdo->prepare($sql);
            $ps->bindValue(1,$memberId,PDO::PARAM_INT);
            $ps->bindValue(2,$itemId,PDO::PARAM_INT);
            $ps->bindValue(3,$suryo,PDO::PARAM_INT);
            $ps->bindValue(4,$torokubi,PDO::PARAM_STR);
            $ps->bindValue(5,$size,PDO::PARAM_STR);
            $ps->execute();
        }

        // 買い物かごを取得(買い物かご表の列名以外にsellingPriceで販売価格 shoukeiで小計が取得できる)
        public function getCart($memberId){
            $pdo = $this->dbConnect();
            $sql = "SELECT *,CASE is_sale WHEN true THEN item_sale_price 
                                          WHEN false THEN item_price END AS sellingPrice,
                             CASE is_sale WHEN true THEN item_sale_price * cart_suryo 
                                          WHEN false THEN item_price *cart_suryo END AS shoukei
                    FROM cart AS C INNER JOIN item AS I ON C.item_id = I.item_id WHERE C.member_id = ?";
            $ps = $pdo->prepare($sql);
            $ps->bindValue(1,$memberId,PDO::PARAM_INT);
            $ps->execute();
            
            return $ps->fetchAll();
        }

        // 買い物かごに入っている1つの商品を取得
        public function getCartItem($memberId,$itemId){
            $pdo = $this->dbConnect();
            $sql = "SELECT *,CASE is_sale WHEN true THEN item_sale_price 
                                          WHEN false THEN item_price END AS sellingPrice,
                             CASE is_sale WHEN true THEN item_sale_price * cart_suryo 
                                          WHEN false THEN item_price *cart_suryo END AS shoukei FROM cart AS C INNER JOIN item AS I ON C.item_id = I.item_id WHERE C.member_id = ? AND C.item_id = ?" ;
            $ps = $pdo->prepare($sql);
            $ps->bindValue(1,$memberId,PDO::PARAM_INT);
            $ps->bindValue(2,$itemId,PDO::PARAM_INT);
            $ps->execute();
            
            return $ps->fetch();

        }

        // 買い物かごに入っている1つの商品を削除
        public function deleteCartItem($memberId,$itemId){
            $pdo = $this->dbConnect();
            $sql = "DELETE FROM cart WHERE member_id = ? AND item_id = ?" ;
            $ps = $pdo->prepare($sql);
            $ps->bindValue(1,$memberId,PDO::PARAM_INT);
            $ps->bindValue(2,$itemId,PDO::PARAM_INT);
            $ps->execute();
        }

        // 会員IDから会員情報取得
        public function getMemberById($memberId){
            $pdo = $this->dbConnect();
            $sql = "SELECT * FROM member WHERE member_id = ?";
            $ps = $pdo->prepare($sql);
            $ps->bindValue(1,$memberId,PDO::PARAM_INT);
            $ps->execute();
            
            return $ps->fetch();
        }
        
        
        // 商品検索と絞り込みと並べ替え
        public function searchItems($page=1,$keyword="",$category="all", $size ="", $color=[], $price=0, $type="all", $order="item_registration_date", $direction ="DESC"){
            if(empty($keyword)){
                $strs = ["."];
            }else{
                // 検索キーワードをキーワードごとに配列に入れる
                $str = preg_replace('/　/', ' ', $keyword);   // 全角スペースを半角スペースに置換
                $str = preg_replace('/\s+/', ' ', $str); // 連続するスペースをまとめる
                $strs = explode(" ",$str); //配列にいれる

            }
    
            if(empty($color)){
                $colorRegexp =".";
            }else{
                $colorRegexp = "";
                foreach($color as $c){
                    $colorRegexp = $colorRegexp."|".$c;
                }
                $colorRegexp = substr($colorRegexp,1);
            }

            $pdo = $this->dbConnect();

            
            // SQL文の組み立て
            $sql = "SELECT *,CASE is_sale WHEN true THEN item_sale_price ELSE item_price END AS sellingPrice 
                    FROM item AS I INNER JOIN category AS C ON I.category_id = C.category_id 
                    WHERE item_color REGEXP :color
                          AND CASE is_sale WHEN true THEN item_sale_price ELSE item_price END BETWEEN :price1 AND :price2";
            // 検索ワードの数だけSQL文の検索を増やす
            $cnt =0;
            foreach($strs as $s){
                $cnt++;
                $sql = $sql." AND (item_name REGEXP :keyword$cnt OR item_description REGEXP :keyword$cnt OR category_name REGEXP :keyword$cnt)";
            }
            
            // 価格タイプによってSQL文を変える
            if($type!="all"){
                // 価格タイプが指定されている場合
                $sql =$sql." AND is_sale = :issale";
            }

            //カテゴリー別表示の場合 
            if($category != "all"){
                $sql = $sql." AND I.category_id = (SELECT category_id FROM category WHERE category_name = :category)";
            }

            $sql =$sql." ORDER BY $order $direction , item_id";
            
            $sql =$sql." LIMIT :start , 20";
            

            $ps = $pdo->prepare($sql);
            $ps->bindValue(':sizeReg', ",$size|^$size", PDO::PARAM_STR);
            $ps->bindValue(':color',$colorRegexp, PDO::PARAM_STR);
            if($price == 100000){
                $price1 = 90000; 
                $price2 = 5000000000000000; //5000兆円欲しい！！！
            }else if($price == 0){
                $price1 = 0;
                $price2 = 5000000000000000; //5000兆円欲しい！！！
            }else{
                $price1 = $price - 10000;
                $price2 = $price;
            }
            $ps->bindValue(':price1', $price1, PDO::PARAM_INT);
            $ps->bindValue(':price2', $price2, PDO::PARAM_INT);
            
            // 検索ワードの数だけバインド
            $cnt = 0;
            foreach($strs as $s){
                $cnt++;
                $ps->bindValue(":keyword$cnt",$s,PDO::PARAM_STR);
            }

            // 価格タイプによってバインドを変える
            if($type!="all"){
                // 価格タイプが指定されている場合
                if($type == "normal"){
                    $ps->bindValue(':issale', false, PDO::PARAM_BOOL);
                }else if($type == "sale"){
                    $ps->bindValue(':issale', true, PDO::PARAM_BOOL);
                }
            }

            // カテゴリー別表示の場合にバインド
            if($category != "all"){
                $ps->bindValue(':category',$category,PDO::PARAM_STR);
            }

            $ps->bindValue(":start", ($page-1)*20, PDO::PARAM_INT);

            $ps->execute();

            return $ps->fetchAll();
        }

        // 商品検索の件数カウント
        public function countSearchItems($keyword="",$category="all", $size ="", $color=[], $price=0, $type="all"){
            if(empty($keyword)){
                $strs = ["."];
            }else{
                // 検索キーワードをキーワードごとに配列に入れる
                $str = preg_replace('/　/', ' ', $keyword);   // 全角スペースを半角スペースに置換
                $str = preg_replace('/\s+/', ' ', $str); // 連続するスペースをまとめる
                $strs = explode(" ",$str); //配列にいれる

            }
    
            if(empty($color)){
                $colorRegexp =".";
            }else{
                $colorRegexp = "";
                foreach($color as $c){
                    $colorRegexp = $colorRegexp."|".$c;
                }
                $colorRegexp = substr($colorRegexp,1);
            }
            $pdo = $this->dbConnect();

            
            // SQL文の組み立て
            $sql = "SELECT COUNT(*) AS 'cnt'
                    FROM item AS I INNER JOIN category AS C ON I.category_id = C.category_id 
                    WHERE item_size REGEXP :sizeReg 
                    AND item_color REGEXP :color
                    AND CASE is_sale WHEN true THEN item_sale_price ELSE item_price END BETWEEN :price1 AND :price2";
            // 検索ワードの数だけSQL文の検索を増やす
            $cnt =0;
            foreach($strs as $s){
                $cnt++;
                $sql = $sql." AND (item_name REGEXP :keyword$cnt OR item_description REGEXP :keyword$cnt OR category_name REGEXP :keyword$cnt)";
            }
            
            // 価格タイプによってSQL文を変える
            if($type!="all"){
                // 価格タイプが指定されている場合
                $sql =$sql." AND is_sale = :issale";
            }

            //カテゴリー別表示の場合 
            if($category != "all"){
                $sql = $sql." AND I.category_id = (SELECT category_id FROM category WHERE category_name = :category)";
            }

           
            

            $ps = $pdo->prepare($sql);
            $ps->bindValue(':sizeReg', ",$size|^$size", PDO::PARAM_STR);
            $ps->bindValue(':color',$colorRegexp, PDO::PARAM_STR);
            if($price == 100000){
                $price1 = 90000; 
                $price2 = 5000000000000000; //5000兆円欲しい！！！
            }else if($price == 0){
                $price1 = 0;
                $price2 = 5000000000000000; //5000兆円欲しい！！！
            }else{
                $price1 = $price - 10000;
                $price2 = $price;
            }
            $ps->bindValue(':price1', $price1, PDO::PARAM_INT);
            $ps->bindValue(':price2', $price2, PDO::PARAM_INT);
            
            // 検索ワードの数だけバインド
            $cnt = 0;
            foreach($strs as $s){
                $cnt++;
                $ps->bindValue(":keyword$cnt",$s,PDO::PARAM_STR);
            }

            // 価格タイプによってバインドを変える
            if($type!="all"){
                // 価格タイプが指定されている場合
                if($type == "normal"){
                    $ps->bindValue(':issale', false, PDO::PARAM_BOOL);
                }else if($type == "sale"){
                    $ps->bindValue(':issale', true, PDO::PARAM_BOOL);
                }
            }

            // カテゴリー別表示の場合にバインド
            if($category != "all"){
                $ps->bindValue(':category',$category,PDO::PARAM_STR);
            }

            $ps->execute();
            $cnt = 0;
            foreach($ps->fetchAll() as $row){
                $cnt = $row['cnt'];
            }
            return $cnt;
        }
        
        


        // ログイン処理
        public function loginCheck($mail, $password){
            $member = $this->getMemberByMail($mail);
            if($member == true && password_verify($password,$member['pass']) == true){
                return $member;
            }else{
                throw new UnexpectedValueException("メールアドレスまたはパスワードが間違っています。");
            }
        }

        // メールアドレスから会員の情報取得
        public function getMemberByMail($mail){
            $pdo = $this->dbConnect();
            $sql = 'SELECT * FROM member WHERE mail = ?';
            $ps = $pdo->prepare($sql);
            $ps->bindValue(1,$mail,PDO::PARAM_STR);
            $ps->execute();
            $member = $ps->fetch();

            return $member;
        }

    }
?>