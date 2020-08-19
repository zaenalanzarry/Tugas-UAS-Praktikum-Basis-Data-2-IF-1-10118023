-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: 10118023_akademik
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','zaenal');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_dosen`
--

DROP TABLE IF EXISTS `data_dosen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_dosen` (
  `nip` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `jk_dosen` char(1) DEFAULT NULL,
  `agama_dosen` varchar(15) DEFAULT NULL,
  `tempat_lahir_dosen` varchar(20) DEFAULT NULL,
  `tanggal_lahir_dosen` date DEFAULT NULL,
  `alamat_dosen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_dosen`
--

LOCK TABLES `data_dosen` WRITE;
/*!40000 ALTER TABLE `data_dosen` DISABLE KEYS */;
INSERT INTO `data_dosen` VALUES ('0010118001','zaenal','Dadang S.Kom., M.Kom.','L','Islam','Bandung','1986-05-13','Jalan Dipatiukur No.120 Kota Bandung'),('0010118002','zaenal','Abdul Somad S.Kom., M.Kom','L','Islam','Bandung','1977-12-02','Jalan Gatot Subroto No.50 Kota Bandung'),('0010118003','zaenal','Ahmad Jaelani S.Pd., S.Kom.','L','Islam','Sumedang','1970-08-24','Jalan Cimareme No. 154 Desa Cimareme Kecamatan Padalarang'),('0010118004','zaenal','Neni Nuraeni S.Kom., M.T.','P','Kristen','Bandung','1980-04-07','Jalan Cimindi No.54 Kota Cimahi'),('0010118005','zaenal','Ahmad S.Kom., M.Kom.',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `data_dosen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_mahasiswa`
--

DROP TABLE IF EXISTS `data_mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_mahasiswa` (
  `nim` char(8) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_mhs` varchar(25) NOT NULL,
  `jk_mhs` char(1) DEFAULT NULL,
  `agama_mhs` varchar(15) DEFAULT NULL,
  `tempat_lahir_mhs` varchar(20) DEFAULT NULL,
  `tanggal_lahir_mhs` date DEFAULT NULL,
  `alamat_mhs` varchar(255) DEFAULT NULL,
  `jenjang` char(2) NOT NULL,
  `semester` char(5) NOT NULL,
  `id_jurusan` char(3) NOT NULL,
  PRIMARY KEY (`nim`),
  KEY `id_jurusan` (`id_jurusan`),
  CONSTRAINT `data_mahasiswa_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_mahasiswa`
--

LOCK TABLES `data_mahasiswa` WRITE;
/*!40000 ALTER TABLE `data_mahasiswa` DISABLE KEYS */;
INSERT INTO `data_mahasiswa` VALUES ('10118001','zaenal','Alfian Soasiu','L','Islam','Ambon','1999-08-02','Jalan Ambon No.69 Kota Ambon','S1','IV','J02'),('10118002','zaenal','Juned','L','Islam','Bandung','1998-06-05','Jalan Gado Bangkong No.77 Desa Gabo Bangkong','S1','V','J06'),('10118005','zaenal','Richo Rantung','L','Kristen','Palu','2000-08-17','Jalan Rengas No.67 Kota Palu','S1','IV','J01'),('10118020','zaenal','Fiqri Akbar','L','Islam','Bandung','2000-08-24','Jalan Rancaekek No.44 Desa Rancaekek','S1','IV','J02'),('10118023','zaenal','Zaenal Anzarry','L','Islam','Bandung','1999-12-02','Jalan Cimerang RT 02 RW 05 No.33 Desa Cimerang','S1','IV','J01');
/*!40000 ALTER TABLE `data_mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fakultas`
--

DROP TABLE IF EXISTS `fakultas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fakultas` (
  `id_fakultas` char(3) NOT NULL,
  `nama_fakultas` varchar(30) NOT NULL,
  `alamat_fakultas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_fakultas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fakultas`
--

LOCK TABLES `fakultas` WRITE;
/*!40000 ALTER TABLE `fakultas` DISABLE KEYS */;
INSERT INTO `fakultas` VALUES ('F01','Teknik dan Ilmu Komputer','Jalan Dipatiukur No.112-115 Desa Coblog Kota Bandung'),('F02','Sastra','Jalan Dipatiukur No.112-115 Desa Coblog Kota Bandung'),('F03','Ilmu Sosial dan Politik','Jalan Dipatiukur No.112-115 Desa Coblog Kota Bandung'),('F04','Fakultas Ekonomi',NULL);
/*!40000 ALTER TABLE `fakultas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jurusan`
--

DROP TABLE IF EXISTS `jurusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jurusan` (
  `id_jurusan` char(3) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL,
  `alamat_jurusan` varchar(255) DEFAULT NULL,
  `id_fakultas` char(3) NOT NULL,
  PRIMARY KEY (`id_jurusan`),
  KEY `id_fakultas` (`id_fakultas`),
  CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jurusan`
--

LOCK TABLES `jurusan` WRITE;
/*!40000 ALTER TABLE `jurusan` DISABLE KEYS */;
INSERT INTO `jurusan` VALUES ('J01','Teknik Informatika','Jalan Dipatiukur No.112 Desa Coblog Kota Bandung','F01'),('J02','Sastra Jepang','Jalan Dipatiukur No.113 Desa Coblog Kota Bandung','F02'),('J03','Teknik Elektro','Jalan Dipatiukur No.112 Desa Coblog Kota Bandung','F01'),('J04','Sastra Inggris','Jalan Dipatiukur No.114 Desa Coblog Kota Bandung','F02'),('J05','Ilmu Pemerintahan','Jalan Dipatiukur No.115 Desa Coblog Kota Bandung','F03'),('J06','Hubungan Internasional','Jalan Dipatiukur No.115 Desa Coblog Kota Bandung','F03'),('J07','Teknik Komputer',NULL,'F01');
/*!40000 ALTER TABLE `jurusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `krs`
--

DROP TABLE IF EXISTS `krs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL AUTO_INCREMENT,
  `nim` char(8) NOT NULL,
  `id_mk` char(8) NOT NULL,
  `semester` char(5) NOT NULL,
  `nilai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_krs`),
  KEY `nim` (`nim`),
  KEY `id_mk` (`id_mk`),
  CONSTRAINT `krs_ibfk_4` FOREIGN KEY (`nim`) REFERENCES `data_mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `krs_ibfk_5` FOREIGN KEY (`id_mk`) REFERENCES `mata_kuliah` (`id_mk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `krs`
--

LOCK TABLES `krs` WRITE;
/*!40000 ALTER TABLE `krs` DISABLE KEYS */;
INSERT INTO `krs` VALUES (7,'10118023','MK01','IV',90),(9,'10118020','MK01','IV',100),(10,'10118023','MK02','IV',100),(11,'10118023','MK03','IV',NULL),(12,'10118023','MK04','IV',NULL),(13,'10118020','MK04','IV',NULL),(14,'10118005','MK01','IV',NULL),(15,'10118005','MK03','IV',NULL),(16,'10118001','MK03','IV',NULL),(17,'10118001','MK02','IV',80),(18,'10118002','MK03','V',NULL);
/*!40000 ALTER TABLE `krs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mata_kuliah`
--

DROP TABLE IF EXISTS `mata_kuliah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mata_kuliah` (
  `id_mk` char(8) NOT NULL,
  `nama_mk` varchar(30) NOT NULL,
  `jumlah_sks` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  PRIMARY KEY (`id_mk`),
  KEY `nip` (`nip`),
  CONSTRAINT `mata_kuliah_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `data_dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mata_kuliah`
--

LOCK TABLES `mata_kuliah` WRITE;
/*!40000 ALTER TABLE `mata_kuliah` DISABLE KEYS */;
INSERT INTO `mata_kuliah` VALUES ('MK01','Algoritma dan Pemrograman',4,'0010118002'),('MK02','Basis Data 2',3,'0010118001'),('MK03','Matematika Numerik',3,'0010118004'),('MK04','Sistem Operasi',2,'0010118003'),('MK05','Logika Matematika',3,'0010118004');
/*!40000 ALTER TABLE `mata_kuliah` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-19  9:06:48
