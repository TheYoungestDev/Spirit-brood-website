<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/";
    include($IPATH."header.html"); ?>
    
         <!--Main Slider-->
         <section>
            <div class="featured-hero">
              <div class="img-content">
                <h3>Connect with Us </h3>
                <span>We're available to provide any information you need.</span>.
              </div>
            </div>
        </section>
        <!--Main Slider  end-->
        <!-- about top -->
        <div class="abouttop">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-6">
                        <h2 class="featured-heading-text1">Contact Information</h2>
                        <p class="featured-heading-textp">If you have a question that you can't find the answer to, please reach out to us in any of the following ways:
                        </p>
                        <br />
                        <b><h3 class="featured-heading-textp" style="font-weight: 900;">Contact Form:</h3></b>
                        <p class="featured-heading-textp" style="margin-top: -15px;">Fill out our contact form to request more information.</p> <br>
                        <address class="featured-heading-textp"><b>Mailing Address:</b> <br>
                            <span>1309 Coffeen Avenue STE 1200, <br>
                                Sheridan, WY, 82801,<br>
                                United States<br></span> <br />
                                <b>Email:</b><a href="mailto:info@spiritbrood.org" style="color: #0b0b0b;"> info@spiritbrood.org</a><br><br>
                            <b> Contact (SMS and WhatsApp only):</b><br>
                            <span style="font-weight: 500;">USA:</span> <a href="https://wa.link/jqe7gi">  +1 332-777-3962 </a> <br>
                            <span style="font-weight: 500;">Nigeria:</span> <a href="https://wa.link/9bam1k"> +234 913 838 6321 </a>  <br>
                            <span style="font-weight: 500;">Philippines: </span> <a href="https://wa.link/fny051"> +63 961 344 8091 </a> <br>
                            <span style="font-weight: 500;">Gambia:</span><a href="https://wa.link/hgbns8"> +220 406 8589 </a><br>
                            </address>
                       <!-- <br>-->
                       <!-- <h2 class="featured-heading-text2">Public Speaking Engagements:</h2>-->
                       <!-- <p class="featured-heading-textp">-->
                       <!--    To book Rev. Dr. Temilolu A. Aliu for a speaking engagement, book signing, or seminar, -->
                       <!--    kindly send a mail to <a href="mailto:booking@spiritbrood.org" style="color: #E4A839;">booking@spiritbrood.org</a> include the name of the church/venue, location, and event date. -->
                       <!--    To book another staff member, email <a href="mailto:info@spiritbrood.org" style="color: #E4A839;">info@spiritbrood.org</a> with the staff member's name, church/venue name, location, and event date.-->
                       <!-- </p>-->
                       <!-- <br>-->
                       <!-- <h2 class="featured-heading-text2">Request a Degree Conferral by Rev. Dr. Temilolu A. Aliu</h2>-->
                       <!--<p class="featured-heading-textp">To request Rev. Dr. Temilolu A. Aliu to confer your degree in person, please fill out the Request to Confer a Degree Form by <a href="#" style="color: #E4A839;">clicking here</a></p>-->
                    </div>
                    <div class="col-md-6" id="contact-info-form">
                        <h2 class="featured-heading-text2">Feel free reach out to us...</h2>
                            <form action="#" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name*" name="firstname" required>
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Last Name*" name="lastname" required>
                              </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Address*" name="email" required>
                                </div>
                                <div class="form-group">
                                  <input type="phone" class="form-control" placeholder="Phone Number*" name="phone" required>
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="City*" name="city" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="State*" name="state" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Zip Code*" name="zipcode" required>
                            </div>
                            
                              <div class="form-group">
                                <select class="form-control" name="finduson" placeholder="How did you get to know about us*">
                                  <option value="How did you get to know about us" disabled selected>How did you get to know about us*</option>
                                  <option value="Facebook">Facebook</option>
                                  <option value="Instagram">Instagram</option>
                                  <option value="Twitter">Twitter</option>
                                  <option value="WhatsAAp">WhatsAAp</option>
                                  <option value="Google">Google</option>
                                  <option value="Friend">Friend</option>
                                  <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Were you referred by someone? If so, please specify.*" name="referral">
                            </div> <div class="form-group">
                                <textarea name="text" class="form-control" placeholder="Message" cols="50" rows="40"></textarea>
                            </div>
                                <button type="submit" name="submit" class="btn btn-contact-info btn-block">Submit Form</button>
                            </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- about top  end-->

        
<?php 
    include($IPATH."footer.html"); ?>