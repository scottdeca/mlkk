<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Home - MLK Kitchen for the Poor</title>
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
        <h1>Are you going through tough times?</h1>
        <p>We’re here to serve, so please contact us.</p>
      </div>
    </div>
    <div class="overlay"></div>
  </div>
  
  
  <section>
  
    <h2>Life can be so difficult. Pick up the phone to call us or simply come to the kitchen.</h2>
    <p>We know it’s difficult to admit you need help. We want you to know we have many years of experience with people who need a helping hand. We treat all who come to us with dignity and respect. So, just come on in to the kitchen – or give us a call. We’re here for you.</p>
    
    <b>Address:</b>
    <ul class="no-bullets">
      <li>650 Vance St.</li>
      <li>Toledo, OH 43604</li>
    </ul>
    
    <b>Contact:</b>
    <ul class="no-bullets">
      <li>419.241.2596</li>
      <li>mlk.kitchen@bex.net</li>
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