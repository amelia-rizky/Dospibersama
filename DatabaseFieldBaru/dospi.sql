-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2020 pada 14.20
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
  `ukuran_hewan` varchar(50) NOT NULL,
  `berat_hewan` int(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `warna_hewan` varchar(50) NOT NULL,
  `deskripsi` varchar(9999) NOT NULL,
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

INSERT INTO `data_hewan` (`id_datahewan`, `id_kategori`, `id_jenis`, `ukuran_hewan`, `berat_hewan`, `jenis_kelamin`, `id_makanan`, `warna_hewan`, `deskripsi`, `harga_hewan`, `nama_pemilik`, `rt_rw`, `kabupaten`, `kode_pos`, `id_gambar`, `tanggal_tambah`) VALUES
(1, 0, 0, '10x2x1', 125, 'Jantan', 0, 'hitam', 'hhhhhhhhhhhhggggggggggggg', '120.000.000', 'aku', '1/1/1/haha', 'malang', 123456, 0, '2020-03-02'),
(2, 0, 0, '9x9x9', 200, 'Jantan', 0, 'hitam', 'ini adalah upin dan ipin', 'Rp.50.000.000', 'dia', '3/3/3', 'trenggalek', 999, 0, '2020-03-04'),
(3, 0, 0, '', 0, 'Jantan', 0, '', '', '', '', '', '', 0, 0, '0000-00-00');

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
(1, 'file_1584456087.jpg'),
(2, 'file_15844560871.jpg'),
(3, 'file_15844560872.jpg'),
(4, 'file_15844560873.jpg'),
(5, 'file_15844560874.jpg'),
(6, '8.jpg'),
(7, '9.jpg'),
(8, '10.jpg'),
(9, '111.jpg'),
(10, '121.jpg'),
(11, '24.jpg'),
(12, '24.jpg'),
(13, '24.jpg'),
(14, '24.jpg');

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
(1, 'lll', '', 0, 'file_15844560874.jpg'),
(2, 'kambing etawa', '', 0, '121.jpg'),
(3, '', '', 0, '24.jpg');

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
(2, 'Sapi'),
(3, 'Sapi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_bayar`
--

CREATE TABLE `konfirmasi_bayar` (
  `id_konfirm_bayar` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `jenis_transaksi` varchar(100) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `id_ bank` int(11) NOT NULL,
  `bukti_bayar` varchar(200) NOT NULL
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tata_cara`
--

CREATE TABLE `tata_cara` (
  `id_tatacara` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tata_cara`
--

INSERT INTO `tata_cara` (`id_tatacara`, `judul`, `konten`) VALUES
(1, 'syarat dan ketentuan', 'sendi adalah orang yang selalu menjadi kapten di saat kita bermain sepakbola');

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
  `id_rekomendasi` int(11) NOT NULL,
  `id_faq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_datahewan` int(11) NOT NULL,
  `isi_komentar` text NOT NULL,
  `waktu` time(6) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `id_user`, `id_datahewan`, `isi_komentar`, `waktu`, `tanggal`, `status`) VALUES
(9, 0, 1, 'coba1', '00:00:00.000000', '0000-00-00', ''),
(10, 0, 2, 'coba1', '00:00:00.000000', '0000-00-00', ''),
(14, 0, 1, 'this is me', '00:00:00.000000', '0000-00-00', ''),
(15, 0, 1, 'luweee', '00:00:00.000000', '0000-00-00', '');

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
(1, 'combor'),
(2, 'alami'),
(3, '');

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
(6, '', 'kemengg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekomendasi`
--

CREATE TABLE `tb_rekomendasi` (
  `id_rekomendasi` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` varchar(1000) NOT NULL,
  `id_datahewan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(86, 'file_1584432013.jpg', 'Wahyu  Rahmadani', 12345, 'bagongchanel75@gmail.com', 'laki-laki', '085233170475', 'file_1584361662.jpeg', '1'),
(87, 'file_1584422133.jpg', 'Winda Adelia', 20411, 'windaadelia12@gmail.com', 'perempuan', '087699244123', 'file_1584421859.jpg', '2');

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
-- Indeks untuk tabel `tb_rekomendasi`
--
ALTER TABLE `tb_rekomendasi`
  ADD PRIMARY KEY (`id_rekomendasi`);

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
  MODIFY `id_datahewan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `gambar_hewan`
--
ALTER TABLE `gambar_hewan`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori_hewan`
--
ALTER TABLE `kategori_hewan`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi_bayar`
--
ALTER TABLE `konfirmasi_bayar`
  MODIFY `id_konfirm_bayar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kontak_dospi`
--
ALTER TABLE `kontak_dospi`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `layanan_kami`
--
ALTER TABLE `layanan_kami`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_index` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_makanan`
--
ALTER TABLE `tb_makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_rekomendasi`
--
ALTER TABLE `tb_rekomendasi`
  MODIFY `id_rekomendasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_tentang`
--
ALTER TABLE `tb_tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
