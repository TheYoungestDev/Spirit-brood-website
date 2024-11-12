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
            <div class="featured-hero" style="background-image: url('/images/c-imgs/c22.png');  ">
              <div class="img-content">
                <h3> College of Theology and Philosophy </h3>
                <span>Training thought leaders with biblical truths. </span> 

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
                <h2>Bachelor of Theology (B.Th.) in Christian Apologetics</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                    This program equips students to defend the Christian faith through rigorous
                    study of apologetics, philosophy, and historical theology. Coursework includes
                    biblical hermeneutics, philosophy of religion, and contemporary challenges to
                    Christian belief. It is designed to prepare students to articulate and defend their
                    faith in various contexts.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-theology-b-th-in-christian-apologetics" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
             <section class="program">
                 <h2>Bachelor of Theology (B.Th.) in Christian Philosophy</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                    This program explores the intersection of Christian theology and philosophy,
                        examining key philosophical questions through a Christian lens. It includes
                        courses in metaphysics, ethics, logic, and biblical studies. The focus of the
                        program is to provide students with a deep understanding of philosophical
                        thought within the Christian tradition.
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-theology-b-th-in-christian-philosophy" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
            <section class="program">
                <h2>Bachelor of Theology (B.Th.) in Ecumenical Theology</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                This program focuses on Christian unity and interdenominational dialogue by
                exploring the theological principles of ecumenism. It includes coursework in
                church history, systematic theology, and liturgical studies, with the aim to
                prepare students to engage in collaborative ministry across denominational lines.
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-theology-b-th-in-ecumenical-theology" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
              <section class="program">
                <h2>Bachelor of Divinity (B.Div.) in Religious Studies</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                   This program provides a comprehensive education in religious studies by
                    examining the major world religions, their texts, beliefs, and cultural impact. It
                    includes coursework in biblical studies, comparative religion, and interfaith
                    dialogue, with the aim to equip students to understand and engage with diverse
                    religious traditions.


                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-divinity-b-div-in-religious-studies" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
              <section class="program">
                <h2>Bachelor of Theology (B.Th.) in Systematic Theology</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                   This program offers an in-depth study of Christian doctrines and explores the
                    systematic development of theological beliefs. Coursework covers topics such as
                    the doctrine of God, Christology, and pneumatology, among others. The overall
                    focus is to equip students to understand and articulate the core tenets of the
                    Christian faith.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-theology-b-th-in-systematic-theology" class="btn apply-now">Learn More</a>
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
                  <h2>Master of Theology (M.Th.) in Christian Apologetics</h2>
                <p class="credit-hours">Credit Hours: 48</p>
                <p class="overview">
                    This program focuses on the intellectual defense of the Christian faith through
                    the combination of theological studies and apologetic reasoning. It covers topics
                    such as historical and cultural apologetics, philosophy of religion, and theological
                    responses to contemporary challenges to faith.


                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/master-of-theology-m-th-in-christian-apologetics" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
            <section class="program">
                <h2>Master of Divinity (M.Div.) in Comparative Religion </h2>
                <p class="credit-hours">Credit Hours: 72</p>
                <p class="overview">
                  This program provides advanced theological education with a focus on the study
                    and comparison of world religions. Coursework includes comparative theology,
                    interfaith dialogue, and the impact of religious traditions on global culture, with
                    the aim to prepare students for ministry in diverse, multi-faith environments.
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/master-of-divinity-m-div-in-comparative-religion" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
            <section class="program">
                <h2> Master of Theology (M.Th.) in Philosophy and Theological Studies </h2>
                <p class="credit-hours">Credit Hours: 48</p>
                <p class="overview">
                      This program integrates advanced theological studies with philosophical inquiry.
                        It looks at the intersection of ethics, metaphysics, etc. and the foundations of
                        Christian belief. The program aims to prepare students for academic, teaching,
                        and research roles in the intersection of philosophy and theology.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/master-of-theology-m-th-in-philosophy-and-theological-studies" class="btn apply-now">Learn More</a>
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
                  <h2>Doctor of Divinity (D.Div.) in Christian Ethics and Philosophy</h2>
                <p class="credit-hours">Credit Hours: 64</p>
                <p class="overview">
                   This program is designed for advanced study in Christian ethics and philosophical
                    theology. It focuses on ethical theory, moral philosophy, and the integration of
                    Christian thought with contemporary ethical issues. The program is designed to
                    prepare students for high-level research, academic leadership, and applied ethics
                    in various professional and ministerial settings

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/doctor-of-divinity-d-div-in-christian-ethics-and-philosophy" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
                <section class="program">
                  <h2>Doctor of Theology (Th.D.) in Interfaith Studies </h2>
                <p class="credit-hours">Credit Hours: 64</p>
                <p class="overview">
                   This program focuses on advanced studies in interfaith dialogue and comparative
                    theology. It prepares scholars to engage in academic research, teaching, and
                    leadership roles in contexts that require expertise in interfaith dialogue and
                    engagement.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/doctor-of-theology-th-d-in-interfaith-studies" class="btn apply-now">Learn More</a>
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