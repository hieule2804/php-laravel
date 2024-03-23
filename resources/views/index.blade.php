@extends('layout.app')
@section('content')
    <h1>This is PageController</h1>
 {{-- -nếu để anh trong folder image thì sẽ dùng URL 
      -nếu lưu ảnh trong storage thì sẽ sẽ dùng asset --}}
    <img src="{{ asset('storage/107.c3e123902d831a9.jpg') }}" alt="" width="100px" height="100px">
@endsection