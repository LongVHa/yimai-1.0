<?php
/**
 * Template for displaying Category Archive pages
 *
 * @package yimai 1.0
 * @since yimai 1.0 1.0
 */

//switch Language Navigation
$catLang = '';
$blogLang ='Blog';
	if(is_category(8)){

		$catLang = 'ct';
		$blogLang ='博客';


	}else if(is_category(7)){
		
		$catLang = 'mn';
		$blogLang ='博客';

	}

get_header($catLang);

?>



      <div class="row">
        <div class="col-sm-8 blog-main">
		  <br>
          <h1 id="newsTitle"><?php printf( __( '%s', 'bootstrapcanvaswp' ), '<span>' . $blogLang . '</span>' ); ?></h1>

		  <?php get_template_part( 'news-loop', 'category' ); ?>
        </div><!-- /.blog-main -->

      </div><!-- /.row -->
      
<?php 
	
	get_footer($catLang);  
	
?>