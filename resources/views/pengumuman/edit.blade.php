@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-primary"><b>Tambah Pengumuman</div></center>
                <div class="background-color bg-info">

                <div class="card-body">
                	
                    {!! Form::model($listPengumuman, ['route'=>['pengumuman.update',$listPengumuman->id],'method'=>'patch']) !!}
                	
                    @include('pengumuman.form')

                	{!! Form::close() !!}
                </div>
            </div>
        </div>
     </div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>

        <script>
                $(document).ready(function() {
                 CKEDITOR.replace( 'isi' );


                });
        </script>
@endsection