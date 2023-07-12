--
-- Database: `garageparrot`
--
-- --------------------------------------------------------------------


-- --------------------------------------------------------------------
--  
-- Table structure for table `admin`  
--  
CREATE TABLE `admin` (
    `id` int(11) NOT NULL,
    `username` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--  
-- Dumping data for table `admin`  
--  

INSERT INTO
    `admin` (
        `id`, 
        `username`, 
        `password`, 
        `email`)
VALUES
    (
        1,
        'admin',
        '21232f297a57a5a743894a0e4a801fc3',
        'garage.vparrot@gmail.com'
    );

-- --------------------------------------------------------
--
-- Table structure for table `employees`
--
CREATE TABLE `employees` (
    `id` int(11) NOT NULL,
    `username` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `firstname` varchar(200) NOT NULL,
    `lastname` varchar(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `employees`
--
INSERT INTO
    `employees` (
        `id`,
        `username`,
        `password`,
        `email`,
        `firstname`,
        `lastname`
    )
VALUES
    (
        1,
        'RobertDupont',
        '67dd58e7cf775810682847be666471a6',
        'robert.dupont@gmail.com',
        'Robert',
        'Dupont'
    ),
    (
        2,
        'LisaSmith',
        '095373bc830059d4330e825d8092f4c7',
        'lisa.smith@gmail.com',
        'Lisa',
        'Smith'
    ),
    (
        3,
        'BobbyBob',
        'd4296b2de79044fa9022cd9d34413781',
        'bobby.bob@gmail.com',
        'Bobby',
        'Bob'
    );

-- --------------------------------------------------------------------
--
-- Table structure for table `tabcars`
--
CREATE TABLE `tabcars` (
    `id` int(11) NOT NULL,
    `CarsName` varchar(150) DEFAULT NULL,
    `CarsDescription` longtext DEFAULT NULL,
    `CarsPrice` int(11) DEFAULT NULL,
    `CarsKM` int(100) DEFAULT NULL,
    `CarsYear` int(6) DEFAULT NULL,
    `CarsSeat` int(11) DEFAULT NULL,
    `CarsType` varchar(120) DEFAULT NULL,
    `CarsImage1` varchar(120) DEFAULT NULL,
    `CarsImage2` varchar(120) DEFAULT NULL,
    `CarsImage3` varchar(120) DEFAULT NULL,
    `CarsImage4` varchar(120) DEFAULT NULL,
    `CarsAC` int(11) DEFAULT NULL,
    `Bluetooth` int(11) DEFAULT NULL,
    `AutoLight` int(11) DEFAULT NULL,
    `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `tabcars`
--
INSERT INTO
    `tabcars` (
        `id`,
        `CarsName`,
        `CarsDescription`,
        `CarsPrice`,
        `CarsKM`,
        `CarsYear`,
        `CarsType`,
        `CarsSeat`,
        `CarsImage1`,
        `CarsImage2`,
        `CarsImage3`,
        `CarsImage4`,
        `CarsAC`,
        `Bluetooth`,
        `AutoLight`
    )
VALUES
    (
        1,
        'Toyota Yaris',
        'La Toyota Yaris hybride et compact. \n\n Confort de conduite avec une longue autonomie. \n\n Etat neuf, deuxième main. \n\n Contrôle technique fait récemment.',
        15000,
        7000,
        2019,
        'Hybride',
        5,
        'TOYOTA-Yaris-GRMN-6114_9.jpg',
        'TOYOTA-Yaris-GRMN-6114_14.jpg',
        'TOYOTA-Yaris-GRMN-6114_1.jpg',
        'TOYOTA-Yaris-GRMN-6114_3.jpg',
        1,
        1,
        1
    ),
    (
        2,
        'Kia Picanto',
        'La Kia Picanto est agréable à conduire et se faufile partout. \n\n Malgré sa petite taille, elle est spacieuse.',
        18000,
        20000,
        2021,
        'Essence',
        5,
        'KIA-Picanto-5-doors-6833_16.jpg',
        'KIA-Picanto-5-doors-6833_15.jpg',
        'KIA-Picanto-5-doors-6833_8.jpg',
        'KIA-Picanto-5-doors-6833_13.jpg',
        1,
        1,
        1
    ),
    (
        3,
        'Renault Clio',
        'On ne présente plus la Renault Clio qui se conduit très facilement. \n\n Etat standard de la voiture.',
        7000,
        50000,
        2015,
        'Essence',
        5,
        'renault-clio-2023-7482_52.jpg',
        'renault-clio-2023-7482_39.jpg',
        'renault-clio-2023-7482_1.jpg',
        'renault-clio-2023-7482_5.jpg',
        0,
        0,
        0
    ),
    (
        4,
        'Nissan Micra',
        'La Nissan Micra a une bonne prise en main. \n\n Le contrôle technique reste à faire.',
        10000,
        35000,
        2020,
        'Electrique',
        4,
        'nissan-micra-2020-6976_12.jpg',
        'nissan-micra-2020-6976_11.jpg',
        'nissan-micra-2020-6976_1.jpg',
        'nissan-micra-2020-6976_3.jpg',
        1,
        1,
        1
    ),
    (
        5,
        'Toyota Aygo',
        'La Toyota Aygo est pratiquement neuve car modèle exposition.',
        23000,
        2000,
        2019,
        'Hybride',
        4,
        'toyota-aygo-x-2021-7191_27.jpg',
        'toyota-aygo-x-2021-7191_32.jpg',
        'toyota-aygo-x-2021-7191_9.jpg',
        'toyota-aygo-x-2021-7191_7.jpg',
        1,
        1,
        1
    );

-- --------------------------------------------------------
--
-- Table structure for table `tabcomment`
--
CREATE TABLE `tabcomment` (
    `id` int(11) NOT NULL,
    `usermail` varchar(100) NOT NULL,
    `comment` mediumtext NOT NULL,
    `userrating` int(1) NOT NULL,
    `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=Active | 0=Inactive'
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `tabcomment`
--
INSERT INTO
    `tabcomment` (
        `id`,
        `usermail`,
        `comment`,
        `userrating`,
        `status`)
VALUES
    (
        1,
        'userone@gmail.com',
        'Super garage merci!',
        5,
        0
    ),
    (
        2,
        'userone@gmail.com',
        'Rapide et efficace, Top!',
        4,
        1
    );


-- --------------------------------------------------------
--
-- Table structure for table `tabservices`
--
CREATE TABLE `tabservices` (
    `id` int(11) NOT NULL,
    `services_type` varchar(100) NOT NULL,
    `services_details` mediumtext NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `tabservices`
--
INSERT INTO
    `tabservices` (
        `id`,
        `services_type`,
        `services_details`)
VALUES
    (
        1,
        'Vidange',
        'Remplacement huile moteur'
    ),
    (
        2,
        'Vidange',
        'Remplacement filtre à huile'
    ),
    (
        3,
        'Vidange',
        'Remplacement Bouchon vidange'
    ),
    (
        4,
        'Batterie',
        'Remplacement batterie'
    ),
    (
        5,
        'Batterie',
        'Remplacement démarreur'
    ),
    (
        6,
        'Moteur',
        'Remplacement bougies'
    ),
    (
        7,
        'Moteur',
        'Remplacement du filtre à air'
    ),
    (
        8,
        'Moteur',
        'Remplacement injecteur'
    ),
    (
        9,
        'Pneus',
        'Changements pneus'
    ),
    (
        10,
        'Pneus',
        'Parallélisme'
    ),
    (
        11,
        'Pneus',
        'Equilibrage'
    ),
    (
        12,
        'Carrosserie',
        'Nettoyage à sec'
    ),
    (
        13,
        'Carrosserie',
        'Peinture'
    );


-- --------------------------------------------------------
--
-- Table structure for table `tabopening`
--
CREATE TABLE `tabopening` (
    `id` int(11) NOT NULL,
    `opening_week` mediumtext NOT NULL,
    `opening_saturday` mediumtext NOT NULL,
    `opening_sunday` mediumtext NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `tabopening`
--
INSERT INTO
    `tabopening` (
        `id`,
        `opening_week`,
        `opening_saturday`,
        `opening_sunday`)
VALUES
    (
        1,
        'Lundi - vendredi: 8h45-12h00, 14h00-18h00',
        'Samedi: 8h45-12h00',
        'Fermé dimanche'
    );
    

-- --------------------------------------------------------------------
--
-- Indexes for table `admin`
--
ALTER TABLE
    `admin`
ADD
    PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE
    `employees`
ADD
    PRIMARY KEY (`id`);

--
-- Indexes for table `tabcars`
--
ALTER TABLE
    `tabcars`
ADD
    PRIMARY KEY (`id`);

--
-- Indexes for table `tabcomment`
--
ALTER TABLE
    `tabcomment`
ADD
    PRIMARY KEY (`id`);

--
-- Indexes for table `tabservices`
--
ALTER TABLE
    `tabservices`
ADD
    PRIMARY KEY (`id`);


--
-- Indexes for table `tabopening`
--
ALTER TABLE
    `tabopening`
ADD
    PRIMARY KEY (`id`);


-- --------------------------------------------------------------------
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE
    `admin`
MODIFY
    `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE
    `employees`
MODIFY
    `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 4;

--
-- AUTO_INCREMENT for table `tblvehicles`
--
ALTER TABLE
    `tabcars`
MODIFY
    `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT for table `tabcomment`
--
ALTER TABLE
    `tabcomment`
MODIFY
    `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 3;


--
-- AUTO_INCREMENT for table `tabservices`
--
ALTER TABLE
    `tabservices`
MODIFY
    `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 14;


--
-- AUTO_INCREMENT for table `tabopening`
--
ALTER TABLE
    `tabopening`
MODIFY
    `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;


COMMIT;
