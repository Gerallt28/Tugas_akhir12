-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2024 at 06:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `ecom_admin`
--

CREATE TABLE `ecom_admin` (
  `id` int(11) NOT NULL,
  `adminfastname` varchar(20) NOT NULL,
  `adminlastname` varchar(20) NOT NULL,
  `adminemail` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL,
  `adminpass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ecom_admin`
--

INSERT INTO `ecom_admin` (`id`, `adminfastname`, `adminlastname`, `adminemail`, `level`, `adminpass`) VALUES
(1, 'Tushar', 'Khan', 'tushar@gmail.com', 'uploads/c5494226b1.jpg', '1'),
(3, 'admin', 'admin', 'admin@gmail.com', 'uploads/f25d75e10c.jpg', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'gerallt', 'putra', 'gerallt@gmail.com', 'uploads/290f036e18.jpg', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'gerallt', 'putra', 'gerallt1450@gmail.com', 'uploads/7d2db58dd3.jpg', '028c415bbd78ec445b0559fd9e7ef94e');

-- --------------------------------------------------------

--
-- Table structure for table `ecom_admin_message`
--

CREATE TABLE `ecom_admin_message` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ecom_admin_message`
--

INSERT INTO `ecom_admin_message` (`id`, `email`, `subject`, `message`, `date`) VALUES
(1, 'tushar.khan0122@gmail.com', 'Test Sunject', 'Message', '2017-09-21'),
(2, 'tushar.khan0122@gmail.com', 'Test Subject', 'Message', '2017-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `ecom_brand`
--

CREATE TABLE `ecom_brand` (
  `id` int(11) NOT NULL,
  `brand` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ecom_brand`
--

INSERT INTO `ecom_brand` (`id`, `brand`) VALUES
(4, 'Daging'),
(5, 'sayur'),
(6, 'frozen food'),
(7, 'Buah');

-- --------------------------------------------------------

--
-- Table structure for table `ecom_cart`
--

CREATE TABLE `ecom_cart` (
  `cartid` int(11) NOT NULL,
  `sid` varchar(250) NOT NULL,
  `proid` int(11) NOT NULL,
  `proname` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ecom_category`
--

CREATE TABLE `ecom_category` (
  `id` int(11) NOT NULL,
  `catname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ecom_category`
--

INSERT INTO `ecom_category` (`id`, `catname`) VALUES
(1, 'Daging'),
(9, 'Sayur'),
(10, 'frozen food'),
(11, 'Buah');

-- --------------------------------------------------------

--
-- Table structure for table `ecom_customer`
--

CREATE TABLE `ecom_customer` (
  `userid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `pass` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `zip` varchar(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ecom_customer`
--

INSERT INTO `ecom_customer` (`userid`, `name`, `email`, `image`, `pass`, `date`, `zip`, `country`, `city`, `phone`) VALUES
(5, 'gerallt', 'gerallt@gmail.com', 'NULL', '81dc9bdb52d04dc20036dbd8313ed055', '2024-01-05', '', '', '', '083818372064'),
(6, 'admin', 'admin@gmail.com', 'NULL', '827ccb0eea8a706c4c34a16891f84e7b', '2024-02-28', '', '', '', '083818372064');

-- --------------------------------------------------------

--
-- Table structure for table `ecom_customer_message`
--

CREATE TABLE `ecom_customer_message` (
  `messageid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `messagedate` date DEFAULT NULL,
  `useremail` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ecom_customer_message`
--

INSERT INTO `ecom_customer_message` (`messageid`, `userid`, `subject`, `message`, `messagedate`, `useremail`) VALUES
(1, 1, 'Message Subject', 'Mesage Body', '2017-09-21', 'tushar.khan0122@gmail.com'),
(2, 2, 'Another Message Subject', 'Another Mesage Body', '2017-09-21', 'tushar.khan0122@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ecom_customer_order`
--

CREATE TABLE `ecom_customer_order` (
  `id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ecom_customer_order`
--

INSERT INTO `ecom_customer_order` (`id`, `customerid`, `productid`, `price`, `quantity`, `productname`, `date`, `status`) VALUES
(6, 1, 6, 245, 1, 'Mobile Phone 3', '2017-09-21 20:25:23', 1),
(7, 1, 14, 680, 1, 'LED Tv', '2017-09-21 20:25:23', 1),
(8, 1, 7, 850, 1, 'Laptop', '2017-09-21 20:28:40', 0),
(9, 3, 11, 340, 1, 'Blander', '2023-10-03 22:08:07', 0),
(10, 3, 6, 245, 1, 'Mobile Phone 3', '2023-10-07 11:26:32', 0),
(11, 0, 22, 30000, 1, 'nuget champ', '2024-01-03 10:41:01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ecom_product`
--

CREATE TABLE `ecom_product` (
  `proid` int(11) NOT NULL,
  `proname` varchar(20) NOT NULL,
  `catid` int(11) NOT NULL,
  `brandid` int(11) NOT NULL,
  `body` text NOT NULL,
  `price` varchar(225) NOT NULL,
  `image` varchar(200) NOT NULL,
  `type` varchar(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ecom_product`
--

INSERT INTO `ecom_product` (`proid`, `proname`, `catid`, `brandid`, `body`, `price`, `image`, `type`, `date`) VALUES
(19, 'Daging Kambing', 1, 4, 'daging kambing yng dijual per kilo', '90.000', 'uploads/994fc4eafc.jpg', 'Daging', '2024-03-01'),
(21, 'sayur kol', 9, 5, 'kembang kool per', '20.000', 'uploads/7736962182.jpg', 'sayur', '2024-03-01'),
(22, 'nuget champ', 10, 4, 'Daging champ 250gr', '30.000', 'uploads/e71d8c17e3.png', 'Daging', '2024-03-01'),
(23, 'KANZLER SINGLES BAKS', 10, 4, 'KANZLER SINGLES BAKSO PEDAS 55GR HOT MEATBALL SINGLE HALAL', '7500', 'uploads/783dbad5d4.png', 'Bakso', '2024-01-07'),
(24, 'Kanzler Beef Cocktai', 10, 4, 'Sosis Kanzler Beef CocktailSOSIS SAPI PREMIUM EXTRA MEATYVarian Cocktail 250 GramSosis yang terbuat dari daging premium yang dicincang halus dengan ukuran lebih kecil. Dibuat dengan metode pengasapan, pengeringan dan pemasakan dengan uap. Tanpa menggunakan MSG dan bahan pewarna.Cara Pengolahan: Produk telah dimasak sebelumnya. Panaskan dengan sedikit minyak di atas te?on (dipanggang) atau panaskan dengan microwave.\r\n\r\n\r\nNOTE :\r\n\r\n* Kami Sarankan pengiriman menggunakan Kurir GRAB/GOJEK INSTAN ATAU SAMEDAY\r\n\r\n* CHECK OUT DENGAN KURIR STANDART tetap akan kami proses dengan CATATAN :\r\n\r\n   *** Segala Resiko kerusakan produk akibat keterlambatan pengiriman di luar tanggung jawan kami/seller\r\n\r\n* TIDAK TERIMA KOMPLAIN APAPUN karena produk yang kami jual adalah Fresh Stok de ngan kondisi Bekudan Selalu Baru\r\n\r\n\r\n* MEMBELI adalah SETUJU \r\n\r\n\r\nterima kasih\r\n\r\n\r\nHappy Shopping', '42.600', 'uploads/f0fdcf5c08.png', 'sosis', '2024-03-01'),
(25, 'Boneless Chicken Bre', 1, 4, 'Boneless Chicken Breast Skinless / Dada Ayam Fillet Tanpa Kulit 1kg\r\nBoneless Chicken Breast Skinless / Dada Ayam Fillet Tanpa Kulit 1kg\r\n\r\nBiasa disebut juga fillet dada ayam. Sudah bersih dari tulang dan kulit. Bagian ayam yang tinggi protein dan rendah lemak.\r\n\r\nKEUNGGULAN Ayam ini dibandingkan ayam2 lainnya :\r\n- Telah memiliki sertifikasi Halal dari MUI.\r\n- Telah memiliki sertifikasi NKV (Nomor Kontrol Veteriner, yaitu sertifikat sebagai bukti tertulis sah atas dipenuhinya persyaratan hygiene-sanitasi sebagai kelayakan dasar jaminan keamanan pangan asal hewan pada unit usaha pangan asal hewan).\r\n- Telah memiliki sertifikat Food Safety bertaraf Nasional untuk memastikan produk ini aman untuk dikonsumsi.\r\n\r\nAyam broiler ini memiliki nutrisi dan protein yg tinggi sehingga cocok diolah menjadi berbagai menu seperti : Ayam Teriyaki, Ayam Saus Tiram , Ayam Crispy, Steak Ayam ,dll\r\n\r\nPROSES PEMBEKUAN:\r\n- Pembekuan dilakukan dengan teknik blasting pada suhu -25°C, blasting adalah teknik pembekuan dengan semburan suhu yang sangat rendah untuk mempercepat terjadinya pembekuan, sehingga dapat menjaga kandungan nutrisi dan protein dengan sangat baik.\r\n\r\nDETAIL PRODUK\r\nASAL : Lokal\r\nBERAT : 1kg (saat beku).\r\nPOTONGAN : fillet dada tanpa kulit dan tulang.\r\nKONDISI : frozen.\r\nKEMASAN : packing menggunakan plastik PE ketat, lalu dilapis dengan plastik wrap food grade.\r\nHALAL MUI : 00020068900514\r\nSERTIFIKAT NKV : RPHU-3201240-002\r\n\r\nTANPA BAHAN PENGAWET / PEWARNA', '47.000', 'uploads/3b49c1a4ff.png', 'Ayam', '2024-03-01'),
(26, 'cabai rawit merah1kg', 9, 5, 'Cabai atau Cabe Rawit Merah\r\nBerat Produk 1 kilo\r\n\r\nDitimbang menggunakan Digital scale\r\n\r\nHarga sayur mayur fluktuafif mengikuti harga pasaran ya\r\n\r\nKarena produk segar maka hanya bisa dikirimkan menggunakan SAMEDAY / INSTANT. belum bisa menggunakan ekspedisi\r\n\r\nSilahkan mampir toko kita untuk melihat produk lainnya ya.', '63.000', 'uploads/95279d6226.png', 'sayur', '2024-03-01'),
(27, 'Tomat merah -1kg', 9, 5, 'Bosen dapat tomat yang selalu busuk saat beli di pasar ,sudah ganti langanan masih Busuk,Tenang saja kini hadir Tomat yang fresh ,harga terjangkkau dan yang lebih penting lagi tidak menggunakan pestisida dalam perawatannya jadi tunggu apa lagi beli lah tomat ini hanya di coollcash', '15.000', 'uploads/fd7a9371ce.png', 'sayur', '2024-03-01'),
(28, 'Bayam 1 ikat', 9, 5, 'sering beli bayem di pasar tapi daun nya berlubang  ?,udah sering ganti penjul masih sama jugaa,tenang tidak usah panik kareana coolcash telah menghadirkan bayam dengan kondisi bersih ,harga terjangkau dan paling penting tidak berlubang tunggu apa lagi segeralah cekout di website ini nyaa', '2000', 'uploads/60b32c02d4.png', 'sayur', '2024-01-07'),
(29, 'Nanas', 11, 7, 'Nanas Madu Kupas (1pcs): Harga Rp10.500 per buah', '10.500', 'uploads/30882d7a55.jpg', 'Buah', '2024-03-01'),
(30, 'Apel fuji 1kg', 11, 7, 'ABOVE (A Box Of Vegetables) Apel Fuji Biasa - 1 kg\r\n\r\nApel fuji menunjukkan jika konsumsi jus apel ini sangat baik untuk mencegah penyakit alzheimer. Apel fuji mampu mengurangi efek penuaan yang terjadi di dalam otak dengan meningkatkan kadar asetilkolin neurotransmitter.\r\n\r\nManfaat apel fuji selanjutnya adalah baik untuk mengikat kadar lemak dalam usus. Alhasil, kolesterol tinggi bisa dihindari dengan catatan anda mengonsumsi apel fuji secara rutin.\r\n\r\n1 kg isi 5 - 6 buah\r\n\r\n=========================================\r\n\r\nInfo Pengiriman ABOVE (A Box of Vegetables):\r\n1. Order yang masuk pukul 00.00-14.59 akan dikirimkan H+1\r\n2. Order yang masuk pukul 15.00-23.59 akan dikirimkan H+2\r\n3. Untuk pengiriman ditiadakan pada Hari Minggu, namun tetap bisa melakukan pemesanan dan akan dikirimkan pada Hari Senin\r\n4. Pengiriman akan dilakukan dengan menggunakan mitra kurir logistik kami agar menjaga kualitas produk kami hingga ke tangan customer', '38.500', 'uploads/2b04a29309.jpg', 'Buah', '2024-03-01'),
(31, 'Timun Segar 500 gr', 9, 5, 'Timun segar per 500 gr, fresh setiap hari.\r\n\r\nProduk2 kami merupakan produk fresh, sehingga harus menggunakan jasa kirim Gosend same day/instant/grab express', '7000', 'uploads/a90bd9592e.jpg', 'sayur', '2024-02-28'),
(32, 'Jagung Manis - Sayur', 9, 5, 'Kondisi: Baru\r\nMin. Pemesanan: 1 Buah\r\nEtalase: Sayur\r\nJagung yang disediakan Sayur Kendal , sudah melalui proses Quality Control untuk memastikan, pangan ini sudah dalam kualitas terbaik, agar kamu dapat merasakan manfaat dari Jagung, yaitu:\r\n\r\n1. Mengatasi konstipasi\r\n2. Menurunkan risiko diabetes dan mengontrol kadar gula darah\r\n3. Baik untuk kesehatan jantung\r\n4. Mengatasi depresi\r\n5. Baik untuk kesehatan mata\r\n6. Mencegah penyakit divertikulosis\r\n\r\nProduk ini tersedia dalam berbagai varian ukuran.\r\n\r\nProduk Sayur Kendal diolah dengan perlakuan Organik sehingga setiap produk kami segar dan berkualitas', '10.500', 'uploads/2e52602419.jpeg', 'sayur', '2024-03-01'),
(33, 'melon', 11, 7, 'melon segar 1 buah', '38.900', 'uploads/d5cfa94373.png', 'buah', '2024-03-08'),
(34, 'Pisang Sunpride', 11, 7, 'Pisang Sunpride Canvendish Family Sun Fresh - 300-400gr', '10.000', 'uploads/773044978f.png', 'buah', '2024-03-08'),
(35, 'Kentang 1 kg', 9, 5, 'Kentang Segar Ukuran Besar\r\nKemasan 1 kg\r\nper kg isi 5-8 butir kentang kondisi segar\r\nasal lokal', '40.000', 'uploads/6474e11ed6.png', 'sayur', '2024-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `ecom_product_review`
--

CREATE TABLE `ecom_product_review` (
  `revid` int(11) NOT NULL,
  `cmrid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `review` text NOT NULL,
  `rate` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ecom_product_review`
--

INSERT INTO `ecom_product_review` (`revid`, `cmrid`, `proid`, `name`, `email`, `phone`, `review`, `rate`, `date`) VALUES
(1, 1, 10, 'Tushar Khan', 'tushar@gmail.com', '+8801962837564', 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.', 3, '2017-09-14'),
(2, 1, 4, 'Tushar Khan', 'tushar.khan0122@gmail.com', '+8801962837564', 'Test Rewiew', 3, '2017-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `ecom_social_media`
--

CREATE TABLE `ecom_social_media` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `link` text NOT NULL,
  `icon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ecom_social_media`
--

INSERT INTO `ecom_social_media` (`id`, `name`, `link`, `icon`) VALUES
(1, 'Facebook', '#', 'fa-facebook'),
(2, 'Twitter', '#', 'fa-twitter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ecom_admin`
--
ALTER TABLE `ecom_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecom_admin_message`
--
ALTER TABLE `ecom_admin_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecom_brand`
--
ALTER TABLE `ecom_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecom_cart`
--
ALTER TABLE `ecom_cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `ecom_category`
--
ALTER TABLE `ecom_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecom_customer`
--
ALTER TABLE `ecom_customer`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `ecom_customer_message`
--
ALTER TABLE `ecom_customer_message`
  ADD PRIMARY KEY (`messageid`);

--
-- Indexes for table `ecom_customer_order`
--
ALTER TABLE `ecom_customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecom_product`
--
ALTER TABLE `ecom_product`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `ecom_product_review`
--
ALTER TABLE `ecom_product_review`
  ADD PRIMARY KEY (`revid`);

--
-- Indexes for table `ecom_social_media`
--
ALTER TABLE `ecom_social_media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ecom_admin`
--
ALTER TABLE `ecom_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ecom_admin_message`
--
ALTER TABLE `ecom_admin_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ecom_brand`
--
ALTER TABLE `ecom_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ecom_cart`
--
ALTER TABLE `ecom_cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ecom_category`
--
ALTER TABLE `ecom_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ecom_customer`
--
ALTER TABLE `ecom_customer`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ecom_customer_message`
--
ALTER TABLE `ecom_customer_message`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ecom_customer_order`
--
ALTER TABLE `ecom_customer_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ecom_product`
--
ALTER TABLE `ecom_product`
  MODIFY `proid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `ecom_product_review`
--
ALTER TABLE `ecom_product_review`
  MODIFY `revid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ecom_social_media`
--
ALTER TABLE `ecom_social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
