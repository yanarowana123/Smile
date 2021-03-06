-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               8.0.15 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица smile.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы smile.contacts: ~9 rows (приблизительно)
DELETE FROM `contacts`;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `content`, `type`, `created_at`, `updated_at`) VALUES
	(1, 'г. Астана, ул. Сыганак, д. 18/3', 1, '2020-10-17 12:12:41', '2020-10-17 12:12:41'),
	(2, 'Пн - Пт 09:00 - 00:00', 2, '2020-10-17 12:14:40', '2020-10-17 12:14:40'),
	(3, 'Сб - Вс 10:00 - 20:00', 2, '2020-10-17 12:14:49', '2020-10-17 12:14:49'),
	(4, '+7 (7172) 69-59-10', 0, '2020-10-17 12:14:58', '2020-10-17 12:14:58'),
	(5, '+7 (778) 444-47-75', 0, '2020-10-17 12:15:05', '2020-10-17 12:15:05'),
	(6, '+7 (702) 241-22-79', 0, '2020-10-17 12:15:12', '2020-10-17 12:15:12'),
	(7, 'few', 4, '2020-10-17 12:15:32', '2020-10-17 12:15:32'),
	(8, 'vewqve', 3, '2020-10-17 12:15:39', '2020-10-17 12:15:39'),
	(10, 'qwveqw', 5, '2020-10-17 12:15:48', '2020-10-17 12:15:48');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Дамп структуры для таблица smile.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
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

-- Дамп данных таблицы smile.failed_jobs: ~0 rows (приблизительно)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Дамп структуры для таблица smile.features
CREATE TABLE IF NOT EXISTS `features` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_kz` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_ru` text COLLATE utf8mb4_unicode_ci,
  `content_en` text COLLATE utf8mb4_unicode_ci,
  `content_kz` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы smile.features: ~17 rows (приблизительно)
