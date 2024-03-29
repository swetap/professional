<?php
class GeneralComponent extends Object{
	
	//called before Controller::beforeFilter()
	function datalist($params){
		print_r('<pre>');
		print_r($params);
		print_r('</pre>');
		exit;
	}
	
	function initialize(&$controller, $settings = array())
		{
			// saving the controller reference for later use
			$this->controller =& $controller;
		}

	//called after Controller::beforeFilter()
	function startup(&$controller)
		{
	
		}

	//called after Controller::beforeRender()
	function beforeRender(&$controller)
		{
			
		}

	//called after Controller::render()
	function shutdown(&$controller)
		{
		
		}

	//called before Controller::redirect()
	function beforeRedirect(&$controller, $url, $status=null, $exit=true)
		{
		
		}

	function redirectSomewhere($value)
		{
			// utilizing a controller method
			$this->controller->redirect($value);
		}

}
?>