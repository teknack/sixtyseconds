
  <?php
   include 'connect.php';
   $sql="SELECT * FROM main WHERE tk_emailid='manish'";
   $result=mysql_query($sql) or die(mysql_error());
   $row=mysql_fetch_array($result);
$username=$row[0];
$mega=$row[3];
 ?>

  <html lang = "en">
  <head>
  <meta charset = "utf-8">
  <title> </title> <meta name = "viewport"
content = "width=device-width, initial-scale=1.0" />
  <!-- styles -->
  <link href = "assets/css/bootstrap.css"
rel = "stylesheet" />
  <link href = "assets/css/bootstrap-theme.css"
rel = "stylesheet" />
  <link rel = "stylesheet"
href = "assets/css/slippry.css"> <!-- Slide thing -->
  <link href = "assets/css/style.css"
rel = "stylesheet" /> <!-- Font style and stuff -->
  <link rel = "stylesheet"
href = "assets/color/default.css"> <!-- Colour navbar -->
  <link rel = "stylesheet"
href = "assets/css/w3.css">
  </head> <body>
  <header>

  <div id = "navigation"
class = "navbar navbar-inverse navbar-fixed-top default"
role = "navigation">
  <div class = "container">
  <div class = "navbar-header">
  <button type = "button"
class = "navbar-toggle"
data - toggle = "collapse"
data - target = "#bs-example-navbar-collapse-1">
  <span class = "icon-bar"> </span> <span class = "icon-bar"> </span> <span class = "icon-bar"> </span> </button> <a class = "navbar-brand"
href = "level1/Rules.html"> PLAY! </a> </div>

<div class = "navigation">
  <div class = "collapse navbar-collapse"
id = "bs-example-navbar-collapse-1"> <nav>
<div id="li">
  <ul class = "nav navbar-nav navbar-right">
  <li  class="current">Username : <?php echo $username." Megapoints :".$mega ?>
  <li class = "current"> <a href = "#intro"> Intro </a></li>
  <li> <a href = "#gameplay"> Gameplay </a></li>
  <li> <a href = "#scoring"> Scoring </a></li>

  </ul>
</div>
</nav>
  </div><!-- /.navbar - collapse -->
  </div> </div> </div>

</header>

<!-- section intro -->
<section id = "intro">
  <ul id = "slippry-slider">
  <li>
  <a href = "#slide1"> <img src = "assets/img/1.jpg"
alt = "We took it for granted all our lifetime"> </a> </li> <li>
  <a href = "#slide2"> <img src = "assets/img/bgimg.png"
alt = "Now all thats left is a minute"> </a> </li> <li style = "height:100%">
  <div class = "w3-card" <font style = "color:white "> <br> <br> Blank space <br> <br> </font></div>
  <div class = "col-md-12">
  <div class = "w3-card">
  <header class = "w3-container">
  <br>
  <h1> <font style = "color:gray"> <?php echo $username." MEGAPOINTS".$mega ;?> Teknack 2016 </font></h1>

  <br> <br> <br>
  </header> <div class="w3-container"> <strong>SURVIVE OR PERISH</strong> </div> <br><br><br><br><br> <div class = "sub-heading">

  Go on now,
  for the clock ticks away. <br>
  <img src = "assets/img/logo2.gif"
style = "width:15%"> </img> <br><br><br>	 	 </div>  </div></div>
  </li> </ul> </section>
  <!-- end intro -->

<!-- Section gameplay -->
<section id = "gameplay"
class = "section">
  <div class = "container">
  <div class = "row">
  <div class = "col-md-8 col-md-offset-2">
  <div class = "heading">
  <h3> <span> Gameplay </span></h
3>
  </div> <div class = "sub-heading">

  Everyday in the vault, you struggle
for survival.Battling the odds.

</div> </div> </div> <div class = "row">
  <div class = "col-md-4">
  <div class = "team-box w3-white">


  <div class = "w3-card-2">

  <div class = "aligncenter w3-container w3-blue-grey">
  <h2> <font style = "color:white"> Think </font></h
2>
  </div>

<div class = "w3-container">
  <p> <br> You have 60 seconds to gather as many supplies as possible(that includes your family, maybe ? ) and hurry down to the fallout shelter!Move around with the arrow keys
