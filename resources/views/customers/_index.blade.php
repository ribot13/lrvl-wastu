@extends('templates.index')
@section('page_title','Customer')
@section('page_desc','pengelolaan data customer')
@section('content')
@include('customers._main',$data)
@endsection