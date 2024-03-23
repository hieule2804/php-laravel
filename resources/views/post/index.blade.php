@extends('layout.app')
@section('content')
<h1>This is Post Controller</h1>
<a type="button" class="btn btn-outline-primary" href="post/create">Add new Student</a>
<table class="table">
    <thead>
      <tr>
        <th>Student Code</th>
        <th>Name</th>
        <th>Class</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($student as $item)
      <tr>
        <td>
            <h3>{{ $item->student_code }}</h3>
        </td>
        <td>
          <a href="/post/{{ $item->id }}">
            {{-- Like "show details" --}}
            {{ $item->name }}
          </a>
            <h3>{{ $item->name }}</h3>
        </td>
        <td>
            <h3>{{ $item->class }}</h3>
        </td>
        <td>
         <a href="post/{{ $item->id }}/edit">edit</a>
         {{-- delete student --}}
<form action="/post/{{ $item->id }}" method="post">
@csrf
@method('delete')
<button class="btn btn-danger" type="submit"> delete</button>
</form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection