-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2021 at 07:33 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_gangguan_kecemasan`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `konten`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Karena Cemas, Ibu nekat nyusul anak ke Eropa', 'Seorang Ibu asal Jepara nekat menyusul anaknya ke Eropa lantaran cemas', 'default.png', '2021-05-31', '2021-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `certainty`
--

CREATE TABLE `certainty` (
  `id` int(11) NOT NULL,
  `penyakit_id` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL,
  `skor` float NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certainty`
--

INSERT INTO `certainty` (`id`, `penyakit_id`, `gejala_id`, `skor`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0.9, '2021-05-31', '2021-05-31'),
(2, 1, 2, 0.9, '2021-05-31', '2021-05-31'),
(4, 2, 1, 0.9, '2021-06-23', '2021-06-23'),
(5, 2, 3, 0.9, '2021-06-23', '2021-06-23'),
(6, 3, 1, 0.8, '2021-06-23', '2021-06-23'),
(7, 3, 4, 0.9, '2021-06-23', '2021-06-23'),
(8, 3, 5, 0.8, '2021-06-23', '2021-06-23'),
(9, 3, 7, 0.8, '2021-06-23', '2021-06-23'),
(10, 3, 10, 0.9, '2021-06-23', '2021-06-23'),
(11, 4, 1, 0.8, '2021-06-23', '2021-06-23'),
(12, 4, 4, 0.9, '2021-06-23', '2021-06-23'),
(13, 4, 7, 0.8, '2021-06-23', '2021-06-23'),
(14, 4, 10, 0.9, '2021-06-23', '2021-06-23'),
(15, 5, 1, 0.8, '2021-06-23', '2021-06-23'),
(16, 5, 6, 0.9, '2021-06-23', '2021-06-23'),
(17, 6, 1, 0.8, '2021-07-09', '2021-07-09'),
(18, 6, 5, 0.9, '2021-07-09', '2021-07-09'),
(19, 6, 7, 0.8, '2021-07-09', '2021-07-09'),
(20, 7, 1, 0.8, '2021-07-09', '2021-07-09'),
(21, 7, 7, 0.8, '2021-07-09', '2021-07-09'),
(22, 7, 8, 0.9, '2021-07-09', '2021-07-09'),
(23, 8, 1, 0.8, '2021-07-09', '2021-07-09'),
(24, 8, 7, 0.8, '2021-07-09', '2021-07-09'),
(25, 8, 9, 0.9, '2021-07-09', '2021-07-09'),
(26, 9, 1, 0.9, '2021-07-09', '2021-07-09'),
(27, 9, 7, 0.9, '2021-07-09', '2021-07-09'),
(28, 9, 11, 0.8, '2021-07-09', '2021-07-09'),
(30, 10, 1, 0.8, '2021-07-09', '2021-07-09'),
(31, 10, 12, 0.8, '2021-07-09', '2021-07-09'),
(32, 11, 7, 0.6, '2021-07-09', '2021-07-09'),
(33, 11, 13, 0.8, '2021-07-09', '2021-07-09'),
(34, 11, 14, 0.9, '2021-07-09', '2021-07-09'),
(35, 11, 15, 0.7, '2021-07-09', '2021-07-09'),
(36, 12, 7, 0.6, '2021-07-09', '2021-07-09'),
(37, 12, 13, 0.8, '2021-07-09', '2021-07-09'),
(38, 12, 14, 0.7, '2021-07-09', '2021-07-09'),
(39, 12, 22, 0.9, '2021-07-09', '2021-07-09'),
(40, 13, 7, 0.6, '2021-07-09', '2021-07-09'),
(41, 13, 13, 0.9, '2021-07-09', '2021-07-09'),
(42, 13, 14, 0.8, '2021-07-09', '2021-07-09'),
(43, 13, 15, 0.6, '2021-07-09', '2021-07-09'),
(44, 13, 22, 0.8, '2021-07-09', '2021-07-09'),
(45, 14, 7, 0.7, '2021-07-09', '2021-07-09'),
(46, 14, 16, 0.9, '2021-07-09', '2021-07-09'),
(47, 14, 17, 0.8, '2021-07-09', '2021-07-09'),
(48, 14, 18, 0.8, '2021-07-09', '2021-07-09'),
(49, 15, 7, 0.6, '2021-07-09', '2021-07-09'),
(50, 15, 16, 0.9, '2021-07-09', '2021-07-09'),
(51, 15, 17, 0.7, '2021-07-09', '2021-07-09'),
(52, 15, 19, 0.8, '2021-07-09', '2021-07-09'),
(53, 16, 1, 0.6, '2021-07-09', '2021-07-09'),
(54, 16, 11, 0.8, '2021-07-09', '2021-07-09'),
(55, 16, 12, 0.6, '2021-07-09', '2021-07-09'),
(56, 16, 17, 0.7, '2021-07-09', '2021-07-09'),
(57, 16, 20, 0.6, '2021-07-09', '2021-07-09'),
(58, 16, 21, 0.9, '2021-07-09', '2021-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'merasa cemas, takut, rasa ingin menghindar', '', '2021-05-31', '2021-05-31'),
(2, 'akibat fisiologik langsung dari penyakit umum', '', '2021-05-31', '2021-05-31'),
(3, 'Akibat fisiologik langsung dari zat (misal penyalahgunaan obat)', '', '2021-06-22', '2021-06-22'),
(4, 'Serangan panik berulang tak terduga dengan 1 bulan merasa khawatir, prihatin tentang serangan atau perubahan perilaku', '', '2021-06-22', '2021-06-22'),
(5, 'Takut ruangan terbuka, takut meninggalkan rumah, takut pergi belanja, takut tempat ramai, takut ke tempat-tempat umum', '', '2021-06-22', '2021-06-22'),
(6, 'Merasa cemas akibat perpisahan dengan seseorang yang begitu dekat', '', '2021-06-22', '2021-06-22'),
(7, 'Gejala otonomik (tremor, palpitasi, mulut kering, sakit perut)', '', '2021-06-22', '2021-06-22'),
(8, 'Rasa takut di perhatikan oleh orang lain, dipermalukan, diperhina dalam situasi sosial', '', '2021-06-22', '2021-06-22'),
(9, 'takut akan objek/keadaan tertentu', '', '2021-06-22', '2021-06-22'),
(10, 'Perasaan tercekik, rasa takut mati, rasa takut menjadi gila, perasaan tidak riil ', '', '2021-06-22', '2021-06-22'),
(11, 'Gejala berlangsung selama 6 bulan ', '', '2021-06-22', '2021-06-22'),
(12, 'Suasana perasaan yang depresif, kehilangan minat dan kesenangan ', '', '2021-06-22', '2021-06-22'),
(13, 'Ketegangan psikis tanpa gejala otonomik', '', '2021-06-22', '2021-06-22'),
(14, 'Pikiran jelek yang berulang, memalukan bersifat mengganggu', '', '2021-06-22', '2021-06-22'),
(15, 'Ketidakmampuan mengambil keputusan ', '', '2021-06-22', '2021-06-22'),
(16, 'Pengalaman traumatik yang luar biasa', '', '2021-06-22', '2021-06-22'),
(17, 'Menarik diri dari situasi lingkungan ', '', '2021-06-22', '2021-06-22'),
(18, 'Gejala berlangsung dalam hitungan hari', '', '2021-06-22', '2021-06-22'),
(19, 'Gejala berlangsung lebih dari 1 bulan', '', '2021-06-22', '2021-06-22'),
(20, 'kecenderungan berperilaku dramatik dan melakukan kekerasan', '', '2021-06-22', '2021-06-22'),
(21, 'terdapat peristiwa/perubahan penting dalam kehidupan', '', '2021-06-22', '2021-06-22'),
(22, 'tindakan ritual berulang-ulang melebihi kenormalan (misal mencuci tangan berulang dll)', '', '2021-06-22', '2021-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `nomor_hp` varchar(30) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `umur`, `jenis_kelamin`, `nomor_hp`, `created_at`, `updated_at`) VALUES
(1, 'panjul', 12, 'Laki-laki', '0821987322345', '2021-07-27', '2021-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `solusi` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama`, `keterangan`, `solusi`, `created_at`, `updated_at`) VALUES
(1, 'Gangguan cemas akibat penyakit umum', 'Gangguan cemas akibat penyakit umum adalah salah satu jenis gangguan kecemasan yang disebabkan oleh penyakit-penyakit tertentu yang menyebabkan ketakutan pada seseorang', 'Relaksasi atau dzikir, mengatur/mengendalikan pernafasan, menuliskan pikiran dan perasaan yang mengganggu, bercerita kepada orang terdekat, menghindari berita atau informasi negatif tentang penyakit/kejadian yang dialami, berkonsultasi kepada profesional/psikolog bila keluhan berlanjut', '2021-05-31', '2021-05-31'),
(2, 'Gangguan cemas akibat zat', 'Gangguan cemas akibat zat adalah gangguan cemas yang disebabkan oleh konsumsi obat maupun zat yang tidak sesuai dengan dosis yang telah ditentukan', 'Relaksasi atau dzikir, mengatur/mengendalikan pernafasan, menuliskan pikiran dan perasaan yang mengganggu, bercerita kepada orang terdekat, menghindari/mengurangi zat/obat pemicu kecemasan, berkonsultasi kepada profesional/psikolog bila keluhan berlanjut', '2021-06-22', '2021-06-22'),
(3, 'Gangguan panik dengan agorafobia ', 'Gangguan Panik (Panic Disorder) adalah satu perasaan serangan cemas mendadak dan terus menerus disertai perasaan perasaan akan datangnya bahaya / bencana, ditandai dengan ketakutan yang hebat secara tiba-tiba. Kemudian ditandai juga dengan ketidakmampuan berat bagi seseorang karena membuat seseorang tidak mampu berfungsi dengan baik ditempat kerja maupun dilingkungan sosial diluar rumah. ', 'Relaksasi atau dzikir, mengatur/mengendalikan pernafasan, menuliskan pikiran dan perasaan yang mengganggu, bercerita kepada orang terdekat, Latihan secara bertahap menghadapi/melawan obyek yang ditakuti, mengatur pola tidur, berkonsultasi kepada profesional/psikolog bila keluhan berlanjut', '2021-06-22', '2021-06-22'),
(4, 'Gangguan panik tanpa agorafobia ', 'Gangguan Panik (Panic Disorder) adalah satu perasaan serangan cemas mendadak dan terus menerus disertai perasaan perasaan akan datangnya bahaya / bencana, ditandai dengan ketakutan yang hebat secara tiba-tiba', 'Relaksasi atau dzikir, mengatur/mengendalikan pernafasan, menuliskan pikiran dan perasaan yang mengganggu, bercerita kepada orang terdekat, Latihan secara bertahap menghadapi/melawan obyek yang ditakuti, mengatur pola tidur, berkonsultasi kepada profesional/psikolog bila keluhan berlanjut', '2021-06-22', '2021-06-22'),
(5, 'Gangguan cemas perpisahan ', 'Gangguan cemas akibat perpisahan terjadi ketika seseorang ditinggalkan oleh seseorang yang begitu dekat sejak kecil ataupun dalam jangka cukup lama', 'Relaksasi atau dzikir, mengatur/mengendalikan pernafasan, menuliskan pikiran dan perasaan yang mengganggu, bercerita kepada orang terdekat, melawan/menantang pikiran tersebut dengan argumentasi yang melemahkan, Latihan secara bertahap menghadapi/melawan obyek yang ditakuti, berkonsultasi kepada profesional/psikolog bila keluhan berlanjut', '2021-06-22', '2021-06-22'),
(6, 'Agorafobia', 'Agoraphobia merupakan jenis Fobia yang menyebabkan ketidakmampuan berat bagi pasien karena membuat seseorang tidak mampu berfungsi dengan baik ditempat kerja maupun dilingkungan sosial diluar rumah.', 'Relaksasi atau dzikir, mengatur/mengendalikan pernafasan, latihan secara bertahap menghadapi/melawan obyek yang ditakuti, berkonsultasi kepada profesional/psikolog bila keluhan berlanjut', '2021-06-22', '2021-06-22'),
(7, 'Fobia sosial', 'Fobia sosial adalah salah satu jenis gangguan kecemasan berupa rasa takut atau cemas yang luar biasa terhadap situasi sosial atau berinteraksi dengan orang lain, baik sebelum, sesudah maupun selama dalam situasi tersebut', 'Relaksasi atau dzikir, mengatur/mengendalikan pernafasan, latihan secara bertahap menghadapi/melawan obyek yang ditakuti, berkonsultasi kepada profesional/psikolog bila keluhan berlanjut', '2021-06-22', '2021-06-22'),
(8, 'Fobia khas/spesifik', 'Fobia khas/spesifik adalah satu jenis gangguan kecemasan berupa rasa takut atau cemas yang luar biasa terhadap suatu objek yang lebih spesifik. Seperti takut terhadap ular, takut terhadap buah tertentum takut terhadap ketinggian dan lain sebagainya', 'Relaksasi atau dzikir, mengatur/mengendalikan pernafasan, latihan secara bertahap menghadapi/melawan obyek yang ditakuti, berkonsultasi kepada profesional/psikolog bila keluhan berlanjut', '2021-06-22', '2021-06-22'),
(9, 'Gangguan anxietas menyeluruh', 'GAD (generalized anxiety disorder) adalah salah satu jenis gangguan kecemasan yang ditandai dengan perasaan cemas yang umum dan bahwa sesuatu yang buruk akan terjadi dan keadaan peningkatan keterangsangan tubuh.', 'Relaksasi atau dzikir, mengatur/mengendalikan pernafasan, menuliskan pikiran dan perasaan yang mengganggu, bercerita kepada orang terdekat, bercerita kepada orang terdekat, mengatur pola tidur, berkonsultasi kepada profesional/psikolog bila keluhan berlanjut', '2021-06-22', '2021-06-22'),
(10, 'Gangguan anxietas dan depresif', 'Gangguan anxietas dan depresif adalah salah satu jenis gangguan kecemasan berupa gangguan kecemasan yang ditandai dengan perasaan cemas yang umum dan bahwa sesuatu yang buruk akan terjadi dan keadaan peningkatan keterangsangan tubuh. Tidak hanya itu, seseorang juga akan merasa suasana perasaan yang depresif, kehilangan minat dan kesenangan bahkan merasa mudah lelah', 'Relaksasi atau dzikir, mengatur/mengendalikan pernafasan, menuliskan pikiran dan perasaan yang mengganggu, bercerita kepada orang terdekat, bercerita kepada orang terdekat, mengatur pola tidur, berkonsultasi kepada profesional/psikolog bila keluhan berlanjut', '2021-06-22', '2021-06-22'),
(11, 'Predominan pikiran obsesional', 'Gangguan predominan pikrian obsesional adalah salah satu jenis gangguan kecemasan berupa gangguan kecemasan yang ditandai dengan pikiran dan  kondisi di mana penderitanya memiliki kepribadian yang sangat perfeksionis dan terobsesi dengan kesempurnaan dalam semua aspek hidupnya.', 'Relaksasi atau dzikir, Mengatur/mengendalikan pernafasan, Menuliskan pikiran dan perasaan yang mengganggu, Melawan/menantang pikiran tersebut dengan argumentasi yang melemahkan, Bercerita kepada orang terdeka, berkonsultasi  kepada profesional/psikolog bila keluhan berlanjut', '2021-06-22', '2021-06-22'),
(12, 'Predominan tindakan kompulsif', 'Predominan tindakan kompulsif adalah salah satu jenis gangguan kecemasan berupa gangguan kecemasan yang ditandai dengan dilakukannya tindakan-tindakan dengan berulang melebihi kenormalan, seperti mencuci tangan terus menerus.', 'Relaksasi atau dzikir, Mengatur/mengendalikan pernafasan, Menuliskan pikiran dan perasaan yang mengganggu, Melawan/menantang pikiran tersebut dengan argumentasi yang melemahkan, Bercerita kepada orang terdeka, latihan mengurangi/menunda tindakan ritual, berkonsultasi  kepada profesional/psikolog bila keluhan berlanjut', '2021-06-22', '2021-06-22'),
(13, 'Campuran tindakan dan pikiran obsesional', 'Gangguan campuran tindakan dan pikiran obsesional adalah salah satu jenis gangguan kecemasan berupa gangguan yang menggabungkan pikiran dan tindakan yang menuntut untuk perfeksionis dan melakukan tindakan-tindakan secara berulang melebihi kenormalan', 'Relaksasi atau dzikir, Mengatur/mengendalikan pernafasan, Menuliskan pikiran dan perasaan yang mengganggu, Melawan/menantang pikiran tersebut dengan argumentasi yang melemahkan, Bercerita kepada orang terdeka, latihan mengurangi/menunda tindakan ritual, berkonsultasi  kepada profesional/psikolog bila keluhan berlanjut', '2021-06-22', '2021-06-22'),
(14, 'Gangguan stres akut', 'Gangguan stress akut merupakan jenis gangguan yang di akibatkan oleh pengalaman traumatik yang luar biasa, seseorang yang mengidap gangguan ini akan menarik diri dari lingkungan dan sulit untuk menyesuaikan diri', 'Relaksasi atau dzikir, mengatur/mengendalikan pernafasan, menuliskan pikiran dan perasaan yang mengganggu, bercerita kepada orang terdekat, menghindari berita atau informasi negatif tentang penyakit/kejadian yang dialami, berkonsultasi kepada profesional/psikolog bila keluhan berlanjut', '2021-06-22', '2021-06-22'),
(15, 'Gangguan pasca trauma', 'Gangguan stress pasca trauma merupakan jenis gangguan kecemasan yang di akibatkan oleh pengalaman traumatik yang luar biasa dan gejala berlangsung lebih dari 1 bulan', 'Berkonsultasi kepada profesional/psikolog bila keluhan berlanjut', '2021-06-22', '2021-06-22'),
(16, 'Gangguan penyesuaian ', 'Gangguan penyesuaian merupakan jenis gangguan kecemasan yang memiliki kecenderungan berperilaku dramatik dan melakukan kekerasan. Gejala yang dirasakan biasanya 1 sampai 6 bulan ', 'Relaksasi atau dzikir, Mengatur/mengendalikan pernafasan, Menuliskan pikiran dan perasaan yang mengganggu, bercerita kepada orang terdekat, berkonsultasi kepada profesional/psikolog bila keluhan berlanjut', '2021-06-22', '2021-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `id` int(11) NOT NULL,
  `kunci` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pasien_id` int(11) NOT NULL,
  `tanggal_konsultasi` date NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `solusi` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `user_id`, `pasien_id`, `tanggal_konsultasi`, `diagnosis`, `solusi`, `created_at`, `updated_at`) VALUES
(9, 3, 1, '2021-07-27', 'Gangguan cemas akibat penyakit umum', 'Relaksasi atau dzikir, mengatur/mengendalikan pernafasan, menuliskan pikiran dan perasaan yang mengganggu, bercerita kepada orang terdekat, menghindari berita atau informasi negatif tentang penyakit/kejadian yang dialami, berkonsultasi kepada profesional/', '2021-07-27 07:29:07', '2021-07-27 07:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-05-26', '2021-05-26'),
(2, 'member', '2021-05-26', '2021-05-26'),
(3, 'pakar', '2021-07-08', '2021-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `login_attemp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`, `email`, `role_id`, `is_active`, `created_at`, `updated_at`, `login_attemp`) VALUES
(1, 'admin', '$2y$10$O9MjxWje6GNrSuk1cD2i6.6bnPnpcv9oSLhZHTpmmJByK03Up39BG', 'Admin Pusat', 'admin@email.com', 1, 1, '2021-05-26', '2021-05-26', '2021-07-27 07:29:31'),
(2, 'pakar', '$2y$10$O9MjxWje6GNrSuk1cD2i6.6bnPnpcv9oSLhZHTpmmJByK03Up39BG', 'Pakar Pusat', 'pakar@email.com', 3, 1, '2021-07-08', '2021-07-08', '2021-07-25 14:45:49'),
(3, 'insan', '$2y$10$umjH7ZTUWQlXf5zBGyhoYeSt2g4mlc8HzKPRCG8qPl3D2cbOh1oJ.', 'insan kamil', 'insankamil002@gmail.com', 2, 1, '2021-07-09', '2021-07-09', '2021-07-27 07:28:36'),
(4, 'cici', '$2y$10$cHqyTNnJv3s3EYefNVKkc.MAUmyhWyOAI97WzbfcHTb61Me.WWvIG', 'Fitriana Puspa', 'insankamil.uad@gmail.com', 2, 1, '2021-07-09', '2021-07-09', '2021-07-25 14:45:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certainty`
--
ALTER TABLE `certainty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`) USING BTREE,
  ADD KEY `pasien_id` (`pasien_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `certainty`
--
ALTER TABLE `certainty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
