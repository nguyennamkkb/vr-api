<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        {{-- <link rel="stylesheet" href="//unpkg.com/view-design/dist/styles/iview.css"> --}}
        <!-- import iView -->
      

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="app">
            <Dashboardapp/>
        </div>
    </body>
    <script src="{{ mix('/js/app.js') }}"></script>
    {{-- <script src="//unpkg.com/view-design/dist/iview.min.js"></script> --}}
</html>
