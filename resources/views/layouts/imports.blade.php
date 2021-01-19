<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Serluto') }}</title>

<link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!--  Scripts-->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="{{ asset('js/main.js') }}"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/3b05009bdc.js" crossorigin="anonymous"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!-- Sweet Alert-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- AOS -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
