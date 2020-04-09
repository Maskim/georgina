<?php
/*
Template Name: Blog Masonry Full Width
*/

get_header();

$borderland_sidebar = borderland_elated_get_sidebar_layout();

borderland_elated_set_blog_word_count( 'blog_masonry_number_of_chars' );
?>
	<div class="full_width" <?php borderland_elated_inline_page_background_style(); ?>>
		<div class="full_width_inner clearfix <?php echo esc_attr( borderland_elated_options()->getOptionValue( 'blog_masonry_filter' ) == "yes" ? 'full_page_container_inner' : '' ); ?>" <?php borderland_elated_inline_page_padding_style(); ?>>
			<?php
			echo borderland_elated_get_blog_content_part();
			get_template_part( 'templates/blog/blog', 'structure' );
			?>
		</div>
	</div>
<?php get_footer(); ?>