<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap.min.css">
    <style>
        body{
            background-color: silver;
        }
    </style>
    <title>CRUD-  @yield('title')  </title>
</head>
<body>
    @include('layouts.nav')
<div class="container mt3">
    <main>
        @yield('main')
    </main>
</div>    

    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>