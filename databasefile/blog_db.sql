-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Bulan Mei 2024 pada 05.53
-- Versi server: 8.0.37
-- Versi PHP: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `image_url`, `description`) VALUES
(1, 'images/image1.jpg', 'Risoles: Risoles adalah camilan yang populer di Indonesia. Ini adalah gulungan kulit lumpia yang diisi dengan ragam isian seperti daging cincang, wortel, kentang, dan kadang-kadang telur, yang kemudian digoreng hingga renyah. Risoles biasanya disajikan dengan saus cabai atau saus tomat.'),
(2, 'images/image2.jpg', 'Kue Bolu: Kue bolu adalah kue tradisional Indonesia yang mirip dengan sponge cake. Ini terbuat dari bahan dasar tepung terigu, telur, gula, dan mentega atau minyak, yang kemudian dipanggang. Kue bolu sering kali memiliki tekstur yang lembut dan empuk. Rasanya dapat disesuaikan dengan tambahan seperti cokelat, keju, atau buah.'),
(3, 'images/image3.jpg', 'Putu Ayu: Putu ayu adalah kue tradisional Indonesia yang biasanya terbuat dari campuran tepung beras, kelapa parut, gula merah, dan santan. Adonan ini kemudian dimasukkan ke dalam cetakan lalu dikukus. Putu ayu memiliki tekstur lembut dan aroma harum dari santan. Biasanya disajikan sebagai camilan atau hidangan penutup.'),
(4, 'images/image4.jpg', 'Nasi Goreng: Nasi goreng adalah hidangan nasi yang digoreng bersama bumbu-bumbu seperti bawang putih, bawang merah, kecap manis, saus cabai, dan bumbu lainnya. Nasi goreng sering kali disajikan dengan tambahan seperti telur, daging, udang, atau sayuran. Ini adalah hidangan yang sangat populer di Indonesia dan dapat ditemukan di berbagai warung makan atau restoran.'),
(5, 'images/image5.jpg', 'Rendang: Rendang adalah masakan tradisional Minangkabau dari Indonesia yang terbuat dari potongan daging (biasanya daging sapi) yang dimasak dalam santan dan rempah-rempah yang kaya. Proses memasak rendang biasanya memakan waktu yang cukup lama untuk menghasilkan daging yang empuk dan bumbu yang meresap. Rendang memiliki rasa yang kaya dan kompleks, dengan perpaduan rempah-rempah yang khas seperti serai, daun jeruk, dan cabai.'),
(6, 'images/image6.jpg', 'Telur Balado: Telur balado adalah hidangan Indonesia yang terdiri dari telur rebus yang disajikan dengan saus pedas khas yang disebut \"balado\". Telur biasanya direbus hingga matang dan kemudian dikupas. Sementara itu, saus balado dibuat dengan menumis bawang merah, bawang putih, cabai merah, tomat, dan bumbu-bumbu lainnya hingga harum dan berwarna merah menyala. Setelah itu, telur direndam dalam saus balado tersebut dan dihidangkan sebagai hidangan pendamping nasi.\r\n\r\nTelur balado seringkali memiliki rasa yang pedas, manis, dan sedikit asam. Ini adalah hidangan yang sangat populer di Indonesia dan sering dijumpai di rumah makan atau warung makan. Kombinasi antara kelembutan telur dengan saus balado yang meresap membuat hidangan ini sangat menggugah selera. Biasanya disajikan sebagai lauk pendamping nasi dalam hidangan utama.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
