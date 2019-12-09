<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>SMART-C | Membentuk Resiliensi Digital pada Anak</title>
	<link rel="icon" href="{{asset('public/img/icon_web.ico')}}" type="image/x-icon" />
	<script src="{{asset('public/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<link rel="stylesheet" href="{{asset('public/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/atlantis.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/animate.css')}}">
	
	<script src="{{asset('public/js/core/jquery.3.2.1.min.js')}}"></script>
	<script src="{{asset('public/js/core/popper.min.js')}}"></script>
	<script src="{{asset('public/js/core/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('public/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
	<script src="{{asset('public/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
	<script src="{{asset('public/js/plugin/jquery-easing/jquery.easing.min.js')}}"></script>
	<script src="{{asset('public/js/plugin/chart.js/chart.min.js')}}"></script>
	<script src="{{asset('public/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('public/js/plugin/chart-circle/circles.min.js')}}"></script>
	<script src="{{asset('public/js/plugin/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('public/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
	<script src="{{asset('public/js/plugin/sweetalert/sweetalert.min.js')}}"></script>
	<script src="{{asset('public/js/plugin/select2/select2.full.min.js')}}"></script>
	<script src="{{asset('public/js/atlantis.js')}}"></script>

</head>

@yield('body')

</html>
