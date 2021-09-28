-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Sep 2021 pada 03.54
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_about`, `judul`, `deskripsi`) VALUES
(1, 'Sejarah Toko Sepeda Riski ', '<p>Toko Sepeda Maju Bersama&nbsp;Baru ini berdiri sejak tahun 1983. pada awalnya usaha toko sepeda ini merupakan usaha bersama, Awal mula berdirinya toko sepeda ini hanya berupa kios kecil dengan modal awal Rp. 800.000,00. Dengan modal Rp. 800.000,00 &nbsp;menjalankan usaha ini dan mendapatkan keuntungan yang meningkat setiap tahunnya hingga mengalami kemajuan.&nbsp;</p>\r\n\r\n<p>Kemudian pada tahun 1996 Toko Sepeda Maju Bersama membeli&nbsp;sebuah toko, toko inilah yang saat ini menjadi tempat usaha Toko Sepeda Maju Bersama&nbsp;yang dijalankan oleh Keluarga Toko Sepeda Maju Bersama&nbsp;tersebut. Selama 32 tahun menjalankan usaha Toko Sepeda Maju Bersama&nbsp;ini.</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `slug`, `foto`, `penulis`, `tanggal`, `deskripsi`) VALUES
(9, 'Contador Gowes 1.600 Km dari Madrid Ke Milan', 'Contador-Gowes-1.600-Km-dari-Madrid-Ke-Milan', '21189_berita1.jpeg', 'Rizki Mahendra', '2021-09-23 12:17:00', '<p>Alberto Contador memenuhi janjinya gowes sekitar 1.600 kilometer. Dari Kota Madrid, ibu kota Spanyol, menuju Milan di Italia. Gowes ini merupakan perayaan atas keberhasilan timnya, Eolo-Kometa meraih kemenangan etape di Giro d&#39;Italia.&nbsp; Eolo-Kometa adalah tim yang dikelola Contador bersama rekannya, Ivan Basso. Walau baru terbentuk pada 2018 lalu, tim ini berhasil mendapatkan lisensi UCI ProTeam pada 2021. Bahkan mereka berhasil tampil di Giro d&#39;Italia lewat jalur undangan.</p>\r\n'),
(10, 'Sambut PON Papua dengan Tour de pordt Numbay', 'Sambut-PON-Papua-dengan-Tour-de-pordt-Numbay', '18956_pon papua.jpeg', 'Haikal Habri', '2021-09-23 12:17:00', '<p>Semarak Pekan Olahraga Nasional (PON) XX Papua sudah terasa di Kota Jayapura. Pemerintah Kota (Pemkot) Jayapura menggelar event gowes bertajuk Tour de Port Numbay, akhir pekan lalu. Ajang ini berlangsung untuk menyambut multievent empat tahunan tersebut. Tour de Port Numbay berlangsung Sabtu (11/9) lalu. Event gowes ini diikuti 400&nbsp;<em>cyclist</em>&nbsp;dari Kota Jayapura dan sekitarnya. Mereka berangkat dari Jembatan Merah Youtefa. Kemudian melaju ke Skouw City lalu kembali ke Jembatan Merah Youtefa.</p>\r\n'),
(11, 'Bersepeda Mulai Di Gandrungi Anak Muda', 'Bersepeda-Mulai-Di-Gandrungi-Anak-Muda', '29722_berita3.jpg', 'Rizki Mahendra', '2021-09-23 12:17:00', '<p>Bersepeda tampaknya bukan sekadar hobi dan olahraga di kalangan anak muda. Menurut survei komunitas Bike2Work (B2W) Indonesia pada Agustus kemarin, mereka juga memanfaatkan sepeda sebagai alat transportasi, Dalam rilis resminya, B2W Indonesia mengatakan jika survei ini diikuti 365 responden. Mayoritas berusia 25 tahun. Dari jumlah itu, terdapat 61 persen yang menggunakan sepeda sebagai moda transportasi. Setidaknya tiga kali atau lebih dalam sepekan.</p>\r\n'),
(12, 'Taklukan 3 Gunung Demi Pulang KeDenpasar', 'Taklukan-3-Gunung-Demi-Pulang-KeDenpasar', '24405_berita2.jpg', 'Rizki Mahendra', '2021-09-23 12:16:00', '<p>Kevin Dani Maulana menantang dirinya sendiri dengan bersepeda dari Solo ke Denpasar, Bali. Jarak tempuhnya sekitar 718 kilometer. Tajuknya &quot;gunung ke gunung&quot;. Kevin nanjak di Gunung Lawu, Gunung Bromo, dan Gunung Ijen. Total evelasinya 10.000 meter.&nbsp; Ide tersebut tercetus dari satu setengah bulan yang lalu. Awalnya,&nbsp;<em>member</em>&nbsp;Kelapa Gading Bikers (KGB) Racing ini berencana pulang ke rumahnya di Denpasar. Kemudian Kevin memiliki gagasan untuk membuat mudiknya ini menjadi sesuatu hal yang seru. Ia putuskan untuk gowes.&quot;Datang ke Solo buat latihan bareng. Akan tetapi, karena jadwal event diundur, kami jadinya hanya latihan biasa. Lalu terpikir ide untuk pulang sekaligus menjadi tantangan untuk diri sendiri,&quot; kata pemuda yang berulang tahun tiap 28 Juni tersebut.&nbsp; Kevin memang suka tanjakan. Ia tergabung dengan KGB Racing sejak 2019. Dari rute yang dipilih untuk pulang ke Bali, hanya jalur Cemoro Sewu yang sudah dilalui. Kevin aka</p>\r\n'),
(13, 'Bandung PPKM Darurat, Warga Wara wiri Bersepeda Di Jalan', 'Bandung-PPKM-Darurat,-Warga-Wara-wiri-Bersepeda-Di-Jalan', '30695_bandung.jpeg', 'admin', '2021-09-23 12:16:00', '<p>Bandung - Akhir pekan kerap dimanfaatkan warga untuk berolahraga. Meski Bandung tengah terapkan PPKM Darurat, tak sedikit warga yang masih asyik bersepeda di Kota Kembang<br />\r\nBaca artikel detiknews, &quot;Bandung PPKM Darurat, Warga Wara-wiri Bersepeda di Akhir Pekan&quot; Sejumlah warga tampak bersepeda di kawasan Bandung, Jawa Barat, Minggu (4/7/2021).<br />\r\n<br />\r\n&nbsp;</p>\r\n'),
(14, 'Serba-serbi 3 Juni Diperingati Jadi Hari Sepeda Se Dunia', 'Serba-serbi-3-Juni-Diperingati-Jadi-Hari-Sepeda-Se-Dunia', '8084_juni.jpeg', 'admin', '2021-09-23 12:16:00', '<p>Jakarta - Perserikatan Bangsa-Bangsa (PBB) menetapkan setiap tanggal 3 Juni sebagai Hari Sepeda Sedunia atau World Bicycle Day. Latar belakang lingkungan dan dampak positif dari bersepeda jadi pendorong ditetapkannya hari ini sejak 2018 lalu.<br />\r\nSepeda menjadi sarana transportasi yang paling ramah lingkungan. Bahkan belakangan budaya bersepeda sendiri jadi tren lagi sejak pandemi COVID-19 melanda seluruh dunia.</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `tanggal` date NOT NULL DEFAULT '0000-00-00',
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `nama`, `email`, `nohp`, `tanggal`, `deskripsi`) VALUES
(3, 'Rizki Mahendra', 'riskimhndr170@gmail.com', '081275654823', '2021-09-18', '<p>Kami membuat alamat contact kami bertujuan untuk menampung kekurangan toko yang kami punya, agar bisa melakukan evaluasi</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `gambar`, `deskripsi`) VALUES
(4, 'Sepeda Wimcycle', '23391_wimcycle.jpg', '<p>MTB FALCON</p>\r\n'),
(5, ' Sepeda Polygon', '12563_polygon.png', '<p>XC, SPORT</p>\r\n'),
(6, 'Sepeda Atlantis', '32332_atlantis.jpg', '<p>Harley 660</p>\r\n'),
(7, 'Sepeda Aviator', '7829_aviator.png', '<p>AT 2689 XT MTB</p>\r\n'),
(8, 'Sepeda Odessy', '7082_oddsey.png', '<p>ATXS 650</p>\r\n'),
(9, 'Sepeda United', '30641_united.png', '<p>TMS 3070</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Rizki Mahendra', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hp` varchar(100) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `hp`, `pesan`) VALUES
(1, 'Fikri Haikal Habri', 'riskimhndr170@gmail.com', '081275654823', 'sasasasas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `gambar`, `deskripsi`) VALUES
(7, 'Wimcycle', '25107_wimcycle.jpg', '<p>Sepeda Wincycle Kelauran Terbaru</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellspacing="0" style="width:100%">\r\n	<tbody>\r\n	</tbody>\r\n</table>\r\n'),
(8, 'Polygon', '29879_polygon.jpg', '<p>Sepeda Polygon Keluaran Terbaru</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(9, 'United', '16717_united.jpg', '<p>Sepeda United Keluaran Terbaru</p>\r\n'),
(10, 'Pasific', '6762_pasific.jpg', '<p>Sepeda Pasific Keluaran Terbaru</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `jumlah`, `harga`) VALUES
(2, 'Daia', 4, 5000),
(5, 'Pepsodent', 7, 3000),
(6, 'sabun', 8, 6000),
(7, 'Minyak Makan', 2, 7000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_chart`
--

CREATE TABLE `tb_chart` (
  `id_chart` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_chart`
--

INSERT INTO `tb_chart` (`id_chart`, `id_barang`, `jumlah`, `total_harga`) VALUES
(37, 2, 3, 15000),
(38, 5, 3, 9000),
(39, 6, 2, 12000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_chart`
--
ALTER TABLE `tb_chart`
  ADD PRIMARY KEY (`id_chart`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_chart`
--
ALTER TABLE `tb_chart`
  MODIFY `id_chart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
