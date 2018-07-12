<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php
	$current_url = 'http://'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
	if (( $current_url == 'http://localhost:81/haiau/may-lam-da-hai-au/' ) || ( $current_url == 'http://localhost:81/haiau/may-lam-kem-tuoi-hai-au/' )  || ( $current_url == 'http://localhost:81/haiau/may-dun-nuoc-nong/' )  || ( $current_url == 'http://localhost:81/haiau/may-lam-da-vay/' ) || ( $current_url == 'http://localhost:81/haiau/may-hut-bui/' )) {
?>

	<div class="col-sm-12 col-md-12 col-lg-12">
		<main id="main" class="site-main product" role="main">
		
			<?php custom_breadcrumbs(); ?>
			
			<div class="page-title-wrap">
				<?php
					the_archive_title( '<h1 class="page-title page-title-tax-no-child-home">', '</h1>' );
				?>
			</div>

			<?php
				if (have_posts()) :
			?>
				<ul class="products">
					<?php
						global $count_post; 
						$count_post = 0;
					?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); 
						?>
							<li class="col-lg-3 col-md-3 col-sm-4 col-xs-12 item-box" itemscope itemtype="http://schema.org/Article">
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="img-box">
										<span itemprop='image' itemscope itemtype='http://schema.org/ImageObject'>
											<a href="
												<?php esc_url( the_permalink() ); ?>" itemprop='contentUrl url' title="
												<?php printf( esc_html__( '%s', 'vania' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
												<?php the_post_thumbnail('product_archive', array('class' => 'img-responsive','itemprop' => 'image')); ?>
											</a>
											<span class="hidden" itemprop='width'>267</span>
											<span class="hidden" itemprop='height width'>200</span>
										</span>
										<a class="hidden" itemprop="mainEntityOfPage" href="
											<?php esc_url( the_permalink() ); ?>" title="
											<?php printf( esc_html__( 'Permalink to %s', 'vania' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
										</a>
										<?php 
											the_title( sprintf( '
										<h2 itemprop="name headline" class="hidden-lg hidden-md hidden-sm hidden-xs entry-title entry-title-home-cat">
											<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>
										</h2>' );                                 
												?>
									</div>
									<div class="title-box">
										<?php the_title( sprintf( '
										<span class="hidden-lg1 hidden-md1 entry-title">
											<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>
										</span>' ); ?>
									</div>
								</article>
							</li>
                                    
					
					<?php endwhile; else : 
						include(TEMPLATEPATH. '/404.php');

					endif; ?>
					
					<?php if ( $wp_query->max_num_pages > 1 )  { hr_pagenavi(); }; ?>
									
				</ul> <!-- #vn-main-feed -->

			<?php endif; ?>
			
			<?php   
                $cuprent_url = 'http://'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
				
                if($cuprent_url == 'http://localhost:81/haiau/may-dun-nuoc-nong/') {
                    include 'description-taxonomy-may-dun-nuoc-nong.php';
                } 
                elseif($cuprent_url == 'http://localhost:81/haiau/may-lam-da-vay/') {
                    include 'description-taxonomy-may-lam-da-vay.php';
                }
                elseif($cuprent_url == 'http://localhost:81/haiau/may-lam-kem-tuoi-hai-au/') {
                    include 'description-taxonomy-maylamkem.php';
                } 
		        elseif($cuprent_url == 'http://localhost:81/haiau/may-lam-da-hai-au/') {
    			    include 'description-taxonomy-maylamda.php';
		        }
            ?>  

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php  
	} else {
?>

	<div class="col-sm-12 col-md-12 col-lg-12">
		<main id="main" class="site-main" role="main">
		
			<?php custom_breadcrumbs(); ?>
			
			<div class="heading">
				<?php
					the_archive_title( '<h1>', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</div>

			<?php
				if (have_posts()) :
			?>
				<div id="vn-main-feed">
					<?php
						global $count_post; 
						$count_post = 0;
					?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); $count_post++; 
					if($count_post == 1): 
						?>
							<div class="vn-entry col-md-4 col-sm-4 col-xs-12 <?php if ($count_post % 2 <> 0) echo ' clear-both-768 clear-both-480'; ?>" itemscope itemtype="http://schema.org/Article">
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="featured-img">
										<span itemprop='image' itemscope itemtype='http://schema.org/ImageObject'>
											<a href="
												<?php esc_url( the_permalink() ); ?>" itemprop='contentUrl url' title="
												<?php printf( esc_html__( '%s', 'vania' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
												<?php the_post_thumbnail('post_archive', array('class' => 'img-responsive','itemprop' => 'image')); ?>
											</a>
											<span class="hidden" itemprop='width'>820</span>
											<span class="hidden" itemprop='height width'>460</span>
										</span>
										<a class="hidden" itemprop="mainEntityOfPage" href="
											<?php esc_url( the_permalink() ); ?>" title="
											<?php printf( esc_html__( 'Permalink to %s', 'vania' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
										</a>
										<?php 
											the_title( sprintf( '
										<h2 itemprop="name headline" class="hidden-lg hidden-md hidden-sm hidden-xs entry-title entry-title-home-cat">
											<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>
										</h2>' );                                 
												?>
									</div>
									<div class="entry-content entry-fade">
										<?php the_title( sprintf( '
										<span class="hidden-lg1 hidden-md1 entry-title">
											<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>
										</span>' ); ?>
										<ul class="list-prev-post">
								<?php else: ?>
									<li>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</li>
								<?php endif; ?>  

								
							<?php if($count_post == 3){ echo '</ul></div></article></div>'; $count_post =0;} ?>                                    
					
					<?php endwhile; else : 
						include(TEMPLATEPATH. '/404.php');
										
					endif; ?>
					
					<?php if ( $wp_query->max_num_pages > 1 )  { hr_pagenavi(); }; ?>
									
				</div> <!-- #vn-main-feed -->

			<?php endif; ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->
	
<?php
	}
?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
