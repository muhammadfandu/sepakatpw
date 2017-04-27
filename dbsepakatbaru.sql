-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 03:45 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsepakatbaru`
--
CREATE DATABASE IF NOT EXISTS `dbsepakatbaru` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbsepakatbaru`;

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku`
--

CREATE TABLE IF NOT EXISTS `bahan_baku` (
  `id_bahan_baku` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `bukti` varchar(50) NOT NULL,
  `total_produksi` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `barang_bahan` varchar(50) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `icon` varchar(1000) NOT NULL,
  `gambar_latar` varchar(1000) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `jam_kerja` varchar(20) NOT NULL,
  `rating` float NOT NULL,
  PRIMARY KEY (`id_bahan_baku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bahan_baku`, `nama`, `alamat`, `no_telp`, `email`, `bukti`, `total_produksi`, `tipe`, `kategori`, `barang_bahan`, `harga`, `provinsi`, `kota`, `icon`, `gambar_latar`, `deskripsi`, `id_user`, `jam_kerja`, `rating`) VALUES
(2, 'Sinar Mas', 'Jln. Danau Kerinci A5', '089990999999', 'tefnder@gmail.com', '', '10000', 'Penyedia Besar', '1', 'Kelapa Sawit', 5000, 'Jakarta', 'Jakarta Barat', 'assets/images/logo/sinarmas.png', '', 'Sinar Mas didirikan pada tahun 1938 oleh Eka Tjipta Widjaja di Indonesia. Sinar Mas merupakan sebuah brand name dengan operasi bisnis yang bergerak di berbagai sektor, seperti Pulp dan Kertas, Agribisnis dan Food, Jasa Keuangan, Developer dan Real Estate, Telekomunikasi, dan Energi dan Infrastruktur, termasuk Kesehatan dan Pendidikan.\r\n\r\nSejak tahun 2003, Sinar Mas tidak lagi menyebut dirinya sebagai Sinar Mas Group, karena setelah restrukturisasi, Sinar Mas tidak lagi memiliki holding, melainkan President office yang memfasilitasi/membantu pilar-pilar bisnis.\r\n\r\nPada tahun 1968, penyulingan minyak nabati dan kopra pertama Sinar Mas, Pabrik Bitung Manado Oil Ltd. didirikan di Sulawesi Utara. Seiring dengan perkembangannya, Sinar Mas mengakuisisi pabrik soda kimia – Tjiwi Kimia pada tahun 1972, yang kemudian menjadi pabrik kertas pertama Sinar Mas. Tahun 1972 juga menandai dimulainya pilar bisnis Developer dan Real Estate, yang dikenal dengan PT Duta Pertiwi Tbk. Kemudian di tahun 1982, PT Internas Artha Leasing didirikan dan berkembang menjadi perusahaan jasa keuangan yang terintegrasi. Pada tahun 1986, Sinar Mas Forestry mengelola hutan tanaman industrinya yang pertama. PT Dian Swastatika Sentosa didirikan pada tahun 1996 untuk memasok listrik ke fasilitas-fasilitas produksi Sinar Mas di pedalaman. Pada tahun 2006, Smartfren didirikan sebagai hasil merger dengan salah satu provider telekomunikasi, Fren.', 24, '07.30-16.30', 3.5),
(3, 'Perkebunan Kopi Karanganyar', 'Jln. Danau Ranau Sawojajar', '08234567890', 'intisetianingtyas@gmail.com', '', '10000', 'Penyedia Besar', '1', 'Teh', 10000, 'Jawa Timur', 'Blitar', 'assets/images/logo/1.jpg', '', 'Perkebunan Kopi Karanganyar secara administratif terletak di Dusun Karanganyar, Desa Modangan, Nglegok, Kab. Blitar. Letak perkebunan ini cukup strategis karena berada tak jauh dari Kawasan Wisata Penataran dan sejalur dengan beberapa destinasi wisata Blitar utara lainnya.\r\n\r\nUntuk menuju Perkebunan Karanganya berikut rute yang bisa digunakan: Pertigaan Pasar Penataran ambil kanan ke arah Desa Modangan – Sesampai perempatan Kantor Desa Modangan ambil kiri searah dengan petunjuk arah menuju Arca Warak dan Kampoeng Melon – Ikuti jalan yang tersedia hingga tiba di kawasan Perkebunan Karanganyar.\r\n\r\nPerkebunan kopi Karanganyar saat ini telah menjadi salah satu ikon wisata baru di Kabupaten Blitar. Sejak awal tahun 2016 tempat ini ramai dikunjungi. Bukan tanpa sebab, karena perkebunan ini mempunyai sisi keunikan tersendiri yang tidak dimiliki oleh tempat-tempat lain di Blitar. Nuanasa kolonial Belanda sangat kental terasa ketika Anda memasuki area ini, tempat yang juga merupakan Caffe ini menyuguhkan suasana yang unik dan nyentrik.', 27, '06.00-16.00', 3.8),
(4, 'PT Tyas Wedding Organizer', '', NULL, 'intisetian@yahoo.com', '', '', '', '', '', NULL, '', '', '', '', '', 28, '', 0),
(5, 'PT Unilever Indonesia', 'Jln. Surakarta No. 908', '087790890878', 'mbahkoe.pendekar@gmail.com', '', '200', 'Penyedia Besar', '2', 'Kerbau', 7000, 'Banten', 'Cilegon', 'assets/images/logo/uni.jpg', 'assets/images/gambarlatar/uni.jpg', 'Unilever Indonesia, yang berdiri pada 5 Desember 1933, telah tumbuh hingga kini menjadi salah satu perseroan terdepan untuk kategori Fast Moving Consumer Goods di Indonesia. Kami telah hadir menemani perjalanan kehidupan masyarakat Indonesia melalui rangkaian produk Unilever Indonesia mencakup brand-brand ternama dunia seperti Pepsodent, Lux, Lifebuoy, Dove, Sunsilk, Clear, Rexona, Vaseline, Rinso, Molto, Sunlight, Wall’s, Blue Band, Royco, Bango dan lainnya. ', 31, '09.00 15.00', 3.2),
(6, 'Gudang Garam', 'Jln. Danau Toba', '087700890909', 'karepmuron@gmail.com', '', '400', 'Penyedia Besar', '2', 'Sapi Potong', 9800, 'Bali', 'Denpasar', 'assets/images/logo/gg.png', 'assets/images/gambar_latar/gambar.png', 'Perusahaan rokok Gudang Garam adalah salah satu industri rokok terkemuka di tanah air yang telah berdiri sejak tahun 1958 di kota Kediri, Jawa Timur. Hingga kini, Gudang Garam sudah terkenal luas baik di dalam negeri maupun mancanegara sebagai penghasil rokok kretek berkualitas tinggi. Produk Gudang Garam bisa ditemukan dalam berbagai variasi, mulai sigaret kretek klobot (SKL), sigaret kretek linting-tangan (SKT), hingga sigaret kretek linting-mesin (SKM). Bagi Anda para penikmat kretek sejati, komitmen kami adalah memberikan pengalaman tak tergantikan dalam menikmati kretek yang terbuat dari bahan pilihan berkualitas tinggi. ', 32, '07.30 - 16.00', 0),
(7, 'Djarum', 'Jln. Danau Tambingan', '086709808079', 'ahmadsyahroni518@gmail.com', '', '400', 'Penyedia Besar', '3', 'Rumput Laut', 7500, 'Jawa Barat', 'Cilegon', 'assets/images/logo/Material3.jpg', '', 'Cupcake ipsum dolor sit amet. Lollipop pudding cotton candy. Gummi bears cupcake chupa chups dessert apple pie. Brownie dessert chocolate cake gummi bears gummies gingerbread bonbon powder', 33, '', 0),
(8, 'Ahmad Syah 3', 'Sawojajar Malang', '08909089768800', 'kpiekmobasd123@gmail.com', '', '500', '', '3', 'Bandeng', 9500, 'Bangka Belitung', 'Belitung', 'assets/images/logo/f7.jpg', '', 'Cupcake ipsum dolor sit amet. Lollipop pudding cotton candy. Gummi bears cupcake chupa chups dessert apple pie. Brownie dessert chocolate cake gummi bears gummies gingerbread bonbon powder', 34, '', 0),
(9, 'Kiki', 'Jln. Sawojajar II', '08990980870', '9gamalia@gmail.com', '', '100', 'Perusahaan', '', 'Tebu', 7000, 'Bali', 'Denpasar', 'assets/images/logo/FotoJet Collage.jpg', '', '', 37, '07.00 - 15.00', 0),
(10, 'Baru new', '', NULL, 'Nmahmuddi@yahoo.com', '', '', '', '', '', NULL, '', '', '', '', '', 39, '', 0),
(11, 'PT Sinar Jaya', '', NULL, '9gamalia@gmail.com', '', '', '', '', '', NULL, '', '', '', '', '', 40, '', 0),
(12, 'Veloz Industries', 'Danau Ranau Boulevard, Kedungkandang Regency, Mala', '08229930813', 'pandu1717@gmail.com', '', '2000', 'Perusahaan Besar', '', '', 11500, 'Aceh', 'Banda Aceh', 'assets/images/logo/above-adventure-aerial-air.jpg', 'assets/images/gambarlatar/above-adventure-aerial-air.jpg', '', 41, '09.00 - 16.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `barang_bahan`
--

CREATE TABLE IF NOT EXISTS `barang_bahan` (
  `id_bb` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bb` varchar(50) NOT NULL,
  `id_kategori` int(20) NOT NULL,
  PRIMARY KEY (`id_bb`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=539 ;

--
-- Dumping data for table `barang_bahan`
--

INSERT INTO `barang_bahan` (`id_bb`, `nama_bb`, `id_kategori`) VALUES
(103, 'Tebu', 1),
(104, 'Teh', 1),
(105, 'Kelapa Sawit', 1),
(106, 'Tembakau', 1),
(107, 'Cengkeh', 1),
(108, 'Kopi', 1),
(109, 'Karet', 1),
(110, 'Kapas', 1),
(111, 'Kakao', 1),
(112, 'Kelapa', 1),
(113, 'Lada', 1),
(114, 'Kayu Manis', 1),
(115, 'Panili', 1),
(116, 'Kerbau', 2),
(117, 'Kuda', 2),
(118, 'Sapi Potong', 2),
(119, 'Sapi Perah', 2),
(120, 'Domba', 2),
(121, 'Kambing', 2),
(122, 'Kelinci', 2),
(123, 'Ayam Buras', 2),
(124, 'Ayam Ras Pedaging', 2),
(125, 'Ayam Ras Petelur', 2),
(126, 'Merpati', 2),
(127, 'Burung Puyuh', 2),
(128, 'Itik', 2),
(129, 'Itik Manila', 2),
(131, 'Rumput Laut', 3),
(132, 'Nila', 3),
(133, 'Bandeng', 3),
(134, 'Udang Galah', 3),
(135, 'Udang Barong', 3),
(136, 'Tuna', 3),
(137, 'Kepiting Tulang Lunak', 3),
(138, 'Kerapu', 3),
(139, 'Kakap', 3),
(140, 'Kuwe', 3),
(141, 'Beronang', 3),
(142, 'Teripang', 3),
(143, 'Kerang', 3),
(144, 'Cumi-cumi', 3),
(145, 'Batu Bara', 4),
(146, 'Minyak', 5),
(147, 'Gas Bumi', 5),
(148, 'Timah', 6),
(149, 'Biji Besi', 6),
(150, 'Tembaga', 6),
(151, 'Nikel', 6),
(152, 'Emas', 6),
(153, 'Mineral', 6),
(154, 'Intan', 7),
(155, 'Granit', 7),
(156, 'Safir', 7),
(157, 'Semen', 8),
(158, 'Keramik', 9),
(159, 'Porselen', 9),
(160, 'Kaca', 9),
(161, 'Timah', 10),
(162, 'Biji Besi', 10),
(163, 'Tembaga', 10),
(164, 'Nikel', 10),
(165, 'Emas', 10),
(166, 'Asam', 11),
(167, 'Basa', 11),
(168, 'Garam', 11),
(169, 'Zat Organik', 11),
(170, 'Zat Anorganik', 11),
(171, 'Pelarut', 11),
(172, 'Bahan Petrokimia', 11),
(173, 'Plastik', 11),
(174, 'Pupuk', 11),
(175, 'Pestisida', 11),
(176, 'Semen', 11),
(177, 'Gula', 11),
(178, 'Alkohol', 11),
(179, 'Pulp', 11),
(180, 'Kertas', 11),
(181, 'Plastik', 12),
(182, 'Gaplek Chips', 13),
(183, 'Bungkil Kopra', 13),
(184, 'Bungkmil Sawit', 13),
(185, 'Wheat Polard', 13),
(186, 'FML', 13),
(187, 'Molases', 13),
(188, 'Rumput Odot', 13),
(189, 'Tebon Jagung', 13),
(190, 'Kayu', 14),
(191, 'Pulp', 15),
(192, 'Kertas', 15),
(193, 'Kepala Silinder', 16),
(194, 'Blok Silinder', 16),
(195, 'Torak/Seher(Piston) dan kelengkapannya', 16),
(196, 'Poros engkol (crank shaft)', 16),
(197, 'Poros bubungan (cam shaft)', 16),
(198, 'Mekanisme katup (valve mecanisme)', 16),
(199, 'Gigi timing (Timing gear)', 16),
(200, 'Roda penerus (Fly wheel)', 16),
(201, 'Cylinder head cover', 16),
(202, 'Gasket', 16),
(203, 'Camshaft sprocket', 16),
(204, 'Camshaft', 16),
(205, 'Seal', 16),
(206, 'Cylinder head', 16),
(207, 'Spark plug', 16),
(208, 'Collets', 16),
(209, 'Retainer', 16),
(210, 'Valve spring', 16),
(211, 'Spring seat', 16),
(212, 'Valve seal', 16),
(213, 'Exhaust valve', 16),
(214, 'Intake valve', 16),
(215, 'Coolant outlet', 16),
(216, 'Camshaft bearing', 16),
(217, 'Rocker assembly', 16),
(218, 'Intake valve', 16),
(219, 'Valve spring retainer lock', 16),
(220, 'Oil seal', 16),
(221, 'Spark plug', 16),
(222, 'Adjusting shim', 16),
(223, 'Valve lifter', 16),
(224, 'Valve spring', 16),
(225, 'Valve guide', 16),
(226, 'Intake manifold', 16),
(227, 'Exhaust manifold', 16),
(228, 'Combustion chamber', 16),
(229, 'Gasket', 16),
(358, 'Water jacket', 16),
(359, 'Exhaust valve', 16),
(360, 'Rocker arm', 16),
(361, 'Valve', 16),
(362, 'Push rod', 16),
(363, 'Valve lifter', 16),
(364, 'Camshaft', 16),
(365, 'Ring piston', 16),
(366, 'Piston & piston pin', 16),
(367, 'Engine block', 16),
(368, 'Camshaft', 16),
(369, 'Camshaft gear / camshaft sprocket', 16),
(370, 'Timing chain', 16),
(371, 'Camshaft bushing', 16),
(372, 'Crankshaft', 16),
(373, 'Crankshaft gear', 16),
(374, 'Main bearing', 16),
(375, 'Connecting rod bearing', 16),
(376, '1st Main bearing cap', 16),
(377, 'Connecting rod cap', 16),
(378, 'Nut', 16),
(379, 'Main bearing cap', 16),
(380, '5th main bearing cap', 16),
(381, 'Thrust washer / thrust bearing', 16),
(382, 'Pilot bearing', 16),
(383, 'Cooling driened plug', 16),
(384, 'Cooling driened plug', 16),
(385, 'Main bearing', 16),
(386, 'Bolt', 16),
(387, 'Connecting rod', 16),
(388, 'Lock pin', 16),
(488, 'Benang Jahit', 17),
(489, 'Benang mouline', 17),
(490, 'Benang melange', 17),
(491, 'Benang yaspis', 17),
(492, 'Benang karet', 17),
(493, 'Benang suji', 17),
(494, 'Benang bordir', 17),
(495, 'Benang jagung', 17),
(496, 'Benang tetoron', 17),
(497, 'Benang wol', 17),
(498, 'Weft Yarn', 17),
(499, 'Knitting Yarn', 17),
(500, 'Fancy Yarn', 17),
(501, 'Kemeja', 17),
(502, 'Pakaian Tidur', 17),
(503, 'T-shirt', 17),
(504, 'Jaket', 17),
(505, 'Rok', 17),
(506, 'Jeans', 17),
(507, 'Sweater', 17),
(508, 'Seragam', 17),
(509, 'Gaun Pengantin', 17),
(510, 'Sepatu Wanita', 18),
(511, 'Sepatu Kulit', 18),
(512, 'Sepatu Olahraga', 18),
(513, 'Sepatu Casual', 18),
(514, 'Sepatu Bot', 18),
(515, 'Mokasin', 18),
(516, 'Loafer', 18),
(517, 'Sepatu Balet', 18),
(519, 'Sandal Jepit', 18),
(520, 'Bakiak', 18),
(521, 'Kabel Listrik', 19),
(522, 'Kabel Utp', 19),
(523, 'Kabel FDP', 19),
(524, 'Kabel Fiber Optik', 19),
(525, 'Kabel Coaxial', 19),
(526, 'Resistor', 20),
(527, 'Variable Resistor', 20),
(528, 'Ligtht Depending Resistor', 20),
(529, 'Thermistor', 20),
(530, 'Kapasitor', 20),
(531, 'Kapasitor Elektrolit', 20),
(532, 'Kapasitor Variabel', 20),
(533, 'Induktor', 20),
(534, 'Induktor Variabel', 20),
(536, 'Transistor', 20),
(537, 'Integrated Circuit', 20),
(538, 'Saklar', 20);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  `icon` varchar(1000) NOT NULL,
  `kotak` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `icon`, `kotak`) VALUES
