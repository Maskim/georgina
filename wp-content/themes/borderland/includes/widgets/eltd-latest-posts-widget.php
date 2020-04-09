<?php

class BorderlandElatedLatestPostWidget extends WP_Widget {
	private $params;
	
	public function __construct() {
		parent::__construct(
			'eltd_latest_posts_widget', // Base ID
			esc_html__( 'Borderland Blog List', 'borderland' ), // Name
			array( 'description' => esc_html__( 'Display posts from your blog', 'borderland' ), ) // Args
		);
		
		$this->setParams();
	}
	
	protected function setParams() {
		$this->params = array(
			array(
				'name'    => 'type',
				'type'    => 'dropdown',
				'title'   => esc_html__( 'Type', 'borderland' ),
				'options' => array(
					"image_in_box" => esc_html__( "Image in left box", 'borderland' ),
					"minimal"      => esc_html__( "Minimal", 'borderland' )
				)
			),
			array(
				'name'  => 'number_of_posts',
				'type'  => 'textfield',
				'title' => esc_html__( 'Number of posts', 'borderland' )
			),
			array(
				'name'    => 'order_by',
				'type'    => 'dropdown',
				'title'   => esc_html__( 'Order By', 'borderland' ),
				'options' => array(
					'title' => esc_html__( 'Title', 'borderland' ),
					'date'  => esc_html__( 'Date', 'borderland' )
				)
			),
			array(
				'name'    => 'order',
				'type'    => 'dropdown',
				'title'   => esc_html__( 'Order', 'borderland' ),
				'options' => array(
					'ASC'  => esc_html__( 'ASC', 'borderland' ),
					'DESC' => esc_html__( 'DESC', 'borderland' )
				)
			),
			array(
				'name'  => 'category',
				'type'  => 'textfield',
				'title' => esc_html__( 'Category Slug', 'borderland' )
			),
			array(
				'name'  => 'text_length',
				'type'  => 'textfield',
				'title' => esc_html__( 'Number of characters', 'borderland' )
			),
			array(
				'name'    => 'title_tag',
				'type'    => 'dropdown',
				'title'   => esc_html__( 'Title Tag', 'borderland' ),
				'options' => array(
					""   => "",
					"h2" => esc_html__( "h2", 'borderland' ),
					"h3" => esc_html__( "h3", 'borderland' ),
					"h4" => esc_html__( "h4", 'borderland' ),
					"h5" => esc_html__( "h5", 'borderland' ),
					"h6" => esc_html__( "h6", 'borderland' )
				)
			),
			array(
				'name'  => 'title_size',
				'type'  => 'textfield',
				'title' => esc_html__( 'Title Size (px)', 'borderland' )
			),
			array(
				'name'  => 'title_color',
				'type'  => 'textfield',
				'title' => esc_html__( 'Title Color', 'borderland' )
			),
			array(
				'name'    => 'display_excerpt',
				'type'    => 'dropdown',
				'title'   => esc_html__( 'Display Excerpt', 'borderland' ),
				'options' => array(
					''  => esc_html__( 'Default', 'borderland' ),
					'0' => esc_html__( 'No', 'borderland' ),
					'1' => esc_html__( 'Yes', 'borderland' )
				)
			),
			array(
				'name'  => 'excerpt_color',
				'type'  => 'textfield',
				'title' => esc_html__( 'Excerpt Color', 'borderland' )
			),
			array(
				'name'    => 'info_position',
				'type'    => 'dropdown',
				'title'   => esc_html__( 'Info Position', 'borderland' ),
				'options' => array(
					''       => esc_html__( 'Default', 'borderland' ),
					'top'    => esc_html__( 'Top', 'borderland' ),
					'bottom' => esc_html__( 'Bottom', 'borderland' )
				)
			),
			array(
				'name'  => 'post_info_font_size',
				'type'  => 'textfield',
				'title' => esc_html__( 'Post info font size (px)', 'borderland' )
			),
			array(
				'name'  => 'post_info_color',
				'type'  => 'textfield',
				'title' => esc_html__( 'Post info color', 'borderland' )
			),
			array(
				'name'  => 'post_info_link_color',
				'type'  => 'textfield',
				'title' => esc_html__( 'Post info link color', 'borderland' )
			),
			array(
				'name'  => 'post_info_font_family',
				'type'  => 'textfield',
				'title' => esc_html__( 'Post info font family', 'borderland' )
			),
			array(
				'name'    => 'post_info_text_transform',
				'type'    => 'dropdown',
				'title'   => esc_html__( 'Post info text transform', 'borderland' ),
				'options' => array(
					''           => esc_html__( 'Default', 'borderland' ),
					'none'       => esc_html__( 'None', 'borderland' ),
					'capitalize' => esc_html__( 'Capitalize', 'borderland' ),
					'uppercase'  => esc_html__( 'Uppercase', 'borderland' ),
					'lowercase'  => esc_html__( 'Lowercase', 'borderland' )
				)
			),
			array(
				'name'    => 'post_info_font_weight',
				'type'    => 'dropdown',
				'title'   => esc_html__( 'Post info font weight', 'borderland' ),
				'options' => array(
					''    => esc_html__( 'Default', 'borderland' ),
					'100' => esc_html__( 'Thin 100', 'borderland' ),
					'200' => esc_html__( 'Extra-Light 200', 'borderland' ),
					'300' => esc_html__( 'Light 300', 'borderland' ),
					'400' => esc_html__( 'Regular 400', 'borderland' ),
					'500' => esc_html__( 'Medium 500', 'borderland' ),
					'600' => esc_html__( 'Semi-Bold 600', 'borderland' ),
					'700' => esc_html__( 'Bold 700', 'borderland' ),
					'800' => esc_html__( 'Extra-Bold 800', 'borderland' ),
					'900' => esc_html__( 'Ultra-Bold 900', 'borderland' )
				)
			),
			array(
				'name'    => 'post_info_font_style',
				'type'    => 'dropdown',
				'title'   => esc_html__( 'Post info font style', 'borderland' ),
				'options' => array(
					''       => esc_html__( 'Default', 'borderland' ),
					'normal' => esc_html__( 'Normal', 'borderland' ),
					'italic' => esc_html__( 'Italic', 'borderland' )
				)
			),
			array(
				'name'  => 'post_info_letter_spacing',
				'type'  => 'textfield',
				'title' => esc_html__( 'Post info letter spacing (px)', 'borderland' )
			),
			array(
				'name'    => 'display_category',
				'type'    => 'dropdown',
				'title'   => esc_html__( 'Display Category', 'borderland' ),
				'options' => array(
					''  => esc_html__( 'Default', 'borderland' ),
					'1' => esc_html__( 'Yes', 'borderland' ),
					'0' => esc_html__( 'No', 'borderland' )
				)
			),
			array(
				'name'    => 'display_date',
				'type'    => 'dropdown',
				'title'   => esc_html__( 'Display Date', 'borderland' ),
				'options' => array(
					''  => esc_html__( 'Default', 'borderland' ),
					'1' => esc_html__( 'Yes', 'borderland' ),
					'0' => esc_html__( 'No', 'borderland' )
				)
			),
			array(
				'name'  => 'date_size',
				'type'  => 'textfield',
				'title' => esc_html__( 'Date Size (px)', 'borderland' )
			),
			array(
				'name'    => 'display_author',
				'type'    => 'dropdown',
				'title'   => esc_html__( 'Display Author', 'borderland' ),
				'options' => array(
					''  => esc_html__( 'Default', 'borderland' ),
					'1' => esc_html__( 'Yes', 'borderland' ),
					'0' => esc_html__( 'No', 'borderland' )
				)
			),
			array(
				'name'    => 'display_comments',
				'type'    => 'dropdown',
				'title'   => esc_html__( 'Display Comments', 'borderland' ),
				'options' => array(
					''  => esc_html__( 'Default', 'borderland' ),
					'1' => esc_html__( 'Yes', 'borderland' ),
					'0' => esc_html__( 'No', 'borderland' )
				)
			),
			array(
				'name'  => 'background_color',
				'type'  => 'textfield',
				'title' => esc_html__( 'Box Background Color', 'borderland' )
			),
			array(
				'name'  => 'border_color',
				'type'  => 'textfield',
				'title' => esc_html__( 'Separator Between Item Color', 'borderland' )
			),
			array(
				'name'  => 'border_width',
				'type'  => 'textfield',
				'title' => esc_html__( 'Separator Between Item Thickness (px)', 'borderland' )
			),
			array(
				'name'    => 'display_button',
				'type'    => 'dropdown',
				'title'   => esc_html__( 'Display Button', 'borderland' ),
				'options' => array(
					''  => esc_html__( 'Default', 'borderland' ),
					'1' => esc_html__( 'Yes', 'borderland' ),
					'0' => esc_html__( 'No', 'borderland' )
				)
			),
			array(
				'name'    => 'button_size',
				'type'    => 'dropdown',
				'title'   => esc_html__( 'Button Size', 'borderland' ),
				'options' => array(
					""          => esc_html__( "Default", 'borderland' ),
					"small"     => esc_html__( "Small", 'borderland' ),
					"medium"    => esc_html__( "Medium", 'borderland' ),
					"large"     => esc_html__( "Large", 'borderland' ),
					"big_large" => esc_html__( "Extra Large", 'borderland' )
				)
			),
			array(
				'name'    => 'button_style',
				'type'    => 'dropdown',
				'title'   => esc_html__( 'Button Style', 'borderland' ),
				'options' => array(
					""      => esc_html__( "Default", 'borderland' ),
					"white" => esc_html__( "White", 'borderland' )
				)
			),
			array(
				'name'  => 'button_text',
				'type'  => 'textfield',
				'title' => esc_html__( 'Button Text', 'borderland' )
			),
			array(
				'name'  => 'button_color',
				'type'  => 'textfield',
				'title' => esc_html__( 'Button Text Color', 'borderland' )
			),
			array(
				'name'  => 'button_hover_color',
				'type'  => 'textfield',
				'title' => esc_html__( 'Button Text Hover Color', 'borderland' )
			),
			array(
				'name'  => 'button_background_color',
				'type'  => 'textfield',
				'title' => esc_html__( 'Button Background Color', 'borderland' )
			),
			array(
				'name'  => 'button_hover_background_color',
				'type'  => 'textfield',
				'title' => esc_html__( 'Button Hover Background Color', 'borderland' )
			),
			array(
				'name'  => 'button_border_color',
				'type'  => 'textfield',
				'title' => esc_html__( 'Button Border Color', 'borderland' )
			),
			array(
				'name'  => 'button_border_width',
				'type'  => 'textfield',
				'title' => esc_html__( 'Button Border Width', 'borderland' )
			),
			array(
				'name'  => 'button_hover_border_color',
				'type'  => 'textfield',
				'title' => esc_html__( 'Button Hover Border Color', 'borderland' )
			),
			array(
				'name'  => 'button_border_radius',
				'type'  => 'textfield',
				'title' => esc_html__( 'Button Border Radius (px)', 'borderland' )
			)
		);
	}
	
