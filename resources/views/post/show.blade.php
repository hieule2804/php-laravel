@extends('layout.app')
@section('content')
    <h1>detail student</h1>
    <h3>Student Name :{{ $student->name }}</h3>
    <h3>Student Code : {{ $student->student_code }}</h3>
    <h3>Class: {{ $student->class }}</h3>
     <img src="{{ asset('images/'.$student->image_path) }}" alt="">
@endsection