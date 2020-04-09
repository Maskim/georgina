<?php
/*
   Class: BorderlandElatedFramework
   A class that initializes Elated Framework
*/
class BorderlandElatedFramework {

    private static $instance;
    public $eltdOptions;
    public $eltdMetaBoxes;
    private $skin;

    private function __construct() {
        $this->eltdOptions = BorderlandElatedOptions::get_instance();
        $this->eltdMetaBoxes = BorderlandElatedMetaBoxes::get_instance();
    }
    
    public static function get_instance() {

        if ( null == self::$instance ) {
            self::$instance = new self;
        }

        return self::$instance;

    }

    public function getSkin() {
        return $this->skin;
    }

	public function setSkin(BorderlandElatedSkinAbstract $skinObject) {
		$this->skin = $skinObject;
	}
}

class BorderlandElatedSkinManager {
    private $skin;

    public function __construct() {
        $this->setSkin();
    }

    private function setSkin($skinName = 'elated') {
        if($skinName !== '') {
            if(file_exists(get_template_directory().'/framework/admin/skins/'.$skinName.'/skin.php')) {
                require_once get_template_directory().'/framework/admin/skins/'.$skinName.'/skin.php';
                
                $this->skin = new BorderlandElatedSkin();
            }
        } else {
            $this->skin = false;
        }
    }

    public function getSkin() {
        if(empty($this->skin)) {
            $this->setSkin();
        }

        return $this->skin;
    }
}

abstract class BorderlandElatedSkinAbstract {
	protected $skinName;
    protected $styles;
    protected $scripts;
	protected $icons;
	protected $itemPosition;

	public function __toString() {
		return $this->skinName;
	}

	public function getSkinName() {
		return $this->skinName;
	}

    public function loadTemplatePart($template, $params = array()) {
        if(is_array($params) && count($params)) {
            extract($params);
        }

        if($template !== '') {
            include(locate_template('framework/admin/skins/'.$this->skinName.'/templates/'.$template.'.php'));
        }
    }

    public function enqueueScripts() {
        if(is_array($this->scripts) && count($this->scripts)) {
            foreach ($this->scripts as $scriptHandle => $scriptPath) {
                wp_enqueue_script($scriptHandle);
            }
        }
    }

    public function enqueueStyles() {
        if(is_array($this->styles) && count($this->styles)) {
            foreach ($this->styles as $styleHandle => $stylePath) {
                wp_enqueue_style($styleHandle);
            }
        }
    }

	public function getMenuIcon($icon) {
		if($icon !== '' && array_key_exists($icon, $this->icons)) {
			return $this->icons[$icon];
		}

		return BORDERLAND_ROOT.'/img/favicon.ico';
	}

	public function getMenuItemPosition($itemPosition) {
		if($itemPosition !== '' && array_key_exists($itemPosition, $this->itemPosition)) {
			return $this->itemPosition[$itemPosition];
		}

		return 4;
	}

	public function setShortcodeJSParams() { ?>
		<script>
			window.eltdSCIcon = '<?php echo borderland_elated_get_skin_uri().'/assets/img/admin-logo-icon.png'; ?>';
			window.eltdSCLabel = '<?php echo esc_html( ucfirst( $this->skinName ) ); ?> <?php esc_html_e( 'Shortcodes', 'borderland' ) ?>';
		</script>
	<?php }

	public function getSkinLabel() {
		return ucfirst($this->skinName);
	}

    public function getSkinURI() {
        return get_template_directory_uri().'/framework/admin/skins/'.$this->skinName;
    }

    public abstract function renderOptions();
	public abstract function renderImport();
    public abstract function registerScripts();
    public abstract function registerStyles();
	public abstract function setIcons();
}



/*
   Class: BorderlandElatedOptions
   A class that initializes Elated Options
*/
class BorderlandElatedOptions {
	
	private static $instance;
	public $adminPages;
	public $options;
	
	private function __construct() {
		$this->adminPages = array();
		$this->options    = array();
	}
	
	public static function get_instance() {
		
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		
		return self::$instance;
		
	}
	
	public function addAdminPage( $key, $page ) {
		$this->adminPages[ $key ] = $page;
	}
	
	public function getAdminPage( $key ) {
		return $this->adminPages[ $key ];
	}
	
