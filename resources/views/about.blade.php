<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <style>
        a:hover {
            color: red !important;
        }
    </style>
<body>
    <div class="container">
        <header>
            <nav class="d-flex align-items-center p-2">
                <h3 class="m-0 align-items-center">
                    {{ $title }}
                </h3>
                <ul class="list-unstyled d-flex align-items-center justify-content-center align-items-center m-0">
                    @foreach ($links as $singleLink)
                    <li class="d-flex align-items-center justify-content-center ps-3"><a href='{{route($singleLink)}}'
                            class="text-decoration-none text-reset">{{$singleLink}}</a></li>
                    @endforeach
                </ul>
            </nav>
        </header>
    </div>

</body>
</html>
