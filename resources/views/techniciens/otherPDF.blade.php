{{-- Structure du PDF, utilisation des variables que l'on a défini dans le contrôleur PDFController.php --}}
<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>{{ $prenom }}</p>
    <p>{{ $classe }}</p>
    <p>Emplacement : {{ $emplacement }}</p>
</body>

</html>
