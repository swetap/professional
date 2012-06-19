<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');
App::import('Vendor','sendmail');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $helpers     = array('Html','Session',"Js",'Form' );
	public $components  = array('Auth','Session','General');	
	public $uses        = array('AuthorisedUser');

	function beforeFilter(){
		if(isset($this->params['admin']) && $this->params['admin'] == 1)
		{
			 $this->Auth->object         = 'Admin';
			 $this->Auth->sessionKey     = 'admin';
			 $this->Auth->fields         = array('username' => 'email',   'password' => 'password');
			 $this->Auth->loginAction    = array('controller' => 'users', 'action' => 'admin_login');	
			 $this->Auth->loginRedirect  = array('controller' => 'users', 'action' => 'admin_userlist');
			 $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'admin_login');
		}else{
			 $this->Auth->sessionKey     = 'user';
			 $this->Auth->loginAction    = array('controller' => 'users', 'action' => 'index');
			 $this->Auth->loginRedirect  = array('controller' => 'users', 'action' => 'home');
			 $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
		}
		
		if($this->Auth->user('id')!= NULL and ($this->params['action']=="login" or $this->params['action']=="admin_login"))
			{
				$this->redirect($this->Auth->loginRedirect);
			}
	}
}
