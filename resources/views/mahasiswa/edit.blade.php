@extends('layouts.master')
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">

					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
									<form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
				      		{{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{$mahasiswa->nama}}">
						  </div>
						  <div class="form-group">
						   	<label for="exampleInputEmail1">NIM</label>
						    <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIM" value="{{$mahasiswa->nim}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email</label>
						    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{$mahasiswa->email}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Jurusan</label>
						    <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jurusan" value="{{$mahasiswa->jurusan}}" >
						  </div>
						   <button type="submit" class="btn btn-warning">Update</button>
				   		</form>
								</div>
							</div>

					</div>
				</div>
			</div>
		</div>
	</div>
@stop
@section('content1')
		<h1>EDIT DATA MAHASISWA</h1>
		@if(session('Sukses'))
		<div class="alert alert-success" role="alert">
  			{{session('Sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-lg-12">
			<form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
				      		{{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{$mahasiswa->nama}}">
						  </div>
						  <div class="form-group">
						   	<label for="exampleInputEmail1">NIM</label>
						    <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIM" value="{{$mahasiswa->nim}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email</label>
						    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{$mahasiswa->email}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Jurusan</label>
						    <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jurusan" value="{{$mahasiswa->jurusan}}" >
						  </div>
						   <button type="submit" class="btn btn-warning">Update</button>
				   		</form>
				   	</div>
				      </div>
		</div>
@endsection