(1, 'Perkebunan', 'fa fa-3x fa-tree', 'col-md-4 category-box'),
(2, 'Peternakan', 'fa fa-3x fa-cubes', 'col-md-3 category-box'),
(3, 'Perikanan', 'fa fa-3x fa-tint', 'col-md-4 category-box'),
(4, 'Pertambangan Batu Bara', 'fa fa-3x fa-diamond', 'col-md-4 category-box'),
(5, 'Kayu', 'fa fa-3x fa-flask', 'col-md-3 category-box'),
(6, 'Elektronik', 'fa fa-3x fa-diamond', 'col-md-4 category-box'),
(7, 'Pertambangan Batu - batuan', '', 'col-md-4 category-box'),
(8, 'Semen', '', 'col-md-3 category-box'),
(9, 'Keramik,Porselen & Kaca', '', 'col-md-4 category-box'),
(10, 'Logam dan sejenisnya', '', 'col-md-4 category-box'),
(11, 'Kimia', '', 'col-md-3 category-box'),
(12, 'Plastik dan Kemasan', '', 'col-md-4 category-box'),
(13, 'Pakan dan Ternak', '', 'col-md-4 category-box'),
(14, 'Pertambangan Minyak dan Batubara', '', 'col-md-3 category-box'),
(15, 'Pulp dan Kertas', '', 'col-md-4 category-box'),
(16, 'Otomitif & Komponennya', '', 'col-md-4 category-box'),
(17, 'Tekstil & Garmen', '', 'col-md-3 category-box'),
(18, 'Alas Kaki', '', 'col-md-4 category-box'),
(19, 'Kabel', '', 'col-md-4 category-box'),
(20, 'Pertambangan Batubara', '', 'col-md-3 category-box'),
(21, 'Makanan dan Minuman', '', 'col-md-4 category-box'),
(22, 'Rokok', '', 'col-md-4 category-box'),
(23, 'Farmasi', '', 'col-md-3 category-box'),
(24, 'Kosmetik & Barang Keperluan Rumah Tangga', '', 'col-md-4 category-box'),
(25, 'Peralatan Rumah Tangga', '', 'col-md-4 category-box'),
(26, 'Properti & Real Estate', '', 'col-md-3 category-box'),
(27, 'Konstruksi Bangunan', '', 'col-md-4 category-box'),
(28, 'Jalan Tol,Pelabuhan,Bandara', '', 'col-md-4 category-box'),
(29, 'Energi', '', 'col-md-3 category-box'),
(30, 'Telekomunikasi', '', 'col-md-4 category-box'),
(31, 'Transportasi', '', 'col-md-4 category-box'),
(32, 'Bank', '', 'col-md-3 category-box'),
(33, 'Konstruksi Non Bangunan', '', 'col-md-4 category-box'),
(34, 'Lembaga Pembiayaan', '', 'col-md-4 category-box'),
(35, 'Perusahaan Efek', '', 'col-md-3 category-box'),
(36, 'Asuransi', '', 'col-md-4 category-box'),
(38, 'Perdagangan Eceran', '', 'col-md-4 category-box'),
(39, 'Restoran', '', 'col-md-3 category-box'),
(40, 'Hotel dan Pariwisata', '', 'col-md-4 category-box'),
(43, 'Perusahaan Investasi', '', 'col-md-4 category-box'),
(44, 'Pertanian', '', 'col-md-3 category-box'),
(45, 'Penerbangan', '', 'col-md-4 category-box');

