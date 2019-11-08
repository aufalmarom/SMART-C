<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>SMART-C | Membentuk Resiliensi Digital pada Anak</title>
	<link rel="icon" href="{{asset('img/icon_web.ico')}}" type="image/x-icon" />
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
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/atlantis.css')}}">
</head>

<body class="bg-welcome">
	<div>
		@yield('content')
	</div>
	<footer>

	</footer>
	<script src="{{asset('js/core/jquery.3.2.1.min.js')}}"></script>
	<script src="{{asset('js/core/popper.min.js')}}"></script>
	<script src="{{asset('js/core/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
	<script src="{{asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
	<script src="{{asset('js/plugin/chart.js/chart.min.js')}}"></script>
	<script src="{{asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('js/plugin/chart-circle/circles.min.js')}}"></script>
	<script src="{{asset('js/plugin/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
	<script src="{{asset('js/plugin/sweetalert/sweetalert.min.js')}}"></script>
	<script src="{{asset('js/plugin/select2/select2.full.min.js')}}"></script>
	<script src="{{asset('js/atlantis.js')}}"></script>
	@include('sweetalert::alert')

	@yield('js')

</body>

</html>