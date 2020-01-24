@extends('_layouts.master')

@section('body')

<div class="bg-gradient-br-blue-shades h-full bg-scroll md:bg-fixed parallax bg-center bg-cover py-8 bg-blend-soft-light" data-offset="0" data-offset-lg="-50" style="background-image: url({{ $page->baseUrl }}assets/img/iStock-458884391.jpg)">
{{-- <div class="bg-gradient-br-blue-shades h-full bg-scroll md:bg-fixed parallax bg-cover lg:bg-contain py-8"> --}}
	<div class="container py-64 mx-auto">
		<h1 class="text-white text-center text-5xl md:text-8xl "><span class="opacity-90 bg-gradient-br-blue-shades-dark px-2 pb-1 rounded-sm">Nosotros</span></h1>
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
		<div class="w-full md:w-1/2">
			<h1 class="text-4xl mb-1 font-bold">¿Quiénes somos?</h1>
			<div class="h-1 w-9/12 md:w-7/12 bg-gradient-br-blue-shades"></div>
			<p class="text-justify mt-16 text-lg">IBM Maquinados S.A. de C.V. se constituyo en el año 2005 con el propósito de ofrecer a la industria nacional refacciones y equipo industrial con la mas alta calidad y a precios accesibles. Somos un equipo de profesionales en diversas áreas de ingeniería (industrial, mecánica y materiales), operadores altamente calificados, ingenieros de campo y personal administrativo, comprometidos con proporcionar un servicio de ingeniería que supere las expectativas de nuestros clientes. A través de diversas empresas del grupo IBM, nos respaldan 30 años de experiencia, que hemos adquirido gracias a la constante trayectoria de trabajo y desarrollo de proyectos para empresas como Petróleos Mexicanos, Industrias Peñoles, Grupo Acerero Del Norte, Grupo LuisMin, Gold Corp México, Capstone Gold, entre otras.</p>
		</div>
		<div class="flex w-full md:w-1/2 mt-8 md:mt-0">
			<div class="flex flex-wrap">
				<div class="flex w-full mt-3 md:mt-0 sticky md:static top-2/10 z-10 px-1">
					<div class="max-w-sm mx-auto rounded overflow-hidden shadow-lg bg-gradient-b-blue-shades-ultra-dark text-white md:hover:scale-110 transition-transform scroll-shrink">
					  <div class="p-6">
					    <div class="font-bold text-xl mb-2">Misión</div>
							<p class="text-white opacity-70 text-base text-justify">
					      Fabricar productos y refacciones de la más alta calidad, con el mejor servicio y con los costos más accesibles, para satisfacer las necesidades y superar las expectativas de nuestros clientes actuales y futuros, generando oportunidades de desarrollo para nuestros colaboradores, y manteniendo un compromiso de desarrollo sustentable.
					    </p>
					  </div>
					</div>
				</div>
				<div class="flex w-full content-center mt-4 z-20 px-1">
					<div class="max-w-sm mx-auto rounded overflow-hidden shadow-lg bg-gradient-b-blue-shades-ultra-dark text-white md:hover:scale-110 transition-transform">
					  <div class="p-6">
					    <div class="font-bold text-xl mb-2">Visión</div>
					    <p class="text-white opacity-70 text-base text-justify">
					      Ser líder de maquinados industriales a nivel nacional, ofreciendo una gama completa de productos y servicios que cubran totalmente las necesidades de nuestros clientes, actuando con responsabilidad social y trabajando con un equipo humano calificado y comprometido con el desarrollo de México.
					    </p>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="bg-gradient-br-blue-shades bg-scroll md:bg-fixed parallax bg-center bg-cover overflow-x-hidden" data-offset="0" data-offset-lg="-100" style="background-image: url({{ $page->baseUrl }}assets/img/iStock-156760708.jpg);">
	<img class="w-full h-full" src="{{ $page->baseUrl }}assets/img/divider.svg" style="transform:scaleX(1.015) translateY(-1px);">
	<div class="container py-48 mx-auto">
		<h1 class="text-white text-center text-5xl md:text-6xl"><span class="bg-gradient-br-blue-shades-dark px-4 py-1 rounded-sm opacity-90">Valores</span></h1>
	</div>
</div>

