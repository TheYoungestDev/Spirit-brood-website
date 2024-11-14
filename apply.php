<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/";
    include($IPATH."header.html"); ?>
    
    
         <!--Main Slider-->
         <section>
             <script src="apply-form.js"></script>
            <div class="featured-hero">
              <div class="img-content">
                <h3>Start Today</h3>
                <span>We’re Excited to be a Part of Your Success Story.</span>
              </div>
            </div>
        </section>
        <!--Main Slider  end-->
        <!-- about top -->
        <div class="abouttop">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-8">
                        <h2 class="featured-heading-text1">Apply Now</h2>
                        <!-- <h2 class="featured-heading-text2">Admission Procedures</h2> -->
                        <hr>
                        <p class="featured-heading-textp">

                        Spirit Brood Theological Seminary has a rolling admission policy. This 
                        means that prospective students are not limited to just enrolling in the fall,
                        spring or summer. <br><br>
                        You can enroll in any of our programs right now, if you
                        are ready to start. <br>
                        
                        To enroll in any of our degree programs, you may complete the New
                        Student Application Enrollment Form below.
                        <br><br>The admission office will
                        reach out to you as soon as your application is reviewed.


                            <!-- Spirit Brood Theological Seminary employs a rolling admission policy, this means that prospective
                                students are not limited to just enrolling in the fall, spring or summer. <br> <br>
                                With rolling admission, students can enroll in any of our programs whenever they are ready to start. <br> <br>
                                To enroll in one of our degree programs, you may complete the New Student Application
                                Enrollment Form by clicking the button below. <br> <br>
                                Please, note that there is an application fee of $50. You will be required to add a copy of your
                                receipt to the application form. <br> <br>
                                You would also need to attach copies of all required Certificates,
                                Degrees and Diplomas along with one passport size photo. <br> <br>
                            Once this is complete and we review your application, if accepted, you will receive an admission  -->
                          </p>
                          <hr>
                          <div class="container" id="contact-info-form">
    <h2>New Student Enrollment Form</h2>
    <form action="apply-action.php" method="post" enctype="multipart/form-data">
    <div class="row">
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
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Last Name*" name="lastname" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email Address*" name="email" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Phone Number*" name="phonenumber" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <select class="form-control" name="sex" required>
                    <option value="" disabled selected>Sex*</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="maritalStatus">Marital Status*</label>
                <select class="form-control" name="maritalstatus" required>
                    <option value="" disabled selected>Select*</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Separated">Separated</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="dob">Date of Birth*</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
        </div>
           <div class="col-md-3">
        <div class="form-group">
            <label for="age">Age*</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Address*" name="address" required>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="City*" name="city" required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="State*" name="state" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Country*" name="country" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Postal / Zip Code*" name="postalcode" required>
        </div>
    </div>
