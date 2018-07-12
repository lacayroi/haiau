<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<input type="text" class="search-field" placeholder="Nhập tên sản phẩm cần tìm kiếm..." value="<?php echo get_search_query(); ?>" name="s" />
		<button>
			<i class="fa fa-search" aria-hidden="true"></i> Search
		</button>
	</div>
</form>
