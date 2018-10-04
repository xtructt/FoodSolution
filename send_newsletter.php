<?php
    $mailto = $_POST['mail_to'];
 
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "junkiers9@gmail.com";
   $mail ->Password = "s@oLua321";
   $mail ->SetFrom("junkiers9@gmail.com");
   $mail ->Subject = 'Food Solutios Newsletter subscribe confirmation - On your way to a more convinient food solutions ';
   $mail ->Body = 'Thank you for sign in for our Newsletter subscribe - we will send you new dishes, discount and many more even before it is on our site';
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo '
       <!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ninodezign.com, ninodezign@gmail.com">
  <meta name="copyright" content="ninodezign.com"> 
  <title>Welcome</title>
  
  <!-- favicon -->
    <link rel="shortcut icon" href="images/ico/favicon.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
  
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css" />
  <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
  <link rel="stylesheet" type="text/css" href="css/unslider.css" />
  <link rel="stylesheet" type="text/css" href="css/template.css" />
  <link rel="stylesheet" type="text/css" href="css/Team.css" />

  <<!-->script<!-->
  <script src="js/3+1script.js"></script> 
</head>

<body data-target="#nino-navbar" data-spy="scroll" onload="checkCookies()">

  <!-- Header
    ================================================== -->
  <header id="nino-header">
    <div id="nino-headerInner">         
      <nav id="nino-navbar" class="navbar navbar-default" role="navigation">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Food Solutions</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="nino-menuItem pull-right">
            <div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
              <ul class="nav navbar-nav"> 
                <li><a href="blog.html">Blog</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
            <ul class="nino-iconsGroup nav navbar-nav">
              <li><a href="#"><i class="mdi mdi-cart-outline nino-icon"></i></a></li>
              <li><a href="login.html"><i class="mdi mdi-account-outline"></i></a></li>
              <!--<li><a href="login.html" class="nino-search"><i class="mdi mdi-magnify nino-icon"></i></a></li>-->
            </ul>
          </div>
        </div><!-- /.container-fluid -->
      </nav>

      <section id="nino-slider" class="carousel slide container" data-ride="carousel">
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <h2 class="nino-sectionHeading">
              <span class="nino-subHeading">Food Solutions</span>
              Thank you
            </h2>
            <a href="#" class="nino-btn">Learn more</a>
          </div>
          
        </div>      
      </section>
    </div>
  </header><!--/#header-->

  <!-- CONTAINS IN HERE-->
  <div class="container">
    <div class="row box"> 
    
    <h2 class="nino-sectionHeading">Thank you so much for subscription. We will send you new dishes, discount, free products information </span>
    </h2>

      

    </div>
  </div>


  
    <!-- Footer
    ================================================== -->
    <footer id="footer">
		  <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="nino-followUs">
                <div class="row"><div class="totalFollow"><a href="index.html" class="InheritColor"><img src="images/ico/apple-touch-icon-152-precomposed.png" alt="Food Solutios Icon" style="width:33px;height:33px;">&nbsp;&nbsp;&nbsp;<span class="footer-span">Food Solutions</span></a> </div></div>
                  <!---->
                  
               
            <p>The home-made food supply "platform" for busy people and connecting between home-cooker and people who need it. The solution for your hungry even in the busiest time.</p>
            <p><strong>"TRUST AND CHOOSE US TODAY - LET US SERVE YOU"</strong></p>
            <p><strong>YOU WILL NOT BE DISAPPOINTED!</strong></p>
                </p>                        
              </div>
            </div>

            <div class="col-md-4">
              <div class="nino-followUs">
                
                <div class="totalFollow"><span class="footer-span">Links</span> </div>
                
                <ul>
                  <li><a href="purchase.html" class=" InheritColor"><u>Feedback</u></a></li>
              <li><a href="copyright.html" class=" InheritColor"><u>Copyright</u></a></li>
              <li><a href="testimonials.html" class=" InheritColor"><u>Testimoials</u></a></li>
              <li><a href="sitemap.html" class=" InheritColor"><u>Sitemap</u></a></li>
            </ul>
              </div>
            </div>

            <div class="col-md-4">
              <div class="nino-followUs">
                  <div class="totalFollow"><span class="footer-span">Like & Follow Us on:</span> </div>
                  <div class="socialNetwork">
                    <span class="text"> </span>
                    <a href="" class="nino-icon"><i class="mdi mdi-facebook footer-icon"></i></a>
                    <a href="" class="nino-icon"><i class="mdi mdi-twitter footer-icon"></i></a>
                    <a href="" class="nino-icon"><i class="mdi mdi-instagram footer-icon"></i></a>
                    <a href="" class="nino-icon"><i class="mdi mdi-pinterest footer-icon"></i></a>
            
                    <a href="" class="nino-icon"><i class="mdi mdi-youtube-play footer-icon"></i></a

                  </div> <br/>
                </div>
                  <form action="send_newsletter.php" method="POST" class="nino-subscribeForm">
                  <div class="input-group input-group-lg">
                <input type="email" class="form-control" placeholder="Your Email" name="mail_to">
                <span class="input-group-btn">
                  <button class="btn btn-success" type="submit" value="Send Email">Subscribe</button>
                </span>
              </div>
                </form>
              
        <br />
    <br />
          </div>

        </div>
        <!-- hitwebcounter Code START -->
