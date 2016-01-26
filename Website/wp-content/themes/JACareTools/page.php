<?php get_header(); ?>

<div class="social-media">
    
    <a href="http://twitter.com/" target="_blank"><div id="twitter"><img src="<?php echo get_template_directory_uri(); ?>/library/images/socialmedia/twitter.png" alt=""></div></a>
    
    <a href="http://facebook.com/" target="_blank"><div id="facebook"><img src="<?php echo get_template_directory_uri(); ?>/library/images/socialmedia/facebook.png" alt=""></div></a>
    
    <a href="http://linkedin.com/" target="_blank"><div id="linkedin"><img src="<?php echo get_template_directory_uri(); ?>/library/images/socialmedia/linkedin.png" alt=""></div></a>
    
</div>


<div class="text">
    
    <div class="text-container">
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
        <h1><?php the_title(); ?></h1>
        
        <p><?php the_content(); ?></p>

<?php endwhile; ?>

<?php else : ?>

	<!-- helemaal niks hier -->

<?php endif; ?>
        
    </div>
    
</div>

<?php get_footer(); ?>