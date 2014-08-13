<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Get Involved - MLK Kitchen for the Poor</title>
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
        <h1>We’re always looking for good people to help out at the kitchen. </h1>
      </div>
    </div>
    <div class="overlay"></div>
  </div>
  
  
  <section>
    <h6 class="subhead">Volunteer</h6>
    <h2>Volunteer with us to serve people who will really appreciate what you do for them</h2>
    <p>Our volunteers tell us they enjoy spending time at the kitchen. Whether they’re doing the dishes, serving the food, talking with our clients or cooking, they tell us they receive far more than they give. They also enjoy getting to know each other.</p>

    <p>Let us know when you’ll be stopping in to introduce yourself. We’re looking forward to meeting you.
</p>
  </section>
  
  
  <section>
    <h6 class="subhead">Donate</h6>
    <h2>We rely on the generosity of others to keep our doors open for the people who are relying on us.</h2>
    <p>Our volunteers are important, and so are those who generously donate funds and food to keep the kitchen up and running. Our clients are very grateful &mdash; and on their behalf, so are we.</p>
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