<?php
	// require('db.php');
	require_once('smarty/Smarty.class.php');
	require_once('smtemplate_config.php');

	class SMTemplate
	{

	    private $_smarty;

	    function __construct()
	    {
	        $this->_smarty = new Smarty();

	        global $smtemplate_config;
	        $this->_smarty->template_dir = $smtemplate_config['template_dir'];
	        $this->_smarty->compile_dir = $smtemplate_config['compile_dir'];
	        $this->_smarty->cache_dir = $smtemplate_config['cache_dir'];
	        $this->_smarty->config_dir = $smtemplate_config['config_dir'];
	    }

	    function render($template)
	    {
	        $this->_smarty->display($template . '.tpl');
	    }

	    function get_smarty()
	    {
	        return $this->_smarty;
	    }
	}
?>