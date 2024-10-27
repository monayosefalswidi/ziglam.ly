		<!-- top-area Start -->
		<header class="top-area" style="--bs-body-font-size: 1.50rem">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">

			        <div class="container ">
 
			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			         
			               <a   href="{{ url('/') }}">
			                    <img src="{{ asset('assets/images/logo.png') }}"  width="124" height="54" alt="محمود زقلام'">
			                </a>
			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div    class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right"   
			                style="margin-top:1%; 
			                font-weight: bold;"
			                data-in="fadeInDown" data-out="fadeOutUp">
			                <li class=" smooth-menu active"></li>
			                    <li class=" smooth-menu"><a 
			                  
			                font-weight: bold;"
			                href="{{ url('/#contact') }}">تواصل معنا</a></li>
			                    <li class="smooth-menu"><a href="{{ url('/initiatives') }}">المبادرات</a></li>
			                    <li class="smooth-menu"><a href="{{ url('/#cities') }}">المدن</a></li>
			                    <li class="smooth-menu"><a href="{{ url('/#about') }}">عن الموقع</a></li>

			                    <li class="smooth-menu fs-1"><a href="{{ url('/') }}"> الرئيسية</a></li>
                               
                                <li class="smooth-menu"><a href="{{ url('/admin/login') }}" >تسجيل الدخول</a></li>
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->

		    <div class="clearfix"></div>

		</header><!-- /.top-area-->