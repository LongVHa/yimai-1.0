<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package yimai 1.0
 * @since yimai 1.0 1.0
 */
 
 
 //lang selector
$languageType = get_post_meta($post->ID, 'langType', false);
$langType = preg_replace("[^A-Z]", "", $languageType); 
 
 
?><!DOCTYPE html>



<?php if($langType[0] == 'MN'){ //change language type to Mandarin?>
<html lang="zh-hans">

<?php }else if ($langType[0] == 'CT') { //change language type to cantonese?>
<html lang="zh-hant">

<?php }else{?>

<html <?php language_attributes(); ?>>

<?php }?> 
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	
	
	<?php
	  /*
	   * We add some JavaScript to pages with the comment form
	   * to support sites with threaded comments (when in use).
	   */
	  if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		
	  /*
	   * Always have wp_head() just before the closing </head>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to add elements to <head> such
	   * as styles, scripts, and meta tags.
	   */
	  wp_head(); 
	  
	  $languageType = get_post_meta($post->ID, 'langType', false);
	  $langType = preg_replace("[^A-Z]", "", $languageType);

          if($langType[0] == 'MN'){// hide EN cookie popup for MN pages
          ?>
          
          <style>
            #cookieChoiceInfo, #eu-cookie-bar{display:none!important;}
          </style>

          <?php
          }else if($langType[0] == 'CT'){//hide EN pop up for CT pages
		  ?> 
           <style>
           #cookieChoiceInfo{display:none!important;}
           </style>
		  <?php 
		  }else{ //hide CT pop up for EN pages
		  ?>
		   <style>
           #eu-cookie-bar{display:none!important;}
           </style>
		  <?php } ?>
	
	
  </head>
  <body <?php body_class(); ?>>
    
	
    <div class="blog-header">
      <div class="container">

	  
    <div id="mob-menu-container">

		 <div id="mob-flag-container">
			<div class="mob-flag"><a href="/">EN</a></div>
			<div class="mob-flag"><a href="/mn">简</a></div>
			<div class="mob-flag"><a href="/ct">繁</a></div>
		 </div>
			
		  <div id="toggleBtn" onclick="toggleMenu()">
	       	<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div> 
		  </div>
	</div>		

	
<div id="mob-menu" class="mob-menu">
	
	<?php
	
	if($langType[0] == 'MN'){ //display chinese mobile menu
		
	wp_nav_menu( array(
	    'menu'     => 'mn-top',
	    'container'      => 'false',
	    'items_wrap'     => '%3$s',
	) );

	wp_nav_menu( array(
			'menu'     => 'mn-bottom',
			'container'      => 'false',
			'items_wrap'     => '%3$s'
	) );
	
	}else if($langType[0] == 'CT'){
		
		wp_nav_menu( array(
	    'menu'     => 'ct-top',
	    'container'      => 'false',
	    'items_wrap'     => '%3$s',
	) );

	wp_nav_menu( array(
			'menu'     => 'ct-bottom',
			'container'      => 'false',
			'items_wrap'     => '%3$s'
	) );
	
	}else{
       	 wp_nav_menu( array(
	    'theme_location' => 'primary',
	    'menu_class'     => 'primary-menu',
	    'container'      => 'false',
	    'items_wrap'     => '%3$s',
	    'fallback_cb'    => 'bootstrap_canvas_wp_menu_fallback',
	  ) );
	  
	   wp_nav_menu( array(
				'theme_location' => 'secondary',
				'menu_class'     => 'secondary-menu',
				'container'      => 'false',
				'items_wrap'     => '%3$s'
	   ) );
	} 
	?>
	
