<?php
 include 'inc/header.php';
 include 'inc/sidebar.php';
 ?>
 <div class="card1">
      <div class="card-header">
        <h1 class="h1_themsp">Danh sách nhà cung cấp</h1>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table">
          <thead>
          <tr>
                        <th class="lids">ID</th>
                        <th class="lids">Mã nhà cung cấp</th>
                        <th class="lids">Tên nhà cung cấp</th>
                        <th class="lids">Địa chỉ</th>
                        <th class="lids">Số điện thoại</th>
                        <th class="lids">Email</th>                     
                        <th class="lids">Sửa</th>
                        <th class="lids">Xóa</th>
          </tr>
          </thead>
          <tbody>
          <tr>
                    <td class="lids1">0</td>
                    <td class="lids1">NCC01</td>
                    <td class="lids1">Đỗ Ngọc Thọ</td>
                    <td class="lids1">Hà Nội</td>
                    <td class="lids1">0379821973</td>
                    <td class="lids1">200118thodepgiai@gmail.com</td>                   
                    <td class="lids1"><a href="/suanhacungcap.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="lids1"><a onclick="return confirm('Xác nhận xóa?')" href=""><i class="fa-solid fa-trash"></i></a></td>
          </tr>
          <tr>
                    <td class="lids1">1</td>
                    <td class="lids1">NCC02</td>
                    <td class="lids1">Trương Thị Hà Phương</td>
                    <td class="lids1">Hà Nam</td>
                    <td class="lids1">0379821973</td>
                    <td class="lids1">haphuong2909@gmail.com</td>                   
                    <td class="lids1"><a href="/suanhacungcap.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="lids1"><a onclick="return confirm('Xác nhận xóa?')" href=""><i class="fa-solid fa-trash"></i></a></td>
          </tr>
          </tbody>
         
        </table>
      </div>
<?php
 include 'inc/footer.php';
?>