<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset class="search-form-fieldset">
		<label id="search-input" class="hide-form search-form-input">
			<input type="search" class="search-field" placeholder="Search the site" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<input type="submit" class="screen-reader-text" value="<?php echo esc_html( 'Search' ); ?>">

		<a href="#" id="search-submit" class="search-submit" aria-hidden="true">
			<img src="<?php echo get_template_directory_uri() ?>/images/header/search.svg" alt="Search Icon" class="search-icon">
		</a>
	</fieldset>
</form>