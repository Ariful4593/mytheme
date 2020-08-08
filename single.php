<?php require "config.php";?>
<?php 
  if (!defined('ABSPATH')) exit;
  get_header(); 
?>



<div class="container">
	<div class="row">
		<div class="col-sm-3 d-none d-sm-none d-md-block col-md-3 h-100 mt-2 second_nav ">
			<?php
			$args = array(
				'theme_location'=> 'secondary'
			);
			wp_nav_menu($args);
			?>
		</div>

	
		<div class="col-xs-12 col-sm-12 col-md-9 h-100 mt-2 slide ">
			<div class="w3-content w3-section" style="max-width:100%">
			  <img class="mySlides img-fluid h-100" src="<?php echo get_template_directory_uri();?>/images/slide_1.jpg" style="width:100%,height:294px">
			  <img class="mySlides img-fluid h-100" src="<?php echo get_template_directory_uri();?>/images/slide_2.jpg" style="width:100%,height:294px">
			  <img class="mySlides img-fluid h-100" src="<?php echo get_template_directory_uri();?>/images/slide_3.jpg" style="width:100%,height:294px">
			</div>
		</div>

	
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-3 d-none d-sm-none d-md-block col-md-3 h-100 mt-2 ">
			<nav class="nav flex-column third_part_left_content">
					<h2 class="font-weight-bold">Important Links</h2>

				  <a class="nav-link active" href="https://www.ctgpoly.gov.bd"><svg class="bi bi-caret-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 000-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 001.659.753z" clip-rule="evenodd"/>
				</svg>CPI</a>

				  <a class="nav-link active" href="http://www.kushtiapi.gov.bd/"><svg class="bi bi-caret-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 000-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 001.659.753z" clip-rule="evenodd"/>
				</svg> KPI</a>

				  <a class="nav-link active" href="#"><svg class="bi bi-caret-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 000-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 001.659.753z" clip-rule="evenodd"/>
				</svg>	NU</a>

				  <a class="nav-link active" href="#"><svg class="bi bi-caret-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 000-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 001.659.753z" clip-rule="evenodd"/>
				</svg>BPSC</a>

				  <a class="nav-link active" href="#"><svg class="bi bi-caret-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 000-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 001.659.753z" clip-rule="evenodd"/>
				</svg>NCTB</a>
				  <a class="nav-link active" href="#"><svg class="bi bi-caret-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 000-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 001.659.753z" clip-rule="evenodd"/>
				</svg>NAEM</a>
				  <a class="nav-link active" href="#"><svg class="bi bi-caret-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 000-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 001.659.753z" clip-rule="evenodd"/>
				</svg>MOPA</a>
				<a class="nav-link active" href="#"><svg class="bi bi-caret-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 000-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 001.659.753z" clip-rule="evenodd"/>
				</svg>BANBEIS</a>
				  			
				</nav>
				<div class="third_part_left_content_sec_nav">
					<h2>Gov. Form Download</h2>
				</div>
		</div>









		<div class="col-xs-12 col-sm-8 col-md-6 third_part_middle_content">

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<img class="w-100" src="<?php echo get_template_directory_uri();?>/images/principal.jpg">

			<?php 
				
				if(have_posts()) : 
					while(have_posts()) : the_post(); ?>
					<div class="featured_image ">
						<?php// the_post_thumbnail();?>
					</div>
					<article class="text-justify">
						
						<p ><?php the_content(); ?></p>
					</article>
					
				<?php	endwhile;
				else:
				echo 'No Posts Found';
				endif;
				
				?>

		</div>

<?php get_sidebar();?>

	</div>
</div>


<?php get_footer();?>