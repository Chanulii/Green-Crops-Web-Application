-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 02:52 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cd_earn`
--

-- --------------------------------------------------------

--
-- Table structure for table `adpaymentslips`
--

CREATE TABLE `adpaymentslips` (
  `paymentID` int(11) NOT NULL,
  `postID` int(11) NOT NULL,
  `paymentIMG` text NOT NULL,
  `payment_ammount` double NOT NULL,
  `paymentDate` date NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adpaymentslips`
--

INSERT INTO `adpaymentslips` (`paymentID`, `postID`, `paymentIMG`, `payment_ammount`, `paymentDate`, `userID`) VALUES
(10, 29, 'assets/img/postPaymentSlip/29.png', 1000, '2021-10-06', 1),
(11, 30, 'assets/img/postPaymentSlip/30.png', 1000, '2021-10-06', 1),
(12, 33, 'assets/img/postPaymentSlip/33.png', 1000, '2021-10-13', 1),
(13, 34, 'assets/img/postPaymentSlip/34.png', 1000, '2021-10-13', 1),
(14, 35, 'assets/img/postPaymentSlip/35.png', 1000, '2021-10-15', 1),
(15, 36, 'assets/img/postPaymentSlip/36.png', 1000, '2021-10-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `Country_Name` varchar(255) NOT NULL,
  `ISO3166_1_Alpha_2` varchar(5) NOT NULL,
  `ISO3166_1_Alpha_3` varchar(5) NOT NULL,
  `Dial` varchar(20) NOT NULL,
  `IOE` varchar(5) NOT NULL,
  `ISO4217_Currency_Alphabetic_Code` varchar(5) NOT NULL,
  `ISO4217_Currency_Country_Name` varchar(255) NOT NULL,
  `ISO4217_Currency_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`Country_Name`, `ISO3166_1_Alpha_2`, `ISO3166_1_Alpha_3`, `Dial`, `IOE`, `ISO4217_Currency_Alphabetic_Code`, `ISO4217_Currency_Country_Name`, `ISO4217_Currency_Name`) VALUES
('Afghanistan', 'AF', 'AFG', '93', 'AFG', 'AFN', 'AFGHANISTAN', 'Afghani\r'),
('Albania', 'AL', 'ALB', '355', 'ALB', 'ALL', 'ALBANIA', 'Lek\r'),
('Algeria', 'DZ', 'DZA', '213', 'ALG', 'DZD', 'ALGERIA', 'Algerian Dinar\r'),
('American Samoa', 'AS', 'ASM', '1-684', 'ASA', 'USD', 'AMERICAN SAMOA', 'US Dollar\r'),
('Andorra', 'AD', 'AND', '376', 'AND', 'EUR', 'ANDORRA', 'Euro\r'),
('Angola', 'AO', 'AGO', '244', 'ANG', 'AOA', 'ANGOLA', 'Kwanza\r'),
('Anguilla', 'AI', 'AIA', '1-264', 'AIA', 'XCD', 'ANGUILLA', 'East Caribbean Dollar\r'),
('Antarctica', 'AQ', 'ATA', '672', '', '', '', '\r'),
('Antigua & Barbuda', 'AG', 'ATG', '1-268', 'ANT', 'XCD', 'ANTIGUA AND BARBUDA', 'East Caribbean Dollar\r'),
('Argentina', 'AR', 'ARG', '54', 'ARG', 'ARS', 'ARGENTINA', 'Argentine Peso\r'),
('Armenia', 'AM', 'ARM', '374', 'ARM', 'AMD', 'ARMENIA', 'Armenian Dram\r'),
('Aruba', 'AW', 'ABW', '297', 'ARU', 'AWG', 'ARUBA', 'Aruban Florin\r'),
('Australia', 'AU', 'AUS', '61', 'AUS', 'AUD', 'AUSTRALIA', 'Australian Dollar\r'),
('Austria', 'AT', 'AUT', '43', 'AUT', 'EUR', 'AUSTRIA', 'Euro\r'),
('Azerbaijan', 'AZ', 'AZE', '994', 'AZE', 'AZN', 'AZERBAIJAN', 'Azerbaijanian Manat\r'),
('Bahamas', 'BS', 'BHS', '1-242', 'BAH', 'BSD', 'BAHAMAS', 'Bahamian Dollar\r'),
('Bahrain', 'BH', 'BHR', '973', 'BRN', 'BHD', 'BAHRAIN', 'Bahraini Dinar\r'),
('Bangladesh', 'BD', 'BGD', '880', 'BAN', 'BDT', 'BANGLADESH', 'Taka\r'),
('Barbados', 'BB', 'BRB', '1-246', 'BAR', 'BBD', 'BARBADOS', 'Barbados Dollar\r'),
('Belarus', 'BY', 'BLR', '375', 'BLR', 'BYR', 'BELARUS', 'Belarussian Ruble\r'),
('Belgium', 'BE', 'BEL', '32', 'BEL', 'EUR', 'BELGIUM', 'Euro\r'),
('Belize', 'BZ', 'BLZ', '501', 'BIZ', 'BZD', 'BELIZE', 'Belize Dollar\r'),
('Benin', 'BJ', 'BEN', '229', 'BEN', 'XOF', 'BENIN', 'CFA Franc BCEAO\r'),
('Bermuda', 'BM', 'BMU', '1-441', 'BER', 'BMD', 'BERMUDA', 'Bermudian Dollar\r'),
('Bhutan', 'BT', 'BTN', '975', 'BHU', 'INR', 'BHUTAN', 'Indian Rupee\r'),
('Bolivia', 'BO', 'BOL', '591', 'BOL', 'BOB', 'BOLIVIA, PLURINATIONAL STATE OF', 'Boliviano\r'),
('Bosnia', 'BA', 'BIH', '387', 'BIH', 'BAM', 'BOSNIA AND HERZEGOVINA', 'Convertible Mark\r'),
('Botswana', 'BW', 'BWA', '267', 'BOT', 'BWP', 'BOTSWANA', 'Pula\r'),
('Bouvet Island', 'BV', 'BVT', '47', '', '', '', '\r'),
('Brazil', 'BR', 'BRA', '55', 'BRA', 'BRL', 'BRAZIL', 'Brazilian Real\r'),
('British Indian Ocean Territory', 'IO', 'IOT', '246', '', '', '', '\r'),
('British Virgin Islands', 'VG', 'VGB', '1-284', 'IVB', 'USD', 'VIRGIN ISLANDS (BRITISH)', 'US Dollar\r'),
('Brunei', 'BN', 'BRN', '673', 'BRU', 'BND', 'BRUNEI DARUSSALAM', 'Brunei Dollar\r'),
('Bulgaria', 'BG', 'BGR', '359', 'BUL', 'BGN', 'BULGARIA', 'Bulgarian Lev\r'),
('Burkina Faso', 'BF', 'BFA', '226', 'BUR', 'XOF', 'BURKINA FASO', 'CFA Franc BCEAO\r'),
('Burundi', 'BI', 'BDI', '257', 'BDI', 'BIF', 'BURUNDI', 'Burundi Franc\r'),
('Cambodia', 'KH', 'KHM', '855', 'CAM', 'KHR', 'CAMBODIA', 'Riel\r'),
('Cameroon', 'CM', 'CMR', '237', 'CMR', 'XAF', 'CAMEROON', 'CFA Franc BEAC\r'),
('Canada', 'CA', 'CAN', '1', 'CAN', 'CAD', 'CANADA', 'Canadian Dollar\r'),
('Cape Verde', 'CV', 'CPV', '238', 'CPV', 'CVE', 'CABO VERDE', 'Cabo Verde Escudo\r'),
('Caribbean Netherlands', 'BQ', 'BES', '599', 'AHO', 'USD', 'BONAIRE, SINT EUSTATIUS AND SABA', 'US Dollar\r'),
('Cayman Islands', 'KY', 'CYM', '1-345', 'CAY', 'KYD', 'CAYMAN ISLANDS', 'Cayman Islands Dollar\r'),
('Central African Republic', 'CF', 'CAF', '236', 'CAF', 'XAF', 'CENTRAL AFRICAN REPUBLIC', 'CFA Franc BEAC\r'),
('Chad', 'TD', 'TCD', '235', 'CHA', 'XAF', 'CHAD', 'CFA Franc BEAC\r'),
('Chile', 'CL', 'CHL', '56', 'CHI', 'CLP', 'CHILE', 'Chilean Peso\r'),
('China', 'CN', 'CHN', '86', 'CHN', 'CNY', 'CHINA', 'Yuan Renminbi\r'),
('Christmas Island', 'CX', 'CXR', '61', '', '', '', '\r'),
('Cocos (Keeling) Islands', 'CC', 'CCK', '61', '', '', '', '\r'),
('Colombia', 'CO', 'COL', '57', 'COL', 'COP', 'COLOMBIA', 'Colombian Peso\r'),
('Comoros', 'KM', 'COM', '269', 'COM', 'KMF', 'COMOROS', 'Comoro Franc\r'),
('Congo - Brazzaville', 'CG', 'COG', '242', 'CGO', 'XAF', 'CONGO', 'CFA Franc BEAC\r'),
('Congo - Kinshasa', 'CD', 'COD', '243', 'COD', '', '', '\r'),
('Cook Islands', 'CK', 'COK', '682', 'COK', 'NZD', 'COOK ISLANDS', 'New Zealand Dollar\r'),
('Costa Rica', 'CR', 'CRI', '506', 'CRC', 'CRC', 'COSTA RICA', 'Costa Rican Colon\r'),
('Croatia', 'HR', 'HRV', '385', 'CRO', 'HRK', 'CROATIA', 'Croatian Kuna\r'),
('Cuba', 'CU', 'CUB', '53', 'CUB', 'CUP', 'CUBA', 'Cuban Peso\r'),
('CuraÃ§ao', 'CW', 'CUW', '599', '', 'ANG', 'CURAÃ‡AO', 'Netherlands Antillean Guilder\r'),
('Cyprus', 'CY', 'CYP', '357', 'CYP', 'EUR', 'CYPRUS', 'Euro\r'),
('Czech Republic', 'CZ', 'CZE', '420', 'CZE', '', '', '\r'),
('CÃ´te d\'Ivoire', 'CI', 'CIV', '225', 'CIV', 'XOF', 'CÃ”TE D\'IVOIRE', 'CFA Franc BCEAO\r'),
('Denmark', 'DK', 'DNK', '45', 'DEN', 'DKK', 'DENMARK', 'Danish Krone\r'),
('Djibouti', 'DJ', 'DJI', '253', 'DJI', 'DJF', 'DJIBOUTI', 'Djibouti Franc\r'),
('Dominica', 'DM', 'DMA', '1-767', 'DMA', 'XCD', 'DOMINICA', 'East Caribbean Dollar\r'),
('Dominican Republic', 'DO', 'DOM', '1-809,1-829,1-849', 'DOM', 'DOP', 'DOMINICAN REPUBLIC', 'Dominican Peso\r'),
('Ecuador', 'EC', 'ECU', '593', 'ECU', 'USD', 'ECUADOR', 'US Dollar\r'),
('Egypt', 'EG', 'EGY', '20', 'EGY', 'EGP', 'EGYPT', 'Egyptian Pound\r'),
('El Salvador', 'SV', 'SLV', '503', 'ESA', 'USD', 'EL SALVADOR', 'US Dollar\r'),
('Equatorial Guinea', 'GQ', 'GNQ', '240', 'GEQ', 'XAF', 'EQUATORIAL GUINEA', 'CFA Franc BEAC\r'),
('Eritrea', 'ER', 'ERI', '291', 'ERI', 'ERN', 'ERITREA', 'Nakfa\r'),
('Estonia', 'EE', 'EST', '372', 'EST', 'EUR', 'ESTONIA', 'Euro\r'),
('Ethiopia', 'ET', 'ETH', '251', 'ETH', 'ETB', 'ETHIOPIA', 'Ethiopian Birr\r'),
('Falkland Islands', 'FK', 'FLK', '500', 'FLK', 'FKP', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands Pound\r'),
('Faroe Islands', 'FO', 'FRO', '298', 'FAR', '', '', '\r'),
('Fiji', 'FJ', 'FJI', '679', 'FIJ', 'FJD', 'FIJI', 'Fiji Dollar\r'),
('Finland', 'FI', 'FIN', '358', 'FIN', 'EUR', 'FINLAND', 'Euro\r'),
('France', 'FR', 'FRA', '33', 'FRA', 'EUR', 'FRANCE', 'Euro\r'),
('French Guiana', 'GF', 'GUF', '594', 'FGU', 'EUR', 'FRENCH GUIANA', 'Euro\r'),
('French Polynesia', 'PF', 'PYF', '689', 'FPO', 'XPF', 'FRENCH POLYNESIA', 'CFP Franc\r'),
('French Southern Territories', 'TF', 'ATF', '262', '', '', '', '\r'),
('Gabon', 'GA', 'GAB', '241', 'GAB', 'XAF', 'GABON', 'CFA Franc BEAC\r'),
('Gambia', 'GM', 'GMB', '220', 'GAM', 'GMD', 'GAMBIA', 'Dalasi\r'),
('Georgia', 'GE', 'GEO', '995', 'GEO', 'GEL', 'GEORGIA', 'Lari\r'),
('Germany', 'DE', 'DEU', '49', 'GER', 'EUR', 'GERMANY', 'Euro\r'),
('Ghana', 'GH', 'GHA', '233', 'GHA', 'GHS', 'GHANA', 'Ghana Cedi\r'),
('Gibraltar', 'GI', 'GIB', '350', 'GIB', 'GIP', 'GIBRALTAR', 'Gibraltar Pound\r'),
('Greece', 'GR', 'GRC', '30', 'GRE', 'EUR', 'GREECE', 'Euro\r'),
('Greenland', 'GL', 'GRL', '299', 'GRL', 'DKK', 'GREENLAND', 'Danish Krone\r'),
('Grenada', 'GD', 'GRD', '1-473', 'GRN', 'XCD', 'GRENADA', 'East Caribbean Dollar\r'),
('Guadeloupe', 'GP', 'GLP', '590', 'GUD', 'EUR', 'GUADELOUPE', 'Euro\r'),
('Guam', 'GU', 'GUM', '1-671', 'GUM', 'USD', 'GUAM', 'US Dollar\r'),
('Guatemala', 'GT', 'GTM', '502', 'GUA', 'GTQ', 'GUATEMALA', 'Quetzal\r'),
('Guernsey', 'GG', 'GGY', '44', '', 'GBP', 'GUERNSEY', 'Pound Sterling\r'),
('Guinea', 'GN', 'GIN', '224', 'GUI', 'GNF', 'GUINEA', 'Guinea Franc\r'),
('Guinea-Bissau', 'GW', 'GNB', '245', 'GBS', 'XOF', 'GUINEA-BISSAU', 'CFA Franc BCEAO\r'),
('Guyana', 'GY', 'GUY', '592', 'GUY', 'GYD', 'GUYANA', 'Guyana Dollar\r'),
('Haiti', 'HT', 'HTI', '509', 'HAI', 'USD', 'HAITI', 'US Dollar\r'),
('Heard & McDonald Islands', 'HM', 'HMD', '672', '', '', '', '\r'),
('Honduras', 'HN', 'HND', '504', 'HON', 'HNL', 'HONDURAS', 'Lempira\r'),
('Hong Kong', 'HK', 'HKG', '852', 'HKG', '', '', '\r'),
('Hungary', 'HU', 'HUN', '36', 'HUN', 'HUF', 'HUNGARY', 'Forint\r'),
('Iceland', 'IS', 'ISL', '354', 'ISL', 'ISK', 'ICELAND', 'Iceland Krona\r'),
('India', 'IN', 'IND', '91', 'IND', 'INR', 'INDIA', 'Indian Rupee\r'),
('Indonesia', 'ID', 'IDN', '62', 'INA', 'IDR', 'INDONESIA', 'Rupiah\r'),
('Iran', 'IR', 'IRN', '98', 'IRI', 'IRR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iranian Rial\r'),
('Iraq', 'IQ', 'IRQ', '964', 'IRQ', 'IQD', 'IRAQ', 'Iraqi Dinar\r'),
('Ireland', 'IE', 'IRL', '353', 'IRL', 'EUR', 'IRELAND', 'Euro\r'),
('Isle of Man', 'IM', 'IMN', '44', '', 'GBP', 'ISLE OF MAN', 'Pound Sterling\r'),
('Israel', 'IL', 'ISR', '972', 'ISR', 'ILS', 'ISRAEL', 'New Israeli Sheqel\r'),
('Italy', 'IT', 'ITA', '39', 'ITA', 'EUR', 'ITALY', 'Euro\r'),
('Jamaica', 'JM', 'JAM', '1-876', 'JAM', 'JMD', 'JAMAICA', 'Jamaican Dollar\r'),
('Japan', 'JP', 'JPN', '81', 'JPN', 'JPY', 'JAPAN', 'Yen\r'),
('Jersey', 'JE', 'JEY', '44', '', 'GBP', 'JERSEY', 'Pound Sterling\r'),
('Jordan', 'JO', 'JOR', '962', 'JOR', 'JOD', 'JORDAN', 'Jordanian Dinar\r'),
('Kazakhstan', 'KZ', 'KAZ', '7', 'KAZ', 'KZT', 'KAZAKHSTAN', 'Tenge\r'),
('Kenya', 'KE', 'KEN', '254', 'KEN', 'KES', 'KENYA', 'Kenyan Shilling\r'),
('Kiribati', 'KI', 'KIR', '686', 'KIR', 'AUD', 'KIRIBATI', 'Australian Dollar\r'),
('Kuwait', 'KW', 'KWT', '965', 'KUW', 'KWD', 'KUWAIT', 'Kuwaiti Dinar\r'),
('Kyrgyzstan', 'KG', 'KGZ', '996', 'KGZ', 'KGS', 'KYRGYZSTAN', 'Som\r'),
('Laos', 'LA', 'LAO', '856', 'LAO', 'LAK', 'LAO PEOPLEÃ¢â‚¬â„¢S DEMOCRATIC REPUBLIC', 'Kip\r'),
('Latvia', 'LV', 'LVA', '371', 'LAT', 'EUR', 'LATVIA', 'Euro\r'),
('Lebanon', 'LB', 'LBN', '961', 'LIB', 'LBP', 'LEBANON', 'Lebanese Pound\r'),
('Lesotho', 'LS', 'LSO', '266', 'LES', 'ZAR', 'LESOTHO', 'Rand\r'),
('Liberia', 'LR', 'LBR', '231', 'LBR', 'LRD', 'LIBERIA', 'Liberian Dollar\r'),
('Libya', 'LY', 'LBY', '218', 'LBA', 'LYD', 'LIBYA', 'Libyan Dinar\r'),
('Liechtenstein', 'LI', 'LIE', '423', 'LIE', 'CHF', 'LIECHTENSTEIN', 'Swiss Franc\r'),
('Lithuania', 'LT', 'LTU', '370', 'LTU', 'EUR', 'LITHUANIA', 'Euro\r'),
('Luxembourg', 'LU', 'LUX', '352', 'LUX', 'EUR', 'LUXEMBOURG', 'Euro\r'),
('Macau', 'MO', 'MAC', '853', 'MAC', 'MOP', 'MACAO', 'Pataca\r'),
('Macedonia', 'MK', 'MKD', '389', 'MKD', 'MKD', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Denar\r'),
('Madagascar', 'MG', 'MDG', '261', 'MAD', 'MGA', 'MADAGASCAR', 'Malagasy Ariary\r'),
('Malawi', 'MW', 'MWI', '265', 'MAW', 'MWK', 'MALAWI', 'Kwacha\r'),
('Malaysia', 'MY', 'MYS', '60', 'MAS', 'MYR', 'MALAYSIA', 'Malaysian Ringgit\r'),
('Maldives', 'MV', 'MDV', '960', 'MDV', 'MVR', 'MALDIVES', 'Rufiyaa\r'),
('Mali', 'ML', 'MLI', '223', 'MLI', 'XOF', 'MALI', 'CFA Franc BCEAO\r'),
('Malta', 'MT', 'MLT', '356', 'MLT', 'EUR', 'MALTA', 'Euro\r'),
('Marshall Islands', 'MH', 'MHL', '692', 'MSH', 'USD', 'MARSHALL ISLANDS', 'US Dollar\r'),
('Martinique', 'MQ', 'MTQ', '596', 'MRT', 'EUR', 'MARTINIQUE', 'Euro\r'),
('Mauritania', 'MR', 'MRT', '222', 'MTN', 'MRO', 'MAURITANIA', 'Ouguiya\r'),
('Mauritius', 'MU', 'MUS', '230', 'MRI', 'MUR', 'MAURITIUS', 'Mauritius Rupee\r'),
('Mayotte', 'YT', 'MYT', '262', 'MAY', 'EUR', 'MAYOTTE', 'Euro\r'),
('Mexico', 'MX', 'MEX', '52', 'MEX', 'MXN', 'MEXICO', 'Mexican Peso\r'),
('Micronesia', 'FM', 'FSM', '691', 'FSM', 'USD', 'MICRONESIA, FEDERATED STATES OF', 'US Dollar\r'),
('Moldova', 'MD', 'MDA', '373', 'MDA', 'MDL', 'MOLDOVA, REPUBLIC OF', 'Moldovan Leu\r'),
('Monaco', 'MC', 'MCO', '377', 'MON', 'EUR', 'MONACO', 'Euro\r'),
('Mongolia', 'MN', 'MNG', '976', 'MGL', 'MNT', 'MONGOLIA', 'Tugrik\r'),
('Montenegro', 'ME', 'MNE', '382', 'MGO', 'EUR', 'MONTENEGRO', 'Euro\r'),
('Montserrat', 'MS', 'MSR', '1-664', 'MNT', 'XCD', 'MONTSERRAT', 'East Caribbean Dollar\r'),
('Morocco', 'MA', 'MAR', '212', 'MAR', 'MAD', 'MOROCCO', 'Moroccan Dirham\r'),
('Mozambique', 'MZ', 'MOZ', '258', 'MOZ', 'MZN', 'MOZAMBIQUE', 'Mozambique Metical\r'),
('Myanmar', 'MM', 'MMR', '95', 'MYA', 'MMK', 'MYANMAR', 'Kyat\r'),
('Namibia', 'NA', 'NAM', '264', 'NAM', 'ZAR', 'NAMIBIA', 'Rand\r'),
('Nauru', 'NR', 'NRU', '674', 'NRU', 'AUD', 'NAURU', 'Australian Dollar\r'),
('Nepal', 'NP', 'NPL', '977', 'NEP', 'NPR', 'NEPAL', 'Nepalese Rupee\r'),
('Netherlands', 'NL', 'NLD', '31', 'NED', 'EUR', 'NETHERLANDS', 'Euro\r'),
('New Caledonia', 'NC', 'NCL', '687', 'NCD', 'XPF', 'NEW CALEDONIA', 'CFP Franc\r'),
('New Zealand', 'NZ', 'NZL', '64', 'NZL', 'NZD', 'NEW ZEALAND', 'New Zealand Dollar\r'),
('Nicaragua', 'NI', 'NIC', '505', 'NCA', 'NIO', 'NICARAGUA', 'Cordoba Oro\r'),
('Niger', 'NE', 'NER', '227', 'NIG', 'XOF', 'NIGER', 'CFA Franc BCEAO\r'),
('Nigeria', 'NG', 'NGA', '234', 'NGR', 'NGN', 'NIGERIA', 'Naira\r'),
('Niue', 'NU', 'NIU', '683', 'NIU', 'NZD', 'NIUE', 'New Zealand Dollar\r'),
('Norfolk Island', 'NF', 'NFK', '672', 'NFI', 'AUD', 'NORFOLK ISLAND', 'Australian Dollar\r'),
('North Korea', 'KP', 'PRK', '850', 'PRK', 'KPW', 'KOREA, DEMOCRATIC PEOPLEÃ¢â‚¬â„¢S REPUBLIC OF', 'North Korean Won\r'),
('Northern Mariana Islands', 'MP', 'MNP', '1-670', 'NMA', 'USD', 'NORTHERN MARIANA ISLANDS', 'US Dollar\r'),
('Norway', 'NO', 'NOR', '47', 'NOR', 'NOK', 'NORWAY', 'Norwegian Krone\r'),
('Oman', 'OM', 'OMN', '968', 'OMA', 'OMR', 'OMAN', 'Rial Omani\r'),
('Pakistan', 'PK', 'PAK', '92', 'PAK', 'PKR', 'PAKISTAN', 'Pakistan Rupee\r'),
('Palau', 'PW', 'PLW', '680', 'PLW', 'USD', 'PALAU', 'US Dollar\r'),
('Palestine', 'PS', 'PSE', '970', 'PLE', '', 'PALESTINE, STATE OF', 'No universal currency\r'),
('Panama', 'PA', 'PAN', '507', 'PAN', 'USD', 'PANAMA', 'US Dollar\r'),
('Papua New Guinea', 'PG', 'PNG', '675', 'PNG', 'PGK', 'PAPUA NEW GUINEA', 'Kina\r'),
('Paraguay', 'PY', 'PRY', '595', 'PAR', 'PYG', 'PARAGUAY', 'Guarani\r'),
('Peru', 'PE', 'PER', '51', 'PER', 'PEN', 'PERU', 'Nuevo Sol\r'),
('Philippines', 'PH', 'PHL', '63', 'PHI', 'PHP', 'PHILIPPINES', 'Philippine Peso\r'),
('Pitcairn Islands', 'PN', 'PCN', '870', '', 'NZD', 'PITCAIRN', 'New Zealand Dollar\r'),
('Poland', 'PL', 'POL', '48', 'POL', 'PLN', 'POLAND', 'Zloty\r'),
('Portugal', 'PT', 'PRT', '351', 'POR', 'EUR', 'PORTUGAL', 'Euro\r'),
('Puerto Rico', 'PR', 'PRI', '1', 'PUR', 'USD', 'PUERTO RICO', 'US Dollar\r'),
('Qatar', 'QA', 'QAT', '974', 'QAT', 'QAR', 'QATAR', 'Qatari Rial\r'),
('Romania', 'RO', 'ROU', '40', 'ROU', 'RON', 'ROMANIA', 'New Romanian Leu\r'),
('Russia', 'RU', 'RUS', '7', 'RUS', 'RUB', 'RUSSIAN FEDERATION', 'Russian Ruble\r'),
('Rwanda', 'RW', 'RWA', '250', 'RWA', 'RWF', 'RWANDA', 'Rwanda Franc\r'),
('RÃ©union', 'RE', 'REU', '262', 'REU', 'EUR', 'RÃ‰UNION', 'Euro\r'),
('Samoa', 'WS', 'WSM', '685', 'SAM', 'WST', 'SAMOA', 'Tala\r'),
('San Marino', 'SM', 'SMR', '378', 'SMR', 'EUR', 'SAN MARINO', 'Euro\r'),
('Saudi Arabia', 'SA', 'SAU', '966', 'KSA', 'SAR', 'SAUDI ARABIA', 'Saudi Riyal\r'),
('Senegal', 'SN', 'SEN', '221', 'SEN', 'XOF', 'SENEGAL', 'CFA Franc BCEAO\r'),
('Serbia', 'RS', 'SRB', '381 p', 'SRB', 'RSD', 'SERBIA', 'Serbian Dinar\r'),
('Seychelles', 'SC', 'SYC', '248', 'SEY', 'SCR', 'SEYCHELLES', 'Seychelles Rupee\r'),
('Sierra Leone', 'SL', 'SLE', '232', 'SLE', 'SLL', 'SIERRA LEONE', 'Leone\r'),
('Singapore', 'SG', 'SGP', '65', 'SIN', 'SGD', 'SINGAPORE', 'Singapore Dollar\r'),
('Sint Maarten', 'SX', 'SXM', '1-721', '', 'ANG', 'SINT MAARTEN (DUTCH PART)', 'Netherlands Antillean Guilder\r'),
('Slovakia', 'SK', 'SVK', '421', 'SVK', 'EUR', 'SLOVAKIA', 'Euro\r'),
('Slovenia', 'SI', 'SVN', '386', 'SLO', 'EUR', 'SLOVENIA', 'Euro\r'),
('Solomon Islands', 'SB', 'SLB', '677', 'SOL', 'SBD', 'SOLOMON ISLANDS', 'Solomon Islands Dollar\r'),
('Somalia', 'SO', 'SOM', '252', 'SOM', 'SOS', 'SOMALIA', 'Somali Shilling\r'),
('South Africa', 'ZA', 'ZAF', '27', 'RSA', 'ZAR', 'SOUTH AFRICA', 'Rand\r'),
('South Georgia & South Sandwich Islands', 'GS', 'SGS', '500', '', '', '', '\r'),
('South Korea', 'KR', 'KOR', '82', 'KOR', 'KRW', 'KOREA, REPUBLIC OF', 'Won\r'),
('South Sudan', 'SS', 'SSD', '211', '', 'SSP', 'SOUTH SUDAN', 'South Sudanese Pound\r'),
('Spain', 'ES', 'ESP', '34', 'ESP', 'EUR', 'SPAIN', 'Euro\r'),
('Sri Lanka', 'LK', 'LKA', '94', 'SRI', 'LKR', 'SRI LANKA', 'Sri Lanka Rupee\r'),
('Saint BarthÃ©lemy', 'BL', 'BLM', '590', '', 'EUR', 'SAINT BARTHÃƒâ€°LEMY', 'Euro\r'),
('St. Helena', 'SH', 'SHN', '290 n', 'HEL', 'SHP', 'SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA', 'Saint Helena Pound\r'),
('St. Kitts & Nevis', 'KN', 'KNA', '1-869', 'SKN', 'XCD', 'SAINT KITTS AND NEVIS', 'East Caribbean Dollar\r'),
('St. Lucia', 'LC', 'LCA', '1-758', 'LCA', 'XCD', 'SAINT LUCIA', 'East Caribbean Dollar\r'),
('St. Martin', 'MF', 'MAF', '590', '', 'EUR', 'SAINT MARTIN (FRENCH PART)', 'Euro\r'),
('St. Pierre & Miquelon', 'PM', 'SPM', '508', 'SPM', 'EUR', 'SAINT PIERRE AND MIQUELON', 'Euro\r'),
('St. Vincent & Grenadines', 'VC', 'VCT', '1-784', 'VIN', 'XCD', 'SAINT VINCENT AND THE GRENADINES', 'East Caribbean Dollar\r'),
('Sudan', 'SD', 'SDN', '249', 'SUD', 'SDG', 'SUDAN', 'Sudanese Pound\r'),
('Suriname', 'SR', 'SUR', '597', 'SUR', 'SRD', 'SURINAME', 'Surinam Dollar\r'),
('Svalbard & Jan Mayen', 'SJ', 'SJM', '47', '', 'NOK', 'SVALBARD AND JAN MAYEN', 'Norwegian Krone\r'),
('Swaziland', 'SZ', 'SWZ', '268', 'SWZ', 'SZL', 'SWAZILAND', 'Lilangeni\r'),
('Sweden', 'SE', 'SWE', '46', 'SWE', 'SEK', 'SWEDEN', 'Swedish Krona\r'),
('Switzerland', 'CH', 'CHE', '41', 'SUI', 'CHF', 'SWITZERLAND', 'Swiss Franc\r'),
('Syria', 'SY', 'SYR', '963', 'SYR', 'SYP', 'SYRIAN ARAB REPUBLIC', 'Syrian Pound\r'),
('Sao Tome and Principe', 'ST', 'STP', '239', 'STP', 'STD', 'SAO TOME AND PRINCIPE', 'Dobra\r'),
('Taiwan', 'TW', 'TWN', '886', 'TPE', '', '', '\r'),
('Tajikistan', 'TJ', 'TJK', '992', 'TJK', 'TJS', 'TAJIKISTAN', 'Somoni\r'),
('Tanzania', 'TZ', 'TZA', '255', 'TAN', 'TZS', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzanian Shilling\r'),
('Thailand', 'TH', 'THA', '66', 'THA', 'THB', 'THAILAND', 'Baht\r'),
('Timor-Leste', 'TL', 'TLS', '670', 'TLS', 'USD', 'TIMOR-LESTE', 'US Dollar\r'),
('Togo', 'TG', 'TGO', '228', 'TOG', 'XOF', 'TOGO', 'CFA Franc BCEAO\r'),
('Tokelau', 'TK', 'TKL', '690', '', 'NZD', 'TOKELAU', 'New Zealand Dollar\r'),
('Tonga', 'TO', 'TON', '676', 'TGA', 'TOP', 'TONGA', 'PaÃ¢â‚¬â„¢anga\r'),
('Trinidad & Tobago', 'TT', 'TTO', '1-868', 'TTO', 'TTD', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago Dollar\r'),
('Tunisia', 'TN', 'TUN', '216', 'TUN', 'TND', 'TUNISIA', 'Tunisian Dinar\r'),
('Turkey', 'TR', 'TUR', '90', 'TUR', 'TRY', 'TURKEY', 'Turkish Lira\r'),
('Turkmenistan', 'TM', 'TKM', '993', 'TKM', 'TMT', 'TURKMENISTAN', 'Turkmenistan New Manat\r'),
('Turks & Caicos Islands', 'TC', 'TCA', '1-649', 'TKS', 'USD', 'TURKS AND CAICOS ISLANDS', 'US Dollar\r'),
('Tuvalu', 'TV', 'TUV', '688', 'TUV', 'AUD', 'TUVALU', 'Australian Dollar\r'),
('U.S. Outlying Islands', 'UM', 'UMI', '', '', '', '', '\r'),
('U.S. Virgin Islands', 'VI', 'VIR', '1-340', 'ISV', 'USD', 'VIRGIN ISLANDS (U.S.)', 'US Dollar\r'),
('UK', 'GB', 'GBR', '44', 'GBR', 'GBP', 'UNITED KINGDOM', 'Pound Sterling\r'),
('US', 'US', 'USA', '1', 'USA', 'USD', 'UNITED STATES', 'US Dollar\r'),
('Uganda', 'UG', 'UGA', '256', 'UGA', 'UGX', 'UGANDA', 'Uganda Shilling\r'),
('Ukraine', 'UA', 'UKR', '380', 'UKR', 'UAH', 'UKRAINE', 'Hryvnia\r'),
('United Arab Emirates', 'AE', 'ARE', '971', 'UAE', 'AED', 'UNITED ARAB EMIRATES', 'UAE Dirham\r'),
('Uruguay', 'UY', 'URY', '598', 'URU', 'UYU', 'URUGUAY', 'Peso Uruguayo\r'),
('Uzbekistan', 'UZ', 'UZB', '998', 'UZB', 'UZS', 'UZBEKISTAN', 'Uzbekistan Sum\r'),
('Vanuatu', 'VU', 'VUT', '678', 'VAN', 'VUV', 'VANUATU', 'Vatu\r'),
('Vatican City', 'VA', 'VAT', '39-06', '', 'EUR', 'HOLY SEE (VATICAN CITY STATE)', 'Euro\r'),
('Venezuela', 'VE', 'VEN', '58', 'VEN', 'VEF', 'VENEZUELA, BOLIVARIAN REPUBLIC OF', 'Bolivar\r'),
('Vietnam', 'VN', 'VNM', '84', 'VIE', 'VND', 'VIET NAM', 'Dong\r'),
('Wallis & Futuna', 'WF', 'WLF', '681', 'WAF', 'XPF', 'WALLIS AND FUTUNA', 'CFP Franc\r'),
('Western Sahara', 'EH', 'ESH', '212', '', 'MAD', 'WESTERN SAHARA', 'Moroccan Dirham\r'),
('Yemen', 'YE', 'YEM', '967', 'YEM', 'YER', 'YEMEN', 'Yemeni Rial\r'),
('Zambia', 'ZM', 'ZMB', '260', 'ZAM', 'ZMW', 'ZAMBIA', 'Zambian Kwacha\r'),
('Zimbabwe', 'ZW', 'ZWE', '263', 'ZIM', 'ZWL', 'ZIMBABWE', 'Zimbabwe Dollar\r'),
('Ãƒland Islands', 'AX', 'ALA', '358', '', 'EUR', 'ÃƒLAND ISLANDS', 'Euro\r');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `paymentStatus` varchar(25) NOT NULL,
  `description` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `ammount` double NOT NULL,
  `PayDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentID`, `userID`, `paymentStatus`, `description`, `date`, `ammount`, `PayDate`) VALUES
(1, 2, 'cancelled', 'withdraw', '2021-10-07', 12, '0000-00-00'),
(3, 2, 'paid', 'withdraw', '2021-10-14', 54, '2021-10-10'),
(101, 2, 'cancelled', 'withdraw', '2021-10-10', 500, '0000-00-00'),
(106, 2, 'cancelled', 'withdraw', '2021-10-10', 300, '0000-00-00'),
(108, 2, 'paid', 'withdraw', '2021-10-10', 100, '2021-10-10'),
(109, 2, 'paid', 'withdraw', '2021-10-13', 100, '2021-10-13'),
(110, 2, 'pending', 'withdraw', '2021-10-15', 1000, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `postadds`
--

CREATE TABLE `postadds` (
  `postID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `postHeading` text NOT NULL,
  `postDescription` text NOT NULL,
  `postPackage` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `postStatus` varchar(50) NOT NULL,
  `postPrice` double NOT NULL,
  `postViews` int(11) NOT NULL,
  `paymentStatus` varchar(50) NOT NULL,
  `paymentDate` date NOT NULL,
  `exDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postadds`
--

INSERT INTO `postadds` (`postID`, `userID`, `postHeading`, `postDescription`, `postPackage`, `Date`, `postStatus`, `postPrice`, `postViews`, `paymentStatus`, `paymentDate`, `exDate`) VALUES
(29, 1, 'Sublimation Paper Epson Plotter Vinyl Heat Superior Printing T Shirt', 'Heat Press T Shirt  Print Right Is Only Sublimation Company To Do That We Have 3 Language Technical Support Which Is The Most Important Thing And We Are One Of The Reputed Company In Sri Lanka Which Archived The No.1 Position In The Google Search type PRINT RIGHT', 'A', '2021-10-06', 'Active', 1000, 21, 'paid', '2021-10-06', '2021-11-05'),
(30, 1, 'asd', 'asd', 'A', '2021-10-06', 'Active', 1000, 11, 'paid', '2021-10-06', '2021-11-05'),
(33, 1, 'asdasdasdasdasd', 'asdasdasdasdasdasd', 'A', '2021-10-13', 'Active', 1000, 1, 'paid', '2021-10-13', '2021-11-12'),
(34, 1, 'shashimai', 'shashimai', 'A', '2021-10-13', 'Active', 1000, 1, 'paid', '2021-10-13', '2021-11-12'),
(35, 1, 'Apple iPhone X Black 256GB USA (Used)', 'TRSL APPROVED BRAND NEW AND USED MOBILES \nIPHONE  IPHONE  X 64-GB 256GB USA |IPHONE White | Black \nâ˜…  FULL  HARDWARE AND SOFTWARE WARRENTY AVAILABLE \nâ˜… 7 DAYS REPLACEMENT WARRENTY \nâ˜† We have Island wild Delivery Service free \nVisa, master, Amex Card payment on cash on Delivery ', 'A', '2021-10-15', 'Active', 1000, 1, 'paid', '2021-10-15', '2021-11-14'),
(37, 1, 'Eset Internet Security 2 License', 'Condition:\nNew\nItem type:\nSoftware', 'A', '2021-10-15', 'pending', 1000, 0, 'No-paid', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `postimg`
--

CREATE TABLE `postimg` (
  `imgID` int(11) NOT NULL,
  `postID` int(11) NOT NULL,
  `imgURL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postimg`
--

INSERT INTO `postimg` (`imgID`, `postID`, `imgURL`) VALUES
(29, 29, 'assets/img/post/29531.png'),
(30, 30, 'assets/img/post/30796.png'),
(32, 32, 'assets/img/post/32453.png'),
(33, 33, 'assets/img/post/33336.png'),
(34, 34, 'assets/img/post/34616.png'),
(35, 35, 'assets/img/post/35954.png'),
(36, 36, 'assets/img/post/36423.png'),
(37, 37, 'assets/img/post/37728.png');

-- --------------------------------------------------------

--
-- Table structure for table `postview`
--

CREATE TABLE `postview` (
  `postID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postview`
--

INSERT INTO `postview` (`postID`, `userID`, `Date`) VALUES
(30, 2, '2021-10-06'),
(29, 2, '2021-10-06'),
(33, 2, '2021-10-13'),
(34, 2, '2021-10-13'),
(35, 2, '2021-10-15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userN` varchar(255) NOT NULL,
  `passcode` varchar(255) NOT NULL,
  `acType` varchar(10) NOT NULL,
  `contactNo` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_no` int(11) NOT NULL,
  `viewsAdd` int(11) NOT NULL,
  `postAdd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `userEmail`, `userN`, `passcode`, `acType`, `contactNo`, `address`, `city`, `country`, `postal_code`, `bank_name`, `account_no`, `viewsAdd`, `postAdd`) VALUES
(0, 'Admin', 'Admin', 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '', '', '', 0, '', 0, 0, 0),
(1, 'lahiru', 'prageeth', 'lahiru154@gmail.com', 'lahiru', '202cb962ac59075b964b07152d234b70', 'PA', '0717501464', 'pahalayaya,pallama', 'chilaw', 'Sri Lanka', 64610, 'BOC', 8547614, 0, 0),
(2, 'Nawoda', 'prabath', 'dinidu.prabath1458@gmail.com', 'dinidu', '202cb962ac59075b964b07152d234b70', 'SA', '0325683713', 'pallama', 'chilawp0pp', 'Sri Lanka', 64610, 'BOC', 584236578, 0, 0),
(3, 'Ravindu', 'Pramodya', 'ravindupp@gmail.com', 'ravi@123', 'e10adc3949ba59abbe56e057f20f883e', 'SA', '0718523694', '', '', '', 0, '', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adpaymentslips`
--
ALTER TABLE `adpaymentslips`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `postadds`
--
ALTER TABLE `postadds`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `postimg`
--
ALTER TABLE `postimg`
  ADD PRIMARY KEY (`imgID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adpaymentslips`
--
ALTER TABLE `adpaymentslips`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `postadds`
--
ALTER TABLE `postadds`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `postimg`
--
ALTER TABLE `postimg`
  MODIFY `imgID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
