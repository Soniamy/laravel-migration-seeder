@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<!DOCTYPE html>
<html>
<body>
   <div class="container mt-5">
    <h1 class="mb-4 text-center ">Treni in partenza oggi</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di partenza</th>
                <th scope="col">Stazione di arrivo</th>
                <th scope="col">Orario di partenza</th>
                <th scope="col">Orario di arrivo</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">Numero Carrozze</th>
                <th scope="col">In orario</th>
                <th scope="col">Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->carriage_count }}</td>
                    <td>{{ $train->on_time ? 'Sì' : 'No' }}</td>
                    <td>{{ $train->canceled ? 'Sì' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>

@endsection
