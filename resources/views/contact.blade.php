@extends('layout.main')
@section('content')
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