-- --------------------------------------------------------

--
-- Table structure for table `kerjasama`
--

CREATE TABLE IF NOT EXISTS `kerjasama` (
  `id_kerjasama` int(11) NOT NULL AUTO_INCREMENT,
  `id_manufaktur` int(11) NOT NULL,
  `id_bahan_baku` int(11) NOT NULL,
  `konfirmasi` text NOT NULL,
  `Pengirim` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kerjasama`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `kerjasama`
--

INSERT INTO `kerjasama` (`id_kerjasama`, `id_manufaktur`, `id_bahan_baku`, `konfirmasi`, `Pengirim`) VALUES
(4, 12, 2, '1', 'Manufaktur'),
(8, 12, 7, '0', 'Manufaktur'),
(11, 14, 2, '0', 'Bahan baku'),
(12, 14, 5, '1', 'Manufaktur'),
(13, 17, 5, '0', 'Bahan baku'),
(14, 12, 5, '1', 'Bahan Baku');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(50) NOT NULL,
  `id_post` int(11) NOT NULL,
  `komentar` text,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_user`, `id_post`, `komentar`, `time`) VALUES
(1, 26, 2, 'Menjadi sebuah berita yang patut menjadi pertimbangan dari strategi manajemen perusahaan kami. Terima kasih telah membagikan berita ini.', '2017-04-23 09:45:00'),
(2, 26, 2, 'Terima kasih telah membagikan berita ini. Akan coba kami terapkan dalam sistem manajemen perusahaan kami.', '2017-04-23 09:55:00'),
(5, 29, 2, 'Sebuah metode manajmene yang patut menjadi teladan ', '2017-04-23 05:29:03'),
(6, 29, 3, 'Ini merupakan potensi pengembangan yang sangat luar biasa.', '2017-04-23 07:25:24'),
(7, 41, 4, 'Hal ini patut diperhatikan untuk memastikan keberlangsungan kerja kita. Terima kasih telah berbagi', '2017-04-23 07:46:50');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id_kota` int(11) NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=113 ;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `provinsi`, `kota`) VALUES
(1, 'Aceh', 'Banda Aceh'),
(2, 'Aceh', 'Langsa'),
(3, 'Aceh', 'Lhokseumawe'),
(4, 'Aceh', 'Meulaboh'),
(5, 'Aceh', 'Sabang'),
(6, 'Aceh', 'Subulussalam'),
(7, 'Bali', 'Denpasar'),
(8, 'Bangka Belitung', 'Pangkalpinang'),
(9, 'Banten', 'Cilegon'),
(10, 'Banten', 'Serang'),
(11, 'Banten', 'Tangerang Selatan'),
(12, 'Banten', 'Tangerang'),
(13, 'Bengkulu', 'Bengkulu'),
(14, 'Gorontalo', 'Gorontalo'),
(15, 'Jakarta', 'Jakarta Barat'),
(16, 'Jakarta', 'Jakarta Pusat'),
(17, 'Jakarta', 'Jakarta Selatan'),
(18, 'Jakarta', 'Jakarta Timur'),
(19, 'Jakarta', 'Jakarta Utara'),
(20, 'Jambi', 'Sungai Penuh'),
(21, 'Jambi', 'Jambi'),
(22, 'Gorontalo', 'Bandung'),
(23, 'Jawa Barat', 'Bekasi'),
(24, 'Jawa Barat', 'Bogor'),
(25, 'Jawa Barat', 'Cimahi'),
(26, 'Jawa Barat', 'Cirebon'),
(27, 'Jawa Barat', 'Depok'),
(28, '', 'Sukabumi'),
(29, '', 'Tasikmalaya'),
(30, '', 'Banjar'),
(31, '', 'Magelang'),
(32, '', 'Pekalongan'),
(33, '', 'Purwokerto'),
(34, '', 'Salatiga'),
(35, '', 'Semarang'),
(36, '', 'Surakarta'),
(37, '', 'Tegal'),
(38, '', 'Batu'),
(39, '', 'Blitar'),
(40, '', 'Kediri'),
(41, '', 'Madiun'),
(42, '', 'Malang'),
(43, '', 'Mojokerto'),
(44, '', 'Pasuruan'),
(45, '', 'Probolinggo'),
(46, '', 'Surabaya'),
(47, '', 'Pontianak'),
(48, '', 'Singkawang'),
(49, '', 'Banjarbaru'),
(50, '', 'Banjarmasin'),
(51, '', 'Palangkaraya'),
(52, '', 'Balikpapan'),
(53, '', 'Bontang'),
(54, '', 'Samarinda'),
(55, '', 'Tarakan'),
(56, '', 'Batam'),
(57, '', 'Tanjungpinang'),
(58, '', 'Bandar Lampung'),
(59, '', 'Kotabumi'),
(60, '', 'Liwa'),
(61, '', 'Metro'),
(62, '', 'Ternate'),
(63, '', 'Tidore Kepulauan'),
(64, '', 'Ambon'),
(66, '', 'Bima'),
(67, '', 'Mataram'),
(68, '', 'Kupang'),
(69, '', 'Sorong'),
(70, '', 'Jayapura'),
(71, '', 'Dumai'),
(72, '', 'Pekanbaru'),
(73, '', 'Makassar'),
(74, '', 'Palopo'),
(75, '', 'Parepare'),
(76, '', 'Palu'),
(77, '', 'Bau-Bau'),
(78, '', 'Kendari'),
(79, '', 'Bitung'),
(80, '', 'Kotamobagu'),
(81, '', 'Manado	'),
(82, '', 'Tomohon	'),
(83, '', 'Bukittinggi'),
(84, '', 'Padang'),
(85, '', 'Padangpanjang'),
(86, '', 'Pariaman'),
(87, '', 'Payakumbuh'),
(88, '', 'Sawahlunto'),
(89, '', 'Solok'),
(90, '', 'Lubuklinggau'),
(91, '', 'Pagaralam'),
(92, '', 'Palembang'),
(93, '', 'Prabumulih'),
(94, '', 'Binjai'),
(95, '', 'Medan'),
(96, '', 'Padang Sidempuan'),
(97, '', 'Pematangsiantar'),
(98, '', 'Sibolga'),
(99, '', 'Tanjungbalai'),
(100, '', 'Tebingtinggi'),
(101, '', 'Yogyakarta'),
(102, 'Jawa Tengah', 'Magelang'),
(103, 'Jawa Tengah', 'Pekalongan'),
(104, 'Jawa Tengah', 'Purwokerto'),
(105, 'Jawa Tengah', 'Semarang'),
(106, 'Jawa Timur', 'Blitar'),
(108, 'Jawa Tengah', 'Mojokerto'),
(109, 'Jawa Tengah', 'Suarabaya'),
(110, 'Jawa Timur', 'Batu'),
(111, 'Kalimantan Selatan', 'Balikpapan'),
(112, 'Jawa Timur', 'Malang');

-- --------------------------------------------------------

--
-- Table structure for table `manufaktur`
--

CREATE TABLE IF NOT EXISTS `manufaktur` (
  `id_manufaktur` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `deskripsi` mediumtext NOT NULL,
  `barang_dibutuhkan` varchar(50) NOT NULL,
  `banyak_kebutuhan` varchar(1000) NOT NULL,
  `icon` varchar(1000) NOT NULL,
  `gambar_latar` varchar(100) NOT NULL,
  `bukti` varchar(40) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `jam_kerja` varchar(50) NOT NULL,
  `rating` float NOT NULL,
  PRIMARY KEY (`id_manufaktur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `manufaktur`
