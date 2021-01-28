@extends('layouts.app')

@section('content')
<script> hideDiv()</script>
</div>
</div>

<header class="header" data-aos="fade-left">
  <div class="text-box">
    <h2 class="heading-primary">
      <span class="heading-primary-main" data-aos="fade-right">Funerária SerLuto</span>
      <span class="heading-primary-sub" data-aos="fade-left">Respeito ao ser humano e à natureza</span>
    </h2>
  </div>
</header>

<div class="container">
  <div class="section">
    @include('modals.modal')
  </div>
</div>

<div id="advantages" data-aos="fade-up">
  <div class="texbox">
    <h2 class="heading-secondary">
      <span id="heading-primary" data-aos="fade-right">Funerária SerLuto</span>
      <span id="heading-secondary" data-aos="fade-left">Tranquilidade para quem fica</span>
    </h2>
  </div>
</div>
<br>

<div class="row grey lighten-3">
  <div class="l6 s12 left" id="adress" data-aos="fade-left">
    <h3>Endereço</h3>
    <p>Cidade: Turvo - PR - 85150000</p>
    <p>Rua: Eucalina Nunes, Número: 501, centro</p>
    <p>Referência: Próximo a rodoviária.</p>
    <p>Telefone 1: (42) 3642-1943</p>
    <p>Telefone 2: (42) 99134-3218</p>
    <p>Telefone 3: (42) 99114-4637</p>
  </div>

  <div class="l6 s12 right" data-aos="fade-right">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1018.5880452141255!2d-51.53899934416549!3d-25.047837032725315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDAyJzUxLjQiUyA1McKwMzInMTkuNiJX!5e0!3m2!1spt-BR!2sbr!4v1611289462999!5m2!1spt-BR!2sbr" allowfullscreen="" aria-hidden="false" width="500px" height="400px"></iframe>
  </div>
</div>
@endsection
