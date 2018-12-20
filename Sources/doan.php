<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="img/ico.jpg">
  <title>Hệ Thống Quản Lý Đồ Án Tốt Nghiệp</title>
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="style2.css">
  <script type="text/javascript" scr="./jquery-3.3.1.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="./main-jquery-ajax.js"></script>
</head>

<body>
  
    
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar12">
          <a class="navbar-brand d-none d-md-block" href="index.php">
            <i class="fa d-inline fa-lg fa-circle"></i>
            <b> Quản Lí Đồ Án</b>
          </a>
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"> <a class="nav-link" href="index.php">Trang Chủ<br></a> </li>
            <li class="nav-item"> <a class="nav-link" href="doan.php">Đăng kí đồ án<br></a> </li>
             <li class="nav-item"> <a class="nav-link" href="#">Liên Hệ</a> </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" href="./dang-nhap.php">Đăng Nhập</a> </li>
            <li class="nav-item"> <a class="nav-link text-primary" href="./dang-ky.php">Đăng Ký</a> </li>
           </ul>
         </div>
        </div>
        </div>
     <div class="blood-donator mb-3" style="background-color: rgba(0,0,0,.6); color: white">
      <div class="py-5 text-center">
        <div class="row" style="">
          <div class="mx-auto col-lg-6 col-10" style="">
            <h1>Đăng Ký Đồ Án</h1>
            <form class="text-left">
              <div class="form-group"> <label for="form16" contenteditable="true">Họ Tên</label> <input type="text"
                  class="form-control" id="hoTen" placeholder="Kieu Quang Linh" name="hoTen"
                  required="required"> </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="ngaySinh">Ngày Sinh</label>
                  <input type="date" class="form-control" id="ngaySinh" required="required" name="ngaySinh">
                </div>
                <div class="form-group col-md-6">
                  <label for="form20">Khoa</label>
                  <select class="custom-select" id="khoa" name="required" required="khoa">
                    <option>Chọn Khoa</option>
                      <?php 
                      for($i=0; $i < count($bang_khoa); $i++) { 
                      ?>  
                      <option value="<?=$bang_khoa[$i]->maKhoa ?>"><?=$bang_khoa[$i]->tenKhoa ?></option>
                 <?php
                      }
                      ?>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="diaChi">Địa Chỉ</label>
                  <input type="text" class="form-control" id="diaChi" placeholder="Phùng Khoang Hà Đông Hà Nội"
                    name="diaChi" required="required">
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="donator_email">Email</label>
                  <input type="email" class="form-control" id="donator_email" placeholder="linhkq62@gmail.com" name="donator_email"
                    required="required">
                </div>
                <div class="form-group col-md-6">
                  <label for="dienThoai">Điện Thoại</label>
                  <input type="text" class="form-control" id="dienThoai" placeholder="0123456789" name="dienThoai"
                    required="required">
                </div>
                <div class="form-group col-md-8">
                  <label for="tenDeTai">Tên Đề Tài</label>
                  <input type="text" class="form-control" id="tenDeTai" placeholder="Quản Lí Doanh Nghiệp"
                    name="tenDeTai" required="required">
                </div>
                <div class="form-group col-md-4">
                  <label for="form20">Giảng Viên Hướng Dẫn</label>
                  <select class="custom-select" id="giangVien" name="giangVien" required="required">
                    <option>Chọn giảng viên</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
              </div> <button type="submit" class="btn btn-danger" id="btnHienmau">Đăng Ký</button>
            </form>
          </div>
        </div>
      </div>
    </div>
          </ul>
        </div>
      </div>
      </nav>