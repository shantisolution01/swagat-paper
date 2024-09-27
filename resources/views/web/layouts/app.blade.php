<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Swagat Paper</title>

	<meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Boostrap style -->
	<link rel="stylesheet" type="text/css" href="{{url('public/web/assets/stylesheet/bootstrap.min.css')}}">

	<!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{url('public/web/assets/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/web/assets/revolution/css/settings.css')}}">

	<!-- Theme style -->
	<link rel="stylesheet" type="text/css" href="{{url('public/web/assets/stylesheet/style.css')}}">

	<!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{url('public/web/assets/stylesheet/colors/color1.css')}}" id="colors">

	<!-- Reponsive -->
	<link rel="stylesheet" type="text/css" href="{{url('public/web/assets/stylesheet/responsive.css')}}">

    <link href="{{url('public/web/assets/css/bootstrap-icons.css')}}" rel="stylesheet">

    {{-- <link href="{{url('public/web/assets/css/templatemo-festava-live.css')}}" rel="stylesheet"> --}}

	<!-- Favicon and touch icons  -->
    <link href="{{url('public/web/assets/icon/apple-touch-icon-48-precomposed.png')}}" rel="apple-touch-icon-precomposed">
    <link href="{{url('public/web/assets/icon/apple-touch-icon-32-precomposed.png')}}" rel="apple-touch-icon-precomposed">
    <link href="{{url('public/web/assets/icon/swagat.png')}}" rel="shortcut icon" type="image" >
    <link rel="stylesheet" type="text/css" href="{{ url('public/web/assets/css/build/toastr.css') }}">
    <style>
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            z-index:100;
        }

        .my-float{
            margin-top:16px;
        }
        .navbar{
            background: #963c5f;
        }
        .sticky-wrapper{
            position: inherit;
        }
    </style>
</head>
	<body>
        <main>
            <!-- Preloader -->
            <div id="loading-overlay">
                <div class="loader"></div>
            </div>


            <!--  preloader-end -->
            @include('web.layouts.header')

            @yield('content')

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            {{-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> --}}
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <a href="https://wa.me/+917573982207?text=Hi" class="float" target="_blank">
            <i class="fab fa-whatsapp my-float" style="font-size: 30px;"></i>
            </a>

            @include('web.layouts.footer')
        </main>
<!-- Javascript -->
<script type="text/javascript" src="{{url('public/web/assets/javascript/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/tether.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/jquery.flexslider-min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/jquery.easing.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/jquery-countTo.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/jquery.cookie.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/jquery.counterup.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/web/assets/js/toastr.js') }}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/main.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/js/jquery.sticky.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/js/custom.js')}}"></script>
<!-- Revolution Slider -->
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/slider_v1.js')}}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-150JYFSQQG"></script>
<script type="text/javascript">
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";

    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif


</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-150JYFSQQG');
</script>
<script type="text/javascript">
    var url = "{{ route('changeLang') }}";
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
</script>
@yield('section_js')
</body>
</html>
