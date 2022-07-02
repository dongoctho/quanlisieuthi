<?php
 include 'inc/header.php';
 include 'inc/sidebar.php';
 ?>
 <div class="card1">
      <div class="card-header">
        <h1 class="h1_themsp">Danh sách nhân viên</h1>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table">
          <thead>
          <tr>
                        <th class="lids">ID</th>
                        <th class="lids">Mã nhân viên</th>
                        <th class="lids">Tên nhân viên</th>
                        <th class="lids">Địa chỉ</th>
                        <th class="lids">Ngày vào làm</th>
                        <th class="lids">Số điện thoại</th>
                        <th class="lids">Kỉ luật</th>     
                        <th class="lids">Khen thưởng</th>                     
                        <th class="lids">Sửa</th>
                        <th class="lids">Xóa</th>
          </tr>
          </thead>
          <tbody>
          <tr>
                    <td class="lids1">0</td>
                    <td class="lids1">NV01</td>
                    <td class="lids1">Đỗ Ngọc Thọ</td>
                    <td class="lids1">Hà Nội</td>
                    <td class="lids1">30/4/2022</td>
                    <td class="lids1">0379821973</td>
                    <td class="lids1">Null</td>     
                    <td class="lids1">Thưởng theo tháng</td>                   
                    <td class="lids1"><a href="/suanhanvien.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="lids1"><a onclick="return confirm('Xác nhận xóa?')" href=""><i class="fa-solid fa-trash"></i></a></td>
          </tr>
          <tr>
                    <td class="lids1">1</td>
                    <td class="lids1">NV02</td>
                    <td class="lids1">Trương Thị Hà Phương</td>
                    <td class="lids1">Hà Nam</td>
                    <td class="lids1">30/5/2022</td>
                    <td class="lids1">0379821973</td>
                    <td class="lids1">Null</td>     
                    <td class="lids1">Thưởng theo quý</td>                
                    <td class="lids1"><a href="/suanhanvien.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="lids1"><a onclick="return confirm('Xác nhận xóa?')" href=""><i class="fa-solid fa-trash"></i></a></td>
          </tr>
          </tbody>
         
        </table>
      </div>
<?php
 include 'inc/footer.php';
?>