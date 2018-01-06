<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 * Description: yimai 1.0 loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package yimai 1.0
 * @since yimai 1.0 1.0
 */

	get_header(); ?>

      <div class="row">

        <div class="col-sm-12 blog-main">

          <?php get_template_part( 'loop', 'page' ); ?>

        </div><!-- /.blog-main -->

      </div><!-- /.row -->
      
	<?php get_footer(); ?>