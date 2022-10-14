<h1>Danh sach san pham</h1>
<a href="index.php?controller=product&page=add">them moi</a> 
<table border="1">
    <thead>
        <tr>
            <th>MAHANG</th>
            <th>TENHANG</th>
            <th>MACONGTY</th>
            <th>MALOAIHANG</th>
            <th>SOLUONG</th>
            <th>DONVITINH</th>
            <th>GIAHANG</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach( $items as $key => $row ): ?>
        <tr>
            <td><?php echo $row->MAHANG; ?></td>
            <td><?php echo $row->TENHANG; ?></td>
            <td><?php echo $row->MACONGTY; ?></td>
            <td><?php echo $row->MALOAIHANG; ?></td>
            <td><?php echo $row->SOLUONG; ?></td>
            <td><?php echo $row->DONVITINH; ?></td>
            <td><?php echo $row->GIAHANG; ?></td>
            <td>
                <a href="index.php?controller=product&page=show&id=<?php echo $row->MAHANG; ?>">Xem</a> |
                <a href="index.php?controller=product&page=edit&id=<?php echo $row->MAHANG; ?>">Sua</a> |
                <a href="index.php?controller=product&page=delete&id=<?php echo $row->MAHANG; ?>">Xoa</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>