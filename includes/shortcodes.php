<?php

add_shortcode('show-carousel', 'create_carousel');

function create_carousel(){

			$post_args = array(
				'numberposts' => 9,
				'category'         => 0,
		        'orderby'          => 'date',
		        'order'            => 'DESC',
		        'include'          => array(),
		        'exclude'          => array(),
		        'meta_key'         => '',
		        'meta_value'       => '',
		        'post_type'        => 'post',
		        'suppress_filters' => true,
			);

			$posts = get_posts( $post_args );

			if( $posts ): ?>

			<div class="post-items">

			<?php 

			foreach( $posts as $post ): 

			setup_postdata( $post );

			$image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');

			?>			
			
			<div class="slick-container">
				<a href="<?php the_permalink($post->ID); ?>"><img src="<?php echo $image[0] ?>" alt="<?php echo $post->post_title; ?>"></a>
				<h2><?php echo $post->post_title; ?></h2>
				<p><?php echo get_the_date( 'F d, Y', $post->ID ) ?></p> 

			</div>;


			<?php endforeach; ?>

			<?php endif;

}

