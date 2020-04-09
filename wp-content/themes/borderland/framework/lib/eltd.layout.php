<?php

/*
   Interface: iLayoutNode
   A interface that implements Layout Node methods
*/
interface iLayoutNode
{
	public function hasChidren();
	public function getChild($key);
	public function addChild($key, $value);
}

/*
   Interface: iRender
   A interface that implements Render methods
*/
interface iRender
{
	public function render($factory);
}

/*
   Class: BorderlandElatedPanel
   A class that initializes Elated Panel
*/
class BorderlandElatedPanel implements iLayoutNode, iRender {

	public $children;
	public $title;
	public $name;
	public $hidden_property;
	public $hidden_value;

	function __construct($title_name="",$name="",$hidden_property="",$hidden_value="") {
		$this->children = array();
		$this->title = $title_name;
		$this->name = $name;
		$this->hidden_property = $hidden_property;
		$this->hidden_value = $hidden_value;
	}

	public function hasChidren() {
		return (count($this->children) > 0)?true:false;
	}

	public function getChild($key) {
		return $this->children[$key];
	}

	public function addChild($key, $value) {
		$this->children[$key] = $value;
	}

	public function render($factory) {
		$hidden = false;
		if (!empty($this->hidden_property)){
			if (borderland_elated_option_get_value($this->hidden_property)==$this->hidden_value)
				$hidden = true;
		}
		?>
		<div class="eltdf-page-form-section-holder" id="eltdf_<?php echo esc_attr($this->name); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>
			<h3 class="eltdf-page-section-title"><?php echo esc_html($this->title); ?></h3>
			<?php
			foreach ($this->children as $child) {
				$this->renderChild($child, $factory);
			}
			?>
		</div>
	<?php
	}

	public function renderChild(iRender $child, $factory) {
		$child->render($factory);
	}
}

/*
   Class: BorderlandElatedContainer
   A class that initializes Elated Container
*/
class BorderlandElatedContainer implements iLayoutNode, iRender {

	public $children;
	public $name;
	public $hidden_property;
	public $hidden_value;
	public $hidden_values;

	function __construct($name="",$hidden_property="",$hidden_value="",$hidden_values=array()) {
		$this->children = array();
		$this->name = $name;
		$this->hidden_property = $hidden_property;
		$this->hidden_value = $hidden_value;
		$this->hidden_values = $hidden_values;
	}

	public function hasChidren() {
		return (count($this->children) > 0)?true:false;
	}

	public function getChild($key) {
		return $this->children[$key];
	}

	public function addChild($key, $value) {
		$this->children[$key] = $value;
	}

	public function render($factory) {
		$hidden = false;
		if (!empty($this->hidden_property)){
			if (borderland_elated_option_get_value($this->hidden_property)==$this->hidden_value)
				$hidden = true;
			else {
				foreach ($this->hidden_values as $value) {
					if (borderland_elated_option_get_value($this->hidden_property)==$value)
						$hidden = true;

				}
			}
		}
		?>
		<div class="eltdf-page-form-container-holder" id="eltdf_<?php echo esc_attr($this->name); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>
			<?php
			foreach ($this->children as $child) {
				$this->renderChild($child, $factory);
			}
			?>
		</div>
	<?php
	}

	public function renderChild(iRender $child, $factory) {
		$child->render($factory);
	}
}


/*
   Class: BorderlandElatedContainerNoStyle
   A class that initializes Elated Container without css classes
*/
class BorderlandElatedContainerNoStyle implements iLayoutNode, iRender {

	public $children;
	public $name;
	public $hidden_property;
	public $hidden_value;
	public $hidden_values;

	function __construct($name="",$hidden_property="",$hidden_value="",$hidden_values=array()) {
		$this->children = array();
		$this->name = $name;
		$this->hidden_property = $hidden_property;
		$this->hidden_value = $hidden_value;
		$this->hidden_values = $hidden_values;
	}

	public function hasChidren() {
		return (count($this->children) > 0)?true:false;
	}

	public function getChild($key) {
		return $this->children[$key];
	}

	public function addChild($key, $value) {
		$this->children[$key] = $value;
	}

	public function render($factory) {
		$hidden = false;
		if (!empty($this->hidden_property)){
			if (borderland_elated_option_get_value($this->hidden_property)==$this->hidden_value)
				$hidden = true;
			else {
				foreach ($this->hidden_values as $value) {
					if (borderland_elated_option_get_value($this->hidden_property)==$value)
						$hidden = true;

				}
			}
		}
		?>
		<div id="eltdf_<?php echo esc_attr($this->name); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>
			<?php
			foreach ($this->children as $child) {
				$this->renderChild($child, $factory);
			}
			?>
		</div>
	<?php
	}

	public function renderChild(iRender $child, $factory) {
		$child->render($factory);
	}
}

/*
   Class: BorderlandElatedGroup
   A class that initializes Elated Group
*/
class BorderlandElatedGroup implements iLayoutNode, iRender {

	public $children;
	public $title;
	public $description;

	function __construct($title_name="",$description="") {
		$this->children = array();
		$this->title = $title_name;
		$this->description = $description;
	}

	public function hasChidren() {
		return (count($this->children) > 0)?true:false;
	}

	public function getChild($key) {
		return $this->children[$key];
	}

	public function addChild($key, $value) {
		$this->children[$key] = $value;
	}

	public function render($factory) {
		?>

		<div class="eltdf-page-form-section">


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($this->title); ?></h4>

				<p><?php echo esc_html($this->description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->

			<div class="eltdf-section-content">
				<div class="container-fluid">
					<?php
					foreach ($this->children as $child) {
						$this->renderChild($child, $factory);
					}
					?>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php
	}

	public function renderChild(iRender $child, $factory) {
		$child->render($factory);
	}
}

/*
   Class: BorderlandElatedNotice
   A class that initializes Elated Notice
*/
class BorderlandElatedNotice implements iRender {

	public $children;
	public $title;
	public $description;
	public $notice;
	public $hidden_property;
	public $hidden_value;
	public $hidden_values;

	function __construct($title_name="",$description="",$notice="",$hidden_property="",$hidden_value="",$hidden_values=array()) {
		$this->children = array();
		$this->title = $title_name;
		$this->description = $description;
		$this->notice = $notice;
		$this->hidden_property = $hidden_property;
		$this->hidden_value = $hidden_value;
		$this->hidden_values = $hidden_values;
	}

	public function render($factory) {
		$hidden = false;
		if (!empty($this->hidden_property)){
			if (borderland_elated_option_get_value($this->hidden_property)==$this->hidden_value)
				$hidden = true;
			else {
				foreach ($this->hidden_values as $value) {
					if (borderland_elated_option_get_value($this->hidden_property)==$value)
						$hidden = true;

				}
			}
		}
		?>

		<div class="eltdf-page-form-section"<?php if ($hidden) { ?> style="display: none"<?php } ?>>


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($this->title); ?></h4>

				<p><?php echo esc_html($this->description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->

			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="alert alert-warning">
						<?php echo esc_html($this->notice); ?>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php
	}
}

/*
   Class: BorderlandElatedRow
   A class that initializes Elated Row
*/
class BorderlandElatedRow implements iLayoutNode, iRender {

	public $children;
	public $next;

	function __construct($next=false) {
		$this->children = array();
		$this->next = $next;
	}

	public function hasChidren() {
		return (count($this->children) > 0)?true:false;
	}

	public function getChild($key) {
		return $this->children[$key];
	}

	public function addChild($key, $value) {
		$this->children[$key] = $value;
	}

	public function render($factory) {
		?>
		<div class="row<?php if ($this->next) echo " next-row"; ?>">
			<?php
			foreach ($this->children as $child) {
				$this->renderChild($child, $factory);
			}
			?>
		</div>
	<?php
	}

	public function renderChild(iRender $child, $factory) {
		$child->render($factory);
	}
}

/*
   Class: BorderlandElatedTitle
   A class that initializes Elated Title
*/
class BorderlandElatedTitle implements iRender {
	private $name;
	private $title;
	public $hidden_property;
	public $hidden_values = array();

	function __construct($name="",$title_name="",$hidden_property="",$hidden_value="") {
		$this->title = $title_name;
		$this->name = $name;
		$this->hidden_property = $hidden_property;
		$this->hidden_value = $hidden_value;
	}

	public function render($factory) {
		$hidden = false;
		if (!empty($this->hidden_property)){
			if (borderland_elated_option_get_value($this->hidden_property)==$this->hidden_value)
				$hidden = true;
		}
		?>
		<h5 class="eltdf-page-section-subtitle" id="eltdf_<?php echo esc_attr($this->name); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>><?php echo esc_html($this->title); ?></h5>
	<?php
	}
}

/*
   Class: BorderlandElatedField
   A class that initializes Elated Field
*/
class BorderlandElatedField implements iRender {
	private $type;
	private $name;
	private $default_value;
	private $label;
	private $description;
	private $options = array();
	private $args = array();
	public $hidden_property;
	public $hidden_values = array();


	function __construct($type,$name,$default_value="",$label="",$description="", $options = array(), $args = array(),$hidden_property="", $hidden_values = array()) {		
		global $borderland_elated_framework;
		$this->type = $type;
		$this->name = $name;
		$this->default_value = $default_value;
		$this->label = $label;
		$this->description = $description;
		$this->options = $options;
		$this->args = $args;
		$this->hidden_property = $hidden_property;
		$this->hidden_values = $hidden_values;
		$borderland_elated_framework->eltdOptions->addOption($this->name,$this->default_value);
	}

	public function render($factory) {
		$hidden = false;
		if (!empty($this->hidden_property)){
			foreach ($this->hidden_values as $value) {
				if (borderland_elated_option_get_value($this->hidden_property)==$value)
					$hidden = true;

			}
		}
		$factory->render( $this->type, $this->name, $this->label, $this->description, $this->options, $this->args, $hidden );
	}
}

/*
   Class: BorderlandElatedMetaField
   A class that initializes Elated Meta Field
*/
class BorderlandElatedMetaField implements iRender {
	private $type;
	private $name;
	private $default_value;
	private $label;
	private $description;
	private $options = array();
	private $args = array();
	public $hidden_property;
	public $hidden_values = array();


	function __construct($type,$name,$default_value="",$label="",$description="", $options = array(), $args = array(),$hidden_property="", $hidden_values = array()) {
		global $borderland_elated_framework;
		$this->type = $type;
		$this->name = $name;
		$this->default_value = $default_value;
		$this->label = $label;
		$this->description = $description;
		$this->options = $options;
		$this->args = $args;
		$this->hidden_property = $hidden_property;
		$this->hidden_values = $hidden_values;
		$borderland_elated_framework->eltdMetaBoxes->addOption($this->name,$this->default_value);
	}

