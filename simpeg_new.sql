-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2011 at 12:39 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simpeg_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE IF NOT EXISTS `cuti` (
  `nip` varchar(45) NOT NULL,
  `jatah_cuti` int(11) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_anak`
--

CREATE TABLE IF NOT EXISTS `data_anak` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(45) NOT NULL,
  `nama_anak` varchar(150) DEFAULT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `status_anak` varchar(100) DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `pendidikan` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `data_anak_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `data_anak`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_dev_mandiri`
--

CREATE TABLE IF NOT EXISTS `data_dev_mandiri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(45) NOT NULL,
  `nama_kursus` varchar(150) DEFAULT NULL,
  `jenis_kursus` varchar(150) DEFAULT NULL,
  `penyelenggara` varchar(150) DEFAULT NULL,
  `alamat` tinytext,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `no_sertifikat` varchar(45) DEFAULT NULL,
  `predikat` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dev_man_fk` (`nip`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `data_dev_mandiri`
--

INSERT INTO `data_dev_mandiri` (`id`, `nip`, `nama_kursus`, `jenis_kursus`, `penyelenggara`, `alamat`, `tgl_mulai`, `tgl_selesai`, `no_sertifikat`, `predikat`) VALUES
(2, '13508012', '325323sadsad', 'hgj1w', 'hjasdq1', 'ghj', '2011-09-16', '2011-09-20', 'ghj', 'ghj');

-- --------------------------------------------------------

--
-- Table structure for table `data_diklat`
--

CREATE TABLE IF NOT EXISTS `data_diklat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(45) NOT NULL,
  `nama_pelatihan` varchar(150) DEFAULT NULL,
  `jenis_pelatihan` varchar(45) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `status_lulus` enum('LULUS','TIDAK LULUS') DEFAULT NULL,
  `predikat` varchar(45) DEFAULT NULL,
  `rangking` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `diklat_fk` (`nip`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `data_diklat`
--

INSERT INTO `data_diklat` (`id`, `nip`, `nama_pelatihan`, `jenis_pelatihan`, `tgl_mulai`, `tgl_selesai`, `status_lulus`, `predikat`, `rangking`) VALUES
(2, '13508012', '546745', 'jhk456', '2011-09-17', '2011-09-09', '', 'jhk', 0),
(3, '13508033', '', '', '0000-00-00', '0000-00-00', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_organisasi`
--

CREATE TABLE IF NOT EXISTS `data_organisasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(45) NOT NULL,
  `nama_org` varchar(150) DEFAULT NULL,
  `jenis` varchar(45) DEFAULT NULL,
  `alamat` tinytext,
  `thn_masuk` year(4) DEFAULT NULL,
  `thn_keluar` year(4) DEFAULT NULL,
  `honor` bigint(20) DEFAULT NULL,
  `jabatan` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `data_org_fk` (`nip`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `data_organisasi`
--

INSERT INTO `data_organisasi` (`id`, `nip`, `nama_org`, `jenis`, `alamat`, `thn_masuk`, `thn_keluar`, `honor`, `jabatan`) VALUES
(4, '13508012', '23sa3333777', 'sdfgfb', 'sdss', 0000, 0000, 123421, 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `data_pasangan`
--

CREATE TABLE IF NOT EXISTS `data_pasangan` (
  `nip` varchar(45) NOT NULL,
  `nama_pasangan` varchar(45) DEFAULT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `status_nikah` enum('MENIKAH','TIDAK MENIHAK','DUDA/JANDA') DEFAULT NULL,
  `jum_tanggungan` int(11) DEFAULT NULL,
  `alamat` tinytext,
  `nama_bapak` varchar(64) DEFAULT NULL,
  `nama_ibu` varchar(64) DEFAULT NULL,
  `pendidikan_terakhir` varchar(45) DEFAULT NULL,
  `tgl_nikah` date DEFAULT NULL,
  `tgl_cerai` date DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `data_pribadi_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pasangan`
--

INSERT INTO `data_pasangan` (`nip`, `nama_pasangan`, `tempat_lahir`, `tgl_lahir`, `agama`, `status_nikah`, `jum_tanggungan`, `alamat`, `nama_bapak`, `nama_ibu`, `pendidikan_terakhir`, `tgl_nikah`, `tgl_cerai`) VALUES
('13508012', '', '', '0000-00-00', '', '', 0, '', '', '', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE IF NOT EXISTS `data_pegawai` (
  `nip` varchar(45) NOT NULL,
  `nama` varchar(45) DEFAULT '-',
  `tgl_angkat_capeg` date DEFAULT NULL,
  `tgl_angkat_peg` date DEFAULT NULL,
  `tgl_menjabat` date DEFAULT NULL,
  `status` varchar(45) DEFAULT '-',
  `golongan` varchar(45) DEFAULT '-',
  `atasan` varchar(45) NOT NULL DEFAULT '-',
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`nip`, `nama`, `tgl_angkat_capeg`, `tgl_angkat_peg`, `tgl_menjabat`, `status`, `golongan`, `atasan`) VALUES
('13508012', 'Anselmus Krisma A.K.B.', '2011-09-08', '0000-00-00', '0000-00-00', 'Gaul', '3D', ''),
('13508033', 'hyouda', '2011-09-15', '2011-09-13', '2011-09-24', 'aktif', '1', ''),
('1454554', 'Bharata Kalbuaji', '1970-01-01', '1971-02-02', '1972-03-03', 'Aktif', '1A', ''),
('9999', 'Mr. MM', '1970-01-01', '1970-01-01', '1970-01-01', 'Aktif', '1A', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_pendidikan`
--

CREATE TABLE IF NOT EXISTS `data_pendidikan` (
  `nip` varchar(45) NOT NULL,
  `jenjang` varchar(45) DEFAULT '-',
  `nama_tempat` varchar(45) DEFAULT '-',
  `tahun_masuk` year(4) DEFAULT NULL,
  `tahun_lulus` year(4) DEFAULT NULL,
  `gelar` varchar(45) DEFAULT '-',
  `no_ijasah` varchar(45) DEFAULT '-',
  PRIMARY KEY (`nip`),
  KEY `data_pendidikan_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pendidikan`
--

INSERT INTO `data_pendidikan` (`nip`, `jenjang`, `nama_tempat`, `tahun_masuk`, `tahun_lulus`, `gelar`, `no_ijasah`) VALUES
('13508012', '', '', 0000, 0000, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengalaman`
--

CREATE TABLE IF NOT EXISTS `data_pengalaman` (
  `nip` varchar(45) NOT NULL,
  `pengalaman` varchar(150) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `pengalaman_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengalaman`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_pengalaman_kerja`
--

CREATE TABLE IF NOT EXISTS `data_pengalaman_kerja` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(45) NOT NULL,
  `tempat_kerja` varchar(45) DEFAULT '-',
  `alamat` tinytext,
  `tahun_masuk` year(4) DEFAULT NULL,
  `tahun_keluar` year(4) DEFAULT NULL,
  `gaji_terakhir` bigint(20) DEFAULT '0',
  `jabatan_terakhir` varchar(45) DEFAULT '-',
  PRIMARY KEY (`ID`),
  KEY `data_peng_kerja_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `data_pengalaman_kerja`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_penghargaan_eks`
--

CREATE TABLE IF NOT EXISTS `data_penghargaan_eks` (
  `nip` varchar(45) NOT NULL,
  `nama_penghargaan` varchar(150) DEFAULT NULL,
  `tgl_dapat` date DEFAULT NULL,
  `pemberi` varchar(150) DEFAULT NULL,
  `alamat` tinytext,
  PRIMARY KEY (`nip`),
  KEY `penghargaan_eks_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penghargaan_eks`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_penghargaan_in`
--

CREATE TABLE IF NOT EXISTS `data_penghargaan_in` (
  `nip` varchar(45) NOT NULL,
  `jenis_penghargaan` varchar(150) DEFAULT NULL,
  `no_sk` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `penghargaan_in_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penghargaan_in`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_pribadi`
--

CREATE TABLE IF NOT EXISTS `data_pribadi` (
  `nip` varchar(45) NOT NULL,
  `tempat_lahir` varchar(45) DEFAULT '-',
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(45) DEFAULT '-',
  `status_nikah` enum('MENIKAH','TIDAK MENIKAH','DUDA/JANDA') DEFAULT NULL,
  `jum_tanggungan` int(11) DEFAULT '0',
  `alamat` text,
  `nama_bapak` varchar(64) DEFAULT '-',
  `nama_ibu` varchar(64) DEFAULT '-',
  `jenis_kelamin` enum('PRIA','WANITA') DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `data_pribadi_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pribadi`
--

INSERT INTO `data_pribadi` (`nip`, `tempat_lahir`, `tgl_lahir`, `agama`, `status_nikah`, `jum_tanggungan`, `alamat`, `nama_bapak`, `nama_ibu`, `jenis_kelamin`) VALUES
('13508012', '', '2011-09-01', '', 'MENIKAH', 0, '', '', '', 'PRIA'),
('13508033', '', '0000-00-00', '', 'MENIKAH', 0, '', '', '', 'PRIA');

-- --------------------------------------------------------

--
-- Table structure for table `data_riwayat_kerja`
--

CREATE TABLE IF NOT EXISTS `data_riwayat_kerja` (
  `nip` varchar(45) NOT NULL,
  `no_sk` varchar(45) DEFAULT NULL,
  `jenis_sk` enum('PENGANGKATAN','ROTASI','MUTASI','DEMOSI','PROMOSI') DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `riwayat_kerja_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_riwayat_kerja`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_sanksi`
--

CREATE TABLE IF NOT EXISTS `data_sanksi` (
  `nip` varchar(45) NOT NULL,
  `jenis_sanksi` enum('SANKSI RINGAN','SANKSI SEDANG','SANKSI BERAT') DEFAULT NULL,
  `no_sk` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `sanksi_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_sanksi`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_sk_lain`
--

CREATE TABLE IF NOT EXISTS `data_sk_lain` (
  `nip` varchar(45) NOT NULL,
  `no_sk` varchar(45) DEFAULT NULL,
  `jenis_sk` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `sk_lain_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_sk_lain`
--


-- --------------------------------------------------------

--
-- Table structure for table `hari_libur`
--

CREATE TABLE IF NOT EXISTS `hari_libur` (
  `tanggal` date NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  PRIMARY KEY (`tanggal`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari_libur`
--


-- --------------------------------------------------------

--
-- Table structure for table `histori_absen`
--

CREATE TABLE IF NOT EXISTS `histori_absen` (
  `nip` varchar(45) NOT NULL,
  `waktu_masuk` datetime NOT NULL,
  `waktu_selesai` datetime NOT NULL,
  PRIMARY KEY (`nip`,`waktu_masuk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `histori_absen`
--


-- --------------------------------------------------------

--
-- Table structure for table `histori_cuti`
--

CREATE TABLE IF NOT EXISTS `histori_cuti` (
  `nip` varchar(45) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`nip`,`tanggal_mulai`,`tanggal_selesai`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `histori_cuti`
--


-- --------------------------------------------------------

--
-- Table structure for table `lembur`
--

CREATE TABLE IF NOT EXISTS `lembur` (
  `nip_penyuruh` varchar(45) NOT NULL,
  `nip_disuruh` varchar(45) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `jumlah_jam` int(11) NOT NULL,
  `tarif_lembur` int(11) NOT NULL,
  `tanggal_lembur` date NOT NULL,
  PRIMARY KEY (`nip_penyuruh`,`nip_disuruh`,`tanggal_lembur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lembur`
--


-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE IF NOT EXISTS `shift` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_selesai` time NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `shift`
--


-- --------------------------------------------------------

--
-- Table structure for table `shift_pegawai`
--

CREATE TABLE IF NOT EXISTS `shift_pegawai` (
  `nip` varchar(45) NOT NULL,
  `id_shift` int(11) NOT NULL,
  PRIMARY KEY (`nip`,`id_shift`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift_pegawai`
--


-- --------------------------------------------------------

--
-- Table structure for table `usulan_diklat`
--

CREATE TABLE IF NOT EXISTS `usulan_diklat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `biaya` int(11) NOT NULL,
  `rincian_jadwal` varchar(200) NOT NULL,
  `nip_pengusul` varchar(45) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `usulan_diklat`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_anak`
--
ALTER TABLE `data_anak`
  ADD CONSTRAINT `data_anak_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_dev_mandiri`
--
ALTER TABLE `data_dev_mandiri`
  ADD CONSTRAINT `dev_man_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_diklat`
--
ALTER TABLE `data_diklat`
  ADD CONSTRAINT `diklat_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_organisasi`
--
ALTER TABLE `data_organisasi`
  ADD CONSTRAINT `data_org_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_pasangan`
--
ALTER TABLE `data_pasangan`
  ADD CONSTRAINT `data_pasangani_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_pendidikan`
--
ALTER TABLE `data_pendidikan`
  ADD CONSTRAINT `data_pendidikan_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_pengalaman`
--
ALTER TABLE `data_pengalaman`
  ADD CONSTRAINT `pengalaman_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_pengalaman_kerja`
--
ALTER TABLE `data_pengalaman_kerja`
  ADD CONSTRAINT `data_peng_kerja_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_penghargaan_eks`
--
ALTER TABLE `data_penghargaan_eks`
  ADD CONSTRAINT `penghargaan_eks_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_penghargaan_in`
--
ALTER TABLE `data_penghargaan_in`
  ADD CONSTRAINT `penghargaan_in_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  ADD CONSTRAINT `data_pribadi_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_riwayat_kerja`
--
ALTER TABLE `data_riwayat_kerja`
  ADD CONSTRAINT `riwayat_kerja_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_sanksi`
--
ALTER TABLE `data_sanksi`
  ADD CONSTRAINT `sanksi_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_sk_lain`
--
ALTER TABLE `data_sk_lain`
  ADD CONSTRAINT `sk_lain_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
