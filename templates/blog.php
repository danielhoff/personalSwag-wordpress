<?php

/*
 * Template Name: Blog Template
 */

get_header(); ?>

<!-- Main Content -->
    <div id="main-content" class="nine columns" role="content">
    	<div id="column-wrap"> 

    	<?php $myposts = get_posts('cat=5');
foreach($myposts as $post) :
setup_postdata($post);
?>
  <div class="post-item">
    <div class="post-info">
      <h4 class="post-title">
      <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
        <?php get_template_part( 'content', get_post_format() ); ?>
      </a>
      </h4>
      
    </div>

  </div>
<?php endforeach; wp_reset_postdata(); ?>



</div>
    </div>
    </div>
    <!-- End Main Content -->

    <?php get_footer(); ?>