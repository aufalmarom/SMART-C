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
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/atlantis.css')}}">
</head>
@yield('body')

</html>