<div class="relative bg-white h-64 py-32 lg:py-64">
		<h1 id="compromiso" class="reveal rounded p-1 opacity-0 transition-all absolute top-1/10 left-1/10 md:left-3/10 text-center text-3xl md:text-5xl gradient-text bg-gradient-tr-blue-shades font-bold">Compromiso</h1>
		<h1 id="equipo" class="reveal rounded p-1 opacity-0 transition-all absolute top-5/10 left-2/10 md:left-2/10 text-center text-3xl md:text-5xl gradient-text bg-gradient-br-blue-shades font-bold">Trabajo en equipo</h1>
		<h1 id="crecimiento" class="reveal rounded p-1 opacity-0 transition-all absolute top-3/10 left-3/10 md:left-5/10 text-center text-3xl md:text-5xl gradient-text bg-gradient-bl-blue-shades font-bold">Crecimiento</h1>
		<h1 id="integridad" class="reveal rounded p-1 opacity-0 transition-all absolute top-7/10 left-5/10 md:left-6/10 text-center text-3xl md:text-5xl gradient-text bg-gradient-tl-blue-shades font-bold">Integridad</h1>
</div>

<div class="container lg:px-24 mx-auto w-10/12 bg-white reveal opacity-0 transition-all">
	<div class="flex flex-wrap">
		<div class="flex w-full md:w-1/2 content-center md:mt-0">
			<img class="mx-auto w-7/12 h-full" src="{{ $page->baseUrl }}assets/img/undraw_team_spirit_hrr4.svg"/>
		</div>
		<div class="w-full md:w-1/2">
			<h1 class="text-4xl mb-1 font-bold">¿Cómo lo hacemos?</h1>
			<div class="h-1 w-9/12 md:w-7/12 bg-gradient-br-blue-shades"></div>
			<p class="text-justify mt-16 text-lg">IBM Maquinados S.A. de C.V. se constituyo en el año 2005 con el propósito de ofrecer a la industria nacional refacciones y equipo industrial con la mas alta calidad y a precios accesibles. Somos un equipo de profesionales en diversas áreas de ingeniería (industrial, mecánica y materiales), operadores altamente calificados, ingenieros de campo y personal administrativo, comprometidos con proporcionar un servicio de ingeniería que supere las expectativas de nuestros clientes.</p>
		</div>
	</div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div id="compromiso-p" class="bg-blue-600 text-white p-3 rounded-sm hidden font-semibold max-w-sm">
	Estamos comprometidos con nuestros clientes a entregar productos de la más alta calidad y servicios de excelencia. Asimismo, mantenemos un compromiso interno de responsabilidad para la mejora continua y el desarrollo íntegro de la empresa.
</div>

<div id="equipo-p" class="bg-green-700 text-white p-3 rounded-sm hidden font-semibold max-w-sm">
	Trabajamos sinérgicamente, tanto con nuestros clientes como dentro de nuestro equipo de trabajo, procurando la comunicación clara y efectiva, motivando el diálogo y tomando en cuenta diferentes puntos de vista. Fomentamos la motivación y el liderazgo de todos los miembros involucrados con nuestros procesos.
</div>

<div id="crecimiento-p" class="bg-orange-700 text-white p-3 rounded-sm hidden font-semibold max-w-sm">
	Buscamos nuestro crecimiento continuo, tanto personal como profesional, y creemos en el aprendizaje constante, siendo al mismo tiempo partícipes del desarrollo de los miembros de nuestro equipo de trabajo, de nuestra empresa y de la sociedad que nos rodea.
</div>

<div id="integridad-p" class="bg-gray-700 text-white p-3 rounded-sm hidden font-semibold max-w-sm">
	Somos fieles a nuestros valores y trabajamos con honestidad como una herramienta clave en nuestras relaciones profesionales. Cuidamos a nuestros clientes y buscamos asegurar el compromiso de responsabilidad que tenemos al trabajar con ellos.
</div>
@endsection



@push('scripts')
<script src="{{ $page->baseUrl }}assets/build/js/parallax.js"></script>
<script>
	$(document).ready(function() {
		$('#compromiso').hover(function() {
			$('#compromiso-p').toggleClass('hidden');
		});
		var popper = new Popper($('#compromiso'), $('#compromiso-p'),{
			placement: 'bottom-start'
		});

		$('#equipo').hover(function() {
			$('#equipo-p').toggleClass('hidden');
		});
		var popper = new Popper($('#equipo'), $('#equipo-p'),{
			placement: 'bottom-start'
		});

		$('#crecimiento').hover(function() {
			$('#crecimiento-p').toggleClass('hidden');
		});
		var popper = new Popper($('#crecimiento'), $('#crecimiento-p'),{
			placement: 'bottom-start'
		});

		$('#integridad').hover(function() {
			$('#integridad-p').toggleClass('hidden');
		});
		var popper = new Popper($('#integridad'), $('#integridad-p'),{
			placement: 'bottom-start'
		});
	});
</script>
@endpush
