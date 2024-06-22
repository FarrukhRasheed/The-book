@extends('layout.main')
@section('content')

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
									<img src="asset/images/b3.png" alt="">
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
					<img src="images/g5.jpg" alt="">
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
@endsection

