<?php
 include 'inc/header.php';
 include 'inc/sidebar.php';
 ?>
 <div class="card1">
      <div class="card-header">
        <h1 class="h1_themsp">Danh sách thẻ khuyến mại tích điểm</h1>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table">
          <thead>
          <tr>
                        <th class="lids">ID</th>
                        <th class="lids">Mã thẻ</th>
                        <th class="lids">Tên khách hàng</th>
                        <th class="lids">Mã khách hàng</th>
                        <th class="lids">Số điện thoại</th>
                        <th class="lids">Số thẻ tích điểm</th> 
                        <th class="lids">Loại thẻ</th>                     
                        <th class="lids">Sửa</th>
                        <th class="lids">Xóa</th>
          </tr>
          </thead>
          <tbody>
          <tr>
                    <td class="lids1">0</td>
                    <td class="lids1">KMTD01</td>
                    <td class="lids1">Đỗ Ngọc Thọ</td>
                    <td class="lids1">KH01</td>
                    <td class="lids1">0379821973</td>
                    <td class="lids1">12</td>    
                    <td class="lids1">Dựa theo số lần đến siêu thị</td>                   
                    <td class="lids1"><a href="/suakmtichdiem.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="lids1"><a onclick="return confirm('Xác nhận xóa?')" href=""><i class="fa-solid fa-trash"></i></a></td>
          </tr>
          <tr>
                    <td class="lids1">1</td>
                    <td class="lids1">KMTD02</td>
                    <td class="lids1">Trương Thị Hà Phương</td>
                    <td class="lids1">KH02</td>
                    <td class="lids1">0379821973</td>
                    <td class="lids1">20</td>
                    <td class="lids1">Dựa theo số lượng sản phẩm  </td>                       
                    <td class="lids1"><a href="/suakmtichdiem.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="lids1"><a onclick="return confirm('Xác nhận xóa?')" href=""><i class="fa-solid fa-trash"></i></a></td>
          </tr>
          </tbody>
         
        </table>
      </div>
<?php
 include 'inc/footer.php';
?>