<?php
/*
Template Name: Advertise With Us layout
*/
?>
<?php get_header(); ?>
<section style=" background:url('<?php bloginfo('stylesheet_directory') ?>/images/bg-small.jpg') repeat;">
    <div class="">
        <div class="container">
            <div class="section-title text-center">

            </div>
            <div class="clearfix "></div>
        </div><br>
    </div>
</section>
<div class="row contact-address">
    <div class="container clear-padding">
        <div class="text-center">
            <h2>Advertise with us</h2>
            <h5>Make your product a brand; see your brand being listed in the queue of world’s bigger brands. Radio Orange 91.9FM assures you the best creative work on field and off the field. Meet industry experts and target your key customers with a clear message. Don't hesitate; get in touch with us for the quality creative work & campaigns that you desire.</h5>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <i class="fa fa-map-marker"></i>
                    <p>Corporate Office: Level 1, Above Purti Super Bazaar, Jayanti Nagari-iv, Besa Road, Manish Nagar, Nagpur-440015</p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <i class="fa fa-envelope-o"></i>
                    <p>Inbox us at: <a href="mailto:ajaym@radioorange.in">ajaym@radioorange.in</a></p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <i class="fa fa-phone"></i>
                    <p>Contact: +91 820-898-5951, +91 988-174-7943</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" style="background:#fff;">
    <div class="container clear-padding">
        <div class="col-md-12 col-sm-12 contact-form">
            <form name="advertiseWithUs" action="submit_advertiseWithUs.php" method="post" autocomplete="off">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <input type="text" name="companyname" class="form-control" placeholder="Company Name *" required>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <input type="text" name="personname" class="form-control" placeholder="Contact Person *" required>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <input type="email" name="personemail" class="form-control" placeholder="Email *" required>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <input type="text" name="personphone" class="form-control" placeholder="Phone Number *" required>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <select name="city" class="form-control" required>
                            <option value="">Select City</option>
                            <option value="Akola">Akola</option>
                            <option value="Bilaspur">Bilaspur</option>
                            <option value="Nagpur">Nagpur</option>
                            <option value="Sangli">Sangli</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <input type="text" name="brandName" class="form-control" placeholder="Brand Name">
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                        <textarea class="form-control" rows="5" name="brandDet" placeholder="Brand Details"></textarea>
                    </div>
                    <div class="col-md-6">
                        <textarea class="form-control" rows="5" name="message" placeholder="Your Message *" required></textarea>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-warning submit-review">SEND YOUR MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php get_footer(); ?>