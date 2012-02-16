/*
Navicat MySQL Data Transfer

Source Server         : AsfoDB
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : blizzard

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-02-16 15:34:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `bs_news`
-- ----------------------------
DROP TABLE IF EXISTS `bs_news`;
CREATE TABLE `bs_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(128) CHARACTER SET utf8 NOT NULL,
  `month` varchar(128) NOT NULL,
  `year` varchar(128) NOT NULL,
  `title` varchar(128) CHARACTER SET utf8 NOT NULL,
  `author` varchar(128) NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`,`day`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bs_news
-- ----------------------------
INSERT INTO `bs_news` VALUES ('1', '21', '11', '2011', 'Diablo III gratis con el Pase Anual de WoW', 'Asfo', '<p>El Pase Anual de World of Warcraft ha sido ampliado para incluir más países y ahora está disponible en Rusia, Suiza, Brasil, México, Argentina, Chile y más.</p>\r\n\r\n<p>Con la sombra de Alamuerte sobre Azeroth y los reinos mortales de Santuario preparándose para la guerra contra los ejércitos de Diablo, el Pase Anual de World of Warcraft ha llegado para ofrecer a los suscriptores de WoW la oportunidad de participar en ambos conflictos apocalípticos... sin causar estragos a la billetera.</p>\r\n\r\n<p>Por tiempo limitado, los jugadores que se comprometan a 12 meses de suscripción a World of Warcraft mediante el Pase Anual, recibirán las siguientes recompensas épicas:</p>\r\n\r\n<p>Diablo III gratis: descarga la versión digital del juego gratis a través de Battle.net cuando lancemos el juego. Se trata del juego completo, no de una versión de prueba.\r\nEl Destrero de Tyrael (Montura voladora para WoW): vuela como el Arcángel de la Justicia con todos los personajes presentes y futuros que haya en tu cuenta de World of Warcraft. Recibirás el Destrero de Tyrael por correo en el juego con el próximo parche 4.3.\r\nAcceso garantizado al beta: obtén un lugar garantizado a la prueba beta de la próxima expansión de World of Warcraft (la fecha será anunciada más adelante).\r\nPuedes registrarte para el Pase Anual pagando cuotas mensuales de $45.00 ARS/$7,875 CLP/$155.00 MXP/$14.99 USD (o según el plan de suscripción que prefieras). Para aprovechar esta promoción debes ser mayor de 18 años, tener una tarjeta de crédito válida y haber registrado una versión completa de World of Warcraft antes del, o el,18 de octubre de 2011.</p>\r\n\r\n<p>Haz clic aquí si deseas registrarte para el Pase Anual de World of Warcraft. No olvides consultar los sitios de la comunidad de World of Warcraft y Diablo III para estar al tanto de las fechas de lanzamiento de estas recompensas épicas.</p>\r\n\r\nPara más información acerca de esta promoción, incluyendo requisitos de elegibilidad y detalles concretos para los jugadores que quieran adquirir la Edición para Coleccionistas de Diablo III, consulta las preguntas frecuentes del Pase Anual de World of Warcraft.', 'http://us.media1.battle.net/cms/blog_thumbnail/7GLU3GVF1ZGM1319216366055.jpg');
INSERT INTO `bs_news` VALUES ('2', '17', '11', '2011', 'Hasta 50% de descuento en StarCraft II', 'Asfo', '<p>En estas épocas del año surge el espíritu de compartir y Blizzard te tiene cubierto. Ahora, por tiempo limitado, la actualización y la versión ilimitada de StarCraft II: Wings of Liberty está disponible con un descuento de hasta el 50% del precio de venta sugerido.</p>\r\n\r\n<p>No te demores, esta promoción épica termina el 28 de noviembre.</p>', 'http://us.media4.battle.net/cms/blog_thumbnail/QM1ETPOSU7CF1321996122363.jpg');
INSERT INTO `bs_news` VALUES ('3', '25', '01', '2012', 'Campeonato Mundial de Battle.net 2012', 'Asfo', '<p>Blizzard Entertainment se enorgullece en anunciar el Campeonato Mundial de Battle.net 2012, un importante evento global de eSports que ostenta algunos de los mejores competidores profesionales en el mundo.Programado para celebrarse en Asia a finales de 2012, el Campeonato Mundial de Battle.net será la sede de los torneos de campeonato globales de StarCraft II y de las Arenas de World of Warcraft. Los jugadores de Blizzard y los fans de eSports de todo el mundo quedan invitados a presenciar los encuentros de algunos de los más talentosos jugadores profesionales del planeta, quienes lucharán para obtener dinero y gloria.</p>\r\n\r\n<p>Nos emociona transmitir los eSports de Blizzard a escala global este año. Asimismo, estamos trabajando muy duro para que Diablo III, Mists of Pandaria y Heart of the Swarm lleguen a manos de los jugadores tan pronto como sea posible. A causa de nuestra apretada agenda, decidimos que celebraremos nuestra siguiente BlizzCon en 2013.</p>\r\n\r\n<p>En los meses que vienen publicaremos más información acerca del Campeonato Mundial de Battle.net 2012 y la BlizzCon 2013.</p>', 'http://us.media1.battle.net/cms/blog_thumbnail/5REYLSZP9MJT1327507020394.jpg');
INSERT INTO `bs_news` VALUES ('4', '6', '02', '2012', 'Nueva característica: Saldo Battle.net', 'Asfo', '<p>¡Ya llegó el Saldo Battle.net! Como anunciamos previamente el Saldo Battle.net es una nueva característica que proporciona a los jugadores un modo alterno de adquirir productos y servicios digitales de Blizzard desde sus cuentas de Battle.net. Los jugadores podrán agregar fondos a su Saldo Battle.net a través de diversas formas de pago y luego emplearlo para adquirir productos y servicios de Blizzard Entertainment como: tiempo de juego de World of Warcraft, transferencias de reino y cambios de nombre, así como versiones digitales de títulos selectos de Blizzard (Diablo II y StarCraft II, por ejemplo). En el futuro, los jugadores también podrán hacer uso del Saldo Battle.net para comprar el Battle Chest de World of Warcraft y las actualizaciones digitales de WoW por medio de la Tienda Blizzard, incluyendo tiempo de juego, mascotas y monturas de World of Warcraft. Asimismo, con el próximo lanzamiento de Diablo III, los jugadores tendrán la posibilidad de usar su Saldo Battle.net para comprar y vender objetos en la casa de subastas.</p>\r\n\r\n<p>Para más información, consulta las PF del Saldo Battle.net, o visita la página del Saldo Battle.net en la sección de Gestión de Cuenta para administrar tu saldo.</p>', 'http://us.media2.battle.net/cms/blog_thumbnail/257619BPANMW1328574444716.jpg');
