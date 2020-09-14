<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }}</title>
        <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container align-middle mt-5">
            <div class="card ">
                @yield("content")
            </div>
    </body>

</html>
