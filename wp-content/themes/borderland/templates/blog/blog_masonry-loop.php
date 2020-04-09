<?php
$blog_show_categories = "no";
if (borderland_elated_options()->getOptionValue( 'blog_masonry_show_categories' )){
	$blog_show_categories = borderland_elated_options()->getOptionValue( 'blog_masonry_show_categories' );
}
$blog_show_comments = "no";
if (borderland_elated_options()->getOptionValue( 'blog_masonry_show_comments' )){
	$blog_show_comments = borderland_elated_options()->getOptionValue( 'blog_masonry_show_comments' );
}

$blog_show_author = "no";
if (borderland_elated_options()->getOptionValue( 'blog_masonry_show_author' )){
	$blog_show_author = borderland_elated_options()->getOptionValue( 'blog_masonry_show_author' );
}
$blog_show_like = "no";
if (borderland_elated_options()->getOptionValue( 'blog_masonry_show_like' )) {
	$blog_show_like = borderland_elated_options()->getOptionValue( 'blog_masonry_show_like' );
}
$blog_show_ql_icon_mark = "yes";
$blog_title_holder_icon_class = "";
if (borderland_elated_options()->getOptionValue( 'blog_masonry_show_ql_mark' )) {
	$blog_show_ql_icon_mark = borderland_elated_options()->getOptionValue( 'blog_masonry_show_ql_mark' );
}

$blog_show_read_more_button = "yes";
if(borderland_elated_options()->getOptionValue( 'blog_masonry_read_more_button' )){
	$blog_show_read_more_button =  borderland_elated_options()->getOptionValue( 'blog_masonry_read_more_button' );
}

if ($blog_show_ql_icon_mark == "yes") {
	$blog_title_holder_icon_class = " with_icon_right";
}

$blog_show_date = "no";
if (borderland_elated_options()->getOptionValue( 'blog_masonry_show_date' )) {
	$blog_show_date = borderland_elated_options()->getOptionValue( 'blog_masonry_show_date' );
}

$blog_social_share_type = "dropdown";
if(borderland_elated_options()->getOptionValue( 'blog_masonry_select_share_options_masonry_type' )){
	$blog_social_share_type = borderland_elated_options()->getOptionValue( 'blog_masonry_select_share_options_masonry_type' );
}
$blog_show_social_share = "no";
if (borderland_elated_options()->getOptionValue( 'enable_social_share' ) =="yes"){
	if (borderland_elated_options()->getOptionValue( 'post_types_names_post' ) =="post"){
		if (borderland_elated_options()->getOptionValue( 'blog_masonry_show_share' )&& $blog_social_share_type == "dropdown") {
					$blog_show_social_share = borderland_elated_options()->getOptionValue( 'blog_masonry_show_share' );
		}
	}
}

$_post_format = get_post_format();

$blog_masonry_type = "post_info_below_title";
if(borderland_elated_options()->getOptionValue( 'blog_masonry_type' )){
	$blog_masonry_type = borderland_elated_options()->getOptionValue( 'blog_masonry_type' );
}

$blog_ql_background_image = "no";
if(borderland_elated_options()->getOptionValue( 'blog_masonry_ql_background_image' )){
	$blog_ql_background_image = borderland_elated_options()->getOptionValue( 'blog_masonry_ql_background_image' );
}

