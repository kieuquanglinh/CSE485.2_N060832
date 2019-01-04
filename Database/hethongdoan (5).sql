-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 03, 2019 lúc 08:37 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hethongdoan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsachdetai`
--

CREATE TABLE `danhsachdetai` (
  `maDT` int(11) NOT NULL,
  `hoTen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tenKhoa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deTai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lienHe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhsachdetai`
--

INSERT INTO `danhsachdetai` (`maDT`, `hoTen`, `tenKhoa`, `deTai`, `lienHe`) VALUES
(1, 'Kiều Quang Linh', 'Khoa CNTT', 'Quản lí đồ án tốt nghiệp', 123456789),
(2, 'Nguyễn Tuấn Đạt', 'Khoa CT', 'Xây dựng nhà văn hóa', 123456789),
(3, 'Hoàng Ngọc Hòa', 'Khoa Nước', 'Quản lí tài nguyên biển đảo', 123456789),
(4, 'Phan Hà Vương', 'Khoa CNTT', 'Website nghe nhạc', 123456789),
(5, 'Nguyễn Thị Hường', 'Khoa Kinh Tế', 'Quản lí tài chính doanh nghiệp', 123456789),
(6, 'Tiêu Thị Linh', 'Khoa Kinh Tế', 'Quản lí doanh nghiệp', 123456789),
(7, 'Vinh Nguyễn Khắc', 'Khoa CNTT', 'Book phòng online', 123456789),
(8, 'Nguyễn Tuấn Đạt', 'Khoa CNTT', 'Quản lí khách sạn', 123456789),
(9, 'Hoàng Thu Hà', 'Khoa Kinh Tế', 'Quản Lí Tiền Ảo', 123456789),
(10, 'Hoàng Phi Long', 'Khoa CNTT', 'Quản lí ngân hàng máu', 123456789),
(11, 'Mai Trọng Lực', 'Khoa CNTT', 'Quản lí websie thể thao', 123456789),
(12, 'Nguyễn Thành Chung', 'Khoa Kinh Tế', 'Quản lí dòng tiền', 123456789),
(13, 'Nguyễn Văn Kiên', 'Khoa công trình', 'Xây dựng khu đô thi', 123456789),
(14, 'Kiều Cao Ninh', 'Khoa CNTT', 'Quản lí đồ án tốt nghiệp', 123456789),
(15, 'Nguyễn Đức Du', 'Khoa Nước', 'Quản lí hệ sinh thái biển', 123456789),
(16, 'Kiều Công Long', 'Khoa Công Trình', 'Quy hoạch đô thị', 123456789);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `maGiangVien` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenGiangVien` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`maGiangVien`, `tenGiangVien`) VALUES
('1', 'Kieu Tuan Dung'),
('2', 'Dang Huyen Thu'),
('3', 'Phi Minh Quyen'),
('4', 'Phan Ha Vuong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `maKhoa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenKhoa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`maKhoa`, `tenKhoa`) VALUES
('CNTT', 'Khoa CNTT'),
('C', 'Khoa Công Trình'),
('KT', 'Khoa Kinh Tế'),
('N', 'Khoa Nước');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhandoan`
--

CREATE TABLE `nhandoan` (
  `maDoan` int(11) NOT NULL,
  `hoTen` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ngaySinh` date NOT NULL,
  `tenKhoa` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dienThoai` int(15) NOT NULL,
  `tenDeTai` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tenGiangVien` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhandoan`
--

INSERT INTO `nhandoan` (`maDoan`, `hoTen`, `ngaySinh`, `tenKhoa`, `diaChi`, `email`, `dienThoai`, `tenDeTai`, `tenGiangVien`) VALUES
(1, 'Kiều Quang Linh', '1998-04-07', 'Khoa CNTT', 'Cần Kiệm Thạch Thất Hà Nội', 'linhkq62@wru.vn', 969659721, 'Quản Lí đồ án tốt nghiệp', 'Dang Huyen Thu'),
(2, '04/07/1998', '1998-04-07', 'Khoa CNTT', 'Cần Kiệm Thạch Thất Hà Nội', 'linhkq62@wru.vn', 969659721, 'Quản Lí đồ án tốt nghiệp', 'Dang Huyen Thu'),
(3, 'Kiều Quang Linh', '1998-04-07', 'Khoa CNTT', 'Cần Kiệm Thạch Thất Hà Nội', 'linhkq62@wru.vn', 969659721, 'Quản Lí đồ án tốt nghiệp', 'Dang Huyen Thu'),
(4, 'Kiều Quang Linh', '1998-04-07', 'Khoa CNTT', 'Cần Kiệm Thạch Thất Hà Nội', 'linhkq62@wru.vn', 969659721, 'Quản Lí đồ án tốt nghiệp', 'Dang Huyen Thu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanly`
--

CREATE TABLE `quanly` (
  `maQL` int(11) NOT NULL,
  `hoTen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenDangNhap` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `matKhau` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quanly`
--

INSERT INTO `quanly` (`maQL`, `hoTen`, `tenDangNhap`, `matKhau`) VALUES
(1, 'Kiều Quang Linh', 'admin', '$2y$10$WjYMbtQ.a6V5syCz8dFz1O8tUmfm7Ag2VUbfvWZEq5hLnQne6vbjm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `maTV` int(11) DEFAULT NULL,
  `hoTen` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenDangNhap` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `matKhau` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maKichHoat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`maTV`, `hoTen`, `tenDangNhap`, `email`, `matKhau`, `maKichHoat`, `trangThai`) VALUES
(NULL, 'Kiều Quang Linh', 'linhkq62', 'linhkq62@wru.vn', '$2y$10$f.tJfPf/jyTQgiNLnUtnyeUYblNYOk94ZX2zp27ozi82ume53XlS2', '8b1f3dbb49ef1b053aab453720a5ea59', 0),
(NULL, 'Vinhnk', 'vinhnk62', 'vinhnk62@wru.vn', '$2y$10$1vaJO93ZnDca98Lapwgr5emBPJaZ/NsXEeE.clt/SHtl77r/FUXVC', '3c7b2ac320f26e7eb4fef25dda2fb59f', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhthanh`
--

CREATE TABLE `tinhthanh` (
  `maTinhThanh` int(11) NOT NULL,
  `tenTinhThanh` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhthanh`
--

INSERT INTO `tinhthanh` (`maTinhThanh`, `tenTinhThanh`) VALUES
(1, 'Hà Nội'),
(2, 'Hòa Bình'),
(3, 'Thái Nguyên'),
(4, 'Hà Nam'),
(5, 'Ninh Bình'),
(6, 'Thanh Hóa'),
(7, 'Sơn La'),
(8, 'Điện Biên'),
(9, 'Lào Cai'),
(10, 'Lai Châu'),
(11, 'Hải Phòng'),
(12, 'Quảng Ninh'),
(13, 'Lạng Sơn'),
(14, 'Tuyên Quang'),
(15, 'Nghệ An'),
(16, 'Cần Thơ'),
(17, 'Bạc Liêu'),
(18, 'Bắc Ninh'),
(19, 'Lâm Đồng'),
(20, 'Quảng Bình'),
(21, 'Quảng Trị'),
(22, 'Bình Phước'),
(23, 'Đà Nẵng'),
(24, 'Khánh Hòa'),
(25, 'Hà Tĩnh'),
(26, 'Hải Dương'),
(27, 'Hưng Yên'),
(28, 'Ninh Bình'),
(29, 'Vĩnh Phúc'),
(30, 'Thái Bình'),
(31, 'Bình Định'),
(32, 'Phú Yên');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhsachdetai`
--
ALTER TABLE `danhsachdetai`
  ADD PRIMARY KEY (`maDT`);

--
-- Chỉ mục cho bảng `nhandoan`
--
ALTER TABLE `nhandoan`
  ADD PRIMARY KEY (`maDoan`);

--
-- Chỉ mục cho bảng `quanly`
--
ALTER TABLE `quanly`
  ADD PRIMARY KEY (`maQL`);

--
-- Chỉ mục cho bảng `tinhthanh`
--
ALTER TABLE `tinhthanh`
  ADD PRIMARY KEY (`maTinhThanh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
