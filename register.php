<?php
    require('sql_connect.php');
    require('core.inc.php');
    if(!log_in()){
        if(isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['re_password']) && isset($_POST['firstname']) && isset($_POST['lastname'])){
            $username = strtolower($_POST['username']);
            $email = $_POST['email'];
            $password = $_POST['password'];
            $re_password = $_POST['re_password'];
            $password_hash = md5($password);
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            if(!empty($email) && !empty($username) && !empty($password) && !empty($re_password) && !empty($firstname) && !empty($lastname)){
                if($password!=$re_password){
                    $var = 'Passwords do not match.';
                }
                else{
                    $query1 = "select username from users where username='$username'";
                    $query1_run = mysqli_query($conn,$query1);
                    if(mysqli_num_rows($query1_run)>=1){
                        $var = 'A user with that username already exist';
                    }
                    else{
                        $query_new = "insert into users values('','".mysqli_real_escape_string($conn,$email)."','".mysqli_real_escape_string($conn,$username)."','".mysqli_real_escape_string($conn,$password_hash)."','".mysqli_real_escape_string($conn,$firstname)."','".mysqli_real_escape_string($conn,$lastname)."')";
                        if($query_new_run = mysqli_query($conn,$query_new)){
                        ?>
                            <form action="index.php" method="POST" id="trigger">
                                <input type="hidden" name="temp" value="you've been registered successfully,please login to continue">
                            </form>
                            <script>document.getElementById('trigger').submit();</script>
                        <?php
                        }
                        else{
                            $var = 'Sorry , we could\'t register you at this moment .Try again later';
                        }
                    }
                }
            }
            else{
                $var = 'All fields required';
            }
        }
?>
<!DOCTYPE html>
<html>
<head>
<title>sign up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bubble SignUp Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
        <h1>Sign Up</h1>
        <h2 style="color:white;text-align:center;"><?php if(isset($var)){ echo $var; }?></h2>
		<div class="main-agileinfo">
			<div class="agileits-top"> 
				<form action="register.php" method="POST">
					<input class="text" type="text" name="firstname" value="<?php if(isset($firstname)){ echo @$firstname; }?>" placeholder="firstname"  required="">	 
					<input class="text" type="text" name="lastname" value="<?php if(isset($lastname)){ echo $lastname; }?>" placeholder="lastname" required="">
					<input class="text email" type="email" name="email" value="<?php  if(isset($email)){ echo $email; }?>" placeholder="Email" required="">
					<input class="text" type="text" name="username" value="<?php  if(isset($username)){ echo $username; }?>" placeholder="Username" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="re_password" placeholder="Confirm Password" required="">
					<div class="wthree-text">  
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span> 
						</label>  
						<div class="clear"> </div>
					</div>   
					<input type="submit" value="SIGNUP">
				</form>
				<p>Already have an account? <a href="http://127.0.0.1/firstfile/user_login/index.php"> SIGN IN!</a></p>
			</div>	 
		</div>	
		<!-- copyright -->
		<div class="w3copyright-agile">
				<p>made with <span style = "color: red;">❤️</span> by <strong><a style="text-decoration:none;" class="link" href="https://virus-attack.github.io/my-website/">SURYA TEJA ACHANTA</a><strong> 2018. All Rights Reserved</p>
		</div>
		<!-- //copyright -->
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
<?php
}
    else{
        $var = 'you\'re already logged in';
    }
?>