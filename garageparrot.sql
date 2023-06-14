--
-- Database: `garageparrot`
--

-- --------------------------------------------------------------------

--  
-- Table structure for table `admin`  
--  
CREATE TABLE `admin` (
    `id` int(11) NOT NULL,
    `username` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--  
-- Dumping data for table `admin`  
--  
INSERT INTO `admin` (`id`, `username`, `password`) VALUES  
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'); 


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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabcars`
--

INSERT INTO `tabcars` (`id`, `CarsName`, `CarsDescription`, `CarsPrice`, `CarsKM`, `CarsYear`, `CarsType`, `CarsSeat`, `CarsImage1`, `CarsImage2`, `CarsImage3`, `CarsImage4`, `CarsAC`, `Bluetooth`, `AutoLight`) VALUES
(1, 'Toyota Yaris', 'La Toyota Yaris hybride et compact. \n\n Confort de conduite avec une longue autonomie. \n\n Etat neuf, deuxième main. \n\n Contrôle technique fait récemment.', 15000, 7000, 2019, 'Hybride', 5, 'TOYOTA-Yaris-GRMN-6114_9.jpg', 'TOYOTA-Yaris-GRMN-6114_14.jpg', 'TOYOTA-Yaris-GRMN-6114_1.jpg', 'TOYOTA-Yaris-GRMN-6114_3.jpg', 1, 1, 1),
(2, 'Kia Picanto', 'La Kia Picanto est agréable à conduire et se faufile partout. \n\n Malgré sa petite taille, elle est spacieuse.', 18000, 20000, 2021, 'Essence', 5, 'KIA-Picanto-5-doors-6833_16.jpg', 'KIA-Picanto-5-doors-6833_15.jpg', 'KIA-Picanto-5-doors-6833_8.jpg', 'KIA-Picanto-5-doors-6833_13.jpg', 1, 1, 1),
(3, 'Renault Clio', 'On ne présente plus la Renault Clio qui se conduit très facilement. \n\n Etat standard de la voiture.', 7000, 50000, 2015, 'Essence', 5, 'renault-clio-2023-7482_52.jpg', 'renault-clio-2023-7482_39.jpg', 'renault-clio-2023-7482_1.jpg', 'renault-clio-2023-7482_5.jpg', 0, 0, 0),
(4, 'Nissan Micra', 'La Nissan Micra a une bonne prise en main. \n\n Le contrôle technique reste à faire.', 10000, 35000, 2020, 'Electrique', 4, 'nissan-micra-2020-6976_12.jpg', 'nissan-micra-2020-6976_11.jpg', 'nissan-micra-2020-6976_1.jpg', 'nissan-micra-2020-6976_3.jpg', 1, 1, 1),
(5, 'Toyota Aygo', 'La Toyota Aygo est pratiquement neuve car modèle exposition.', 23000, 2000, 2019, 'Hybride', 4, 'toyota-aygo-x-2021-7191_27.jpg', 'toyota-aygo-x-2021-7191_32.jpg', 'toyota-aygo-x-2021-7191_9.jpg', 'toyota-aygo-x-2021-7191_7.jpg', 1, 1, 1);

-- --------------------------------------------------------------------


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
    ADD PRIMARY KEY (`id`);


--
-- Indexes for table `tabcars`
--
ALTER TABLE `tabcars`
    ADD PRIMARY KEY (`id`);



-- --------------------------------------------------------------------


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblvehicles`
--
ALTER TABLE `tabcars`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;