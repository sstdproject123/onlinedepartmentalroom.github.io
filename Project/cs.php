<?php
session_start();
require_once('checksession.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="Width=device-width,initial-scale=1.0">
	<title>CONTACT US</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.header{
			min-height: 50vh;
			width: 100%;
			background-image: /*linear-gradient(rgba(4,9,30,.1),rgba(4,9,30,.7)),*/url(image/cs.jpg); 
			background-position: center;
			background-size: cover;
			position: relative;
		}
		nav{
			display: flex;
			padding: 2% 6%;
			justify-content: space-between;
			align-items: center;

		}
        nav img{
        	width: 150px;
        }
        .nav-links ul li{
        	list-style: none;
        	display: inline-block;
        	padding: 8px 12px;
        	position: relative;
        } 

         nav ul li:hover{
          background-color: #ffcccb;
          border-radius: 10px;
        }
        
        .nav-links ul li a{
            color: black;
            text-decoration: none;
            font-size: 14px;
        }
        .nav-links ul li::after{
         	content: '';
         	width:0%;
         	height:2px;
         	background: #f44336;
         	display: block;
         	margin:auto;
         	transition: 0.5s;
        }
        .nav-links ul li:hover::after{
           width: 100%;
        }
        nav .fa{
        	display: none;
        }
        @media(max-width: 700px){
        	.header{
        		min-height: 30vh;
        		width: 100%;
        	}        	
        	.nav-links ul li{
        		display: block;
        		height: 100%;
        	}
        	.nav-links{
        		position: fixed;
        		background: #8b008b;
        		height: 100vh;
        		width: 200px;
        		top: 0;
        		right: -200px;
        		text-align: left;
        		z-index: 2;
        		transition: 1s;
        	}
        	nav .fa{
        		display: block;
        		color: #fff;
                margin: 10px;
                font-size: 22px;
                cursor:pointer; 
        	}
            nav ul li:hover{
                background-color: transparent;
            }
        }
         .cta{
            /*margin: 100px auto;
            width: 80%;
            /*background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(images/banner2.jpg);*/
            /*background-position: center;
            background-size: cover;
            border-radius: 10px;
            text-align: center;*
            padding-top: 50px ;*/
            width: 80%;
        	margin: auto;
        	padding-top: 100px;
        	position: relative;
        }
        .cta h1{
             color: black;
             /*margin-bottom: 40px;
             padding: 0;*/
            font-size: 36px;
        	font-weight: 600;
        }
        .cta p{
             color: black
             margin-bottom: 40px;
             padding: 0;
        }
        .location{
            width: 100%;
            margin: auto;
            padding: 80px 10px;
        }
        .location iframe{
            width: 100%;
        }
        .contact-us{
            width: 80%;
            margin: auto;
        }
        .contact-col{
            flex-basis: 48%;
            margin-bottom: 30px;
        }
        .contact-col div{
            display: flex;
            align-items: left;
            margin-bottom: 40px;
        }
        .contact-col div .fa{
            font-size: 28px;
            color: #f44336;
            margin: 10px;
            margin-right: 30px;
        }
        .contact-col div p{
            padding: 0;
        }
        .contact-col div h5{
            font-size: 20px;
            margin-bottom: 5px;
            color: #555;
            font-weight: 400;
        }
        .contact-col textarea{
            width: 100%;
            padding: 15px;
            margin-bottom: 17px;
            outline: none;
            border: 1px solid #ccc;
            box-sizing: border-box;
            resize: vertical;
        }
        .button-link{
            width: 200px;
            padding: 5px 10px;
            text-align: center;
            margin: 10px 30px;
            border-radius: 25px;
            font-weight: bold;
            border: 2px solid #009688;
            background: transparent;
            color: black;
            cursor: pointer;
            font-size: 20px;
            position: relative;
            z-index: 1;
        }
         .button-link span{
            background: #009688;
            height: 100%;
            width: 0;
            border-radius: 25px;
            position: absolute;
            left: 0;
            bottom: 0;
            z-index: -1;
            transition: 0.5s;
        }
        .button-link:hover span{
            width: 100%;
        }
        .button-link:hover{
            border: none;
            border:2px solid #ee6363;
            background: #ee6363;
         }

        #mail{
            text-decoration: none;
        }

         @media (max-width: 700px){
         	.button-link{
         		width: 100px;
         	}
         }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    
</head>
<body>
	<section class="header">
 	    <nav>
            <a href="homepage.php"><img src="image/LOGO1.png"></a>
 		    <div class="nav-links" id="navLinks">
 			    <i class="fa fa-window-close-o" onclick="hideMenu()"></i>
 			    <ul>
                 <li><a href="homepage.php" ><b>HOME</b></a></li>
 				    <li><a href="sn.php" ><b>SCHEDULE & NOTICE</b></a></li>
 				    <li><a href="classlink.php" ><b>CLASSROOM</b></a></li>
 				    <li><a href="bs.php" ><b>BOOKS & SYLLABUS</b></a></li>
 				    <li><a href="lib.php"><b>LIBRARY</b></a></li>
 				    <li><a href="npyq.php" ><b>NOTES & PAST YEARS' QUESTIONS</b></a></li> 				    
 			    </ul>
 		    </div>
 		    <i class="fa fa-bars" onclick="showMenu()"></i>
 	    </nav>
    </section>
    <!--------contact us-------->
    <section class="cta">
        <h1><b><center>CONTACT US</center></b></h1>
        <br>
        <section class="location">
            <iframe src="https://maps.google.com/maps?q=kalyani%20mahavidyalaya&t=&z=13&ie=UTF8&iwloc=&output=embed" width="700" height="450"
            style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </section>
        <section class="contact-us">
            <div class="row">
                <div class="contact-col">
                    <div>
                        <i class="fa fa-home"></i>
                        <span>
                          <h5>Kalyani Mahavidyalaya, City Centre Complex, Kalyani, Nadia</h5>
                          <p>PIN: 741235<br>West Bengal, India</p>
                        </span>
                    </div>
                </div>
                <div class="contact-col">
                    <div>
                        <i class="fa fa-phone"></i>
                        <span>
                          <h5>+033 2582 4206</h5>
                          <p>Monday to Saturday, 10AM to 6PM</p>
                        </span>
                    </div>
                </div>
                <div class="contact-col">
                    <div>
                        <i class="fa fa-envelope-o"></i>
                        <span>
                            <a id="mail" href="https://mail.google.com" target="_blank"><h5>dept.kmcs@gmail.com</h5></a>
                            <p>Email us your query</p>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!---------javascript for toggle menu---------->
    <script>
 	  var navLinks=document.getElementById("navLinks");
 	  function showMenu(){
 		navLinks.style.right = "0";
 	  }
 	   function hideMenu(){
 		navLinks.style.right="-200px";
 	  }
    </script>
</body>
</html>