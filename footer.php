<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package yimai 1.0
 * @since yimai 1.0 1.0
 */
?>
    </div><!-- /.container -->

		
	<div class="foot-logos-wrap">	
	
			<div class="foot-logo-container">
						
				<div id="tpos-wrap">
				 
						<div id="tpos-container">
							<a href="https://www.tpos.co.uk/" target="_blank">
							<img src="http://www.yimai.co.uk/wp-content/uploads/2017/11/tpos-logo-sm.png"></a>
						</div>
						
						<div id="tpos-addr">Milford House,
							43 - 55 Milford Street,
							Salisbury,
							Wiltshire,
							SP1 2BP
						</div>
						
				</div>

				
				<div id="tsi-wrap">
					<a href="https://www.tradingstandards.uk/" target="_blank">
					<img src="http://www.yimai.co.uk/wp-content/uploads/2017/11/TSICodeLogosml.png
					"></a>
				</div>
				
			</div>	
	</div>
	
	
	
    <div class="blog-footer">
    
      <?php 
	  $languageType = get_post_meta($post->ID, 'langType', false);
	  $langType = preg_replace("[^A-Z]", "", $languageType);
	  
	  if($langType[0] == 'MN'){
		  
		  get_sidebar( 'mn-footer' );
		  
	  }else if($langType[0] == 'CT'){
		  
		  get_sidebar( 'ct-footer' );
	  
	  }else{
 
		   get_sidebar( 'footer' );
	  }
	  
	 ?>
     
    </div>
	
	
	<div id="footer-infoWrap">

	
	 <?php if($langType[0] == 'MN'){ ?>
	 
		<div id="foot-info">
			易买置业服务有限公司   |   在英国和威尔士注册 - 公司号 10707950   |   版权 - yimai.co.uk 2017
			<br>
			<em>放弃: 非英文的内容是根据英文版内容翻译的，仅作为参考供读者使用。</em>
			
		</div>
		
	 <?php }else if($langType[0] == 'CT') { ?>
		 
			<div id="foot-info">
			
			 Yimai Property Limited  |  Registered in England and Wales - Company Number 10707950   |	copyright - yimai.co.uk 2017
			<br>
			<em>放棄: 非英文的內容是根據英文版內容翻譯的，僅作為參考供讀者使用。</em>
			
			</div>
		
		
	 <?php }else{ ?>	
		<div id="foot-info">
			 Yimai Property Limited  |  Registered in England and Wales - Company Number 10707950   |	copyright - yimai.co.uk 2017
			 <br>
			 <div id="disclmr-wrap"><em>Translation Disclaimer: Non English content is based on a translation of the English content and should only be viewed as such.</em></div>
		</div>
	
	 <?php } ?>
	
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