@extends('layouts/main')

@section('title', 'Resume')

@section('extra-styles')
	<link rel="stylesheet" href="{{ asset('assets/libs/css/owl.carousel.min.css') }}">
@endsection

@section('nav')
@stop

@section('content')
<div class="bg">

	@include('partials._nav')
	
	<div class="container container1">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<h1 class="mb-4">Create your professional resume</h1>
					<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis sit amet lorem eget efficitur. Integer auctor et diam sit amet pretium. Sed blandit elementum massa, quis pretium risus suscipit quis. Aenean </p>
					<a href="{{ route('templates') }}" class="btn btn-light">Start now</a>
				</div>
			</div>
	</div>
</div>
<main>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-7">
					<div class="blocks1_main">
						<div class="blocks1">
							<h5>Best Resume Templates</h5>
							<img src="{{asset('assets/images/block1.png')}}">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis sit amet lorem eget efficitur. Integer aucto</p>
						</div>
						<div class="blocks1">
							<h5>Best Resume Templates</h5>
							<img src="{{asset('assets/images/block2.png')}}">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis sit amet lorem eget efficitur. Integer aucto</p>
						</div>
						<div class="blocks1">
							<h5>Best Resume Templates</h5>
							<img src="{{asset('assets/images/block3.png')}}">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis sit amet lorem eget efficitur. Integer aucto</p>
						</div>
						<div class="blocks1">
							<h5>Best Resume Templates</h5>
							<img src="{{asset('assets/images/block4.png')}}">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis sit amet lorem eget efficitur. Integer aucto</p>
						</div>
					</div>
					
				</div>
				<div class="col-sm-5">
					<div class="text">
						<h6>We are offering</h6>
						<h2>Create resume</h2>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis sit amet lorem eget efficitur. Integer auctor et diam sit amet pretium. Sed blandit elementum massa, quis pretium risus suscipit quis. Aenean eget tortor gravida mauris lacinia euismod id accumsan enim. Mauris nec vestibulum odio. Nulla et pulvinar ante. Curabitur fermentum pulvinar condimentum. Nullam iaculis sed nibh ac placerat. Vestibul</p>
					</div>

				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<div class="text">
						<h6>We are offering</h6>
						<h2>Create resume</h2>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis sit amet lorem eget efficitur. Integer auctor et diam sit amet pretium. Sed blandit elementum massa, quis pretium risus suscipit quis. Aenean eget tortor gravida mauris lacinia euismod id accumsan enim. Mauris nec vestibulum odio. Nulla et pulvinar ante. Curabitur fermentum pulvinar condimentum. Nullam iaculis sed nibh ac placerat. Vestibul</p>
					</div>

				</div>
				<div class="col-sm-7">
					<div class="sectionimg">
						<img src="{{asset('assets/images/secion2.png')}}">
						
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-7">
					<div class="sectionimg1">
						<img src="{{asset('assets/images/secion1.png')}}">
					</div>
					
				</div>
				<div class="col-sm-5">
					<div class="text">
						<h6>We are offering</h6>
						<h2>Create resume</h2>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis sit amet lorem eget efficitur. Integer auctor et diam sit amet pretium. Sed blandit elementum massa, quis pretium risus suscipit quis. Aenean eget tortor gravida mauris lacinia euismod id accumsan enim. Mauris nec vestibulum odio. Nulla et pulvinar ante. Curabitur fermentum pulvinar condimentum. Nullam iaculis sed nibh ac placerat. Vestibul</p>
					</div>

				</div>
			</div>
		</div>
	</section>
	<section class="bg2">
		
		<div class="container">
			<h3 class="mb-3">3 EASY STEPS TO CREATE YOUR PERFECT RESUME</h3>
			<div class="row">
				<div class="col-sm-4 blocks2">
					<img class="mb-3" src="{{asset('assets/images/01.png')}}">
					<h5 class="mb-3">CHOOSE YOUR RESUME TEMPLATE</h5>
					<p class="mb-3">Our professional resume templates are designed strictly following all industry guidelines and best practices
					employers are looking for.</p>
				</div>	
				<div class="col-sm-4 blocks2">
					<img class="mb-3" src="{{asset('assets/images/02.png')}}">
					<h5 class="mb-3">CHOOSE YOUR RESUME TEMPLATE</h5>
					<p class="mb-3">Our professional resume templates are designed strictly following all industry guidelines and best practices
					employers are looking for.</p>
				</div>
				<div class="col-sm-4 blocks2">
					<img class="mb-3" src="{{asset('assets/images/03.png')}}">
					<h5 class="mb-3">CHOOSE YOUR RESUME TEMPLATE</h5>
					<p class="mb-3">Our professional resume templates are designed strictly following all industry guidelines and best practices
					employers are looking for.</p>
				</div>			
			</div>
		</div>
	</section>
	<section class="section3">
		<div class="container">
			<h3 class="mb-3">PROFESSIONAL RESUME TEMPLATES</h3>
			<hr class="mb-3">
			<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis sit amet lorem eget efficitur. Integer auctor et diam sit amet pretium. Sed blandit elementum massa, quis pretium risus suscipit quis. Aenean eget tortor gravida mauris lacinia euismod id accumsan enim. Mauris nec</p>
			
			<div class="row owl-carousel" id="owl1">
				<div class="col-sm-12">
					<img src="{{asset('assets/images/resume.jpg')}}">
				</div>
				<div class="col-sm-12">
					<img src="{{asset('assets/images/resume.jpg')}}">
				</div>
				<div class="col-sm-12">
					<img src="{{asset('assets/images/resume.jpg')}}">
				</div>
				<div class="col-sm-12">
					<img src="{{asset('assets/images/resume.jpg')}}">
				</div>
				<div class="col-sm-12">
					<img src="{{asset('assets/images/resume.jpg')}}">
				</div>
			</div>
		</div>
	</section>
	<section class="section4">
		<div class="container">
			<h3 class="mb-5">Client Opinions & Reviews</h3>
			<div class="row owl-carousel" id="owl2">
			
				<div class="col">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
				<div class="col">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
				<div class="col">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>

			</div>
			<div class="row img_row">
				<div class="testi_div">
					<img src="{{asset('assets/images/testi2.png')}}" class="testi_img" id="testi1">
					<img src="{{asset('assets/images/testi1.png')}}" class="testi_img" id="testi2">
					<img src="{{asset('assets/images/testi3.png')}}" class="testi_img" id="testi3">
				</div>
			</div>
		</div>
	</section>
</main>
@endsection

@section('extra-scripts')
	<script src="{{asset('assets/libs/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/carousel.js')}}"></script>
@endsection