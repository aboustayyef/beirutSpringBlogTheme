<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Hellish Simplicity
 * @since Hellish Simplicity 1.1
 */
?>

</div><!-- #main .site-main -->

<footer id="site-footer" role="contentinfo">
	<div id="site-info">
		<?php _e( 'Copyright', 'hellish' ); ?> &copy; <?php bloginfo( 'name' ); ?> <?php echo date( 'Y' ); ?>. 
		<?php _e( 'WordPress theme by', 'hellish' ); ?> <a href="http://geek.ryanhellyer.net/" title="Ryan Hellyer">Ryan Hellyer</a>.
	</div><!-- #site-info -->
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); ?>


<!-- Google Analytics Code -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51741699-1', 'mustapha.me');
  ga('send', 'pageview');

</script>

<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=9690087; 
var sc_invisible=1; 
var sc_security="02403b94"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="website
statistics" href="http://statcounter.com/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/9690087/0/02403b94/1/"
alt="website statistics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->

</body>
</html>