@extends('template.users')
@section('title',"Listagem de Pagamentos: {$client->name}")
@section('body')

    <h1 class="mt-4">Pagamentos: {{$client->name}}</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm mt-2 mb-3">
                <a href="{{ route('payments.create', ['id' => $client->id ]) }}" class="btn btn-sm btn-outline-primary">Novo Pagamento</a>
                <a href="{{ route('clients.show', $client->id) }}" class="btn btn-sm btn-outline-primary">Voltar </a>
            </div>
        </div>
    </div>

    <table class="table-sm">
        <thead class="text-center">
        <tr>
            <th scope="col">Data do Pagamento</th>
        </tr>
        </thead>
        <tbody class="text-center">
        @foreach($payments as $payment)
            <tr>
                <td>{{ date('d/m/Y', strtotime($payment->date_payment)) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">

    </div>
@endsection
