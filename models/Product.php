<?php
    class Product {
        protected $table = 'c10_mat_hang';
        // goi CSDL lay tat ca records
        public function all(){
            // goi bien toan cuc
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
            
            $sql = "SELECT * FROM $this->table WHERE MAHANG = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $row = $stmt->fetch();
            return  $row;
        }

        //them moi record
        public function save( $data ){
            global $conn;
            $name = $data['name'];
            $category_id = $data['category_id'];
            $price = $data['price'];
            $sql = "INSERT INTO `c10_mat_hang` 
            ( `TENHANG`,  `MALOAIHANG`, `GIAHANG`)
             VALUES 
             ( '$name', '$category_id','$price')";
            // var_dump($sql);
            // die();
            $conn->exec($sql);
        }

        // cap nhat record
        public function update( $id, $data ){
            global $conn;
            $name = $data['name'];
            $category_id = $data['category_id'];
            $price = $data['price'];
            $sql = "UPDATE `c10_mat_hang`
            SET
                `TENHANG` = '$name',
                `MALOAIHANG` = '$category_id',
                `GIAHANG` = '$price'
            WHERE `c10_mat_hang`.`MAHANG` = $id ";
            // var_dump($sql);
            // die();
            $conn->exec($sql);
        }

        // xoa record
        public function delete($id){
            global $conn;
            $sql = "DELETE FROM $this->table WHERE MAHANG  = $id";
            $conn->exec($sql);
        }
    }