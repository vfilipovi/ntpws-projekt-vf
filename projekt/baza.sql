-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 06:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(11) NOT NULL,
  `ime` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `prezime` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `email` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `username` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `password` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `datumReg` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(100) COLLATE utf32_croatian_ci DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_croatian_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `ime`, `prezime`, `email`, `username`, `password`, `datumReg`, `role`) VALUES
(2, 'Pero', 'Perić', 'pero22@gmail.com', 'pero22', '$2y$12$cquv.tapewDmb9jO7BydHOhTpYqJ/ioTr6D2YxKBvRmye7e1pL6ES', '2020-11-20 18:33:15', 'user'),
(6, 'Marko', 'Horvat', 'markohr@gmail.com', 'marko22', '$2y$12$2Dm19Bb7VQ9giL1HMW7m3ONBSGDk3165r9kQWrjrKy3bmg5Ka1Whq', '2020-11-24 18:17:34', 'admin'),
(7, 'Ivan', 'Vuksan', 'ivuki@gmail.com', 'ivan22', '$2y$12$m0SVDhOcPtVy25/FWQd1b.PKbtIyDY2ZaGdJj7MUZBGFdr0li7/wa', '2020-11-24 19:23:00', 'editor');

-- --------------------------------------------------------

--
-- Table structure for table `vijesti`
--

