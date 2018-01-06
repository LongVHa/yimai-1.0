<?php
/**
 * The ct Footer widget areas
 *
 * @package yimai 1.0
 * @since yimai 1.0 1.0
 */
?>
	  <?php if ( is_active_sidebar( 'ct-first-widget-area' ) || is_active_sidebar( 'ct-second-widget-area' ) || is_active_sidebar( 'ct-third-widget-area' ) || is_active_sidebar( 'ct-fourth-widget-area' ) ) : ?>
      <div class="container">
    
        <div class="row">
        
          <div class="col-sm-3">
            <div class="footer-module">
              <?php dynamic_sidebar( 'ct-first-widget-area' ); ?>
            </div>
          </div>
        
          <div class="col-sm-3">
            <div class="footer-module">
              <?php dynamic_sidebar( 'ct-second-widget-area' ); ?>
            </div>
          </div>
        
          <div class="col-sm-3">
            <div class="footer-module">
              <?php dynamic_sidebar( 'ct-third-widget-area' ); ?>
            </div>
          </div>
          
          <div class="col-sm-3">
            <div class="footer-module">
              <?php dynamic_sidebar( 'ct-fourth-widget-area' ); ?>
            </div>
          </div>
        

		
        </div><!-- /.row -->
      
	  </div><!-- /.container -->
      <?php endif ; ?>
	  