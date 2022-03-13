-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 02:35 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filebase`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions_taken`
--

CREATE TABLE `actions_taken` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(200) DEFAULT NULL,
  `mar_ins_paid` varchar(50) DEFAULT NULL,
  `orig_bl_rec` varchar(50) DEFAULT NULL,
  `orig_bl_rec_date` date DEFAULT NULL,
  `mar_ins_paid_date` date DEFAULT NULL,
  `naf_receipt_rec` varchar(50) DEFAULT NULL,
  `naf_receipt_rec_date` date DEFAULT NULL,
  `copy_docs_rec` varchar(50) DEFAULT NULL,
  `copy_docs_rec_date` date DEFAULT NULL,
  `paar_rec` varchar(50) DEFAULT NULL,
  `paar_rec_date` date DEFAULT NULL,
  `escort_letter` varchar(50) DEFAULT NULL,
  `escort_letter_date` date DEFAULT NULL,
  `copy_health_doc_rec` varchar(50) DEFAULT NULL,
  `copy_health_doc_rec_date` date DEFAULT NULL,
  `fish_lic_rec` varchar(50) DEFAULT NULL,
  `fish_lic_rec_date` date DEFAULT NULL,
  `tdo_rec` varchar(50) DEFAULT NULL,
  `tdo_rec_date` date DEFAULT NULL,
  `soncap_rec` varchar(50) DEFAULT NULL,
  `soncap_rec_date` date DEFAULT NULL,
  `docs_sent_nav` varchar(50) DEFAULT NULL,
  `docs_sent_nav_date` date DEFAULT NULL,
  `cont_card_rec` varchar(50) DEFAULT NULL,
  `cont_card_rec_date` date DEFAULT NULL,
  `fum_cert_rec` varchar(50) DEFAULT NULL,
  `fum_cert_rec_date` date DEFAULT NULL,
  `docs_sent_agent` varchar(50) DEFAULT NULL,
  `docs_sent_agent_date` date DEFAULT NULL,
  `ref_rec` varchar(50) DEFAULT NULL,
  `ref_rec_date` date DEFAULT NULL,
  `date_added` date DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  `modified_by` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actions_taken`
--

INSERT INTO `actions_taken` (`id`, `customer_id`, `mar_ins_paid`, `orig_bl_rec`, `orig_bl_rec_date`, `mar_ins_paid_date`, `naf_receipt_rec`, `naf_receipt_rec_date`, `copy_docs_rec`, `copy_docs_rec_date`, `paar_rec`, `paar_rec_date`, `escort_letter`, `escort_letter_date`, `copy_health_doc_rec`, `copy_health_doc_rec_date`, `fish_lic_rec`, `fish_lic_rec_date`, `tdo_rec`, `tdo_rec_date`, `soncap_rec`, `soncap_rec_date`, `docs_sent_nav`, `docs_sent_nav_date`, `cont_card_rec`, `cont_card_rec_date`, `fum_cert_rec`, `fum_cert_rec_date`, `docs_sent_agent`, `docs_sent_agent_date`, `ref_rec`, `ref_rec_date`, `date_added`, `date_modified`, `modified_by`) VALUES
(1, '1', 'yes', 'yes', '2019-04-17', '2019-03-13', NULL, NULL, NULL, '2019-03-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2019-04-03', NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-15', '2019-04-15', ''),
(2, '2', 'yes', 'yes', '2019-04-17', '2019-03-13', NULL, NULL, NULL, '2019-03-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2019-04-03', NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-15', '2019-04-15', ''),
(3, '3', NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2019-04-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-17', '2019-04-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_type` varchar(100) DEFAULT NULL,
  `file_no` varchar(200) DEFAULT NULL,
  `company_id` varchar(200) DEFAULT NULL,
  `supplier` varchar(200) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `bank` varchar(200) NOT NULL,
  `pfi_no` varchar(200) DEFAULT NULL,
  `item` varchar(200) DEFAULT NULL,
  `quantity` varchar(100) DEFAULT NULL,
  `form_m_number` varchar(200) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `currency` varchar(50) DEFAULT NULL,
  `bill_no` varchar(200) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `vessel_name_origin` varchar(200) DEFAULT NULL,
  `vessel_name_discharge` varchar(200) DEFAULT NULL,
  `etd` date DEFAULT NULL,
  `eta` date DEFAULT NULL,
  `shipment_value` varchar(200) DEFAULT NULL,
  `currency_ship_value` varchar(50) DEFAULT NULL,
  `shipment_value_quantity` varchar(200) DEFAULT NULL,
  `bill_of_ladding_no` varchar(200) DEFAULT NULL,
  `shipping_company` varchar(100) DEFAULT NULL,
  `ship_com_charge_app_date` date DEFAULT NULL,
  `cus_exa_date` date DEFAULT NULL,
  `ship_com_rel_date` date DEFAULT NULL,
  `cus_rel_date` date DEFAULT NULL,
  `ship_charge_paid_date` date DEFAULT NULL,
  `tdo_issuance_date` date DEFAULT NULL,
  `del_order_date` date DEFAULT NULL,
  `emp_cont_ret_date` date DEFAULT NULL,
  `term_charges_app_date` date DEFAULT NULL,
  `date_cont_card_rec` date DEFAULT NULL,
  `cust_book_date` date DEFAULT NULL,
  `clearing_agent` varchar(200) DEFAULT NULL,
  `allocation` varchar(200) DEFAULT NULL,
  `rotation_no` varchar(200) DEFAULT NULL,
  `entry_no` varchar(200) DEFAULT NULL,
  `date_cleared` date DEFAULT NULL,
  `date_of_duty_paid` date DEFAULT NULL,
  `date_ecd_invoice_subm` date DEFAULT NULL,
  `date_ecd_received` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `date_added` date NOT NULL,
  `date_modified` date NOT NULL,
  `modified_by` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_type`, `file_no`, `company_id`, `supplier`, `company`, `bank`, `pfi_no`, `item`, `quantity`, `form_m_number`, `amount`, `currency`, `bill_no`, `due_date`, `vessel_name_origin`, `vessel_name_discharge`, `etd`, `eta`, `shipment_value`, `currency_ship_value`, `shipment_value_quantity`, `bill_of_ladding_no`, `shipping_company`, `ship_com_charge_app_date`, `cus_exa_date`, `ship_com_rel_date`, `cus_rel_date`, `ship_charge_paid_date`, `tdo_issuance_date`, `del_order_date`, `emp_cont_ret_date`, `term_charges_app_date`, `date_cont_card_rec`, `cust_book_date`, `clearing_agent`, `allocation`, `rotation_no`, `entry_no`, `date_cleared`, `date_of_duty_paid`, `date_ecd_invoice_subm`, `date_ecd_received`, `status`, `date_added`, `date_modified`, `modified_by`) VALUES
(1, 'Returning', '1631', '', 'EXONMOBIL', 'PIL', 'Skye Bank', 'MESPL/009/2018', 'PLC BASED ROLL FORMING LINE AND C & Z PROFILE', '2X40FT', 'BA04420190000777', '84319', 'USD', 'MESPL/009/2018-19', '2019-04-30', 'MERETE SK', 'MERETE SK', '2019-01-30', '2019-03-28', '84319', 'GBP', '2X40FT', '9688071071', 'MAERSK LINE', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'PNL', 'APMT', '483', 'C-18295', '0000-00-00', '2019-03-26', '2019-04-12', '2019-04-10', 'open', '2019-04-15', '2019-04-15', ''),
(2, 'Returning', 'JBC1801331', '', 'Markish Exim and Services PVT ltd', 'PIL', 'Access Bank', 'MESPL/009/2018', 'PLC BASED ROLL FORMING LINE AND C & Z PROFILE', '2X40FT', 'BA04420190000555', '84319', 'USD', 'MESPL/009/2018-19', '2019-03-13', 'HAMMONIA AMERICA V1903', 'HAMMONIA AMERICA V1903', '2019-03-01', '2019-05-08', '94312', 'NGN', '2X40FT', '9688071071', 'MAERSK LINE', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'PNL', 'APMT', '483', 'C-18295', '0000-00-00', '2019-03-26', '2019-04-12', '2019-04-10', 'open', '2019-04-15', '2019-04-15', ''),
(3, 'Returning', 'JBC1801223', '', 'PULKIT ALLOY AND STEEL LTD', 'JKT', 'Stanbic Ibtc', 'MESPN/007/2018', 'LEAD ROD', '2X40FT', 'BA04420190000999', '72000', 'USD', '', NULL, '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '2019-04-15', NULL, 'open', '2019-04-17', '2019-04-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(200) DEFAULT NULL,
  `doc_name` varchar(300) DEFAULT NULL,
  `path` varchar(300) DEFAULT NULL,
  `date_added` date DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  `modified_by` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `customer_id`, `doc_name`, `path`, `date_added`, `date_modified`, `modified_by`) VALUES
(2, '1', 'PFI', 'uploads/pfiles/15553423692018-11-19-0001.pdf', '2019-04-15', '2019-04-15', ''),
(3, '1', 'Marine Insurance', 'uploads/pfiles/1555342380about-icon-1.png', '2019-04-15', '2019-04-15', ''),
(4, '1', 'Bill of Lading', 'uploads/pfiles/1555342401banner_4.jpg', '2019-04-15', '2019-04-15', ''),
(5, '2', 'Nafdac Import Permit', 'uploads/pfiles/1555344419lewis.jpg', '2019-04-15', '2019-04-15', ''),
(7, '1', 'Manufacture and Free Sale certificate', 'uploads/pfiles/15554835022018-11-19-0002.pdf', '2019-04-17', '2019-04-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(300) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `uname` varchar(200) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `profile_image` varchar(300) DEFAULT 'assets/assets/images/users/user.png',
  `date_added` date DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  `modified_by` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `designation`, `dept`, `role`, `uname`, `password`, `status`, `profile_image`, `date_added`, `date_modified`, `modified_by`) VALUES
(4, 'mueez dauda', '', 'Staff', 'Import', 'User', 'muziyindo', '$2y$10$9RRvtkjySL3YggEU.hM4U.PYYA0AGi2QTphVCIzyG4QK0D.KCsUNu', '1', 'uploads/pimages/1555509431daudajamal.jpg', '2019-04-14', '2019-04-14', ''),
(5, 'Lewis Dickson', 'lewis@primlaks.com', 'Staff', 'Import', 'User', 'lewis', '$2y$10$entWMUyTKK0tOvMj78hv6uVVQ7hGr0dvPjUc3Kz80MISK/hf9kTbm', '1', 'uploads/pimages/1555233282lewis.jpg', '2019-04-14', '2019-04-14', ''),
(6, 'Muix Ola', 'm.dauda@netcomafrica.com', 'Staff', 'Import', 'User', 'mueez', '$2y$10$.in5C9wfKrX9xof/4q5QxOCRUHqcExphsuhiWR.e6x1OIH.4Ukmqi', '1', 'assets/assets/images/users/user.png', '2019-04-15', '2019-04-15', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions_taken`
--
ALTER TABLE `actions_taken`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actions_taken`
--
ALTER TABLE `actions_taken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
