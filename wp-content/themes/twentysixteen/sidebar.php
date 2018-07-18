<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php
// change the following according to your defaults sidebar if exists
$sidebar = 'sidebar-1'; 
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
<?php } else { ?>
	<div id="widget" class="col-sm-12 col-md-3 col-lg-3">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
<?php } ?>