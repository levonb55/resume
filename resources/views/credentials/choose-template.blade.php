@extends('layouts.main')

@section('title', 'Choose Template')

@section('extra-styles')
	<link rel="stylesheet" href="{{asset('assets/libs/css/owl.carousel.min.css')}}">
@endsection

@section('content')
<main>
	<div class="container main-content">
		<div class="row owl-carousel" id="owl6">
			<div class="">
				<img src="{{asset('assets/images/resume.jpg')}}">
			</div>
			<div class=>
				<img src="{{asset('assets/images/resume.jpg')}}">
			</div>
			<div class="">
				<img src="{{asset('assets/images/resume.jpg')}}">
			</div>
			<div class="">
				<img src="{{asset('assets/images/resume.jpg')}}">
			</div>
			<div class="">
				<img src="{{asset('assets/images/resume.jpg')}}">
			</div>
		</div>
		<div class="owl-theme">
			<div class="owl-controls">
				<div class="custom-nav owl-nav"></div>
			</div>
		</div>
	</div>
	<button class="btn btn-blue"><a href="{{ route('create-resume') }}">Choose Template</a></button>
</main>
@endsection

@section('extra-scripts')
	<script src="{{asset('js/carousel.js')}}"></script>
@endsection