<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <title>Perpustakaan</title>
</head>
<body>
  @include('layouts.header')
  @yield('content')
  @include('layouts.footer')
  <script src="{{ asset('js/bootstrap.min.hs') }}"></script>
</body>
</html>