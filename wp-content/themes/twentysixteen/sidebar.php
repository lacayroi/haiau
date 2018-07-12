<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<div class="col-sm-12 col-md-3 col-lg-3">
		<aside id="secondary" class="sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside><!-- .sidebar .widget-area -->
	</div>
<?php endif; ?>

<?php
// change the following according to your defaults sidebar if exists
$sidebar = 'main_sidebar'; 
// if in singular post/page check for saved custom sidebar
if ( is_singular() ) {
  $id = get_queried_object_id(); // get current post/page id
  $custom = get_post_meta( $id, '_custom_sidebar', true ); // get selected sidebar
  if ( ! empty($custom) ) $sidebar = $custom;
}
if ( is_active_sidebar( $sidebar ) ) {
?>
	<div id="widget" class="col-sm-12 col-md-3 col-lg-3">
		<?php dynamic_sidebar( $sidebar ); ?>
	</div>
<?php } ?>