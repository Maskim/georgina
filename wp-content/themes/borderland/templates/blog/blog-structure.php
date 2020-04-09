<?php
$eltd_template_name = get_page_template_slug( borderland_elated_get_page_id() );
$eltd_blog_query    = borderland_elated_get_blog_query_posts();

$blog_style = "1";
if ( borderland_elated_options()->getOptionValue( 'blog_style' ) ) {
	$blog_style = borderland_elated_options()->getOptionValue( 'blog_style' );
}

$filter = "no";
if ( borderland_elated_options()->getOptionValue( 'blog_masonry_filter' ) ) {
	$filter = borderland_elated_options()->getOptionValue( 'blog_masonry_filter' );
}

$blog_list = "";
if ( $eltd_template_name != "" ) {
	if ( $eltd_template_name == "blog-masonry.php" ) {
		$blog_list       = "blog_masonry";
		$blog_list_class = "masonry";
	} elseif ( $eltd_template_name == "blog-masonry-full-width.php" ) {
		$blog_list       = "blog_masonry";
		$blog_list_class = "masonry_full_width";
	} elseif ( $eltd_template_name == "blog-standard.php" ) {
		$blog_list       = "blog_standard";
		$blog_list_class = "blog_standard_type";
	} elseif ( $eltd_template_name == "blog-standard-whole-post.php" ) {
		$blog_list       = "blog_standard_whole_post";
		$blog_list_class = "blog_standard_type";
	} else {
		$blog_list       = "blog_standard";
		$blog_list_class = "blog_standard_type";
	}
} else {
	if ( $blog_style == "1" ) {
		$blog_list       = "blog_standard";
		$blog_list_class = "blog_standard_type";
	} elseif ( $blog_style == "2" ) {
		$blog_list       = "blog_masonry";
		$blog_list_class = "masonry";
	} elseif ( $blog_style == "3" ) {
		$blog_list       = "blog_masonry";
		$blog_list_class = "masonry_full_width";
	} elseif ( $blog_style == "4" ) {
		$blog_list       = "blog_standard_whole_post";
		$blog_list_class = "blog_standard_type";
	} else {
		$blog_list       = "blog_standard";
		$blog_list_class = "blog_standard_type";
	}
}

$pagination_masonry = "pagination";
if ( borderland_elated_options()->getOptionValue( 'pagination_masonry' ) ) {
	$pagination_masonry = borderland_elated_options()->getOptionValue( 'pagination_masonry' );
	if ( $blog_list == "blog_masonry" ) {
		$blog_list_class .= " masonry_" . $pagination_masonry;
	}
}

if ( $blog_list == "blog_masonry" && $filter == "yes" ) {
	get_template_part( 'templates/blog/masonry', 'filter' );
}

$blog_masonry_columns = 'two_columns';
if ( borderland_elated_options()->getOptionValue( 'blog_masonry_columns' ) !== '' ) {
	$blog_masonry_columns = borderland_elated_options()->getOptionValue( 'blog_masonry_columns' );
}

$blog_masonry_full_width_columns = 'three_columns';
if ( borderland_elated_options()->getOptionValue( 'blog_masonry_full_width_columns' ) !== '' ) {
	$blog_masonry_full_width_columns = borderland_elated_options()->getOptionValue( 'blog_masonry_full_width_columns' );
}

if ( $eltd_template_name == "blog-masonry.php" || $blog_style == 2 ) {
	$blog_list_class .= " " . $blog_masonry_columns;
}

if ( $eltd_template_name == "blog-masonry-full-width.php" || $blog_style == 3 ) {
	$blog_list_class .= " " . $blog_masonry_full_width_columns;
}

$icon_left_html = "<i class='pagination_arrow arrow_carrot-left'></i>";
if ( borderland_elated_options()->getOptionValue( 'pagination_arrows_type' ) != '' ) {
	$icon_navigation_class = borderland_elated_options()->getOptionValue( 'pagination_arrows_type' );
	$direction_nav_classes = borderland_elated_horizontal_slider_icon_classes( $icon_navigation_class );
	$icon_left_html        = '<span class="pagination_arrow ' . $direction_nav_classes['left_icon_class'] . '"></span>';
}

$icon_left_html .= '<span class="pagination_label">';
if ( borderland_elated_options()->getOptionValue( 'blog_pagination_next_label' ) != '' ) {
	$icon_left_html .= borderland_elated_options()->getOptionValue( 'blog_pagination_next_label' );
} else {
	$icon_left_html .= esc_html__( "Next", 'borderland' );
}
$icon_left_html .= '</span>';