	public function render($factory) {
		$hidden = false;
		if (!empty($this->hidden_property)){
			foreach ($this->hidden_values as $value) {
				if (borderland_elated_option_get_value($this->hidden_property)==$value)
					$hidden = true;

			}
		}
		$factory->render( $this->type, $this->name, $this->label, $this->description, $this->options, $this->args, $hidden );
	}
}

abstract class BorderlandElatedFieldType {

	abstract public function render( $name, $label="",$description="", $options = array(), $args = array(), $hidden = false );

}

class BorderlandElatedFieldText extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		$col_width = 12;
		if(isset($args["col_width"]))
			$col_width = $args["col_width"];
		?>

		<div class="eltdf-page-form-section" id="eltdf_<?php echo esc_attr($name); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->

			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-<?php echo esc_attr($col_width); ?>">
							<input type="text"
								   class="form-control eltdf-input eltdf-form-element"
								   name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(htmlspecialchars(borderland_elated_option_get_value($name))); ?>"
								   /></div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}

class BorderlandElatedFieldTextSimple extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		?>


		<div class="col-lg-3" id="eltdf_<?php echo esc_attr($name); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>
			<em class="eltdf-field-description"><?php echo esc_html($label); ?></em>
			<input type="text"
				   class="form-control eltdf-input eltdf-form-element"
				   name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(htmlspecialchars(borderland_elated_option_get_value($name))); ?>"
				   /></div>
	<?php

	}

}

class BorderlandElatedFieldTextArea extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		?>

		<div class="eltdf-page-form-section">


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->


			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<textarea class="form-control eltdf-form-element"
									  name="<?php echo esc_attr($name); ?>"
									  rows="5"><?php echo esc_html(htmlspecialchars(borderland_elated_option_get_value($name))); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}

class BorderlandElatedFieldTextAreaSimple extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		?>

		<div class="col-lg-3">
			<em class="eltdf-field-description"><?php echo esc_html($label); ?></em>
			<textarea class="form-control eltdf-form-element"
					  name="<?php echo esc_attr($name); ?>"
					  rows="5"><?php echo esc_html(borderland_elated_option_get_value($name)); ?></textarea>
		</div>
	<?php

	}

}

class BorderlandElatedFieldColor extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		?>

		<div class="eltdf-page-form-section" id="eltdf_<?php echo esc_attr($name); ?>">


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->

			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<input type="text" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>" class="my-color-field"/>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}

class BorderlandElatedFieldColorSimple extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) { ?>

		<div class="col-lg-3" id="eltdf_<?php echo esc_attr($name); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>
			<em class="eltdf-field-description"><?php echo esc_html($label); ?></em>
			<input type="text" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>" class="my-color-field"/>
		</div>
	<?php

	}

}

class BorderlandElatedFieldImage extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) { ?>

		<div class="eltdf-page-form-section">


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->

			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="eltdf-media-uploader">
								<div<?php if (!borderland_elated_option_has_value($name)) { ?> style="display: none"<?php } ?>
									class="eltdf-media-image-holder">
									<img src="<?php if (borderland_elated_option_has_value($name)) { echo esc_url(borderland_elated_get_attachment_thumb_url(borderland_elated_option_get_value($name))); } ?>"
										 class="eltdf-media-image img-thumbnail"/>
								</div>
								<div style="display: none"
									 class="eltdf-media-meta-fields">
									<input type="hidden" class="eltdf-media-upload-url"
										   name="<?php echo esc_attr($name); ?>"
										   value="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>"/>
									<input type="hidden"
										   class="eltdf-media-upload-height"
										   name="eltd_options_theme[media-upload][height]"
										   value=""/>
									<input type="hidden"
										   class="eltdf-media-upload-width"
										   name="eltd_options_theme[media-upload][width]"
										   value=""/>
								</div>
								<a class="eltdf-media-upload-btn btn btn-sm btn-primary"
								   href="javascript:void(0)"
								   data-frame-title="<?php esc_attr_e('Select Image', 'borderland'); ?>"
								   data-frame-button-text="<?php esc_attr_e('Select Image', 'borderland'); ?>"><?php esc_html_e('Upload', 'borderland'); ?></a>
								<a style="display: none;" href="javascript: void(0)"
								   class="eltdf-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'borderland'); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}

class BorderlandElatedFieldFont extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		global $borderland_fonts_array;
		?>

		<div class="eltdf-page-form-section">


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->



			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3">
							<select class="form-control eltdf-form-element"
									name="<?php echo esc_attr($name); ?>">
								<option value="-1"><?php esc_html_e( 'Default', 'borderland' ); ?></option>
								<?php foreach($borderland_fonts_array as $fontArray) { ?>
									<option <?php if (borderland_elated_option_get_value($name) == str_replace(' ', '+', $fontArray["family"])) { echo "selected='selected'"; } ?>  value="<?php echo esc_attr(str_replace(' ', '+', $fontArray["family"])); ?>"><?php echo esc_html($fontArray["family"]); ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}

class BorderlandElatedFieldFontSimple extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		global $borderland_fonts_array;
		?>


		<div class="col-lg-3">
			<em class="eltdf-field-description"><?php echo esc_html($label); ?></em>
			<select class="form-control eltdf-form-element"
					name="<?php echo esc_attr($name); ?>">
				<option value="-1"><?php esc_html_e( 'Default', 'borderland' ); ?></option>
				<?php foreach($borderland_fonts_array as $fontArray) { ?>
					<option <?php if (borderland_elated_option_get_value($name) == str_replace(' ', '+', $fontArray["family"])) { echo "selected='selected'"; } ?>  value="<?php echo esc_attr(str_replace(' ', '+', $fontArray["family"])); ?>"><?php echo esc_html($fontArray["family"]); ?></option>
				<?php } ?>
			</select>
		</div>
	<?php

	}

}

class BorderlandElatedFieldSelect extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		$dependence = false;
		if(isset($args["dependence"]))
			$dependence = true;
		$show = array();
		if(isset($args["show"]))
			$show = $args["show"];
		$hide = array();
		if(isset($args["hide"]))
			$hide = $args["hide"];
		?>

		<div class="eltdf-page-form-section"<?php if ($hidden) { ?> style="display: none"<?php } ?>>


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->



			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3">
							<select class="form-control eltdf-form-element<?php if ($dependence) { echo " dependence"; } ?>"
								<?php foreach($show as $key=>$value) { ?>
									data-show-<?php echo str_replace(' ', '',$key); ?>="<?php echo esc_attr($value); ?>"
								<?php } ?>
								<?php foreach($hide as $key=>$value) { ?>
									data-hide-<?php echo str_replace(' ', '',$key); ?>="<?php echo esc_attr($value); ?>"
								<?php } ?>
									name="<?php echo esc_attr($name); ?>">
								<?php foreach($options as $key=>$value) { if ($key == "-1") $key = ""; ?>
									<option <?php if (borderland_elated_option_get_value($name) == $key) { echo "selected='selected'"; } ?>  value="<?php echo esc_attr($key); ?>"><?php echo esc_html($value); ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}

class BorderlandElatedFieldSelectBlank extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		$dependence = false;
		if(isset($args["dependence"]))
			$dependence = true;
		$show = array();
		if(isset($args["show"]))
			$show = $args["show"];
		$hide = array();
		if(isset($args["hide"]))
			$hide = $args["hide"];
		?>

		<div class="eltdf-page-form-section"<?php if ($hidden) { ?> style="display: none"<?php } ?>>


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->



			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3">
							<select class="form-control eltdf-form-element<?php if ($dependence) { echo " dependence"; } ?>"
								<?php foreach($show as $key=>$value) { ?>
									data-show-<?php echo str_replace(' ', '',$key); ?>="<?php echo esc_attr($value); ?>"
								<?php } ?>
								<?php foreach($hide as $key=>$value) { ?>
									data-hide-<?php echo str_replace(' ', '',$key); ?>="<?php echo esc_attr($value); ?>"
								<?php } ?>
									name="<?php echo esc_attr($name); ?>">
								<option <?php if (borderland_elated_option_get_value($name) == "") { echo "selected='selected'"; } ?>  value=""></option>
								<?php foreach($options as $key=>$value) { if ($key == "-1") $key = ""; ?>
									<option <?php if (borderland_elated_option_get_value($name) == $key) { echo "selected='selected'"; } ?>  value="<?php echo esc_attr($key); ?>"><?php echo esc_html($value); ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}

class BorderlandElatedFieldSelectSimple extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $show = array();
        if(isset($args["show"]))
            $show = $args["show"];
        $hide = array();
        if(isset($args["hide"]))
            $hide = $args["hide"];
        ?>


		<div class="col-lg-3">
			<em class="eltdf-field-description"><?php echo esc_html($label); ?></em>
            <select class="form-control eltdf-form-element<?php if ($dependence) { echo " dependence"; } ?>"
                <?php foreach($show as $key=>$value) { ?>
                    data-show-<?php echo str_replace(' ', '',$key); ?>="<?php echo esc_attr($value); ?>"
                <?php } ?>
                <?php foreach($hide as $key=>$value) { ?>
                    data-hide-<?php echo str_replace(' ', '',$key); ?>="<?php echo esc_attr($value); ?>"
                <?php } ?>
                    name="<?php echo esc_attr($name); ?>">
                <option <?php if (borderland_elated_option_get_value($name) == "") { echo "selected='selected'"; } ?>  value=""></option>
                <?php foreach($options as $key=>$value) { if ($key == "-1") $key = ""; ?>
                    <option <?php if (borderland_elated_option_get_value($name) == $key) { echo "selected='selected'"; } ?>  value="<?php echo esc_attr($key); ?>"><?php echo esc_html($value); ?></option>
                <?php } ?>
            </select>
		</div>
	<?php

	}

}

class BorderlandElatedFieldSelectBlankSimple extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $show = array();
        if(isset($args["show"]))
            $show = $args["show"];
        $hide = array();
        if(isset($args["hide"]))
            $hide = $args["hide"];
        ?>


		<div class="col-lg-3">
			<em class="eltdf-field-description"><?php echo esc_html($label); ?></em>
            <select class="form-control eltdf-form-element<?php if ($dependence) { echo " dependence"; } ?>"
                <?php foreach($show as $key=>$value) { ?>
                    data-show-<?php echo str_replace(' ', '',$key); ?>="<?php echo esc_attr($value); ?>"
                <?php } ?>
                <?php foreach($hide as $key=>$value) { ?>
                    data-hide-<?php echo str_replace(' ', '',$key); ?>="<?php echo esc_attr($value); ?>"
                <?php } ?>
                    name="<?php echo esc_attr($name); ?>">
                <option <?php if (borderland_elated_option_get_value($name) == "") { echo "selected='selected'"; } ?>  value=""></option>
                <?php foreach($options as $key=>$value) { if ($key == "-1") $key = ""; ?>
                    <option <?php if (borderland_elated_option_get_value($name) == $key) { echo "selected='selected'"; } ?>  value="<?php echo esc_attr($key); ?>"><?php echo esc_html($value); ?></option>
                <?php } ?>
            </select>
		</div>
	<?php

	}

}

