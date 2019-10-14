@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-info"><b>List Berita</div></center>
                <div class="card-body">
                    
                <table class="table table-bordered">
                    <thead class="bg-primary">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Users Id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $listBerita as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s') 
                        !!}</td>
                        <td>{!! $item->kategori_berita_id !!}</td>
                        <td>

                        <a href="{!! route('berita.show',[$item->id]) !!}" class="btn btn-sm btn-success">Detail</a>
                        
                        <a href="{!! route('berita.edit',[$item->id]) !!}" class="btn btn-sm btn-warning"><b>Edit</a>
                        

                        {!! Form::open(['route'=>['berita.destroy',$item->id],'method'=>'delete']) !!}

                        {!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm ('Yakin menghapus data ini?')"]); !!}

                        {!! Form::close() !!}

                        </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
                <a href="{!! route('berita.create') !!}" class="btn btn-warning">Tambah Data</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection