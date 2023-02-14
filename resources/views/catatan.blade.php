@extends('layouts.main')	
	@section('body')

	 <h1>Halaman Catatan Pembukuan</h1>

	 @if ($message = Session::get('success'))
	    <div class="alert alert-success alert-dismissible fade show" role="alert">
	        <strong><p>{{ $message }}</p></strong>
	        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	 @endif

	 <a href="/dashboard/create"><button type="button" class="btn btn-success">Tambah Data</button></a>

	 	 <table class="table">
		    <thead>
		      <tr>
		        <th>Barang</th>
		        <th>Stok</th>
		        <th>Tindakan</th>
		      </tr>
		    </thead>
		     @foreach ($barangs as $barang)
		    <tbody>
		      <tr>
		        <td>{{ $barang['nama'] }}</td>
		        <td>{{ $barang['stok'] }}</td>
		        <td>
		        	<a href="/dashboard/{{ $barang->id }}/edit"><button type="button" class="btn btn-primary">Update</button></a>

			        <form action="/dashboard/{{ $barang->id }}" method="POST" class="d-inline">
			        	@method('DELETE')
			        	@csrf
			       		<button type="submit" onclick="return confirm('yakin ingin menghapus data?')" class="btn btn-danger">Delete</button>
			       	</form>
		   		</td>
		      </tr>
		    </tbody>
		     @endforeach
		  </table>
	@endsection