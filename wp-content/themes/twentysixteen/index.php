<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div class="listcat" id="maylamdavien">
		<div class="col-lg-5 col-md-5 col-sm-3 catbox-header-large clearfix">
			<div class="col-lg-5 col-md-5 col-sm-12 catbox-header-large-left">
				<div class="catbox-header-large-title"> <a href="<?php echo get_site_url(); ?>/may-lam-da-hai-au/">Máy Làm Đá Viên Hải Âu 30Kg-1800Kg/Ngày</a></div>
				<div class="catbox-header-large-content hidden-xs">
					<?php
						wp_nav_menu( array(
							'menu'           => 'may-lam-da',
							'menu_class'     => 'menu',
						 ) );
					?>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-9 catbox-header-large-right hidden-sm hidden-xs"> <a href="<?php echo get_site_url(); ?>/may-lam-da-hai-au/"><i class="iconha-mld"></i></a></div>
		</div>
		<div class="col-lg-7 col-md-7 col-sm-9 catbox-content-large catbox-content-large-maylamda">
			<ul>
			<?php 
				$args = array(
					'category_name' 	=> 'may-lam-da-hai-au',
					'posts_per_page'	=> '6',
					'order'				=> 'ASC',
					'orderby'			=> 'id',
				);
				$r = new WP_Query( $args );
				while( $r->have_posts() ) : $r->the_post();
			?>
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item-box div2-clear-both">
					<div class="img-box">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('product_list_home', array('class' => 'img-responsive wp-post-image')); ?>
						</a>
						<h2> <a class="title-box title-box-home" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2></div>
					<div class="price-box  clearfix">
						<p class="current_price"><span class="woocommerce-Price-amount amount">Liên hệ&nbsp;</span>
						</p>
						<p class="old_price old_price_none"></p>
					</div>
				</li>
			<?php
				endwhile;
				wp_reset_query();
			?>
			</ul> 
			<span class="more-product"><a href="<?php echo get_site_url(); ?>/may-lam-da-hai-au/">Xem thêm sản phẩm &gt;&gt;</a></span>
		</div>
	</div>
	
	<div class="listcat" id="maylamkemtuoi">
		<div class="col-lg-5 col-md-5 col-sm-3 catbox-header-large clearfix">
			<div class="col-lg-5 col-md-5 col-sm-12 catbox-header-large-left">
				<div class="catbox-header-large-title"> <a href="<?php echo get_site_url(); ?>/may-lam-kem-tuoi-hai-au/">Máy Làm Kem Tươi Hải Âu (18L/h - 55L/h)</a></div>
				<div class="catbox-header-large-content hidden-xs">
					<?php
						wp_nav_menu( array(
							'menu'           => 'may-lam-kem',
							'menu_class'     => 'menu',
						 ) );
					?>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-9 catbox-header-large-right hidden-sm hidden-xs"> <a href="<?php echo get_site_url(); ?>may-lam-kem-tuoi-hai-au/"><i class="iconha-mlk"></i></a></div>
		</div>
		<div class="col-lg-7 col-md-7 col-sm-9 catbox-content-large catbox-content-large-maylamda">
			<ul>
				<?php 
				$args = array(
					'category_name' 	=> 'may-lam-kem-tuoi-hai-au',
					'posts_per_page'	=> '6',
					'order'				=> 'ASC',
					'orderby'			=> 'id',
				);
				$r = new WP_Query( $args );
				while( $r->have_posts() ) : $r->the_post();
			?>
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item-box div2-clear-both">
					<div class="img-box">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('product_list_home', array('class' => 'img-responsive wp-post-image')); ?>
						</a>
						<h2> <a class="title-box title-box-home" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2></div>
					<div class="price-box  clearfix">
						<p class="current_price"><span class="woocommerce-Price-amount amount">Liên hệ&nbsp;</span>
						</p>
						<p class="old_price old_price_none"></p>
					</div>
				</li>
			<?php
				endwhile;
				wp_reset_query();
			?>
			</ul> 
			<span class="more-product"><a href="<?php echo get_site_url(); ?>/may-lam-kem-tuoi-hai-au/">Xem thêm sản phẩm &gt;&gt;</a></span>
		</div>
	</div>
	
	<div class="listcat" id="maylamdavay">
		<div class="col-lg-5 col-md-5 col-sm-3 catbox-header-large clearfix">
			<div class="col-lg-5 col-md-5 col-sm-12 catbox-header-large-left">
				<div class="catbox-header-large-title"> <a href="<?php echo get_site_url(); ?>/may-lam-da-vay/">Máy Làm Đá Vảy</a></div>
				<div class="catbox-header-large-content hidden-xs">
					<?php
						wp_nav_menu( array(
							'menu'           => 'may-lam-da-vay',
							'menu_class'     => 'menu',
						 ) );
					?>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-9 catbox-header-large-right hidden-sm hidden-xs"> <a href="<?php echo get_site_url(); ?>/may-lam-da-vay/"><i class="iconha-mldv"></i></a></div>
		</div>
		<div class="col-lg-7 col-md-7 col-sm-9 catbox-content-large catbox-content-large-maylamda">
			<ul>
				<?php 
				$args = array(
					'category_name' 	=> 'may-lam-da-vay',
					'posts_per_page'	=> '6',
					'order'				=> 'ASC',
					'orderby'			=> 'id',
				);
				$r = new WP_Query( $args );
				while( $r->have_posts() ) : $r->the_post();
			?>
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item-box div2-clear-both">
					<div class="img-box">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('product_list_home', array('class' => 'img-responsive wp-post-image')); ?>
						</a>
						<h2> <a class="title-box title-box-home" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2></div>
					<div class="price-box  clearfix">
						<p class="current_price"><span class="woocommerce-Price-amount amount">Liên hệ&nbsp;</span>
						</p>
						<p class="old_price old_price_none"></p>
					</div>
				</li>
			<?php
				endwhile;
				wp_reset_query();
			?>
			</ul> 
			<span class="more-product"><a href="<?php echo get_site_url(); ?>/may-lam-da-vay/">Xem thêm sản phẩm &gt;&gt;</a></span>
		</div>
	</div>
	
	<div class="listcat" id="maydunnuocnong">
		<div class="col-lg-5 col-md-5 col-sm-3 catbox-header-large clearfix">
			<div class="col-lg-5 col-md-5 col-sm-12 catbox-header-large-left">
				<div class="catbox-header-large-title"> <a href="<?php echo get_site_url(); ?>/may-dun-nuoc-nong/">Máy Đun Nước Nóng</a></div>
				<div class="catbox-header-large-content hidden-xs">
					<?php
						wp_nav_menu( array(
							'menu'           => 'may-dun-nuoc-nong',
							'menu_class'     => 'menu',
						 ) );
					?>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-9 catbox-header-large-right hidden-sm hidden-xs"> <a href="<?php echo get_site_url(); ?>/may-dun-nuoc-nong/"><i class="iconha-mdnn"></i></a></div>
		</div>
		<div class="col-lg-7 col-md-7 col-sm-9 catbox-content-large catbox-content-large-maylamda">
			<ul>
				<?php 
				$args = array(
					'category_name' 	=> 'may-dun-nuoc-nong',
					'posts_per_page'	=> '6',
					'order'				=> 'ASC',
					'orderby'			=> 'id',
				);
				$r = new WP_Query( $args );
				while( $r->have_posts() ) : $r->the_post();
			?>
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item-box div2-clear-both">
					<div class="img-box">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('product_list_home', array('class' => 'img-responsive wp-post-image')); ?>
						</a>
						<h2> <a class="title-box title-box-home" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2></div>
					<div class="price-box  clearfix">
						<p class="current_price"><span class="woocommerce-Price-amount amount">Liên hệ&nbsp;</span>
						</p>
						<p class="old_price old_price_none"></p>
					</div>
				</li>
			<?php
				endwhile;
				wp_reset_query();
			?>
			</ul> 
			<span class="more-product"><a href="<?php echo get_site_url(); ?>/may-dun-nuoc-nong/">Xem thêm sản phẩm &gt;&gt;</a></span>
		</div>
	</div>
	
	<div class="listcat" id="irobot">
		<div class="col-lg-5 col-md-5 col-sm-3 catbox-header-large clearfix">
			<div class="col-lg-5 col-md-5 col-sm-12 catbox-header-large-left">
				<div class="catbox-header-large-title"> <a href="<?php echo get_site_url(); ?>/may-hut-bui/">Máy Hút Bụi</a></div>
				<div class="catbox-header-large-content hidden-xs">
					<?php
						wp_nav_menu( array(
							'menu'           => 'may-hut-bui',
							'menu_class'     => 'menu',
						 ) );
					?>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-9 catbox-header-large-right hidden-sm hidden-xs"> <a href="<?php echo get_site_url(); ?>/may-hut-bui/"><i class="iconha-irobot"></i></a></div>
		</div>
		<div class="col-lg-7 col-md-7 col-sm-9 catbox-content-large">
			<ul>
				<?php 
				$args = array(
					'category_name' 	=> 'may-hut-bui',
					'posts_per_page'	=> '6',
					'order'				=> 'ASC',
					'orderby'			=> 'id',
				);
				$r = new WP_Query( $args );
				while( $r->have_posts() ) : $r->the_post();
			?>
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item-box div2-clear-both">
					<div class="img-box">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('product_list_home', array('class' => 'img-responsive wp-post-image')); ?>
						</a>
						<h2> <a class="title-box title-box-home" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2></div>
					<div class="price-box  clearfix">
						<p class="current_price"><span class="woocommerce-Price-amount amount">Liên hệ&nbsp;</span>
						</p>
						<p class="old_price old_price_none"></p>
					</div>
				</li>
			<?php
				endwhile;
				wp_reset_query();
			?>
			</ul> 
			<span class="more-product"><a href="<?php echo get_site_url(); ?>/may-hut-bui/">Xem thêm sản phẩm &gt;&gt;</a></span>
		</div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
