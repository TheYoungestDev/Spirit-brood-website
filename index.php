<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/";
    include($IPATH."header.html"); ?>
     
     <style>
 
.animated-content {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
  color: #fff;
  padding: 20px;
  top: 2%;
  opacity: 0;
  transform: translateY(100%);
  animation: slideIn 2s ease forwards 1s; /* Delay the animation by 1 second */
  
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.card-btn {
  margin-top: 20px;
  padding: 10px 30px;
  background-color: #ff9800;
  letter-spacing: 1px;
  border: none;
  color: #fff;
  font-weight: 800;
  cursor: pointer;
  transition: background-color 0.3s ease;
  animation-name: btnslide;
   animation-duration: 1s;
  animation-iteration-count: infinite;
}

.card-btn:hover {
  background-color: #e68a00;
   
}

@keyframes slideIn {
  0% {
    opacity: 0;
    transform: translateY(100%);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
@keyframes btnslide {
  0% {
    padding: 10px 30px;
    border-radius: 15px;
  }
  100% {
   padding: 10px 50px;
   border-radius: 10px;
   background-color: #fff;
   color: #e68a00;
  }
}

/* Hero slider container */
.hero-sliding {
    position: relative;
    width: 100%;
    height: 90vh;
    overflow: hidden;
    margin-top: 5%;
  }
  
  /* Individual slides */
  .slide {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
  }
  
  .slide.active {
    opacity: 1;
  }
  
  /* Slide images */
  .slide-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  /* hero-overlay text */
  .hero-header-overlay {
    position: absolute;
    top: 50%;
    left: 65%;
    transform: translate(-50%, -50%);
    color: white;
  }
  
  .hero-header-overlay h2 {
    font-size: 24px;
    padding-bottom: 25px;
    text-align: left;
    font-family: "Hind Vadodara", sans-serif;
    font-style: normal;
    font-weight: 500;
    color: rgb(247, 192, 45);
    line-height: 24px;
  }
  
  .hero-header-overlay h2 span {
    font-size: 90px;
    text-align: left;
    font-family: "Hind Vadodara", sans-serif;
font-style: normal;
font-weight: 700;
color: #fff;
line-height: 90px;
  }

  .hero-header-overlay p {
    font-size: 20px;
    margin-bottom: 10px;
    text-align: left;
    font-family: "Hind Vadodara", sans-serif;
    font-style: normal;
    font-weight: 500;
    color: #fff;
    line-height: 30px;
  }
   @media (max-width: 1024px) {
    .hero-sliding {
        height: 115vh;
        margin-top: 0 !important;
      }
   
  }
  @media (max-width: 768px) {
    .hero-sliding {
        height: 70vh;
        margin-top: 0 !important;
      }
    .hero-header-overlay {
        top: 60%;
        left: 38%;
      }
      .hero-header-overlay h2 {
        font-size: 17px;
        padding-bottom: 0px !important;
      }
      .hero-header-overlay h2 span {
        font-size: 42px;
      }
      .hero-header-overlay p {
        font-size: 12px;
        padding-bottom: 0 !important;
        line-height: 19px;
        text-wrap: pretty;
        display: inline-block;
        width: 100%;
      }
      .hero-header-overlay p br {
        display: none;
      }
  }
  /* CTA buttons */
  .cta-buttons {
    display: flex;
    gap: 10px;
  }
  
  .hero-btn {
    padding: 15px 34px;
    border: none;
    cursor: pointer;
    font-size: 16px;
    border-radius: 5px;
    text-align: center;
    font-family: "Hind Vadodara", sans-serif;
    font-style: normal;
    font-weight: 500;
    line-height: 16px;
    text-decoration: none;
  }
  @media (max-width: 768px) {
    .hero-btn {
        padding: 8px 14px;
        font-size: 12px;
      }
  }
  .hero-btn-primary {
    background-color: rgb(247, 192, 45);
    color: rgb(37, 37, 37);
  }
  
  .hero-btn-secondary {
    background-color: transparent;
    border: 2px solid white;
    color: #fff;
    font-weight: 500;
  }

  /* Navigation buttons */
.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.1);
    color: white;
    font-size: 24px;
    padding: 20px;
    border-radius: 50%;
    cursor: pointer;
  }
  
  .prev {
    left: 10px;
  }
  
  .next {
    right: 10px;
  }
  
  .prev:hover, .next:hover {
    background-color: rgba(0, 0, 0, 0.2);
  }
  /* Adjust buttons for mobile phones (small screens) */
@media (max-width: 480px) {
    .prev, .next {
      font-size: 16px;
      padding: 10px;
    }
  
    .prev {
      left: 10px;
    }
  
    .next {
      right: 10px;
    }
  }
     </style>
       
 <!--Main Slider-->
       <div class="hero-sliding">
        <!-- Slide 1 -->
        <div class="slide">
          <img src="images/main-slider/bg1.png" alt="Graduation Image" class="slide-image">
          <div class="hero-header-overlay">
            <h2>Fan Your Potentials to <br><span>FLAME</span></h2>
            <p style="font-size:15px">Our training programs and credentials are designed to fan your potentials to flame and be your springboard to an enhanced career and ministry.</p>
            <div class="cta-buttons">
              <a href="https://spiritbrood.org/apply.php" class="hero-btn hero-btn-primary">Enrol Now!</a>
              <a href="https://spiritbrood.org/colleges.php" class="hero-btn hero-btn-secondary">Learn More</a>
            </div>
          </div>
        </div>
      
        <!-- Slide 2 -->
        <!--<div class="slide">-->
        <!--  <img src="images/main-slider/bg1.png" alt="Career Growth" class="slide-image">-->
        <!--  <div class="hero-header-overlay">-->
        <!--    <h2>Accelerate Your Career <br><span>Journey</span></h2>-->
        <!--    <p>Join our professional courses and take a step towards a brighter future with industry-recognized certifications.</p>-->
        <!--    <div class="cta-buttons">-->
        <!--      <a href="#" class="hero-btn hero-btn-primary">Start Now!</a>-->
        <!--      <a href="#" class="hero-btn hero-btn-secondary">Discover More</a>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
      
        <!-- Additional slides can be added similarly -->

         <!-- Navigation buttons -->
        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>
      </div>
        <!--Main Slider  end-->
        <!-- why choose us -->
        <div class="whychooseus-2">
            <div class="container">
                <div class="mf-services-3 style-1 ">
                    <div class="services-list clearfix">
                        <div class="vc_service-wrapper "><span class="mf-icon"><i class='bx bxs-color bx-why'></i></span>
                            <h3><a href="#" title="100% Free Tuition" style="color: #001029;">100% Free Tuition</a></h3>
                            <div class="desc">All our programs are Spirit Brood Theological Seminary are
                                Tuition-free, and our lectures are released as open-resource materials..</div>
                        </div>
                        <div class="vc_service-wrapper featured-box"><span class="mf-icon"><i class='bx bx-timer bx-why'></i></span>
                            <h3><a href="#" title="Self-paced Programs" style="color: #001029;">Self-paced Programs </a></h3>
                            <div class="desc">You can enroll anytime of the year and learn at your own
                                pace for a personalized and effective educational experience.</div>
                        </div>
                        <div class="vc_service-wrapper"><span class="mf-icon"><i class='bx bx-library bx-why'></i></span>
                            <h3><a href="#" title="High-quality Learning " style="color: #001029;">High-quality Learning  </a></h3>
                            <div class="desc"> Our programs will help deepen your understanding of
                                God’s word, enhance your leadership skills, and prepare you for effective
                                ministry.</div>
                        </div>
                        
                    </div>
                </div>
                <div class="whypara">
                    <!--We Are Excited to Work With You as You Embark on a Fulfilling Academic Adventure</a>-->
                    <p style="font-size: 22px;">As a student of Spirit Brood Theological Seminary, you will greatly benefit from our
                    commitment to quality education at an affordable cost and flexible learning options.
                    </p>
                    
                </div>
            </div>
        </div>
        <!-- why choose us end -->

          <!-- programs -->
         <div class="mf-portfolio  style-3 backbg" id="academic-programs">
            <div class="container-fluid">
        <section id="gallery">
            <div class="container-fluid gallery">
              
                <div class="card">
                    <img src="images/c/c.png" alt="Undergraduate Program">
                    <h3>Certificate Programs</h3>
                    <div class="overlay">
                        <p>Integrate faith and expertise to achieve meaningful impact in Christian Organizations.
                        </p>
                        <a href="certificate-programs.php"><button>Read More <i class='bx bx-right-arrow-alt'></i></button></a>
                    </div>
                </div>
                <div class="card">
                    <img src="images/c/l.png" alt="License Program">
                    <h3>License Programs</h3>
                    <div class="overlay">
                        <p>Lay ministry license and academic credentials to demonstrate proficiency in a field of Christian ministry.</p>
                        <a href="license-programs.php"><button>Read more <i class='bx bx-right-arrow-alt'></i></button></a>
                    </div>
                </div>
                <div class="card">
                    <img src="images/c/u.png" alt="Undergraduate Program">
                    <h3>Bachelor's Programs</h3>
                    <div class="overlay">
                        <p>Foundational training for ministry, equipping you for success in future studies and career.
                        </p>
                        <a href="bachelor-degree-programs.php"><button>Read more <i class='bx bx-right-arrow-alt'></i></button></a>
                    </div>
                </div>
                <div class="card">
                    <img src="images/c/m.png" alt="Masters Program">
                    <h3>Masters Programs</h3>
                    <div class="overlay">
                        <p>Comprehensive training and research work to prepare you for advanced career/ministry roles.</p>
                        <a href="masters-degree-programs.php"><button>Read more <i class='bx bx-right-arrow-alt'></i></button></a>
                    </div>
                </div>
                <div class="card">
                    <img src="images/c/d.png" alt="Doctorate program">
                    <h3 style="font-weight: 900;">Doctorate Programs</h3>
                    <div class="overlay">
                        <p>Gain advanced scholarship and practical competence for core leadership roles.</p>
                       <a href="doctorate-degree-programs.php"> <button>Read more <i class='bx bx-right-arrow-alt'></i></button></a>
                    </div>
                </div>
                  <div class="card">
                    <img src="images/c/7.png" alt="College Programs">
                       <div class="animated-content">
                          <h2 style="color: #fff; margin-top: -10px;">Advance Your Career or Ministry Today</h2>
                         <a href="https://spiritbrood.org/apply.php"><button class="card-btn">Enrol Now!</button></a>
                        </div>
                      </div>
                    <!--<h3>College Programs</h3>-->
                    <!--<div class="hero-overlay">-->
                    <!--    <p>Explore theological studies and apply Christian principles to leadership and management.-->
                    <!--    </p>-->
                    <!--    <button>Read More <i class='bx bx-right-arrow-alt'></i></button>-->
                    <!--</div>-->
                </div>
            </div>
        </section>

       </div>
        </div>
        <!-- programs end -->


    <div class="container-fluid degree-content">
        <div class="content">
            <h1>Fast-Track Dual Degree Program</h1>
            <p>Our Fast-Track Dual Degree Programs at Spirit Brood Theological Seminary allow you to complete two degree programs in less time. You can earn either your Bachelors and Masters degrees or your Masters and Doctorate degrees through our customized fast-track programs.</p>
           <p style="text-align: center;"><a href="https://spiritbrood.org/apply.php"> <button type="button" class="btn btn-out btn-outline-dark">Enrol Now</button</a></p>
        </div>
        <div class="image img-gra">
            <img src="images/team/1 1.png" alt="Graduate">
        </div>
    </div>
    <div class="container-fluid degree-content degree-content-faq">
        <div class="image">
            <img src="images/team/image 117.png" class="why-img" alt="faq-image">
        </div>
        <div class="content">
            <h1>Why Spirit Brood Theological Seminary?</h1>
            <p>Affordable Tuition — all of our courses are 100% tuition-free.</p><br />
            <p>Our degree programs are 100% self-paced and online. You are allowed to work at your own pace from anywhere in the world.</p><br />
            <p>We use proven educational concepts that deliver high-quality learning in simplified and easy-to-understand formats.</p><br />
            <p style="text-align: center;"><a href="https://spiritbrood.org/apply.php"><button type="button" class="btn btn-out btn-outline-dark">Enrol Now</button></a></p>
        </div>
       
    </div>
    
    <script>
  let slideIndex = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(index) {
  if (index >= slides.length) {
    slideIndex = 0; // Loop back to the first slide
  } else if (index < 0) {
    slideIndex = slides.length - 1; // Loop back to the last slide
  } else {
    slideIndex = index;
  }

  // Hide all slides
  slides.forEach((slide) => {
    slide.style.opacity = '0';
    slide.classList.remove('active');
  });

  // Show the current slide
  slides[slideIndex].style.opacity = '1';
  slides[slideIndex].classList.add('active');
}

function changeSlide(direction) {
  showSlide(slideIndex + direction);
}

// Auto-slide every 5 seconds
setInterval(() => {
  changeSlide(1);
}, 5000);

// Initially show the first slide
showSlide(slideIndex);


</script>
    
    <?php 
    include($IPATH."footer.html"); ?>