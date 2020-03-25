<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"> Adult Workshops</h1>
			</header><!-- .page-header -->

			<section class="adult-workshops-grid">
			
				<div>
					 <!-- TODO Filters -->

					 <section class="search-section-aw">   
						<form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
							<input class="search-input-aw" type="text" name="s" placeholder="Search"/>
							<input type="hidden" name="post_type" value="adult_workshop" /> <!-- // hidden 'players' value -->
							<button class="button-search-aw" type="submit" alt="Search">
								<i class="fa fa-search"></i>
							</button>
						</form>
					</section>

					<section class="datapicker-section-aw">
						<button class="button-show-calendar">
							<i class="far fa-calendar"></i>Calendar
						</button>
						<div class="adult-workshop-datepicker"></div>
					</section>
				
					<section class="check-box-section-aw">
						<?php $taxonomies = get_terms( 'adult_workshop_taxonomy'); ?>
						<h2 class="filters-aw">Filters</h2>
						<button class="button-show-filters">
							<i class="fas fa-filter"></i>Filters
						</button>
						<div class="filters-aw-list">
							<div class="filters-aw-container">
								<div class="filters-aw-item">
									<input type="checkbox" class="adult-workshop-all-filter" id="all-workshops-id" name="all-workshops" value="all">
									<label for="all-workshops"> All Workshops </label>
								</div>
								<?php foreach ( $taxonomies as $term ) : ?>
									<div class="filters-aw-item">
										<input type="checkbox" class="adult-workshop-filter" id="adult-workshop-type-<?php echo $term->term_taxonomy_id?>" name="<?php echo $term->slug?>" value="<?php echo $term->slug ?>">
										<label for="<?php echo $term->slug ?>"> <?php echo $term->name ?> </label>
									</div>
								<?php endforeach; ?>
							</div>
						<div>
					</section>

					<!-- <section class="mocha-content hiring-section-aw">
						<h2>The CEC is Hiring an Executive Director</h1>
						<p>A non-profit organization with charitable status providing composting and ecological gardening educational to residents</p>
						<a class="btn-white-mocha" href="#">Read More</a>
					</section> -->
					
				</div>

				<div>
				
					<?php 

						$meta_query = array ();
						if (isset($adult_workshop_date)) {
							$meta_query = array(
								array(
									'key' => 'date',
									'value' => $adult_workshop_date,
									'type' => 'DATE',
									'compare' => '=='
								)
							);
						}
					
						$taxonomy_query = array ();
						if (isset($adult_workshop_taxonomy_name)) {
							if ($adult_workshop_taxonomy_name !== 'all') {
								$taxonomies_query_string = explode(',',$adult_workshop_taxonomy_name);
								if (!empty($taxonomies_query_string)) {
									foreach ($taxonomies_query_string as &$taxonomy_query_string) {
										array_push($taxonomy_query, array (
											'taxonomy' => 'adult_workshop_taxonomy',
											'field' => 'slug',
											'terms' => $taxonomies_query_string,
										));
									}
								}
							}
						}

						$date_query = array(
							'year'  => 2020,
							'month' => 3,
							'day'   => 10,
						);
					
						$wpb_all_query = new WP_Query(array(
							'post_type'=>'adult_workshop', 
							'post_status'=>'publish', 
							'posts_per_page'=>-1,
							'tax_query' => $taxonomy_query,
							'meta_query' => $meta_query
							// 'date_query' => array(
							// 	'year'  => 2020,
							// 	'month' => 3,
							// 	'day'   => 10,
							// )
							)
						); 
					
					?>

					<?php /* Start the Loop */ ?>
					<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

						<?php
							get_template_part( 'template-parts/content', 'adult-workshop' );
						?>

					<?php endwhile; ?>

					<?php red_starter_numbered_pagination(); ?>

				</div>

			</section>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