</div>
<div class="row">
    <h3>What Program are you applying for?</h3>
    <div class="form-group">
        <select class="form-control" id="programSelect" name="program" required>
            <option value="" disabled selected>Select Program Level*</option>
            <option value="Certification">Certification/License</option>
            <option value="Bachelors">Bachelor’s Degree</option>
            <option value="Masters">Master’s Degree</option>
            <option value="Doctorate">Doctorate Degree</option>
        </select>
    </div>

    <!-- Certification Options -->
    <div class="form-group" id="certificationOptions" style="display: none;">
        <label>Select Certification Program</label>
        <select class="form-control" name="certification">
            <option>Certified/Licensed Christian Administrator</option>
            <option>Certified/Licensed Christian Caregiver</option>
            <option>Certified/Licensed Christian Counselor</option>
            <option>Certified/Licensed Christian Life Coach</option>
            <option>Certified/Licensed Christian Mediator</option>
            <option>Certified/Licensed Christian Philosopher/Analyst</option>
            <option>Certified/Licensed Corporate Chaplain</option>
        </select>
    </div>

    <!-- Bachelor's Degree Options -->
    <div class="form-group" id="bachelorsOptions" style="display: none;">
        <label>Select Bachelor’s Degree Program</label>
        <select class="form-control" id="bachelorSelect" name="bachelors">
            <option value="" disabled selected>Select Bachelor's Degree Program</option>
            <option value="BTh">Bachelor of Theology (B.Th.)</option>
            <option value="BMin">Bachelor of Ministry (B.Min.)</option>
            <option value="BDiv">Bachelor of Divinity (B.Div.)</option>
        </select>
    </div>

    <!-- Bachelor's Degree Specializations -->
    <div class="form-group" id="bThOptions" style="display: none;">
        <label>Select Bachelor of Theology Specialization</label>
        <select class="form-control" name="bThSpecialization">
            <option>B.Th. Biblical Studies</option>
            <option>B.Th. Christian Apologetics</option>
            <option>B.Th. Christian Counseling</option>
            <option>B.Th. Christian Philosophy</option>
            <option>B.Th. Ecumenical Theology</option>
            <option>B.Th. Systematic Theology</option>
        </select>
    </div>

    <div class="form-group" id="bMinOptions" style="display: none;">
        <label>Select Bachelor of Ministry Specialization</label>
        <select class="form-control" name="bMinSpecialization">
            <option>B.Min. Christian Leadership</option>
            <option>B.Min. Church Administration</option>
            <option>B.Min. Educational Management</option>
            <option>B.Min. Evangelism and Missions</option>
            <option>B.Min. Music and Worship</option>
            <option>B.Min. Pastoring and Discipleship</option>
            <option>B.Min. Youth Ministry</option>
        </select>
    </div>

    <div class="form-group" id="bDivOptions" style="display: none;">
        <label>Select Bachelor of Divinity Specialization</label>
        <select class="form-control" name="bDivSpecialization">
            <option>B.Div. Church History</option>
            <option>B.Div. Community Development</option>
            <option>B.Div. Corporate Chaplaincy</option>
            <option>B.Div. Human Resource Management</option>
            <option>B.Div. Religious Studies</option>
            <option>B.Div. Restorative Justice</option>
        </select>
    </div>

    <!-- Master's Degree Options -->
    <div class="form-group" id="mastersOptions" style="display: none;">
        <label>Select Master’s Degree Program</label>
        <select class="form-control" id="masterSelect" name="masters">
            <option value="" disabled selected>Select Master's Degree Program</option>
            <option value="MTh">Master of Theology (M.Th.)</option>
            <option value="MMin">Master of Ministry (M.Min.)</option>
            <option value="MDiv">Master of Divinity (M.Div.)</option>
        </select>
    </div>

    <!-- Master's Degree Specializations -->
    <div class="form-group" id="mThOptions" style="display: none;">
        <label>Select Master of Theology Specialization</label>
        <select class="form-control" name="mThSpecialization">
            <option>M.Th. Christian Apologetics</option>
            <option>M.Th. Christian Counseling</option>
            <option>M.Th. Historical Theology</option>
            <option>M.Th. Philosophy and Theological Studies</option>
        </select>
    </div>
    <div class="form-group" id="mMinOptions" style="display: none;">
        <label>Select Master of Ministry Specialization</label>
        <select class="form-control" name="mMinSpecialization">
            <option>M.Min. Educational Management</option>
            <option>M.Min. Pastoral Ministry</option>
            <option>M.Min. Strategic Leadership</option>
            <option>M.Min. Worship and Creative Arts</option>
            <option>M.Min. Youth and Family Ministry</option>
        </select>
    </div>

    <div class="form-group" id="mDivOptions" style="display: none;">
        <label>Select Master of Divinity Specialization</label>
        <select class="form-control" name="mDivSpecialization">
            <option>M.Div. Community Development and Missions</option>
            <option>M.Div. Comparative Religion</option>
            <option>M.Div. Corporate Management</option>
            <option>M.Div. New Testament Studies</option>
            <option>M.Div. Old Testament Studies</option>
            <option>M.Div. Restorative Justice</option>
        </select>
    </div>




    <!-- DOCTORATE DEGREE -->

    <!-- Doctor's Degree Options -->
    <div class="form-group" id="doctorsOptions" style="display: none;">
        <label>Select Doctorate Degree Program</label>
        <select class="form-control" id="doctorSelect" name="doctors">
            <option value="" disabled selected>Select Doctorate Degree Program</option>
            <option value="DTh">Doctor of Theology (Th.D)</option>
            <option value="DMin">Doctor of Ministry (Th.D)</option>
            <option value="DDiv">Doctor of Divinity (Th.D)</option>
        </select>
    </div>

    <!-- Doctor's Degree Specializations -->
    <div class="form-group" id="dThOptions" style="display: none;">
        <label>Select Doctor of Theology Specialization</label>
        <select class="form-control" name="dThSpecialization">
            <option>Th.D. Interfaith Studies</option>
            <option>Th.D. Patristics and Early Christianity</option>
            <option>Th.D. Practical Theology and Counseling</option>
        </select>
    </div>
    <div class="form-group" id="dMinOptions" style="display: none;">
        <label>Select Doctor of Ministry Specialization</label>
        <select class="form-control" name="dMinSpecialization">
            <option>D.Min. Educational Management</option>
            <option>D.Min. Practical Ministry and the Arts</option>
        </select>
    </div>

    <div class="form-group" id="dDivOptions" style="display: none;">
        <label>Select Doctor of Divinity Specialization</label>
        <select class="form-control" name="dDivSpecialization">
            <option>D.Div. Biblical Exegesis</option>
            <option>D.Div. Christian Ethics and Philosophy</option>
            <option>D.Div. Justice and Social Advocacy</option>
            <option>D.Div. Leadership and Organizational Development</option>
        </select>
    </div>


