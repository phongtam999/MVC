<h1>Danh sach danh muc san pham</h1>
<a href="index.php?controller=category&page=add">Them moi</a>

<table border="1">
    <thead>
        <tr>
            <th>MALOAIHANG</th>
            <th>TENLOAIHANG </th>
         
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach( $items as $key => $row ): ?>
        <tr>
            <td><?php echo $row->MALOAIHANG; ?></td>
            <td><?php echo $row->TENLOAIHANG ; ?></td>
          
            <td>
                <a href="index.php?controller=category&page=show&id=<?php echo $row->MALOAIHANG; ?>">Xem</a> |
                <a href="index.php?controller=category&page=edit&id=<?php echo $row->MALOAIHANG; ?>">Sua</a> |
                <a href="index.php?controller=category&page=delete&id=<?php echo $row->MALOAIHANG; ?>">Xoa</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>