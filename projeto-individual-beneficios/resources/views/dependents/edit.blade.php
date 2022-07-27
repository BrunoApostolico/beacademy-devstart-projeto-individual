@extends('template.users')
@section('title', "{$dependent->name}")
@section('body')

    <h1 class="mt-4">Dependente: {{ $dependent->name }}</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </div>
    @endif

    <form action="{{ route('dependents.update', $dependent->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="Nome" value="{{ $dependent->name }}">
        </div>
        <div class="mb-3">
            <label for="date_birth" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="date_birth" name="date_birth" value="{{ $dependent->date_birth }}">
        </div>
        <div class="mb-3">
            <label for="relationship" class="form-label">Filiação</label>
            <input type="text" class="form-control" id="relationship" name="relationship" aria-describedby="Nome" value="{{ $dependent->relationship }}">
        </div>
        <button type="submit" class="btn btn-sm btn-outline-primary">Atualizar</button>
        <a href="{{ route('clients.index') }}" class="btn btn-sm btn-outline-primary">Voltar </a>
    </form>

@endsection
