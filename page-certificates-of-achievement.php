<?php require "config.php";?>
<?php 
  if (!defined('ABSPATH')) exit;
  get_header(); 
?>


<h2 class="pl-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php 
				
				if(have_posts()) : 
					while(have_posts()) : the_post(); ?>
					<div class="featured_image ">
						<?php the_post_thumbnail();?>
					</div>
					<article class="text-justify pl-4">
						
						<p ><?php the_content(); ?></p>
					</article>
					
				<?php	endwhile;
				else:
				echo 'No Posts Found';
				endif;
				
				?>


	


	



<?php get_footer();?>