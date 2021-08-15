<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Loginform</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="slide.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="Images/travelIcon2.png">
</head>
<body>
<video autoplay muted loop>
<source src="https://vod-progressive.akamaized.net/exp=1606647088~acl=%2A%2F1309288242.mp4%2A~hmac=ad94dfd3d8f43635b7fff19a8c4170db44c28cfe8c2bf261c714bb8cf46c790f/vimeo-prod-skyfire-std-us/01/1496/13/332483109/1309288242.mp4?filename=Splash+-+23011.mp4">
</video>
<div class="cont">
<div class="login-form">
    <div class="form sign-in">
<form name="myform" action="slidelogin.php" method="post" >
<?php include('errors.php'); ?>      
<h2>Sign In</h2>
      <div class="input-group">
			<label>
			<input type="text" style="text-align:center;" placeholder="Enter Username" name="username" ><br>
                        </label>
		</div>
		<div class="input-group">
			<label>
			<input type="password" style="text-align:center;" placeholder="Enter Password" name="password"><br>
                           </label>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user" >Login</button>
		</div>
	
      <p class="forgot-pass">Forgot Password ?</p>

      <div class="social-media">
        <ul>
	<a href="https://www.facebook.com/">
          <li><img src="facebook.png"></li>
	</a>
	<a href="https://twitter.com/explore">
          <li><img src="twitter.png"></li>
	</a>
	<a href="https://accounts.google.com/ServiceLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&osid=1&service=mail&ss=1&ltmpl=default&rm=false&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
          <li><img src="google.png"></li>
	</a>
	<a href="https://www.instagram.com/accounts/login/?hl=en">
          <li><img src="instagram.png"></li>
	</a>
        </ul>
      </div>
    </div>
</div>
</form>
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New<br> here?</h2>
          <p>Sign up and <br>discover great <br>amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <form action="slidelogin.php" method="POST" >
		<?php include('errors.php'); ?>
<div class="form sign-up">
        <h3>Sign Up</h3>
			<div class="input-group">
			<label><span>Name</span>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</label>
</div>
		<div class="input-group">
			<label>
                    <div class="mail">
                         <span>Email</span>
			<input type="email" name="email" value="<?php echo $email; ?>"></div>
                          </label>
		</div>
		<div class="input-group">
			<label><span>Password</span>
			<input type="password" name="password_1">
                         </label>
		</div>
		<div class="input-group">
			<label><span>Confirm Password</span>
			<input type="password" name="password_2">
                          </label>
		</div>
		<div class="input-group">
			<button type="submit" class="submitup" name="reg_user">Sign Up Now</button>
		</div>
		
	
</form>
</div>
</div>
<script type="text/javascript" src="slidejs.js">
</script>

</body>
</html>