</div>


<script>
    document.getElementById('programSelect').addEventListener('change', function() {
        var programValue = this.value;

        // Hide all program-specific options
        document.getElementById('certificationOptions').style.display = 'none';
        document.getElementById('bachelorsOptions').style.display = 'none';
        document.getElementById('mastersOptions').style.display = 'none';
        document.getElementById('doctorsOptions').style.display = 'none';
        
        document.getElementById('bThOptions').style.display = 'none';
        document.getElementById('bMinOptions').style.display = 'none';
        document.getElementById('bDivOptions').style.display = 'none';
        document.getElementById('mThOptions').style.display = 'none';
        document.getElementById('mMinOptions').style.display = 'none';
        document.getElementById('mDivOptions').style.display = 'none';
        document.getElementById('dThOptions').style.display = 'none';
        document.getElementById('dMinOptions').style.display = 'none';
        document.getElementById('dDivOptions').style.display = 'none';

        // Display the correct program options
        if (programValue === 'Certification') {
            document.getElementById('certificationOptions').style.display = 'block';
        } else if (programValue === 'Bachelors') {
            document.getElementById('bachelorsOptions').style.display = 'block';
        } else if (programValue === 'Masters') {
            document.getElementById('mastersOptions').style.display = 'block';
        } else if (programValue === 'Doctorate') {
            document.getElementById('doctorsOptions').style.display = 'block';
        }
    });

    // Add change listeners for Bachelor's, Master's, and Doctorate dropdowns to show specializations
    document.getElementById('bachelorSelect').addEventListener('change', function() {
        document.getElementById('bThOptions').style.display = 'none';
        document.getElementById('bMinOptions').style.display = 'none';
        document.getElementById('bDivOptions').style.display = 'none';

        if (this.value === 'BTh') {
            document.getElementById('bThOptions').style.display = 'block';
        } else if (this.value === 'BMin') {
            document.getElementById('bMinOptions').style.display = 'block';
        } else if (this.value === 'BDiv') {
            document.getElementById('bDivOptions').style.display = 'block';
        }
    });

    document.getElementById('masterSelect').addEventListener('change', function() {
        document.getElementById('mThOptions').style.display = 'none';
        document.getElementById('mMinOptions').style.display = 'none';
        document.getElementById('mDivOptions').style.display = 'none';

        if (this.value === 'MTh') {
            document.getElementById('mThOptions').style.display = 'block';
        } else if (this.value === 'MMin') {
            document.getElementById('mMinOptions').style.display = 'block';
        } else if (this.value === 'MDiv') {
            document.getElementById('mDivOptions').style.display = 'block';
        }
    });

    document.getElementById('doctorSelect').addEventListener('change', function() {
        document.getElementById('dThOptions').style.display = 'none';
        document.getElementById('dMinOptions').style.display = 'none';
        document.getElementById('dDivOptions').style.display = 'none';

        if (this.value === 'DTh') {
            document.getElementById('dThOptions').style.display = 'block';
        } else if (this.value === 'DMin') {
            document.getElementById('dMinOptions').style.display = 'block';
        } else if (this.value === 'DDiv') {
            document.getElementById('dDivOptions').style.display = 'block';
        }
    });
