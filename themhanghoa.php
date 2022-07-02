<?php
 include 'inc/header.php';
 include 'inc/sidebar.php';
 ?>
<div class="add-body">
    <div class="add-top">
        <h1 class="themdonhang">THÊM HÀNG HÓA</h1>    
    </div>
    <div class="add-bottom">
        <div class="add-bottom-input">
            <div class="add-bottom-1">
                <div class="nhapten">
                    <p class="addp">Nhập mã hàng hóa</p>
                    <input type="text" name="name" class="txtTen1">
                </div>
                <div class="nhapten">
                    <p class="addp">Nhập tên hàng hóa</p>
                    <input type="text" name="name" class="txtTen2" >
                </div>
            </div>
            <div class="add-bottom-2">
                <div class="nhapten">
                    <p class="addp">Nhập mô tả hàng hóa</p>
                    <input type="text" name="name" class="txtTen1">
                </div>
                <div class="nhapten">
                    <p class="addp">Nhập thông tin bảo hành</p>
                    <input type="text" name="name" class="txtTen2">
                </div>
                
            </div>
            <div class="add-bottom-3">
            <div class="nhaptenitem">
                        <p class="addp2">Chọn nhà sản xuất</p>
                        <select  class="add-p">
                            <option value="">Công ty cổ phần bánh kẹo Kinh Đô (KDC)</option>
                            <option value="">Công ty cổ phần bánh kẹo Bibica</option>
                            <option value="">Công ty TNHH Bánh Kẹo Hải Hà</option>
                            <option value="">Công ty Cổ Phần Đường Quảng Ngãi (Bicafun)</option>
                            <option value="">Công ty Cổ Phần Đầu Tư & Thương Mại Tràng An</option>
                            <option value="">Công ty Cổ Phần Bánh Kẹo Hải Châu</option>
                            <option value="">Công ty bánh kẹo Á Châu ( ABC Bakery)</option>
                        </select> 
                    </div>
                <div class="nhapten">
                    <p class="addp1">Nhập số lượng</p>
                    <input type="text" name="name" class="txtTen3" >
                </div>
                <div class="nhaptenitem">
                        <p class="addp2">Đơn vị tính</p>
                        <select  class="add-p">
                            <option value="">Theo Thùng</option>
                            <option value="">Theo Gói</option>
                            <option value="">Theo Lô</option>
                            <option value="">Theo Hộp</option>                            
                        </select> 
                    </div>
                
            </div>  
            <div class="nhaptenitem">
                        <p class="addp2">Danh mục hàng hóa</p>
                        <select  class="add-p">
                            <option value="">Bánh kẹo - Đồ ăn vặt</option>
                            <option value="">Chăm sóc cá nhân</option>
                            <option value="">Dầu ăn - Gia vị nấu ăn</option>
                            <option value="">Đi chợ</option>    
                            <option value="">Điện gia dụng</option>                            
                            <option value="">Đồ dùng bếp</option>                            
                            <option value="">Đồ dùng gia đình</option>                            
                            <option value="">Đồ uống</option>                            
                            <option value="">Mì - Cháo - Phở ăn liền</option>                            
                            <option value="">Sữa - Đồ ăn cho bé</option>                            
                            <option value="">Thời trang cho cả gia đình</option>                            
                            <option value="">Thực phẩm đông lạnh</option>                            
                            <option value="">Thực phẩm khô các loại</option>                            
                            <option value="">Vệ sinh nhà cửa</option>                            
                        </select> 
                    </div>
                    <div class="nhapten">
                    <button class="txtTen them">THÊM</button>
                </div>
        </div>
    </div>
</div>
 

 <?php
 include 'inc/footer.php';
?>
