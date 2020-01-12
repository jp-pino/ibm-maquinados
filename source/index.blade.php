@extends('_layouts.master')

@section('body')
<div class="bg-gradient-br-blue-shades h-full parallax bg-center bg-cover bg-scroll md:bg-fixed py-8 bg-blend-soft-light" data-offset="-100" data-offset-lg="-100" style="background-image: url(assets/img/cover.jpg)">
{{-- <div class="bg-gradient-br-blue-shades h-full bg-fixed parallax bg-cover lg:bg-contain py-8"> --}}
	<div class="container py-64 mx-auto">
		<h1 class="text-white text-center text-5xl md:text-8xl "><span class="opacity-90 bg-gradient-br-blue-shades-dark px-2 pb-1 rounded-sm">IBM Maquinados</span></h1>
		<h2 class="text-white pb-24 text-center text-2xl md:text-4xl"><span class="opacity-70 bg-gray-900 px-1 pb-1 rounded-sm">Refacciones y equipo industrial</span></h2>
		<div class="container mx-auto text-center">
			<a class="mx-auto bg-blue-900 rounded-lg border-white text-white p-3 border-2 text-2xl hover:bg-blue-700 hover:text-blue-100 hover:border-blue-100 transition-all" href="/contact">Cotizar</a>
		</div>
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

<div class="bg-white py-24"></div>

<div class="container lg:px-24 mb-8 -mt-8 mx-auto w-10/12 bg-white">
	<div class="flex flex-wrap">
		<div class="w-full md:w-1/2">
			<h1 class="text-4xl mb-1 font-bold">¿Quiénes somos?</h1>
			<div class="h-1 w-7/12 bg-gradient-br-blue-shades"></div>
			<p class="text-justify mt-10 md:text-left">IBM Maquinados S.A. de C.V. se constituyo en el año 2005 con el propósito de ofrecer a la industria nacional refacciones y equipo industrial con la mas alta calidad y a precios accesibles. Somos un equipo de profesionales en diversas áreas de ingeniería (industrial, mecánica y materiales), operadores altamente calificados, ingenieros de campo y personal administrativo, comprometidos con proporcionar un servicio de ingeniería que supere las expectativas de nuestros clientes.</p>
		</div>
		<div class="flex w-full md:w-1/2 content-center mt-8 md:mt-0">
			<img class="mx-auto w-7/12 h-full" src="assets/img/undraw_QA_engineers_dg5p.svg"/>
		</div>
	</div>
</div>


<div class="bg-gradient-br-blue-shades bg-scroll h-full md:bg-fixed parallax bg-center bg-cover overflow-x-hidden" data-offset="20" data-offset-lg="-100" style="background-image: url(assets/img/iStock-458884391.jpg);">
	<img class="w-full h-full" src="assets/img/divider.svg" style="transform:scaleX(1.015) translateY(-1px);">
	<div class="container py-32 mx-auto">
		<h1 class="text-white text-center text-4xl md:text-6xl"><span class="bg-gradient-br-blue-shades-dark px-4 py-1 rounded-sm opacity-90">Productos</span></h1>
	</div>
</div>

