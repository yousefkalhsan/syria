<?php 
include('dbconnector.php');
session_start();
 ?>
<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SYRIA</title>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/formwizard.css">
    <script type="text/javascript" src="js/formwizard.js"></script>


    <!-- voor video background -->
    <link rel="stylesheet" type="text/css" href="css/backgroundVideo.css">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/backgroundVideo.js"></script>



     <!-- voor animation  -->
    <script src="js/wow.min.js"></script>
    <script>new WOW().init(); </script>
    <link rel="stylesheet" href="css/animate.css">

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
            
            <li>
                <a href="index.php" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="#about" onclick=$("#menu-close").click();>Facts</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>Learn More</a>
            </li>
          
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
            </li>
            <li role="separator" class= "divider"></li>
           <li>
                 <a href="sing_in.php" onclick=$("#menu-close").click();>Sign In</a>
            </li> 
            <li>
                  <a href="logout.php" onclick=$("#menu-close").click();> <?php echo "Log out / ".$_SESSION['login_name']?> </a>
            </li> 
            <li role="separator" class= "divider"></li>
        </ul>
    </nav>

    <!-- Header/ viedo -->
    <header id="top" class="header"> 

       <div class="homepage-hero-module">
                <div class="video-container">
                    <div class="filter"></div>
                    <video autoplay loop class="fillWidth hidden-sm hidden-xs">
                        <source src="https://youtube.com/embed/vMZmEW3Hz8o?autoplay=1&controls=0&showinfo=0&autohide=1" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
                    </video>
                    <div style="width: 100%; height: 100%">
                        <iframe frameborder="0" height="100%" width="100%" 
                        src="https://youtube.com/embed/vMZmEW3Hz8o?autoplay=1&controls=0&showinfo=0&autohide=1">
                      </iframe>
                    </div> 
                 </div> 
            <!-- <div class="poster hidden-lg hidden-md">
                <img src="img/4.jpg" alt="photo">
            </div> -->
           
            <div class="text-vertical-center wow swing" data-wow-duration="4s">


                <h1>SYRIA</h1>
                <h3> Would you like to test your knowledge about Syria ? </h3>
                <br>
                <a href="#successModal" data-toggle="modal" class="btn btn-dark btn-lg">Start now</a>
            </div>
    </div>
<!-- test qustion -->
        <div class="modal fade" id="successModal" tabindex="2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                    <h2>The city of Damascus is forever attached to Christian </h2> 
                    <p class="lead"> beliefs because the New Testament preaches that the conversion of Paul 
                        <br>the Apostle happened on his way to Damascus.</p>
                     
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary ">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Learn More</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <figure class="snip1566 wow flash" data-wow-delay="0s" data-wow-duration="1.5s">
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
                               <figure class="snip1566 wow flash" data-wow-delay="1.5s" data-wow-duration="1.5s">
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
                               <figure class="snip1566 wow flash" data-wow-delay="3s" data-wow-duration="1.5s">
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
                               <figure class="snip1566 wow flash" data-wow-delay="4.5s" data-wow-duration="1.5s">
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
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center_2">
           <h2>Palmyra, a city dripping with history and culture </h2>
                   <p class="lead"> was deliberately destroyed by the Islamic State of Levant due to its polytheistic statues. 
                    <br>It is a UNESCO World Heritage Site and a rare gem of the ancient world.</p>
        </div>
    </aside>

    

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
     <div class="row">
        <div class="col-lg-10 col-lg-offset-1 text-center"> 
        <div id="disqus_thread"></div>
            <script>

            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = '//syriacoder.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
            </script>
            
    
       </div>
    </div>
</div>       

    </aside>

    
<section id="contactmap" style="width: 100%; height: 300px;">

    
</section>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAqpk72KH0pHQ1e0Inyiiz5O_AnjY4vcaQ"></script>
    <script type="text/javascript">
        
        var mapCords = new google.maps.LatLng(34.5693643,38.2629768);
        var mapOptions = {zoom: 6,center: mapCords, mapTypeId: google.maps.MapTypeId.ROADMAP}    
        var map = new google.maps.Map(document.getElementById("contactmap"), mapOptions);

        var cords = new google.maps.LatLng(34.5693643,38.2629768);
        var marker = new google.maps.Marker({position: cords, 
                                             map: map, 
                                             title: "Syria",
                                             }
                                           );
                                   
    </script>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Syria</strong>
                    </h4>
                    <p>Yousef, Farid , Abdullah
                        <br> Code Masters</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:@example.com">SYRIAN@gmail.sy</a>
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





<div class="container">
     <div class="row">
        <div class="col-lg-10 col-lg-offset-1 text-center"> 
        <div id="disqus_thread"></div>
            <script>

            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = '//syriacoder.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
            </script>
            
    
       </div>
    </div>
</div>       




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
    /*
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
    });*/
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
    <script id="dsq-count-scr" src="//syriacoder.disqus.com/count.js" async></script>

</body>

</html>