--

INSERT INTO `manufaktur` (`id_manufaktur`, `nama`, `alamat`, `provinsi`, `kota`, `no_telp`, `email`, `tipe`, `deskripsi`, `barang_dibutuhkan`, `banyak_kebutuhan`, `icon`, `gambar_latar`, `bukti`, `id_user`, `jam_kerja`, `rating`) VALUES
(12, 'Kedai Mebel Jati', 'Desa Bawu Rt 27 Rw 08 Kec. Batealit Kab. Jepara Ja', 'Jawa Tengah', 'Semarang', '081908678898', 'tefani.diva@gmail.com', 'Perusahaan Sedang', 'KEDAI MEBEL adalah sebuah perusahaan pembuat dan penjual mebel dari jepara yang memfokuskan produk2 nya pada design modern dan minimalis. Perusahaan kami berdiri sejak tahun 2010 dan berkembang hingga sekarang, semua berkat kerja keras kami dan kepercayaan konsumen terhadap kualitas yang telah kami hasilkan. Berawal dari sebuah “brak” atau tempat produksi mebel rumahan skala gurem, berkembang sedikit demi sedikit berkat dukungan dan bantuan teman2 pengusaha mebel jepara lainnya. Hubungan yang baik dengan perusahaan lain menjadikan kami yang masih kecil mampu menangani pesanan dalam jumlah massal sekalipun. Industri mebel jepara pada dasarnya adalah satu kesatuan, meskipun dijalankan oleh banyak sekali perusahaan.', 'Kayu', '10000', 'assets/images/logo/jepara.png', 'assets/images/gambarlatar/Screenshot_5.png', '', 21, '08.00 - 16.00', 3.7),
(13, 'PT Aqua ', '', '', NULL, '', 'tefanidivadiva@yahoo.co.id', '', '', '', '', '', '', '', 25, '', 0),
(14, 'Shell', 'Shell Centre, London, Inggris', 'London', 'Inggris', '087909808707', 'intisetian@gmail.com', 'Perusahaan Besar', 'Royal Dutch Shell plc , atau lebih dikenal sebagai Shell, adalah sebuah perusahaan minyak dan gas multinasional yang berkantor pusat di Belanda dan didaftarkan di Inggris. Terbentuk karena bergabungnya Royal Dutch Petroleum dan Shell Transport & Trading, hingga tahun 2016, Shell merupakan perusahaan terbesar ketujuh di dunia, jika dilihat dari pendapatannya,  dan juga merupakan salah satu dari enam perusahaan minyak dan gas terbesar di dunia.\r\nShell pun merupakan salah satu perusahaan paling berharga di dunia. Hingga bulan Januari 2013, pemegang saham terbesar Shell adalah Capital Research Global Investors dengan 9,85%, yang lalu diikuti oleh BlackRock dengan 6,89%. Pada tahun 2013, Shell juga berhasil memuncaki daftar Fortune 500. ', 'Kepala Sawit', '10000', 'assets/images/logo/shell.png', '', '', 26, '07.30 - 16.30', 3.7),
(15, 'Veloz Creative', 'This Street on That Road on The Other City', 'Aceh', 'Banda Aceh', '082299999999', 'muhammad.p.widodo@gmail.com', 'Perusahaan Besar', 'Mobil berjenis MPV Toyota Avanza Veloz adalah salah satu kendaraan keluarga favorit di Indonesia. Avanza Veloz sendiri merupakan salah satu wujud perubahan dari mobil produksi tahun 2011 yaitu Toyota Avanza. Meski telah menjadi mobil favorit keluarga namun jika dibandingkan dengan mobil lain seperti Honda BRV maka mungkin Anda akan memiliki pertimbangan yang lain. Maka dari itu mari kita coba telusuri perbandingan antara Honda BRV dan Toyota Avanza Veloz berikut ini sebagai panduan sebelum membeli mobil. Dilihat dari dimensinya, panjang dan lebar Avanza Veloz ini memang masih kalah dari Honda BRV. Ukuran pajang dan lebar Avanza Veloz adalah  4200 mm dan 1660 mm, sedangkan Honda BRV memiliki dimensi panjang dan lebar yaitu 4456 mm, lebar 1735 mm. Namun untuk ketinggiannya, mobil MPV Avanza Veloz jauh lebih tinggi sedikit yaitu 1695 mm dari Honda BRV dengan tinggi 1666 mm. Jarak sumbu roda pada Avanza Veloz adalah 2655 mm sedangkan untuk BRV adalah 2660 mm. Sementara untuk kapasitas tangki Avanza Veloz mencapai 45 liter sedangkan untuk Honda BRV kapasitas tangkinya hanya mencapai 42 liter.', 'Besi Titanium', '2000', 'assets/images/logo/v.jpg', 'assets/images/logo/v.jpg', '', 29, '09.00 15.00', 4.3),
(16, 'Ahmad Ron 4', 'PT Djarum', 'Jawa Barat', 'Cilegon', '081908809709', 'ahmad_syahroni_23rpl@student.smktelkom-m', 'Perusahaan Besar', 'Pada tahun 1951, Oei Wie Gwan, seorang pengusaha Tionghoa-Indonesia, membeli perusahaan rokok NV Murup yang hampir gulung tikar di Kudus, Jawa Tengah. Perusahaan tersebut memiliki merek Djarum Gramofon. Dia menyingkat merek tersebut menjadi Djarum.\r\n\r\nPerusahaan ini hampir punah ketika kebakaran besar menghancurkan pabrik perusahaan pada tahun 1963, diikuti oleh kematian Oei Wie Gwan. Anaknya, Budi dan Bambang Hartono, akhirnya mengambil kesempatan untuk membangun perusahaan kembali.', 'Cengkeh', '500', 'assets/images/logo/djarum.jpg', 'assets/images/gambarlatar/djarum.jpg', '', 35, '07.30 - 16.00', 3.4),
(17, 'Tefani Diva', 'Jln. Sumber Gempol', 'Bandung', 'Bandung', '086908706809', 'tefani_wibowo_23rpl@student.smktelkom-ml', 'Perusahaan Besar', 'Apple pie pie toffee lemon drops cupcake tart marzipan candy. Tart chocolate bar chocolate bar candy cotton candy. Carrot cake candy canes jujubes cupcake cupcake sugar plum.\r\nDessert lollipop sesame snaps muffin jelly-o. Halvah gummi bears jujubes pastry. Marzipan chocolate bar cheesecake jelly-o halvah jelly-o.\r\nMacaroon jelly biscuit bonbon halvah macaroon biscuit biscuit gingerbread. Pie carrot cake powder macaroon. Chocolate bar marzipan tootsie roll chocolate cake brownie', 'Batu Bara', '8000', 'assets/images/logo/f11.jpg', '', '', 36, '', 4.1),
(18, 'Amalia', '', '', NULL, '', 'kikikiki1608@gmail.com', '', '', '', '', '', '', '', 38, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE IF NOT EXISTS `postingan` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(50) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `waktu` time(6) NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`id_post`, `id_user`, `isi`, `gambar`, `tanggal`, `waktu`) VALUES
(2, '21', 'CEO Apple, Tim Cook, menilai Amerika Serikat (AS) membutuhkan sosok perempuan jika tetap ingin memimpin industri teknologi. Hal ini disampaikan Cook dalam sesi wawancara dengan surat kabar almamaternya, Auburn Plainsman.\r\n\r\nCook mengakui saat ini lebih banyak laki-laki dibandingkan perempuan yang mengambil jurusan sains, teknologi, engineering, dan matematika atau biasa disebut STEM. Namun jika hal itu tidak berubah, masa depan AS di industri teknologi akan dipertaruhkan. "Menurut saya, AS akan kehilangan kepemimpinannya di teknologi jika hal ini tidak berubah," kata Cook, seperti dilansir CNET, Rabu (12/4/2017).\r\n\r\nIa menekankan pentingnya peranan perempuan dalam ketenagakerjaan. "Jika jumlah perempuan tetap rendah di bidang STEM, kita akan kekurangan inovasi di AS. Faktanya sesederhana itu," tambah Cook.', 'assets/images/posting/help.jpg', '2017-04-11 00:00:00', '12:13:14.000000'),
(3, '21', 'Pemegang merek smartphone Nokia, HMD Global, punya rencana besar terkait dengan kembalinya Nokia ke bisnis ponsel. Hal tersebut dilakukan HMD Global untuk mengembalikan nama Nokia jadi terkenal seperti dahulu kala, yakni melalui bantuan Google. Mengutip laporan BGR, Rabu (12/4/2017), dalam press event Nokia di ajang MWC, Februari 2017, Nokia memperkenalkan tiga smartphone yakni Nokia 6, Nokia 5, dan Nokia 3. Ketiganya mengusung sistem Android murni, yang diyakini sebagai OS Android idaman banyak orang.\r\n\r\nDi panggung MWC, Nokia mengatakan bahwa pihaknya berupaya mengeluarkan pembaruan OS Android dengan cepat. Hal ini dianggap sebagai prestasi yang belum bisa dilakukan oleh pembesut smartphone lain.\r\n\r\nWakil Presiden HMD Global untuk Timur Tengah dan Afrika Utara Per Erkman menegaskan tujuan itu. Bagi perusahaan, Google merupakan kunci untuk membuat Nokia jaya kembali. Tak cuma dengan Google, Erkman menyebut, Nokia juga telah menjalin kemitraan strategis dengan Foxconn.', 'assets/images/posting/mountain.jpg', '2017-04-12 00:00:00', '03:08:42.000000'),
(4, '31', 'VietJet, maskapai asal Vietnam yang dikenal dengan pramugarinya berbikini menyatakan akan terbang ke Indonesia pada pertengahan 2017. Hanya saja, apa yang diinginkan itu harus sesuai dengan prosedur.\r\n\r\nKementerian Perhubungan (Kemenhub) melalui Ditjen Perhubungan Udara sebagai otoritas penerbangan di Indonesia memiliki berbagai syarat bagi maskapai asing? untuk bisa menerbangi Indonesia.\r\n\r\n"Pertama, dia harus sebagai Designated Airlines, artinya dia harus mendapat penunjukkan dari pemerintah Vietnam untuk bisa terbang ke negara lain, seperti misalnya kita tunjuk Garuda Indonesia untuk terbang ke AS," kata Agoes saat berbincang dengan Liputan6.com, Jumat (7/4/2017).', 'assets/images/posting/Bulbs-Dark-Light-wide-i.jpg', '2017-04-13 01:47:34', '01:47:34.000000');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `provinsi` varchar(50) NOT NULL,
  PRIMARY KEY (`provinsi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`provinsi`) VALUES
('Aceh'),
('Bali'),
('Bangka Belitung'),
('Banten'),
('Bengkulu'),
('Gorontalo'),
('Jakarta'),
('Jambi'),
('Jawa Barat'),
('Kalimantan Barat'),
('Kalimantan Selatan'),
('Kalimantan Tengah'),
('Kalimantan Timur'),
('Kalimantan Utara'),
('Kepulauan Bangka Belitung'),
('Kepulauan Riau'),
('Lampung'),
('Maluku'),
('Maluku Utara'),
('Nusa Tenggara Barat'),
('Nusa Tenggara Timur'),
('Riau'),
('Sulawesi Barat'),
('Sulawesi Selatan'),
('Sulawesi Tengah'),
('Sulawesi Tenggara'),
('Sulawesi Utara'),
('Sumatera Barat'),
('Sumatera Selatan'),
('Sumatera Utara'),
('Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `id_rating` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(50) NOT NULL,
  `id_user_rated` int(50) NOT NULL,
  `rating` float NOT NULL,
  PRIMARY KEY (`id_rating`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rating`, `id_user`, `id_user_rated`, `rating`) VALUES
