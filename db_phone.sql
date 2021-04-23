-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2021 lúc 09:12 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_phone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idBL` int(11) NOT NULL,
  `NoiDungBL` varchar(2000) NOT NULL,
  `idDT` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `AnHien` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienthoai`
--

CREATE TABLE `dienthoai` (
  `idDT` int(11) NOT NULL,
  `TenDT` varchar(100) NOT NULL,
  `Gia` float DEFAULT NULL,
  `urlHinh` varchar(200) DEFAULT NULL,
  `ThoiDiemNhap` datetime DEFAULT NULL,
  `MoTa` varchar(4000) DEFAULT NULL,
  `SoLanXem` int(11) NOT NULL DEFAULT 0,
  `SoLanMua` int(11) NOT NULL DEFAULT 0,
  `Hot` tinyint(4) NOT NULL,
  `idNSX` int(11) DEFAULT NULL,
  `AnHien` tinyint(4) NOT NULL DEFAULT 0,
  `SoLuongTonKho` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dienthoai`
--

INSERT INTO `dienthoai` (`idDT`, `TenDT`, `Gia`, `urlHinh`, `ThoiDiemNhap`, `MoTa`, `SoLanXem`, `SoLanMua`, `Hot`, `idNSX`, `AnHien`, `SoLuongTonKho`) VALUES
(5, 'Oppo Reno5', 8690000, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/9df78eab33525d08d6e5fb8d27136e95/o/p/oppo-reno-5_3_.jpg', NULL, 'Điện thoại Oppo Reno 5 – Thiết kế hiện đại sang trọng\r\nSản phẩm mới nhất trong series OPPO Reno của hãng điện thoại OPPO chính là OPPO Reno 5. Chiếc điện thoại với nhiều kế thừa từ người tiền nhiệm Reno với thiết kế hiện đại, cấu hình cao hứa hẹn mang đến những trải nghiệm dùng ấn tượng.', 222, 11, 1, 5, 0, 0),
(6, 'Nokia 8.3', 10500000, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/9df78eab33525d08d6e5fb8d27136e95/n/o/nokia_8.3.jpg', NULL, 'Điện thoại Nokia 8.3 – Sở hữu bốn camera tuyệt đỉnh\r\nVừa qua người yêu công nghệ lại đứng ngồi không yên khi Nokia cứ mập mờ về việc cho ra mắt sản phẩm mới, sản phẩm có tên gọi Nokia 8.3. Và dường như đây là bản nâng cấp của dòng Nokia 8 vốn đã được ra mắt cách đây chưa lâu. Đây chắc chắn sẽ là chiếc điện thoại bùng nổ chưa từng thấy của Nokia.', 222, 77, 0, 2, 0, 0),
(7, 'iPhone 12 Mini Chính hãng (VN/A)', 18000000, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/9df78eab33525d08d6e5fb8d27136e95/i/p/iphone-12-mini-blue-select-2020_4.png', NULL, 'Điện thoại iPhone 12 Mini - Kích thước nhỏ gọn, hiệu năng đỉnh cao\r\niPhone 12 series hiện nay đang là thế hệ smartphone hiện đại nhất của Apple, vẻ đẹp từ thiết kế, và sức hấp dẫn của các tính năng hiện đại mà dòng máy này sở hữu khiến người dùng công nghệ toàn cầu ‘đứng ngồi không yên”. iPhone 12 Mini tuy là phiên bản thấp nhất, nhưng chiếc smartphone này vẫn sở hữu những ưu điểm vượt trội về sự tiện lợi, linh động khi sử dụng và tính năng sạc nhanh cùng camera chất lượng cao.', 999, 99, 1, 3, 0, 0),
(8, 'Vivo V20 SE', 3500000, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/9df78eab33525d08d6e5fb8d27136e95/6/3/637399143538220514_vivo-v20-se-den-1.png', NULL, 'Điện thoại VIVO V20 SE - Thiết kế nổi bật, hiệu năng ổn định\r\nVivo là một trong những hãng điện thoại có số lượng sản phẩm nằm ở phân khúc được nhiều người dùng quan tâm. Vivo V20 SE là một trong những chiếc điện thoại mới nhất của Vivo sở hữu cấu hình vượt trội mang đến hiệu năng ổn định, đây sẽ là một chiếc điện thoại bạn nên cân nhắc.', 0, 444, 0, 4, 0, 11),
(9, 'Xiaomi Redmi Note 9s 4G 64GB', 3300000, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/9df78eab33525d08d6e5fb8d27136e95/r/e/redmi_note_9s_0002_layer_1.jpg', NULL, 'Xiaomi Redmi Note 9S – Smartphone cấu hình mạnh, 4 camera ấn tượng\r\nRedmi Note 9S là chiếc smartphone tầm trung mới nhất của Xiaomi được nâng cấp của điện thoại Redmi Note 9 hiện nay. Chiếc điện thoại này gây ấn tượng với cấu hình phần cứng mạnh mẽ 4GB RAM, hệ thống bốn camera sau chất lượng cùng mức giá bán cực kỳ hấp dẫn. Đây hứa hẹn sẽ là chiếc điện thoại gây bão trong thời gian sắp tới.', 66, 88, 1, 7, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `idDH` int(11) NOT NULL,
  `ThoiDiemDatHang` datetime NOT NULL,
  `ThoiDiemGiaoHang` datetime DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `TenNguoiNhan` varchar(100) DEFAULT NULL,
  `EmailNguoiNhan` varchar(100) DEFAULT NULL,
  `DiaChiNguoiNhan` varchar(200) DEFAULT NULL,
  `AnHien` tinyint(4) DEFAULT 0,
  `TrangThai` tinyint(4) NOT NULL DEFAULT 0,
  `GhiChuCuaKhach` varchar(2000) NOT NULL,
  `GhiChuCuaAdmin` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `idCT` int(11) NOT NULL,
  `idDH` int(11) NOT NULL,
  `idDT` int(11) DEFAULT NULL,
  `TenDT` varchar(100) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` float NOT NULL,
  `urlHinh` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `idNSX` int(11) NOT NULL,
  `TenNSX` varchar(50) NOT NULL,
  `ThuTu` int(11) DEFAULT NULL,
  `AnHien` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`idNSX`, `TenNSX`, `ThuTu`, `AnHien`) VALUES
