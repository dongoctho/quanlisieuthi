<?php
 include 'inc/header.php';
 include 'inc/sidebar.php';
 ?>
<div class="add-body">
    <div class="add-top">
        <h1 class="themdonhang">SỬA THẺ KHUYẾN MẠI TÍCH ĐIỂM</h1>    
    </div>
    <div class="add-bottom">
        <div class="add-bottom-input">
            <div class="add-bottom-1">
                <div class="nhapten">
                    <p class="addp">Nhập mã thẻ</p>
                    <input type="text" name="name" class="txtTen1">
                </div>
                <div class="nhapten">
                    <p class="addp">Nhập tên khách hàng</p>
                    <input type="text" name="name" class="txtTen2" >
                </div>
            </div>
            <div class="add-bottom-2">
                <div class="nhapten">
                    <p class="addp">Nhập mã khách hàng</p>
                    <input type="text" name="name" class="txtTen1">
                </div>
                <div class="nhapten">
                    <p class="addp">Nhập số điện thoại</p>
                    <input type="text" name="name" class="txtTen2">
                </div>
            </div>
            <div class="nhaptenitem">
                        <p class="addp2">Loại thẻ tích điểm</p>
                        <select  class="add-p">
                            <option value="">Dựa theo số lần đến siêu thị</option>
                            <option value="">Dựa theo giá trị thanh toán</option>
                            <option value="">Dựa theo số lượng sản phẩm</option>
                        </select> 
                    </div>
            <div class="add-bottom-3">
                <div class="nhapten">
                    <button class="txtTen them">SỬA</button>
                </div>
            </div>
        
        
        </div>
    </div>
</div>
 

 <?php
 include 'inc/footer.php';
?>
