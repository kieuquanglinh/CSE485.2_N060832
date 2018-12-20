<?php
include 'controller/thanhvien_controller.php';
$thanhvien = new C_thanhvien();
$thanhvien->dangnhap();
include 'view/dangnhap.php';