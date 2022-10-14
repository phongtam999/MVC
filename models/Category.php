<?php
    class Category {
        protected $table = 'c10_loaihang';
        // goi CSDL lay tat ca records
        public function all(){
            global $conn;
            $sql = "SELECT * FROM $this->table ";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $rows = $stmt->fetchAll();
            return $rows;
        }

        //goi CSDL lay chi tiet record
        public function find($id){
            
            global $conn;
            $sql = "SELECT * FROM $this->table WHERE MALOAIHANG = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $row = $stmt->fetch();
            return  $row;
        }

        //them moi record
        public function save( $data ){
            global $conn;
            $name = $data['name'];
            $sql = "INSERT INTO `c10_loaihang` 
            ( `TENLOAIHANG`)
             VALUES 
             ( '$name')";
            //  var_dump($sql);
            //  die();
              $conn->exec($sql);

        }

        // cap nhat record
        public function update( $id, $data ){
            $name = $data['name'];
            global $conn;
            $sql = "UPDATE `c10_loaihang`
            SET 
               `TENLOAIHANG` = '$name'
            WHERE `c10_loaihang`.`MALOAIHANG` = $id ";
            $conn->exec($sql);
        }

        // xoa record
        public function delete($id){
            global $conn;
            $sql = "DELETE FROM $this->table WHERE MALOAIHANG = $id";
            // var_dump($sql);
            // die();
            $conn->exec($sql);


        }
    }