<?php
    include_once 'models/Category.php';
    class CategoryController {
        
        // Hien thi tat ca
        public function index(){
            $objCategory = new Category();
            $items =  $objCategory->all();
            // var_dump($items);
            
            //goi view
            include_once 'views/categories/list.php'; 
        }

        // Hien thi chi tiet
        public function show(){
            $id = $_GET['id'];
            $objCategory = new Category();
            $item = $objCategory->find($id);
            include_once 'views/categories/show.php';
            
        }

        // Hien thi form them moi
        public function add(){
            include_once 'views/categories/add.php';
        }

        //Xu ly form them moi
        public function store(){
            $data=[
                'name'=> $_REQUEST['name'],
            ];
            
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
            $objCategory = new Category();
            $objCategory->save($data);
            header('Location: index.php?controller=category&page=index');
        }

        // Hien thi form edit
        public function edit(){
            $id = $_GET['id'];
            $objCategory = new Category();
            $item = $objCategory->find($id);
            include_once 'views/categories/edit.php';
        }
        //Xu ly edit
        public function update(){
            $id = $_REQUEST['id'];
            $data = [
                'name'=> $_REQUEST['name']
            ];
            $objCategory = new Category();
            $objCategory-> update( $id, $data );
            header('Location: index.php?controller=category&page=index');
        }

        // Phuong thuc delete
        public function delete(){
            $id = $_REQUEST['id'];
            $objCategory = new Category();
            $objCategory->delete($id);
            header('Location: index.php?controller=category&page=index');
        }
        
    }