(1, 'SamSung', NULL, NULL),
(2, 'Nokia', NULL, NULL),
(3, 'Apple', NULL, NULL),
(4, 'Vivo', NULL, NULL),
(5, 'Oppo', NULL, NULL),
(6, 'Vin Smart', NULL, NULL),
(7, 'Xiaomi', NULL, NULL),
(8, 'Motorola', NULL, NULL),
(9, 'LG', NULL, NULL),
(10, 'Sony', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuoctinhdt`
--

CREATE TABLE `thuoctinhdt` (
  `idDT` int(11) NOT NULL,
  `ManHinh` varchar(50) DEFAULT NULL,
  `HeDieuHanh` varchar(50) DEFAULT NULL,
  `CameraSau` varchar(50) DEFAULT NULL,
  `CameraTruoc` varchar(50) DEFAULT NULL,
  `CPU` varchar(50) DEFAULT NULL,
  `RAM` varchar(50) DEFAULT NULL,
  `BoNhoTrong` varchar(50) DEFAULT NULL,
  `TheNho` varchar(50) DEFAULT NULL,
  `TheSim` varchar(50) DEFAULT NULL,
  `DungLuongPin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thuoctinhdt`
--

INSERT INTO `thuoctinhdt` (`idDT`, `ManHinh`, `HeDieuHanh`, `CameraSau`, `CameraTruoc`, `CPU`, `RAM`, `BoNhoTrong`, `TheNho`, `TheSim`, `DungLuongPin`) VALUES
(5, '6.43\", FHD+, AMOLED, 1080 x 2040 Pixel', 'Android', '64 MP + 8 MP + 2 MP + 2 MP', '44 MP, F/2.4, Cảm biến thông minh AI', 'Octa-core (2x2.3 GHz Kryo 465 Gold & 6x1.8 GHz Kry', '8 GB', '128 GB', 'Không', '2 SIM (Nano-SIM)', '4310mAh (Typ), Sạc siêu nhanh'),
(6, '6.8 inches', 'Android', '64 MP, f/1.9, (wide), PDAF 12 MP, f/2.2, 13mm (ult', 'Trước: 1080p@30fps Sau: 4K@30fps, 1080p@30fps, gyr', 'Octa-core (1x2.4 GHz Kryo 475 Prime & 1x2.2 GHz Kr', '8 GB', '128 GB', 'Không', '2 SIM (Nano-SIM)', 'Li-Po 4500 mAh battery, Fast charging 18W'),
(7, '5.4 inches', 'iOS', '12 MP, f/1.6, 26mm (wide), 1.4µm, dual pixel PDAF,', '12 MP, f/2.2, 23mm (wide), 1/3.6\" SL 3D, (depth/bi', 'Hexa-core', '64 GB', '64 GB', 'Không', '1 SIM (Nano-SIM)', '	Li-Ion, sạc nhanh 20W, sạc không dây 15W, USB Pow'),
(8, '6.39 inches', 'Android', '48 MP, f/1.8, (wide) 8 MP, f/2.2, (ultrawide) 2 MP', '16 MP, f/2.0, (wide)', 'Octa-core (1x2.4 GHz Kryo 475 Prime & 1x2.2 GHz Kr', '8 GB', '64 GB', 'Không', '2 SIM (Nano-SIM)', '4500 mAh, sạc nhanh 18W'),
(9, '6.8 inches', 'Android', '64 MP, f/1.9, (wide), PDAF 12 MP, f/2.2, 13mm (ult', '44 MP, F/2.4, Cảm biến thông minh AI', 'Octa-core (2x2.3 GHz Kryo 465 Gold & 6x1.8 GHz Kry', '8 GB', '64 GB', 'Không', '2 SIM (Nano-SIM)', '4310mAh (Typ), Sạc siêu nhanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `KichHoat` tinyint(4) DEFAULT NULL,
  `urlHinh` varchar(200) DEFAULT NULL,
  `Email` varchar(200) NOT NULL,
  `VaiTro` tinyint(4) NOT NULL DEFAULT 0,
  `AnHien` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`idUser`, `UserName`, `Password`, `HoTen`, `KichHoat`, `urlHinh`, `Email`, `VaiTro`, `AnHien`) VALUES
(1, 'admin', '123', 'Duong Trong Khang', 1, NULL, '', 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idBL`),
  ADD KEY `idDT` (`idDT`,`idUser`),
  ADD KEY `idUser` (`idUser`);