class BorderlandElatedFieldYesNo extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		$dependence = false;
		if(isset($args["dependence"]))
			$dependence = true;
		$dependence_hide_on_yes = "";
		if(isset($args["dependence_hide_on_yes"]))
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		$dependence_show_on_yes = "";
		if(isset($args["dependence_show_on_yes"]))
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		?>

		<div class="eltdf-page-form-section" id="eltdf_<?php echo esc_attr($name); ?>">


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->



			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<p class="field switch">
								<label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
									   class="cb-enable<?php if (borderland_elated_option_get_value($name) == "yes") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'borderland') ?></span></label>
								<label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
									   class="cb-disable<?php if (borderland_elated_option_get_value($name) == "no") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'borderland') ?></span></label>
								<input type="checkbox" id="checkbox" class="checkbox"
									   name="<?php echo esc_attr($name); ?>_yesno" value="yes"<?php if (borderland_elated_option_get_value($name) == "yes") { echo " selected"; } ?>/>
								<input type="hidden" class="checkboxhidden_yesno" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>"/>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}
}

class BorderlandElatedFieldYesNoSimple extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		$dependence = false;
		if(isset($args["dependence"]))
			$dependence = true;
		$dependence_hide_on_yes = "";
		if(isset($args["dependence_hide_on_yes"]))
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		$dependence_show_on_yes = "";
		if(isset($args["dependence_show_on_yes"]))
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		?>

		<div class="col-lg-3">
			<em class="eltdf-field-description"><?php echo esc_html($label); ?></em>
			<p class="field switch">
				<label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
					   class="cb-enable<?php if (borderland_elated_option_get_value($name) == "yes") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'borderland') ?></span></label>
				<label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
					   class="cb-disable<?php if (borderland_elated_option_get_value($name) == "no") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'borderland') ?></span></label>
				<input type="checkbox" id="checkbox" class="checkbox"
					   name="<?php echo esc_attr($name); ?>_yesno" value="yes"<?php if (borderland_elated_option_get_value($name) == "yes") { echo " selected"; } ?>/>
				<input type="hidden" class="checkboxhidden_yesno" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>"/>
			</p>
		</div>
	<?php

	}
}

class BorderlandElatedFieldOnOff extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		$dependence = false;
		if(isset($args["dependence"]))
			$dependence = true;
		$dependence_hide_on_yes = "";
		if(isset($args["dependence_hide_on_yes"]))
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		$dependence_show_on_yes = "";
		if(isset($args["dependence_show_on_yes"]))
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		?>

		<div class="eltdf-page-form-section" id="eltdf_<?php echo esc_attr($name); ?>">


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->



			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">

							<p class="field switch">
								<label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
									   class="cb-enable<?php if (borderland_elated_option_get_value($name) == "on") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('On', 'borderland') ?></span></label>
								<label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
									   class="cb-disable<?php if (borderland_elated_option_get_value($name) == "off") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Off', 'borderland') ?></span></label>
								<input type="checkbox" id="checkbox" class="checkbox"
									   name="<?php echo esc_attr($name); ?>_onoff" value="on"<?php if (borderland_elated_option_get_value($name) == "on") { echo " selected"; } ?>/>
								<input type="hidden" class="checkboxhidden_onoff" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>"/>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}

class BorderlandElatedFieldPortfolioFollow extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		$dependence = false;
		if(isset($args["dependence"]))
			$dependence = true;
		$dependence_hide_on_yes = "";
		if(isset($args["dependence_hide_on_yes"]))
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		$dependence_show_on_yes = "";
		if(isset($args["dependence_show_on_yes"]))
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		?>

		<div class="eltdf-page-form-section" id="eltdf_<?php echo esc_attr($name); ?>">


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->



			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<p class="field switch">
								<label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
									   class="cb-enable<?php if (borderland_elated_option_get_value($name) == "portfolio_single_follow") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'borderland') ?></span></label>
								<label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
									   class="cb-disable<?php if (borderland_elated_option_get_value($name) == "portfolio_single_no_follow") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'borderland') ?></span></label>
								<input type="checkbox" id="checkbox" class="checkbox"
									   name="<?php echo esc_attr($name); ?>_portfoliofollow" value="portfolio_single_follow"<?php if (borderland_elated_option_get_value($name) == "portfolio_single_follow") { echo " selected"; } ?>/>
								<input type="hidden" class="checkboxhidden_portfoliofollow" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>"/>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}

class BorderlandElatedFieldZeroOne extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		$dependence = false;
		if(isset($args["dependence"]))
			$dependence = true;
		$dependence_hide_on_yes = "";
		if(isset($args["dependence_hide_on_yes"]))
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		$dependence_show_on_yes = "";
		if(isset($args["dependence_show_on_yes"]))
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		?>

		<div class="eltdf-page-form-section" id="eltdf_<?php echo esc_attr($name); ?>">


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->



			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">

							<p class="field switch">
								<label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
									   class="cb-enable<?php if (borderland_elated_option_get_value($name) == "1") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'borderland') ?></span></label>
								<label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
									   class="cb-disable<?php if (borderland_elated_option_get_value($name) == "0") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'borderland') ?></span></label>
								<input type="checkbox" id="checkbox" class="checkbox"
									   name="<?php echo esc_attr($name); ?>_zeroone" value="1"<?php if (borderland_elated_option_get_value($name) == "1") { echo " selected"; } ?>/>
								<input type="hidden" class="checkboxhidden_zeroone" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>"/>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}

class BorderlandElatedFieldImageVideo extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		$dependence = false;
		if(isset($args["dependence"]))
			$dependence = true;
		$dependence_hide_on_yes = "";
		if(isset($args["dependence_hide_on_yes"]))
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		$dependence_show_on_yes = "";
		if(isset($args["dependence_show_on_yes"]))
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		?>

		<div class="eltdf-page-form-section" id="eltdf_<?php echo esc_attr($name); ?>">


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->



			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<p class="field switch switch-type">
								<label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
									   class="cb-enable<?php if (borderland_elated_option_get_value($name) == "image") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Image', 'borderland') ?></span></label>
								<label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
									   class="cb-disable<?php if (borderland_elated_option_get_value($name) == "video") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Video', 'borderland') ?></span></label>
								<input type="checkbox" id="checkbox" class="checkbox"
									   name="<?php echo esc_attr($name); ?>_imagevideo" value="image"<?php if (borderland_elated_option_get_value($name) == "image") { echo " selected"; } ?>/>
								<input type="hidden" class="checkboxhidden_imagevideo" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>"/>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}

class BorderlandElatedFieldYesEmpty extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		$dependence = false;
		if(isset($args["dependence"]))
			$dependence = true;
		$dependence_hide_on_yes = "";
		if(isset($args["dependence_hide_on_yes"]))
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		$dependence_show_on_yes = "";
		if(isset($args["dependence_show_on_yes"]))
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		?>

		<div class="eltdf-page-form-section" id="eltdf_<?php echo esc_attr($name); ?>">


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->



			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<p class="field switch">
								<label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
									   class="cb-enable<?php if (borderland_elated_option_get_value($name) == "yes") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'borderland') ?></span></label>
								<label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
									   class="cb-disable<?php if (borderland_elated_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'borderland') ?></span></label>
								<input type="checkbox" id="checkbox" class="checkbox"
									   name="<?php echo esc_attr($name); ?>_yesempty" value="yes"<?php if (borderland_elated_option_get_value($name) == "yes") { echo " selected"; } ?>/>
								<input type="hidden" class="checkboxhidden_yesempty" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>"/>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}

class BorderlandElatedFieldFlagPage extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		$dependence = false;
		if(isset($args["dependence"]))
			$dependence = true;
		$dependence_hide_on_yes = "";
		if(isset($args["dependence_hide_on_yes"]))
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		$dependence_show_on_yes = "";
		if(isset($args["dependence_show_on_yes"]))
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		?>

		<div class="eltdf-page-form-section" id="eltdf_<?php echo esc_attr($name); ?>">


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->



			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<p class="field switch">
								<label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
									   class="cb-enable<?php if (borderland_elated_option_get_value($name) == "page") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'borderland') ?></span></label>
								<label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
									   class="cb-disable<?php if (borderland_elated_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'borderland') ?></span></label>
								<input type="checkbox" id="checkbox" class="checkbox"
									   name="<?php echo esc_attr($name); ?>_flagpage" value="page"<?php if (borderland_elated_option_get_value($name) == "page") { echo " selected"; } ?>/>
								<input type="hidden" class="checkboxhidden_flagpage" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>"/>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}

class BorderlandElatedFieldFlagPost extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		$dependence = false;
		if(isset($args["dependence"]))
			$dependence = true;
		$dependence_hide_on_yes = "";
		if(isset($args["dependence_hide_on_yes"]))
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		$dependence_show_on_yes = "";
		if(isset($args["dependence_show_on_yes"]))
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		?>

		<div class="eltdf-page-form-section" id="eltdf_<?php echo esc_attr($name); ?>">


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->



			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<p class="field switch">
								<label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
									   class="cb-enable<?php if (borderland_elated_option_get_value($name) == "post") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'borderland') ?></span></label>
								<label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
									   class="cb-disable<?php if (borderland_elated_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'borderland') ?></span></label>
								<input type="checkbox" id="checkbox" class="checkbox"
									   name="<?php echo esc_attr($name); ?>_flagpost" value="post"<?php if (borderland_elated_option_get_value($name) == "post") { echo " selected"; } ?>/>
								<input type="hidden" class="checkboxhidden_flagpost" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>"/>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}

class BorderlandElatedFieldFlagMedia extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		$dependence = false;
		if(isset($args["dependence"]))
			$dependence = true;
		$dependence_hide_on_yes = "";
		if(isset($args["dependence_hide_on_yes"]))
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		$dependence_show_on_yes = "";
		if(isset($args["dependence_show_on_yes"]))
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		?>

		<div class="eltdf-page-form-section" id="eltdf_<?php echo esc_attr($name); ?>">


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->



			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<p class="field switch">
								<label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
									   class="cb-enable<?php if (borderland_elated_option_get_value($name) == "attachment") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'borderland') ?></span></label>
								<label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
									   class="cb-disable<?php if (borderland_elated_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'borderland') ?></span></label>
								<input type="checkbox" id="checkbox" class="checkbox"
									   name="<?php echo esc_attr($name); ?>_flagmedia" value="attachment"<?php if (borderland_elated_option_get_value($name) == "attachment") { echo " selected"; } ?>/>
								<input type="hidden" class="checkboxhidden_flagmedia" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>"/>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}

