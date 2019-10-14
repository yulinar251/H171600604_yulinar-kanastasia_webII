@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header bg-primary"><b>Tambah Berita</div></center>
                <div class="background-color bg-info">

                <div class="card-body">
                
                    {!! Form::model($Berita, ['route'=>['berita.update',$Berita->id],'method'=>'patch']) !!}
                    
                    @include('berita.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
     </div>
@endsection