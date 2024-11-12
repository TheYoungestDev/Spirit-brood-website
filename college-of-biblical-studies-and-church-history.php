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

      
    </style>
   


    <!--Main Slider-->
         <section>
            <div class="featured-hero" style="background-image: url('/images/c-imgs/c4.png');  ">
              <div class="img-content">
                <h3> College of Biblical Studies and Church History </h3>
                <span>Raising doyens of church history and scriptural knowledge</span>
              </div>
            </div>
        </section>
    
    <div class="container">
            <!-- Categorizing content within section -->
    <!-- Tabs for Categories -->
    <div class="tabs">'
        <div class="tab active" data-target="bachelor">Bachelor's</div>
        <div class="tab" data-target="masters">Master's</div>
        <div class="tab" data-target="doctorate">Doctorate</div>
    </div>
    
    <!--bachelor blocks start here-->

    <!-- Tab Content for Bachelor -->
    <div id="bachelor" class="tab-content active">
        <div class="main">
            <!-- Bachelor Program Section Start -->
            <section class="program">
                <h2>Bachelor of Theology (B.Th.) in Biblical Studies</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                  This program offers an in-depth study of the Bible, focusing on the interpretation
                    and application of biblical texts. Coursework includes Old and New Testament
                    studies, biblical languages, hermeneutics, and theology. It is designed to equip
                    students with a comprehensive understanding of Scripture and its relevance for
                    ministry.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-theology-b-th-in-biblical-studies" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
             <section class="program">
                 <h2>Bachelor of Divinity (B.Div.) in Church History</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                  This program explores the development of the Christian church from its
                    beginnings to the present day. It includes courses in early church history, the
                    Reformation, modern church movements, and historical theology. The program is
                    designed to equip students with an understanding of the historical context of
                    Christian beliefs and practices.
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-divinity-b-div-in-church-history" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
            <!--add more content-->
            
        </div>
    </div>
<!--bachelor blocks ends here-->


<!--masters blocks start here-->

    <!-- Tab Content for Masters -->
    <div id="masters" class="tab-content">
        <div class="main">
            <!-- Masters Program Section Start -->
            <section class="program">
                  <h2>Master of Theology (M.Th.) in Historical Theology</h2>
                <p class="credit-hours">Credit Hours: 48</p>
                <p class="overview">
                    This program examines the historical development of Christian doctrine and
                        theology from the early church to contemporary times. It includes studies in the
                        writings of key theologians, doctrinal controversies, and the impact of historical
                        events on theological development, with the aim to equip students for academic,
                        research, and ministerial roles.


                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/master-of-theology-m-th-in-historical-theology" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
            <section class="program">
                <h2>Master of Divinity (M.Div.) in New Testament Studies </h2>
                <p class="credit-hours">Credit Hours: 72</p>
                <p class="overview">
                  This program provides advanced study of the New Testament, focusing on its
                    history, literature, and theology. Coursework includes exegesis of New Testament
                    texts, biblical Greek, and the study of early Christian communities. It is designed
                    to prepare students for scholarly research and ministry that is deeply rooted in
                    New Testament teachings.
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/master-of-divinity-m-div-in-new-testament-studies" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
            <section class="program">
                <h2>Master of Divinity (M.Div.) in Old Testament Studies </h2>
                <p class="credit-hours">Credit Hours: 72</p>
                <p class="overview">
                 This program offers an in-depth exploration of the Old Testament, focusing on its
                    history, cultural contexts, and theology. It includes studies in Hebrew language,
                    Old Testament exegesis, and ancient Near Eastern history. The program is
                    designed to equip students to interpret and apply Old Testament scriptures in
                    contemporary ministry settings.
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/master-of-divinity-m-div-in-old-testament-studies" class="btn apply-now">Learn More</a>
                </div>
            </section>
 
            <!--more conttent here-->
        </div>
    </div>

<!--masters blocks ends here-->

<!--doctorate blocks start here-->

    <!-- Tab Content for Doctorate -->
    <div id="doctorate" class="tab-content">
        <div class="main">
            <!-- Doctorate Program Section Start -->
            <section class="program">
                  <h2>Doctor of Divinity (D.Div.) in Biblical Exegesis </h2>
                <p class="credit-hours">Credit Hours: 64</p>
                <p class="overview">
                  This program focuses on advanced biblical exegesis, with the aim to equip
                    students with skills to interpret and analyze biblical texts at the highest scholarly
                    level. It includes coursework in advanced hermeneutics, critical methods of
                    biblical interpretation, and the application of exegesis to contemporary
                    theological issues. The program is designed to prepare students for teaching,
                    writing, and leadership roles in academic and church settings

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/doctor-of-divinity-d-div-in-biblical-exegesis" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
                <section class="program">
                  <h2>Doctor of Theology (Th.D.) in Patristics and Early Christianity </h2>
                <p class="credit-hours">Credit Hours: 64</p>
                <p class="overview">
                  This advanced program explores the writings and theology of the early church
                fathers, along with the historical development of early Christian doctrine.
                Coursework covers patristic theology, early Christian literature, and the history of
                early Christianity, with the aim to prepare students for specialized academic
                research, teaching, and theological reflection on the roots of the Christian faith.
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/doctor-of-theology-th-d-in-patristics-and-early-christianity" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
        </div>
    </div>
 
<!--doctorate blocks ends here-->

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