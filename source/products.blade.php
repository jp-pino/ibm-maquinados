@extends('_layouts.master')

@section('body')
  <div class="bg-gradient-br-blue-shades h-full bg-scroll md:bg-fixed parallax bg-center bg-cover py-8 bg-blend-soft-light" data-offset="0" data-offset-lg="-50" style="background-image: url({{ $page->baseUrl }}assets/img/iStock-155600111_O.jpg)">
  {{-- <div class="bg-gradient-br-blue-shades h-full bg-scroll md:bg-fixed parallax bg-cover lg:bg-contain py-8"> --}}
  	<div class="container py-64 mx-auto">
  		<h1 class="text-white text-center text-5xl md:text-8xl "><span class="opacity-90 bg-gradient-br-blue-shades-dark px-2 pb-1 rounded-sm">Productos</span></h1>
  	</div>
  </div>

  <div class="-mt-48 md:-mt-48 lg:-mt-64">
  	<svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
  	<g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
  	<path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
  	<path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
  	<path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
  	</g>
  	<g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
  	<path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
  	</g>
  	</g>
  	</svg>
  </div>

  <div class="h-48 -mt-8 bg-white">


  <div class="container lg:px-24 mx-auto my-8 pt-8 w-10/12 bg-white">
  	<div class="flex flex-wrap mt-16">
  		<div class="w-full">
  			<h1 class="text-4xl mb-1 font-bold">Nuestros productos</h1>
  			<div class="h-1 w-9/12 md:w-6/12 lg:w-6/12 xl: bg-gradient-br-blue-shades"></div>
  			<p class="text-justify mt-16 text-lg">IBM Maquinados S.A. de C.V. se constituyo en el año 2005 con el propósito de ofrecer a la industria nacional refacciones y equipo industrial con la mas alta calidad y a precios accesibles. Somos un equipo de profesionales en diversas áreas de ingeniería (industrial, mecánica y materiales), operadores altamente calificados, ingenieros de campo y personal administrativo, comprometidos con proporcionar un servicio de ingeniería que supere las expectativas de nuestros clientes. A través de diversas empresas del grupo IBM, nos respaldan 30 años de experiencia, que hemos adquirido gracias a la constante trayectoria de trabajo y desarrollo de proyectos para empresas como Petróleos Mexicanos, Industrias Peñoles, Grupo Acerero Del Norte, Grupo LuisMin, Gold Corp México, Capstone Gold, entre otras.</p>
  		</div>
  	</div>
  </div>

  <div id="general" class="bg-gradient-br-blue-shades bg-scroll md:bg-fixed parallax bg-center bg-cover overflow-x-hidden" data-offset="0" data-offset-lg="-100" style="background-image: url({{ $page->baseUrl }}assets/img/iStock-171158907.jpg);">
    <img class="w-full h-full" src="{{ $page->baseUrl }}assets/img/divider.svg" style="transform:scaleX(1.015) translateY(-1px);">
    <div class="container py-48 mx-auto">
      <h1 class="text-white text-center text-4xl md:text-6xl"><span class="bg-gradient-br-blue-shades-dark px-4 py-1 rounded-sm opacity-90">Industria en general</span></h1>
    </div>
  </div>

  <div class="container lg:px-24 mx-auto my-8 pt-8 w-10/12 bg-white">
    <div class="font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 md:pl-8 transition-all">Fabricación y reparación de cojinetes de deslizamiento (Babbitt)</div>
    <div class="font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 md:pl-8 transition-all">Fabricación y reparación de cilindros hidráulicos </div>
    <div class="font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 md:pl-8 transition-all">Engranes, coronas, sin fines, piñones</div>
    <div class="font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 md:pl-8 transition-all">Bujes y mamelones</div>
    <div class="font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 md:pl-8 transition-all">Carcasas, tapas</div>
    <div class="font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 md:pl-8 transition-all">Flechas, poleas, impulsores</div>
  </div>

  <div id="minera" class="bg-gradient-br-blue-shades bg-scroll md:bg-fixed parallax bg-center bg-cover overflow-x-hidden" data-offset="0" data-offset-lg="-100" style="background-image: url({{ $page->baseUrl }}assets/img/iStock-457740707.jpg);">
  	<img class="w-full h-full" src="{{ $page->baseUrl }}assets/img/divider.svg" style="transform:scaleX(1.015) translateY(-1px);">
  	<div class="container py-48 mx-auto">
  		<h1 class="text-white text-center text-4xl md:text-6xl"><span class="bg-gradient-br-blue-shades-dark px-4 py-1 rounded-sm opacity-90">Industria Minera</span></h1>
  	</div>
  </div>

  <div class="container lg:px-24 mx-auto my-8 pt-8 w-10/12 bg-white">
      <p class="w-full text-justify text-lg">Maquinaria pesada para la extracción:</p>
  </div>

  <div class="container lg:px-24 mx-auto my-8 w-10/12 bg-white">

    <button class="accordion-button font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 hover:bg-gray-400 transition-all"><span class="px-8">Refacciones para scooptrams</span></button>
    <div class="accordion-content h-0 overflow-hidden bg-gray-100 px-8 transition-all">
      <ul class="py-4 list-inside list-disc">
        <li>Fabricación de cucharones</li>
        <li>Reparación de cucharones</li>
        <li>Cilindros hidráulicos</li>
        <li>Huesos de perro</li>
        <li>Brazos</li>
        <li>Pernos de acero</li>
        <li>Bujes de acero y bronce</li>
      </ul>
    </div>

    <button class="accordion-button font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 hover:bg-gray-400 transition-all"><span class="px-8">Refacciones para jumbos</span></button>
    <div class="accordion-content h-0 overflow-hidden bg-gray-100 px-8 transition-all">
      <ul class="py-4 list-inside list-disc">
        <li>Sillas para martillo</li>
        <li>Centralizadores</li>
        <li>Reparación de plumas</li>
        <li>Cilindros hidráulicos</li>
        <li>Soportes para poleas</li>
        <li>Poleas</li>
        <li>Tambores para mangueras</li>
        <li>Patines</li>
      </ul>
    </div>



    <button class="accordion-button font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 hover:bg-gray-400 transition-all"><span class="px-8">Maquinados en sitio</span></button>
    <div class="accordion-content h-0 overflow-hidden bg-gray-100 px-8 transition-all">
      <ul class="py-4 list-inside list-disc">
        <li>Mandrilado</li>
        <li>Torneado</li>
        <li>Barrenado</li>
      </ul>
    </div>
  </div>


  <div class="container lg:px-24 mx-auto my-8 pt-8 w-10/12 bg-white">
      <p class="w-full text-justify text-lg">Procesamiento en planta:</p>
  </div>

  <div class="container lg:px-24 mx-auto my-8 w-10/12 bg-white">
    <button class="accordion-button font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 hover:bg-gray-400 transition-all"><span class="px-8">Reparación de quebradoras</span></button>
    <div class="accordion-content h-0 overflow-hidden bg-gray-100 px-8 transition-all">
      <ul class="py-4 list-inside list-disc">
        <li>Fabricación y reparación de muelas</li>
        <li>Fabricación de alimentador de placas</li>
        <li>Fabricación de cilindros hidráulicos</li>
      </ul>
    </div>

    <button class="accordion-button font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 hover:bg-gray-400 transition-all"><span class="px-8">Refacciones para bombas</span></button>
    <div class="accordion-content h-0 overflow-hidden bg-gray-100 px-8 transition-all">
      <ul class="py-4 list-inside list-disc">
        <li>Flechas</li>
        <li>Mangas</li>
        <li>Carcasas</li>
        <li>Impulsores</li>
        <li>Linternillas</li>
        <li>Tapas para balero</li>
      </ul>
    </div>

    <button class="accordion-button font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 hover:bg-gray-400 transition-all"><span class="px-8">Refacciones para molinos</span></button>
    <div class="accordion-content h-0 overflow-hidden bg-gray-100 px-8 transition-all">
      <ul class="py-4 list-inside list-disc">
        <li>Muñones</li>
        <li>Cojinetes (y aplicación de Babbitt)</li>
        <li>Trunnion</li>
        <li>Tapas</li>
        <li>Piñones</li>
        <li>Coronas</li>
        <li>Codos de alimentación</li>
      </ul>
    </div>

  </div>

  <div id="cilindros" class="bg-gradient-br-blue-shades bg-scroll md:bg-fixed parallax bg-center bg-cover overflow-x-hidden" data-offset="0" data-offset-lg="-100" style="background-image: url({{ $page->baseUrl }}assets/img/AdobeStock_209976704.jpeg);">
  	<img class="w-full h-full" src="{{ $page->baseUrl }}assets/img/divider.svg" style="transform:scaleX(1.015) translateY(-1px);">
  	<div class="container py-48 mx-auto">
  		<h1 class="text-white text-center text-4xl md:text-6xl"><span class="bg-gradient-br-blue-shades-dark px-4 py-1 rounded-sm opacity-90">Cilindros hidráulicos</span></h1>
  	</div>
  </div>

  <div class="container lg:px-24 mx-auto my-8 pt-8 w-10/12 bg-white">
    <div class="font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 md:pl-8 transition-all">Reparación</div>

    <div class="font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 md:pl-8 transition-all">Cambio de juego de sellos</div>

    <div class="font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 md:pl-8 transition-all">Fabricación de camisas, vástagos, émbolos, tapas y ojillos</div>
  </div>

  <div id="construccion" class="bg-gradient-br-blue-shades bg-scroll md:bg-fixed parallax bg-center bg-cover overflow-x-hidden" data-offset="0" data-offset-lg="-100" style="background-image: url({{ $page->baseUrl }}assets/img/AdobeStock_239723881.jpeg);">
  	<img class="w-full h-full" src="{{ $page->baseUrl }}assets/img/divider.svg" style="transform:scaleX(1.015) translateY(-1px);">
  	<div class="container py-48 mx-auto">
  		<h1 class="text-white text-center text-4xl md:text-6xl"><span class="bg-gradient-br-blue-shades-dark px-4 py-1 rounded-sm opacity-90">Construcción</span></h1>
  	</div>
  </div>

  <div class="container lg:px-24 mx-auto my-8 pt-8 w-10/12 bg-white">
      <p class="w-full text-justify text-lg">Nos especializamos también en la reparación de maquinaria pesada para la construcción:</p>
  </div>

  <div class="container lg:px-24 mx-auto my-8 pt-8 w-10/12 bg-white">
    <div class="font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 md:pl-8 transition-all">Retroexcavadoras</div>
    <div class="font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 md:pl-8 transition-all">Perforadoras</div>
    <div class="font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 md:pl-8 transition-all">Camiones de volteo</div>
  </div>



  <div id="paileria" class="bg-gradient-br-blue-shades bg-scroll md:bg-fixed parallax bg-center bg-cover overflow-x-hidden" data-offset="0" data-offset-lg="-100" style="background-image: url({{ $page->baseUrl }}assets/img/AdobeStock_92076411.jpeg);">
  	<img class="w-full h-full" src="{{ $page->baseUrl }}assets/img/divider.svg" style="transform:scaleX(1.015) translateY(-1px);">
  	<div class="container py-48 mx-auto">
  		<h1 class="text-white text-center text-4xl md:text-6xl"><span class="bg-gradient-br-blue-shades-dark px-4 py-1 rounded-sm opacity-90">Pailería</span></h1>
  	</div>
  </div>

  <div class="container lg:px-24 mx-auto my-8 pt-8 w-10/12 bg-white">
    <div class="font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 md:pl-8 transition-all">Fabricación y reparación de tanques y silos</div>
    <div class="font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 md:pl-8 transition-all">Fabricación y reparación de cucharones</div>
    <div class="font-semibold w-full bg-gray-200 border-b-2 text-center md:text-left py-4 md:pl-8 transition-all">Armaduras y estructuras metálicas</div>
  </div>

@endsection

@push('scripts')
  <script>
    $('.accordion-button').click(function() {
      $(this).toggleClass('bg-gray-400');
      let accordion = $(this).next('.accordion-content');
      if (accordion.height() == 0) {
        accordion.height(accordion[0].scrollHeight);
      } else {
        accordion.height(0);
      }
    });
  </script>

	<script src="{{ $page->baseUrl }}assets/build/js/parallax.js"></script>
@endpush
