<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin cá nhân</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
}

.container {
    display: flex;
}

.sidebar {
    width: 250px;
    background-color: #D9D9D9;
    padding: 15px;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    height: 660px;
}

.profile-pic {
    width: 100px;
    height: 100px;
    background-color: white;
    border-radius: 50%;
    margin-bottom: 20px;
}

h2 {
    margin: 0;
    font-size: 18px;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav li {
    padding: 10px;
    cursor: pointer;
}

nav li.active {
    background-color: #e1b0b0;
}

.main-content {
    flex: 1;
    padding: 20px;
    background-color: #fff;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.back-btn {
    text-decoration: none;
    color: #007BFF;
    margin: 10px 0px 10px 10px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

td {
    padding: 10px;
    border-bottom: 1px solid #ccc;
}
th {
    padding: 10px 250px 10px 0px;
    border-bottom: 1px solid #ccc;
}

/* .account-info {
    margin: 20px 0;
} */

/* .account-box {
    height: 40px;
    background-color: #f0f0f0;
    margin: 5px 0;
} */

.actions {
    display: flex;
    justify-content: space-between;
}

.button {
    padding: 10px 15px;
}

/* .voucher, .feedback {
    background-color: #007BFF;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
} */
h1{
    margin: 10px 500px 10px 300px;
}
a{
    text-decoration: none;
    color: black;
}

</style>
<body>
    <div class="container">
        <div class="sidebar">
        <img src="<?php echo e(asset('img/' . $customer->image)); ?>" width="50px" height="50px" class="profile-pic">

            <h2>Tên khách hàng</h2>
            <nav>
                <ul>
                    <li class="active"><a href="#">Thông tin cá nhân</a></li>
                    <li><a href="#">Đơn mua</a></li>
                    <li><a href="#">Nhắn tin với shop</a></li>
                    <li><a href="#">Mục yêu thích</a></li>
                    <li><a href="#">Đăng xuất</a></li>
                </ul>
            </nav>
        </div>
        <div class="main-content">
            <header>
            <a class="back-btn" href="">Trở về</a>
                <h1>Thông tin cá nhân</h1>
            </header> 
            <table>
            
                <tr>
                    <td>Tên Khách Hàng:</td>
                    <th><?php echo e($customer->Name); ?></th>
                </tr>
                <tr>
                    <td>Email:</td>
                    <th><?php echo e($customer->Email); ?></th>
                </tr>
                <tr>
                    <td>Số Điện Thoại:</td>
                    <th><?php echo e($customer->Phone); ?></th>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <th><?php echo e($customer->Address); ?></th>
                </tr>
            </table>
            <!-- <div class="account-info">
                <h3>Ngân hàng đã liên kết</h3>
                <div class="account-box"></div>
                <h3>Liên kết tài khoản</h3>
                <div class="account-box"></div>
            </div>
            <div class="actions">
                <button class="voucher">Voucher của bạn</button>
                <button class="feedback">Đánh giá của bạn</button>
            </div> -->
        </div>
    </div>
</body>
</html><?php /**PATH D:\doan_be2\buithamky\resources\views/profilekhachhang.blade.php ENDPATH**/ ?>