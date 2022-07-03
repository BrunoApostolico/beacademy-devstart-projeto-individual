<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cliente {{ $client->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Cliente {{ $client->name }}</h1>

    <table class="table">
        <thead class="text-center">
        <tr>
            <th scope="col">Matricula</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Celular</th>
            <th scope="col">Email</th>
            <th scope="col">Data da Filiação</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody class="text-center">

            <tr>
                <th scope="row">{{ $client->id }}</th>
                <td>{{ $client->name }}</td>
                <td>{{ $client->phone1 }}</td>
                <td>{{ $client->phone2 }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ date('d/m/Y', strtotime($client->created_at)) }}</td>
                <td>
                    <a href="" class="btn btn-sm btn-warning text-white">Editar </a>
                    <a href="" class="btn btn-sm btn-danger text-white">Excluir </a>
                </td>
            </tr>

        </tbody>
    </table>
</div>
</body>
</html>
