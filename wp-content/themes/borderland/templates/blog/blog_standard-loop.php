<?php
$blog_show_categories = "no";
if (borderland_elated_options()->getOptionValue( 'blog_standard_type_show_categories' )){
	$blog_show_categories = borderland_elated_options()->getOptionValue( 'blog_standard_type_show_categories' );
}

$blog_show_comments = "yes";
if (borderland_elated_options()->getOptionValue( 'blog_standard_type_show_comments' )){
    $blog_show_comments = borderland_elated_options()->getOptionValue( 'blog_standard_type_show_comments' );
}
$blog_show_author = "yes";
if (borderland_elated_options()->getOptionValue( 'blog_standard_type_show_author' )){
    $blog_show_author = borderland_elated_options()->getOptionValue( 'blog_standard_type_show_author' );
}
$blog_show_like = "yes";
if (borderland_elated_options()->getOptionValue( 'blog_standard_type_show_like' )) {
    $blog_show_like = borderland_elated_options()->getOptionValue( 'blog_standard_type_show_like' );
}
$blog_show_ql_icon_mark = "yes";
$blog_title_holder_icon_class = "";
if (borderland_elated_options()->getOptionValue( 'blog_standard_type_show_ql_mark' )) {
    $blog_show_ql_icon_mark = borderland_elated_options()->getOptionValue( 'blog_standard_type_show_ql_mark' );
}
if($blog_show_ql_icon_mark == "yes"){
	$blog_title_holder_icon_class = " with_icon_right";
}

$blog_show_date = "yes";
if (borderland_elated_options()->getOptionValue( 'blog_standard_type_show_date' )) {
    $blog_show_date = borderland_elated_options()->getOptionValue( 'blog_standard_type_show_date' );
}
$blog_show_read_more_button = "yes";
if(borderland_elated_options()->getOptionValue( 'blog_standard_type_read_more_button' )){
	$blog_show_read_more_button =  borderland_elated_options()->getOptionValue( 'blog_standard_type_read_more_button' );
}

$blog_show_social_share = "no";
$blog_social_share_type = "dropdown";
if(borderland_elated_options()->getOptionValue( 'blog_standard_type_select_share_option' )){
	$blog_social_share_type = borderland_elated_options()->getOptionValue( 'blog_standard_type_select_share_option' );
}
if (borderland_elated_options()->getOptionValue( 'enable_social_share' ) =="yes"){
    if (borderland_elated_options()->getOptionValue( 'post_types_names_post' ) =="post"){
        if (borderland_elated_options()->getOptionValue( 'blog_standard_type_show_share' )&& $blog_social_share_type == "dropdown") {
            $blog_show_social_share = borderland_elated_options()->getOptionValue( 'blog_standard_type_show_share' );
        }
    }
}

$blog_ql_background_image = "no";
if(borderland_elated_options()->getOptionValue( 'blog_standard_type_ql_background_image' )){
	$blog_ql_background_image = borderland_elated_options()->getOptionValue( 'blog_standard_type_ql_background_image' );
}

$background_image_object = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID()), 'blog_image_format_link_quote');
$background_image_src = $background_image_object[0];