DELETE FROM `features`;
/*!40000 ALTER TABLE `features` DISABLE KEYS */;
INSERT INTO `features` (`id`, `title_ru`, `title_en`, `title_kz`, `content_ru`, `content_en`, `content_kz`, `image`, `block`, `created_at`, `updated_at`) VALUES
	(2, NULL, NULL, NULL, 'Вы записываетесь на бесплатную консультацию', 'Вы записываетесь на бесплатную консультацию', 'CC', NULL, 0, '2020-10-17 13:35:37', '2020-10-18 07:18:22'),
	(3, NULL, NULL, NULL, 'На осмотре наш специалист ставит диагноз и назначает план лечения', 'На осмотре наш специалист ставит диагноз и назначает план лечения', NULL, NULL, 0, '2020-10-17 13:35:42', '2020-10-17 13:35:42'),
	(4, NULL, NULL, NULL, 'При необходимости делаем гигиену и чистку зубов', 'При необходимости делаем гигиену и чистку зубов', NULL, NULL, 0, '2020-10-17 13:35:47', '2020-10-17 13:35:47'),
	(5, NULL, NULL, NULL, 'Выполняем процедуру лечения', 'Выполняем процедуру лечения', NULL, NULL, 0, '2020-10-17 13:35:52', '2020-10-17 13:35:52'),
	(6, 'Лечение зубов и эстетическая стоматология', 'Лечение зубов и эстетическая стоматологияXX', 'XX', '<div class="services__item-link">Лечение кариеса</div>\r\n\r\n<div class="services__item-link">Лечение пульпита</div>\r\n\r\n<div class="services__item-link">Лечение воспалительных процессов</div>\r\n\r\n<div class="services__item-link">Реставрация зубов</div>\r\n\r\n<div class="services__item-link">Снятие зубных отложений (ультразвук, Airflow)</div>', '<div class="services__item-link">Лечение кариеса</div>\r\n\r\n<div class="services__item-link">Лечение пульпита</div>\r\n\r\n<div class="services__item-link">Лечение воспалительных процессов</div>\r\n\r\n<div class="services__item-link">Реставрация зубов</div>\r\n\r\n<div class="services__item-link">Снятие зубных отложений (ультразвук, Airflow)</div>', '<div class="services__item-link">Лечение кариеса</div>\r\n\r\n<div class="services__item-link">Лечение пульпита</div>\r\n\r\n<div class="services__item-link">Лечение воспалительных процессов</div>\r\n\r\n<div class="services__item-link">Реставрация зубов</div>\r\n\r\n<div class="services__item-link">Снятие зубных отложений (ультразвук, Airflow)</div>', 'uploads/3MBs4OJPMN1psgxOT0y1PjxeO0szRo1Qg9TaVmxb.svg', 3, '2020-10-17 13:42:36', '2020-10-18 07:19:22'),
	(7, 'Вкладки и восстановление', 'Вкладки и восстановление', NULL, '<div class="services__item-link">Вкладки: керамические, серебряные, циркониевые, металлические</div>\r\n\r\n<div class="services__item-link">Восстановление поломанных зубов</div>\r\n\r\n<div class="services__item-link">Моделирование улыбки до начала лечения</div>', '<div class="services__item-link">Вкладки: керамические, серебряные, циркониевые, металлические</div>\r\n\r\n<div class="services__item-link">Восстановление поломанных зубов</div>\r\n\r\n<div class="services__item-link">Моделирование улыбки до начала лечения</div>', NULL, 'uploads/V9JAIPdjVKnjqXtGb5d2Z0VZjuLr0J7AqFBYvtf1.svg', 3, '2020-10-17 13:57:51', '2020-10-17 13:57:51'),
	(8, 'Брекет система', 'Брекет система', NULL, '<div class="services__item-link">\r\n                            Металлические (производство Китай, Германия)\r\n                        </div>\r\n                        <div class="services__item-link">Керамические</div>\r\n                        <div class="services__item-link">Сапфировые</div>\r\n                        <div class="services__item-link">Инвизилайнеры, элайнеры</div>', '<div class="services__item-link">\r\n                            Металлические (производство Китай, Германия)\r\n                        </div>\r\n                        <div class="services__item-link">Керамические</div>\r\n                        <div class="services__item-link">Сапфировые</div>\r\n                        <div class="services__item-link">Инвизилайнеры, элайнеры</div>', NULL, 'uploads/S2CDIFXLfvCy3uemn0g9OGjkHPaEeVugOtW8qCoz.svg', 3, '2020-10-17 13:58:23', '2020-10-17 13:58:23'),
	(9, 'Отбеливание и осветление зубов', 'Отбеливание и осветление зубов', NULL, '<div class="services__item-link">Отбеливание</div>\r\n                        <div class="services__item-link">\r\n                            Уникальная технология осветления зубов\r\n                        </div>\r\n                        <div class="services__item-link">Эндоотбеливание</div>\r\n                        <div class="services__item-link">Инхрустация</div>', '<div class="services__item-link">Отбеливание</div>\r\n                        <div class="services__item-link">\r\n                            Уникальная технология осветления зубов\r\n                        </div>\r\n                        <div class="services__item-link">Эндоотбеливание</div>\r\n                        <div class="services__item-link">Инхрустация</div>', NULL, 'uploads/dROVr3JjpRIaGnpUmMknkflwxVHJZrceH7OmdI5m.svg', 3, '2020-10-17 14:02:02', '2020-10-17 14:02:02'),
	(10, 'Протезирование зубов любой сложности', 'Протезирование зубов любой сложности', NULL, '<div class="services__item-link">Съемные протезы</div>\r\n                        <div class="services__item-link">\r\n                            Коронки металлокерамические\r\n                        </div>\r\n                        <div class="services__item-link">Циркониевые</div>\r\n                        <div class="services__item-link">Безметалловые</div>\r\n                        <div class="services__item-link">\r\n                            Эстетические и шинирующие бюгеля\r\n                        </div>', '<div class="services__item-link">Съемные протезы</div>\r\n                        <div class="services__item-link">\r\n                            Коронки металлокерамические\r\n                        </div>\r\n                        <div class="services__item-link">Циркониевые</div>\r\n                        <div class="services__item-link">Безметалловые</div>\r\n                        <div class="services__item-link">\r\n                            Эстетические и шинирующие бюгеля\r\n                        </div>', NULL, 'uploads/uYOsuEuNRmVL0N1jDYMutJCAYe5mcOuVgGUHvrKD.svg', 3, '2020-10-17 14:02:28', '2020-10-17 14:02:28'),
	(11, 'Хирургия и имплантация', 'Хирургия и имплантация', NULL, '<div class="services__item-link">Удаление зуба мудрости</div>\r\n                        <div class="services__item-link">\r\n                            Удаление зубов любой сложности\r\n                        </div>\r\n                        <div class="services__item-link">Имплантация</div>\r\n                        <div class="services__item-link">Синус лифтинг</div>\r\n                        <div class="services__item-link">Резекция</div>\r\n                        <div class="services__item-link">Пластика рецессии десны</div>\r\n                        <div class="services__item-link">Пластика уздечки</div>', '<div class="services__item-link">Удаление зуба мудрости</div>\r\n                        <div class="services__item-link">\r\n                            Удаление зубов любой сложности\r\n                        </div>\r\n                        <div class="services__item-link">Имплантация</div>\r\n                        <div class="services__item-link">Синус лифтинг</div>\r\n                        <div class="services__item-link">Резекция</div>\r\n                        <div class="services__item-link">Пластика рецессии десны</div>\r\n                        <div class="services__item-link">Пластика уздечки</div>', NULL, 'uploads/pW4cang4riySdj9SgO1RqG9RtOw94eCnHdoyv6rz.svg', 3, '2020-10-17 14:02:55', '2020-10-17 14:02:55'),
	(13, NULL, NULL, NULL, 'Проводим забор крови пациента в биотехнологичную пробирку Plasmolifting™', 'Проводим забор крови пациента в биотехнологичную пробирку Plasmolifting™', 'VE', NULL, 1, '2020-10-17 14:47:49', '2020-10-18 07:18:41'),
	(14, NULL, NULL, NULL, 'Центрифугируем кровь и получаем инъекционную форму тромбоцитарной аутоплазмы', 'Центрифугируем кровь и получаем инъекционную форму тромбоцитарной аутоплазмы', NULL, NULL, 1, '2020-10-17 14:47:59', '2020-10-17 14:47:59'),
	(15, NULL, NULL, NULL, 'С помощью расходных материалов производим обколку зоны лечения', 'С помощью расходных материалов производим обколку зоны лечения', NULL, NULL, 1, '2020-10-17 14:48:05', '2020-10-17 14:48:05'),
	(16, NULL, NULL, NULL, 'Доктора имеют стаж от 10 лет до 20 лет работы. Мы работаем коллегиально: хирург, терапевт, ортопед. Разрабатываем подробный план лечения исходя из желания и возможности наших пациентов. Общий стаж 7-ых докторов 75 лет', 'Доктора имеют стаж от 10 лет до 20 лет работы. Мы работаем коллегиально: хирург, терапевт, ортопед. Разрабатываем подробный план лечения исходя из желания и возможности наших пациентов. Общий стаж 7-ых докторов 75 лет', 'XX', NULL, 2, '2020-10-17 14:53:56', '2020-10-18 07:18:51'),
	(17, NULL, NULL, NULL, 'В нашей клинике мы также работаем с микроскопом', 'В нашей клинике мы также работаем с микроскопом', NULL, NULL, 2, '2020-10-17 14:54:01', '2020-10-17 14:54:01'),
	(18, NULL, NULL, NULL, 'За время нашей деятельности мы доказали, что нам под силу любые сложные работы', 'За время нашей деятельности мы доказали, что нам под силу любые сложные работы', NULL, NULL, 2, '2020-10-17 14:54:06', '2020-10-17 14:54:06'),
	(19, NULL, NULL, NULL, 'Наша клиника находится в центре нашей столицы. Недалеко от Байтерека, и в 50 шагах от Абу-Даби Плаза', 'Наша клиника находится в центре нашей столицы. Недалеко от Байтерека, и в 50 шагах от Абу-Даби Плаза', NULL, NULL, 2, '2020-10-17 14:54:11', '2020-10-17 14:54:11');
