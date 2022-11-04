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
                $ps->bindValue(1,$mail);
                $ps->bindValue(2,$pass);         $ps->bindValue(3,$sei);
                $ps->bindValue(4,$mei);          $ps->bindValue(5,$hurigana_sei);
                $ps->bindValue(6,$hurigana_mei); $ps->bindValue(7,$seibetsu);
                $ps->bindValue(8,$birth);        $ps->bindValue(9,$phone_num);
                $ps->bindValue(10,$jusho);
                $ps->execute();
        }
    }
?>