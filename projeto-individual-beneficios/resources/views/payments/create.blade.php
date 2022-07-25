@extends('template.users')
@section('title', 'Novo Pagamento')
@section('body')

    <h1>Novo Pagamento do {{$client->name}} </h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </div>
    @endif

    <form action="{{route('payments.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="hidden" class="form-control" id="client_id" name="client_id" aria-describedby="Cliente" value="{{ $client->id }}">
        </div>
        <div class="mb-3">
            <label for="date_payment" class="form-label">Data do Pagamento</label>
            <input type="date" class="form-control" id="date_payment" name="date_payment">
        </div>
        <button type="submit" class="btn btn-sm btn-outline-primary">Enviar</button>
    </form>
@endsection
