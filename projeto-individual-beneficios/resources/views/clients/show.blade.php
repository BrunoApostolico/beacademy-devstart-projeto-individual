@extends('template.users')
@section('title',"{$client->name}")
@section('body')

    <h1>Cliente {{ $client->name }}</h1>
    <table class="table">
        <thead class="text-center table-dark">
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
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <a href="{{ route('clients.index', $client->id) }}" class="btn btn-sm btn-primary text-white">Voltar </a>
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger text-white">Excluir </button>
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
