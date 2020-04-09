<?php
$title_tag = "h5";
if ( borderland_elated_options()->getOptionValue( 'blog_single_title_tags' ) ) {
	$title_tag = borderland_elated_options()->getOptionValue( 'blog_single_title_tags' );
}
$headings_array = array( 'h2', 'h3', 'h4', 'h5', 'h6' );
//get correct heading value
$title_tag = ( in_array( $title_tag, $headings_array ) ) ? $title_tag : 'h5';

get_template_part( 'templates/blog/blog_single/blog_standard_type_single', 'loop' );

if ( has_tag() ) { ?>
	<div class="single_tags clearfix">
		<div class="tags_text">
			<<?php echo esc_attr( $title_tag ); ?> class="single_tags_heading"><?php esc_html_e( 'Tags:', 'borderland' ); ?></<?php echo esc_attr( $title_tag ); ?>>
			<?php the_tags( '', '', '' ); ?>
		</div>
	</div>
<?php } ?>
<?php
borderland_elated_wp_link_pages();

get_template_part( 'templates/blog/blog_single/blog-navigation' );

if ( borderland_elated_options()->getOptionValue( 'blog_author_info' ) == "yes" && get_the_author_meta( 'description' ) != "" ) { ?>
	<div class="author_description">
		<div class="author_description_inner">
			<div class="image">
				<?php echo borderland_elated_get_module_part( get_avatar( get_the_author_meta( 'ID' ), 102 ) ); ?>
			</div>
			<div class="author_text_holder">
				<<?php echo esc_attr( $title_tag ); ?> class="author_name">
					<?php if ( get_the_author_meta( 'first_name' ) != "" || get_the_author_meta( 'last_name' ) != "" ) {
						echo esc_attr( get_the_author_meta( 'first_name' ) ) . " " . esc_attr( get_the_author_meta( 'last_name' ) );
					} else {
						echo esc_attr( get_the_author_meta( 'display_name' ) );
					} ?>
				</<?php echo esc_attr( $title_tag ); ?>>
				<?php if ( borderland_elated_options()->getOptionValue( 'enable_author_info_email' ) == "yes" && is_email( get_the_author_meta( 'email' ) ) ) { ?>
					<span class="author_email"><?php echo sanitize_email( get_the_author_meta( 'email' ) ); ?></span>
				<?php } ?>
				<div class="author_text">
					<p><?php echo esc_attr( get_the_author_meta( 'description' ) ); ?></p>
				</div>
			</div>
		</div>
	</div>
<?php } ?>