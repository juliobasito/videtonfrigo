-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 07 Mai 2014 à 11:42
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `labo`
--
CREATE DATABASE IF NOT EXISTS `labo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `labo`;

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `resume` text NOT NULL,
  `id_realisateur` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mois` varchar(255) NOT NULL,
  `annee` int(11) NOT NULL,
  `csa` varchar(255) NOT NULL,
  `avis_national` varchar(255) NOT NULL,
  `note_internationale` varchar(40) NOT NULL,
  `note_utilisateur` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `film_ibfk_1` (`id_realisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=122 ;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`id`, `titre`, `resume`, `id_realisateur`, `image`, `mois`, `annee`, `csa`, `avis_national`, `note_internationale`, `note_utilisateur`, `video`) VALUES
(1, 'Carrie, la vengeance', 'Timide et surprotégée par sa mère très pieuse, Carrie est une lycéenne rejetée par ses camarades. Le soir du bal de fin d’année, elle subit une sale blague de trop. Carrie déchaîne alors de terrifiants pouvoirs surnaturels auxquels personne n’échappera…', 1, 'http://fr.web.img2.acsta.net/r_640_600/b_1_d6d6d6/pictures/210/611/21061159_2013112617270019.jpg', 'decembre', 2013, 'Interdit aux moins de 12 ans', 'Mauvais', '12,2', 0, ''),
(2, 'Frankenweenie', 'Après la mort soudaine de Sparky, son chien adoré, le jeune Victor fait appel au pouvoir de la science afin de ramener à la vie celui qui était aussi son meilleur ami. Il lui apporte au passage quelques modifications de son cru… Victor va tenter de cacher la créature qu’il a fabriquée mais lorsque Sparky s’échappe, ses copains de classe, ses professeurs et la ville tout entière vont apprendre que vouloir mettre la vie en laisse peut avoir quelques monstrueuses conséquences…', 2, 'http://fr.web.img6.acsta.net/r_640_600/b_1_d6d6d6/medias/nmedia/18/85/69/55/20127907.jpg', 'octobre', 2012, 'A partir de 10 ans', 'Bien', '14', 0, ''),
(3, 'L''etrange noël de Mr Jack', 'Jack Skellington, roi des citrouilles et guide de Halloween-ville, s''ennuie : depuis des siècles, il en a assez de préparer la même fête de Halloween qui revient chaque année, et il rêve de changement. C''est alors qu''il a l''idée de s''emparer de la fête de Noël...', 3, 'http://fr.web.img2.acsta.net/r_640_600/b_1_d6d6d6/medias/nmedia/18/62/89/46/18923316.jpg', 'decembre', 1994, 'A partir de 6 ans', 'Excellent', '16', 0, ''),
(4, 'Henry, portrait d''un serial killer', 'Henry, portrait d''un serial killer est un film basé sur la vie et les ''exploits'' macabres de l''un des tueurs en série les plus monstrueux de toute l''histoire des Etats Unis : Henry Lee Lucas. Comme tous les serial killers, Harry possède un double visage, celui d''un homme ordinaire sans histoire, et un autre qui l''entraine dans une folie meutrière sans précédent en compagnie de son ami et ''collègue'' Otis Toole.', 4, 'http://fr.web.img4.acsta.net/r_640_600/b_1_d6d6d6/pictures/210/522/21052264_20131023170914016.jpg', 'novembre', 2013, 'Interdit aux moins de 16 ans', 'Moyen', '14', 0, ''),
(5, 'Insidious : chapitre 2', 'Après les événements du premier film, la famille Lambert tente de reprendre une vie normale, mais le monde des esprits semble en avoir décidé autrement. Aidés de Lorraine, Josh et Renai vont tenter de découvrir le secret qui les relie au monde dangereux des esprits.', 5, 'http://www.actucine.com/wp-content/uploads/2013/06/Insidious-2-130614.jpg', 'octobre', 2013, 'Interdit aux moins de 12 ans', 'Pas Terrible', '13,4', 0, ''),
(6, 'American nightmare', 'Dans une Amérique rongée par une criminalité débridée et des prisons surpeuplées, le gouvernement a donné son accord pour qu’une fois par an, pendant 12 heures, toutes activités criminelles, meurtres inclus, soient légalisées. La police ne peut intervenir. Les hôpitaux suspendent leurs services. Une nuit durant, les citoyens sont à même de définir leurs propres règles et de faire leur propre loi, sans avoir à craindre de sanctions. Au cours d’une telle nuit hantée par la violence et le crime, une famille va devoir faire un choix – bourreau ou victime ? – face à un inconnu venu frapper à sa porte.', 6, 'http://fr.web.img5.acsta.net/r_640_600/b_1_d6d6d6/pictures/210/104/21010443_20130802122346322.jpg', 'aout', 2013, 'Interdit aux moins de 12 ans avec avertissement', 'Moyen', '11', 0, ''),
(7, 'conjuring : Les dossiers Warren', 'Avant Amityville, il y avait Harrisville… Conjuring : Les dossiers Warren, raconte l''histoire horrible, mais vraie, d''Ed et Lorraine Warren, enquêteurs paranormaux réputés dans le monde entier, venus en aide à une famille terrorisée par une présence inquiétante dans leur ferme isolée… Contraints d''affronter une créature démoniaque d''une force redoutable, les Warren se retrouvent face à l''affaire la plus terrifiante de leur carrière…', 5, 'http://localhost/Jules%20Basse-Cathalinat/conjuring.jpg', 'aout', 2013, 'Interdit aux moins de 12 ans', 'Pas Mal', '15,2', 0, ''),
(8, 'Magic magic', 'Pendant ses vacances au Chili, Alicia, une jeune américaine réservée, se retrouve embarquée par sa cousine Sara et sa bande d''amis sur une île isolée. Personne ne fait vraiment d''effort pour intégrer Alicia. Elle se replie de plus en plus sur elle-même et commence à perdre peu à peu ses facultés mentales sans que le groupe n’y prenne garde…', 7, 'http://fr.web.img6.acsta.net/r_640_600/b_1_d6d6d6/pictures/210/195/21019598_20130715155709008.jpg', 'aout', 2013, 'Avertissement : des scènes, des propos ou des images peuvent heurter la sensibilité des spectateurs', 'Moyen', '10,4', 0, ''),
(9, 'Texas chainsaw 3D', 'Après le massacre de ses quatre amis, Sally était parvenue à échapper à l’épouvantable famille Sawyer. Les habitants de la petite ville de Newt, au Texas, avaient décidé de faire justice eux-mêmes, brûlant la maison de cette famille maudite et tuant tous ses membres. C’est du moins ce qu’ils crurent à l’époque... Bien des années plus tard, à des centaines de kilomètres de là, une jeune femme, Heather, apprend qu’elle vient d’hériter d’un somptueux manoir victorien, léguée par une grand-mère dont elle n’avait jamais entendu parler. Accompagnée de ses meilleurs amis, elle part découvrir la magnifique propriété isolée dont elle est désormais propriétaire. Heather va vite comprendre que du fond des caves, l’horreur n’attend qu’une occasion pour surgir…', 8, 'http://fr.web.img4.acsta.net/r_640_600/b_1_d6d6d6/pictures/210/232/21023246_20130729173957151.jpg', 'juillet', 2013, 'Interdit aux moins de 16 ans', 'Mauvais', '9,6', 0, ''),
(10, 'Room 237', 'En 1980, Stanley Kubrick signe Shining, qui deviendra un classique du cinéma d''horreur. A la fois admiré et vilipendé, le film est considéré comme une oeuvre marquante du genre par de nombreux experts, tandis que d''autres estiment qu''il est le résultat du travail bâclé d''un cinéaste de légende se fourvoyant totalement. Entre ces deux extrêmes, on trouve cependant les théories du complot de fans acharnés du film, convaincus d''avoir décrypté les messages secrets de Shining. ROOM 237 mêle les faits et la fiction à travers les interviews des fans et des experts qui adhèrent à ce type de théories, et propose sa relecture du film grâce à un montage très personnel. ROOM 237 ne parle pas seulement de fans d''un film mythique – il évoque les intentions de départ du réalisateur, l''analyse et la critique du film.', 9, 'http://images.allocine.fr/r_640_600/b_1_d6d6d6/pictures/210/053/21005320_20130513143435686.jpg', 'juin', 2013, '', 'Pas Mal', '12,8', 0, ''),
(11, 'Mama', 'Il y a cinq ans, deux sœurs, Victoria et Lily, ont mystérieusement disparu, le jour où leurs parents ont été tués. Depuis, leur oncle Lucas et sa petite amie Annabel les recherchent désespérément. Tandis que les petites filles sont retrouvées dans une cabane délabrée et partent habiter chez Lucas, Annabel tente de leur réapprendre à mener une vie normale. Mais elle est de plus en plus convaincue que les deux sœurs sont suivies par une présence maléfique… la mort soudaine de Sparky, son chien adoré, le jeune Victor fait appel au pouvoir de la science afin de ramener à la vie celui qui était aussi son meilleur ami. Il lui apporte au passage quelques modifications de son cru… Victor va tenter de cacher la créature qu’il a fabriquée mais lorsque Sparky s’échappe, ses copains de classe, ses professeurs et la ville tout entière vont apprendre que vouloir mettre la vie en laisse peut avoir quelques monstrueuses conséquences…', 10, 'http://fr.web.img6.acsta.net/r_640_600/b_1_d6d6d6/medias/nmedia/18/93/33/68/20250265.jpg', 'mai', 2013, 'Interdit aux moins de 12 ans', 'Pas Mal', '12,6', 0, ''),
(12, 'L''etrange creature du lac noir', 'Au cœur de l’Amazonie, un paléontologue découvre un fossile de main appartenant à une espèce inconnue. Persuadé qu’il s’agit du chaînon manquant entre l’homme et le poisson, il rassemble une expédition pour exhumer le reste du squelette. L’équipe décide alors de descendre le fleuve en bateau, s’enfonçant dans un territoire sauvage et poisseux, sans se douter que les eaux abritent encore l’étrange créature…', 11, 'http://fr.web.img3.acsta.net/r_640_600/b_1_d6d6d6/medias/nmedia/18/60/06/11/20275717.jpg', 'novembre', 2012, '', 'Trés Bien', '13,8', 0, ''),
(13, 'Insidious', 'Josh, son épouse et leurs trois enfants vivent depuis peu dans leur nouvelle maison lorsque l’aîné tombe dans un coma inexpliqué. Étrangement, une succession de phénomènes paranormaux débute peu après. Un médium leur révèle alors que l’âme de leur fils se trouve quelque part entre la vie et la mort, dans la dimension astrale, et que les manifestations sont l’oeuvre de forces maléfiques voulant s’emparer de son enveloppe corporelle. Pour le sauver, Josh va devoir lui aussi quitter son corps et s’aventurer dans l’au-delà ...', 5, 'http://localhost/Jules%20Basse-Cathalinat/insidious.jpg', 'juin', 2011, 'Interdit aux moins de 12 ans', 'Pas Mal', '13,4', 0, ''),
(14, 'Le bal des vampires', 'Persuadé que les vampires existent, le professeur Abronsius consacre tout son temps à la traque de cette espèce effrayante. Accompagné par son fidèle assistant, le jeune Alfred, ce scientifique farfelu parcourt la Transylvanie et finit par arriver dans un petit village qui semble être un nid de vampires. Dans la taverne, des gousses d''ail ornent les murs. Les habitants n''osent répondre à ses questions et semblent terrifiés par une étrange présence. Bientôt, la fille de l''aubergiste, Sarah, est enlevée par un vampire. Abronsius et Alfred, transi d''amour devant la belle jeune fille, partent à sa recherche. Elle est retenue au château du comte von Krolock. Mais leur étonnement est à son comble lorsqu''ils sont reçus avec amabilité dans la luxueuse demeure. Là, les vampires préparent leur bal annuel. Les deux compères ne sont pas au bout de leurs surprises...', 12, 'http://fr.web.img4.acsta.net/r_640_600/b_1_d6d6d6/medias/nmedia/18/35/59/99/19355043.jpg', 'avril', 2010, '', 'Trés Bien', '14,2', 0, ''),
(15, 'Bienvenue à Zombieland', 'Dans un monde infesté de zombies, deux hommes tentent de survivre. Columbus, le plus jeune, est terrorisé à l''idée d''être dévoré. C''est une poule mouillée, mais sa prudence pourrait bien lui sauver la vie... Tallahassee, lui, est un chasseur de zombies qui ne craint plus rien ni personne. Armé d''un fusil d''assaut, il se donne corps et âme à la seule mission qui compte pour lui : trouver les derniers exemplaires de ses biscuits préférés, des Twinkies, encore disponibles sur Terre. Dans leur périple, les deux survivants sont rejoints par Wichita et Little Rock, deux jeunes filles. Tous ont désormais deux défis impossibles à relever : affronter les zombies et apprendre à s''entendre...', 13, 'http://fr.web.img5.acsta.net/r_640_600/b_1_d6d6d6/medias/nmedia/18/71/12/95/19186117.jpg', 'novembre', 2009, '', 'Bien', '15,4', 0, ''),
(16, 'Frankenstein', 'Henry Frankenstein est un jeune scientifique qui rêve de créer un être humain à l''aide de ses connaissances. En compagnie de son assistant Fritz, les deux hommes vont concrétiser ce dessein à partir de morceaux de cadavres mais l''expérience va tourner au cauchemar. En effet, le monstre à qui les savants ont greffé le cerveau d''un criminel, va échapper à leur contrôle et commettre plusieurs meurtres.', 14, 'http://a.giscos.free.fr/cinema/F/Frankenstein/Affiche.jpg', 'juin', 2008, '', 'Bien', '16', 0, ''),
(17, '30 jours de nuit', 'Alaska, de nos jours. Au coeur de l''hiver, les habitants de la paisible ville de Barrow s''apprêtent à passer, comme tous les ans, un mois sans soleil. À la suite d''une série d''évènements étranges, Eben et Stella, les deux shérifs locaux, vont découvrir l''invraisemblable vérité. Un gang de vampires a investi la ville pour l''éradiquer de tous ses habitants. Eben, Stella et un petit groupe de survivants vont alors tenter de survivre jusqu''à l''aube... ', 15, 'http://fr.web.img2.acsta.net/r_640_600/b_1_d6d6d6/medias/nmedia/18/63/76/86/18864887.jpg', 'janvier', 2008, 'Interdit aux moins de 12 ans', 'Moyen', '13', 0, ''),
(18, 'King Kong', 'Figurante sans travail, la blonde Ann Darrow est engagée par le réalisateur Carl Denham pour être la vedette de son prochain film. Le Venture, le navire commandé par le capitaine Englehorn et qui comprend toute l''équipe, atteint Skull Island, une île mystérieuse où vivrait une créature légendaire vénérée par les indigènes et appelée King Kong. Durant le voyage, Ann tombe amoureuse de John Driscoll, le second du bateau. Une fois débarqués, les explorateurs sont aussitôt repérés par les indigènes et font marche arrière. Mais ces derniers enlèvent Ann, la "femme aux cheveux d''or", et l''attachent pour l''offrir en sacrifice à King Kong. Au moment où ses compagnons arrivent pour la délivrer, un singe gigantesque saisit la jeune fille et disparaît dans la forêt. Denham et ses hommes se lancent alors à la poursuite de King Kong. ---avec la participation de Merian C. Cooper.', 16, 'http://fr.web.img4.acsta.net/r_640_600/b_1_d6d6d6/medias/nmedia/18/35/17/18/18460806.jpg', 'decembre', 2005, '', 'Excellent', '16', 0, ''),
(19, 'Le portrait de Dorian Gray', 'A Londres, en 1866, Basil Hallward peint le portrait d''un séduisant jeune homme, Dorian Gray. Ce dernier s''amourache de Sybil Vane, une chanteuse de cabaret, mais les conventions rigides de son milieu le font rompre et elle se suicide. En rentrant chez lui, il trouve que son portrait a une expression plus dure, presque cruelle.', 21, 'http://fr.web.img5.acsta.net/r_640_600/b_1_d6d6d6/medias/nmedia/18/36/19/69/18460675.jpg', 'mai', 2002, '', 'Chef D''oeuvre', '15,2', 0, ''),
(20, 'Carrie au bal du diable', 'Tourmentée par une mère névrosée et tyrannique, la vie n''est pas rose pour Carrie. D''autant plus qu''elle est la tête de turc des filles du collège. Elle ne fait que subir et ne peut rendre les coups, jusqu''à ce qu''elle ne se découvre un étrange pouvoir surnaturel.', 18, 'http://fr.web.img3.acsta.net/r_640_600/b_1_d6d6d6/medias/00/51/88/005188_af.jpg', 'avril', 2001, 'Interdit aux moins de 16 ans', 'Trés Bien', '14,8', 0, ''),
(21, 'Freddy - chapitre 1 : les griffes de la nuit', 'Nancy est une jeune adolescente qui fait régulièrement des cauchemars sur un homme au visage brûlé, avec un vieux pull déchiré et cinq lames tranchantes à la place des doigts. Elle constate d''ailleurs que parmi ses amis, elle n''est pas la seule à faire ces mauvais rêves. Mais bientôt, l''un d''entre eux est sauvagement assassiné pendant son sommeil. C''est ainsi que le groupe fait la connaissance de l''ignoble Freddy Krueger, qui se sert des cauchemars pour assassiner les gens qui rêvent de lui. Nancy comprend qu''elle n''a plus qu''une seule solution : si elle veut rester en vie, elle doit rester éveillée...', 19, 'http://images.allocine.fr/r_640_600/b_1_d6d6d6/medias/nmedia/18/36/12/86/18454850.jpg', 'mars', 1985, 'Interdit aux moins de 12 ans', 'Bien', '15', 0, ''),
(22, 'Shining', 'Jack Torrance, gardien d''un hôtel fermé l''hiver, sa femme et son fils Danny s''apprêtent à vivre de longs mois de solitude. Danny, qui possède un don de médium, le "Shining", est effrayé à l''idée d''habiter ce lieu, théâtre marqué par de terribles évènements passés... ', 20, 'http://fr.web.img2.acsta.net/r_640_600/b_1_d6d6d6/medias/nmedia/18/64/98/65/18816792.jpg', 'octobre', 1980, 'Interdit aux moins de 12 ans', 'Trés Bien', '17', 0, ''),
(24, 'I, Frankenstein', 'Adam, la créature de Frankenstein, a survécu jusqu''à aujourd''hui, grâce à une anomalie génétique survenue lors de sa création. Son chemin l''a mené jusqu''à une métropole gothique et crépusculaire, où il se retrouve pris par une guerre séculaire sans merci entre deux clans d''immortels. Adam va être obligé de prendre parti et de s''engager dans un combat aux proportions épiques.', 22, 'http://fr.web.img2.acsta.net/r_640_600/b_1_d6d6d6/pictures/14/01/06/10/09/515156.jpg', 'janvier', 2014, '', 'Mauvais', '11', 0, ''),
(25, 'Paranormal Activity : The Marked Ones', 'Spin-off de la saga Paranormal Activity : alors que Jesse, après avoir été "marqué", est poursuivi par des forces mystérieuses, sa famille essaye de le sauver.', 23, 'http://fr.web.img6.acsta.net/r_640_600/b_1_d6d6d6/pictures/13/12/09/10/32/303852.jpg', 'janvier', 2014, 'Interdit aux moins de 12 ans', 'Mauvais', '10,4', 0, ''),
(28, 'Les Sorcieres de Zugarramundi', 'Trois braqueurs d''un magasin d''or de la Puerta del Sol à Madrid, en fuite vers la frontière française, vont se réfugier par erreur dans la ville de Zugarramurdi, haut lieu de la sorcellerie, à la veille d''une très importante réunion de milliers de sorcières...', 24, 'http://fr.web.img2.acsta.net/r_640_600/b_1_d6d6d6/pictures/210/508/21050889_20131129110921858.jpg', 'janvier', 2014, 'Avertissement : des scènes, des propos ou des images peuvent heurter la sensibilité des spectateurs', 'Pas Mal', '12,6', 0, ''),
(29, 'Avalanche Sharks - Les Dents de la Neige (DVD)', 'Le "Spring Break" à la montagne ! Snowboard, alcool et sexe au programme pour une bande d''amis bien décidés à en profiter. Mais, libérée par une explosion déclenchée pour éviter les risques d''avalanche, une menace terrible surgit : un requin immense, venu des temps préhistoriques... et affamé. Le programme a changé, le menu aussi.', 25, 'images/avalanche.jpg', 'mai', 2014, '', 'Pas Terrible', '4,2', 0, '<iframe width="560" height="315" src="//www.youtube.com/embed/TJMlX3lcGgc" frameborder="0" allowfullscreen></iframe>'),
(30, 'Poltergeist', 'Un "Poltergeist", esprit refusant la mort, sème la terreur dans la maison d''un couple californien.', 26, 'http://fr.web.img2.acsta.net/r_640_600/b_1_d6d6d6/medias/nmedia/18/65/31/25/18846052.jpg', 'octobre', 1982, 'Interdit aux moins de 16 ans', 'Pas Mal', '14,8', 0, ''),
(31, 'Cabin Fever : Patient Zero', 'Dans les Caraïbes, un bateau de croisière accoste près d''une île abandonnée... Un virus mortel fait alors son apparition et les plaisanciers sont contraints de trouver un moyen de survie avant que cet étrange maladie ne ronge leur chair et les extermine tous.', 27, 'http://fr.web.img4.acsta.net/r_640_600/b_1_d6d6d6/pictures/13/12/10/13/07/567604.jpg', 'bientot', 4000, '', '--', '--', 0, ''),
(32, 'You''re Next', 'Une réunion de famille, celle des Davidson, tourne brusquement court lorsque leur demeure est prise d’assaut par un groupe de tueurs psychopathes portant des masques d''animaux. Un à un, les membres de la famille périssent dans des pièges sophistiqués...', 28, 'http://fr.web.img1.acsta.net/r_640_600/b_1_d6d6d6/pictures/210/322/21032273_20130827110117695.jpg', 'septembre', 2013, 'Interdit aux moins de 16 ans', 'Pas Mal', '13,4', 0, ''),
(33, 'Paranormal Activity 5', 'Cinquième film de la saga Paranormal Activity.', 29, 'http://fr.web.img3.acsta.net/r_640_600/b_1_d6d6d6/medias/nmedia/18/95/51/15/20410165.jpg', 'bientot', 4000, 'Prevu pour octobre 2014', '--', '--', 0, ''),
(34, 'The Baby', 'Après une mystérieuse nuit lors de leur lune de miel, Zach et Samantha doivent faire face à une grossesse inattendue. Alors qu''il filme toute cette période, le mari commence à noter le changement d''attitude de sa femme. ', 33, 'images/baby.jpg', 'mai', 2014, 'Interdit aux moins de 12 ans', 'Trés Mauvais', '8,6', 0, ''),
(35, 'We Are What We Are', 'Les Parker sont connus dans le village pour leur grande discrétion. Derrière les portes closes de leur maison, le patriarche, Franck, dirige sa famille avec rigueur et fermeté. Après le décès brutal de leur mère, Iris et Rose, les deux adolescentes Parker, vont devoir s''occuper de leur jeune frère Rory. Elles se retrouvent avec de nouvelles responsabilités et n''ont d''autre choix que de s''y soumettre, sous l''autorité écrasante de leur père, déterminé à perpétuer une coutume ancestrale à tout prix. Une tempête torrentielle s''abat sur la région, les fleuves débordent. Les autorités locales commencent à découvrir des indices qui les rapprochent du terrible secret des Parker…', 30, 'http://fr.web.img2.acsta.net/r_640_600/b_1_d6d6d6/pictures/210/038/21003806_20130507100147677.jpg', 'bientot', 4000, '', '--', '11,4', 0, ''),
(36, 'Haunter (DVD)', 'Les journées de Lisa se répètent, jours après jours… Lorsqu’elle découvre que sa maison a été le théâtre d’une série de meurtres non élucidés, elle va tout faire pour échapper à cette spirale sans fin…', 31, 'http://fr.web.img2.acsta.net/r_640_600/b_1_d6d6d6/pictures/210/619/21061936_20131128180138629.jpg\r\n', 'janvier', 2014, '', 'Moyen', '11,2', 0, ''),
(37, 'La Résurrection (DVD)', 'Au lycée Middletown, le jeune Eli est victime d’intimidation de la part de Brandon et ses amis. Son grand frère Devon a été assassiné sur la route par un chauffard. Eli est persuadé que c’est Brandon le meurtrier. Eli dit qu’il a trouvé le corps de son frère et qu’une sorcière a mis un mauvais esprit dans son corps. Maintenant, il a besoin de six âmes pour vivre à nouveau et il va chercher à se venger contre Brandon et ses amis.', 32, 'http://fr.web.img6.acsta.net/r_640_600/b_1_d6d6d6/pictures/13/12/17/17/41/157251.jpg', 'janvier', 2014, '', 'Pas Terrible', '8', 0, ''),
(38, 'Hypnose', 'Tom Witzky, ouvrier dans la banlieue de Chicago, mène une vie de père de famille tout à fait ordinaire. Lors d''une soirée entre amis, Tom accepte, par jeu, une séance d''hypnose. Plus tard dans la nuit, il est assailli par des visions, des rêves troublants. De jour en jour, il voit toujours davantage de choses qu''il est incapable d''expliquer, entend des voix qu''il ne peut ignorer. Inexorablement, sa vie bascule. Bientôt, les visions de Tom deviennent réalité. Il voit sa famille en danger, il voit la mort...', 34, 'http://localhost/Jules%20Basse-Cathalinat/images/hypnose.jpg', 'mai', 2000, 'Interdit aux moins de 12 ans', 'Bien', '14', 0, ''),
(39, 'Fog', 'Une légende persiste dans une petite ville du Pacifique, Antonio Bay. On raconte aux enfants qu''un naufrage a eu lieu il y a une centaine d''années, que tous les passagers sont morts et que, à chaque fois que le brouillard se lève, les victimes surgissent des flots pour se montrer aux vivants.', 35, 'http://localhost/Jules%20Basse-Cathalinat/images/fog.jpg', 'mars', 1980, 'Interdit aux moins de 12 ans', 'Moyen', '13,6', 0, ''),
(40, 'Alien War (DVD)', 'Lorsqu’un météore heurte la base lunaire Arche, les astronautes se trouvent en grand danger. L’équipage apprend rapidement que les spores de la météorite ont la capacité de reproduire les structures cellulaires et de muter, ce qui oblige tout le monde à bord à se battre pour survivre…', 36, 'http://localhost/Jules%20Basse-Cathalinat/images/alienwar.jpg', 'janvier', 2014, '', 'Mauvais', '6,8', 0, ''),
(41, '7 Below (DVD)', 'Un groupe d’amis rentrait à leur hôtel en mini-van quand ils ont quitté la route à cause de l’apparition d’une mystérieuse femme. Ils sont secourus par un habitant du coin qui les emmène chez lui avant qu’une tempête éclate, mais sa demeure renferme un lourd secret : il y a cent ans, un enfant a tué toute sa famille… Lorsque l’un des rescapés meurt mystérieusement, les autres se mettent à voir des choses étranges qui pourraient bien être des fantômes…', 37, 'images/7below.jpg', 'janvier', 2014, '', 'Pas Terrible', '6,4', 0, ''),
(42, 'The collection (DVD)', 'Le jeune homme Arkin, après avoir échappé aux griffes vicieuses d''un serial killer surnommé "le collectionneur", doit se résoudre à aller sauver la fille d''un père fortuné, qui a été enlevée par ce fou dangereux.', 39, 'images/collection.jpg', 'octobre', 2013, '', 'Pas Mal', '12,2', 0, ''),
(43, 'Une Virée En Enfer 2 (DVD)', 'Deux couples d''amis partent pour une virée festive à Las Vegas. Lorsqu''une panne mécanique les laisse au milieu de nulle part, ils finissent par voler une vieille voiture dans un ranch. Ils éveillent alors la curiosité de Rusty, un routier psychopathe doté d''un appétit insatiable pour la torture et la mutilation. Il sera prêt à tout pour qu''ils paient leur dette. Un membre à la fois...', 42, 'images/viree.jpg', 'juin', 2009, '', 'Pas Terrible', '10,2', 0, ''),
(44, '[Rec] Apocalypse', 'Le mal se répand dans la ville. Qui survivra ?', 43, 'images/rec4.jpg', 'bientot', 4000, 'Prevu pour novembre 2014', '--', '--', 0, ''),
(45, 'Dark Touch', 'Meubles et objets se rebellent contre les occupants, laissant Neve, une fillette de 11 ans, seule rescapée du massacre sanglant qui a décimé sa famille. Des proches la recueillent et s’efforcent de lui faire surmonter cette épreuve traumatique en l’entourant d’amour. Mais la violence continue de se manifester et Neve ne retrouve pas la paix… ', 44, 'images/dark.jpg', 'mars', 2014, 'Interdit aux moins de 12 ans avec avertissement ', 'Moyen', '9,8', 0, ''),
(46, 'Le Pacte des Loups', 'En 1766, une bête mystérieuse sévit dans les montagnes du Gévaudan et fait de nombreuses victimes, sans que quiconque puisse l''identifier ou la tuer. Les gens ont peur. C''est un monstre surgi de l''enfer ou une punition de Dieu. L''affaire prend rapidement une dimension nationale et porte atteinte à l''autorité du Roi. Le chevalier Grégoire De Fronsac, naturaliste de surcroît, est alors envoyé dans la région du Gévaudan pour dresser le portrait de la bête. Bel esprit, frivole et rationnel, il est accompagné de l''étrange et taciturne Mani, un indien de la tribu des Mohawks. Ces derniers s''installent chez le Marquis Thomas d''Apcher. Au cours d''une soirée donnée en son honneur, Fronsac fait la connaissance de Marianne De Morangias ainsi que de son frère Jean-François, héritiers de la plus influente famille du pays. Fronsac se heurte bientôt à l''animosité des personnages influents de la région.', 38, 'images/pacteloups.jpg', 'janvier', 2001, 'Interdit aux moins de 12 ans', 'Bien', '14,2', 0, ''),
(47, 'Claustrofobia', 'Après une nuit de fête passée avec sa meilleure amie, Eva, une jeune étudiante vétérinaire, se réveille enchaînée à un lit. Retenue en otage, droguée, elle va devoir faire preuve de courage pour retrouver sa liberté, et comprendre pourquoi son ravisseur garde un échantillon de son sang...', 45, 'images/claustrofobia.jpg', 'inconnue', 4000, '', 'Moyen', '11,2', 0, ''),
(48, 'Escape From Tomorrow', '', 46, 'images/escape.jpg', 'inconnue', 4000, '', 'Moyen', '11,2', 0, ''),
(49, 'The Badadook', 'Six ans après le décès de son mari, Amelia éprouve le plus grand mal à élever son fils de six ans, Samuel, particulièrement turbulent et sujet aux pires cauchemars. Lorsque le livre pour enfants Mister Babadook apparaît mystérieusement dans sa bibliothèque, Samuel est convaincu que le Babadook en question est celui-là même qui vient hanter ses rêves, en menaçant de les tuer, lui et sa mère. Quand Amelia, à son tour, croit apercevoir celui dont son fils lui a parlé avec frayeur, elle prend soudain conscience que la créature pourrait être alors bien réelle.', 47, 'images/babadook.jpg', 'bientot', 4000, '', '--', '16,6', 0, ''),
(50, 'Projet Almanac', 'Un groupe d''adolescents trouve le moyen de voyager dans le temps. Tout à la joie d''expérimenter leur invention, ils en oublient que leur comportement dans le passé peut avoir des conséquences désastreuses sur le présent et l''avenir. ', 48, 'images/welcome.jpg', 'bientot', 4000, 'Prevu pour fevrier 2015', '--', '--', 0, ''),
(51, 'Outpost : Black Sun (DVD)', '1945. Fin de la 2nde Guerre Mondiale, Klausener, un scientifique allemand, développe une nouvelle technologie terrifiante qui a le pouvoir de créer une armée de Nazis immortels. Retour au présent, une force de l’OTAN est déployée en Europe de l’Est où un ennemi cruel massacre sans pitié chaque personne qu’il trouve sur son passage. Helena, la détective qui travaille sur le dossier du célèbre criminel de guerre Klausener, découvre que c’est l’armée indestructible de zombies nazis qui est à l’origine de ces massacres. Avec l’aide de Wallace, un homme qui a passé des années à traquer les secrets des Nazis, ils vont s’associer à une équipe des forces spéciales pour vaincre l’ennemi au-delà de ses limites. Leur mission : détruire définitivement cette armée diabolique et empêcher l’arrivée menaçante d’un 4ème Reich…', 49, 'images/outpost.jpg', 'novembre', 2012, '', 'Moyen', '10', 0, ''),
(52, 'Sex Addict (DVD)', 'Un jeune homme et une jeune femme génétiquement modifiés cherchent le grand amour chacun de leur côté. Ils finissent par se rencontrer et c''est le coup de foudre immédiat. S''ensuivra une folle et longue nuit des plus torrides aux répercussions catastrophiques, voire monstrueuses...', 50, 'images/sexaddict.jpg', 'fevrier', 2013, '', 'Pas Terrible', '9,6', 0, ''),
(53, 'Zombeavers', 'Une horde de castors zombies s''attaque à des adolescents en vacances...', 53, 'images/zombeavers.jpg', 'bientot', 4000, '', '--', '--', 0, ''),
(54, 'Zombies : Global Attack (DVD)', 'Dusty se rend en Afghanistan pour retrouver Derek, son frère disparu, un théoricien de la conspiration persuadé qu’Oussama Ben Laden est encore en vie. Arrivé sur les lieux, elle rencontre des agents des forces spéciales et apprend que son frère n’était finalement pas si fou que ça : revenu d’entre les morts, Oussama Ben Laden est sur le point de conquérir le monde avec son armée de zombies…', 51, 'images/zombiesglobal.jpg', 'fevrier', 2014, '', 'Moyen', '7,4', 0, ''),
(55, 'Sharknado (DVD)', 'Un ouragan s''empare de Los Angeles. Des milliers de requins s''abattent sur la ville et terrorisent la population. Fin, un surfer également propriétaire de bar, accompagné de ses amis Baz et Nova, part à l''aventure afin de sauver son ex-femme April et leur fille Claudia...', 52, 'images/sharknado.jpg', 'fevrier', 2014, '', 'Pas Terrible', '6,8', 0, ''),
(56, 'Silent Hill : Revelation 3D', 'Depuis son plus jeune âge, Heather Mason a l’habitude de changer d’adresse très souvent avec son père. Sans vraiment savoir pourquoi, elle fuit. Pourtant, cette fois, elle est piégée. Pour sauver celui qui avait toujours réussi à la protéger et découvrir qui elle est vraiment, Heather va devoir affronter un cauchemar qui devient de plus en plus réel…Silent Hill. ', 54, 'images/silenthill.jpg', 'novembre', 2012, 'Interdit aux moins de 12 ans', 'Pas Terrible', '10,2', 0, ''),
(57, 'Ghost Rider 3', '', 53, 'images/inconnu.jpg', 'bientot', 4000, '', '--', '--', 0, ''),
(58, 'American Nightmare 2 : Anarchie', 'La suite de "American Nightmare"...', 6, 'images/americannightmare2.jpg', 'bientot', 4000, 'Prevu pour juillet 2014', '--', '--', 0, ''),
(59, 'Silent Hill', 'De plus en plus souvent, la petite Sharon rêve d''une ville abandonnée, Silent Hill. Sa mère, Rose, décidée à comprendre l''étrange mal dont souffre son enfant, décide de l''accompagner sur place. Alors qu''elles pénètrent dans cet univers lugubre, Sharon disparaît. Rose se lance à sa poursuite, mais se rend vite compte que ce lieu étrange ne ressemble à rien de normal. Noyée dans le brouillard, peuplée d''étranges créatures, hantée par des ténèbres vivantes qui dévorent littéralement tout ce qu''elles touchent, cette dimension va peu à peu livrer ses terrifiants secrets... Avec l''aide de Cybil, de la police locale, Rose se jette dans une quête éperdue pour arracher sa fille au monde de Silent Hill. D''indices en épreuves, elle va découvrir tout ce que Sharon risque et ce qu''elle représente dans une malédiction qui dépasse tout...', 38, 'images/silenthillle1.jpg', 'avril', 2006, 'Interdit aux moins de 12 ans', 'Moyen', '13,2', 0, ''),
(60, 'Phantom Of The Paradise', 'Winslow Leach, jeune compositeur inconnu, tente désespérément de faire connaître l''opéra qu''il a composé. Swan, producteur et patron du label Death Records, est à la recherche de nouveaux talents pour l''inauguration du Paradise, le palais du rock qu''il veut lancer. Il vole la partition de Leach, et le fait enfermer pour trafic de drogue. Brisé, défiguré, ayant perdu sa voix, le malheureux compositeur parvient à s''évader. Il revient hanter le Paradise...', 18, 'images/phantom.jpg', 'fevrier', 1975, '', 'Trés Bien', '14,6', 0, ''),
(61, 'Urban Explorer -Le sous-sol de l''horreur (DVD)', 'L’exploration urbaine: activité clandestine consistant à s’introduire dans des lieux abandonnés, interdits d’accès ou cachés. C’est dans l’objectif de découvrir un légendaire bunker du 3ème Reich que quatre jeunes aventuriers en herbe se rencontrent sur internet et se retrouvent à Berlin. Avec leur guide allemand et une équipe d’autres curieux, ils s’enfoncent dans les entrailles sous-terraines de la capitale allemande. Et les joyeux lurons en auront pour leur compte niveau sensations! Mais si l’aller n’est qu’émerveillement et pure excitation, le retour s’avèrera beaucoup moins sympathique, et surtout bien plus douloureux…', 55, 'images/urban.jpg', 'fevrier', 2014, '', 'Moyen', '10,4', 0, ''),
(62, 'Goal of the Dead - Premiere mi-temps', 'Pour l’Olympique de Paris, aller disputer ce match amical à Capelongue aurait dû être une simple corvée de fin de saison. Personne n’aurait pu anticiper qu’une infection très semblable à la rage allait se propager, et transformer les habitants du petit village en créatures ultra-violentes et hautement contagieuses. Pour Samuel – l’ancienne gloire près de la retraite, Idriss-le prodige arrogant, Coubert - l’entraîneur dépressif, ou Solène - la journaliste ambitieuse, c’est l’heure de l’affrontement le plus important de leur vie.', 56, 'images/goal.jpg', 'fevrier', 2014, '', 'Pas Mal', '--', 0, ''),
(63, 'Triassic Attack', 'Un Amérindien, en colère contre les nouveaux aménagements de la petite ville qu''il habite, pénètre dans le musée et ramène involontairement à la vie trois fossiles de dinosaures. Les monstres préhistoriques sèment alors la pagaille dans les rues.', 57, 'images/triassic.jpg', 'inconnue', 4000, '', 'Pas Terrible', '6,4', 0, ''),
(64, 'Frankenstein', 'Le jeune savant Victor Frankenstein est persuadé que la science peut venir à bout de tout et même créer la vie. Il s''attèle à cette tache avec ardeur et crée à partir de morceaux de cadavres un être humain qui sera acculé par sa différence à la méchanceté. ', 58, 'images/frankenstein.jpg', 'janvier', 1995, 'Interdit aux moins de 12 ans', 'Pas Mal', '12,8', 0, ''),
(65, 'Alien, le huitième passager', 'Le vaisseau commercial Nostromo et son équipage, sept hommes et femmes, rentrent sur Terre avec une importante cargaison de minerai. Mais lors d''un arrêt forcé sur une planète déserte, l''officier Kane se fait agresser par une forme de vie inconnue, une arachnide qui étouffe son visage. Après que le docteur de bord lui retire le spécimen, l''équipage retrouve le sourire et dîne ensemble. Jusqu''à ce que Kane, pris de convulsions, voit son abdomen perforé par un corps étranger vivant, qui s''échappe dans les couloirs du vaisseau... ', 59, 'images/alien.jpg', 'septembre', 1979, 'Interdit aux moins de 12 ans ', 'Trés Bien', '17', 0, ''),
(66, 'Morse', 'Oskar est un adolescent fragile et marginal, totalement livré à lui-même et martyrisé par les garçons de sa classe. Pour tromper son ennui, il se réfugie au fond de la cour enneigée de son immeuble, et imagine des scènes de vengeance. Quand Eli s''installe avec son père sur le même pallier que lui, Oskar trouve enfin quelqu''un avec qui se lier d''amitié. Ne sortant que la nuit, et en t-shirt malgré le froid glacial, la jeune fille ne manque pas de l''intriguer... et son arrivée dans cette banlieue de Stockolm coïncide avec une série de morts sanglantes et de disparitions mystérieuses. Il n''en faut pas plus à Oskar pour comprendre : Eli est un vampire. Leur complicité n''en pâtira pas, au contraire...', 60, 'images/morse.jpg', 'fevrier', 2009, 'Interdit aux moins de 12 ans', 'Tres Bien', '16', 0, ''),
(67, 'Action ou vérité (DVD)', 'De jeunes gens se rendent dans une cabane isolée pour faire la fête. Mais à la place de la folle soirée espérée, ils rencontrent un tueur qui cherche à les éliminer pour venger la mort de son frère...', 61, 'images/action.jpg', 'janvier', 2014, '', 'Pas Mal', '11,4', 0, ''),
(68, 'Trauma', 'Aura Petruscu, une jeune fille anorexique de 16 ans, s''évade d''un hôpital psychiatrique et rencontre David. Elle est ramenée à ses parents, qui sont décapités le soir des retrouvailles. Aidée par David, la jeune fille va mener l''enquête pour arrêter l''assassin, mais celui-ci continue à tuer d''une façon effroyable tous les témoins d''une drame qui s''était déroulé des années plus tôt et qui semble représenter la clé du mystère... ', 62, 'images/trauma.jpg', 'aout', 1994, 'Interdit aux moins de 16 ans', 'Moyen', '12', 0, ''),
(69, 'Zombie Hunter (DVD)', 'Suite à une épidémie, le monde est devenu une terre de désolation infestée de zombies… Pour venger sa famille, Haunter arpente les terres dévastées au volant de son bolide à la recherche de morts-vivants. Gravement blessé, il est recueilli par un groupe de survivants. Ensemble, ils vont partir en quête d’une contrée préservée de l’invasion…', 63, 'images/zombie.jpg', 'mars', 2014, '', 'Moyen', '6,8', 0, ''),
(70, 'The Last Days on Mars', 'Un groupe d''astronautes découvre des bactéries extraterrestres dans le permafrost martien. C''est alors que l''un des membres de l''équipe est victime d''un accident. En attendant les secours, le groupe tente d''organiser la survie...', 64, 'images/thelastdays.jpg', 'bientot', 4000, '', '--', '11', 0, ''),
(71, 'Détour Mortel', 'Un accident paralyse totalement la circulation. Chris ne veut pas manquer son rendez-vous. Il quitte l''autoroute et s''engage dans un chemin de terre pour contourner l''embouteillage. Alors qu''il s''enfonce dans la forêt, il heurte une voiture bloquée au milieu de la route. Ses occupants partaient camper pour le week-end lorsque les pneus ont étrangement éclaté. Le groupe va chercher de l''aide et trouve une cabane. En pénétrant à l''intérieur, le soulagement laisse vite place au cauchemar. Tétanisés par l''horreur de ce qu''ils découvrent, ils n''ont pas le temps de fuir que les occupants arrivent... ', 65, 'images/detour.jpg', 'juillet', 2003, 'Interdit aux moins de 16 ans', 'Bien', '12,2', 0, ''),
(72, 'Bad Milo! (TV)', 'Coincé entre un boulot qui l''ennuie et sa famille qui le brime, Duncan est loin d''être heureux. Sa vie tourne carrément au cauchemar lorsqu''il est pris de douleurs intestinales aigües. Il s''avère bientôt qu''une bestiole immonde et ultra-violente est à l''origine de ses maux...', 66, 'images/badmilo.jpg', 'mars', 2014, '', 'Moyen', '11,6', 0, ''),
(73, 'Hostel', 'Deux étudiants américains, Paxton et Josh, ont décidé de découvrir l''Europe avec un maximum d''aventures et de sensations fortes. Avec Oli, un Islandais qu''ils ont rencontré en chemin, ils se retrouvent dans une petite ville de Slovaquie dans ce qu''on leur a décrit comme le nirvana des vacances de débauche : une propriété très spéciale, pleine de filles aussi belles que faciles... Natalya et Svetlana sont effectivement très cools... un peu trop, même. Paxton et Josh vont vite se rendre compte qu''ils sont tombés dans un piège. Ce voyage-là va les conduire au bout de l''horreur... ', 67, 'images/hostel.jpg', 'mars', 2006, 'Interdit aux moins de 16 ans', 'Moyen', '11,6', 0, ''),
(74, 'Warm Bodies', 'Un mystérieux virus a détruit toute civilisation. Les rescapés vivent dans des bunkers fortifiés, redoutant leurs anciens semblables devenus des monstres dévoreurs de chair. R, un mort-vivant romantique, sauve contre toute attente Julie, une adorable survivante, et la protège de la voracité de ses compagnons. Au fil des jours, la jeune femme réveille chez lui des sentiments oubliés depuis longtemps… Elle-même découvre chez ce zombie différent autre chose qu’un regard vide et des gestes de momie… Perturbée par ses sentiments, Julie retourne dans sa cité fortifiée où son père a levé une armée. R, de plus en plus humain, est désormais convaincu que sa relation avec Julie pourrait sauver l’espèce entière… Pourtant, en cherchant à revoir Julie, il va déclencher l’ultime guerre entre les vivants et les morts. Les chances de survie de ce couple unique sont de plus en plus fragiles… Warm Bodies Renaissance porte un regard aussi réjouissant qu’étonnant sur l’amour, la fin du monde et les zombies… De quoi nous rappeler ce que c’est d’être humain ! ', 68, 'images/warmbodies.jpg', 'mars', 2013, 'Avertissement : des scènes, des propos ou des images peuvent heurter la sensibilité des spectateurs', 'Pas Mal', '14', 0, ''),
(75, 'Aliens le retour', 'Après 57 ans de dérive dans l''espace, Ellen Ripley est secourue par la corporation Weyland-Yutani. Malgré son rapport concernant l’incident survenu sur le Nostromo, elle n’est pas prise au sérieux par les militaires quant à la présence de xénomorphes sur la planète LV-426 où se posa son équipage… planète où plusieurs familles de colons ont été envoyées en mission de "terraformage". Après la disparition de ces derniers, Ripley décide d''accompagner une escouade de marines dans leur mission de sauvetage... et d’affronter à nouveau la Bête.', 69, 'images/aliensleretour.jpg', 'octobre', 1986, 'Interdit aux moins de 12 ans', 'Trés Bien', '17', 0, ''),
(76, 'Le Festin nu', 'Bill Lee, ex-junkie, recyclé dans l''extermination des cafards, tue sa femme accidentellement après l''avoir surprise faisant l''amour avec leurs deux meilleurs amis.', 70, 'images/lefestinnu.jpg', 'mars', 1992, 'Interdit aux moins de 12 ans', 'Pas Mal', '14,2', 0, ''),
(77, 'Vampire University (DVD)', 'Le professeur Wayne Gretzky est un vampire… impuissant. Il n’a pas été capable de montrer les crocs depuis qu’il a tué l’amour de sa vie trois cent ans plus tôt. Avec l’aide de son collègue, le docteur Levine, et une jeune étudiante de première année, Chris qui est le sosie de son amour perdu, sa vraie nature de vampire ressurgit. Malheureusement, cette ressemblance n’est pas une coïncidence et les choses vont sérieusement se compliquer quand Chris se transforme en vampire assoiffé de sang.', 71, 'images/vampireuniversity.jpg', 'fevrier', 2014, '', 'Moyen', '8,2', 0, ''),
(78, 'Mimesis - La nuit des morts vivants (DVD)', 'Sept étudiants dont le point commun est seulement un amour pour les films d’horreur de l’époque classique, sont invités à assister à une fête exclusive "fan d’horreur" dans une ferme isolée. Mais au coucher du soleil, ces étrangers vont se retrouver dans une version réelle du film culte La nuit des morts-vivants !', 72, 'images/mimesis.jpg', 'mars', 2014, '', 'Moyen', '9', 0, ''),
(79, 'Hostel - Chapitre II', 'Alors qu''elles sont en vacances en Europe, Beth, Lorna et Whitney, trois jeunes Américaines, rencontrent une superbe femme. Celle-ci se propose de leur faire découvrir pour un week-end un établissement de cure où elles pourront se reposer et s''amuser. Attirées par cette offre, les trois jeunes femmes la suivent et tombent dans son piège. Livrées à de riches clients associant l''horreur au plaisir, les trois jeunes femmes vont vivre un cauchemar absolu...', 67, 'images/hostelchapitre2.jpg', 'juillet', 2007, 'Interdit aux moins de 16 ans', 'Pas Mal', '10,8', 0, ''),
(80, 'Chronicle', 'Après avoir été en contact avec une mystérieuse substance, trois lycéens se découvrent des super-pouvoirs. La chronique de leur vie qu’ils tenaient sur les réseaux sociaux n’a désormais plus rien d’ordinaire…\r\nD’abord tentés d’utiliser leurs nouveaux pouvoirs pour jouer des tours à leurs proches, ils vont vite prendre la mesure de ce qui leur est possible. Leurs fabuleuses aptitudes les entraînent chaque jour un peu plus au-delà de tout ce qu’ils auraient pu imaginer. Leur sentiment de puissance et d’immortalité va rapidement les pousser à s’interroger sur les limites qu’ils doivent s’imposer… ou pas !', 73, 'images/chronicle.jpg', 'fevrier', 2012, '', 'Pas Mal', '14,2', 0, ''),
(81, 'Black Death (DVD)', 'Alors que la première épidémie de peste bubonique ravage l''Angleterre, un jeune moine nommé Osmund reçoit la mission d''accompagner un groupe de chevaliers, menés par le rustre Ulric, pour enquêter sur d''étranges phénomènes se produisant dans un petit village reculé. Il semblerait en effet que, en ce lieu, les morts reviennent à la vie. Comprenant que cela est le fait d''un nécromancien ayant un lien particulier avec le village, ils se lancent à sa recherche et finissent bientôt par le trouver en la personne de la mystérieuse beauté Langiva. Mais quand Osmund, déchiré entre son amour pour Dieu et celui pour une jeune femme, accepte de passer un pacte avec la nécromancienne, l''horreur de son véritable voyage ne fait que commencer...', 74, 'images/blackdeath.jpg', 'avril', 2011, '', 'Pas Mal', '12,8', 0, ''),
(82, 'The Legend of Boogeyman', 'Jacob est un enfant poursuivi par une créature très ancienne et dangereuse, le boodeyman. Enfermé dans une maison abandonnée, la bête a réussi à échapper à la surveillance de son gardien et elle s''est mise à la recherche du garçon pour le tuer ! Le père de ce dernier va tout faire pour protéger son fils et tenter de comprendre, avec laide de sa coéquipière, pourquoi le boogeyman en a après Jacob...', 75, 'images/thelegendofboogeyman.jpg', 'inconnue', 4000, '', 'Moyen', '8,4', 0, ''),
(83, 'Devil Inside', 'Un soir de 1989, la police reçoit un appel d''une certaine Maria Rossi qui reconnaît avoir sauvagement assassiné trois personnes. Vingt ans plus tard, sa fille, Isabella cherche à comprendre ce qui s''est vraiment passé cette nuit-là. Elle se rend en Italie, à l''hôpital Centrino pour psychopathes où Maria est enfermée, pour savoir si sa mère est déséquilibrée ou possédée par le diable. Pour soigner la démente, Isabella fait appel à deux jeunes exorcistes qui utilisent des méthodes peu orthodoxes, mêlant la science et la religion. Ils devront alors affronter le Mal absolu qui a pris possession de Maria : quatre démons d''une puissance redoutable…', 76, 'images/devilinside.jpg', 'fevrier', 2012, 'Interdit aux moins de 12 ans', 'Pas Terrible', '8,2', 0, ''),
(84, 'Trouble jeu', 'Le docteur David Callaway, récemment veuf, essaie désespérément de renouer le contact avec sa fille de neuf ans, Emily, après la mort tragique de sa femme.\r\nAprès plusieurs mois de traitement psychiatrique avec le docteur Katherine Carson, une des anciennes étudiantes de David, Emily semble réussir à vivre avec le traumatisme, et semble prête à redémarrer une nouvelle vie.\r\nDavid, son père, décide de quitter New York pour une petite ville pour solidifier leur rapport père fille. Mais les choses tournent au sinistre quand Emily se crée un ami imaginaire effrayant et maniaque, Charlie, qui adore jouer à des jeux macabres. Les amis imaginaires peuvent parfois paraître si réels...', 77, 'images/troublejeu.jpg', 'fevrier', 2005, 'Interdit aux moins de 12 ans', 'Moyen', '11,8', 0, ''),
(85, 'The Human Centipede (First Sequence) (DVD)', 'Une nuit, deux jeunes américaines en voyage à travers l’Europe, tombent en panne en plein milieu d’une forêt. Par chance, elles découvrent une maison dans laquelle vit un ancien chirurgien allemand, le docteur Heiter. Ravies d’y trouver refuge, elles sont alors loin d’imaginer qu’elles vont devenir les cobayes d’une expérience chirurgicale inédite : le médecin entend en effet créer un mille-pattes humain en les reliant entre elles par un seul et même tube digestif.', 78, 'images/thehumancentipede.jpg', 'octobre', 2011, 'Interdit aux moins de 16 ans', 'Pas Terrible', '9', 0, ''),
(86, 'Rubber', 'Dans le désert californien, des spectateurs incrédules assistent aux aventures d’un pneu tueur et télépathe, mystérieusement attiré par une jolie jeune fille. Une enquête commence.', 79, 'images/rubber.jpg', 'novembre', 2010, '', 'Pas Mal', '11,6', 0, ''),
(87, 'American Psycho', 'Au coeur des années Reagan, Patrick Bateman est un pur produit de la réussite américaine. Jeune, riche, il est un de ces golden boys qui triomphent à la bourse. Seul le nec plus ultra est digne de lui et il s''emploie à ne retrouver que des symboles qui lui renvoient une image de succès. Il accumule, avec une obsession maladive, les vêtements selects, les relations enviables. Son voeu le plus cher est de se fondre dans cette foule, de trouver sa place au milieu de ceux auxquels il s''identifie.', 80, 'images/americanpsycho.jpg', 'juin', 2000, 'Interdit aux moins de 16 ans', 'Moyen', '15,2', 0, ''),
(88, 'Contracted', 'Après avoir passé la nuit avec un inconnu, Samantha ressent des troubles inexpliqués. Son corps se décharne, ses ongles s''arrachent... Mais qui est l''homme qui l''a contaminé ?', 81, 'images/contracted.jpg', 'inconnue', 4000, '', 'Pas Mal', '10,6', 0, '');
INSERT INTO `film` (`id`, `titre`, `resume`, `id_realisateur`, `image`, `mois`, `annee`, `csa`, `avis_national`, `note_internationale`, `note_utilisateur`, `video`) VALUES
(89, 'Aux yeux des vivants', 'Fuyant leur dernier jour d’école, Dan, Tom et Victor, trois adolescents inséparables, se perdent dans la campagne avant de s’engouffrer dans les méandres d’un studio de cinéma abandonné depuis des années. Un lieu décrépi devenu depuis le repère d’Isaac et Klarence Faucheur, un homme et son étrange fils, bien décidés à ne pas laisser le trio dévoiler leurs sombres secrets aux yeux des vivants.\r\nLa nuit tombe. De retour chez eux, les adolescents ne tarderont pas à s’apercevoir que quelque chose les a suivis et que la nuit risque d’être l’une des plus longues de leur vie…', 82, 'images/auxyeuxdesvivants.jpg', 'avril', 2014, 'Interdit aux moins de 16 ans ', 'Pas terrible', '13', 0, ''),
(90, 'No One Lives (DVD)', 'Une bande de tueurs sans merci kidnappe un riche couple en voyage à travers le pays et découvre que les choses ne sont pas telles qu''elles paraissent.', 83, 'images/noonelives.jpg', 'septembre', 2013, '', 'Moyen', '11,8', 0, ''),
(91, 'Les Autres', 'En 1945, dans une immense demeure victorienne isolée sur l''île de Jersey située au large de la Normandie, vit Grace, une jeune femme pieuse, et ses deux enfants, Anne et Nicholas. Les journées sont longues pour cette mère de famille qui passe tout son temps à éduquer ses enfants en leur inculquant ses principes religieux. Atteints d''un mal étrange, Anne et Nicholas ne doivent en aucun cas être exposés à la lumière du jour. Ils vivent donc reclus dans ce manoir obscur, tous rideaux tirés.\r\nUn jour d''épais brouillard, trois personnes frappent à la porte du manoir isolé, en quête d’un travail. Grace, qui a justement besoin d''aide pour l''entretien du parc ainsi que d’une nouvelle nounou pour ses enfants, les engage. Dès lors, des événements étranges surviennent dans la demeure...', 84, 'images/lesautres.jpg', 'decembre', 2001, 'Interdit aux moins de 12 ans', 'Excellent', '15,2', 0, ''),
(92, 'La Maison de cire', 'Un groupe d''amis se rendant au match de football de l''école devient la cible de deux assassins dans une ville abandonnée. Ils découvrent que ces hommes ont développé la plus grosse attraction du coin - la Maison de cire - en créant une bourgade peuplée de personnages de cire, confectionnés à l''aide des corps de visiteurs malchanceux. Les jeunes gens doivent maintenant trouver un moyen de s''enfuir avant de devenir eux-mêmes les acteurs de ce funeste théâtre...', 85, 'images/lamaisondecire.jpg', 'mai', 2005, 'Interdit aux moins de 16 ans', 'Bien', '10,6', 0, ''),
(93, 'Constantine', 'John Constantine, extralucide anticonformiste, qui a littéralement fait un aller-retour aux enfers, doit aider Katelin Dodson, une femme policier incrédule, à lever le voile sur le suicide mystérieux de sa soeur jumelle. Cette enquête leur fera découvrir l''univers d''anges et de démons qui hantent les sous-sols de Los Angeles d''aujourd''hui.', 86, 'images/constantine.jpg', 'fevrier', 2005, 'Interdit aux moins de 12 ans', 'Moyen', '13,8', 0, ''),
(94, 'Untitled Prometheus Sequel', 'Suite des aventures d''Elizabeth Shaw dans l''espace.', 59, 'images/inconnu.jpg', 'bientot', 4000, '', '--', '--', 0, ''),
(95, 'Here comes the devil', 'Deux enfants réapparaissent inexplicablement après avoir disparu durant la nuit, au flanc d’une montagne déserte et creusée par les grottes. Alors que les deux adolescents s’isolent et développent un comportement étrange, leurs parents commencent à croire qu’une chose sinistre et inhumaine s''est produite cette fameuse nuit...', 87, 'images/herecomesthedevil.jpg', 'bientot', 4000, '', '--', '11,4', 0, ''),
(96, 'Invasion', 'Une immense explosion embrase le ciel, de Dallas à Washington, répandant sur des milliers de kilomètres carrés les restes de la navette spatiale Patriot. Les autorités prennent rapidement la situation en main, mais d''étranges rumeurs ne tardent pas à circuler : on aurait trouvé, collée aux fragments de l''engin, une matière inconnue, hautement toxique, capable de résister à des températures extrêmes. Et les premiers à entrer en contact avec elle n''auraient plus d''humain que l''apparence... Mais pas question de déclencher la panique pour autant.\r\nQuelque temps après le crash, Carol assiste à une vague de phénomènes aberrants. Une de ses patientes se plaint, par exemple, qu''on lui a "changé" son mari. Simple délire ? Mais pourquoi tant de gens à travers le pays en sont-ils affectés ? Et pourquoi les rues des villes sont-elles devenues si paisibles, comme si personne n''osait plus s''énerver ? Plus inquiétant : Oliver, le jeune fils de Carol, ramène le jour d''Halloween un sucre d''orge enduit d''une matière inconnue... et vivante !', 88, 'images/invasion.jpg', 'octobre', 2007, '', 'Pas terrible', '11,8', 0, ''),
(97, 'Pandémie (DVD)', 'Près d''une grande métropole, la police découvre, entassés dans un container, des dizaines de corps putréfiés victimes d''un mal mystérieux. Au même moment, un passeur de clandestins, atteint d''un virus inconnu, décède à l''hôpital. Quelques heures plus tard, les urgences de la ville croulent sous l''afflux des malades. le chaos s''installe.\r\nAfin d''enrayer la propagation du virus, les autorités imposent  une mise en quarantaine. Tous les habitants sont confinés en zone de sécurité. La tension monte. Certains vont risquer leur vie pour sauver leurs proches, d''autres vont risquer celle des autres pour sauver la leur. Pendant ce temps, un survivant du container court dans la ville...', 89, 'images/pandemie.jpg', 'avril', 2014, '', 'Pas mal', '13,4', 0, ''),
(98, 'Dracula', 'En 1492, le prince Vlad Dracul, revenant de combattre les armées turques, trouve sa fiancée suicidée. Fou de douleur, il défie Dieu, et devient le comte Dracula, vampire de son état. Quatre cents ans plus tard, désireux de quitter la Transylvanie pour s''établir en Angleterre, il fait appel à Jonathan Harker, clerc de notaire et fiancé de la jolie Mina Murray. La jeune fille est le sosie d''Elisabeta, l''amour ancestral du comte...', 90, 'images/dracula.jpg', 'janvier', 1993, 'Interdit aux moins de 12 ans', 'Trés Bien', '15', 0, ''),
(99, 'Apollo 18', 'Officiellement, Apollo 17 fut le dernier voyage sur la lune organisé par la Nasa en 1972. La mission Apollo 18, "annulée pour des raisons budgétaires", a en fait eu lieu secrètement l’année suivante. Les images qui en furent rapportées, et qui ont été retrouvées, révèlent une réalité que la NASA essaie de nous cacher depuis 40 ans… C’est pour ça qu’aucun autre astronaute n’y est retourné depuis cette époque.', 91, 'images/apollo18.jpg', 'octobre', 2011, '', 'Mauvais', '10,4', 0, ''),
(100, 'Against the dark (DVD)', 'Des vampires assoiffés de sang ont envahit la planète et sont à l''affût du moindre survivant. Tao, accompagné de son groupe d''ex-militaires, va organiser une mission suicide pour tenter d''éliminer ces vampires...', 92, 'images/againstthedark.jpg', 'octobre', 2009, '', 'Mauvais', '6,4', 0, ''),
(101, 'Battledogs (DVD)', 'L''armée américaine découvre qu''un virus de loup garou a été libéré. Alors que le Major Hoffman fait son possible pour trouver un antidote, le Général Monning veut quant à lui l''utiliser pour former un bataillon de supers soldats canins...', 93, 'images/battledogs.jpg', 'avril', 2014, '', 'Pas terrible', '7,4', 0, ''),
(102, 'Délivre-nous du mal', 'Un détective new yorkais enquête à la nuit tombée sur les loups et l''exorcisme...', 94, 'images/delivrenousdumal.jpg', 'bientot', 4000, 'Prevu pour juillet 2014', '--', '--', 0, ''),
(103, 'Le Cercle - The Ring', 'Lorsque sa nièce trouve la mort foudroyée par la peur une semaine après avoir visionné une mystérieuse cassette vidéo, Rachel Keller, une journaliste de Seattle, décide d''enquêter sur ce fameux enregistrement. Aidée de son ex-mari Noah, elle découvre que cette cassette est porteuse d''une étrange malédiction : quiconque la visionne est condamné à périr dans de terribles circonstances.\r\nRachel prend tout de même le risque de regarder l''enregistrement. Le téléphone sonne alors, le décompte mortel s''enclenche : la jeune femme ne dispose plus que de sept jours pour sauver sa vie et celle de son fils. Sept jours pour tenter de déjouer le sortilège du Cercle...', 95, 'images/lecerclethering.jpg', 'fevrier', 2003, 'Interdit aux moins de 12 ans', 'Bien', '14,2', 0, ''),
(104, 'Doom', 'Une chose terrible est arrivée à la station de recherche scientifique Olduvai, basée sur la planète Mars. Toutes les expériences se sont arrêtées, la communication ne passe plus. Les derniers messages reçus sont pour le moins angoissants. Le niveau 5 de quarantaine est déclaré et les seules personnes auxquelles l''accès est autorisé sont les membres du commando des Rapid Response Tactical Squad (RRTS). Mais sont-ils face à n''importe quel ennemi ?\r\nLes scientifiques de cette station de la planète rouge ont malencontreusement ouvert une porte dans laquelle se sont engouffrées toutes les créatures de l''enfer. Une armée de créatures de cauchemars d''origine inconnue est tapie derrière chaque recoin des innombrables pièces et couloirs de la base, tuant les quelques rares humains encore présents...', 96, 'images/doom.jpg', 'novembre', 2005, 'Interdit aux moins de 12 ans', 'Pas terrible', '10,4', 0, ''),
(105, 'La Cabane dans les bois', 'Cinq amis partent passer le week-end dans une cabane perdue au fond des bois. Ils n’ont aucune idée du cauchemar qui les y attend, ni de ce que cache vraiment la cabane dans les bois…\r\nSigné par deux maîtres de l’horreur, Joss Whedon et Drew Goddard, voici un film qui réinvente et repousse toutes les conventions du genre. Attendez-vous à découvrir un nouveau niveau de terreur…', 97, 'images/lacabanedanslesbois.jpg', 'mai', 2012, 'Interdit aux moins de 12 ans', 'Bien', '14,2', 0, ''),
(106, 'Nurse 3D', 'Une belle et dévouée infirmière possède une part cachée et obscure. La charmante femme va vite se changer en fée sanguinaire.', 98, 'images/nurse3d.jpg', 'bientot', 4000, '', '', '9,2', 0, ''),
(107, 'Oculus', 'Une femme tente d''innocenter son frère, accusé de meurtre, en démontrant que le crime est dû à un phénomène surnaturel.', 99, 'images/oculus.jpg', 'bientot', 4000, '', '--', '14', 0, ''),
(108, 'Skull (DVD)', 'Un sérial killer masqué et féru de technologie capture ses victimes pour leur faire subir les pires sévices. Il est prêt à tout pour imposer un nouveau mode de terreur et de destruction.', 100, 'images/skull.jpg', 'avril', 2014, '', 'Moyen', '10,2', 0, ''),
(109, 'The Green Inferno', 'Un groupe d''activistes new-yorkais se rend en Amazonie et tombe entre les mains d''une tribu particulièrement hostile.', 67, 'images/thegreeninferno.jpg', 'bientot', 4000, '', '--', '12,6', 0, ''),
(110, 'House Of Good And Evil', '', 53, 'images/inconnu.jpg', 'inconnue', 4000, '', 'Moyen', '10', 0, ''),
(111, 'L''emprise du mal (DVD)', 'Dans une tentative désespérée pour sauver son mariage, Raúl emmène sa femme Ana et son fils Nico fêter Noël dans un chalet isolé au cœur des montagnes.\r\nMais rapidement Samuel, un habitant du village voisin, s''immisce dans leur vie et se rapproche de plus en plus d''Ana et Nico.\r\nUn trouble s''empare de Raúl et des phénomènes étranges se succèdent, transformant ce havre de paix en véritable cauchemar...', 101, 'images/lemprisedumal.jpg', 'mai', 2014, '', 'Moyen', '10,2', 0, ''),
(112, 'Catacombes', 'Deux explorateurs partent à la recherche d''un trésor dans les catacombes de Paris.', 102, 'images/asabovesobelow.jpg', 'bientot', 4000, 'Prevu pour aout 2014', '--', '--', 0, ''),
(113, 'Jessabelle', 'Une jeune femme du nom de Jessie retourne en Louisiane dans la maison de son père après qu''un accident lui ait enlevé l''usage de ses jambes. Elle va devoir faire face à un fantôme en colère.', 103, 'images/jessabelle.jpg', 'bientot', 4000, '', '--', '--', 0, ''),
(114, 'The Wicker Man (DVD)', 'Le sergent Howie est chargé d''enquêter sur la disparition d''une petite fille sur une île isolée. Au cours de ses investigations, il découvre que la population locale se livre à d''étranges cérémonies d''un autre âge et que la jeune disparue a peut-être été victime d''un sacrifice humain...', 0, 'images/thewickerman.jpg', 'fevrier', 2008, 'Avertissement : des scènes, des propos ou des images peuvent heurter la sensibilité des spectateurs ', 'Mauvais', '7,2', 0, ''),
(115, 'Psychose', 'Marion Crane en a assez de ne pouvoir mener sa vie comme elle l''entend. Son travail ne la passionne plus, son amant ne peut l''épouser car il doit verser une énorme pension alimentaire le laissant sans le sou... Mais un beau jour, son patron lui demande de déposer 40 000 dollars à la banque. La tentation est trop grande, et Marion s''enfuit avec l''argent.\r\nTrès vite la panique commence à se faire sentir. Partagée entre l''angoisse de se faire prendre et l''excitation de mener une nouvelle vie, Marion roule vers une destination qu''elle n''atteindra jamais. La pluie est battante, la jeune femme s''arrête près d''un motel, tenu par un sympathique gérant nommé Norman Bates, mais qui doit supporter le caractère possessif de sa mère.\r\nAprès un copieux repas avec Norman, Marion prend toutes ses précautions afin de dissimuler l''argent. Pour se délasser de cette journée, elle prend une douche...', 104, 'images/psychose.jpg', 'novembre', 1960, 'Interdit aux moins de 12 ans', 'Excellent', '17,2', 0, ''),
(116, 'Battle Royale', 'Dans un avenir proche, les élèves de la classe B de 3ème du collège Shiroiwa ont été amenés sur une île déserte par une armée mystérieuse. Un adulte surgit tout à coup devant eux : leur ancien professeur Kitano. Il leur annonce qu''ils vont participer à un jeu de massacre dont la règle consiste à s''entretuer. Seul le dernier des survivants pourra regagner son foyer.\r\n\r\nKitano leur présente deux nouveaux élèves très inquiétants. Des coups de feu retentissent pour convaincre les incrédules. Selon la loi de réforme de l''éducation pour le nouveau siècle, ce sacrifice permettra de former des adultes sains.\r\n\r\nAbandonnés chacun à son sort avec de la nourriture et une arme, les adolescents disposent d''un délai de trois jours pour s''entretuer.', 105, 'images/battleroyale.jpg', 'novembre', 2001, 'Interdit aux moins de 16 ans ', 'Bien', '15,6', 0, ''),
(117, 'Infection (DVD)', 'Après une attaque terroriste, 6 amis étudiants vont devoir lutter pour survivre et fuir une ville devenue totalement hostile…', 106, 'images/infection.jpg', 'mai', 2014, '', 'Moyen', '7,8', 0, ''),
(119, 'Kill List', 'Meurtri dans sa chair et son esprit au cours d’une mission désastreuse à Kiev 8 mois plus tôt, Jay, ancien soldat devenu tueur à gages, se retrouve contraint d’accepter un contrat sous la pression de son partenaire Gal et de sa femme, Shen. Jay et Gal reçoivent de leur étrange nouveau client une liste de personnes à éliminer. À mesure qu’ils s’enfoncent dans l’univers sombre et inquiétant de leur mission, Jay recommence à perdre pied : peur et paranoïa le font plonger irrémédiablement au cœur des ténèbres.', 107, 'images/killlist.jpg\r\n', 'juillet', 2012, 'Interdit aux moins de 16 ans ', 'Pas Mal', '12,6', 0, ''),
(120, 'Code Red', '', 108, 'images/inconnu.jpg', 'inconnu', 4000, '', 'Moyen', '8,8', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

CREATE TABLE IF NOT EXISTS `formulaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `telephone` int(11) NOT NULL,
  `preferences` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

CREATE TABLE IF NOT EXISTS `realisateur` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `realisateur`
--

INSERT INTO `realisateur` (`id`, `prenom`, `nom`) VALUES
(0, 'Neil', 'LaBute'),
(1, 'kimberly', 'pierce'),
(2, 'tim', 'burton'),
(3, 'Henry', 'Selick'),
(4, 'John', 'McNaughton'),
(5, 'James', 'Wan'),
(6, 'James', 'DeMonaco'),
(7, 'Sebastian', 'Silva'),
(8, 'John', 'Luessenhop'),
(9, 'Rodney', 'Ascher'),
(10, 'Andres', 'Muschietti'),
(11, 'Jack', 'Arnold'),
(12, 'Roman', 'Polanski'),
(13, 'Ruben', 'Fleischer'),
(14, 'James', 'Whale'),
(15, 'David', 'Slade'),
(16, 'Ernest B.', 'Schoedsack'),
(17, 'Merian C.', 'Cooper'),
(18, 'Brian', 'De Palma'),
(19, 'Wes', 'Craven'),
(20, 'Stanley', 'Kubrick'),
(21, 'Albert', 'Lewin'),
(22, 'Stuart', 'Beattie'),
(23, 'Christopher', 'Landon'),
(24, 'Alex', 'De La Iglesia'),
(25, 'Scott', 'Wheeler\r\n'),
(26, 'Tobe', 'Hooper'),
(27, 'Kaare', 'Andrews'),
(28, 'Adam', 'Wingard'),
(29, 'Gregory', 'Plotkin'),
(30, 'Jim ', 'Mickle'),
(31, 'Vincenzo', 'Natali'),
(32, 'Matt', 'Orlando'),
(33, 'Matt', 'Bettinelli-Olpin'),
(34, 'David', 'Koepp\r\n'),
(35, 'John', 'Carpenter'),
(36, 'Roger', 'Christian'),
(37, 'kevin ', 'Carraway'),
(38, 'Christophe', 'Gans'),
(39, 'Marcus', 'Dunstan'),
(42, 'Louis', 'Morneau'),
(43, 'Jaume', 'Balagueró'),
(44, 'Marina', 'De Van'),
(45, 'Bobby', 'Boermans'),
(46, 'Randy', 'Moore'),
(47, 'jenifer', 'Kent'),
(48, 'Dean', 'Israelite'),
(49, 'Steve', 'Barker'),
(50, 'Frank', 'Henenlotter'),
(51, 'John', 'Lyde'),
(52, 'Anthony ', 'C. Ferrante'),
(53, 'inconnu', ''),
(54, 'Michael\r\n', 'J. Basset'),
(55, 'Andy', 'Fetscher'),
(56, 'Benjamin', 'Rocher'),
(57, 'Colin', 'Ferguson'),
(58, 'Kenneth', 'Branagh'),
(59, 'Ridley', 'Scott'),
(60, 'Tomas', 'Alfredson'),
(61, 'Robert', 'Heath'),
(62, 'Dario', 'Argento'),
(63, 'Kevin', 'King'),
(64, 'Ruairí ', 'Robinson'),
(65, 'Rob', 'Schmidt'),
(66, 'Jacob', 'Vaughan'),
(67, 'Eli', 'Roth'),
(68, 'Jonathan', 'Levine'),
(69, 'James', 'Cameron'),
(70, 'David', 'Cronenberg'),
(71, 'Matt', 'Jespersen'),
(72, 'Douglas', 'Schulze'),
(73, 'Josh', 'Trank'),
(74, 'Christopher', 'Smith'),
(75, 'Jeffery', 'Scott Lando'),
(76, 'William', 'Brent Bell'),
(77, 'John', 'Polson'),
(78, 'Tom', 'Six'),
(79, 'Quentin', 'Dupieux'),
(80, 'Mary', 'Harron'),
(81, 'Eric', 'England'),
(82, 'Julien', 'Maury'),
(83, 'Ryûhei ', 'Kitamura'),
(84, 'Alejandro', 'Amenábar'),
(85, 'Jaume', 'Collet-Serra'),
(86, 'Francis', 'Lawrence'),
(87, 'Adrián', 'García Bogliano'),
(88, 'Oliver ', 'Hirschbiegel'),
(89, 'Kim', 'Sung-Soo'),
(90, 'Francis', 'Ford Coppola'),
(91, 'Gonzalo', 'Lopez-Gallego'),
(92, 'Richard', 'Crudo'),
(93, 'Alexander', 'Yellen'),
(94, 'Scott', 'Derrickson'),
(95, 'Gore', 'Verbinski'),
(96, 'Andrzej', 'Bartkowiak'),
(97, 'Drew', 'Goddard'),
(98, 'Douglas', 'Aarniokoski'),
(99, 'Mike', 'Flanagan'),
(100, 'Robert', 'Hall (V)'),
(101, 'Miguel', 'Ángel Toledo'),
(102, 'John', 'Erick Dowdle'),
(103, 'Kevin', 'Greutert'),
(104, 'Alfred', 'Hitchcock'),
(105, 'Kinji', 'Fukasaku'),
(106, 'Christopher', 'Roosevelt'),
(107, 'Ben', 'Wheatley'),
(108, 'Valeri', 'Milev');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `prenom`, `nom`, `mail`, `mdp`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin'),
(2, '', 'jules', '', ''),
(3, 'loula', 'jules', 'admin@admin.com', 'mpo'),
(4, '', '', '', ''),
(5, 'basse', 'jules', 'jules@jules.com', 'bite'),
(6, 'prosper', 'xavier', 'xav@pros.fr', 'coucou');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`id_realisateur`) REFERENCES `realisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
