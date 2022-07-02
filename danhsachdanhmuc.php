<?php
 include 'inc/header.php';
 include 'inc/sidebar.php';
 ?>
 <div class="card1">
      <div class="card-header">
        <h1 class="h1_themsp">Danh sách danh mục</h1>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table">
          <thead>
          <tr>
                        <th class="lids">ID</th>
                        <th class="lids">Mã danh mục</th>
                        <th class="lids">Tên danh mục</th>
                        <th class="lids">Mô tả</th>                 
                        <th class="lids">Sửa</th>
                        <th class="lids">Xóa</th>
          </tr>
          </thead>
          <tbody>
          <tr>
                    <td class="lids1">0</td>
                    <td class="lids1">DM01</td>
                    <td class="lids1">Thời trang cho cả gia đình</td>
                    <td class="lids1">Quần áo bé gái - trai, ...</td>              
                    <td class="lids1"><a href="/suadanhmuc.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="lids1"><a onclick="return confirm('Xác nhận xóa?')" href=""><i class="fa-solid fa-trash"></i></a></td>
          </tr>
          <tr>
                    <td class="lids1">1</td>
                    <td class="lids1">DM02</td>
                    <td class="lids1">Chăm sóc cá nhân</td>
                    <td class="lids1">Bông tẩy trang, sữa rửa mặt, ...</td>              
                    <td class="lids1"><a href="/suadanhmuc.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="lids1"><a onclick="return confirm('Xác nhận xóa?')" href=""><i class="fa-solid fa-trash"></i></a></td>
          </tr>
          </tbody>
         
        </table>
      </div>
<?php
 include 'inc/footer.php';
?>