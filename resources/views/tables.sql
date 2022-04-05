INSERT INTO `users` (`id`, `name`, `surname`, `isTechnicien`, `email`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `qualification`, `adresse`, `dateObtention`, `dateEmbauche`, `numeroAgence`, `remember_token`, `email_verified_at`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'William', 'DEGHESELLE', 1, '0xbwill@gmail.com', '$2y$10$HAldnBjcEWfJ/GfSrS/Fgu4OSIh3HzmTNljDmXAwMewSbBCv3Vf66', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-04-05 03:23:52', '2022-04-05 03:23:52'),
(2, 'nico', 'VANDAMME', 1, 'nico@gmail.com', '$2y$10$Q7rLUxVu9y17KTrDGMBy.e7ao/uIj.gRGsmEo1SxhDMYwjlKyYcBK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-04-05 03:24:33', '2022-04-05 03:24:33'),
(3, 'Rachad', 'RACHEDI', 1, 'rachad@gmail.com', '$2y$10$UMewrB25n.4Tx7BgW7PuruujFkeR5uK5GNCTwcT0PsmyMT1IPYALi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-04-05 05:54:14', '2022-04-05 05:54:14'),
(4, 'Hugo', 'NORMAND', NULL, 'hugo@gmail.com', '$2y$10$nAGdn.B7IYppv.ATLagc3OacQcEKZpOXRS6ZuozS/PzFOdrF50qje', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-04-05 03:25:41', '2022-04-05 03:25:41'),
(5, 'Mathéo', 'CORREIA', NULL, 'matheo@gmail.com', '$2y$10$TIUshnQ4kCeoY.ZxYV2x6O6ogUClAfknvFeKNGOD2fy5cxhfGboAO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, '2022-04-05 03:26:05', '2022-04-05 03:26:05'),
(6, 'Pereira', 'RIOU', 1, 'Pereira@gmail.com', '$2y$10$oJEYNpB46uCTFnBEulK8zuec5rMsRiI0w63/Masa1s/J2Q.B0CwSa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, '2022-04-05 11:06:16', '2022-04-05 11:06:16'),
(7, 'Bryson', 'BERTHA', 1, 'Bryson@gmail.com', '$2y$10$bcaQTeT8y.jSw29ZzqwmNuhP2/95NSz88DPgn27Tv5PzI.TVn6xZG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, '2022-04-05 11:06:35', '2022-04-05 11:06:35'),
(8, 'Reed', 'MARIA', 1, 'Reed@gmail.com', '$2y$10$Br.NYt7IuKPyHOCQC.K7heKURTabwkOMCcSVeDcrQafjytWsSWCBW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, '2022-04-05 11:06:50', '2022-04-05 11:06:50'),
(9, 'Sanches', 'JACKIE', 1, 'Sanches@gmail.com', '$2y$10$UGIHEgfIXiEJ4VO0pbfTuOZXHGR5/4fix9tBvcRATSXYoqLWEkXgK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, '2022-04-05 11:07:05', '2022-04-05 11:07:05');


INSERT INTO `agences` (`numeroAgence`, `nomAgence`, `adresseAgence`, `telephoneAgence`) VALUES
(1, 'Commeungrand', '3 Rue du Jardin', 617254201),
(2, 'Clippers', '54 rue du Clippers', 656987452),
(3, 'Atlanta', '36 rue de l\'atlanta', 658412598),
(4, 'Milwaulkee', '38 rue du bucks', 654897521);

INSERT INTO `clients` (`numeroClient`, `nom`, `prenom`, `email`, `adresse`, `tel`, `siren`, `numeroAgence`, `codeAPE`, `raisonSociale`, `dureeDeplacement`, `distanceKm`) VALUES
(1, 'Herbaut', 'Utilisateur', 'user@gmail.com', 'Rue de la Gloire', '654892545', '34343', 3, 452332, 'Etudiant', '01:00:00', 20 ),
(2, 'Normand', 'Utilisateur', 'user@gmail.com', 'rue du Marechal', '6 54 89 25 45', '34343', 2, 423235, 'Etudiant', '01:00:00', 30),
(3, 'Correia', 'Utilisateur', 'user@gmail.com', 'rue du calbart', '654895215', '34343', 4, 423235, 'Etudiant', '01:00:00', 20 ),
(4, 'Vierlot', 'Utilisateur', 'user@gmail.com', 'rue du marco', '654892135', '34343', 1, 423235, 'Etudiant', '01:00:00', 10 ),
(5, 'Taheb', 'Utilisateur', 'user@gmail.com', 'rue du lengley', '654128975', '34343', 2, 423235, 'Etudiant', '01:00:00', 30 ),
(6, 'Watts', 'Utilisateur', 'user@gmail.com', 'rue du rocnard', '698752145', '34343', 4, 423235, 'Etudiant', '01:00:00', 5 ),
(7, 'Huges', 'Utilisateur', 'user@gmail.com', 'rue du poudlard', '658912545', '34343', 2, 423235, 'Etudiant', '01:00:00', 10);

INSERT INTO `contrat_de_maintenance` (`numeroDeContrat`, `dateDeSignature`, `dateEcheance`, `numeroClient`, `refTypeContrat`) VALUES
(1, '2021-11-03', '2021-11-03', 1, 1),
(2, '2021-11-02', '2021-11-02', 2, 2),
(3, '2021-11-01', '2021-11-01', 3, 3),
(4, '2021-11-03', '2021-11-03', 4, 3),
(5, '2021-11-02', '2021-11-02', 5, 2),
(6, '2021-11-01', '2021-11-01', 6, 2),
(7, '2021-11-01', '2021-11-01', 7, 3);

INSERT INTO `controler` (`numeroIntervenant`, `numeroDeSerie`, `numeroClient` ,`tempsPasse`, `commentaire`) VALUES
(1, 2000, '3', '02:00:00', 'okay'),
(2, 2001, '2', '02:00:00', 'good'),
(3, 2004, '2', '03:00:00', 'okay'),
(4, 2004, '2', '04:00:00', 'good'),
(5, 2003, '2', '03:00:00', 'okay');

INSERT INTO `intervention` (`id`, `dateVisite`, `heureVisite`, `numeroClient`, `numeroIntervenant`, `telephoneMobile`) VALUES
(1, '2021-11-22', '01:00:00', 3, 1, 654892451),
(2, '2021-11-23', '01:00:00', 2, 2, 654589265),
(3, '2021-11-24', '03:00:00', 3, 3, 698213546),
(4, '2021-11-25', '01:00:00', 4, 4, 654289632),
(5, '2021-11-23', '02:00:00', 5, 5, 654241358);

INSERT INTO `materiel` (`numeroDeSerie`, `dateDeVente`, `dateInstallation`, `prixVente`, `emplacement`, `refInterne`, `numeroClient`, `numeroContrat`) VALUES
(2000, '2021-11-28', '2021-11-28', 60, 'cuisine', 1, 1, 1),
(2001, '2021-11-27', '2021-11-27', 130, 'cuisine', 2, 2, 2),
(2003, '2021-11-29', '2021-11-29', 45, 'salon', 3, 6, 6),
(2004, '2021-11-29', '2021-11-29', 156, 'cuisine', 2, 5, 6);

INSERT INTO `type_contrat` (`refTypeContrat`, `detailIntervention`, `tauxApplicable`) VALUES
(1, '2021-11-03', 0.15),
(2, '2021-11-02', 0.2),
(3, '2021-11-01', 0.1);