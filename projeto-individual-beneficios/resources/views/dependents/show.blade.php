@extends('template.users')
@section('title',"Listagem de Dependentes do {$client->name}")
@section('body')

    <h1 class="mt-4">Dependentes do {{$client->name}}</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm mt-2 mb-3">
                <a href="{{ route('dependents.create', ['id' => $client->id ]) }}" class="btn btn-sm btn-outline-primary">Novo Dependente</a>
            </div>
        </div>
    </div>

    <table class="table">
        <thead class="text-center">
        <tr>

            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Filiação</th>
            <th scope="col">CPF</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Ações</th>

        </tr>
        </thead>
        <tbody class="text-center">
        @foreach($dependents as $dependent)
            <tr>
                <th scope="row">{{ $dependent->id }}</th>
                <td>{{ $dependent->name }}</td>
                <td>{{ $dependent->relationship }}</td>
                <td>{{ $dependent->cpf }}</td>
                <td>{{ date('d/m/Y', strtotime($dependent->date_birth)) }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <a href="{{ route('clients.index', $client->id) }}" class="btn btn-sm btn-outline-primary">Voltar </a>
                        <a href="{{ route('dependents.edit', $dependent->id) }}" class="btn btn-sm btn-outline-warning">Editar</a>
                        <form action="{{ route('dependents.destroy', $dependent->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-danger">Excluir </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">

    </div>
@endsection
