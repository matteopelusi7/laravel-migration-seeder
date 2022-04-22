<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Trains</title>
</head>
<body>

    <div class="container">

        @foreach ($trains as $train)

        <div class="card-item">

            <h3>Azienda:</h3>
            <p>{{ $train['azienda'] }}</p>
            <h3>Stazione di partenza:</h3>
            <p>{{ $train['stazione_di_partenza'] }}</p>
            <h3>Stazione di arrivo:</h3>
            <p>{{ $train['stazione_di_arrivo'] }}</p>
            <h3>Orario di partenza:</h3>
            <p>{{ $train['orario_di_partenza'] }}</p>
            <h3>Orario di arrivo:</h3>
            <p>{{ $train['orario_di_arrivo'] }}</p>
            <h3>Giorno di partenza:</h3>
            <p>{{ $train['giorno_di_partenza'] }}</p>
            <h3>Codice Treno:</h3>
            <p>{{ $train['codice_treno'] }}</p>
            <h3>Numero Carrozze:</h3>
            <p>{{ $train['numero_carrozze'] }}</p>

        </div>
            
        @endforeach

    </div>
    
</body>
</html>