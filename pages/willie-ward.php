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

  <div class="hero hero-condensed">
    <div class="overlay"></div>
  </div>
  
  
  <section id="mission">
    <h2>&ldquo;I don’t know where I’d be without the help the kitchen gave us&rdquo;</h2>

    <p>Willie Ward, Sr., principal of Martin Luther King, Jr., Academy for Boys in Toledo, is clear: the two biggest influences on his life to date are his mother and Martin Luther King, Jr., Kitchen for the Poor.</p>
     
    <p>My mother raised five kids by herself. She worked and she also volunteered at the kitchen. This was in the mid-1970s, and it was tough. Our church would send a van to pick kids up and take them to the kitchen on weekdays during the summer. We’d have lunch and dinner there, play games and listen to music. There were also educational opportunities in reading and math, led by Henrietta. Everyone in the Savage family was approachable and had a passion for helping people.</p>
     
    <p>My mom also benefitted from the clothing donations. And, she was very strong on giving back by volunteering at the kitchen.</p>
     
    <p>I am really thankful for all that the Savages and the kitchen did for my family. It’s ironic that I would now be principal at the MLK Academy. I am proud of where I came from and am committed to giving back, just as my mother taught us to do. She taught us to have respect and dignity and to always be grateful.
    </p>
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