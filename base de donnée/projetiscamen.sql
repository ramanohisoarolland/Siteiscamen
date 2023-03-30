-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2022 at 06:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetiscamen`
--

-- --------------------------------------------------------

--
-- Table structure for table `absence`
--

CREATE TABLE `absence` (
  `id` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL,
  `crn_horaire` varchar(255) NOT NULL,
  `type_absence` varchar(255) NOT NULL,
  `is_old` tinyint(1) NOT NULL DEFAULT 0,
  `module` varchar(255) DEFAULT NULL,
  `professeur` int(11) DEFAULT NULL,
  `date_absence` date DEFAULT NULL,
  `fileName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `absence`
--

INSERT INTO `absence` (`id`, `id_etudiant`, `crn_horaire`, `type_absence`, `is_old`, `module`, `professeur`, `date_absence`, `fileName`) VALUES
(2, 5, '8-10', 'Absence justifiée', 0, 'merise', 23, '0001-11-11', ''),
(3, 5, '8-10', 'Absence justifiée', 1, 'merise', 19, '0011-11-11', ''),
(4, 5, '8-10', 'Absence justifiée', 1, 'base de donnée avancée', 19, '0011-11-11', ''),
(5, 5, '8-10', 'Absence justifiée', 0, 'algebre', 19, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `nom` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `message` text NOT NULL,
  `prenom` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `email`, `message`, `prenom`, `phone`) VALUES
(29, 'ramanohisoa ', 'ramanohisoarolland@gmail.com', 'Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!Let us give you more details about the special offer website you want us. Please fill out the form below.\r\nWe have million of website owners who happy to work with us!', 'martin rolland', '03322333666');

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `objet` text NOT NULL,
  `message` text NOT NULL,
  `fileName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ecolage`
--

