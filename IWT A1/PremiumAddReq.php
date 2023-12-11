<!DOCTYPE html>
<html>
	<head>
			<title>Premium advertisement Request</title>

		<!--CSS Conection-->
		<link rel="stylesheet" href="HomeStyleCSS.css">

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="stylesheet" href="normalize.css">
	
		<link rel="stylesheet" href="PrAddStyle.css">
	
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
			
			<div class="topic">
			<center><h1 class="heading" style="color: white;">Premium Add Request</h1></center>
			<br/><br/>
			</div>
			<hr/>
			<br/>
			<div class="form-box">
			<div class="add-form">
				
					<form class="form-group" action="SubmitAddData.php" method="POST" >
					
					  <label for="topic">Topic for Ad:</label>
					  <input type="text" name="topic" id="topic" required><br>
					  
					  <label for="cover_image">Upload Cover Image:</label>
					  <input type="file" name="cover_image" id="cover_image" required><br>

					  <label for="description">Description:</label>
					  <textarea name="description" id="description" rows="4" required></textarea><br>

					  <br/><label for="Promotion-type">Select Promotion Type
						  <select name="promotion_type">
							<option value="">(select one)</option>
							<option value="Homepage Banne">Homepage Banner</option>
							<option value="op Search Results">Top Search Results</option>
							<option value="Popup Advertisement">Popup Advertisement</option>
							<option value="Highlighted Property">Highlighted Property</option>
						  </select>
						</label><br/>

					  <label for="name">Seller Name:</label>
					  <input type="text" name="name" id="name"  required><br>

					  <label for="email">Email:</label>
					  <input type="email" name="email" id="email" pattern="[a-z0-9._+-]+@[a-z0-9._]+.[a-z]{3}" required><br>

					  <label for="phone">Phone Number:</label>
					  <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" required><br>

					  <button type="submit" value="Submit">Submit</button>
				</form>
	
			</div>
			</div>
  <hr/>
		
  <footer>
	<div class="container">
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