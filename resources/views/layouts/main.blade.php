
<!DOCTYPE html>
<html lang="id">
<head>
	<style type="text/css">
		/* Bagian Kotak Hitam sidebar nya */
		.sidebar {
		  height: 100%; /* Tinggi Penuh 100% */
		  width: 0; /* lebar 0 - ubah ini dengan JavaScript */
		  position: fixed; /* Stay ditempat */
		   /* Stay diatas */
		  top: 0;
		  left: 0;
		  background-color: #111; /* Hitam */
		  overflow-x: hidden; /* Nonaktifkan horizontal scroll */
		  padding-top: 60px; /* Tempatkan konten 60px dari atas */
		  transition: 1s; /* Efek transisi 0,5 detik untuk meluncur di sidebar */
		}

				/* bagian style Link sidebar */
		.sidebar a {
		  padding: 8px 8px 8px 32px;
		  text-decoration: none;
		  font-size: 25px;
		  color: #818181;
		  display: block;
		  transition: 0.3s;
		}

		/* Saat Anda mengarahkan mouse ke link sidebar, ubah warnanya */
		.sidebar a:hover {
		  color: #f1f1f1;
		  text-decoration: none;
		}

		/* Posisikan dan style tombol close (pojok kanan atas) */
		.sidebar .closebtn {
		  position: absolute;
		  top: 0;
		  right: 25px;
		  font-size: 35px;
		  transition: 0.3s;
		}

		/* Tombol yang digunakan untuk membuka sidebar */
		.openbtn {
		  font-size: 20px;
		  cursor: pointer;
		  height: 50px;
		  width: 180px;
		  background-color: #111;
		  color: white;
		  padding: 10px 15px;
		  border: none;
		  transition: 1s;
		  position: absolute;
		  z-index: 1;
		}

		/* Mengatur style pada bagian main nya */
		#main {
		  transition: margin-left 1s; /* Jika Anda menginginkan efek transisi */
		  padding: 10px;
		}

		/* Pada layar yang lebih kecil, yang tingginya kurang dari 450px, ubah style sidenav (lebih sedikit padding dan ukuran font yang lebih kecil) */
		@media screen and (max-height: 450px) {
		  .sidebar {padding-top: 15px;}
		  .sidebar a {font-size: 18px;}
		  .sidebar .closebtn {right: 10px; font-size: 25px;}
		}

	</style>
	<title>{{ $title }}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

	<div id="mySidebar" class="sidebar">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Back</a>
	  <a href="/home">Home</a>
	  <a href="/dashboard">Catatan</a>
	  <a href="/kasir">Kasir</a>
	  <a href="#">Contact</a>
	</div>

	<div id="main">
	  <button id="openbtn" class="openbtn" onclick="openNav()">☰ Buka Sidebar</button>
	  <h2 style="margin-top: 50px;">Warunk N-Than</h2>
	  @yield('body')
	</div>
	
<script>
	
	/* Atur lebar sidebar menjadi 250px dan margin kiri konten halaman menjadi 250px */
	function openNav() {
	  document.getElementById("mySidebar").style.width = "250px";
	  document.getElementById("main").style.marginLeft = "250px";
	  document.getElementById("openbtn").style.fontSize = "0px";
	  document.getElementById("openbtn").style.width = "0px";
	  document.getElementById("openbtn").style.height = "0px";
	  document.getElementById("openbtn").style.padding = "0px";
	}

	/* Atur lebar sidebar menjadi 0 dan margin kiri konten halaman menjadi 0 */
	function closeNav() {
	  document.getElementById("mySidebar").style.width = "0";
	  document.getElementById("main").style.marginLeft = "0";
	  document.getElementById("openbtn").style.fontSize = "20px";
	  document.getElementById("openbtn").style.width = "180px";
	  document.getElementById("openbtn").style.height = "50px";
	  document.getElementById("openbtn").style.padding = "10px 15px";
	}


</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
	

</body>
</html>