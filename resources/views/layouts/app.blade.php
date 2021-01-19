<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  @include('layouts.imports')
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
          <img src="{{ asset('img/nav.png') }}" style="height: 70px; width: 220px" />
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger">
          <i class="material-icons">menu</i>
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <!-- Authentication Links -->
        @if (Auth::guest())
          <li><a href="{{ url('/') }}">Início<i class="material-icons left">home</i></a></li>
          <li><a href="{{ url('/obituaries') }}">Obituários<i class="material-icons left">flare</i></a></li>
          <li><a href="{{ route('login') }}">Login<i class="material-icons left">https</i></a></li>
            <!--li><a href="{{ route('register') }}">Register</a></li-->
        @else
          @includeWhen(Auth::user(), 'layouts._admin_menu')
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

    <ul class="sidenav" id="mobile-demo">
      @if (Auth::guest())
        <li><a href="{{ url('/') }}">Início<i class="material-icons left">home</i></a></li>
        <li><a href="{{ url('/obituaries') }}">Obituários<i class="material-icons left">flare</i></a></li>
        <li><a href="{{ route('login') }}">Login<i class="material-icons left">https</i></a></li>
          <!--li><a href="{{ route('register') }}">Register</a></li-->
      @else
        @includeWhen(Auth::user(), 'layouts._admin_menu')
      @endif
    </ul>

    <div class="container">

    <div class="row">
      @include('layouts.flash-swal')
      @include('layouts.flash-confirm-swal')
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
        <p>Clique aqui e converse com um atendente agora mesmo pelo WhatsApp</p>
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
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</html>
