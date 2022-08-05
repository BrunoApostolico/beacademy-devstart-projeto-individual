@extends('template.users')
@section('title', "{$client->name}")
@section('body')

    <h1 class="mt-4">Cliente: {{ $client->name }}</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </div>
    @endif

    <form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <input type="hidden" class="form-control" id="code" name="code" value="{{ $client->code }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $client->email }}">
        </div>
        <div class="mb-3">
            <label for="phone1" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="phone" name="phone1" value="{{ $client->phone1 }}">
        </div>
        <div class="mb-3">
            <label for="phone2" class="form-label">Celular</label>
            <input type="text" class="form-control" id="phone2" name="phone2" value="{{ $client->phone2 }}">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $client->address }}">
        </div>
        <div class="mb-3">
            <label for="address_number" class="form-label">Número</label>
            <input type="number" class="form-control" id="address_number" name="address_number" value="{{ $client->address_number }}">
        </div>
        <div class="mb-3">
            <label for="address_complement" class="form-label">Celular</label>
            <input type="text" class="form-control" id="address_complement" name="address_complement" value="{{ $client->address_complement }}">
        </div>
        <button type="submit" class="btn btn-sm btn-outline-primary">Atualizar</button>
        <a href="{{ route('clients.index', $client->id) }}" class="btn btn-sm btn-outline-primary">Voltar </a>
    </form>

@endsection
