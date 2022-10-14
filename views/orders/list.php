<h1>Danh sach danh muc san pham</h1>
<a href="index.php?controller=order&page=add">Them moi</a>

<table border="1">
    <thead>
        <tr>
            <th>SOHOADON</th>
            <th>MAKHACHHANG </th>
            <th>MANHANVIEN </th>
            <th>NGAYDATHANG </th>
            <th>NGAYGIAOHANG </th>
            <th>NGAYCHUYENHANG </th>
            <th>NOIGIAOHANG </th>       
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach( $items as $key => $row ): ?>
        <tr>
            <td><?php echo $row->SOHOADON; ?></td>
            <td><?php echo $row->MAKHACHHANG ; ?></td>
            <td><?php echo $row->MANHANVIEN ; ?></td>
            <td><?php echo $row->NGAYDATHANG ; ?></td>
            <td><?php echo $row->NGAYGIAOHANG ; ?></td>
            <td><?php echo $row->NGAYCHUYENHANG ; ?></td>
            <td><?php echo $row->NOIGIAOHANG ; ?></td>
          
            <td>
                <a href="index.php?controller=order&page=edit&id=<?php echo $row->SOHOADON; ?>">Sua</a> |
                <a href="index.php?controller=order&page=delete&id=<?php echo $row->SOHOADON; ?>">Xoa</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>