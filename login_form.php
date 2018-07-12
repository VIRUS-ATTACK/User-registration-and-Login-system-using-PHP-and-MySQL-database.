<?php
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = strtolower($_POST['username']);
        $password= $_POST['password'];
        $password_hash = md5($password);
        if(!empty($username) && !empty($password)){
            $query = "select id from users where username = '".mysqli_real_escape_string($conn,$username)."' and password = '".mysqli_real_escape_string($conn,$password_hash)."'";
            $query_run = mysqli_query($conn,$query);
            if(mysqli_num_rows($query_run)==NULL){
                $var =  'username or password may be incorrect';
            } 
            else{
                $user_id = mysqli_fetch_assoc($query_run);
                $_SESSION['user_id'] = $user_id['id'];
                header('Location:index.php');
            }
        }
        else{
            $var = 'You\'re supposed to fill all the fields';
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>SIGN IN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="php SignUp,Signin Form template Responsive,surya teja achanta, virusurya,virusattack" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font --> 
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>SIGN IN</h1>
		<br><h2 style="color:white;text-align:center;"><?php if(isset($var)){ echo $var; }?></h2>
		<br><h2 style="color:white;text-align:center;"><?php if(isset($_POST['temp'])){ echo $_POST['temp']; }?></h2>
		<div class="main-agileinfo">
			<div class="agileits-top"> 
					<form action="<?php echo $current_name ?>" method="POST">
					<input class="text" type="text" name="username" placeholder="Username" required=""><br>
					<input class="text" type="password" name="password" placeholder="Password" required=""><br>
					<div class="wthree-text">  
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span> <br>
						</label>  
						<div class="clear"> </div>
					</div>   
					<input type="submit" value="SIGN IN">
				</form>
				<p>Don't have an Account? <a href="http://127.0.0.1/firstfile/user_login/register.php"> Create an account!</a></p>
			</div>	 
		</div>	

		<div class="w3copyright-agile">
                <p>made with <span style = "color: red;">❤️</span> by <strong><a style="text-decoration:none;" class="link" href="https://virus-attack.github.io/my-website/">SURYA TEJA ACHANTA</a><strong> 2018. All Rights Reserved</p>
		</div>

		<ul class="w3lsg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>	
	<!-- //main --> 
</body>
</html>
