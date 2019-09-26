@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Galeri</div>
                <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg btn-primary">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">User_id</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $galeri as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
		@endsection