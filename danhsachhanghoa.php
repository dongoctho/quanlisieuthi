<?php
 include 'inc/header.php';
 include 'inc/sidebar.php';
 ?>
 <div class="card1">
      <div class="card-header">
        <h1 class="h1_themsp">Danh sách hàng hóa</h1>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table">
          <thead>
          <tr>
                        <th class="lids">ID</th>
                        <th class="lids">Mã hàng hóa</th>
                        <th class="lids">Tên hàng hóa</th>
                        <th class="lids">Mô tả</th>
                        <th class="lids">Thông tin bảo hành</th>
                        <th class="lids">Nhà sản xuất</th>  
                        <th class="lids">Số lượng</th>                     
                        <th class="lids">Đơn vị tính</th>                     
                        <th class="lids">Sửa</th>
                        <th class="lids">Xóa</th>
          </tr>
          </thead>
          <tbody>
          <tr>
                    <td class="lids1">0</td>
                    <td class="lids1">HH01</td>
                    <td class="lids1">Kẹo bạc hà</td>
                    <td class="lids1">Thơm ngon</td>
                    <td class="lids1">Tốt</td>
                    <td class="lids1">Công ty cổ phần bánh kẹo Kinh Đô (KDC)</td>     
                    <td class="lids1">12</td>                   
                    <td class="lids1">Lô</td>                   
                    <td class="lids1"><a href="/suahanghoa.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="lids1"><a onclick="return confirm('Xác nhận xóa?')" href=""><i class="fa-solid fa-trash"></i></a></td>
          </tr>
          <tr>
                    <td class="lids1">1</td>
                    <td class="lids1">HH02</td>
                    <td class="lids1">Trà sữa</td>
                    <td class="lids1">Giải khát</td>
                    <td class="lids1">Tốt</td>
                    <td class="lids1">Công ty Cổ Phần Đường Quảng Ngãi (Bicafun)</td>     
                    <td class="lids1">15</td>                   
                    <td class="lids1">Lô</td>                   
                    <td class="lids1"><a href="/suahanghoa.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="lids1"><a onclick="return confirm('Xác nhận xóa?')" href=""><i class="fa-solid fa-trash"></i></a></td>
          </tr>
          </tbody>
         
        </table>
      </div>
<?php
 include 'inc/footer.php';
?>