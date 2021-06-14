DELETE FROM articles;
INSERT INTO `articles` (`id`, `nom`, `plateforme`, `type`, `genre`, `description`, `pegi`, `editeur`, `developpeur`, `prix`, `image`) VALUES
(1, 'Call of Duty : Modern Warfare 2','playstation', 'ps3', 'guerre', 'Call of Duty : Modern Warfare 2 (ou simplement Modern Warfare 2) est un jeu de tir à la première personne développé par Infinity Ward, et édité par Activision. Il bénéficie d\'une sortie sur console PlayStation 3 (PS3) le 10 novembre 2009 ', '18', 'Activision', 'Infinity War', '4.99', '1.png'),
(2, 'Sekiro: Shadows Die Twice', 'playstation', 'ps4', 'action', 'Sekiro: Shadows Die Twice est un jeu vidéo d\'action-aventure développé par FromSoftware et édité par Activision, sorti le 22 mars 2019 sur Windows, PlayStation 4 et Xbox One. Le jeu se déroule dans un Japon médiéval-fantastique durant l\'époque Sengoku', '18', 'Activision', 'FromSoftware', '69.99', '2.png'),
(3, 'Resident Evil Village','playstation', 'ps5', 'horreur', 'Resident Evil Village utilise une perspective à la première personne. Il est situé dans un village roumain explorable. Le système de gestion des stocks est similaire à celui de Resident Evil 4, avec une mallette. Les joueurs peuvent acheter des armes et des objets auprès d\'un marchand, appelé le Duc.', '18', 'Capcom', 'Capcom', '69.99', '3.png'),
(4, 'Abonnement Playstation Plus : 12 mois','playstation', 'aboPlay',  'abo', 'PlayStation Plus est la seule façon d\'accéder au multijoueur en ligne sur PS4 et PS5. De plus, l\'abonnement PlayStation Plus inclut des jeux PS4 ou/et PS5 à télécharger chaque mois, des remises exclusives sur le PlayStation Store et 100 Go de stockage sur cloud pour vos sauvegardes.', '18', 'Sony', 'Sony', '49.99', '4.png'),
(5, 'Fable III', 'xbox', 'xbox360',  'action', 'Fable III est un jeu de rôle orienté action sur Xbox 360. Cinquante ans se sont écoulés depuis le deuxième opus. Le monde d\'Albion est devenu industrialisé et est maintenant régi par un impitoyable tyran. Le joueur choisit son héros au début de l\'aventure et doit faire en sorte de mener la révolution pour le renverser.', '16', 'Xbox Game Studios', 'Lionhead Studios', '17.99', '5.png'),
(6, 'Les Sims 4', 'xbox', 'xboxOne',  'gestion', 'Libérez votre imagination et créez un monde de Sims unique qui vous ressemble ! Explorez et personnalisez les moindres détails de vos Sims et de vos maisons, et bien plus encore. Choisissez l\'apparence, le comportement et le look de vos Sims, puis décidez de la manière dont ils vivront au quotidien. Concevez et construisez des maisons incroyables pour chaque famille, puis décorez-les avec vos meubles et objets préférés. Allez dans différents quartiers où vous pouvez rencontrer d\'autres Sims et en savoir plus à leur sujet. Découvrez de magnifiques endroits avec des environnements distinctifs et vivez des aventures spontanées. Gérez les hauts et les bas du quotidien de vos Sims, et découvrez ce qui se passe lorsque vous recréez des scénarios de votre propre vie réelle ! Racontez vos histoires à votre manière en développant des relations, en menant des carrières et en réalisant des aspirations à long terme, et plongez dans ce jeu extraordinaire où les possibilités sont illimitées.', '7', 'Electronic Arts', 'The Sims Studio', '11.99', '6.png'),
(7, 'Assassins Creed VALHALLA','xbox', 'xboxSeriesX',  'action', 'Assassin\'s Creed Valhalla prend place à la fin du IX e siècle dans le cadre des raids vikings en Angleterre. Le joueur incarne Eivor, un viking qui mène ses camarades de Norvège dans des raids et des combats contre le roi Alfred le Grand et les quatre royaumes anglo-saxons : Wessex, Northumbrie, Est-Anglie et Mercie.', '18', 'Ubisoft', 'Ubisoft Montréal', '69.99', '7.png'),
(8, 'Abonnement Xbox Live','xbox', 'aboXbox',  'abo', "L\'abonnement Xbox Live est la seule façon d\'accéder au multijoueur en ligne sur Xbox. De plus, l\'abonnement Xbox Live inclut des jeux Xbox One ou/et Xbox Series X à télécharger chaque mois, des remises exclusives sur le Xbox Store et 100 Go de stockage sur cloud pour vos sauvegardes.", '18', 'Microsoft', 'Microsoft', '44.99', '8.png'),
(9, 'Mario Kart 7','nintendo', 'nintendo3DS',  'course', 'Comme les autres jeux de la série, Mario Kart 7 met en scène les principaux personnages de l\'univers de Mario et les oppose dans des courses de karting disputées à huit joueurs sur des circuits situés pour la plupart dans les différents lieux du monde de Mario. C\'est le premier jeu de la série dont les circuits contiennent des sections aériennes et sous-marines, et dans lequel le joueur peut personnaliser son kart. Le jeu utilise également la fonction 3D stéréoscopique de la Nintendo 3DS.', '3', 'Nintendo', 'Retro Studio', '8.99', '9.png'),
(10, 'The Legend of Zelda: Breath of the Wild','nintendo', 'nintendoSwitch',  'aventure', 'Entrez dans un monde de découverte, d\'exploration et d\'aventure dans The Legend of Zelda: Breath of the Wild, un nouveau jeu révolutionnaire de la célèbre série. Voyagez à travers de vastes champs, à travers les forêts et jusqu\'aux sommets des montagnes en découvrant ce qu\'est devenu le royaume d\'Hyrule dans cette étonnante aventure en plein air.', '12', 'Nintendo', 'Nintendo Entertainment Planning & Development', '54.99', '10.png'),
(11, 'Nintendo Switch Online : 12 Mois','nintendo', 'aboNintendo',  'abo', 'Le Nintendo Switch Online est la seule façon d\'accéder au multijoueur en ligne sur la Switch. De plus, l\'abonnement des jeux Nintendo Switch à télécharger chaque mois, des remises exclusives sur le Nintendo Store et de la capacité de  stockage sur pour vos sauvegardes.', '18', 'Nintendo', 'Nintendo', '19.99', '11.png'),
(12, 'Moto GP21','pc', 'Steam',  'sport', 'Vivez l\'intégrale de la saison 2021 avec les catégories MotoGP™, Moto2™, Moto3™. ... Vivez une expérience de course à deux-roues authentique et immersive avec plus de 120 pilotes officiels, plus de 20 circuits et de nouvelles fonctionnalités améliorées qui ajouteront un degré de réalisme encore jamais atteint.', '3', 'MilesStone', 'MilesStone', '24.99', '12.png'),
(13, 'Far Cry 6','pc', 'EpicGames',  'action', 'Far Cry 6 est un jeu de tir à la première personne d\'action-aventure. Le gameplay suit les précédents jeux Far Cry, avec des joueurs utilisant des armes de fortune, des véhicules et embauchant Amigos, le nouveau système \"Fangs for Hire\", pour renverser le régime tyrannique.', '18', 'Ubisoft', 'Ubisoft Toronto', '69.99', '13.png');

DELETE FROM utilisateurs;
INSERT INTO `utilisateurs` (`id`, `etat`, `nom`, `prenom`, `mail`, `mdp`, `date_naissance`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', 'Admin1234', '2000-01-01'),
(2, 'client', 'client', 'client', 'client@gmail.com', 'Client1234', '2000-01-01');

DELETE FROM commandes;
INSERT INTO `commandes` (`id`, `utilisateurs`, `date_commande`) VALUES
(1, '2', '2021-06-14');

DELETE FROM lignes_commandes;
INSERT INTO `lignes_commandes` (`id`, `commandes`, `articles`, `quantité`, `prix_facture`, `type_paiement`) VALUES
(1, '1', '1', '2', '9.98', 'VISA'),
(2, '1', '6', '1', '11.99', 'VISA'),
(3, '1', '9', '5', '44.95', 'VISA');


