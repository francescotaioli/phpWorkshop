SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
--
-- Database: `calciatori`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `calciatore`
--

CREATE TABLE `calciatore` (
  `id_calciatore` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cognome` varchar(255) DEFAULT NULL,
  `data_nascita` date DEFAULT NULL,
  `ruolo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `calciatore`
--

INSERT INTO `calciatore` (`id_calciatore`, `nome`, `cognome`, `data_nascita`, `ruolo`) VALUES
(1, 'Francesco', 'Totti', '1965-03-16', 9),
(2, 'Wojciech ', 'Szczsny', '1970-04-10', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `ruolo`
--

CREATE TABLE `ruolo` (
  `id_ruolo` int(11) NOT NULL,
  `descrizione` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `ruolo`
--

INSERT INTO `ruolo` (`id_ruolo`, `descrizione`) VALUES
(1, 'portiere'),
(2, 'difensore centrale'),
(3, 'terzino SX'),
(4, 'terzino DX'),
(5, 'centrocampista'),
(6, 'ala SX'),
(7, 'ala DX'),
(8, 'mediano'),
(9, 'attaccante');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `calciatore`
--
ALTER TABLE `calciatore`
  ADD PRIMARY KEY (`id_calciatore`),
  ADD KEY `ruolo` (`ruolo`);

--
-- Indici per le tabelle `ruolo`
--
ALTER TABLE `ruolo`
  ADD PRIMARY KEY (`id_ruolo`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `calciatore`
--
ALTER TABLE `calciatore`
  MODIFY `id_calciatore` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `calciatore`
--
ALTER TABLE `calciatore`
  ADD CONSTRAINT `ruolo` FOREIGN KEY (`ruolo`) REFERENCES `ruolo` (`id_ruolo`);
