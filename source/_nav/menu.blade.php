<div class="w-full h-1 bg-blue-700 fixed z-50"></div>
<nav class="flex items-center justify-between flex-wrap bg-blue-900 p-6 fixed w-full z-40 opacity shadow">
	<div class="flex items-center flex-shrink-0 text-white mr-6">
		<img src="{{ $page->baseUrl }}/assets/img/ibm-notext.png" class="fill-current h-8 w-8 mr-2" width="30" height="30"/>
		<span class="font-semibold text-xl tracking-tight">IBM Maquinados</span>
	</div>
	<div class="block lg:hidden">
		<button id="trigger-overlay" class="flex items-center px-3 py-2 border rounded text-blue-200 border-blue-400 hover:text-white hover:border-white">
			<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
				<title>Menu</title>
				<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
			</svg>
		</button>
	</div>
	<div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto hidden">
		<div class="text-sm lg:flex-grow">
			<a href="{{ $page->baseUrl }}/" class="block mt-4 lg:inline-block lg:mt-0 hover:text-white mr-4 {{ $page->isActive('') ? 'text-white' : 'text-blue-400' }}">
				Inicio
			</a>
			<a href="{{ $page->baseUrl }}/about" class="block mt-4 lg:inline-block lg:mt-0 hover:text-white mr-4 {{ $page->isActive('/about') ? 'text-white' : 'text-blue-400' }}">
				Nosotros
			</a>
			<a href="{{ $page->baseUrl }}/products" class="block mt-4 lg:inline-block lg:mt-0 hover:text-white mr-4 {{ $page->isActive('/products') ? 'text-white' : 'text-blue-400' }}">
				Productos
			</a>
			<button id="nav-contact" class="block mt-4 lg:inline-block lg:mt-0 hover:text-white text-blue-400">
				Contacto
			</button>
		</div>
		<div>
			<a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-blue-900 hover:bg-white mt-4 lg:mt-0 transition-bg transition-color">Catálogo</a>
		</div>
	</div>
</nav>


@push('scripts')
<script src="{{ $page->baseUrl }}/assets/build/js/classie.js"></script>
<script src="{{ $page->baseUrl }}/assets/build/js/Modernizr.js"></script>
<script src="{{ $page->baseUrl }}/assets/build/js/menu.js"></script>
<script>
	$('#nav-contact').click(function () {
		$('#modal').css('z-index', '100');
		$('#modal').fadeTo('slow', 1);
		$('#contactModal').removeClass('hidden');
		$('#contactModal').css('z-index', '101');
	});
</script>

@endpush
