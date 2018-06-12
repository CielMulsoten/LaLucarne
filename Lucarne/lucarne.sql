-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 11 juin 2018 à 10:06
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lucarne`
--

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

CREATE TABLE `author` (
  `name` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `author`
--

INSERT INTO `author` (`name`, `firstname`, `description`, `id_book`, `id_author`) VALUES
('Escouteloup', 'Céline', 'Céline Escouteloup est l’auteur de trois recueils de poésie dont Le soleil\r\ndans la bouche et Debout dans tes yeux (Unicité).\r\nMélomane, pratiquant la danse orientale, passionnée d’arts visuels et de\r\nphotographie, elle s’oriente vers d’autres formes d’écrits et collaborations\r\nartistiques, d’où elle tire en partie ses inspirations, tout comme des\r\nrencontres et voyages.\r\nJean-Luc Favre a grandi à Montréal, vécu à Londres et s’est établi à Paris\r\noù il travaille dans la mode, le stylisme, la photographie. Avec ce livre, il\r\napprivoise la lumière pour composer des images, presque des portraits,\r\nnourris par les textes de Céline Escouteloup.\r\n', 1, 1),
('Desbois', 'Sylvia', 'Sylvia Desbois, élève de Rosella Hightower, a aussi enseigné la danse et a\r\ndéployé dans ses spectacles un univers chorégraphique chargé d’émotion qui\r\nenthousiasme notre imaginaire et où sa vision du monde dans des mises en\r\nespace audacieuses d’une douce intensité dramatique interroge ce lien entre\r\ncorps, son et langue.\r\nElle a décidé de poursuivre cette pratique d’écriture avec les mots seuls,\r\nvibrations de suggestions puissantes et bouleversantes, prolongeant avec\r\ncette longue litanie de roses la plongée dans une dimension où le rythme\r\norganise la pensée et déroule une mythologie personnelle. D’Ellirval', 2, 2),
('Varejka — Arak ', 'Pascal — Martine-Annabelle ', 'Né à Paris, Pascal Varejka a parcouru en tous sens sa ville de prédilection depuis\r\nprès d’un demi-siècle et vit dans le 19e depuis 1988. Historien, traducteur,\r\njournaliste, il a publié depuis 1995 une douzaine de livres sur Paris,\r\ndont le guide 10 promenades pour découvrir Paris, paru en français et en anglais\r\nen 2016 mais aussi Paris, mythes et légendes, Rues historiques de Paris ou Paris\r\nau Moyen Age.\r\n\r\nMartine Annabelle Arak est consultante Feng Shui après une carrière dans la\r\nfonction publique, Le Feng Shui lui a appris à aller au-delà des apparences et lui\r\nconfère un regard et une sensibilité particulière sur l’environnement. Elle habite le\r\n19ème depuis sa naissance, y a grandi et construit sa vie. Elle est allée à la rencontre des habitants pour recueillir leurs sentiments et l’âme de l’arrondissement.', 3, 3),
('Chocron', 'Daniel', 'Daniel Chocron est historien du\r\ncinéma, conférencier et biographe\r\n(Alice Guy, Jacques Prévert), auteur\r\nde spectacles liés à la chanson,\r\nla musique et au cinéma, intervenant\r\nrégulier au Salon du livre de\r\nl’Inde et au Salon d’automne international.', 4, 4),
('al-Masri', 'Maram', 'Maram al-Masri, chantre de l\'amour et de la liberté, est une grande poète internationale, traduite dans le monde entier. A travers ses poèmes, elle exprime aussi ses combats féministes comme sa vision pacifiste du monde, \r\n\r\nDaniel Duhamel Arrapel est un artiste du fantastique animalier, exprimant une vision onirique, parfois étrange, d\'ici et d\'ailleurs.\r\n', 5, 5),
('Planche', 'Jean-Luc', 'Ancien concepteur-rédacteur en publicité, Jean-Luc Planche est aujourd’hui photographe et auteur de livres au gré des voyages qu’il effectue dès qu’il trouve un peu de temps libre, avec déjà deux tours du monde à son actif et une passion grandissante pour le Japon et la Russie. Curieux et enthousiaste, tous les sujets (ou presque) l’intéressent du moment qu’ils prennent une trajectoire buissonnière. ', 6, 6),
('Le Divenah', ' Patrick', 'Bigame aussi amoureux du mot que de l’image, Patrick Le Divenah associe souvent les deux dans ses créations littéraires et plasticiennes. Publié dans de nombreuses revues et chez plusieurs éditeurs, c’est la poésie qui est son domaine privilégié, mais on peut lire aussi ses nouvelles où l’étrange, le bizarre, le paradoxal et la satire se donnent libre cours. C’est également cet univers qu’on retrouve dans ses œuvres graphiques', 7, 7),
('Allais', 'Alphonse', 'Guitariste de jazz, créatif et créateur de photo-démontages, dessinateur de patates malencontreuses, parolier de chansons définitivement inconnues, membre de l’Académie Alphonse Allais, ministre des Plaisirs associés, fondateur de la philosophie « évitiste », Grégoire Lacroix nous dévoile ses pensées teintées d’un humour nonchalant.', 8, 8),
('Malherbe', 'Didier', 'Didier Malherbe s\'est fait connaître internationalement au saxophone dans les années 1970 avec le mythique Gong, puis avec le groupe Hadouk au doudouk et flûtes du monde. Egalement sonnettiste, il est l\'auteur de L\'anche des métamorphoses.', 9, 9);

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `id_book` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `gender` enum('Poesie','Humour','Paris','Cinema','Conte') NOT NULL,
  `picture` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id_book`, `title`, `author`, `description`, `price`, `gender`, `picture`, `active`) VALUES
