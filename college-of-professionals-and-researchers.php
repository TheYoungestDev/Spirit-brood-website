<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/";
    include($IPATH."header.html"); ?>
    
    
    <style>
        /* Base Styles */
        body {
            /*line-height: 1.6;*/
            margin: 0;
            padding: 0;
        }

        /* Header Styles */
        .header {
            position: relative;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 5%;
            overflow: hidden; /* Ensure content inside stays within bounds */
        }
        
        .background-blur {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/images/bg/college-hero.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            filter: blur(20px); /* Apply blur only to the background */
            z-index: 1; /* Background stays behind the text */
        }
        
        .header h1 {
            position: relative;
            background-color: #E4A839;
            color: white;
            padding: 2.5rem 2rem;
            font-size: 3.2rem;
            margin: 0;
            top: 36%;
            bottom: 0 !important;
            text-transform: uppercase;
            z-index: 2; /* Ensure h1 stays on top of the background */
        }
        
        /* Media query for smaller screens */
        @media (max-width: 768px) {
            .background-blur  {
                filter: blur(80px);
            }
            .header h1 {
                top: 27%;
                padding: 16px !important;
                font-size: 22px !important;
                text-align: center;
            }
        }

        .main {
            padding: 2rem;
        }

        .program {
            border: 1px solid #ddd;
            padding: 1.5rem;
            margin-bottom: 2rem;
            border-radius: 8px;
            background-color: #f9f9f9;
            text-align: left !important;
        }

        .program h2 {
            font-size: 2.5rem;
            color: #333;
            text-align: left !important;
        }

        .credit-hours {
            font-weight: 300;
            margin-bottom: 0.5rem;
             color: #333;
             font-size: 2rem;
             text-align: left !important;
        }

        .overview {
            display: none;
            margin-top: 1rem;
            color: #000;
            text-align: left !important;
        }

        .overview.expanded {
            display: block;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            text-decoration: none;
            color: white;
            border-radius: 4px;
            font-size: 1.7rem;
            transition: background-color 0.3s ease;
        }

        .learn-more {
            background-color: transparent; border-radius: 5px; color: #081434;  border: 2px solid #081434; padding: 10px 24px;
        }

        .learn-more:hover {
            border: 2px solid #081434; color: #081434;
        }

        .apply-now {
            background-color: #081434;
        }

        .apply-now:hover {
            background-color: #081434; color: #fff;
        }
 /* Tab Navigation */
        .tabs {
            display: flex;
            justify-content: center;
            margin: 2rem 0;
        }

        .tab {
            padding: 1rem 2rem;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
            border-bottom: 3px solid transparent;
        }

        .tab.active {
            border-bottom: 3px solid #E4A839;
            color: #E4A839;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }
        .ccpr-text {
            margin-top: 20px; margin-bottom: -25px; padding: 10px; text-align: left !important;
        }
        .ccpr-text p {
            color: #000; text-align: left !important;
        }
      
    </style>
    
    <!--Main Slider-->
         <section>
            <div class="featured-hero" style="background-image: url('/images/c-imgs/c55.png');  ">
              <div class="img-content">
                <h3> College of Christian Professionals and Researchers </h3>
                <span>Integrate faith and expertise to achieve meaningful impact. </span>
              </div>
            </div>
        </section>
   
   <div class="container ccpr-text">
        <p>The College of Christian professionals and researchers (CCPR) is the flagship college of
        Spirit Brood Theological Seminary. As a professional college, CCPR offers professional
        certificate courses. It also offers membership and fellowship status to students who
        obtain licenses in any of the following fields.</p>
   </div>
    <div class="container">
            <!-- Categorizing content within section -->
    <!-- Tabs for Categories -->
    <div class="tabs">
        <!--<div class="tab active" data-target="professionals">CCPR PROFESSIONALS AND RESEARCHERS</div>-->
    </div>
    
    <!--professionals researchers blocks start here-->

    <!-- Tab Content for Bachelor -->
    <div id="professionals" class="tab-content active">
        <div class="main">
            <!-- Bachelor Program Section Start -->
            <section class="program">
                <h2>Christian Administration </h2>
                <p class="credit-hours">Credit Hours: 12</p>
                <p class="overview">
                  This course seeks to equip seasoned Administrators with the knowledge and skills
                to carry out their professional responsibilities from a Christian worldview.
                Participants will learn to exercise their influence in a manner that fosters
                Christian principles, exemplifies godly values, and upholds ethical standards
                without compromising the integrity of their profession.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/christian-administration" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
             <section class="program">
                 <h2>Christian Caregiving</h2>
                <p class="credit-hours">Credit Hours: 12</p>
                <p class="overview">
                 This course seeks to train healthcare professionals to view their profession as a
                ministry, recognizing the unique opportunities they have to impact lives
                spiritually and physically. Participants will learn how to leverage their access to
                vulnerable patients and the trust bestowed upon them to advance the Kingdom
                of God. The course will also emphasize providing godly care while upholding the
                highest professional standards and ethical practices
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/christian-caregiving" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
            <section class="program">
                <h2>Corporate Chaplaincy </h2>
                <p class="credit-hours">Credit Hours: 12</p>
                <p class="overview">
                 This course aims to prepare participants to function as Christian ministers in
                    various settings where a chaplain is needed. It offers comprehensive training to
                    serve as licensed chaplains, offering spiritual care, support, and counsel to
                    diverse populations. The course will also equip existing professionals to establish
                    chaplaincy services in their workplaces, fostering a Christ-centered approach to
                    care and ministry.
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/corporate-chaplaincy" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
             <section class="program">
                 <h2>Christian Counseling </h2>
                <p class="credit-hours">Credit Hours: 12</p>
                <p class="overview">
                 This course is designed to equip participants with the skills and knowledge
                    necessary to provide biblically sound and spiritually sensitive counseling. It offers
                    quality training on how to integrate psychological principles with Christian
                    theology, as well as how to offer compassionate guidance and support in various
                    settings. Emphasis will be placed on addressing emotional, mental, and spiritual
                    needs while upholding a Christian worldview.
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/christian-counseling" class="btn apply-now">Learn More</a>
                </div>
            </section>
            <section class="program">
                <h2>Christian Life Coaching </h2>
                <p class="credit-hours">Credit Hours: 12</p>
                <p class="overview">
                  This course is designed to equip participants to become effective life coaches
                    from a Christian perspective. The coursework covers the principles and practices
                    of life coaching while integrating biblical values and spiritual insights. It
                    emphasizes the distinction between life coaching and counseling, and focuses
                    solely on life coaching as a transformative ministry
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/christian-life-coaching" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
             <section class="program">
                 <h2>Christian Mediation </h2>
                <p class="credit-hours">Credit Hours: 12</p>
                <p class="overview">
                    This course aims to equip professionals with the knowledge and skills to serve as
                    mediators who can facilitate the resolution of disputes in accordance with
                    Christian principles and values, while respecting the law and legal jurisdiction.
                    This coursework covers the theological foundation of Christian mediation,
                    relevant legal frameworks, and practical insights on conducting mediation
                    processes from a biblical standpoint.
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/christian-mediation" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
            <section class="program">
                 <h2>Christian Philosophy </h2>
                <p class="credit-hours">Credit Hours: 12</p>
                <p class="overview">
                    This course aims to equip Christians with a deep understanding of the Christian
                    worldview and how it compares with other worldviews and philosophies.
                    Participants will learn how to practically live out and influence others to embrace
                    the Christian worldview. Further, they will learn how to analyze the core beliefs
                    of individuals, organizations, and societies for alignment with the Christian
                    worldview.
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/christian-philosophy" class="btn apply-now">Learn More</a>
                </div>
            </section>
            <!--add more content-->
            
        </div>
    </div>
<!--bachelor blocks ends here-->


        </div>
    </section>
    </div>


 <script>
        // Toggle between Bachelor, Masters, and Doctorate
        const tabs = document.querySelectorAll('.tab');
        const contents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs and contents
                tabs.forEach(t => t.classList.remove('active'));
                contents.forEach(content => content.classList.remove('active'));

                // Add active class to the clicked tab and corresponding content
                tab.classList.add('active');
                document.getElementById(tab.getAttribute('data-target')).classList.add('active');
            });
        });

        // Expand and collapse program overview when "Overview" is clicked
        document.querySelectorAll('.learn-more').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const overview = this.closest('.program').querySelector('.overview');
                overview.classList.toggle('expanded');
            });
        });
    </script>

        
 <?php 
    include($IPATH."footer.html"); ?>