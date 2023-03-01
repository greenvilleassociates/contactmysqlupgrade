DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `fldName` varchar(50) NOT NULL,
  `fldEmail` varchar(150) NOT NULL,
  `fldPhone` varchar(15) NOT NULL,
  `fldCell` varchar(50) NOT NULL,
  `fldAddress1` varchar(150) NOT NULL,
  `fldAddress2` varchar(15) NOT NULL,
  `fldCity` varchar(50) NOT NULL,
  `fldState` varchar(150) NOT NULL,
  `fldCountry` varchar(15) NOT NULL,
  `fldZipPostal` varchar(50) NOT NULL,
`fldMessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;