</script>



    

    <div class="row">
    <h4 style="margin-left: 10px;">Please upload the following documents: (Your Certificates, Degrees / Diplomas, One passport-sized photo)
        Ensure each file is in PDF or JPEG format and clearly legible.
    </h4>
    <div class="col-md-5">
        <div class="file-upload" id="file-upload">
            <label for="passport-input"> Upload Passport here
                <div style="color: #d8913f;">Drag & Drop Files Here</div>
                <div>or</div>
                <div style="color: #d8913f;">Browse Files</div>
            </label>
            <input id="passport-input" type="file" name="passport" accept=".jpg" required />
            <div class="file-name" id="passport-name">No file selected</div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="file-upload file-upload-many" id="file-upload-many">
            <label for="qualifications-input">Upload your Certificates, Diplomas, and Degree here
                <div style="color: #d8913f;">Drag & Drop Files Here</div>
                <div>or</div>
                <div style="color: #d8913f;">Browse Files</div>
            </label>
            <input id="qualifications-input" type="file" name="qualifications[]" accept=".jpg,.pdf" multiple required />
            <div class="file-names" id="qualifications-names">0 of 10 files selected</div>
        </div>
    </div>

    <script>
document.getElementById('qualifications-input').addEventListener('change', function() {
    const fileInput = this;
    const fileNamesContainer = document.getElementById('qualifications-names');
    const maxFiles = 10;

    const files = Array.from(fileInput.files);
    const fileCount = files.length;
    
    // Update display of selected files
    if (fileCount > maxFiles) {
        fileNamesContainer.textContent = `Please select a maximum of ${maxFiles} files.`;
        fileInput.value = ""; // Reset the input if the limit is exceeded
    } else {
        fileNamesContainer.textContent = `${fileCount} of ${maxFiles} files selected`;
        
        // Optionally display each selected file name
        const fileNames = files.map(file => file.name).join(', ');
        console.log('Selected files:', fileNames); // Log for debugging
    }
});
</script>

</div>

<div class="form-group">
    <textarea name="text" class="form-control" placeholder="Please share your reasons for enrolling in this degree program. Kindly limit your response to 150 words or fewer." cols="50" rows="4" required></textarea>
</div>
<button type="submit" name="submit" class="btn btn-contact-info btn-block">Apply Now</button>

<script>
    // Update file name display for passport
    document.getElementById('passport-input').addEventListener('change', function() {
        var fileName = this.files.length > 0 ? this.files[0].name : 'No file selected';
        document.getElementById('passport-name').textContent = fileName;
    });

    // Update file names display for qualifications
    document.getElementById('qualifications-input').addEventListener('change', function() {
        var fileNames = Array.from(this.files).map(file => file.name).join(', ');
        document.getElementById('qualifications-names').textContent = fileNames.length > 0 ? fileNames : '0 of 10 files selected';
    });
