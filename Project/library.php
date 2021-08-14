<?php
session_start();
require_once('checksession.php');
require_once('admincheck.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="Width=device-width,initial-scale=1.0">
    <title>LIBRARY</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        .header{
            min-height: 50vh;
            width: 100%;
            background-image: /*linear-gradient(rgba(4,9,30,.1),rgba(4,9,30,.7)),*/url(image/lib1.jpg); 
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
          background-color: none;
          border-radius: 10px;
        }
        
        .nav-links ul li a{
            color: white;
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
                min-height: 20vh;
                width: 100%;
            }           
            .nav-links ul li{
                display: block;
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
        }

        .notice button{
            margin-left: 400px;
            font-size: 16px;
        }

        .notice h3{
            font-size: 36px;
            font-weight: 600;
            padding: 40px ;
        }

        .form-group{
            padding-left: 400px;
            padding-bottom: 30px;
        }

        label{
            margin-bottom: 50px;
        }

        .form-control, .form-control1, .form-control2,.form-control3{
            padding: 20px;
        }
         
        .form-control{
             margin-left: 24px; 
        }
        
        .form-control1{
           margin-left: 4px; 
        }

        .form-control2{
           margin-left: 36px; 
        }

        .form-control3{
           margin-left: 30px; 
        }

        .form-control:hover{
            box-shadow: 0 0 20px 0px rgba(255,255,0,0.7);
        }

        .form-control1:hover{
            box-shadow: 0 0 20px 0px rgba(255,255,0,0.7);
        }

        .form-control2:hover{
            border-color: black;
            border-width: 2px;
            box-shadow: 0 0 20px 0px rgba(255,255,0,0.7);
        }

        .form-control3:hover{
            border-color: black;
            border-width: 2px;
            box-shadow: 0 0 20px 0px rgba(255,255,0,0.7);
        }


        .btn{
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

        .btn span{
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
         
        .btn:hover{
            border: none;
            border:2px solid #ee6363;
            background: #ee6363;
        }

        .btn:hover span{
            width: 100%;
        }

        @media (max-width: 700px){
            .form-group{
                padding-left: 100px;
                padding-bottom: 30px;
            }
            .form-control3{
                margin-left: 128px; 
            }

            .notice button{
                margin-left: 150px;
                font-size: 16px;
            }
             
        }

    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="header">
        <nav>
            <a href="adminpanel.php"><img src="image/LOGO1.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-window-close-o" onclick="hideMenu()"></i>
                <ul>   
                    <li><a href="adminpanel.php" ><b>HOME</b></a></li>
                    <li><a href="unicode.php" ><b>PASSWORD</b></a></li> 
                    <li><a href="quotes.php" ><b>QUOTES</b></a></li> 
                    <li><a href="notice.php" ><b>NOTICE</b></a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>
    <!--------create notice-------->
    <section class="notice">
    <center><h3>ADD TO LIBRARY</h3></center>
    <br>
    <div>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label>BOOK NAME :</label>
    <input type="text" class="form-control" name="bname" placeholder="Enter book name"required>
    </div>
    <div class="form-group">
    <label>BOOK AUTHOR :</label>
    <input type="text" class="form-control1" name="bauthor" placeholder="Enter author name"required>
    </div>
    <div class="form-group">
    <label>SEMESTER :</label>
    <input type="text"name="sem" class="form-control2" placeholder="Enter semester"required>
    </div>
    <div class="form-group">
    <label>BOOK LINK :</label>
    <input type="text" name="link" class="form-control3" placeholder="Enter link"required>
    </div>
    <button type="submit" class="btn" name="upload"><span></span>UPLOAD</button>
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