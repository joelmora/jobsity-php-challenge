-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2016 a las 04:46:07
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `joel_mora`
--
CREATE DATABASE IF NOT EXISTS `joel_mora` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `joel_mora`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entry`
--

CREATE TABLE `entry` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `entry`
--

INSERT INTO `entry` (`id`, `user_id`, `title`, `content`, `creation_date`) VALUES
(1, 1, 'titulo', 'contenido', '2016-05-07 17:56:13'),
(2, 3, 'algun tema interesante', 'Lorem ipsum dolor sit amet, no eius volumus adversarium mei, eos ad graeco persius instructior, te mea fugit nonumes abhorreant. Alii omittantur usu ex. No pro vitae quaerendum definitionem. Solum democritum nam eu. Quis euripidis honestatis ex eum.\r\n\r\nEos eu modo necessitatibus. Altera singulis at est. Mei an sonet equidem, ut justo dolor invidunt est. Has nisl adipiscing an, omnium praesent per ut, eu iudico tation eos. Errem molestie cu his, vis an vocibus eleifend repudiare, reque doming aeterno ei eum.\r\n\r\nVel case equidem no, elit habeo deleniti sea ad. Quo altera timeam percipitur an, quod consectetuer pri ut. Tota facer alterum at sed. Nam ea ornatus persequeris. Autem necessitatibus vix ei, mel no liber tibique abhorreant.\r\n\r\nEa quaeque molestiae ius, eirmod graecis cum id. Ut unum assueverit vim. Per te aeterno deleniti laboramus, ad vero intellegebat pri. Nam ex tale impetus, rebum dissentias eos et. At has clita argumentum. Mel an liber simul aperiri.\r\n\r\nIdque vulputate usu ut, at quis liber mnesarchum est. Vim odio prompta te. Gubergren democritum eu duo, ea wisi vidit qui. Ad insolens scripserit qui, essent appareat ad sea. In natum iusto ignota sed, diam meis usu an. Cu vel amet vidit, ne mea saepe dolore ancillae.', '2016-05-07 18:43:39'),
(3, 1, 'Article', 'um ut tempor mollis inermis. Cu est illum falli vulputate, ex idque omnesque noluisse mel, sonet volumus mnesarchum eu mea. Eu ferri affert postea est, ut facer senserit repudiandae mel, ei facilis cotidieque pro. Vim ne mnesarchum reformidans, erat bonorum quaerendum cu mea. No quaeque placerat adolescens eum.\r\n\r\nQuo unum hendrerit ex, nihil aliquid tincidunt id nec, sit aeque sapientem at. Ei invenire interesset has, mea ad illum zril euripidis. Et sea lorem munere iriure, dicunt interpretaris at ius, cu vix meis possit. Nominavi invidunt salutandi eu ius, ea mei mentitum argumentum. Quot dolores no duo.', '2016-05-07 20:45:20'),
(5, 1, 'Hidden article', 'Cu iriure perpetua electram ius, has an cibo option eloquentiam, eam novum ancillae ex. Eam ad homero laudem suscipiantur, pri principes concludaturque no, ius at clita intellegat constituam. Sit decore instructior in. No quo paulo tantas eripuit.\r\n\r\nTollit populo aliquid te qui, dolor homero postea ea has, eu nam vidisse contentiones. An democritum voluptatum percipitur sea, cum ea tation inimicus necessitatibus, est facilisis urbanitas te. Quo euismod impedit perpetua ex, congue tritani est in. Fuisset expetenda ius no, in copiosae sententiae sea. Mandamus definitionem an vis, probo vocent eum ut. An per volumus recusabo argumentum.\r\n\r\nEu bonorum percipitur eum, vis vitae consequat ex. Error complectitur duo in, ei vel corpora sententiae, in pro vero sadipscing. Ad eripuit iracundia efficiendi has, mea ei copiosae constituam. Inermis adversarium has eu. Assum integre deseruisse at sed, ex quo utinam nullam prodesset.', '2016-05-07 20:46:13'),
(6, 3, 'PHP Challenge', 'Ad choro officiis vis, pri delectus partiendo prodesset cu, vel congue tempor et. Epicuri qualisque ius no, nam at ceteros appellantur, mel detracto convenire interesset an. No cum oratio ancillae, error quando pertinax eu mel. Sit commune nominavi ea, mel ne sint gubergren conceptam. Cum quem fabulas at, vim te aeterno voluptatum.\r\n\r\nSea te partem omittam scaevola, qui cu esse purto iisque. Ex cum partiendo patrioque, id has munere disputationi. Cum an elit civibus incorrupte, maiorum tibique no eos, eos cu nullam maiestatis. Te mea essent minimum. His an ceteros patrioque reprimique, ne pri harum nostro euripidis, at dolorum menandri delicata vis.', '2016-05-07 21:01:37'),
(7, 1, 'entry title', 'Sit ne debitis accumsan, cum albucius similique in. Patrioque vituperata vis ei, qui idque cotidieque omittantur ut, vitae semper salutandi at mel. Mea quem augue eleifend an. Ne vim odio numquam, platonem deseruisse voluptatibus sea et, vel in doctus euripidis. Dicta minimum no mei. Vel delenit nominavi cu, has an fuisset ocurreret.\r\n\r\nVim odio postea semper no. Putent dissentias mel te, antiopam hendrerit qui ei, duo malis homero constituto ei. Ex qui natum mundi elaboraret, ne sint corpora conceptam mea, mel dicit libris mnesarchum ne. Mei et nullam offendit, nam unum officiis vulputate at, nibh nemore option eum an. Solum mazim in mei.', '2016-05-08 23:37:46'),
(8, 1, 'facilis graecis', 'Eu mel fugit facer graeci. Blandit invenire ne mel. Duo ad vocent splendide deseruisse, eos at stet omnium persequeris, pro ut semper appetere definitiones. Id cum brute option, ne timeam assentior est. Etiam invidunt mea no.\r\n\r\nPri causae omnesque te. Nemore officiis in has, mea quodsi facilisi corrumpit no, ex mei dolor dolores convenire. Nam ne diam scripta, meis nihil et vis. Eum partem adolescens cu, posse postea consetetur eum ne. Novum patrioque et his, ad vocent alterum molestie mei, at soleat theophrastus nec.\r\n\r\nEa cum wisi ubique feugiat, cu nulla alienum postulant duo, sea ex nonumy scripta intellegebat. Eos clita minimum laboramus cu, in pro movet deleniti voluptatum. Ea aliquam platonem deterruisset vel, magna ubique percipit sed te. His cu error quando. Debet facilis graecis has ad, ad mea audiam eripuit dissentiet. Facilis commune ei duo.', '2016-05-09 04:18:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hidden_tweet`
--