class BorderlandElatedFieldFlagPortfolio extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		$dependence = false;
		if(isset($args["dependence"]))
			$dependence = true;
		$dependence_hide_on_yes = "";
		if(isset($args["dependence_hide_on_yes"]))
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		$dependence_show_on_yes = "";
		if(isset($args["dependence_show_on_yes"]))
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		?>

		<div class="eltdf-page-form-section" id="eltdf_<?php echo esc_attr($name); ?>">


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->



			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<p class="field switch">
								<label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
									   class="cb-enable<?php if (borderland_elated_option_get_value($name) == "portfolio_page") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'borderland') ?></span></label>
								<label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
									   class="cb-disable<?php if (borderland_elated_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'borderland') ?></span></label>
								<input type="checkbox" id="checkbox" class="checkbox"
									   name="<?php echo esc_attr($name); ?>_flagportfolio" value="portfolio_page"<?php if (borderland_elated_option_get_value($name) == "portfolio_page") { echo " selected"; } ?>/>
								<input type="hidden" class="checkboxhidden_flagportfolio" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>"/>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}

class BorderlandElatedFieldFlagProduct extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		$dependence = false;
		if(isset($args["dependence"]))
			$dependence = true;
		$dependence_hide_on_yes = "";
		if(isset($args["dependence_hide_on_yes"]))
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		$dependence_show_on_yes = "";
		if(isset($args["dependence_show_on_yes"]))
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		?>

		<div class="eltdf-page-form-section" id="eltdf_<?php echo esc_attr($name); ?>">


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->



			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<p class="field switch">
								<label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
									   class="cb-enable<?php if (borderland_elated_option_get_value($name) == "product") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'borderland') ?></span></label>
								<label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
									   class="cb-disable<?php if (borderland_elated_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'borderland') ?></span></label>
								<input type="checkbox" id="checkbox" class="checkbox"
									   name="<?php echo esc_attr($name); ?>_flagproduct" value="product"<?php if (borderland_elated_option_get_value($name) == "product") { echo " selected"; } ?>/>
								<input type="hidden" class="checkboxhidden_flagproduct" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>"/>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}

class BorderlandElatedFieldRange extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		$range_min = 0;
		$range_max = 1;
		$range_step = 0.01;
		$range_decimals = 2;
		if(isset($args["range_min"]))
			$range_min = $args["range_min"];
		if(isset($args["range_max"]))
			$range_max = $args["range_max"];
		if(isset($args["range_step"]))
			$range_step = $args["range_step"];
		if(isset($args["range_decimals"]))
			$range_decimals = $args["range_decimals"];
		?>

		<div class="eltdf-page-form-section">


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->

			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="eltdf-slider-range-wrapper">
								<div class="form-inline">
									<input type="text"
										   class="form-control eltdf-form-element eltdf-form-element-xsmall pull-left eltdf-slider-range-value"
										   name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>"/>

									<div class="eltdf-slider-range small"
										 data-step="<?php echo esc_attr($range_step); ?>" data-min="<?php echo esc_attr($range_min); ?>" data-max="<?php echo esc_attr($range_max); ?>" data-decimals="<?php echo esc_attr($range_decimals); ?>" data-start="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>"></div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}

class BorderlandElatedFieldRangeSimple extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		?>

		<div class="col-lg-3" id="eltdf_<?php echo esc_attr($name); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>
			<div class="eltdf-slider-range-wrapper">
				<div class="form-inline">
					<em class="eltdf-field-description"><?php echo esc_html($label); ?></em>
					<input type="text"
						   class="form-control eltdf-form-element eltdf-form-element-xxsmall pull-left eltdf-slider-range-value"
						   name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>"/>

					<div class="eltdf-slider-range xsmall"
						 data-step="0.01" data-max="1" data-start="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>"></div>
				</div>

			</div>
		</div>
	<?php

	}

}

class BorderlandElatedFieldRadio extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {

		$checked = "";
		if ($default_value == $value)
			$checked = "checked";
		$html = '<input type="radio" name="'.$name.'" value="'.$default_value.'" '.$checked.' /> '.$label.'<br />';
		echo wp_kses($html, array(
			'input' => array(
				'type' => true,
				'name' => true,
				'value' => true,
				'checked' => true
			),
			'br' => true
		));

	}

}

class BorderlandElatedFieldCheckBox extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {

		$checked = "";
		if ($default_value == $value)
			$checked = "checked";
		$html = '<input type="checkbox" name="'.$name.'" value="'.$default_value.'" '.$checked.' /> '.$label.'<br />';
		echo wp_kses($html, array(
			'input' => array(
				'type' => true,
				'name' => true,
				'value' => true,
				'checked' => true
			),
			'br' => true
		));

	}

}

class BorderlandElatedFieldDate extends BorderlandElatedFieldType {

	public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
		$col_width = 2;
		if(isset($args["col_width"]))
			$col_width = $args["col_width"];
		?>

		<div class="eltdf-page-form-section" id="eltdf_<?php echo esc_attr($name); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($label); ?></h4>

				<p><?php echo esc_html($description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->

			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-<?php echo esc_attr($col_width); ?>">
							<input type="text"
								   id = "portfolio_date"
								   class="datepicker form-control eltdf-input eltdf-form-element"
								   name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(borderland_elated_option_get_value($name)); ?>"
								/></div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}

}


class BorderlandElatedFieldFactory {

	public function render( $field_type, $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {


		switch ( strtolower( $field_type ) ) {

			case 'text':
				$field = new BorderlandElatedFieldText();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'textsimple':
				$field = new BorderlandElatedFieldTextSimple();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'textarea':
				$field = new BorderlandElatedFieldTextArea();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'textareasimple':
				$field = new BorderlandElatedFieldTextAreaSimple();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'color':
				$field = new BorderlandElatedFieldColor();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'colorsimple':
				$field = new BorderlandElatedFieldColorSimple();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'image':
				$field = new BorderlandElatedFieldImage();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'font':
				$field = new BorderlandElatedFieldFont();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'fontsimple':
				$field = new BorderlandElatedFieldFontSimple();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'select':
				$field = new BorderlandElatedFieldSelect();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'selectblank':
				$field = new BorderlandElatedFieldSelectBlank();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'selectsimple':
				$field = new BorderlandElatedFieldSelectSimple();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'selectblanksimple':
				$field = new BorderlandElatedFieldSelectBlankSimple();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'yesno':
				$field = new BorderlandElatedFieldYesNo();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'yesnosimple':
				$field = new BorderlandElatedFieldYesNoSimple();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'onoff':
				$field = new BorderlandElatedFieldOnOff();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'portfoliofollow':
				$field = new BorderlandElatedFieldPortfolioFollow();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'zeroone':
				$field = new BorderlandElatedFieldZeroOne();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'imagevideo':
				$field = new BorderlandElatedFieldImageVideo();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'yesempty':
				$field = new BorderlandElatedFieldYesEmpty();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'flagpost':
				$field = new BorderlandElatedFieldFlagPost();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'flagpage':
				$field = new BorderlandElatedFieldFlagPage();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'flagmedia':
				$field = new BorderlandElatedFieldFlagMedia();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'flagportfolio':
				$field = new BorderlandElatedFieldFlagPortfolio();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'flagproduct':
				$field = new BorderlandElatedFieldFlagProduct();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'range':
				$field = new BorderlandElatedFieldRange();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'rangesimple':
				$field = new BorderlandElatedFieldRangeSimple();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'radio':
				$field = new BorderlandElatedFieldRadio();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'checkbox':
				$field = new BorderlandElatedFieldCheckBox();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			case 'date':
				$field = new BorderlandElatedFieldDate();
				$field->render( $name, $label, $description, $options, $args, $hidden );
				break;

			default:
				break;

		}

	}

}

/*
   Class: BorderlandElatedMultipleImages
   A class that initializes Elated Multiple Images
*/
class BorderlandElatedMultipleImages implements iRender {
	private $name;
	private $label;
	private $description;


	function __construct($name,$label="",$description="") {
		global $borderland_elated_framework;
		$this->name = $name;
		$this->label = $label;
		$this->description = $description;
		$borderland_elated_framework->eltdMetaBoxes->addOption($this->name,"");
	}

	public function render($factory) {
		global $post;
		?>

		<div class="eltdf-page-form-section">


			<div class="eltdf-field-desc">
				<h4><?php echo esc_html($this->label); ?></h4>

				<p><?php echo esc_html($this->description); ?></p>
			</div>
			<!-- close div.eltdf-field-desc -->

			<div class="eltdf-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<ul class="eltd-gallery-images-holder clearfix">
								<?php
								$portfolio_image_gallery_val = get_post_meta( $post->ID, 'eltd_portfolio-image-gallery', true );
								if($portfolio_image_gallery_val!='' ) $portfolio_image_gallery_array=explode(',',$portfolio_image_gallery_val);

								if(isset($portfolio_image_gallery_array) && count($portfolio_image_gallery_array)!=0):

									foreach($portfolio_image_gallery_array as $gimg_id):

										$gimage_wp = wp_get_attachment_image_src($gimg_id,'thumbnail', true);
										echo '<li class="eltd-gallery-image-holder"><img src="'.esc_url($gimage_wp[0]).'"/></li>';

									endforeach;

								endif;
								?>
							</ul>
							<input type="hidden" value="<?php echo esc_attr($portfolio_image_gallery_val); ?>" id="eltd_portfolio-image-gallery" name="eltd_portfolio-image-gallery">
							<div class="eltdf-gallery-uploader">
								<a class="eltdf-gallery-upload-btn btn btn-sm btn-primary"
								   href="javascript:void(0)"><?php esc_html_e('Upload', 'borderland'); ?></a>
								<a class="eltdf-gallery-clear-btn btn btn-sm btn-default pull-right"
								   href="javascript:void(0)"><?php esc_html_e('Remove All', 'borderland'); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- close div.eltdf-section-content -->

		</div>
	<?php

	}
}

/*
   Class: BorderlandElatedImagesVideos
   A class that initializes Elated Images Videos
*/
class BorderlandElatedImagesVideos implements iRender {
	private $label;
	private $description;


	function __construct($label="",$description="") {
		$this->label = $label;
		$this->description = $description;
	}