and
try to collect as many resources as you can! <br> </p> </div>

</div>





</div> </div> <div class = "col-md-4">
  <div class = "team-box w3-white">


  <div class = "w3-card-2""> <div class = "aligncenter w3-container w3-blue-grey">

  <h2> <font style = "color:white"> Scavenge </font></h2>

  </div> <div class = "w3-container">
  <p> <br> Remember!You can only carry one resource item at a time.Sucks, I know.
Drop whatever you are carrying off into the vault and head out again.
Make a decision on what you want to get and what you want to leave behind.Choose wisely here <br> </p> </div>		</div> </div> </div> <div class = "col-md-4">
  <div class = "team-box w3-white">

  <div class = "w3-card-2">

  <div class = "aligncenter w3-container w3-blue-grey">
  <h2> <font style = "color:white"> Survive </font></h
2>
  </div>

<div class = "w3-container">
  <p> <br> Get into the vault yourself before the timer expires or it 's game over! Reaching the fallout shelter in time and alive is only the beginning.
Whatever you scavenged will play a vital role in your survival.Every day is a struggle in this world. <br> </p> </div>			</div> </div>		</div> </div>		</div>
  </section>
  <!-- end section gameplay -->




<!-- section scoring -->
<section id = "scoring"
class = "section gray">
  <div class = "container">
  <div class = "row">
  <div class = "col-md-8 col-md-offset-2">
  <div class = "heading">
  <h3> <span> SCORING </span></h
3>
  </div> <div class = "sub-heading">
  <p>
  Let 's have a bit of fun while we reap the consequences of our misdeeds, shall we? </p> <p>
  Here 's how we'
ll do that!
  </p>	  </div> </div> </div> <div class = "row">
  <div class = "col-md-4 ">
  <div class = "team-box w3-card-4 w3-white">



  <div class = "aligncenter w3-container w3-blue-grey">
  <h2> <font style = "color:white"> Basic scoring </font></h2>
  </div>

<div class = "w3-container">
  <br> Earn points based on the number of days you survive.Extra points
for each successfully completed month <br>
  </div>


</div> </div> <div class = "col-md-4">
  <div class = "team-box w3-card-4  w3-white">



  <div class = "aligncenter w3-container w3-blue-grey">
  <h2> <font style = "color:white"> Special points </font></h2>
  </div>

<div class = "w3-container">
  <br> Earn achievement points on fulfilling certain criteria.Be on the lookout
for these.
These help you get to the top <br>
  </div> </div> </div> <div class = "col-md-4">
  <div class = "team-box w3-card-4  w3-white">



  <div class = "aligncenter w3-container w3-blue-grey">
  <h2> <font style = "color:white"> Leaderboards </font></h2>
  </div>

<div class = "w3-container">
  <br> Survive the longest and show the world(What's left of it) who'
    s boss!Now that you 're ready, Lets Play!<br> </div> </div> </div> </div> </div> </section>
    <!-- section scoring -->
    <footer>
    <div class = "verybottom">
    <div class = "container">
    <div class = "row">
    <div class = "col-md-12">

    <div class = "aligncenter">
    See you in the leaderboards!

    </div> </div>
    </div>

    </div> </div> </footer> <a href = "#"
    class = "scrollup"> <i class = "fa fa-angle-up fa-2x"> </i></a>
<!-- javascript -->
<script src="assets/js/jquery-1.9.1.min.js"></script>
<script src="assets/js/jquery.easing.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/slippry.min.js"></script>
<script src="assets/js/jquery.nav.js"></script>
<script src="assets/js/jquery.scrollTo.js"></script>
<script src="assets/js/jquery.fancybox.pack.js"></script>   
<script src="assets/js/jquery.fancybox-media.js"></script> 
<script src="assets/js/jquery.nicescroll.min.js"></script> 
  <script>
	$(document).ready(function(){
	  $('#slippry-slider').slippry(
		defaults = {
			transition: 'horizontal',
			useCSS: true,
			speed: 4000,
			pause: 8000,
			initSingle: false,
			auto: true,
			preload: 'visible',
			pager: false,		
		} 
	  
	  )
	});
</script> 

<script src="assets/js/custom.js"></script>   <!-- Smooth scroll -->
       
</body>
</html>