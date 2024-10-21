<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel primi passi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="fw-bold text-center p-4">
            Hello World
        </h1>
        <ul>
            @foreach ($users as $singleUser)
            <li class="mb-3">
                Nome: {{ $singleUser['name'] }} <br>
                Email: {{ $singleUser['email'] }}
            </li>
            @endforeach
        </ul>
    </div>

</body>
</html>
