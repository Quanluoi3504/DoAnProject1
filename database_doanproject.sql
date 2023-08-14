create schema category;
use category;

CREATE TABLE `tbl_category` (
  `cate_id` int NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(255) NOT NULL,
  PRIMARY KEY (`cate_id`)
  );
  
  CREATE TABLE `tbl_customer` (
  `cus_id` int NOT NULL auto_increment,
  `cus_username` varchar(255) NOT NULL,
  `cus_pass` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `cus_address` varchar(255) NOT NULL,
  `cus_phone` int NOT NULL,
  PRIMARY KEY (`cus_id`)
  );
  
  CREATE TABLE `tbl_user` (
  `user_id` int NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `user_level` int NOT NULL,
  PRIMARY KEY (`user_id`)
);


CREATE TABLE `tbl_order` (
  `ord_id` int NOT NULL auto_increment,
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
  product_detail mediumtext,
  
  PRIMARY KEY (`prd_id`),
  KEY `fK_cateid_idx` (`cate_id`),
  CONSTRAINT `fK_cateid` FOREIGN KEY (`cate_id`) REFERENCES `tbl_category` (`cate_id`)
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
(1,'ĐI QUA HOA CÚC',5,5,'di-qua-hoa-cuc-tai-ban--1-.png',1,"chuon cho nhau 1 dieu nua di"),
(2,'PIPPI TẤT DÀI',5,5,'pippi-tat-dai-tai-ban--1-.png',2,"Pippi tat daiiiii"),
(3,'TRÊN ĐƯỜNG BĂNG',5,5,'tren-duong-bang--1-.png',3,"Tren duong bang"),
(4,'CÀ PHÊ CÙNG TONY',5,5,'ca-phe-cung-tony-phien-ban-sach-kho-nho--1-.png',3,"Tony bi loi"),
(5,'CHUYỆN CON MÈO DẠY HẢI ÂU BAY',5,5,'chuyen-con-meo-day-hai-au-bay-phien-ban-dac-biet-2015--1-.png',2,"Chuyen con meo biet noi"),
(6,'THẾ GIỚI NHỎ CỦA LIZ CLIMO',5,5,'the-gioi-nho-cua-liz-climo--1-.png',2,"Nữ họa sĩ Liz Climo đã tạo ra một thế giới động vật dễ thương và lôi cuốn, nơi gấu xám, thỏ, nhím, cáo… cũng gặp phải đủ loại vấn đề thường ngày và xử lí chúng theo những cách vừa thông minh, vừa hài hước."),
(7,'ĐẮC NHÂN TÂM',6,5,'dac-nhan-tam-phien-ban-dac-biet--1-.png',3,"Đắc nhân tâm - How to win friends and Influence People của Dale Carnegie là quyển sách nổi tiếng nhất, bán chạy nhất và có tầm ảnh hưởng nhất của mọi thời đại. Tác phẩm đã được chuyển ngữ sang hầu hết các thứ tiếng trên thế giới và có mặt ở hàng trăm quốc gia. Đây là quyển sách duy nhất về thể loại self-help liên tục đứng đầu danh mục sách bán chạy nhất (best-selling Books) do báo The New York Times bình chọn suốt 10 năm liền. Riêng bản tiếng Anh của sách đã bán được hơn 15 triệu bản trên thế giới. Tác phẩm có sức lan toả vô cùng rộng lớn - dù bạn đi đến bất cứ đâu, bất kỳ quốc gia nào cũng đều có thể nhìn thấy. Tác phẩm được đánh giá là quyển sách đầu tiên và hay nhất, có ảnh hưởng làm thay đổi cuộc đời của hàng triệu người trên thế giới."),
(8,'THỨC DẬY VÀ MƠ ĐI',6,5,'thuc-day-va-mo-di--1-.png',3,"Ước mơ của bạn được dẫn dắt bởi điều gì?

Cuốn sách này không dành cho tất cả mọi người. Hay chính xác hơn, cuốn sách có thể chưa phù hợp với bạn khi tìm kiếm ý nghĩa cuộc sống và thực hiện ước mơ chưa phải là ưu tiên quan trọng nhất. Cuốn sách chỉ phát huy hiệu quả khi bạn thật sự khao khát trải nghiệm một cuộc sống ý nghĩa, đa dạng và đầy màu sắc."),
(9,'LĂN VÀO BẾP',5,5,'bi-kip-nau-an-lan-vao-bep--1-.png',3,"Nấu ăn với người này là một góc yêu thương, là thư giãn, là tài năng hay sở thích. Nhưng đối với nhiều người thì nấu ăn là cả một Thử Thách Khó Khăn hay Nỗi Kinh Hoàng Khó Nói. Làm thế nào để công việc nấu ăn trở nên dễ thở hơn với những người không có năng khiếu hay lười biếng, hoặc vừa lười vừa thường gây thảm họa (như cánh họa sĩ chẳng hạn)? Đừng lo, câu hỏi đó không còn là câu hỏi tu từ nữa mà đã có lời giải đáp cho bạn ngay ở đây."),
(10,'BÍ MẬT COOKIES',7,5,'ready-to-cook-bi-mat-cookies--1-.png',3,"“Chúng ta chỉ có một cuộc đời, một cơ hội để làm tất cả những gì mình thích. Hãy suy nghĩ thật - kĩ trước khi làm một điều gì đó, và hãy làm những gì mà bản thân mình thấy vui, đừng bao giờ hối hận về bất cứ điều gì.”"),
(11,'TOTTO-CHAN BÊN CỬA SỔ',5,5,'totto-chan-ben-cua-so-tai-ban--1-.png',4,"Vừa vào lớp một được vài ngày, Totto-chan đã bị đuổi học!!!

Không còn cách nào khác, mẹ đành đưa Totto-chan đến một ngôi trường mới, trường Tomoe. Đấy là một ngôi trường kỳ lạ, lớp học thì ở trong toa xe điện cũ, học sinh thì được thoả thích thay đổi chỗ ngồi mỗi ngày, muốn học môn nào trước cũng được, chẳng những thế, khi đã học hết bài, các bạn còn được cô giáo cho đi dạo. Đặc biệt hơn ở đó còn có một thầy hiệu trưởng có thể chăm chú lắng nghe Totto-chan kể chuyện suốt bốn tiếng đồng hồ! Chính nhờ ngôi trường đó, một Totto-chan hiếu động, cá biệt đã thu nhận được những điều vô cùng quý giá để lớn lên thành một con người hoàn thiện, mạnh mẽ."),
(12,'NẾU GẶP NGƯỜI ẤY',5,5,'neu-gap-nguoi-ay-cho-toi-gui-loi-chao--1-.png',4,"Cả hai im lặng một lúc, tôi nghe được cả tiếng ro ro của máy nén khí khi thổi ô xi vào bể thủy sinh. Xung quanh phảng phất thứ mùi như mùi của khu rừng vừa tạnh mưa.

“Này, Satoshi.”

Karin gọi tên tôi. Tôi có cảm giác như chỗ mỏng nhất của lớp da bao bọc trái tim bị rách toác, một thứ gì đó vừa được giải phóng ra.

“Gì vậy?” Giọng tôi run run.

“Gặp được cậu tớ vui lắm. Tớ chỉ muốn nói như vậy thôi.”"),
(13,'EM KHÔNG YÊU EM, AI YÊU EM?',5,5,'a-beautiful-bad-girl-em-khong-yeu-em-ai-yeu-em--1-.png',4,"Một cuốn sách xinh đẹp để biến các cô gái trở nên quyến rũ, mạnh mẽ và kiêu hãnh hơn bao giờ hết!

“Bad girl” đôi khi chỉ là những cô gái đã đi qua quá nhiều chông chênh đổ vỡ để rồi hiểu mình, yêu mình và thương mình

“Bad girl” đôi khi chỉ là những cô gái sống chậm hơn, sâu hơn, xù lông nhím để xây nên thế giới của riêng mình

“Bad girl” nội tâm nhưng mạnh mẽ, cô đơn nhưng kiên cường và luôn ngẩng cao đầu, kiêu hãnh, bước về phía trước

Từng mất mát và tổn thương, nhưng không hề gục ngã;

Từng đi qua nỗi đau rồi bình thản bước tiếp, bình thản kể về nỗi đau đó và sống đầy mạnh mẽ

Đó là “bad girl” của A beautiful bad girl. Họ không phải những cô nàng hư hỏng, cũng tuyệt nhiên không phải những cô nàng cay nghiệt với cuộc đời. Họ chỉ đơn giản là những cô gái với một vốn sống vô cùng phong phú, với tính cách mạnh mẽ và độc lập được tôi rèn từ những va vấp của cuộc đời.");
