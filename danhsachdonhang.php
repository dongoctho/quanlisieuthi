<?php
 include 'inc/header.php';
 include 'inc/sidebar.php';
 ?>
 <div class="card1">
      <div class="card-header">
        <h1 class="h1_themsp">Danh sách đơn hàng</h1>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table">
          <thead>
          <tr>
                        <th class="lids">ID</th>
                        <th class="lids">Tên khách hàng</th>
                        <th class="lids">Địa chỉ KH</th>
                        <th class="lids">Tên hàng</th>
                        <th class="lids">Số lượng</th>
                        <th class="lids">Đơn giá</th>
                        <th class="lids">Phương thức TT</th>
                        <th class="lids">Người lập hóa đơn</th>
                        <th class="lids">Thành tiền</th>
                        <th class="lids">Sửa</th>
                        <th class="lids">Xóa</th>
          </tr>
          </thead>
          <tbody>
          <tr>
                    <td class="lids1">0</td>
                    <td class="lids1">Đỗ Ngọc Thọ</td>
                    <td class="lids1">Hà Nội</td>
                    <td class="lids1">Dầu ăn</td>
                    <td class="lids1">2</td>
                    <td class="lids1">50.000 đ</td>
                    <td class="lids1">ViettelPay</td>
                    <td class="lids1">Thu</td>
                    <td class="lids1">100.000 đ</td>
                    <td class="lids1"><a href="/suadonhang.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="lids1"><a onclick="return confirm('Xác nhận xóa?')" href=""><i class="fa-solid fa-trash"></i></a></td>
          </tr>
          <tr>
                    <td class="lids1">1</td>
                    <td class="lids1">Trương Thị Hà Phương</td>
                    <td class="lids1">Hà Nam</td>
                    <td class="lids1">Trà sữa</td>
                    <td class="lids1">5</td>
                    <td class="lids1">25.000 đ</td>
                    <td class="lids1">MOMO</td>
                    <td class="lids1">Lan</td>
                    <td class="lids1">125.000 đ</td>
                    <td class="lids1"><a href="/suadonhang.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="lids1"><a onclick="return confirm('Xác nhận xóa?')" href=""><i class="fa-solid fa-trash"></i></a></td>
          </tr>
          </tbody>
         
        </table>
      </div>
<?php
 include 'inc/footer.php';
?>