-- ============================================================
-- siakad_ci4.sql
-- Database SIAKAD (CodeIgniter 4): struktur dan data awal
-- Tabel: mahasiswa, dosen, matakuliah
-- PERHATIAN: file ini menghapus lalu membuat ulang ketiga tabel,
-- jadi data lama di tabel tersebut akan hilang saat di-import.
-- ============================================================

CREATE DATABASE IF NOT EXISTS `siakad_ci4`
  DEFAULT CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

USE `siakad_ci4`;

SET NAMES utf8mb4;

-- ------------------------------------------------------------
-- Tabel mahasiswa
-- ------------------------------------------------------------
DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `id`    INT(11)      NOT NULL AUTO_INCREMENT,
  `nim`   VARCHAR(20)  NOT NULL,
  `nama`  VARCHAR(100) NOT NULL,
  `prodi` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `prodi`) VALUES
(1, '23001', 'Andi',       'Sistem Informasi'),
(2, '23002', 'Budi',       'Sistem Informasi'),
(3, '23003', 'Citra',      'Manajemen Informatika'),
(4, '23004', 'Dina',       'Sistem Informasi'),
(5, '23005', 'Ubaydillah', 'Sistem Informasi');

-- ------------------------------------------------------------
-- Tabel dosen
-- ------------------------------------------------------------
DROP TABLE IF EXISTS `dosen`;

CREATE TABLE `dosen` (
  `nidn`  VARCHAR(20)  NOT NULL,
  `nama`  VARCHAR(100) NOT NULL,
  `prodi` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`nidn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `dosen` (`nidn`, `nama`, `prodi`) VALUES
('012345', 'Imam Thoib, M.Kom.',                 'Sistem Informasi'),
('023344', 'Nafis Sururi, M.Kom.',               'Sistem Informasi'),
('035566', 'Fendy Bayu Firmansyah, M.M.',        'Sistem Informasi'),
('047788', 'Binti Kholifah, S.Kom., M.Tr.Kom.',  'Sistem Informasi'),
('059900', 'Beda Puspita Candra, M.Kom.',        'Sistem Informasi');

-- ------------------------------------------------------------
-- Tabel matakuliah
-- ------------------------------------------------------------
DROP TABLE IF EXISTS `matakuliah`;

CREATE TABLE `matakuliah` (
  `kode` VARCHAR(20)  NOT NULL,
  `nama` VARCHAR(100) NOT NULL,
  `sks`  TINYINT(4)   NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `matakuliah` (`kode`, `nama`, `sks`) VALUES
('SI101', 'Pemrograman Web 2',           3),
('SI102', 'Sistem Informasi',            3),
('SI103', 'Basis Data',                  3),
('SI104', 'Kecerdasan Buatan',           3),
('SI105', 'Data Warehouse',              3),
('SI106', 'Sistem Informasi Geografis',  3);