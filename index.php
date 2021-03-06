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
  
  <?php include("parts/nav.php"); ?>
  <div class="nav-clone"><?php include("parts/nav.php"); ?></div>

  <div class="hero">
    <div class="hero-inner">
      <div class="hero-copy">
        <h1>Feeding the hungry with love, compassion and respect since 1969.</h1>
      </div>
      <button class="learn-more">Learn More</button>
      <button class="give">Give</button>
    </div>
    <div class="overlay"></div>
  </div>
  
  <section class="bullets">
    <div class="bullet">
      <div class="bullet-icon bullet-icon-1"></div>
      <div class="bullet-content">
        <h2>We are welcoming.</h2>
        <p>We accept all who walk in our door, up to 200 people a day, most days. We are always ready to lend a hand, to listen and to serve without judgment.</p>
        </div>
    </div>  
    <div class="bullet">
      <div class="bullet-icon bullet-icon-3"></div>
      <div class="bullet-content">
        <h2>We are respectful.</h2>
        <p>We know the people we serve have dignity – and pride. We honor them, and we are honored to serve them. If they want to talk, we listen.</p>
      </div>
    </div>
    <div class="bullet">
      <div class="bullet-icon bullet-icon-2"></div>
      <div class="bullet-content">
        <h2>We are community.</h2>
        <p>We are proud to know that people consider us a part of their extended families. The kitchen is a family whose members watch out for one another.</p>
      </div>
    </div>
    <div class="bullet">
      <div class="bullet-icon bullet-icon-4"></div>
      <div class="bullet-content">
        <h2>We are necessary.</h2>
        <p>We’d like to know a day will come when there would be no need for us. Until that day, we do what we feel called to do, and that is to feed the hungry.</p>
      </div>
    </div> 
  </section>
  
  <section class="featuredpage-newsfeed">
    <div class="featured-page">
      <h2>Lorem Ipsum dolor mets</h2>
      <p>The MLK Kitchen for the Poor was established in 1969 by the late Rev. Harvey Savage, Sr., in response to the tremendous need he saw in his community. Located in Toledo’s central city, the Kitchen feeds more than 200 people each day, from school children to the elderly.</p>
      <button>Learn More</button>
    </div>
    <div class="newsfeed">
      <ul>
        <li>
          <h3 class="newsfeed-headline">National Food Drive is this Wednesday</h3>
          <span class="newsfeed-meta">Mar 25, 2014<span class="divider">|</span><a class="read-more" href="#">Read More</a></span>
        </li>
        <li>
          <h3 class="newsfeed-headline">September Bowl-a-Thon</h3>
          <span class="newsfeed-meta">Mar 25, 2014<span class="divider">|</span><a class="read-more" href="#">Read More</a></span>
        </li>
        <li>
          <h3 class="newsfeed-headline">A big thanks to all of our volunteers this weekend</h3>
          <span class="newsfeed-meta">Mar 25, 2014<span class="divider">|</span><a class="read-more" href="#">Read More</a></span>
        </li>
      </ul>
    </div>
  </section>
  
  <section class="testimonials-homepage">
    <h2 class="inline-with-rule">What people are saying about MLK Kitchen</h2>
    <p class="description">Tas dion recte nim re vendae rem quas molupta tioratur explit et eossiti quisit 
remfugit latem que pe. Ga. Uciliatur aut ut excepro vitatur remoluptus.</p>
    
    <div class="testimonial-box-horizontal">
      <div class="testimonial-box">
        <div class="testimonial-image">
          <img src="http://placehold.it/300x250" alt="" />
        </div>
        <div class="testimonial-quote">
          <p>It’s been a privilege working with the staff and volunteers at the MLK Kitchen for the Poor. They truly care about fighting hunger and bettering the community.</p>
          <span class="testimonial-name">– Alexis Means, 13abc Action News, <br />former board member for the kitchen</span>
        </div>
      </div>
      <div class="read-more"><a href="#">Read more stories &rarr;</a></div>
    </div>
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