$icon_right_html = '<span class="pagination_label">';
if ( borderland_elated_options()->getOptionValue( 'blog_pagination_previous_label' ) != '' ) {
	$icon_right_html .= borderland_elated_options()->getOptionValue( 'blog_pagination_previous_label' );
} else {
	$icon_right_html .= esc_html__( "Previous", 'borderland' );
}
$icon_right_html .= '</span>';

if ( borderland_elated_options()->getOptionValue( 'pagination_arrows_type' ) != '' ) {
	$icon_navigation_class = borderland_elated_options()->getOptionValue( 'pagination_arrows_type' );
	$direction_nav_classes = borderland_elated_horizontal_slider_icon_classes( $icon_navigation_class );
	$icon_right_html       .= '<span class="pagination_arrow ' . $direction_nav_classes['right_icon_class'] . '"></span>';
} else {
	$icon_right_html .= "<i class='pagination_arrow arrow_carrot-right'></i>";
}

$max_num_pages = $eltd_blog_query->max_num_pages;
?>
<div class="blog_holder <?php echo esc_attr( $blog_list_class ); ?>">
	<?php if ( $blog_list == "blog_masonry" ) { ?>
		<div class="blog_holder_grid_sizer"></div>
		<div class="blog_holder_grid_gutter"></div>
	<?php } ?>
	<?php if ( $eltd_blog_query->have_posts() ) : while ( $eltd_blog_query->have_posts() ) : $eltd_blog_query->the_post();
		get_template_part( 'templates/blog/' . $blog_list, 'loop' );
		?>
	<?php endwhile; ?>
		<?php if ( $blog_list != "blog_masonry" ) {
			if ( borderland_elated_options()->getOptionValue( 'blog_pagination_type' ) == 'standard' ) {
				borderland_elated_get_blog_pagination( $eltd_blog_query );
			} elseif ( borderland_elated_options()->getOptionValue( 'blog_pagination_type' ) == 'prev_and_next' ) {
				?>
				<div class="pagination_prev_and_next_only">
					<ul>
						<li class='prev'><?php echo wp_kses_post( get_previous_posts_link( $icon_left_html ) ); ?></li>
						<li class='next'><?php echo wp_kses_post( get_next_posts_link( $icon_right_html, $max_num_pages ) ); ?></li>
					</ul>
				</div>
			<?php } ?>
		<?php } ?>
	<?php else: //If no posts are present ?>
		<div class="entry">
			<p><?php esc_html_e( 'No posts were found.', 'borderland' ); ?></p>
		</div>
	<?php endif; ?>
</div>
<?php if ( $blog_list == "blog_masonry" ) {
	if ( $pagination_masonry == "load_more" && get_next_posts_link( null, $max_num_pages ) ) { ?>
		<div class="blog_load_more_button_holder">
			<div class="blog_load_more_button">
				<span data-rel="<?php echo esc_attr( $max_num_pages ); ?>"><?php echo wp_kses_post( get_next_posts_link( esc_html__( 'Show more', 'borderland' ), $max_num_pages ) ); ?></span>
			</div>
		</div>
	<?php } elseif ( $pagination_masonry == "infinite_scroll" ) { ?>
		<div class="blog_infinite_scroll_button">
			<span data-rel="<?php echo esc_attr( $max_num_pages ); ?>"><?php echo wp_kses_post( get_next_posts_link( esc_html__( 'Show more', 'borderland' ), $max_num_pages ) ); ?></span>
		</div>
	<?php } else { ?>
		<?php if ( borderland_elated_options()->getOptionValue( 'blog_pagination_type' ) == 'standard' && borderland_elated_options()->getOptionValue( 'pagination' ) != "0" ) {
			borderland_elated_get_blog_pagination( $eltd_blog_query );
		} elseif ( borderland_elated_options()->getOptionValue( 'blog_pagination_type' ) == 'prev_and_next' ) { ?>
			<div class="pagination_prev_and_next_only">
				<ul>
					<li class='prev'><?php echo wp_kses_post( get_previous_posts_link( $icon_left_html ) ); ?></li>
					<li class='next'><?php echo wp_kses_post( get_next_posts_link( $icon_right_html, $max_num_pages ) ); ?></li>
				</ul>
			</div>
		<?php } ?>
	<?php } ?>
<?php } ?>
