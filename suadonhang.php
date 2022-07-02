<?php
 include 'inc/header.php';
 include 'inc/sidebar.php';
 ?>
<div class="add-body">
    <div class="add-top">
        <h1 class="themdonhang">SỬA ĐƠN HÀNG</h1>    
    </div>
    <div class="add-bottom">
        <div class="add-bottom-input">
            <div class="add-bottom-1">
                <div class="nhapten">
                    <p class="addp">Nhập tên khách hàng</p>
                    <input type="text" name="name" class="txtTen1">
                </div>
                <div class="nhapten">
                    <p class="addp">Nhập địa chỉ khách hàng</p>
                    <input type="text" name="name" class="txtTen2" >
                </div>
            </div>
            <div class="add-bottom-2">
                <div class="nhapten">
                    <p class="addp">Nhập tên hàng</p>
                    <input type="text" name="name" class="txtTen1">
                </div>
                <div class="nhapten">
                    <p class="addp">Nhập số lượng</p>
                    <input type="text" name="name" class="txtTen2">
                </div>
            </div>
            <div class="add-bottom-3">
                <div class="nhapten">
                    <p class="addp1">Nhập đơn giá</p>
                    <input type="text" name="name" class="txtTen3">
                    <p class="addp1">Thành tiền</p>
                    <input type="text" name="name" class="txtTen3">
                </div>
                <div class="nhapten option1">
                    <div class="nhaptenitem">
                        <p class="addp2">Chọn phương thức thanh toán</p>
                        <select  class="add-p">
                            <option value="ViettelPay">ViettelPay</option>
                            <option value="Banking">Thanh toán bằng Thẻ ngân hàng</option>
                            <option value="Banking">ZaloPay</option>
                            <option value="Bitcoid">MOMO</option>
                            <option value="Bitcoid">Thanh toán bằng tiền mặt</option>
                        </select> 
                    </div>
                    <div class="nhaptenitem">
                        <p class="addp2">Chọn người lập hóa đơn</p>
                            <select class="add-p">
                            <option value="">Đỗ Ngọc Thọ</option>
                            <option value="">Trương Thị Hà Phương</option>
                            <option value="">Nguyễn Đình Tùng Dương</option>
                            <option value="">Lê Thị Phương Anh</option>
                            </select> 
                    </div>
                </div>
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
