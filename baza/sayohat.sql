-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 17 2023 г., 20:38
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sayohat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dacha`
--

CREATE TABLE `dacha` (
  `id` int NOT NULL,
  `title_uz` text NOT NULL,
  `title_en` text NOT NULL,
  `title_ru` text NOT NULL,
  `body_uz` text NOT NULL,
  `body_en` text NOT NULL,
  `body_ru` text NOT NULL,
  `img` text NOT NULL,
  `foiz` text NOT NULL,
  `narx` text NOT NULL,
  `titlee_uz` text NOT NULL,
  `titlee_ru` text NOT NULL,
  `titlee_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `dacha`
--

INSERT INTO `dacha` (`id`, `title_uz`, `title_en`, `title_ru`, `body_uz`, `body_en`, `body_ru`, `img`, `foiz`, `narx`, `titlee_uz`, `titlee_ru`, `titlee_en`) VALUES
(4, 'sdvfdsv f', 'df df dc', ' dfdf', ' dfdf', ' df df', 'df', 'a0c93f10b463b00867b5b0cf5d3fe53e.jpg', '12', '100000', 'dvs sc', 'sdf vdf ', 'df df dfc ');

-- --------------------------------------------------------

--
-- Структура таблицы `home`
--

CREATE TABLE `home` (
  `id` int NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `home`
--

INSERT INTO `home` (`id`, `video`) VALUES
(7, 'vid-1.mp4'),
(9, 'vid-3.mp4'),
(10, 'vid-2.mp4'),
(17, 'vid-5.mp4'),
(18, 'vid-3.mp4'),
(19, 'vid-5.mp4'),
(20, 'vid-1.mp4'),
(21, 'vid-1.mp4');

-- --------------------------------------------------------

--
-- Структура таблицы `home1`
--

CREATE TABLE `home1` (
  `id` int NOT NULL,
  `video` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `home1`
--

INSERT INTO `home1` (`id`, `video`) VALUES
(3, 'vid-5.mp4');

-- --------------------------------------------------------

--
-- Структура таблицы `hordiq`
--

CREATE TABLE `hordiq` (
  `id` int NOT NULL,
  `title_uz` text NOT NULL,
  `title_en` text NOT NULL,
  `title_ru` text NOT NULL,
  `body_uz` text NOT NULL,
  `body_en` text NOT NULL,
  `body_ru` text NOT NULL,
  `img` text NOT NULL,
  `foiz` text NOT NULL,
  `narx` text NOT NULL,
  `titlee_uz` text NOT NULL,
  `titlee_ru` text NOT NULL,
  `titlee_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `hordiq`
--

INSERT INTO `hordiq` (`id`, `title_uz`, `title_en`, `title_ru`, `body_uz`, `body_en`, `body_ru`, `img`, `foiz`, `narx`, `titlee_uz`, `titlee_ru`, `titlee_en`) VALUES
(1, 'svdsv', 'dsvdev', 'sdvfsdfrvf', 'dfsvedv', 'devdsv', 'dsvedv', 'bashir.jpg', '50', '20000', 'sved', 'dev', 'svdev'),
(2, 'svdsv', 'dsvdev', 'sdvfsdfrvf', 'dfsvedv', 'devdsv', 'dsvedv', 'bashir.jpg', '0', '20000', 'sved', 'dev', 'svdev');

-- --------------------------------------------------------

--
-- Структура таблицы `Kitob`
--

CREATE TABLE `Kitob` (
  `id` int NOT NULL,
  `title_uz` text NOT NULL,
  `title_en` text NOT NULL,
  `title_ru` text NOT NULL,
  `body_uz` text NOT NULL,
  `body_en` text NOT NULL,
  `body_ru` text NOT NULL,
  `img` text NOT NULL,
  `foiz` text NOT NULL,
  `narx` text NOT NULL,
  `titlee_uz` text NOT NULL,
  `titlee_ru` text NOT NULL,
  `titlee_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Kitob`
--

INSERT INTO `Kitob` (`id`, `title_uz`, `title_en`, `title_ru`, `body_uz`, `body_en`, `body_ru`, `img`, `foiz`, `narx`, `titlee_uz`, `titlee_ru`, `titlee_en`) VALUES
(1, 'wgew', 'brebfrd', 'efber', 'rdgfeb', 'brfed', 'breb', 'g-3.jpg', '50', '20500', 'edrbrf', 'dfbverb', 'gerbfd');

-- --------------------------------------------------------

--
-- Структура таблицы `manzil`
--

CREATE TABLE `manzil` (
  `id` int NOT NULL,
  `title_uz` text NOT NULL,
  `title_en` text NOT NULL,
  `body_uz` text NOT NULL,
  `body_en` text NOT NULL,
  `narx` text NOT NULL,
  `foiz` text NOT NULL,
  `img` text NOT NULL,
  `body_ru` text NOT NULL,
  `title_ru` text NOT NULL,
  `titlee_uz` text NOT NULL,
  `titlee_ru` text NOT NULL,
  `titlee_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `manzil`
--

INSERT INTO `manzil` (`id`, `title_uz`, `title_en`, `body_uz`, `body_en`, `narx`, `foiz`, `img`, `body_ru`, `title_ru`, `titlee_uz`, `titlee_ru`, `titlee_en`) VALUES
(15, ' Qashqadaryo viloyatining Kitob tumanidagi \"Bashir\" qishlog\'i turizm qishlog\'iga aylantirilmoqda . \"Hazrati Bashir\" zatgohi aynan shu qishloqda joylashgan. Ziyoratgoh nomi shu joyda yashab oʻtgan avliyo Hazrati Sulton Said Ahmad Bashir (1368-1464) nomi bilan bogʻliq.', '\"Bashir\" village in Kitab district of Kashkadarya region is being turned into a tourism village. \"Hazrati Bashir\" zatgoha is located in this village. The name of the shrine is related to the name of the saint Hazrat Sultan Said Ahmad Bashir (1368-1464), who lived in this place.', ' \"Hazrati Bashir\"', ' \"Hazrati Bashir\"', '25000', '12', 'BtHUbEB3ZJt4z1im0sDFsX3EraKJPpS7XDK0BZMf.jpeg', '«Хазрат Башир»', 'Поселок «Башир» Китабского района Кашкадарьинской области превращается в туристический поселок. В этом селе находится затгоха «Хазрати Башир». Название святыни связано с именем святого Хазрата Султана Саида Ахмеда Башира (1368-1464), жившего в этом месте.', 'Qayd etish lozimki, 2022-yilda “Hazrati Bashir” ziyoratgohiga 400,000 nafardan ortiq va tashrif buyurgan turist tashrif buyurgan. Ush maskan tabiiy betakror tabiati, balki oʻziga xos tarixi bilan ham eʼtibor jalb qilib keladi.\r\n\r\n\r\n\r\nTurli manbalarga koʻra, Hazrati Sulton Said Ahmad Bashirning otalari Xoʻja Hasan - 90 yoshda, onalari Bibi Malohat 80 yoshda boʻlishlariga qaramay, farzandlar hujjati boʻlmagan. Kunlarning bir shu tarafga yoʻlida tushgan Amir Temurning piri Said Barakaning ukasi Said Neʼmatulloh sudlov haqiga duo qiladi. Koʻp oʻtmay duo ijobat boʻlib, Hazrati Bashir dunyoga keladi. faqat keksayib qolgan onadan sut kelmaydi. Chaqaloqni atrofdagilar “Beshir” (sutsiz) deb atay boshlashadi. Allohning moʻjizasi bilan sud hovlisidagi katta chinor ostida chashma paydo boʻlib, undan bola emizikli yoshdan oʻtguncha sut oqadi. Bu chashma xanuzgacha saratonda ham muzdek, tip-tiniq suvi va shifobaxshligi bilan mashhur. Taʼ yozish kerakki, ziyoratgohga kelib chiqadigan turistlar, albatta, bu suvdan ichib, oʻzlari bilan ham olib ketadi.\r\n\r\n\r\n\r\nHazrati Bashir qishloqdagi Niyoztepada dafn qilingan. El orasida “Hazrati Bashir qabri oldidagi archa daraxti u kishining hassasi boʻlgan”, degan rivoyat yuradi. Aytishlaricha, Hazrati Bashir ota hassasini uloqtirib, “Qayerga borib tushsa, oʻsha joy mening qabrim boʻladi”, degan ekanlar. Hassa yoʻgʻon nazorati bilan yerga qadalib qoladi. buning uchun boshqa tomondan farqli ravishning o\'tmish tomoni, yuqori tomoni yoʻgʻondir. Bu tilsimot ham, albatta, turistlarni befarq qoldirmaydi.\r\n\r\n\"Hazi Bashir\" qishlogʻi Qashqadar daryosi boʻyida joylashgan. Baland-baland chinorlar qishloqqa koʻrk berib turadi. Hudud togʻ bilan ham tutashib ketgan. Buning uchun bu yerda yoz oylari yurtimizning turli viloyatlari va mamlakatlardan sayohatchilar kelishadi. Ular Hazrati Bashir otani ziyorat qilish bilan birga daryo boʻyida dam olishadi. Qishloqda ziyorat turizmi, ekoturizm va agroturizm rivojlantirish.\r\n\r\n\r\n\r\nTaʼ joizki, joriy yildaqa tashrif buyuradigan sayyohlar sonini 70 mingga yetkazibish va turizm qishlogʻiga qishloq uchun0 qator ishlar amalga oshirilmoqda.\r\n\r\nHozirda qishloqda 20 dan ziyod mehmonxona uyi faoliyat yuritmoqda. Bu uchun foyda va hududda sayyohlar koʻproq foydalanish hamda xalq turmush arzi bilan yaqindan tanishish imkonini beradi. Soʻlim tabiat, musaffo togʻ havosi, shifobaxsh chashma, mehmondoʻst qishloq odamlari, ekologik toza mevalar, xushxoʻr taomlar va qalblarga sokinlik bagʻishlovchi ziyoratgoh sayyohlarni oʻziga jalb qilishi shubhasiz.\r\n\r\n\r\n\r\nMa\'lumot uchun, Qashqadaryodagi \"Varganza\" qishlog\'i viloyatdagi birinchi agroturizm qishlog\'i. Bu yerda 2019-yilda birinchi marta \"Anor\" xalqaro agroturizm festivali bo\'lib o\'tgan va qishloqqa \"agroturizm qishlog\'i\" maqomi berilgan.', 'Следует отметить, что в 2022 году святыню Хазрат Башир посетили более 400 000 туристов. Это место привлекает внимание не только своей природной уникальной природой, но и уникальной историей.\r\n\r\n\r\n\r\nПо разным данным, отцу Хазрата Султана Саида Ахмеда Башира, Ходже Хасану, 90 лет, а матери, Биби Малохат, 80 лет, но детских документов не было. Саид Нематулла, брат старшего брата Амира Темура Саида Барака, который ушел на эту сторону дня, молится о справедливости. Вскоре молитва была услышана, и родился Хазрат Башир. только старая мать не производит молока. Окружающие начинают называть малыша «Бешир» (без молока). Чудом Божиим под большим платаном во дворе двора появился родник, из которого текло молоко, пока ребенок не миновал грудной возраст. Этот источник до сих пор славится своей ледяной, кристально чистой водой и целебными свойствами даже при раке. Стоит отметить, что туристы, приехавшие к святыне, обязательно выпьют эту воду и возьмут с собой.\r\n\r\n\r\n\r\nХазрат Башир был похоронен в Ниязтепе в селе. Существует легенда, что «можжевеловое дерево перед могилой Хазрата Башира было тростью этого человека». Говорят, что Хазрат Башир бросил свою трость и сказал: «Куда бы она ни упала, это место будет моей могилой». Удилище прилипает к земле с большим контролем. для этого прошлая сторона, верхняя сторона другого подхода толстая. Этот талисман, безусловно, не оставляет туристов равнодушными.\r\n\r\nПоселок «Хази Башир» расположен на берегу реки Кашкадар. В деревне преобладают высокие клены. Район также связан с горой. Для этого сюда в летние месяцы приезжают путешественники из разных регионов и стран нашей страны. Они посещают Хазрат Башир и отдыхают у реки. Развитие паломнического туризма, экотуризма и агротуризма в с.\r\n\r\n\r\n\r\nК счастью, к этому году количество приезжих туристов достигнет 70 000, и для туристической деревни проводится ряд работ.\r\n\r\nВ настоящее время в поселке работает более 20 гостиниц. С этой целью это позволит туристам больше использовать территорию и познакомиться с бытом людей. Безмятежная природа, чистый горный воздух, целебный родник, гостеприимные сельские жители, экологически чистые фрукты, вкусная еда и душевное спокойствие обязательно привлекут туристов.\r\n\r\n\r\n\r\nК сведению, поселок «Варганза» в Кашкадарье – первый агротуристический поселок в регионе. В 2019 году здесь впервые прошел международный фестиваль агротуризма «Гранат», а поселку присвоен статус «агротуристический поселок».', 'It should be noted that in 2022, more than 400,000 tourists visited Hazrat Bashir shrine. This place attracts attention with its natural unique nature, but also with its unique history.\r\n\r\n\r\n\r\nAccording to various sources, Hazrat Sultan Said Ahmed Bashir\'s father, Khoja Hasan, is 90 years old, and his mother, Bibi Malohat, is 80 years old, but there were no children\'s documents. Said Ne\'matullah, the brother of Amir Temur\'s elder brother Said Baraka, who went to this side of the day, prays for justice. Soon the prayer was answered and Hazrat Bashir was born. only an old mother does not produce milk. The people around him start calling the baby \"Beshir\" (without milk). By the miracle of God, a fountain appeared under a large plane tree in the courtyard of the court, from which milk flowed until the child passed the nursing age. This spring is still famous for its ice-like, crystal-clear water and healing properties even in cancer. It should be noted that tourists who come to the shrine will definitely drink this water and take it with them.\r\n\r\n\r\n\r\nHazrat Bashir was buried in Niyaztepa in the village. There is a legend that \"the juniper tree in front of Hazrat Bashir\'s grave was that person\'s cane.\" It is said that Hazrat Bashir threw his cane and said, \"Wherever it lands, that place will be my grave.\" The rod sticks to the ground with great control. for this, the past side, the upper side of the different approach is thick. This talisman, of course, does not leave tourists indifferent.\r\n\r\n\"Hazi Bashir\" village is located on the bank of Kashkadar river. Tall maples dominate the village. The area is also connected to the mountain. For this, travelers from different regions and countries of our country come here in the summer months. They visit Hazrat Bashir and rest by the river. Development of pilgrimage tourism, ecotourism and agrotourism in the village.\r\n\r\n\r\n\r\nFortunately, by this year, the number of visiting tourists will reach 70,000 and a number of works are being carried out for the tourism village.\r\n\r\nCurrently, more than 20 hotels are operating in the village. For this purpose, it will allow tourists to use the area more and get to know the people\'s way of life. The serene nature, clean mountain air, healing spring, hospitable villagers, eco-friendly fruits, delicious food and peace of mind will surely attract tourists.\r\n\r\n\r\n\r\nFor information, the village \"Varganza\" in Kashkadarya is the first agrotourism village in the region. In 2019, the international agrotourism festival \"Pomegranate\" was held here for the first time, and the village was awarded the status of \"agrotourism village\".'),
(16, '“Yangi Oʻzbekiston” gazetasining shu yil 4-may sonida “Yangi Oʻzbekiston” muxbiri Gulsum Shodiyevaning “1200 yoshli chinor. Uning kovagida 25-30 kishi chordona qurib oʻtirsa boʻladi” nomli maqolasi chop etildi. Quyida uni oʻqishingiz mumkin.', 'In the May 4 issue of \"Yanyi Uzbekiston\" newspaper, \"Yanyi Uzbekiston\" reporter Gulsum Shodiyeva wrote, \"A 1200-year-old maple tree. An article entitled \"25-30 people can build an attic\" was published. You can read it below.', 'Kitobdagi 1200 yoshli chinor haqida eshitganmisiz?', 'Have you heard about the 1,200-year-old maple tree in the book?', '25000', '40', 'a0c93f10b463b00867b5b0cf5d3fe53e.jpg', 'Вы слышали о 1200-летнем клене в книге?', 'В номере газеты «Яны Узбекистон» от 4 мая корреспондент газеты «Яны Узбекистон» Гульсум Шодиева написала: «1200-летний клен. Была опубликована статья под названием «Чердак могут построить 25-30 человек». Вы можете прочитать его ниже.', 'Dunyoda pandemiya paytida oʻrnatilgan cheklovlar birin-ketin kamayayotgani tufayli turizm industriyasi tiklana boshlayapti. Jumladan, joriy yilning birinchi choragida yurtimizga xorijdan 610 ming nafar yoki oʻtgan yilning shu davriga nisbatan ikki barobardan ortiq sayyoh kelgan. Keyingi oylarda yanada koʻp turistlar kelishi kutilyapti. Bu maʼlumotlar Prezidentimiz raisligida shu yil 26-aprel kuni turizm xizmatlari koʻlamini kengaytirish va infratuzilmasini rivojlantirish choratadbirlari boʻyicha oʻtkazilgan videoselektor yigʻilishida alohida qayd etildi.\r\n\r\nChet elliklarning mamlakatimiz tarixi, meʼmorchilik obidalari, moziydan soʻylovchi osori atiqalariyu, ziyoratgohlariga qiziqishi yuqori. Biroq ular boradigan manzillar hali-hamon sanoqliligicha qolmoqda. Davlatimiz rahbari mazkur yigʻilishda mamlakatimizda turizm salohiyatini toʻliq roʻyobga chiqarish imkonini beradigan, Chimyon, Bildirsoy yoki Zomindan kam boʻlmagan, lekin salohiyati hali ishga solinmagan turistik manzillar koʻpligini taʼkidladi. Haqiqatan, bunday manzilgohlar yurtimizda serob. Ularni izlab topish, sayyohlik imkoniyatlaridan toʻlaqonli foydalanish kerak, xolos.', 'Индустрия туризма начинает восстанавливаться по мере того, как мировые ограничения, введенные во время пандемии, ослабляются одно за другим. В частности, в первом квартале текущего года нашу страну посетило 610 тысяч иностранных туристов, что более чем в два раза превышает показатель аналогичного периода прошлого года. Ожидается, что в ближайшие месяцы прибудет больше туристов. Эта информация была особо отмечена на совещании видеоселектора о мерах по расширению сферы туристических услуг и развитию инфраструктуры под председательством нашего Президента 26 апреля текущего года.\r\n\r\nИностранцев очень интересует история нашей страны, архитектурные памятники, памятники и святыни. Однако их предназначение по-прежнему ограничено. На данном совещании глава нашего государства отметил, что в нашей стране есть множество туристических направлений, не меньше, чем Чимен, Билдирсой или Зомин, но потенциал которых еще не использован, что позволяет в полной мере реализовать потенциал туризма в нашей стране. . На самом деле таких поселений в нашей стране очень много. Вам просто нужно найти их и в полной мере использовать туристические возможности.', 'The tourism industry is starting to recover as the world\'s restrictions imposed during the pandemic are being eased one by one. In particular, in the first quarter of this year, 610,000 foreign tourists came to our country, or more than twice as compared to the same period last year. More tourists are expected to arrive in the coming months. This information was specifically noted at the meeting of the video selector on measures to expand the scope of tourism services and develop infrastructure under the chairmanship of our President on April 26 of this year.\r\n\r\nForeigners are very interested in the history of our country, architectural monuments, monuments and shrines. However, their destinations are still limited. At this meeting, the head of our state noted that there are many tourist destinations in our country, no less than Chimyon, Bildirsoy or Zomin, but whose potential has not been used yet, which allow to fully realize the potential of tourism in our country. In fact, there are many such settlements in our country. You just need to find them and make full use of the tourist opportunities.');

-- --------------------------------------------------------

--
-- Структура таблицы `mehmon`
--

CREATE TABLE `mehmon` (
  `id` int NOT NULL,
  `title_uz` text NOT NULL,
  `title_en` text NOT NULL,
  `title_ru` text NOT NULL,
  `body_uz` text NOT NULL,
  `body_en` text NOT NULL,
  `body_ru` text NOT NULL,
  `img` text NOT NULL,
  `foiz` text NOT NULL,
  `narx` text NOT NULL,
  `titlee_uz` text NOT NULL,
  `titlee_ru` text NOT NULL,
  `titlee_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `mehmon`
--

INSERT INTO `mehmon` (`id`, `title_uz`, `title_en`, `title_ru`, `body_uz`, `body_en`, `body_ru`, `img`, `foiz`, `narx`, `titlee_uz`, `titlee_ru`, `titlee_en`) VALUES
(1, 'fvbfdebvf', 'fdbvfdb', 'fbvfdb', 'dbvfdb', 'dbfd', 'fdbfdb', '6.jpg', '10', '2000000', 'dfrbgdbvf', 'fdvbdfbv', 'dfbvdfb'),
(2, 'srvgsdr', 'bvfdb', 'edfbvdfb', 'vfdbvfd', 'fdbv fdb', 'dfbvdfbr', 'bashir.jpg', '40', '20000', 'dvdfbv', 'dsvfdb', 'dfvdfb');

-- --------------------------------------------------------

--
-- Структура таблицы `oshxona`
--

CREATE TABLE `oshxona` (
  `id` int NOT NULL,
  `title_uz` text NOT NULL,
  `title_en` text NOT NULL,
  `title_ru` text NOT NULL,
  `body_uz` text NOT NULL,
  `body_en` text NOT NULL,
  `body_ru` text NOT NULL,
  `img` text NOT NULL,
  `foiz` text NOT NULL,
  `narx` text NOT NULL,
  `titlee_uz` text NOT NULL,
  `titlee_ru` text NOT NULL,
  `titlee_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `oshxona`
--

INSERT INTO `oshxona` (`id`, `title_uz`, `title_en`, `title_ru`, `body_uz`, `body_en`, `body_ru`, `img`, `foiz`, `narx`, `titlee_uz`, `titlee_ru`, `titlee_en`) VALUES
(1, 'dfsdvf', 'sdvsdv', 'sdgvsdgv', 'sdvsdgv', 'vdsfvfd', 'sdvdsv', '6.jpg', '12', '25000', 'svgdsfgv', 'degvv', 'dsvgsdgv'),
(2, 'dsvsdv', 'vdsv', 'dsvsdv', 'sdvsdv', 'dsvdsv', 'sdvsdv', 'bashir.jpg', '0', '20000', 'dvdsvsd', 'vsdvsd', 'v sd'),
(3, 'dsvsdv', 'vdsv', 'dsvsdv', 'sdvsdv', 'dsvdsv', 'sdvsdv', 'bashir.jpg', '0', '20000', 'dvdsvsd', 'vsdvsd', 'v sd');

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

CREATE TABLE `review` (
  `id` int NOT NULL,
  `img` text NOT NULL,
  `title_uz` text NOT NULL,
  `title_en` text NOT NULL,
  `body_uz` text NOT NULL,
  `body_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `review`
--

INSERT INTO `review` (`id`, `img`, `title_uz`, `title_en`, `body_uz`, `body_en`) VALUES
(1, 'bashir.jpg', '222wsfgvv', '2222grsdrgvrv22', 'rfgd', 'gvregvsergvrgfjeirsogvershvuoeirsluugvierhbe'),
(2, 'g-5.jpg', 'dfbdf', 'btfdb', 'trbtdfrbfd', 'fdrtbrfdb'),
(3, '5.jpg', 'erg', 'dfbfdr', 'ggfdtrbf', 'tbhfrdthb');

-- --------------------------------------------------------

--
-- Структура таблицы `sarguzasht`
--

CREATE TABLE `sarguzasht` (
  `id` int NOT NULL,
  `title_uz` text NOT NULL,
  `title_en` text NOT NULL,
  `title_ru` text NOT NULL,
  `body_uz` text NOT NULL,
  `body_en` text NOT NULL,
  `body_ru` text NOT NULL,
  `img` text NOT NULL,
  `foiz` text NOT NULL,
  `narx` text NOT NULL,
  `titlee_uz` text NOT NULL,
  `titlee_ru` text NOT NULL,
  `titlee_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `sarguzasht`
--

INSERT INTO `sarguzasht` (`id`, `title_uz`, `title_en`, `title_ru`, `body_uz`, `body_en`, `body_ru`, `img`, `foiz`, `narx`, `titlee_uz`, `titlee_ru`, `titlee_en`) VALUES
(1, 'svdsv ', 'ds vds', 'dsv sd', 'dsfv dsv ', ' vdev edf ', 'v dsv ds v', '1.jpg', '50', '25000', 'sdvdsv', 'ds vdsv ds', 'vdsv ds'),
(2, 'fbfgv', 'vcfn gfvn b', ' nfgn gfv', 'bfn g vb', 'n gbn bv', 'n bfn b', '5.jpg', '50', '20000', 'dbvfb ', 'vcb vcb ', 'vcb cv');

-- --------------------------------------------------------

--
-- Структура таблицы `taxi`
--

CREATE TABLE `taxi` (
  `id` int NOT NULL,
  `manzil` text NOT NULL,
  `yulovchi` text NOT NULL,
  `vaqt` text NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `taxi`
--

INSERT INTO `taxi` (`id`, `manzil`, `yulovchi`, `vaqt`, `address`, `phone`) VALUES
(212, '', '', '', '', ''),
(213, 'hbsbfcwe', '2', '2023-03-26', 'evv', '+998 (97) 385-44-40'),
(214, 'hbsbfcwe', '3', '2023-03-21', 'evv', '+998 (97) 385-44-40');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `email`, `pass`, `type`) VALUES
(1, 'akmalturayev56@gmail.com', '12345', 'admin'),
(2, 'turayevakmal303@gmail.com', '1234', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `uy`
--

CREATE TABLE `uy` (
  `id` int NOT NULL,
  `title_uz` text NOT NULL,
  `title_en` text NOT NULL,
  `title_ru` text NOT NULL,
  `body_uz` text NOT NULL,
  `body_en` text NOT NULL,
  `body_ru` text NOT NULL,
  `img` text NOT NULL,
  `foiz` text NOT NULL,
  `narx` text NOT NULL,
  `titlee_uz` text NOT NULL,
  `titlee_ru` text NOT NULL,
  `titlee_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `uy`
--

INSERT INTO `uy` (`id`, `title_uz`, `title_en`, `title_ru`, `body_uz`, `body_en`, `body_ru`, `img`, `foiz`, `narx`, `titlee_uz`, `titlee_ru`, `titlee_en`) VALUES
(2, 'ergr', 'rgerg', 'rgreg', 'egr', 'regreg', 'regreg', '6.jpg', '10', '20000', 'gregregd', 'sdgerg', 'dsgferg'),
(4, 'wefwef', 'wefvwe', 'wefvew', 'wefew', 'wefewgfv', 'gfvwevf', '6.jpg', '40', '20 000', 'fvdevgr', 'dsvdsgv', 'sdvdgv'),
(5, 'dsvdev', 'dsfvefdv', 'sdvdev', 'edvv', 'evesg', 'vdevse', 'bashir.jpg', '40', '25000', 'ergv', 'edfvedfv', 'dvderv');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dacha`
--
ALTER TABLE `dacha`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `home1`
--
ALTER TABLE `home1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hordiq`
--
ALTER TABLE `hordiq`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Kitob`
--
ALTER TABLE `Kitob`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `manzil`
--
ALTER TABLE `manzil`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mehmon`
--
ALTER TABLE `mehmon`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `oshxona`
--
ALTER TABLE `oshxona`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sarguzasht`
--
ALTER TABLE `sarguzasht`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `taxi`
--
ALTER TABLE `taxi`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `uy`
--
ALTER TABLE `uy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dacha`
--
ALTER TABLE `dacha`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `home`
--
ALTER TABLE `home`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `home1`
--
ALTER TABLE `home1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `hordiq`
--
ALTER TABLE `hordiq`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Kitob`
--
ALTER TABLE `Kitob`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `manzil`
--
ALTER TABLE `manzil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `mehmon`
--
ALTER TABLE `mehmon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `oshxona`
--
ALTER TABLE `oshxona`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `review`
--
ALTER TABLE `review`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `sarguzasht`
--
ALTER TABLE `sarguzasht`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `taxi`
--
ALTER TABLE `taxi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `uy`
--
ALTER TABLE `uy`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
