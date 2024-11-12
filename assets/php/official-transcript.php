<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/";
    include($IPATH."header.html"); ?>
    
                 <!--Main Slider-->
                 <section>
                    <div class="featured-hero">
                      <div class="img-content">
                        <h3>Studying at Spirit Brood</h3>
                        <span>Flexible, Self-paced, Self-directed Online Learning</span>
                      </div>
                    </div>
                </section>
                <!--Main Slider  end-->
        
        <!-- about top -->
        <div class="abouttop">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-8">
                        <h1 class="featured-heading-text1">Official Transcript Request Form</h3>
                        <!-- <h3 class="featured-heading-text2">Spirit Brood Seminary Honors Life Experience.</h3> -->
                        <p class="featured-heading-textp">You are required to upload the proof of payment 
                            for your graduation fee on this form before submitting. Please, make
                             sure you have it available.
                            <br><br></p>

                            
                            <form action="official-transcript-processing.php" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Surname*" name="surname" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="First Name*" name="firstname" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Middle Name*" name="middlename" required>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Student ID*" name="student_id" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Street Address*" name="street_address" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="City*" name="city" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="State*" name="state" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="ZIP Code*" name="zip_code" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Country*" name="country" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Closest Landmark*" name="landmark" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="proof_of_payment">Upload Proof of Payment*</label>
                <input type="file" class="form-control" id="proof_of_payment" name="proof_of_payment" accept="image/*,application/pdf" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="proof_of_identity">Upload Proof of Identity*</label>
                <input type="file" class="form-control" id="proof_of_identity" name="proof_of_identity" accept="image/*,application/pdf" required>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-md-12">
        <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block" style="font-size: 1.25rem; padding: 10px 0;">
            Submit
        </button>
    </div>
</div>
</form>







                           
                           


    




