@extends('layout.app')

@section('content')
    <h1>Index function of ProductController</h1>
    {{-- <h2>Title: {{$title}}</h2>
    <h3>x = {{ $x }}</h3>
    <h3>y = {{ $y }}</h3> --}}
    {{-- <h3>name ={{ $name }}</h3> --}}
    {{-- lấy 1 trường trong associative array thì dùng foreach --}}
    {{-- @foreach ($product as $item)
<h3>{{ $item }}</h3>
    @endforeach --}}
    {{-- <h3>{{ $product }}</h3> --}}
    <a href="{{ route('product') }}">Link To product</a>
@endsection