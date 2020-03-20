<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="donate-page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p class ='donate-header-description'>We rely on people like you!
It’s your goodwill and financial support that help produce the programs and services that make such a difference in our community.  
Thank you so much! </p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

		<?php 

			$rows = get_field('donate_field');
			if($rows)
			{
				echo '<ul>';

				foreach($rows as $row)
				{
						echo '<h3 class=donate-field-title>' . $row['title'] . '</h3>';
						echo '<p class=donate-field-description>' . $row['description'] . '</p>';
				}

				echo '</ul>';
			}
			?>


</div><!-- .entry-content -->
</article><!-- #post-## -->
