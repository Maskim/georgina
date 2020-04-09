<?php get_header(); ?>
	<div class="container">
		<?php if ( borderland_elated_options()->getOptionValue( 'overlapping_content' ) == 'yes' ) { ?>
		<div class="overlapping_content">
			<div class="overlapping_content_inner">
				<?php } ?>
				<div class="container_inner eltd_404_page default_template_holder">
					<div class="page_not_found">
						<h3><?php if ( borderland_elated_options()->getOptionValue( '404_title' ) != "" ): echo esc_html( borderland_elated_options()->getOptionValue( '404_title' ) ); else: ?><?php esc_html_e( 'Page you are looking is Not Found', 'borderland' ); ?><?php endif; ?></h3>
						<h4><?php if ( borderland_elated_options()->getOptionValue( '404_text' ) != "" ): echo esc_html( borderland_elated_options()->getOptionValue( '404_text' ) ); else: ?><?php esc_html_e( 'The page you are looking for does not exist. It may have been moved, or removed altogether. Perhaps you can return back to the site’s homepage and see if you can find what you are looking for.', 'borderland' ); ?><?php endif; ?></h4>
						<a class="qbutton with-shadow" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php if ( borderland_elated_options()->getOptionValue( '404_backlabel' ) != "" ): echo esc_html( borderland_elated_options()->getOptionValue( '404_backlabel' ) ); else: ?><?php esc_html_e( 'Back to homepage', 'borderland' ); ?><?php endif; ?></a>
					</div>
				</div>
				<?php if ( borderland_elated_options()->getOptionValue( 'overlapping_content' ) == 'yes' ) { ?>
			</div>
		</div>
	<?php } ?>
	</div>
<?php get_footer(); ?>