<?php include "include/header.php";?>
<?php 
if(isset($_POST['book'])){
    $ms='0';
    $to = "umairabbass786@gmail.com";
    $fname = $_POST['f-name'];
    $lname = $_POST['l-name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $bed = $_POST['bedroom'];
    $bath = $_POST['bathroom'];
    $foot = $_POST['foot'];
    $pets = $_POST['pets'];
    $service = $_POST['service'];
    $status = $_POST['status'];
    $request = $_POST['request'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $subject = "Estimate";
    $msg = "First Name = $fname\r\n" . "Last Name = $lname\r\n" . "Email = $email\r\n". "Phone Number = $phone\r\n"
    . "Number of Bedrooms = $bed\r\n" . "Number of Bathrooms = $bath\r\n" . "Square Footage = $foot\r\n"
    . "Do They Have Pets = $pets\r\n" . "How Often want service = $service\r\n"
    . "How Will be present during service = $service\r\n" . "Any Specific Request = $request\r\n" . "Street = $street\r\n"
    . "City = $city\r\n" . "State = $state\r\n" . "Zip  = $zip\r\n";
    $headers = "From: info@rgcleaning.site";

if(mail($to,$subject,$msg,$headers)){
    $ms='1';
}
else{
    $ms='2';
}
}


?>
<?php include "include/nav.php";?>
<style>
            .thank-you-pop{
	width:100%;
 	padding:20px;
	text-align:center;
}
.thank-you-pop img{
	width:76px;
	height:auto;
	margin:0 auto;
	display:block;
	margin-bottom:25px;
}

.thank-you-pop h1{
	font-size: 42px;
    margin-bottom: 25px;
	color:#5C5C5C;
}
.thank-you-pop p{
	font-size: 20px;
    margin-bottom: 27px;
 	color:#5C5C5C;
}
.thank-you-pop h3.cupon-pop{
	font-size: 25px;
    margin-bottom: 40px;
	color:#222;
	display:inline-block;
	text-align:center;
	padding:10px 20px;
	border:2px dashed #222;
	clear:both;
	font-weight:normal;
}
.thank-you-pop h3.cupon-pop span{
	color:#03A9F4;
}
.thank-you-pop a{
	display: inline-block;
    margin: 0 auto;
    padding: 9px 20px;
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    background-color: #8BC34A;
    border-radius: 17px;
}
.thank-you-pop a i{
	margin-right:5px;
	color:#fff;
}
#ignismyModal .modal-header{
    border:0px;
}
        </style>
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
                            <form class="contact-form-box" action="" method="POST">
                                <div class="row gutters-10">
                                    <div class="col-md-12 my-4">
                                        <h4 style="font-weight: 600;">Contact Information</h4>
                                        <p class="mt-n4">This information will be used to contact you about your service</p>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="First Name" class="form-control" name="f-name" required>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="Last Name" class="form-control" name="l-name" required>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="Phone Number" class="form-control" name="phone" required>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="E-mail" class="form-control" name="email" required>
                                    </div>
                                    <div class="col-md-12 my-4">
                                        <hr>
                                        <h4 style="font-weight: 600;">Home Information</h4>
                                        <p class="mt-n4">Tell us about your home</p>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="Number of Bedroom" class="form-control" name="bedroom" required>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="Number of Bathroom" class="form-control" name="bathroom" required>
                                    </div>
                                    <div class="col-md-12 col-12 form-group">
                                        <input type="text" placeholder="Approximate square footage of your property?" class="form-control" name="foot" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="select2" name="pets">
                                            <option value="" selected disabled>Do you have Pets?</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="select2" name="service">
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
                                        <select class="select2" name="status">
                                            <option value="" selected disabled>Choose an option</option>
                                            <option value="Myself">Myself</option>
                                            <option value="Someone else">Someone else</option>
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
                                        <input type="text" placeholder="Street" class="form-control" name="street" required>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="City" class="form-control" name="city" required>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="State" class="form-control" name="state" required>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="Zip Code" class="form-control" name="zip" required>
                                    </div>
                                    <div class="col-12 form-group">
                                        <button type="submit" name="book" class="fw-btn-fill bg-accent text-primarytext">Book Now<i class="fas fa-angle-right"></i></button>
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

        <div class="modal fade" id="ignismyModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
             </div>
  
            <div class="modal-body">
               
    <div class="thank-you-pop">
      <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
      <h1>Thank You!</h1>
      <p>Your Estimate is received and we will contact you soon</p>
     </div>
                 
            </div>
  
        </div>
    </div>
</div>
        <script>
<?php 
    if($ms == '1'){
?>
$(document).ready(function() {
 $('.modal').modal("show");
});

<?php }else{?>
$(document).ready(function() {
 $('.modal').modal("hide");
});
<?php }?>
</script>

<?php include "include/footer.php";?>