	public function render($factory) {
		global $post;
		?>
		<div class="eltdf_hidden_portfolio_images" style="display: none">
			<div class="eltdf-page-form-section">


				<div class="eltdf-field-desc">
					<h4><?php echo esc_html($this->label); ?></h4>

					<p><?php echo esc_html($this->description); ?></p>
				</div>
				<!-- close div.eltdf-field-desc -->

				<div class="eltdf-section-content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-2">
								<em class="eltdf-field-description"><?php esc_html_e( 'Order Number', 'borderland' ); ?></em>
								<input type="text"
									   class="form-control eltdf-input eltdf-form-element"
									   id="portfolioimgordernumber_x"
									   name="portfolioimgordernumber_x"
									   /></div>
							<div class="col-lg-10">
								<em class="eltdf-field-description"><?php esc_html_e( 'Image/Video title (only for gallery layout - Portfolio Style 6)', 'borderland' ); ?></em>
								<input type="text"
									   class="form-control eltdf-input eltdf-form-element"
									   id="portfoliotitle_x"
									   name="portfoliotitle_x"
									   /></div>
						</div>
						<div class="row next-row">
							<div class="col-lg-12">
								<em class="eltdf-field-description"><?php esc_html_e( 'Image', 'borderland' ); ?></em>
								<div class="eltdf-media-uploader">
									<div style="display: none"
										 class="eltdf-media-image-holder">
										<img src=""
											 class="eltdf-media-image img-thumbnail"/>
									</div>
									<div style="display: none"
										 class="eltdf-media-meta-fields">
										<input type="hidden" class="eltdf-media-upload-url"
											   name="portfolioimg_x"
											   id="portfolioimg_x"/>
										<input type="hidden"
											   class="eltdf-media-upload-height"
											   name="eltd_options_theme[media-upload][height]"
											   value=""/>
										<input type="hidden"
											   class="eltdf-media-upload-width"
											   name="eltd_options_theme[media-upload][width]"
											   value=""/>
									</div>
									<a class="eltdf-media-upload-btn btn btn-sm btn-primary"
									   href="javascript:void(0)"
									   data-frame-title="<?php esc_attr_e('Select Image', 'borderland'); ?>"
									   data-frame-button-text="<?php esc_attr_e('Select Image', 'borderland'); ?>"><?php esc_html_e('Upload', 'borderland'); ?></a>
									<a style="display: none;" href="javascript: void(0)"
									   class="eltdf-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'borderland'); ?></a>
								</div>
							</div>
						</div>
						<div class="row next-row">
							<div class="col-lg-3">
								<em class="eltdf-field-description"><?php esc_html_e( 'Video type', 'borderland' ); ?></em>
								<select class="form-control eltdf-form-element eltdf-portfoliovideotype"
										name="portfoliovideotype_x" id="portfoliovideotype_x">
									<option value=""></option>
									<option value="youtube"><?php esc_html_e( 'Youtube', 'borderland' ); ?></option>
									<option value="vimeo"><?php esc_html_e( 'Vimeo', 'borderland' ); ?></option>
									<option value="self"><?php esc_html_e( 'Self hosted', 'borderland' ); ?></option>
								</select>
							</div>
							<div class="col-lg-3">
								<em class="eltdf-field-description"><?php esc_html_e( 'Video ID', 'borderland' ); ?></em>
								<input type="text"
									   class="form-control eltdf-input eltdf-form-element"
									   id="portfoliovideoid_x"
									   name="portfoliovideoid_x"
									   /></div>
						</div>
						<div class="row next-row">
							<div class="col-lg-12">
								<em class="eltdf-field-description"><?php esc_html_e( 'Video image', 'borderland' ); ?></em>
								<div class="eltdf-media-uploader">
									<div style="display: none"
										 class="eltdf-media-image-holder">
										<img src=""
											 class="eltdf-media-image img-thumbnail"/>
									</div>
									<div style="display: none"
										 class="eltdf-media-meta-fields">
										<input type="hidden" class="eltdf-media-upload-url"
											   name="portfoliovideoimage_x"
											   id="portfoliovideoimage_x"/>
										<input type="hidden"
											   class="eltdf-media-upload-height"
											   name="eltd_options_theme[media-upload][height]"
											   value=""/>
										<input type="hidden"
											   class="eltdf-media-upload-width"
											   name="eltd_options_theme[media-upload][width]"
											   value=""/>
									</div>
									<a class="eltdf-media-upload-btn btn btn-sm btn-primary"
									   href="javascript:void(0)"
									   data-frame-title="<?php esc_attr_e('Select Image', 'borderland'); ?>"
									   data-frame-button-text="<?php esc_attr_e('Select Image', 'borderland'); ?>"><?php esc_html_e('Upload', 'borderland'); ?></a>
									<a style="display: none;" href="javascript: void(0)"
									   class="eltdf-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'borderland'); ?></a>
								</div>
							</div>
						</div>
						<div class="row next-row">
							<div class="col-lg-4">
								<em class="eltdf-field-description"><?php esc_html_e( 'Video webm', 'borderland' ); ?></em>
								<input type="text"
									   class="form-control eltdf-input eltdf-form-element"
									   id="portfoliovideowebm_x"
									   name="portfoliovideowebm_x"
									   /></div>
							<div class="col-lg-4">
								<em class="eltdf-field-description"><?php esc_html_e( 'Video mp4', 'borderland' ); ?></em>
								<input type="text"
									   class="form-control eltdf-input eltdf-form-element"
									   id="portfoliovideomp4_x"
									   name="portfoliovideomp4_x"
									   /></div>
							<div class="col-lg-4">
								<em class="eltdf-field-description"><?php esc_html_e( 'Video ogv', 'borderland' ); ?></em>
								<input type="text"
									   class="form-control eltdf-input eltdf-form-element"
									   id="portfoliovideoogv_x"
									   name="portfoliovideoogv_x"
									   /></div>
						</div>
						<div class="row next-row">
							<div class="col-lg-12">
								<a class="eltdf_remove_image btn btn-sm btn-primary" href="/" onclick="javascript: return false;"><?php esc_html_e( 'Remove portfolio image/video', 'borderland' ); ?></a>
							</div>
						</div>



					</div>
				</div>
				<!-- close div.eltdf-section-content -->

			</div>
		</div>

		<?php
		$no = 1;
		$portfolio_images = get_post_meta( $post->ID, 'eltd_portfolio_images', true );
		if (!empty($portfolio_images) && count($portfolio_images)>1) {
			usort($portfolio_images, "borderland_elated_compare_portfolio_images");
		}
		while (isset($portfolio_images[$no-1])) {
			$portfolio_image = $portfolio_images[$no-1];
			?>
			<div class="eltdf_portfolio_image" rel="<?php echo esc_attr($no); ?>" style="display: block;">

				<div class="eltdf-page-form-section">


					<div class="eltdf-field-desc">
						<h4><?php echo esc_html($this->label); ?></h4>

						<p><?php echo esc_html($this->description); ?></p>
					</div>
					<!-- close div.eltdf-field-desc -->

					<div class="eltdf-section-content">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-2">
									<em class="eltdf-field-description"><?php esc_html_e( 'Order Number', 'borderland' ); ?></em>
									<input type="text"
										   class="form-control eltdf-input eltdf-form-element"
										   id="portfolioimgordernumber_<?php echo esc_attr($no); ?>"
										   name="portfolioimgordernumber[]" value="<?php echo isset($portfolio_image['portfolioimgordernumber']) ? esc_attr(stripslashes($portfolio_image['portfolioimgordernumber'])) : ""; ?>"
										   /></div>
								<div class="col-lg-10">
									<em class="eltdf-field-description"><?php esc_html_e( 'Image/Video title (only for gallery layout - Portfolio Style 6)', 'borderland' ); ?></em>
									<input type="text"
										   class="form-control eltdf-input eltdf-form-element"
										   id="portfoliotitle_<?php echo esc_attr($no); ?>"
										   name="portfoliotitle[]" value="<?php echo isset($portfolio_image['portfoliotitle']) ? esc_attr(stripslashes($portfolio_image['portfoliotitle'])) : ""; ?>"
										   /></div>
							</div>
							<div class="row next-row">
								<div class="col-lg-12">
									<em class="eltdf-field-description"><?php esc_html_e( 'Image', 'borderland' ); ?></em>
									<div class="eltdf-media-uploader">
										<div<?php if (stripslashes($portfolio_image['portfolioimg']) == false) { ?> style="display: none"<?php } ?>
											class="eltdf-media-image-holder">
											<img src="<?php if (stripslashes($portfolio_image['portfolioimg']) == true) { echo esc_url( borderland_elated_get_attachment_thumb_url( stripslashes( $portfolio_image['portfolioimg'] ) ) ); } ?>"
												 class="eltdf-media-image img-thumbnail"/>
										</div>
										<div style="display: none"
											 class="eltdf-media-meta-fields">
											<input type="hidden" class="eltdf-media-upload-url"
												   name="portfolioimg[]"
												   id="portfolioimg_<?php echo esc_attr($no); ?>"
												   value="<?php echo stripslashes($portfolio_image['portfolioimg']); ?>"/>
											<input type="hidden"
												   class="eltdf-media-upload-height"
												   name="eltd_options_theme[media-upload][height]"
												   value=""/>
											<input type="hidden"
												   class="eltdf-media-upload-width"
												   name="eltd_options_theme[media-upload][width]"
												   value=""/>
										</div>
										<a class="eltdf-media-upload-btn btn btn-sm btn-primary"
										   href="javascript:void(0)"
										   data-frame-title="<?php esc_attr_e('Select Image', 'borderland'); ?>"
										   data-frame-button-text="<?php esc_attr_e('Select Image', 'borderland'); ?>"><?php esc_html_e('Upload', 'borderland'); ?></a>
										<a style="display: none;" href="javascript: void(0)"
										   class="eltdf-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'borderland'); ?></a>
									</div>
								</div>
							</div>
							<div class="row next-row">
								<div class="col-lg-3">
									<em class="eltdf-field-description"><?php esc_html_e( 'Video type', 'borderland' ); ?></em>
									<select class="form-control eltdf-form-element eltdf-portfoliovideotype"
											name="portfoliovideotype[]" id="portfoliovideotype_<?php echo esc_attr($no); ?>">
										<option value=""></option>
										<option <?php if ($portfolio_image['portfoliovideotype'] == "youtube") { echo "selected='selected'"; } ?>  value="youtube"><?php esc_html_e( 'Youtube', 'borderland' ); ?></option>
										<option <?php if ($portfolio_image['portfoliovideotype'] == "vimeo") { echo "selected='selected'"; } ?>  value="vimeo"><?php esc_html_e( 'Vimeo', 'borderland' ); ?></option>
										<option <?php if ($portfolio_image['portfoliovideotype'] == "self") { echo "selected='selected'"; } ?>  value="self"><?php esc_html_e( 'Self hosted', 'borderland' ); ?></option>
									</select>
								</div>
								<div class="col-lg-3">
									<em class="eltdf-field-description"><?php esc_html_e( 'Video ID', 'borderland' ); ?></em>
									<input type="text"
										   class="form-control eltdf-input eltdf-form-element"
										   id="portfoliovideoid_<?php echo esc_attr($no); ?>"
										   name="portfoliovideoid[]" value="<?php echo isset($portfolio_image['portfoliovideoid']) ? esc_attr(stripslashes($portfolio_image['portfoliovideoid'])) : ""; ?>"
										   /></div>
							</div>
							<div class="row next-row">
								<div class="col-lg-12">
									<em class="eltdf-field-description"><?php esc_html_e( 'Video image', 'borderland' ); ?></em>
									<div class="eltdf-media-uploader">
										<div<?php if (stripslashes($portfolio_image['portfoliovideoimage']) == false) { ?> style="display: none"<?php } ?>
											class="eltdf-media-image-holder">
											<img src="<?php if (stripslashes($portfolio_image['portfoliovideoimage']) == true) { echo esc_url(borderland_elated_get_attachment_thumb_url(stripslashes($portfolio_image['portfoliovideoimage']))); } ?>"
												 class="eltdf-media-image img-thumbnail"/>
										</div>
										<div style="display: none"
											 class="eltdf-media-meta-fields">
											<input type="hidden" class="eltdf-media-upload-url"
												   name="portfoliovideoimage[]"
												   id="portfoliovideoimage_<?php echo esc_attr($no); ?>"
												   value="<?php echo stripslashes($portfolio_image['portfoliovideoimage']); ?>"/>
											<input type="hidden"
												   class="eltdf-media-upload-height"
												   name="eltd_options_theme[media-upload][height]"
												   value=""/>
											<input type="hidden"
												   class="eltdf-media-upload-width"
												   name="eltd_options_theme[media-upload][width]"
												   value=""/>
										</div>
										<a class="eltdf-media-upload-btn btn btn-sm btn-primary"
										   href="javascript:void(0)"
										   data-frame-title="<?php esc_attr_e('Select Image', 'borderland'); ?>"
										   data-frame-button-text="<?php esc_attr_e('Select Image', 'borderland'); ?>"><?php esc_html_e('Upload', 'borderland'); ?></a>
										<a style="display: none;" href="javascript: void(0)"
										   class="eltdf-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'borderland'); ?></a>
									</div>
								</div>
							</div>
							<div class="row next-row">
								<div class="col-lg-4">
									<em class="eltdf-field-description"><?php esc_html_e( 'Video webm', 'borderland' ); ?></em>
									<input type="text"
										   class="form-control eltdf-input eltdf-form-element"
										   id="portfoliovideowebm_<?php echo esc_attr($no); ?>"
										   name="portfoliovideowebm[]" value="<?php echo isset($portfolio_image['portfoliovideowebm']) ? esc_attr(stripslashes($portfolio_image['portfoliovideowebm'])) : ""; ?>"
										   /></div>
								<div class="col-lg-4">
									<em class="eltdf-field-description"><?php esc_html_e( 'Video mp4', 'borderland' ); ?></em>
									<input type="text"
										   class="form-control eltdf-input eltdf-form-element"
										   id="portfoliovideomp4_<?php echo esc_attr($no); ?>"
										   name="portfoliovideomp4[]" value="<?php echo isset($portfolio_image['portfoliovideomp4']) ? esc_attr(stripslashes($portfolio_image['portfoliovideomp4'])) : ""; ?>"
										   /></div>
								<div class="col-lg-4">
									<em class="eltdf-field-description"><?php esc_html_e( 'Video ogv', 'borderland' ); ?></em>
									<input type="text"
										   class="form-control eltdf-input eltdf-form-element"
										   id="portfoliovideoogv_<?php echo esc_attr($no); ?>"
										   name="portfoliovideoogv[]" value="<?php echo isset($portfolio_image['portfoliovideoogv']) ? esc_attr(stripslashes($portfolio_image['portfoliovideoogv'])):""; ?>"
										   /></div>
							</div>
							<div class="row next-row">
								<div class="col-lg-12">
									<a class="eltdf_remove_image btn btn-sm btn-primary" href="/" onclick="javascript: return false;"><?php esc_html_e( 'Remove portfolio image/video', 'borderland' ); ?></a>
								</div>
							</div>



						</div>
					</div>
					<!-- close div.eltdf-section-content -->

				</div>
			</div>
			<?php
			$no++;
		}
		?>
		<br />
		<a class="eltdf_add_image btn btn-sm btn-primary" onclick="javascript: return false;" href="/" ><?php esc_html_e( 'Add portfolio image/video', 'borderland' ); ?></a>
	<?php

	}
}


/*
   Class: BorderlandElatedImagesVideos
   A class that initializes Elated Images Videos
*/
class BorderlandElatedImagesVideosFramework implements iRender {
	private $label;
	private $description;


