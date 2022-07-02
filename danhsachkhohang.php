<?php
 include 'inc/header.php';
 include 'inc/sidebar.php';
 ?>
 <div class="card1">
      <div class="card-header">
        <h1 class="h1_themsp">Danh sách kho hàng</h1>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table1">
          <thead>
          <tr>
                        <th class="lids2">Số phiếu</th>
                        <th class="lids2">Phiếu</th>
                        <th class="lids2">Ngày nhập</th>
                        <th class="lids2">Người giao/nhận</th>
                        <th class="lids2">Địa điểm</th>
                        <th class="lids2">Tên sản phẩm</th>
                        <th class="lids2">Mã sản phẩm</th>
                        <th class="lids2">ĐV tính</th>
                        <th class="lids2">Số lượng</th>
                        <th class="lids2">Đơn giá</th>
                        <th class="lids2">Thành tiền</th>
                        <th class="lids2">Người lập phiếu</th>
                        <th class="lids2">Thủ kho</th>
                        <th class="lids2">Sửa</th>
                        <th class="lids2">Xóa</th>
          </tr>
          </thead>
          <tbody>
          <tr>
                    <td class="lids3">0</td>
                    <td class="lids3">Xuất</td>
                    <td class="lids3">13/04/2022</td>
                    <td class="lids3">Phương</td>
                    <td class="lids3">Hà Nội</td>
                    <td class="lids3">Trà sữa</td>
                    <td class="lids3">MA01</td>
                    <td class="lids3">Lô</td>
                    <td class="lids3">200</td>
                    <td class="lids3">50.000 đ</td>
                    <td class="lids3">100.000 đ</td>
                    <td class="lids3">Đỗ Ngọc Thọ</td>
                    <td class="lids3">Null</td>
                    <td class="lids3"><a href="/suaxuathang.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="lids3"><a onclick="return confirm('Xác nhận xóa?')" href=""><i class="fa-solid fa-trash"></i></a></td>
          </tr>
          <tr>
                    <td class="lids3">1</td>
                    <td class="lids3">Nhập</td>
                    <td class="lids3">13/04/2022</td>
                    <td class="lids3">Phương</td>
                    <td class="lids3">Hà Nội</td>
                    <td class="lids3">Dầu ăn</td>
                    <td class="lids3">MA01</td>
                    <td class="lids3">Lô</td>
                    <td class="lids3">1000</td>
                    <td class="lids3">100.000 đ</td>
                    <td class="lids3">200.000 đ</td>
                    <td class="lids3">Đỗ Ngọc Thọ</td>
                    <td class="lids3">Trương Thị Hà Phương</td>
                    <td class="lids3"><a href="/suanhaphang.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="lids3"><a onclick="return confirm('Xác nhận xóa?')" href=""><i class="fa-solid fa-trash"></i></a></td>
          </tr>
          </tbody>
         
        </table>
      </div>
<?php
 include 'inc/footer.php';
?>