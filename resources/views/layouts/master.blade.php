<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
    @include('inc.navbar')
    <div class="container"><br>
        @include('inc.messages')
        @yield('content')
    </div>
    <footer id="footer" class="text-center"><br>
        <p>Copyright &copy; 2018 TodosApp by <strong>RickFAF Dev&Design</strong></p>
    </footer>
</body>
</html>
