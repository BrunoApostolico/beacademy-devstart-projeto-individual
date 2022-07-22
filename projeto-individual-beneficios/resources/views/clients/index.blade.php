@extends('template.users')
@section('title','Listagem de Clientes')
@section('body')

    <h1>Clientes</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm mt-2 mb-3">
                <a href="{{ route('clients.create') }}" class="btn btn-sm btn-outline-primary">Novo Cliente</a>
            </div>
            <div class="col-sm mt-2 mb-3">
                <form action="{{ route('clients.index') }}" method="GET">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" name="search" />
                        <button type="submit" class="btn btn-sm btn-outline-primary">Pesquisar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <thead class="text-center table-dark">
        <tr>
            <th scope="col">Matricula</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Celular</th>
            <th scope="col">Email</th>
            <th scope="col">Data da Filiação</th>
            <th scope="col">Dependentes</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody class="text-center">
        @foreach($clients as $client)
            <tr>
                <th scope="row">{{ $client->id }}</th>
                <td>{{ $client->name }}</td>
                <td>{{ $client->phone1 }}</td>
                <td>{{ $client->phone2 }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ date('d/m/Y', strtotime($client->created_at)) }}</td>
                <td>
                    <a href="{{ route('dependents.show', $client->id) }}" class="btn btn-sm btn-outline-dark">Dependentes - {{ $client->dependents->count() }}</a>

                </td>
                <td><a href="{{ route('clients.show', $client->id) }}"
                       class="btn btn-sm btn-outline-dark">Visualizar </a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">
        {{ $clients->links('pagination::bootstrap-4') }}
    </div>
@endsection
