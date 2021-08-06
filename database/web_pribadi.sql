-- Adminer 4.8.1-dev MySQL 5.7.24 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1,	'tech',	'2021-08-04 08:05:40',	'2021-08-04 08:05:40');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	2),
(5,	'2019_12_14_000001_create_personal_access_tokens_table',	2),
(6,	'2021_07_31_045536_create_sessions_table',	2),
(7,	'2021_08_01_153512_posts',	3),
(8,	'2021_08_01_153712_create_posts_table',	3),
(9,	'2021_08_02_154314_create_permission_tables',	4),
(10,	'2021_08_04_145430_add_slug_to_posts_table',	5);

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1,	'App\\Models\\User',	7);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`),
  KEY `posts_category_id_foreign` (`category_id`),
  CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `title`, `content`, `thumbnail`, `tags`, `status`, `created_at`, `updated_at`, `slug`) VALUES
(1,	7,	1,	'Membuat CRUD dengan Vue dan Laravel',	'<h2 id=\"apa-itu-view\" class=\"h2\" style=\'margin: 1.5rem 0px; font-weight: 700; font-size: 1.925rem; font-family: Lato, \"pt sans\", Roboto, sans-serif; color: rgba(0, 0, 0, 0.84); letter-spacing: 0.16px;\'>Apa itu View?<p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">View adalah kode yang bertugas untuk membuat tampilan aplikasi. View berisi kode campuran dari PHP, HTML, JS, dan CSS.</p><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">Ingat:</p><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">Fokusnya untuk membuat tampilan aplikasi, bukan yang lain. Kita tidak boleh query data dari view, meskipun itu bisa dilakukan.</p><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">Kadang juga kita akan membuat sedikit logika di dalam view, seperti logika untuk menampilkan dan menghilangkan elemen tertentu.</p><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">Apa yang kita lihat di aplikasi, itu adalah kode dari View.</p><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\"></p><figure class=\"mb-3\" style=\"margin-bottom: 1.75rem; max-width: 100%; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; font-size: 16px; letter-spacing: 0.16px;\"><img class=\"lazyload img-fluid lazyloaded\" data-src=\"/img/ci/mvc/mvc.png\" alt=\"MVC pada Codeigniter\" title=\"\" src=\"http://web-pribadi.test/storage/uploads/blog/blog_20210804_152247-610ab0c731e75.png\"></figure><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\"></p><h2 id=\"aturan-penulisan-view\" class=\"h2\" style=\'margin: 1.5rem 0px; font-weight: 700; font-size: 1.925rem; font-family: Lato, \"pt sans\", Roboto, sans-serif; color: rgba(0, 0, 0, 0.84); letter-spacing: 0.16px;\'>Aturan Penulisan View</h2><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">View dibuat di dalam folder&nbsp;<code style=\'font-family: \"fira mono\", monospace, Consolas, \"roboto mono\", SFMono-Regular, \"ubuntu mono\", Menlo, \"liberation mono\", \"courier new\", \"andale mono\"; font-size: 15.75px; overflow-wrap: break-word;\'>application/views/</code>&nbsp;dan ada beberapa aturan penulisan view yang harus diperhatikan:</p><h3 id=\"1-penulisan-nama-file\" class=\"h3\" style=\'margin: 1.5rem 0px; font-weight: 700; font-size: 1.525rem; font-family: Lato, \"pt sans\", Roboto, sans-serif; color: rgba(0, 0, 0, 0.84); letter-spacing: 0.16px;\'>1. Penulisan Nama File</h3><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">Nama file menggunakan huruf kecil dan jika terdiri dari dua suku kata, bisa dipisah dengan&nbsp;<em>undescore</em>.</p><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">&acirc;&#156;&#133; Contoh yang benar:</p><div style=\'color: rgb(171, 178, 191); background-color: rgb(40, 44, 52); font-family: Consolas, \"Courier New\", monospace; font-size: 16px; line-height: 22px; white-space: pre;\'><div>&lt;<span style=\"color: #e06c75;\">label</span>&nbsp;<span style=\"color: #d19a66;\">class</span>=<span style=\"color: #98c379;\">\"col-form-label&nbsp;text-md-right&nbsp;col-12&nbsp;col-md-3&nbsp;col-lg-3\"</span>&gt;Category&lt;/<span style=\"color: #e06c75;\">label</span>&gt;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;<span style=\"color: #e06c75;\">div</span>&nbsp;<span style=\"color: #d19a66;\">class</span>=<span style=\"color: #98c379;\">\"col-sm-12&nbsp;col-md-7\"</span>&gt;</div></div><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">&eth;&#159;&#145;&#142; Contoh yang tidak dianjurkan:</p><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">Sebaiknya konsisten menggunakan huruf kecil dan&nbsp;<em>undescore</em>, jangan yang aneh-aneh agar kodemu lebih rapi.</p><h3 id=\"2-penulisan-kode\" class=\"h3\" style=\'margin: 1.5rem 0px; font-weight: 700; font-size: 1.525rem; font-family: Lato, \"pt sans\", Roboto, sans-serif; color: rgba(0, 0, 0, 0.84); letter-spacing: 0.16px;\'>2. Penulisan Kode</h3><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">File view bisa berisi kode PHP, HML, CSS, dan JS. Karena tugasnya view untuk menampilkan output.. maka kita akan banyak menggunakan&nbsp;<code style=\'font-family: \"fira mono\", monospace, Consolas, \"roboto mono\", SFMono-Regular, \"ubuntu mono\", Menlo, \"liberation mono\", \"courier new\", \"andale mono\"; font-size: 15.75px; overflow-wrap: break-word;\'>echo</code>&nbsp;di sini.</p><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">Contoh:</p><pre style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">echo \"fauzi riski\";</pre><div class=\"highlight\" style=\"max-width: 100%; margin-bottom: 1.75rem; font-size: 0.9rem; border-radius: 8px; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\"><pre tabindex=\"0\" style=\'font-family: \"fira mono\", monospace, Consolas, \"roboto mono\", SFMono-Regular, \"ubuntu mono\", Menlo, \"liberation mono\", \"courier new\", \"andale mono\"; font-size: 0.9rem; margin-bottom: 1.75rem; color: rgb(248, 248, 242); padding: 1em; border-radius: 8px; line-height: 1.5em; background-color: rgb(40, 42, 54); tab-size: 4;\'><code class=\"language-php\" data-lang=\"php\" style=\'font-family: \"fira mono\", monospace, Consolas, \"roboto mono\", SFMono-Regular, \"ubuntu mono\", Menlo, \"liberation mono\", \"courier new\", \"andale mono\"; overflow-wrap: break-word;\'><span style=\"color: rgb(255, 121, 198);\">&lt;?</span>php <span style=\"color: rgb(255, 121, 198);\">echo</span> <span style=\"color: rgb(139, 233, 253); font-style: italic;\">$name</span> <span style=\"color: rgb(255, 121, 198);\">?&gt;</span>\r\n</code></pre></div><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">Sangat tidak dianjurkan melakukan query data di sini, meskipun itu bisa dilakukan..</p><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">Contoh yang buruk: &acirc;&#157;&#140;</p></h2>\n',	'blog_20210804_152247-610ab0c730a78.jpg',	'#html, #vue, #php',	'draft',	'2021-08-04 08:22:47',	'2021-08-04 08:22:47',	'membuat-crud-dengan-vue-dan-laravel-41247.html'),
(2,	7,	1,	'Membuat CRUD dengan Vue dan Laravel',	'<h2 id=\"apa-itu-view\" class=\"h2\" style=\'margin: 1.5rem 0px; font-weight: 700; font-size: 1.925rem; font-family: Lato, \"pt sans\", Roboto, sans-serif; color: rgba(0, 0, 0, 0.84); letter-spacing: 0.16px;\'>Apa itu View?<p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">View adalah kode yang bertugas untuk membuat tampilan aplikasi. View berisi kode campuran dari PHP, HTML, JS, dan CSS.</p><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">Ingat:</p><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">Fokusnya untuk membuat tampilan aplikasi, bukan yang lain. Kita tidak boleh query data dari view, meskipun itu bisa dilakukan.</p><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">Kadang juga kita akan membuat sedikit logika di dalam view, seperti logika untuk menampilkan dan menghilangkan elemen tertentu.</p><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">Apa yang kita lihat di aplikasi, itu adalah kode dari View.</p><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\"><img style=\"width: 865.578px;\" data-filename=\"1200px-ModelViewControllerDiagram2.svg.png\" src=\"http://web-pribadi.test/storage/uploads/blog/blog_20210804_154040-610ab4f8313a3.png\"></p><figure class=\"mb-3\" style=\"margin-bottom: 1.75rem; max-width: 100%; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; font-size: 16px; letter-spacing: 0.16px;\"><br></figure><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\"></p><h2 id=\"aturan-penulisan-view\" class=\"h2\" style=\'margin: 1.5rem 0px; font-weight: 700; font-size: 1.925rem; font-family: Lato, \"pt sans\", Roboto, sans-serif; color: rgba(0, 0, 0, 0.84); letter-spacing: 0.16px;\'>Aturan Penulisan View</h2><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">View dibuat di dalam folder&nbsp;<code style=\'font-family: \"fira mono\", monospace, Consolas, \"roboto mono\", SFMono-Regular, \"ubuntu mono\", Menlo, \"liberation mono\", \"courier new\", \"andale mono\"; font-size: 15.75px; overflow-wrap: break-word;\'>application/views/</code>&nbsp;dan ada beberapa aturan penulisan view yang harus diperhatikan:</p><h3 id=\"1-penulisan-nama-file\" class=\"h3\" style=\'margin: 1.5rem 0px; font-weight: 700; font-size: 1.525rem; font-family: Lato, \"pt sans\", Roboto, sans-serif; color: rgba(0, 0, 0, 0.84); letter-spacing: 0.16px;\'>1. Penulisan Nama File</h3><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">Nama file menggunakan huruf kecil dan jika terdiri dari dua suku kata, bisa dipisah dengan&nbsp;<em>undescore</em>.</p><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">&acirc;&#156;&#133; Contoh yang benar:</p><div style=\'color: rgb(171, 178, 191); background-color: rgb(40, 44, 52); font-family: Consolas, \"Courier New\", monospace; font-size: 16px; line-height: 22px; white-space: pre;\'><div>&lt;<span style=\"color: #e06c75;\">label</span>&nbsp;<span style=\"color: #d19a66;\">class</span>=<span style=\"color: #98c379;\">\"col-form-label&nbsp;text-md-right&nbsp;col-12&nbsp;col-md-3&nbsp;col-lg-3\"</span>&gt;Category&lt;/<span style=\"color: #e06c75;\">label</span>&gt;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;<span style=\"color: #e06c75;\">div</span>&nbsp;<span style=\"color: #d19a66;\">class</span>=<span style=\"color: #98c379;\">\"col-sm-12&nbsp;col-md7\"</span>&gt;</div></div><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">&eth;&#159;&#145;&#142; Contoh yang tidak dianjurkan:</p><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">Sebaiknya konsisten menggunakan huruf kecil dan&nbsp;<em>undescore</em>, jangan yang aneh-aneh agar kodemu lebih rapi.</p><h3 id=\"2-penulisan-kode\" class=\"h3\" style=\'margin: 1.5rem 0px; font-weight: 700; font-size: 1.525rem; font-family: Lato, \"pt sans\", Roboto, sans-serif; color: rgba(0, 0, 0, 0.84); letter-spacing: 0.16px;\'>2. Penulisan Kode</h3><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">File view bisa berisi kode PHP, HML, CSS, dan JS. Karena tugasnya view untuk menampilkan output.. maka kita akan banyak menggunakan&nbsp;<code style=\'font-family: \"fira mono\", monospace, Consolas, \"roboto mono\", SFMono-Regular, \"ubuntu mono\", Menlo, \"liberation mono\", \"courier new\", \"andale mono\"; font-size: 15.75px; overflow-wrap: break-word;\'>echo</code>&nbsp;di sini.</p><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">Contoh:</p><pre style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">echo \"fauzi riski\";</pre><div class=\"highlight\" style=\"max-width: 100%; margin-bottom: 1.75rem; font-size: 0.9rem; border-radius: 8px; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\"><pre tabindex=\"0\" style=\'font-family: \"fira mono\", monospace, Consolas, \"roboto mono\", SFMono-Regular, \"ubuntu mono\", Menlo, \"liberation mono\", \"courier new\", \"andale mono\"; font-size: 0.9rem; margin-bottom: 1.75rem; color: rgb(248, 248, 242); padding: 1em; border-radius: 8px; line-height: 1.5em; background-color: rgb(40, 42, 54); tab-size: 4;\'><code class=\"language-php\" data-lang=\"php\" style=\'font-family: \"fira mono\", monospace, Consolas, \"roboto mono\", SFMono-Regular, \"ubuntu mono\", Menlo, \"liberation mono\", \"courier new\", \"andale mono\"; overflow-wrap: break-word;\'><span style=\"color: rgb(255, 121, 198);\">&lt;?</span>php <span style=\"color: rgb(255, 121, 198);\">echo</span> <span style=\"color: rgb(139, 233, 253); font-style: italic;\">$name</span> <span style=\"color: rgb(255, 121, 198);\">?&gt;</span>\r\n</code></pre></div><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">Sangat tidak dianjurkan melakukan query data di sini, meskipun itu bisa dilakukan..</p><p style=\"font-size: 1.125rem; color: rgba(0, 0, 0, 0.84); font-family: Georgia, serif; letter-spacing: 0.16px;\">Contoh yang buruk: &acirc;&#157;&#140;</p></h2>\n',	'blog_20210804_154040-610ab4f82d16d.jpg',	'#html, #vue, #php',	'draft',	'2021-08-04 08:40:40',	'2021-08-04 08:40:40',	'membuat-crud-dengan-vue-dan-laravel-31353.html'),
(3,	7,	1,	'Tutorial Codeigniter #05: Menggunakan View dan CSS pada Codeigniter',	'<p>Pada tutorial sebelumnya, kita sudah belajar banyak tentang Controller.<p>Kini saatnya kita fokus ke View.</p><p>Pada tutorial ini, kita akan belajar:</p><ul>\r\n	<li>Apa itu View?</li>\r\n	<li>Cara menampilkan data di View;</li>\r\n	<li>Bagaiaman cara membuat templete view yang efektif.</li>\r\n</ul><p>Siap?</p><p>Mari kita mulai!</p><p><iframe allow=\"attribution-reporting\" data-google-container-id=\"1\" data-is-safeframe=\"true\" data-load-complete=\"true\" frameborder=\"0\" height=\"280\" id=\"google_ads_iframe_/160553881/Petanikode_0\" marginheight=\"0\" marginwidth=\"0\" name=\"\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" scrolling=\"no\" src=\"https://d5728a89985d9571c9535afd39bf7284.safeframe.googlesyndication.com/safeframe/1-0-38/html/container.html\" title=\"3rd party ad content\" width=\"336\"></iframe></p><h2 id=\"apa-itu-view\">Apa itu View?</h2><p>View adalah kode yang bertugas untuk membuat tampilan aplikasi. View berisi kode campuran dari PHP, HTML, JS, dan CSS.</p><p>Ingat:</p><p>Fokusnya untuk membuat tampilan aplikasi, bukan yang lain. Kita tidak boleh query data dari view, meskipun itu bisa dilakukan.</p><p>Kadang juga kita akan membuat sedikit logika di dalam view, seperti logika untuk menampilkan dan menghilangkan elemen tertentu.</p><p>Apa yang kita lihat di aplikasi, itu adalah kode dari View.</p><p>&nbsp;</p><figure><img alt=\"MVC pada Codeigniter\" data-src=\"/img/ci/mvc/mvc.png\" title=\"\" src=\"http://web-pribadi.test/storage/uploads/blog/blog_20210805_100832-610bb8a08f611.png\"></figure><p>&nbsp;</p><h2 id=\"aturan-penulisan-view\">Aturan Penulisan View</h2><p>View dibuat di dalam folder&nbsp;<code>application/views/</code>&nbsp;dan ada beberapa aturan penulisan view yang harus diperhatikan:</p><h3 id=\"1-penulisan-nama-file\">1. Penulisan Nama File</h3><p>Nama file menggunakan huruf kecil dan jika terdiri dari dua suku kata, bisa dipisah dengan&nbsp;<em>undescore</em>.</p><p>&acirc;&#156;&#133; Contoh yang benar:</p><pre tabindex=\"0\">\r\n<code data-lang=\"bash\">&eth;&#159;&#147;&#156; welcome_message.php\r\n&eth;&#159;&#147;&#156; about.php\r\n&eth;&#159;&#147;&#156; overview.php\r\n</code></pre><p>&eth;&#159;&#145;&#142; Contoh yang tidak dianjurkan:</p><pre tabindex=\"0\">\r\n<code data-lang=\"bash\">&eth;&#159;&#147;&#156; WelcomeMessage.php\r\n&eth;&#159;&#147;&#156; ABOUT.php\r\n&eth;&#159;&#147;&#156; over View.php\r\n</code></pre><p>Sebaiknya konsisten menggunakan huruf kecil dan&nbsp;<em>undescore</em>, jangan yang aneh-aneh agar kodemu lebih rapi.</p><h3 id=\"2-penulisan-kode\">2. Penulisan Kode</h3><p>File view bisa berisi kode PHP, HML, CSS, dan JS. Karena tugasnya view untuk menampilkan output.. maka kita akan banyak menggunakan&nbsp;<code>echo</code>&nbsp;di sini.</p><p>Contoh:</p><pre tabindex=\"0\">\r\n<code data-lang=\"php\">&lt;?php echo $name ?&gt;\r\n</code></pre><p>Sangat tidak dianjurkan melakukan query data di sini, meskipun itu bisa dilakukan..</p><p>Contoh yang buruk: &acirc;&#157;&#140;</p><pre tabindex=\"0\">\r\n<code data-lang=\"php\">&lt;?php\r\n$this-&gt;db-&gt;query(\'SELECT * from user\');\r\n?&gt;\r\n</code></pre><p>Kalau tidak boleh query data, lalu datanya didapat dari mana?</p><p>Datanya akan kita dapatkan dari Controller.</p><p>Mari kita pelajari:</p><h2 id=\"cara-load-view-dan-data\">Cara Load View dan Data</h2><p>View bisa kita load dari controller dan juga view dengan fungsi&nbsp;<code>$this-&gt;load-&gt;view()</code>.</p><p>Contoh:</p><pre tabindex=\"0\">\r\n<code data-lang=\"php\">$this-&gt;load-&gt;view(\'home_page.php\');\r\n</code></pre><p>Kita juga bisa me-loadnya, tanpa harus menggunakan ekstensi&nbsp;<code>.php</code>&nbsp;seperti ini:</p><pre tabindex=\"0\">\r\n<code data-lang=\"php\">$this-&gt;load-&gt;view(\'home_page\');\r\n</code></pre><p>Kita juga bisa mengirim data ke View pada parameter kedua.</p><p>Contoh:</p><pre tabindex=\"0\">\r\n<code data-lang=\"php\">$data = [\'name\' =&gt; \'Petani Kode\'];\r\n$this-&gt;load-&gt;view(\'product.php\', $data);\r\n</code></pre><p>Data yang dikirim ke View berupa array asosiatif.</p><p>Apa itu array asosiatif?</p><p>Silahkan pelajari di:</p><ul>\r\n	<li><a href=\"https://www.petanikode.com/php-array/\">Tutorial PHP: Memahami Array di PHP</a></li>\r\n</ul><h2 id=\"cara-menampilkan-data-di-view\">Cara Menampilkan Data di View</h2><p>Saat kita melakukan load view dengan data seperti ini:</p><pre tabindex=\"0\">\r\n<code data-lang=\"php\">$data[\'name\'] = \'Petani Kode\';\r\n$this-&gt;load-&gt;view(\'product.php\', $data);\r\n</code></pre><p>Kita bisa menampilkan isi datanya di dalam view dengan kode seperti ini:</p><pre tabindex=\"0\">\r\n<code data-lang=\"php\">&lt;?php echo $name ?&gt;\r\n</code></pre><p>Variabel&nbsp;<code>$name</code>&nbsp;dapatnya dari mana?</p><p>Variabel&nbsp;<code>$name</code>&nbsp;didapatkan dari&nbsp;<code>$data</code>, perhatikanlah di sana ada key bernama&nbsp;<code>name</code>. Ini akan menjadi variabel di dalam view.</p><p>Paham?</p><p>Bagus..</p><p>Sekarang mari kita pelajari lebih lanjut tentang cara menampilkan data.</p><h3 id=\"1-shorcut-untuk-echo\">1. Shorcut untuk Echo</h3><p>Selain menggunakan fungsi&nbsp;<code>echo</code>, kita juga bisa memanfaatkan shortcut atau bentuk pendeknya dari&nbsp;<code>echo</code>.</p><p>Perhatikan kode ini:</p><pre tabindex=\"0\">\r\n<code data-lang=\"php\">&lt;?php echo $name ?&gt;\r\n</code></pre><p>Kita bisa menyingkatnya seperti ini:</p><pre tabindex=\"0\">\r\n<code data-lang=\"php\">&lt;?= $name ?&gt;\r\n</code></pre><p>Kedua kode ini sebenarnya sama, hanya saja menggunakan&nbsp;<code>&lt;?=</code>&nbsp;akan lebih pendek dibandingkan harus menulis&nbsp;<code>&lt;?php echo</code>.</p><h3 id=\"2-percabangan-di-view\">2. Percabangan di View</h3><p>Seperti yang saya bilang tadi, di View kita juga bisa membuat ligika untuk menampikan data.</p><p>Contohnya:</p><p>Pada controller kita load view dan mengirimkan data seperti ini:</p><pre tabindex=\"0\">\r\n<code data-lang=\"php\">$data[\'user\'] =\'petanikode\';\r\n$this-&gt;load-&gt;view(\'dashboard\', $data);\r\n</code></pre><p>Lalu pada view, kita bisa buat logika if/else seperti ini:</p><pre tabindex=\"0\">\r\n<code data-lang=\"php\">&lt;?php \r\nif ($user === \'petanikode\'){\r\n  echo \"Welcome admin\";\r\n} else {\r\n  echo \"Hello guest\";\r\n}\r\n?&gt;\r\n</code></pre><p>Atau bisa juga menggunakan operator ternary seperti ini:</p><pre tabindex=\"0\">\r\n<code data-lang=\"php\">&lt;?= $user === \'admin\' ? \"Welcome admin\" : \"Hello guest\"; ?&gt;\r\n</code></pre><p>Kadang kita juga akan menampilkan banyak kode HTML di dalam blok if/else.</p><p>Kita bisa saja melakukannya seperti ini:</p><pre tabindex=\"0\">\r\n<code data-lang=\"html\">&lt;?php if ($user === \'petanikode\'){ ?&gt;\r\n  &lt;h1&gt;Hello Admin&lt;/h1&gt;\r\n&lt;?php } else { ?&gt;\r\n  &lt;h1&gt;Hello guest&lt;/h1?&gt;\r\n&lt;?php } ?&gt;\r\n</code></pre><p>Ini boleh-boleh saja dilakukan, namun agak sulit terbaca karena harus mengingat tutup kurung&nbsp;<code>}</code>. Kadang-kadang ini membuat kita kesulitan.</p><p>Karena itu, gunakanlah bentuk if/else seperti ini:</p><pre tabindex=\"0\">\r\n<code data-lang=\"html\">&lt;?php if ($user === \"admin\"): ?&gt;\r\n  &lt;h1&gt;Hello Admin&lt;/h1&gt;\r\n&lt;?php else: ?&gt;\r\n  &lt;h1&gt;Hello guest&lt;/h1&gt;\r\n&lt;?php endif ?&gt;\r\n</code></pre><p>Bentuk seperti ini lebih mudah dibaca karena kita tidak menggunakan kurung&nbsp;<code>{}</code>, melainkan menggunakan&nbsp;<code>endif</code>&nbsp;untuk menutup blok percabangan if/else.</p><h3 id=\"3-perulangan-di-view\">3. Perulangan di View</h3><p>Sama seperti percabangan, kita juga bisa melakukan perulangan pada View. Perulangan biasanya digunakan untuk menampilkan banyak data dari array.</p><p>Contoh:</p><pre tabindex=\"0\">\r\n<code data-lang=\"php\">// load view di Controller\r\n$data[\'names\'] = [\r\n  \"Foo\",\r\n  \"Bar\",\r\n  \"Bob\"\r\n];\r\n$this-&gt;load-&gt;view(\'name\', $data);\r\n</code></pre><p>Maka di View kita bisa menggunakan perulangan seperti ini:</p><pre tabindex=\"0\">\r\n<code data-lang=\"php\">&lt;?php\r\n\r\nfor ($i = 0, $i &lt; count($names); $i++)\r\n{\r\n  echo $names[$i];\r\n}\r\n\r\n?&gt;\r\n</code></pre><p>Bisa juga dengan perulangan while seperti ini:</p><pre tabindex=\"0\">\r\n<code data-lang=\"php\">&lt;?php\r\n$i = 0;\r\nwhile ($i &lt; count($names))\r\n{\r\n  echo $names[$i];\r\n  $i++;\r\n}\r\n\r\n?&gt;\r\n</code></pre><p>atau dengan perulangan foreach seperti ini:</p><pre tabindex=\"0\">\r\n<code data-lang=\"php\">&lt;?php\r\n\r\nforeach ($names as $name)\r\n{\r\n  echo $name;\r\n}\r\n\r\n?&gt;\r\n</code></pre><p>..dan yang paling saya rekomendasikan adalah menggunakan&nbsp;<em>foreach</em>&nbsp;tanpa kurung&nbsp;<code>{}</code>.</p><p>Contoh:</p><pre tabindex=\"0\">\r\n<code data-lang=\"html\">&lt;ul&gt;\r\n&lt;?php foreach ($names as $name): ?&gt;\r\n  &lt;li&gt;&lt;?= $name ?&gt;&lt;li&gt;\r\n&lt;?php endforeach ?&gt;\r\n&lt;/ul&gt;\r\n</code></pre><p>Bentuknya lebih bersih dan mudah dibaca.</p><p>Selain foreach, kita juga bisa menggunakan&nbsp;<em>for</em>&nbsp;dan&nbsp;<em>while</em>&nbsp;tanpa kurung&nbsp;<code>{}</code>.</p><p>Contoh:</p><pre tabindex=\"0\">\r\n<code data-lang=\"html\">&lt;ul&gt;\r\n&lt;?php for ($i = 0, $i &lt; count($names); $i++): ?&gt;\r\n  &lt;li&gt;&lt;?= $name ?&gt;&lt;li&gt;\r\n&lt;?php endfor ?&gt;\r\n&lt;/ul&gt;\r\n</code></pre><p>dan conoth while:</p><div style=\"background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;\" tabindex=\"0\"><code data-lang=\"html\">&lt;ul&gt;<br>\r\n&lt;?php $i = 0; ?&gt;<br>\r\n&lt;?php while ($i &lt; count($names)): ?&gt;<br>\r\n&nbsp; &lt;li&gt;&lt;?= $name ?&gt;&lt;li&gt;<br>\r\n&lt;?php endwhile ?&gt;<br>\r\n&lt;/ul&gt;</code></div><h2 id=\"latihan-membuat-template-view\">Latihan: Membuat Template View</h2><p>Mari kita lanjutkan project&nbsp;<code>beritacoding</code>, kali ini kita akan membaat template view agar lebih rapi.</p><p>Pada kode&nbsp;<code>beritacoding</code>, kita sudah membuat tiga view seperti ini:</p><p>&eth;&#159;&#147;&#156;&nbsp;<code>views/articles/list_article.php</code></p><pre tabindex=\"0\">\r\n<code data-lang=\"html\">&lt;!DOCTYPE html&gt;\r\n&lt;html lang=\"en\"&gt;\r\n&lt;head&gt;\r\n	&lt;meta charset=\"UTF-8\"&gt;\r\n	&lt;meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"&gt;\r\n	&lt;meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"&gt;\r\n	&lt;title&gt;Llist of Article&lt;/title&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n\r\n&lt;h1&gt;List Artikel&lt;/h1&gt;\r\n&lt;ul&gt;\r\n	&lt;?php foreach($articles as $article): ?&gt;\r\n	&lt;li&gt;&lt;?= $article[\'title\'] ?&gt;&lt;/li&gt;\r\n	&lt;?php endforeach ?&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;/body&gt;\r\n&lt;/html&gt;\r\n</code></pre><p>&eth;&#159;&#147;&#156;&nbsp;<code>views/articles/empty_article.php</code></p><pre tabindex=\"0\">\r\n<code data-lang=\"html\">&lt;!DOCTYPE html&gt;\r\n&lt;html lang=\"en\"&gt;\r\n&lt;head&gt;\r\n	&lt;meta charset=\"UTF-8\"&gt;\r\n	&lt;meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"&gt;\r\n	&lt;meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"&gt;\r\n	&lt;title&gt;Llist of Article&lt;/title&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n\r\n&lt;h1&gt;Tidak ada artikel&lt;/h1&gt;\r\n\r\n&lt;/body&gt;\r\n&lt;/html&gt;\r\n</code></pre><p>&eth;&#159;&#147;&#156;&nbsp;<code>views/articles/show_article.php</code></p></p>\n',	'blog_20210805_100832-610bb8a087867.jpg',	's',	'draft',	'2021-08-05 03:08:32',	'2021-08-05 03:08:32',	'tutorial-codeigniter-05-menggunakan-view-dan-css-pada-codeigniter-54905.html');

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1,	'admin',	'web',	'2021-08-02 08:56:17',	'2021-08-02 08:56:17');

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('kp2XelSjrhqZfJ5aaCSwbPYzOG4pq97lJFscNv2R',	7,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36',	'YTo2OntzOjY6Il90b2tlbiI7czo0MDoid05hTkZ4SzVnZXZJdWliMDZhMnBEemlYVkl6RGdJc1NhYUZHYk9RaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly93ZWItcHJpYmFkaS50ZXN0L2Jsb2ctc2luZ2xlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCR2NndldWZObi5lTDU1ME1LbzV2UzdPaVE1bHlkQ0VkS3dmODBKajFyRlVDLy9ER0ZWcFpTRyI7fQ==',	1628158127);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(7,	'admin',	'admin@fauziriski.my.id',	NULL,	'admin',	'$2y$10$v6weufNn.eL550MKo5vS7OiQ5lydCEdKwf80Jj1rFUC//DGFVpZSG',	NULL,	NULL,	NULL,	'2021-08-03 07:42:48',	'2021-08-03 07:42:48');

-- 2021-08-06 03:11:01
