@extends('templates.index')
@section('page_title','Dashboard')
@section('page_desc','Selamat datang kawan-kawan')
@section('content')
test
<br>
{{route::current()->getName()}}
<br>
@if(count($_navs))
@foreach($_navs as $nav)
{{$nav->title}}
<br>
@endforeach
@endif
@stop