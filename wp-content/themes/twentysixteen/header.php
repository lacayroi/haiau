<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">

		<header id="masthead" class="site-header" role="banner">
		
			<div id="wraphead clr">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 col-md-3 col-sm-3 hidden-xs">
							<a href="<?php echo get_site_url(); ?>">
								<i class="iconha-logo"></i>
							</a>
						</div>
						<div class="col-lg-8 col-md-9 col-sm-9 hidden-xs">
							<div class="col-lg-9 col-md-9 col-sm-10 searchform">
								<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
									<div>
										<input type="text" class="search-field" placeholder="Nhập tên sản phẩm cần tìm kiếm..." value="<?php echo get_search_query(); ?>" name="s" />
										<button>
											<i class="fa fa-search" aria-hidden="true"></i> Search
										</button>
									</div>
								</form>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-2 hotline">
								<a href="tel:19001772">
									<i class="iconha-hotline"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- #wraphead clr -->
			
			<div id="main-navigation">
				<div class="container-fluid">
					<div class="row">
						<div class="product-category col-lg-2 col-md-3 col-sm-4 hidden-xs">
							<div class="line"> 
								<i class="fa fa-fw"></i>
							</div>
							<span>Danh mục sản phẩm</span>
							<nav>
								<?php
									wp_nav_menu( array(
										'menu' 			=> 'Product Category',
										'menu_class'    => 'product-cat-menu',
										'menu_id'		=> 'menu2017'
									 ) );
								?>
							</nav>
						</div>
						<div class="mainmenu col-lg-10 col-md-9 col-sm-8">
									
							<nav class="navbar navbar-inverse">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand hidden-lg hidden-md" href="<?php echo get_site_url(); ?>"><img class="logo" src="https://haiau.com/wp-content/themes/shop/images/haiau-logo.png" alt="logo hải âu group"></a>
								</div>
								<div class="collapse navbar-collapse" id="myNavbar">
									<?php
										wp_nav_menu( array(
											'theme_location' => 'primary',
											'menu_class'     => 'nav navbar-nav',
										 ) );
									?>
								</div>
								
							</nav>

						</div>
					</div>
				</div>
			</div><!-- #main-navigation -->
			
			<!-- mobile search -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12 col-xs-12 hidden-lg hidden-md">
						<div id="mobile-search" class="clearfix">
							<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="frm-searchform" method="get">
								<div> 
									<input type="text" class="s" name="s" value="" placeholder="Nhập tên sản phẩm cần tìm kiếm..."> 
									<button>
										<i class="fa fa-search" aria-hidden="true"></i>Search
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</header><!-- .site-header -->
		
		<?php
			$current_url = 'http://'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
			if (( $current_url == 'http://dienmayhaiau.com/en/may-lam-da-hai-au/' ) || ( $current_url == 'http://dienmayhaiau.com/en/may-lam-kem-tuoi-hai-au/' )  || ( $current_url == 'http://dienmayhaiau.com/en/may-dun-nuoc-nong/' )  || ( $current_url == 'http://dienmayhaiau.com/en/may-lam-da-vay/' ) || ( $current_url == 'http://dienmayhaiau.com/en/may-hut-bui/' ) || is_home() ) {
		?>
		<div id="slide">
			<div class="container-fluid">
				<div class="row">
					<?php if( !is_home() ) { ?>
						<div class="col-lg-2 col-md-2 pull-left">
							<aside class="homenews">
								<figure><h2><a href="/tin-tuc">Cẩm nang hay - Video</a></h2></figure>
								<?php 
									$r = new WP_Query( array(
									'posts_per_page'      => 3,
									'category_name'       => 'tin-tuc',
									'no_found_rows'       => true,
									'post_status'         => 'publish',
									'ignore_sticky_posts' => true
								) );
								if ($r->have_posts()) :
								?>
								<ul>
									<?php while ( $r->have_posts() ) : $r->the_post(); ?>
									<li>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">							
											<h3><?php the_title(); ?></h3>
										</a>
									</li>
									<?php endwhile; ?>
								</ul>
								<?php endif; ?>
								<div class="wigdet-info">
									<div class="banner">
										<div class="banner-item-t">
											<a href="<?php echo get_site_url(); ?>/cam-nang/" target="_blank">
												<div class="banner-item icon-on-left green">
													<h4>Cẩm nang</h4>
													<i class="fa fa-picture-o" aria-hidden="true"></i>
												</div>
											</a>
										</div>
									</div>
									<div class="banner">
										<div class="banner-item-t">
											<a href="<?php echo get_site_url(); ?>/tag/bao-chi-noi-ve-hai-au/" target="_blank">
												<div class="banner-item icon-on-left red">
													<h4>Báo chí nói về chúng tôi</h4>
													<i class="fa fa-newspaper-o"></i>
												</div>
											</a>
										</div>
									</div>
								</div>
							</aside>
						</div>
					<?php } ?>
					<div class="col-lg-5 col-md-5 pull-right qc1">
						<div class="qc-1">
							<a href="https://haiau.com/may-lam-da-hai-au/"><img class="img-responsive img-qc-top" src="https://haiau.com/wp-content/themes/shop/images/slider/banner-home-right-1.jpg" alt="Giới thiệu Hải Âu Việt Nam"></a>
							<a href="https://haiau.com/may-dun-nuoc-nong/"><img class="img-responsive img-qc-botom" src="https://haiau.com/wp-content/themes/shop/images/slider/banner-home-right-2.jpg" alt="Ship hàng mỹ cùng Hải Âu"></a>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 pull-right qc2">
						<a href="https://haiau.com/may-lam-da-hai-au/">
							<img class="img-responsive" src="https://haiau.com/wp-content/themes/shop/images/slider/home-slider1.jpg" alt="máy làm đá viên Hải Âu">
						</a>
					</div>
				</div>
			</div>
			<div class="clr"></div>
		</div><!-- #slide -->
		<?php } ?>

		<div id="content" class="site-content">
			<div class="container-fluid">
				<div class="row">