<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * This can be overridden in child themes with content.php or
 * content-format.php, where 'format' is the content context
 * requested by a template. For example, content-aside.php would
 * be used if it exists and we ask for the content with:
 * <code>get_template_part( 'content', 'aside' );</code>
 *
 * @package yimai 1.0
 * @since yimai 1.0 1.0
 */
?>

<style>
#catapult-cookie-bar{
	display:none;
}

</style>
        <div class="entry clearfix news-listing-content">
        <?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'bootstrapcanvaswp' ) ); ?>
        </div>
	
        