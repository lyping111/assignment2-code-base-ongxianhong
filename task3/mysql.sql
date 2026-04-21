SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `task3` (
  `id` int(11) NOT NULL,
  `r_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `tracking_number` varchar(255) NOT NULL,
  `cbm` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `task3` (`id`, `r_date`, `tracking_number`, `cbm`, `weight`) VALUES
(1, '2026-04-23 00:01:01.000000', 'ghj', 'ghj', 'ghj');

ALTER TABLE `task3`
  ADD PRIMARY KEY (`id`)


ALTER TABLE `task3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
