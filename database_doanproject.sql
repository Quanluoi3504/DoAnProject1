create schema category;
use category;

CREATE TABLE `tbl_category` (
  `cate_id` int NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(255) NOT NULL,
  PRIMARY KEY (`cate_id`)
  );
  
  CREATE TABLE `tbl_customer` (
  `cus_id` int NOT NULL,
  `cus_username` varchar(255) NOT NULL,
  `cus_pass` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `cus_address` varchar(255) NOT NULL,
  `cus_phone` int NOT NULL,
  PRIMARY KEY (`cus_id`)
  );
  
  CREATE TABLE `tbl_oder_detail` (
  `prd_id` int NOT NULL,
  `ord_id` int NOT NULL,
  `ord_detail_price` decimal(8,0) NOT NULL,
  `ord_detail_amount` int NOT NULL,
  PRIMARY KEY (`prd_id`,`ord_id`),
  KEY `fK_oder_idx` (`ord_id`),
  CONSTRAINT `fK_oder` FOREIGN KEY (`ord_id`) REFERENCES `tbl_order` (`ord_id`),
  CONSTRAINT `fK_product` FOREIGN KEY (`prd_id`) REFERENCES `tbl_product` (`prd_id`)
);

CREATE TABLE `tbl_order` (
  `ord_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `staff_id` int NOT NULL,
  `ord_buy_date` datetime NOT NULL,
  `ord_total_price` decimal(8,0) NOT NULL,
  `ord_status` int NOT NULL,
  PRIMARY KEY (`ord_id`),
  KEY `fK_user_idx` (`customer_id`),
  KEY `fK_custommer_idx` (`staff_id`),
  CONSTRAINT `fK_custommer` FOREIGN KEY (`staff_id`) REFERENCES `tbl_customer` (`cus_id`),
  CONSTRAINT `fK_user` FOREIGN KEY (`customer_id`) REFERENCES `tbl_user` (`user_id`)
);

CREATE TABLE `tbl_product` (
  `prd_id` int NOT NULL AUTO_INCREMENT,
  `prd_name` varchar(255) NOT NULL,
  `prd_price` decimal(8,0) NOT NULL,
  `prd_quantity` int DEFAULT NULL,
  `prd_image` varchar(255) DEFAULT NULL,
  `cate_id` int NOT NULL,
  PRIMARY KEY (`prd_id`),
  KEY `fK_cateid_idx` (`cate_id`),
  CONSTRAINT `fK_cateid` FOREIGN KEY (`cate_id`) REFERENCES `tbl_category` (`cate_id`)
);

CREATE TABLE `tbl_user` (
  `user_id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `user_level` int NOT NULL,
  PRIMARY KEY (`user_id`)
);

insert into tbl_category
value 
(1,'sach tuoi ten'),
(2,'sach thieu nhi'),
(3,'sach ky nang'),
(4,'sach van hoc'),
(5,'san pham noi bat'),
(6,'san pham giam gia');

insert into tbl_product
value 
(1,'ĐI QUA HOA CÚC',5,5,'di-qua-hoa-cuc-tai-ban--1-.png',1),
(2,'PIPPI TẤT DÀI',5,5,'pippi-tat-dai-tai-ban--1-.png',2),
(3,'ĐI QUA ĐƯỜNG BĂNG',5,5,'tren-duong-bang--1-.png',3),
(4,'CÀ PHÊ CÙNG TONY',5,5,'ca-phe-cung-tony-phien-ban-sach-kho-nho--1-.png',3);

insert into tbl_product
value
(5,'CHUYỆN CON MÈO DẠY HẢI ÂU BAY',5,5,'chuyen-con-meo-day-hai-au-bay-phien-ban-dac-biet-2015--1-.png',2),
(6,'THẾ GIỚI NHỎ CỦA LIZ CLIMO',5,5,'the-gioi-nho-cua-liz-climo--1-.png',2),
(7,'ĐẮC NHÂN TÂM',6,5,'dac-nhan-tam-phien-ban-dac-biet--1-.png',3),
(8,'THỨC DẬY VÀ MƠ ĐI',6,5,'thuc-day-va-mo-di--1-.png',3),
(9,'LĂN VÀO BẾP',5,5,'bi-kip-nau-an-lan-vao-bep--1-.png',3),
(10,'BÍ MẬT COOKIES',7,5,'ready-to-cook-bi-mat-cookies--1-.png',3),
(11,'TOTTO-CHAN BÊN CỬA SỔ',5,5,'totto-chan-ben-cua-so-tai-ban--1-.png',4),
(12,'NẾU GẶP NGƯỜI ẤY',5,5,'neu-gap-nguoi-ay-cho-toi-gui-loi-chao--1-.png',4),
(13,'EM KHÔNG YÊU EM, AI YÊU EM?',5,5,'a-beautiful-bad-girl-em-khong-yeu-em-ai-yeu-em--1-.png',4);


