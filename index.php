   <?php include('dbconnect.php');
?>
<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Syria</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- voor question part -->
    <link rel="stylesheet" type="text/css" href="css/modal.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="jquery-3.1.1.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/formwizard.css">
    <script type="text/javascript" src="js/formwizard.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>Syria</a>
            </li>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="#about" onclick=$("#menu-close").click();>About</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick=$("#menu-close").click();>Portfolio</a>
            </li>
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>SYRIA</h1>
            <h3> Would you like to test your knowledge about syria ? </h3>
            <br>
            <a href="#successModal" data-toggle="modal" class="btn btn-dark btn-lg">Start now</a>
        </div>
<!-- test qustion -->
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-header-success">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">[ × ]</button>
                        <h2>Questions</h2>
                    </div>
                    <div class="modal-body">
                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                    <p>Question #1</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-primary btn-circle" disabled="disabled">2</a>
                                    <p>Question #2</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-primary btn-circle" disabled="disabled">3</a>
                                    <p>Question #3</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-4" type="button" class="btn btn-primary btn-circle" disabled="disabled">4</a>
                                    <p>Question #4</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-5" type="button" class="btn btn-primary btn-circle" disabled="disabled">5</a>
                                    <p>Question #5</p>
                                </div>
                            </div>
                        </div>
                        <form role="form">
                            <div class="row setup-content" id="step-1">
                                <div class="col-md-12 col-xs-12">
                                    <h3>In which continent syria is located ?</h3>
                                    <div class="form-group">
                                        <div class="radio">
                                            <label><input type="radio" name="answer1" value="asia">Asia</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="answer1" value="africa">Africa</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="answer1" value="europe">Europe</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="answer1" value="south america">South America</label>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger btn-lg pull-left" data-dismiss="modal">Close</button>
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-2">
                                <div class="col-md-12 col-xs-12">
                                    <h3>What language syrians speak ?</h3>
                                    <div class="form-group">
                                        <div class="radio">
                                            <label><input type="radio" name="answer2" value="asia">Turkish</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="answer2" value="africa">Persian</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="answer2" value="europe">French</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="answer2" value="south america">Arabic</label>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger btn-lg pull-left" data-dismiss="modal">Close</button>
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                </div>
                            </div>

                            <div class="row setup-content" id="step-3">
                                <div class="col-md-12 col-xs-12">
                                    <h3>Did you try already syrian food ?</h3>
                                    <div class="form-group">
                                    <div>
                                          <input style="width: 200px;height: 100px; margin-right: 15px" type="image" src="img/1.jpg" alt="Submit">
                                          <input style="width: 200px;height: 100px"  type="image" src="img/2.jpg" alt="Submit">
                                    </div>
                                        <div class="radio">
                                            <label><input type="radio" name="answer3" value="asia">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="answer3" value="africa">NO</label>
                                        </div>
                                       
                                    </div>
                                    <button type="button" class="btn btn-danger btn-lg pull-left" data-dismiss="modal">Close</button>
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                </div>
                           </div>
                                <div class="row setup-content" id="step-4">
                                <div class="col-md-12 col-xs-12">
                                    <h3>Are you interested in antiquities places ?</h3>
                                    <div class="form-group">
                                    <div>
                                          <input style="width: 200px;height: 100px; margin-right: 15px" type="image" src="img/3.jpg" alt="Submit">
                                          <input style="width: 200px;height: 100px"  type="image" src="img/4.jpg" alt="Submit">
                                    </div>
                                        <div class="radio">
                                            <label><input type="radio" name="answer3" value="asia">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="answer3" value="africa">NO</label>
                                        </div>
                                       
                                    </div>
                                    <button type="button" class="btn btn-danger btn-lg pull-left" data-dismiss="modal">Close</button>
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-5">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h3>Done</h3>
                                        <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </header>
 


  



    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Stylish Portfolio is the perfect theme for your next project!</h2>
                    <p class="lead">This theme features some wonderful photography courtesy of <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a>.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Our Services</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <figure class="snip1566">
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Jordan_(orthographic_projection).svg/440px-Jordan_(orthographic_projection).svg.png" alt="sq-sample14" />
  <figcaption><i class="ion-android-add"></i></figcaption>
  <a href="Syrian_Arab_Republic.html"></a>
</figure>

                                <h4>
                                    <strong>Syrian Arab Republic</strong>
                                </h4>
                                <p>Syria, officially known as the Syrian Arab Republic, is a country in Western Asia, bordering Lebanon and the Mediterranean Sea to the west, Turkey to the north, Iraq to the east, Jordan to the south, and Israel to the southwest</p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                               <figure class="snip1566">
  <img src="https://drscdn.500px.org/photo/165979687/w%3D440_h%3D440/0a2ac4e2a0f7a2578cd0c02fd9c7d508?v=3" alt="sq-sample14" />
  <figcaption><i class="ion-android-add"></i></figcaption>
  <a href="Syria_History.html"></a>
