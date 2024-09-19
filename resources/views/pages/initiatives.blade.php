@extends('include.header')

@section('content')
    @if (session('success'))
        {{ session('success') }}
    @endif
@include('include.nav')

	<!--profiles start -->
    <section id="profiles" class="profiles">
			<div class="profiles-details">
				<div class="section-heading text-center">
					<h2>المبـــادرات</h2>
				</div>
				<div class="container">
					<div class="profiles-content">
						<div class="row">
                        @foreach( $Initiatives as $initiative)
							<div class="my-image col-sm-3 margin-right">
										<a href="{{ route('initiativeDetails', ['id' => $initiative->id]) }}" ><img  src="{{ asset('storage/'.$initiative->image) }}"></a>
										<div class=" margin-top">{{$initiative->title}}</div>
							</div>
                            @endforeach
                       
						</div>
				
					</div>
				</div>
			</div>

		</section><!--/.profiles-->
		<!--profiles end -->

@include('include.contact')
@include('include.footer')