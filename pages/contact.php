<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contact - MLK Kitchen for the Poor</title>
  <link rel="stylesheet" href="/css/app.css">
  
  <script type="text/javascript" src="//use.typekit.net/vvd8hgv.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body class="subpage">

  <?php include $_SERVER['DOCUMENT_ROOT']."/parts/nav.php"; ?>
  <div class="nav-clone"><?php include $_SERVER['DOCUMENT_ROOT']."/parts/nav.php"; ?></div>

  <div class="hero">
    <div class="hero-inner">
      <div class="hero-copy">
        <h1>We invite you to be part of our kitchen family in whatever ways you feel called</h1>
      </div>
    </div>
    <div class="overlay"></div>
  </div>
  
  <section>
    <h6 class="subhead">Contact Info &amp; Location</h6>
    
    <b>Contact:</b>
    <ul class="no-bullets">
      <li>419.241.2596</li>
      <li>mlk.kitchen@bex.net</li>
    </ul>
    
    <b>Address:</b>
    <ul class="no-bullets">
      <li>650 Vance St.</li>
      <li>Toledo, OH 43604</li>
    </ul>
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