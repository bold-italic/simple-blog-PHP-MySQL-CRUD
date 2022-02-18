SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `timestamp`) VALUES
(1, 'My first blog.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2022-01-23 17:46:04'),
(2, 'test #2', 'Donec ornare justo eu vulputate tincidunt. Praesent at mi fermentum, posuere augue non, luctus est. Aliquam ante risus, imperdiet et dapibus sit amet, placerat id turpis. Nunc vel lorem maximus, pellentesque mi vel, dictum enim. Pellentesque malesuada ante ut arcu pellentesque sagittis. Maecenas metus tortor, pulvinar facilisis lorem eget, convallis tincidunt mi. Etiam in leo cursus, finibus ligula at, feugiat sapien. Pellentesque hendrerit, odio eget tristique condimentum, metus arcu interdum nibh, id lacinia leo sem et lectus. Nulla cursus odio nec augue venenatis, quis semper diam euismod. Nullam vestibulum, dolor at elementum tincidunt, ex magna facilisis ligula, eget facilisis metus augue non erat. Morbi efficitur finibus scelerisque. Praesent volutpat tempor cursus. Duis hendrerit posuere ultricies.\r\n\r\nNunc pretium sodales dui, quis lobortis risus finibus in. Mauris a felis risus. Aliquam euismod arcu bibendum, aliquam ex euismod, congue ex. Vivamus ornare dolor sit amet orci faucibus, at pulvinar risus aliquam. Cras eget finibus turpis. Donec posuere eu elit id egestas. Maecenas facilisis iaculis ex. Vestibulum dolor arcu, venenatis eget iaculis in, facilisis sed orci. Sed iaculis fermentum ante, at pulvinar purus feugiat in.\r\n\r\nEtiam luctus tellus ex. Quisque quis nunc nec purus consequat ultrices. Curabitur quis lorem leo. Fusce purus ipsum, tempus a consequat luctus, suscipit eu libero. Praesent fermentum faucibus lacus non cursus. Maecenas id sem finibus, consequat risus vitae, ultrices diam. Phasellus vestibulum est aliquet, efficitur eros vel, faucibus dolor. Integer vulputate in nisi sit amet euismod. Vivamus vel vulputate nisi. Vestibulum fringilla sem sed lectus luctus euismod. Vestibulum eget felis non velit auctor viverra et ac ipsum. Nam cursus eros non porttitor commodo.', '2022-01-23 17:48:17'),
(3, '#3', 'Maecenas facilisis iaculis ex. Vestibulum dolor arcu, venenatis eget iaculis in, facilisis sed orci. Sed iaculis fermentum ante, at pulvinar purus feugiat in.', '2022-01-23 17:51:50'),
(4, '#4', 'Test.', '2022-01-23 17:52:05'),
(6, '#5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis sodales erat, in iaculis sem venenatis quis. Duis tincidunt rhoncus lorem sit amet lobortis. Fusce scelerisque nunc quis urna feugiat, bibendum facilisis erat commodo. Suspendisse in risus vulputate, scelerisque enim in, dapibus massa. Cras diam est, porttitor ut convallis non, tempus quis sem. Maecenas tempor posuere metus elementum commodo. Quisque non volutpat leo, et cursus nunc. Donec vehicula et erat eget finibus. Maecenas volutpat erat elit, et cursus erat consectetur nec. Vestibulum quis eros sed eros sagittis pellentesque. Sed venenatis, nunc vel dignissim ultrices, erat lacus volutpat nibh, in efficitur tellus mauris et risus. Suspendisse condimentum arcu libero. Nam at sem felis. Etiam aliquet urna a nisi condimentum ultricies. Suspendisse hendrerit gravida enim vel vulputate. Sed et purus sit amet felis gravida eleifend eget ac massa.\r\n\r\nDonec pretium massa lacinia nulla consequat, eu pellentesque turpis posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut ultrices vitae libero nec sagittis. Mauris sagittis ante commodo, aliquet libero sed, rutrum mauris. Suspendisse ut lorem et turpis vehicula consequat quis quis velit. Nam dolor ipsum, condimentum nec turpis id, egestas sodales nunc. Sed et neque ut lacus cursus maximus ut vel turpis. Aliquam condimentum dictum erat vitae ullamcorper. Nunc a dignissim est. Proin tristique dolor nec sem consequat, sed finibus est mattis. Nam tempus, neque eu pretium dapibus, lorem nibh consectetur nunc, vitae eleifend ipsum nisl nec sem. Aliquam convallis quis mauris eu convallis. Etiam porta ultricies ipsum ac lobortis. Duis venenatis vitae purus vitae posuere.\r\n\r\nDonec ornare justo eu vulputate tincidunt. Praesent at mi fermentum, posuere augue non, luctus est. Aliquam ante risus, imperdiet et dapibus sit amet, placerat id turpis. Nunc vel lorem maximus, pellentesque mi vel, dictum enim. Pellentesque malesuada ante ut arcu pellentesque sagittis. Maecenas metus tortor, pulvinar facilisis lorem eget, convallis tincidunt mi. Etiam in leo cursus, finibus ligula at, feugiat sapien. Pellentesque hendrerit, odio eget tristique condimentum, metus arcu interdum nibh, id lacinia leo sem et lectus. Nulla cursus odio nec augue venenatis, quis semper diam euismod. Nullam vestibulum, dolor at elementum tincidunt, ex magna facilisis ligula, eget facilisis metus augue non erat. Morbi efficitur finibus scelerisque. Praesent volutpat tempor cursus. Duis hendrerit posuere ultricies.\r\n\r\nNunc pretium sodales dui, quis lobortis risus finibus in. Mauris a felis risus. Aliquam euismod arcu bibendum, aliquam ex euismod, congue ex. Vivamus ornare dolor sit amet orci faucibus, at pulvinar risus aliquam. Cras eget finibus turpis. Donec posuere eu elit id egestas. Maecenas facilisis iaculis ex. Vestibulum dolor arcu, venenatis eget iaculis in, facilisis sed orci. Sed iaculis fermentum ante, at pulvinar purus feugiat in.\r\n\r\nEtiam luctus tellus ex. Quisque quis nunc nec purus consequat ultrices. Curabitur quis lorem leo. Fusce purus ipsum, tempus a consequat luctus, suscipit eu libero. Praesent fermentum faucibus lacus non cursus. Maecenas id sem finibus, consequat risus vitae, ultrices diam. Phasellus vestibulum est aliquet, efficitur eros vel, faucibus dolor. Integer vulputate in nisi sit amet euismod. Vivamus vel vulputate nisi. Vestibulum fringilla sem sed lectus luctus euismod. Vestibulum eget felis non velit auctor viverra et ac ipsum. Nam cursus eros non porttitor commodo.', '2022-01-23 17:55:38'),
(7, '#6 200 characters', 'Nunc pretium sodales dui, quis lobortis risus finibus in. Mauris a felis risus. Aliquam euismod arcu bibendum, aliquam ex euismod, congue ex. Vivamus ornare dolor sit amet orci faucibus, at pulvinare.', '2022-01-23 17:57:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
