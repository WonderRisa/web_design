<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale=1.0">
    <meta http-equic="X-UA-Compatible" content="ie=edge">
    <title>SpotlessExteriorCleaning</title>
    <!-- resets browser defaults -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!-- Font Awesome - For use in I360 -->
    <script src="https://kit.fontawesome.com/3680edfbdb.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,800" rel="stylesheet" type="text/css" />
    <!-- custom styles -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/queries.css">
    <!-- custom JS -->
    <script src="js/nav.js"></script>
    <script language="JavaScript">
        var frmvalidator  = new Validator("contactform");
        frmvalidator.addValidation("name","req","Please provide your name");
        frmvalidator.addValidation("email","req","Please provide your email");
        frmvalidator.addValidation("email","email",
          "Please enter a valid email address");
    </script>
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.html"><img src="images/sec_logo.png"></a>
            <h1>SPOTLESS EXTERIOR CLEANING</h1>
        </div>
        <div class="burger-nav">
            <div onclick="openNav()" class="align-burger">
                <i class="fas fa-bars "></i>
                <p>MENU</p>
            </div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i
                        class="far fa-window-close fa-3x"></i></a>
                <a href="index.html#about" onclick="closeNav()">About Us</a>
                <a href="service.html" onclick="closeNav()">Services</a>
                <a href="index.html#brand" onclick="closeNav()">Recent Projects</a>
                <a id="statement" href="index.html#estimate" onclick="closeNav()">GET A STATEMENT</a>
            </div>
        </div>
        <div class="list-nav">
            <ul class="horizontal-nav">
                <a href="index.html#about"><li>About Us</li></a>
                <a href="service.html"><li>Our Services</li></a>
                <a href="index.html#brand"><li>Our Work</li></a>
            </ul>
            <div class="estimate">
               <a href="index.html#estimate"><p>GET A ESTIMATE</p></a> 
            </div>
        </div>
    </header>
    <main>
        <!-- Photo by Ярослав Алексеенко on Unsplash -->
        <div class="float-msg">
            <div class="intro-msg">
                <img class="exp-banner" src="images/temp-building.jpg">
                <div class="message-overlay">
                    <h2>EXTERIOR HOUSE WASHING.</h2>
                    <h2>PAVEMENT AND PORCHES.</h2>
                    <h2>WINDOWS AND MORE.</h2>
                    <!---->
                    <div class="give-space">
                        <a href="#estimate" class="button">GET AN ESTIMATE</a>
                    </div>
                </div>
            </div>
            <div class="about-us" id="about">
                <img src="images/sec_logo.png">
                <h3 >Company Overview</h3>
                <p>
                    Spotless Exterior Cleaning is a small business
                    that cleans drivaways, houses, porches, sidewalks,
                    and various other aspects of one's home in a professional manner at an affordable rate in the
                    communities of Fort Wayne.
                </p>
            </div>
            <div class="white-wall">
                <img src="images/white_wall_hash/white_wall_hash.png" alt="unsplash white-wall">
            </div>
        </div>
        <div class="form">
            <div class="background-trans-img">
                <!-- Photo by fran hogan on Unsplash -->
                <div class="container">
                    <div class="branding" id="brand">
                        <h3>Check out our facebook!</h3>
                        <a href="https://www.facebook.com/spotlessexteriorcleaning260" class="button2">View Facebook</a>
                    </div>
                </div>
            </div>
            <!-- References -->
            <!-- https://html.form.guide/contact-form/php-email-contact-form.html -->
            <!-- https://www.youtube.com/watch?v=4q0gYjAVonI -->
            <div class="float-form">
                <form method="POST" name="contact_form" action="contact-form-handler.php">
                    <h3 id="estimate">Get a Free Estimate</h3>
                    <p>Need an estimate? Fill out the form below and we will get back with you as soon as possible.</p>
                    <div class="side-by-side">
                        <input class="user-input" type="text" placeholder="First Name" name="name">

                        <input class="user-input" type="text" placeholder="E-mail" name="mail">

                        <input class="user-input" type="text" placeholder="Subject" name="subject">
                    </div>
                    <textarea class="message" name="message" required>Message</textarea>
                    <button class="get-estimate" type="submit" name="submit">SUBMIT MESSAGE</button>
                </form>
            </div>
            <footer>
                <div class="bottom-info">
                    <div class="sidebyside">
                        <div>
                            <h4>Give Us a Call</h4>
                            <p>260.515.7565</p>
                        </div>
                        <div>
                            <img src="images/sec_logo.png">
                        </div>
                        <div>
                            <h4>Follow Us</h4>
                            <a href="https://www.facebook.com/spotlessexteriorcleaning260"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                    
                    <i class="far fa-copyright"> Spotless Exterior Cleaning</i>
                </div>
            </footer>
        </div>
    </main>
</body>

</html>