</script>
</form>
</div>

                    
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
                                            <a href="updates/relevant/christian-administrator"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Administrator</a><br>
                                            <a href="updates/relevant/christian-caregiver"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Caregiver</a><br>
                                            <a href="updates/relevant/christian-counselor"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Counselor</a><br>
                                            <a href="updates/relevant/christian-life-coach"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Life Coach</a><br>
                                            <a href="updates/relevant/christian-mediator"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Mediator </a><br>
                                            <a href="updates/relevant/christian-philosopher-analyst"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Philosopher/Analyst</a><br>
                                            <a href="updates/relevant/corporate-chaplaincy"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Corporate Chaplaincy</a><br>
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
                                              <a href="/updates/relevant/licensed-christian-administrator"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Christian Administrator</a><br>
                                            <a href="/updates/relevant/licensed-christian-caregiver"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Christian Caregiver</a><br>
                                            <a href="/updates/relevant/licensed-christian-counselor"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Christian Counselor</a><br>
                                            <a href="/updates/relevant/licensed-christian-life-coach"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Christian Life Coach</a><br>
                                            <a href="/updates/relevant/licensed-christian-mediator"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Christian Mediator </a><br>
                                            <a href="/updates/relevant/licensed-christian-philosopher-analyst"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Christian Philosopher/Analyst</a><br>
                                            <a href="/updates/relevant/licensed-christian-chaplain"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Corporate Chaplain</a><br>
                                   
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
                                            <a href="updates/relevant/bachelor-of-theology-b-th-in-biblical-studies"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Th. Biblical Studies</a><br>
                                            <a href="updates/relevant/bachelor-of-theology-b-th-in-christian-apologetics"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Th. Christian Apologetics</a><br>
                                            <a href="updates/relevant/bachelor-of-theology-b-th-in-christian-counseling/"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Th. Christian Counseling</a><br>
                                            <a href="updates/relevant/bachelor-of-theology-b-th-in-christian-philosophy"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Th. Christian Philosophy</a><br>
                                            <a href="updates/relevant/bachelor-of-theology-b-th-in-ecumenical-theology"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Th. Ecumenical Theology
                                            </a><br>
                                            <a href="updates/relevant/bachelor-of-theology-b-th-in-systematic-theology"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Th. Systematic Theology
                                            </a>
                                        </div>

                                        <hr>
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Bachelor of Ministry (B.Min.) Programs</b> <br>
                                            <a href="updates/relevant/bachelor-of-ministry-b-min-in-christian-leadership"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  B.Min. Christian Leadership</a><br>
                                            <a href="updates/relevant/bachelor-of-ministry-b-min-in-christian-leadership"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  B.Min. Church Administration</a><br>
                                            <a href="updates/relevant/bachelor-of-ministry-b-min-in-educational-management"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Min. Educational Management </a><br>
                                            <a href="updates/relevant/bachelor-of-ministry-b-min-in-evangelism-and-missions"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Min. Evangelism and Missions</a><br>
                                            <a href="updates/relevant/bachelor-of-ministry-b-min-in-music-and-worship"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Min. Music and Worship</a><br>
                                            <a href="updates/relevant/bachelor-of-ministry-b-min-in-pastoring-and-discipleship"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Min. Pastoring and Discipleship </a><br>
                                            <a href="updates/relevant/bachelor-of-ministry-b-min-in-youth-ministry"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Min. Youth Ministry </a><br>
                                        </div>
                                        <hr>
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Bachelor of Divinity (B.Div.) Programs</b> <br>
                                            <a href="updates/relevant/bachelor-of-divinity-b-div-in-church-history"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Div. Church History </a><br>
                                            <a href="updates/relevant/bachelor-of-divinity-b-div-in-community-development/"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Div. Community Development</a><br>
                                            <a href="updates/relevant/bachelor-of-divinity-b-div-in-corporate-chaplaincy"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Div. Corporate Chaplaincy </a><br>
                                            <a href="updates/relevant/bachelor-of-divinity-b-div-in-human-resource-management"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>
                                                B.Div. Human Resource Management </a><br>
                                            <a href="updates/relevant/bachelor-of-divinity-b-div-in-religious-studies"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Div. Religious Studies </a><br>
                                            <a href="updates/relevant/bachelor-of-divinity-b-div-in-restorative-justice"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Div. Restorative Justice</a><br>
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
                                            <a href="updates/relevant/master-of-theology-m-th-in-christian-apologetics"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Th. Christian Apologetics</a><br>
                                            <a href="updates/relevant/master-of-theology-m-th-in-christian-counseling"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Th. Christian Counseling</a><br>
                                            <a href="updates/relevant/master-of-theology-m-th-in-historical-theology"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Th. Historical Theology</a><br>
                                            <a href="updates/relevant/master-of-theology-m-th-in-philosophy-and-theological-studies"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Th. Philosophy and Theological Studies</a><br>
                                            </a>
                                        </div>

                                        <hr>
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Master of Ministry (M.Min.) Programs </b> <br>
                                            <a href="updates/relevant/master-of-ministry-m-min-in-educational-management"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  M.Min. Educational Management </a><br>
                                            <a href="updates/relevant/master-of-ministry-m-min-in-pastoral-ministry"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Min. Pastoral Ministry </a><br>
                                            <a href="updates/relevant/master-of-ministry-m-min-in-strategic-leadership"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Min. Strategic Leadership</a><br>
                                            <a href="updates/relevant/master-of-ministry-m-min-in-worship-and-reative-arts"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Min. Worship and Creative Arts </a><br>
                                            <a href="updates/relevant/master-of-ministry-m-min-in-youth-and-family-ministry"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Min. Youth and Family Ministry </a><br>
                                        </div>
                                        <hr>
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Master of Divinity (M.Div.) Programs </b> <br>
                                            <a href="updates/relevant/master-of-divinity-m-div-in-community-development-and-missions"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Div. Community Development and Missions </a><br>
                                            <a href="updates/relevant/master-of-divinity-m-div-in-comparative-religion"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Div. Comparative Religion </a><br>
                                            <a href="updates/relevant/master-of-divinity-m-div-in-corporate-management"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Div. Corporate Management</a><br>
                                            <a href="updates/relevant/master-of-divinity-m-div-in-new-testament-studies"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Div. New Testament Studies </a><br>
                                            <a href="updates/relevant/master-of-divinity-m-div-in-old-testament-studies"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Div. Old Testament Studies </a><br>
                                            <a href="updates/relevant/master-of-divinity-m-div-in-restorative-justice"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Div. Restorative Justice</a><br>
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
                                            <a href="updates/relevant/doctor-of-theology-th-d-in-interfaith-studies"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> Th.D. Interfaith Studies </a><br>
                                            <a href="updates/relevant/doctor-of-theology-th-d-in-patristics-and-early-Christianity"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> Th.D. Patristics and Early Christianity </a><br>
                                            <a href="updates/relevant/doctor-of-theology-th-d-in-practical-theology-and-counseling"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> Th.D. Practical Theology and Counseling </a><br>
                                           
                                            </a>
                                        </div>

                                        <hr>
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Doctor of Ministry (D.Min.) Programs </b> <br>
                                            <a href="updates/relevant/doctor-of-ministry-d-min-in-educational-management"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> D.Min. Educational Management </a><br>
                                            <a href="updates/relevant/doctor-of-ministry-d-min-in-practical-ministry-and-the-arts"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> D.Min. Practical Ministry and the Arts </a><br>
                                        </div>
                                        <hr>
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Doctor of Divinity (D.Div.) Programs </b> <br>
                                            <a href="updates/relevant/doctor-of-divinity-d-div-in-biblical-exegesis"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> D.Div. Biblical Exegesis </a><br>
                                            <a href="updates/relevant/doctor-of-divinity-d-div-in-christian-ethics-and-philosophy"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> D.Div. Christian Ethics and Philosophy </a><br>
                                            <a href="updates/relevant/doctor-of-divinity-d-div-in-justice-and-social-advocacy"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> D.Div. Justice and Social Advocacy </a><br>
                                            <a href="updates/relevant/doctor-of-divinity-d-div-in-leadership-and-organizational-development"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> D.Div. Leadership and Organizational Development </a><br>
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