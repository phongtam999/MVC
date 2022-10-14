<h1>Edit san pham</h1>
<form action="index.php?controller=product&page=update&id=<?php echo $item->MALOAIHANG;?>" method="post">
    THELOAI: <input type="text" value = "<?php echo $item->MALOAIHANG;?>" name="category_id"> <br>
    TEN: <input type="text" value = "<?php echo $item->TENHANG;?>" name="name"> <br>
    GIA: <input type="text" value = "<?php echo $item->GIAHANG;?>" name="price"> <br>
    <button type="submit">Lưu</button>
</form>