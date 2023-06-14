-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 04:55 AM
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
-- Table structure for table `bukti_bayar`
--

CREATE TABLE `bukti_bayar` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `jenis_bayar` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_pesan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bukti_bayar`
--

INSERT INTO `bukti_bayar` (`id`, `gambar`, `jenis_bayar`, `id_user`, `no_pesan`) VALUES
(1, '1686495407_5e2da7fdf2e4a6848263.jpg', 'wisata', 16, 972001428);

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jenis_kuliner` varchar(128) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `terjual` int(11) NOT NULL,
  `pendapatan` int(11) NOT NULL,
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

INSERT INTO `kuliner` (`id`, `nama`, `jenis_kuliner`, `harga`, `terjual`, `pendapatan`, `deskripsi`, `gambar`, `alamat`, `maps`, `id_user`, `status`) VALUES
(1, 'Sate Kambing Batibul', 'Makanan', '320000', 2, 640000, 'Sate kambing batibul adalah Sate yang menjadi ciri khas Kota Tegal. Dinamakan batibul karena dibuat dari daging kambing atau domba muda dibawah tiga bulan, yang dipotong dadu, disusun pada tusuk sate dari bambu, dan dikombinasikan dengan lemak, hati atau ginjal.  Tekstur dagingnya empuk, tidak alot, dan jauh dari bau prengus. Sate Batibul disajikan dengan bawang merah, kecap, dan sambal. Sambal kecap tidak dicampur dengan sate melainkan terpisah dengan tambahan sambal terasi. \r\n\r\n- Makan Ditempat\r\n- Bawa Pulang\r\n- Pesan Antar\r\n- Buka Senin-Minggu 09.00-22.00 WIB', '1668577398_58cbaa67419bb8854217.jpg', 'Jl. Gajah Mada No.14 Mintaragen Kec.Tegal Timur Kota Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.938710436192!2d109.1194778395508!3d-6.862454499999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb7ae56bea4f5%3A0xb6043cd0e87b463e!2sSate%20Kambing%20Muda%20CEMPE%20LEMU%20Jl.%20Ahmad%20Yani!5e0!3m2!1sid!2sid!4v1668577309353!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 15, 1),
(3, 'Hot Seblak Jeletot !', 'Makanan', '10000', 11, 110000, 'Seblak jeletot di Kota Tegal memiliki ciri khas tersendiri, di antaranya dari segi rasanya yang pedas manis.Kemudian, seblak jeletot yang disajikan tidak berkuah juga tidak kering alias nyemek. Dalam satu porsi Hot Seblak Jeletot terdapat isian telor, sawi, kerupuk dan makaroni. Hot Seblak Jeletot mempunyai 2 cabang lain, yakni di Jalan Werkudoro Kota Tegal dan Jalan KH Wahid Hasyim, Slawi.\r\n\r\n- Makan Ditempat\r\n- Bawa Pulang\r\n- Pesan Antar\r\n- Buka Senin-Minggu 10.00-21.30 WIB', 'seblak.jpg', 'Jl. Kartini No.77 Slerok Kec. Tegal Timur Kota Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.003285143813!2d110.44657131428798!3d-7.008894994937086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8cbc4c04d1%3A0x30d4206f66ea3213!2sMie%20Ayam%20Bakso%20Moroseneng%20Mas%20Ade!5e0!3m2!1sid!2sid!4v1668345940910!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 15, 1),
(4, 'Es Lontrong Brebes', 'Minuman', '6000', 18, 108000, 'Es Lontrong tidak bisa dijumpai di daerah manapun kecuali di Slawi. Dinamakan es Lontrong karena lokasi jualnya yang didalam gang/lontrong. Dalam penyajian, minuman legendaris asli slawi ini berisi es serut yang diberi isian kacang hijau, cincau, sirup merah, dan kuah santan. Untuk tambahannya bisa dengan kolang-kaling ataupun potongan roti tawar.\r\n\r\n- Makan Ditempat\r\n- Bawa Pulang\r\n- Pesan Anta\r\n- Buka Senin-Minggu 08.00-16.00 WIB', 'eslontrong.jpg', 'Jl. Letjen Suprapto No.26 Slawi Wetan Kec. Slawi Kab. Tegal', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.003285143813!2d110.44657131428798!3d-7.008894994937086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8cbc4c04d1%3A0x30d4206f66ea3213!2sMie%20Ayam%20Bakso%20Moroseneng%20Mas%20Ade!5e0!3m2!1sid!2sid!4v1668345940910!5m2!1sid!2sid&quot; width=&quot;400&quot; height=&quot;300&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;&gt;&lt;/iframe&gt;', 15, 1),
(5, 'Gomu Boba & Cheese Tea ', 'Minuman', '12000', 12, 144000, 'Gomu Boba & Cheese Tea, Werkudoro Tegal merupakan sebuah tempat makan yang berada di Tegal. Rumah makan ini menyajikan berbagai menu cepat saji, jajanan & minuman yang dibanderol dengan harga yang murah dan bersahabat dengan kantong. Harga  untuk menikmati menu Rekomendasi yang disajikan Gomu Boba And Cheese Tea, Werkudoro Tegal berkisar antara Rp 9.000 - Rp 15.000.\r\n\r\n- Makan Ditempat\r\n- Bawa Pulang\r\n- Pesan Antar\r\n- Buka Senin-Minggu 09.00-21.00 WIB', 'boba.jpg', 'Jl. Werkudoro No.87 Pengabean Slerok Kec.Tegal Timur Kab. Tegal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.003285143813!2d110.44657131428798!3d-7.008894994937086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8cbc4c04d1%3A0x30d4206f66ea3213!2sMie%20Ayam%20Bakso%20Moroseneng%20Mas%20Ade!5e0!3m2!1sid!2sid!4v1668345940910!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 15, 1),
(6, 'Minuman Tradisional', 'Minuman', '8000', 8, 64000, 'Menyediakan berbagai macam jamu tradisional dengan harga yang paling terjangkau tanpa menghilangkan khasiat dari penggunaannya. Dibuat dari bahan-bahan  alami yang berkualitas, berkhasiat untuk kesehatan dan kehangatan tubuh.\r\n\r\n- Bawa Pulang\r\n- Pesan Antar\r\n- Buka Senin - Minggu 07.00-21.00 WIB', '1685892549_8738080d8b5bacc0e978.jpg', 'Gg. 6  RT.03 RW.09 Panggung Kec. Tegal Timur Kota Tegal', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.003285143813!2d110.44657131428798!3d-7.008894994937086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8cbc4c04d1%3A0x30d4206f66ea3213!2sMie%20Ayam%20Bakso%20Moroseneng%20Mas%20Ade!5e0!3m2!1sid!2sid!4v1668345940910!5m2!1sid!2sid&quot; width=&quot;400&quot; height=&quot;300&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;&gt;&lt;/iframe&gt;', 15, 1),
(17, 'Mie Goreng Bang Anwar', 'Makanan', '10000', 0, 0, 'Quia eaque voluptas officiis eveniet inventore ipsum laboriosam. Quae in id rerum. Sit ipsum ipsa et quisquam. Nemo numquam unde dignissimos voluptas eum eligendi maiores. Voluptatem quaerat explicabo soluta est in possimus. Suscipit aut velit eum. Quo nesciunt quis aut est et ab ut. Quos veniam dolorum sunt eos voluptatem quis. Laboriosam similique ut explicabo voluptas. Est eum deserunt et totam ullam aut eum blanditiis. Quo veritatis in similique magni eius eius.', 'makanan.jpg', 'Dk. Bakit  No. 975, Tarakan 85800, Kaltim', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(18, 'Nasi Goreng Mba Istia', 'Makanan', '13000', 0, 0, 'Fugit ipsa quibusdam et. Ea perferendis assumenda omnis ut blanditiis numquam. Sapiente deleniti excepturi quo dignissimos. Dolores ducimus eum reiciendis sit ullam. Ut facilis nihil voluptatum excepturi tenetur. Est atque non et dolore. Fugiat accusantium odit et exercitationem deserunt placeat veniam. Et autem voluptas qui voluptatibus dolore. Nulla dolores sunt quo laborum quia. Cupiditate ut enim voluptatem ipsa. Odit ut ab cumque dolores.', 'makanan.jpg', 'Ds. Bagas Pati No. 665, Malang 62074, Sulut', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(20, 'Nasi Goreng Brebes', 'Makanan', '16000', 0, 0, 'Consequatur vel autem qui laboriosam. Ut culpa omnis et eaque laborum distinctio. Quaerat ut omnis accusamus recusandae dolorum placeat quis. Ut nulla magni sed alias. Sit qui reprehenderit quia. Officia aut ab qui voluptatem. Vero maiores sed voluptatem cumque magnam. Aperiam et quas quis adipisci. Enim vel omnis odit deleniti et provident.', 'makanan.jpg', 'Dk. Adisumarmo No. 830, Jambi 25463, Kaltara', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(21, 'Bakso Upin Ipin', 'Makanan', '8000', 0, 0, 'Ad minima nam fuga corporis distinctio quo laborum. Rerum ducimus pariatur voluptates molestias nulla voluptate nulla. Quam suscipit nobis voluptatem quisquam. Pariatur eum est doloremque ut vel. Dolor rerum autem est id. Harum doloribus ab non dignissimos doloribus delectus est perspiciatis. Provident officiis odio et iste commodi ut. Quaerat nulla blanditiis repellat eaque. Quo reprehenderit omnis qui non consequatur et. Fugiat sint fuga assumenda suscipit qui.', 'makanan.jpg', 'Jr. Yos Sudarso No. 362, Samarinda 21478, Sulsel', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(22, 'Nasi Lengko Bu Wasri', 'Makanan', '7000', 0, 0, 'At occaecati animi aperiam voluptatem. Officia placeat id dolor praesentium a dolor. Facere et reprehenderit et est. Deserunt quas voluptatem architecto hic quisquam sed repellat. Possimus officiis iure eos qui saepe quidem quas. Totam dolores maiores sint. Minus illo quam sapiente ut. Beatae dignissimos labore assumenda voluptatem autem rerum. Sequi soluta nostrum rerum corporis. Est iure dolor ut corrupti adipisci voluptatum ratione quaerat. Aut provident et pariatur enim neque mollitia.', 'makanan.jpg', 'Psr. Baabur Royan No. 530, Cimahi 48364, NTB', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(23, 'Ikan Bakar Lautan', 'Makanan', '20000', 0, 0, 'Velit magni eum inventore exercitationem id. Doloremque omnis possimus molestias aliquam. Dolor qui voluptate illo qui rerum. Nobis qui officiis ab repellat. Inventore corporis adipisci sint. Consequuntur quae inventore velit sunt. Asperiores et quia aliquid qui dolores cum. Velit molestias illum ducimus quia quia laboriosam eveniet veniam. Quasi unde ut et beatae ut temporibus et. Optio quis eum laudantium aperiam cum asperiores.', 'makanan.jpg', 'Dk. Abdul Muis No. 473, Makassar 49193, Sulut', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(24, 'Nasi Bakar Sultan', 'Makanan', '21000', 0, 0, 'Eos aut accusantium vel fugiat dolores qui. Laborum voluptatem ipsum est aut illo consequatur. Dolor voluptatem sunt fugit. Qui autem sapiente ducimus id quos excepturi voluptatem. Fuga voluptate qui possimus provident animi qui. Veniam consequatur aperiam ducimus voluptas voluptatem. Ut non repellat magnam voluptas. Molestiae perferendis ut quisquam odit quae rerum dolor natus.', 'makanan.jpg', 'Jln. Pasteur No. 643, Cimahi 82819, Malut', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(25, 'Mie Rebus Bareng', 'Makanan', '10000', 0, 0, 'Consequuntur ducimus sed assumenda velit corporis dolor a qui. Et eos et itaque recusandae. Esse nobis sint ut enim dolores. Nemo culpa perferendis dolor. Aspernatur temporibus vitae quibusdam aut. Vel sequi sed molestiae voluptates vel non eius. Expedita nisi repellendus voluptatibus ut sapiente rerum ipsa esse. Qui consequatur earum qui. Suscipit excepturi quia laborum laborum sed sequi natus. Accusantium omnis recusandae enim molestiae voluptas eligendi.', 'makanan.jpg', 'Gg. Raya Ujungberung No. 412, Pangkal Pinang 44021, Jambi', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(26, 'Basreng Enak', 'Camilan', '5000', 0, 0, 'Distinctio quo quis eius ipsam aut iusto. Inventore numquam quam sint delectus id voluptates. Voluptas quae tenetur quae omnis fuga id sequi at. Ratione maxime quia magni quo et neque error. Voluptate quos a est veritatis laborum. Nesciunt minima laborum ut fuga temporibus modi. Dolor quas quibusdam eos iste quos voluptas ex. Placeat eum labore consectetur.', 'camilan.jpg', 'Psr. Raya Setiabudhi No. 49, Makassar 53011, Lampung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(28, 'Pempek Palembang', 'Camilan', '10000', 0, 0, 'Culpa voluptate sint neque. Praesentium sapiente non eligendi. Soluta et voluptatem aut voluptas et repudiandae velit. Rerum quo quia cupiditate voluptatem porro quod. Commodi perspiciatis in eligendi quasi possimus. Omnis quisquam dolor alias nobis architecto qui. Et possimus iusto nemo ut fuga ullam commodi. Aut quis voluptate illo non doloribus. Sed et facilis provident possimus sed non.', 'camilan.jpg', 'Gg. Thamrin No. 211, Sorong 80719, Pabar', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(29, 'Pempek Pekalongan', 'Camilan', '8000', 0, 0, 'Numquam explicabo voluptatem excepturi accusantium sit non id. Possimus voluptatem quos asperiores est dolor laborum. Adipisci ea qui sed officia. Dolorem praesentium qui molestiae ipsum quaerat accusamus molestiae. Nihil est delectus fugiat deleniti quasi architecto quo. Enim rerum repellat aut modi expedita molestiae aut sapiente. Occaecati dolorem vitae vel nostrum quam ratione optio. Consequatur ipsa non nihil dolore ipsam accusantium illum. Enim consectetur consectetur harum quibusdam.', 'camilan.jpg', 'Dk. Sutoyo No. 40, Cimahi 27272, Maluku', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(30, 'Cilok Kami', 'Camilan', '5000', 0, 0, 'Eum commodi aspernatur voluptatem. Voluptatem incidunt sint quia ut quidem beatae ut. Quis molestiae molestias dolorum facilis sed. Esse ut accusantium facilis veritatis nulla consequatur molestiae laborum. Est dolorem pariatur rem ea ad quasi. Et aut nam consequuntur excepturi similique et totam. Eaque distinctio blanditiis laborum. Aspernatur voluptate qui id aut qui tempore. Cumque est quas eveniet consequatur error.', 'camilan.jpg', 'Gg. Industri No. 111, Medan 17139, Jatim', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(31, 'Cilor Enak', 'Camilan', '5000', 0, 0, 'Eos fugiat architecto sit impedit officiis. Error delectus enim odio tempora accusantium et corporis. Qui eos delectus ea. Harum inventore unde harum non ut. Architecto qui optio debitis laboriosam. Illo et eum vel. Ut delectus laborum illum dolore est in. Vitae aut qui dolores eveniet sed atque. Doloribus itaque eligendi dolorem nihil. Unde quia qui perspiciatis dolorum qui illo. Nihil sit animi et voluptatem sit sint id. Laboriosam cumque provident voluptatem.', 'camilan.jpg', 'Jr. Salam No. 395, Tual 24184, Banten', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(33, 'Mie Lidi Istia', 'Camilan', '7000', 0, 0, 'Id occaecati doloribus aliquid qui sint cum magni. Velit ea qui deleniti libero adipisci sunt. Nulla qui ut aut odit debitis. Quas libero dicta dignissimos dolore ducimus. Rerum aut perferendis iusto et rem officiis qui. A nam atque voluptates et et. Sit vitae nam consectetur libero. Corrupti possimus iusto non assumenda voluptas soluta recusandae rem.', 'camilan.jpg', 'Ds. Wora Wari No. 204, Binjai 13883, NTT', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(34, 'Piscok Lumer', 'Camilan', '10000', 0, 0, 'Deserunt quia qui sed nihil non debitis. Beatae sit quisquam nesciunt nesciunt sed iusto suscipit non. Fugiat et aut eius eum suscipit ea repellendus. Reprehenderit ut in odio autem sed aliquid rerum. Rem quia iusto perspiciatis ea dolorum. Officia sed quo voluptatem voluptatem. Libero minus quasi qui illum.', 'camilan.jpg', 'Gg. Bacang No. 227, Dumai 38826, Kalteng', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(36, 'Gorengan Mas Dian', 'Camilan', '8000', 0, 0, 'Ipsum aut ratione non ut impedit. Quis consequatur eligendi nisi tenetur dolorem ipsam. Voluptates magni magnam et quo earum ipsam quia. Dolores possimus ut ea voluptatem odio reprehenderit magnam officiis. Autem sed voluptatem animi. Aut natus et veritatis aut. Quia suscipit tempore sequi reprehenderit est est. Odit reprehenderit occaecati et quos reiciendis necessitatibus aut. Repudiandae enim nesciunt recusandae ut. Consectetur sunt cum ratione dolorem distinctio. Sed magnam qui rerum.', 'camilan.jpg', 'Jr. B.Agam Dlm No. 723, Batam 13391, Gorontalo', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(37, 'Crepes Putra', 'Camilan', '7000', 0, 0, 'Delectus at id vitae dolor debitis beatae. Voluptatem modi et necessitatibus ipsum. Doloremque ea assumenda perferendis asperiores qui. Explicabo ad maxime ratione aliquid numquam aut ut. Qui quis nobis delectus fugiat repellat quibusdam molestias. Voluptatem ut dicta minima deserunt. Ipsum omnis repudiandae facere commodi. Ea officiis culpa neque est aspernatur in sed. Molestiae eum ut nobis. Et debitis sunt deleniti et minima est. Temporibus id ut rerum dicta voluptas rem.', 'camilan.jpg', 'Jln. Mulyadi No. 554, Bukittinggi 77652, Sumut', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(39, 'Milkmax', 'Minuman', '5000', 0, 0, 'Nemo est quis sed aperiam. Sit neque ut qui voluptas voluptas. Dolor magni dolores vel dolorem ex quis magni. Rerum aut ea quo et. Quo qui vero sapiente laborum. Et accusamus perspiciatis eaque vel sint. Earum voluptas nihil aut qui sapiente. Placeat praesentium velit non qui in. Sint optio quidem dolorem eum natus hic. Doloribus sit consequatur eos magni quo ut.', 'minuman.jpeg', 'Dk. Monginsidi No. 751, Manado 93988, DIY', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(40, 'Es Teh Indonesia', 'Minuman', '10000', 0, 0, 'Velit odit nihil blanditiis officia veritatis corrupti corporis ut. Aut debitis consequatur omnis aut sit aut consequatur. Animi non accusantium velit nostrum expedita. Quia repellat eligendi omnis et consequuntur unde eius. Voluptatum repudiandae aliquid consequatur sed maiores et. Quis dolor modi dignissimos consequuntur cumque molestiae et ipsam. Totam sequi eos distinctio officiis qui labore.', 'minuman.jpeg', 'Dk. Kebonjati No. 941, Madiun 25577, NTT', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(41, 'Mixue', 'Minuman', '8000', 0, 0, 'Ut quas numquam nesciunt est error nulla aliquam. Ex sit nisi tenetur laudantium consequuntur consectetur. Nemo repellat eum impedit. Hic dolores odit ut unde. Illum unde laudantium non fugit. Ad vel laudantium unde. Ratione nihil repudiandae voluptate pariatur ea eaque impedit. Quae officiis ipsa tempore. Qui nobis nobis facere expedita rerum sint. Corrupti distinctio neque quia sint.', 'minuman.jpeg', 'Kpg. Abdullah No. 433, Palopo 29744, Aceh', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(43, 'Kopi Kenangan', 'Minuman', '5000', 0, 0, 'Quo cum dicta enim eos nam. Voluptatibus perferendis harum quo cupiditate sit. Beatae debitis repudiandae nulla et itaque sed. Eveniet est neque omnis nostrum iusto sunt aut accusamus. Facere voluptatem doloribus voluptatem facilis qui laboriosam iusto. In aperiam nobis explicabo vel rem dolorum eum. Voluptates sed aliquid natus. Quis qui maiores facilis et placeat sit.', 'minuman.jpeg', 'Ds. Monginsidi No. 874, Pariaman 22709, DKI', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(44, 'Menantea', 'Minuman', '5000', 0, 0, 'Illo est distinctio quis. Fugiat fuga voluptatem dolor eos dolorem laborum. Consectetur tempora et ratione mollitia. Tempora quia aut voluptatem iste et dolore. Porro dolorum occaecati consequatur ut sequi sed officia quibusdam. Est maxime velit itaque. Non commodi incidunt aperiam ullam occaecati nihil.', 'minuman.jpeg', 'Ds. Sutoyo No. 659, Tual 76866, Pabar', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(45, 'Kopi Janji Jiwa', 'Minuman', '7000', 0, 0, 'Sit occaecati totam ut omnis fugiat similique. Aperiam qui voluptatem voluptas beatae ad quo. Quia recusandae quod voluptates est. Et nulla cumque et atque cupiditate. Dolorem dolorem est autem sint iusto voluptatem. Officia enim et non nobis ab id. Molestiae et voluptatibus nihil. Cupiditate sed dolorem sunt reprehenderit non neque qui.', 'minuman.jpeg', 'Kpg. Tambak No. 936, Bekasi 72798, Lampung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0),
(48, 'Milk Beng Beng', 'Minuman', '8000', 0, 0, 'Officiis nobis excepturi et libero minima sit perspiciatis. Quas et omnis est dolores. Iusto eos totam veritatis sint sed molestiae iure. Velit aut et perferendis earum cumque. Ab aut qui quia corrupti. Esse illo veritatis quaerat. Nostrum aut ea occaecati et quod. Molestiae incidunt est molestiae commodi possimus architecto quas consequuntur. Et eligendi dolor quo necessitatibus sit beatae. Quia odit molestiae qui consequatur tempora et. Veniam architecto culpa labore molestiae cupiditate.', 'minuman.jpeg', 'Kpg. Raden No. 697, Surabaya 35944, Sumsel', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 0);

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
  `terbooking` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `maps` text NOT NULL,
  `status` int(1) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`id`, `nama`, `jenis_penginapan`, `harga`, `deskripsi`, `terbooking`, `gambar`, `alamat`, `maps`, `status`, `id_user`) VALUES
(1, 'Hotel Karlita', 'Hotel', '400000', 'Hotel Karlita Memiliki fasilitas terbaik seperti: AC, Restoran, Kolam Renang, Resepsionis 24 Jam, Parkir, Lift, WiFi.\r\n', 0, 'karlita.jpg', 'Jl. Brigjen. Katamso No.31, Tegalsari, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52111.\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, 15),
(3, 'Alexander Hotel', 'Hotel', '320000', 'Alexander Hotel Tegal adalah hotel bintang 3 di kota Tegal, hotel ini memiliki lokasi strategis di pusat kota Tegal dan dekat pusat bisnis, pusat perbelanjaan dan stasiun kereta api. Alexander Hotel Tegal adalah pilihan yang fantastis untuk mendapatkan pengalaman yang tidak terlupakan. Nikmati layanan professional, penuh perhatian, ramah dan intim demi kenyamanan Anda selama menginap.', 0, 'alexander.jpg', 'Jl. Jend. Sudirman No.30, Pekauman, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52131', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, 15),
(4, 'Grand Dian Hotel ', 'Hotel', '520000', 'Grand Dian Hotel Guci terletak di Tegal dan memiliki taman serta teras. Resor bintang 3 ini menawarkan Wi-Fi gratis, resepsionis 24 jam, dan layanan kamar. Resor ini memiliki kamar keluarga. ', 0, 'grand-dian-hotel.jpg', 'Jl. Jenderal Ahmad Yani No.101, Langon, Tembok Luwung, Kec. Adiwerna, Kabupaten Tegal, Jawa ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, 15),
(5, 'Gren Hotel', 'Hotel', '280000', 'Gren Hotel Tegal terletak di Tegal, menawarkan bar, taman, dan teras. Fasilitas yang ditawarkan di akomodasi ini meliputi restoran, resepsionis 24 jam, layanan kamar, dan Wi-Fi gratis. Hotel ini memiliki kamar keluarga. Kamar-kamarnya memiliki kamar mandi pribadi, sementara kamar-kamar tertentu di hotel juga menawarkan balkon. Gren Hotel Tegal menawarkan sarapan Asia atau halal.', 0, 'hotel-gren-tegal.jpg', 'Jl. Jend. Sudirman No.19, Randugunting, Kec. Tegal Sel., Kota Tegal, Jawa Tengah 52131', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, 15),
(6, 'KHAS Tegal Hotel', 'Hotel', '620000', 'Pesonna Hotel Tegal menawarkan layanan kamar. Sebagai tamu Pesonna Hotel Tegal, Anda dapat menikmati kolam renang dan sarapan yang tersedia di properti. Para tamu yang mengemudi memiliki akses ke tempat parkir gratis.', 0, 'khasTegal.jpg', 'Jl. Gajah Mada No.5, Mintaragen, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52112', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, 15),
(7, 'Premiere Hotel', 'Hotel', '280000', 'Premiere Guest House adalah pilihan tepat untuk wisatawan yang mengunjungi Tegal, karena menawarkan suasana yang akan menyempurnakan masa menginap Anda.', 0, 'premiere.jpg', 'Jl. Yos Sudarso No.10, Mintaragen, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52121', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, 15),
(9, 'Riez Place Hotel', 'Hotel', '470000', 'Anda akan menikmati kenyamanan kamar yang menawarkan minibar, penyejuk udara, dan meja, dan anda dapat tetap menggunakan internet pada saat menginap karena Riez Palace menawarkan wi-fi gratis.', 0, 'Riez palace.jpg', 'Jl. Gajah Mada No.75, Mintaragen, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52125', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, 15),
(10, 'Plaza Hotel', 'Hotel', '450000', 'Horison Plaza Tegal memiliki fasilitas terbaik seperti: AC, Restoran, Resepsionis 24 Jam, Parkir, Lift, WiFi. (Beberapa fasilitas lain mungkin memerlukan biaya tambahan)', 0, '1669179286_a0b0639db432b8c3ef57.jpg', 'Jl. Dr. Wahidin Sudirohusodo No.2, Pesurungan Kidul, Kec. Tegal Bar., Kota Tegal, Jawa Tenga', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68983.55160250362!2d109.00716701257322!3d-6.861771751184636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb07be9c62883%3A0xa94f89dc4722ca4f!2sCENDOL%20SUPER%20(Cendol%20Susu%20Paling%20Endess%20Rasanya)!5e0!3m2!1sid!2sid!4v1668602510530!5m2!1sid!2sid&quot; width=&quot;400&quot; height=&quot;300&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;&gt;&lt;/iframe&gt;', 1, 15),
(18, 'Robbin’s Villa', 'Villa', '2000000', 'Robins Villa adalah akomodasi dengan fasilitas baik dan kualitas pelayanan memuaskan menurut sebagian besar tamu. Robins Villa adalah pilihan tepat bagi Anda yang mengutamakan kenyamanan beristirahat tanpa menguras kantong.', 0, '1669532166_e9abfc19807e2fcb124b.jpg', 'Jl. Objek Wisata Guci, Sawah,Ladang, Tuwel, Kec. Bojong, Kabupaten Tegal, Jawa Tengah 52465', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d506693.5442957332!2d109.15258700000001!3d-7.178668000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1763eab971acc3df!2sRobbin%E2%80%99s%20Villa!5e0!3m2!1sid!2sid!4v1671271162800!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, 15),
(19, 'Villa Boolang Guci', 'Villa', '3000000', 'Villa bolang guci luas 790m kamar 4 kamar mandi 4 ,kolam renang, parkir luas,taman,objek wisata. ', 0, '1669532466_aa862904be1d607c5d60.jpg', 'Desa, Kalengan, Guci, Kecamatan Bumijawa, Kabupaten Tegal, Jawa Tengah 52466', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253346.77203648209!2d108.87243583281251!3d-7.178668199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f8d674f1f506f%3A0xa6722504c8f788!2sVilla%20Boolang%20Guci!5e0!3m2!1sid!2sid!4v1669532387643!5m2!1sid!2sid&quot; width=&quot;400&quot; height=&quot;300&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;&gt;&lt;/iframe&gt;', 1, 15),
(30, 'dasdsad', 'Hotel', '200000', 'dsadsa', 0, '1685981334_bc5e6900e2b76acde039.jpg', 'dasdad', 'dasdas', 0, 15);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `no_pesanan` int(25) NOT NULL,
  `customer` varchar(128) NOT NULL,
  `tanggal_pesan` varchar(128) NOT NULL,
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
(301918199, 'Team Manda', '2023-06-13 18:11:33', '2023-06-15', 3, 'wisata', 16, 2, 5, '60000', 3, '1686654709_adef7dca362c4012524f.jpg'),
(327826303, 'Anwar Family', '2022-11-20', '2022-11-22', 5, 'wisata', 15, 3, 1, '75000', 3, ''),
(550921505, 'Anwar Family', '2023-06-08', '2023-06-21', 4, 'wisata', 15, 2, 2, '40000', 0, ''),
(563260230, 'Family Adudu', '2022-12-04', '2022-12-15', 3, 'wisata', 15, 1, 6, '60000', 0, ''),
(649179524, 'Wimas Team', '2022-12-15', '2022-12-27', 4, 'wisata', 15, 3, 5, '30000', 3, ''),
(704354749, 'anwarku', '2023-06-14 09:27:27', '2023-06-21', 4, 'wisata', 16, 2, 8, '100000', 0, ''),
(747906993, 'Viyaa', '2023-05-31', '2023-06-19', 7, 'wisata', 15, 3, 6, '70000', 3, ''),
(1073398082, 'Mas Anwar', '2022-11-19', '2022-11-25', 90, 'wisata', 15, 2, 9, '1800000', 0, ''),
(1423215115, 'salsabilah', '2023-05-31', '2023-06-12', 4, 'wisata', 15, 2, 8, '100000', 0, ''),
(1423994470, 'Jonathan', '2022-12-09', '2022-12-09', 5, 'wisata', 15, 1, 7, '75000', 3, ''),
(1563596880, 'Ningrum Family', '2023-06-12 22:56:01', '2023-06-14', 2, 'wisata', 16, 4, 6, '20000', 3, '1686706871_301e09fd1e1a796197c4.jpg'),
(1792876973, 'Jonathan', '2023-06-11 22:26:36', '2023-06-15', 4, 'wisata', 16, 3, 2, '40000', 4, '1686497218_9a2aaccedba71784dc14.jpg'),
(1876593470, 'Istia Family', '2022-11-20', '2022-11-30', 3, 'wisata', 15, 4, 5, '30000', 0, ''),
(1960218888, 'Ningrum Family', '2022-12-03', '2022-12-14', 2, 'wisata', 15, 4, 8, '20000', 3, ''),
(2042282771, 'Big Family Anwar', '2022-12-04', '2022-12-11', 9, 'wisata', 15, 4, 2, '135000', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pesanpenginapan`
--

CREATE TABLE `pesanpenginapan` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `tanggal_kedatangan` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanpenginapan`
--

INSERT INTO `pesanpenginapan` (`id`, `nama_lengkap`, `tanggal_kedatangan`, `jumlah`, `id_user`, `id_produk`) VALUES
(1, 'Jehan Shaila', '2023-06-28', 3, 16, 4);

-- --------------------------------------------------------

--
-- Table structure for table `rating_kuliner`
--

CREATE TABLE `rating_kuliner` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `rate` int(5) NOT NULL,
  `review` varchar(255) NOT NULL,
  `jenis_produk` varchar(15) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rating_wisata`
--

CREATE TABLE `rating_wisata` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `rate` int(5) NOT NULL,
  `review` varchar(255) NOT NULL,
  `jenis_produk` varchar(15) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating_wisata`
--

INSERT INTO `rating_wisata` (`id`, `tanggal`, `rate`, `review`, `jenis_produk`, `id_user`, `id_produk`) VALUES
(1, '2023-06-13 18:10:27', 4, 'dasdasdas', 'wisata', 16, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tefood`
--

CREATE TABLE `tefood` (
  `id_pesan` int(11) NOT NULL,
  `tanggal_pesan` varchar(128) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jenis_pesan` char(20) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tefood`
--

INSERT INTO `tefood` (`id_pesan`, `tanggal_pesan`, `jumlah`, `jenis_pesan`, `id_customer`, `id_penjual`, `id_produk`, `harga_total`, `status`) VALUES
(1, '2023-06-12 09:24:43', 2, 'kuliner', 16, 15, 5, 24000, 3),
(2, '2023-06-12 12:23:26', 1, 'kuliner', 16, 15, 3, 10000, 3),
(3, '2023-06-13 18:04:46', 1, 'kuliner', 16, 15, 4, 6000, 2),
(4, '2023-06-14 09:29:40', 1, 'kuliner', 16, 15, 3, 10000, 0),
(5, '2023-06-14 09:37:30', 1, 'kuliner', 16, 15, 4, 6000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `top_up`
--

CREATE TABLE `top_up` (
  `id` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `metode` varchar(25) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top_up`
--

INSERT INTO `top_up` (`id`, `nominal`, `metode`, `tanggal`, `bukti`, `status`, `id_user`) VALUES
(1, 100000, 'Bank BRI', '2023-06-13 15:10:28', '1686643828_1164a1280405d6a2e8f1.jpg', 'Lunas', 16),
(2, 300000, 'ShopeePay', '2023-06-13 18:03:38', '1686654218_07dcd2401e9339ab0923.jpg', 'Lunas', 16);

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
  `saldo` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `no_telp`, `jenis_kelamin`, `alamat`, `password`, `gambar`, `saldo`, `is_active`, `role_id`) VALUES
(1, 'Muhammad Khaeril Anwar', 'khaerilanwar1992@gmail.com', '085870627026', 'Laki-laki', 'Pasarbatang, Brebes', '$2y$10$gMJ7B4ZBS0iBYN6F2/e0beu0QiXGsExTtow0ecyeYJReEPXotf3nK', 'anwar.jpeg', 0, 1, 1),
(2, 'Istia Ningrum', 'istianingrum@gmail.com', '083121242561', 'Perempuan', 'Sawojajar, Brebes', '$2y$10$cQM749U1j/oF2qxA8tBCHOOxhbYVlj3SY4OL72rU9x7a2fLVds2gO', 'default.jpg', 0, 1, 2),
(5, 'Krisdiana', 'krisdiana@gmail.com', '081257800047', 'Perempuan', 'Gamprit, Brebes', '$2y$10$aEeWfdCY0kJ0a/qNt5zkyOm4P9UOV5HRLh1FebyOr.CjHzlSh9vCS', 'default.jpg', 0, 1, 2),
(14, 'Adduru Nafisah', 'adudu@gmail.com', '081187900098', 'Perempuan', 'Pasarbatang, Brebes', '$2y$10$nwtp6qxzU05Ns9n1D2ATt.J8QhRwPyf44aoFAVAHcRJimE/Refs7G', 'default.jpg', 0, 1, 2),
(15, 'Nurul Rahmanda Afriannisa', 'nurul@gmail.com', '081257800047', 'Perempuan', 'Kaligangsa Wetan, Brebes', '$2y$10$cpNdOhSDdMJLGsUhcZoPPOouR33UaY.a.HLEyLxwvPmUeuVPPf1ki', '1685278813_3cf1b2f7997e33836825.jpg', 200000, 1, 3),
(16, 'Nihayatul Fathiyah', 'ayaa@gmail.com', '085870627026', 'Perempuan', 'Banjaratma, Brebes', '$2y$10$fclZNl2E9fuzrjaOLqpU/.hQFE8ri4RNIXmtrD.mNUqBxb1k88Jgm', 'default.jpg', 278000, 1, 2),
(17, 'Rahma Liza Arifiyah', 'liza@gmail.com', '083121242542', 'Perempuan', 'Pasarbatang, Brebes', '$2y$10$wPbfth0gnBGm15AmTmswb.OtuTpdENDT2On2LpigYjLl2XqcVormq', '1668611388_da32d42732f1a4413bc3.jpg', 0, 1, 2),
(18, 'Istia Ningrum', 'istianingrum09@gmail.com', '083121242542', 'Perempuan', 'jl. Pemuda Sawojajar, Brebes', '$2y$10$lvEK0XuqnUfsvIfWeOgPZOnVokAIRoPQRbzt4bNco7QxiIHWLpjhW', 'default.jpg', 0, 1, 2),
(19, 'Aliando Syarief', 'aliandogans@gmail.com', '087782824940', 'Laki-laki', 'Cikeusal Kidul, Ketanggungan, Brebes', '$2y$10$OGnib5v7Lk3EKZHTydGGD.Ww9fPxzmJKKy60g.tzrdDt11HvEkJfO', '1671085603_d1f047dc41eb7f0f9ed9.jpg', 0, 1, 2),
(20, 'Adam Dzikri Ramadhan', 'adamdzikrri@gmail.com', '081298548647', 'Laki-laki', 'Kelurahan Pasarbatang, Brebes, Brebes', '$2y$10$KxRubJZ.QKRsO7noAi9Gpu58DbEtretZWRIjm3gAArdZfZ9TIgrS6', '1671085845_de808a97732712e716eb.jpg', 0, 1, 2),
(21, 'Wimas Mutas Subkhan', 'wimasmutas@gmail.com', '089847492877', 'Laki-laki', 'Debong, Tegal Jawa Tengah', '$2y$10$diorKht.LtIX/4YAkWbTSeT4YpFaK4gvIc4Qr6CrDcn8Bdytgmy46', '1671086704_cd806e708e5e82c42c4e.jpg', 0, 1, 2),
(22, 'Hilmi Zuhair', 'ijulhilmi@gmail.com', '089524974947', 'Laki-laki', 'Pasarbatang, Brebes, Brebes', '$2y$10$rffQf0c8uU/6teq1ndT5du1tfA/5aoifx7WnhDcO8VI.VhBJFmh3y', 'default.jpg', 0, 1, 2),
(27, 'Khaeril Anwar', 'khaerilanwar0001@gmail.com', '087856906294', 'Perempuan', 'Brebes', '$2y$10$.eIyJYX3ppu1eMZ58FXiVOgdE2LT0iMuEty1tgoHz8C2b0sHDu.zq', 'default.jpg', 0, 1, 2),
(28, 'Khaeril Anwar Istia', 'kabtegalubsi@gmail.com', '087856906294', 'Perempuan', 'Brebes', '$2y$10$hvypoVs45rDzQZ8/3fHqgeIDOfEY4dxkunlUR6mc01mY/5.gelzXW', 'default.jpg', 0, 1, 2),
(29, 'Khaeril Anwar', 'rediofficial27@gmail.com', '087856906294', 'Laki-laki', 'Brebes', '$2y$10$JcDdhPYxzFFZ3NDTm8wtieakEqZ/m6xspx7.C9sZ26we.JdTNFvN6', 'default.jpg', 0, 0, 2),
(32, 'Tri Haryanto', 'm150dsx0234@bangkit.academy', '087856906294', 'Laki-laki', 'Brebes', '$2y$10$th6ZJLa4XMSpGMZTOCHfhuGPQCvfr/oEfEIFkRplpv457oAovGIXe', 'default.jpg', 0, 0, 2),
(37, 'rani', 'ranioppoa33@gmail.com', '081215847404', 'Perempuan', 'TEGAL', '$2y$10$Myw0AbpP/FBF109RGBFc0.Lxv5mnKllpH4AnT/vdhuyZs/uHJAEIm', 'default.jpg', 0, 0, 2),
(38, 'Lusiana Amelia', 'khaerilanwar0003@gmail.com', '087856906294', 'Laki-laki', 'Brebes', '$2y$10$BUqfxdSRi7Mqcs1B5KU49.WoYaH0XFAgT.3WOKgZleJgkX/HMdgOu', 'default.jpg', 0, 1, 2),
(39, 'Wasriatun', 'khaerilanwar0004@gmail.com', '081234567890', 'Perempuan', 'Wangandalem', '$2y$10$LiGKAu/6.KxFl7g7t4c9Cu9g/nCHzc.BxkUNjPxjEm5CnXKVgpu.G', 'default.jpg', 0, 0, 2);

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
(7, 'rediofficial27@gmail.com', 'L6Eaj6kJoh6JLh9lKymG1DMeV/2B9MLUcwP/ZKV0XTE=', 1671588794),
(8, 'm150dsx0234@bangkit.academy', 'hTHBh7xVmz0Xa0wSeQZreX/vVDN4MSK4U19UBuLvqWM=', 1686119678),
(9, 'm150dsx0234@bangkit.academy', 'onEUeMud8tVctaGrtJyHdv2UT/lLlGQqWi4SdL33hp4=', 1686120268),
(10, 'm150dsx0234@bangkit.academy', 'NfT6ymoIGhEe1zFixYkJDEk/9rguh6I978lAP1kl6+U=', 1686120958),
(11, '12211073@gmail.com', 'EHd2qUqwyoMQi9MT6VYMWfFlidJxf8alqzRMzDDwrew=', 1686296298),
(12, 'rani@gmail.com', 'bkod/jHzn0t7CzL5/KvJ0MvutxedZ9rdSKewDbN0AlQ=', 1686296338),
(13, '12211073@bsi.ac.id', 'Km8QCXO0dREu7ohawUmusi8SRKRCWooxLLsBwTX7j+g=', 1686296435),
(14, 'ranioppoa33@gmail.com', 'wX2hbfQeR1voMjo1JMm+cbamFJ9zlzFKxxB41OaFv0M=', 1686296895),
(16, 'khaerilanwar0004@gmail.com', 'E/7o2lozrf+37qZZAMdz91fPligsJfrcDinLo34YPHI=', 1686297625);

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
-- Indexes for table `bukti_bayar`
--
ALTER TABLE `bukti_bayar`
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
-- Indexes for table `pesanpenginapan`
--
ALTER TABLE `pesanpenginapan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating_kuliner`
--
ALTER TABLE `rating_kuliner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating_wisata`
--
ALTER TABLE `rating_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tefood`
--
ALTER TABLE `tefood`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `top_up`
--
ALTER TABLE `top_up`
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
-- AUTO_INCREMENT for table `bukti_bayar`
--
ALTER TABLE `bukti_bayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pesanpenginapan`
--
ALTER TABLE `pesanpenginapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rating_kuliner`
--
ALTER TABLE `rating_kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating_wisata`
--
ALTER TABLE `rating_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tefood`
--
ALTER TABLE `tefood`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `top_up`
--
ALTER TABLE `top_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
