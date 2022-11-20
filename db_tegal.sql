-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 08:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tegal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `id` int(11) NOT NULL,
  `nama_jasa` varchar(25) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `user_email` varchar(128) NOT NULL,
  `nomor_user` varchar(15) NOT NULL,
  `bidang_jasa` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `harga` int(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `maps` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`id`, `nama_jasa`, `slug`, `user_email`, `nomor_user`, `bidang_jasa`, `deskripsi`, `gambar`, `harga`, `alamat`, `maps`) VALUES
(5, 'Laundry Anwar', 'laundry-anwar', 'ayaa@gmail.com', '085870627026', 'Cleaning', 'Buatkan tas yang besar buat langganan, masa pakainya kresek kalau kirim. Dan lebaran ga ada THR buat pelanggan. Hasil laundrinya lumayan bersih dan rapi.', '1668264911_01a5878c369cd41ca5d2.jpg', 15000, 'Jl. Kartini No.77 Slerok Kec. Tegal Timur Kota Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.961392901743!2d109.03343189741416!3d-6.861772941320604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fba8156807545%3A0x70f5f4872d1adb75!2sRadja%20Laundry!5e0!3m2!1sid!2sid!4v1668264886104!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(6, 'Bengkel Kamu', 'bengkel-kamu', 'ayaa@gmail.com', '085870627026', 'Otomotif', 'ini adalah bengkelnya kamu', '1668265001_13cec4e4123c9a563c77.jpg', 200000, 'Jl. Kartini No.77 Slerok Kec. Tegal Timur Kota Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.961392901743!2d109.03343189741416!3d-6.861772941320604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fba8156807545%3A0x70f5f4872d1adb75!2sRadja%20Laundry!5e0!3m2!1sid!2sid!4v1668264886104!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(7, 'Service Komputer', 'service-komputer', 'nurul@gmail.com', '081257800047', 'Elektronik', 'Service Komputer Langsung Ke Rumah', '1668313584_edb318e01d250d8a9b65.jpeg', 140000, 'Jl. Kartini No.77 Slerok Kec. Tegal Timur Kota Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0043489786094!2d110.44672111428795!3d-7.008769794937178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708dada4b2be03%3A0x38c593cc871d83ff!2sService%20Komputer%20%26%20Laptop%20Ruly!5e0!3m2!1sid!2sid!4v1668313570597!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(8, 'Service Televisi', 'service-televisi', 'nurul@gmail.com', '081257800047', 'Elektronik', 'Kami adalah Brand spesialis servis TV tabung dan LED Kota Yogyakarta, Bantul, Sleman, Kulonprogo, Wates. Dikerjakan di tempat pemilik 1-2 jam jadi sejak 2005, sangat hafal dengan segala macam kerusakan TV tabung Led. Jasa service TV rusak panggilan dikerjakan di rumah pemilik 1-2 jam jadi, khusus TV tabung dan Led bikin jadwal dl ya gaesss, dipilih mau yg mana..bikin jadwal minimal 2 jam sebelmnya, atau 1 hari sebelmnya, trmkash\r\n\r\nI. jam 08.00 wib\r\nII. jam 10.00 wib\r\nIII. jam 12.00 wib\r\nIV. jam 14.00 wib\r\nV. jam 16.00 wib', '1668407600_e79e0d06c8fdf38536b8.jpg', 125000, 'Jl. Kartini No.77 Slerok Kec. Tegal Timur Kota Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.961392901743!2d109.03343189741416!3d-6.861772941320604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fba76e12cc1d1%3A0x4cc5cf1277e0514c!2sService%20Elektronik%20Suparno!5e0!3m2!1sid!2sid!4v1668407383144!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(10, 'Service HP', 'service-hp', 'ayaa@gmail.com', '085870627026', 'Elektronik', 'Service hp dong', '1668580627_d72a9cf12ba673f7e888.jpeg', 150000, 'Jl. Kartini No.77 Slerok Kec. Tegal Timur Kota Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.938715717826!2d109.1194778364713!3d-6.862454341304981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9d4a7efda29%3A0x56faef6a7fcf543f!2sBimbel%20Nurul%20Fikri%20Tegal!5e0!3m2!1sid!2sid!4v1668580121298!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(12, 'Bengkel Dia', 'bengkel-dia', 'liza@gmail.com', '083121242542', 'Otomotif', 'dasdsa', '1668785194_cb307bcb4974e5655074.jpg', 15000, 'asd', 'sada');

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id` int(11) NOT NULL,
  `nama_kuliner` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `jenis_kuliner` varchar(128) NOT NULL,
  `user_email` varchar(128) NOT NULL,
  `nomor_user` varchar(15) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `maps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id`, `nama_kuliner`, `slug`, `jenis_kuliner`, `user_email`, `nomor_user`, `harga`, `deskripsi`, `gambar`, `alamat`, `maps`) VALUES
(1, 'Sate Kambing Batibul', 'sate-kambing-batibul', 'Makanan', 'ayaa@gmail.com', '085870627026', '320000', 'Sate kambing batibul adalah Sate yang menjadi ciri khas Kota Tegal. Dinamakan batibul karena dibuat dari daging kambing atau domba muda dibawah tiga bulan, yang dipotong dadu, disusun pada tusuk sate dari bambu, dan dikombinasikan dengan lemak, hati atau ginjal.  Tekstur dagingnya empuk, tidak alot, dan jauh dari bau prengus. Sate Batibul disajikan dengan bawang merah, kecap, dan sambal. Sambal kecap tidak dicampur dengan sate melainkan terpisah dengan tambahan sambal terasi. \r\n\r\n- Makan Ditempat\r\n- Bawa Pulang\r\n- Pesan Antar\r\n- Buka Senin-Minggu 09.00-22.00 WIB', '1668577398_58cbaa67419bb8854217.jpg', 'Jl. Gajah Mada No.14 Mintaragen Kec.Tegal Timur Kota Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.938710436192!2d109.1194778395508!3d-6.862454499999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb7ae56bea4f5%3A0xb6043cd0e87b463e!2sSate%20Kambing%20Muda%20CEMPE%20LEMU%20Jl.%20Ahmad%20Yani!5e0!3m2!1sid!2sid!4v1668577309353!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(2, 'Bakso Rudal', 'bakso-rudal', 'Makanan', 'nurul@gmail.com', '081257800047', '18000', 'Rudal menawarkan menu bakso terbaik dengan resep bakso khas. Satu porsi bakso disini di tawarkan dengan harga terjangkau, tersedia tempat yang nyaman untuk makan dan pelangan juga bisa memesan untuk di bawa pulang (dibungkus).\r\n\r\n- Makan Ditempat\r\n- Bawa Pulang\r\n- Pesan Antar\r\n- Buka Senin-Minggu 09.00-21.00 WIB', 'baksorudal.jpg', 'Jl. Pancasila Panggung Kec. Tegal Timur Kota Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.003285143813!2d110.44657131428798!3d-7.008894994937086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8cbc4c04d1%3A0x30d4206f66ea3213!2sMie%20Ayam%20Bakso%20Moroseneng%20Mas%20Ade!5e0!3m2!1sid!2sid!4v1668345940910!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(3, 'Hot Seblak Jeletot !', 'hot-seblak-jeletot', 'Makanan', 'nurul@gmail.com', '081257800047', '10000', 'Seblak jeletot di Kota Tegal memiliki ciri khas tersendiri, di antaranya dari segi rasanya yang pedas manis.Kemudian, seblak jeletot yang disajikan tidak berkuah juga tidak kering alias nyemek. Dalam satu porsi Hot Seblak Jeletot terdapat isian telor, sawi, kerupuk dan makaroni. Hot Seblak Jeletot mempunyai 2 cabang lain, yakni di Jalan Werkudoro Kota Tegal dan Jalan KH Wahid Hasyim, Slawi.\r\n\r\n- Makan Ditempat\r\n- Bawa Pulang\r\n- Pesan Antar\r\n- Buka Senin-Minggu 10.00-21.30 WIB', 'seblak.jpg', 'Jl. Kartini No.77 Slerok Kec. Tegal Timur Kota Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.003285143813!2d110.44657131428798!3d-7.008894994937086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8cbc4c04d1%3A0x30d4206f66ea3213!2sMie%20Ayam%20Bakso%20Moroseneng%20Mas%20Ade!5e0!3m2!1sid!2sid!4v1668345940910!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(4, 'Es Lontrong Slawi', 'es-lontrong-slawi', 'Minuman', 'ayaa@gmail.com', '085870627026', '6000', 'Es Lontrong tidak bisa dijumpai di daerah manapun kecuali di Slawi. Dinamakan es Lontrong karena lokasi jualnya yang didalam gang/lontrong. Dalam penyajian, minuman legendaris asli slawi ini berisi es serut yang diberi isian kacang hijau, cincau, sirup merah, dan kuah santan. Untuk tambahannya bisa dengan kolang-kaling ataupun potongan roti tawar.\r\n\r\n- Makan Ditempat\r\n- Bawa Pulang\r\n- Pesan Anta\r\n- Buka Senin-Minggu 08.00-16.00 WIB', 'eslontrong.jpg', 'Jl. Letjen Suprapto No.26 Slawi Wetan Kec. Slawi Kab. Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.003285143813!2d110.44657131428798!3d-7.008894994937086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8cbc4c04d1%3A0x30d4206f66ea3213!2sMie%20Ayam%20Bakso%20Moroseneng%20Mas%20Ade!5e0!3m2!1sid!2sid!4v1668345940910!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(5, 'Gomu Boba & Cheese Tea ', 'gomu-boba-&-cheese-tea', 'Minuman', 'ayaa@gmail.com', '085870627026', '12000', 'Gomu Boba & Cheese Tea, Werkudoro Tegal merupakan sebuah tempat makan yang berada di Tegal. Rumah makan ini menyajikan berbagai menu cepat saji, jajanan & minuman yang dibanderol dengan harga yang murah dan bersahabat dengan kantong. Harga  untuk menikmati menu Rekomendasi yang disajikan Gomu Boba And Cheese Tea, Werkudoro Tegal berkisar antara Rp 9.000 - Rp 15.000.\r\n\r\n- Makan Ditempat\r\n- Bawa Pulang\r\n- Pesan Antar\r\n- Buka Senin-Minggu 09.00-21.00 WIB', 'boba.jpg', 'Jl. Werkudoro No.87 Pengabean Slerok Kec.Tegal Timur Kab. Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.003285143813!2d110.44657131428798!3d-7.008894994937086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8cbc4c04d1%3A0x30d4206f66ea3213!2sMie%20Ayam%20Bakso%20Moroseneng%20Mas%20Ade!5e0!3m2!1sid!2sid!4v1668345940910!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(6, 'Minuman Tradisional', 'minuman-tradisional', 'Minuman', 'nurul@gmail.com', '081257800047', '8000', 'Menyediakan berbagai macam jamu tradisional dengan harga yang paling terjangkau tanpa menghilangkan khasiat dari penggunaannya. Dibuat dari bahan-bahan  alami yang berkualitas, berkhasiat untuk kesehatan dan kehangatan tubuh.\r\n\r\n- Bawa Pulang\r\n- Pesan Antar\r\n- Buka Senin - Minggu 07.00-21.00 WIB', 'minumantradisional.jpg', 'Gg. 6  RT.03 RW.09 Panggung Kec. Tegal Timur Kota Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.003285143813!2d110.44657131428798!3d-7.008894994937086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8cbc4c04d1%3A0x30d4206f66ea3213!2sMie%20Ayam%20Bakso%20Moroseneng%20Mas%20Ade!5e0!3m2!1sid!2sid!4v1668345940910!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(7, 'Tahu Aci Khas Tegal ', 'tahu-aci-khas-tegal', 'Camilan', 'nurul@gmail.com', '081257800047', '45000', 'Tahu aci adalah kuliner khas Tegal yang berbahan dasar tahu, aci, dan bumbu. Kemudian digoreng sampai garing. Tekstur luarnya crispy sedangkan dalamnya lembut dan kenyal. Tahu aci cocok dijadikan camilan dan oleh oleh khas dari kota Tegal.  \r\nSatu bungkus terdiri dari 30 pcs (FREE BESEK).\r\nSemua produk dibuat dadakan, bukan frozen sehingga tahan hingga 7-10 hari disuhu ruang dan 1 bulan jika disimpan di kulkas.\r\n\r\n- Makan Ditempat\r\n- Bawa Pulang\r\n- Pesan Antar\r\n- 1 pack isi 30 pcs\r\n- Buka Senin-Minggu 14.00-22.00 WIB', 'tahuaci.jpg', 'Jl. Serayu Mintaragen Kec.Tegal Timur Kota Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.003285143813!2d110.44657131428798!3d-7.008894994937086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8cbc4c04d1%3A0x30d4206f66ea3213!2sMie%20Ayam%20Bakso%20Moroseneng%20Mas%20Ade!5e0!3m2!1sid!2sid!4v1668345940910!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(8, 'Outlet Olos Khas Tegal ', 'outlet-olos-khas-tegal', 'Camilan', 'nurul@gmail.com', '081257800047', '10000', 'Olos adalah makanan asli Tegal. Berisi kol dicampur dengan cabai jadi isiannya pedas.Outlet olos khas tegal menyediakan olos setengah matang untuk dikirim keluar kota atau oleh-oleh dengan ketahanan 2-3 hari. Tersedia juga berbagai varian rasa, seperti isi sosis dan ayam\r\n\r\n- Bawa Pulang\r\n- Pesan Antar\r\n- Buka Senin-Minggu 24 Jam', 'olos.jpg', 'Jl. Kemuning No.16 RT. 09 RW. 03 kejambon Kec. Tegal Timur Kota Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.003285143813!2d110.44657131428798!3d-7.008894994937086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8cbc4c04d1%3A0x30d4206f66ea3213!2sMie%20Ayam%20Bakso%20Moroseneng%20Mas%20Ade!5e0!3m2!1sid!2sid!4v1668345940910!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(10, 'es sayang', 'es-sayang', 'Minuman', 'liza@gmail.com', '083121242542', '195000', 'dasdasds', '1668785224_445f5a6719e76d43b357.jpeg', 'sadsa', 'asddsda');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `via` varchar(15) NOT NULL,
  `detail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `via`, `detail`) VALUES
(1, 'Dana', '085870627026'),
(2, 'Shopeepay', '085870627026'),
(3, 'Bank BRI', '586501030011537'),
(4, 'Bank BCA', '5220304312');

-- --------------------------------------------------------

--
-- Table structure for table `penginapan`
--

CREATE TABLE `penginapan` (
  `id` int(11) NOT NULL,
  `nama_penginapan` varchar(30) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `jenis_penginapan` varchar(50) NOT NULL,
  `user_email` varchar(128) NOT NULL,
  `nomor_user` varchar(15) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `maps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`id`, `nama_penginapan`, `slug`, `jenis_penginapan`, `user_email`, `nomor_user`, `harga`, `deskripsi`, `gambar`, `alamat`, `maps`) VALUES
(1, 'Hotel Karlita', 'hotel-karlita', 'Hotel', 'ayaa@gmail.com', '085870627026', '400000', 'Hotel Karlita Memiliki fasilitas terbaik seperti: AC, Restoran, Kolam Renang, Resepsionis 24 Jam, Parkir, Lift, WiFi.\r\n', 'karlita.jpg', 'Jl. Brigjen. Katamso No.31, Tegalsari, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52111.\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(2, 'Hotel Bahari', 'hotel-bahari', 'Hotel', 'nurul@gmail.com', '081257800047', '270000', 'Hotel ini telah menerapkan standar dan protokol kesehatan untuk mencegah penularan COVID-19, baik terhadap tamu, seluruh staff, dan hotelnya', 'bahari.jpg', 'JL. Wahidin Sudirohusodo 1 , Kel. Kemandungan, Kel, Pesurungan Kidul, Kec. Tegal Bar., Kota ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(3, 'Alexander Hotel', 'alexander-hotel', 'Hotel', 'ayaa@gmail.com', '085870627026', '320000', 'Alexander Hotel Tegal adalah hotel bintang 3 di kota Tegal, hotel ini memiliki lokasi strategis di pusat kota Tegal dan dekat pusat bisnis, pusat perbelanjaan dan stasiun kereta api. Alexander Hotel Tegal adalah pilihan yang fantastis untuk mendapatkan pengalaman yang tidak terlupakan. Nikmati layanan professional, penuh perhatian, ramah dan intim demi kenyamanan Anda selama menginap.', 'alexander.jpg', 'Jl. Jend. Sudirman No.30, Pekauman, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52131', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(4, 'Grand Dian Hotel ', 'grand-dian-hotel', 'Hotel', 'ayaa@gmail.com', '085870627026', '520000', 'Grand Dian Hotel Guci terletak di Tegal dan memiliki taman serta teras. Resor bintang 3 ini menawarkan Wi-Fi gratis, resepsionis 24 jam, dan layanan kamar. Resor ini memiliki kamar keluarga. ', 'grand-dian-hotel.jpg', 'Jl. Jenderal Ahmad Yani No.101, Langon, Tembok Luwung, Kec. Adiwerna, Kabupaten Tegal, Jawa ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(5, 'Gren Hotel', 'gren-hotel', 'Hotel', 'nurul@gmail.com', '081257800047', '280000', 'Gren Hotel Tegal terletak di Tegal, menawarkan bar, taman, dan teras. Fasilitas yang ditawarkan di akomodasi ini meliputi restoran, resepsionis 24 jam, layanan kamar, dan Wi-Fi gratis. Hotel ini memiliki kamar keluarga. Kamar-kamarnya memiliki kamar mandi pribadi, sementara kamar-kamar tertentu di hotel juga menawarkan balkon. Gren Hotel Tegal menawarkan sarapan Asia atau halal.', 'hotel-gren-tegal.jpg', 'Jl. Jend. Sudirman No.19, Randugunting, Kec. Tegal Sel., Kota Tegal, Jawa Tengah 52131', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(6, 'KHAS Tegal Hotel', 'khas-tegal-hotel', 'Hotel', 'nurul@gmail.com', '081257800047', '620000', 'Pesonna Hotel Tegal menawarkan layanan kamar. Sebagai tamu Pesonna Hotel Tegal, Anda dapat menikmati kolam renang dan sarapan yang tersedia di properti. Para tamu yang mengemudi memiliki akses ke tempat parkir gratis.', 'khasTegal.jpg', 'Jl. Gajah Mada No.5, Mintaragen, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52112', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(7, 'Premiere Hotel', 'premiere-hotel', 'Hotel', 'ayaa@gmail.com', '085870627026', '280000', 'Premiere Guest House adalah pilihan tepat untuk wisatawan yang mengunjungi Tegal, karena menawarkan suasana yang akan menyempurnakan masa menginap Anda.', 'premiere.jpg', 'Jl. Yos Sudarso No.10, Mintaragen, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52121', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(8, 'Renez In Hotel', 'renez-in-hotel', 'Hotel', 'nurul@gmail.com', '081257800047', '360000', 'Ranez Inn menawarkan akomodasi bintang 2 dengan taman di Tegal. Fasilitas yang ditawarkan di akomodasi ini meliputi restoran,ruang penitipan bagasi, dan Wi-Fi gratis.Semua kamar dilengkapi dengan AC, TV dengan saluran satelit, microwave, teko, shower, perlengkapan mandi gratis, dan meja. Kamar-kamar di hotel ini dilengkapi dengan seprai dan handuk.Anda dapat menikmati sarapan halal di Ranez Inn.', 'Renezin.jpg', 'Jl. Kapten Ismail No.76, Kraton, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52112', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(9, 'Riez Place Hotel', 'riez-palace-hotel', 'Hotel', 'ayaa@gmail.com', '085870627026', '470000', 'Anda akan menikmati kenyamanan kamar yang menawarkan minibar, penyejuk udara, dan meja, dan anda dapat tetap menggunakan internet pada saat menginap karena Riez Palace menawarkan wi-fi gratis.', 'Riez palace.jpg', 'Jl. Gajah Mada No.75, Mintaragen, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52125', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(10, 'Hotel Plaza', 'hotel-plaza', 'Hotel', 'nurul@gmail.com', '081257800047', '450000', 'Horison Plaza Tegal memiliki fasilitas terbaik seperti: AC, Restoran, Resepsionis 24 Jam, Parkir, Lift, WiFi. (Beberapa fasilitas lain mungkin memerlukan biaya tambahan)', 'hotel plaza.jpg', 'Jl. Dr. Wahidin Sudirohusodo No.2, Pesurungan Kidul, Kec. Tegal Bar., Kota Tegal, Jawa Tenga', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(12, 'Villa Anandha', 'villa-anandha', 'Villa', 'ayaa@gmail.com', '085870627026', '200000', 'Fasilitas Villa :\r\nRuangan Luas (untuk rombongan)\r\nRuang Keluarga dan sofa ( bisa untuk karaoke)\r\n2 Kamar Tidur (spring bed, tv )\r\n2 Kamar Mandi dalam (Air Dingin dan Panas , kloset duduk)\r\n1 Kamar Mandi Keluarga\r\nHalaman depan nice view\r\nParkir Luas \r\nFree Karpet & Free 4 Extrabed (uk 2-3 org dewasa @ 180 cm x 200cm) \r\n', '1668675585_8649737b33fcf22c8131.jpg', 'Komplek Wisata Guci, Jl. Raya Objek Wisata Guci No. 35 RT09/RW02, Desa Rembul, Bojong, Pekandangan, Rembul, Kec. Bojong, Kabupaten Tegal, Jawa Tengah 52465', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15833.68205914925!2d109.15075192570994!3d-7.19276606691204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb77deb57a679%3A0x35c412ac9b09f3c8!2sVilla%20Anandha!5e0!3m2!1sid!2sid!4v1668675438604!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(16, 'Villa Khayangan', 'villa-khayangan', 'Villa', 'liza@gmail.com', '083121242542', '3400000', 'Mencari vila yang nyaman ditempati sekaligus ramah anak memang gampang-gampang susah. Namun, bila Anda sedang merencanakan liburan bersama keluarga dan anak-anak, pertimbangkan Villa Herrera Puncak ini!\r\n\r\nSelagi orang dewasa sedang santai sambil berkaraoke, anak-anak bisa bermain di playground yang berada di taman. Untuk Anda yang membawa balita juga tidak perlu khawatir karena vila menyediakan kursi khusus anak.', '1668861997_dca378b031d445a85870.jpg', 'Jl. Puncak Dua, Wargajaya, Kec. Sukamakmur, Kabupaten Bogor, Jawa Barat 16830', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.104905233321!2d107.00495232169385!3d-6.633891879859609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b0b48fa4c4f1%3A0xdefce36e225afdc0!2sVilla%20Khayangan!5e0!3m2!1sid!2sid!4v1668861984094!5m2!1sid!2sid&quot; width=&quot;400&quot; height=&quot;300&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;&gt;&lt;/iframe&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `no_pesanan` int(25) NOT NULL,
  `customer` varchar(128) NOT NULL,
  `email_cust` varchar(128) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `tanggal_datang` date NOT NULL,
  `jumlah_tiket` int(5) NOT NULL,
  `id_payment` int(2) NOT NULL,
  `harga_total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`no_pesanan`, `customer`, `email_cust`, `tanggal_pesan`, `nama_wisata`, `tanggal_datang`, `jumlah_tiket`, `id_payment`, `harga_total`) VALUES
(327826303, 'Anwar Family', 'ayaa@gmail.com', '2022-11-20', 'Curug Cantel', '2022-11-22', 5, 3, '75000'),
(1025575198, 'asdasdsds', 'ayaa@gmail.com', '2022-11-20', 'Curug Bengkawah', '2022-11-22', 2, 4, '20000'),
(1073398082, 'Mas Anwar', 'ayaa@gmail.com', '2022-11-19', 'Clirit View', '2022-11-25', 90, 2, '1800000'),
(1134818244, 'Tim Anwar', 'liza@gmail.com', '2022-11-19', 'Curug Bengkawah', '2022-11-29', 4, 4, '40000'),
(1481693701, 'dasdaakdspmklasd', 'ayaa@gmail.com', '2022-11-20', 'Pantai Alam Indah', '2022-11-22', 3, 1, '45000'),
(1505106295, 'Tim Khaeril', 'liza@gmail.com', '2022-11-20', 'Curug Bengkawah', '2022-11-29', 9, 2, '90000'),
(1518169977, 'dasdaakdspmklasd', 'ayaa@gmail.com', '2022-11-20', 'Pantai Alam Indah', '2022-11-22', 3, 1, '45000'),
(1876593470, 'Istia Family', 'ayaa@gmail.com', '2022-11-20', 'Curug Bengkawah', '2022-11-30', 3, 4, '30000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `password` varchar(256) NOT NULL,
  `gambar` varchar(128) DEFAULT NULL,
  `is_active` int(1) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `no_telp`, `jenis_kelamin`, `alamat`, `password`, `gambar`, `is_active`, `role_id`) VALUES
(1, 'Muhammad Khaeril Anwar', 'khaerilanwar1992@gmail.com', '085870627026', 'Laki-laki', 'Pasarbatang, Brebes', '$2y$10$gMJ7B4ZBS0iBYN6F2/e0beu0QiXGsExTtow0ecyeYJReEPXotf3nK', 'anwar.jpeg', 1, 1),
(2, 'Istia Ningrum', 'istianingrum@gmail.com', '083121242561', 'Perempuan', 'Sawojajar, Brebes', '$2y$10$cQM749U1j/oF2qxA8tBCHOOxhbYVlj3SY4OL72rU9x7a2fLVds2gO', 'default.jpg', 1, 2),
(5, 'Krisdiana', 'krisdiana@gmail.com', '081257800047', 'Perempuan', 'Gamprit, Brebes', '$2y$10$aEeWfdCY0kJ0a/qNt5zkyOm4P9UOV5HRLh1FebyOr.CjHzlSh9vCS', 'default.jpg', 1, 2),
(13, 'Gita Iftah Royani', 'gita123@gmail.com', '081257800047', 'Perempuan', 'dadas', '$2y$10$cLYBqRTcrUzVHNB8Pgj7UeNTkC5Z.ykxJhbrso.jcGMH4tJFDSqi6', 'default.jpg', 1, 2),
(14, 'Adduru Nafisah', 'adudu@gmail.com', '081187900098', 'Perempuan', 'Pasarbatang, Brebes', '$2y$10$nwtp6qxzU05Ns9n1D2ATt.J8QhRwPyf44aoFAVAHcRJimE/Refs7G', 'default.jpg', 1, 2),
(15, 'Nurul Rahmanda Afrianisa', 'nurul@gmail.com', '081257800047', 'Perempuan', 'Tegal', '$2y$10$j.G9liu1KMg019dIULhizur4Hx5TgzNbQCkcaeZKAz36zemG8Qgey', 'default.jpg', 1, 2),
(16, 'Nihayatul Fathiyah', 'ayaa@gmail.com', '085870627026', 'Perempuan', 'Banjaratma, Brebes', '$2y$10$rq7jHuxN2Nsgy2tfegk7FOC1V1Zq0hn7zA3vQE1MSaqROvrELmGEy', 'default.jpg', 1, 2),
(17, 'Rahma Liza Arifiyah', 'liza@gmail.com', '083121242542', 'Perempuan', 'Pasarbatang, Brebes', '$2y$10$wPbfth0gnBGm15AmTmswb.OtuTpdENDT2On2LpigYjLl2XqcVormq', '1668611388_da32d42732f1a4413bc3.jpg', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama_wisata` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `maps` text DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama_wisata`, `harga`, `lokasi`, `slug`, `maps`, `alamat`, `deskripsi`, `gambar`) VALUES
(1, 'Curug Cantel', 15000, 'Bumijawa', 'curug-cantel', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1979.0649435524103!2d109.12793780800123!3d-7.226022598695879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f8d5fc8b3eb23%3A0xb5edf92a14017919!2sWisata%20Alam%20Curug%20Cantel!5e0!3m2!1sid!2sid!4v1668094774039!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Ladang,Hutan, Sigedong, Kecamatan Bumijawa, Kabupaten Tegal, Jawa Tengah 52466', 'Air terjun tertinggi yang ada di daerah Bumijawa Kabupaten Tegal', 'cantel.jpg'),
(2, 'Curug Bengkawah', 10000, 'Belik', 'curug-bengkawah', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.0742446484996!2d109.32346852171912!3d-7.117394878421004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6feed852d9ada3%3A0xd5a6ff89b1ca15e1!2sCurug%20Bengkawah!5e0!3m2!1sid!2sid!4v1668095147378!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Jl. Sikasur - Simpur, Karangmulyo, Sikasur, Kec. Belik, Kabupaten Pemalang, Jawa Tengah 52356', 'Curug Bengkawah berada di Kabupaten Pemalang Jawa Tengah', 'bengkawah.jpg'),
(3, 'Pantai Alam Indah', 15000, 'Kota Tegal', 'pantai-alam-indah', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.6795132741552!2d109.13922845800063!3d-6.847493348762865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb7755674bc29%3A0xf84b949fae96c67a!2sPantai%20Alam%20Indah!5e0!3m2!1sid!2sid!4v1668095180500!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Mintaragen, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52121', 'Pantai yang berada di Kota Tegal tepatnya di Tegal Timur', 'pai.jpg'),
(5, 'Clirit View', 20000, 'Balapulang', 'clirit-view', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.1264745737685!2d109.13113341456014!3d-7.1113387948646345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f9537bdc9d653%3A0xd1c0d91dd59c6393!2sWana%20Wisata%20Clirit%20View!5e0!3m2!1sid!2sid!4v1668095248568!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Jl. Raya Slawi Jl. Bojong, Sawah,Ladang, Kalibakung, Kec. Balapulang, Kabupaten Tegal, Jawa Tengah 52464', 'Clirit View termasuk objek wisata yang berada di Jawa Tengah tepatnya di kecamatan Balapulang Kabupaten Tegal, yang menyajikan banyak spot foto yang bagus', 'clirit.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`no_pesanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
