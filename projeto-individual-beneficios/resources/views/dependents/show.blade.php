@extends('template.users')
@section('title',"Listagem de Dependentes do {$client->name}")
@section('body')

    <h1>Dependentes do {{$client->name}}</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm mt-2 mb-3">
                <a href="{{ route('dependents.create') }}" class="btn btn-sm btn-outline-primary">Novo Dependente</a>
            </div>
{{--            <div class="col-sm mt-2 mb-3">--}}
{{--                <form action="{{ route('dependents.index') }}" method="GET">--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="search" class="form-control rounded" name="search" />--}}
{{--                        <button type="submit" class="btn btn-sm btn-outline-primary">Pesquisar</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
        </div>
    </div>

    <table class="table">
        <thead class="text-center">
        <tr>

            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Filiação</th>
            <th scope="col">Data de Nascimento</th>

        </tr>
        </thead>
        <tbody class="text-center">
        @foreach($dependents as $dependent)
            <tr>
                <th scope="row">{{ $dependent->id }}</th>
                <td>{{ $dependent->name }}</td>
                <td>{{ $dependent->relationship }}</td>
                <td>{{ date('d/m/Y - H:i', strtotime($dependent->created_at)) }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">

    </div>
@endsection
