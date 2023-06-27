<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di partenza</th>
                <th scope="col">Stazione di arrivo</th>
                <th scope="col">orario di Partenza</th>
                <th scope="col">orario di Arrivo</th>
                <th scope="col">Codice treno</th>
                <th scope="col">Numero di Carrozze</th>
                <th scope="col">In orario</th>
                <th scope="col">Cancellato</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                    <th scope="row">{{$train->Azienda}}</th>
                    <td>{{$train->Stazione_di_partenza}}</td>
                    <td>{{$train->Stazione_di_arrivo}}</td>
                    <td>{{$train->Orario_di_partenza}}</td>
                    <td>{{$train->Orario_di_arrivo}}</td>
                    <td>{{$train->Codice_Treno}}</td>
                    <td>{{$train->Numero_Carrozze}}</td>
                    <td>{{$train->In_orario}}</td>
                    <td>{{$train->Cancellato}}</td>
                </tr>
                @endforeach
              
              
            </tbody>
          </table>
    </body>
</html>
