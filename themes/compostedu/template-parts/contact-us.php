<?php 				
    if ( ! is_active_sidebar( 'contactus-1' ) ) {
        return;
    }
?>

<?php $contactUsText = get_query_var('contactUsText'); ?>


<h2>Contact Us</h2>

<?php if (isset($contactUsText)) : ?>
    <p><?php echo $contactUsText?></p>
<?php endif; ?>
<?php dynamic_sidebar( 'contactus-1' ); ?>