<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .active{
        color: blue;
    }
</style>
{{-- <link rel="stylesheet" href="{{ asset('scss/app.scss') }}"> --}}
    <title>Document</title>
</head>
<body>
    @include('layout.header')
    {{--
        app.blade.php is the master page,
        index.blade.php is the child page ,
        about.blade.php is the child page
         --}}
         {{-- đại diện cho  1 thẻ content --}}
    @yield('content') 
   @include('layout.footer')
</body>
</html>