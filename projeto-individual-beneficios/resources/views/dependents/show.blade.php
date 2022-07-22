@extends('template.users')
@section('title',"Listagem de Dependentes do {$client->name}")
@section('body')

    <h1>Dependentes do {{$client->name}}</h1>

{{--    @foreach($dependents as $dependent)--}}
{{--        <div class="mb-3">--}}
{{--            <label class="form-label">Identificação Nº:<br><b>{{ $post->id }}</b></label>--}}
{{--            <br>--}}
{{--            <label class="form-label">Status:<br><b>{{ $post->active?'Ativo':'Inativo' }}</b></label>--}}
{{--            <br>--}}
{{--            <label class="form-label">Título:<br><b>{{ $post->title }}</b></label>--}}
{{--            <br>--}}
{{--            <label class="form-label">Postagem:<br></label>--}}
{{--            <br>--}}
{{--            <textarea class="form-control" rows="3">{{ $post->post }}</textarea>--}}
{{--            <br>--}}
{{--        </div>--}}
{{--    @endforeach--}}

    <table class="table">
        <thead class="text-center">
        <tr>

            <th scope="col">Id</th>
            <th scope="col">Cliente</th>
            <th scope="col">Nome</th>
            <th scope="col">Filiação</th>
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
                <td>{{ date('d/m/Y - H:i', strtotime($dependent->created_at)) }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">

    </div>
@endsection
