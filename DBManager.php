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
        
        //新規登録画面

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

        // 会員IDを使って、注文表・注文詳細表・商品表からデータをとってくる
        public function getBuyHistory($memberId){
            $pdo = $this->dbConnect();
            $sql = "SELECT * FROM orders AS O INNER JOIN order_details AS OD ON O.order_id = OD.order_id 
                                              INNER JOIN item AS I ON OD.item_id = I.item_id WHERE O.member_id = ?
                                              ORDER BY OD.order_id";
            $ps = $pdo->prepare($sql);
            $ps->bindValue(1,$memberId,PDO::PARAM_INT);
            $ps->execute();

            return $ps->fetchAll();
        }

        public function buyItems($memberId){
            $pdo = $this->dbConnect();
            // 買い物かごテーブルの取得
            $sql1 = "SELECT * FROM cart AS C INNER JOIN item AS I ON C.item_id = I.item_id WHERE C.member_id = ?";
            $ps1 = $pdo->prepare($sql1);
            $ps1->bindValue(1,$memberId,PDO::PARAM_INT);
            $ps1->execute();
            $cartTbl = $ps1->fetchAll();

            // 注文表に会員IDを登録
            $sql2 = "INSERT INTO orders(member_id) VALUES(?)";
            $ps2 = $pdo->prepare($sql2);
            $ps2->bindValue(1,$memberId,PDO::PARAM_INT);
            $ps2->execute();

            // 注文詳細表に買い物かごテーブルの情報を登録
            $sql3 = "INSERT INTO order_details(order_id, item_id, suryo_data, item_size, item_price) VALUES(LAST_INSERT_ID(),?,?,?,?)";
            $ps3 = $pdo->prepare($sql3);
            foreach($cartTbl as $row){
                $ps3->bindValue(1,$row['item_id'],PDO::PARAM_INT);
                $ps3->bindValue(2,$row['suryo_data'],PDO::PARAM_INT);
                $ps3->bindValue(3,$row['item_size'],PDO::PARAM_STR);
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
    }
?>