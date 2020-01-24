<div class="bg-gray-100 py-16">
	<div class="container lg:px-24 mx-auto w-10/12 bg-gray-100">
		<div class="flex flex-wrap">
			<div class="w-full md:w-1/3 lg:w-2/12 md:pr-4 lg:ml-24">
				<div class="rounded-full bg-gradient-b-blue-shades-ultra-dark items-center p-4 m-16 md:m-0">
					<img src="{{ $page->baseUrl }}assets/img/ibm-notext.png" class="fill-current w-full" width="30" height="30"/>
				</div>
			</div>
			<div class="w-full md:w-1/3"></div>
			<div class="flex w-full md:w-1/3 text-center items-center mx-auto">
				<div class="mx-auto">
					<ul class="list-reset mt-8 lg:mt-0">
						<a class="text-blue-800 hover:text-pink-600" href=""><li class="transition-all inline rounded p-2"><i class="fab fa-2x fa-instagram"></i></li></a>
						<a class="text-blue-800 hover:text-blue-600" href=""><li class="transition-all inline rounded p-2"><i class="fab fa-2x fa-facebook-square"></i></li></a>
						<a class="text-blue-800 hover:text-yellow-600" href=""><li class="transition-all inline rounded p-2"><i class="fas fa-2x fa-envelope"></i></li></a>
					</ul>
					<div class="text-blue-900 mt-4 font-semibold text-center">01 (771) 133-34-50</div>
					<div class="text-blue-900 mb-4 font-semibold text-center">01 (442) 245-89-70</div>
					<button id="showContactModal" class="text-white my-2 p-2 font-semibold text-center bg-blue-800 rounded-lg hover:bg-white hover:text-blue-800 hover:border-blue-800 border-2 border-blue-800 transition-all">Contáctanos</button>
				</div>
			</div>
		</div>
	</div>
</div>


@push('scripts')
	<script>
		$('#showContactModal').click(function () {
			$('#modal').css('z-index', '100');
			$('#modal').fadeTo('slow', 1);
			$('#contactModal').removeClass('hidden');
			$('#contactModal').css('z-index', '101');
		});
	</script>
@endpush

{{-- @push('modals')
	<div id="contactModal" class="w-7/12 h-7/12 bg-white rounded-lg shadow hidden mx-auto">

	</div>
@endpush --}}
