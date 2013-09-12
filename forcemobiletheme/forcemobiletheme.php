<?php 

if (!defined('_PS_VERSION_'))
  exit;
 
class ForceMobileTheme extends Module
{
	public function __construct()
	{
		$this->name = 'forcemobiletheme';
		$this->tab = 'mobile';
		$this->version = '1.0';
		$this->author = 'lefakir';
		$this->need_instance = 0;
		$this->ps_versions_compliancy = array('min' => '1.5', 'max' => '1.6'); 

		parent::__construct();

		$this->displayName = $this->l('Force mobile theme display');
		$this->description = $this->l('Force mobile theme display whenever it is visited by desktop browser');

		$this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
	}

	/**
 	 * install
	 */
	public function install()
	{
		if (!parent::install())
			return false;
		return true;
	}

	/**
 	 * uninstall
	 */
	public function uninstall()
	{
		if (!parent::uninstall())
			return false;
		return true;
	}
}

?>