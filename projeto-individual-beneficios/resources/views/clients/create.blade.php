@extends('template.users')
@section('title', 'Novo Cliente')
@section('body')

    <h1>Novo Cliente</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </div>
    @endif

    <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="Nome">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="phone1" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="phone1" name="phone1">
        </div>
        <div class="mb-3">
            <label for="phone2" class="form-label">Celular</label>
            <input type="text" class="form-control" id="phone2" name="phone2">
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
            <label for="rg" class="form-label">RG</label>
            <input type="text" class="form-control" id="rg" name="rg">
        </div>
{{--        <div class="mb-3">--}}
{{--            <label for="image" class="form-label">Selecione uma Imagem</label>--}}
{{--            <input type="file" class="form-control form-control-md" id="image" name="image">--}}
{{--        </div>--}}
        <button type="submit" class="btn btn-sm btn-outline-primary">Enviar</button>
    </form>
@endsection