(1, 32, 12, 3),
(2, 32, 12, 3),
(3, 32, 15, 4),
(4, 32, 14, 4),
(5, 32, 14, 3.5),
(6, 32, 16, 2),
(7, 32, 16, 2.5),
(8, 35, 5, 2.5),
(9, 35, 3, 4),
(10, 35, 2, 3.5),
(11, 32, 17, 3.5),
(12, 32, 17, 4.5),
(13, 35, 5, 4),
(14, 35, 5, 2),
(15, 35, 2, 1.5),
(16, 35, 2, 4.5),
(17, 35, 2, 4.5),
(18, 35, 5, 2.5),
(19, 35, 5, 4),
(20, 32, 14, 4),
(21, 32, 14, 5),
(22, 32, 14, 2),
(23, 32, 14, 3.5),
(24, 32, 12, 5),
(25, 32, 15, 4.5),
(26, 32, 16, 4.5),
(27, 32, 17, 4),
(28, 32, 16, 4.5),
(29, 32, 17, 4.5),
(30, 35, 3, 3.5),
(31, 35, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `konfirmasi` varchar(100) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `konfirmasi`, `perusahaan`) VALUES
(21, 'tefani.diva@gmail.com', '2354f5672e8a1b7fed2de61c64117bc7', '1', 'Manufaktur'),
(24, 'tefnder@gmail.com', 'fb2fcd534b0ff3bbed73cc51df620323', '1', 'Bahan Baku'),
(25, 'tefanidivadiva@yahoo.co.id', 'b37375cac08800a044e2df942645912e', 'eedb582caa6e2d04d80c12adbe391e3a', 'Manufaktur'),
(26, 'intisetian@gmail.com', 'fa9f8b649df45d903152e5b2ce8b24d2', '1', 'Manufaktur'),
(27, 'intisetianingtyas@gmail.com', '79698bb3f850cc23393cfe72d4145c0d', '1', 'Bahan Baku'),
(28, 'intisetian@yahoo.com', '1a1afc5b8b0acf38db467f1b59ffd2b4', '22dabe9ad8d41eed708a3c09661f4b58', 'Bahan Baku'),
(29, 'muhammad.p.widodo@gmail.com', '1abf5b51520bf9adb3138e99284d807a', '1', 'Manufaktur'),
(30, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 'Admin'),
(31, 'mbahkoe.pendekar@gmail.com', '5d4864249b21de08642aa6ff4178b346', '1', 'Bahan Baku'),
(32, 'karepmuron@gmail.com', '202cb962ac59075b964b07152d234b70', '1', 'Bahan Baku'),
(33, 'ahmadsyahroni518@gmail.com', 'f887f4f877c4bcf465e7749f784ef5b9', '1', 'Bahan Baku'),
(34, 'kpiekmobasd123@gmail.com', '0aa55f453e8e2a6480f9aff3a1bbcf57', '1', 'Bahan Baku'),
(35, 'ahmad_syahroni_23rpl@student.smktelkom-mlg.sch.id', '202cb962ac59075b964b07152d234b70', '1', 'Manufaktur'),
(36, 'tefani_wibowo_23rpl@student.smktelkom-mlg.sch.id', '8fc11f598e30f20530f096c65cc94cd1', '1', 'Manufaktur'),
(38, 'kikikiki1608@gmail.com', 'b0868849722e3a29592240b92b544a13', '1', 'Manufaktur'),
(39, 'Nmahmuddi@yahoo.com', '57f842286171094855e51fc3a541c1e2', '3da29a611094f193768e57b68caf44cd', 'Bahan Baku'),
(40, '9gamalia@gmail.com', '57f842286171094855e51fc3a541c1e2', '9ce376449727ee0af6bc03efa9bb03a4', 'Bahan Baku'),
(41, 'pandu1717@gmail.com', '1abf5b51520bf9adb3138e99284d807a', '1', 'Bahan Baku'),
(42, 'asd@aaa.c', '202cb962ac59075b964b07152d234b70', '1', 'Manufaktur');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang_bahan`
--
ALTER TABLE `barang_bahan`
  ADD CONSTRAINT `barang_bahan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
