<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php

	$categories = get_the_category();

	foreach($categories as $cat) {
		$cate = $cat->slug;
	}
	
	if (( $cate == 'may-lam-kem-tuoi-hai-au' ) || ( $cate == 'may-lam-da-hai-au' )  || ( $cate == 'may-dun-nuoc-nong' )  || ( $cate == 'may-lam-da-vay' ) || ( $cate == 'may-hut-bui' )) {
?>

	<div itemprop="publisher" itemtype="http://schema.org/Product" id="content" class='product-detail'> 
		
		<?php custom_breadcrumbs(); ?>         
		
		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
			  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<img src="<?php echo $image[0]; ?>">
			<?php endif; ?>
		</div>
		<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 product-infor">
			<div id="brc_muntil" class="clearfix hidden-xs">
				<div class="tax_parent"> <?php the_category(', '); ?></div>
			</div>
			<h1 itemprop="name" class="entry-title"><?php the_title(); ?></h1>
			<div class="row">	
				<div class="col-lg-6 col-md-6 col-sm-6 product-infor-left">
					<div id="product-infor"> 
						<span class="product-infor-title">Thương hiệu: </span>
						<span itemprop="brand" itemscope="" itemtype="http://schema.org/Brand">
							<span itemprop="name" class="thuong-hieu-content">Hải Âu</span>
						</span>
						<div id="single-product-current_price"> 
							<span class="product-infor-title">Giá tại Hải Âu: </span>
							<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="single-product-current_price">
								<span itemprop="price" content="<?php the_field('gia'); ?>"><?php the_field('gia'); ?> </span><span class="ti-gia" itemprop="priceCurrency" content="VNĐ">VNĐ</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 product-infor-right">
					<ul>
						<li> <a class="chatfb" target="_blank" href="https://m.me/haiaucom/" title="Gửi tin nhắn cho Hải Âu trên Facebook">Chat với Hải Âu</a></li>
					</ul>
				</div>
			</div>
			<div class="row description ">
				<div class="description-title">
					<p>Thông tin &amp; Khuyến mãi</p>
				</div>
				<div id="product-description" itemprop="description">
					<?php the_field('motangan'); ?>
				</div>
			</div>
		</div>
 
		<div id="single-product-content" class="clearfix">
			<div class="entry entry-content clearboth">
					<?php if(get_option('hires_integrate_singletop_enable') == 'on') echo (get_option('hires_integration_single_top')); ?>
					
					<?php the_content(); ?>

					<?php if(get_option('hires_integrate_singlebottom_enable') == 'on') echo (get_option('hires_integration_single_bottom')); ?>

			</div> <!--end .entry-->   
			
			<div class="clear"></div>

		</div>
		
		<div class="related-content clearfix">
			<div class="related-content-heading">
				<p>Sản phẩm liên quan</p>
			</div>
			<div class="row">
				<?php
					$categories = get_the_category($post->ID);
					if ($categories) 
					{
						$category_ids = array();
						foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
				 
						$args=array(
							'category__in' 		=> 	$category_ids,
							'post__not_in' 		=> 	array($post->ID),
							'showposts'			=>	4,
							'caller_get_posts'	=>	1
						);
						$my_query = new wp_query($args);
						if( $my_query->have_posts() ) 
						{
							while ($my_query->have_posts())
							{
								$my_query->the_post();
								?>
								
								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-related col-tag div2-clear-both">
									<div class="img-box">
										<a href="<?php the_permalink(); ?>">
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'related-product' ); ?>
												<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
										</a>
									</div>
									<div class="title-box"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
								</div>
								
								<?php
							}
						}
					}
					wp_reset_query();
				?>
			</div>
		</div>
		
	</div>

<?php
} else {
?>

<div itemprop="publisher" itemtype="http://schema.org/Article" id="content"> 
	
	<?php custom_breadcrumbs(); ?>         
	
	<div class="heading">
		<h1 itemprop="name" class="entry-title"><?php the_title(); ?></h1>
	</div>

	<div class="entry-meta entry-meta-single entry-meta-single"> 
		<i class="fa fa-calendar"></i>      
		<h3 class="timeline-date-stamp"><span class="entry-date" itemprop="datePublished" content="<?php the_time(get_option('date_format')); ?>"><time class="entry-date updated"><?php the_time(get_option('date_format')); ?></time></span></h3>                                          
		| 
		<i class="fa fa-folder-open"></i> 
		<?php the_category(', '); ?>
		| 
		<i class="fa fa-user" aria-hidden="true"></i>
		<span itemprop="author">
		<?php 
			$author_id=$post->post_author;
			echo the_author_meta( 'display_name' , $author_id ); 
		?>
		</span>
	</div>   
	
	<div  class="entry entry-content clearboth">
			<?php if(get_option('hires_integrate_singletop_enable') == 'on') echo (get_option('hires_integration_single_top')); ?>
			
			<?php the_content(); ?>

			<?php if(get_option('hires_integrate_singlebottom_enable') == 'on') echo (get_option('hires_integration_single_bottom')); ?>

	</div> <!--end .entry-->   
	
	<div class="clear"></div>
	
	<div class="single-share">
		<div class="btn-share"><strong>Chia sẻ bài viết :</strong></div>
		
		<div style="float: left; padding-right: 10px; padding-top: 5px;">
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&appId=1655431778095019&autoLogAppEvents=1';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
		</div>
		
		<div class="btn-plus">
			<!-- Place this tag in your head or just before your close body tag. -->
			<script src="https://apis.google.com/js/platform.js" async defer></script>

			<!-- Place this tag where you want the share button to render. -->
			<div class="g-plus" data-action="share"></div>
		</div><!-- .btn-plus -->    
	</div><!-- .single-share --> 
	
	<div class="container-single-like-share-fb">
		<div class="single-like-share-fb row">
			<?php $link = rawurlencode(get_permalink()); ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 single-like-share-fb1">  
				<img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images/likeus.png" alt="" />
				<div class="fb-like" data-href="https://www.facebook.com/haiaucom/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 single-like-share-fb2">
				<a onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $link; ?>" class="fb-share">
					<div class="big-shares big-share-col">Share<span> Bài Viết Này</span></div></a>
			</div>


		</div>
	</div>
	
	<div class="clear"></div>
	<h3 class="section-title">Bình luận</h3>               
	<div class="clear"></div>
	<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5" data-width="auto"></div>
	
</div>

<?php
}
?>