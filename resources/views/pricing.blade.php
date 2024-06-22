@extends('layout.main')
@section('content')
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
@endsection
