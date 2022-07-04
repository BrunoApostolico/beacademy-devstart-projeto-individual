@extends('template.users')
@section('title',"Cliente {$client->name}")
@section('body')

    <h1>Cliente {{ $client->name }}</h1>

    <table class="table">
        <thead class="text-center">
        <tr>
            <th scope="col">Matricula</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Celular</th>
            <th scope="col">Email</th>
            <th scope="col">Data da Filiação</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody class="text-center">

            <tr>
                <th scope="row">{{ $client->id }}</th>
                <td>{{ $client->name }}</td>
                <td>{{ $client->phone1 }}</td>
                <td>{{ $client->phone2 }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ date('d/m/Y', strtotime($client->created_at)) }}</td>
                <td>
                    <a href="" class="btn btn-sm btn-warning text-white">Editar </a>
                    <a href="" class="btn btn-sm btn-danger text-white">Excluir </a>
                </td>
            </tr>

        </tbody>
    </table>
@endsection
