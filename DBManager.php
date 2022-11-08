<?php
    class DBManager{
        private function dbConnect(){
            $pdo = new PDO('mysql:host=localhost;dbname=dev;charset=utf8','webuser', 'abccsd2');
            return $pdo;
        }

        public function getItemById($id){
            $pdo = $this->dbConnect();
            $sql = "SELECT * FROM item WHERE item_id = ?";
            $ps = $pdo->prepare($sql);
            $ps->bindValue(1,$id,PDO::PARAM_INT);
            $ps->execute();
            
            return $ps->fetchAll();
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
            $sql1 = "SELECT * FROM cart AS C INNER JOIN item AS I ON C.item_id = I.item_id WHERE C.member_id = ?";
            $ps1 = $pdo->prepare($sql1);
            $ps1->bindValue(1,$memberId,PDO::PARAM_INT);
            $ps1->execute();
            $cartTbl = $ps1->fetchAll();

            $sql2 = "INSERT INTO orders(member_id) VALUES(?)";
            $ps2 = $pdo->prepare($sql2);
            $ps2->bindValue(1,$memberId,PDO::PARAM_INT);
            $ps2->execute();

            $sql3 = "INSERT INTO order_details(order_id, item_id, suryo_data, item_size, item_price) VALUES(LAST_INSERT_ID(),?,?,?,?)";
            $ps3 = $pdo->prepare($sql3);
            foreach($cartTbl as $row){
                $ps3->bindValue(1,$row['item_id'],PDO::PARAM_INT);
                $ps3->bindValue(2,$row['suryo_data'],PDO::PARAM_INT);
                $ps3->bindValue(3,$row['item_size'],PDO::PARAM_STR);
                $ps3->bindValue(4,$row['item_price'],PDO::PARAM_INT);
                $ps3->execute();
            }

            $this->deleteCart($memberId);
        }

        private function deleteCart($memberId){
            $pdo = $this->dbConnect();
            $sql = "DELETE FROM cart WHERE member_id = ?";
            $ps = $pdo->prepare($sql);
            $ps->bindValue(1,$memberId,PDO::PARAM_INT);
            $ps->execute();
        }
    }
?>