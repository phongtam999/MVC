<?php
    class Order {
        protected $table = 'c10_don_dat_hang';
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
            $sql = "SELECT * FROM $this->table WHERE SOHOADON = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $row = $stmt->fetch();
            return  $row;
        }

        //them moi record
        public function save( $data ){
            global $conn;
            $MAKHACHHANG = $data['MAKHACHHANG']; 
            $MANHANVIEN = $data['MANHANVIEN']; 
            $NGAYDATHANG = $data['NGAYDATHANG']; 
            $NGAYGIAOHANG = $data['NGAYGIAOHANG']; 
            $NGAYCHUYENHANG = $data['NGAYCHUYENHANG']; 
            $NOIGIAOHANG = $data['NOIGIAOHANG']; 
            $sql = "INSERT INTO `c10_don_dat_hang` (`MAKHACHHANG`, `MANHANVIEN`, `NGAYDATHANG`, `NGAYGIAOHANG`, `NGAYCHUYENHANG`, `NOIGIAOHANG`) 
            VALUES ('$MAKHACHHANG','$MANHANVIEN','$NGAYDATHANG','$NGAYGIAOHANG','$NGAYCHUYENHANG','$NOIGIAOHANG')";
            //  var_dump($sql);
            //  die();
              $conn->exec($sql);

        }

        // cap nhat record
       
            public function update( $id, $data ){
                // echo "<pre>";
                // print_r($data);
                // die();
                $MAKHACHHANG = $data['MAKHACHHANG'];
                $MANHANVIEN = $data['MANHANVIEN'];
                $NGAYDATHANG = $data['NGAYDATHANG'];
                $NGAYGIAOHANG = $data['NGAYGIAOHANG'];
                $NGAYCHUYENHANG = $data['NGAYCHUYENHANG'];
                $NOIGIAOHANG = $data['NOIGIAOHANG'];
                global $conn;
                $sql = "UPDATE `c10_don_dat_hang`
                SET 
                   `MAKHACHHANG` = '$MAKHACHHANG',
                   `MANHANVIEN` = '$MANHANVIEN',
                   `NGAYDATHANG` = '$NGAYDATHANG',
                   `NGAYGIAOHANG` = '$NGAYGIAOHANG',
                   `NGAYCHUYENHANG` = '$NGAYCHUYENHANG',
                   `NOIGIAOHANG` = '$NOIGIAOHANG'
                   WHERE `c10_don_dat_hang`.`SOHOADON` = $id ";
                $conn->exec($sql);
        }

        // // xoa record
        public function delete($id){
            global $conn;
            $sql = "DELETE FROM $this->table WHERE SOHOADON = $id";
            // var_dump($sql);
            // die();
            $conn->exec($sql);


        }
    }