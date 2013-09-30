<?php
/**
 * Footer
 *
 * Displays content shown in the footer section
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */
?>

</div>
<!-- End Page -->

<!-- Footer -->
<footer class="row">

<?php if ( dynamic_sidebar('Sidebar Footer One') && dynamic_sidebar('Sidebar Footer Two') && dynamic_sidebar('Sidebar Footer Three') && dynamic_sidebar('Sidebar Footer Four')  ) : else : ?>

<div class="three columns"></div>

<div class="three columns">
	<p>Site concocted by Daniel Hoff.</p>
</div>

<div class="three columns">
	<p><a href="mailto:danielhoff20@gmail.com">DanielHoff20@gmail.com</a> </p>
</div>

<div class="three columns">
	<p><a href="https://twitter.com/Daniel_Hoff">@daniel_hoff</p>
</div>

<?php endif; ?>

</footer>
<!-- End Footer -->

<?php wp_footer(); ?>
</body>
</html>