	public function getParams() {
		return $this->params;
	}
	
	public function widget( $args, $instance ) {
		extract( $args );
		
		//prepare variables
		$content = '';
		$params  = '';
		
		//is instance empty?
		if ( is_array( $instance ) && count( $instance ) ) {
			//generate shortcode params
			foreach ( $instance as $key => $value ) {
				$params .= " $key = '$value' ";
			}
		}
		
		echo '<div class="widget eltd-latest-posts-widget">';
		
		//finally call the shortcode
		echo do_shortcode( "[no_blog_list $params]" ); // XSS OK
		
		echo '</div>'; //close div.eltd-latest-posts-widget
	}
	
	public function form( $instance ) {
		foreach ( $this->params as $param_array ) {
			$param_name    = $param_array['name'];
			${$param_name} = isset( $instance[ $param_name ] ) ? esc_attr( $instance[ $param_name ] ) : '';
		}
		
		foreach ( $this->params as $param ) {
			switch ( $param['type'] ) {
				case 'textfield': ?>
					<p>
						<label for="<?php echo esc_attr( $this->get_field_id( $param['name'] ) ); ?>"><?php echo esc_html( $param['title'] ); ?></label>
						<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( $param['name'] ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( $param['name'] ) ); ?>" type="text" value="<?php echo esc_attr( ${$param['name']} ); ?>"/>
					</p>
					<?php
					break;
				case 'dropdown': ?>
					<p>
						<label for="<?php echo esc_attr( $this->get_field_id( $param['name'] ) ); ?>"><?php echo esc_html( $param['title'] ); ?></label>
						<?php if ( isset( $param['options'] ) && is_array( $param['options'] ) && count( $param['options'] ) ) { ?>
							<select class="widefat" name="<?php echo esc_attr( $this->get_field_name( $param['name'] ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( $param['name'] ) ); ?>">
								<?php foreach ( $param['options'] as $param_option_key => $param_option_val ) {
									$option_selected = '';
									if ( ${$param['name']} == $param_option_key ) {
										$option_selected = 'selected';
									}
									?>
									<option <?php echo esc_attr( $option_selected ); ?>value="<?php echo esc_attr( $param_option_key ); ?>"><?php echo esc_attr( $param_option_val ); ?></option>
								<?php } ?>
							</select>
						<?php } ?>
					</p>
					<?php
					break;
			}
		}
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		foreach ( $this->params as $param ) {
			$param_name = $param['name'];
			
			$instance[ $param_name ] = sanitize_text_field( $new_instance[ $param_name ] );
		}
		
		return $instance;
	}
}