<a href="http://www.hitwebcounter.com" target="_blank">
<img src="http://hitwebcounter.com/counter/counter.php?page=6775808&style=0006&nbdigits=5&type=page&initCount=0" title="Home Remedies For Wrinkles" Alt="Home Remedies For Wrinkles"   border="0" >
</a>                                        <br/>
                                        <!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com" title="Count Stats Visits" 
                                        target="_blank" style="font-family: Arial, Helvetica, sans-serif; 
                                        font-size: 10px; color: #6E6A68; text-decoration: none ;"><em>Count Stats Visits                                        </em>
                                        </a>   
                            
        <div class="nino-copyright">Copyright &copy; 2016 <a target="_blank" href="http://www.ninodezign.com/" title="Ninodezign.com - Top quality open source resources for web developer and web designer">Ninodezign.com</a>. All Rights Reserved. <br/> MoGo free PSD template by <a href="https://www.behance.net/laaqiq">Laaqiq</a></div>
    </footer><!--/#footer-->

    <!-- Search Form - Display when click magnify icon in menu
    ================================================== -->
    <form action="" id="nino-searchForm">
      <input type="text" placeholder="Search..." class="form-control nino-searchInput">
      <i class="mdi mdi-close nino-close"></i>
    </form><!--/#nino-searchForm-->
  
    <!-- Scroll to top
    ================================================== -->
  <a href="#" id="nino-scrollToTop">Go to Top</a>
  
  <!-- javascript -->
  <script type="text/javascript" src="js/jquery.min.js"></script> 
  <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
  <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
  <script type="text/javascript" src="js/modernizr.custom.97074.js"></script>
  <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script type="text/javascript" src="js/unslider-min.js"></script>
  <script type="text/javascript" src="js/template.js"></script>

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!-- css3-mediaqueries.js for IE less than 9 -->
  <!--[if lt IE 9]>
      <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
    
