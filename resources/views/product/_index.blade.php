@extends('templates.index')
@section('page_title','Produk')
@section('page_desc','pengelolaan data produk')
@section('content')
@include('product._main',$data)
@endsection