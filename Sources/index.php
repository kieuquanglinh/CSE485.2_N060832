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
            <li class="nav-item"> <a class="nav-link" href="dang-nhap.php">Đăng Nhập</a> </li>
            <li class="nav-item"> <a class="nav-link" href="dang-ky.php">Đăng Kí</a> </li>
          </ul>
        </div>
      </div>
      </nav>
   <div class="py-5">
    <div class="container">
      <div class="row mb-3">
        <div class="text-center mx-auto p-4 bg-secondary col-lg-6 col-md-10 bg-dark">
          <h2 class="text-white">Giới Thiệu</h2>
          <p class="text-light">Một người sáng tạo luôn bị thôi thúc bởi khát vọng của sự thành công, chứ không phải khát vọng đánh bại người khác</p>
        </div>
      </div>
    <div class="col-lg-12">
          <h1 class="patient-title table-title" style="text-align:center" >Danh sách đề tài</h1>
          <table class="table bg-dark" style="color:bg-dark">
            <thead>
              <tr>
                <th scope="col">Họ Và Tên</th>
                <th scope="col">Thành Phố</th>
                <th scope="col">Khoa</th>
                <th scope="col">Đề Tài</th>
                <th scope="col">Liên hệ</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Nguyễn Văn A</th>
                <td>Hà Nội</td>
                <td>Kinh Tế</td>
                <td>QL Ngân Hàng</td>
                <td>0123456789</td>
              </tr>
              <tr>
                <th scope="row">Nguyễn Văn C</th>
                <td>Hà Nội</td>
                <td>Xây Dựng</td>
                <td>Thiết Kế Chung Cư</td>
                <td>0123456789</td>
              </tr>
              <tr>
                <th scope="row">Nguyễn Thị C</th>
                <td>Nam Định</td>
                <td>Nước</td>
                <td>QL Nước</td>
                <td>0123456789</td>
              </tr>
              <tr>
              <th scope="row">Nguyễn Thị D</th>
                <td>Tuyên Quang</td>
                <td>CNTT</td>
                <td>Thiết Kế Web Bán Hàng</td>
                <td>0123456789</td>
            </tbody>
          </table>
          <p><a href="#" style="color: white">Chi Tiết >></a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="py-0 pt-1 pb-5">
    <div class="container">
      <div class="sub-title">
        <a href="@">
          <h3 class="mt-2" style="border-top: 1px solid gray">Bạn Đọc</h3>
        </a>
      </div>
      <div class="row">
        <div class="p-4 col-lg-4 col-md-6">
          <h4><b>Bold Heading 4</b></h4>
          <p>Paragraph - Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
          <p>
            <a href="#">Xem tiếp &gt;&gt;</a>
          </p>
        </div>
        <div class="p-4 col-lg-4 col-md-6">
          <h4><b>Bold Heading 4</b></h4>
          <p>Paragraph - Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
          <p>
            <a href="#">Xem tiếp &gt;&gt;</a>
          </p>
        </div>
        <div class="p-4 col-lg-4" style="">
          <h4><b>Bold Heading 4</b></h4>
          <p>Paragraph - Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
          <p contenteditable="true">
            <a href="#">Xem tiếp &gt;&gt;</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  
      <div class="container">
        <div class="row">
          <div class="p-0 col-lg-4 col-md-6">
          <iframe src="https://www.google.com/maps/place/%C4%90%E1%BA%A1i+H%E1%BB%8Dc+th%E1%BB%A7y+l%E1%BB%A3i/@21.0075612,105.8214779,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ac81847527d9:0x608eb25e26856d92!8m2!3d21.0075562!4d105.8236666" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-md-5 align-self-center p-4 offset-md-1">
            <h1> Quản Lí Đồ Án</h1>
            <p class="mb-4 text-primary">795 Folsom Ave, Suite 600 <br>San Francisco, CA 94107 <br> <abbr title="Phone">P:</abbr>
              (123) 456-7890 </p>
            <div class="row text-center">
              <div class="col-md-2 col-3">
                <a href="https://www.facebook.com/kieu.linh.39948" target="_blank"><i class="fab fa-facebook-f fa-2x"></i></a>
              </div>
              <div class="col-md-2 col-3">
                <a href="#" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
              </div>
              <div class="col-md-2 col-3">
                <a href="https://www.instagram.com/___linhkq/?hl=vi" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
              </div>
              <div class="col-md-2 col-3">
                <a href="#" target="_blank"><i class="fab fa-pinterest fa-2x"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
      <div class="container">
        <div class="row d-flex justify-content-between">
          <div class="col-lg-4 col-md-6">
            <p class="text-secondary mb-0">Copyright - linhkq62@wru.vn</p>
          </div>
          <div class="col-lg-4 col-md-6">
            <p class="text-secondary mb-0">2018 - www.quanlidoan.vn</p>
          </div>
        </div>
      </div>
    
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>