CREATE TABLE `ecolage` (
  `id` int(11) NOT NULL,
  `mois` text NOT NULL,
  `date` text NOT NULL,
  `somme` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ecolage`
--

INSERT INTO `ecolage` (`id`, `mois`, `date`, `somme`, `id_user`) VALUES
(1, '', '', 0, 0),
(2, '', '', 0, 0),
(3, '2022-06', '1111-11-11', 23336699, 0),
(4, '0002-02', '0002-02-22', 2222, 0),
(5, '0001-11', '0011-11-11', 111, 0),
(6, '', '', 0, 0),
(7, '0008-08', '0088-08-08', 88, 0),
(8, '0011-11', '0001-11-11', 30002, 0),
(9, '8', '0002-02-22', 203, 0),
(10, '10', '0002-02-22', 10, 0),
(11, '5', '0022-12-12', 200, 0),
(12, '8', '0001-11-11', 25000, 0),
(13, '9', '0002-02-22', 25000, 0),
(14, '5', '0111-11-11', 25000, 0),
(15, '8', '20002-11-01', 25000, 0),
(16, '2', '0011-11-11', 25000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `element_module`
--

CREATE TABLE `element_module` (
  `id` int(11) NOT NULL,
  `module` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `proportion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emploi_du_temp`
--

CREATE TABLE `emploi_du_temp` (
  `id` int(11) NOT NULL,
  `heure` varchar(12) NOT NULL,
  `filiere` text NOT NULL,
  `niveau` text NOT NULL,
  `lundi` text NOT NULL,
  `mardi` text NOT NULL,
  `mercredi` text NOT NULL,
  `jeudi` text NOT NULL,
  `vendredi` text NOT NULL,
  `lundi1` text NOT NULL,
  `lundi2` text NOT NULL,
  `lundi3` text NOT NULL,
  `mardi1` text NOT NULL,
  `mardi2` text NOT NULL,
  `mardi3` text NOT NULL,
  `mercredi1` text NOT NULL,
  `mercredi2` text NOT NULL,
  `mercredi3` text NOT NULL,
  `jeudi1` text NOT NULL,
  `jeudi2` text NOT NULL,
  `jeudi3` text NOT NULL,
  `vendredi1` text NOT NULL,
  `vendredi2` text NOT NULL,
  `vendredi3` text NOT NULL,
  `heure1` text NOT NULL,
  `heure2` text NOT NULL,
  `heure3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emploi_du_temp`
--

INSERT INTO `emploi_du_temp` (`id`, `heure`, `filiere`, `niveau`, `lundi`, `mardi`, `mercredi`, `jeudi`, `vendredi`, `lundi1`, `lundi2`, `lundi3`, `mardi1`, `mardi2`, `mardi3`, `mercredi1`, `mercredi2`, `mercredi3`, `jeudi1`, `jeudi2`, `jeudi3`, `vendredi1`, `vendredi2`, `vendredi3`, `heure1`, `heure2`, `heure3`) VALUES
(30, '7h-9h', 'ECOTOURISME', 'LICENCE2', 'rr', 'rr', 'rr', 'rr', 'r', 'rr', 'r', 'r', 'rr', 'rr', 'rr', 'r', 'r', 'r', 'rr', 'rr', 'rr', 'rr', 'r', 'r', '9h-11h', '14h-16h', '16h-18h'),
(31, '7h-9h', 'paramedicaux', 'licence1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '9h-11h', '14h-16h', '16h-18h'),
(32, '7h-9h', 'ecotourisme', 'licence2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '9h-11h', '14h-16h', '16h-18h'),
(33, '7h-9h', 'paramedicaux', 'licence1', 'rr', 'rr', 'rr', 'tt', 'tt', 'yyy', 'llllll', 'nnn', 'hhhhh', 'bbb', 'nn', 'jjjjj', 'bbb', '', 'kkkk', 'bbb', '', 'kkkk', 'bb', ';;;', '9h-11h', '14h-16h', '16h-18h'),
(34, '7h-9h', 'pedagogique', 'licence1', 'pedagen', 'kk', 'kkk', 'kk', 'kk', 'k', 'pp', '', '', 'p', '', '', 'p', 'p', '', 'p', 'p', '', 'p', 'p', '9h-11h', '14h-16h', '16h-18h'),
(35, '7h-9h', 'informatique', 'licence2', 'AA', 'A', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', '9h-11h', '14h-16h', '16h-18h'),
(36, '7h-9h', 'gestion', 'licence1', 'rr', 'er', 'er', 're', 're', 'r', '', '', 'r', '', '', 'r', '', '', '', '', '', '', '', '', '9h-11h', '14h-16h', '16h-18h'),
(37, '7h-9h', 'pedagogique', 'licence3', 'malagasy', '', '', '', '', '', '', '', '', '', '', '', '', 'malagasy', 'malagasy', '', '', '', '', '', '9h-11h', '14h-16h', '16h-18h'),
(38, '7h-9h', 'ecotourisme', 'licence1', 'environnement', '', '', '', 'environnement', 'environnement', '', 'environnement', '', 'environnement', '', 'environnement', '', 'environnement', '', 'environnement', '', '', '', 'environnement', '9h-11h', '14h-16h', '16h-18h');

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `cin` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `cne` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` text NOT NULL,
  `lieu_naissance` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fileName` varchar(200) NOT NULL,
  `filiere` text NOT NULL,
  `niveau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`id`, `id_user`, `cin`, `nom`, `cne`, `prenom`, `date_naissance`, `adresse`, `lieu_naissance`, `telephone`, `email`, `fileName`, `filiere`, `niveau`) VALUES
