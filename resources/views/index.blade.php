<x-guest-layout>
    
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

    <body>

        <section class="text-center my-5">
            <h1 class="mb-4 text-white">CashCash™ Corp.</h1>

            @Auth
            <a href="{{ route('login') }}"><button type="button" class="border rounded px-3 py-2 text-white">Accéder à mon espace</button></a>
            @else
            <a href="{{ route('login') }}"><button type="button" class="border rounded px-3 py-2 text-white">Je me connecte</button></a>
            <a href="{{ route('register') }}"><button type="button" class="border rounded px-3 py-2 text-white">Je m'inscris</button></a>
            @endif


        </section>
        
    </body>

    </html>

</x-guest-layout>

<style scoped>
    body {
        background-color: #0e131c;
        margin: 0;
        padding: 0;
    }

</style>
