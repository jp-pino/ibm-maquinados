<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" href="{{ mix('css/main.css', '/assets/build') }}">
	<link rel="stylesheet" href="/assets/build/css/menu.css">
	<link rel="stylesheet" href="/assets/build/css/gradient-text.css">
</head>

<body class="relative bg-white">
	@include('_nav.overlay')
	<div id="modal" class="fixed w-screen h-screen opacity-0 transition-all" style="z-index: -100;">
		<div id="modalOverlay" class="absolute w-full h-full bg-gray-800 opacity-40"></div>
		<div id="modalWrapper" class="absolute w-full h-full">
			<div id="contactModal" class="w-11/12 md:w-8/12 h-5/12 mt-4 md:mt-40 bg-white rounded-lg shadow hidden mx-auto py-8">
				<div class="container mx-auto w-10/12 bg-white">
					<h1 class="font-semibold text-4xl text-center mb-8">Contáctanos!</h1>
			  	<div class="flex flex-wrap">
			  		<div class="w-full md:w-5/12 lg:w-6/12 xl:w-7/12 bg-gray-300">
			        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.38114509345!2d-100.40745138456418!3d20.613315507205314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35ae83751a45d%3A0x4fa6ee69f6b64f3a!2sInstituto%20Tecnol%C3%B3gico%20y%20de%20Estudios%20Superiores%20de%20Monterrey!5e0!3m2!1ses!2sec!4v1578444698278!5m2!1ses!2sec" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			  		</div>
			  		<div class="w-full md:w-7/12 lg:w-6/12 xl:w-5/12 mt-8 md:mt-0 md:px-8">
			        <p class="mb-8 text-justify">Puedes encontrarnos en nuestras oficinas en: <span class="font-medium italic">Epigmenio Gonzalez #500, Fracc. San Pablo, 76130. Querétaro, QRO.</span></p>
			        <p>O llamarnos a nuestros teléfonos:</p>
			        <ul class="list-disc list-inside ml-2 mt-4">
								<li class="font-semibold">01 (771) 133-34-50</li>
								<li class="font-semibold">01 (442) 245-89-70</li>
			        </ul>
			  		</div>
			  	</div>
					<div class="mx-auto text-center mt-8">
						<ul class="list-reset mt-8 lg:mt-0">
							<a class="hover:text-pink-600" href=""><li class="transition-all inline rounded p-2"><i class="fab fa-2x fa-instagram"></i></li></a>
							<a class="hover:text-blue-600" href=""><li class="transition-all inline rounded p-2"><i class="fab fa-2x fa-facebook-square"></i></li></a>
							<a class="hover:text-yellow-600" href=""><li class="transition-all inline rounded p-2"><i class="fas fa-2x fa-envelope"></i></li></a>
						</ul>
					</div>
			  </div>
			</div>
			@stack('modals')
		</div>
	</div>

	<div id="content">
		@include('_nav.menu')
		@yield('body')
		@include('_footer.footer')
	</div>

	<script src="{{ mix('js/main.js', '/assets/build') }}"></script>
	<script src="/assets/build/js/popper.min.js"></script>
	<script>
		$('#modal').click(function () {
			$('#modal').fadeTo('slow', 0, function () {
				$('#modal').css('z-index', '-1');
				$('#modalWrapper').children().addClass('hidden');
			});
		});
	</script>
	@stack('scripts')
</body>

</html>
