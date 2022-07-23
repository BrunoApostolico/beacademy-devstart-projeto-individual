@extends('template.users')
@section('title', 'Listagem de Dependentes')
@section('body')

    <h1 class="mt-4">Listagem de Dependentes</h1>

    <table class="table">
        <thead class="text-center">
        <tr>

            <th scope="col">Id</th>
            <th scope="col">Cliente</th>
            <th scope="col">Nome</th>
            <th scope="col">Filiação</th>
            <th scope="col">CPF</th>
            <th scope="col">Data de Nascimento</th>

        </tr>
        </thead>
        <tbody class="text-center">
        @foreach($dependents as $dependent)
            <tr>
                <th scope="row">{{ $dependent->id }}</th>
                <td>{{ $dependent->client->name }}</td>
                <td>{{ $dependent->name }}</td>
                <td>{{ $dependent->relationship }}</td>
                <td>{{ $dependent->cpf }}</td>
                <td>{{ date('d/m/Y - H:i', strtotime($dependent->created_at)) }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">

    </div>

@endsection
