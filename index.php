<?php require "config.php";?>
<?php 
  if (!defined('ABSPATH')) exit;
  get_header(); 
?>



<div class="container">
	<div class="row">
		<div class="col-sm-3 d-none d-sm-none d-md-block col-md-3 h-100 second_nav ">
			<?php
			$args = array(
				'theme_location'=> 'secondary'
			);
			wp_nav_menu($args);
			?>
		</div>

	
		<div class="col-xs-12 col-sm-12 col-md-9 h-100 slide " style="padding-left: 0px;padding-right: 0px">

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img src="<?php echo get_template_directory_uri();?>/images/nibo/nemo.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				<img src="<?php echo get_template_directory_uri();?>/images/nibo/toystory.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				<img src="<?php echo get_template_directory_uri();?>/images/nibo/up.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			</div>
		</div>

	
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-3 d-none d-sm-none d-md-block col-md-3 h-100 mt-2 ">
			<nav class="nav flex-column third_part_left_content">
					<h2 class="font-weight-bold">Important Links</h2>

					    <ul id="items" class="list-group">
					      <li class="list-group-item fa fa-caret-right" id="item"><a href=""> CPI</a> </li>
					      <li class="list-group-item fa fa-caret-right" id="item"> <a href=""> KPI</a></li>
					      <li class="list-group-item fa fa-caret-right" id="item"> <a href=""> PPI</a></li>
					      <li class="list-group-item fa fa-caret-right" id="item"> <a href=""> KKI</a></li>
					      <li class="list-group-item fa fa-caret-right" id="item"> <a href=""> SPI</a></li>
					      <li class="list-group-item fa fa-caret-right" id="item"> <a href=""> NPI</a></li>
					      <li class="list-group-item fa fa-caret-right" id="item"> <a href=""> DPI</a></li>
					      <li class="list-group-item fa fa-caret-right" id="item"> <a href=""> RPI</a></li>
					    </ul>

					   <!--  <script type="text/javascript">
					    	console.log(document.doctype);
							console.log(document.head);
							console.log(document.body);

							var itemList = document.querySelector("#items");
							console.log(itemList.children);
							console.log(itemList.li);
							arr = [" CPI"," KPI"," PPI"," KKI"," SPI"," NPI"," DPI"," RPI"," ZPI"];
							for(i=0;i<arr.length;i++)
							{
								itemList.children[i].textContent = arr[i];
							}
					    </script> -->
				  			
				</nav>
				<div class="third_part_left_content_sec_nav">
					<h2>Gov. Form Download</h2>
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

			

		</div>

<?php get_sidebar();?>

	</div>
</div>


<?php get_footer();?>