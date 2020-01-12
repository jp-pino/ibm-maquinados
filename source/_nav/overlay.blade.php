<!-- open/close -->
<div class="overlay overlay-contentscale bg-blue-900 opacity-90 z-50">
	<button type="button" class="overlay-close">Close</button>
	<nav>
		<ul>
			<li><a class="text-4xl md:text-6xl hover:text-gray-400 transition-colors transition-250 {{ $page->isActive('') ? 'text-white' : 'text-blue-200' }}" href="{{ $page->baseUrl }}/">Inicio</a></li>
			<li><a class="text-4xl md:text-6xl hover:text-gray-400 transition-colors transition-250 {{ $page->isActive('/about') ? 'text-white' : 'text-blue-200' }}" href="{{ $page->baseUrl }}/about">Nosotros</a></li>
			<li><a class="text-4xl md:text-6xl hover:text-gray-400 transition-colors transition-250 {{ $page->isActive('/products') ? 'text-white' : 'text-blue-200' }}" href="{{ $page->baseUrl }}/products">Productos</a></li>
			<br>
			<li><a class="mt-4 border border-white rounded-lg text-white text-4xl md:text-6xl hover:bg-white hover:text-blue-900 transition-bg transition-colors transition-250 p-4" href="#">Catálogo</a></li>
		</ul>
	</nav>
</div>