--
-- Chỉ mục cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`idDT`),
  ADD KEY `idNSX` (`idNSX`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`idDH`),
  ADD KEY `idUser` (`idUser`);

--
-- Chỉ mục cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`idCT`),
  ADD KEY `idDH` (`idDH`,`idDT`),
  ADD KEY `idDT` (`idDT`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`idNSX`);

--
-- Chỉ mục cho bảng `thuoctinhdt`
--
ALTER TABLE `thuoctinhdt`
  ADD KEY `idDT` (`idDT`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idBL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  MODIFY `idDT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `idDH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `idCT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `idNSX` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`idDT`) REFERENCES `dienthoai` (`idDT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD CONSTRAINT `dienthoai_ibfk_1` FOREIGN KEY (`idNSX`) REFERENCES `nhasanxuat` (`idNSX`);

--
-- Các ràng buộc cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD CONSTRAINT `donhangchitiet_ibfk_1` FOREIGN KEY (`idDH`) REFERENCES `donhang` (`idDH`),
  ADD CONSTRAINT `donhangchitiet_ibfk_2` FOREIGN KEY (`idDT`) REFERENCES `dienthoai` (`idDT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thuoctinhdt`
--
ALTER TABLE `thuoctinhdt`
  ADD CONSTRAINT `thuoctinhdt_ibfk_1` FOREIGN KEY (`idDT`) REFERENCES `dienthoai` (`idDT`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