</div>



	  
	  <?php if($langType[0] == 'MN'){ ?>
  
	  	<div id="logo-container">
		
			<div id="logo" class="logo">
				
			 <a href="/mn"><img class="custom-logo" width="100" height="121" src="https://www.yimai.co.uk/wp-content/uploads/2017/04/logo.png">
	
			<p class="lead blog-description cn-lead">置业顾问</p></a>

		</div><!--logo-->
	  
	  <?php }else if($langType[0] == 'CT'){ ?>
	  
	  	  	<div id="logo-container">
		
			<div id="logo" class="logo">
				
			 <a href="/ct"><img class="custom-logo" width="100" height="121" src="https://www.yimai.co.uk/wp-content/uploads/2017/04/logo.png">
	
			<p class="lead blog-description cn-lead">房產顧問</p></a>

		</div><!--logo-->
	  

	  <?php }else{ ?>
	  
		<div id="logo-container">
			<div id="logo" class="logo">
			<?php if ( function_exists( 'the_custom_logo' ) ) :
			  the_custom_logo();
			endif; ?>

        <p class="lead blog-description"><?php bloginfo( 'description' ); ?></p>

		</div><!--logo-->
			
	  <?php }?>
			
		</div>
      </div>
    </div>
	
    <nav id="site-navigation" class="navigation main-navigation" role="navigation">
      <div class="container">
	  
	  <!-- #primary site-navigation -->
      <ul id="primary-menu" class="nav-menu">
	  
	  <div id="flags-wrap">
	  
		  <span class="menu-contact-item"><img src="https://www.yimai.co.uk/wp-content/uploads/2018/05/tel.png" />+44 7702 171463</span>
		  <span class="menu-contact-item"><img src="https://www.yimai.co.uk/wp-content/uploads/2018/05/email.png" />info@yimai.co.uk</span>
	  
		  <span class="flag-item"><span class="divider">|</span><a href="/">EN</a></span>
		  <span class="flag-item"><a href="/mn">简</a></span>
		  <span class="flag-item"><a href="/ct">繁</a> <span class="divider">|</span> </span>

		  

	  </div>

	  
	<?php
	

	if($langType[0] == 'MN'){	 //display Chinese menu
	
		wp_nav_menu( array(
	    'menu'     => 'mn-top',
		'container_class'      => 'mn-menu-top',
	    'items_wrap'     => '%3$s',
	  ) );
	}else if ($langType[0] == 'CT'){
		
		wp_nav_menu( array(
	    'menu'     => 'ct-top',
		'container_class'      => 'ct-menu-top',
	    'items_wrap'     => '%3$s',
	  ) );
		
	}else{
       	  wp_nav_menu( array(
	    'theme_location' => 'primary',
	    'menu_class'     => 'primary-menu',
	    'container'      => 'false',
	    'items_wrap'     => '%3$s',
	    'fallback_cb'    => 'bootstrap_canvas_wp_menu_fallback',
	  ) );
	}  
	?>

      </ul>
 
      </div>
    </nav><!-- #primary site-navigation -->
	

	<!-- #2nd site-navigation -->
	
 <nav id="2nd-site-navigation" class="second-navbar" role="navigation">
      <div class="container secondary-container">
      
	<ul id="secondary-menu">
	<?php if($langType[0] == 'MN'){ ?>
	
		<div id="we-help"><a href="/mn/关于我们/">我们为您服务</a></div>
		
	<?php }else if($langType[0] == 'CT'){ ?>
	
		<div id="we-help"><a href="/ct/關于我們/">我們幫忙</a></div>
	

	<?php }else{ ?>
	
		<div id="we-help"><a href="/about-us">WE HELP</a></div>
	
	<?php } ?>
	
	
			<?php
			
		if($langType[0] == 'MN'){	 //display Chinese menu
	
			wp_nav_menu( array(
			'menu'     => 'mn-bottom',
			'container_class'      => 'mn-menu-bottom',
			'items_wrap'     => '%3$s'
			) );
			
	    }else if($langType[0] == 'CT'){
			
			wp_nav_menu( array(
			'menu'     => 'ct-bottom',
			'container_class'      => 'ct-menu-bottom',
			'items_wrap'     => '%3$s'
			) );
			
		}else{
			
			wp_nav_menu( array(
			'theme_location' => 'secondary',
			'menu_class'     => 'secondary-menu',
			'container'      => 'false',
			'items_wrap'     => '%3$s'
			) );
		}	
		
			?>
      </ul>
 
      </div>
</nav><!-- #2nd site-navigation -->
	

    <?php 
	
	$slideName = get_post_custom_values('slideName', $post_id); 

	$slide = preg_replace("[^A-Za-z]", "", $slideName);

	if(!empty($slide[0])){	 
		putRevSlider($slide[0]);
	}
	
	?>
		 
<?php 
/*use featured image as parallax bg image*/

			   if ( has_post_thumbnail() ) : ?>

			<div class="parallax" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">

			<h3 class="plx-page-title"><?php the_title(); ?></h3>
				 
				<?php
					/*Get sub heading*/
					
					$subHeadTxt = get_post_custom_values('subHeading', $post_id); 
					
					$subHeading = preg_replace("[^a-zA-Z., ]", "", $subHeadTxt);
					
					echo '<div class="subHeading">'.$subHeading[0].'</div>';
					
					?>

			</div>	
			
					
			<?php else : 		
			
					if(is_page([6,512,843])){
						
					}elseif(is_page($page = 'contact-us')){ ?>
					
					<h2 class="contact-page-title"><?php the_title(); ?></a></h2>
					
					<?php 
					}elseif(is_category(1) || in_category(1)){ // remove title if is blog archive page				
					}else{ ?>
					
					<h1 class="page-title"><?php the_title(); ?></a></h1>
					
					<?php }?>
					

			<?php endif;
	/*end parallax*/
?>	

	
    <div class="container">