@extends('layouts.main')

@section('title', 'Choose Template')

@section('extra-styles')
	<link rel="stylesheet" href="{{asset('assets/libs/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
	<main>
		<form action="{{ route('cover-letter.choose-template') }}" method="POST">
			@csrf
			<div class="container main-content">
				<div class="row owl-carousel" id="owl6">
					@foreach ($templates as $template)
						<div id="templateDiv{{$template->id}}">
							<label>
								<img
									@if(auth()->user()->coverLetter)
										class="imgClickHandle {{auth()->user()->coverLetter->template_id === $template->id ? 'active-template' : null}}"
									@else
										class="imgClickHandle"
									@endif
									src="{{asset('assets/images/cover-templates/' . $template->image)}}" alt="Cover Letter"
								>
								<input type="radio" name="template" class="d-none" value="{{ $template->id }}">
							</label>
						</div>
					@endforeach
				</div>
				<div class="owl-theme">
					<div class="owl-controls">
						<div class="custom-nav owl-nav"></div>
					</div>
				</div>
			</div>

			<div class="text-center my-4">Click on an image to choose a template.</div>
{{--			<button class="btn btn-blue d-block mx-auto" type="submit" >Next</button>--}}
            <div class="back_continue experience_page">
                <a href="{{ route('cover-letter') }}" class="back_left">
                    <p><span class="fas fa-long-arrow-alt-left"></span> Back</p>
                </a>
                <button type="submit" class="continue_right">
                    Continue <span class="fas fa-long-arrow-alt-right"></span>
                </button>
            </div>
		</form>
	</main>
@endsection

@section('extra-scripts')
	<script src="{{asset('assets/libs/js/owl.carousel.min.js')}}"></script>
{{--	<script src="{{asset('js/carousel.js')}}"></script>--}}
	<script>
        let userCoverLetter =  @json(auth()->user()->coverLetter) ;

		$('#owl6').owlCarousel({
			items: {{ $templates->count() }},
			loop: true,
			margin: 10,
			dots: false,
			center: true,
            startPosition: userCoverLetter ? userCoverLetter.template_id - 1 : 3,
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