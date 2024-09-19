@extends('include.header')

@section('content')
    @if (session('success'))
        {{ session('success') }}
    @endif
@include('include.nav')

<section id="about" class="about">
			<div class="section-heading text-center">
				<h2>{{$Initi->title}}</h2>
			</div>
			<div class="container">
				<div class="about-content isotope">
					<div class="row">
						   <div class="col-sm-12  ">
								<img class="" width="100%" src="{{ asset('storage/'.$Initi->image) }}" alt="profile_image">
					
                        <div class="contact-add-head text-right m-4">
						<ul class="right-list margin-top">
						<div class="contact-add-head text-right">
                         <h3 class=""> {{$Initi->title}}</h3>
                        </div>
						<li class=" margin-top"><h1>{{$Initi->description}}</h1></li>
						<hr>
						
						</ul>
                        </div>
						</div>

				</div>
			</div>
		</section><!--/.about-->
    @include('include.footer');

@endsection