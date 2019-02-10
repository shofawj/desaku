<title>Desaku</title>

<meta charset="utf-8">
<meta name="description" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>

<script>
    WebFont.load({
        google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>

<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

<link href="{{ asset('assets/eventre/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ asset('assets/eventre/plugins/font-awsome/css/font-awesome.min.css') }}" rel="stylesheet">

<link href="{{ asset('assets/eventre/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

<link href="{{ asset('assets/eventre/plugins/slick/slick.css') }}" rel="stylesheet">
<link href="{{ asset('assets/eventre/plugins/slick/slick-theme.css ')}}" rel="stylesheet">

<link href="{{ asset('assets/eventre/css/style.css')}}" rel="stylesheet">

@stack('header-scripts')