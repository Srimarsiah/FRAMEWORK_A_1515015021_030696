<!DOCTYPE html>
<html lang="en">
<head>
	<meta charshet="UTF-8">		
	<title>@yield('page_tittle','Halaman Awal') | Pemerograman Framework</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
	<style type="text/css">
		body{
			padding-top: 70px;
			padding-bottom: 70px;
		}
		.stsrter-template{
			padding: 40px 15px;
			text-align: center;
		}
		.form-horizontal{
			padding: 15px 10px;
		}
		footer{
			padding-top: 15px;
			text-align: right;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="nvbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>					
				</button>
				<a href="{{url('/')}}" class="navbar-brand">Laravel-5</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mahasiswa <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="{{url('mahasiswa')}}">Data Mahasiswa</a></li>
							<li class="divider"></li>
							<li><a href="{{url('jadwal_matakuliah')}}">Jadwal Mahasiswa</a></li>
						</ul>
					</li>
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dosen <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="{{url('dosen')}}">Data Dosen</a></li>
							<li class="divider"></li>
							<li><a href="{{url('dosen_matakuliah')}}">Jadwal Dosen Mengajar</a></li>
						</ul>
					</li>
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pengaturan <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="{{url('pengguna')}}">Pengguna</a></li>
							<li><a href="{{url('ruangan')}}">Ruangan</a></li>
							<li><a href="{{url('matakuliah')}}">Matakuliah</a></li>
						</ul>
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="clearfix"></div>
	<div class="container">
		@if (Session::has('informasi'))
		<div class="alert alert-info">
			<strong>Informasi: </strong>{{Session::get('Informasi')}}
		</div>
		@endif	
		@yield('container')
	</div>
	<nav class="navbar navbar-default navbar-fixed-bottom">
		<footer class="container">
			created by <a href=""><span><i class="fa fa-twitter" style="color:#1daf12"></i>@Sri Marsiah</span></a>
		</footer>
	</nav>
	<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript">
	$(function(){
		$('[data-toggle="tooltip"]').tooltip()
	});
	</script>
</body>
</html>