@extends('layout.main')
@section('content')


		<!-- banner -->
		<div class="banner-w3l">
			<div class="banner-left-wthree">
				<h6>Hi, I am</h6>
				<h2>Alison Lee</h2>
				<p class="para-banner">So Many Books, So Little Time.</p>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.exercitation ullamco
					laboris nisi ut aliquip ex ea commodo consequat. </p>
				<a href="#contact" class="wthree-btn btn-6 scroll">Hire Me
					<span></span>
				</a>
				<div class="books-ban-agile">
					<ul>
						<li>
							<img src="asset/images/book1.png" alt="">
						</li>
						<li>
							<img src="asset/images/book2.png" alt="">
						</li>
						<li>
							<img src="asset/images/book3.png" alt="">
						</li>
					</ul>
				</div>
			</div>
			<div class="banner-left-agile">
				<img class="img-responsive" src="asset/images/3.png" alt="" />
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- //banner -->
	</div>

	<!-- about -->
	<div class="banner-bottom">
		<div class="container">
			<div class="w3-agileits-about-grids">
				<div class="col-md-5 agile-about-left">
					<h5>God authors desires in your heart, then fulfills His Will by enabling you to realize those desires.</h5>
					<div class="banner-bo-w3l">
						<p>Enter Your E-mail to get 1st Chapter for Free</p>
						<form action="#" method="post">
							<input type="email" placeholder="E-mail" name="email" required="">
							<input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
				<div class="col-md-7 agile-about-right">
					<img src="asset/images/ab3.jpg" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->

	<!-- Books -->
	<div class="featured-section" id="books">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">My Books</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="#" data-toggle="modal" data-target="#myModal">
									<img src="asset/images/b1.png" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="#" data-toggle="modal" data-target="#myModal">labore et aliqua</a>
								</h4>
								<div class="w3l-pricehkj">
									<p>By Alison Lee</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="#" data-toggle="modal" data-target="#myModal">
									<img src="asset/images/b2.png" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="#" data-toggle="modal" data-target="#myModal">dolor sit amet</a>
								</h4>
								<div class="w3l-pricehkj">
									<p>By Alison Lee</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="#" data-toggle="modal" data-target="#myModal">
									<img src="asset/images/b6.png" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="#" data-toggle="modal" data-target="#myModal">Excteur sint occa</a>
								</h4>
								<div class="w3l-pricehkj">
									<p>By Alison Lee</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="#" data-toggle="modal" data-target="#myModal">
									<img src="images/b3.png" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="#" data-toggle="modal" data-target="#myModal">nisi ut alip ex</a>
								</h4>
								<div class="w3l-pricehkj">
									<p>By Alison Lee</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="#" data-toggle="modal" data-target="#myModal">
									<img src="asset/images/b4.png" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="#" data-toggle="modal" data-target="#myModal">Excteur sint occa</a>
								</h4>
								<div class="w3l-pricehkj">
									<p>By Alison Lee</p>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="asset/images/g5.jpg" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec
						fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper enim, Lorem ipsum
						dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam
						pulvinar metus neque, eget porttitor massa vulputate. </p>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //Books -->

	<!-- about -->
	<div class="about" id="about">
		<div class="container">
			<h3 class="tittle-w3l">About Me</h3>
			<div class="about-agileinfo">
				<div class="col-md-4 about-left ">
					<img src="asset/images/ab.jpg" class="img-responsive" alt="" />
				</div>
				<div class="col-md-8 about-right wthree">
					<h3>ALISON LEE</h3>
					<h4>About The Author</h4>
					<p>Alison Lee was born in Hampshire, UK, and now lives in the United States. As a child she discovered his love of books,
						reading, and stories. cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<ul class="address">
						<li>
							<ul class="agileits-address-text ">
								<li>
									<b>D.O.B :</b>
								</li>
								<li>07-01-1990</li>
							</ul>
						</li>
						<li>
							<ul class="agileits-address-text">
								<li>
									<b>PHONE : </b>
								</li>
								<li>+00 111 222 3333</li>
							</ul>
						</li>
						<li>
							<ul class="agileits-address-text">
								<li>
									<b>E-MAIL :</b>
								</li>
								<li>
									<a href="mailto:example@mail.com"> mail@example.com</a>
								</li>
							</ul>
						</li>
						<li>
							<ul class="agileits-address-text">
								<li>
									<b>WEBSITE :</b>
								</li>
								<li>
									<a href="http://w3layouts.com">www.author.com</a>
								</li>
							</ul>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</div>
	<!-- //about -->

	<!-- Stats-->
	<div class="stats-w3layouts">
		<div class="container">
			<div class="stats-info">
				<div class="col-xs-3 stats-grid-w3-agile">
					<div class="stats-img">
						<span class="fa fa-book" aria-hidden="true"></span>
					</div>
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='768' data-delay='.5' data-increment="1">768</div>
					<p>Excellent Books</p>
				</div>
				<div class="col-xs-3 stats-grid-w3-agile">
					<div class="stats-img">
						<span class="fa fa-leanpub" aria-hidden="true"></span>
					</div>
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='678' data-delay='.5' data-increment="1">678</div>
					<p>Total Pages</p>
				</div>
				<div class="col-xs-3 stats-grid-w3-agile">
					<div class="stats-img">
						<span class="fa fa-heart-o" aria-hidden="true"></span>
					</div>
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='982' data-delay='.5' data-increment="1">982</div>
					<p>Happy Readers</p>
				</div>
				<div class="col-xs-3 stats-grid-w3-agile">
					<div class="stats-img">
						<span class="fa fa-clock-o" aria-hidden="true"></span>
					</div>
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='485' data-delay='.5' data-increment="1">485</div>
					<p>Working Hours</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //Stats -->

	<!-- pricing -->
	<div class="pricing-plans" id="pricing">
		<div class="container">
			<h3 class="tittle-w3l">Pricing Tables</h3>
			<div class="pricing-grids">
				<div class="pricing-grid1">
					<div class="price-value">
						<h3>
							<a href="#">$425</a>
						</h3>
						<h5>For 30 Pages</h5>
					</div>
					<div class="price-bg">
						<ul>
							<li class="whyt">
								<a href="#">Book Design</a>
							</li>
							<li>
								<a href="#">Visual Page Builder</a>
							</li>
							<li class="whyt">
								<a href="#">Self-Publishing</a>
							</li>
							<li>
								<a href="#">Editorial</a>
							</li>
							<li class="whyt">
								<a href="#">50+ Shortcode Modules</a>
							</li>
						</ul>
						<div class="cart1">
							<a class="popup-with-zoom-anim" href="#small-dialog">Order Now</a>
						</div>
					</div>
				</div>
				<div class="pricing-grid2">
					<div class="price-value two">
						<h3>
							<a href="#">$300</a>
						</h3>
						<h5>For 20 Pages</h5>
					</div>
					<div class="price-bg">
						<ul>
							<li class="whyt">
								<a href="#">Editorial</a>
							</li>
							<li>
								<a href="#">Self-Publishing</a>
							</li>
							<li class="whyt">
								<a href="#">Visual Page Builder</a>
							</li>
							<li>
								<a href="#">Clean Design</a>
							</li>
							<li class="whyt">
								<a href="#">50+ Shortcode Modules</a>
							</li>
						</ul>
						<div class="cart2">
							<a class="popup-with-zoom-anim" href="#small-dialog">Order Now</a>
						</div>
					</div>
				</div>
				<div class="pricing-grid3">
					<div class="price-value three">
						<h3>
							<a href="#">$ 768</a>
						</h3>
						<h5>For 60 Pages</h5>
					</div>
					<div class="price-bg">
						<ul>
							<li class="whyt">
								<a href="#">Self-Publishing</a>
							</li>
							<li>
								<a href="#">Visual Page Builder</a>
							</li>
							<li class="whyt">
								<a href="#">50+ Shortcode Modules</a>
							</li>
							<li>
								<a href="#">Editorial</a>
							</li>
							<li class="whyt">
								<a href="#">Book Design</a>
							</li>
						</ul>
						<div class="cart3">
							<a class="popup-with-zoom-anim" href="#small-dialog">Order Now</a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<!-- Popup-Box -->
	<div id="popup">
		<div id="small-dialog" class="mfp-hide agileinfo">
			<div class="pop_up">
				<div class="payment-online-form-left w3-agileits">
					<form action="#" method="post">
						<h4>Personal Details</h4>
						<ul>
							<li>
								<input type="text" name="First Name" placeholder="First Name" required="">
							</li>
							<li>
								<input type="text" name="Last Name" placeholder="Last Name" required="">
							</li>
						</ul>
						<ul>
							<li>
								<input type="email" class="email" name="Email" placeholder="Email" required="">
							</li>
							<li>
								<input type="text" name="Number" placeholder="Mobile Number" required="">
							</li>
						</ul>
						<textarea name="Message" placeholder="Address..." required=""></textarea>
						<div class="clearfix"></div>

						<ul class="payment-sendbtns">
							<li>
								<input type="reset" value="Reset">
							</li>
							<li>
								<input type="submit" name="Send" value="Send">
							</li>
						</ul>
						<div class="clearfix agile"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<button title="Close (Esc)" type="button" class="mfp-close w3-agileits">×</button>
	<!-- //Popup-Box -->
	<!-- //pricing -->

	<!-- benefits -->
	<div class="benefits-sec" id="benefits">
		<h3 class="tittle-w3l">Benefits</h3>
		<div class="benefits-agile-allah">
			<div class="col-md-4 col-sm-4 agileits_banner_bottom_left">
				<div class="agileinfo_banner_bottom_pos">
					<div class="w3_agileits_banner_bottom_pos_grid">
						<div class="col-xs-4 wthree_banner_bottom_grid_left">
							<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
								<i class="fa fa-book" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-8 wthree_banner_bottom_grid_right">
							<h4>Benefit 1</h4>
							<p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 agileits_banner_bottom_left">
				<div class="agileinfo_banner_bottom_pos">
					<div class="w3_agileits_banner_bottom_pos_grid">
						<div class="col-xs-4 wthree_banner_bottom_grid_left">
							<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
								<i class="fa fa-check-square-o" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-8 wthree_banner_bottom_grid_right">
							<h4>Benefit 2</h4>
							<p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 agileits_banner_bottom_left">
				<div class="agileinfo_banner_bottom_pos">
					<div class="w3_agileits_banner_bottom_pos_grid">
						<div class="col-xs-4 wthree_banner_bottom_grid_left">
							<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
								<i class="fa fa-leanpub" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-8 wthree_banner_bottom_grid_right">
							<h4>Benefit 3</h4>
							<p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //benefits -->

	<!-- book details -->
	<div class="details-books">
		<div class="container">
			<h3 class="tittle-w3l">Book Details</h3>
			<div class="col-md-6 agileits_updates_grid_right">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
								    aria-controls="collapseOne">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
									<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>assumenda est cliche reprehenderit
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body panel_text">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
								non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="collapseTwo" aria-expanded="false"
								    aria-controls="collapseTwo">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
									<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Itaque earum rerum
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body panel_text">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
								non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="collapseThree" aria-expanded="false"
								    aria-controls="collapseThree">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
									<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>autem accusamus terry quibusdam
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body panel_text">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
								non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 details-w3l">
				<img src="asset/images/ab2.jpg" class="img-responsive" alt="" />
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //book details -->

	<!-- testimonials -->
	<div class="testimonials" id="testi">
		<div class="container">
			<h3 class="tittle-w3l">What Publications Say</h3>
			<div class="wthree_testimonial_grids">
				<div class="wthree_testimonial_grid_left">
					<div class="w3ls_testimonial_grid_left_grid">
						<div class="col-xs-4 agileinfo_testimonials_left">
							<img src="asset/images/t1.jpg" alt=" " class="img-responsive" />
							<h4>John Crisp</h4>
						</div>
						<div class="col-xs-8 agileinfo_testimonials_right">
							<div class="agileits_testimonials_right_grid">
								<p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
									veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_testimonial_grid_left_grid w3l_testimonial_grid_left_grid">
						<div class="col-xs-8 agileinfo_testimonials_right agileits_w3layouts_farm_man">
							<div class="agileits_testimonials_right_grid w3_testimonials_right_grid">
								<p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
									veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
						<div class="col-xs-4 agileinfo_testimonials_left">
							<img src="asset/images/t2.jpg" alt=" " class="img-responsive" />
							<h4>Thomus Carl</h4>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_testimonial_grid_left_grid">
						<div class="col-xs-4 agileinfo_testimonials_left">
							<img src="asset/images/t3.jpg" alt=" " class="img-responsive" />
							<h4>John Crisp</h4>
						</div>
						<div class="col-xs-8 agileinfo_testimonials_right">
							<div class="agileits_testimonials_right_grid">
								<p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
									veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonials -->

	<!-- gallery -->
	<div id="gallery" class="gallery">
		<div class="container">
			<h3 class="tittle-w3l">Gallery</h3>
			<div class="gallery-w3lsrow">
				<div class="col-sm-4 col-xs-4 gallery-grids">
					<div class="w3ls-hover">
						<a href="asset/images/g1.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.">
							<img src="asset/images/g1.jpg" class="img-responsive zoom-img" alt="" />
							<div class="view-caption">
								<h5>Author</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-4 col-xs-4 gallery-grids">
					<div class="w3ls-hover">
						<a href="asset/images/g2.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.">
							<img src="asset/images/g2.jpg" class="img-responsive zoom-img" alt="" />
							<div class="view-caption">
								<h5>Author</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-4 col-xs-4 gallery-grids">
					<div class="w3ls-hover">
						<a href="asset/images/g3.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.">
							<img src="asset/images/g3.jpg" class="img-responsive zoom-img" alt="" />
							<div class="view-caption">
								<h5>Author</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-4 col-xs-4 gallery-grids">
					<div class="w3ls-hover">
						<a href="asset/images/g4.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.">
							<img src="asset/images/g4.jpg" class="img-responsive zoom-img" alt="" />
							<div class="view-caption">
								<h5>Author</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-4 col-xs-4 gallery-grids">
					<div class="w3ls-hover">
						<a href="asset/images/g6.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.">
							<img src="asset/images/g6.jpg" class="img-responsive zoom-img" alt="" />
							<div class="view-caption">
								<h5>Author</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-4 col-xs-4 gallery-grids">
					<div class="w3ls-hover">
						<a href="asset/images/g5.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.">
							<img src="asset/images/g5.jpg" class="img-responsive zoom-img" alt="" />
							<div class="view-caption">
								<h5>Author</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-4 col-xs-4 gallery-grids">
					<div class="w3ls-hover">
						<a href="asset/images/g7.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.">
							<img src="asset/images/g7.jpg" class="img-responsive zoom-img" alt="" />
							<div class="view-caption">
								<h5>Author</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-4 col-xs-4 gallery-grids">
					<div class="w3ls-hover">
						<a href="asset/images/g8.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.">
							<img src="asset/images/g8.jpg" class="img-responsive zoom-img" alt="" />
							<div class="view-caption">
								<h5>Author</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-4 col-xs-4 gallery-grids">
					<div class="w3ls-hover">
						<a href="asset/images/g10.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.">
							<img src="asset/images/g10.jpg" class="img-responsive zoom-img" alt="" />
							<div class="view-caption">
								<h5>Author</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //gallery -->

	<!-- contact -->
	<div class="w3ls_map" id="contact">
		<div class="w3ls_map_color">
			<div class="contact-bottom-grids">
				<div class="container">
					<div class="col-md-4 col-xs-4 contact-bottom-grid">
						<div class="dot">
							<span>
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</span>
						</div>
						<h4>Nadwam D.No:23-50-903,
							<span>United States</span>
						</h4>
					</div>
					<div class="col-md-4 col-xs-4 contact-bottom-grid">
						<div class="dot">
							<span>
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</span>
						</div>
						<a href="mailto:info@example.com">info@example1.com</a>
						<a href="mailto:info@example.com">info@example2.com</a>
					</div>
					<div class="col-md-4 col-xs-4 contact-bottom-grid">
						<div class="dot">
							<span>
								<i class="fa fa-phone" aria-hidden="true"></i>
							</span>
						</div>
						<h4>+020 456 9696
							<span>+020 456 9695</span>
						</h4>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="mail">
			<div class="container">
				<div class="w3l_contact_grids">
					<form action="#" method="post">
						<div class="col-md-6 col-xs-6 w3l_contact_grid_left">
							<input type="text" placeholder="Name" name="Name" required="" />
							<input type="text" placeholder="Phone" name="Phone" required="" />
						</div>
						<div class="col-md-6 col-xs-6 w3l_contact_grid_left">
							<input type="email" placeholder="Email" name="Email" required="" />
							<input type="text" placeholder="Subject" name="Subject" required="" />
						</div>
						<div class="clearfix"> </div>
						<textarea name="Message" placeholder="Type Message Here...." required=""></textarea>
						<input type="submit" value="Submit Now" />
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->


@endsection
