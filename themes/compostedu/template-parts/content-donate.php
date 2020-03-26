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

		<?php	$cards = get_field('single'); ?>
		<h2 class='Content-title'>Your Options For Contributing</h2>
			<section class='custom-fields-two-grid'>
				<div class='cards-container'>
				<?php foreach($cards as $card): ?>
					<div class="custom-fields-container-two">
						<h3 class="cards-fields-title"><?php echo $card['header']?></h3>
						<p class="cards-field-description"> <?php echo $card['description'] ?></p>
							<!-- remove unescessary arrows -->
							<?php $linkText = $card['link-text'] ?>
								<?php if (!empty($linkText) ) :  ?>
										<a class="cards-links" href="<?php echo $card['link-url'] ?>"><p class='cards-link-text'> <?php echo $card['link-text'] ?></p></a>
								<?php endif; ?>
					</div>
					<?php endforeach; ?>
				</div>

					<!-- remove unescessary arrows -->

					<?php $linkText = $card['link-text'] ?>
				<?php if ($linkText )            ?>

				<div class="mocha-content contact-us-panel">
					<?php
							$contactUsText='If you have questions about our school programs or would like to book a program, call Kayla at 230-386-9676 or email using the form below.';
							set_query_var( 'contactUsText', $contactUsText );
							get_template_part( 'template-parts/contact-us' );
							?>
				</div>
			</section>

		<?php the_content(); ?>

		<h2 id='investments'>Investments</h2>
		<div class='investments-container'>
				<div class='grid-cont-one'>
					<h3>Publicly Listed Securities</h3>
					<p>Publicly listed securities are becoming increasingly popular as gifts.  
					Federal incentives, introduced in early 2006, have made it very attractive to donate publicly listed securities that have appreciated in value. 
					Canadians are not taxed on the capital gain when they donate securities to a charity. 
					This compares to a tax on 50% percent of the capital gain if the securities are sold outright.  
					If you own publicly traded securities or mutual funds that have increased in value, 
					you may want to consider donating the securities directly to Compost Education Centre. 
					Should you decide to make a gift of securities to Compost Education Centre, please contact your financial 
					planner and/or attorney to facilitate the process.</p>
					<div class='paragrapgh-two'>
						<h3>Retirement Funds</h3>
						<p>Retirement funds represent a major personal asset for most donors
							.Donors enrolled in an RRSP, and those who have already converted
							their RRSP to a RRIF, can make a charitable gift of all or a portion of any retirement funds remaining at death.</p>
					</div>
				</div>

				<div class='grid-cont-two'>
					<h3>Life Insurance Policy </h3>
					<p>There are 3 options for donating Life Insurance to a charity:</p>
							<p>1. You could choose to make The Compost Education Centre the owner of an existing or new policy. You will receive a charitable tax receipt for the policy’s cash surrender value and for any premiums you pay once ownership is transferred to the charity.  Premiums can be paid either to the insurance company or directly to the charity. </p>

							<p>2. You can name the Compost Education Centre as a primary or co-beneficiary of your policy.  This is a good option for donors whose family no longer needs life insurance for financial stability.</p>

							<p>3. You can name the Compost Education Centre as the contingent beneficiary of your policy.  If primary beneficiaries predecease the donor, the Centre would receive the proceeds of the life insurance policy.</p>

							<p>Should you decide to make a gift of securities to Compost Education Centre, please contact your financial planner and/or attorney to facilitate the process.</p>
				</div>
			</div>
			<p>Please consult with your financial advisor/attorney if you wish to donate securities, RRSP’s, or Life Insurance, and make your intentions known to your family.</p>

					<h2 id='good-services' class='goods-title'>Goods & Services</h2>

				<?php	$rows = get_field('donate_fields'); ?>
			<section class='custom-fields-grid'>
				<?php foreach($rows as $row): ?>
					<div class="custom-fields-container">
						<?php $image = $row['image']; ?>
						<?php if( !empty( $image ) ): ?>
							<img class='custom-images' src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
						<div class='test'>
						<h3 class="donate-fields-title"><?php echo $row['title']?></h3>
						<p class="donate-field-description"> <?php echo $row['description'] ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</section>



		</div><!-- .entry-content -->
</article><!-- #post-## -->
