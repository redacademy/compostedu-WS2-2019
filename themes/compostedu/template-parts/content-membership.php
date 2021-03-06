<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="membership-page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p class ='header-description'>As a member of the Compost Education Centre, you will be supporting composting, soil conservation and organic gardening education programs while receiving benefits listed below.</p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<section class='main-tilte-and-cards-container'>
			<h2> Membership Benefits</h2>
			<div class='membership-cards-container'>
				<div class='membership-cards'>
					<h3>Workshop Free Admission</h3>
					<p>Free admission to 1 of our $20 workshops (2 annually for family memberships) and a $5 discount on each additional workshop.</p>
				</div>
				<div class='membership-cards'>
					<h3>10% Discount @ Compost Education Centre</h3>
					<p>10% discount on the purchase of composters at the Compost Education Centre (maximum of 5 composters per membership per year).</p>
				</div>
				<div class='membership-cards'>
					<h3>10% Discount @ Garden Centres and Nurseries </h3>
					<p>10% discount on purchases at the following Garden Centres and Nurseries (some restrictions may apply): 
						<span>Borden Mercantile, Danica Nurseries, Dig This </span>(all three locations), 
						<span>Garden Works</span> (all three locations), <span>Little Elf Garden Centre, Meadow Oak Nursery,</span> and <span>The Soap Exchange.</span></p>
				</div>
			</div>
			<p class='membership-paragraph'>You can purchase a membership through our website (see links below), by phone (250-386-9676), 
				or by popping by the Centre in person.  
				If you purchase your membership through our site, please remember to provide us with your address so we can mail your card to you.</p>
		</section>

		<?php the_content(); ?>

		<div class='subcribe-main-container'>
			<h2 class='subscribe-title'>Subscribe To Our Newsletter!</h2>
			<p>Interested in keeping in touch with us?  The Latest Dirt is our monthly newsletter that keeps you in the loop about all our workshops and special events.
					You can subscribe to our newsletter using the form below. We love keeping in touch but we also make it easy for you to unsubscribe at any point.</p>
					<div class='subscribe-container'>
					<form class='newsletter-subscription-form'>
					<label for='name'>Name</label><br>
					<input class='subscribe-input'  type="text" id="fname" name="fname"><br>
					<label for='email'>Email Address</label><br>
					<input class='subscribe-input'  type="text" id="fname" name="fname"><br>
					<button class='subscribe-btn'>Subscribe</button>
					</form>
				</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->