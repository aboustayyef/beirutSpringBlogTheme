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


<!-- Start of StatCounter Code -->

<script type="text/javascript">
var sc_project=3313987; 
var sc_invisible=1; 
var sc_security="eb0f8910"; 
</script>

<script type="text/javascript"
src="http://www.statcounter.com/counter/counter.js"></script>

<noscript><div class="statcounter"><a title="site stats"
href="http://statcounter.com/free-web-stats/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/3313987/0/eb0f8910/1/"
alt="site stats"></a></div></noscript>

<!-- End of StatCounter Code -->

<!--  This Comment was created on Codeanywhere -->

<!-- Start of Google Analytics Code -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16792545-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- End of Google Analytics Code -->

</body>
</html>