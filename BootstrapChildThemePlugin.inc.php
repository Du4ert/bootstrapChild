<?php
import('lib.pkp.classes.plugins.ThemePlugin');
class BootstrapChildThemePlugin extends ThemePlugin {

	/**
	 * Load the custom styles for our theme
	 * @return null
	 */
	public function init() {
        $this->setParent('bootstrapthreethemeplugin');
        $bootstrapTheme = $this->getOption('bootstrapTheme');
        if (empty($bootstrapTheme) || $bootstrapTheme === 'bootstrap3') {
        	$this->modifyStyle('bootstrap', 'styles/', array('addLess' => array('styles/main.less')));
        } else {
        	$this->modifyStyle('bootstrapTheme-' . $bootstrapTheme, array('addLess' => array('styles/main.less')));
        }
        //$this->modifyStyle('bootstrapTheme-yeti', array('addLess' => array('styles/variables.less')));
        $this->removeOption('bootstrapTheme');
        $this->addScript('main', 'js/main.js');
        //$this->addStyle('childStyle', 'styles/' . 'variables.less');
	}

	/**
	 * Get the display name of this theme
	 * @return string
	 */
	function getDisplayName() {
		return 'Bootstrap child Theme';
	}

	/**
	 * Get the description of this plugin
	 * @return string
	 */
	function getDescription() {
		return 'An example theme for OJS or OMP built with our amazing documentation.';
	}
}