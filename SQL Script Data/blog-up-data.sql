-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 08:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog-up-data`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Outdoors & Nature', '2021-05-03 19:23:18', '2021-05-03 19:23:18'),
(2, 'Travel', '2021-05-03 19:23:18', '2021-05-03 19:23:18'),
(3, 'Arts', '2021-05-03 19:24:02', '2021-05-03 19:24:02'),
(4, 'Foods', '2021-05-03 19:24:21', '2021-05-03 19:24:21'),
(5, 'Other', '2021-05-03 19:25:43', '2021-05-03 19:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_post`
--

INSERT INTO `category_post` (`id`, `category_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 5, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 2, 3, NULL, NULL),
(4, 2, 4, NULL, NULL),
(5, 2, 5, NULL, NULL),
(6, 2, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 4, 8, NULL, NULL),
(9, 4, 9, NULL, NULL),
(10, 4, 10, NULL, NULL),
(11, 3, 11, NULL, NULL),
(12, 3, 12, NULL, NULL),
(13, 1, 13, NULL, NULL),
(14, 2, 14, NULL, NULL),
(15, 2, 15, NULL, NULL),
(16, 2, 16, NULL, NULL),
(17, 2, 17, NULL, NULL),
(18, 3, 18, NULL, NULL),
(19, 3, 19, NULL, NULL),
(20, 3, 20, NULL, NULL),
(21, 4, 21, NULL, NULL),
(22, 1, 22, NULL, NULL),
(23, 1, 23, NULL, NULL),
(24, 5, 24, NULL, NULL),
(25, 5, 25, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `content`, `created_at`, `updated_at`) VALUES
(5, 4, 23, 'Sooo cute, every day we learn something new, great post', '2021-05-03 20:04:07', '2021-05-03 20:04:07'),
(6, 4, 21, 'Yum, looks delicious, nice post', '2021-05-03 20:06:44', '2021-05-03 20:06:44'),
(7, 7, 21, 'Thank you @PenyGoldstone :)', '2021-05-03 20:07:42', '2021-05-03 20:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_15_140818_create_posts_table', 1),
(5, '2021_03_15_151533_create_comments_table', 1),
(6, '2021_04_13_145050_create_categories_table', 1),
(7, '2021_04_13_145202_create_category_post_table', 1),
(8, '2021_04_30_152621_create_roles_table', 1),
(9, '2021_05_03_185733_create_menus_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `image`, `created_at`, `updated_at`) VALUES
(3, 4, 'In Search of Warriors', 'This is a tale I have replayed so often since childhood, that when I close my eyes, the characters appear, fully defined, as if I could touch them. At the center is my grandfather, Louis, a young French soldier fighting in World War II. I see him then in black and white, even though when he sat me on his knee, decades later, to tell his story, he was colorful in every way imaginable. It was as if my grandfather had grown up through a period of time when everything existed only in shades of black and grey, as if the entire world with its violence and scarcity had the color sucked right out of it.\r\n\r\nBut then he would tell the part about the Mongol army. About how he was captured and sent to a German prison camp with British, American, and French soldiers. How the camp was eventually liberated, late in 1944, by a small and mighty troop fighting alongside the Allies against the Germans. They were the Mongolian People’s Army, established as a secondary army under Soviet command. As a young child, to hear my grandfather tell it, these liberators loomed large in vibrant, audacious color, a brilliant contrast to the stark landscape that surrounded them all.', 'TjWsKP7WY1WC5agspIf5PowhQ3KnIGMMpMqg15Ol.jpg', '2021-05-03 18:38:33', '2021-05-03 18:38:33'),
(4, 4, 'The Quest for Afghan Singletrack', 'His name means ‘soldier’,” says Yaar Mahahammad, our translator. Yaar is talking about Askarkhan, a thirteen year old boy who has been hefting rocks to form the foundations for a new stone hut with the kind of ease that puts my own strength to shame.\r\n\r\nAskarkhan looks at us with piercing, curious eyes from beneath his over-sized, hand-me-down clothes. Despite his military-sounding name, his clothes have no resemblance to a uniform, and he doesn’t need one. Here, at 4,305 metres amidst the swirls of a snowstorm in the remote Wakhan Corridor, Askarkhan is far from the war and troubles that have tragically become synonymous with his home country, Afghanistan.\r\n\r\nIn these regions the best weapon for survival is resilience, not a rifle. Guns are useful against marauding wolves, but it is resilience that will see Askarkhan brave the short, eight-week summer of herding yaks and sheep high on the mountainsides. Resilience that will arm him against the cold of night, the relentless snowstorms possible on 350 days of the year, and the thin air. I have a lot to learn. All in all, this is probably the harshest place I have ever been, so why the hell are we trying to ride bikes here?\r\n\r\nToday, the snow buries our six bikes and tents alike. Above us, enveloped in dense fog, sits the way ahead. At 4,860 metres, the Karabel Pass is the second of three high passes that we have to brave during our twelve day pioneering mountain bike traverse through the Wakhan Corridor. Navigating each pass means an early 4am start, as we must give the pack animals carrying our supplies a good chance of crossing while the snowpack is still frozen hard. Each climb requires dragging ourselves from warm sleeping bags to force on frozen bike shoes hours before any sign of breakfast. But each pass, we hope, will deliver another brake-searing singletrack descent.', 'IQ8MYlLd93XYOgsDoclePqNxwnaUsG1Gpg93slmW.jpg', '2021-05-03 18:43:33', '2021-05-03 18:43:33'),
(6, 4, 'The Kangaroo Society', 'Right, Lance bellows in a purposeful though unhurried tone, ‘time to wake up the ancestors.’ After taking hours to prepare their bodies for this ritual under a withering desert sun, it was time to dance. On the bare ground of a remote bush camp named Mugai Biungo Ndia, translating a little disconcertingly as ‘Big Tallman Flesh Eater Place’ (especially for a 6’1 journalist), the ancient desert rituals began to play out to an audience of one.\r\n\r\nTo the rhythms of two boomerangs clapped together, Matthew and Adrian made their way along the Bora (sacred) ground, a patch of red earth bordered by large stones, no more than ten metres in length and just a metre wide. Stamping their feet and moving with intense concentration the two men acted out the slow and sharp movements of the Kangaroo and Emu dances.\r\n\r\nAlmost as quickly as it had begun it was over. The ancestors, Lance explained, now knew they were here, and that they were still strong.\r\n\r\nThis brief ceremony was the final part of a memorable week that I spent with the men of the Marrinyama, a tribal group led by Lance Sullivan. Lance was born Tjupurrula Maarij Tjarra and is now an elder of the Yalarrnga Nation. The Yalarrnga’s traditional lands stretch from near the town of Cloncurry, in Queensland’s North West, south towards the townships of Dajarra and Boulia, the latter a small gateway town on the edge of the vast and unforgiving Simpson desert.\r\n\r\nAs one of the last few fluent speakers of the endangered Yalarrnga language, part of the Pama Nyungan linguistic family, Lance has taken it upon himself to keep local traditions alive.\r\n\r\nAt the core of his effort has been the ‘Kangaroo Society,’ so named for the self-inflicted ceremonial marks cut into the arms of the men with sharp rock fragments, and said to resemble the scratch from a Kangaroo. All the men involved are steeled with a determination to keep traditions and lore alive, spending time at bush camps near the desert town of Cloncurry every year, where temperatures average in the high 40s.\r\n\r\nAlongside this commitment to the past, the group work to instil pride and purpose amongst the younger generations through these practices, which often involve tough initiations and extended time in the bush. In this way the society’s desert rituals are equal parts age old tradition and self renewal, with the men all looking to their past for the strength to act as positive role models amongst troubled communities. As Lance asserted:\r\n\r\n     “Without our past we have no future, without our culture we have nothing.”', 'sRo2kdIHJ0dYZZXB6jZO5pp3XLfXlhl0FlMNwZum.jpg', '2021-05-03 18:47:10', '2021-05-03 18:47:10'),
(7, 4, 'In Danger The Great Barrier Reef', 'For decades, the Great Barrier Reef has enjoyed World Heritage Status and been synonymous with diving, tourism and with Australia.\r\n\r\nBut in June of 2014, UNESCO threatened to downgrade the Great Barrier Reef to the World Heritage ‘In Danger’ list; a category populated predominantly by war-torn and developing nations. The final decision will be made next month, in February 2015.\r\n\r\nUNESCO’s concerns are focused on the issue of industrial development along the reef. Queensland has one of the largest deposits of coal, and with developed markets slowly turning their back on dirty energy, there’s huge momentum to dig it up and ship it out as fast as possible before falling prices make it no longer viable.\r\n\r\n    To do this requires unprecedented amounts of dredging, both to expand existing coal ports and to create new ones, many of which are located within the boundaries of the Barrier Reef Marine Park.\r\n\r\nDredging is problematic for a few reasons. Firstly it digs up seagrass meadows, removing valuable grazing areas for dugongs and turtles, secondly it creates a toxic soup of heavy metals which can severely impact on the health of marine life. And lastly, the dredge spoils are then dumped back out onto the Barrier Reef and can travel for miles up the coast clogging coral polyps and smothering entire reef systems.\r\n\r\n\r\n\r\nGladstone harbour has been the focus of the debate around port expansion in Queensland. The port of Gladstone has permission to dredge 32 million tonnes of sea bed in order to expedite the shipment of coal and LNG from Curtis Island.\r\n\r\nReports from fishermen of diseased fish, as well as an environmental disaster which coincided with a leaking bund wall in 2011, resulted in dead turtles and dugongs washing up on the beach and millions of tonnes of dredge spoil spilling out into the harbour and inner reefs. The local fishing industry has collapsed as a result.', 'aUOkPve5VXiCLbGNaFL7iGGBZlxC4wgZ0XoHdBgS.jpg', '2021-05-03 18:50:35', '2021-05-03 18:50:35'),
(8, 5, 'Smuggling Cinnamon Rolls', '“Bag check,” he bellowed to a female TSA agent, a bit too militantly for my taste, as my carry-on emerged from the rubber curtains of the X-ray machine.\r\n\r\n“We’re going to have to take a look in here,” she said to me.\r\n\r\nThe culprit was soon plucked from my pack.\r\n\r\n“Cinnamon rolls,” she announced, brandishing the tube of Pillsbury’s Best in the same vaguely intimidating way that a policeman might wave with his baton. \r\n\r\nWhy was I trying to transport cinnamon roll dough? The rolls were a request from a German friend who was missing a taste of his American high school youth. Ben had gotten hooked on the sticky pinwheel pastries during a year as a foreign exchange student, when he lived with an American family in a small town in Ohio and did what most American high school kids do for fun—hang out at the mall and eat junk food.\r\n\r\nI was surprised that the same sort of cinnamon rolls didn’t exist in Germany, a country with a proud baking tradition, but Ben explained that the warm frosting and gooey centers set American cinnamon rolls apart from their drier German cousins. And while I’d warned him that they might not taste the same as they do in an American food court, I promised Ben I’d bring him the next best thing to mall-fresh cinnamon rolls when I visited Hamburg.\r\n\r\nIn fact, I’d been relieved that he’d made the request. I’ve always grappled with what gifts to bring from America when traveling abroad and staying with hosts.\r\n\r\nThere was the time—and it coincided with a certain period in American history when ordering Freedom Fries was considered patriotic—that I went to study French in Toulouse. I presented my French hostess, born in Bordeaux, with a bottle of California red. And as we tipped our glasses that night at dinner, she noted that in America we were dumping French wine into the gutters.\r\n\r\nThen there was the occasion when I bought a bottle of Key Lime juice at the airport in Orlando, a last ditch effort to bring a taste of Florida to my Moroccan host family. Now, every time I visit them in Fes, I cringe when I see the bottle scrawled with the words “For the pie that dances on your tongue” prominently displayed alongside family photos on a living room shelf. No doubt, their intent is to show respect to me for a gift that they surely consider useless, if not downright strange.\r\n\r\nShopping for gifts has always been fraught with peril, so you can imagine my desperation when the tube was pulled from my bag in Miami.\r\n\r\nIt had made it onto my connecting flight from Tampa with an approving “Oh Yummy,” from the TSA representative there. But the Miami Menace wasn’t having it.\r\n\r\n“No go,” he boomed.\r\n\r\nI’ve gotten more sympathy for confiscated water bottles, so I decided to push the case.\r\n\r\n“But they’re not a liquid,” I said, keeping my cool. \r\n\r\n“They’re dough,” said the TSA agent, “and dough is a gel.”\r\n\r\n“Next time, put them in your checked bag,” I was told, as the tube was chucked into a big garbage bin, no doubt alongside other nefarious gels masquerading as baked goods. \r\n\r\nBut for all the TSA’s diligent efforts to keep liquids, gels and even gel-like doughs off America’s flights—and this includes the many lip glosses, hand creams and bottles of wine I’ve had pried from my person over the years—they missed the second tube of cinnamon rolls in my bag. \r\n\r\nA few days later, on a holiday morning in a village in northern Germany that gave its name to one of my favorite candies—Werther’s Originals—I prepared an American original.\r\n\r\nI sprang them from their tube using the traditional American method—pressing a spoon against the cardboard seam. Then I peeled the rolls apart and gave them the required two inches rising room on a cookie sheet.\r\n\r\nAs they baked, the smell of buttery cinnamon filled the house. Ben’s family perked up, wandering into the kitchen to peer at the rolls as they rose and turned from pasty white to golden brown. Ben’s nose was practically pressed to the oven window, the look on his face pure lust.\r\n\r\nThen it was time. Alongside the Sunday morning spread of German breads rich with grains, smoked salmon, cured meats and hand-painted Easter eggs, the Pillsbury’s Best Cinnabon Grands “made with Real Cinnabon Cinnamon” found their place at the table.\r\n\r\nBen took a bite. His eyes rolled back in his head and a little dribble of icing stuck to the tip of his nose. He was in cinnamon roll heaven.\r\n\r\nHis family oohed and ahhed over the sticky rolls and asked how I made the frosting. I gave credit where it was due—to the Pillsbury Dough Boy. According to Ben, they were just as delicious as the ones he remembered eating at the mall.\r\n\r\nI’ve never been much for the things myself, but I have to admit that eating them there in Germany made the cinnamon rolls taste better than ever. It was a taste of home—and a frequent flier’s revenge.', '67zLJrMZcVbhDKIBMmpXAiALvvtxTR1TzwC7IDA6.jpg', '2021-05-03 18:53:29', '2021-05-03 18:53:29'),
(9, 5, 'Confessions of a Chicken Man', '“I’ll have the chicken,” I say.\r\n\r\nAnd then, always, the server nods, smirks, suppresses a roll of the eyes, and writes something on the pad of paper.  “Gringo Special” or “Typical Yank Meal #3,” I’d guess.  My traveling companions, also following the unwritten script, snicker and, after the server has left, make snide remarks.\r\n\r\nWhen the food arrives, the others in my group will find themselves facing brimming towers of mystery meat and overcooked vegetables native to the region—these are the tourist restaurant versions of ostensibly authentic local cuisine.  One or two people in the group, generally young men intent on proving their masculinity, may have ordered something truly exotic—puffin with gooseberries or tongue on toast.  In front of me lies a chicken breast, grilled, fried or roasted, sprinkled with a benign assortment of spices.\r\n\r\nI know what it will taste like. I know it will be bland.  I know everyone at the table will continue to ridicule me throughout the meal, some out loud, some silently.  I know, too, that I am missing out on an important part of the travel experience by ordering that most generic of meals.\r\n\r\nBut I feel no need to prove myself by eating whole the still-beating heart of a just-killed cobra, as author and chef Anthony Bourdain recounts doing in his book “A Cook’s Tour.” I have no interest in sampling raw oysters, garlic-drenched slugs, fried potato bugs, or, goodness, a cute, roasted guinea pig.  I don’t care how you pickle it, fry it, sauce it or disguise it in patty form, I do not want to eat puffin, or iguana, or bull’s testicles, no matter how tasty they may be.\r\n\r\nTo be sure, I do get a certain thrill from reading such accounts, from hearing friends who served in the Peace Corps rave about their favorite snack food, termites, or even from witnessing my traveling companions eat assorted animals, from the small and cute to the large and disgusting. But these are foods I will only ingest vicariously; when it comes time to order, it’s always the same: “I’ll have the chicken.”', 'WDPqmZd9ki10YdkYrAKu9VkE3coMinJg5ihpjCJa.png', '2021-05-03 18:56:26', '2021-05-03 18:56:26'),
(10, 5, 'Meet Hilsa, the Beloved Fish That Connects Bengalis', 'Where and how one sources, cooks, and devours hilsa, the fish beloved across the Indian subcontinent, conveys a lot about one’s Bengali roots. In the 1947 Indian Partition, Bengal was divided along religious lines, and Muslims fled to East Bengal, while a majority-Hindu population stayed in West Bengal (an Indian state). Later, in 1971, East Bengal became the independent nation of Bangladesh.\r\n\r\nBengalis divide into two major groups: Bangal and Ghoti. “Bangal” refers to Bengalis from East Bengal, while “Ghoti” refers to those native to West Bengal. Perhaps surprisingly, the Bangal-Ghoti divide is largely innocuous amongst Bengalis, sparking fun debates such as how hilsa—a fish adored across the Indian subcontinent, but particularly in Bengal—should be prepared.\r\n\r\nEast Bengalis love Poddar ilish (\"ilish\" is another name for hilsa) that’s been sourced from the Padma River. East Bengal jhol, or fish curry, is heavily spiced with ginger, garlic, and cumin. In the West, Bengalis argue that the fish caught in the Ganges, however, tastes better. Unlike their eastern counterparts, they prefer mildly spiced, sweeter curries.', 'AZq2tYVfzAHB046MNsx34sjxrY0Lq9mbkYqnc8VQ.jpg', '2021-05-03 18:57:24', '2021-05-03 18:57:24'),
(11, 6, 'How Helen Frankenthaler’s Color-Soaked Canvases Won Over the Art Market', 'Frankenthaler’s institutional recognition continued to grow in tandem with her expanding domestic collector base, showing at the Guggenheim, the Museum of Modern Art, and the Modern Art Museum in Fort Worth throughout the 1970s and ’80s. Her market continued to gain new dimensions around this time as well—in the mid-1980s, her works began appearing at auction, often going for prices around $10,000 or below, with some paintings occasionally breaching the $100,000 mark. By the 2000s, her work began to more steadily sell at auction for six-figure prices, and by the end of the decade, she had carved out a respectable niche for herself in the global collecting community.\r\nIn December 2011, just a month after Ginny Williams bought Royal Fireworks at Christie’s, Frankenthaler died at her home in Darien, Connecticut, at the age of 83. The following summer, in 2012, Gagosian began representing her estate, kickstarting her posthumous market apotheosis and helping spread the gospel of Frankenthaler’s color across the globe. The mega-gallery’s debut Frankenthaler show, which was held at its Chelsea location in 2013 and showcased her works from the 1950s, was met with widespread acclaim. The gallery would host four more solo shows over the following seven years while simultaneously promoting her placement in institutional shows in London, Venice, Paris, and beyond.\r\nThis robust international presence began to have ripple effects in Frankenthaler’s secondary market, as well. The year 2015 marked a turning point in her auction standing—over the course of four days in May, Frankenthaler burst through the million-dollar barrier, with her 1964 work Saturn Revisited selling for $2.8 million at a Sotheby’s New York sale. In the days that followed, three more works by Frankenthaler would sell above $1 million at auction, and an additional two paintings would break that barrier in the fall auctions later that year. Gagosian’s representation went hand in hand with broader canonical reconsiderations of women artists to help produce an extremely robust international market for Frankenthaler’s work, one primed for an earth-shattering price like the one achieved by Royal Fireworks last summer.', 'LNRDwnO8jMMr5gdg8r6FBzbJXAHBJMYCcKsPJsVz.jpg', '2021-05-03 19:03:32', '2021-05-03 19:03:32'),
(12, 6, '5 Artists on Our Radar This April', 'Grace Metzler\r\n\r\nWith a haunting yet charming painting sensibility, Brooklyn-based artist Grace Metzler brings together the drama, absurdity, and magic of contemporary life. Artwork titles such as Vacation Bible School for Babies (2021), First Quarantine Haircut (2020), Covid Twister (2020), and Patty Cake with the Devil (2019) make it clear that Metzler’s dark sense of humor is uniquely her own. From tiny paintings to monumental canvases, she lures in viewers with her painterly aesthetic and delightful details, like a stroke of the paintbrush that becomes a perfectly crisp white pair of socks or a background figure seen through a window who is unexplainably holding up a string telephone to its ear.\r\n\r\nMaría Fragoso\r\n\r\nAlthough María Fragoso is one of several rising contemporary artists creating surrealistic figurative paintings, the 25-year-old is a standout. Her lush, captivating paintings, six of which are currently on view in a solo show at 1969 Gallery in New York, feature uncanny female figures navigating the desire for human connection and explore Fragoso’s reflections on her Mexican heritage.\r\n“A duality that has always pervaded Mexican culture and everyday life is the complicated relationship of struggle and joy,” Fragoso wrote in a recent essay published by the Taubman Museum of Art. “I always think about it as an important duality in my paintings. I try to convey this bond of celebration and tragedy by portraying scenes of lustfulness and hedonism in bright and fiery colors while also including some disturbing elements that question the coherence of the seemingly familiar.”', 'HqImHR71XfRpy9M3sBbxDe0ZpZni9O1ex6wJc3kt.jpg', '2021-05-03 19:06:20', '2021-05-03 19:06:20'),
(13, 7, 'These birds nap while they fly—and other surprising ways that animals sleep', 'Humans, like all other great apes, are monophasic sleepers, meaning we sleep in one long interval during a 24-hour period. Bonobos, chimpanzees, gorillas, and orangutans all also build sleeping platforms in trees, away from predators and insects, a jungle version of a bed. Gorillas sleep for 12 hours but orangutans get around the same eight hours that humans do.\r\n\r\nIn some other primates, as in most mammals, sleep is polyphasic, with several alternating periods of sleep and activity in a 24-hour cycle. Dogs have wake-sleep cycles of about 83 minutes and get a little more than 10 and a half hours of sleep per 24-hour cycle.\r\n\r\nSleeping with half a brain\r\n\r\nDolphins, meanwhile, can stay alert with half of their brain while the other half can fall into a deep sleep. This enables dolphins to sleep with one eye open, looking for predators.\r\n\r\n“Dolphins are basically alert 24 hours a day for their entire lives,” Siegal says.\r\n\r\nThis sleeping pattern—which dolphins share with other cetaceans, manatees, eared seals and some birds—is called unihemispheric slow wave sleep, a deep state of sleep in which rapid eye movement or REM sleep does not occur.\r\n\r\nDo animals need sleep at all?\r\n\r\nAnimal down time happens in a lot of ways, but the classic definition of sleep, Siegel says, is “a period of reduced activity and responsiveness, which is rapidly reversible,” and which requires makeup sleep if a deficit occurs.', 'kTWinonHd30pym1qvN3XADd3ZYgnWqGGXhCJeqsY.jpg', '2021-05-03 19:13:31', '2021-05-03 19:13:31'),
(14, 7, 'Great Wall of China', 'The Great Wall is one of the seven wonders of the world. It runs in sections over a very long distance across China.\r\n\r\nThe wall is also referred to as ‘Long Wall’ as it is over 21,196 km/13,171 miles long. It was built with stones, bricks and tiles, earth as well as of wooden material. The wall was completed in 1644, but it took more than 2,000 years to build.\r\n\r\nThere are more than 20,000 watchtowers along the wall as it was built to protect the country against invasions from nomads and enemies and to make it easier to collect duty for goods that were transported along the Silk Road.\r\n\r\nToday the wall is the most popular tourist attraction in China with more than 10 million visitors per year. Contrary to popular belief the Great Wall cannot be seen from the moon!', '6XcQrdZdsOpGc5KIdD2qx4pf9c2CR0ril0U3PWH9.jpg', '2021-05-03 19:18:24', '2021-05-03 19:18:24'),
(15, 8, 'Leaning Tower of  Italy', 'The Leaning Tower of Pisa is one of Italy’s major tourist attractions. The freestanding bell tower of the Pisa Cathedral was built over almost two hundred years and was finished in 1399.\r\n\r\nThe original hight of the tower was 60 meters/196ft, but as it is leaning, the lowest side is now less than 56 meters/184ft. The construction already caused many problems as the soil was soft, sandy and unstable. Already during construction, the builders tried to balance the leaning side with more columns on the other side, but the tower still leaned - like many other buildings in the area.\r\n\r\nIn 2000, the tower was strengthened by putting stronger soil underneath the tower. You can walk up the 251 stairs to the viewing platform at the top of the tower which is quite an amazing experience. And of course take a picture of you from the lawns next to the tower to \'hold\' the tower.', 'f4oFYh3txejMWTauVdzcRk7QN6WpS4sACPwzebtV.jpg', '2021-05-03 19:24:10', '2021-05-03 19:24:10'),
(16, 8, 'Great Pyramid of Giza in Egypt', 'The Great Pyramid of Giza near Cairo is one of the Seven Wonders of the Ancient World and the only one of these ancient world wonders which still exists. The pyramids are made of stone and bricks and stand near Cairo which is the capital of Egypt.\r\n\r\nThe Egyptian pyramids were built during a time when there was only manual labour and no machine lifting equipment available. The pyramids were build to house the bodies of the pharaoh who ruled in ancient Egypt. Next to the Giza pyramids there is the Sphinx, the famous monument of a lion body with a pharaoh’s head.\r\n\r\nThe Giza pyramids are around 4,500 years old and are considered among the largest structures ever built. More about the Pyramids here. See also our page about Landmarks in Africa here.', 'xWxJpBSsyPiWglL8u8A9WdoiKqRgvuCiKGwfICoe.jpg', '2021-05-03 19:25:38', '2021-05-03 19:25:38'),
(17, 8, 'Taj Mahal in India', 'The Taj Mahal, which means \'crown of palaces\' in the Persian language, stands on the riverbanks of the Yamuna River in Agra in northern India. \r\n\r\nIn 1632 the emperor, Shah Jahan instructed to build a tomb for his favorite wife, Mumtaz Mahal. The Taj Mahal houses the tomb of the wife as well as a mosque and a guesthouse.\r\n\r\nThe Taj Mahal has been built with white marble and the finest material sourced from all over Asia. It is decorated with precious and semi-precious stones. Lines from the Quran are depicted on many walls. The main dome of the Taj Mahal is 35 metres/ 115ft. hight and the minarets are each 40 m/ 130ft. tall.\r\n\r\nIt is said that more than 20,000 workers built the monument and over 1,000 elephants were used to help with the transport of the heavy material during the construction. The mausoleum attracts more than 8 million visitors every year.', 'hlEatub13Uu5BfBBFjxQvBIg9bzGKQAtyE4mz0bt.jpg', '2021-05-03 19:26:57', '2021-05-03 19:26:57'),
(18, 8, 'Underpainting', 'It\'s important to never work from white when using oils or acrylics. Create an underpainting in burnt umber or a mix of burnt sienna and phthalo blues to establish shadows and values. Acrylics are probably the best medium to use at this stage as they\'re quick-drying and permanent.\r\n\r\nWork paint up from thin to thick, especially when using slow-drying paints. It\'s impossible to work on top of heavy, wet paint. In the same way, work up to highlights, adding the brightest (and usually heavier) paint at the end. Have a roll of kitchen towel to hand to clean brushes and remove any excess paint.', 'NHnbiuEz7R0ouLcUIXlHkDKQaHG2dVWr7A9R4FhJ.jpg', '2021-05-03 19:29:52', '2021-05-03 19:29:52'),
(19, 8, 'Blocking in', 'Brushes come in a number of shapes and with different fibre types, all of which give very different results. The key is to try all of them as you paint. The most versatile are a synthetic/sable mix – these brushes can be used with most of the different paint types. Brushes come in flat and round types and it pays to have a selection of both. Check out our guide to picking the right brush to learn more.\r\n\r\nIt\'s useful to work with a range of brushes. For most of the early work, use larger, flatter and broader brushes. A filbert is a good general brush for blocking in form and paint. It has a dual nature, combining aspects of flat and round brushes so it can cover detail as well as larger areas. Then use smaller brushes only at the end of the painting process.', 'yEYipIkI4tss9QInTtZchyCrBSSWFrasv6tzyJoT.jpg', '2021-05-03 19:38:22', '2021-05-03 19:38:22'),
(20, 8, 'Sgraffito', 'Removing paint can be as important as applying it. Sgraffito is the term used when you scratch away paint while it\'s wet to expose the underpainting. It\'s especially useful when depicting scratches, hair, grasses and the like.\r\n\r\nYou can use almost any pointed object for this – try rubber shaping tools or the end of a brush.', 'lnyxaNNfwQKeH7ROYL8b6m1BjU9Y6BetkPn0XlaF.jpg', '2021-05-03 19:54:44', '2021-05-03 19:54:44'),
(21, 7, 'History of Soup', 'Although the category of “soup” may be a bit more general than the foods discussed previously, it is so prominent in all cultures of the world that it deserves to be looked at from a broader perspective. It might just be the most consumed food in the world. \r\n\r\nFrom what we know, it was already being eaten by humans as far as 20,000 years ago.\r\n\r\nThe unique flavors that can be created by boiling different ingredients in hot water offered a convenient and delicious way to consume produce. This is why you’d be hard-pressed trying to find a type of food that has a more diverse range of recipes.\r\n\r\nWhether it’s a beef broth, a lentil soup such as dhal, or a soothing vegetable soup, cultures from around the world have discovered their own ways of using hot water to create flavors that warmed and comforted people for thousands of years.', '6W9MVjrKzECnDVUqx02N449etgIolpGlq6MEYOOR.jpg', '2021-05-03 19:56:21', '2021-05-03 19:56:21'),
(22, 7, 'Amazon Rainforest', 'Amazon Rainforest, large tropical rainforest occupying the drainage basin of the Amazon River and its tributaries in northern South America and covering an area of 2,300,000 square miles (6,000,000 square km). Comprising about 40 percent of Brazil’s total area, it is bounded by the Guiana Highlands to the north, the Andes Mountains to the west, the Brazilian central plateau to the south, and the Atlantic Ocean to the east.\r\n\r\nA brief treatment of the Amazon Rainforest follows. For full treatment, see South America: Amazon River basin.\r\n\r\nAmazonia is the largest river basin in the world, and its forest stretches from the Atlantic Ocean in the east to the tree line of the Andes in the west. The forest widens from a 200-mile (320-km) front along the Atlantic to a belt 1,200 miles (1,900 km) wide where the lowlands meet the Andean foothills. The immense extent and great continuity of this rainforest is a reflection of the high rainfall, high humidity, and monotonously high temperatures that prevail in the region.', 'wzCcxSovDT6yAU5wu3eRmkV9q6AgFo4xBFuSkBGc.jpg', '2021-05-03 19:59:41', '2021-05-03 19:59:41'),
(23, 7, 'Ears of the Desert', 'The fennec fox (Vulpes zerda) is a small crepuscular fox native to the Sahara Desert and the Sinai Peninsula.[1] Its most distinctive feature is its unusually large ears, which serve to dissipate heat. The fennec is the smallest canid species. Its coat, ears, and kidney functions have adapted to the desert environment with high temperatures and little water. Also, its hearing is sensitive to hear prey moving underground. It mainly eats insects, small mammals, and birds. The fennec has a life span of up to 14 years in captivity and about 10 years in the wild. Its main predators are the Verreaux\'s eagle-owl, jackals, and other large mammals. Fennec families dig out burrows in the sand for habitation and protection, which can be as large as 120 m2 (1,292 sq ft) and adjoin the burrows of other families. Precise population figures are not known but are estimated from the frequency of sightings; these indicate that the fennec is currently not threatened by extinction. Knowledge of social interactions is limited to information gathered from captive animals. The fennec is usually assigned to the genus Vulpes; however, this is debated due to differences between the fennec and other fox species. The fennec\'s fur is prized by the indigenous peoples of North Africa, and in some parts of the world, it is considered an exotic pet.\r\n\r\nIts name comes from the species\' Arabic name: fanak.\r\n\r\nThe fur of the fennec fox is straw-coloured. Its nose is black. Its tapering tail has a black tip. Its long ears have longitudinal reddish stripes on the back and are so densely haired inside that the external auditory meatus is not visible.[3] The edges of the ears are whitish, but darker on the back. The ear to body ratio is greatest in the canid family and likely help in dissipating heat and locating vertebrates. It has dark streaks running from the inner eye to either side of the slender muzzle. Its large eyes are dark. The dental formula is 3.1.4.23.1.4.3 × 2 = 42 with small and narrow canines. The pads of its paws are covered with dense fur, which facilitates walking on hot, sandy soil.[7]\r\n\r\nThe fennec fox is the smallest canid. Females range in head-to-body size from 34.5 to 39.5 cm (13.6 to 15.6 in) with a 23–25 cm (9.1–9.8 in) long tail and 9–9.5 cm (3.5–3.7 in) long ears, and weigh 1–1.9 kg (2.2–4.2 lb). Males are slightly larger, ranging in head-to-body size from 39 to 39.5 cm (15.4 to 15.6 in) with a 23–25 cm (9.1–9.8 in) long tail and 10 cm (3.9 in) long ears, weighing at least 1.3 kg (2.9 lb).', 'Enpyg4mzqLoMwkNCnHwur4LTdV9IqcZdvSrnkfVq.jpg', '2021-05-03 20:02:20', '2021-05-03 20:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin Admin', 'Administrator', 'admin@admin.com', NULL, '$2y$10$aLnnNU57T/M9kkFSuxXWTOMD0blG3FhxCnv9kJhuOq3sfsoc25G2q', NULL, 1, '2021-05-03 17:22:48', '2021-05-04 13:27:52'),
(4, 'Penny Goldstone', 'PenyGoldstone', 'penny@goldstone.com', NULL, '$2y$10$nfusRNwjzPY5xwcGaq.p7eCX.Kuqyr6A0I/93tTcMFBFwgjbJ/q6i', NULL, 2, '2021-05-03 18:28:30', '2021-05-03 18:28:30'),
(5, 'Brook Mitchells', 'BrookM', 'brook@mitchells.com', NULL, '$2y$10$H/kYb8jZrWHLejPk2/q28eFzhZp8wcWsGKDnwJgk4qw0qQVki7NoW', NULL, 2, '2021-05-03 18:52:12', '2021-05-03 18:52:12'),
(6, 'John Walker', 'JohnWalker', 'john@walker.com', NULL, '$2y$10$KR6k3i.M4Lt6n7tHzAHoAuL5B7sgPKeNsdo.nuicvqoJ/99dEjAli', NULL, 2, '2021-05-03 18:58:35', '2021-05-03 18:58:35'),
(7, 'Matt Doug', 'MattDoug', 'matt@doug.com', NULL, '$2y$10$GzooB4QBS9OnvMYijBHf6eD3sMZgnAlaxqC9mTXQgRbxtjahAa.aW', NULL, 2, '2021-05-03 19:09:51', '2021-05-03 19:09:51'),
(8, 'John Smith', 'MrSmith', 'john@smith.com', NULL, '$2y$10$vzsx4TMlK9BhsHRCdQyK7uV4gEEzul2IWcS/IsboPDKmE.QHjckkW', NULL, 2, '2021-05-03 19:23:04', '2021-05-03 19:23:04'),
(9, 'Pera Peric', 'Pera', 'pera@peric.com', NULL, '$2y$10$VXdi/MSYrBso60BkixOaO.92KeDxAYCsNRPp98Mv5Q0Bp7upHfHGm', NULL, 2, '2021-05-04 13:06:03', '2021-05-04 13:06:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
