@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
             
			<table class="table">
			  <thead class="bg-info">
			    <tr>
			      <th scope="col">Id</th>
			      <th scope="col">Nama</th>
			      <th scope="col">User_id</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($kategoriGaleri as $item)
				<tr>
					<td>{!! $item->id !!}</td>
					<td>{!! $item->nama !!}</td>
					<td>{!! $item->users_id !!}</td>
				</tr>
				@endforeach
			</tbody>
			</table>

		@endsection

		