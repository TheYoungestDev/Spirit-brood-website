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
    
    <!--<section class="header">-->
    <!--    <div class="background-blur"></div>-->
    <!--    <h1>Programs Offered at College of Management and Leadership</h1>-->
    <!--</section>-->
    
    <!--Main Slider-->
         <section>
            <div class="featured-hero" style="background-image: url('/images/c-imgs/c33.png');  ">
              <div class="img-content">
                <h3> College of Management and Leadership </h3>
                <span>Shaping leaders for the church and community. </span> 

              </div>
            </div>
        </section>
    
    <div class="container">
            <!-- Categorizing content within section -->
    <!-- Tabs for Categories -->
    <div class="tabs">
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
                <h2>Bachelor of Ministry (B.Min.) in Christian Leadership</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                    This program prepares students for leadership roles in Christian ministry by
                    focusing on biblical leadership principles, team dynamics, and spiritual formation.
                    It includes coursework in pastoral leadership, conflict resolution, and
                    organizational management. The aim is to equip students to lead effectively
                    within church and ministry settings.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-ministry-b-min-in-christian-leadership" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
             <section class="program">
                 <h2>Bachelor of Ministry (B.Min.) in Church Administration</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                    This program equips students with the skills needed to manage the
                    Administrative aspects of a church or ministry organization. Coursework covers
                    topics such as financial management, strategic planning, human resources, and
                    church operations, with the aim to prepare students to handle the day-to-day
                    responsibilities of church Administration.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-ministry-b-min-in-church-administration" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
            <section class="program">
                <h2>Bachelor of Ministry (B.Min.) in Educational Management</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                    This program focuses on managing educational ministries within the church,
                    including Christian schools and discipleship programs. Coursework includes
                    educational leadership, curriculum development, and organizational
                    management. It is designed to prepare students to lead effectively in educational
                    settings.
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-ministry-b-min-in-educational-management" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
              <section class="program">
                <h2>Bachelor of Divinity (B.Div.) in Human Resource Management</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                  This program integrates theological education with human resource management
                    principles, with the aim to prepare students to manage personnel in church and
                    ministry contexts. Coursework includes biblical ethics, conflict resolution,
                    leadership development, and HR management. It is designed to equip students
                    with skills to lead diverse teams.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-divinity-b-div-in-human-resource-management" class="btn apply-now">Learn More</a>
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
                  <h2>Master of Divinity (M.Div.) in Corporate Management</h2>
                <p class="credit-hours">Credit Hours: 72</p>
                <p class="overview">
                  This program combines theological education with advanced corporate
                    management skills. It is designed to prepare leaders for strategic roles in faithbased and secular (particularly, non-profit) organizations. Coursework includes
                    corporate governance, strategic leadership, financial management, and
                    organizational behavior, with the aim to equip students to lead effectively in
                    various corporate settings.
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/master-of-divinity-m-div-in-corporate-management" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
            <section class="program">
                <h2>Master of Ministry (M.Min.) in Educational Management </h2>
                <p class="credit-hours">Credit Hours: 48</p>
                <p class="overview">
                  This program focuses on advanced educational leadership within Christian
                    contexts, with a focus on preparing students to manage and lead educational
                    institutions and ministry training programs. Coursework covers educational
                    theory, curriculum design, strategic planning, and leadership skills specific to
                    educational settings.
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/master-of-ministry-m-min-in-educational-management" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
            <section class="program">
                <h2>Master of Ministry (M.Min.) in Strategic Leadership </h2>
                <p class="credit-hours">Credit Hours: 48</p>
                <p class="overview">
                    This program prepares students for leadership roles in ministry and beyond, with
                    a focus on strategic planning, organizational development, and leadership theory.
                    Coursework includes advanced leadership principles, team dynamics, change
                    management, and vision casting. It is designed to equip students to lead
                    effectively and manage the organizational complexities in diverse environments.
                                    </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/master-of-ministry-m-min-in-strategic-leadership" class="btn apply-now">Learn More</a>
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
                  <h2>Doctor of Ministry (D.Min.) in Educational Management</h2>
                <p class="credit-hours">Credit Hours: 64</p>
                <p class="overview">
                   This program offers advanced study in the management and leadership of
                    educational ministries. It is designed to prepare leaders for executive roles in
                    Christian schools, seminaries, and training institutions. Coursework includes
                    strategic educational leadership, policy development, and organizational
                    management, with a focus on innovation and best practices in education.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/doctor-of-ministry-d-min-in-educational-management" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
                <section class="program">
                  <h2>Doctor of Divinity (D.Div.) in Leadership and Organizational Development </h2>
                <p class="credit-hours">Credit Hours: 64</p>
                <p class="overview">
                   This advanced program focuses on leadership theory, organizational
                    development, and change management within faith-based and secular contexts.
                    It prepares students for high-level leadership roles, with coursework covering
                    transformational leadership, organizational behavior, strategic change, and
                    leadership ethics.


                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/doctor-of-divinity-d-div-in-leadership-and-organizational-development" class="btn apply-now">Learn More</a>
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