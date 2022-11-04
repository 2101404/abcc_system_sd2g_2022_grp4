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

        public function insertmember(
            $mail,$pass,$sei,$mei,$hurigana_sei,$hurigana_mei,$seibetsu,$birth,$phone_num,$jusho)
            {
                $pdo = $this->dbConnect();
                $sql = "INSERT INTO member(mail,pass,sei,mei,hurigana_sei,hurigana_mei,seibetsu,birth,phone_num,jusho)
                VALUES(?,?,?,?,?,?,?,?,?,?)";
                $ps = $pdo->prepare($sql);
                $ps->bindValue(1,$mail,PDO::PARAM_STR);         $ps->bindValue(2,$pass,PDO::PARAM_STR);
                $ps->bindValue(3,$sei,PDO::PARAM_STR);          $ps->bindValue(4,$mei,PDO::PARAM_STR);
                $ps->bindValue(5,$hurigana_sei,PDO::PARAM_STR); $ps->bindValue(6,$hurigana_mei,PDO::PARAM_STR);
                $ps->bindValue(7,$seibetsu,PDO::PARAM_STR);     $ps->bindValue(8,$birth,PDO::PARAM_STR);
                $ps->bindValue(9,$phone_num,PDO::PARAM_STR);    $ps->bindValue(10,$jusho,PDO::PARAM_STR);
                $ps->execute();
        }
    }
?>