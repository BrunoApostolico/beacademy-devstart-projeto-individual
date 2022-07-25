@extends('template.users')
@section('title',"{$client->name}")
@section('body')

    <h1 class="mt-4">{{ $client->name }}</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm mt-2 mb-3">
                <a href="{{ route('payments.create', ['id' => $client->id ]) }}" class="btn btn-sm btn-outline-primary">Novo Pagamento</a>
                <a href="{{ route('payments.show', ['id' => $client->id ]) }}" class="btn btn-sm btn-outline-primary">Ver Pagamentos</a>
            </div>
        </div>
    </div>

    <tbody class="text-center">
    <form class="row g-3">
        <div class="col-md-2">
            <label for="id" class="form-label">Matrícula</label>
            <input type="text" class="form-control" id="id" value="{{ $client->id }}" readonly>
        </div>
        <div class="col-md-5">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" value="{{ $client->email }}" readonly>
        </div>
        <div class="col-md-5">
            <label for="address" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="address" value="{{ $client->address }}" readonly>
        </div>
        <div class="col-md-1">
            <label for="address_number" class="form-label">Número</label>
            <input type="text" class="form-control" id="address_number" value="{{ $client->address_number }}" readonly>
        </div>
        <div class="col-md-3">
            <label for="address_complement" class="form-label">Complemento</label>
            <input type="text" class="form-control" id="address_complement" value="{{ $client->address_complement }}" readonly>
        </div>
        <div class="col-md-2">
            <label for="phone1" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="phone1" value="{{ $client->phone1 }}" readonly>
        </div>
        <div class="col-md-2">
            <label for="phone2" class="form-label">Celular</label>
            <input type="text" class="form-control" id="phone2" value="{{ $client->phone2 }}" readonly>
        </div>
        <div class="col-md-2">
            <label for="date_birth" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="date_birth" value="{{ $client->date_birth }}" readonly>
        </div>
        <div class="col-md-2">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" value="{{ $client->cpf }}" readonly>
        </div>
        <div class="col-md-2">
            <label for="rg" class="form-label">RG</label>
            <input type="text" class="form-control" id="rg" value="{{ $client->rg }}" readonly>
        </div>
        <div class="col-md-2">
            <label for="rg" class="form-label">Data da Filiação</label>
            <input type="text" class="form-control" id="rg" value="{{ date('d/m/Y', strtotime($client->created_at)) }}" readonly>
        </div>
    </form>

    <div class="col-md-3 mt-5">
        <table class="table">
            <tr>
                <th scope="col"><a href="{{ route('clients.index', $client->id) }}" class="btn btn-sm btn-outline-dark">Voltar </a></th>
                <th scope="col"><a href="{{ route('clients.edit', $client->id) }}" class="btn btn-sm btn-outline-dark">Editar </a></th>
                <th scope="col">
                  <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                     @method('DELETE')
                     @csrf
                     <button type="submit" class="btn btn-sm btn-outline-dark">Excluir </button>
                  </form>
                </th>
            </tr>
        </table>
    </div>
    </tbody>
@endsection
