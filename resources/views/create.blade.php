@extends('layouts.main')	
@section('body')

<div class="row justify-content-center ">
	<div class="col-4" style="border-style: solid; border-width: 5px; border-radius: 10px; padding: 5px">
		<form action="/dashboard" method="post">
			@method('POST')
			@csrf
			<h1>Tambah item baru</h1> <br><br>
			<h4>Silahkan buat data baru dibawah ini</h4>
			<div class="form-group">
			    <label for="nmbr">Nama Item:</label>
			    <input type="text" name="nama" class="form-control" id="nmbr" required>
		  	</div>
		  	<div class="form-group">
			    <label for="stk">Stok yang tersedia:</label>
			    <input type="number" name="stok" class="form-control" id="stk" required>
		  	</div>
			<button type="submit" class="btn btn-primary">Update</button> 
		</form>
	</div>
</div>

@endsection