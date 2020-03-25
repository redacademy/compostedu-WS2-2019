<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="volunteer-site-main" role="main">
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content', 'volunteer' ); ?>

                    <?php endwhile; // End of the loop. ?>

    </div><!-- .test -->
                
                <div class='sign-up-container'>
                    <form class='sign-up-form'>
                        <h3 class='sign-up-title'>Sign Up!</h3>
                        <p class='sign-up-text'>Sign up to be notified of upcoming volunteer training sessions.</p>
                        <label for='name'>Name</label><br>
                            <input class='submit-input'  type="text" id="fname" name="fname"><br>
                         <label for='email'>Email Address</label><br>
                        <input class='submit-input'  type="text" id="fname" name="fname"><br>
                        <div class='submit-btn-container'>
                            <button class='submit-btn'>Submit</button>
                        </div>
                    </form>
                </div>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
