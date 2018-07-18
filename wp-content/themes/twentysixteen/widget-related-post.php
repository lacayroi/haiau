<?php
class Wid_Related_Post extends WP_Widget {
	
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'widget_related',
			'description' => 'Show related post',
		);
		parent::__construct( 'widget_related', 'Related Post', $widget_ops );
	}
	
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters('widget_title', $instance['title']);
		$number_post = $instance['num_post'];
	?>
		<div class="widget popular">
			<h4 class="widget-title"><span><?php echo $title; ?> </span></h4>
			<ul>
				<?php
					$categories = get_the_category();
					$category_ids = array();
					foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
					
					$i = 0;
					
					$args=array(
						'category__in' 		=> 	$category_ids,
						'post__not_in' 		=> 	array($post->ID),
						'showposts'			=>	$number_post,
						'caller_get_posts'	=>	1
					);
					$r = new WP_Query( $args );
					while ( $r->have_posts() ) : $r->the_post();
					$len = count($r->the_post);
					if ($i == 0) {
				?>
					<li class="first">  
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_sidebar', array('class' => 'theme-thumb')); ?></a>               
						<h4 class="entry-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h4>
					</li>
				<?php
					} else {
				?>
					<li class="last">                  
						<h4 class="entry-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h4>
					</li>
				<?php
					}
					$i++;
					endwhile; 
					wp_reset_query();
				?>
			</ul>
		</div>
	<?php
	}
	
	public function form( $instance ) {
		$title 		= ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Related Post' );
		$num_post	= ! empty(  $instance['num_post'] ) ? $instance['num_post'] : 5;
	?>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title' ); ?></label>	
		<input class="widefat" id="<?php echo esc_attr_e( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr_e( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr_e( $title ); ?>">
	</p>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'num_post' ) ); ?>"><?php esc_attr_e( 'Number of Post' ); ?></label>
	<input type="text" id="<?php echo esc_attr_e( $this->get_field_id( 'num_post' ) ); ?>" name="<?php echo esc_attr_e( $this->get_field_name( 'num_post' ) ); ?>" value="<?php echo esc_attr_e( $num_post ); ?>">
	</p>
	<?php
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] 		= strip_tags($new_instance['title']);
		$instance['num_post'] 	= strip_tags($new_instance['num_post']);
		return $instance;
	}
}

function register_wid_related_post() {
	register_widget( 'Wid_Related_Post' );
}
add_action( 'widgets_init', 'register_wid_related_post' );