<!-- <div style="background-color: #E4A839;  padding: 10px; text-align: center;">
                            <p style="color: #0b0b0b; font-size: 20px; font-weight: 400; text-align: center;"> You may click on the button to pay for the Assessment. Upon successfully paying for the
                                Assessment, you will be able to download the form.</p>
                                <button type="button" class="btn btn-lg" style="background-color: #fff; color: #E4A839; outline: none; padding: 10px 30px;">Pay Now</button>
                        </div> -->
                        
                    </div>
                   
                    <div class="col-md-4"><h2 style="font-weight: 400; margin-top: 60px !important;">Academics</h2>
                       <div class="servdtlaccord margbtm40">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading active-panel">
                                        <h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        Certficate Programs
									</a>
								  </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body" style=" font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Certificate Programs</b> <br>
                                            <a href="/blog/certified-christian-administrator"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Administrator</a><br>
                                            <a href="/blog/certified-christian-caregiver"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Caregiver</a><br>
                                            <a href="/blog/certified-christian-counselor"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Counselor</a><br>
                                            <a href="/blog/certified-christian-life-coach"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Life Coach</a><br>
                                            <a href="/blog/certified-christian-mediator"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Mediator </a><br>
                                            <a href="/blog/certified-christian-philosopher-analyst"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Philosopher/Analyst</a><br>
                                            <a href="/blog/certified-christian-chaplain"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Corporate Chaplain</a><br>
                                       </div>
                                        
                                    </div>
                                </div>
                            
                               
                            </div>
                        </div>
                        
                          <div class="servdtlaccord margbtm40">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        License Programs
									</a>
								  </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body" style=" font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>License Programs</b> <br>
                                              <a href="/blog/licensed-christian-administrator"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Christian Administrator</a><br>
                                            <a href="/blog/licensed-christian-caregiver"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Christian Caregiver</a><br>
                                            <a href="/blog/licensed-christian-counselor"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Christian Counselor</a><br>
                                            <a href="/blog/licensed-christian-life-coach"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Christian Life Coach</a><br>
                                            <a href="/blog/licensed-christian-mediator"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Christian Mediator </a><br>
                                            <a href="/blog/licensed-christian-philosopher-analyst"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Christian Philosopher/Analyst</a><br>
                                            <a href="/blog/licensed-christian-chaplain"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Corporate Chaplain</a><br>
                                   
                                        </div>
                                        
                                    </div>
                                </div>
                            
                               
                            </div>
                        </div>
                       <div class="servdtlaccord margbtm40">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        Bachelor's Degree Programs
									</a>
								  </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Bachelor of Theology (B.Th.) Programs</b> <br>
                                            <a href="/blog/bth-biblical-studies"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Th. Biblical Studies</a><br>
                                            <a href="/blog/bth-christian-apologetics"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Th. Christian Apologetics</a><br>
                                            <a href="/blog/bth-christian-counseling"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Th. Christian Counseling</a><br>
                                            <a href="/blog/bth-christian-philosophy"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Th. Christian Philosophy</a><br>
                                            <a href="/blog/bth-ecumenical-theology"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Th. Ecumenical Theology
                                            </a><br>
                                            <a href="/blog/bth-systematic-theology"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Th. Systematic Theology
                                            </a>
                                        </div>

                                        <hr>
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Bachelor of Ministry (B.Min.) Programs</b> <br>
                                            <a href="/blog/bmin-christian-leadership"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  B.Min. Christian Leadership</a><br>
                                            <a href="/blog/bmin-church-administration"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  B.Min. Church Administration</a><br>
                                            <a href="/blog/bmin-educational-management"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Min. Educational Management </a><br>
                                            <a href="/blog/bmin-evangelism-missions"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Min. Evangelism and Missions</a><br>
                                            <a href="/blog/bmin-music-worship"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Min. Music and Worship</a><br>
                                            <a href="/blog/bmin-pastoring-discipleship"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Min. Pastoring and Discipleship </a><br>
                                            <a href="/blog/bmin-youth-ministry"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Min. Youth Ministry </a><br>
                                        </div>
                                        <hr>
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Bachelor of Divinity (B.Div.) Programs</b> <br>
                                            <a href="/blog/bdiv-church-history"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Div. Church History </a><br>
                                            <a href="/blog/bdiv-community-development"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Div. Community Development</a><br>
                                            <a href="/blog/bdiv-corporate-chaplaincy"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Div. Corporate Chaplaincy </a><br>
                                            <a href="/blog/bdiv-human-resource-management"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Div. Human Resource Management </a><br>
                                            <a href="/blog/bdiv-religious-studies"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Div. Religious Studies </a><br>
                                            <a href="/blog/bdiv-restorative-justice"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Div. Restorative Justice</a><br>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="servdtlaccord margbtm40">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                        Master's Degree Programs
									</a>
								  </h4>
                                    </div>
                                       <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Master of Theology (M.Th.) Programs </b> <br>
                                            <a href="/blog/mth-christain-apologetics"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Th. Christian Apologetics</a><br>
                                            <a href="/blog/mth-christian-counseling"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Th. Christian Counseling</a><br>
                                            <a href="/blog/mth-christian-historical-theology"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Th. Historical Theology</a><br>
                                            <a href="/blog/mth-christian-philosophy-theological-studies"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Th. Philosophy and Theological Studies</a><br>
                                            </a>
                                        </div>

                                        <hr>
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Master of Ministry (M.Min.) Programs </b> <br>
                                            <a href="/blog/mmin-christian-educational-management"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  M.Min. Educational Management </a><br>
                                            <a href="/blog/mmin-church-pastoral-ministry"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Min. Pastoral Ministry </a><br>
                                            <a href="/blog/mmin-strategic-leadership"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Min. Strategic Leadership</a><br>
                                            <a href="/blog/mmin-worship-creative-arts"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Min. Worship and Creative Arts </a><br>
                                            <a href="/blog/mmin-youth-and-family-ministry"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Min. Youth and Family Ministry </a><br>
                                        </div>
                                        <hr>
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Master of Divinity (M.Div.) Programs </b> <br>
                                            <a href="/blog/mdiv-community-development-and-misions"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Div. Community Development and Missions </a><br>
                                            <a href="/blog/mdiv-comparative-religion"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Div. Comparative Religion </a><br>
                                            <a href="/blog/mdiv-corporate-management"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Div. Corporate Management</a><br>
                                            <a href="/blog/mdiv-new-testament-studies"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Div. New Testament Studies </a><br>
                                            <a href="/blog/mdiv-old-testament-studies"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Div. Old Testament Studies </a><br>
                                            <a href="/blog/mdiv-restorative-justice"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Div. Restorative Justice</a><br>
                                        </div>
                                    </div>
                                </div>
                            
                               
                            </div>
                        </div>
                        <div class="servdtlaccord margbtm40">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                        Doctorate Degree Programs
									</a>
								  </h4>
                                    </div>
                                     <div id="collapseFive" class="panel-collapse collapse">
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Doctor of Theology (Th.D.) Programs </b> <br>
                                            <a href="/blog/thd-interfaith-studies"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> Th.D. Interfaith Studies </a><br>
                                            <a href="/blog/thd-patristics-and-early-christianity"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> Th.D. Patristics and Early Christianity </a><br>
                                            <a href="/blog/thd-practical-theology-and-counseling"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> Th.D. Practical Theology and Counseling </a><br>
                                           
                                            </a>
                                        </div>

                                        <hr>
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Doctor of Ministry (D.Min.) Programs </b> <br>
                                            <a href="/blog/dmin-educational-management"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> D.Min. Educational Management </a><br>
                                            <a href="/blog/dmin-practical-ministry-and-the-arts"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> D.Min. Practical Ministry and the Arts </a><br>
                                        </div>
                                        <hr>
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Doctor of Divinity (D.Div.) Programs </b> <br>
                                            <a href="/blog/ddiv-biblical-exegesis"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> D.Div. Biblical Exegesis </a><br>
                                            <a href="/blog/ddiv-christian-ethics-and-philosophy"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> D.Div. Christian Ethics and Philosophy </a><br>
                                            <a href="/blog/ddiv-justice-and-social-advocacy"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> D.Div. Justice and Social Advocacy </a><br>
                                            <a href="/blog/ddiv-leadership-and-organizational-development"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> D.Div. Leadership and Organizational Development </a><br>
                                        </div>
                                    </div>
                                </div>
                            
                               
                            </div>
                        </div>
                     
                      
                    </div>
                </div>
            </div>
        </div>
        <!-- about top  end-->

       
<?php 
    include($IPATH."footer.html"); ?>

