-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2016 at 10:12 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(3) NOT NULL auto_increment,
  `userId` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY  (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `userId`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_ID` int(11) NOT NULL auto_increment,
  `name` varchar(54) NOT NULL,
  PRIMARY KEY  (`name`,`country_ID`),
  KEY `country_ID` (`country_ID`),
  KEY `countryName` (`name`(2)),
  KEY `countryName_2` (`name`(2)),
  KEY `countryName_3` (`name`(2)),
  KEY `countryName_4` (`name`(2))
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=785 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_ID`, `name`) VALUES
(589, 'Afghanistan'),
(590, 'Albania'),
(591, 'Algeria'),
(592, 'Andorra'),
(593, 'Angola'),
(594, 'Antigua and Barbuda'),
(595, 'Argentina'),
(596, 'Armenia'),
(597, 'Australia'),
(598, 'Austria'),
(599, 'Azerbaijan'),
(600, 'Bahamas'),
(601, 'Bahrain'),
(602, 'Bangladesh'),
(603, 'Barbados'),
(604, 'Belarus'),
(605, 'Belgium'),
(606, 'Belize'),
(607, 'Benin'),
(608, 'Bhutan'),
(609, 'Bolivia'),
(610, 'Bosnia and Herzegovina'),
(611, 'Botswana'),
(612, 'Brazil'),
(613, 'Brunei'),
(614, 'Bulgaria'),
(615, 'Burkina Faso'),
(616, 'Burundi'),
(617, 'Cambodia'),
(618, 'Cameroon'),
(619, 'Canada'),
(620, 'Cape Verde'),
(621, 'Central African Republic'),
(622, 'Chad'),
(623, 'Chile'),
(624, 'China'),
(625, 'Colombia'),
(626, 'Comoros'),
(627, 'Congo'),
(628, 'Costa Rica'),
(629, 'Cote d&#039;Ivoire'),
(630, 'Croatia'),
(631, 'Cuba'),
(632, 'Cyprus'),
(633, 'Czech Republic'),
(634, 'Denmark'),
(635, 'Djibouti'),
(636, 'Dominica'),
(637, 'Dominican Republic'),
(638, 'East Timor (Timor Timur)'),
(639, 'Ecuador'),
(640, 'Egypt'),
(641, 'El Salvador'),
(642, 'Equatorial Guinea'),
(643, 'Eritrea'),
(644, 'Estonia'),
(645, 'Ethiopia'),
(646, 'Fiji'),
(647, 'Finland'),
(648, 'France'),
(649, 'Gabon'),
(650, 'Gambia'),
(652, 'Georgia'),
(653, 'Germany'),
(654, 'Ghana'),
(655, 'Greece'),
(656, 'Grenada'),
(657, 'Guatemala'),
(658, 'Guinea'),
(659, 'Guinea-Bissau'),
(660, 'Guyana'),
(661, 'Haiti'),
(662, 'Honduras'),
(663, 'Hungary'),
(664, 'Iceland'),
(665, 'India'),
(666, 'Indonesia'),
(667, 'Iran'),
(668, 'Iraq'),
(669, 'Ireland'),
(670, 'Israel'),
(671, 'Italy'),
(672, 'Jamaica'),
(673, 'Japan'),
(674, 'Jordan'),
(675, 'Kazakhstan'),
(676, 'Kenya'),
(677, 'Kiribati'),
(678, 'Korea'),
(680, 'Korea'),
(682, 'Kuwait'),
(683, 'Kyrgyzstan'),
(684, 'Laos'),
(685, 'Latvia'),
(686, 'Lebanon'),
(687, 'Lesotho'),
(688, 'Liberia'),
(689, 'Libya'),
(690, 'Liechtenstein'),
(691, 'Lithuania'),
(692, 'Luxembourg'),
(693, 'Macedonia'),
(694, 'Madagascar'),
(695, 'Malawi'),
(696, 'Malaysia'),
(697, 'Maldives'),
(698, 'Mali'),
(699, 'Malta'),
(700, 'Marshall Islands'),
(701, 'Mauritania'),
(702, 'Mauritius'),
(703, 'Mexico'),
(704, 'Micronesia'),
(705, 'Moldova'),
(706, 'Monaco'),
(707, 'Mongolia'),
(708, 'Morocco'),
(709, 'Mozambique'),
(710, 'Myanmar'),
(711, 'Namibia'),
(712, 'Nauru'),
(713, 'Nepal'),
(714, 'Netherlands'),
(715, 'New Zealand'),
(716, 'Nicaragua'),
(717, 'Niger'),
(718, 'Nigeria'),
(679, 'North'),
(719, 'Norway'),
(720, 'Oman'),
(721, 'Pakistan'),
(722, 'Palau'),
(723, 'Panama'),
(724, 'Papua New Guinea'),
(725, 'Paraguay'),
(726, 'Peru'),
(727, 'Philippines'),
(728, 'Poland'),
(729, 'Portugal'),
(730, 'Qatar'),
(731, 'Romania'),
(732, 'Russia'),
(733, 'Rwanda'),
(734, 'Saint Kitts and Nevis'),
(735, 'Saint Lucia'),
(736, 'Saint Vincent and The Grenadines'),
(737, 'Samoa'),
(738, 'San Marino'),
(739, 'Sao Tome and Principe'),
(740, 'Saudi Arabia'),
(741, 'Senegal'),
(742, 'Serbia and Montenegro'),
(743, 'Seychelles'),
(744, 'Sierra Leone'),
(745, 'Singapore'),
(746, 'Slovakia'),
(747, 'Slovenia'),
(748, 'Solomon Islands'),
(749, 'Somalia'),
(681, 'South'),
(750, 'South Africa'),
(751, 'Spain'),
(752, 'Sri Lanka'),
(753, 'Sudan'),
(754, 'Suriname'),
(755, 'Swaziland'),
(756, 'Sweden'),
(757, 'Switzerland'),
(758, 'Syria'),
(759, 'Taiwan'),
(760, 'Tajikistan'),
(761, 'Tanzania'),
(762, 'Thailand'),
(651, 'The'),
(763, 'Togo'),
(764, 'Tonga'),
(765, 'Trinidad and Tobago'),
(766, 'Tunisia'),
(767, 'Turkey'),
(768, 'Turkmenistan'),
(769, 'Tuvalu'),
(770, 'Uganda'),
(771, 'Ukraine'),
(772, 'United Arab Emirates'),
(773, 'United Kingdom'),
(774, 'United States'),
(775, 'Uruguay'),
(776, 'Uzbekistan'),
(777, 'Vanuatu'),
(778, 'Vatican City'),
(779, 'Venezuela'),
(780, 'Vietnam'),
(781, 'Western Sahara'),
(782, 'Yemen'),
(783, 'Zambia'),
(784, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `sno` int(11) NOT NULL auto_increment,
  `acctNo` int(11) NOT NULL,
  `acctType` text NOT NULL,
  `sex` char(1) NOT NULL,
  `sName` text NOT NULL,
  `oName` text NOT NULL,
  `state` text NOT NULL,
  `addr` text NOT NULL,
  `pNo` text NOT NULL,
  `eMail` text NOT NULL,
  `dob` text NOT NULL,
  `occupatn` text NOT NULL,
  `nationality` text NOT NULL,
  `nkName` text NOT NULL,
  `nkPhon` int(11) NOT NULL,
  `nkAdd` text NOT NULL,
  `nkRel` text NOT NULL,
  `foto` text NOT NULL,
  `cDat` text NOT NULL,
  PRIMARY KEY  (`acctNo`),
  UNIQUE KEY `sno` (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `cust`
--


-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `sno` int(11) NOT NULL auto_increment,
  `amount` int(11) NOT NULL,
  `acctNo` text NOT NULL,
  `cDat` text NOT NULL,
  PRIMARY KEY  (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `deposit`
--


-- --------------------------------------------------------

--
-- Table structure for table `saves`
--

CREATE TABLE `saves` (
  `sno` int(11) NOT NULL auto_increment,
  `acctNo` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY  (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `saves`
--


-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL auto_increment,
  `state` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`) VALUES
(1, 'Abia'),
(2, 'Adamawa'),
(3, 'Borno'),
(4, 'FCT'),
(5, 'Akwa Ibom'),
(6, 'Ogun'),
(7, 'Ebonyi'),
(8, 'Cross River'),
(9, 'Imo State'),
(10, 'Rivers'),
(11, 'Kogi'),
(12, 'Ekiti'),
(13, 'Oyo'),
(14, 'Niger'),
(15, 'Benue'),
(16, 'Lagos'),
(17, 'Anambra'),
(18, 'Kano'),
(19, 'Gombe'),
(20, 'Edo'),
(21, 'Nasarawa'),
(22, 'Kebbi'),
(23, 'Delta'),
(24, 'Zamfara'),
(25, 'Taraba'),
(26, 'Kwara'),
(27, 'Osun'),
(28, 'Plateau'),
(29, 'Katsina'),
(30, 'Sokoto'),
(31, 'Jigawa'),
(32, 'Bauchi'),
(33, 'Ondo'),
(34, 'Enugu'),
(35, 'Kaduna'),
(36, 'Yobe'),
(37, 'Bayelsa');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `sno` int(11) NOT NULL auto_increment,
  `actNo` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `cDat` text NOT NULL,
  PRIMARY KEY  (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `withdraw`
--

