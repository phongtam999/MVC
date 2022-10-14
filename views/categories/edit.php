<h1>Chinh sua san pham</h1>
<form action="index.php?controller=category&page=update&id=<?php echo $item->MALOAIHANG;?>" method="post">

    TEN: <input value = "<?php echo $item->TENLOAIHANG;?>" type="text" name="name"> <br>
   
    <button type="submit">Lưu</button>
</form>