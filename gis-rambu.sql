-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 07:22 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis-rambu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `admin`, `pass`) VALUES
(1, 'raissa', 'raissa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_tempat` int(11) NOT NULL,
  `nama_galeri` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `ket_galeri` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `id_tempat`, `nama_galeri`, `gambar`, `ket_galeri`) VALUES
(37, 16, 'fdsf', '3795l-20190101125535pekalongan1.jpg', '<p>fsdf</p>'),
(38, 10, 'Rame', '5065l-20190101125535pekalongan1.jpg', ''),
(39, 17, 'Jogja ', '443620191219_112647.jpg', ''),
(40, 17, 'Jogja ', '198620191219_112640.jpg', ''),
(41, 17, 'Jogja 3', '977320191219_112519.jpg', ''),
(42, 18, 'Indonesia Jaya', '992420191219_122228.jpg', ''),
(43, 18, 'Indonesia Jaya', '774020191219_122245.jpg', ''),
(44, 18, 'Indonesia Jaya', '461720191219_122235.jpg', ''),
(45, 25, 'Rambu Petunjuk Parkir', '1735parkir.png', '<p>Rambu Petunjuk Parkir</p>'),
(46, 38, 'Rambu Peringatan Pejalan Kaki', '6205lalin-pejalan-kaki.png', '<p>Rambu Peringatan Pejalan Kaki</p>'),
(47, 21, 'Rambu Peringatan Pejalan Kaki Anak-Anak', '3342pejalan-kaki-anak-anak.png', '<p>Rambu Peringatan Pejalan Kaki Anak-Anak</p>'),
(48, 19, 'Rambu Larangan Parkir', '6602larangan-parkir.png', '<p>Rambu Larangan Parkir Sampai Jarak 15m dari tempat pemasangan rambu menurut arah lalu lintas, kecuali dinyatakan lain dengan papan tambahan.</p>'),
(49, 48, 'Rambu Larangan Berhenti', '9943sampai-rambu-berikutnya.png', '<p>Rambu Larangan Berhenti sampai jarak 15 m dari tempat pemasangan rambu menurut arah lalu lintas, kecuali dinyatakan lain dengan papan tambahan.</p>'),
(50, 20, 'Rambu Petunjuk Satu Arah', '3419p6c.png', '<p>Rambu petunjuk berfungsi sebagai pemandu jalan atau pemberi informasi lain saat seseorang sedang melakukan perjalanan. Rambu dengan warna dasar biru dan piktogram tanda panah ke arah atas ini termasuk rambu petunjuk pengaturan lalu lintas. Digunakan untuk memberikan informasi keada pengguna jalan bahwa mereka berada di sistem jalan satu arah.</p>'),
(51, 27, 'Rambu Peringatan Persimpangan Tiga Sisi Kanan', '5674pertigaan-kanan.png', '<p>Rambu Peringatan&nbsp;<strong>Persimpangan Tiga Sisi Kanan</strong></p>'),
(52, 32, 'Rambu Peringatan Lampu Lalu Lintas', '8935lalin.png', '<p>Rambu Peringatan Lampu Lalu Lintas</p>'),
(53, 37, 'Rambu Larangan Masuk Bagi Semua Kendaraan Bermontor Maupun Tidak Bermontor', '5914forbiden.png', '<p>Rambu Larangan Masuk Bagi Semua Kendaraan Bermontor Maupun Tidak Bermontor</p>'),
(54, 27, 'Rambu Pendahulu Petunjuk Jurusan (RPPJ)', '34291.jpg', '<p>Rambu Pendahulu Petunjuk Jurusan (RPPJ)</p>'),
(55, 34, 'Rambu Larangan Belok Kanan', '9515dilarang-belok-kanan.png', '<p>Rambu Larangan Belok Kanan</p>'),
(56, 51, 'Rambu Peringatan Lampu Lalu Lintas', '3924lalin.png', '<p>Rambu Peringatan Lampu Lalu Lintas</p>'),
(57, 61, 'Rambu Perintah Lajur atau Bagian Jalan Yang Wajib Dilewati', '9992kanan.png', '<p>Rambu Perintah Lajur atau Bagian Jalan Yang Wajib Dilewati</p>'),
(58, 71, 'Rambu Larangan Batas Kecepatan Maksimal Yang Digunakan', '8504rambu-20km-228x228.png', '<p>Rambu Larangan Batas Kecepatan Maksimal Yang Digunakan</p>'),
(59, 64, 'Rambu Petunjuk Penyebrangan Pejalan Kaki', '3000rambu-lalu-lintas-penyebrangan-pejalan-kaki-150x150.png', '<p>Rambu Petunjuk Penyebrangan Pejalan Kaki</p>'),
(60, 59, 'Rambu Peringatan Pejalan Kaki', '2764lalin-pejalan-kaki.png', '<p>Rambu Peringatan Pejalan Kaki</p>'),
(61, 76, 'Rambu Larangan Masuk Bagi Semua Kendaraan Bermontor Maupun Tidak Bermontor', '9642forbiden.png', '<p>Rambu Larangan Masuk Bagi Semua Kendaraan Bermontor Maupun Tidak Bermontor</p>'),
(62, 89, 'Rambu Petunjuk Satu Arah', '8784p6c.png', '<p>Rambu Petunjuk Satu Arah</p>'),
(63, 81, 'Rambu Petunjuk Parkir', '9528parkir.png', '<p>Rambu Petunjuk Parkir</p>'),
(64, 80, 'Rambu Larangan Berhenti', '9158sampai-rambu-berikutnya.png', '<p>Rambu Larangan Berhenti</p>'),
(65, 87, 'Rambu Larangan Parkir', '9474larangan-parkir.png', '<p>Rambu Larangan Parkir</p>'),
(66, 80, 'Rambu Pendahulu Petunjuk Jurusan (RPPJ)', '4617rppj.png', '<p>Rambu Pendahulu Petunjuk Jurusan (RPPJ)</p>'),
(67, 90, 'Rambu Petunjuk Parkir', '6996parkir.png', '<p>Rambu Petunjuk Parkir</p>'),
(68, 91, 'Rambu Petunjuk Satu Arah', '4557p6c.png', '<p>Rambu Petunjuk Satu Arah</p>'),
(69, 92, 'Rambu Larangan Masuk Bagi Semua Kendaraan Bermontor Maupun Tidak Bermontor Kecuali Sepeda dan Becak', '7317forbiden.png', '<p>Rambu Larangan Masuk Bagi Semua Kendaraan Bermontor Maupun Tidak Bermontor Kecuali Sepeda dan Becak</p>'),
(70, 96, 'Rambu Larangan Berjalan Terus Pada Persilangan-Persilangan Sebidang Lintasan Kereta Api Jalur Ganda, wajib berhenti sesaat untuk mendapatkan kepastian aman', '7756img4036-1432275336.png', '<p>Rambu Larangan<strong>&nbsp;Berjalan Terus Pada Persilangan-Persilangan Sebidang Lintasan Kereta Api Jalur Ganda, wajib berhenti sesaat untuk mendapatkan kepastian aman</strong></p>'),
(71, 97, 'Rambu Pendahulu Petunjuk Jurusan (RPPJ)', '9921rppj.png', '<p>Rambu Pendahulu Petunjuk Jurusan (RPPJ)</p>'),
(75, 98, 'Rambu Larangan Masuk Kendaraan Roda Empat dan Lebih', '7768600px-indonesia_new_road_sign_pro_2b3.png', '<p>Rambu Larangan Masuk&nbsp;<strong>Kendaraan Roda&nbsp;Empat dan Lebih</strong></p>'),
(76, 100, 'Rambu Peringatan Pejalan Kaki Anak-Anak', '2170pejalan-kaki-anak-anak.png', '<p>Rambu Peringatan Pejalan Kaki Anak-Anak</p>'),
(77, 66, 'Rambu Larangan Masuk Bagi Mobil Barang', '781195613309647-rambu_dilarang_masuk.jpg', '<p>Rambu Larangan Masuk Bagi Mobil Barang</p>'),
(78, 111, 'Rambu Larangan Masuk Kendaraan Roda Empat dan Lebih Kecuali Sepeda / Montor/ Becal / Angkt Pukul 06.00 - 18.00', '9453600px-indonesia_new_road_sign_pro_2b3.png', '<p>Rambu Larangan Masuk&nbsp;<strong>Kendaraan Roda&nbsp;Empat dan Lebih&nbsp;</strong>Kecuali Sepeda / Montor/ Becal / Angkt Pukul 06.00 - 18.00</p>'),
(79, 109, 'Rambu Larangan Berjalan Terus Pada Persilangan-Persilangan Sebidang Lintasan Kereta Api Jalur Ganda, wajib berhenti sesaat untuk mendapatkan kepastian aman', '5184img4036-1432275336.png', '<p>Rambu Larangan<strong>&nbsp;Berjalan Terus Pada Persilangan-Persilangan Sebidang Lintasan Kereta Api Jalur Ganda, wajib berhenti sesaat untuk mendapatkan kepastian aman</strong></p>'),
(80, 33, 'Ramayana', '6447whatsapp-image-2019-12-26-at-13.48.38-(2).jpeg', ''),
(81, 33, 'Ramayana', '9138whatsapp-image-2019-12-26-at-13.48.38-(4).jpeg', ''),
(82, 33, 'Ramayana', '4510whatsapp-image-2019-12-26-at-13.48.38-(3).jpeg', ''),
(83, 33, 'Ramayana', '9191whatsapp-image-2019-12-26-at-13.48.39.jpeg', ''),
(84, 33, 'Ramayana', '9336whatsapp-image-2019-12-26-at-13.48.38-(1).jpeg', ''),
(85, 21, 'Rambu Petunjuk Satu Arah', '4422p6c.png', '<p>Rambu petunjuk berfungsi sebagai pemandu jalan atau pemberi informasi lain saat seseorang sedang melakukan perjalanan. Rambu dengan warna dasar biru dan piktogram tanda panah ke arah atas ini termasuk rambu petunjuk pengaturan lalu lintas. Digunakan untuk memberikan informasi keada pengguna jalan bahwa mereka berada di sistem jalan satu arah.</p>'),
(86, 49, 'Rambu Perintah Lajur atau Bagian Jalan Yang Wajib Dilewati', '6295rambu-lalu-lintas-wajib-memasuki-jalur-kiri-300x300.png', '<p>Rambu Perintah&nbsp;<strong>Lajur atau Bagian Jalan Yang Wajib Dilewati</strong></p>'),
(87, 50, 'Rambu Petunjuk Satu Arah', '3766p6c.png', '<p>Rambu Petunjuk Satu Arah</p>'),
(88, 51, 'Rambu Petunjuk Parkir', '5627parkir.png', '<p>Rambu Petunjuk Parkir</p>'),
(89, 74, 'Rambu Larangan Parkir', '4560larangan-parkir.png', '<p>Rambu Larangan Parkir</p>'),
(90, 73, 'Rambu Pendahulu Petunjuk Jurusan (RPPJ)', '60391.jpg', '<p>Rambu Pendahulu Petunjuk Jurusan (RPPJ)</p>'),
(91, 52, 'Rambu Larangan Masuk Bagi Semua Kendaraan Bermontor Maupun Tidak Bermontor', '6826forbiden.png', '<p>Rambu Larangan Masuk Bagi Semua Kendaraan Bermontor Maupun Tidak Bermontor</p>'),
(92, 58, 'Rambu Peringatan Persimpangan Empat', '5548simpang-empat.png', '<p>Rambu Peringatan&nbsp;<strong>Persimpangan Empat</strong>.</p>'),
(93, 53, 'Rambu Peringatan Pejalan Kaki Anak-Anak', '2979pejalan-kaki-anak-anak.png', '<p>Rambu Peringatan Pejalan Kaki Anak-Anak</p>'),
(94, 75, 'Rambu Perintah Lajur atau Bagian Jalan Yang Wajib Dilewati', '6176rambu-lalu-lintas-wajib-memasuki-jalur-kiri-300x300.png', '<p>Rambu Perintah Lajur atau Bagian Jalan Yang Wajib Dilewati</p>'),
(95, 108, 'Rambu Larangan Parkir', '8113larangan-parkir.png', '<p>Rambu Larangan Parkir</p>'),
(96, 107, 'Rambu Petunjuk Parkir', '9605parkir.png', '<p>Rambu Petunjuk Parkir</p>'),
(97, 111, 'Rambu Larangan Berjalan Terus, wajib berhenti sesaat dan meneruskan perjalanan setelah mendapatkan kepastian aman dari lalu lintas arah lainnya.', '3808stop.png', '<p>Rambu Larangan&nbsp;<strong>Berjalan Terus, wajib berhenti sesaat dan meneruskan perjalanan setelah mendapatkan kepastian aman dari lalu lintas arah lainnya.</strong></p>'),
(98, 112, 'Rambu Larangan Belok Kiri', '9751dilarang-belok-kiri.png', '<p>Rambu Larangan Belok Kiri</p>'),
(99, 122, 'Rambu Larangan Berjalan Terus Pada Persilangan-Persilangan Sebidang Lintasan Kereta Api Jalur Ganda, wajib berhenti sesaat untuk mendapatkan kepastian aman', '6013img4036-1432275336.png', '<p>Rambu Larangan Berjalan Terus Pada Persilangan-Persilangan Sebidang Lintasan Kereta Api Jalur Ganda, wajib berhenti sesaat untuk mendapatkan kepastian aman</p>'),
(100, 112, 'Rambu Petunjuk Parkir', '7833parkir.png', '<p>Rambu Petunjuk Parkir</p>'),
(101, 121, 'Sign ini berfungsi untuk memperingatkan pengguna jalan agar berhati-hati saat melintasi kawasan berbahaya. Untuk menegaskan jenis bahaya tersebut digunakan papan tambahan. Pemasangan sign ini bermanfaat untuk menciptakan ketertiban lalu lintas dan meminim', '3579hati-hati.png', '<p>Sign ini berfungsi untuk memperingatkan pengguna jalan agar berhati-hati saat melintasi kawasan berbahaya. Untuk menegaskan jenis bahaya tersebut digunakan papan tambahan. Pemasangan sign ini bermanfaat untuk menciptakan ketertiban lalu lintas dan meminimalisasi angka kecelakaan lalu lintas yang dapat mengancam keselamatan jiwa pengguna jalan</p>'),
(102, 120, 'Rambu Peringatan Persimpangan Tiga Sisi Kanan', '3293pertigaan-kanan.png', '<p>Rambu Peringatan Persimpangan Tiga Sisi Kanan</p>'),
(103, 121, 'Rambu Petunjuk Rumah Ibadah Umat Islam', '2665img195-1291626639.gif', '<p>Rambu Petunjuk&nbsp;<strong>Rumah Ibadah Umat Islam</strong></p>'),
(104, 113, 'Rambu Larangan Belok Kanan', '9359dilarang-belok-kanan.png', '<p>Rambu Larangan Belok Kanan</p>'),
(105, 115, 'Rambu Pendahulu Petunjuk Jurusan (RPPJ', '7889rppj.png', '<p>Rambu Pendahulu Petunjuk Jurusan (RPPJ</p>'),
(106, 123, 'Rambu Peringatan Perlintasan Sebidang Kereta Api', '1044rambu-perlintasan-sebidang-kereta-api.png', '<p>Rambu Peringatan Perlintasan Sebidang Kereta Api</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri_tempat`
--

CREATE TABLE `tb_galeri_tempat` (
  `id_galeri` int(4) NOT NULL,
  `id_tempat` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul_informasi` varchar(50) NOT NULL,
  `isi_informasi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_informasi`
--

INSERT INTO `tb_informasi` (`id_informasi`, `judul_informasi`, `isi_informasi`, `gambar`) VALUES
(2, 'Rambu Petunjuk Sistem Satu Arah', '<p><strong>\"Rambu Petunjuk Sistem Satu Arah\"</strong></p>\r\n<p>Rambu petunjuk berfungsi sebagai pemandu jalan atau pemberi informasi lain saat seseorang sedang melakukan perjalanan. Rambu dengan warna dasar biru dan piktogram tanda panah ke arah atas ini termasuk rambu petunjuk pengaturan lalu lintas. Digunakan untuk memberikan informasi keada pengguna jalan bahwa mereka berada di sistem jalan satu arah.</p>', '6993p6c.png'),
(3, 'Rambu Petunjuk Lokasi Fasilitas Parkir', '<p><strong>\"Rambu Petunjuk Lokasi Fasilitas Parkir\"</strong></p>\r\n<p>Rambu petunjuk berfungsi sebagai pemandu jalan atau pemberi informasi lain saat seseorang sedang melakukan perjalanan. Rambu dengan warna dasar biru dan piktogram berupa huruf <strong>P</strong> berwarna putih ini termasuk rambu petunjuk. Digunakan untuk memberikan informasi mengenai lokasi parkir.</p>', '5529parkir.png'),
(4, 'Rambu Petunjuk Penyeberangan Pejalan Kaki', '<p><strong>\"Rambu Petunjuk Lokasi Fasilitas Penyeberangan Pejalan Kaki\"</strong></p>\r\n<p>Rambu petunjuk berfungsi sebagai pemandu jalan atau pemberi informasi lain saat seseorang sedang melakukan perjalanan. Rambu dengan warna dasar biru dan piktogram berupa gambar orang sedang menyeberangi Zebre Cross ini termasuk rambu petunjuk. Digunakan untuk memberikan informasi mengenai lokasi fasilitas penyeberangan pejalan kaki.</p>', '6950rambu-lalu-lintas-penyebrangan-pejalan-kaki-150x150.png'),
(5, 'Rambu Petunjuk Lokasi Masjid', '<p><strong>\"Rambu Petunjuk Lokasi Masjid\"</strong></p>\r\n<p>Rambu petunjuk berfungsi sebagai pemandu jalan atau pemberi informasi lain saat seseorang sedang melakukan perjalanan. Rambu dengan warna dasar biru dan piktogram berupa kubah masjid ini termasuk rambu petunjuk. Digunakan untuk memberikan informasi mengenai salah satu lokasi fasilitas sosial, yaitu masjid.</p>', '4237img195-1291626639.gif'),
(6, 'Rambu Pendahulu Petunjuk Jurusan (RPPJ)', '<p><strong>\"</strong><strong>Rambu Pendahulu Petunjuk Jurusan (RPPJ) Yang Menunjukkan Jurusan Yang Dituju\"</strong></p>\r\n<p>Rambu berwarna dasar hijau dan tulisan serta piktogram berwarna putih ini adalah rambu petunjuk. Digunakan untuk memberikan informasi kepada pengguna jalan mengenai pendahulu petunjuk jurusan yang akan di tuju.</p>', '63811.jpg'),
(7, 'Rambu Larangan Dilarang Belok Kanan', '<p><strong>\"Rambu Larangan Dilarang Belok Kanan\"</strong></p>\r\n<p>Rambu Lalu Lintas Larangan adalah rambu yang digunakan untuk menyatakan suatu perbuatan yang dilarang dilakukan oleh pengguna jalan. Rambu dengan piktogram berupa tanda panah berbelok ke kanan dalam lingkaran merah yang diberi garis diagonal ini termasuk rambu larangan. Digunakan untuk memberitahukan pengguna jalan bahwa di area tertentu mereka dilarang untuk berbelok kanan.</p>', '9753dilarang-belok-kanan.png'),
(8, 'Rambu Larangan Dilarang Belok Kiri', '<p><strong>\"Rambu Larangan Dilarang Belok Kir\"</strong></p>\r\n<p>Rambu Lalu Lintas Larangan adalah rambu yang digunakan untuk menyatakan suatu perbuatan yang dilarang dilakukan oleh pengguna jalan. Rambu dengan piktogram berupa tanda panah berbelok ke kiri dalam lingkaran merah yang diberi garis diagonal ini termasuk rambu larangan. Digunakan untuk memberitahukan pengguna jalan bahwa di area tertentu mereka dilarang untuk berbelok kiri.</p>', '6741dilarang-belok-kiri.png'),
(9, 'Rambu Larangan Dilarang Berhenti', '<p><strong>\"Rambu Larangan Dilarang Berhenti\"</strong></p>\r\n<p>Rambu Lalu Lintas Larangan adalah rambu yang digunakan untuk menyatakan suatu perbuatan yang dilarang dilakukan oleh pengguna jalan. Rambu dengan huruf <strong>S </strong>dalam lingkaran merah yang diberi garis diagonal ini termasuk rambu larangan. Digunakan unruk memberitahukan pengguna jalan bahwa diarea tertentu mereka dilarang untuk menghentikan kendaraanya.</p>', '9098sampai-rambu-berikutnya.png'),
(10, 'Rambu Larangan Dilarang Berjalan Terus', '<p><strong>\"Rambu Larangan Dilarang Berjalan Terus\"</strong></p>\r\n<p>Rambu berbentuk segi delapan sama sisi dengan tulisan <strong>STOP </strong>di dalamnya ini merupakan rambu larangan. Digunakan untuk memberitahukan pengguna jalan bahwa di area tertentu mereka dilarang untuk berjalan terus karena wajib berhenti sesaat dan / atau melanjutkan perjalanan setelah dipastikan selamat dari konflik lalu lintas dari arah lainnya.</p>', '6986stop.png'),
(11, 'Rambu Larangan Dilarang Memutar Balik', '<p><strong>\"Rambu Larangan Dilarang Memutar Balik\"</strong></p>\r\n<p>Rambu Lalu Lintas Larangan adalah rambu yang digunakan untuk menyatakan suatu perbuatan yang dilarang dilakukan oleh pengguna jalan. Rambu ini termasuk rambu larangan. Digunakan untuk memberitahukan pengguna jalan bahwa di area tertentu mereka dilarang untuk memutar balik kendaraannya.</p>', '5416dilarang-putar-arah.png'),
(12, 'Rambu Larangan Dilarang Mengemudi Lebih dari 40km/', '<p><strong>\"Rambu Larangan Dilarang Mengemudi Lebih dari 40km/Jam\"</strong></p>\r\n<p>Rambu Lalu Lintas Larangan adalah rambu yang digunakan untuk menyatakan suatu perbuatan yang dilarang dilakukan oleh pengguna jalan. Rambu ini termasuk rambu larangan. Digunakan untuk memberitahukan pengguna jalan bahwa di area tertentu mereka dilarang menjalankan kendaraan dengan kecepatan lebih dari 40km/jam.</p>', '8351l8j.png'),
(13, 'Rambu Peringatan Lalu Lintas Alat Pemberi Isyarat ', '<p><strong>\"Rambu Peringatan Lalu Lintas Alat Pemberi Isyarat Lalu Lintas\"</strong></p>\r\n<p>Sign ini berfungsi untuk mengatur kendaraan demi ketertiban berlalu lintas. Alat pemberi isyarat ini terdiri dari tiga warna, yaitu merah (<em>berhenti</em>), kuning (<em>waspada</em>), dan hijau (<em></em><em>jalan terus</em>). Pemasangan sign ini bermanfaat sebagai peringatan pengaturan persinyalan guna meminimalisasi angka kecelakaan lalu lintas yang dapat mengancam keselamatan jiwa pengguna jalan.</p>', '4566lalin.png'),
(14, 'Rambu Peringatan Lalu Lintas Pejalan Kaki', '<p><strong>\"Rambu Peringatan Lalu Lintas Pejalan Kaki\"</strong></p>\r\n<p>Sign ini berfungsi untuk memperingatkan pengguna jalan agar berhati-hati saat melintasi jalur lalu lintas yang sering dilintasi penjalan kaki. Pemasangan sign ini bermanfaat untuk menciptakan ketertiban lalu lintas dan meminimalisir angka kecelakaan lalu lintas yang dapat mengancam keselamatan jiwa pengguna jalan.</p>', '9109lalin-pejalan-kaki.png'),
(15, 'Rambu Peringatan Pejalan Kaki Anak-Anak', '<p><strong>\"Rambu Peringatan Lalu Lintas Pejalan Kaki Anak-Anak\"</strong></p>\r\n<p>Sign ini berfungsi untuk memperingatkan pengguna jalan agar berhati-hati saat melintasi jalur lalu lintas yang sering dilintasi anak-anak, seperti alan keluar sekolah atau lapangan bermain. Pemasangan sign ini bermanfaat untuk menciptkan ketertiban lalu lintas dan meminimalisasi angka kecelakaan lalu lintas yang dapat mengancam keselamatan jiwa pengguna jalan.</p>', '3741pejalan-kaki-anak-anak.png'),
(16, 'Rambu Peringatan Lalu Lintas Hati-Hati', '<p><strong>\"Rambu Peringatan Lalu Lintas Hati-Hati\"</strong></p>\r\n<p>Sign ini berfungsi untuk memperingatkan pengguna jalan agar berhati-hati saat melintasi kawasan berbahaya. Untuk menegaskan jenis bahaya tersebut digunakan papan tambahan. Pemasangan sign ini bermanfaat untuk menciptakan ketertiban lalu lintas dan meminimalisasi angka kecelakaan lalu lintas yang dapat mengancam keselamatan jiwa pengguna jalan.</p>', '1025hati-hati.png'),
(17, 'Rambu Perintah Belok Ke Arah Kiri', '<p><strong>\"Rambu Perintah Belok Ke Arah Kiri\"</strong></p>\r\n<p>Sign lalu lintas ini menyatakan perintah kepada pengguna jalan untuk belok ke arah kiri. Rambu perintah berfungsi untuk menyatakan perintah yang wajib dilakukan oleh setiap pengguna jalan demi terciptanya kelancaran dan kenyamanan saat berkendara. Rambu perintah berbentuk bundar berwarna biru dan piktogram berwarna putih serta merah untuk garis serong sebagai batas akhir perintah.</p>', '6225belok-kiri.png'),
(18, 'Rambu Perintah Belok Ke Arah Kanan', '<p><strong>\"Rambu Perintah Belok Ke Arah Kanan\"</strong></p>\r\n<p>Sign lalu lintas ini menyatakan perintah kepada pengguna jalan untuk belok ke arah kanan. Rambu perintah berfungsi untuk menyatakan perintah yang wajib dilakukan oleh setiap pengguna jalan demi terciptanya kelancaran dan kenyamanan saat berkendara. Rambu perintah berbentuk bundar berwarna biru dan piktogram berwarna putih serta merah untuk garis serong sebagai batas akhir perintah.</p>', '3219rambu-lalu-lintas-belok-kanan-300x300.png'),
(19, 'Rambu Perintah Batas Minimum Kec. Yang DiPerintahk', '<p><strong>\"Rambu Perintah Batas Minimum Kecepatan Yang Di Perintahkan\"</strong></p>\r\n<p>Sign lalu lintas ini menyatakan perintah kepada pengguna jalan untuk berkendara dengan kecepatan minimum yang diperintahkan, yaitu 60kkm/jam. Rambu perintah berfungsi untuk menyatakan perintah yang wajib dilakukan oleh setiap pengguna jalan demi terciptanya kelancaran dan kenyamanan saat berkendara. Rambu perintah berbentuk bundar berwarna biru dan piktogram berwarna putih serta merah untuk garis serong sebagai batas akhir perintah.</p>', '1037rambu-lalu-lintas-batas-maksimum-kecepatan-300x300.png'),
(20, 'Rambu Perintah Memasuki Jalur / Lajur Yang Kanan', '<p><strong>\"Rambu Perintah Memasuki Jalur Atau Lajur Yang Kanan\"</strong></p>\r\n<p>Sign lalu lintas ini menyatakan perintah kepada pengguna jalan untuk memasuki jalur atau lajur kanan. Rambu perintah berfungsi untuk menyatakan perintah yang wajib dilakukan oleh setiap pengguna jalan demi terciptanya kelancaran dan kenyamanan saat berkendara. Rambu perintah berbentuk bundar berwarna biru dan piktogram berwarna putih serta merah untuk garis serong sebagai batas akhir perintah.</p>', '4805rambu-lalu-lintas-wajib-mengikuti-jalur-kanan-300x300.png'),
(21, 'Rambu Perintah Memasuki Jalur Atau Lajur Yang Kiri', '<p><strong>\"Rambu Perintah Memasuki Jalur Atau Lajur Yang Kiri\"</strong></p>\r\n<p>Sign lalu lintas ini menyatakan perintah kepada pengguna jalan untuk memasuki jalur atau lajur kiri. Rambu perintah berfungsi untuk menyatakan perintah yang wajib dilakukan oleh setiap pengguna jalan demi terciptanya kelancaran dan kenyamanan saat berkendara. Rambu perintah berbentuk bundar berwarna biru dan piktogram berwarna putih serta merah untuk garis serong sebagai batas akhir perintah.</p>', '6222rambu-lalu-lintas-wajib-memasuki-jalur-kiri-300x300.png'),
(22, 'Rambu Larangan Berjalan Terus Pada Perlintasan KA', '<p>Rambu Larangan Berjalan Terus Pada Perlintasan Sebidang Lintasan Kereta Api Jalur Ganda Sebelum Mendapatkan Kepastian Selamat dari Konflik</p>', '5216img4036-1432275336.png'),
(23, 'Rambu Larangan Berjalan Terus Pada Perlintasan KA', '<p>Rambu Larangan Berjalan Terus Pada Perlintasan Sebidang Lintasan Kereta Api Jalur Tunggal Sebelum Mendapatkan Kepastian Selamat dari Konflik</p>', '9517mimg100-1291619461.gif'),
(24, 'Rambu Larangan Masuk ', '<p>Rambu Larangan Masuk Bagi Kendaraan Bermontor maupun Tidak Bermontor</p>', '6869forbiden.png'),
(25, 'Rambu Larangan Kendaraan', '<p>Rambu Larangan Masuk Bagi Kendaraan Barang</p>', '535595613309647-rambu_dilarang_masuk.jpg'),
(26, 'Rambu Larangan Masuk Kendaraan ', '<p>Rambu Larangan Masuk Bagi&nbsp;Mobil Penumpang</p>', '4623600px-indonesia_new_road_sign_pro_2b3.png'),
(27, 'Rambu Larangan Parkir', '<p>Rambu Larangan Parkir</p>', '5069larangan-parkir.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(40) NOT NULL,
  `jumlah_kategori` int(3) NOT NULL,
  `tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `jumlah_kategori`, `tahun`) VALUES
(3, 'Rambu Larangan', 9, 2016),
(4, 'Rambu Perintah', 1, 2016),
(5, 'Rambu Peringatan', 1, 2016),
(6, 'Rambu Petunjuk', 2, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_tempat`
--

CREATE TABLE `tb_kategori_tempat` (
  `id_kategori` int(4) NOT NULL,
  `id_tempat` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_options`
--

CREATE TABLE `tb_options` (
  `option_name` varchar(16) NOT NULL,
  `option_value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_options`
--

INSERT INTO `tb_options` (`option_name`, `option_value`) VALUES
('default_lat', '-6.890662'),
('default_lng', '109.675812'),
('default_zoom', '13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajuan`
--

CREATE TABLE `tb_pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengajuan`
--

INSERT INTO `tb_pengajuan` (`id_pengajuan`, `nama_tempat`, `lokasi`, `lat`, `lng`) VALUES
(3, 'Pasar Grogolan', 'Setono, Kabupaten Pekalongan', -6.884867635264272, 109.66928886767577),
(14, 'Alun-alun', 'Depan Hypermart', -6.890709931030689, 109.67633771296691),
(15, 'Masjid Kauman', 'Jalan Nusantara', -6.890200622422433, 109.67525073023221);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tempat`
--

CREATE TABLE `tb_tempat` (
  `id_tempat` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_tempat` varchar(255) DEFAULT NULL,
  `id_informasi` int(11) NOT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `kondisi` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tempat`
--

INSERT INTO `tb_tempat` (`id_tempat`, `id_kategori`, `nama_tempat`, `id_informasi`, `lat`, `lng`, `lokasi`, `kondisi`, `keterangan`) VALUES
(141, 4, 'asdash', 2, 213, 312, 'asdas', 'baik', '<p>sdasd</p>'),
(142, 4, 'Jl. KH. Wahid Hasyim', 19, -6.8944435, 109.6763792, 'Dekat Hotel Asia, Jl. KH. Wahid Hasyim No.30, Keputran, Kec. Pekalongan Timur', NULL, '<p>aaaa</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tb_galeri_tempat`
--
ALTER TABLE `tb_galeri_tempat`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kategori_tempat`
--
ALTER TABLE `tb_kategori_tempat`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_options`
--
ALTER TABLE `tb_options`
  ADD PRIMARY KEY (`option_name`);

--
-- Indexes for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tb_tempat`
--
ALTER TABLE `tb_tempat`
  ADD PRIMARY KEY (`id_tempat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_tempat`
--
ALTER TABLE `tb_tempat`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
