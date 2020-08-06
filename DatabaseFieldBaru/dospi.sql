-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Agu 2020 pada 06.41
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dospi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_hewan`
--

CREATE TABLE `data_hewan` (
  `id_datahewan` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ukuran_hewan` varchar(50) NOT NULL,
  `berat_hewan` int(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `warna_hewan` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_hewan` varchar(50) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `rt_rw` varchar(20) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kode_pos` int(15) NOT NULL,
  `id_gambar` int(11) NOT NULL,
  `tanggal_tambah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_hewan`
--

INSERT INTO `data_hewan` (`id_datahewan`, `id_kategori`, `id_jenis`, `id_user`, `ukuran_hewan`, `berat_hewan`, `jenis_kelamin`, `id_makanan`, `warna_hewan`, `deskripsi`, `harga_hewan`, `nama_pemilik`, `rt_rw`, `kabupaten`, `kode_pos`, `id_gambar`, `tanggal_tambah`) VALUES
(1, 1, 1, 0, 'panjang = 3m, lebar= 80cm, tinggi= 2m', 500, '', 1, 'Coklat Tua', '', 'Rp.150.000.000', 'Pak Slamet', 'rt.03/rw.05 Dongko', 'Trenggalek', 66311, 1, '2020-08-06'),
(2, 2, 2, 0, 'panjang = 3m, lebar= 80cm, tinggi= 2m', 200, 'Jantan', 2, 'Coklat', 'Sapi adalah hewan gemuk', 'Rp.50.000.000', 'Pak Gito', '1/1/Karangploso/mala', 'malang', 66345, 2, '2020-08-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_hewan`
--

CREATE TABLE `gambar_hewan` (
  `id_gambar` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar_hewan`
--

INSERT INTO `gambar_hewan` (`id_gambar`, `gambar`) VALUES
(1, 'file_1596683188'),
(2, 'file_1596683188'),
(3, 'file_1596683188'),
(4, 'file_1596683188'),
(5, 'file_1596683188'),
(6, 'properties-111.jpg'),
(7, 'properties-24.png'),
(8, 'properties-44.jpg'),
(9, 'properties-411.jpg'),
(10, 'Sapi_Limusin_Coklat.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_layanan`
--

CREATE TABLE `gambar_layanan` (
  `id_gambar_layanan` int(11) NOT NULL,
  `gambar_layanan` text NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `image_slider`
--

CREATE TABLE `image_slider` (
  `id_imageslider` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `konten` varchar(1000) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_hewan`
--

CREATE TABLE `jenis_hewan` (
  `id_jenis` int(11) NOT NULL,
  `jenis_hewan` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_hewan`
--

INSERT INTO `jenis_hewan` (`id_jenis`, `jenis_hewan`, `deskripsi`, `id_kategori`, `foto`) VALUES
(1, 'Sapi Limusin', '<p>Sapi Limusin adalah keturunan sapi Zebu atau Boss Indiscuss. Aslinya berasal dari India kemudia masuk ke Amerika pada tahun 1849 berkembang pesat di Amerika, Di AS, sapi Brahman dikembangkan untuk diseleksi dan ditingkatkan mutu genetiknya.[1] Setelah berhasil, jenis sapi ini diekspor ke berbagai negara. Dari AS, sapi Brahman menyebar ke Australia. Di Amerika terbentuk perkumpulan pembibit American Brahman Breeder Association, sedangkan di Australia terbentuk Australian Brahman Breeder Association.[2] Sapi Brahman masuk ke Indonesia sejak zaman penjajahan Belanda.</p>\r\n                                                <p>Ciri khas sapi Brahman adalah berpunuk besar dan berkulit longgar, gelambir dibawah leher sampai perut lebar dengan banyak lipatan-lipatan. Telinga panjang menggantung dan berujung runcing. Sapi ini adalah tipe sapi potong terbaik untuk dikembangkan.</p>', 0, 'properties-43.jpg'),
(2, 'Sapi Brahman', '', 0, 'Sapi_Limusin_Coklat.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_hewan`
--

CREATE TABLE `kategori_hewan` (
  `id_kategori` int(11) NOT NULL,
  `nama_hewan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_hewan`
--

INSERT INTO `kategori_hewan` (`id_kategori`, `nama_hewan`) VALUES
(1, 'Sapi'),
(2, 'Sapi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `jenis_transaksi` varchar(100) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `metode_bayar` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `pemilik_rekening` varchar(100) NOT NULL,
  `jumlah_bayar` varchar(50) NOT NULL,
  `bukti_bayar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_bayar`
--

CREATE TABLE `konfirmasi_bayar` (
  `id_konfirm_bayar` int(11) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `jenis_transaksi` varchar(100) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `metode_bayar` varchar(200) NOT NULL,
  `bank` varchar(200) NOT NULL,
  `pemilik_rekening` varchar(200) NOT NULL,
  `bukti bayar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak_dospi`
--

CREATE TABLE `kontak_dospi` (
  `id_kontak` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `gambar` text NOT NULL,
  `icon` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_kami`
--

CREATE TABLE `layanan_kami` (
  `id_layanan` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` text NOT NULL,
  `id_gambar_layanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `layanan_kami`
--

INSERT INTO `layanan_kami` (`id_layanan`, `judul`, `konten`, `id_gambar_layanan`) VALUES
(1, 'Layanan kamiii', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tata_cara`
--

CREATE TABLE `tata_cara` (
  `id_tatacara` int(11) NOT NULL,
  `judulpembelian` varchar(200) NOT NULL,
  `pembelian` text NOT NULL,
  `judulpenjualan` varchar(1000) NOT NULL,
  `penjualan` text NOT NULL,
  `judulsyarat` varchar(200) NOT NULL,
  `syaratketentuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tata_cara`
--

INSERT INTO `tata_cara` (`id_tatacara`, `judulpembelian`, `pembelian`, `judulpenjualan`, `penjualan`, `judulsyarat`, `syaratketentuan`) VALUES
(1, 'Cara Pembelian', 'Cara pembelian/ order barang di DOSPI  adalah sebagai berikut :</p>\r\n                                <p>1.  Lakukan login/registrasi sebagai pembeli,\r\n                                <br>2. Masuk ke bagian Shop,\r\n                                <br>3. Cari hewan yang ingin di beli,\r\n                                <br>4. Klik gambar yang tampil dan klik DETAIL,\r\n                                <br>5. Lalu klik beli sekarang,\r\n                                <br>6. Lalu pembeli akan diarahkan ke bagian Checkout,\r\n                                <br>7. Untuk selanjutnya, pembeli bisa mengklik Pesan untuk melanjutkan pesanan dan Klik cancel jika ingin membatalkan pembelian\r\n                                <br>8. Ketika pembeli mengklik pesan maka pembeli akan diarahkan ke halaman pembayaran,\r\n                                <br>9. Setelah selesai melakukan pembayaran,pembeli akan di arahkan ke halaman pemesanan,\r\n                                <br>9. Dihalaman pemesanan klik konfirmasi pembayaran, dan mengisikan konfirmasi pembayaran dan juga bukti pembayaran. kemudian klik kirim\r\n                                <br>10. Selanjutnya akan kembali ke halaman pemesanan dengan status sudah terbayar, klik deal untuk melanjutkan pembelian dan cancel untuk mengcancel pembelian\r\n                                <br>11. Lalu selanjutnya kehalaman Faktur, Klik detail untuk melihat detail hewan yang telah dibeli dan Klik selesai untuk mengakhiri pembelian.\r\n                                </p>\r\n                                <p>Semisal pembeli menyatakan deal akan hewan yang akan dibeli, kita sebagai admin akan mengirim DP awal yang telah di transfer di rekening DOSPI kepada si penjual. Semisal pembeli tidak cocok dengan hewan yang akan dibeli pembeli mempunyai hak untuk mengcancel pembelian tersebut Dan Admin akan mengembalikan Uang Dp yang pernah dikirim oleh pembeli ke rekening Dospi', 'Cara Penjualan', 'Cara penjualan hewan ternak di DOSPI:</p>\r\n                        <p>1. Lakukan login/registrasi sebagai penjual.\r\n                            <br>2. Masuk ke menu jual ternakmu disini.\r\n                            <br>3. Pilih gambar hewan yang akan dijual dan menuliskan deskripsi hewan yang terdiri dari :\r\n                        </p>\r\n                        <p>-Harga,\r\n                           <br>-Nama/jenis hewan,\r\n                           <br>-Jenis kelamin hewan,\r\n                           <br>-Panjang lebar dan tinggi hewan,\r\n                           <br>-Berat hewan,\r\n                           <br>-Jenis makanan yang dimakan hewan (combor/tidak),\r\n                           <br>-Warna hewan,\r\n                           <br>-Menyertakan 5 foto sapi/kambing yang akan di jual (2 Foto Depan Belakang Sapi/Kambing, 2 Foto Samping Kanan Samping Kiri Sapi/Kambing, 1 Foto Makanan Ternak Yang Biasa Hewan Itu Makan).\r\n                        </p>\r\n                        <p>4. Menyertakan alamat lengkap tentang keberadaan sapi/kambing ( Disediakan maps ).\r\n                        <br>5. Setelah data hewan sudah terisi klik jual ternakmu disini, dan anda bisa melihat Daftar Hewan yang anda jual  di halaman Produk saya dan anda juga bisa melihat hewan anda di shop Dospi.', 'Syarat & Ketentuan', 'Adapun syarat dan ketentuan terkait dengan pembeliannya adalah sebagai berikut :\r\n                        <li> Apabila harga sapi lebih dari 25 juta pembeli harus mengirimkan 27%  Dari total harga sebagai Dp</li> \r\n                        <li> Apabila harga sapi dibawah 25 Juta pembeli harus mengirimkan 21%  dari total harga sebagai Dp</li> \r\n                        <li> Apabila harga kambing diatas 5 juta maka pembeli harus mengirim dp 16% dari total harga sebagai Dp</li>\r\n                        <li> Apabila harga kambing dibawah 5 juta maka pembeli harus mengirim dp 10.5% dari total harga sebagai Dp</li>\r\n                        <li> Untuk pengiriman hewan tersebut menjadi kewajiban dari pembeli</li>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bank`
--

CREATE TABLE `tb_bank` (
  `id_bank` int(11) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `nama_rekening` varchar(100) NOT NULL,
  `no_rekening` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_faq`
--

CREATE TABLE `tb_faq` (
  `id_faq` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `soal` varchar(1000) NOT NULL,
  `jawaban` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_index`
--

CREATE TABLE `tb_index` (
  `id_index` int(11) NOT NULL,
  `logo` text NOT NULL,
  `id_imageslider` int(11) NOT NULL,
  `id_datahewan` int(11) NOT NULL,
  `id_tentang` int(11) NOT NULL,
  `id_kontak` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `id_rating` int(11) NOT NULL,
  `id_faq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_index`
--

INSERT INTO `tb_index` (`id_index`, `logo`, `id_imageslider`, `id_datahewan`, `id_tentang`, `id_kontak`, `id_layanan`, `id_rating`, `id_faq`) VALUES
(1, '', 0, 0, 3, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_datahewan` int(11) NOT NULL,
  `isi_komentar` text NOT NULL,
  `isi_balasan` text NOT NULL,
  `waktu` time(6) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `id_user`, `id_datahewan`, `isi_komentar`, `isi_balasan`, `waktu`, `tanggal`, `status`) VALUES
(20, 0, 1, 'coba1', 'huah', '00:00:00.000000', '0000-00-00', ''),
(21, 0, 12, 'sayang', '', '00:00:00.000000', '0000-00-00', ''),
(22, 0, 0, 'gggggggggggggggggggggggg', '', '00:00:00.000000', '0000-00-00', ''),
(23, 0, 12, 'hai', '', '00:00:00.000000', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_makanan`
--

CREATE TABLE `tb_makanan` (
  `id_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_makanan`
--

INSERT INTO `tb_makanan` (`id_makanan`, `nama_makanan`) VALUES
(1, 'alami'),
(2, 'alami'),
(3, 'alami'),
(4, 'alami'),
(5, 'alami'),
(6, 'alami'),
(7, 'combor'),
(8, 'combor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_datahewan` int(11) NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `no_order` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_beli` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_datahewan` int(11) NOT NULL,
  `isi_pesan` text NOT NULL,
  `waktu` time NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rating`
--

CREATE TABLE `tb_rating` (
  `id_rating` int(11) NOT NULL,
  `jumlah_rating` text NOT NULL,
  `komentar` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rating`
--

INSERT INTO `tb_rating` (`id_rating`, `jumlah_rating`, `komentar`, `id_user`) VALUES
(5, '', 'sapi baguss', 0),
(6, '', 'kemengg', 0),
(7, '', 'baguss', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tentang`
--

CREATE TABLE `tb_tentang` (
  `id_tentang` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tentang`
--

INSERT INTO `tb_tentang` (`id_tentang`, `judul`, `konten`, `gambar`) VALUES
(3, 'Selamat Datang di Dospi', 'Dospi.Com Adalah Sebuah Website Yang Menerapkan Konsep Bisnis,dan Berjalan Di Bidang Penjualan Hewan,terutama Sapi Dan Kambing', '24.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `foto_profil` varchar(300) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `foto_ktp` varchar(300) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `foto_profil`, `username`, `password`, `email`, `jenis_kelamin`, `no_tlp`, `foto_ktp`, `status`) VALUES
(86, 'default.jpg', 'Wahyu  Rahmadani', 12345, 'bagongchanel75@gmail.com', 'laki-laki', '085233170475', 'file_1584361662.jpeg', '2'),
(93, 'default.jpg', 'amelia', 123456, 'ameliarizky738@gmail.com', 'perempuan', '082234566543', 'file_1596419004.jpg', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_hewan`
--
ALTER TABLE `data_hewan`
  ADD PRIMARY KEY (`id_datahewan`);

--
-- Indeks untuk tabel `gambar_hewan`
--
ALTER TABLE `gambar_hewan`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `gambar_layanan`
--
ALTER TABLE `gambar_layanan`
  ADD PRIMARY KEY (`id_gambar_layanan`);

--
-- Indeks untuk tabel `image_slider`
--
ALTER TABLE `image_slider`
  ADD PRIMARY KEY (`id_imageslider`);

--
-- Indeks untuk tabel `jenis_hewan`
--
ALTER TABLE `jenis_hewan`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `kategori_hewan`
--
ALTER TABLE `kategori_hewan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konfirmasi_bayar`
--
ALTER TABLE `konfirmasi_bayar`
  ADD PRIMARY KEY (`id_konfirm_bayar`);

--
-- Indeks untuk tabel `kontak_dospi`
--
ALTER TABLE `kontak_dospi`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `layanan_kami`
--
ALTER TABLE `layanan_kami`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indeks untuk tabel `tata_cara`
--
ALTER TABLE `tata_cara`
  ADD PRIMARY KEY (`id_tatacara`);

--
-- Indeks untuk tabel `tb_bank`
--
ALTER TABLE `tb_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indeks untuk tabel `tb_faq`
--
ALTER TABLE `tb_faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indeks untuk tabel `tb_index`
--
ALTER TABLE `tb_index`
  ADD PRIMARY KEY (`id_index`);

--
-- Indeks untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `tb_makanan`
--
ALTER TABLE `tb_makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indeks untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tb_rating`
--
ALTER TABLE `tb_rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indeks untuk tabel `tb_tentang`
--
ALTER TABLE `tb_tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_hewan`
--
ALTER TABLE `data_hewan`
  MODIFY `id_datahewan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `gambar_hewan`
--
ALTER TABLE `gambar_hewan`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `gambar_layanan`
--
ALTER TABLE `gambar_layanan`
  MODIFY `id_gambar_layanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `image_slider`
--
ALTER TABLE `image_slider`
  MODIFY `id_imageslider` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_hewan`
--
ALTER TABLE `jenis_hewan`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori_hewan`
--
ALTER TABLE `kategori_hewan`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi_bayar`
--
ALTER TABLE `konfirmasi_bayar`
  MODIFY `id_konfirm_bayar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kontak_dospi`
--
ALTER TABLE `kontak_dospi`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `layanan_kami`
--
ALTER TABLE `layanan_kami`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tata_cara`
--
ALTER TABLE `tata_cara`
  MODIFY `id_tatacara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_bank`
--
ALTER TABLE `tb_bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_faq`
--
ALTER TABLE `tb_faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_index`
--
ALTER TABLE `tb_index`
  MODIFY `id_index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_makanan`
--
ALTER TABLE `tb_makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_rating`
--
ALTER TABLE `tb_rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_tentang`
--
ALTER TABLE `tb_tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
