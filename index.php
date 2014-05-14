    <!DOCTYPE HTML>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>MitBackBenchers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel='stylesheet' id='prettyphoto-css'  href="css/prettyPhoto.css" type='text/css' media='all'>
    <link href="css/fontello.css" type="text/css" rel="stylesheet">
    <!--[if lt IE 7]>
            <link href="css/fontello-ie7.css" type="text/css" rel="stylesheet">  
        <![endif]-->
    <!-- Google Web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <style>
    body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
    }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- Load ScrollTo -->
    <script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
    <!-- Load LocalScroll -->
    <script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
    <!-- prettyPhoto Initialization -->
    <script type="text/javascript" charset="utf-8">
          $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto();
          });
        </script>
    </head>
    <body>
    <!--******************** NAVBAR ********************-->
    <div class="navbar-wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
            <h1 class="brand"><a href="#top">MitBackBenchers</a></h1>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <nav class="pull-right nav-collapse collapse">
              <ul id="menu-main" class="nav">
                <li><a title="portfolio" href="#portfolio">Gallery</a></li>
                <li><a title="news" href="#news">News</a></li>
                <li><a title="team" href="#team">Team</a></li>
              </ul>
            </nav>
          </div>
          <!-- /.container -->
        </div>
        <!-- /.navbar-inner -->
      </div>
      <!-- /.navbar -->
    </div>
    <!-- /.navbar-wrapper -->
    <div id="top"></div>
    <!-- ******************** HeaderWrap ********************-->
    <div id="headerwrap">
      <header class="clearfix"><br/><br/><br/><br/><br/>
        
        <div class="container">
          <div class="row">
            <div class="span12">
              <form method="post" action="pages/UserLogin.php"><br/><br/>
                <h2>Signup to hangout with friends</h2><br/><br/><br/><br/>
                <input type="email" name="UserMailLogin" placeholder="you@yourmail.com" class="cform-text" size="40" title="your email">
                <input type="password" name="UserPasswordLogin" placeholder="Password" class="cform-text" size="40" title="password">
                <label><a  href="registration.html" title="Click here to register.">Not Yet Registered?</a></label>
                <input type="submit" value="Login" class="cform-submit">
                <?php
                 if(isset($_GET['error'])){
                  echo "Login Failed.";
                ?>
                
                <?php
                }
                ?>
              </form>
            </div>
          </div>
         
      </header>
    </div>
    <!--******************** Feature ********************-->
    <div class="scrollblock">
      <section id="feature">
        <div class="container">
          <div class="row">
            <div class="span12">
              <article>
                <p>We work to make web a beautiful place.</p>
                <p>We craft beautiful designs and convert them into</p>
                <p>fully functional and user-friendy web app.</p>
              </article>
            </div>
            <!-- ./span12 -->
          </div>
          <!-- .row -->
        </div>
        <!-- ./container -->
      </section>
    </div>
    <hr>
    <!--******************** Portfolio Section ********************-->
    <section id="portfolio" class="single-page scrollblock">
      <div class="container">
        <div class="align"><i class="icon-desktop-circled"></i></div>
        <h1 id="folio-headline">Bachelor's Paradise...</h1>
        <div class="row">
          <div class="span4">
            <div class="mask2"> <a href="img/test1.jpg" rel="prettyPhoto"><img src="img/test1.jpg" alt=""></a> </div>
            <div class="inside">
              <hgroup>
                <h2>Tradition Day</h2>
              </hgroup>
              <div class="entry-content">
                <p>Everybody Enjoyed each of the gathering in the college.</p>
                <a class="more-link" href="#">view project</a> </div>
            </div>
            <!-- /.inside -->
          </div>
          <!-- /.span4 -->
          <div class="span4">
            <div class="mask2"> <a href="img/test2.jpg" rel="prettyPhoto"><img src="img/test2.jpg" alt=""></a> </div>
            <div class="inside">
              <hgroup>
                <h2>Gang Day</h2>
              </hgroup>
              <div class="entry-content">
                <p>Everybody Enjoyed each of the gathering in the college..</p>
                <a class="more-link" href="#">view project</a> </div>
            </div>
            <!-- /.inside -->
          </div>
          <!-- /.span4 -->
          <div class="span4">
            <div class="mask2"> <a href="img/fette.jpg" rel="prettyPhoto"><img src="img/fette.jpg" alt=""></a> </div>
            <div class="inside">
              <hgroup>
                <h2>नुसत फेटे ....Awesome Guys</h2>
              </hgroup>
              <div class="entry-content">
                <p>Everybody Enjoyed each of the gathering in the college.</p>
                <a class="more-link" href="#">view project</a> </div>
            </div>
            <!-- /.inside -->
          </div>
          <!-- /.span4 -->
        </div>
        <!-- /.row -->
        
        <div class="row">
          <div class="span4">
            <div class="mask2"> <a href="img/gang.jpg" rel="prettyPhoto"><img src="img/gang.jpg" alt=""></a> </div>
            <div class="inside">
              <hgroup>
                <h2>Gang Day</h2>
              </hgroup>
              <div class="entry-content">
                <p>Everybody Enjoyed each of the gathering in the college.</p>
                <a class="more-link" href="#">view project</a> </div>
            </div>
            <!-- /.inside -->
          </div>
          <!-- /.span4 -->
          <div class="span4">
            <div class="mask2"> <a href="img/mis.jpg" rel="prettyPhoto"><img src="img/mis.jpg" alt=""></a> </div>
            <div class="inside">
              <hgroup>
                <h2>MisMatch Day</h2>
              </hgroup>
              <div class="entry-content">
                <p>Everybody Enjoyed each of the gathering in the college.</p>
                <a class="more-link" href="#">view project</a> </div>
            </div>
            <!-- /.inside -->
          </div>
          <!-- /.span4 -->
          <div class="span4">
            <div class="mask2"> <a href="img/joker.jpg" rel="prettyPhoto"><img src="img/joker.jpg" alt=""></a> </div>
            <div class="inside">
              <hgroup>
                <h2>Face Painting Day</h2>
              </hgroup>
              <div class="entry-content">
                <p>Everybody Enjoyed each of the gathering in the college.</p>
                <a class="more-link" href="#">view project</a> </div>
            </div>
            <!-- /.inside -->
          </div>
          <!-- /.span4 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <hr>
    <!--******************** Testimonials Section ********************-->
    <section id="testimonials" class="single-page hidden-phone">
      <div class="container">
        <div class="row">
          <div class="blockquote-wrapper">
            <blockquote class="mega">
              <div class="span4">
                <p class="cite">BackBenchers:</p>
              </div>
              <div class="span8">
                <p class="alignright">"The best brains of the nation may be found on the LAST BENCHES of the classroom " -APJ Abdul Kalam</p>
              </div>
            </blockquote>
          </div>
          <!-- /.blockquote-wrapper -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <hr>
    <!--******************** News Section ********************-->
    <section id="news" class="single-page scrollblock">
      <div class="container">
        <div class="align"><i class="icon-pencil-circled"></i></div>
        <h1>Events</h1>
        <!-- Three columns -->
        <div class="row">
          <article class="span4 post"> <img class="img-news" src="img/new1.jpg" alt="">
            <div class="inside">
              <p class="post-date"><i class="icon-calendar"></i> March 17, 2013</p>
              <h2>Industrial Visit</h2>
              <div class="entry-content">
                <p>Best knowledge tour to Industrial visit to Ticket-Utils Thanks to MCA Department.&hellip;</p>
                <a href="#" class="more-link">read more</a> </div>
            </div>
            <!-- /.inside -->
          </article>
          <!-- /.span4 -->
          <article class="span4 post"> <img class="img-news" src="img/new2.jpg" alt="">
            <div class="inside">
              <p class="post-date">February 28, 2013</p>
              <h2>Industrial Visit</h2>
              <div class="entry-content">
                <p>Best knowledge tour to Industrial visit to Ticket-Utils Thanks to MCA Department.&hellip;</p>
                <a href="#" class="more-link">read more</a> </div>
            </div>
            <!-- /.inside -->
          </article>
          <!-- /.span4 -->
          <article class="span4 post"> <img class="img-news" src="img/blog_img-03.jpg" alt="">
            <div class="inside">
              <p class="post-date">February 06, 2013</p>
              <h2>Industrial Visit</h2>
              <div class="entry-content">
                <p>Best knowledge tour to Industrial visit to Ticket-Utils Thanks to MCA Department&hellip;</p>
                <a href="#" class="more-link">read more</a> </div>
            </div>
            <!-- /.inside -->
          </article>
          <!-- /.span4 -->
        </div>
        <!-- /.row -->
        <a href="#" class="btn btn-large">Go to our blog</a> </div>
      <!-- /.container -->
    </section>
    <hr>
    <!--******************** Team Section ********************-->
    <section id="team" class="single-page scrollblock">
      <div class="container">
        <div class="align"><i class="icon-group-circled"></i></div>
        <h1>Meet the team</h1>
        <!-- Five columns -->
        <div class="row">
          <div class="span2 offset4">
            <div class="teamalign"> <img class="team-thumb img-circle" src="img/kaus.jpg" alt=""> </div>
            <h3>Kaustubh</h3>
            <div class="job-position">student</div>
          </div>
          <!-- ./span2 -->
          <div class="span2">
            <div class="teamalign"> <img class="team-thumb img-circle" src="img/shyam.jpg" alt=""> </div>
            <h3>Shyam</h3>
            <div class="job-position">student</div>
          </div>
          
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="span10 offset1">
            <hr class="featurette-divider">
            <div class="featurette">
              <h2 class="featurette-heading">Want to know more? <span class="muted">| a little about us</span></h2>
              <p>We are students of MIT College, Aurangabad currently pursing MCA First Year.</p>
            </div>
            <!-- /.featurette -->
            <hr class="featurette-divider">
          </div>
          <!-- .span10 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    
    <hr>
    <div class="footer-wrapper">
      <div class="container">
        <footer>
          <small>&copy; 2014 Kaustubh Mulay.</small>
        </footer>
      </div>
      <!-- ./container -->
    </div>
    <!-- Loading the javaScript at the end of the page -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/site.js"></script>
   
 </body>
 </html>
