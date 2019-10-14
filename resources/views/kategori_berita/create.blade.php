@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header bg-primary"><b>Tambah Kategori Berita</div></center>
                <div class="background-color bg-info">

                <div class="card-body">
                {!! Form::open(['route'=>'kategori_berita.store', 'method'=>'post']) !!}
                     @include('kategori_berita.form')
                {!! Form::close() !!}
                </div>
            </div>
        </div>
     </div>
@endsection