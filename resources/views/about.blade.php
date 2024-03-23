@extends('layout.app')

@section('content')
    <h1>This is About Page, with share header</h1>
{{-- cách câu lệnh blade --}}
{{ $x =-1 }}
@if ( $x > 2)
 <h3>x greater than 2</h3>
 @elseif($x<10)
 <h3>x less than 10</h3>
 @else 
 <h3>All Conditions are not match</h3>
@endif
{{-- unless = "if not" --}}
{{-- @unless(empty($name))
<h3>Name is not Empty</h3>
@endunless --}}
{{-- same method below --}}
{{-- @if(!empty($name))
<h3>Name is not Empty</h3>
@endif --}}

{{-- @empty(!$name)
<h3>Name is not Empty, empty</h3>
@endempty
@empty($age)
<h3>age is Empty, empty</h3>
@endempty

@isset($name)
    <h3>Name has been set</h3>
@endisset

@switch($name)
    @case('Hieu')
        <h3>this is Hieu</h3>
        @break
    @case('henry')
        <h3>this is henry</h3>
        @break
    @default
        <h3>no one selected</h3>
@endswitch

@for ($i = 0; $i < 5; $i++)
    <h2>i = {{ $i }}</h2>
@endfor --}}


{{-- foreach và forelse để lấy ra từng phần tử --}}
{{-- @foreach ($names as $item)
    <h3>each name : {{ $item }}</h3>
@endforeach --}}

@forelse ($names as $item)
<h3>each name : {{ $item }}</h3>
@empty
    <h3>the array is empty</h3>
@endforelse

{{-- s --}}
    @endsection