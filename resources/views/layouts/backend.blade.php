<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>SMART-C | Dashboard Administrator</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('img/icon_web.ico')}}" type="image/x-icon"/>
	<script src="{{asset('js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/atlantis.css')}}">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue"style="
			justify-content: center;"z>
				
				<a href="{{route('dashboard')}}" class="logo text-white" style="margin-right:25px;">SMART-C	
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="{{asset('img/icon-web.png')}}" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="{{asset('img/icon-web.png')}}" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>{{Auth::user()->name}}</h4>
												<p class="text-muted">{{Auth::user()->email}}</p>
												<form action="{{route('logout')}}" method="post">
													@csrf
													<button type="submit" class="btn btn-xs btn-secondary btn-sm text-white">Keluar</button>
												</form>
												
											</div>
										</div>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{asset('img/icon-web.png')}}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample">
								<span>
									{{Auth::user()->name}}
									<span class="user-level">{{Auth::user()->email}}</span>
									<span class="caret"></span>
								</span>
							</a>

							<div class="collapse" id="collapseExample">
								<ul class="nav">
									<li>
										<form action="{{route('logout')}}" method="post">
											@csrf
											<button type="submit" class="btn btn-xs btn-secondary btn-sm text-white">Keluar</button>
										</form>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item {{request()->is('administrator/dashboard') ? 'active' : '' }}">
							<a href="{{route('dashboard')}}">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Recap Data</h4>
						</li>
						<li class="nav-item {{request()->is('administrator/users') ? 'active' : ''}}">
							<a href="{{route('users.read')}}">
								<i class="fas fa-users"></i>
								<p>Users</p>
							</a>
						</li>
						

						<li class="nav-item {{Request::is('administrator/diridigital', 'administrator/jejakdigital', 'administrator/mengenaliemosi','administrator/emosivirtual','administrator/cyberbullying','administrator/sumberdukungan','administrator/kontroldiri','administrator/pahlawansmart') ? 'active' : '' }}">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-gamepad"></i>
								<p>Game</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li class="nav-item">
										<a href="{{route('diridigital.read')}}">
											<p>Diri Digital</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('jejakdigital.read')}}">
											<p>JejakDigital</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('mengenaliemosi.read')}}">
											<p>Mengenali Emosi</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('emosivirtual.read')}}">
											<p>Emosi Virtual</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('cyberbullying.read')}}">
											<p>Cyberbullying</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('sumberdukungan.read')}}">
											<p>Sumber Dukungan</p>
										</a>
									</li>					
									<li class="nav-item">
										<a href="{{route('kontroldiri.read')}}">
											<p>Kontrol Diri</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('pahlawansmart.read')}}">
											<p>Pahlawan SMART</p>
										</a>
									</li>
								</ul>
							<div>
						</li>
						<li class="nav-item {{request()->is('administrator/feedback') ? 'active' : ''}}">
							<a href="{{route('feedback.read')}}">
								<i class="fas fa-star-half-alt"></i>
								<p>Feedback of SMARTER</p>
							</a>
						</li>
						
						
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				@yield('content')
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="{{route('dashboard')}}">
									SMART-C
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						Copyright © 2019, made with <i class="fa fa-heart heart text-danger"></i> by <a href="http://aufalmarom.id">Aufal Marom</a>
					</div>				
				</div>
			</footer>
		</div>
		
	</div>
	
	<script src="{{asset('js/core/jquery.3.2.1.min.js')}}"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="{{asset('js/core/popper.min.js')}}"></script>
	<script src="{{asset('js/core/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
	<script src="{{asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
	<script src="{{asset('js/plugin/chart.js/chart.min.js')}}"></script>
	<script src="{{asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('js/plugin/chart-circle/circles.min.js')}}"></script>
	<script src="{{asset('js/plugin/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('js/plugin/sweetalert/sweetalert.min.js')}}"></script>
	<script src="{{asset('js/atlantis.js')}}"></script>

	@include('sweetalert::alert')

	@yield('js')
	{{-- <script src="{{asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script> --}}
	<script src="{{asset('js/style.js')}}"></script>
	
	
</body>
</html>
