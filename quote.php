<?php include "include/header.php";?>
<?php include "include/nav.php";?>
<!-- Inne Page Banner Area Start Here -->
<section class="inner-page-banner bg-common" data-bg-image="img/figure/breadcumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Get An Estimate</h1>
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>Get An Estimate</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Booking Form Area Start Here -->
        <section class="section-padding-12-9">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-12">
                        <div class="card p-5">
                            <h2 class="item-title text-center" style="font-weight: 700;">Get An Estimate</h2>
                            <h4 style="font-weight: 600;">Book your cleaning Service in 60 seconds.</h4>
                            <hr>
                            <form class="contact-form-box">
                                <div class="row gutters-10">
                                    <div class="col-md-12 my-4">
                                        <h4 style="font-weight: 600;">Contact Information</h4>
                                        <p class="mt-n4">This information will be used to contact you about your service</p>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="First Name" class="form-control" name="name" required>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="Last Name" class="form-control" name="name" required>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="Phone Number" class="form-control" name="name" required>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="E-mail" class="form-control" name="name" required>
                                    </div>
                                    <div class="col-md-12 my-4">
                                        <hr>
                                        <h4 style="font-weight: 600;">Home Information</h4>
                                        <p class="mt-n4">Tell us about your home</p>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="Number of Bedroom" class="form-control" name="name" required>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="Number of Bathroom" class="form-control" name="name" required>
                                    </div>
                                    <div class="col-md-12 col-12 form-group">
                                        <input type="text" placeholder="Approximate square footage of your property?" class="form-control" name="name" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="select2">
                                            <option value="" selected disabled>Do you have Pets?</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="select2">
                                            <option value="" selected disabled>How often you want the service?</option>
                                            <option value="One time service">One time service</option>
                                            <option value="Daily">Daily</option>
                                            <option value="Weekly">Weekly</option>
                                            <option value="Every 2 weeks">Every 2 weeks</option>
                                            <option value="Every 4 weeks">Every 4 weeks</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <p>Will you or someone be present during the cleaning (optional) </p>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <select class="select2">
                                            <option value="" selected disabled>Choose an option</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                   
                                    <div class="col-md-12 my-4">
                                        <hr>
                                        <h4 style="font-weight: 600;">Service Requested</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <p>Any Specific request you are looking for in services? (optional) </p>
                                    </div>
                                    <div class="col-12 form-group mg-b-20">
                                        <textarea placeholder="Type your request" class="textarea form-control" name="request" id="form-message" rows="2" cols="20" 
                                        ></textarea>
                                    </div>
                                    <div class="col-md-12 my-4">
                                        <hr>
                                        <h4 style="font-weight: 600;">Address</h4>
                                    </div>
                                    <div class="col-md-12 col-12 form-group">
                                        <input type="text" placeholder="Street" class="form-control" name="name" required>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="City" class="form-control" name="name" required>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="State" class="form-control" name="name" required>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="Zip Code" class="form-control" name="name" required>
                                    </div>
                                    <div class="col-12 form-group">
                                        <button type="submit" class="fw-btn-fill bg-accent text-primarytext">Book Now<i class="fas fa-angle-right"></i></button>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Booking Form Area End Here -->

<?php include "include/footer.php";?>