@extends('template.users')
@section('title', 'Novo Dependente')
@section('body')

    <h1>Novo Dependente do {{$client->name}} </h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </div>
    @endif

    <form action="{{route('dependents.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="hidden" class="form-control" id="client_id" name="client_id" aria-describedby="Cliente" value="{{ $client->id }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="Nome">
        </div>
        <div class="mb-3">
            <label for="date_birth" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="date_birth" name="date_birth">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf">
        </div>
        <div class="mb-3">
            <label for="relationship" class="form-label">Parentesco</label>
            <input type="text" class="form-control" id="relationship" name="relationship">
        </div>
        <button type="submit" class="btn btn-sm btn-outline-primary">Enviar</button>
    </form>
@endsection