/*!40000 ALTER TABLE `features` ENABLE KEYS */;

-- Дамп структуры для таблица smile.feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_contacted` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы smile.feedback: ~0 rows (приблизительно)
DELETE FROM `feedback`;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;

-- Дамп структуры для таблица smile.mains
CREATE TABLE IF NOT EXISTS `mains` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_kz` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_ru` text COLLATE utf8mb4_unicode_ci,
  `content_en` text COLLATE utf8mb4_unicode_ci,
  `content_kz` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block` int(10) unsigned NOT NULL,
  `page` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы smile.mains: ~10 rows (приблизительно)
DELETE FROM `mains`;
/*!40000 ALTER TABLE `mains` DISABLE KEYS */;
INSERT INTO `mains` (`id`, `title_ru`, `title_en`, `title_kz`, `content_ru`, `content_en`, `content_kz`, `image`, `block`, `page`, `created_at`, `updated_at`) VALUES
	(1, 'Smile - чтобы вы улыбались', 'Smile - чтобы вы улыбались', 'XX', '<p>Запишитесь на онлайн консультацию сейчас и получите скидку</p>', '<p>Запишитесь на онлайн консультацию сейчас и получите скидку</p>', '<p>XX</p>', 'img/main-icon.png', 0, 0, '2020-10-17 14:50:08', '2020-10-18 07:15:50'),
	(2, 'Инновационная технология в стоматологии', 'Инновационная технология в стоматологии', 'VE', '<p>Плазмолифтинг (Plasmolifting&trade; ) - методика, которая позволяет лечить заболевания пародонта, снимать кровоточивость дёсен, устранять подвижность зубов, неприятный запах изо рта и восстанавливать жевательную функцию.</p>', '<p>Плазмолифтинг (Plasmolifting&trade; ) - методика, которая позволяет лечить заболевания пародонта, снимать кровоточивость дёсен, устранять подвижность зубов, неприятный запах изо рта и восстанавливать жевательную функцию.</p>', '<p>XC</p>', NULL, 1, 0, NULL, '2020-10-18 07:18:31'),
	(3, 'Пройдите онлайн консультацию и получите скидку!', 'Пройдите онлайн консультацию и получите скидку!', 'qwe', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>', '<p>ewq</p>', NULL, 2, 0, NULL, '2020-10-18 07:18:58'),
	(4, 'Кто мы?', 'Кто мы?', 'EWW', '<p>Стоматология &laquo;СМАЙЛ&raquo; была создана в 2011 г, основатель клиники является Сарсенов Серик Канаевич стоматолог-ортопед, стаж более 16 лет.X</p>', '<p>Стоматология &laquo;СМАЙЛ&raquo; была создана в 2011 г, основатель клиники является Сарсенов Серик Канаевич стоматолог-ортопед, стаж более 16 лет.</p>', '<p>VV</p>', 'img/gallery-page-main-photo.png', 0, 1, NULL, '2020-10-18 07:19:08'),
	(5, NULL, NULL, NULL, '<p>За 8 лет существования наша стоматология зарекомендовала себя как динамично развивающаяся клиника с хорошей репутацией, за это время мы выросли в большую стоматологию.</p>\r\n\r\n<p>В вашем распоряжении 3 стоматологических кабинета, где проводят широкий спектр стоматологических услугX</p>', '<p>За 8 лет существования наша стоматология зарекомендовала себя как динамично развивающаяся клиника с хорошей репутацией, за это время мы выросли в большую стоматологию.</p>\r\n\r\n<p>В вашем распоряжении 3 стоматологических кабинета, где проводят широкий спектр стоматологических услуг</p>', NULL, NULL, 1, 1, NULL, '2020-10-17 11:35:29'),
	(6, 'Мы предоставляем полный спектр услугX', 'Мы предоставляем полный спектр услуг', NULL, '<p>Сегодня никого не удивишь широчайшим спектром стоматологических услуг, который может предоставить небольшая по масштабу клиника. Стоматология Smile - это пример того, как в уютной обстановке можно решить практически любые проблемы, связанные с зубами и деснами.</p>', '<p>Сегодня никого не удивишь широчайшим спектром стоматологических услуг, который может предоставить небольшая по масштабу клиника. Стоматология Smile - это пример того, как в уютной обстановке можно решить практически любые проблемы, связанные с зубами и деснами.</p>', NULL, NULL, 0, 2, NULL, '2020-10-17 11:46:42'),
	(7, 'Наша командаX', 'Наша команда', NULL, '<p>Доктора имеют стаж от 10 лет до 20 лет работы. Мы работаем коллегиально: хирург, терапевт, ортопед. Разрабатываем подробный план лечения исходя из желания и возможности наших пациентов.</p>', '<p>Доктора имеют стаж от 10 лет до 20 лет работы. Мы работаем коллегиально: хирург, терапевт, ортопед. Разрабатываем подробный план лечения исходя из желания и возможности наших пациентов.</p>', NULL, NULL, 0, 3, NULL, '2020-10-17 11:50:28'),
	(8, 'Наши работы', 'Наши работы', NULL, 'Наша стоматологическая клиника работает уже 10 лет. За это время у нас пролечились более 40000 человек. У нас богатый опыт в имплантации, лечении зубов, изготовлении коронок, балочных конструкций съемных протезов, коронок на имплантах.', 'Наша стоматологическая клиника работает уже 10 лет. За это время у нас пролечились более 40000 человек. У нас богатый опыт в имплантации, лечении зубов, изготовлении коронок, балочных конструкций съемных протезов, коронок на имплантах.', NULL, 'img/our-works-bg.png', 0, 4, NULL, NULL),
	(9, NULL, NULL, NULL, '  Мы в ответе за репутацию клиники, поэтому главное для нас -\r\n                    гарантировать здоровье и сделать улыбки людей ослепительными на\r\n                    долгие годы. Мы дорожим нашими постоянными пациентами и всегда рады\r\n                    новым гостям клиники.', '  Мы в ответе за репутацию клиники, поэтому главное для нас -\r\n                    гарантировать здоровье и сделать улыбки людей ослепительными на\r\n                    долгие годы. Мы дорожим нашими постоянными пациентами и всегда рады\r\n                    новым гостям клиники.', NULL, NULL, 1, 4, NULL, '2020-10-17 11:55:37'),
	(10, 'Свяжитесь с нами!X', 'Свяжитесь с нами!', NULL, '<p>Наша клиника находится в центре нашей столицы. Недалеко от Байтерека, и в 50 шагах от Абу-Даби Плаза.</p>', '<p>Наша клиника находится в центре нашей столицы. Недалеко от Байтерека, и в 50 шагах от Абу-Даби Плаза.</p>', NULL, NULL, 0, 5, NULL, '2020-10-17 12:00:01');
/*!40000 ALTER TABLE `mains` ENABLE KEYS */;

-- Дамп структуры для таблица smile.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы smile.migrations: ~9 rows (приблизительно)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2020_10_14_165104_create_staff_table', 1),
	(6, '2020_10_14_165152_create_contacts_table', 1),
	(7, '2020_10_14_165751_create_photos_table', 1),
	(8, '2020_10_17_065012_create_mains_table', 1),
	(9, '2020_10_17_065052_create_features_table', 1),
	(10, '2020_10_19_014342_create_feedback_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Дамп структуры для таблица smile.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы smile.password_resets: ~0 rows (приблизительно)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Дамп структуры для таблица smile.photos
CREATE TABLE IF NOT EXISTS `photos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы smile.photos: ~12 rows (приблизительно)
DELETE FROM `photos`;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` (`id`, `path`, `page`, `created_at`, `updated_at`) VALUES
	(2, 'img/about-us-img.jpg', 0, NULL, NULL),
	(3, 'img/main-slick-1.png', 1, NULL, NULL),
	(10, 'img/gallery-content-1.png', 2, NULL, NULL),
	(11, 'img/gallery-content-2.png', 2, NULL, NULL),
	(12, 'img/gallery-content-3.png', 2, NULL, NULL),
	(13, 'img/our-works-box1.jpg', 3, NULL, NULL),
	(14, 'img/our-works-box2.jpg', 3, NULL, NULL),
	(15, 'img/our-works-box3.jpg', 3, NULL, NULL),
	(16, 'img/our-works-box4.jpg', 3, NULL, NULL),
	(17, 'img/our-works-box5.jpg', 3, NULL, NULL),
	(18, 'uploads/B0pDzj9L5Pw2Dzk70D1T3ehIFN1KEl9bCZHExiiJ.jpeg', 1, '2020-10-17 16:14:58', '2020-10-17 16:14:58');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;

-- Дамп структуры для таблица smile.staff
CREATE TABLE IF NOT EXISTS `staff` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_kz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_kz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы smile.staff: ~10 rows (приблизительно)
DELETE FROM `staff`;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` (`id`, `name_ru`, `name_en`, `name_kz`, `content_ru`, `content_en`, `content_kz`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Сарсенов Серик КанаевичX', 'Сарсенов Серик Канаевич', '', 'Директор, врач-стоматолог, стаж 15 лет', 'Директор, врач-стоматолог, стаж 15 лет', '', 'uploads/3MfoRyQV0QDPXFa4tBZiaBQGwK3Bcy0lPprsL1FK.jpeg', '2020-10-17 12:33:41', '2020-10-17 12:37:48'),
	(2, 'Мухиден Махаббат Болаткызы', 'Мухиден Махаббат Болаткызы', '', 'Заместитель директора', 'Заместитель директора', '', 'uploads/TBbzL4mh03Y3zYMSMF0I7g3DInkPEqN9pxsO928B.jpeg', '2020-10-17 12:38:12', '2020-10-17 12:38:12'),
	(3, 'Карпова Ирина Вячеславовна', 'Карпова Ирина Вячеславовна', '', 'Врач-стоматолог, стаж 14 лет', 'Врач-стоматолог, стаж 14 лет', '', 'uploads/Jca9i0jqNUERvbx7y42o8nPxgzjA5FilZwVpZB2v.jpeg', '2020-10-17 12:38:34', '2020-10-17 12:38:34'),
	(4, 'Гуламова Дильнара Эркиновна', 'Гуламова Дильнара Эркиновна', '', 'Врач-стоматолог, стаж 14 лет', 'Врач-стоматолог, стаж 14 лет', '', 'uploads/wCVNQxVGezsgJhXhX8SEQBpnnyeweXYd5cpDTkHb.jpeg', '2020-10-17 12:38:55', '2020-10-17 12:38:55'),
	(5, 'Турсунов Азиз Абдуллаевич', 'Турсунов Азиз Абдуллаевич', '', 'Врач-стоматолог, стаж 6 лет', 'Врач-стоматолог, стаж 6 лет', '', 'uploads/vGRofIBJTMyXUxc2uww9wMxJtn6iOo9Sqo75A8te.jpeg', '2020-10-17 12:39:11', '2020-10-17 12:39:11'),
	(6, 'Бурбаев Абу Ергазыевич', 'Бурбаев Абу Ергазыевич', '', 'Врач-стоматолог, стаж 5 лет', 'Врач-стоматолог, стаж 5 лет', '', 'uploads/FlPvJYncaxgdBNmqRm57lQoADfOcAcnZhhjXFO6d.jpeg', '2020-10-17 12:39:27', '2020-10-17 12:40:26'),
	(7, 'Кинжалина Сандугаш Алмазовна', 'Кинжалина Сандугаш Алмазовна', '', 'Администратор', 'Администратор', '', 'uploads/PtQFnXbIBsCx6RbdJFVaZHKR71rZTFQoUbNUXBQm.jpeg', '2020-10-17 12:41:00', '2020-10-17 12:41:49'),
	(8, 'Жетібаев Мирас Қуанышұлы', 'Жетібаев Мирас Қуанышұлы', '', 'Ассистент стоматолога', 'Ассистент стоматолога', '', 'uploads/wJeq1XZJaWDsDMEOHkROYyfVSezv7TMAQmfh8TJc.jpeg', '2020-10-17 12:41:39', '2020-10-17 12:41:39'),
	(9, 'Тулеуов Мират', 'Тулеуов Мират', 'v', 'Ассистент стоматолога', 'Ассистент стоматолога', 'q', 'uploads/QzZvTtUFLfHMLi9IeORFy3qhk1CyqsAMGMYjFDo6.jpeg', '2020-10-17 12:42:05', '2020-10-18 17:07:36'),
	(11, 'Айтсаутқызы Айгеримт', 'Айтсаутқызы Айгеримт', 'Айгеримт', 'Младший медицинский работник', 'Младший медицинский работник', 'Айгеримт', 'uploads/IesZzcOwNwFQxcoV5e2lbdzplsW5qbpNMP1OauXU.jpeg', '2020-10-17 12:43:23', '2020-10-18 07:19:37');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;

-- Дамп структуры для таблица smile.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы smile.users: ~0 rows (приблизительно)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$xSBdRLWyT/OjwIpVW8/SRevxKiElSlj1y9H2/28Eeg7Yqc4Crg18e', NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
