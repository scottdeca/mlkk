<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Home - MLK Kitchen for the Poor</title>
  <link rel="stylesheet" href="css/app.css">
  
  <script type="text/javascript" src="//use.typekit.net/vvd8hgv.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body class="subpage">

  <?php include("parts/nav.php"); ?>
  <div class="nav-clone"><?php include("parts/nav.php"); ?></div>

  <div class="hero">
    <div class="hero-inner">
      <div class="hero-copy">
        <h1>We’re here for people who need help during tough times.</h1>
      </div>
    </div>
    <div class="overlay"></div>
  </div>
  
  
  <section id="mission">
    <h2 class="section-name hidden">Mission</h2>
    <h2>We offer hope and acceptance to those in need, keeping in mind the dignity of all persons.</h2>
    <p>We help anyone who walks through our doors, regardless of age, sex, religion, political beliefs or race. We feed the homeless and those with low incomes. We provide hope where there seems to be none.</p>
    
    <p>Respect for each person, love for all &mdash; our values, simply put. We don’t just hand out food and clothes. We make sure to honor the people we serve by treating them with the respect they deserve.</p>
  </section>
  
  
  <section id="stories-slider">
  
    <h2 class="section-name hidden">Stories</h2>
    <h2>Lorem ipsum programs dolor optium</h2>
    <p>The MLK Kitchen for the Poor was established in 1969 by the late Rev. Harvey Savage, Sr., in response to the tremendous need he saw in his community. Located in Toledo’s central city, the Kitchen feeds more than 200 people each day, from school children to the elderly.</p>
    
  </section>
  
  
  <?php include("parts/footer.php"); ?>  

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
  
  <!-- classie.js by @desandro: https://github.com/desandro/classie -->
	<script src="/js/vendor/classie.js"></script>
	<script src="/js/vendor/cbpAnimatedHeader.js"></script>
  
</body>
</html>