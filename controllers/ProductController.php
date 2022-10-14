<?php
    //GOi model 
    include_once 'models/Product.php';
    class ProductController {
        
        // Hien thi tat ca
        public function index(){
            $objProduct = new Product();
            $items = $objProduct->all();
            // echo '<pre>';
            // print_r($items);
            // die();

            // truyen xuong view
            include_once 'views/products/list.php';
        }

        // Hien thi chi tiet
        public function show(){
            $id = $_GET['id'];
            $objProduct = new Product();
            $item = $objProduct->find($id);
            
            include_once 'views/products/show.php';
            
        }

        // Hien thi form them moi
        public function add(){
            
            include_once 'views/products/add.php';
        }

        //Xu ly form them moi
        public function store(){
            $data=[
                'category_id'=> $_REQUEST['category_id'],
                'name'       => $_REQUEST['name'],
                'price'      => $_REQUEST['price']
            ];

            // echo '<pre>';
            // print_r($data);
            // die();
            $objProduct = new Product();
            $objProduct->save($data);
            header('Location: index.php?controller=product&page=index');

        }

        // Hien thi form edit
        public function edit(){
            $id = $_GET['id'];
            $objProduct = new Product();
            $item = $objProduct->find($id);
            include_once 'views/products/edit.php';

        }
        //Xu ly edit
        public function update(){
            $id = $_REQUEST['id'];
            $data = [
                'category_id'=> $_REQUEST['category_id'],
                'name'       => $_REQUEST['name'],
                'price'      => $_REQUEST['price']
            ];

            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
            $objProduct = new Product();
            $objProduct->update($id, $data);

            header('Location: index.php?controller=product&page=index');

        }

        // Phuong thuc delete
        public function delete(){
            $id = $_REQUEST['id'];
            $objProduct = new Product();
            $objProduct->delete($id);
            header('Location: index.php?controller=product&page=index');

        }
        
    }