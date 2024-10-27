@extends('include.header')

@section('content')
    @if (session('success'))
        {{ session('success') }}
    @endif
@include('include.nav')
<!--about start -->
<section id="about" class="about">
			<div class="section-heading text-center m-4">
				<h2> يمكنك اختيار الطريقة المناسبة للتبرع </h2>
			</div>
			<div class="container">
				<div class="about-content isotope">
					<div class="row">
					    	<div class=" col-sm-6">
							<div class="single-about-img item" >
					
								<img class="" src="{{ asset('storage/app/public/'.$city->image) }}" alt="profile_image">
						</div>
						</div>
                        <div class="col-sm-offset-1 col-sm-5">
                        <div class="contact-add-head text-right m-4">
						@foreach($zones as $zone)
						<ul class="right-list margin-top">
						<div class="contact-add-head text-right">
                         <h3 class=""> {{$zone->name}}</h3>
                         <h4 class="h4"> {{$zone->note}}</h4>
                         <h4 class="h4"><a href="{{$zone->link}}" >العنوان على خرائط قوقل</a> </h4>
                        </div>
                        @php
                           $representatives =App\Models\representative::where('zone_id', $zone->id)->get()
                  
                        @endphp
       
						@foreach($representatives as $representative)
						                 <h4 style="  font-weight: bold;" > :  المندوبين   </h4>
               
						<li class=" margin-top"><h4 class="h4">{{$representative->name}}</h4></li>
						<li><h4 class="h4">{{$representative->phone1}}</h4></li>
						<li><h4 class="h4">{{$representative->phone2}}</h4></li>
			
						@endforeach
						</ul>
							<hr>
						@endforeach       
						</div>
					
					</div>
				</div>
			</div>
		</section><!--/.about-->


    @include('include.footer');

@endsection