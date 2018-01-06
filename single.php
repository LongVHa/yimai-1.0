<?php
/**
 * Template for displaying all single posts
 *
 * @package yimai 1.0
 * @since yimai 1.0 1.0
 */

 $langCat = '';
 
 if(in_category(8)){
	 $langCat = 'ct';
 }else if(in_category(7)){
	 $langCat = 'mn';
 }
 
	get_header($langCat); ?>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <?php get_template_part( 'news-single', 'single' ); ?>

        </div><!-- /.blog-main -->

      </div><!-- /.row -->

	<?php get_footer($langCat); ?>