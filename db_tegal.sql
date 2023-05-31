-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 09:31 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jenis_kuliner` varchar(128) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `maps` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id`, `nama`, `jenis_kuliner`, `harga`, `deskripsi`, `gambar`, `alamat`, `maps`, `id_user`, `status`) VALUES
(1, 'Sate Kambing Batibul', 'Makanan', '320000', 'Sate kambing batibul adalah Sate yang menjadi ciri khas Kota Tegal. Dinamakan batibul karena dibuat dari daging kambing atau domba muda dibawah tiga bulan, yang dipotong dadu, disusun pada tusuk sate dari bambu, dan dikombinasikan dengan lemak, hati atau ginjal.  Tekstur dagingnya empuk, tidak alot, dan jauh dari bau prengus. Sate Batibul disajikan dengan bawang merah, kecap, dan sambal. Sambal kecap tidak dicampur dengan sate melainkan terpisah dengan tambahan sambal terasi. \r\n\r\n- Makan Ditempat\r\n- Bawa Pulang\r\n- Pesan Antar\r\n- Buka Senin-Minggu 09.00-22.00 WIB', '1668577398_58cbaa67419bb8854217.jpg', 'Jl. Gajah Mada No.14 Mintaragen Kec.Tegal Timur Kota Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.938710436192!2d109.1194778395508!3d-6.862454499999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb7ae56bea4f5%3A0xb6043cd0e87b463e!2sSate%20Kambing%20Muda%20CEMPE%20LEMU%20Jl.%20Ahmad%20Yani!5e0!3m2!1sid!2sid!4v1668577309353!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 1),
(2, 'Bakso Rudal', 'Makanan', '18000', 'Rudal menawarkan menu bakso terbaik dengan resep bakso khas. Satu porsi bakso disini di tawarkan dengan harga terjangkau, tersedia tempat yang nyaman untuk makan dan pelangan juga bisa memesan untuk di bawa pulang (dibungkus).\r\n\r\n- Makan Ditempat\r\n- Bawa Pulang\r\n- Pesan Antar\r\n- Buka Senin-Minggu 09.00-21.00 WIB', 'baksorudal.jpg', 'Jl. Pancasila Panggung Kec. Tegal Timur Kota Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.003285143813!2d110.44657131428798!3d-7.008894994937086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8cbc4c04d1%3A0x30d4206f66ea3213!2sMie%20Ayam%20Bakso%20Moroseneng%20Mas%20Ade!5e0!3m2!1sid!2sid!4v1668345940910!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 1),
(3, 'Hot Seblak Jeletot !', 'Makanan', '10000', 'Seblak jeletot di Kota Tegal memiliki ciri khas tersendiri, di antaranya dari segi rasanya yang pedas manis.Kemudian, seblak jeletot yang disajikan tidak berkuah juga tidak kering alias nyemek. Dalam satu porsi Hot Seblak Jeletot terdapat isian telor, sawi, kerupuk dan makaroni. Hot Seblak Jeletot mempunyai 2 cabang lain, yakni di Jalan Werkudoro Kota Tegal dan Jalan KH Wahid Hasyim, Slawi.\r\n\r\n- Makan Ditempat\r\n- Bawa Pulang\r\n- Pesan Antar\r\n- Buka Senin-Minggu 10.00-21.30 WIB', 'seblak.jpg', 'Jl. Kartini No.77 Slerok Kec. Tegal Timur Kota Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.003285143813!2d110.44657131428798!3d-7.008894994937086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8cbc4c04d1%3A0x30d4206f66ea3213!2sMie%20Ayam%20Bakso%20Moroseneng%20Mas%20Ade!5e0!3m2!1sid!2sid!4v1668345940910!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 1),
(4, 'Es Lontrong Slawi', 'Minuman', '6000', 'Es Lontrong tidak bisa dijumpai di daerah manapun kecuali di Slawi. Dinamakan es Lontrong karena lokasi jualnya yang didalam gang/lontrong. Dalam penyajian, minuman legendaris asli slawi ini berisi es serut yang diberi isian kacang hijau, cincau, sirup merah, dan kuah santan. Untuk tambahannya bisa dengan kolang-kaling ataupun potongan roti tawar.\r\n\r\n- Makan Ditempat\r\n- Bawa Pulang\r\n- Pesan Anta\r\n- Buka Senin-Minggu 08.00-16.00 WIB', 'eslontrong.jpg', 'Jl. Letjen Suprapto No.26 Slawi Wetan Kec. Slawi Kab. Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.003285143813!2d110.44657131428798!3d-7.008894994937086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8cbc4c04d1%3A0x30d4206f66ea3213!2sMie%20Ayam%20Bakso%20Moroseneng%20Mas%20Ade!5e0!3m2!1sid!2sid!4v1668345940910!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 1),
(5, 'Gomu Boba & Cheese Tea ', 'Minuman', '12000', 'Gomu Boba & Cheese Tea, Werkudoro Tegal merupakan sebuah tempat makan yang berada di Tegal. Rumah makan ini menyajikan berbagai menu cepat saji, jajanan & minuman yang dibanderol dengan harga yang murah dan bersahabat dengan kantong. Harga  untuk menikmati menu Rekomendasi yang disajikan Gomu Boba And Cheese Tea, Werkudoro Tegal berkisar antara Rp 9.000 - Rp 15.000.\r\n\r\n- Makan Ditempat\r\n- Bawa Pulang\r\n- Pesan Antar\r\n- Buka Senin-Minggu 09.00-21.00 WIB', 'boba.jpg', 'Jl. Werkudoro No.87 Pengabean Slerok Kec.Tegal Timur Kab. Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.003285143813!2d110.44657131428798!3d-7.008894994937086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8cbc4c04d1%3A0x30d4206f66ea3213!2sMie%20Ayam%20Bakso%20Moroseneng%20Mas%20Ade!5e0!3m2!1sid!2sid!4v1668345940910!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 1),
(6, 'Minuman Tradisional', 'Minuman', '8000', 'Menyediakan berbagai macam jamu tradisional dengan harga yang paling terjangkau tanpa menghilangkan khasiat dari penggunaannya. Dibuat dari bahan-bahan  alami yang berkualitas, berkhasiat untuk kesehatan dan kehangatan tubuh.\r\n\r\n- Bawa Pulang\r\n- Pesan Antar\r\n- Buka Senin - Minggu 07.00-21.00 WIB', 'minumantradisional.jpg', 'Gg. 6  RT.03 RW.09 Panggung Kec. Tegal Timur Kota Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.003285143813!2d110.44657131428798!3d-7.008894994937086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8cbc4c04d1%3A0x30d4206f66ea3213!2sMie%20Ayam%20Bakso%20Moroseneng%20Mas%20Ade!5e0!3m2!1sid!2sid!4v1668345940910!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 1),
(7, 'Tahu Aci Tegal ', 'Camilan', '45000', 'Tahu aci adalah kuliner khas Tegal yang berbahan dasar tahu, aci, dan bumbu. Kemudian digoreng sampai garing. Tekstur luarnya crispy sedangkan dalamnya lembut dan kenyal. Tahu aci cocok dijadikan camilan dan oleh oleh khas dari kota Tegal.  \r\nSatu bungkus terdiri dari 30 pcs (FREE BESEK).\r\nSemua produk dibuat dadakan, bukan frozen sehingga tahan hingga 7-10 hari disuhu ruang dan 1 bulan jika disimpan di kulkas.\r\n\r\n- Makan Ditempat\r\n- Bawa Pulang\r\n- Pesan Antar\r\n- 1 pack isi 30 pcs\r\n- Buka Senin-Minggu 14.00-22.00 WIB', 'tahuaci.jpg', 'Jl. Serayu Mintaragen Kec.Tegal Timur Kota Tegal', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.003285143813!2d110.44657131428798!3d-7.008894994937086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8cbc4c04d1%3A0x30d4206f66ea3213!2sMie%20Ayam%20Bakso%20Moroseneng%20Mas%20Ade!5e0!3m2!1sid!2sid!4v1668345940910!5m2!1sid!2sid&quot; width=&quot;400&quot; height=&quot;300&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;&gt;&lt;/iframe&gt;', 0, 1),
(8, 'Outlet Olos Khas Tegal ', 'Camilan', '10000', 'Olos adalah makanan asli Tegal. Berisi kol dicampur dengan cabai jadi isiannya pedas.Outlet olos khas tegal menyediakan olos setengah matang untuk dikirim keluar kota atau oleh-oleh dengan ketahanan 2-3 hari. Tersedia juga berbagai varian rasa, seperti isi sosis dan ayam\r\n\r\n- Bawa Pulang\r\n- Pesan Antar\r\n- Buka Senin-Minggu 24 Jam', 'olos.jpg', 'Jl. Kemuning No.16 RT. 09 RW. 03 kejambon Kec. Tegal Timur Kota Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.003285143813!2d110.44657131428798!3d-7.008894994937086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8cbc4c04d1%3A0x30d4206f66ea3213!2sMie%20Ayam%20Bakso%20Moroseneng%20Mas%20Ade!5e0!3m2!1sid!2sid!4v1668345940910!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 1),
(16, 'Bakso Rudal Brebes', 'Makanan', '16000', 'In quod repellendus corporis quisquam recusandae molestias explicabo cupiditate. Voluptates aut odit doloremque nesciunt. Blanditiis expedita corporis qui. Molestiae rerum reiciendis dicta maxime eligendi commodi. Non vero nihil perferendis sit. Vitae et nulla nam et autem at sint sed. Rerum vero ipsa dolores eos et.', 'makanan.jpg', 'Ds. Samanhudi No. 104, Banjarmasin 28945, Sulsel', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(17, 'Mie Goreng Bang Anwar', 'Makanan', '10000', 'Quia eaque voluptas officiis eveniet inventore ipsum laboriosam. Quae in id rerum. Sit ipsum ipsa et quisquam. Nemo numquam unde dignissimos voluptas eum eligendi maiores. Voluptatem quaerat explicabo soluta est in possimus. Suscipit aut velit eum. Quo nesciunt quis aut est et ab ut. Quos veniam dolorum sunt eos voluptatem quis. Laboriosam similique ut explicabo voluptas. Est eum deserunt et totam ullam aut eum blanditiis. Quo veritatis in similique magni eius eius.', 'makanan.jpg', 'Dk. Bakit  No. 975, Tarakan 85800, Kaltim', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(18, 'Nasi Goreng Mba Istia', 'Makanan', '13000', 'Fugit ipsa quibusdam et. Ea perferendis assumenda omnis ut blanditiis numquam. Sapiente deleniti excepturi quo dignissimos. Dolores ducimus eum reiciendis sit ullam. Ut facilis nihil voluptatum excepturi tenetur. Est atque non et dolore. Fugiat accusantium odit et exercitationem deserunt placeat veniam. Et autem voluptas qui voluptatibus dolore. Nulla dolores sunt quo laborum quia. Cupiditate ut enim voluptatem ipsa. Odit ut ab cumque dolores.', 'makanan.jpg', 'Ds. Bagas Pati No. 665, Malang 62074, Sulut', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(19, 'Kwetiaw Cinta', 'Makanan', '14000', 'Animi molestias iure commodi consectetur. Repudiandae debitis et ducimus et necessitatibus. Repudiandae exercitationem magni vel nostrum velit praesentium ullam et. Voluptas sapiente non asperiores qui aut. Qui placeat veritatis et earum dicta omnis neque. Nihil a explicabo esse iusto aut. Rerum sapiente mollitia consectetur porro. Ipsam quasi exercitationem natus cupiditate. Veniam vel aut assumenda sint. Nobis rerum ad consequatur voluptate voluptatem ratione quisquam.', 'makanan.jpg', 'Kpg. Industri No. 507, Parepare 17373, Sulsel', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(20, 'Nasi Goreng Brebes', 'Makanan', '16000', 'Consequatur vel autem qui laboriosam. Ut culpa omnis et eaque laborum distinctio. Quaerat ut omnis accusamus recusandae dolorum placeat quis. Ut nulla magni sed alias. Sit qui reprehenderit quia. Officia aut ab qui voluptatem. Vero maiores sed voluptatem cumque magnam. Aperiam et quas quis adipisci. Enim vel omnis odit deleniti et provident.', 'makanan.jpg', 'Dk. Adisumarmo No. 830, Jambi 25463, Kaltara', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(21, 'Bakso Upin Ipin', 'Makanan', '8000', 'Ad minima nam fuga corporis distinctio quo laborum. Rerum ducimus pariatur voluptates molestias nulla voluptate nulla. Quam suscipit nobis voluptatem quisquam. Pariatur eum est doloremque ut vel. Dolor rerum autem est id. Harum doloribus ab non dignissimos doloribus delectus est perspiciatis. Provident officiis odio et iste commodi ut. Quaerat nulla blanditiis repellat eaque. Quo reprehenderit omnis qui non consequatur et. Fugiat sint fuga assumenda suscipit qui.', 'makanan.jpg', 'Jr. Yos Sudarso No. 362, Samarinda 21478, Sulsel', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(22, 'Nasi Lengko Bu Wasri', 'Makanan', '7000', 'At occaecati animi aperiam voluptatem. Officia placeat id dolor praesentium a dolor. Facere et reprehenderit et est. Deserunt quas voluptatem architecto hic quisquam sed repellat. Possimus officiis iure eos qui saepe quidem quas. Totam dolores maiores sint. Minus illo quam sapiente ut. Beatae dignissimos labore assumenda voluptatem autem rerum. Sequi soluta nostrum rerum corporis. Est iure dolor ut corrupti adipisci voluptatum ratione quaerat. Aut provident et pariatur enim neque mollitia.', 'makanan.jpg', 'Psr. Baabur Royan No. 530, Cimahi 48364, NTB', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(23, 'Ikan Bakar Lautan', 'Makanan', '20000', 'Velit magni eum inventore exercitationem id. Doloremque omnis possimus molestias aliquam. Dolor qui voluptate illo qui rerum. Nobis qui officiis ab repellat. Inventore corporis adipisci sint. Consequuntur quae inventore velit sunt. Asperiores et quia aliquid qui dolores cum. Velit molestias illum ducimus quia quia laboriosam eveniet veniam. Quasi unde ut et beatae ut temporibus et. Optio quis eum laudantium aperiam cum asperiores.', 'makanan.jpg', 'Dk. Abdul Muis No. 473, Makassar 49193, Sulut', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(24, 'Nasi Bakar Sultan', 'Makanan', '21000', 'Eos aut accusantium vel fugiat dolores qui. Laborum voluptatem ipsum est aut illo consequatur. Dolor voluptatem sunt fugit. Qui autem sapiente ducimus id quos excepturi voluptatem. Fuga voluptate qui possimus provident animi qui. Veniam consequatur aperiam ducimus voluptas voluptatem. Ut non repellat magnam voluptas. Molestiae perferendis ut quisquam odit quae rerum dolor natus.', 'makanan.jpg', 'Jln. Pasteur No. 643, Cimahi 82819, Malut', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(25, 'Mie Rebus Bareng', 'Makanan', '10000', 'Consequuntur ducimus sed assumenda velit corporis dolor a qui. Et eos et itaque recusandae. Esse nobis sint ut enim dolores. Nemo culpa perferendis dolor. Aspernatur temporibus vitae quibusdam aut. Vel sequi sed molestiae voluptates vel non eius. Expedita nisi repellendus voluptatibus ut sapiente rerum ipsa esse. Qui consequatur earum qui. Suscipit excepturi quia laborum laborum sed sequi natus. Accusantium omnis recusandae enim molestiae voluptas eligendi.', 'makanan.jpg', 'Gg. Raya Ujungberung No. 412, Pangkal Pinang 44021, Jambi', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(26, 'Basreng Enak', 'Camilan', '5000', 'Distinctio quo quis eius ipsam aut iusto. Inventore numquam quam sint delectus id voluptates. Voluptas quae tenetur quae omnis fuga id sequi at. Ratione maxime quia magni quo et neque error. Voluptate quos a est veritatis laborum. Nesciunt minima laborum ut fuga temporibus modi. Dolor quas quibusdam eos iste quos voluptas ex. Placeat eum labore consectetur.', 'camilan.jpg', 'Psr. Raya Setiabudhi No. 49, Makassar 53011, Lampung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(28, 'Pempek Palembang', 'Camilan', '10000', 'Culpa voluptate sint neque. Praesentium sapiente non eligendi. Soluta et voluptatem aut voluptas et repudiandae velit. Rerum quo quia cupiditate voluptatem porro quod. Commodi perspiciatis in eligendi quasi possimus. Omnis quisquam dolor alias nobis architecto qui. Et possimus iusto nemo ut fuga ullam commodi. Aut quis voluptate illo non doloribus. Sed et facilis provident possimus sed non.', 'camilan.jpg', 'Gg. Thamrin No. 211, Sorong 80719, Pabar', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(29, 'Pempek Pekalongan', 'Camilan', '8000', 'Numquam explicabo voluptatem excepturi accusantium sit non id. Possimus voluptatem quos asperiores est dolor laborum. Adipisci ea qui sed officia. Dolorem praesentium qui molestiae ipsum quaerat accusamus molestiae. Nihil est delectus fugiat deleniti quasi architecto quo. Enim rerum repellat aut modi expedita molestiae aut sapiente. Occaecati dolorem vitae vel nostrum quam ratione optio. Consequatur ipsa non nihil dolore ipsam accusantium illum. Enim consectetur consectetur harum quibusdam.', 'camilan.jpg', 'Dk. Sutoyo No. 40, Cimahi 27272, Maluku', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(30, 'Cilok Kami', 'Camilan', '5000', 'Eum commodi aspernatur voluptatem. Voluptatem incidunt sint quia ut quidem beatae ut. Quis molestiae molestias dolorum facilis sed. Esse ut accusantium facilis veritatis nulla consequatur molestiae laborum. Est dolorem pariatur rem ea ad quasi. Et aut nam consequuntur excepturi similique et totam. Eaque distinctio blanditiis laborum. Aspernatur voluptate qui id aut qui tempore. Cumque est quas eveniet consequatur error.', 'camilan.jpg', 'Gg. Industri No. 111, Medan 17139, Jatim', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(31, 'Cilor Enak', 'Camilan', '5000', 'Eos fugiat architecto sit impedit officiis. Error delectus enim odio tempora accusantium et corporis. Qui eos delectus ea. Harum inventore unde harum non ut. Architecto qui optio debitis laboriosam. Illo et eum vel. Ut delectus laborum illum dolore est in. Vitae aut qui dolores eveniet sed atque. Doloribus itaque eligendi dolorem nihil. Unde quia qui perspiciatis dolorum qui illo. Nihil sit animi et voluptatem sit sint id. Laboriosam cumque provident voluptatem.', 'camilan.jpg', 'Jr. Salam No. 395, Tual 24184, Banten', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(32, 'Cilok Bang Anwar', 'Camilan', '5000', 'Suscipit omnis temporibus voluptates et dolorum velit a. Fugiat quas dignissimos doloribus maiores cupiditate. Dolor dolorum cumque repellendus enim cupiditate dolorem omnis accusamus. Eum impedit ad labore eaque cupiditate. Nihil dolor optio itaque accusantium voluptas tempore. Voluptates dolor quia sed eos earum est. Est reiciendis libero iure sit. Quidem laborum at nulla nesciunt cupiditate modi. Nihil qui iusto fuga debitis odio quos.', 'camilan.jpg', 'Kpg. Baik No. 240, Semarang 64203, Papua', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(33, 'Mie Lidi Istia', 'Camilan', '7000', 'Id occaecati doloribus aliquid qui sint cum magni. Velit ea qui deleniti libero adipisci sunt. Nulla qui ut aut odit debitis. Quas libero dicta dignissimos dolore ducimus. Rerum aut perferendis iusto et rem officiis qui. A nam atque voluptates et et. Sit vitae nam consectetur libero. Corrupti possimus iusto non assumenda voluptas soluta recusandae rem.', 'camilan.jpg', 'Ds. Wora Wari No. 204, Binjai 13883, NTT', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(34, 'Piscok Lumer', 'Camilan', '10000', 'Deserunt quia qui sed nihil non debitis. Beatae sit quisquam nesciunt nesciunt sed iusto suscipit non. Fugiat et aut eius eum suscipit ea repellendus. Reprehenderit ut in odio autem sed aliquid rerum. Rem quia iusto perspiciatis ea dolorum. Officia sed quo voluptatem voluptatem. Libero minus quasi qui illum.', 'camilan.jpg', 'Gg. Bacang No. 227, Dumai 38826, Kalteng', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(35, 'Banana Crispy', 'Camilan', '10000', 'Et fugit perspiciatis sit veniam et provident quia. Ullam sit amet ad autem sit ducimus dolores. Voluptas odit est ut sit adipisci. Quidem sit laudantium maiores beatae est. Repellat dolorum accusamus ipsum doloremque corrupti ut. Quo consequatur et totam sit a illo aut. Pariatur nisi non dolorem nemo odio at id. Ea autem modi deleniti tempora et atque animi sequi. Qui expedita asperiores aut ut magnam.', 'camilan.jpg', 'Psr. Merdeka No. 55, Gunungsitoli 83368, Babel', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(36, 'Gorengan Mas Dian', 'Camilan', '8000', 'Ipsum aut ratione non ut impedit. Quis consequatur eligendi nisi tenetur dolorem ipsam. Voluptates magni magnam et quo earum ipsam quia. Dolores possimus ut ea voluptatem odio reprehenderit magnam officiis. Autem sed voluptatem animi. Aut natus et veritatis aut. Quia suscipit tempore sequi reprehenderit est est. Odit reprehenderit occaecati et quos reiciendis necessitatibus aut. Repudiandae enim nesciunt recusandae ut. Consectetur sunt cum ratione dolorem distinctio. Sed magnam qui rerum.', 'camilan.jpg', 'Jr. B.Agam Dlm No. 723, Batam 13391, Gorontalo', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(37, 'Crepes Putra', 'Camilan', '7000', 'Delectus at id vitae dolor debitis beatae. Voluptatem modi et necessitatibus ipsum. Doloremque ea assumenda perferendis asperiores qui. Explicabo ad maxime ratione aliquid numquam aut ut. Qui quis nobis delectus fugiat repellat quibusdam molestias. Voluptatem ut dicta minima deserunt. Ipsum omnis repudiandae facere commodi. Ea officiis culpa neque est aspernatur in sed. Molestiae eum ut nobis. Et debitis sunt deleniti et minima est. Temporibus id ut rerum dicta voluptas rem.', 'camilan.jpg', 'Jln. Mulyadi No. 554, Bukittinggi 77652, Sumut', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(38, 'Xi BoBa', 'Minuman', '5000', 'Illum ullam officia qui corrupti et perferendis. Hic aspernatur aut quia nihil vitae odio. Aut quod praesentium aut. Illo expedita cupiditate ea est neque quis. Amet optio quis veritatis sint rerum minus ipsam. Esse quod aut sapiente rerum. Qui qui qui eos et expedita. Dolor dolores velit non ad. Aliquam illum sint autem. Cum neque molestiae aliquam quam possimus corporis debitis. Hic necessitatibus deleniti dolores.', 'minuman.jpeg', 'Ki. Pelajar Pejuang 45 No. 425, Prabumulih 80534, Sulbar', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(39, 'Milkmax', 'Minuman', '5000', 'Nemo est quis sed aperiam. Sit neque ut qui voluptas voluptas. Dolor magni dolores vel dolorem ex quis magni. Rerum aut ea quo et. Quo qui vero sapiente laborum. Et accusamus perspiciatis eaque vel sint. Earum voluptas nihil aut qui sapiente. Placeat praesentium velit non qui in. Sint optio quidem dolorem eum natus hic. Doloribus sit consequatur eos magni quo ut.', 'minuman.jpeg', 'Dk. Monginsidi No. 751, Manado 93988, DIY', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(40, 'Es Teh Indonesia', 'Minuman', '10000', 'Velit odit nihil blanditiis officia veritatis corrupti corporis ut. Aut debitis consequatur omnis aut sit aut consequatur. Animi non accusantium velit nostrum expedita. Quia repellat eligendi omnis et consequuntur unde eius. Voluptatum repudiandae aliquid consequatur sed maiores et. Quis dolor modi dignissimos consequuntur cumque molestiae et ipsam. Totam sequi eos distinctio officiis qui labore.', 'minuman.jpeg', 'Dk. Kebonjati No. 941, Madiun 25577, NTT', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(41, 'Mixue', 'Minuman', '8000', 'Ut quas numquam nesciunt est error nulla aliquam. Ex sit nisi tenetur laudantium consequuntur consectetur. Nemo repellat eum impedit. Hic dolores odit ut unde. Illum unde laudantium non fugit. Ad vel laudantium unde. Ratione nihil repudiandae voluptate pariatur ea eaque impedit. Quae officiis ipsa tempore. Qui nobis nobis facere expedita rerum sint. Corrupti distinctio neque quia sint.', 'minuman.jpeg', 'Kpg. Abdullah No. 433, Palopo 29744, Aceh', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(43, 'Kopi Kenangan', 'Minuman', '5000', 'Quo cum dicta enim eos nam. Voluptatibus perferendis harum quo cupiditate sit. Beatae debitis repudiandae nulla et itaque sed. Eveniet est neque omnis nostrum iusto sunt aut accusamus. Facere voluptatem doloribus voluptatem facilis qui laboriosam iusto. In aperiam nobis explicabo vel rem dolorum eum. Voluptates sed aliquid natus. Quis qui maiores facilis et placeat sit.', 'minuman.jpeg', 'Ds. Monginsidi No. 874, Pariaman 22709, DKI', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(44, 'Menantea', 'Minuman', '5000', 'Illo est distinctio quis. Fugiat fuga voluptatem dolor eos dolorem laborum. Consectetur tempora et ratione mollitia. Tempora quia aut voluptatem iste et dolore. Porro dolorum occaecati consequatur ut sequi sed officia quibusdam. Est maxime velit itaque. Non commodi incidunt aperiam ullam occaecati nihil.', 'minuman.jpeg', 'Ds. Sutoyo No. 659, Tual 76866, Pabar', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(45, 'Kopi Janji Jiwa', 'Minuman', '7000', 'Sit occaecati totam ut omnis fugiat similique. Aperiam qui voluptatem voluptas beatae ad quo. Quia recusandae quod voluptates est. Et nulla cumque et atque cupiditate. Dolorem dolorem est autem sint iusto voluptatem. Officia enim et non nobis ab id. Molestiae et voluptatibus nihil. Cupiditate sed dolorem sunt reprehenderit non neque qui.', 'minuman.jpeg', 'Kpg. Tambak No. 936, Bekasi 72798, Lampung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(46, 'Teh Poci', 'Minuman', '10000', 'Odit a molestias fugiat doloremque. Recusandae placeat laboriosam doloribus deserunt consectetur. Sit ab consequatur consequatur quam tenetur. Est possimus quo quo voluptas explicabo eaque. Omnis et reiciendis impedit sapiente nisi libero sunt. Quam id hic totam labore. Eum iste aut modi qui. Sed et quaerat sint repellendus ut dicta quasi. Amet placeat ut et voluptatem qui quisquam atque voluptatem. Est officiis iste hic debitis.', 'minuman.jpeg', 'Ki. Baja Raya No. 171, Pangkal Pinang 20711, Banten', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(48, 'Milk Beng Beng', 'Minuman', '8000', 'Officiis nobis excepturi et libero minima sit perspiciatis. Quas et omnis est dolores. Iusto eos totam veritatis sint sed molestiae iure. Velit aut et perferendis earum cumque. Ab aut qui quia corrupti. Esse illo veritatis quaerat. Nostrum aut ea occaecati et quod. Molestiae incidunt est molestiae commodi possimus architecto quas consequuntur. Et eligendi dolor quo necessitatibus sit beatae. Quia odit molestiae qui consequatur tempora et. Veniam architecto culpa labore molestiae cupiditate.', 'minuman.jpeg', 'Kpg. Raden No. 697, Surabaya 35944, Sumsel', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0);

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
  `nama` varchar(30) NOT NULL,
  `jenis_penginapan` varchar(50) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `maps` text NOT NULL,
  `status` int(1) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`id`, `nama`, `jenis_penginapan`, `harga`, `deskripsi`, `gambar`, `alamat`, `maps`, `status`, `id_user`) VALUES
(1, 'Hotel Karlita', 'Hotel', '400000', 'Hotel Karlita Memiliki fasilitas terbaik seperti: AC, Restoran, Kolam Renang, Resepsionis 24 Jam, Parkir, Lift, WiFi.\r\n', 'karlita.jpg', 'Jl. Brigjen. Katamso No.31, Tegalsari, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52111.\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, 0),
(3, 'Alexander Hotel', 'Hotel', '320000', 'Alexander Hotel Tegal adalah hotel bintang 3 di kota Tegal, hotel ini memiliki lokasi strategis di pusat kota Tegal dan dekat pusat bisnis, pusat perbelanjaan dan stasiun kereta api. Alexander Hotel Tegal adalah pilihan yang fantastis untuk mendapatkan pengalaman yang tidak terlupakan. Nikmati layanan professional, penuh perhatian, ramah dan intim demi kenyamanan Anda selama menginap.', 'alexander.jpg', 'Jl. Jend. Sudirman No.30, Pekauman, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52131', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, 0),
(4, 'Grand Dian Hotel ', 'Hotel', '520000', 'Grand Dian Hotel Guci terletak di Tegal dan memiliki taman serta teras. Resor bintang 3 ini menawarkan Wi-Fi gratis, resepsionis 24 jam, dan layanan kamar. Resor ini memiliki kamar keluarga. ', 'grand-dian-hotel.jpg', 'Jl. Jenderal Ahmad Yani No.101, Langon, Tembok Luwung, Kec. Adiwerna, Kabupaten Tegal, Jawa ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, 0),
(5, 'Gren Hotel', 'Hotel', '280000', 'Gren Hotel Tegal terletak di Tegal, menawarkan bar, taman, dan teras. Fasilitas yang ditawarkan di akomodasi ini meliputi restoran, resepsionis 24 jam, layanan kamar, dan Wi-Fi gratis. Hotel ini memiliki kamar keluarga. Kamar-kamarnya memiliki kamar mandi pribadi, sementara kamar-kamar tertentu di hotel juga menawarkan balkon. Gren Hotel Tegal menawarkan sarapan Asia atau halal.', 'hotel-gren-tegal.jpg', 'Jl. Jend. Sudirman No.19, Randugunting, Kec. Tegal Sel., Kota Tegal, Jawa Tengah 52131', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, 0),
(6, 'KHAS Tegal Hotel', 'Hotel', '620000', 'Pesonna Hotel Tegal menawarkan layanan kamar. Sebagai tamu Pesonna Hotel Tegal, Anda dapat menikmati kolam renang dan sarapan yang tersedia di properti. Para tamu yang mengemudi memiliki akses ke tempat parkir gratis.', 'khasTegal.jpg', 'Jl. Gajah Mada No.5, Mintaragen, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52112', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, 0),
(7, 'Premiere Hotel', 'Hotel', '280000', 'Premiere Guest House adalah pilihan tepat untuk wisatawan yang mengunjungi Tegal, karena menawarkan suasana yang akan menyempurnakan masa menginap Anda.', 'premiere.jpg', 'Jl. Yos Sudarso No.10, Mintaragen, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52121', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, 0),
(9, 'Riez Place Hotel', 'Hotel', '470000', 'Anda akan menikmati kenyamanan kamar yang menawarkan minibar, penyejuk udara, dan meja, dan anda dapat tetap menggunakan internet pada saat menginap karena Riez Palace menawarkan wi-fi gratis.', 'Riez palace.jpg', 'Jl. Gajah Mada No.75, Mintaragen, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52125', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, 0),
(10, 'Plaza Hotel', 'Hotel', '450000', 'Horison Plaza Tegal memiliki fasilitas terbaik seperti: AC, Restoran, Resepsionis 24 Jam, Parkir, Lift, WiFi. (Beberapa fasilitas lain mungkin memerlukan biaya tambahan)', '1669179286_a0b0639db432b8c3ef57.jpg', 'Jl. Dr. Wahidin Sudirohusodo No.2, Pesurungan Kidul, Kec. Tegal Bar., Kota Tegal, Jawa Tenga', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid&quot; width=&quot;400&quot; height=&quot;300&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;&gt;&lt;/iframe&gt;', 1, 0),
(18, 'Robbin’s Villa', 'Villa', '2000000', 'Robins Villa adalah akomodasi dengan fasilitas baik dan kualitas pelayanan memuaskan menurut sebagian besar tamu. Robins Villa adalah pilihan tepat bagi Anda yang mengutamakan kenyamanan beristirahat tanpa menguras kantong.', '1669532166_e9abfc19807e2fcb124b.jpg', 'Jl. Objek Wisata Guci, Sawah,Ladang, Tuwel, Kec. Bojong, Kabupaten Tegal, Jawa Tengah 52465', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d506693.5442957332!2d109.15258700000001!3d-7.178668000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1763eab971acc3df!2sRobbin%E2%80%99s%20Villa!5e0!3m2!1sid!2sid!4v1671271162800!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, 0),
(19, 'Villa Boolang Guci', 'Villa', '3000000', 'Villa bolang guci luas 790m kamar 4 kamar mandi 4 ,kolam renang, parkir luas,taman,objek wisata. ', '1669532466_aa862904be1d607c5d60.jpg', 'Desa, Kalengan, Guci, Kecamatan Bumijawa, Kabupaten Tegal, Jawa Tengah 52466', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253346.77203648209!2d108.87243583281251!3d-7.178668199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f8d674f1f506f%3A0xa6722504c8f788!2sVilla%20Boolang%20Guci!5e0!3m2!1sid!2sid!4v1669532387643!5m2!1sid!2sid&quot; width=&quot;400&quot; height=&quot;300&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;&gt;&lt;/iframe&gt;', 1, 0),
(20, 'Villa Cempaka Indah Putra Guci', 'Villa', '5000000', 'VILLA CEMPAKA INDAH PUTRA GUCI memiliki bangunan 4 Rumah 15 Kamar dengan Fasilitas Kolam renang, Air Panas Alami, TV, DVD, Dapur.\r\nVILLA CEMPAKA INDAH PUTRA GUCI juga memiliki lahan Parkir yang Luas dan Aman, Mari berkunjung di VILLA CEMPAKA INDAH PUTRA GUCI.', '1669532797_8248aa18088b4cd42f24.webp', 'Jl. Objek Wisata Guci, Pekandangan, Rembul, Kec. Bojong, Kabupaten Tegal, Jawa Tengah 52465', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253346.77203648209!2d108.87243583281251!3d-7.178668199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f93f75febd5d3%3A0x3ceb7aaaa124ab9e!2sVilla%20Cempaka%20Indah%20Putra%20Guci!5e0!3m2!1sid!2sid!4v1669532547615!5m2!1sid!2sid&quot; width=&quot;400&quot; height=&quot;300&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;&gt;&lt;/iframe&gt;', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `no_pesanan` int(25) NOT NULL,
  `customer` varchar(128) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `tanggal_datang` date NOT NULL,
  `jumlah_tiket` int(5) NOT NULL,
  `jenis_pesan` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_payment` int(2) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga_total` varchar(20) NOT NULL,
  `status` int(1) NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`no_pesanan`, `customer`, `tanggal_pesan`, `tanggal_datang`, `jumlah_tiket`, `jenis_pesan`, `id_user`, `id_payment`, `id_produk`, `harga_total`, `status`, `bukti`) VALUES
(327826303, 'Anwar Family', '2022-11-20', '2022-11-22', 5, 'wisata', 15, 3, 1, '75000', 3, ''),
(504639569, 'istia', '2023-05-29', '2023-05-31', 5, 'wisata', 15, 3, 1, '125000', 0, ''),
(563260230, 'Family Adudu', '2022-12-04', '2022-12-15', 3, 'wisata', 15, 1, 6, '60000', 0, ''),
(649179524, 'Wimas Team', '2022-12-15', '2022-12-27', 4, 'wisata', 15, 3, 5, '30000', 3, ''),
(659341839, 'Team Hebat', '2022-12-04', '2022-12-27', 14, 'wisata', 15, 3, 6, '210000', 0, ''),
(747906993, 'Viyaa', '2023-05-31', '2023-06-19', 7, 'wisata', 15, 3, 6, '70000', 3, ''),
(1073398082, 'Mas Anwar', '2022-11-19', '2022-11-25', 90, 'wisata', 15, 2, 9, '1800000', 0, ''),
(1423215115, 'salsabilah', '2023-05-31', '2023-06-12', 4, 'wisata', 15, 2, 8, '100000', 0, ''),
(1423994470, 'Jonathan', '2022-12-09', '2022-12-09', 5, 'wisata', 15, 1, 7, '75000', 3, ''),
(1876593470, 'Istia Family', '2022-11-20', '2022-11-30', 3, 'wisata', 15, 4, 5, '30000', 0, ''),
(1960218888, 'Ningrum Family', '2022-12-03', '2022-12-14', 2, 'wisata', 15, 4, 8, '20000', 3, ''),
(2042282771, 'Big Family Anwar', '2022-12-04', '2022-12-11', 9, 'wisata', 15, 4, 2, '135000', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `rate` int(5) NOT NULL,
  `review` varchar(255) NOT NULL,
  `jenis_produk` int(1) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(14, 'Adduru Nafisah', 'adudu@gmail.com', '081187900098', 'Perempuan', 'Pasarbatang, Brebes', '$2y$10$nwtp6qxzU05Ns9n1D2ATt.J8QhRwPyf44aoFAVAHcRJimE/Refs7G', 'default.jpg', 1, 2),
(15, 'Nurul Rahmanda Afriannisa', 'nurul@gmail.com', '081257800047', 'Perempuan', 'Kaligangsa Wetan, Brebes', '$2y$10$cpNdOhSDdMJLGsUhcZoPPOouR33UaY.a.HLEyLxwvPmUeuVPPf1ki', '1685278813_3cf1b2f7997e33836825.jpg', 1, 2),
(16, 'Nihayatul Fathiyah', 'ayaa@gmail.com', '085870627026', 'Perempuan', 'Banjaratma, Brebes', '$2y$10$rq7jHuxN2Nsgy2tfegk7FOC1V1Zq0hn7zA3vQE1MSaqROvrELmGEy', 'default.jpg', 1, 2),
(17, 'Rahma Liza Arifiyah', 'liza@gmail.com', '083121242542', 'Perempuan', 'Pasarbatang, Brebes', '$2y$10$wPbfth0gnBGm15AmTmswb.OtuTpdENDT2On2LpigYjLl2XqcVormq', '1668611388_da32d42732f1a4413bc3.jpg', 1, 2),
(18, 'Istia Ningrum', 'istianingrum09@gmail.com', '083121242542', 'Perempuan', 'jl. Pemuda Sawojajar, Brebes', '$2y$10$lvEK0XuqnUfsvIfWeOgPZOnVokAIRoPQRbzt4bNco7QxiIHWLpjhW', 'default.jpg', 1, 2),
(19, 'Aliando Syarief', 'aliandogans@gmail.com', '087782824940', 'Laki-laki', 'Cikeusal Kidul, Ketanggungan, Brebes', '$2y$10$OGnib5v7Lk3EKZHTydGGD.Ww9fPxzmJKKy60g.tzrdDt11HvEkJfO', '1671085603_d1f047dc41eb7f0f9ed9.jpg', 1, 2),
(20, 'Adam Dzikri Ramadhan', 'adamdzikrri@gmail.com', '081298548647', 'Laki-laki', 'Kelurahan Pasarbatang, Brebes, Brebes', '$2y$10$KxRubJZ.QKRsO7noAi9Gpu58DbEtretZWRIjm3gAArdZfZ9TIgrS6', '1671085845_de808a97732712e716eb.jpg', 1, 2),
(21, 'Wimas Mutas Subkhan', 'wimasmutas@gmail.com', '089847492877', 'Laki-laki', 'Debong, Tegal Jawa Tengah', '$2y$10$diorKht.LtIX/4YAkWbTSeT4YpFaK4gvIc4Qr6CrDcn8Bdytgmy46', '1671086704_cd806e708e5e82c42c4e.jpg', 1, 2),
(22, 'Hilmi Zuhair', 'ijulhilmi@gmail.com', '089524974947', 'Laki-laki', 'Pasarbatang, Brebes, Brebes', '$2y$10$rffQf0c8uU/6teq1ndT5du1tfA/5aoifx7WnhDcO8VI.VhBJFmh3y', 'default.jpg', 1, 2),
(27, 'Khaeril Anwar', 'khaerilanwar0001@gmail.com', '087856906294', 'Perempuan', 'Brebes', '$2y$10$.eIyJYX3ppu1eMZ58FXiVOgdE2LT0iMuEty1tgoHz8C2b0sHDu.zq', 'default.jpg', 1, 2),
(28, 'Khaeril Anwar Istia', 'kabtegalubsi@gmail.com', '087856906294', 'Perempuan', 'Brebes', '$2y$10$hvypoVs45rDzQZ8/3fHqgeIDOfEY4dxkunlUR6mc01mY/5.gelzXW', 'default.jpg', 1, 2),
(29, 'Khaeril Anwar', 'rediofficial27@gmail.com', '087856906294', 'Laki-laki', 'Brebes', '$2y$10$JcDdhPYxzFFZ3NDTm8wtieakEqZ/m6xspx7.C9sZ26we.JdTNFvN6', 'default.jpg', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(7, 'rediofficial27@gmail.com', 'L6Eaj6kJoh6JLh9lKymG1DMeV/2B9MLUcwP/ZKV0XTE=', 1671588794);

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `maps` text DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `harga`, `lokasi`, `maps`, `alamat`, `deskripsi`, `gambar`) VALUES
(1, 'Curug Cantel', 15000, 'Bumijawa', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1979.0649435524103!2d109.12793780800123!3d-7.226022598695879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f8d5fc8b3eb23%3A0xb5edf92a14017919!2sWisata%20Alam%20Curug%20Cantel!5e0!3m2!1sid!2sid!4v1668094774039!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Ladang,Hutan, Sigedong, Kecamatan Bumijawa, Kabupaten Tegal, Jawa Tengah 52466', 'Air terjun tertinggi yang ada di daerah Bumijawa Kabupaten Tegal', 'cantel.jpg'),
(2, 'Curug Bengkawah', 10000, 'Belik', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.0742446484996!2d109.32346852171912!3d-7.117394878421004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6feed852d9ada3%3A0xd5a6ff89b1ca15e1!2sCurug%20Bengkawah!5e0!3m2!1sid!2sid!4v1668095147378!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Jl. Sikasur - Simpur, Karangmulyo, Sikasur, Kec. Belik, Kabupaten Pemalang, Jawa Tengah 52356', 'Curug Bengkawah berada di Kabupaten Pemalang Jawa Tengah', 'bengkawah.jpg'),
(5, 'Clirit View', 20000, 'Balapulang', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.1264745737685!2d109.13113341456014!3d-7.1113387948646345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f9537bdc9d653%3A0xd1c0d91dd59c6393!2sWana%20Wisata%20Clirit%20View!5e0!3m2!1sid!2sid!4v1668095248568!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Jl. Raya Slawi Jl. Bojong, Sawah,Ladang, Kalibakung, Kec. Balapulang, Kabupaten Tegal, Jawa Tengah 52464', 'Clirit View termasuk objek wisata yang berada di Jawa Tengah tepatnya di kecamatan Balapulang Kabupaten Tegal, yang menyajikan banyak spot foto yang bagus', 'clirit.jpg'),
(6, 'Curug Putri', 10000, 'Sirampog', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.333957461272!2d109.0906171142893!3d-7.20268679480002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f8e00ad0924a1%3A0x38871972ca0035d9!2sCurug%20Putri!5e0!3m2!1sid!2sid!4v1670137668102!5m2!1sid!2sid&quot; width=&quot;400&quot; height=&quot;300&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;&gt;&lt;/iframe&gt;', 'Q3WV+W4F, Padanama, Mendala, Kec. Sirampog, Kabupaten Brebes, Jawa Tengah 52466', 'Curug Putri berada di Kabupaten Brebes yaitu Kecamatan Sirampog. Dengan harga tiket masuk curug ini sebesar woyyyy', '1670137680_44c43a0f9fc2d04b4094.jpg'),
(7, 'Waduk Malahayu', 7500, 'Banjarharjo', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15839.076844522215!2d108.79902302360355!3d-7.036388668681522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fa0078a2e1c0f%3A0xf01bbc7c1087928e!2sWaduk%20Malahayu!5e0!3m2!1sid!2sid!4v1670809244924!5m2!1sid!2sid&quot; width=&quot;400&quot; height=&quot;300&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;&gt;&lt;/iframe&gt;', 'Area Sawah Dan Kebun, Malahayu, Kec. Banjarharjo, Kabupaten Brebes, Jawa Tengah', 'Waduk Malahayu adalah sebuah waduk yang terletak di dekat perbatasan Jawa Tengah-Jawa Barat tepatnya di Kecamatan Kecamatan Banjarharjo, Kabupaten Brebes, Provinsi Jawa Tengah, Indonesia. Awalnya waduk ini menggenang di perbatasan Desa Malahayu dengan Desa Cipajang dan Desa Penanggapan, tetapi akibat mendangkalan kini secara umum hanya menggenangi wilayah Desa Malahayu sekaligus lokasi bendungan utamanya. Waduk Malahayu berjarak ± 6 km dari pusat Kecamatan Kecamatan Banjarharjo atau 17 km dari Kecamatan Kecamatan Tanjung', '1670809259_9bc0d980b87a52582541.jpg'),
(8, 'Ranto Canyon', 25000, 'Salem', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.8565782135784!2d108.73231381428884!3d-7.142578394842492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f763fffffffff%3A0xc2f1a74bbaa81c4c!2sRanto%20Canyon!5e0!3m2!1sid!2sid!4v1670809529549!5m2!1sid!2sid&quot; width=&quot;400&quot; height=&quot;300&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;&gt;&lt;/iframe&gt;', 'Gunungtajem, Winduasri, Kec. Salem, Kabupaten Brebes, Jawa Tengah 52275', 'Ranto Canyon memiliki jalur tak lebih dari satu kilometer, namun sensasi yang ditawarkan sangat menantang. Di tengah trek, Anda akan mendapati air terjun yang deras dan menakjubkan. Bentang alam ini, yang memiliki nama lokal Leuwih Ranto, merupakan sungai yang diapit oleh dinding tebing setinggi belasan meter. Di sini Anda bisa menikmati suasana sungai, berenang, bahkan cliff diving dan body rafting.', '1670809543_babb53452c5cffc08df8.jpg'),
(9, 'Jembatan Gantung', 5000, 'Danawarih', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.4039009833627!2d109.1289182193815!3d-7.079084678534723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f9450e7b8fed9%3A0x4446c263c899daad!2sJembatan%20Gantung%20Danawarih%20(Balapualng)!5e0!3m2!1sid!2sid!4v1670811467013!5m2!1sid!2sid&quot; width=&quot;400&quot; height=&quot;300&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;&gt;&lt;/iframe&gt;', 'Sawah,Ladang, Danawarih, Kec. Balapulang, Kabupaten Tegal, Jawa Tengah 52464', 'Jembatan Gantung Danawarih terpasang di atas bendungan Kali Gung yang berfungsi sebagai sarana irigasi. Jembatan ini merupakan jalan penghubung antara desa Danawarih dengan desa Sangkanjaya Kecamatan Balapulang.', '1670811482_a2a2b1bad7b7cf0c3e31.jpg');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
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
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