(1, 'Impromptus de bord de piscine', 'Céline Escouteloup', 'Voici un corps féminin, point de liaison évident entre le « moi »,\r\nses paysages intérieurs, et une piscine d’été pour environnement\r\nextérieur.\r\nUn cadre inattendu d’exercice poétique pour un retour humoristique\r\nà la « nature », une nature artificielle.\r\nLaisser son corps à l’eau, son esprit à l’instant : une recherche et une\r\npratique que l’être humain n’a cessé de suivre. En voilà une\r\nretranscription contemporaine, singulière.\r\nCet ouvrage est une invitation à la légèreté, à la lumière dans une\r\natmosphère méditerranéenne de soleil, d’oiseaux et d’eau chlorée.\r\nC’est une ode à la fraîcheur, à la spontanéité, dans une rêverie bien\r\nréelle aux accents orientaux et japonais.\r\nIl s’agit d’un travail quasiment performatif où le corps, le visage de\r\nl’auteure elle-même deviennent les supports de l’expression\r\nphotographique des états, des observations, des sensations intimes.\r\nOn peut ainsi contempler et examiner, au travers des regards\r\ncomplémentaires et croisés de la poète et du photographe,\r\ndifférents fragments, facettes, pulsations d’une expérience si\r\nparticulière, pourtant si connu de tous : la baignade.\r\nUn dialogue sensuel entre les poèmes de Céline Escouteloup et les\r\nimages de Jean-Luc Favre. ', 19.9, 'Poesie', '', 0),
(2, 'R de Rose ', 'Sylvia Desbois ', 'Tout le long d\'une ronde de mots et de roses, Sylvia Desbois effeuille sa\r\nlitanie de fleurs, renouvelant de belle manière un thème antique et\r\npoétique.\r\nRose, couleur de la paix, fleur des possibles. La couleur, lorsqu’elle\r\ns’associe à une fleur ou à de hautes aspirations, suscite parfois une vive\r\némotion.\r\nLe Rose a choisi Sylvia la Fleur des bois pour établir un nouveau pacte\r\nfloral. Au pays de la Rose, l’Amour est Roi, et la Paix demeure à jamais\r\nsa tendre épousée….\r\nSylvia Desbois nous surprend par ses associations d\'images pour nous\r\nentrainer dans sa danse verbale et dresser avec nous, au fil des pages,\r\nune pyramide de roses multicolores. Un triangle hypnotique.', 14.9, 'Poesie', '', 0),
(3, 'C’est l’histoire du 19e arrondissement de Paris', 'Pascal Varejka — Martine-Annabelle Arak ', 'Raconter Paris et plus particulièrement un arrondissement de Paris, c’est\r\nraconter une ville dans la Ville.\r\nRaconter le 19e\r\n, c’est parcourir un espace longtemps industriel et ouvrier,\r\nau service de Paris : viande, sucre, eau, éclairage, imprimerie, cinéma\r\nou télévision, cela jusqu’au début des années 70.\r\nAujourd’hui, cet arrondissement est voué à la culture musicale ou théâtrale,\r\nà l’apprentissage, aux loisirs, à la science, tout en restant populaire ; un\r\nmusée permanent à ciel ouvert de l’architecture contemporaine, mais\r\naussi le lieu le plus vert de Paris avec ses parcs, ses jardins partagés.\r\nDes quartiers solidaires et résistants, passages des migrations et de\r\nl’histoire. Quartiers de canaux et de ponts, de péniches et de passerelles,\r\nd’avenues et de chemins de traverses, de tours et de squares,\r\nleur diversité reflète les cultures du monde entier à travers leurs cuisines,\r\nleurs marchés ou leurs bazars.\r\nParis reste Paris grâce à ses périphéries : le 19e en est un bel exemple.\r\nPartageant leur ressenti et leur savoir, les deux auteurs, habitant avec leur\r\nfamille le 19e depuis trois générations, nous accompagnent dans ce voyage\r\nau bout de Paris', 19.9, 'Poesie', '', 0),
(4, 'KENJI MIZOGUCHI, POUR L’AMOUR DES FEMMES', 'Daniel Chocron', 'Soixante ans après la disparition de Kenji\r\nMizoguchi (1898-1956), Daniel Chocron rend\r\nhommage à l’oeuvre et à la vie du génial\r\ncinéaste japonais aux 89 films, découvert en\r\nFrance à la fin de sa carrière au cours des\r\nannées 50, avec La vie d’O’Haru, femme galante\r\net Les contes de la lune vague après\r\nla pluie. Dévoilant le mystère de la création\r\ndu cinéaste, l’auteur analyse son approche\r\nde la mise en scène et de la direction d’actrices,\r\nainsi que son lien fort avec les traditions\r\nculturelles de son pays, mais aussi de la\r\nlittérature occidentale. Avant tout, Mizoguchi\r\nnous interroge sur la condition de la femme\r\nà travers la société japonaise et à travers\r\nles siècles. En dépit de la censure militaire et\r\nla deuxième guerre mondiale, il développa\r\nun cinéma humaniste et progressiste, voué à\r\nl’amour des femmes. Daniel Chocron nous livre\r\nune autre vision du septième art au contact\r\nde cet artiste universel.', 19.9, 'Poesie', '', 0),
(5, 'La femme à la valise rouge ', 'Maram al-Masri ', 'Une femme qui voyage avec sa valise, quoi de plus normal ? \r\nMais la valise en a assez de toujours voyager et d\'être maltraitée... Un dialogue alors s\'engage entre la poète et sa valise rouge, à la fois drôle et émouvant. \r\n\r\nLes grands thèmes de l\'existence, de l\'exil, à travers la vie quotidienne, rend cette fable des temps modernes universelle. \r\n\r\nAccompagné des dessins poétiques de Daniel Duhamel Arrapel, ce premier conte de Maram al-Masri nous emporte dans son humanité réaliste, au-delà des montagnes et des océans.\r\n', 14.9, 'Poesie', '', 0),
(6, 'Je n’aime pas qu’on ne m’aime plus', 'Jean-Luc Planche', 'Jean-Luc Planche dans Je n’aime pas qu’on ne m’aime plus s’interroge et nous interroge à travers ses phrases poil-à-gratter mise en scène et en jeu par une typographie savante et amusante. «Quelle est la température exacte du bonheur ? » nous somme-t-il sur la 4e de couverture, « Il faut savoir se contenter de peu comme de beaucoup », nous répète-t-il à satiété, ou encore « Je suis athée, dieu merci ! », un amusant mot d’ordre, ou bien le sensuel « Tourner sept fois… ma langue… dans ta bouche ». La mise en page transforme ces phrases en un calligramme ou un logogramme  bousculant nos habitudes de lire pour notre plus grand plaisir.\r\n', 14.9, 'Poesie', '', 0),
(7, 'Pensées sauvages', 'Patrick Le Divenah ', '« Non, les mots n’ont pas de sens… interdit ! »\r\nC’est ce que clament ces « Pensées sauvages », où l’humour des dessins fait écho à celui des aphorismes. Des aphorismes ? Plutôt des pensées, tout juste surgies, des émotions encore vibrantes, des jeux sonores  et visuels, jaillis spontanément. Pas si gratuits qu’il n’y paraît, ils nous éclaboussent de leur révolte, de leur humour, ou des deux à la fois. Mais il arrive qu’au détour d’une page, un chant de sérénité offre son apaisement, ou son trouble bienfaisant.\r\nOn ne sort pas indemne d’une telle aventure où le paradoxe, omniprésent, déroute nos certitudes. Cure salutaire, qui mériterait d’être remboursée par l’InSécurité sociale.\r\n', 19.9, 'Poesie', '', 0),
(8, 'Les Patates Parlantes', 'Grégoire Lacroix', '« Tu crois que ça peut parler les patates ? » nous questionne la couverture des Patates Parlantes. Peut-être bien ? Alors ouvrons vite ce recueil insolite de Grégoire Lacroix où deux gueules de personnages nous livrent tout du long leurs pensées paradoxales, tendres, étonnées, lunaires mais toujours rigolotes sous forme de dialogue. « La principale différence entre l’homme et la femme… », nous dit la première patate, «  … c’est la femme ! », nous dit la seconde. « Je suis très fidèle à moi-même… », affirme la première, « …Je ne me trompe jamais. » conclut la seconde. \r\nOu encore : « Un eunuque décapité… », nous dit  l’une, « ça n’a ni queue ni tête ! », nous dit l’autre. « Grâce au lecteur de code-barres… », «…on va enfin savoir ce que coûte un zèbre ! ». Ainsi de suite dans une sarabande menée par Grégoire Lacroix qui  nous plonge dans la joie de ces mots d’esprit dessinés.\r\n\r\n', 14.9, 'Poesie', '', 0),
(9, 'Escapade en Facilie', 'Didier Malherbe ', 'Escapade en Facilie parcourt en 120 sonnets les multiples faces du facile, au sens de naturel, allant de soi, coulant de source, éphémère et ludique, tel un tourbillon de toupie musicale.\r\n\r\nPourquoi avoir voulu écrire un recueil de sonnets ?\r\n« J’ai écrit mon premier sonnet à 17 ans. La forme m’a toujours intéressé, c’est un véritable microcosme, une forme courte qui ressemble à un petit monde.  J’aime également l’idée de penser le sonnet comme une toupie : tous deux ne tiennent que sur la pointe, le dernier vers. » \r\nPourquoi intituler votre livre “Escapade en Facilie” ?\r\n« “Facile” renvoie à la fois au laudatif et au péjoratif. J’aime cette ambivalence des sens, j’interroge l’ambiguïté tout au long de ce recueil, qui m’a demandé trois années de travail. Je rejoins Voltaire en quelque sorte. Tout ce qui est élégant a l’air facile, mais l’inverse n’est pas vrai. »\r\n', 14, 'Poesie', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `donation`
--

CREATE TABLE `donation` (
  `id_donation` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `id_book` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `type` enum('atelier','exposition','soiree','') NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pre_order`
--

CREATE TABLE `pre_order` (
  `id_pre_order` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `id_author` int(11) NOT NULL,
  `release_date` date NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `birth` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `name`, `firstname`, `birth`, `type`, `email`) VALUES
(1, 'Armel', 'louis', '1963-07-22', 'Administrateur', 'lalucarnedesecrivains@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id_author`),
  ADD KEY `id_livre` (`id_book`);

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`);

--
-- Index pour la table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id_donation`),
  ADD KEY `id_livre` (`id_book`),
  ADD KEY `id_client` (`id_users`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`),
  ADD KEY `id_client` (`id_users`);

--
-- Index pour la table `pre_order`
--
ALTER TABLE `pre_order`
  ADD PRIMARY KEY (`id_pre_order`),
  ADD KEY `id_book` (`id_book`),
  ADD KEY `id_author` (`id_author`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `author`
--
ALTER TABLE `author`
  MODIFY `id_author` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pre_order`
--
ALTER TABLE `pre_order`
  MODIFY `id_pre_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `author`
--
ALTER TABLE `author`
  ADD CONSTRAINT `author_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `book` (`id_book`);

--
-- Contraintes pour la table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `book` (`id_book`),
  ADD CONSTRAINT `donation_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
