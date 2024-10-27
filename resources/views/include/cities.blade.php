	<!--portfolio start -->
    <section id="portfolio" class="portfolio" >
			<div class="portfolio-details" id="cities">
				<div class="section-heading text-center">
					<h2>المــدن</h2>
				</div>
				<div class="container" ">
					<div class="portfolio-content">
						<div class="isotope">
							<div class="row" dir="rtl" >
							 
								@foreach($cities as $city)
								
								      <div class="col-sm-4" >
									<div class="item"> 
									<a class="contact-add-head " href="{{ route('zones', ['id' => $city->id]) }}">
										<img src="{{ asset('storage/app/public/'.$city->image) }}" width="100px"  alt="City image" />
										<div class="isotope-overlay">
											     {{$city->name}}
										</div>
										    </a><!-- /.isotope-overlay -->
									</div><!-- /.item -->
								</div><!-- /.col -->
                               
                                @endforeach
							</div><!-- /.row -->
						</div><!--/.isotope-->
					</div><!--/.gallery-content-->
				</div><!--/.container-->
			</div><!--/.portfolio-details-->

		</section><!--/.portfolio-->
		<!--portfolio end -->
