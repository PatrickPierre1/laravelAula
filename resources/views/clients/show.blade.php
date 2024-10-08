<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Unialfa</a>
        </div>
    </nav>

    <div class="container d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-header">
                Detalhes do Cliente {{ $client->nome }}
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $client->id }}</p>
                <p><strong>Nome:</strong> {{ $client->nome }}</p>
                <p><strong>Endereço:</strong> {{ $client->endereco }}</p>
                <p><strong>Observação:</strong> {{ $client->observacao }}</p>
                <br>
                <a class="text-light btn btn-primary" href="{{ route('clients.index') }}">Voltar</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
