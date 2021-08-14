<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="Width=device-width,initial-scale=1.0">
	<title>STUDENT LOGIN & REGISTRATION PAGE</title>
	<style type="text/css">
		*{
            margin: 0;
            padding: 0;
		}
		body{
			height: 100%
			width: 100%; 
			/*background-color: #34495e;*/
			background-image: url(image/login1.jpg);
			background-position: center;
			background-size: cover;
			min-height: 110vh;
			display: flex;
		}
		.form-box{
			width: 380px;
			height: 580px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background: /*#191919*/transparent;
            text-align: center;
            overflow: hidden;
		}
        .form-box:before,.form-box:after{
        	content: '';
        	height: 100px;
        	width: 100px;
        	background: /*linear-gradient(135deg,black,grey);*/linear-gradient(235deg,#89ff00,#060c21,#00bcd4);
        	position: absolute;
        	z-index: -1;
            animation: stroke 2s linear;
            animation-fill-mode: forwards;
            filter: blur(200px);
        }
        .form-box::before{
        	left: 0;
        	top: -60px;
        }
        .form-box:after{
        	right: 0;
        	bottom: -60px;
        }
        @keyframes stroke{
        	0%{
        		height: 8px;
        		width: 0px;
        	}
        	50%{
        		height: 8px;
        		width: 100%;
        	}
        	100%{
        		height: 100%;
        		width: 100%;
        	}
        }
        .button-box{
        	width: 220px;
        	margin: 35px auto;
        	position: relative;
        	border-radius: 30px;
        }
        .toggle-btn{
        	color: #ffffff;
        	padding: 10px 30px;
        	cursor: pointer;
        	background: transparent;
        	border: 0;
        	outline: none;
        	position: relative;
        	border: 2px solid #3498db;
        	border-radius: 24px;
        }
        .toggle-btn:hover{
            background: #3498db;
        }
        .input-group1{
        	top: 180px;
        	position: absolute;
        	width: 365px;
        	transition: .5s;
        }
        .input-group2{
        	top: 180px;
        	position: absolute;
        	width: 370px;
        	transition: .5s;
        }
        .input-field{
        	border: 0;
			background: none;
			display: block;
			margin: 20px auto;
			text-align: center;
			border: 2px solid #3498db;
			padding: 14px 10px;
			width: 200px;
			outline: none;
			color: white;
			border-radius: 24px;
			transition: 0.25s;
        }
        .input-field:focus{
        	width: 280px;
        	border-color: #2ecc71;
        }
        .submit-btn{
        	border: 0;
			background: none;
			display: block;
			margin: 20px auto;
			text-align: center;
			border: 2px solid #2ecc71;
			padding: 14px 35px;
			width: 125px;
			outline: none;
			color: white;
			border-radius: 24px;
			transition: 0.25s;
			cursor: pointer; 
        }
        .submit-btn:hover{
        	background: #2ecc71;
            color:black;
        }
        #login{
        	left: 50px;
        }
        #register{
        	left: 450px;
        }
        @media(max-width: 700px){
        	.form-box{
        		width: 300px;
        		height: 550px;
        	}
        	.input-group1{
        		width: 285px;
        	}
        	.input-group2{
        		width: 285px;
        	}
        	.input-field:focus{
        		width: 260px;
        	}
        }
	</style>
</head>
<body>
		<div class="form-box">
			<div class="button-box">
				 <!---<div id="btn"></div>--->
                 <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                 <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <form action="signin.inc.php" method="post" id="login" class="input-group1">
            	<input type="text" class="input-field" name="uid" placeholder="Enter User Id" required>
                <input type="password" class="input-field" name="pwd" placeholder="Enter Password" required>
                <button type="submit" class="submit-btn" name="login-submit"><b>Log in</b></button>
            </form>
            <form action="signup.inc.php" method="post" id="register" class="input-group2">
            	<input type="text" class="input-field" name="uname" placeholder="Enter Name" required>
            	<input type="text" class="input-field" name="uid" placeholder="Enter User Id" required>
				<input type="text" class="input-field" name="emailid" placeholder="Enter Email Id" required>
                <input type="password" class="input-field" name="pwd" placeholder="Enter Password" required>
                <input type="password" class="input-field" name="pwd-confirm" placeholder="Confirm Password" required>
                <button type="submit" class="submit-btn" name="register-submit"><b>Register</button>
            </form>
		</div>
		<script>
			var x=document.getElementById("login");
            var y=document.getElementById("register");
            var z=document.getElementById("btn");
            function register()
            {
            	x.style.left="-400px";
            	y.style.left="50px";
            	z.style.left="110px";
            }
            function login()
            {
            	x.style.left="50px";
            	y.style.left="450px";
            	z.style.left="0px";
            }

            window.history.forward();
		</script>


</body>
</html>