$_post_format = get_post_format();
?>
<?php
	switch ($_post_format) {
		case "video":
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
				 <div class="post_image">
					<?php $_video_type = get_post_meta(get_the_ID(), "video_format_choose", true);?>
					<?php if($_video_type == "youtube") { ?>
						<iframe  src="https://www.youtube.com/embed/<?php echo esc_attr(get_post_meta(get_the_ID(), "video_format_link", true));  ?>?wmode=transparent" wmode="Opaque" frameborder="0" allowfullscreen></iframe>
					<?php } elseif ($_video_type == "vimeo"){ ?>
						<iframe src="https://player.vimeo.com/video/<?php echo esc_attr(get_post_meta(get_the_ID(), "video_format_link", true));  ?>?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					<?php } elseif ($_video_type == "self"){ ?> 
						<div class="video"> 
						    <div class="mobile-video-image" style="background-image: url(<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_image", true));  ?>);"></div>
					    	<div class="video-wrap"  >
							    <video class="video" poster="<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_image", true));  ?>" preload="auto">
								    <?php if(get_post_meta(get_the_ID(), "video_format_webm", true) != "") { ?> <source type="video/webm" src="<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_webm", true));  ?>"> <?php } ?>
								    <?php if(get_post_meta(get_the_ID(), "video_format_mp4", true) != "") { ?> <source type="video/mp4" src="<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_mp4", true));  ?>"> <?php } ?>
								    <?php if(get_post_meta(get_the_ID(), "video_format_ogv", true) != "") { ?> <source type="video/ogg" src="<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_ogv", true));  ?>"> <?php } ?>
								    <object width="320" height="240" type="application/x-shockwave-flash" data="<?php echo esc_url(get_template_directory_uri().'/js/flashmediaelement.swf'); ?>">
								    	<param name="movie" value="<?php echo esc_url(get_template_directory_uri().'/js/flashmediaelement.swf'); ?>" />
									    <param name="flashvars" value="controls=true&file=<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_mp4", true));  ?>" />
									    <img src="<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_image", true));  ?>" width="1920" height="800" title="<?php esc_attr_e( 'No video playback capabilities', 'borderland' ); ?>" alt="<?php esc_attr_e( 'Video thumb', 'borderland' ); ?>" />
								    </object>
							    </video>
						    </div>
                        </div>
					<?php } ?>
				 </div>
                 <div class="post_text">
                    <div class="post_text_inner">
						<?php if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>	
							<div class="post_info">
								<?php borderland_elated_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
							</div>
						<?php } ?>
						<h2 class="post_title_label">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h2>
	                    <?php if ( ! borderland_elated_wp_link_pages_exist() ) {
		                    borderland_elated_excerpt();
		
		                    if ( ! post_password_required() ) { ?>
			                    <?php if ($blog_show_social_share == "yes" || $blog_show_read_more_button == "yes"){ ?>
				                    <div class="read_more_wrapper clearfix">
					                    <?php
					                    borderland_elated_read_more_button('blog_standard_type_read_more_button');
					
					                    if($blog_show_social_share == "yes"){
						                    borderland_elated_post_info(array('share' => $blog_show_social_share));
					                    }
					                    ?>
				                    </div>
			                    <?php } ?>
			                    <?php if(borderland_elated_options()->getOptionValue( 'blog_standard_type_show_share' ) == "yes" && $blog_social_share_type == "list") {
				                    echo do_shortcode('[no_social_share_list]'); // XSS OK
			                    } ?>
		                    <?php }
	                    } else {
		                    borderland_elated_wp_link_pages();
	                    } ?>
                    </div>
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
						<?php if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>	
							<div class="post_info">
								<?php borderland_elated_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
							</div>
						<?php } ?>
						<h2 class="post_title_label">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h2>
	                    <?php if ( ! borderland_elated_wp_link_pages_exist() ) {
		                    borderland_elated_excerpt();
		
		                    if ( ! post_password_required() ) { ?>
			                    <?php if ($blog_show_social_share == "yes" || $blog_show_read_more_button == "yes"){ ?>
				                    <div class="read_more_wrapper clearfix">
					                    <?php
					                    borderland_elated_read_more_button('blog_standard_type_read_more_button');
					
					                    if($blog_show_social_share == "yes"){
						                    borderland_elated_post_info(array('share' => $blog_show_social_share));
					                    }
					                    ?>
				                    </div>
			                    <?php } ?>
			                    <?php if(borderland_elated_options()->getOptionValue( 'blog_standard_type_show_share' ) == "yes" && $blog_social_share_type == "list") {
				                    echo do_shortcode('[no_social_share_list]'); // XSS OK
			                    } ?>
		                    <?php }
	                    } else {
		                    borderland_elated_wp_link_pages();
	                    } ?>
                    </div>
                </div>
			</div>
		</article>
