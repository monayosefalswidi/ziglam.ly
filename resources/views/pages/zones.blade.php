@extends('include.header')

@section('content')
    @if (session('success'))
        {{ session('success') }}
    @endif
@include('include.nav')
<!--about start -->
<section id="about" class="about">
			<div class="section-heading text-center">
				<h2> تفضل بإختيار الطريقة المناسبة لتبرعك </h2>
			</div>
			<div class="container">
				<div class="about-content isotope">
					<div class="row">
						   <div class="col-sm-6 single-about-img item">
								<img class="" src="{{ asset('storage/'.$city->image) }}" alt="profile_image">
						</div>
                        <div class="col-sm-offset-1 col-sm-5">
                        <div class="contact-add-head text-right m-4">
						@foreach($zones as $zone)
						<ul class="right-list margin-top">
						<div class="contact-add-head text-right">
                         <h3 class=""> {{$zone->name}}</h3>
                        </div>
						@foreach($representatives as $representative)
						<li class=" margin-top"><h1>{{$representative->name}}</h1></li>
						<li><h1 class=" margin-top">{{$representative->phone1}}</h1></li>
						<li><h1 class=" margin-top">{{$representative->phone2}}</h1></li>
						<hr>
						@endforeach
						</ul>
						@endforeach       
						</div>
					</div>
				</div>
			</div>
		</section><!--/.about-->


    @include('include.footer');

@endsection