<?php
 include 'inc/header.php';
 include 'inc/sidebar.php';
 ?>
<div class="add-body">
    <div class="add-top">
        <h1 class="themdonhang">NHẬP HÀNG</h1>    
    </div>
    <div class="add-bottom">
        <div class="add-bottom-input">
            <div class="add-bottom-1">
                <div class="nhapten">
                    <p class="addp">Ngày nhập</p>
                    <input type="date" name="name" class="txtTen1">
                </div>
                <div class="nhapten">
                    <p class="addp">Nhập họ tên người giao hàng</p>
                    <input type="text" name="name" class="txtTen2" >
                </div>
                
            </div>
            <div class="add-bottom-2">
                <div class="nhapten">
                    <p class="addp">Địa điểm nhập hàng</p>
                    <input type="text" name="name" class="txtTen1">
                </div>
                <div class="nhapten">
                    <p class="addp">Nhập tên sản phẩm</p>
                    <input type="text" name="name" class="txtTen2">
                </div>
            </div>
            <div class="add-bottom-3">
                <div class="nhapten">
                    <p class="addp1">Nhập mã sản phẩm</p>
                    <input type="text" name="name" class="txtTen3">
                        <p class="addp2">Đơn vị tính</p>
                        <select  class="add-p">
                            <option value="">Theo Thùng</option>
                            <option value="">Theo Gói</option>
                            <option value="">Theo Lô</option>
                            <option value="">Theo Hộp</option>                            
                        </select> 
                    <p class="addp1">Thành tiền</p>
                    <input type="text" name="name" class="txtTen3">
                </div>
                <div class="nhapten">
                    <p class="addp1">số lượng</p>
                    <input type="text" name="name" class="txtTen3">
                    <p class="addp1">Đơn giá</p>
                    <input type="text" name="name" class="txtTen3">
                    <p class="addp1">Số phiếu nhập kho</p>
                    <input type="text" name="name" class="txtTen3">
                </div>
                <div class="nhapten">
                    
                    <div class="nhaptenitem">
                        <p class="addp2">Chọn người lập phiếu</p>
                        <select  class="add-p">
                            <option value="">Đỗ Ngọc Thọ</option>
                            <option value="">Trương Thị Hà Phương</option>
                            <option value="">Nguyễn Đình Tùng Dương</option>
                            <option value="">Lê Thị Phương Anh</option>
                        </select> 
                    </div>
                    <div class="nhaptenitem">
                        <p class="addp2">Chọn thủ kho</p>
                            <select class="add-p">
                            <option value="">Đỗ Ngọc Thọ</option>
                            <option value="">Trương Thị Hà Phương</option>
                            <option value="">Nguyễn Đình Tùng Dương</option>
                            <option value="">Lê Thị Phương Anh</option>
                            </select> 
                    </div>                       
                    <div class="nhapten">
                        <button class="txtTen them">NHẬP</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
 include 'inc/footer.php';
?>