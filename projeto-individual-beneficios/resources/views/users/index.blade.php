@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('body')
    <h1>Usuários do Sistema</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm mt-2 mb-5">
                <a href="{{ route('users.create') }}" class="btn btn-outline-primary">Novo Usuário</a>
            </div>
            <div class="col-sm mt-2 mb-5">
                <form action="{{ route('users.index') }}" method="GET">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" name="search" />
                        <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <table class="table table-hover">
        <thead class="text-center table-dark">
        <tr>
            <th scope="col">Foto</th>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Data Cadastro</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody class="text-center">
        @foreach($users as $user)
            <tr>
                @if($user->image)
                    <th><img src=" {{ asset('storage/'.$user->image) }}" width="50px" height="50px" class="rounded-circle"/></th>
                @else
                    <th><img src=" {{ asset('storage/profile/avatar.jpg') }}" width="50px" height="50px" class="rounded-circle"/></th>
                @endif
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ date('d/m/Y - H:i', strtotime($user->created_at)) }}</td>
                <td>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-outline-dark">Visualizar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
@endsection
