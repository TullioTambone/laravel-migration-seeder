<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
<body>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Azienda</th>
                        <th scope="col">Stazione_di_partenza</th>
                        <th scope="col">Stazione_di_arrivo</th>
                        <th scope="col">Orario_di_partenza</th>
                        <th scope="col">Orario_di_arrivo</th>
                        <th scope="col">Codice_treno</th>
                        <th scope="col">Numero_carrozze</th>
                        <th scope="col">In_orario</th>
                        <th scope="col">Cancellato</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trains as $element)
                    <tr class="">
                        <td>{{ $element->Azienda }}</td>
                        <td>{{ $element->Stazione_di_partenza }}</td>
                        <td>{{ $element->Stazione_di_arrivo }}</td>
                        <td>{{ $element->Orario_di_partenza }}</td>
                        <td>{{ $element->Orario_di_arrivo }}</td>
                        <td>{{ $element->Codice_treno }}</td>
                        <td>{{ $element->Numero_carrozze }}</td>
                        <td>{{ $element->In_orario ? 'si' : 'no' }}</td>
                        <td>{{ $element->Cancellato ? 'si' : 'no'}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</body>

</html>