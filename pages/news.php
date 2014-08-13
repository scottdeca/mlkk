<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>News &amp; Events - MLK Kitchen for the Poor</title>
  <link rel="stylesheet" href="/css/app.css">
  
  <script type="text/javascript" src="//use.typekit.net/vvd8hgv.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body class="subpage">

  <?php include $_SERVER['DOCUMENT_ROOT']."/parts/nav.php"; ?>
  <div class="nav-clone"><?php include $_SERVER['DOCUMENT_ROOT']."/parts/nav.php"; ?></div>

  <div class="hero hero-condensed">
    <div class="overlay"></div>
  </div>
  
  
  <section>
    <h6 class="subhead">Events</h6>
    <h2>We hold annual fundraisers to help defray our costs.</h2>
    <p>Our annual Bowl-a-Thon and our Soiree are our major fundraisers, and they are vital to our operation. We have a large number of people in the Toledo area and beyond who’ve been helping the kitchen remain open by organizing and attending these events.</p>
  </section>
  

  
  
  <?php include $_SERVER['DOCUMENT_ROOT']."/parts/footer.php"; ?>  

  <script src="/js/vendor/jquery.js"></script>
  
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
  
  <!-- classie.js by @desandro: https://github.com/desandro/classie -->
	<script src="/js/vendor/classie.js"></script>
	<script src="/js/vendor/cbpAnimatedHeader.js"></script>
  
</body>
</html>