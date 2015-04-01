<?php
class posts extends WP_Widget {

	function posts() {
		parent::__construct( false, 'Posts (current theme)' );
	}

	function widget( $args, $instance ) {
		extract($args);

        echo $before_widget;
        echo $before_title;
        echo $instance['widget_title'];
        echo $after_title;

		$postsArgs = array(
		'showposts'     => $instance['posts_widget_number'],
		'offset'          => 0,
		'orderby'         => 'date',
		'order'           => 'DESC',
		'post_type'       => 'post',
		'post_status'     => 'publish',
        'suppress_filters' => FALSE
        );

        $firstCat = get_the_category( get_the_ID() );
        $readmorelinktext = ((gt3_get_theme_option("translator_status") == "enable") ? gt3_get_text("read_more_link") : __('Read more!','theme_localization'));
        $compilepopular = '';

		$wp_query_posts = new WP_Query();
		$wp_query_posts->query($postsArgs);
		while ($wp_query_posts->have_posts()) : $wp_query_posts->the_post();
		$featured_image_latest = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );

		$compilepopular .= '
			<li '.((has_post_thumbnail()) ? '' : 'class="no_img"').'>';
                if (has_post_thumbnail()) {
                    $compilepopular .= '<div class="recent_posts_img"><img src="'.aq_resize($featured_image_latest[0], "86", "86", true).'" alt="'.get_the_title().'"></div>';
                }

$compilepopular .= '
                <div class="recent_posts_content">
                    <a class="post_title read_more" href="'.get_permalink().'">'.get_the_title().'</a>
                    '.gt3_smarty_modifier_truncate(get_the_excerpt(), ((has_post_thumbnail()) ? 85 : 105)).'
                    <!--span class="post_date">'.get_the_time("d M Y").'</span>&nbsp;&nbsp;/&nbsp;&nbsp;<a class="read_more" href="'.get_permalink().'">'.$readmorelinktext.'</a-->
                </div>
                <div class="clear"></div>
			</li>
		';

		endwhile; wp_reset_query();

		echo '
			<ul class="recent_posts">
				'.$compilepopular.'
			</ul>
		';

		#END OUTPUT

		echo $after_widget;
	}


	function update( $new_instance, $old_instance ) {
        $instance = $old_instance;

        $instance['widget_title'] = esc_attr( $new_instance['widget_title'] );
        $instance['posts_widget_number'] = absint( $new_instance['posts_widget_number'] );

        return $instance;
	}

	function form( $instance ) {
        $defaultValues = array(
            'widget_title' => 'Posts',
            'posts_widget_number' => '3'
        );
        $instance = wp_parse_args((array) $instance, $defaultValues);
	?>
		<table class="fullwidth">
            <tr>
				<td>Title:</td>
				<td><input type='text' class="fullwidth" name='<?php echo $this->get_field_name( 'widget_title' ); ?>' value='<?php echo $instance['widget_title']; ?>'/></td>
			</tr>
			<tr>
				<td>Number:</td>
				<td><input type='text' class="fullwidth" name='<?php echo $this->get_field_name( 'posts_widget_number' ); ?>' value='<?php echo $instance['posts_widget_number']; ?>'/></td>
			</tr>
		</table>
	<?php
	}
}

function posts_register_widgets() { register_widget( 'posts' ); }
add_action( 'widgets_init', 'posts_register_widgets' );

?>