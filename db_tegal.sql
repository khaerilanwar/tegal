-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 08:07 AM
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
  `bidang_jasa` enum('elektronik','cleaning','otomotif','pendidikan','kesehatan') NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `harga` int(10) NOT NULL,
  `maps` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`id`, `nama_jasa`, `bidang_jasa`, `deskripsi`, `gambar`, `harga`, `maps`) VALUES
(1, 'Laundry bang anwar', 'cleaning', 'Premium hadir untuk memberikan solusi laundry anda, memahami kebutuhan anda dengan pelayanan team kami yang ramah serta profesional bekerja sesuai SOP (Standard Operating Procedures), Orange Laundry Premium hadir sebagai one stop laundry service yang mema', 'laundry.jpg', 30000, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1328562557314!2d109.03626971455866!3d-6.874681095032153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbba48f00d7a5%3A0x8aa01b8c2b5a860f!2szZZ...*21*21*21%20Kedai%20Coffee!5e0!3m2!1sid!2sid!4v1666518018455!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(2, 'Laundry cyntia', 'cleaning', 'Premium hadir untuk memberikan solusi laundry anda, memahami kebutuhan anda dengan pelayanan team kami yang ramah serta profesional bekerja sesuai SOP (Standard Operating Procedures), Orange Laundry Premium hadir sebagai one stop laundry service yang mema', 'laundry.jpg', 30000, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63378.12587036862!2d109.0034387384113!3d-6.874679818246503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb95f6a6f357f%3A0xc08a399f73155b55!2sTegal%20Laundry!5e0!3m2!1sid!2sid!4v1666518345939!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id` int(11) NOT NULL,
  `nama_kuliner` varchar(128) NOT NULL,
  `jenis_kuliner` varchar(128) NOT NULL,
  `harga` int(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 'Bank BRI', '123456789964');

-- --------------------------------------------------------

--
-- Table structure for table `penginapan`
--

CREATE TABLE `penginapan` (
  `id` int(11) NOT NULL,
  `nama_penginapan` varchar(30) NOT NULL,
  `tipe_kamar` varchar(25) NOT NULL,
  `harga` int(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `maps` text NOT NULL,
  `kamar_tersedia` int(10) NOT NULL
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
(13, 'Gita Iftah Royani', 'gita123@gmail.com', '081257800047', 'Perempuan', 'dadas', '$2y$10$cLYBqRTcrUzVHNB8Pgj7UeNTkC5Z.ykxJhbrso.jcGMH4tJFDSqi6', 'default.jpg', 1, 2),
(14, 'Adduru Nafisah', 'adudu@gmail.com', '081187900098', 'Perempuan', 'Pasarbatang, Brebes', '$2y$10$nwtp6qxzU05Ns9n1D2ATt.J8QhRwPyf44aoFAVAHcRJimE/Refs7G', 'default.jpg', 1, 2),
(15, 'Nurul Rahmanda', 'nurul@gmail.com', '081257800047', 'Perempuan', 'Tegal', '$2y$10$j.G9liu1KMg019dIULhizur4Hx5TgzNbQCkcaeZKAz36zemG8Qgey', 'default.jpg', 1, 2),
(16, 'Nihayatul Fathiyah', 'ayaa@gmail.com', '085870627026', 'Perempuan', 'Banjaratma, Brebes', '$2y$10$rq7jHuxN2Nsgy2tfegk7FOC1V1Zq0hn7zA3vQE1MSaqROvrELmGEy', 'default.jpg', 1, 2);

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
(1, 'Curug Cantel', 15000, 'Bumijawa', 'curug-cantel', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1979.0649435524103!2d109.12793780800123!3d-7.226022598695879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f8d5fc8b3eb23%3A0xb5edf92a14017919!2sWisata%20Alam%20Curug%20Cantel!5e0!3m2!1sid!2sid!4v1666091152419!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Ladang,Hutan, Sigedong, Kecamatan Bumijawa, Kabupaten Tegal, Jawa Tengah 52466', 'Air terjun tertinggi yang ada di daerah Bumijawa Kabupaten Tegal', 'cantel.jpg'),
(2, 'Curug Bengkawah', 10000, 'Belik', 'curug-bengkawah', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253457.19054771302!2d109.0186073174619!3d-6.977601259246889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6feed852d9ada3%3A0xd5a6ff89b1ca15e1!2sCurug%20Bengkawah!5e0!3m2!1sid!2sid!4v1666094213440!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Jl. Sikasur - Simpur, Karangmulyo, Sikasur, Kec. Belik, Kabupaten Pemalang, Jawa Tengah 52356', 'Curug Bengkawah berada di Kabupaten Pemalang Jawa Tengah', 'bengkawah.jpg'),
(3, 'Pantai Alam Indah', 15000, 'Kota Tegal', 'pantai-alam-indah', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253457.2129078153!2d109.01860665544736!3d-6.977559958765514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb73593f63bc3%3A0x84c3299f8856ec98!2sObyek%20wisata%20Pantai%20Alam%20Indah%20(PAI)!5e0!3m2!1sid!2sid!4v1666094346065!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Mintaragen, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52121', 'Pantai yang berada di Kota Tegal tepatnya di Tegal Timur', 'pai.jpg'),
(4, 'Curug Putri', 10000, 'Sirampog', 'curug-putri', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253333.37327461576!2d108.8126544328125!3d-7.202686800000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f8e00ad0924a1%3A0x38871972ca0035d9!2sCurug%20Putri!5e0!3m2!1sid!2sid!4v1666096478537!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Padanama, Mendala, Kec. Sirampog, Kabupaten Brebes, Jawa Tengah 52466', 'Curug Putri adalah sebuah air terjun yang berada di Kecamatan Sirampog, Kabupaten Brebes.', 'putri.jpg'),
(5, 'Clirit View', 20000, 'Balapulang', 'clirit-view', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.1264745737685!2d109.13113341456014!3d-7.1113387948646345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f9537bdc9d653%3A0xd1c0d91dd59c6393!2sWana%20Wisata%20Clirit%20View!5e0!3m2!1sid!2sid!4v1667219312852!5m2!1sid!2sid&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;&gt;&lt;/iframe&gt;', 'Jl. Raya Slawi Jl. Bojong, Sawah,Ladang, Kalibakung, Kec. Balapulang, Kabupaten Tegal, Jawa Tengah 52464', 'Clirit View termasuk objek wisata yang berada di Jawa Tengah tepatnya di kecamatan Balapulang Kabupaten Tegal, yang menyajikan banyak spot foto yang bagus', 'clirit.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
