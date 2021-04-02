-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.14-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para blog
CREATE DATABASE IF NOT EXISTS `blog` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `blog`;

-- Volcando estructura para tabla blog.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `extract` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `text` text NOT NULL,
  `thumb` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla blog.articles: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `title`, `extract`, `date`, `text`, `thumb`) VALUES
	(1, 'Epic Games continúa la batalla judicial contra Apple por Fortnite, ahora en Australia', 'La compañía liderada por Tim Sweeney busca protección en la ley australiana del consumidor.', '2020-11-16 00:33:20', 'La guerra judicial abierta entre Epic Games y Apple tras la eliminación de Fortnite de la tienda de aplicación de iPhone está lejos de llegar a un punto de calma. A la espera del juicio previsto para mayo del próximo año en California, Estados Unidos, los padres del battle-royale han presentado en Australia una denuncia contra los de Cupertino argumentando que su política viola la ley del consumidor vigente en el país.\r\n\r\nDe acuerdo a Tim Sweeney en palabras recogidas por The Sydney Morning Herald, Epic Games ha optado por ampliar sus litigios contra Apple precisamente en Australia por el sólido sistema jurídico y marco regulatorio que ahí impera. "Son otras leyes, las cuales Apple está violando de forma clara", explica el director ejecutivo de la compañía estadounidense, "dudo que haya un solo desarrollador en Australia que consiga más beneficios con juegos que el que obtienen Apple y Google con ellos". "En esencia, Apple está usando su control del hardware para forzar a todos a pasar por ellos, en contra de la voluntad de los desarrolladores y los consumidores. Esto que está sucediendo en la industria es realmente preocupante, necesita cambiar ya", resume el programador.\r\n\r\nApple, por su parte, ya ha asegurado que defenderá la estructura de comisiones de la App Store, una que precisamente hoy ha anunciado cambios. La firma tecnológica de Cupertino recuerda que Epic Games buscó deliveradamente violar las directrices de la App Store que se aplican por igual a todos los desarrolladores, haciendo partícipes de este "comportamiento imprudente" a los usuarios. "Epic ha sido uno de los desarrolladores más exitosos en la App Store, hasta el punto de convertirse en un negocio multimillonario que llega a millones de clientes de iOS en todo el mundo, incluyendo Australia", añaden.\r\n\r\n', 'fortnite.jpg'),
	(2, 'Noticias de ultimo minuto', 'Quisque auctor libero vel dignissim egestas. Sed eget fermentum lorem. Fusce et quam a nibh eleifend tristique quis porta est. Sed pharetra metus id varius semper.', '2020-11-16 00:34:22', 'Mauris bibendum tincidunt libero et porttitor. Curabitur ex ipsum, ornare eget lacinia ac, pulvinar a ipsum. Aenean tincidunt enim nec velit lacinia, eu bibendum urna iaculis. Suspendisse leo risus, lacinia ac congue et, tincidunt eu eros. Mauris semper condimentum ex, eget tincidunt mi tempor fermentum. Sed a enim congue, pulvinar enim fermentum, molestie ipsum. Aliquam erat volutpat. Donec arcu neque, fringilla vitae ultricies suscipit, maximus tristique lorem. Suspendisse nec tellus erat. Morbi ullamcorper gravida urna, vel condimentum augue porttitor vel. Duis blandit eget orci sed iaculis. Pellentesque aliquam dui ut lorem malesuada tristique.', '2.png'),
	(3, 'Sony vs Microsoft', 'Duis quis neque lacus. In cursus pretium diam ut iaculis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean non hendrerit ante', '2020-11-16 00:35:49', 'Sed vel tincidunt ipsum. Nulla et ipsum odio. In hac habitasse platea dictumst. Praesent eu sapien in dolor finibus cursus eu non sapien. Donec ullamcorper vulputate risus nec laoreet. Vivamus laoreet, nisl ultricies semper commodo, orci nulla convallis mi, vitae aliquam purus orci sed lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam sit amet tempus justo. Morbi egestas non nisl quis imperdiet.', '3.png'),
	(4, 'Nuevo Producto de Xiomi', 'Fusce eu feugiat magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis placerat fermentum. Integer sed lacus molestie, pulvinar mauris sed, tempor felis.', '2020-11-16 00:37:22', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi scelerisque aliquet risus sed congue. Maecenas eget neque pharetra, varius felis eget, lobortis tortor. Vestibulum elementum libero a mauris consequat, eget mattis massa posuere. Suspendisse potenti. Nam sodales maximus neque, ac vehicula arcu cursus ac. Duis quis enim ornare lectus tempor porttitor. Proin auctor arcu massa, a ultricies nisi sollicitudin at. Duis et lacus tincidunt, lobortis mi eget, mollis ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet mi urna, vitae pulvinar elit luctus nec. Curabitur elit purus, eleifend non interdum id, interdum in enim. Sed augue purus, vehicula ac dolor id, interdum lacinia dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '4.png'),
	(5, 'Jonh Wick 3', 'La saga de jonh wick', '2020-11-17 21:33:37', 'Hola que tal!!\r\n\r\n\r\nhola\r\n\r\nholaaa', 'counter_strike_global_offensive_11-wallpaper-1920x1080.jpg'),
	(7, 'Madden NFL 21 muestra gameplay de nueva generación por primera vez', 'Esta versión del juego incluirá sendos rediseños de movilidad, repeticiones y sistema para elegir jugadas.', '2020-11-18 20:29:10', 'De cara a lo que será el estreno de Madden NFL 21 en las nuevas consolas, el próximo 4 de diciembre, EA Sports liberó su primer avance con gameplay de PS5 y Xbox Series X/S, de donde se desprenden 3 innovaciones fundamentales:\r\n\r\n\r\nNuevo sistema de movilidad impulsado por la plataforma de estadísticas Next-Gen Stats\r\nNuevo sistema de repeticiones con datos Next-Gen Stats\r\nNueva interfaz para elegir jugadas, enfocada en jugadores estrella\r\n\r\nLas hombreras de los jugadores portan dispositivos que llevan registro absoluto de sus movimientos sobre el emparrillado y Madden 21 para nueva generación replicará el rendimiento de los modelos con base en estos datos. "Esta información ahora guía todas las animaciones de Madden, entregando tasas de aceleración únicas, cambios de dirección y movimiento para todos los jugadores sobre el campo." Se trata de generar un gameplay simulado y terso, basado en datos reales de los jugadores de la NFL.\r\n\r\n\r\nPor lo concerniente a las repeticiones de nueva generación, esta es una mejora visual que también se basa en los datos de la plataforma Next-Gen Stats de la NFL y se traduce en reiteraciones que ofrecen hasta 15 datos diferentes para, en teoría, tomar decisiones con base en las estadísticas mostradas durante las repeticiones.\r\n\r\n\r\nLa nueva interfaz para elegir jugadas promete ser más intuitiva y accesibleY la nueva interfaz para elegir jugadas promete ser más intuitiva y accesible. A las categorías ya existentes, como jugadas por formación, por concepto, por tipo, etcétera, ahora se suman las pestañas de jugadas favoritas y por jugador, la cual ofrecerá alternativas enfocadas solamente en figuras clave de cada equipo\r\n\r\n\r\nQuedó pendiente un desglose más detallado de las mejoras gráficas, las mejoras de presentación televisiva, las mejoras vía DualSense e incluso las mejoras de animación, pues si bien es verdad que ahora los jugadores se moverán con base en una serie de parámetros nuevos y más realistas, ha habido mucho debate sobre la necesidad de reemplazar el sistema por captura de movimiento vigente, por uno basado en simulaciones físicas en tiempo real.\r\n\r\n\r\nTanto Madden 21 como FIFA 21 verán el arribo de sus versiones para nueva generación el próximo 4 de diciembre. Ambos juegos se beneficiarán del programa Dual Entitlement, el cual permitirá canjear las versiones actuales de dichos juegos por las de nueva generación sin costo adicional.', 'cyberpunk.jpg');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
