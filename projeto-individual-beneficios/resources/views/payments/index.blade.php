@extends('template.users')
@section('title', 'Listagem de Pagamentos')
@section('body')

    <h1 class="mt-4">Listagem de Pagamentos</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm mt-2 mb-3">
                <form action="{{ route('payments.index') }}" method="GET">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" name="search" placeholder="Informe a Matricula" />
                        <button type="submit" class="btn btn-sm btn-outline-primary">Pesquisar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="table-responsive-sm">
        <table class="table">
            <caption>Listagem de Pagamentos</caption>
            <thead class="text-center">
            <tr>

                <th scope="col">Matrícula</th>
                <th scope="col">Cliente</th>
                <th scope="col">Data de Pagamento</th>

            </tr>
            </thead>
            <tbody class="text-center">
            @foreach($payments as $payment)
                <tr>
                    <th scope="row">{{ $payment->client->code }}</th>
                    <td>{{ $payment->client->name }}</td>
                    <td>{{ date('d/m/Y', strtotime($payment->date_payment)) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="justify-content-center pagination">
        {{ $payments->links('pagination::bootstrap-4') }}
    </div>

@endsection
