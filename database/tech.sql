-- --------------------------------------------------------
-- Host:                         localhost
-- Versi server:                 10.2.3-MariaDB-log - mariadb.org binary distribution
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- membuang struktur untuk table techweb.article
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screenshoot1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screenshoot2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screenshoot3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screenshoot4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screenshoot5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel techweb.article: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`id`, `judul`, `isi`, `kategori`, `foto`, `screenshoot1`, `screenshoot2`, `screenshoot3`, `screenshoot4`, `screenshoot5`, `author`, `status`, `tanggal`, `created_at`, `updated_at`) VALUES
	(1, 'Cara Menghapus Virus dengan CMD', 'Assalamu\'alaikum wr wb.\r\n  Dalam kesempatan kali ini saya akan sedikit berbagi tips. cara menghapus virus dengan cmd.\r\n\r\nlangkah - langkah :\r\n1. buka cmd atau tekan windows+R.\r\n2. Ketikan localdisk yang akan di scan contoh -> f: \r\n3. jika sudah tampilan akan berubah menjadi f:\\>\r\n4. jika sudah berubah ketikan attrib -s -r -h /s /d\r\n5. Tunggu hingga Loading selesai.\r\n6. jika sudah buka explorer dan buka disk yang tadi di scan.\r\n7. cari file yang tidak jelas (file asing).\r\n8. Hapus file asing itu dan Selesai.', 'lain', '1500807600_matrix-mania.gif.jpg', '1500806905_screenshoot1.png', '1500806905_screenshoot2.png', '1500806905_screenshoot3.png', '1500806905_screenshoot4.png', '', 1, 1, '2017-07-26 13:43:49', '2017-07-24 20:58:38', '2017-07-26 13:43:49'),
	(2, 'Tips Menggunakan CSS Reset', 'Penulis sendiri awalnya memang seperti itu, memang merepotkan. Tapi belakangan\r\npenggunaan CSS Reseter semakin populer digunakan, karena fungsinya sama\r\nbaiknya dengan menggunakan file file yang berisi style yang berbeda menyesuaikan\r\ndengan browsernya. Dalam teknik pencocokan style, ketika user menggunakan\r\ninternet explorer maka style yang digunakan pun biasanya dinamakan dengan\r\nie.css, jika user menggunakan firefox maka style yang digunakan biasanya\r\ndinamakan dengan default.css, dan lain-lain sebagainya, dalam teknik css reset, kita\r\ncukup menggunakan satu buah file css saja, ?namun di tambahkan dengan barisan\r\nkode yang dapat mereset kondisi css, sehingga browser tidak memiliki nilai default\r\ndari style-style yang ada. Alias 0 (null).\r\nBerikut adalah css reset yang biasa saya gunakan :\r\n3\r\nCSS Reset Code\r\n/* RESET */\r\nhtml, body, div, span, applet, object, iframe,\r\nh1, h2, h3, h4, h5, h6, p, blockquote, pre,\r\na, abbr, acronym, address, big, cite, code,\r\ndel, dfn, em, font, img, ins, kbd, q, s, samp,\r\nsmall, strike, strong, sub, sup, tt, var,\r\nb, u, i, center,\r\ndl, dt, dd, ol, ul, li,\r\nfieldset, form, label, legend,\r\ntable, caption, tbody, tfoot, thead, tr, th, td {\r\nmargin: 0;\r\npadding: 0;\r\noutline: 0;\r\nfont-size: 100%;\r\nvertical-align: baseline;\r\nbackground: transparent;\r\nheight: auto;\r\nborder-top-width: 0;\r\nborder-bottom-width: 0;\r\nborder-left-width: 0;\r\n}\r\nblockquote:before, blockquote:after,q:before, q:after {content: ”;content: none;}\r\nblockquote, q {quotes: none;}\r\n:focus {outline: 0;}\r\n.clear {clear: both;display: block;height: 1px;overflow: hidden;margin: 0;padding:\r\n0;}\r\nins {text-decoration: none;}\r\ndel {text-decoration: line-through;}\r\ntable {border-collapse: collapse;border-spacing: 0;}\r\nol, ul {list-style: none;}\r\nbody {background-color: white;background-position: center center;}\r\n/* RESET */\r\nAnda bisa menyisipkan di setiap file style.css yang Anda buat ketika akan membuat\r\nhalaman website dalam proses styling menggunakan CSS.', 'web', '1500806905_css.png', '', '', '', '', '', 1, 1, '2017-07-24 14:08:34', NULL, '2017-07-24 14:08:34'),
	(3, 'Membuat Dropdown Hover', 'mm', 'web', '1501246608_laravel.png', '1500993110_19445-bigthumbnail.jpg', '1500993110_62515-neo_matrix_3d_screensaver_desktop_themes___wallpaper.jpeg', '1500993110_backtrack4_4.png', '1500993110_BackTrack-4-Beta.png', '1500993110_matrix-mania.gif.jpg', 1, 1, '2017-07-28 12:56:48', '2017-07-25 14:31:50', '2017-07-28 12:56:48');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;

-- membuang struktur untuk table techweb.comment
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel techweb.comment: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;

-- membuang struktur untuk table techweb.like
CREATE TABLE IF NOT EXISTS `like` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `like` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel techweb.like: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `like` DISABLE KEYS */;
/*!40000 ALTER TABLE `like` ENABLE KEYS */;

-- membuang struktur untuk table techweb.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel techweb.migrations: ~5 rows (lebih kurang)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(11, '2014_10_12_000000_create_users_table', 1),
	(12, '2014_10_12_100000_create_password_resets_table', 1),
	(13, '2017_07_11_092243_create_article', 1),
	(14, '2017_07_24_132717_like_dan_komen', 1),
	(15, '2017_07_24_133208_comment', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- membuang struktur untuk table techweb.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel techweb.password_resets: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- membuang struktur untuk table techweb.pesan
CREATE TABLE IF NOT EXISTS `pesan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel techweb.pesan: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `pesan` DISABLE KEYS */;
INSERT INTO `pesan` (`id`, `nama`, `email`, `phone_number`, `pesan`, `created_at`, `updated_at`) VALUES
	(1, 'Dudi Iskadar', 'dudiiskandar325@gmail.com', '085774216703', 'Web Nya bagus', '2017-07-30 15:25:44', '2017-07-30 15:25:44');
/*!40000 ALTER TABLE `pesan` ENABLE KEYS */;

-- membuang struktur untuk table techweb.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bgprofile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel techweb.users: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `username`, `email`, `avatar`, `bgprofile`, `description`, `password`, `instagram`, `facebook`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Dudi Iskandar', 'dudii12', 'dudyiskandar325@gmail.com', '1501246582_line-art.jpg', '1500188112_IMG_20160710_093355.jpg', 'Berusahalah dan Kerja keras karena kesuksesan tidak dapat diraih bila bermalas malasan nak!! :v wkwkwkwkkw & Tetaplah Merasa lapar agar kau bisa tetap makan begitupun dengan hal ini Tetaplah Merasa Bodoh agar kau bisa tetap belajar. :)', '$2y$10$vC4AoA4xSI4v350zRyEPf.vkErAgAnbiGOAxr2rMbCo4ssfeXnT.K', 'dudyiskndr', 'dudyiskandar10', 'LHTLkFLwnSMi8SEOocZVF6O1rDfcbs3sqFLXF6UJvWDOVFB9iA6Z137jzUms', NULL, '2017-07-30 13:38:17');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
