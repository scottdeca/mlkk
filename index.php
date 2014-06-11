<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home - MLK Kitchen for the Poor</title>
	<link rel="stylesheet" href="css/app.css">
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
	        <li class="nav-link"><a href="javascript:void(0)">Products</a></li>
	        <li class="nav-link"><a href="javascript:void(0)">About Us</a></li>
	        <li class="nav-link"><a href="javascript:void(0)">Contact</a></li>
	        <li class="nav-link more"><a href="javascript:void(0)">More</a>
	          <ul class="submenu">
	            <li><a href="javascript:void(0)">Submenu Item</a></li>
	            <li><a href="javascript:void(0)">Another Item</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	    <div class="navigation-tools">
	      <div class="search-bar">
	        <div class="search-and-submit">
	          <input type="search" placeholder="Enter Search" />
	          <button type="submit">
	            <img src="images/search-icon.png" alt="">
	          </button>
	        </div>
	      </div>
	      <a href="javascript:void(0)" class="sign-up">Sign Up</a>
	    </div>
	  </div>
	</header>

  <div class="image-gradient">
    <div class="copy">
    <p>Fixed height container</p>
    </div>
    <div class="overlay"></div>
  </div>



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