	public function getAdminPageFromSlug( $slug ) {
		foreach ( $this->adminPages as $key => $page ) {
			if ( $page->slug == $slug ) {
				return $page;
			}
		}
		
		return;
	}
	
	public function addOption( $key, $value ) {
		$this->options[ $key ] = $value;
	}
	
	public function getOption( $key ) {
		if ( isset( $this->options[ $key ] ) ) {
			return $this->options[ $key ];
		}
		
		return;
	}
	
	public function getOptionValue( $key ) {
		global $borderland_elated_options;
		
		if ( is_array( $borderland_elated_options ) && array_key_exists( $key, $borderland_elated_options ) ) {
			return $borderland_elated_options[ $key ];
		} elseif ( array_key_exists( $key, $this->options ) ) {
			return $this->getOption( $key );
		}
		
		return false;
	}
}

/*
   Class: BorderlandElatedAdminPage
   A class that initializes Elated Admin Page
*/
class BorderlandElatedAdminPage implements iLayoutNode {

    public $layout;
    private $factory;
    public $slug;
    public $title;
    public $icon;

    function __construct($slug="", $title_name="", $icon = "") {
        $this->layout = array();
        $this->factory = new BorderlandElatedFieldFactory();
        $this->slug = $slug;
        $this->title = $title_name;
        $this->icon = $icon;
    }

    public function hasChidren() {
        return (count($this->layout) > 0)?true:false;
    }

    public function getChild($key) {
        return $this->layout[$key];
    }

    public function addChild($key, $value) {
        $this->layout[$key] = $value;
    }

    function render() {
        foreach ($this->layout as $child) {
            $this->renderChild($child);
        }
    }

    public function renderChild(iRender $child) {
        $child->render($this->factory);
    }
}

/*
   Class: BorderlandElatedMetaBoxes
   A class that initializes Elated Meta Boxes
*/
class BorderlandElatedMetaBoxes {

    private static $instance;
    public $metaBoxes;
    public $options;

    private function __construct() {
        $this->metaBoxes = array();
        $this->options = array();
    }
    
		public static function get_instance() {
		
			if ( null == self::$instance ) {
				self::$instance = new self;
			}
		
			return self::$instance;
		
		}

    public function addMetaBox($key, $box) {
        $this->metaBoxes[$key] = $box;
    }

    public function getMetaBox($key) {
        return $this->metaBoxes[$key];
    }

    public function addOption($key, $value) {
        $this->options[$key] = $value;
    }

    public function getOption($key) {
			if(isset($this->options[$key]))
        return $this->options[$key];
      return;
    }
}

/*
   Class: BorderlandElatedMetaBox
   A class that initializes Elated Meta Box
*/
class BorderlandElatedMetaBox implements iLayoutNode {

    public $layout;
	private $factory;
	public $scope;
	public $title;
	public $hidden_property;
	public $hidden_values = array();

    function __construct($scope="", $title_name="",$hidden_property="", $hidden_values = array()) {
        $this->layout = array();
		$this->factory = new BorderlandElatedFieldFactory();
		$this->scope = $scope;
		$this->title = $this->setTitle($title_name);
		$this->hidden_property = $hidden_property;
		$this->hidden_values = $hidden_values;
    }

    public function hasChidren() {
        return (count($this->layout) > 0)?true:false;
    }

    public function getChild($key) {
        return $this->layout[$key];
    }

    public function addChild($key, $value) {
        $this->layout[$key] = $value;
    }

    function render() {
        foreach ($this->layout as $child) {
            $this->renderChild($child);
        }
    }

    public function renderChild(iRender $child) {
        $child->render($this->factory);
    }

	public function setTitle($label) {
		global $borderland_elated_framework;

		return $borderland_elated_framework->getSkin()->getSkinLabel().' '.$label;
 	}
}

if ( ! function_exists( 'borderland_elated_init_framework_variable' ) ) {
	function borderland_elated_init_framework_variable() {
		global $borderland_elated_framework;
		
		$borderland_elated_framework = BorderlandElatedFramework::get_instance();
		
		$eltdSkinManager = new BorderlandElatedSkinManager();
		$borderland_elated_framework->setSkin( $eltdSkinManager->getSkin() );
	}
	
	add_action( 'borderland_elated_action_before_options_map', 'borderland_elated_init_framework_variable' );
}