(5, 22, '6666', 'RAMANOHISOA', '1247', 'martin rolland', '0012-12-12', 'namahora', 'namahora', '033224556', 'ramanohisoa@gmail.com', '38252209161663359760.jpg', '', ''),
(6, 24, '8888', 'etudiant rolland', '888', 'etudiant', '0088-08-08', '888', '8888', '03355788', 'etudiant@gmail.com', '55232209171663397663.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fc_events_table`
--

CREATE TABLE `fc_events_table` (
  `id` int(11) NOT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `title` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `niveaux` text NOT NULL,
  `departement` text NOT NULL,
  `pour` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `downloads`, `niveaux`, `departement`, `pour`) VALUES
(42, 'bootstrap-icons-1.8.3.zip', 1340297, 8, 'licence2', 'Informatique', 'Support de cours'),
(43, 'bootstrap-icons-1.8.3.zip', 1340297, 3, 'licence2', 'Ecotourisme', 'Support de cours'),
(44, '1652970343440_TP1-corr.pdf', 946545, 3, 'licence3', 'Paramedicaux', 'Support de cours'),
(45, '1652970343440_TP1-corr.pdf', 946545, 4, 'licence1', 'Ecotourisme', 'Support de cours'),
(46, '1652970343440_TP1-corr.pdf', 946545, 0, 'licence2', 'gestion', 'Examen'),
(47, 'Introduction au reseaux.pdf', 401180, 0, 'licence3', 'gestion', 'Support de cours'),
(48, 'Introduction au reseaux.pdf', 401180, 0, 'licence3', 'gestion', 'Support de cours'),
(49, 'Introduction au reseaux.pdf', 401180, 0, 'licence3', 'gestion', 'Support de cours'),
(50, 'Introduction au reseaux.pdf', 401180, 2, 'licence3', 'gestion', 'Support de cours'),
(51, 'Introduction au reseaux.pdf', 401180, 1, 'licence3', 'gestion', 'Support de cours'),
(52, 'liste-professeur.pdf', 4891, 2, 'licence2', 'Gestion Management', 'Devoirs');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `nom_module` varchar(255) NOT NULL,
  `nature` varchar(255) NOT NULL,
  `prof` text NOT NULL,
  `username` text NOT NULL,
  `type` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `nom_module`, `nature`, `prof`, `username`, `type`, `id_user`) VALUES
(1, 'algebre', '2', 'raeva', '', '', 0),
(2, 'merise', '2', 'evariste', '', '', 0),
(3, 'php mysql', '2', 'michel', '', '', 0),
(4, 'base de donnée avancée', '2', 'directeur ramino', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mot`
--

CREATE TABLE `mot` (
  `id` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `fileName` varchar(200) NOT NULL,
  `classe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mot`
--

INSERT INTO `mot` (`id`, `nom`, `prenom`, `message`, `fileName`, `classe`) VALUES
(34, 'RAHARILAMBONIAINA ', 'MARIE FABIEN', 'bonjours', '21712208151660599710.jpg', 'image/jpeg'),
(35, 'RECTEUR ANDRIANTSOA', 'EMILLE', 'historique\r\nL’Institut Supérieur Catholique du Menabe est un institut pilier\r\n au développement des jeunes du Menabe qui se confirme par ses spécificités.\r\n La première partie de ce chapitre détaillera la description de l’ISCaMen, \r\nla deuxième de ses natures et buts, la troisième de la présentation de son \r\norganisation et la dernière les autorités officielles.. L’Institut Supérieur\r\n Catholique du Menabe est un institut pilier au développement des jeunes du\r\n Menabe qui se confirme par ses spécificités. La première partie de ce chapitre \r\ndétaillera la description de l’ISCaMen, la deuxième de ses natures et buts, la troisième de', '77622209221663847940.jpg', 'recteur'),
(36, 'jeanne', 'juany', 'nqn', '1192208151660600144.jpg', 'recteur'),
(37, 'gg', 'gg', 'gg', '50822208151660600170.jpg', 'recteur'),
(38, 'RAHARILAMBONIAINA', 'MARIE FABIEN', 'historique\r\nL’Institut Supérieur Catholique du Menabe est un institut pilier\r\n au développement des jeunes du Menabe qui se confirme par ses spécificités.\r\n La première partie de ce chapitre détaillera la description de l’ISCaMen, \r\nla deuxième de ses natures et buts, la troisième de la présentation de son \r\norganisation et la dernière les autorités officielles.. L’Institut Supérieur\r\n Catholique du Menabe est un institut pilier au développement des jeunes du\r\n Menabe qui se confirme par ses spécificités. La première partie de ce chapitre \r\ndétaillera la description de l’ISCaMen, la deuxième de ses natures et buts, la troisième de', '66672209221663847643.jpg', 'monseigneur'),
(39, '', '', '', '8482208151660600771.jpg', 'secretaire');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `num_etudiant` text NOT NULL,
  `num_matiere` text NOT NULL,
  `moyenne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `num_etudiant`, `num_matiere`, `moyenne`) VALUES
