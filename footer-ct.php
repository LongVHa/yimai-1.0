<?php
/**
 * Template for displaying the Cantonese footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package yimai 1.0
 * @since yimai 1.0 1.0
 */
?>
    </div><!-- /.container -->

    <div class="blog-footer">
    
      <?php 
		  
		  get_sidebar( 'ct-footer' );
	  
	 ?>

    </div>
	<div id="footer-infoWrap">
	
			<div id="foot-info">
			
			 Yimai Property Limited  |  Registered in England and Wales - Company Number 10707950   |	copyright - yimai.co.uk 2017
			<br>
			<em>放棄: 非英文的內容是根據英文版內容翻譯的，僅作為參考供讀者使用。</em>
			
			</div>
		
	</div>
    <?php 
	  /*
	   * Always have wp_footer() just before the closing </body>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to reference JavaScript files.
	   */
	  wp_footer(); 
	?>
  </body>
</html>