	function __construct($label="",$description="") {
		$this->label = $label;
		$this->description = $description;
	}

	public function render($factory) {
		global $post;
		?>

		<!--Image hidden start-->
		<div class="eltdf-hidden-portfolio-images"  style="display: none">
			<div class="eltdf-portfolio-toggle-holder">
				<div class="eltdf-portfolio-toggle eltdf-toggle-desc">
					<span class="number">1</span><span class="eltdf-toggle-inner"><?php esc_html_e( 'Image - ', 'borderland' ); ?><em><?php esc_html_e( '(Order Number, Image Title)', 'borderland' ); ?></em></span>
				</div>
				<div class="eltdf-portfolio-toggle eltdf-portfolio-control">
					<span class="toggle-portfolio-media"><i class="fa fa-caret-up"></i></span>
					<a href="#" class="remove-portfolio-media"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="eltdf-portfolio-toggle-content">
				<div class="eltdf-page-form-section">
					<div class="eltdf-section-content">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-2">
									<div class="eltdf-media-uploader">
										<em class="eltdf-field-description"><?php esc_html_e( 'Image ', 'borderland' ); ?></em>
										<div style="display: none" class="eltdf-media-image-holder">
											<img src=""  class="eltdf-media-image img-thumbnail">
										</div>
										<div  class="eltdf-media-meta-fields">
											<input type="hidden" class="eltdf-media-upload-url" name="portfolioimg_x" id="portfolioimg_x">
											<input type="hidden" class="eltdf-media-upload-height" name="eltd_options_theme[media-upload][height]" value="">
											<input type="hidden" class="eltdf-media-upload-width" name="eltd_options_theme[media-upload][width]" value="">
										</div>
										<a class="eltdf-media-upload-btn btn btn-sm btn-primary" href="javascript:void(0)" data-frame-title="<?php esc_attr_e( 'Select Image', 'borderland' ); ?>" data-frame-button-text="<?php esc_attr_e( 'Select Image', 'borderland' ); ?>"><?php esc_html_e( 'Upload', 'borderland' ); ?></a>
										<a style="display: none;" href="javascript: void(0)" class="eltdf-media-remove-btn btn btn-default btn-sm"><?php esc_html_e( 'Remove', 'borderland' ); ?></a>
									</div>
								</div>
								<div class="col-lg-2">
									<em class="eltdf-field-description"><?php esc_html_e( 'Order Number', 'borderland' ); ?></em>
									<input type="text" class="form-control eltdf-input eltdf-form-element" id="portfolioimgordernumber_x" name="portfolioimgordernumber_x" >
								</div>
								<div class="col-lg-8">
									<em class="eltdf-field-description"><?php esc_html_e( 'Image Title (works only for Gallery portfolio type selected) ', 'borderland' ); ?></em>
									<input type="text" class="form-control eltdf-input eltdf-form-element" id="portfoliotitle_x" name="portfoliotitle_x" >
								</div>
							</div>
							<input type="hidden" name="portfoliovideoimage_x" id="portfoliovideoimage_x">
							<input type="hidden" name="portfoliovideotype_x" id="portfoliovideotype_x">
							<input type="hidden" name="portfoliovideoid_x" id="portfoliovideoid_x">
							<input type="hidden" name="portfoliovideowebm_x" id="portfoliovideowebm_x">
							<input type="hidden" name="portfoliovideomp4_x" id="portfoliovideomp4_x">
							<input type="hidden" name="portfoliovideoogv_x" id="portfoliovideoogv_x">
							<input type="hidden" name="portfolioimgtype_x" id="portfolioimgtype_x" value="image">

						</div><!-- close div.container-fluid -->
					</div><!-- close div.eltdf-section-content -->
				</div>
			</div>
		</div>
		<!--Image hidden End-->

		<!--Video Hidden Start-->
		<div class="eltdf-hidden-portfolio-videos"  style="display: none">
			<div class="eltdf-portfolio-toggle-holder">
				<div class="eltdf-portfolio-toggle eltdf-toggle-desc">
					<span class="number">2</span><span class="eltdf-toggle-inner"><?php esc_html_e( 'Video - ', 'borderland' ); ?><em><?php esc_html_e( '(Order Number, Video Title)', 'borderland' ); ?></em></span>
				</div>
				<div class="eltdf-portfolio-toggle eltdf-portfolio-control">
					<span class="toggle-portfolio-media"><i class="fa fa-caret-up"></i></span> <a href="#" class="remove-portfolio-media"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="eltdf-portfolio-toggle-content">
				<div class="eltdf-page-form-section">
					<div class="eltdf-section-content">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-2">
									<div class="eltdf-media-uploader">
										<em class="eltdf-field-description"><?php esc_html_e( 'Cover Video Image ', 'borderland' ); ?></em>
										<div style="display: none" class="eltdf-media-image-holder">
											<img src=""  class="eltdf-media-image img-thumbnail">
										</div>
										<div style="display: none" class="eltdf-media-meta-fields">
											<input type="hidden" class="eltdf-media-upload-url" name="portfoliovideoimage_x" id="portfoliovideoimage_x">
											<input type="hidden" class="eltdf-media-upload-height" name="eltd_options_theme[media-upload][height]" value="">
											<input type="hidden" class="eltdf-media-upload-width" name="eltd_options_theme[media-upload][width]" value="">
										</div>
										<a class="eltdf-media-upload-btn btn btn-sm btn-primary" href="javascript:void(0)" data-frame-title="<?php esc_attr_e( 'Select Image', 'borderland' ); ?>" data-frame-button-text="<?php esc_attr_e( 'Select Image', 'borderland' ); ?>"><?php esc_html_e( 'Upload', 'borderland' ); ?></a>
										<a style="display: none;" href="javascript: void(0)" class="eltdf-media-remove-btn btn btn-default btn-sm"><?php esc_html_e( 'Remove', 'borderland' ); ?></a>
									</div>
								</div>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-lg-2">
											<em class="eltdf-field-description"><?php esc_html_e( 'Order Number', 'borderland' ); ?></em>
											<input type="text" class="form-control eltdf-input eltdf-form-element" id="portfolioimgordernumber_x" name="portfolioimgordernumber_x" >
										</div>
										<div class="col-lg-10">
											<em class="eltdf-field-description"><?php esc_html_e( 'Video Title (works only for Gallery portfolio type selected)', 'borderland' ); ?></em>
											<input type="text" class="form-control eltdf-input eltdf-form-element" id="portfoliotitle_x" name="portfoliotitle_x" >
										</div>
									</div>
									<div class="row next-row">
										<div class="col-lg-2">
											<em class="eltdf-field-description"><?php esc_html_e( 'Video type', 'borderland' ); ?></em>
											<select class="form-control eltdf-form-element eltdf-portfoliovideotype" name="portfoliovideotype_x" id="portfoliovideotype_x">
												<option value=""></option>
												<option value="youtube"><?php esc_html_e( 'Youtube', 'borderland' ); ?></option>
												<option value="vimeo"><?php esc_html_e( 'Vimeo', 'borderland' ); ?></option>
												<option value="self"><?php esc_html_e( 'Self hosted', 'borderland' ); ?></option>
											</select>
										</div>
										<div class="col-lg-2 eltdf-video-id-holder">
											<em class="eltdf-field-description" id="videoId"><?php esc_html_e( 'Video ID', 'borderland' ); ?></em>
											<input type="text" class="form-control eltdf-input eltdf-form-element" id="portfoliovideoid_x" name="portfoliovideoid_x" >
										</div>
									</div>

									<div class="row next-row eltdf-video-self-hosted-path-holder">
										<div class="col-lg-4">
											<em class="eltdf-field-description"><?php esc_html_e( 'Video webm', 'borderland' ); ?></em>
											<input type="text" class="form-control eltdf-input eltdf-form-element" id="portfoliovideowebm_x" name="portfoliovideowebm_x" >
										</div>
										<div class="col-lg-4">
											<em class="eltdf-field-description"><?php esc_html_e( 'Video mp4', 'borderland' ); ?></em>
											<input type="text" class="form-control eltdf-input eltdf-form-element" id="portfoliovideomp4_x" name="portfoliovideomp4_x" >
										</div>
										<div class="col-lg-4">
											<em class="eltdf-field-description"><?php esc_html_e( 'Video ogv', 'borderland' ); ?></em>
											<input type="text" class="form-control eltdf-input eltdf-form-element" id="portfoliovideoogv_x" name="portfoliovideoogv_x" >
										</div>
									</div>
								</div>

							</div>
							<input type="hidden" name="portfolioimg_x" id="portfolioimg_x">
							<input type="hidden" name="portfolioimgtype_x" id="portfolioimgtype_x" value="video">
						</div><!-- close div.container-fluid -->
					</div><!-- close div.eltdf-section-content -->
				</div>
			</div>
		</div>
		<!--Video Hidden End-->


		<?php
		$no = 1;
		$portfolio_images = get_post_meta( $post->ID, 'eltd_portfolio_images', true );
		if (!empty($portfolio_images) && count($portfolio_images)>1) {
			usort($portfolio_images, "borderland_elated_compare_portfolio_images");
		}
		while (isset($portfolio_images[$no-1])) {
			$portfolio_image = $portfolio_images[$no-1];
			if (isset($portfolio_image['portfolioimgtype']))
				$portfolio_img_type = $portfolio_image['portfolioimgtype'];
			else {
				if (stripslashes($portfolio_image['portfolioimg']) == true)
					$portfolio_img_type = "image";
				else
					$portfolio_img_type = "video";
			}
			if ($portfolio_img_type == "image") {
				?>

				<div class="eltdf-portfolio-images eltdf-portfolio-media" rel="<?php echo esc_attr($no); ?>">
					<div class="eltdf-portfolio-toggle-holder">
						<div class="eltdf-portfolio-toggle eltdf-toggle-desc">
							<span class="number"><?php echo esc_html($no); ?></span><span class="eltdf-toggle-inner"><?php esc_html_e( 'Image - ', 'borderland' ); ?><em>(<?php echo stripslashes($portfolio_image['portfolioimgordernumber']); ?>, <?php echo stripslashes($portfolio_image['portfoliotitle']); ?>)</em></span>
						</div>
						<div class="eltdf-portfolio-toggle eltdf-portfolio-control">
							<a href="#" class="toggle-portfolio-media"><i class="fa fa-caret-down"></i></a>
							<a href="#" class="remove-portfolio-media"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="eltdf-portfolio-toggle-content" style="display: none">
						<div class="eltdf-page-form-section">
							<div class="eltdf-section-content">
								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-2">
											<div class="eltdf-media-uploader">
												<em class="eltdf-field-description"><?php esc_html_e( 'Image ', 'borderland' ); ?></em>
												<div<?php if (stripslashes($portfolio_image['portfolioimg']) == false) { ?> style="display: none"<?php } ?>
													class="eltdf-media-image-holder">
													<img src="<?php if (stripslashes($portfolio_image['portfolioimg']) == true) { echo esc_url(borderland_elated_get_attachment_thumb_url(stripslashes($portfolio_image['portfolioimg']))); } ?>"
														 class="eltdf-media-image img-thumbnail"/>
												</div>
												<div style="display: none"
													 class="eltdf-media-meta-fields">
													<input type="hidden" class="eltdf-media-upload-url"
														   name="portfolioimg[]"
														   id="portfolioimg_<?php echo esc_attr($no); ?>"
														   value="<?php echo stripslashes($portfolio_image['portfolioimg']); ?>"/>
													<input type="hidden"
														   class="eltdf-media-upload-height"
														   name="eltd_options_theme[media-upload][height]"
														   value=""/>
													<input type="hidden"
														   class="eltdf-media-upload-width"
														   name="eltd_options_theme[media-upload][width]"
														   value=""/>
												</div>
												<a class="eltdf-media-upload-btn btn btn-sm btn-primary"
												   href="javascript:void(0)"
												   data-frame-title="<?php esc_attr_e('Select Image', 'borderland'); ?>"
												   data-frame-button-text="<?php esc_attr_e('Select Image', 'borderland'); ?>"><?php esc_html_e('Upload', 'borderland'); ?></a>
												<a style="display: none;" href="javascript: void(0)"
												   class="eltdf-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'borderland'); ?></a>
											</div>
										</div>
										<div class="col-lg-2">
											<em class="eltdf-field-description"><?php esc_html_e( 'Order Number', 'borderland' ); ?></em>
											<input type="text" class="form-control eltdf-input eltdf-form-element" id="portfolioimgordernumber_<?php echo esc_attr($no); ?>" name="portfolioimgordernumber[]" value="<?php echo isset($portfolio_image['portfolioimgordernumber']) ? esc_attr(stripslashes($portfolio_image['portfolioimgordernumber'])) : ""; ?>" >
										</div>
										<div class="col-lg-8">
											<em class="eltdf-field-description"><?php esc_html_e( 'Image Title (works only for Gallery portfolio type selected) ', 'borderland' ); ?></em>
											<input type="text" class="form-control eltdf-input eltdf-form-element" id="portfoliotitle_<?php echo esc_attr($no); ?>" name="portfoliotitle[]" value="<?php echo isset($portfolio_image['portfoliotitle']) ? esc_attr(stripslashes($portfolio_image['portfoliotitle'])) : ""; ?>" >
										</div>
									</div>
									<input type="hidden" id="portfoliovideoimage_<?php echo esc_attr($no); ?>" name="portfoliovideoimage[]">
									<input type="hidden" id="portfoliovideotype_<?php echo esc_attr($no); ?>" name="portfoliovideotype[]">
									<input type="hidden" id="portfoliovideoid_<?php echo esc_attr($no); ?>" name="portfoliovideoid[]">
									<input type="hidden" id="portfoliovideowebm_<?php echo esc_attr($no); ?>" name="portfoliovideowebm[]">
									<input type="hidden" id="portfoliovideomp4_<?php echo esc_attr($no); ?>" name="portfoliovideomp4[]">
									<input type="hidden" id="portfoliovideoogv_<?php echo esc_attr($no); ?>" name="portfoliovideoogv[]">
									<input type="hidden" id="portfolioimgtype_<?php echo esc_attr($no); ?>" name="portfolioimgtype[]" value="image">
								</div><!-- close div.container-fluid -->
							</div><!-- close div.eltdf-section-content -->
						</div>
					</div>
				</div>

			<?php
			} else {
				?>
				<div class="eltdf-portfolio-videos eltdf-portfolio-media" rel="<?php echo esc_attr($no); ?>">
					<div class="eltdf-portfolio-toggle-holder">
						<div class="eltdf-portfolio-toggle eltdf-toggle-desc">
							<span class="number"><?php echo esc_html($no); ?></span><span class="eltdf-toggle-inner"><?php esc_html_e( 'Video - ', 'borderland' ); ?><em>(<?php echo stripslashes($portfolio_image['portfolioimgordernumber']); ?>, <?php echo stripslashes($portfolio_image['portfoliotitle']); ?></em>) </span>
						</div>
						<div class="eltdf-portfolio-toggle eltdf-portfolio-control">
							<a href="#" class="toggle-portfolio-media"><i class="fa fa-caret-down"></i></a> <a href="#" class="remove-portfolio-media"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="eltdf-portfolio-toggle-content" style="display: none">
						<div class="eltdf-page-form-section">
							<div class="eltdf-section-content">
								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-2">
											<div class="eltdf-media-uploader">
												<em class="eltdf-field-description"><?php esc_html_e( 'Cover Video Image ', 'borderland' ); ?></em>
												<div<?php if (stripslashes($portfolio_image['portfoliovideoimage']) == false) { ?> style="display: none"<?php } ?>
													class="eltdf-media-image-holder">
													<img src="<?php if (stripslashes($portfolio_image['portfoliovideoimage']) == true) { echo esc_url(borderland_elated_get_attachment_thumb_url(stripslashes($portfolio_image['portfoliovideoimage']))); } ?>"
														 class="eltdf-media-image img-thumbnail"/>
												</div>
												<div style="display: none"
													 class="eltdf-media-meta-fields">
													<input type="hidden" class="eltdf-media-upload-url"
														   name="portfoliovideoimage[]"
														   id="portfoliovideoimage_<?php echo esc_attr($no); ?>"
														   value="<?php echo stripslashes($portfolio_image['portfoliovideoimage']); ?>"/>
													<input type="hidden"
														   class="eltdf-media-upload-height"
														   name="eltd_options_theme[media-upload][height]"
														   value=""/>
													<input type="hidden"
														   class="eltdf-media-upload-width"
														   name="eltd_options_theme[media-upload][width]"
														   value=""/>
												</div>
												<a class="eltdf-media-upload-btn btn btn-sm btn-primary"
												   href="javascript:void(0)"
												   data-frame-title="<?php esc_attr_e('Select Image', 'borderland'); ?>"
												   data-frame-button-text="<?php esc_attr_e('Select Image', 'borderland'); ?>"><?php esc_html_e('Upload', 'borderland'); ?></a>
												<a style="display: none;" href="javascript: void(0)"
												   class="eltdf-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'borderland'); ?></a>
											</div>
										</div>
										<div class="col-lg-10">
											<div class="row">
												<div class="col-lg-2">
													<em class="eltdf-field-description"><?php esc_html_e( 'Order Number', 'borderland' ); ?></em>
													<input type="text" class="form-control eltdf-input eltdf-form-element" id="portfolioimgordernumber_<?php echo esc_attr($no); ?>" name="portfolioimgordernumber[]" value="<?php echo isset($portfolio_image['portfolioimgordernumber']) ? esc_attr(stripslashes($portfolio_image['portfolioimgordernumber'])) : ""; ?>" >
												</div>
												<div class="col-lg-10">
													<em class="eltdf-field-description"><?php esc_html_e( 'Video Title (works only for Gallery portfolio type selected) ', 'borderland' ); ?></em>
													<input type="text" class="form-control eltdf-input eltdf-form-element" id="portfoliotitle_<?php echo esc_attr($no); ?>" name="portfoliotitle[]" value="<?php echo isset($portfolio_image['portfoliotitle']) ? esc_attr(stripslashes($portfolio_image['portfoliotitle'])) : ""; ?>" >
												</div>
											</div>
											<div class="row next-row">
												<div class="col-lg-2">
													<em class="eltdf-field-description"><?php esc_html_e( 'Video Type', 'borderland' ); ?></em>
													<select class="form-control eltdf-form-element eltdf-portfoliovideotype"
															name="portfoliovideotype[]" id="portfoliovideotype_<?php echo esc_attr($no); ?>">
														<option value=""></option>
														<option <?php if ($portfolio_image['portfoliovideotype'] == "youtube") { echo "selected='selected'"; } ?>  value="youtube"><?php esc_html_e( 'Youtube', 'borderland' ); ?></option>
														<option <?php if ($portfolio_image['portfoliovideotype'] == "vimeo") { echo "selected='selected'"; } ?>  value="vimeo"><?php esc_html_e( 'Vimeo', 'borderland' ); ?></option>
														<option <?php if ($portfolio_image['portfoliovideotype'] == "self") { echo "selected='selected'"; } ?>  value="self"><?php esc_html_e( 'Self hosted', 'borderland' ); ?></option>
													</select>
												</div>
												<div class="col-lg-2 eltdf-video-id-holder">
													<em class="eltdf-field-description"><?php esc_html_e( 'Video ID', 'borderland' ); ?></em>
													<input type="text"
														   class="form-control eltdf-input eltdf-form-element"
														   id="portfoliovideoid_<?php echo esc_attr($no); ?>"
														   name="portfoliovideoid[]" value="<?php echo isset($portfolio_image['portfoliovideoid']) ? esc_attr(stripslashes($portfolio_image['portfoliovideoid'])) : ""; ?>"
														   />
												</div>
											</div>

											<div class="row next-row eltdf-video-self-hosted-path-holder">
												<div class="col-lg-4">
													<em class="eltdf-field-description"><?php esc_html_e( 'Video webm', 'borderland' ); ?></em>
													<input type="text"
														   class="form-control eltdf-input eltdf-form-element"
														   id="portfoliovideowebm_<?php echo esc_attr($no); ?>"
														   name="portfoliovideowebm[]" value="<?php echo isset($portfolio_image['portfoliovideowebm'])? esc_attr(stripslashes($portfolio_image['portfoliovideowebm'])) : ""; ?>"
														   /></div>
												<div class="col-lg-4">
													<em class="eltdf-field-description"><?php esc_html_e( 'Video mp4', 'borderland' ); ?></em>
													<input type="text"
														   class="form-control eltdf-input eltdf-form-element"
														   id="portfoliovideomp4_<?php echo esc_attr($no); ?>"
														   name="portfoliovideomp4[]" value="<?php echo isset($portfolio_image['portfoliovideomp4']) ? esc_attr(stripslashes($portfolio_image['portfoliovideomp4'])) : ""; ?>"
														   /></div>
												<div class="col-lg-4">
													<em class="eltdf-field-description"><?php esc_html_e( 'Video ogv', 'borderland' ); ?></em>
													<input type="text"
														   class="form-control eltdf-input eltdf-form-element"
														   id="portfoliovideoogv_<?php echo esc_attr($no); ?>"
														   name="portfoliovideoogv[]" value="<?php echo isset($portfolio_image['portfoliovideoogv']) ? esc_attr(stripslashes($portfolio_image['portfoliovideoogv'])) : ""; ?>"
														   /></div>
											</div>
										</div>

									</div>
									<input type="hidden" id="portfolioimg_<?php echo esc_attr($no); ?>" name="portfolioimg[]">
									<input type="hidden" id="portfolioimgtype_<?php echo esc_attr($no); ?>" name="portfolioimgtype[]" value="video">
								</div><!-- close div.container-fluid -->
							</div><!-- close div.eltdf-section-content -->
						</div>
					</div>
				</div>
			<?php
			}
			$no++;
		}
		?>

		<div class="eltdf-portfolio-add">
			<a class="eltdf-add-image btn btn-sm btn-primary" href="#"><i class="fa fa-camera"></i><?php esc_html_e( ' Add Image', 'borderland' ); ?></a>
			<a class="eltdf-add-video btn btn-sm btn-primary" href="#"><i class="fa fa-video-camera"></i><?php esc_html_e( ' Add Video', 'borderland' ); ?></a>

			<a class="eltdf-toggle-all-media btn btn-sm btn-default pull-right" href="#"><?php esc_html_e( ' Expand All', 'borderland' ); ?></a>
		</div>


	<?php

	}
}

/*
   Class: BorderlandElatedImagesVideos
   A class that initializes Elated Images Videos
*/
class BorderlandElatedOptionsFramework implements iRender {
	private $label;
	private $description;


