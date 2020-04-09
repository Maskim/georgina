<?php

//if accessed directly exit
if(!defined('ABSPATH')) exit;

class BorderlandElatedSkin extends BorderlandElatedSkinAbstract {
    /**
     * Skin constructor.
     */
    public function __construct() {
        $this->skinName = 'elated';

        //hook to
        add_action('borderland_elated_action_admin_scripts', array($this, 'registerStyles'));
        add_action('borderland_elated_action_admin_scripts', array($this, 'registerScripts'));

        add_action('borderland_elated_action_enqueue_admin_styles', array($this, 'enqueueStyles'));
        add_action('borderland_elated_action_enqueue_admin_scripts', array($this, 'enqueueScripts'));

        add_action('borderland_elated_action_meta_box_styles', array($this, 'enqueueStyles'));
        add_action('borderland_elated_action_meta_box_scripts', array($this, 'enqueueScripts'));

		add_action( 'admin_enqueue_scripts', array( $this, 'setShortcodeJSParams' ), 5 ); // 5 is set to be same permission as Gutenberg plugin have
		
		$this->setIcons();
		$this->setMenuItemPosition();
    }

    /**
     * Method that registers skin scripts
     */
    public function registerScripts() {
        $this->scripts['bootstrap'] = 'assets/js/bootstrap.min.js';
        $this->scripts['borderland-ui-admin'] = 'assets/js/eltdf-ui/eltdf-ui.js';
        $this->scripts['borderland-bootstrap-select'] = 'assets/js/eltdf-ui/eltdf-bootstrap-select.min.js';

        foreach ($this->scripts as $scriptHandle => $scriptPath) {
	        borderland_elated_register_skin_script($scriptHandle, $scriptPath);
        }
    }

    /**
     * Method that registers skin styles
     */
    public function registerStyles() {
        $this->styles['borderland-bootstrap'] = 'assets/css/eltdf-bootstrap.css';
        $this->styles['borderland-page-admin'] = 'assets/css/eltdf-page.css';
        $this->styles['borderland-options-admin'] = 'assets/css/eltdf-options.css';
        $this->styles['borderland-meta-boxes-admin'] = 'assets/css/eltdf-meta-boxes.css';
        $this->styles['borderland-ui-admin'] = 'assets/css/eltdf-ui/eltdf-ui.css';
        $this->styles['borderland-forms-admin'] = 'assets/css/eltdf-forms.css';
        $this->styles['borderland-import'] = 'assets/css/eltdf-import.css';
        $this->styles['font-awesome-admin'] = 'assets/css/font-awesome/css/font-awesome.min.css';

        foreach ($this->styles as $styleHandle => $stylePath) {
            borderland_elated_register_skin_style($styleHandle, $stylePath);
        }
    }

	/**
	 * Method that set menu icons
	 */
	
	public function setIcons() {
		$this->icons = array(
			'slider'      => 'dashicons-leftright',
			'carousel'    => 'dashicons-slides',
			'testimonial' => 'dashicons-format-quote',
			'portfolio'   => 'dashicons-schedule',
			'options'     => $this->getSkinURI() . '/assets/img/admin-logo-icon.png'
		);
	}
	
	/**
	 * Method that set menu item position
	 */
	
	public function setMenuItemPosition() {
		$this->itemPosition = array(
			'slider'      => 20,
			'carousel'    => 20,
			'testimonial' => 20,
			'portfolio'   => 5,
			'options'     => 99
		);
	}

    /**
     * Method that renders options page
     *
     * @see SelectSkin::getHeader()
     * @see SelectSkin::getPageNav()
     * @see SelectSkin::getPageContent()
     */
    public function renderOptions() {
        global $borderland_elated_framework;
        $tab    = borderland_elated_get_admin_tab();
        $active_page = $borderland_elated_framework->eltdOptions->getAdminPageFromSlug($tab);
        if ($active_page == null) return;
        ?>
        <div class="eltdf-options-page eltdf-page">
            <?php $this->getHeader($active_page); ?>
            <div class="eltdf-page-content-wrapper">
                <div class="eltdf-page-content">
                    <div class="eltdf-page-navigation eltdf-tabs-wrapper vertical left clearfix">
                        <?php $this->getPageNav($tab); ?>
                        <?php $this->getPageContent($active_page); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php }

    /**
     * Method that renders header of options page.
     * @param bool $show_save_btn whether to show save button. Should be hidden on import page
     *
     * @see BorderlandElatedSkinAbstract::loadTemplatePart()
     */
    public function getHeader($activePage = '', $show_save_btn = true) {
        $this->loadTemplatePart('header', array('active_page' => $activePage, 'show_save_btn' => $show_save_btn));
    }

    /**
     * Method that loads page navigation
     * @param string $tab current tab
     * @param bool $is_import_page if is import page highlighted that tab
     *
     * @see BorderlandElatedSkinAbstract::loadTemplatePart()
     */
    public function getPageNav($tab, $is_import_page = false) {
        $this->loadTemplatePart('navigation', array(
            'tab' => $tab,
            'is_import_page' => $is_import_page
        ));
    }

    /**
     * Method that loads current page content
     * @param BorderlandElatedAdminPage $page current page to load
     *
     * @see BorderlandElatedSkinAbstract::loadTemplatePart()
     */
    public function getPageContent($page) {
        $this->loadTemplatePart('content', array('page' => $page));
    }

    /**
     * Method that loads content for import page
     */
    public function getImportContent() {
        $this->loadTemplatePart('content-import');
    }

    /**
     * Method that loads anchors and save button template part
     * @param BorderlandElatedAdminPage $page current page to load
     *
     * @see BorderlandElatedSkinAbstract::loadTemplatePart()
     */
    public function getAnchors($page) {
        $this->loadTemplatePart('anchors', array('page' => $page));

    }

    /**
     * Method that renders import page
     *
     * @see SelectSkin::getHeader()
     * * @see SelectSkin::getPageNav()
     * * @see SelectSkin::getImportContent()
     */
    public function renderImport() { ?>
        <div class="eltdf-options-page eltdf-page">
            <?php $this->getHeader('', false); ?>
            <div class="eltdf-page-content-wrapper">
                <div class="eltdf-page-content">
                    <div class="eltdf-page-navigation eltdf-tabs-wrapper vertical left clearfix">
                        <?php $this->getPageNav('tabimport', true); ?>
                        <?php $this->getImportContent(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}
?>