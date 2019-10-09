<!DOCTYPE html>
<html lang="en">
<head>
	<title>SMART-C | Membentuk Resiliensi Digital pada Anak</title>
	<link rel="icon" href="{{asset('assets/img/icon_web.ico')}}" type="image/x-icon"/>
	<script src="{{asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/atlantis.css')}}">
</head>
<body class="bg-welcome">
	<div>
		@yield('content')
	</div>
	<footer>
		
	</footer>
	<script src="{{asset('assets/js/core/jquery.3.2.1.min.js')}}"></script>
	<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
	<script src="{{asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
	<script src="{{asset('assets/js/plugin/chart.js/chart.min.js')}}"></script>
	<script src="{{asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('assets/js/plugin/chart-circle/circles.min.js')}}"></script>
	<script src="{{asset('assets/js/plugin/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
	<script src="{{asset('assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>
	<script src="{{asset('assets/js/atlantis.js')}}"></script>
</body>
</html>
