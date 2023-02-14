@extends('layouts.main')	
	@section('body')


		@foreach ($barangs as $barang)

		<button onclick="halo({{ $barang->id }})">5</button>

		@endforeach


		<p id="ada">disini</p>
		



<script type="text/javascript">
	
		const order = [];

		
		function halo($id) {

				order.push($id);
				document.getElementById('ada').innerHTML = order;

		}





</script>

	@endsection

