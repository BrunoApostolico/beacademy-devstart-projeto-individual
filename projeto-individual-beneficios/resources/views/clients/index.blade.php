@extends('template.users')
@section('title','Listagem de Clientes')
@section('body')

    <h1 class="mt-4">Clientes</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm mt-2 mb-3">
                <a href="{{ route('clients.create') }}" class="btn btn-sm btn-outline-primary">Novo Cliente</a>
            </div>
            <div class="col-sm mt-2 mb-3">
                <form action="{{ route('clients.index') }}" method="GET">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" name="search" placeholder="Informe Matrícula, CPF ou Nome" />
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
            <th scope="col">CPF</th>
            <th scope="col">Telefone</th>
            <th scope="col">Celular</th>
            <th scope="col">Email</th>
            <th scope="col">Data da Filiação</th>
            <th scope="col">Dependentes</th>
            <th scope="col">Detalhes</th>
        </tr>
        </thead>
        <tbody class="text-center">
        @foreach($clients as $client)
            <tr>
                <th scope="row">{{ $client->code }}</th>
                <td>{{ $client->name }}</td>
                <td>{{ $client->cpf }}</td>
                <td>{{ $client->phone1 }}</td>
                <td>{{ $client->phone2 }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ date('d/m/Y', strtotime($client->created_at)) }}</td>
                <td>
                    <a href="{{ route('dependents.show', $client->id) }}" class="btn btn-sm btn-outline-dark">{{ $client->dependents->count() }}</a>

                </td>
                <td><a href="{{ route('clients.show', $client->id) }}" class="btn btn-sm btn-outline-dark" title="Visualizar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                        <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                    </svg>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">
        {{ $clients->links('pagination::bootstrap-4') }}
    </div>
@endsection