CREATE TABLE `vijesti` (
  `id` int(11) NOT NULL,
  `naslov` varchar(100) COLLATE utf32_croatian_ci NOT NULL,
  `tekst` varchar(10000) COLLATE utf32_croatian_ci NOT NULL,
  `vrijemeObjave` timestamp NOT NULL DEFAULT current_timestamp(),
  `imeAutora` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `kategorija` varchar(100) COLLATE utf32_croatian_ci NOT NULL,
  `slikaPath` varchar(1000) COLLATE utf32_croatian_ci NOT NULL,
  `kratkiOpis` varchar(110) COLLATE utf32_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_croatian_ci;

--
-- Dumping data for table `vijesti`
--

INSERT INTO `vijesti` (`id`, `naslov`, `tekst`, `vrijemeObjave`, `imeAutora`, `kategorija`, `slikaPath`, `kratkiOpis`) VALUES
(5, 'Stigao je note20', 'The Samsung Galaxy Note 20 and Galaxy Note 20 Ultra (stylized and marketed as Samsung Galaxy Note20 and Galaxy Note20 Ultra) are Android-based phablets designed, developed, produced, and marketed by Samsung Electronics for their Samsung Galaxy Note series, succeeding the Samsung Galaxy Note 10 series.[2][3][4][5] The phablets were announced on 5 August 2020 alongside the Samsung Galaxy Z Fold 2, Galaxy Watch 3, Galaxy Buds Live and Samsung Galaxy Tab S7 during Samsung\'s Unpacked Event.[6][7][8][9]\r\n\r\nDue to restrictions of the COVID-19 pandemic on public and social gatherings, the Note 20 range were unveiled digitally at Samsung\'s newsroom in South Korea. At the event, Samsung announced that the smartphones include support for 5G connectivity, which allows for higher-bandwidth and lower-latency mobile connections where 5G network coverage is available. The Note 20\'s S-Pen has up to 4× better latency than that of previous generations. Grey, Green, and Mystic Bronze are colour options for the Note 20; Black and White are colour options for the Note 20 Ultra. Unlike its predecessor, the Note 20 range does not feature a \"+\" model.[10][11]\r\n\r\nThe Galaxy Note 20 series also include a number of new software features, which include performance optimization for mobile gaming, wireless sync with desktop and laptop PCs, and improved DeX features for remotely connected to compatible devices.[12] ', '2020-11-18 20:19:34', 'Marko Marulić', 'scitech', 'uploads/3c3190c732bdf19f5567e7f986bd1f14.jpg', 'The Samsung Galaxy Note 20 and '),
(9, 'Dobitak na lutriji', 'Osvojili 4,6 milijuna eura, ali lutrija im s razlogom ne želi isplatiti dobitak ... JEDAN muškarac u južnoj Kaliforniji došao je podići dobitak na lutriji ', '2020-11-24 19:00:28', 'Pero peric', 'vijest', 'uploads/b40fd650740ea6931cba3c956b964286.jpg', 'Pri isplati dobitka sudionik predaje dobitnu srećku na prodajnom mjestu Hrvatske Lutrije'),
(10, 'Nesreća kod Buzina', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id neque sit amet magna sagittis euismod. Aliquam eget ornare lectus, vitae feugiat tellus. Nulla faucibus nisl neque, ut gravida ligula semper eu. Sed nec tellus pellentesque lacus gravida lacinia. Mauris efficitur massa non lectus sodales fringilla. ', '2020-11-24 19:07:28', 'Mia M', 'vijest', 'uploads/b64a2b0fa567458d74b91ddddf663a24.jpg', 'proklizavanje s kolnika, velika brzina'),
(11, 'Pogledajte snimku: Pao meteor iznad Hrvatske, traže ostatke', 'Nekoliko ljudi nas je zvalo i javilo da su čuli udar. Zapravo, i mene je supruga zvala koja je vidjela meteor i tijekom našeg razgovora čuo se jaki zvučni udar - rekao nam je Damir Hržina, stručni suradnik iz zagrebačke Zvjezdarnice, koji je kontaktirao kolege iz Hrvatske meteorske mreže koji provjeravaju detalje i koji će možda krenuti u potragu za meteoritima.\r\n\r\nMožemo vam potvrditi da je nešto palo na granici Hrvatske i Slovenije, ali nije avion, rekli su nam iz službe 112, nakon što smo ih nazvali i pokušali saznati kakva se to tutnjava osjetila na području Zagreba. Zagrebački vatrogasci nemaju nikakve dojave o eventualnim štetama ili ozlijeđenima zbog pada meteora, štoviše, novinari 24sata prvi su im dojavili tu informaciju, nakon koje su provjerili stanje na terenu. ', '2020-11-24 19:12:27', 'MIa m', 'vijest', 'uploads/9450f9a56c18a88ad90288b6a83db7ce.webp', 'Meteor je izgorio pri ulasku u atmosferu oko 10:30 sati. Iza njega je ostao trag '),
(12, 'Predsjednička tranzicija i vijest o cjepivu protiv Covida-19', '\r\nVijesti\r\nprije -59 minuta-Capak: \"Zatvaraju se kina, idu ograničenja za kafiće i javni prijevoz\"\r\nprije -44 minuta-U Italiji 853 umrlih od koronavirusa, najviše od 28. ožujka\r\nprije -29 minuta-Fuchs o prosvjedu nastavnika: \"Svi ti zahtjevi prilično upitni i problematični\"\r\nprije -13 minuta-Milanović: \"Par glupana nije shvatilo moju izjavu kada sam rekao da se neću cijepiti\"\r\nprije 30 minuta-Oporba: Izmjene Ovršnog zakona su kozmetičke i neće riješiti probleme ovršenika\r\nprije 1 sat-Četvrtina Talijana vjeruje u teorije urote o covidu-19\r\nprije 1 sat-Milijan Brkić s težim oblikom koronavirusa primljen u bolnicu, dobio upalu pluća\r\nprije 2 sati-IDS: \"Nasilje nad ženama znatno se povećava tijekom izvanrednih situacija\"\r\nprije 2 sati-Predsjednička tranzicija i vijest o cjepivu protiv Covida-19 podigle cijenu nafte\r\nprije 2 sati-Iran: Vrhovni vođa odbacuje izglede za nove pregovore sa Zapadom\r\nGospodarstvo\r\nPredsjednička tranzicija i vijest o cjepivu protiv Covida-19 podigle cijenu nafte\r\n24. 11. 2020. 16:41\r\nAutor: J.B. / HINA\r\nPixabay\r\n\r\nCijene nafte porasle su u utorak na međunarodnim tržištima prema 47 dolara nakon najave novog potencijalnog cjepiva protiv covida 19 i zelenog svjetla za tranziciju na kabinet novoizabranog američkog predsjednika Joea Bidena.\r\n\r\nNa londonskom je tržištu cijena barela porasla 51 cent u odnosu na prethodno zatvaranje, na 46,57 dolara. Na američkom tržištu barelom se trgovalo po 63 centa višoj cijeni, na 43,69 dolara.\r\n\r\nAstraZeneca objavila je jučer da je njezino cjepivo protiv covida 19 u ispitivanjima pokazalo 70-postotnu učinkovitost, a potencijalno bi moglo dosegnuti i do 90 posto. Time je bitka protiv pandemije dobila treće cjepivo, nakon pozitivnih rezultata Pfizer/BioNTecha i Moderne.\r\n\r\n“Bitka protiv koronavirusa sve je intenzivnija i, čini se, uspješnija. Procjene potražnje nafte u sljedećoj godini zasigurno će biti podignute”, rekao je Tamas Varga iz brokerske kuće PVM.\r\n\r\nNaftu i šire financijsko tržište podupire i vijest da je američki predsjednik Donald Trump u ponedjeljak ključnoj saveznoj agenciji odobrio suradnju s tranzicijskim timom novoizabranog predsjednika Joea Bidena.\r\n\r\n“Kratkoročno je to općenito dobro za tržišta, pa i za tržište nafte,” rekla je Bjarne Schieldrop iz SEB-a.\r\n\r\nPotporu cijenama pružila su i očekivanja da su američke zalihe sirove nafte u prošlom tjednu pale. Američki institut za naftu (API) objavit će izvješće tokom dana a vlada sutra.', '2020-11-24 19:13:42', 'MIa m', 'vijest', 'uploads/805db6325ed74aace00c1de6a3dec105.jpg', 'ene nafte porasle su u utorak na međunarodnim tržištima prema 47 dolara'),
(13, 'Guinnessov rekord u driftanju električnim autom', 'nstruktor vožnje u Porscheu, Dennis Retera, oborio je Guinnessov svjetski rekord u driftanju električnim automobilom. Rekord je postigao na kružnoj stazi u Hockenheimringu, dužine od 200 metara, na kojoj je u 55 minuta odvezao 211 krugova u neprekidnom driftu, što znači da je vozio u stalnom balansu između kontroliranog proklizavanja i izlijetanja, za što će vam svatko tko je probao tako voziti čitavo vrijeme pod ručnom, reći da je abnormalno teško, kao što možete vidjeti', '2020-11-24 19:15:01', 'Petar Peir', 'auto', 'uploads/0191d56adaa611403d4ecfd106fef2d4.jpg', 'Dennis Retera je u električnom Porsche Taycanu neprekidno driftao 55 minuta '),
(14, 'AI pretvara vaše črčkarije u čudovišta', 'Googleov istraživački tim za AI je predstavio još jedan simpatični online alat koji će vam pomoći da svoje jednostavne črčkarije uz pomoć algoritma strojnog učenja pretvarate u kvalitetne sličice. Googleovi istraživači kažu kako im je ideja bila napraviti paintbrush program koji je manje alat za crtanje, a više asistent za izradu umjetničkih modela. Za razliku od prijašnjih AI asistenata za crtanje koje smo imali prilike vidjeti, Chimera Painter vaše osnovne skice i crteže pretvara u čudovišta, no koliko će ih kvalitetno izraditi opet dosta ovisi o vašoj vještini crtanja. Pored toga možete \"uploadati\" i nečiji tuđi crtež pa primijeniti transformiranje da vidite kako će ispasti.\r\n\r\nNa primjeru slike gore možete vidjeti kako je nama ispao prvi pokušaj crtanja čudovišta, no ako imate talenta i vještine za \"malo\" bolje skice, možete dobiti puno kvalitetniji art.\r\n\r\nIstraživači su model strojnog učenja trenirali podatkovnom bazom s više od 10.000 čudovišta. U samom programu imate više segmenata za izradu čudovišta - tijelo, noge, ruke, usta, rogovi, krila, itd, a svaki prezentira jedna boja, čime se AI-u olakšava prepoznavanje onoga što ste nacrtali, kako bi potom usporedio vašu črčkariju s anatomskim elementima iz svoje baze.\r\n\r\nMožemo reći da ovaj \"čudovišni\" slikarski asistent nije nešto spektakularno, ali biste se mogli barem malo zabaviti ako odete na ovu poveznicu.', '2020-11-24 19:16:39', 'P P', 'scitech', 'uploads/f40c3de9666424c4ef064b1719a7e869.jpg', 'Googleov novi alat'),
(15, 'Epska preobrazba BMW-a koji će već 2021. proizvesti milijun elektroauta', 'NEXTGen 2020 donosi svjetske premijere BMW-a iNEXT, BMW Motorrad i MINI. Ovo naprosto morate pogledati, a i pročitati.\r\n\r\nStiže i serijska verzija BMW-a iNEXT, koja će se u prodaji naći krajem studenog 2021. godine pod oznakom BMW iX. BMW Group piše novo poglavlje o budućnosti mobilnosti – a #NEXTGen 2020 pruža idealnu platformu na kojoj će se predstaviti. U svijetu koji se mijenja radikalnije nego ikad, BMW grupa postavila si je za cilj nastaviti tehnološki razvoj, postavljati trendove i biti snaga u oblikovanju budućeg lica mobilnosti s atraktivnim portfeljem proizvoda i njegovom snagom izbora strategija.\r\n\r\nNa #NEXTGen 2020 BMW Group otvara vrata koja se inače čvrsto drže zatvorena. Javnost će imati prigodu iz prve ruke saznati što to BMW sprema. Prikazuje nove tehnologije i vozila, dok istovremeno razmatra neke vrlo konkretne primjere kako bi mogla ili će izgledati mobilnost sljedeće generacije. Zapravo, uz predstavljanje vrhunaca Centra za istraživanje i inovacije (FIZ), #NEXTGen 2020 donosi svjetske premijere BMW Motorrad i MINI. Stiže i dizajn serijske verzije BMW-a iNEXT, koji će se u prodaji naći krajem studenog 2021. godine pod oznakom BMW iX.\r\n\r\nOliver Zipse, predsjednik Uprave BMW AG iz BMW-a je kazao: “BMW grupa neprestano nastoji inovacijama se nadograđivati.BMW grupa nije spremna samo za budućnost – ona pomaže da je aktivno oblikuje.“ Dodao je kako: – “BMW Group neprestano nastoji slijediti i inovirati sebe – to je ključni element naše korporativne strategije, a BMW iX obuhvaća ovaj pristup u visoko koncentriranom obliku.”\r\n\r\nProizvodnja BMW-a iX započet će u pogonu BMW-a Dingolfing 2021. S jedne strane, objedinjuje sva dostignuća, iskustva i inovacije koje je BMW akumulirao posljednjih godina u svojstvu vodećeg premium dobavljača na području električne mobilnosti. Ali njegov razvoj također ilustrira presudnu ulogu koju već igra umjetna inteligencija (AI). Trenutno BMW Group koristi AI u preko 400 aplikacija i u svim relevantnim odjelima tvrtke, u razvoju, prodaji / marketingu i proizvodnji. Također se koristi za obradu i tumačenje velikih količina podataka. AI predstavlja osnovu za automatiziranu vožnju i najprirodnije moguće iskustvo u radu u vozilu.\r\n\r\nJoš jedan važan korak na putu ka budućoj mobilnosti – automatizirana vožnja – može se pretvoriti u stvarnost samo uz pomoć tehnologije s područja u kojem je BMW igrao pionirsku ulogu od 1990-ih: povezanost. BMW već danas nudi bežične nadogradnje softvera i digitalne usluge za mnoge svoje modele. BMW iX sada ide korak dalje kao prvi premium model koji koristi 5G mobilnu tehnologiju. Mnoštvo izuzetno moćnih senzora – od fotoaparata do radara i ultrazvučnih uređaja – zajedno s brojnim različitim antenama, od Bluetootha do 5G, uz pomoć umjetne inteligencije i usluga upravljanih podacima, pretvaraju BMW iX u računalo visokih performansi na kotačima.\r\n\r\nNovi centar za simulaciju vožnje BMW Group u Münchenu pruža idealno okruženje za ove aktivnosti. Najsofisticiraniji i najsvestraniji objekt ovog tipa, ovaj objekt od 11.400 četvornih metara dom je za ukupno 14 simulatora, uključujući simulator visoke vjernosti i visoko dinamički simulator. Oni omogućuju da se iskustvo vožnje na cesti prenese u laboratorij u realističnijem obliku nego ikad prije.', '2020-11-24 19:17:49', 'Marko Tole', 'auto', 'uploads/3c9885ba9af856b52e6798c52434bc9d.jpg', 'VIRTUALNI VATROMET IZ Munchena!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vijesti`
--
ALTER TABLE `vijesti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vijesti`
--
ALTER TABLE `vijesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
