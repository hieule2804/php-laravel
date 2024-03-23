@extends('layout.app')
@section('content')
    <h1>this is create student</h1>
    <form action="/post" method="post"
    enctype="multipart/form-data" 
    {{-- enctype="multipart/form-data" : upload lên nhưng mà chia nhỏ ra rồi mới upload  --}}
    >
        @csrf 
        {{-- cross site request forgery: dung de bao mat , tranh truong hop bi hacker --}}
        {{-- the key is generated at every session start --}}
        {{-- only apply to non-read routes --}}
        {{--  --}}
    <input class="form-control" type="file" name="image">
        <div class="mb-3 mt-3">
          <label class="form-label">Student Code</label>
          <input type="text" class="form-control" id="student_code" placeholder="Enter student_code" name="student_code">
        </div>
        <div class="mb-3">
          <label  class="form-label">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="mb-3 mt-3">
            <label  class="form-label">Class</label>
            <input type="text" class="form-control" id="class" placeholder="Enter class" name="class">
          </div>
        <div class="form-check mb-3">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      {{-- nếu fail validate --}}
      @if ($errors->any())
          <div>
              @foreach ($errors->all() as $error)
                  <p class="text-danger">
 {{ $error }}
                  </p>
              @endforeach
          </div>
      @endif
@endsection