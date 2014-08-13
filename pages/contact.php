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
    <h6 class="subhead">History</h6>
    <h2>Our proud history, our wonderful legacy <br />of service.</h2>
    <p>The late Rev. Harvey Savage, Sr., established the kitchen in 1969 in response to the tremendous need he saw in his community. Located in Toledo’s central city, the kitchen feeds more than 200 people each day, including school children and the elderly. Some clients live in nearby housing projects or single-story family homes while others are homeless. The median income in the neighborhoods served by the kitchen is about $5,500.</p>
    <p>The kitchen’s current executive director is Harvey Savage, Jr., who agreed to head the organization when his father died.</p>
  </section>
  
  <section>
    <h6 class="subhead">Leadership &amp; Board</h6>
    <dl>
      <dt>Harvey Savage, Jr.</dt>
      <dd>Executive Director</dd>
    </dl>
    
    <dl>
      <dt>Board of Direction</dt>
      
      <dt>Erica Parish</dt>
      <dd>President</dd>
      
      <dt>John Rich</dt>
      <dd>Secretary</dd>
      
      <dt>Mario Govela</dt>
      <dd>Treasurer</dd>
      
      <dt>Jeffrey Sweich</dt>
      <dt>John Savage</dt>
      <dt>Mary Lou Leonard</dt>
      <dt>Tisha Lee</dt>
    </dl>
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