?>
<?php
switch ($_post_format) {
	case "video":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_image">
				<?php get_template_part('templates/blog/parts/post-format-video'); ?>
			</div>
			<div class="post_text">
				<div class="post_text_inner">					
					<?php if($blog_masonry_type == "post_info_below_title"){ 
					if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>
							<div class="post_info">
								<?php borderland_elated_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
							</div>
					<?php }} ?>
					<h4>
						<a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h4>
					<?php
						borderland_elated_excerpt();
					?>						
					<?php if ($blog_show_social_share == "yes" || $blog_show_read_more_button == "yes"){ ?>
							<div class="read_more_wrapper clearfix">
								<?php
									borderland_elated_read_more_button('blog_masonry_read_more_button');
									if($blog_show_social_share == "yes"){
										borderland_elated_post_info(array('share' => $blog_show_social_share));
									}
								?>
							</div>
					<?php } ?>	

					<?php if($blog_masonry_type == "post_info_at_bottom"){ 
						if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>
							<div class="post_info post_info_bottom">
								<?php borderland_elated_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
							</div>
					<?php }} ?>
					<?php if(borderland_elated_options()->getOptionValue( 'blog_masonry_show_share' ) == "yes" && $blog_social_share_type == "list") {
							echo do_shortcode('[no_social_share_list]'); // XSS OK
					}; ?>
				</div>
			</div>
		</article>

		<?php
		break;
	case "audio":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="post_image">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('full'); ?>
						</a>
					</div>
				<?php } ?>
				<div class="audio_image">
					<audio class="blog_audio" src="<?php echo esc_url(get_post_meta(get_the_ID(), "audio_link", true)) ?>" controls="controls">
						<?php esc_html_e("Your browser don't support audio player","borderland"); ?>
					</audio>
				</div>
				<div class="post_text">
					<div class="post_text_inner">						
						<?php if($blog_masonry_type == "post_info_below_title"){ 
						if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>
							<div class="post_info">
								<?php borderland_elated_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
							</div>
						<?php }} ?>
						<h4>
							<a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h4>
						<?php
							borderland_elated_excerpt();
						?>						
						<?php if ($blog_show_social_share == "yes" || $blog_show_read_more_button == "yes"){ ?>
							<div class="read_more_wrapper clearfix">
								<?php
									borderland_elated_read_more_button('blog_masonry_read_more_button');
									if($blog_show_social_share == "yes"){
										borderland_elated_post_info(array('share' => $blog_show_social_share));
									}
								?>
							</div>
						<?php } ?>
						<?php if($blog_masonry_type == "post_info_at_bottom"){
							if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>
							<div class="post_info post_info_bottom">
								<?php borderland_elated_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author,'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
							</div>
						<?php }} ?>
						<?php if(borderland_elated_options()->getOptionValue( 'blog_masonry_show_share' ) == "yes" && $blog_social_share_type == "list") {
							echo do_shortcode('[no_social_share_list]'); // XSS OK
						}; ?>	
					</div>
				</div>
		</article>
		<?php
		break;
	case "link":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
				<div class="post_text  <?php if($blog_ql_background_image == "yes") { if ( has_post_thumbnail() ) { ?> link_image" style="background:url(<?php  echo wp_get_attachment_url(get_post_thumbnail_id()); ?>); <?php }} ?>">
					<div class="post_text_inner">
						<?php if ($blog_show_ql_icon_mark == "yes") { ?>
							<div class="post_info_link_mark">
								<span class="link_mark"></span>
							</div>
						<?php } ?>						
						<?php if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_social_share == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>	
							<div class="post_info clearfix <?php echo esc_attr($blog_title_holder_icon_class); ?>">							
								<?php 
								borderland_elated_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'share' => $blog_show_social_share, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like));
								?>
							</div>
						<?php } ?>
						<div class="post_title">
							<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						</div>
						<?php if(borderland_elated_options()->getOptionValue( 'blog_masonry_show_share' ) == "yes" && $blog_social_share_type == "list") {
							echo do_shortcode('[no_social_share_list]'); // XSS OK
						}; ?>
					</div>
				</div>
			</div>
		</article>
		<?php
		break;
	case "gallery":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_image">
				<?php get_template_part('templates/blog/parts/post-format-gallery-slider'); ?>
			</div>
			<div class="post_text">
				<div class="post_text_inner">					
					<?php if($blog_masonry_type == "post_info_below_title"){ ?>
						<?php if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>	
							<div class="post_info">
								<?php borderland_elated_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author,'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
							</div>
					<?php }} ?>
					<h4>
						<a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h4>
					<?php
						borderland_elated_excerpt();
					?>
					<?php if ($blog_show_social_share == "yes" || $blog_show_read_more_button == "yes"){ ?>
						<div class="read_more_wrapper clearfix">
							<?php
								borderland_elated_read_more_button('blog_masonry_read_more_button');
								if($blog_show_social_share == "yes"){
									borderland_elated_post_info(array('share' => $blog_show_social_share));
								}
							?>
						</div>
					<?php } ?>

					<?php if($blog_masonry_type == "post_info_at_bottom"){ ?>
						<?php if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>	
							<div class="post_info post_info_bottom">
								<?php borderland_elated_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
							</div>
					<?php }} ?>
					<?php if(borderland_elated_options()->getOptionValue( 'blog_masonry_show_share' ) == "yes" && $blog_social_share_type == "list") {
						echo do_shortcode('[no_social_share_list]'); // XSS OK
					}; ?>	
				</div>
			</div>
		</article>
		<?php
		break;
	case "quote":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
				<div class="post_text  <?php if($blog_ql_background_image == "yes") { if ( has_post_thumbnail() ) { ?> quote_image" style="background:url(<?php  echo wp_get_attachment_url(get_post_thumbnail_id()); ?>);<?php }} ?>">
					<div class="post_text_inner">
						<?php if ($blog_show_ql_icon_mark == "yes") { ?>
							<div class="post_info_quote_mark">
								<span class="quote_mark"></span>
							</div>
						<?php } ?>						
						<?php if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_social_share == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>	
							<div class="post_info clearfix <?php echo esc_attr($blog_title_holder_icon_class); ?>">
								<?php borderland_elated_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'share' => $blog_show_social_share, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
							</div>
						<?php } ?>
						<div class="post_title">
							<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php echo esc_html(get_post_meta(get_the_ID(), "quote_format", true)); ?>
								</a>
							</h3>
							<span class="quote_author">&mdash; <?php the_title(); ?></span>
						</div>
						<?php if(borderland_elated_options()->getOptionValue( 'blog_masonry_show_share' ) == "yes" && $blog_social_share_type == "list") {
							echo do_shortcode('[no_social_share_list]'); // XSS OK
						}; ?>
					</div>
				</div>
			</div>
		</article>
		<?php
		break;
	default:
		?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="post_image">
						<a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('full'); ?>
						</a>
					</div>
				<?php } ?>
				<div class="post_text">
					<div class="post_text_inner">						
						<?php if($blog_masonry_type == "post_info_below_title"){ 
							if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>	
								<div class="post_info">
									<?php borderland_elated_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
								</div>
						<?php }} ?>
						<h4>
							<a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h4>
						<?php
							borderland_elated_excerpt();
						?>
						<?php if ($blog_show_social_share == "yes" || $blog_show_read_more_button == "yes"){ ?>
							<div class="read_more_wrapper clearfix">
								<?php
									borderland_elated_read_more_button('blog_masonry_read_more_button');
									if($blog_show_social_share == "yes"){
										borderland_elated_post_info(array('share' => $blog_show_social_share));
									}
								?>
							</div>
						<?php } ?>
													
						<?php if($blog_masonry_type == "post_info_at_bottom"){ 
							if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>	
								<div class="post_info post_info_bottom">
									<?php borderland_elated_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
								</div>
						<?php }} ?>
						<?php if(borderland_elated_options()->getOptionValue( 'blog_masonry_show_share' ) == "yes" && $blog_social_share_type == "list") {
							echo do_shortcode('[no_social_share_list]'); // XSS OK
						}; ?>
					</div>
				</div>
			</article>
		<?php
}
?>