	function __construct($label="",$description="") {
		$this->label = $label;
		$this->description = $description;
	}

	public function render($factory) {
		global $post;
		?>

		<div class="eltdf-portfolio-additional-item-holder" style="display: none">
			<div class="eltdf-portfolio-toggle-holder">
				<div class="eltdf-portfolio-toggle eltdf-toggle-desc">
					<span class="number">1</span><span class="eltdf-toggle-inner"><?php esc_html_e( 'Additional Sidebar Item ', 'borderland' ); ?><em><?php esc_html_e( '(Order Number, Item Title)', 'borderland' ); ?></em></span>
				</div>
				<div class="eltdf-portfolio-toggle eltdf-portfolio-control">
					<span class="toggle-portfolio-item"><i class="fa fa-caret-up"></i></span>
					<a href="#" class="remove-portfolio-item"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="eltdf-portfolio-toggle-content">
				<div class="eltdf-page-form-section">
					<div class="eltdf-section-content">
						<div class="container-fluid">
							<div class="row">

								<div class="col-lg-2">
									<em class="eltdf-field-description"><?php esc_html_e( 'Order Number', 'borderland' ); ?></em>
									<input type="text" class="form-control eltdf-input eltdf-form-element" id="optionlabelordernumber_x" name="optionlabelordernumber_x" >
								</div>
								<div class="col-lg-10">
									<em class="eltdf-field-description"><?php esc_html_e( 'Item Title ', 'borderland' ); ?></em>
									<input type="text" class="form-control eltdf-input eltdf-form-element" id="optionLabel_x" name="optionLabel_x" >
								</div>
							</div>
							<div class="row next-row">
								<div class="col-lg-12">
									<em class="eltdf-field-description"><?php esc_html_e( 'Item Text', 'borderland' ); ?></em>
									<textarea class="form-control eltdf-input eltdf-form-element" id="optionValue_x" name="optionValue_x" ></textarea>
								</div>
							</div>
							<div class="row next-row">
								<div class="col-lg-12">
									<em class="eltdf-field-description"><?php esc_html_e( 'Enter Full URL for Item Text Link', 'borderland' ); ?></em>
									<input type="text" class="form-control eltdf-input eltdf-form-element" id="optionUrl_x" name="optionUrl_x" >
								</div>
							</div>
						</div><!-- close div.eltdf-section-content -->
					</div><!-- close div.container-fluid -->
				</div>
			</div>
		</div>
		<?php
		$no = 1;
		$portfolios = get_post_meta( $post->ID, 'eltd_portfolios', true );
		if (!empty($portfolio_images) && count($portfolios)>1) {
			usort($portfolios, "borderland_elated_compare_portfolio_options");
		}
		while (isset($portfolios[$no-1])) {
			$portfolio = $portfolios[$no-1];
			?>
			<div class="eltdf-portfolio-additional-item" rel="<?php echo esc_attr($no); ?>">
				<div class="eltdf-portfolio-toggle-holder">
					<div class="eltdf-portfolio-toggle eltdf-toggle-desc">
						<span class="number"><?php echo esc_html($no); ?></span><span class="eltdf-toggle-inner"><?php esc_html_e( 'Additional Sidebar Item - ', 'borderland' ); ?><em>(<?php echo stripslashes($portfolio['optionlabelordernumber']); ?>, <?php echo stripslashes($portfolio['optionLabel']); ?>)</em></span>
					</div>
					<div class="eltdf-portfolio-toggle eltdf-portfolio-control">
						<span class="toggle-portfolio-item"><i class="fa fa-caret-down"></i></span>
						<a href="#" class="remove-portfolio-item"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="eltdf-portfolio-toggle-content" style="display: none">
					<div class="eltdf-page-form-section">
						<div class="eltdf-section-content">
							<div class="container-fluid">
								<div class="row">

									<div class="col-lg-2">
										<em class="eltdf-field-description"><?php esc_html_e( 'Order Number', 'borderland' ); ?></em>
										<input type="text" class="form-control eltdf-input eltdf-form-element" id="optionlabelordernumber_<?php echo esc_attr($no); ?>" name="optionlabelordernumber[]" value="<?php echo isset($portfolio['optionlabelordernumber']) ? esc_attr(stripslashes($portfolio['optionlabelordernumber'])) : ""; ?>" >
									</div>
									<div class="col-lg-10">
										<em class="eltdf-field-description"><?php esc_html_e( 'Item Title ', 'borderland' ); ?></em>
										<input type="text" class="form-control eltdf-input eltdf-form-element" id="optionLabel_<?php echo esc_attr($no); ?>" name="optionLabel[]" value="<?php echo esc_attr(stripslashes($portfolio['optionLabel'])); ?>" >
									</div>
								</div>
								<div class="row next-row">
									<div class="col-lg-12">
										<em class="eltdf-field-description"><?php esc_html_e( 'Item Text', 'borderland' ); ?></em>
										<textarea class="form-control eltdf-input eltdf-form-element" id="optionValue_<?php echo esc_attr($no); ?>" name="optionValue[]" ><?php echo esc_attr(stripslashes($portfolio['optionValue'])); ?></textarea>
									</div>
								</div>
								<div class="row next-row">
									<div class="col-lg-12">
										<em class="eltdf-field-description"><?php esc_html_e( 'Enter Full URL for Item Text Link', 'borderland' ); ?></em>
										<input type="text" class="form-control eltdf-input eltdf-form-element" id="optionUrl_<?php echo esc_attr($no); ?>" name="optionUrl[]" value="<?php echo stripslashes($portfolio['optionUrl']); ?>" >
									</div>
								</div>
							</div><!-- close div.eltdf-section-content -->
						</div><!-- close div.container-fluid -->
					</div>
				</div>
			</div>
			<?php
			$no++;
		}
		?>

		<div class="eltdf-portfolio-add">
			<a class="eltdf-add-item btn btn-sm btn-primary" href="#"><?php esc_html_e( ' Add New Item', 'borderland' ); ?></a>


			<a class="eltdf-toggle-all-item btn btn-sm btn-default pull-right" href="#"><?php esc_html_e( ' Expand All', 'borderland' ); ?></a>
		</div>




	<?php

	}
}?>