<div class="container lg:px-24 mx-auto my-8 pt-8 w-10/12 bg-white">
	<div class="flex flex-wrap mt-16">
		<div class="w-full md:w-1/2">
			<h1 class="text-4xl mb-1 font-bold">¿Qué hacemos?</h1>
			<div class="h-1 w-9/12 md:w-7/12 bg-gradient-br-blue-shades"></div>
			<p class="text-justify mt-16 text-lg">Nos dedicamos a ... bla bla bla IBM Maquinados S.A. de C.V. se constituyo en el año 2005 con el propósito de ofrecer a la industria nacional refacciones y equipo industrial con la mas alta calidad y a precios accesibles. Somos un equipo de profesionales en diversas áreas de ingeniería (industrial, mecánica y materiales), operadores altamente calificados, ingenieros de campo y personal administrativo, comprometidos con proporcionar un servicio de ingeniería que supere las expectativas de nuestros clientes. A través de diversas empresas del grupo IBM, nos respaldan 30 años de experiencia, que hemos adquirido gracias a la constante trayectoria de trabajo y desarrollo de proyectos para empresas como Petróleos Mexicanos, Industrias Peñoles, Grupo Acerero Del Norte, Grupo LuisMin, Gold Corp México, Capstone Gold, entre otras.</p>
		</div>
		<div class="flex w-full px-4 md:pt-32 md:w-1/2 mt-8 md:mt-0">
			<div class="table w-full">
			  <div class="table-row">
			    <div class="table-cell p-1">
						<a href="/products#general">
							<div class="rounded shadow-lg bg-gradient-b-blue-shades-ultra-dark text-white md:hover:scale-105 transition-transform w-full px-2 py-8 text-lg text-center">
								Industria en general
							</div>
						</a>
					</div>
			    <div class="table-cell p-1">
						<a href="/products#minera">
							<div class="rounded shadow-lg bg-gradient-b-blue-shades-ultra-dark text-white md:hover:scale-105 transition-transform w-full px-2 py-8 text-lg text-center">
								Industria minera
							</div>
						</a>
					</div>
			  </div>
			  <div class="table-row">
			    <div class="table-cell p-1">
						<a href="/products#construccion">
							<div class="rounded shadow-lg bg-gradient-b-blue-shades-ultra-dark text-white md:hover:scale-105 transition-transform w-full px-2 py-8 text-lg text-center">
								Construcción
							</div>
						</a>
					</div>
			    <div class="table-cell p-1">
						<a href="/products#cilindros">
							<div class="rounded shadow-lg bg-gradient-b-blue-shades-ultra-dark text-white md:hover:scale-105 transition-transform w-full px-2 py-8 text-lg text-center">
								Cilindros hidráulicos
							</div>
						</a>
					</div>
			  </div>
				<div class="table-row">
			    <div class="table-cell p-1">
						<a href="/products#paileria">
							<div class="rounded shadow-lg bg-gradient-b-blue-shades-ultra-dark text-white md:hover:scale-105 transition-transform w-full px-2 py-8 text-lg text-center">
								Pailería
							</div>
						</a>
					</div>
					<div class="table-cell p-1">
						<button id="otros-contacto" class="rounded shadow-lg bg-gradient-b-blue-shades-ultra-dark text-white md:hover:scale-105 transition-transform w-full px-2 py-8 text-lg text-center">
							Otros
						</button>
					</div>
			  </div>
			</div>
		</div>
	</div>
</div>


<div class="mt-24 bg-gradient-br-blue-shades bg-scroll md:bg-fixed parallax bg-center bg-cover overflow-x-hidden" data-offset="20" data-offset-lg="-100" style="background-image: url(assets/img/iStock-457740707.jpg);">
	<img class="w-full h-full" src="assets/img/divider.svg" style="transform:scaleX(1.015) translateY(-1px);">
	<div class="container py-32 mx-auto">
		<h1 class="text-white text-center text-4xl md:text-6xl"><span class="bg-gradient-br-blue-shades-dark px-4 py-1 rounded-sm opacity-90">Clientes</span></h1>
	</div>
</div>

<div class="container lg:px-24 my-8 pt-8 mx-auto w-10/12 bg-white text-center">
	<h2 class="text-lg text-center text-3xl font-thin">Tenemos presencia en varios estados de la república.</h2>
</div>

<div id="map_container" class="container lg:px-24 my-8 pt-8 mx-auto w-10/12 bg-white">
@include('_map.map')
</div>

@endsection



@push('scripts')
	<script src="/assets/build/js/parallax.js"></script>
	<script>
		$('#otros-contacto').click(function () {
			$('#modal').css('z-index', '100');
			$('#modal').fadeTo('slow', 1);
			$('#contactModal').removeClass('hidden');
			$('#contactModal').css('z-index', '101');
		});
	</script>
@endpush
