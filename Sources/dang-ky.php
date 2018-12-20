<?php
include 'controller/thanhvien_controller.php';
$thanhvien = new C_thanhvien();
$thanhvien->dangky();
include 'view/dangky.php';
?>