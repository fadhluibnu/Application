-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Feb 2022 pada 16.20
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_blog1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Web Programming', 'web-programming', '2022-02-03 19:53:49', '2022-02-03 19:53:49'),
(2, 'Web Design', 'web-design', '2022-02-03 19:53:49', '2022-02-03 19:53:49'),
(3, 'Personal', 'personal', '2022-02-03 19:53:49', '2022-02-03 19:53:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_12_075149_create_posts_table', 1),
(6, '2021_12_13_150331_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Nemo numquam accusantium magni iste eveniet.', 'officia-enim-rem-quisquam-praesentium-sed-dolore-quia-sint', NULL, 'Aut ab at id repellat animi dolore impedit. Quia quia et nobis amet velit. Unde consequatur odit deserunt aut. Vero velit qui porro earum nihil.', '<p>Nam explicabo aut quos cupiditate doloremque totam libero minus. Voluptate id quia a omnis. Possimus maxime aut eos pariatur saepe quia tempora. Sunt reprehenderit eos ab fugit similique nobis accusantium error. Facilis similique rerum qui neque quae placeat.</p><p>Id atque minus nam reiciendis error. Et necessitatibus voluptatibus dolores aut voluptatibus. Perferendis et sunt voluptas et deleniti odio tempore quaerat. Et minima repellat id ullam porro deserunt.</p><p>Labore voluptas aut aut. Qui fugit id velit facilis ipsam voluptatum accusamus. Ipsam qui tempore tenetur nemo.</p><p>Iusto consectetur atque unde voluptate in dolores quia. Aliquam ut minus consequatur saepe atque. Deleniti voluptatibus qui quia reiciendis.</p><p>Nobis iusto cum labore hic beatae nisi. At unde placeat animi distinctio. Unde deserunt ipsa et omnis culpa. Recusandae adipisci id ducimus et quisquam similique vero.</p><p>Exercitationem ipsa doloribus et inventore incidunt tempora. Temporibus eaque blanditiis et est nihil laborum velit. Illum porro soluta debitis ex enim.</p><p>Quos fuga suscipit dolores nobis. Soluta modi deserunt fugit placeat. Recusandae recusandae id nobis aut dolore provident itaque.</p>', NULL, '2022-02-03 19:53:49', '2022-02-03 19:53:49'),
(2, 2, 3, 'Iusto rerum et reiciendis.', 'magnam-aut-dignissimos-voluptatem-optio-assumenda-totam-quo', NULL, 'Quo illum voluptatem tenetur non quibusdam corporis totam blanditiis. Deleniti facere et dolor molestiae voluptas quia.', '<p>Culpa fuga eos dolores cupiditate. Rerum enim architecto minus explicabo necessitatibus qui. Voluptatem accusamus sint expedita rerum eos perspiciatis. Doloremque fugit blanditiis quis corrupti neque iure qui.</p><p>Id quia odit natus ab reprehenderit repellat cumque laboriosam. Sapiente id officia fugit in porro reprehenderit qui. Eos sit dolores numquam fugit. Dolores neque corrupti nesciunt quo repellendus porro. Harum vel quia alias quia quo eaque.</p><p>Quam laborum in architecto hic. Voluptas veniam velit dolore voluptate nesciunt in. Quia quaerat laborum non repellat. Aut quam officiis minus quis exercitationem quas.</p><p>Ea voluptate a molestias. Molestiae et voluptas ipsam quo ut illo hic. Delectus rerum fugiat nisi rerum delectus ipsum. Odio quia quaerat ut natus aut deserunt minima.</p><p>Est maiores est aspernatur praesentium sit incidunt aut. Aspernatur a quia fugiat sed impedit. Sequi provident quasi consectetur aperiam reiciendis quaerat esse.</p><p>Quia dolor veniam voluptatem ipsam incidunt laboriosam doloribus doloribus. Id et quas nam qui quidem temporibus facilis. Iste sapiente quidem incidunt suscipit totam similique.</p><p>Dicta quo voluptatibus sed incidunt adipisci. Corporis sed quia ut quod dolorem quo. Sunt adipisci minima non laboriosam quis a blanditiis. Aut suscipit atque voluptas sint laborum qui fugiat.</p><p>Dolore doloribus rem et et dolores officiis. Reiciendis amet voluptatem est facilis est.</p>', NULL, '2022-02-03 19:53:49', '2022-02-03 19:53:49'),
(3, 2, 1, 'Culpa delectus qui dicta.', 'esse-rerum-voluptas-incidunt-aliquid-harum-quia-deserunt-ea', NULL, 'Iure tempore delectus maiores vero. Tempora magni in odit et occaecati eveniet pariatur.', '<p>Consectetur eos tempore repudiandae maiores. Quibusdam labore reiciendis explicabo a beatae et aut. A facilis architecto voluptates rem voluptatem culpa quidem.</p><p>Occaecati sunt suscipit delectus nihil. Nam molestiae et accusamus et vel. Ipsam est illo autem fuga est tenetur eveniet nemo.</p><p>Et qui modi in. Dolores incidunt magnam repellat iusto perferendis. Sed officiis voluptatem ut quia. Velit sequi doloremque non et magni. Aut maxime exercitationem reprehenderit saepe.</p><p>Doloremque repudiandae cum eos maxime. Esse assumenda minima consequatur quia et delectus ut. Saepe et eos delectus ut molestiae dolores sit. Qui deleniti debitis aut qui.</p><p>Minima quis odit doloremque qui corrupti. Autem quisquam exercitationem aliquam dolor tenetur et. At velit molestiae nesciunt repellat aut debitis aliquam. Sit magnam atque qui deleniti dolore facilis. Similique dignissimos accusamus et perspiciatis id aut ratione nobis.</p>', NULL, '2022-02-03 19:53:49', '2022-02-03 19:53:49'),
(4, 2, 1, 'Inventore a consectetur facere perferendis molestias quo.', 'porro-voluptatibus-odio-vel-sunt-dignissimos-suscipit-omnis', NULL, 'Dolorem enim quae autem ut quos explicabo. Ipsa consequuntur enim eius quaerat iure autem labore. A delectus perferendis id modi sunt et voluptas inventore. Porro vel esse quibusdam reprehenderit distinctio nostrum nisi impedit. Rem quis incidunt sapiente ut enim qui.', '<p>Quod provident nam consequatur et nihil. Et vel quasi occaecati enim voluptas. Esse aut soluta dolor soluta qui aut. Provident maxime nam repellat excepturi id quibusdam est.</p><p>Nobis vel optio nobis perspiciatis. Consequatur laboriosam ab ea eum qui modi expedita. Amet quasi vero qui et voluptas in. Consequuntur et sed quo debitis.</p><p>Harum repellendus dolores quo. Et tempora necessitatibus placeat nemo. Labore provident nihil autem et mollitia ipsum expedita.</p><p>Aliquid corrupti aut autem voluptatem molestiae et ut. Et perferendis quidem ducimus fugiat deserunt magni. Totam nisi ipsa qui sunt.</p><p>Repellat labore beatae exercitationem distinctio. Recusandae unde nisi quo quia praesentium dolorem quaerat praesentium. Ut aut sed consequuntur adipisci sapiente.</p>', NULL, '2022-02-03 19:53:49', '2022-02-03 19:53:49'),
(5, 1, 3, 'Harum atque eveniet maiores eligendi velit repudiandae cumque.', 'illum-dolor-nisi-aspernatur-fuga-veniam-possimus-rerum', NULL, 'Velit animi ex delectus nihil debitis. Eveniet et consequatur a. Omnis ratione vel sint et molestiae occaecati minima.', '<p>Sed tempore ipsum provident maxime. Quidem doloribus ullam nihil nesciunt inventore aliquam ut. Et ad voluptates cupiditate dolor consequatur dolor tempora. Provident aspernatur aut perspiciatis natus eos cupiditate sapiente.</p><p>Veritatis neque facilis temporibus voluptatem. Et consectetur culpa incidunt nostrum facilis omnis pariatur. Dolorem fugiat vitae voluptatem doloremque voluptatem laborum sunt quia. In dolor sapiente excepturi molestias exercitationem.</p><p>Nobis ratione velit excepturi quaerat id voluptatem mollitia tempore. Pariatur magni velit saepe quo. Dolorum dolor alias reiciendis officia aut molestias tenetur. Magni consequatur delectus mollitia fuga consequatur accusantium pariatur.</p><p>Voluptatem enim impedit reiciendis aut nihil blanditiis. Autem sint aut laudantium totam quisquam. Perspiciatis et consectetur corrupti veritatis suscipit. Consequuntur qui illo nulla tempore veritatis qui omnis.</p><p>Est repellat officiis beatae assumenda est consequatur qui. Maiores quasi rerum illum nam fuga ad culpa officiis. Autem voluptatum laborum molestias alias cupiditate magnam.</p>', NULL, '2022-02-03 19:53:49', '2022-02-03 19:53:49'),
(6, 2, 3, 'Excepturi tempore quis.', 'quo-eum-rerum-ut-possimus-id-aperiam', NULL, 'Id quo temporibus facilis aut. Perferendis minima vel magni error quia. Veniam inventore voluptate voluptates quidem nostrum. Est ipsum molestiae similique qui veniam qui.', '<p>Laboriosam assumenda qui rerum totam reprehenderit. Et autem reiciendis ad et. Vel voluptate aut error ut optio suscipit. Quia voluptatibus est eius est provident.</p><p>Repudiandae harum qui aut laborum itaque repellendus non enim. Ullam molestiae quia veritatis non. Repellendus veritatis sunt ea fugit blanditiis.</p><p>Et eius quo voluptatum saepe omnis libero. Nesciunt laboriosam ab sed porro consequatur. Labore eos et ullam nisi deleniti quis consectetur quia.</p><p>Quia voluptatem veritatis nobis nulla. Enim eius expedita explicabo in modi non tempora laboriosam. Nostrum quae asperiores nihil minima magni non.</p><p>Ullam nostrum voluptas explicabo odit eligendi. Consequatur sed nemo et et qui. Nulla eveniet officiis optio. Ea sequi voluptas vel voluptatem.</p><p>Porro vel quaerat ut ducimus voluptas omnis veritatis. Odit aut praesentium et ratione. Sit eos voluptatem quidem eius reiciendis. Esse molestiae qui assumenda iste.</p><p>Impedit ducimus hic quia eos. Qui quia eum ratione voluptatem consequatur explicabo. Qui nulla atque blanditiis quasi sunt alias. Nam est voluptate et aut dolorem ab.</p><p>Odit suscipit occaecati quia quis consectetur quisquam ea. Voluptas eligendi dolore non rerum animi. Ut quam voluptatem totam.</p><p>Est natus et ut ratione suscipit quis. Velit consequatur quia libero adipisci fugit. Exercitationem unde voluptas est minus quaerat. Deserunt ratione quis aut culpa qui aspernatur cum.</p>', NULL, '2022-02-03 19:53:50', '2022-02-03 19:53:50'),
(7, 2, 2, 'Pariatur quia.', 'id-aliquam-nulla-perspiciatis', NULL, 'Omnis aperiam officiis suscipit assumenda. Quia est sapiente deleniti non beatae possimus fugiat. Et cupiditate illum voluptatibus distinctio est.', '<p>Et cupiditate quaerat velit voluptatem delectus. Aut ea quod itaque sed et. Nam vero omnis magnam dignissimos pariatur iusto.</p><p>Et neque quos porro. Fugiat doloremque hic enim eos blanditiis. Aut quo eveniet aliquid aut sed sunt. Ut perspiciatis reprehenderit vitae error error et.</p><p>Aut laborum eos placeat nostrum. Repellat debitis alias iusto odio. Sed nesciunt expedita quae nemo est earum laboriosam.</p><p>Dolor vitae nihil fugiat fugiat asperiores in. Cupiditate non aut aut error iusto. Et possimus consequatur sint qui quia cupiditate. Recusandae molestiae harum nobis est possimus minima dolorum sit.</p><p>Doloribus nulla alias ea. Quaerat autem sint tenetur sequi. Corrupti qui pariatur amet voluptatibus. Amet consequatur saepe assumenda eos.</p><p>Cum harum tenetur voluptas. Fugit odio commodi architecto sit. Tempore voluptatem eveniet et nulla odit nisi est. Et voluptatum excepturi et voluptatem voluptatem aliquam.</p><p>Ipsum repudiandae sint laudantium omnis iusto nam possimus voluptate. Architecto est commodi placeat nihil molestiae sit ipsum. Nostrum minus nulla a. Perferendis officiis architecto sed et quia quibusdam impedit laborum.</p><p>Sunt id non velit deleniti. Ipsa exercitationem sed soluta quaerat dolores facilis quia. Fuga sunt in eveniet ipsum. Asperiores odit explicabo velit repellendus nemo corporis.</p><p>Labore non sed doloribus alias dolorum. Officiis quas temporibus eligendi. Magnam explicabo sapiente nihil reiciendis.</p>', NULL, '2022-02-03 19:53:50', '2022-02-03 19:53:50'),
(8, 1, 3, 'Deleniti sit.', 'odit-quia-ut-accusantium-molestiae-esse-voluptatem-atque-rerum', NULL, 'Molestias officia facere ex odio quia veritatis voluptas. Est in est amet aut eligendi omnis. Et eligendi natus qui aut expedita consequuntur temporibus debitis. Iure est animi dolores odit.', '<p>Ut dicta aut deserunt quod impedit. Fugiat voluptatem quia minima expedita ut. Facere quia assumenda tenetur quisquam consequatur et consequatur.</p><p>Quasi perspiciatis quam et a possimus. Fugit quia quis cupiditate non molestiae qui nulla. Similique sapiente dolorem ab qui nobis nulla. Reiciendis dolorum voluptas ullam quo quo. Non enim facere dignissimos accusantium soluta sint.</p><p>Vitae debitis recusandae nam et qui. Maxime est et quia hic architecto illo est consequatur. Reiciendis non qui sequi enim sint ut laudantium. Dicta officiis optio eos fugiat autem ut minima aut.</p><p>Atque et officiis excepturi. Quidem dolorem alias ullam autem. Eos esse rem labore dolores est. Illo magni inventore a accusantium. Ducimus sit aut et nulla.</p><p>Vero nihil similique et voluptas voluptates alias eveniet. Doloremque autem voluptatibus quo quidem distinctio. Asperiores aut nesciunt sunt omnis necessitatibus.</p><p>Eos voluptatem sit suscipit est. Omnis rerum officiis quo autem officia eius voluptas. Soluta id aspernatur et facere aut ex amet fuga.</p><p>Distinctio illum ullam ullam possimus qui minima aut eligendi. Praesentium accusamus accusantium corrupti soluta ut odit et. Consequatur temporibus non qui dolores ipsam perspiciatis tempora itaque.</p>', NULL, '2022-02-03 19:53:50', '2022-02-03 19:53:50'),
(9, 2, 3, 'Hic modi omnis eaque ea.', 'fuga-velit-aliquam-omnis-repellendus-dolorem-aliquam', NULL, 'Explicabo temporibus commodi rerum alias labore vitae omnis. Voluptatem perferendis enim et corporis asperiores natus. Voluptatem maxime eius porro necessitatibus.', '<p>Et distinctio laborum enim temporibus perspiciatis sit esse. Odio laboriosam blanditiis rerum. Aut modi corporis nesciunt molestias aut commodi nesciunt quis.</p><p>Nisi voluptatum qui in distinctio odio. Qui vel facilis quis consequatur incidunt quas culpa. Eum impedit tempore pariatur aliquid. Alias sit placeat reiciendis necessitatibus.</p><p>Impedit id quia sapiente voluptates autem sunt impedit. Dolorem aut possimus nihil ea sunt. Optio quo voluptas soluta animi quam asperiores. Voluptatum minus nemo voluptatem est explicabo numquam omnis. Hic consequatur aliquam sit veniam quis similique.</p><p>Perspiciatis est mollitia a. Eum similique dolorem iure ullam accusamus unde. Aspernatur quia et eaque.</p><p>Illum earum odit occaecati rerum officia quia. Dolor quisquam architecto nisi placeat deserunt. Earum temporibus eius sequi nobis ad voluptatibus. Similique corporis eligendi et cupiditate sint eos.</p>', NULL, '2022-02-03 19:53:50', '2022-02-03 19:53:50'),
(10, 1, 1, 'Ipsam vel eos non dignissimos dolores.', 'sint-aliquid-porro-sed-eius-excepturi', NULL, 'Fuga soluta corporis ab velit. Minima omnis repudiandae in. A et odit non vitae ducimus reprehenderit.', '<p>Dolor sunt inventore eos qui voluptatem sint aliquid. Ab eum eum dolor numquam impedit ea. Quam et voluptatem facere harum. Rerum temporibus minima est eius voluptatum nesciunt modi.</p><p>Voluptas voluptatum occaecati aut. Dolorum dolorem consequuntur numquam magnam. Itaque itaque ad dolorem magnam omnis laborum tempora. Ab saepe ratione cupiditate odit.</p><p>Omnis occaecati explicabo consequuntur. Et illo sequi aut cum ducimus. Dolores exercitationem cum inventore consequatur consequatur dolores et. Nulla iste illo et vel.</p><p>Eveniet qui neque qui. Molestias error similique sit. Sit ratione sit qui velit.</p><p>Accusantium fugit voluptatem est in quaerat earum incidunt ab. Suscipit sint ut deserunt alias dignissimos perspiciatis consectetur. Facilis enim omnis sint aut quod. Placeat earum rerum alias eveniet voluptatem voluptate fugiat.</p><p>Earum omnis voluptatem autem porro dolorem fuga. Nam animi aut quisquam et. Rerum repellat quia ut nemo. Eum est iusto excepturi aperiam qui.</p><p>Sed nihil quidem quia atque. Autem et rem non beatae. Ipsa repudiandae eos facere illo.</p><p>Et itaque inventore distinctio veritatis rerum. Reprehenderit quibusdam laudantium a assumenda laudantium. Hic libero labore ducimus.</p>', NULL, '2022-02-03 19:53:50', '2022-02-03 19:53:50'),
(11, 2, 2, 'Quibusdam explicabo in.', 'voluptatibus-magni-deleniti-asperiores-itaque-corporis-distinctio', NULL, 'Quod deleniti perspiciatis aliquid consequatur iste amet quibusdam velit. Occaecati nesciunt qui est totam voluptatibus dolores ut. Qui natus ut neque quisquam delectus.', '<p>Molestiae veniam aut corrupti ratione magnam magni cupiditate. Eaque quod consequatur quaerat sit. Laudantium saepe vel in qui vitae.</p><p>A vitae maiores qui earum. Quae magnam sed veritatis explicabo ex vel doloremque. Dolor harum voluptas aut aut.</p><p>Consequatur eum et pariatur ea qui voluptates. Quia omnis cum consequuntur aut accusantium. Cupiditate magni nihil molestias rerum recusandae. Non omnis consequuntur numquam voluptas molestiae quidem.</p><p>Et qui non ipsum voluptatibus cupiditate doloribus facere. Ut alias qui non. Velit facilis beatae et blanditiis neque sint et. Id aperiam esse aut dolores modi soluta et. Rerum vel ipsam consequuntur illum rerum consequuntur impedit.</p><p>Explicabo laborum officiis sequi dicta vel suscipit. Nihil voluptatem voluptatibus sint non accusantium quo ut. Voluptatem in rerum omnis voluptates. Minima totam ut ducimus rerum et sint. Maxime velit velit minus dicta et nostrum qui.</p><p>Qui aliquid temporibus ducimus qui et recusandae ut. Quia omnis eaque odit numquam nisi autem. Dolorum nihil eos commodi autem nulla quidem.</p><p>Accusamus est esse ut nobis. Fuga minus quia laborum ipsa odit aut necessitatibus. Sed vel doloremque voluptatem nobis omnis. Adipisci veritatis asperiores hic.</p>', NULL, '2022-02-03 19:53:50', '2022-02-03 19:53:50'),
(12, 1, 3, 'Tempora ullam.', 'eum-eos-ipsa-quo-ut-nostrum', NULL, 'Sequi et dolores adipisci. Error et sit ducimus ab ea necessitatibus cupiditate. Possimus quo adipisci sit quasi praesentium.', '<p>In est tempore illum error ipsa sint. Ratione magnam qui dolorem. Assumenda dignissimos eaque ipsa vero facere.</p><p>At exercitationem animi ex ea dicta possimus eligendi doloribus. Quia facere ut quo enim. Et facilis vero qui consequatur eos rerum minus eos.</p><p>Dolor rerum temporibus nobis similique dolore similique. Id veritatis quia ea temporibus. Quaerat aut amet aut non cupiditate adipisci.</p><p>Dolorem sed natus eum debitis mollitia. Facilis magni quibusdam sed vel harum dicta dolores. Sit maiores consequuntur quaerat sunt labore suscipit.</p><p>Nesciunt enim voluptas minus qui explicabo qui. Nisi quam ullam laudantium maiores eum pariatur explicabo aliquam. Ut quia itaque similique libero sunt laboriosam ea dolorem. Perferendis voluptas placeat consectetur ut provident.</p><p>Odit dicta occaecati et id expedita. Labore odio expedita natus ipsam. Modi officiis aut vitae aut at in sequi. Aut quibusdam magni distinctio ex ut nemo. Accusamus exercitationem ut et officia vitae et.</p><p>Aut provident quia repudiandae itaque cupiditate. Quia error qui dicta doloribus. Sit illum aut omnis a in qui harum.</p>', NULL, '2022-02-03 19:53:50', '2022-02-03 19:53:50'),
(13, 1, 3, 'Quibusdam exercitationem ratione cupiditate assumenda ratione.', 'aut-et-dolor-id-non-explicabo-deserunt-illum', NULL, 'Quaerat explicabo quaerat quo maxime qui dolorem. Ut similique reiciendis eveniet totam blanditiis nam.', '<p>Est quis et quod voluptas dolores provident totam. Libero et omnis quis quia enim et. At fugit sequi neque incidunt odit. Rem unde dolor maxime voluptatem aut.</p><p>Dolores beatae sint cumque. Quas natus quia sit in quidem tenetur officiis. Accusamus debitis similique aspernatur molestiae qui provident voluptas. Et ipsa et officia animi officiis laudantium.</p><p>Et est expedita eligendi et rerum harum. Perspiciatis at quae vitae sed sequi aliquam aut. Qui ea fugit earum. Et facere quasi voluptate quo.</p><p>Provident doloribus voluptatem dolorem et placeat. Nam facilis id voluptas recusandae qui ab. Et delectus velit in tempora. Sit tempora dolor aperiam ab ipsa harum. Ex aperiam laudantium ut et magnam.</p><p>Quaerat molestiae eos aliquid labore ea quo. At sit soluta dolores hic. Repudiandae nihil et veniam sit at autem officiis laboriosam. Pariatur est fuga quis laudantium quos quibusdam numquam.</p><p>At corrupti velit reiciendis et itaque. Ut quo qui ratione dolor et rerum voluptates sit. Sed ullam laboriosam eos ea.</p><p>Enim rerum dolore a voluptatibus. Magni et consequuntur minima corporis delectus tempora mollitia. Ut est ipsa culpa aperiam veritatis quia voluptatem quisquam. Ea doloribus in excepturi sint porro placeat nihil.</p><p>Qui quis non nam animi. Est illo quidem quidem iure recusandae velit.</p>', NULL, '2022-02-03 19:53:50', '2022-02-03 19:53:50'),
(14, 2, 1, 'Ut et corrupti.', 'quis-sequi-similique-omnis-necessitatibus-tempora-nemo-nesciunt', NULL, 'Impedit neque odio inventore et veniam iure quisquam. Dolor voluptatem repellat quia et. Ea officia natus quia aut.', '<p>Sequi dignissimos et ea est voluptas sunt. Quis autem doloribus recusandae impedit unde. Rerum voluptatum eveniet temporibus laboriosam laboriosam. Rerum et nisi necessitatibus quis porro eum.</p><p>Perspiciatis et est et tempore quia sequi. Tempore velit distinctio id at enim. Et iure quia libero voluptas voluptas. Eveniet libero inventore architecto sequi.</p><p>Quos dolore necessitatibus est reprehenderit dolores sunt ipsum illo. Aperiam non dolores cupiditate voluptatem voluptas ipsum autem dolor. Voluptatem aut voluptatibus pariatur rem voluptate veritatis. Tempore officiis ratione aut qui.</p><p>Ut assumenda libero aut. Blanditiis incidunt dicta animi et dolore. Maxime libero accusantium quidem deleniti perspiciatis itaque nihil. Molestiae voluptatem voluptatem culpa.</p><p>Omnis velit aspernatur eligendi ut qui. Dicta et nam odit explicabo corporis. Sit ex et totam voluptatem ad nobis. Laborum voluptas voluptatibus omnis cumque eos qui.</p><p>Reprehenderit ut consequatur enim libero veniam et alias. Ut itaque tempora omnis.</p><p>Commodi dolores quod quo nam molestias enim saepe. Est unde cumque eligendi. Reiciendis culpa iste eos iusto eveniet sed.</p><p>Vel ut quis qui in voluptate. Doloribus architecto quod delectus beatae ea. Sit vero fugiat dolore similique ad. Aut inventore iure ex.</p><p>Molestias culpa accusamus qui ducimus occaecati eos ab. Voluptatem animi consequatur dolor dolore veritatis eveniet minus saepe. Et nam aliquam nemo culpa neque et doloremque. Illum et cupiditate aut est deserunt.</p><p>Alias qui eum est explicabo. Magnam quae omnis sint. Iusto natus quae praesentium mollitia cum earum.</p>', NULL, '2022-02-03 19:53:50', '2022-02-03 19:53:50'),
(15, 1, 3, 'Voluptatem veritatis unde dolor omnis consectetur.', 'velit-inventore-vel-velit-qui-impedit', NULL, 'Accusamus sed ipsam repudiandae explicabo illo vitae neque. Consequuntur aut et et quibusdam voluptate ut quia. Inventore minima corrupti distinctio minus voluptatum laboriosam. Numquam repudiandae est est maxime nobis.', '<p>Quia excepturi blanditiis culpa et quia omnis consectetur sit. Excepturi sapiente labore aut minima. Reiciendis natus est commodi molestiae. Officiis laborum eligendi veniam quo rem id et.</p><p>Est quis expedita et dignissimos sint facere assumenda. Omnis eius expedita vel nesciunt. Adipisci error ab facere harum et maxime eius corporis. Dolorem doloremque corrupti itaque odio vero nemo quasi modi.</p><p>Veniam id voluptatum corrupti consequatur enim consequatur doloremque. Molestias voluptatum modi ducimus ab eligendi ut repellendus. Qui est ab voluptas in.</p><p>Perferendis sunt nulla fuga libero natus eos eos non. Ipsum quia accusantium ipsa. Eum inventore assumenda voluptas nulla inventore sit possimus. Sit odio consectetur commodi sint magni.</p><p>Aut quas minima quas. In odit corrupti odit nam ea porro corrupti. Ab consequatur non ipsa ex odio. Est hic dolore et culpa dicta ex odio.</p><p>Placeat sunt sunt fugit et provident. Enim et optio harum cum et libero.</p><p>Dignissimos est non aliquam. Quia placeat maxime eveniet aut vel accusantium. Consequatur vero autem non voluptatum. Excepturi reprehenderit odit hic maiores et facere.</p><p>Est natus animi quasi voluptates eaque nisi assumenda fugit. Ut et dolore veritatis cumque sint nisi. Officiis vitae nihil ullam placeat.</p>', NULL, '2022-02-03 19:53:50', '2022-02-03 19:53:50'),
(16, 1, 2, 'Inventore incidunt pariatur eveniet voluptatem quia ab reprehenderit porro.', 'ad-qui-ad-sint-nostrum-et-minus-ut-perspiciatis', NULL, 'Aut velit velit quae nobis. Quia molestiae quae veritatis molestias molestiae porro.', '<p>Laboriosam laborum quia eos qui fugiat deleniti ea aut. Voluptatem id magnam qui beatae eum omnis. Tempore iure distinctio eum recusandae.</p><p>Odit inventore eius molestiae libero dolorem. Magnam nostrum aut vel. Sapiente vero ullam ducimus harum labore molestiae.</p><p>At aut quaerat est fugit ut fuga aut. Quia consequatur ex corporis et reiciendis veritatis. Delectus et aliquam labore aut nihil.</p><p>Magnam natus quisquam voluptatem iusto cum id. Illum ut autem molestiae magni deserunt cupiditate. Qui sint dolor quis asperiores voluptatibus iste ut vero.</p><p>Enim esse incidunt autem ratione maxime occaecati sit minima. Quisquam a temporibus hic enim eum. Aut rerum tenetur odit fugit. Doloribus numquam dignissimos beatae non.</p>', NULL, '2022-02-03 19:53:50', '2022-02-03 19:53:50'),
(17, 2, 3, 'Et tenetur doloremque aut.', 'qui-tempora-molestiae-sit', NULL, 'Delectus occaecati sunt facere ut sunt debitis dolor. Nostrum et illo et quod et occaecati repellat voluptas. Deserunt rerum facilis aut cum culpa laudantium. Corporis nihil soluta optio eum animi ducimus illum.', '<p>Dolore voluptas illo sed ut consequatur et. Non eveniet odit rem in. Rerum perferendis a qui rerum rerum asperiores qui. Voluptas fugiat qui omnis voluptates.</p><p>Aspernatur quidem quia illo in et repellat iste. Deserunt iure dignissimos ut quia officia ab consequatur. Assumenda dolorem velit eum ab modi vitae omnis. Autem velit rem id distinctio. Debitis aperiam commodi facere quos sunt at velit.</p><p>Tempore dolore facere animi voluptatem culpa magnam laborum dolor. Tempora mollitia dolore eum nobis et sed. Enim reprehenderit eaque omnis et nesciunt consequuntur. Temporibus natus distinctio adipisci quis illum fuga occaecati. Recusandae ea quo voluptas aut iure vel.</p><p>Ut tempora consequatur dicta sunt sapiente vitae aperiam. Rerum quibusdam veniam quia sed.</p><p>Iusto magnam aspernatur sint perferendis et. Pariatur nostrum quaerat minus iure. Nihil veritatis et eaque. Aut est et esse rem.</p><p>Quia minus voluptas saepe odit eaque. Hic esse qui quod molestiae suscipit unde totam. Sint ut tenetur quae eos aspernatur aut aut itaque.</p>', NULL, '2022-02-03 19:53:50', '2022-02-03 19:53:50'),
(18, 2, 3, 'Autem commodi vel suscipit est.', 'expedita-quam-quasi-quis-sunt-quo-at', NULL, 'Maiores odio amet ut voluptas. Eum autem vel consequatur aliquam ea. Soluta dolores amet quasi officia modi vel.', '<p>Iusto saepe exercitationem accusantium et et nihil itaque. Vero facere repudiandae veritatis et accusamus quo perferendis. Voluptate autem necessitatibus animi id. Cum cupiditate tempora enim magni.</p><p>Omnis maiores eos perspiciatis officia odio quia quia. Minus dolore voluptates soluta vel. Et voluptas iure culpa alias maiores.</p><p>Nisi tempore est facilis aperiam aperiam. Quia doloremque et enim ea. Modi nulla est soluta sed optio accusantium. Quis corrupti molestiae eum quae corporis accusamus minus.</p><p>Porro dolorem eum pariatur odio ab rerum vero totam. Libero laborum autem tenetur et repellendus. Odio voluptatum provident officiis eum est.</p><p>Ut voluptatem aut accusantium amet fuga omnis maiores. Praesentium nihil labore enim sed. Aut veniam saepe id vitae unde.</p><p>Corporis fugiat eaque sunt minus et dolorem. Facilis sit sit ad eos ipsum possimus. Qui similique modi neque incidunt atque debitis quis. Deserunt ut praesentium necessitatibus nam. Autem placeat fugiat quasi quisquam corporis.</p>', NULL, '2022-02-03 19:53:50', '2022-02-03 19:53:50'),
(19, 2, 3, 'Modi natus maxime perferendis enim et.', 'consectetur-ea-quae-illum-maxime-ea', NULL, 'Quasi aut perferendis ut voluptatem beatae dolorum. Harum voluptas dolorum nemo magnam et maxime et. In quia est quam illum eos. Nostrum dignissimos quasi officia.', '<p>Qui vero quia non delectus omnis. Qui fugit consequatur rerum et. Dicta pariatur rem in facere. Dolores ut sed at dignissimos iusto cum quo.</p><p>Et sit atque culpa quis sunt corporis. Rem eveniet et voluptates voluptatum rem animi. Dolores aliquid non ducimus at quis.</p><p>Aut voluptatibus velit consequatur dolores totam repellendus molestiae. Quidem sint et aliquam itaque. Ut et doloremque totam. Nesciunt autem eos accusantium voluptatum aut non.</p><p>Et perspiciatis et aut neque. Culpa et eum dolores. Nesciunt consequatur harum illo recusandae vel omnis impedit.</p><p>Velit tenetur voluptatem ipsa nostrum qui. Et tempore non aut consequuntur iusto eius. Magni placeat dicta iste distinctio.</p><p>Reiciendis reiciendis aut ullam. Ea aspernatur esse rerum non tempore. Eligendi voluptatum quisquam accusantium magni consequatur. Porro hic reiciendis voluptates sint nihil aut quidem dolorem.</p><p>Magni deserunt quasi aperiam impedit et qui quo. Culpa et fugit nam doloribus cum impedit exercitationem libero. Ipsa dolorem veritatis ducimus ea sunt tempore. Sit non cupiditate non quidem.</p><p>Eos quisquam aut alias quia aut. Possimus eligendi sunt voluptate nisi. Quia veritatis dolores sed magnam.</p><p>Voluptas reiciendis aut est id ut quaerat. Ipsum quos impedit illum quos qui inventore. Velit minus corrupti voluptatem minus laboriosam.</p>', NULL, '2022-02-03 19:53:50', '2022-02-03 19:53:50'),
(20, 1, 2, 'Animi dolore.', 'ratione-necessitatibus-aut-illum-ut-rerum', NULL, 'Praesentium ut voluptatum at eos modi. Alias dolores omnis totam aut est.', '<p>Non incidunt vel ea est. Quia maiores consectetur enim quia sint nesciunt iste. Saepe cupiditate quia incidunt ut et voluptas.</p><p>Vel vel et dolorem non et. Tempore magnam blanditiis quia voluptatem voluptates. Et eum ut qui ipsum.</p><p>Iure quis et at labore. Neque quasi omnis ipsam consequatur qui quasi. Accusamus dolore commodi iure natus mollitia quo.</p><p>Omnis voluptas asperiores suscipit asperiores quae sed delectus voluptas. Debitis non ea minus sed. Vero est unde dolores in et officia sed. Quae labore mollitia praesentium et non.</p><p>Deserunt molestias repellendus ab est veniam. Sit similique ut et vel recusandae repellat. Consequatur ratione saepe tenetur voluptate aut explicabo incidunt qui. Ullam corporis aut possimus qui rerum.</p><p>Porro aut est saepe recusandae. Optio et cum vitae laborum beatae error sed est. Culpa ut iure et similique sit. Qui sed unde soluta tempore sed distinctio. Est et ut est officia.</p><p>Minima quibusdam ad accusamus vitae consequatur. Quibusdam dignissimos illo dolor fugiat. Et dolorum est porro harum necessitatibus. Quis neque voluptatem optio magnam atque in.</p><p>Fugit et in ratione. Occaecati id aspernatur optio dicta hic. Eius ut non nostrum odio asperiores repellat quos. Est distinctio voluptatem non amet rerum.</p><p>Voluptas natus itaque dolorem accusamus. Porro voluptatum at distinctio fugit aut odio.</p>', NULL, '2022-02-03 19:53:50', '2022-02-03 19:53:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fadhlu Ibnu \'Abbbd', 'fadhluibnu', 'fadhluibnuabbad@gmail.com', NULL, '$2y$10$nSDbhDxUvVRrisFDCzir6.3PqLnlQidct3Y65fRF8qPcw8x29unyi', NULL, '2022-02-03 19:53:48', '2022-02-03 19:53:48'),
(2, 'Kamila Haryanti', 'vtampubolon', 'znashiruddin@example.net', '2022-02-03 19:53:48', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kNVisOXLIJ', '2022-02-03 19:53:48', '2022-02-03 19:53:48'),
(3, 'Cindy Ayu Hariyah', 'olga09', 'iriana00@example.org', '2022-02-03 19:53:48', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xiJWUxf3jo', '2022-02-03 19:53:48', '2022-02-03 19:53:48'),
(4, 'Artanto Kurniawan', 'bmanullang', 'rahmi60@example.com', '2022-02-03 19:53:48', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pvGRQGzmSVjeem7CbnRcoYBaPPGH3YSuDFMFXr6O9GrGpnSeUFE2iiaxUyMx', '2022-02-03 19:53:48', '2022-02-03 19:53:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
