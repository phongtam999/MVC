<h1>Chinh sua san pham</h1>
<form action="index.php?controller=orders&page=update&id=<?php echo $item->SOHOADON;?>" method="post">

MAKHACHHANG: <input value = "<?php echo $item->MAKHACHHANG;?>" type="text" name="MAKHACHHANG"> <br>
MANHANVIEN: <input value = "<?php echo $item->MANHANVIEN;?>" type="text" name="MANHANVIEN"> <br>
NGAYDATHANG: <input value = "<?php echo $item->NGAYDATHANG;?>" type="date" name="NGAYDATHANG"> <br>
NGAYGIAOHANG: <input value = "<?php echo $item->NGAYGIAOHANG;?>" type="date" name="NGAYGIAOHANG"> <br>
NGAYCHUYENHANG: <input value = "<?php echo $item->NGAYCHUYENHANG;?>" type="date" name="NGAYCHUYENHANG"> <br>
NOIGIAOHANG: <input value = "<?php echo $item->NOIGIAOHANG;?>" type="date" name="NOIGIAOHANG"> <br>   
    <button type="submit">Lưu</button>
</form>