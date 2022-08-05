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
    <form class="row g-3" action="{{ route('clients.index') }}" method="GET">
        <div class="col-md-2">
            <label for="id" class="form-label">Matrícula</label>
            <input type="text" class="form-control" id="id" value="{{ $client->code }}" readonly>
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
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a href="{{ route('clients.index', $client->id) }}" class="btn btn-outline-dark" title="Voltar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-all" viewBox="0 0 16 16">
                            <path d="M8.098 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L8.8 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L4.114 8.254a.502.502 0 0 0-.042-.028.147.147 0 0 1 0-.252.497.497 0 0 0 .042-.028l3.984-2.933zM9.3 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z"/>
                            <path d="M5.232 4.293a.5.5 0 0 0-.7-.106L.54 7.127a1.147 1.147 0 0 0 0 1.946l3.994 2.94a.5.5 0 1 0 .593-.805L1.114 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.5.5 0 0 0 .042-.028l4.012-2.954a.5.5 0 0 0 .106-.699z"/>
                        </svg>
                    </a>
                    <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-outline-dark" title="Editar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg>
                    </a>
                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-outline-dark" title="Excluir">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </tr>
        </table>
    </div>
    </tbody>
@endsection
