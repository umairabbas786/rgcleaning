<?php include "include/header.php";?>
<?php 
if(isset($_POST['contact'])){
    $msgg='0';
    $to = "umairabbass786@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $txt = $_POST['message'];
    $msg = "Name = $name\r\n" . "Email = $email\r\n". "Phone Number = $phone\r\n" . "Message = $txt\r\n";
    $headers = "From: info@rgcleaning.site";

if(mail($to,$subject,$msg,$headers)){
    $msgg='1';
}
else{
    $msgg='2';
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
                            <h1>Contact Us</h1>
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Blog Area Start Here -->
        <section class="section-padding-12-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-box-layout1">
                            <div class="google-map-area">
                                <div id="googleMap" class="google-map" style="width:100%; height:420px; border-radius: 4px;"></div>
                            </div>
                            <div class="contact-info">
                                <div class="media media-none-lg media-none--sm">
                                    <div class="item-icon">
                                        <i class="flaticon-call-answer"></i>
                                    </div>
                                    <div class="media-body space-md">
                                        <h4>Phone:</h4>
                                        <ul>
                                            <li style="white-space: nowrap;">+1 323 428 8922</li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="media media-none-lg media-none--sm">
                                    <div class="item-icon">
                                        <i class="flaticon-message"></i>
                                    </div>
                                    <div class="media-body space-md">
                                        <h4>E-mail:</h4>
                                        <ul>
                                            <li><a href="mailto:inforgcleaning@gmail.com">inforgcleaning@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="media media-none-lg media-none--sm">
                                    <div class="item-icon">
                                        <i class="flaticon-maps-and-flags"></i>
                                    </div>
                                    <div class="media-body space-md">
                                        <h4>Location:</h4>
                                        <ul>
                                            <li>13273 Fiji way – Marina Del Rey, CA – 90292</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 sidebar-break-md sidebar-widget-area">
                        <div class="widget widget-contact-form">
                            <div class="heading-layout4">
                                <h4>Have you Any Question?</h4>
                            </div>
                            <form class="contact-form-box" method="POST" action="">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="fas fa-user"></i></div>
                                        <input type="text" placeholder="Name" class="form-control" name="name" data-error="Name field is required" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="far fa-envelope"></i></div>
                                        <input type="email" placeholder="E-mail Address" class="form-control" name="email" data-error="email field is required" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="fas fa-phone-volume"></i></div>
                                        <input type="text" placeholder="Phone" class="form-control" name="phone" data-error="Phone field is required" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="fas fa-question"></i></div>
                                        <input type="text" placeholder="Subject" class="form-control" name="subject" data-error="Phone field is required" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="far fa-comments"></i></div>
                                        <textarea placeholder="Message" class="textarea form-control" name="message" id="form-message" rows="4" cols="20" data-error="Message field is required" required=""></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <button type="submit" name="contact" class="fw-btn-fill bg-accent text-primarytext">Send Message</button>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End Here -->
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
      <p>Your query is received and we will contact you soon</p>
     </div>
                 
            </div>
  
        </div>
    </div>
</div>
        <script>
<?php 
    if($msgg == '1'){
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