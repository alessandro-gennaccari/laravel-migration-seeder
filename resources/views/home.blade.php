@extends('layouts.app')

@section('title', 'Homepage')
    
@section('content')
    <main class="m-5">        
        <h1 class="text-center">Data</h1>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Cognome</th>
                    <th scope="col">Date Nasciata</th>
                    <th scope="col">Citta</th>
                    <th scope="col">Indirizzo</th>
                    <th scope="col">Numero</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $value)
                <tr>
                    <th scope="row">{{ $value->id }}</th>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->lastname }}</td>
                    <td>{{ $value->born }}</td>
                    <td>{{ $value->city }}</td>
                    <td>{{ $value->address }}</td>
                    <td>{{ $value->phone }}</td>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </main>
@endsection
