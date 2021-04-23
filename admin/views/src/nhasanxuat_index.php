<table class="table table-striped table-hover">
    <thead>
    <tr>
        <td>Tên Nhà sản xuất</td>
        <td>Thứ tự</td>
        <td class='text-center'>Ẩn/Hiện</td>
        <td class='text-center'>
            Sửa / Xóa
        </td>
    </tr>
    </thead>
    <tbody>
    <?php
    if ($list == NULL) echo "Chưa có dữ liệu";
    else foreach ($list as $row) {
        if ($row['AnHien'] != null && $row['AnHien'] != 0) {
            $checked_anhien = '<i class="fa fa-check-circle text-success" aria-hidden="true"></i>';
        } else $checked_anhien = '-';
        echo "<tr>";
        echo "<td>", $row['TenNSX'], "</td>";
        echo "<td>", $row['ThuTu'], "</td>";
        echo "<td class='text-center'>", $checked_anhien, "</td>";
        echo '<td class="text-center"> <a href="' . ADMIN_URL . '/?ctrl=nhasanxuat&act=edit&id='.$row['idNSX'].'"><i class="fa fa-pencil me-1" aria-hidden="true"></i></a>
                    <a href="' . ADMIN_URL . '/?ctrl=nhasanxuat&act=delete&id='.$row['idNSX'].'"><i class="fa fa-trash text-danger ms-1" aria-hidden="true"></i></a> </td>';
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
