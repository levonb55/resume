@extends('layouts.main')

@section('title', 'Choose Template')

@section('extra-styles')
	<link rel="stylesheet" href="{{asset('assets/libs/css/owl.carousel.min.css')}}">
@endsection

@section('content')
	<main>
		<form action="{{ route('choose-template') }}" method="POST">
			@csrf
			<div class="container main-content">
				<div class="row owl-carousel" id="owl6">

					@foreach ($templates as $template)
						<div>
							<img src="{{asset('assets/images/resume.jpg')}}">
							<div class="form-check text-center">
								<label class="form-check-label">
									<input type="radio" class="form-check-input" name="template" value="{{ $template->id }}">
									{{ $template->name }}
								</label>
							</div>
						</div>
					@endforeach

				</div>
				<div class="owl-theme">
					<div class="owl-controls">
						<div class="custom-nav owl-nav"></div>
					</div>
				</div>
			</div>

			<button class="btn btn-blue d-block mx-auto" type="submit">Next</button>
		</form>
	</main>
@endsection

@section('extra-scripts')
	<script src="{{asset('assets/libs/js/owl.carousel.min.js')}}"></script>
{{--	<script src="{{asset('js/carousel.js')}}"></script>--}}
	<script>
		$('#owl6').owlCarousel({
			items: {{ $templates->count() }},
			loop: true,
			margin: 10,
			dots: false,
			center: true,
			startPosition: {{ auth()->user()->credential ? auth()->user()->credential->template_id - 1 : 1 }},
			nav: true,
			navText: [
				'<img src="../assets/images/left-arrow.png">',
				'<img src="../assets/images/right-arrow.png">'
			],
			navContainer: '.main-content .custom-nav',
			mouseDrag: false,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 2,
				},
				1000: {
					items: 3,
				}
			}
		});
	</script>
@endsection