</figure>

                                <h4>
                                    <strong>Syria History</strong>
                                </h4>
                                <p>History of Syria covers the developments in the region of Syria (Greek Συρία) and modern Syrian Arab Republic. Syria most likely derives from the name of the Neo-Assyrian Empire established in the 10th century BC.</p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                               <figure class="snip1566">
  <img src="https://s-media-cache-ak0.pinimg.com/736x/f6/8e/df/f68edf2da67693711a2b7161a0f5c616.jpg" alt="sq-sample14" />
  <figcaption><i class="ion-android-add"></i></figcaption>
  <a href="Syrian_Food.html"></a>
</figure>

                                <h4>
                                    <strong>Syrian Food</strong>
                                </h4>
                                <p>Street food. Are fried balls or patties of spiced, mashed chickpeas. Falafel is most often served in Syrian flat bread, with pickles, tahina, hummus, sumac, cut vegetable salad and often, Shatta, a hot sauce, the type used depending on the origin of the falafel maker.</p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                               <figure class="snip1566">
  <img src="https://s-media-cache-ak0.pinimg.com/736x/c0/43/da/c043da94da4ea4c84f6783e823712db0.jpg" alt="sq-sample14" />
  <figcaption><i class="ion-android-add"></i></figcaption>
  <a href="Tourism_in_Syria.html"></a>
</figure>

                                <h4>
                                    <strong>Tourism in Syria</strong>
                                </h4>
                                <p>Although it has some of the oldest cities in Western Asia, such as Damascus and Aleppo.</p>
                                
                            </div>
                        </div>
                   
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
       <div class="photo-slider-demo">
    <div class="photo-slide">
        <figure class="slide-image" id="slide-demo-1"></figure>
        <div class="slide-text slide-text-left">
            <h1 class="stext yellow">Lorem ipsum dolor.</h1><br>
            <h3 class="stext middle-grey">Lorem ipsum dolor sit amet.</h3>
        </div>
    </div>
    <div class="photo-slide">
        <figure class="slide-image" id="slide-demo-2"></figure>
        <div class="slide-text slide-text-right">
            <h1 class="stext red">Lorem ipsum dolor.</h1><br>
            <h4 class="stext light-grey">Lorem ipsum dolor sit <a href="#" onclick="return false;">amet</a>.</h4> 
        </div>
    </div>
    <div class="photo-slide">
        <figure class="slide-image" id="slide-demo-3"></figure>
        <div class="slide-text slide-text-left">
            <h1 class="stext light-grey">Lorem ipsum dolor.</h1><br>
            <p class="stext amethyst">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, ad!</hp> 
        </div>
    </div>
    <div class="photo-slide">
        <figure class="slide-image" id="slide-demo-4"></figure>
        <div class="slide-text slide-text-right">
            <h1 class="stext">Lorem ipsum </h1><br>
            <p class="stext">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Lorem ipsum dolor sit amet.</p><br>
            <button class="btn btn-green stext transparent">Login</button>
        </div>
        </div>
</div> <!-- /photo-slider-demo -->

<div class="fluid mtop30">  
  <div class="grid8 offset2 center">
    <p>Responsive Photo Slider from <a href="http://elrumordelaluz.github.io/newbancomail/">New BM Pattern Library</a></p>
    <p class="small">Only css animations + :hover behavior.<br> Also customizable @mixin. <a href="https://github.com/elrumordelaluz/newbancomail/blob/master/sass/base/_mixins.scss#L278">More</a></p>
   </div>  
</div>

    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">View More Items</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                   <h2 class="section-heading">Let's Get In Touch!</h2>
                    
                    <h3>  Fill the form and send it i will get back to you as soon as possible!</h3>
                
                <form action="home.php" method="POST" >
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <br>
                    <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" name="name" class="form-control" placeholder="Enter Your Name" maxlength="50"  />
                </div>
                
            </div>
            
            
                </div>
                <div class="col-lg-4 text-center">
                    <br>
                    <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                <input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="40" />
                </div>
                 </div>
                  </div>
                 <div class="col-lg-4 col-lg-offset-2 text-center">
                    <br>
                    <div class="form-group">
                <div class="input-group">
                
                 <button type="submit" class="btn btn-block btn-primary" name="signup" value="signup" >Fill the form</button>
                </div>
                
            </div>
            
            
                </div>
                 
               
                </form>

                </div>
            </div>
        </div>
    </aside>

    <!-- Map -->
    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
        <br />
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
        </iframe>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Syria</strong>
                    </h4>
                    <p>
                        <br></p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">SYRIAN@example.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Your Website 2016</p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>

</body>

</html>
<?php
function signup($name, $email){
    global $db;
    $updated_at = $created_at = date("Y-m-d H:i:s");
    $query_string = "insert into users (name , email , created_at, updated_at) values('$name' , '$email' , '$created_at', '$updated_at')";
    $result = mysqli_query($db , $query_string);
    if(!$result){
        die ("<script>alert(\"Fail To Fill The Form please try again later " . mysqli_errno(). "\");</script>");
    } else {
        echo "<script>alert(\"Thanks For Fill the Form\");</script>";
    }
}
if (isset($_POST["signup"])) {
    signup($_POST["name"],  $_POST["email"]);
} 
?>