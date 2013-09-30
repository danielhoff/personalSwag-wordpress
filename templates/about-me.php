<?php

/*
 * Template Name: About Me Template
 */

get_header(); ?>

    <!-- Main Content -->
    <div class="six columns" role="content">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
			
		<?php endif; ?>

    </div>

    <div class="three columns">
        

    	<h3>Want to be my BFF?</h3>

        <a href="https://twitter.com/Daniel_Hoff"><img src="/wp-content/uploads/2013/03/Twitter-icon.png" alt="Twitter"></a>
        <a href="http://www.linkedin.com/profile/view?id=111013383&trk=nav_responsive_tab_profile"><img src="/wp-content/uploads/2013/03/Linkedin-icon.png" alt="Linkedin"></a>

        <br><br><br>

        <h3>Check out my awesome music taste</h3>
    	
        <iframe src="https://embed.spotify.com/?uri=spotify:user:dhoff10:starred" width="250" height="300" frameborder="0" allowtransparency="true"></iframe>

    </div>
    <!-- End Main Content -->

<?php get_footer(); ?>