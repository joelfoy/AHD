<?php
/**
 * @package WordPress
 * @subpackage Starkers HTML5
 */
?>

	<footer>

		
	</footer>

	</div><!-- end Content Wrapper -->
	
</div><!-- end Wrapper -->

 
  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script>!window.jQuery && document.write('<script src="<?php echo bloginfo('template_url'); ?>/js/jquery-1.4.2.min.js"><\/script>')</script>
  
  <!-- wordpress footer --> 
  <?php wp_footer(); ?> 
  
  
  <!-- javascript calls -->
  <script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.fancybox-1.3.4.pack.js"></script>
  <script src="<?php echo bloginfo('template_url'); ?>/js/plugins.js?v=1"></script>
  <script src="<?php echo bloginfo('template_url'); ?>/js/script.js?v=1"></script>

  <!--[if lt IE 7 ]>
    <script src="<?php echo bloginfo('template_url'); ?>/js/dd_belatedpng.js?v=1"></script>
  <![endif]-->
  
  
  
  <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet 
       change the UA-XXXXX-X to be your site's ID -->
  <script>
   var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
   (function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.async = true;
    g.src = '//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
   })(document, 'script');
  </script>
</body>

</html>