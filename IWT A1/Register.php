<!DOCTYPE html>
<html>
<head>
  <title>Sign Up Personal Account</title>
  <link rel="stylesheet" href="RegisterCSS.css">
  
  <script src="RegisterJS.js"></script>
  
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="stylesheet" href="normalize.css">
 
</head>
<body>
  <!--logo-->
			<div class="menu">
			
        <ul class="a">
            <div class="logo">
                <img src="LOGO PNG.png">
            </div>
            <button class="account"><a>Login</a></button>
            <button class="postads">Post Ads</button>
           
            <li class="b"><a href="Home.php" class="c"> Home</a></li>
            <li class="b"><a href="/news.html" class="c"> News</a></li>
            <li class="b"><a href="/register.html" class="c"> Contact</a></li>
            <li class="b"><a href="/about.php" class="c"> About Us</a></li>

        </ul>

		</div>
	
		</br></br></br></br></br></br>
  </hr>
	
	  
	  <h1><center>Create an account</center></h1>
	  <center>
			</br></br>
          <div>
            <label for="account-type">Account Type:</label>
            <br/><br/>
            <div>
              <input type="radio" id="personal" name="account-type" value="personal" checked required >
              <label for="personal">Personal Account</label>
            </div>
            <br/>
            <div>
              <input type="radio" id="business" name="account-type" value="business" required onclick="redirectToBusiness()">
              <label for="business">Seller Account</label>
            </div>
          </div>
      </center>
	  <br/><br/>
	  
	  </hr>
  <div class="container">
    <div class="left-side">
      
   
     
        <form action="SubmitRegData.php" method="POST" onsubmit="return checkPassword()" >
          <div>
            <p style="color: white;">Please fill in this form to create a personal account.</p>
            <br/>
            <label for="firstname"></label>
            <input type="text" placeholder="First Name" id="firstname" name="fname" required><br/>
			
            <label for="lastname"></label>
            <input type="text" placeholder="Last Name" id="lastname" name="lname" required><br/>
			
            <label for="phno"></label>
            <input type="text" placeholder="Phone Number" name="phno" pattern="[0-9]{10}" required><br/>
			
            <label for="email"></label>
            <input type="text" placeholder="Enter Email" name="email" pattern="[a-z0-9._+-]+@[a-z0-9._]+.[a-z]{3}"required><br/>
			
            <label for="psw"></label>
            <input type="password" id="psw" placeholder="Enter Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" required><br/>
			
            <label for="psw-comfirm"></label>
            <input type="password" id="confrmpsw" placeholder="Confirm Password" name="conpsw" required><br/>
			
			 <p style="color: white;">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a></p><br/>
			
			<input  type="checkbox" id="Privacycheckbox" onclick="enablebutton()"><p style="color: white;">Accept privacy policy and terms</p><br/><br/>
			
           
          </div>
         
            <button type="submit" class="button1" id="submitbttn" value="Submit" disabled>Sign Up</button>
       
        </form>
     
    </div>
	
    <div class="right-side">
      
		<br/><br/><br/><br/>
	  	<div class="row2">

  <div class="colright">
  <a href="https://www.facebook.com/login"><button class="button2 facebook" ><i></i><span>Sign in with Facebook</span></button></a><br/><br/>
  <a href="https://twitter.com/login"><button class="button2 twitter" ><i></i><span>Sign in with Twitter</span></button></a><br/><br/>
  <a href="https://accounts.google.com/Login"><button class="button2 google" ><i></i><span>Sign in with Google</span></button></a>
  </div>
</div>
      
    </div>
  </div>

  <footer>
    <div class="fottercontainer">
      <div class="footer-content">
        <p>&copy; 2023  TRADEL. All rights reserved.</p>
        <ul class="footer-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Privacy Policy</a></li>
         
        </ul>
        <div class="social-media-links">
          <a href="https://www.facebook.com/login"><img src="img/facebook.png" alt="Facebook"></a>
          <a href="https://twitter.com/login"><img src="img/twitter.png" alt="Twitter"></a>
          <a href="https://www.instagram.com/login/"><img src="img/instagram.png" alt="Instagram"></a>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
