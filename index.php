<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home - MLK Kitchen for the Poor</title>
	<link rel="stylesheet" href="css/app.css">
	
	<script type="text/javascript" src="//use.typekit.net/vvd8hgv.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body>

	<header class="navigation">
	  <div class="menu-wrapper">
	    <a href="javascript:void(0)" class="logo">
	      <img src="images/placeholder_logo_1.png" alt="">
	    </a>
	    <p class="navigation-menu-button" id="js-mobile-menu">MENU</p>
	    <div class="nav">
	      <ul id="navigation-menu">
	        <li class="nav-link"><a href="javascript:void(0)">Our Work</a></li>
	        <li class="nav-link"><a href="javascript:void(0)">Get Help</a></li>
	        <li class="nav-link"><a href="javascript:void(0)">Get Involved</a></li>
	        <li class="nav-link more"><a href="javascript:void(0)">News & Events</a>
	          <ul class="submenu">
	            <li><a href="javascript:void(0)">Submenu Item</a></li>
	            <li><a href="javascript:void(0)">Another Item</a></li>
	          </ul>
	        </li>
	        <li class="nav-link"><a href="javascript:void(0)">About Us</a></li>
	        <li class="nav-link"><a href="javascript:void(0)">Contact</a></li>
	      </ul>
	    </div>
	  </div>
	</header>

	<div class="hero">
		<div class="hero-inner">
			<div class="hero-copy">
				<h1>Tem qui dellor sunt voluptaepre 200 et a con 52 soluptati unt quo omniet occaesequo ommo.</h1>
			</div>
	    <button>Learn More</button>
	    <button>Give</button>
		</div>
		<div class="overlay"></div>
	</div>
	
	<div class="bullets">
	  <div class="bullet">
	    <div class="bullet-icon bullet-icon-1"></div>
	    <div class="bullet-content">
	      <h2>This Bullet Title</h2>
	      <p>Lorem dolor sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum impedit. Odit officia autem.</p>
	      </div>
	  </div>  
	  <div class="bullet">
	    <div class="bullet-icon bullet-icon-2"></div>
	    <div class="bullet-content">
	      <h2>Another Bullet Title</h2>
	      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum.</p>
	    </div>
	  </div>
	  <div class="bullet">
	    <div class="bullet-icon bullet-icon-3"></div>
	    <div class="bullet-content">
	      <h2>Last Bullet Title</h2>
	      <p>Lorem ipsum sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum impedit. Odit officia autem.</p>
	    </div>
	  </div>
	  <div class="bullet">
	    <div class="bullet-icon bullet-icon-4"></div>
	    <div class="bullet-content">
	      <h2>Last Bullet Title</h2>
	      <p>Lorem ipsum sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum impedit. Odit officia autem.</p>
	    </div>
	  </div> 
	</div>


<script src="js/vendor/jquery.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
	  var menu = $('#navigation-menu');
	  var menuToggle = $('#js-mobile-menu');
	  var signUp = $('.sign-up');
	
	  $(menuToggle).on('click', function(e) {
	    e.preventDefault();
	    menu.slideToggle(function(){
	      if(menu.is(':hidden')) {
	        menu.removeAttr('style');
	      }
	    });
	  });
	
	  // underline under the active nav item
	  $(".nav .nav-link").click(function() {
	    $(".nav .nav-link").each(function() {
	      $(this).removeClass("active-nav-item");
	    });
	    $(this).addClass("active-nav-item");
	    $(".nav .more").removeClass("active-nav-item");
	  });
	});
</script>

</body>
</html>