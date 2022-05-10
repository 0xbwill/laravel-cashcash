INSERT INTO `users` (`id`, `name`, `surname`, `isTechnicien`, `email`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `qualification`, `adresse`, `dateObtention`, `dateEmbauche`, `numeroAgence`, `remember_token`, `email_verified_at`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'William', 'DEGHESELLE', 1, '0xbwill@gmail.com', '$2y$10$HAldnBjcEWfJ/GfSrS/Fgu4OSIh3HzmTNljDmXAwMewSbBCv3Vf66', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-04-05 03:23:52', '2022-04-05 03:23:52'),
(2, 'nico', 'VANDAMME', 1, 'nico@gmail.com', '$2y$10$Q7rLUxVu9y17KTrDGMBy.e7ao/uIj.gRGsmEo1SxhDMYwjlKyYcBK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, '2022-04-05 03:24:33', '2022-04-05 03:24:33'),
(3, 'Rachad', 'RACHEDI', 1, 'rachad@gmail.com', '$2y$10$UMewrB25n.4Tx7BgW7PuruujFkeR5uK5GNCTwcT0PsmyMT1IPYALi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, '2022-04-05 05:54:14', '2022-04-05 05:54:14'),
(4, 'Admin', 'Admin', 1, 'admin@gmail.com', '$2y$10$UMewrB25n.4Tx7BgW7PuruujFkeR5uK5GNCTwcT0PsmyMT1IPYALi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, '2022-04-05 05:54:14', '2022-04-05 05:54:14'),
(5, 'Hugo', 'NORMAND', 1, 'hugo@gmail.com', '$2y$10$nAGdn.B7IYppv.ATLagc3OacQcEKZpOXRS6ZuozS/PzFOdrF50qje', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, '2022-04-05 03:25:41', '2022-04-05 03:25:41'),
(6, 'Pereira', 'RIOU', NULL, 'gestionnaire@gmail.com', '$2y$10$oJEYNpB46uCTFnBEulK8zuec5rMsRiI0w63/Masa1s/J2Q.B0CwSa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-04-05 11:06:16', '2022-04-05 11:06:16'),
(7, 'Bryson', 'BERTHA', NULL, 'Bryson@gmail.com', '$2y$10$bcaQTeT8y.jSw29ZzqwmNuhP2/95NSz88DPgn27Tv5PzI.TVn6xZG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, '2022-04-05 11:06:35', '2022-04-05 11:06:35'),
(8, 'Reed', 'MARIA', NULL, 'Reed@gmail.com', '$2y$10$Br.NYt7IuKPyHOCQC.K7heKURTabwkOMCcSVeDcrQafjytWsSWCBW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, '2022-04-05 11:06:50', '2022-04-05 11:06:50'),
(9, 'Sanches', 'JACKIE', NULL, 'Sanches@gmail.com', '$2y$10$UGIHEgfIXiEJ4VO0pbfTuOZXHGR5/4fix9tBvcRATSXYoqLWEkXgK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, '2022-04-05 11:07:05', '2022-04-05 11:07:05'),
(10, 'Mathéo', 'CORREIA', NULL, 'matheo@gmail.com', '$2y$10$TIUshnQ4kCeoY.ZxYV2x6O6ogUClAfknvFeKNGOD2fy5cxhfGboAO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, '2022-04-05 03:26:05', '2022-04-05 03:26:05');


INSERT INTO `agences` (`numeroAgence`, `nomAgence`, `adresseAgence`, `telephoneAgence`) VALUES
(1, 'Commeungrand', '3 Rue du Jardin', 617254201),
(2, 'Clippers', '54 rue du Clippers', 656987452),
(3, 'Atlanta', '36 rue de l\'atlanta', 658412598),
(4, 'Milwaulkee', '38 rue du bucks', 654897521);

INSERT INTO `clients` (`numeroClient`, `nom`, `prenom`, `email`, `adresse`, `tel`, `siren`, `numeroAgence`, `codeAPE`, `raisonSociale`, `dureeDeplacement`, `distanceKm`) VALUES
(1, 'Herbaut', 'Thibault', 'user@gmail.com', 'Rue de la Gloire, 12000', '06 54 89 25 45', '34343', 1, 452332, 'Etudiant', '01:00:00', 20 ),
(2, 'Normand', 'Hugo', 'user@gmail.com', 'Rue du Maréchal, 15000', '06 54 89 25 45', '34343', 1, 423235, 'Etudiant', '01:00:00', 30),
(3, 'Correia', 'Matéo', 'user@gmail.com', 'Rue des Avenants, 62000', '06 54 89 52 15', '34343', 2, 423235, 'Etudiant', '01:00:00', 20 ),
(4, 'Vierlot', 'Pierre', 'user@gmail.com', 'Rue des Compiennes, 59000', '06 54 89 21 35', '34343', 2, 423235, 'Etudiant', '01:00:00', 10 ),
(5, 'Taheb', 'Jacques', 'user@gmail.com', 'Rue du Lengley, 58000', '06 54 12 89 75', '34343', 3, 423235, 'Etudiant', '01:00:00', 30 ),
(6, 'Watts', 'Allan', 'user@gmail.com', 'Rue du Firmament, 91000', '06 98 75 21 45', '34343', 3, 423235, 'Etudiant', '01:00:00', 5 ),
(7, 'Huges', 'Dick', 'user@gmail.com', 'Avenue de la Gloire, 59000', '06 58 91 25 45', '34343', 4, 423235, 'Etudiant', '01:00:00', 10),
(8, 'Jack', 'Poudlard', 'user@gmail.com', 'Avenue de la Liberté, 59000', '06 58 91 25 45', '34343', 4, 423235, 'Etudiant', '01:00:00', 10);

INSERT INTO `contrat_de_maintenance` (`numeroDeContrat`, `dateDeSignature`, `dateEcheance`, `numeroClient`, `refTypeContrat`) VALUES
(1, '2021-11-03', '2022-11-03', 1, 1),
(2, '2021-08-01', '2022-08-01', 2, 2),
(3, '2021-09-29', '2022-09-29', 3, 3),
(4, '2021-05-28', '2022-05-28', 4, 3),
(5, '2021-03-27', '2022-03-27', 5, 2),
(6, '2021-02-26', '2022-02-26', 6, 2),
(7, '2021-01-25', '2022-01-25', 7, 3);

INSERT INTO `controler` (`numeroIntervenant`, `numeroDeSerie`, `numeroClient` ,`tempsPasse`, `commentaire`) VALUES
(1, 2000, '3', '02:00:00', 'okay'),
(2, 2001, '2', '02:00:00', 'good'),
(3, 2004, '2', '03:00:00', 'okay'),
(4, 2004, '2', '04:00:00', 'good'),
(5, 2003, '2', '03:00:00', 'okay');

INSERT INTO `intervention` (`id`, `dateVisite`, `heureVisite`, `numeroClient`, `numeroIntervenant`, `tel`) VALUES
(1, '2021-11-22', '01:00:00', 1, 1, '06 54 89 24 51'),
(2, '2021-11-23', '01:00:00', 1, 1, '06 54 89 24 51'),
(3, '2021-11-24', '03:00:00', 2, 2, '06 54 89 24 51'),
(4, '2021-11-25', '01:00:00', 2, 2, '06 54 89 24 51'),
(5, '2021-11-23', '02:00:00', 3, 3, '06 54 89 24 51'),
(6, '2021-11-23', '02:00:00', 3, 3, '06 54 89 24 51'),
(7, '2021-11-23', '02:00:00', 4, 4, '06 54 89 24 51'),
(8, '2021-11-23', '02:00:00', 4, 4, '06 54 89 24 51'),
(9, '2021-11-23', '02:00:00', 5, 5, '06 54 89 24 51'),
(10, '2021-11-23', '02:00:00', 5, 5, '06 54 89 24 51');

INSERT INTO `materiel` (`numeroDeSerie`, `dateDeVente`, `dateInstallation`, `prixVente`, `emplacement`, `refInterne`, `numeroClient`, `numeroContrat`) VALUES
(2000, '2021-11-28', '2021-12-01', 60, 'cuisine', 1, 8, 1),
(2001, '2021-10-27', '2021-10-30', 130, 'cuisine', 2, 7, 2),
(2003, '2021-07-04', '2021-07-07', 45, 'salon', 3, 6, 3),
(2004, '2021-06-13', '2021-06-16', 156, 'cuisine', 2, 5, 4);
(2000, '2021-02-01', '2021-02-04', 60, 'cuisine', 1, 5, 5),
(2001, '2021-05-23', '2021-05-26', 130, 'cuisine', 2, 3, 6),
(2003, '2021-09-08', '2021-09-11', 45, 'salon', 3, 2, 7),
(2004, '2021-01-09', '2021-09-12', 156, 'cuisine', 2, 1, 8);

INSERT INTO `type_contrat` (`refTypeContrat`, `detailIntervention`, `tauxApplicable`) VALUES
(1, '2021-11-03', 0.15),
(2, '2021-11-02', 0.2),
(3, '2021-11-01', 0.1);