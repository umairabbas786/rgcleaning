<?php include "include/header.php";?>
<style>
    .card {
  margin: 10px 10px;
}

/* Flip Cards CSS */
.card-container {
  display: grid;
  perspective: 700px;
}

.card-flip {
  display: grid;
  grid-template: 1fr / 1fr;
  grid-template-areas: "frontAndBack";
  transform-style: preserve-3d;
  transition: all 0.7s ease;
}

.card-flip div {
  backface-visibility: hidden;
  transform-style: preserve-3d;
}

.front {
  grid-area: frontAndBack;
}

.back {
  grid-area: frontAndBack;
  transform: rotateY(-180deg);
}

.card-container:hover .card-flip {
  transform: rotateY(180deg);
}
</style>
<?php include "include/nav.php";?>
<!-- Inne Page Banner Area Start Here -->
<section class="inner-page-banner bg-common" data-bg-image="img/figure/breadcumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>Pricing</h1>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Pricing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inne Page Banner Area End Here -->
<!-- Pricing Table Area Start Here -->
<section class="section-padding-12-9">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Below you will find rates for general cleaning. This are perfect if you keep your place in a good
                    shape, use professional cleaning services or for Airbnb properties.</p>

                <div class="row mb-3">
                    <!-- Card 1 -->
                    <div class="col-md-3 card-container">
                        <div class="card-flip">
                            <!-- Card 5 Front -->
                            <div class="card front card-inverse" style="height: 250px!important;overflow:hidden;">
                                <img class="card-img img-fluid"
                                    src="img/one.jpg"
                                    alt="Card image">
                                <div class="card-img-overlay">
                                    <h2 class="card-title mt-5 pt-5 text-center" style="font-weight: 700;">Studio/1 Bedroom</h2>
                                </div>
                            </div>
                            <!-- End Card 1 Front -->

                            <!-- Card 1 Back -->
                            <div class="card back text-center" style="height: 250px!important;overflow:hidden;">
                                <div class="card-block">
                                    <h2 class="card-title mt-5">$145</h2>
                                    <p class="card-text">for general cleaning only</p>
                                    <a href="#" class="btn-fill-md bg-accent btn-slide-hover text-primarytext">Get an Estimate</a>
                                </div>
                            </div>
                            <!-- End Card 1 Back -->
                        </div>
                    </div>
                    <!-- End Card 1 -->
                    <!-- Card 1 -->
                    <div class="col-md-3 card-container">
                        <div class="card-flip">
                            <!-- Card 5 Front -->
                            <div class="card front card-inverse" style="height: 250px!important;overflow:hidden;">
                                <img class="card-img img-fluid"
                                    src="img/two.jpg"
                                    alt="Card image">
                                <div class="card-img-overlay">
                                    <h2 class="card-title mt-5 pt-5 text-center" style="font-weight: 700;">2 Bedroom</h2>
                                </div>
                            </div>
                            <!-- End Card 1 Front -->

                            <!-- Card 1 Back -->
                            <div class="card back text-center" style="height: 250px!important;overflow:hidden;">
                                <div class="card-block">
                                    <h2 class="card-title mt-5">$169</h2>
                                    <p class="card-text">for general cleaning only</p>
                                    <a href="#" class="btn-fill-md bg-accent btn-slide-hover text-primarytext">Get an Estimate</a>
                                </div>
                            </div>
                            <!-- End Card 1 Back -->
                        </div>
                    </div>
                    <!-- End Card 1 -->
                    <!-- Card 1 -->
                    <div class="col-md-3 card-container">
                        <div class="card-flip">
                            <!-- Card 5 Front -->
                            <div class="card front card-inverse" style="height: 250px!important;overflow:hidden;">
                                <img class="card-img img-fluid"
                                    src="img/three.jpg"
                                    alt="Card image">
                                <div class="card-img-overlay">
                                    <h2 class="card-title mt-5 pt-5 text-center" style="font-weight: 700;">3 Bedroom</h2>
                                </div>
                            </div>
                            <!-- End Card 1 Front -->

                            <!-- Card 1 Back -->
                            <div class="card back text-center" style="height: 250px!important;overflow:hidden;">
                                <div class="card-block">
                                    <h2 class="card-title mt-5">$209</h2>
                                    <p class="card-text">for general cleaning only</p>
                                    <a href="#" class="btn-fill-md bg-accent btn-slide-hover text-primarytext">Get an Estimate</a>
                                </div>
                            </div>
                            <!-- End Card 1 Back -->
                        </div>
                    </div>
                    <!-- End Card 1 -->
                    <!-- Card 1 -->
                    <div class="col-md-3 card-container">
                        <div class="card-flip">
                            <!-- Card 5 Front -->
                            <div class="card front card-inverse" style="height: 250px!important;overflow:hidden;">
                                <img class="card-img img-fluid"
                                    src="img/four.jpg"
                                    alt="Card image">
                                <div class="card-img-overlay">
                                    <h2 class="card-title mt-5 pt-5 text-center" style="font-weight: 700;">4 Bedroom</h2>
                                </div>
                            </div>
                            <!-- End Card 1 Front -->

                            <!-- Card 1 Back -->
                            <div class="card back text-center" style="height: 250px!important;overflow:hidden;">
                                <div class="card-block">
                                    <h2 class="card-title mt-5">$289</h2>
                                    <p class="card-text">for general cleaning only</p>
                                    <a href="#" class="btn-fill-md bg-accent btn-slide-hover text-primarytext">Get an Estimate</a>
                                </div>
                            </div>
                            <!-- End Card 1 Back -->
                        </div>
                    </div>
                    <!-- End Card 1 -->
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center">3,000 sq ft ..... $369</h4>
                                <p class="card-body">up to 3,999 sq ft, general cleaning only</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center">4,000 sq ft ..... $439</h4>
                                <p class="card-body">up to 4,999 sq ft, general cleaning only</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center">5,000 sq ft ..... $499</h4>
                                <p class="card-body">up to 5,999 sq ft, general cleaning only</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center">6,000 sq ft ..... pls call</h4>
                                <p class="card-body">Please contact us to discuss pricing</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 my-5 text-center">
                <a href="quote.php" class="btn-fill-md bg-accent btn-slide-hover text-primarytext">Get an Estimate<i
                            class="fas fa-angle-right"></i></a>
                </div>
                <div class="row mt-5">
                    <div class="col-md-8 mt-3">
                        <div class="row p-0 m-0">
                            <div class="col-md-3 col-4">
                                <div class="card" style="border: 0;">
                                    <img class="card-img-top" src="img/detergent-300x300.png" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-3 col-4">
                                <div class="card" style="border: 0;">
                                    <img class="card-img-top" src="img/box-300x300.png" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-3 col-4">
                                <div class="card" style="border: 0;">
                                    <img class="card-img-top" src="img/oven-300x300.png" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-3 col-4 mt-md-0 mt-2">
                                <div class="card" style="border: 0;">
                                    <img class="card-img-top" src="img/fridge-300x300.png" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-3 col-4 mt-2">
                                <div class="card" style="border: 0;">
                                    <img class="card-img-top" src="img/laundry-300x300.png" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-3 col-4 mt-2">
                                <div class="card" style="border: 0;">
                                    <img class="card-img-top" src="img/washing-machine-300x300.png" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-3 col-4 mt-2">
                                <div class="card" style="border: 0;">
                                    <img class="card-img-top" src="img/dish-washing-300x300.png" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-3 col-4 mt-2">
                                <div class="card" style="border: 0;">
                                    <img class="card-img-top" src="img/balcony-300x300.png" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-3 col-4 mt-2">
                                <div class="card" style="border: 0;">
                                    <img class="card-img-top" src="img/patio-300x300.png" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-3 col-4 mt-2">
                                <div class="card" style="border: 0;">
                                    <img class="card-img-top" src="img/window-300x300.png" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-3 col-4 mt-2">
                                <div class="card" style="border: 0;">
                                    <img class="card-img-top" src="img/jalousie-300x300.png" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-3 col-4 mt-2">
                                <div class="card" style="border: 0;">
                                    <img class="card-img-top" src="img/french-doors-300x300.png" alt="Card image cap">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-md-0 mt-3">
                        <h2>Extras</h2>
                        <p>We have extras to combine with general cleaning. These are great for move in-move out option, if you need to customize your cleaning or add hours for a deep cleaning.</p>
                        <p>Please also note that inside appliances cleaning is not included in general cleaning but included in move in/move out package.</p>
                        <p>If you need a custom cleaning service, we recommend to go with hourly rate. We charge $50 per hour for one person and require 3 hours minimum. 2 person crew is $100 per hour and 2 hours minimum.</p>
                        <p>For the same day cleaning service, please call us at 323 428-8922 to check availability.</p>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <h3>HOURLY PRICES :</h3>
                    <p>(can’t be used for move in/move out)</p>
                    <p>1 person – $50 per hour (3 hour minimum)</p>
                    <p>2 people – $100 per hour (2 hour minimum)</p>
                    <h3>Extras prices:</h3>
                    <p>Inside oven – $29</p>
                    <p>Inside fridge – $29</p>
                    <p>Patio – $59 per patio</p>
                    <p>Balcony – $29 per balcony</p>
                    <br>
                    <p>Move-in/Move out package includes: inside cabinets and appliances, windows from inside, door tracks, baseboards. </p>
                    <p>Please check "Get an Estimate" page for pricing on move in/move out package. Please call for the estimate if your house is 5 bdrm+.</p>
                    <p>Windows cleaning (inside only) – $5 per window</p>
                    <p>Laundry (if you have washer/dryer in the house) – $15 per load</p>
                    <p>Windows + Blinds cleaning – $15 per window</p>
                    <!-- <p>Same Day Service – $29 please call 818-208-1698 for availability</p> -->
                    <p>Deep cleaning – price depends on the size, please refer to our online booking form. Adds extra time to focus on areas that require more attention.</p>
                    <p>Doesn’t include cleaning inside appliances, washing walls or inside cabinets. Feel free to select more than 1 deep cleaning if you feel that your space needs it and hasn’t been cleaned professionally in less than 3 months. If your place hasn’t been cleaned professionally in over 3 months, please add at least 2 deep cleanings. </p>
                    <!-- <h3>Organizing:</h3>
                    <p>We offer organizing services for $50 per hour per person. Please use online chat (bottom right corner) or call us 818-208-1698 if you’re unsure how many hours would be needed.</p> -->
                </div>
            </div>
        </div>
</section>
<!-- Pricing Table Area End Here -->
<!-- Banner Area Start Here -->
<section class="banner-wrap-layout2 bg-common" data-bg-image="img/figure/banner-bg1.jpg">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-12">
                <div class="banner-box-layout4">
                    <h2 class="item-title text-Primary">Together <span>We'll Explore</span> New Things</h2>
                    <a href="quote.php" class="btn-fill-md bg-accent btn-slide-hover text-primarytext">Get an Estimate<i
                            class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="banner-box-layout5">
                    <div class="item-icon shape1">
                        <img src="img/figure/icon-shape4.png" alt="shape">
                    </div>
                    <div class="item-icon shape2">
                        <img src="img/figure/icon-shape3.png" alt="shape">
                    </div>
                    <div class="item-icon shape3">
                        <img src="img/figure/icon-shape2.png" alt="shape">
                    </div>
                    <div class="item-icon shape4">
                        <img src="img/figure/icon-shape1.png" alt="shape">
                    </div>
                    <div class="item-img">
                        <img src="img/figure/banner-figure.png" alt="figure">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End Here -->
<?php include "include/footer.php";?>