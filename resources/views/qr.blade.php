<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>QR Codes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            body {
                background-color: #000000;
            }
            div.qr_code img {
                display: block;
                width: 50%;
                height: auto;
                margin: 50px auto;
            }
        </style>
    </head>
    <body>
        <div class="qr_code">
            <img src="{{ asset('images/qrCode.svg') }}">
        </div>
    <a href="{{ route('form.show') }}"><button>Again</button></a>
    </body>
</html>
