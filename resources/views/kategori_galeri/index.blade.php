@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <center><div class="card-header bg-info"><b>Kategori Galeri</div></center>
                <div class="card-body">
                    
                <table class="table table-bordered">
                    <thead class="bg-primary">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">User_id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Update</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $listKategoriGaleri as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->nama !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s')!!}</td>
                        <td>{!! $item->updated_at->format('d/m/Y H:i:s')!!}</td>
                        <td>
                        <a href="{!! route('kategori_galeri.show',[$item->id]) !!}" class="btn btn-sm btn-success">Detail</a>
                        
                        <a href="{!! route('kategori_galeri.edit',[$item->id]) !!}" class="btn btn-sm btn-warning"><b>Edit</a>
                        

                        {!! Form::open(['route'=>['kategori_galeri.destroy',$item->id],'method'=>'delete']) !!}

                        {!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm ('Yakin menghapus data ini?')"]); !!}

                        {!! Form::close() !!}

                        </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
                    <td>
                        <a href="{!! route('kategori_galeri.create') !!}" class="btn btn-warning"><b>Tambah Data</a>
                    </td>
            </div>
        </div>
    </div>
</div>
</div>
@endsection