@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <center><div class="card-header bg-info"><b>Tambah Galeri </div></center>
                <div class="card-body">
                
                <table class="table table-bordered">
                    <thead class="bg-primary">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Path</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Kategori Id</th>
                        <th scope="col">User_id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $listGaleri as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->nama !!}</td>
                        <td>{!! $item->path !!}</td>
                        <td>{!! $item->keterangan !!}</td>
                        <td>{!! $item->kategori_galeri_id !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at !!}</td>
                        <td>

                        <a href="{!! route('galeri.show',[$item->id]) !!}" class="btn btn-sm btn-success">Detail</a>
                        
                        <a href="{!! route('galeri.edit',[$item->id]) !!}" class="btn btn-sm btn-warning"><b>Edit</a>
                        

                        {!! Form::open(['route'=>['galeri.destroy',$item->id],'method'=>'delete']) !!}

                        {!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm ('Yakin menghapus data ini?')"]); !!}

                        {!! Form::close() !!}

                        </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
                <a href="{!! route('galeri.create') !!}" class="btn btn-warning">Tambah Data</a>
        @endsection