CREATE TABLE `hidden_tweet` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tweet_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `hidden_tweet`
--

INSERT INTO `hidden_tweet` (`id`, `user_id`, `tweet_id`) VALUES
(9, 3, '582448859621773312'),
(12, 1, '677847635521310720');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `twitter`, `username_canonical`, `email_canonical`, `enabled`, `salt`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'joelmora', '$2y$13$sodnkcg5ce80kswwwo80ceLXIB5aDhLrpTf.wULAkdFO9575giX6O', 'joelmora16@gmail.com', 'joelgmoram', 'joelmora', 'joelmora16@gmail.com', 1, 'sodnkcg5ce80kswwwo80co4ko4gow0g', '2016-05-09 04:16:43', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(3, 'albani', '$2y$13$sodnkcg5ce80kswwwo80ceLXIB5aDhLrpTf.wULAkdFO9575giX6O', 'albaniclaret@gmail.com', 'albizclaret', 'albani', 'albaniclaret@gmail.com', 1, 'sodnkcg5ce80kswwwo80co4ko4gow0g', '2016-05-09 03:14:09', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(4, 'andres', '$2y$13$sodnkcg5ce80kswwwo80ceLXIB5aDhLrpTf.wULAkdFO9575giX6O', 'andres@email.com', 'andresspyke234ss9', 'andres', 'andres@email.com', 1, 'sodnkcg5ce80kswwwo80co4ko4gow0g', '2016-05-09 02:36:32', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2B219D70A76ED395` (`user_id`);

--
-- Indices de la tabla `hidden_tweet`
--
ALTER TABLE `hidden_tweet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E28FDEE5A76ED395` (`user_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649166A7BB6` (`twitter`),
  ADD UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entry`
--
ALTER TABLE `entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `hidden_tweet`
--
ALTER TABLE `hidden_tweet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entry`
--
ALTER TABLE `entry`
  ADD CONSTRAINT `FK_2B219D70A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `hidden_tweet`
--
ALTER TABLE `hidden_tweet`
  ADD CONSTRAINT `FK_E28FDEE5A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
