
<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/";
    include($IPATH."header.html"); ?>
    
    
    <style>
        /* Base Styles */
        body {
            /*line-height: 1.6;*/
            margin: 0;
            padding: 0;
        }

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
            <div class="featured-hero" style="background-image: url('/images/c-imgs/c11.png');  ">
              <div class="img-content">
                <h3>College of Ministry and Advocacy</h3>
                <span>Equipping students for effective Christian service.</span>
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
    
    <!--bachelor blocks ends here-->

    <!-- Tab Content for Bachelor -->
    <div id="bachelor" class="tab-content active">
        <div class="main">
            <!-- Bachelor Program Section Start -->
            <section class="program">
                <h2>Bachelor of Theology (B.Th.) in Christian Counseling</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                    This program offers a comprehensive study of counseling techniques from a Christian perspective. It includes training in counseling theories, ethics, and practical application, preparing students to provide effective pastoral care and counseling. 
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-theology-b-th-in-christian-counseling/" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
             <section class="program">
                 <h2>Bachelor of Divinity (B.Div.) in Community Development</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                    This program focuses on equipping students to lead and implement community development projects as a form of mission engagement. It includes coursework in social advocacy, community assessment, and development strategies, promoting social change and community engagement. 
                    
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-divinity-b-div-in-community-development/" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
            <section class="program">
                <h2>Bachelor of Divinity (B.Div.) in Corporate Chaplaincy</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                This program prepares students for chaplaincy roles in corporate environments.
                    It includes studies in workplace ministry, organizational leadership, and crisis
                    intervention, with a focus on providing spiritual support and guidance in
                    workplace and business settings.
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-divinity-b-div-in-corporate-chaplaincy" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
              <section class="program">
                <h2>Bachelor of Ministry (B.Min.) in Evangelism and Missions</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                   This program trains students in effective evangelism and cross-cultural missions.
                        It includes studies in evangelistic strategies, cultural contexts, and mission
                        planning, with the aim to prepare students for domestic and international
                        outreach.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-ministry-b-min-in-evangelism-and-missions" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
              <section class="program">
                <h2>Bachelor of Ministry (B.Min.) in Music and Worship</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                   This program equips students for leadership in worship and music ministry.
                    Courses cover music theory, worship planning, and creative arts integration, with
                    the aim to prepare students to lead worship services and music programs in
                    various ministry settings.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-ministry-b-min-in-music-and-worship" class="btn apply-now">Learn More</a>
                </div>
            </section>
 
            <section class="program">
                <h2>Bachelor of Ministry (B.Min.) in Pastoring and Discipleship</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                   This program prepares students for pastoral leadership and an effective
                    discipleship ministry. It includes coursework in biblical studies, pastoral
                    counseling, and practical ministry skills, with a focus on how to nurture believers
                    and guide congregational growth.
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-ministry-b-min-in-pastoring-and-discipleship" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
              <section class="program">
                <h2>Bachelor of Divinity (B.Div.) in Restorative Justice</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                   This program explores principles of restorative justice. It covers conflict
                    resolution, social justice, and community mediation, with the aim to prepare
                    students for roles in justice and reconciliation ministries.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-divinity-b-div-in-restorative-justice" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
                <section class="program">
                <h2>Bachelor of Ministry (B.Min.) in Youth Ministry</h2>
                <p class="credit-hours">Credit Hours: 120</p>
                <p class="overview">
                   This program is designed for those seeking to minister to youth and young adults.
                    It includes coursework in adolescent development, youth programming, and
                    relational ministry, with a focus on effective strategies for engaging and
                    mentoring younger generations.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/bachelor-of-ministry-b-min-in-youth-ministry" class="btn apply-now">Learn More</a>
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
                  <h2>Master of Theology (M.Th.) in Christian Counseling</h2>
                <p class="credit-hours">Credit Hours: 48</p>
                <p class="overview">
                    This program offers in-depth study and research in Christian counseling. It
                    includes advanced coursework in counseling theory, research methods, and
                    therapeutic approaches. The overall aim is to prepare students for specialized
                    roles in counseling and pastoral care.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/master-of-theology-m-th-in-christian-counseling" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
            <section class="program">
                <h2>Master of Divinity (M.Div.) in Community Development and Missions </h2>
                <p class="credit-hours">Credit Hours: 72</p>
                <p class="overview">
                   This program combines community development theories with mission
                    strategies. It includes comprehensive training in cultural contexts, program
                    evaluation, and community leadership, with the aim to prepare students for
                    leadership roles in both community development and missions.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/master-of-divinity-m-div-in-community-development-and-missions" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
            <section class="program">
                <h2>Master of Ministry (M.Min.) in Pastoral Ministry</h2>
                <p class="credit-hours">Credit Hours: 48</p>
                <p class="overview">
                      This program provides advanced training in pastoral leadership and care. It
                        includes coursework in homiletics, church Administration, and strategic ministry
                        planning. The courses are designed to enhance students' effectiveness in pastoral
                        roles.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/master-of-ministry-m-min-in-pastoral-ministry" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
                <section class="program">
                <h2>Master of Divinity (M.Div.) in Restorative Justice </h2>
                <p class="credit-hours">Credit Hours: 72</p>
                <p class="overview">
                  This program focuses on advanced principles of restorative justice and social
                    advocacy. It includes coursework in justice practices, community engagement,
                    and reconciliation strategies. It is designed for students who would play
                    leadership roles in justice and advocacy initiatives.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/master-of-divinity-m-div-in-restorative-justice" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
               <section class="program">
                <h2>Master of Ministry (M.Min.) in Worship and Creative Arts </h2>
                <p class="credit-hours">Credit Hours: 48</p>
                <p class="overview">
                 This program focuses on advanced worship leadership and integration of creative
                    arts in ministry. Courses cover worship planning, the application of diverse forms
                    of arts, and core leadership skills. The focus is to prepare students to lead
                    dynamic and creative worship experiences in both church and outreach settings.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/master-of-ministry-m-min-in-worship-and-reative-arts" class="btn apply-now">Learn More</a>
                </div>
            </section>
 
             <section class="program">
                <h2>Master of Ministry (M.Min.) in Youth and Family Ministry </h2>
                <p class="credit-hours">Credit Hours: 48</p>
                <p class="overview">
                 This program teaches advanced strategies for youth and family ministry. It
                    includes coursework in family dynamics, youth programming, marriage
                    counseling, rehabilitation, and leadership development. The courses are designed
                    to train effective youth and family life ministers.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/master-of-ministry-m-min-in-youth-and-family-ministry" class="btn apply-now">Learn More</a>
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
                  <h2> Doctor of Divinity (D.Div.) in Justice and Social Advocacy</h2>
                <p class="credit-hours">Credit Hours: 64</p>
                <p class="overview">
                    This program focuses on deepening understanding and impact in justice and
                        social advocacy. It includes coursework in social justice theory, advocacy
                        strategies, and community impact. The program is designed for established
                        leaders who aim to advance social change.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/doctor-of-divinity-d-div-in-justice-and-social-advocacy" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
                <section class="program">
                  <h2> Doctor of Ministry (D.Min.) in Practical Ministry and the Arts </h2>
                <p class="credit-hours">Credit Hours: 64</p>
                <p class="overview">
                   This program is designed for experienced practitioners seeking to integrate
                    practical ministry with artistic expression. It includes advanced studies in ministry
                    practice, creative leadership, and research aimed at enhancing effectiveness in
                    ministry through the arts.

                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/doctor-of-ministry-d-min-in-practical-ministry-and-the-arts" class="btn apply-now">Learn More</a>
                </div>
            </section>
            
                <section class="program">
                  <h2> Doctor of Theology (Th.D.) in Practical Theology and Counseling </h2>
                <p class="credit-hours">Credit Hours: 64</p>
                <p class="overview">
                    This program offers intensive research and exploration in practical theology and
                        counseling. It includes advanced studies in theological application, counseling
                        theory, and scholarly research, with the aim to prepare established Christian
                        counselors for advanced ministry and academic roles.
                </p>
                <div class="actions">
                    <a href="#" class="btn learn-more">Overview</a>
                    <a href="updates/relevant/doctor-of-theology-th-d-in-practical-theology-and-counseling" class="btn apply-now">Learn More</a>
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