<?php
		break;
		case "link":
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="post_content_holder">
                <div class="post_text_columns">
					<div class="post_text  <?php if($blog_ql_background_image == "yes") {if ( has_post_thumbnail() ) { ?> link_image" style="background:url(<?php echo esc_url($background_image_src); ?>); <?php } } ?>">
						<div class="post_text_inner">
							<?php if ($blog_show_ql_icon_mark == "yes") { ?>
								<div class="post_info_link_mark">
									<span class="link_mark"></span>
								</div>
							<?php } ?>														
							<?php if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_social_share == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>	
								<div class="post_info clearfix <?php echo esc_attr($blog_title_holder_icon_class); ?>">
									<?php borderland_elated_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'share' => $blog_show_social_share, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
								</div>
							<?php } ?>
							<div class="post_title">
								<h3 class="post_title_label"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>								
							</div>
							<?php if(borderland_elated_options()->getOptionValue( 'blog_standard_type_show_share' ) == "yes" && $blog_social_share_type == "list") {
								echo do_shortcode('[no_social_share_list]'); // XSS OK
							}; ?>
						</div>
					</div>
                </div>
            </div>
        </article>
<?php
		break;
		case "gallery":
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
				<div class="post_image">
					<?php get_template_part('templates/blog/parts/post-format-gallery-slider'); ?>
				</div>
                <div class="post_text">
                    <div class="post_text_inner">						
						<?php if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>	
							<div class="post_info">
								<?php borderland_elated_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
							</div>
						<?php } ?>
						<h2 class="post_title_label">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h2>
	                    <?php if ( ! borderland_elated_wp_link_pages_exist() ) {
		                    borderland_elated_excerpt();
		
		                    if ( ! post_password_required() ) { ?>
			                    <?php if ($blog_show_social_share == "yes" || $blog_show_read_more_button == "yes"){ ?>
				                    <div class="read_more_wrapper clearfix">
					                    <?php
					                    borderland_elated_read_more_button('blog_standard_type_read_more_button');
					
					                    if($blog_show_social_share == "yes"){
						                    borderland_elated_post_info(array('share' => $blog_show_social_share));
					                    }
					                    ?>
				                    </div>
			                    <?php } ?>
			                    <?php if(borderland_elated_options()->getOptionValue( 'blog_standard_type_show_share' ) == "yes" && $blog_social_share_type == "list") {
				                    echo do_shortcode('[no_social_share_list]'); // XSS OK
			                    } ?>
		                    <?php }
	                    } else {
		                    borderland_elated_wp_link_pages();
	                    } ?>
                    </div>
                </div>
            </div>
		</article>
<?php
		break;
		case "quote":
?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="post_content_holder">
                    <div class="post_text_columns">
                         <div class="post_text  <?php if($blog_ql_background_image == "yes") {if ( has_post_thumbnail() ) { ?> quote_image" style="background:url(<?php echo esc_url($background_image_src); ?>); <?php } } ?>">
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
									<h3 class="post_title_label">
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo esc_html(get_post_meta(get_the_ID(), "quote_format", true)); ?></a>
									</h3>								
									<span class="quote_author">&mdash; <?php the_title(); ?></span>
								</div>
								<?php if(borderland_elated_options()->getOptionValue( 'blog_standard_type_show_share' ) == "yes" && $blog_social_share_type == "list") {
									echo do_shortcode('[no_social_share_list]'); // XSS OK
								}; ?>   
                            </div>
                        </div>
                    </div>
                </div>
            </article>
<?php
		break;
		default:
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
				<div class="post_text">
					<div class="post_text_inner">                            
							<?php if($blog_show_author == "yes" || $blog_show_date == "yes"|| $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>	
								<div class="post_info">
									<?php borderland_elated_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
								</div>
							<?php } ?>
							<h2 class="post_title_label">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                            </h2>
							<?php if ( ! borderland_elated_wp_link_pages_exist() ) {
								borderland_elated_excerpt();
								
								if ( ! post_password_required() ) { ?>
									<?php if ($blog_show_social_share == "yes" || $blog_show_read_more_button == "yes"){ ?>
										<div class="read_more_wrapper clearfix">
											<?php
											borderland_elated_read_more_button('blog_standard_type_read_more_button');
											
											if($blog_show_social_share == "yes"){
												borderland_elated_post_info(array('share' => $blog_show_social_share));
											}
											?>
										</div>
									<?php } ?>
									<?php if(borderland_elated_options()->getOptionValue( 'blog_standard_type_show_share' ) == "yes" && $blog_social_share_type == "list") {
										echo do_shortcode('[no_social_share_list]'); // XSS OK
									} ?>
								<?php }
							} else {
								borderland_elated_wp_link_pages();
							} ?>
                    </div>
				</div>
			</div>
		</article>
<?php
}
?>

