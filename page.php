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


		<div class="col-xs-12 col-sm-8 col-md-6 third_part_middle_content">

			<h2>Principle Message</h2>
			<img class="w-100" src="<?php echo get_template_directory_uri();?>/images/principal.jpg">
			
			<p class="text-justify">Welcome to NIT, an educational institute founded and administered by the Congregation of Holy Cross which has been serving the nation with a long standing tradition of excellence in academics, the Science, Business and Arts.</p>
			<p class="text-justify">Education is considered to be the core instrument of human development. Our objective at Notre Dame is the harmonious development of the intellectual, physical, social, moral and spiritual faculties of the students. At the heart of the institution is a core of shared values, which reflects our ethos and everything we do. These values foster high standards of behavior and achievement, support a framework of respect, promote self-confidence and provide a warm, harmonious environment in which our student learn and grow.</p>
			<p class="text-justify">Our approach is student-centered and we believe that the approach to motivating and getting the best out of the student is based on the positive reinforcement of good work and good behavior. Our endeavor will be to ensure that student grow in their full potential and be competent to take responsibility in all walks of life. We teach our student that nothing worthwhile can be achieved without a sense of discipline and we expect our student to conform to high disciplinary standards and cherish the values of tolerance, compassion, respect, obedient and independent thinking.</p>
			<h2>Sir. Ahsan Ullah</h2>
			<h2>Chairmen</h2>
			<h2>National Institute of Technology</h2>
<!--
			
-->
		</div>

<?php get_sidebar();?>

	</div>
</div>


<?php get_footer();?>