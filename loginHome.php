<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Online Campus Tutorial</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #929FBA !important;
      }
    }

  </style>
</head>

<body>

  <header>

        <!-- Navbar -->
        <nav  class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="#" target="_blank">
                    <!-- <img src="img/oct1.jpg">logo of OCT -->&Tab; Online Campus Tutorial
                </a>
        <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">

                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="courses.html" target="_blank">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="faculty.html" target="_blank">Faculties</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="signin.html" target="_blank">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="about.html" target="_blank">About OCT</a>
                        </li>
                        <li class="nav-item">
                          <a class="navbar-link waves-effect" href="https://ies.ipsacademy.org" target="_blank">
                          <img src="img/ips.jpg"><!-- logo of IPS-->
                      </a>
                        </li>
                        <li class="nav-item">
                          <a class="navbar-link waves-effect" href="http://cms1.ipsacademy.net/Login" target="_blank">
                          <img src="img/cms.jpg"><!-- logo of CMS-->
                      </a>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-outline-info btn-rounded btn-block my-0-waves-effect z-depth-0" value="logout">
                            <a href="logout.php">Logout</a></button>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
        <!-- Navbar -->

        
    <hr class="mt-5 pt-5">
    <div class="container ">
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
          <div class="view" style="background-image: url('img/teacher3.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                  <strong>Online Campus Tutorial</strong>
                </h1>
                    <h2 class="mb-4 d-none d-md-block">
                  <strong>Acquire skills that meet your needs </strong>
                </h2>
              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class="carousel-item">
          <div class="view" style="background-image: url('img/teacher.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                  <strong>IES,IPS ACADEMY</strong>
                </h1>
                <h2 class="mb-4 d-none d-md-block">
                  <strong>Faculty Development and Student Mentoring</strong>
                </h2>
                </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class="carousel-item">
          <div class="view" style="background-image: url('img/teacher2.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                  <strong>Learn with Us</strong>
                </h1>
                <h2 class="mb-4 d-none d-md-block">
                  <strong>Interact with us as a Local Chapter</strong>
                </h2>
                </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/Third slide-->

      </div>
      <!--/.Slides-->

      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->

    </div>
  </div>
    <!--/.Carousel Wrapper-->

  </header>
  </div>
  </main>
  <!--Main layout-->
    <main class="mt-5 pt-5">
            <hr class=" pt-5">
            <div class="container">
            <!--Section: Cards-->
            <section class="text-center">

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">

          <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">
            <!--Card-->
                        <div class="card">
                <!--Card image-->
                            <div class="view overlay">
                                <img src="img/computer.jpg" class="card-img-top" alt="">
                                <a href="#" target="_blank">
                                 <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
              <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">Computer Science & Engineering</h4>
                                <!--Text-->
                                <p class="card-text">Students pursuing computer science courses will gain knowledge of design, implementation and management of information system of both hardware and software. Going by the name, CSE course deals primarily with the theory of computation and design of computational systems.</p>
                                <a href="cseCourse.html" target="_blank" class="btn btn-primary btn-md">Explore Course
                                    <i class="fas fa-play ml-2"></i>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->                    

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="img/ft1.jpg" class="card-img-top" alt="">
                                <a href="#" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">Fire Tech & Safety Engineering</h4>
                                <!--Text-->
                                <p class="card-text">Fire Safety Engineers design systems and structures that lie dormant within our built environment, waiting for an extreme event. The knowledge, technology and engineering that contribute to fire safety are fundamental to escaping occupants, the fire and rescue service, and the protection of property</p>
                                <a href="#" target="_blank" class="btn btn-primary btn-md">Explore Course
                                    <i class="fas fa-play ml-2"></i>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="img/ec2.jpg" class="card-img-top" alt="">
                                <a href="#" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">Electronics & Communication Engineering</h4>
                                <!--Text-->
                                <p class="card-text">Electronics and Communications Engineering (ECE) involves researching, designing, developing and testing of electronic equipment used in various systems. Electronics and Communications engineers also conceptualize and oversee the manufacturing of communications and broadcast systems.</p>
                                <a href="#" target="_blank" class="btn btn-primary btn-md">Explore Course
                                    <i class="fas fa-play ml-2"></i>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="img/me1.jpg" class="card-img-top" alt="">
                                <a href="#" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">Mechanical Engineering</h4>
                                <!--Text-->
                                <p class="card-text">Mechanical engineering deals with the design, construction, and use of machines. The programme endows students with the basic understanding and knowledge of how heavy tools and machineries work. A student pursuing a mechanical engineering programme will acquire knowledge about designing of automobiles, electric motors,etc.</p>
                                <a href="#" target="_blank" class="btn btn-primary btn-md">Explore Course
                                    <i class="fas fa-play ml-2""></i>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="img/cv2.jpg" class="card-img-top" alt="">
                                <a href="#" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">Civil Engineering</h4> 
                                <!--Text-->
                                <p class="card-text"> Civil Engineering involves planning, designing, constructing, maintaining and supervising many infrastructures  facilities essential to modern life like highways, bridges and tunnels, airports and other buildings.Subsequently, the course also involves protectingpublic and environmental health as well as improving existing infrastructure.</p>
                                <a href="#" target="_blank" class="btn btn-primary btn-md">Explore Course
                                    <i class="fas fa-play ml-2""></i>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="img/chem1.jpg" class="card-img-top" alt="">
                                <a href="#" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">Chemical Engineering</h4>
                                <!--Text-->
                                <p class="card-text">Chemical engineering is a discipline influencing numerous areas of technology. In broad terms, chemical engineers conceive and design processes to produce, transform and transport materials — beginning with experimentation in the laboratory followed by implementation of the technology in full-scale production.Chemical engineer becomes essential in these areas. </p>
                                <a href="#" target="_blank" class="btn btn-primary btn-md">Explore Course
                                    <i class="fas fa-play ml-2""></i>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                

            </section>
            <!--Section: Cards-->

        </div>
    </main>
    <!--Main layout-->
 <!--Footer-->
    <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">

        
        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
            <a href="https://www.facebook.com" target="_blank">
                <i class="fab fa-facebook-f mr-3"></i>
            </a>

            <a href="#" target="_blank">
                <i class="fab fa-twitter mr-3"></i>
            </a>

            <a href="#" target="_blank">
              <i class="fab fa-youtube mr-3"></i>
            </a>

            <a href="#" target="_blank">
                <i class="fab fa-google-plus-g mr-3"></i>
            </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2019 Copyright: Online Campus Tutorials
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
