@extends('layouts.master')
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<strong><center><h3 class="panel-title">Data Mahasiswa</h3></center></strong>
							<br>
							<form class="form-inline my-2 my-lg-0" method="get" action="/mahasiswa">
     						 <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
     						 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
   							 </form>
						<div class="right">
						<a type="button" id="exampleModalLabel" href="/mahasiswa/create" class="btn" data-toggle="modal" data-target="#exampleModal" method="post"><i class="lnr lnr-plus-circle"></i></a>
						
					</div>
				</div>
						<div class="panel-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Nama</th>
										<th>NIM</th>
										<th>Email</th>
										<th>Jurusan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data_mahasiswa as $mahasiswa)
									<tr>
										<td>{{$mahasiswa->nama}}</td>
										<td>{{$mahasiswa->nim}}</td>
										<td>{{$mahasiswa->email}}</td>
										<td>{{$mahasiswa->jurusan}}</td>
										<td><a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
										<td><a href="/mahasiswa/{{$mahasiswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')">Delete</a></td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
						  </div>
						  <div class="form-group">
						   	<label for="exampleInputEmail1">NIM</label>
						    <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIM">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email</label>
						    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Jurusan</label>
						    <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jurusan">
						  </div>
						</form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary">Submit</button>
				   		</form>
				      </div>
				    </div>
				  </div>
@stop
@section('content1')
@if(session('Sukses'))
<div class="alert alert-success" role="alert">
	{{session('Sukses')}}
</div>
@endif
<div class="row">
	<div class="col-6">
		<h1>Data Mahasiswa</h1>
	</div>

	<div class="col-6">
		<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
			Tambah Data Mahasiswa
		</button>
	</div>

	<table class="table table-hover">
								<thead>
									<tr>
										<th>Nama</th>
										<th>NIM</th>
										<th>Email</th>
										<th>Jurusan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data_mahasiswa as $mahasiswa)
									<tr>
										<td>{{$mahasiswa->nama}}</td>
										<td>{{$mahasiswa->nim}}</td>
										<td>{{$mahasiswa->email}}</td>
										<td>{{$mahasiswa->jurusan}}</td>
										<td><a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
										<td><a href="/mahasiswa/{{$mahasiswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')">Delete</a></td>
									</tr>
									@endforeach
							</table>
						</div>
					</div>


			@endsection