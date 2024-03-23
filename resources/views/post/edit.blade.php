@extends('layout.app')
@section('content')
    <h1>update info student</h1>
    <form action="/post/{{ $student->id }}" method="post"
        enctype="multipart/form-data" >
        @csrf 
        {{-- cross site request forgery: dung de bao mat , tranh truong hop bi hacker --}}
        {{-- the key is generated at every session start --}}
        {{-- only apply to non-read routes --}}
        {{--  --}}
        @method('PUT') 
        <input class="form-control" type="file" name="image">
        {{-- gửi trên form HTML là post nhưng đi vào hệ thống laravel thì nó phải là put --}}
        <div class="mb-3 mt-3">
          <label class="form-label">Student Code</label>
          <input type="tett" class="form-control" id="student_code" placeholder="Enter student_code" name="student_code" value="{{ $student->student_code }}">
        </div>
        <div class="mb-3">
          <label  class="form-label">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"  value="{{ $student->name }}">
        </div>
        <div class="mb-3 mt-3">
            <label  class="form-label">Class</label>
            <input type="text" class="form-control" id="class" placeholder="Enter class" name="class"  value="{{ $student->class }}">
          </div>
        <div class="form-check mb-3">
        </div>
        <button type="submit" class="btn btn-primary">Update Student</button>
      </form>
@endsection