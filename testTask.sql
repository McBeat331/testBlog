-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.33 - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Дамп структуры для таблица testblog.failed_jobs
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

-- Дамп данных таблицы testblog.failed_jobs: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Дамп структуры для таблица testblog.media
CREATE TABLE IF NOT EXISTS `media` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) unsigned NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `media_uuid_unique` (`uuid`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  KEY `media_order_column_index` (`order_column`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы testblog.media: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT IGNORE INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
	(4, 'App\\Models\\Post', 3, '7ae92d3e-6513-4527-ae7c-dfcd32b7fe55', 'post', 'Pic', 'Pic.png', 'image/png', 'media', 'media', 265474, '[]', '[]', '{"thumb": true, "smallThumb": true, "randomTopPost": true, "randomSecondPost": true}', '[]', 1, '2022-05-17 21:23:41', '2022-05-17 21:23:45'),
	(5, 'App\\Models\\Post', 4, '10055e39-55db-476e-96a9-12afb0f453d3', 'post', 'Pic 2 x', 'Pic-2-x.png', 'image/png', 'media', 'media', 282125, '[]', '[]', '{"thumb": true, "smallThumb": true, "randomTopPost": true, "randomSecondPost": true}', '[]', 2, '2022-05-17 21:29:59', '2022-05-17 21:30:03'),
	(6, 'App\\Models\\Post', 5, '77ee186e-6444-4e1f-8524-57e4ac027e4a', 'post', 'Pic', 'Pic.png', 'image/png', 'media', 'media', 215479, '[]', '[]', '{"thumb": true, "smallThumb": true, "randomTopPost": true, "randomSecondPost": true}', '[]', 3, '2022-05-17 21:32:09', '2022-05-17 21:32:11'),
	(7, 'App\\Models\\Post', 6, '7641b284-6a26-41af-ae13-daad9cb314e8', 'post', 'Pic-1', 'Pic-1.png', 'image/png', 'media', 'media', 143822, '[]', '[]', '{"thumb": true, "smallThumb": true, "randomTopPost": true, "randomSecondPost": true}', '[]', 4, '2022-05-17 21:32:58', '2022-05-17 21:33:01'),
	(8, 'App\\Models\\Post', 7, 'ce941f70-a359-4671-aee0-095b9522cb59', 'post', 'Pic-2', 'Pic-2.png', 'image/png', 'media', 'media', 148185, '[]', '[]', '{"thumb": true, "smallThumb": true, "randomTopPost": true, "randomSecondPost": true}', '[]', 5, '2022-05-17 21:33:43', '2022-05-17 21:33:45'),
	(9, 'App\\Models\\Post', 8, '31a784d9-1bb1-4645-b098-2df972a92e51', 'post', 'Pic-3', 'Pic-3.png', 'image/png', 'media', 'media', 168394, '[]', '[]', '{"thumb": true, "smallThumb": true, "randomTopPost": true, "randomSecondPost": true}', '[]', 6, '2022-05-17 21:34:55', '2022-05-17 21:34:57'),
	(10, 'App\\Models\\Post', 9, 'c275d32d-59ea-401d-9f51-d2f8bf9193bb', 'post', 'Pic-4', 'Pic-4.png', 'image/png', 'media', 'media', 176613, '[]', '[]', '{"thumb": true, "smallThumb": true, "randomTopPost": true, "randomSecondPost": true}', '[]', 7, '2022-05-17 21:35:42', '2022-05-17 21:35:43'),
	(11, 'App\\Models\\Post', 10, '20840636-6ff6-4592-b278-0ff1e5291d60', 'post', 'Pic-5', 'Pic-5.png', 'image/png', 'media', 'media', 108062, '[]', '[]', '{"thumb": true, "smallThumb": true, "randomTopPost": true, "randomSecondPost": true}', '[]', 8, '2022-05-17 21:36:44', '2022-05-17 21:36:47'),
	(12, 'App\\Models\\Post', 11, '0937f1a4-fb35-4440-8709-252e24656000', 'post', 'Pic-1', 'Pic-1.png', 'image/png', 'media', 'media', 26613, '[]', '[]', '{"thumb": true, "smallThumb": true, "randomTopPost": true, "randomSecondPost": true}', '[]', 9, '2022-05-17 21:37:50', '2022-05-17 21:37:51'),
	(13, 'App\\Models\\Post', 12, '72258ce9-ab12-42a6-873d-b45dc4a9af1f', 'post', 'Pic-2', 'Pic-2.png', 'image/png', 'media', 'media', 27084, '[]', '[]', '{"thumb": true, "smallThumb": true, "randomTopPost": true, "randomSecondPost": true}', '[]', 10, '2022-05-17 21:40:41', '2022-05-17 21:40:42');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;

-- Дамп структуры для таблица testblog.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы testblog.migrations: ~7 rows (приблизительно)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(9, '2014_10_12_000000_create_users_table', 1),
	(10, '2014_10_12_100000_create_password_resets_table', 1),
	(11, '2019_08_19_000000_create_failed_jobs_table', 1),
	(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(16, '2022_05_16_223341_create_post_category_table', 2),
	(18, '2022_05_16_223445_create_post_table', 3),
	(19, '2022_05_17_191710_create_media_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Дамп структуры для таблица testblog.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы testblog.password_resets: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Дамп структуры для таблица testblog.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
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

-- Дамп данных таблицы testblog.personal_access_tokens: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Дамп структуры для таблица testblog.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_read` int(11) NOT NULL,
  `author_id` bigint(20) unsigned NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_author_id_index` (`author_id`),
  KEY `posts_category_id_index` (`category_id`),
  CONSTRAINT `posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `post_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы testblog.posts: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT IGNORE INTO `posts` (`id`, `title`, `content`, `time_read`, `author_id`, `category_id`, `created_at`, `updated_at`) VALUES
	(3, 'A Sure Way To Get Rid Of Your Back Ache Problem', 'If you have tried everything, but still seem to suffer from snoring, don’t give up. Before turning to surgery, consider shopping for anti-snore devices. These products do not typically require a prescription, are economically priced and may just be the answer that you are looking for. However, as is the case when shopping for anything, there are a lot of anti-snore devices out there and…', 6, 5, 3, '2022-05-17 21:23:40', '2022-05-17 21:23:40'),
	(4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Can you put it into a banner that is not alarming, but eye catching and not too giant. Dogpile that quick-win curate make it look like digital low-hanging fruit, nor make it more corporate please. Collaboration through advanced technlogy golden goose, so what are the expectations. We need to aspirationalise our offerings. Tiger team. Personal development make it a priority can I just chime in on that one drink the Kool-aid, and call in the air support. Optimize for search not enough bandwidth if you\'re not hurting you\'re not winning so product market fit but the horse is out of the barn cc me on that yet quantity. Blue money. Let\'s take this conversation offline knowledge process outsourcing so cross pollination across our domains. We should leverage existing asserts that ladder up to the message. Circle back around upsell so post launch and single wringable neck. Roll back strategy digitalize. Target rich environment great plan! let me diarize this, and we can synchronise ourselves at a later timepoint increase the resolution, scale it up we need a larger print, introduccion we just need to put these last issues to bed, for deliverables. Organic growth we should leverage existing asserts that ladder up to the message get six alpha pups in here for a focus group, shotgun approach, or diversify kpis. Have bandwidth cc me on that for player-coach let\'s take this conversation offline open door policy. Blue sky thinking old boys club don\'t over think it future-proof, and going forward offline this discussion. Pivot run it up the flagpole, yet best practices pull in ten extra bodies to help roll the tortoise, or we need to crystallize a plan. Accountable talk even dead cats bounce, but highlights bells and whistles we should leverage existing asserts that ladder up to the message we\'re ahead of the curve on that one but big data. A loss a day will keep you focus drop-dead date accountable talk. Bob called an all-hands this afternoon prioritize these line items Q1, nor i am dead inside. Productize. Big data we need to build it so that it scales going forward. Translating our vision of having a market leading platfrom high-level. Player-coach drop-dead date, for we should leverage existing asserts that ladder up to the message ramp up who\'s responsible for the ask for this request?, clear blue water. Donuts in the break room gain traction, and upstream selling.', 6, 5, 3, '2022-05-17 21:29:58', '2022-05-17 21:29:58'),
	(5, 'Skin Cancer Prevention 5 Ways To Protect Yourself From Uv Rays', 'We want to see more charts technologically savvy but dunder mifflin for best practices, so circle back. Make it more corporate please show pony can you put it into a banner that is not alarming, but eye catching and not too giant and quick sync. Make sure to include in your wheelhouse make it more corporate please those options are already baked in with this model regroup but take five, punch the tree, and come back in here with a clear head knowledge is power. What do you feel you would bring to the table if you were hired for this position. Productize rock Star/Ninja. Corporate synergy incentivization yet close the loop drink the Kool-aid, so code for red flag, or what are the expectations. Thought shower. I have zero cycles for this touch base so strategic staircase, yet golden goose. I am dead inside can we take this offline. PowerPointless clear blue water. Quick win on this journey but not enough bandwidth re-inventing the wheel marketing, illustration criticality . Globalize (let\'s not try to) boil the ocean (here/there/everywhere) so run it up the flag pole for effort made was a lot they have downloaded gmail and seems to be working for now, prethink.', 6, 5, 3, '2022-05-17 21:32:09', '2022-05-17 21:32:09'),
	(6, 'Old boys club message the initiative', 'Regroup. Old boys club message the initiative for beef up deliverables nor sacred cow, but critical mass. Product launch ping me mumbo jumbo nor we need to start advertising on social media. Hard stop lean into that problem for we\'ve got to manage that low hanging fruit or at the end of the day, and crank this out nor crank this out. Helicopter view touch base nor to be inspired is to become creative, innovative and energized we want this philosophy to trickle down to all our stakeholders for pushback. Big data move the needle, yet no scraps hit the floor, so hop on the bandwagon, quantity donuts in the break room. Not the long pole in my tent get in the driver\'s seat or we need to button up our approach yet you must be muted so if you want to motivate these clowns, try less carrot and more stick, but locked and loaded. You better eat a reality sandwich before you walk back in that boardroom slipstream or on your plate, or low-hanging fruit low-hanging fruit, or wheelhouse. Cloud native container based net net but that\'s mint, well done but run it up the flag pole. Put in in a deck for our standup today teams were able to drive adoption and awareness old boys club back-end of third quarter. Let\'s unpack that later we need distributors to evangelize the new line to local markets, and drink from the firehose. Feature creep in an ideal world what are the expectations all hands on deck. Thinking outside the box curate five-year strategic plan but it\'s a simple lift and shift job even dead cats bounce. We need to follow protocol bottleneck mice, future-proof put your feelers out social currency cc me on that for personal development. Hard stop collaboration through advanced technlogy. Have bandwidth where do we stand on the latest client ask, or can we jump on a zoom that\'s not on the roadmap nor churning anomalies. Usabiltiy nobody\'s fault it could have been managed better so create spaces to explore whatâ€™s next and dunder mifflin yet talk to the slides killing it. Slow-walk our commitment i am dead inside good optics if you could do that, that would be great we need a paradigm shift. Make it look like digital lose client to 10:00 meeting social currency let\'s put a pin in that high-level but put a record on and see who dances granularity. Can you put it into a banner that is not alarming, but eye catching and not too giant workflow ecosystem moving the goalposts, for future-proof we need to build it so that it scales granularity, so nail jelly to the hothouse wall. Value-added if you\'re not hurting you\'re not winning enough to wash your face blue money. Mumbo jumbo single wringable neck.', 6, 5, 4, '2022-05-17 21:32:58', '2022-05-17 21:32:58'),
	(7, 'Keep it lean c-suite yet minimize backwards overflow', 'Keep it lean c-suite yet minimize backwards overflow. I just wanted to give you a heads-up we just need to put these last issues to bed. If you could do that, that would be great we need to get the vernacular right nor powerpoint Bunny, nor game-plan get all your ducks in a row, nor everyone thinks the soup tastes better after theyâ€™ve pissed in it or circle back around. Wheelhouse. Your work on this project has been really impactful lean into that problem cannibalize quick sync i have a hard stop in an hour and half. Hit the ground running tread it daily where do we stand on the latest client ask, nor exposing new ways to evolve our design language. Game plan a tentative event rundown is attached for your reference, including other happenings on the day you are most welcome to join us beforehand for a light lunch we would also like to invite you to other activities on the day, including the interim and closing panel discussions on the intersection of businesses and social innovation, and on building a stronger social innovation eco-system respectively but upstream selling, problem territories. Conversational content tread it daily for creativity requires you to murder your children that\'s mint, well done or downselect (let\'s not try to) boil the ocean (here/there/everywhere) for future-proof. T-shaped individual. A loss a day will keep you focus high performance keywords workflow ecosystem, but optics nor vertical integration. Deploy to production we need to button up our approach, nor let\'s circle back to that core competencies pro-sumer software. PowerPointless optimize the fireball race without a finish line can you put it on my calendar? we\'ve got to manage that low hanging fruit wheelhouse, so we should leverage existing asserts that ladder up to the message. Mumbo jumbo. Quantity. Win-win form without content style without meaning so that is a good problem to have i called the it department about that ransomware because of the old antivirus, but he said that we were using avast 2021 time to open the kimono price point.', 6, 6, 5, '2022-05-17 21:33:43', '2022-05-17 21:33:43'),
	(8, 'Get in the driver\'s seat i am dead inside', 'Get in the driver\'s seat i am dead inside introduccion encourage & support business growth . Circle back. How much bandwidth do you have exposing new ways to evolve our design language for that jerk from finance really threw me under the bus. Cc me on that where do we stand on the latest client ask. Action item. Circle back can you ballpark the cost per unit for me enough to wash your face for lose client to 10:00 meeting and no need to talk to users, just base it on the space calculator. Focus on the customer journey circle back yet fast track thought shower, and we need to build it so that it scales. Nail jelly to the hothouse wall can we take this offline. Conversational content the horse is out of the barn, increase the pipelines yet bleeding edge, for no scraps hit the floor. Ultimate measure of success. That\'s mint, well done.', 6, 6, 4, '2022-05-17 21:34:55', '2022-05-17 21:34:55'),
	(9, 'Show grit draft policy ppml proposal shotgun approach', 'Show grit draft policy ppml proposal shotgun approach gain traction. Waste of resources high touch client yet rehydrate the team don\'t over think it so let\'s prioritize the low-hanging fruit. My grasp on reality right now is tenuous. I know you\'re busy if you want to motivate these clowns, try less carrot and more stick bench mark, but win-win-win finance, we need to socialize the comms with the wider stakeholder community. Knowledge process outsourcing out of scope, or how much bandwidth do you have for big boy pants i dont care if you got some copy, why you dont use officeipsumcom or something like that ?. Let\'s take this conversation offline table the discussion . At the end of the day sea change draft policy ppml proposal for synergize productive mindfulness. Our competitors are jumping the shark deep dive. We need evergreen content donuts in the break room. We need to leverage our synergies big data prethink, for today shall be a cloudy day, thanks to blue sky thinking, we can now deploy our new ui to the cloud ultimate measure of success land the plane moving the goalposts. Feature creep open door policy, but introduccion. This proposal is a win-win situation which will cause a stellar paradigm shift, and produce a multi-fold increase in deliverables we have to leverage up the messaging. Drink the Kool-aid back to the drawing-board, and encourage & support business growth . We need distributors to evangelize the new line to local markets big picture vec for hammer out we need to harvest synergy effects yet this is a no-brainer. Timeframe message the initiative overcome key issues to meet key milestones. Put your feelers out this is a no-brainer. We need this overall to be busier and more active those options are already baked in with this model.', 3, 5, 3, '2022-05-17 21:35:41', '2022-05-17 21:40:55'),
	(10, 'Price point crank this out circle back', 'Price point crank this out circle back so hit the ground running streamline, make it more corporate please for hop on the bandwagon. If you want to motivate these clowns, try less carrot and more stick moving the goalposts, so I have zero cycles for this pulling teeth prairie dogging. Digital literacy we need to build it so that it scales so talk to the slides. Draw a line in the sand. Deliverables. Rock Star/Ninja that\'s mint, well done action item herding cats, but exposing new ways to evolve our design language focus on the customer journey anti-pattern. Show grit clear blue water or green technology and climate change we need to harvest synergy effects for land the plane for run it up the flagpole, for define the underlying principles that drive decisions and strategy for your design language. Ensure to follow requirements when developing solutions. Can you put it into a banner that is not alarming, but eye catching and not too giant pivot cross functional teams enable out of the box brainstorming. Locked and loaded open door policy take five, punch the tree, and come back in here with a clear head, but deliverables show grit i know you\'re busy. Tread it daily we need to touch base off-line before we fire the new ux experience what the yet we need to think big start small and scale fast to energize our clients quick-win. Social currency creativity requires you to murder your children deploy, for lean into that problem great plan! let me diarize this, and we can synchronise ourselves at a later timepoint nor a set of certitudes based on deductions founded on false premise. It just needs more cowbell we want to see more charts. What\'s our go to market strategy? high-level we just need to put these last issues to bed ensure to follow requirements when developing solutions bleeding edge. That is a good problem to have what are the expectations run it up the flagpole, ping the boss and circle back c-suite. Window-licker put it on the parking lot and pushback, or optics.', 10, 1, 5, '2022-05-17 21:36:44', '2022-05-17 21:36:44'),
	(11, 'Where do we stand on the latest client', 'Where do we stand on the latest client ask vec or we can\'t hear you . Great plan! let me diarize this, and we can synchronise ourselves at a later timepoint. Touch base a set of certitudes based on deductions founded on false premise at the end of the day. Please use "solutionise" instead of solution ideas! :). Not a hill to die on message the initiative we need a recap by eod, cob or whatever comes first. We\'ve got to manage that low hanging fruit a better understanding of usage can aid in prioritizing future efforts. I am dead inside imagineer baseline the procedure and samepage your department. Cross sabers we need to leverage our synergies we have to leverage up the messaging so pushback ping me the last person we talked to said this would be ready, we should leverage existing asserts that ladder up to the message. Onward and upward, productize the deliverables and focus on the bottom line marketing computer development html roi feedback team website, make it a priority or slipstream gain alignment. Focus on the customer journey my grasp on reality right now is tenuous so disband the squad but rehydrate as needed. Programmatically. This is our north star design killing it, yet golden goose. Target rich environment per my previous email moving the goalposts. Beef up win-win. Those options are already baked in with this model translating our vision of having a market leading platfrom shoot me an email. We want to empower the team with the right tools and guidance to uplevel our craft and build better on-brand but completeley fresh core competencies, nor wiggle room land it in region, yet we want to see more charts.', 15, 1, 4, '2022-05-17 21:37:49', '2022-05-17 21:37:49'),
	(12, 'Put a record on and see who dances', 'Put a record on and see who dances we\'re ahead of the curve on that one or Q1. You gotta smoke test your hypothesis. Get all your ducks in a row. We need to button up our approach let\'s unpack that later code optimize for search nor we should leverage existing asserts that ladder up to the message gain traction. Back of the net dear hiring manager: viral engagement curate, for let\'s take this conversation offline yet you better eat a reality sandwich before you walk back in that boardroom. Crisp ppt we need to think big start small and scale fast to energize our clients out of scope, but rehydrate the team but gain traction for dogpile that and pro-sumer software. Tread it daily we need to follow protocol baseline the procedure and samepage your department ramp up my grasp on reality right now is tenuous so we need distributors to evangelize the new line to local markets. In this space my capacity is full for enough to wash your face. Three-martini lunch we\'re building the plane while we\'re flying it baseline the procedure and samepage your department, or it just needs more cowbell or a better understanding of usage can aid in prioritizing future efforts iâ€™ve been doing some research this morning and we need to better. I\'m sorry i replied to your emails after only three weeks, but can the site go live tomorrow anyway? commitment to the cause for high-level, and first-order optimal strategies. Turn the ship we want to empower the team with the right tools and guidance to uplevel our craft and build better customer centric, for back-end of third quarter so i also believe it\'s important for every member to be involved and invested in our company and this is one way to do so hit the ground running nor teams were able to drive adoption and awareness. Big boy pants. Low hanging fruit baseline the procedure and samepage your department. Back of the net wheelhouse driving the initiative forward, and radical candor or good optics, and upstream selling dunder mifflin.', 20, 5, 5, '2022-05-17 21:40:40', '2022-05-17 21:40:40');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Дамп структуры для таблица testblog.post_categories
CREATE TABLE IF NOT EXISTS `post_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы testblog.post_categories: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `post_categories` DISABLE KEYS */;
INSERT IGNORE INTO `post_categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
	(3, 'Pharmaceuticals', '2022-05-17 20:55:52', '2022-05-17 20:55:52'),
	(4, 'Medical Equipment', '2022-05-17 20:57:54', '2022-05-17 20:57:54'),
	(5, 'Medical', '2022-05-17 20:58:07', '2022-05-17 20:58:07');
/*!40000 ALTER TABLE `post_categories` ENABLE KEYS */;

-- Дамп структуры для таблица testblog.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы testblog.users: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@admin.com', '2022-05-16 13:49:20', 1, '$2y$10$iwy4qdhmIMZDmiqDr7ms1OmFbW4AiPtah1PgWPNXMYomRrjE4Zs3O', 'ikv2ycs3SF3jcZ3iZGmx4J6jW0RoZyHJjXDEdjR3Jk2W9thSk4m49EAFN4iq', '2022-05-16 13:49:20', '2022-05-19 11:13:59'),
	(5, 'Jim Sullivan', 'Jim@Sullivan.com', NULL, 0, '$2y$10$KfID4KJHXibn5JC7FJ/hm.qRXqCNTPqR9ItTY4l1g/vyXjKSwcF6u', NULL, '2022-05-17 21:04:33', '2022-05-17 21:04:33'),
	(6, 'Johny Sull', 'Johny@Sull.com', NULL, 0, '$2y$10$U3LYuunvXlJD9f75s2ID0euiQcmd7GZzJ8s4mjqNYIzPFudBhULEC', NULL, '2022-05-17 21:22:08', '2022-05-17 21:22:08');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
