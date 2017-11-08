-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Nov-2017 às 16:39
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbphp7`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_usuarios_insert` (`pdeslogin` VARCHAR(64), `pdessenha` VARCHAR(256))  BEGIN
	INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(pdeslogin, pdessenha);
    SELECT * FROM tb_usuarios WHERE idusuario = LAST_INSERT_ID();
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `idusuario` int(11) NOT NULL,
  `deslogin` varchar(64) NOT NULL,
  `dessenha` varchar(256) NOT NULL,
  `dtcadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`idusuario`, `deslogin`, `dessenha`, `dtcadastro`) VALUES
(1, 'root', '!@#$%', '2017-11-06 15:38:58'),
(2, 'Jose', '1234567890', '2017-11-06 20:15:41'),
(3, 'Jose', '1234567890', '2017-11-06 20:15:43'),
(4, 'Aluno', 'lin0', '2017-11-08 15:15:27'),
(5, 'Aluno', 'lin0', '2017-11-08 15:15:34'),
(6, 'Aluno', 'lin0', '2017-11-08 15:15:35'),
(7, 'Aluno', 'lin0', '2017-11-08 15:15:45'),
(8, 'Aluno', 'lin0', '2017-11-08 15:15:46'),
(9, 'Aluno', 'lin0', '2017-11-08 15:15:47'),
(10, 'Aluno', 'lin0', '2017-11-08 15:15:47'),
(11, 'Aluno', 'lin0', '2017-11-08 15:15:48'),
(12, 'Aluno', 'lin0', '2017-11-08 15:15:48'),
(13, 'Aluno', 'lin0', '2017-11-08 15:15:49'),
(14, 'ERLICH', 'lin0', '2017-11-08 15:16:20'),
(15, 'ERLICH', 'lin0', '2017-11-08 15:16:22'),
(16, 'Jhone', '0101', '2017-11-08 15:16:37'),
(17, 'Jhone', '0101', '2017-11-08 15:17:58'),
(18, 'Jhone', '0101', '2017-11-08 15:19:04'),
(19, 'Jhone', '0101', '2017-11-08 15:19:06'),
(20, 'Jhone', '0101', '2017-11-08 15:19:07'),
(21, 'Jhone', '0101', '2017-11-08 15:19:07'),
(22, 'Jhone', '0101', '2017-11-08 15:19:09'),
(23, 'Jhone', '0101', '2017-11-08 15:19:10'),
(24, 'Jhone', '0101', '2017-11-08 15:19:10'),
(25, 'Jhone', '0101', '2017-11-08 15:19:12'),
(26, 'Aluno', '@lun0', '2017-11-08 15:24:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
