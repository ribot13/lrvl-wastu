@extends('templates.index')
@section('page_title','Merk')
@section('page_desc','Pengelolaan data merk.')
@section('content')
@include('merk._main',$data)
@endsection