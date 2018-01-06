<?php
/**
 * Template for displaying the  Mandarin footer
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
		  
		  get_sidebar( 'mn-footer' );
	  
	 ?>

    </div>
	<div id="footer-infoWrap">
	
		<div id="foot-info">
			易买置业服务有限公司   |   在英国和威尔士注册 - 公司号 10707950   |   版权 - yimai.co.uk 2017
			<br>
			<em>放弃: 非英文的内容是根据英文版内容翻译的，仅作为参考供读者使用。</em>
			
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