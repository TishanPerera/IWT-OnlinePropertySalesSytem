
<!DOCTYPE html>
<html>
	<head>
			<title>Property Sales System</title>

		<!--CSS Conection-->
		<link rel="stylesheet" href="NewStyle.css">
		<!--JS Conection-->
		
		
		<!--header file and css Conection-->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>TRADEL</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="stylesheet" href="normalize.css">
		
		<link rel="stylesheet" href="SellerSupportCSS.css">
		
	</head>
	<body>
		<!--Navigation menu bar-->
			<div class="menu">
			
        <ul class="a">
			<!--logo-->
            <div class="logo">
                <img src="img/LOGO PNG.png">
            </div>
            <button class="account"><a>Login</a></button>
            <button class="postads">Post Ads</button>
            
            <li class="b"><a href="Home.php" class="c"> Home</a></li>
            <li class="b"><a href="/news.html" class="c"> News</a></li>
            <li class="b"><a href="/register.html" class="c"> Contact</a></li>
            <li class="b"><a href="/about.php" class="c"> About Us</a></li>
		</ul>
		</div>
		
		<hr/>
			<div class="topic">
			<center><h1 class="heading" style="color: white;">Seller Support</h1></center>
			<br/><br/>
			</div>
			<hr/>
		
		<div class="row1">
		<div class="box1" >
			<h2 style="font-family: Verdana; ">Hi! What can we help you With ?</h2>
			<div>
			
			<img class="img" src="img/support.png"  width="200" height="200" alt="image">
		
			</div>
		</div>
		
		</div>
		
		<hr/>
		 <div class="container">
		<div class="left-side">
				<center><h3>If You have any Question , Send it to Us</h3></center>
				
				<div class="form-box">
					<div class="add-form">
					<form class="form-group"  method="POST" >

					<input type="hidden" name="id" value="<?php echo $id; ?> ">

					 <div class="row">
                <label for="name">Seller Name</label>
                <input type="text" id="name" name="name" value="<?php echo $name; ?> " required>
            </div>
            <div class="row">
                <label for="email">Seller Email</label>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>"pattern="[a-z0-9._+-]+@[a-z0-9._]+.[a-z]{3}" required>
            </div>
            <div class="row">
                <label for="phone">Seller Phone</label>
                <input type="text" id="phone" name="phone" value="<?php echo $phone; ?> "pattern="[0-9]{10}" required>
            </div>
            <div class="row">
                <label for="message">Message</label>
				<input type="text" name="message" id="message" value="<?php echo $message; ?> "required>
            </div>

					  <button type="submit">Submit</button>
					  <a href="/IWT A1/SellerSupport.php"><button class="button1">Cancel</button></a>
					</form>
					</div>
				</div>
		</div>
		<div class="right-side">
			<div class="box2" >
			<h2 style="font-family: Verdana; ">FAQ</h2>
			<p class="Qus">Q-How to post a premium advertisement?</p>
			<p class="Ans">A-Plaase visit the premium add req page<a href="premiumAddReq.html"> here</a></p><br/>
			<p class="Qus">Q-What are the requirements for selling a property online?</p>
			<p class="Ans">A-Provide accurate property details and upload high-quality photos.</p><br/>
			<p class="Qus">Q-Can I negotiate the selling price of my property online?</p>
			<p class="Ans">A-Yes, online negotiations are possible.</p>
			</div>
		</div>
		</div>
		<hr/>
		<center>
			<div class="msgtable">
        <h2>List of Messages<br/></h2>
        <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Seller Name</th>
                    <th>Seller Email</th>
                    <th>Seller Phone</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['phone']}</td>
                            <td>{$row['message']}</td>
                           
                            <td>
                                <a class='btn btn-primary' href='/IWT A1/EditSellerMsg.php?id={$row['id']}' >Edit</a>
                                <a class='btn btn-danger' href='/IWT A1/DeleteSellerMsg.php?id={$row['id']}'>Delete</a>
                            </td>
                        </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
		</center>
		</div>
    </div>
	
	<br/>
	<hr/>
		<!--Footer -->
		
		<footer>
  <div class="footercontainer">
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