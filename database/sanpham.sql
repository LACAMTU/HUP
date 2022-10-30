-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 28, 2022 at 06:05 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanpham`
--

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `id` int(100) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TacGia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TheLoai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoTa` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` double NOT NULL,
  `SoLuong` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten`, `pic`, `TacGia`, `TheLoai`, `MoTa`, `Gia`, `SoLuong`) VALUES
(1001, 'Bài Học Diệu Kỳ Từ Chiếc Xe Rác', 'xerac.jpg', 'David J. Pollay', 'Sách Truyền cảm hứng', '“Có những người giống như “chiếc xe rác” vậy: họ chứa trong mình đầy “rác rưởi” – sự thất vọng, tức giận và chán nản. Và tất nhiên, họ phải tìm chỗ để trút bỏ mớ rác rưởi đó. Nếu thấy họ trút lên bạn thì bạn đừng đón nhận. Hãy mỉm cười, vẫy chào, chúc họ vui, rồi tiếp tục công việc của mình. Cứ tin tôi đi, rồi bạn sẽ thấy hạnh phúc hơn.”', 100000, 10),
(1002, 'Cây Cam Ngọt Của Tôi', 'cam.png', 'JOSÉ MAURO DE VASCONCELOS', 'Sách Truyền cảm hứng', 'Hãy làm quen với Zezé, cậu bé tinh nghịch siêu hạng đồng thời cũng đáng yêu bậc nhất, với ước mơ lớn lên trở thành nhà thơ cổ thắt nơ bướm. Chẳng phải ai cũng công nhận khoản “đáng yêu” kia đâu nhé. Bởi vì, ở cái xóm ngoại ô nghèo ấy, nỗi khắc khổ bủa vây đã che mờ mắt người ta trước trái tim thiện lương cùng trí tưởng tượng tuyệt vời của cậu bé con năm tuổi.', 110000, 10),
(1003, 'Đánh Thức Con Người Phi Thường Trong Bạn', 'danhthuc.jpg', 'Anthony Robbins', 'Sách Truyền cảm hứng', '“Đánh thức con người phi thường trong bạn” là cuốn sách giúp người đọc khám phá giá trị tiềm ẩn của bản thân để tạo nên những kết quả chính mình không ngờ đến. Cuốn sách được viết bởi Athony Robbins – một nhân chứng sống, một ngưỡi đã tìm được sự phi thường trong chính con người mình.', 100000, 10),
(1004, 'Đời Ngắn Đừng Ngủ Dài', 'doi.jpg', 'Robbin Sharma', 'Sách Truyền cảm hứng', '“Mọi lựa chọn đều giá trị. Mọi bước đi đều quan trọng. Cuộc sống vẫn diễn ra theo cách của nó, không phải theo cách của ta. Hãy kiên nhẫn. Tin tưởng. Hãy giống như người thợ cắt đá, đều đặn từng nhịp, ngày qua ngày. Cuối cùng, một nhát cắt duy nhất sẽ phá vỡ tảng đá và lộ ra viên kim cương. Người tràn đầy nhiệt huyết và tận tâm với việc mình làm không bao giờ bị chối bỏ. Sự thật là thế.”', 75000, 10),
(1005, 'Luật Hấp Dẫn', 'luat.jpg', 'Prentice Mulford', 'Sách Truyền cảm hứng', 'Cuốn sách này xoay quanh Luật Hấp dẫn, diễn giải những quy luật tâm thức đã luôn tồn tại và không ngừng hiện hữu trong mọi khía cạnh hoạt động của con người, giúp chúng ta thấu hiểu và bắt đầu học cách sử dụng nguồn năng lượng khổng lồ đang ẩn sâu trong cơ thể, để can đảm tiến bước trên hành trình dựng xây sự nghiệp và cuộc đời viên mãn mà ta mong muốn.', 100000, 10),
(1006, 'Nếu Tôi Biết Được Khi Còn 20', '20.jpg', 'Tina Seelig', 'Sách Truyền cảm hứng', 'Bạn có 5 đô la và 2 giờ đồng hồ để kinh doanh. Bạn sẽ làm gì? – Đây là một trong những ví dụ minh hoạ được nhắc đến trong cuốn sách Nếu Tôi Biết Được Khi Còn 20. Trả lời cho câu hỏi này có rất nhiều cách và với mỗi cách, tác giả lại chỉ ra những bài học nhỏ thôi nhưng hữu ích.', 80000, 10),
(1007, 'Nghĩ Giàu Làm Giàu', 'giau.jpg', 'Napoleon Hill', 'Kinh Tế', '“Think and Grow Rich – Nghĩ giàu và Làm giàu là một trong những cuốn sách bán chạy nhất mọi thời đại. Đã hơn 60 triệu bản được phát hành với gần trăm ngôn ngữ trên toàn thế giới và được công nhận là cuốn sách tạo ra nhiều triệu phú, một cuốn sách truyền cảm hứng thành công nhiều hơn bất cứ cuốn sách kinh doanh nào trong lịch sử.', 100000, 10),
(1008, 'Nhà Gỉa Kim', 'kim.jpg', 'Paulo Coelho', 'Sách Truyền cảm hứng', 'Tất cả những trải nghiệm trong chuyến phiêu du theo đuổi vận mệnh của mình đã giúp Santiago thấu hiểu được ý nghĩa sâu xa nhất của hạnh phúc, hòa hợp với vũ trụ và con người.', 79000, 10),
(1009, 'Tâm Lý Học Về Tiền', 'tien.jpg', 'Morgan Housell', 'Sách Kinh Tế', 'Chúng ta hiếm khi lâm vào hoàn cảnh nợ ngập đầu ư? Biết tiết kiệm để dành cho lúc khốn khó hơn ư? Chuẩn bị sẵn sàng cho việc nghỉ hưu? Có những cái nhìn thiết thực về mối quan hệ giữa tiền và hạnh phúc của chúng ta hơn phải không?', 189000, 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
