<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/jpg" href="images/logo.jpg">
    <title>
        About
    </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--google font-->
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <!--footer stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/footer-distributed-with-address-and-phones.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="font-family: Lobster;">
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav" id="slidingmenu">
                <li class="sidebar-brand" style="margin-bottom: 60px;">
                    <a href="#" style="font-size: 40px;">
                        Menu
                    </a>
                </li>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="events.php">Events</a>
                </li>
                <li>
                    <a href="contacts.php">About Us</a>
                </li>
                <li>
                    <a href="about.php">About IIITM</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" id="menu-toggle" style="color: white;"><img src="images/menulogo.jpg" id="menuLogo"></a>
                    </div>
                </div>
            </div>
        </div>
     <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

       <form action="conn.php" class="form-inline" id="loginPortal">
                
               <?php require 'coreinc.php';
               if(!isset($_SESSION['id'])){ ?> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#abc" id="button"> Login </button>
        <?php } ?>
        </form>


        <?php 
               if(isset($_SESSION['id'])){ ?>  <form action="logout.php" method="POST" id="loginPortal">
               <button type="submit" class="btn btn-danger" id="button"> Logout </button>
        </form>     <?php } ?>  

            <?php
               if(!isset($_SESSION['id'])){ ?>  
         <form action="anew.html" class="form-inline" id="loginPortal" method="POST">
               <button type="submit" class="btn btn-primary" id="button"> Sign up </button>
        </form> 
         <?php } ?>      
        
        <!--contact us content-->
        <div class="mainContent">
        <img src="images/iiitm.png" style="width: 100px; height: 140px;">
        <header>
            <h2>ABV Indian Institute Of Information Technology, Gwalior</h2>
        </header>
        <hr>
        <p id="aboutcontent" class="paragraph">
            Atal Bihari Vajpayee-Indian Institute of Information Technology and Management (ABV-IIITM), Gwalior is an institute committed to taking academics to unprecedented levels of brilliance and efficiency. In this generation of excellence and specialization we aim at achieving an education standard that is comparable to the best globally. Academics at our institute are focussed on advancement of knowledge and systematic understanding of course materials and their application areas.With our vision of “Global Excellence in Knowledge Economy” we are committed to foster an academic environment of quality in areas of teaching and research. Our stress is not just on academic brilliance but knowledge that is pervasive in areas of emerging technologies and concurrent business processes. We through our learning and research programs aim at building an information technology and commercial infrastructure whose benefits percolate even to grass root levels.
        </p>
        <h4>A Quality Institute for Academics</h4>
        <p id="aboutcontent" class="paragraph">
            ABV-IIITM being a premier institute of higher studies in Computer Science and Engineering, and Business Administration has never compromised on the quality of its education or grooming of its students. This institute has constantly striven for synchronizing emerging technologies with co-occurrent business solutions. Scholars passing out of this institute are confident of overcoming the toughest challenges in areas of IT and management.

            IIITM is an effort of MHRD (Ministry of Human Resource Development), Government of India for creating professionals who are equally adept in handling concerning issues in IT and business administration. We not only believe in making our students superior scholars but superlative human beings. Ours is a complete institute in the truest sense of the term, endowed with facilities and an environment that is incomparable.

        </p>
        <h4>A Serene Ambiance for Comprehensive Grooming</h4>
        <p id="aboutcontent" class="paragraph">
            This academy at the foothills of Gwalior fort abounds in greenery and offers an idyllic tranquil surrounding needed for a comprehensive development of mind and body. Equal stress is put on sports and other recreational activities together with learning and research for all-round growth of character and leadership qualities. Active support is provided by faculty and staff members to students to pursue their goals. Our campus is complete in every respect and it is a second home to our learners and teachers.
        </p>
        <p id="aboutcontent" class="paragraph">
            ABV-IIITM stands out among institutes of its kind and aims at establishing an ideal learning ambiance for candidates who not only are desirous of meeting the never-ending challenges of evolving technologies and business processes but also becoming responsible citizens and caring human beings. 
        </p>
        </div>

        <!--modal-->
<div class="modal fade" id="abc">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title" style="text-align: center; font-style: Georgia; font-size: 20px;">Log in!</h>
                     </div>
                     <div class="modal-body">
                        <form action="conn.php" method="POST">
                            UserName:<br><input type="text" name="username" id="element-3" class="form-control input-lg" placeholder="Enter Name"><br>
                            Password:<br><input type="password" name="password" id="element-3" class="form-control input-lg" placeholder="Enter password"><br>
                    
                     </div>

                     <div class="modal-footer">
                     
                        <a href="" class="btn btn-default" data-dismiss="modal">Close</a>
                        <input type="Submit" value="Next" class="btn btn-primary">
                        </form>
                     </div>
                </div>
            </div>
        </div>
    </div>

         

<!--footer-->
<div class="footer two">
                    <h3>Keep Connected</h3>
                    <ul>
                        <li><a class="fb" href="#"><i></i>Like us on Facebook</a></li>
                        <li><a class="fb1" href="#"><i></i>Follow us on Twitter</a></li>
                        <li><a class="fb2" href="#"><i></i>Add us on Google Plus</a></li>
                        <li><a class="fb3" href="#"><i></i>Follow us on Dribbble</a></li>
                    </ul>
                </div>
<footer class="mainFooter">
<img src="images/logo copy.png" style="height: 80px; width: 80px;"><br>
    <span class="glyphicon glyphicon-check"></span>
        All rights reserved By Technocrest&copy;2016.
</footer>




<video autoplay loop> 
  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->

  
<source src="assets/video/bgvid.mp4" type="video/mp4">
</video>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

    <!--video background-->
 

</body>

</html>
