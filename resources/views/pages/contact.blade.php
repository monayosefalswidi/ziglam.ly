@extends('layouts.header')

@section('content')
    @if (session('success'))
        {{ session('success') }}
    @endif

    @include('layouts.nav');

<!--==============================Content=================================-->
<div class="content">
			<div class="container_12">
				<div class="grid_12">
                <h2>تواصل معنا </h2>	
                <div class="grid_4 alpha">
							<h2>العنوان</h2>
							<address>
								<span class="fa fa-home"></span>
								138 Atlantis Ln <br>
								Kingsport <br>
								Illinois 121164
							</address>
						</div>	
						<div class="grid_4">
							<h2>رقم الهاتف</h2>
							<div class="m_phone">
								<div class="fa fa-phone"></div>
								+1 800 559 6580
							</div>
							<div class="m_phone">
								<div class="fa fa-print"></div>
								+1 504 889 9898138
							</div>
						</div>
						<div class="grid_4 omega">
							<h2>البريد الإلكتروني</h2>
							<a href="#"><span class="fa fa-envelope-o"></span> mail@demolink.org</a>
						</div>
						<div class="clear"></div>
					</div>
					
				</div>
			</div>
		</div>
    @include('layouts.footer');
@endsection