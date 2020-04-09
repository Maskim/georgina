<?php if ( post_password_required() ) { ?>
	<p class="nopassword"><?php esc_html_e( 'This post is password protected. Enter the password to view any comments.', 'borderland' ); ?></p>
	<?php
	return;
}

$eltd_title_tag = borderland_elated_options()->getOptionValue('blog_single_title_tags' ) ? borderland_elated_options()->getOptionValue('blog_single_title_tags' ) : 'h5';

if ( comments_open() || get_comments_number() ) { ?>
	<div class="comment_holder clearfix" id="comments">
		<div class="comment_number">
			<div class="comment_number_inner">
				<<?php echo esc_attr( $eltd_title_tag ); ?>><?php comments_number( esc_html__( 'No Comments', 'borderland' ), '1 ' . esc_html__( 'Comment', 'borderland' ), '% ' . esc_html__( 'Comments', 'borderland' ) ); ?></<?php echo esc_attr( $eltd_title_tag ); ?>>
			</div>
		</div>
		<div class="comments">
			<?php if ( have_comments() ) : ?>
				<ul class="comment-list">
					<?php wp_list_comments( array( 'callback' => 'borderland_elated_comment' ) ); ?>
				</ul>
			<?php else : // this is displayed if there are no comments so far
				if ( ! comments_open() ) : ?>
					<p><?php esc_html_e( 'Sorry, the comment form is closed at this time.', 'borderland' ); ?></p>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</div>
	<?php
	$eltd_commenter = wp_get_current_commenter();
	$eltd_req       = get_option( 'require_name_email' );
	$eltd_aria_req  = ( $eltd_req ? " aria-required='true'" : '' );
	$eltd_consent   = empty( $eltd_commenter['comment_author_email'] ) ? '' : ' checked="checked"';
	
	$args = array(
		'id_form'              => 'commentform',
		'id_submit'            => 'submit_comment',
		'title_reply'          => '<' . esc_attr( $eltd_title_tag ) . '>' . esc_html__( 'Post a Comment', 'borderland' ) . '</' . esc_attr( $eltd_title_tag ) . '>',
		'title_reply_to'       => esc_html__( 'Post a Reply to %s', 'borderland' ),
		'cancel_reply_link'    => esc_html__( 'Cancel Reply', 'borderland' ),
		'label_submit'         => esc_html__( 'Submit', 'borderland' ),
		'comment_field'        => '<textarea id="comment" placeholder="' . esc_attr__( 'Write your comment here...', 'borderland' ) . '" name="comment" cols="45" rows="8" aria-required="true"></textarea>',
		'comment_notes_before' => '',
		'comment_notes_after'  => '',
		'fields'               => apply_filters( 'comment_form_default_fields', array(
			'author'  => '<div class="three_columns clearfix"><div class="column1"><div class="column_inner"><input id="author" placeholder="' . esc_attr__( 'Your full name', 'borderland' ) . '" name="author" type="text" value="' . esc_attr( $eltd_commenter['comment_author'] ) . '"' . $eltd_aria_req . ' /></div></div>',
			'email'   => '<div class="column2"><div class="column_inner"><input id="email" placeholder="' . esc_attr__( 'E-mail address', 'borderland' ) . '" name="email" type="text" value="' . esc_attr( $eltd_commenter['comment_author_email'] ) . '"' . $eltd_aria_req . ' /></div></div>',
			'url'     => '<div class="column3"><div class="column_inner"><input id="url" placeholder="' . esc_attr__( 'Website', 'borderland' ) . '" name="url" type="text" value="' . esc_attr( $eltd_commenter['comment_author_url'] ) . '" /></div></div></div>',
			'cookies' => '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" ' . $eltd_consent . ' />' .
			             '<label for="wp-comment-cookies-consent">' . esc_html__( 'Save my name, email, and website in this browser for the next time I comment.', 'borderland' ) . '</label></p>',
		) )
	);
	
	$eltd_pagination_class = '';
	if ( borderland_elated_options()->getOptionValue( 'pagination_type' ) == 'standard' && borderland_elated_options()->getOptionValue( 'pagination_standard_position' ) !== '' ) {
		$eltd_pagination_class = "standard_" . esc_attr( borderland_elated_options()->getOptionValue( 'pagination_standard_position' ) );
	} elseif ( borderland_elated_options()->getOptionValue( 'pagination_type' ) == 'arrows_on_sides' ) {
		$eltd_pagination_class = "arrows_on_sides";
	}
	?>
	<?php if ( get_comment_pages_count() > 1 ) { ?>
		<div class="comment_pager <?php echo esc_attr( $eltd_pagination_class ); ?>">
			<p><?php paginate_comments_links(); ?></p>
		</div>
	<?php } ?>
	<div class="comment_form">
		<?php comment_form( $args ); ?>
	</div>
<?php } ?>