</body>
</html> ';
   }
   else
   {
       echo '
        <!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ninodezign.com, ninodezign@gmail.com">
  <meta name="copyright" content="ninodezign.com"> 
  <title>Welcome</title>
  
  <!-- favicon -->
    <link rel="shortcut icon" href="images/ico/favicon.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
  
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css" />
  <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
  <link rel="stylesheet" type="text/css" href="css/unslider.css" />
  <link rel="stylesheet" type="text/css" href="css/template.css" />
  <link rel="stylesheet" type="text/css" href="css/Team.css" />

  
  <script src="js/3+1script.js"></script> 
</head>

<body data-target="#nino-navbar" data-spy="scroll" onload="checkCookies()">

  <!-- Header
    ================================================== -->
  <header id="nino-header">
    <div id="nino-headerInner">         
      <nav id="nino-navbar" class="navbar navbar-default" role="navigation">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Food Solutions</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="nino-menuItem pull-right">
            <div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
              <ul class="nav navbar-nav"> 
                <li><a href="blog.html">Blog</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
            <ul class="nino-iconsGroup nav navbar-nav">
              <li><a href="#"><i class="mdi mdi-cart-outline nino-icon"></i></a></li>
              <li><a href="login.html"><i class="mdi mdi-account-outline"></i></a></li>
              <!--<li><a href="login.html" class="nino-search"><i class="mdi mdi-magnify nino-icon"></i></a></li>-->
            </ul>
          </div>
        </div><!-- /.container-fluid -->
      </nav>

      <section id="nino-slider" class="carousel slide container" data-ride="carousel">
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <h2 class="nino-sectionHeading">
              <span class="nino-subHeading">Food Solutions</span>
              Thank you
            </h2>
            <a href="#" class="nino-btn">Learn more</a>
          </div>
          
        </div>      
      </section>
    </div>
  </header><!--/#header-->

  <!-- CONTAINS IN HERE-->
  <div class="container">
    <div class="row box"> 
    
    <h2 class="nino-sectionHeading">Thank you so much for subscription. We will send you new dishes, discount, free products information. </span>
    </h2>

      

    </div>
  </div>


  
    <!-- Footer
    ================================================== -->
    <footer id="footer">
		 <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="nino-followUs">
                <div class="row"><div class="totalFollow"><a href="index.html" class="InheritColor"><img src="images/ico/apple-touch-icon-152-precomposed.png" alt="Food Solutios Icon" style="width:33px;height:33px;">&nbsp;&nbsp;&nbsp;<span class="footer-span">Food Solutions</span></a> </div></div>
                  <!---->
                  
               
            <p>The home-made food supply "platform" for busy people and connecting between home-cooker and people who need it. The solution for your hungry even in the busiest time.</p>
            <p><strong>"TRUST AND CHOOSE US TODAY - LET US SERVE YOU"</strong></p>
            <p><strong>YOU WILL NOT BE DISAPPOINTED!</strong></p>
                </p>                        
              </div>
            </div>

            <div class="col-md-4">
              <div class="nino-followUs">
                
                <div class="totalFollow"><span class="footer-span">Links</span> </div>
                
                <ul>
                  <li><a href="purchase.html" class=" InheritColor"><u>Feedback</u></a></li>
              <li><a href="copyright.html" class=" InheritColor"><u>Copyright</u></a></li>
              <li><a href="testimonials.html" class=" InheritColor"><u>Testimoials</u></a></li>
              <li><a href="sitemap.html" class=" InheritColor"><u>Sitemap</u></a></li>
            </ul>
              </div>
            </div>

            <div class="col-md-4">
              <div class="nino-followUs">
                  <div class="totalFollow"><span class="footer-span">Like & Follow Us on:</span> </div>
                  <div class="socialNetwork">
                    <span class="text"> </span>
                    <a href="" class="nino-icon"><i class="mdi mdi-facebook footer-icon"></i></a>
                    <a href="" class="nino-icon"><i class="mdi mdi-twitter footer-icon"></i></a>
                    <a href="" class="nino-icon"><i class="mdi mdi-instagram footer-icon"></i></a>
                    <a href="" class="nino-icon"><i class="mdi mdi-pinterest footer-icon"></i></a>
            
                    <a href="" class="nino-icon"><i class="mdi mdi-youtube-play footer-icon"></i></a

                  </div> <br/>
                </div>
                  <form action="send_newsletter.php" method="POST" class="nino-subscribeForm">
                  <div class="input-group input-group-lg">
                <input type="email" class="form-control" placeholder="Your Email" name="mail_to">
                <span class="input-group-btn">
                  <button class="btn btn-success" type="submit" value="Send Email">Subscribe</button>
                </span>
              </div>
                </form>
              
        <br />
    <br />
          </div>

        </div>
        <!-- hitwebcounter Code START -->
<a href="http://www.hitwebcounter.com" target="_blank">
<img src="http://hitwebcounter.com/counter/counter.php?page=6775808&style=0006&nbdigits=5&type=page&initCount=0" title="Home Remedies For Wrinkles" Alt="Home Remedies For Wrinkles"   border="0" >
</a>                                        <br/>
                                        <!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com" title="Count Stats Visits" 
                                        target="_blank" style="font-family: Arial, Helvetica, sans-serif; 
                                        font-size: 10px; color: #6E6A68; text-decoration: none ;"><em>Count Stats Visits                                        </em>
                                        </a>   
                            
        <div class="nino-copyright">Copyright &copy; 2016 <a target="_blank" href="http://www.ninodezign.com/" title="Ninodezign.com - Top quality open source resources for web developer and web designer">Ninodezign.com</a>. All Rights Reserved. <br/> MoGo free PSD template by <a href="https://www.behance.net/laaqiq">Laaqiq</a></div>
    </footer><!--/#footer-->

    <!-- Search Form - Display when click magnify icon in menu
    ================================================== -->
    <form action="" id="nino-searchForm">
      <input type="text" placeholder="Search..." class="form-control nino-searchInput">
      <i class="mdi mdi-close nino-close"></i>
    </form><!--/#nino-searchForm-->
  
    <!-- Scroll to top
    ================================================== -->
  <a href="#" id="nino-scrollToTop">Go to Top</a>
  
  <!-- javascript -->
  <script type="text/javascript" src="js/jquery.min.js"></script> 
  <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
  <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
  <script type="text/javascript" src="js/modernizr.custom.97074.js"></script>
  <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script type="text/javascript" src="js/unslider-min.js"></script>
  <script type="text/javascript" src="js/template.js"></script>

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!-- css3-mediaqueries.js for IE less than 9 -->
  <!--[if lt IE 9]>
      <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
    
</body>
</html>';
   }
?>




   

