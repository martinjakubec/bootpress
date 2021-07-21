<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bootpress
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<div class="row gy-4">

				<div class="card-wrapper col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">
								Coucou
							</h5>
							<p class="card-text">
								Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, a qui et aspernatur cupiditate laudantium at odit earum vitae expedita! Consectetur, ea officia vel cum corrupti est porro pariatur maxime!
							</p>
							<a href="#" class="card-link btn btn-secondary">Test 2</a>
						</div>
					</div>
				</div>

				<div class="card-wrapper col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">
								Coucou
							</h5>
							<p class="card-text">
								Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, a qui et aspernatur cupiditate laudantium at odit earum vitae expedita! Consectetur, ea officia vel cum corrupti est porro pariatur maxime!
							</p>
						</div>
					</div>
				</div>

				<div class="card-wrapper col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">
								Coucou
							</h5>
							<p class="card-text">
								Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, a qui et aspernatur cupiditate laudantium at odit earum vitae expedita! Consectetur, ea officia vel cum corrupti est porro pariatur maxime!
							</p>
						</div>
					</div>
				</div>

				<div class="card-wrapper col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">
								Coucou
							</h5>
							<p class="card-text">
								Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, a qui et aspernatur cupiditate laudantium at odit earum vitae expedita! Consectetur, ea officia vel cum corrupti est porro pariatur maxime!
							</p>
						</div>
					</div>
				</div>

				<div class="card-wrapper col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">
								Coucou
							</h5>
							<p class="card-text">
								Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, a qui et aspernatur cupiditate laudantium at odit earum vitae expedita! Consectetur, ea officia vel cum corrupti est porro pariatur maxime!
							</p>
						</div>
					</div>
				</div>


			</div>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
