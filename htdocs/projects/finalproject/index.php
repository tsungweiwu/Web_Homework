<!doctype html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>GoDeh</title>
    <link rel="shortcut icon" href="images/godeh.png">
    
    <script src="https://use.typekit.net/kxf0iwn.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

        
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="assets/godeh.css" rel="stylesheet" type="text/css">
</head>

<body>
    
    <!-- Navigation Menu -->
	 <header>
<a href="index.php"><img src="images/home/GoDeh.png" style="width:100px;height: auto;"></a>
<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#about">About</a>
  <a href="login.php">Login</a>
  <a href="signup.php">Signup</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</header>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>


    <!-- Main Content -->
    <main>
        <!-- Hero -->
        <section id="home">
        	<div class="hero-content">
                <h2>designed just for drivers</h2>
                <h1>GoDeh</h1>
        	</div>
        </section>

        <!-- Intro -->
        <section id="about" class="intro">
		  <div>
				<h2 class="about"><center>About GoDeh!</center></h2>
			  <img src="GoDeh pictures/Sung.png" alt="Tsung Wei Wu" style="width:200px;height:200px;" align="right">
			 
			<img src="GoDeh pictures/Abner.png" alt="Tsung Wei Wu" style="width:200px;height:200px;">
			  <div>
			  	<p align="left" class="space";><b>Abner TSung</b></p>
			  </div>
			  <br>
			  <p>now before you go any further we know you may be asking your self, "now who are these deranged people who dare change the way we transport our customers?!". Well you are about the meet them. <b>Tsung Wei Wu</b> and <b>Abner Cocom</b> are two colleagues who are currently sutdying at the corozal junior college who have seen the flaws in public transportation and want to make a change.</p>
			  <p>-</p>
				<p>their goal in creating this app was not only to change the way belizeans are transported to their destination, but to make the ride something personal. With GoDeh, you can move away from taxi association and become your own boss.   </p>
				<p>-</p>
				<p><b>Godeh</b></p>
				<p>designed just for drivers</p>
			</div> 
		</section>

      <!-- Artwork -->
        <section class="artworks">
            <article class="artwork">
                <div class="artwork-piece">
                    <figure>
                    	<img src="images/home/dog.jpeg">
                    </figure>
                </div>
                <div class="artwork-description">
					<h2 class="artwork-title">Drive when you want</h2>
					<h2 class="artwork-title">Make what you need</h2>
                    <!--<p class="artwork-text">In a world obsessed with everything golden, these everyday objects shine as if they were made of real gold, from liquid to smoke to melted ice cream.</p>-->
                    <a class="see-more" href="#">See more</a>
                </div>
            </article>
        </section>
    </main>

    <!-- Site Footer -->
    <footer>
    <div class="footer-content">
            <ul class="footer-social">
                <li>
                    <a href="https://www.facebook.com/tsungwei.w">
                        <img class="social-default" src="images/home/social-facebook.png">
                        <img class="social-hover" src="images/home/social-facebook-hover.png">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/abnercocom/">
                        <img class="social-default" src="images/home/social-instagram.png">
                        <img class="social-hover" src="images/home/social-instagram-hover.png">
                    </a>
                </li>
            </ul>
            <div class="footer-info">
                <p class="footer-credit">Website design by <a href="https://www.instagram.com/abnercocom/">Abner Cocom</a></p>
                <p class="footer-legal">&copy; 2018 Godeh Incorporated. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
</body>
</html>