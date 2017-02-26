@extends('templates.index')
@section('page_title','Jenis Produk')
@section('page_desc','pengelolaan jenis produk')
@section('content')
@section('page_scripts','jenisproduk')
@include('jenisproduk._main',$data)
@endsection

@push('plugins_css')

@endpush
@push('plugins_js')

@endpush
@push('scripts')
<script src='{{asset('scripts/pages/jenisproduk.js')}}'></script>
@endpush