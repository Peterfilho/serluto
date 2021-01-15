<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
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
  

</head>
<body>
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="{{ url('/profile') }}">Perfil</a></li>
      <li>
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        Sair
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    </li>
    </ul>

    <!-- Nav -->
    <nav>
      <div class="nav-wrapper">
        <a href="{{ url('/') }}" class="brand-logo">
          <img src="{{ asset('img/serlutoTrans.png') }}" style="height: 70px; width: 220px" />
          <!-- {{ config('app.name', 'Funerária Serluto') }} -->
        </a>
        <ul class="right hide-on-med-and-down">
        <!-- Authentication Links -->
        @if (Auth::guest())
          <li><a href="#">Início<i class="material-icons left">home</i></a></li>
          <li><a href="#">Obituários<i class="material-icons left">flare</i></a></li>
          <li><a href="{{ route('login') }}">Login<i class="material-icons left">https</i></a></li>
            <!--li><a href="{{ route('register') }}">Register</a></li-->
        @else
          @includeWhen(Auth::user(), 'layouts._admin_menu')

          <!-- Dropdown Trigger -->
          <li class="right">
            <a class="dropdown-trigger" href="#!" data-target="dropdown1">
              <i class="fas fa-user-shield left"></i>
              {{ Auth::user()->name }}
              <i class="material-icons right">arrow_drop_down</i>
            </a>
          </li>
          @endif
        </ul>
      </div>
    </nav>

    <!-- <div class="section no-pad-bot" id="index-banner">
      <div class="row center">
        <img class="responsive-img" src="{{ asset('img/logo1.png') }}"></img>
        <h5 class="header col s12 light">Respeito ao ser humano e à natureza</h5>
      </div>
    </div>
  </div> -->

    <!-- <div class="section" -->

      <!--   Icon Section   -->
      <!-- <div class="row">
        <div class="col s12 m4 l4">
          <div class="icon-block">
            <h2 class="center light-green-text"><i class="fas fa-award"></i></h2>
            <h5 class="center">Plano 1</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4 l4 z-depth-1">
          <div class="icon-block">
            <h2 class="center light-green-text"><i class="fas fa-award"></i></h2>
            <h5 class="center">Plano 2</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4 l4">
          <div class="icon-block">
            <h2 class="center light-green-text"><i class="fas fa-award"></i></h2>
            <h5 class="center">Plano 3</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>
    </div> -->
    <div class="container">

    <div class="row">
        @include('flash::message')
    </div>
    <div class="row">
      @yield('content')
    </div>

    <div class="fixed-action-btn">
      <a class="btn-floating btn-large green pulse" id="wpp" href="https://api.whatsapp.com/send?1=pt_BR&phone=42988151563&text=Contato%20do%20site" target="_blank">
        <i class="fab fa-whatsapp"></i>
      </a>
      <ul>
        <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
        <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
        <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
        <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
      </ul>
    </div>

    <!-- Tap Target Structure -->
    <div class="tap-target green lighten-1 white-text" data-target="wpp">
      <div class="tap-target-content">
        <h5>Atendimento via WhatsApp</h5>
        <p>Clique aqui e converse com um atendente pelo WhatsApp</p>
      </div>
    </div>
  </div>


    <footer class="page-footer green lighten-1 s12">
      <div class="container" id="footer">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Funerária Serluto</h5>
            <p class="grey-text text-lighten-4">Há mais de 20 anos atendendo a comunidade de Turvo e região firmamos o compromisso e respeito dando todo suporte necessário no momento mais difícil dando tranquilidade aos clientes.</p>
          </div>
          <div class="col l3 s12 right">
            <h5 class="white-text">Contato</h5>
            <ul id="social">
              <li><a class="white-text" href="#!"><i class="fab fa-facebook-square fa-2x"></i> Facebook</a></li>
              <li><a class="white-text" href="#!"><i class="fab fa-instagram-square fa-2x"></i> Instagram</a></li>
              <li><a class="white-text" href="#!"><i class="fab fa-whatsapp-square fa-2x"></i> Whatsapp</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright" id="footer-copyright">
          <div class="row l12">
            <div class="l6 s12 center">
              Funerária Serluto - Turvo - Paraná - 2021
            </div>
            <div class="l6 center">
              Desenvolvido por: <a class="orange-text text-lighten-3" href="#">Peterson Medeiros</a>
            </div>
          </div>
      </div>
    </footer>
</body>
</html>
