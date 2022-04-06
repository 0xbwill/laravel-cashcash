<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>Fiche PDF générée le : {{ \Carbon\Carbon::parse($date)->format('d/m/Y')}}</p><br>

    <p>Numéro technicien : {{ $idTechnicien }}</p>

    <p>Numéro client : {{ $numeroClient }}</p>
    <p>Numéro agence : {{ $numeroAgence }}</p><br>

    <p>Date de l'intervention : {{ \Carbon\Carbon::parse($dateVisite)->format('d/m/Y')}}</p>
    <p>Heure visite : {{ $heureVisite}}</p>

    <p>Nom : {{ $nom }}</p>
    <p>Prénom : {{ $prenom }}</p>
    <p>Téléphone : {{ $tel }}</p>
    <p>Email : {{ $email }}</p>
    <p>Adresse : {{ $adresse }}</p>
    <p>Distance : {{ $distanceKm.' km' }}</p>
    <p>Durée déplacement : {{ $dureeDeplacement }}</p>
</body>

</html>
