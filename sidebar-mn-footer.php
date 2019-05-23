<?php
/**
 * The CN Footer widget areas
 *
 * @package yimai 1.0
 * @since yimai 1.0 1.0
 */
?>
	  <?php if ( is_active_sidebar( 'mn-first-widget-area' ) || is_active_sidebar( 'mn-second-widget-area' ) || is_active_sidebar( 'mn-third-widget-area' ) || is_active_sidebar( 'mn-fourth-widget-area' ) ) : ?>
      <div class="container">
    
        <div class="row">
        
          <div class="col-sm-3">
            <div class="footer-module">
              <?php dynamic_sidebar( 'mn-first-widget-area' ); ?>
            </div>
          </div>
        
          <div class="col-sm-3">
            <div class="footer-module">
              <?php dynamic_sidebar( 'mn-second-widget-area' ); ?>
            </div>
          </div>
        
          <div class="col-sm-3">
            <div class="footer-module">
              <?php dynamic_sidebar( 'mn-third-widget-area' ); ?>
            </div>
          </div>
          
          <div class="col-sm-3">
            <div class="footer-module">
              <?php dynamic_sidebar( 'mn-fourth-widget-area' ); ?>
            </div>
          </div>
		  
		 <div class="col-sm-3">
            <div class="footer-module">
              <?php dynamic_sidebar( 'mn-fifth-widget-area' ); ?>
            </div>
          </div>
        
        </div><!-- /.row -->
      
	  </div><!-- /.container -->
      <?php endif ; ?>
	  