(56, '12', 'algebre', 13),
(57, '1', 'mathematique', 20),
(58, '20', 'PHP', 20),
(59, 'mathe', 'mal', 0);

-- --------------------------------------------------------

--
-- Table structure for table `professeur`
--

CREATE TABLE `professeur` (
  `id` int(11) NOT NULL COMMENT '00',
  `id_user` int(11) NOT NULL DEFAULT 0,
  `som` int(7) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `fileName` varchar(200) NOT NULL,
  `is_old` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=REDUNDANT;

--
-- Dumping data for table `professeur`
--

INSERT INTO `professeur` (`id`, `id_user`, `som`, `nom`, `prenom`, `email`, `telephone`, `fileName`, `is_old`, `student_id`) VALUES
(4, 16, 1111111, 'RAMANOHISOA', 'donlla', 'donlla@gmail.com', 'donlla stani', '97992209191663601447.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `id` int(11) NOT NULL,
  `expediteur` text NOT NULL,
  `objet` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`id`, `expediteur`, `objet`, `message`) VALUES
(1, 'masera jeanne', 'interressant', 'gagag'),
(2, 'masera jeanne', 'interressant', 'fff'),
(3, '', '', ''),
(4, 'rolland', 'examen', 'bonjoursss'),
(5, 'rolland', 'objectifs', 'message');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT 'etudiant',
  `fileName` varchar(200) NOT NULL,
  `email` text NOT NULL,
  `nom` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `password`, `type`, `fileName`, `email`, `nom`, `created_at`, `updated_at`, `status`) VALUES
(19, 'admin', 'admin', 'admin', '17652209161663351261.JPG', 'admin@gmail.com', '', '2022-09-16 18:01:01', '2022-09-16 18:01:01', 0),
(23, 'recteur', 'recteur', 'admin', '95392209161663360275.JPG', 'recteur@gmail.com', '', '2022-09-16 20:31:15', '2022-09-16 20:31:15', 0),
(24, 'etudiant', 'etudiant', 'etudiant', '', '', '', '2022-09-17 04:08:30', '2022-09-17 04:08:30', 0),
(25, 'dalson', 'dalson', 'professeur', '', '', '', '2022-09-18 11:40:41', '2022-09-18 11:40:41', 0),
(26, 'rolland martin', 'rolland', 'admin', '9952209191663602370.jpg', 'ramanohisoa@gmail.com', '', '2022-09-19 15:46:10', '2022-09-19 15:46:10', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absence`
--
ALTER TABLE `absence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_etudiant` (`id_etudiant`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecolage`
--
ALTER TABLE `ecolage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `element_module`
--
ALTER TABLE `element_module`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module` (`module`);

--
-- Indexes for table `emploi_du_temp`
--
ALTER TABLE `emploi_du_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `fc_events_table`
--
ALTER TABLE `fc_events_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mot`
--
ALTER TABLE `mot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absence`
--
ALTER TABLE `absence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ecolage`
--
ALTER TABLE `ecolage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `element_module`
--
ALTER TABLE `element_module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emploi_du_temp`
--
ALTER TABLE `emploi_du_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fc_events_table`
--
ALTER TABLE `fc_events_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mot`
--
ALTER TABLE `mot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '00', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `programme`
--
ALTER TABLE `programme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
