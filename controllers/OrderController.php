<?php
    include_once 'models/Order.php';

    class OrderController {
        
        // Hien thi tat ca
        public function index(){
            $objOrders = new Order();
            $items =  $objOrders->all();
            // echo '<pre>';
            // print_r($items);
            // die();

            // truyen xuong view
            include_once 'views/orders/list.php';
            
        }

        // Hien thi chi tiet
        public function show(){
            $id = $_GET['id'];
            $objOrders= new Order();
            $item = $objOrders->find($id);
            include_once 'views/orders/show.php';
        }

        // Hien thi form them moi
        public function add(){
            include_once 'views/orders/add.php';
        }

        //Xu ly form them moi
        public function store(){
            $data=[
                'MAKHACHHANG'=> $_REQUEST['MAKHACHHANG'],
                'MANHANVIEN'=> $_REQUEST['MANHANVIEN'],
                'NGAYGIAOHANG'=> $_REQUEST['NGAYGIAOHANG'],
                'NGAYDATHANG'=> $_REQUEST['NGAYDATHANG'],
                'NGAYCHUYENHANG'=> $_REQUEST['NGAYCHUYENHANG'],
                'NOIGIAOHANG'=> $_REQUEST['NOIGIAOHANG']
            ];
            
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
            $objOrders = new Order();
            $objOrders->save($data);
            header('Location: index.php?controller=orders&page=index');
            
        }

        // Hien thi form edit
        public function edit(){
            $id = $_GET['id'];
            $objOrders = new Order();
            $item = $objOrders->find($id);
            include_once 'views/orders/edit.php';
            
        }
        //Xu ly edit
        public function update(){
            $id = $_REQUEST['id'];
            $data = [
                'MAKHACHHANG'=> $_REQUEST['MAKHACHHANG'],
                'MANHANVIEN'=> $_REQUEST['MANHANVIEN'],
                'NGAYGIAOHANG'=> $_REQUEST['NGAYGIAOHANG'],
                'NGAYDATHANG'=> $_REQUEST['NGAYDATHANG'],
                'NGAYCHUYENHANG'=> $_REQUEST['NGAYCHUYENHANG'],
                'NOIGIAOHANG'=> $_REQUEST['NOIGIAOHANG']
            ];
            $objOrders = new Order();
            $objOrders-> update( $id, $data );
            header('Location: index.php?controller=orders&page=index');
        }

        // Phuong thuc delete
        public function delete(){
            $id = $_REQUEST['id'];
            $objOrders = new Order();
            $objOrders->delete($id);
            header('Location: index.php?controller=orders&page=index');
            
        }
        
    }