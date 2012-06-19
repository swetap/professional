<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController {

	public $name       = 'Users';
	public $components =  array('Auth','Session');
	public $helpers    =  array('Html', 'Session');
	public $uses       =  array('User');

	function beforeFilter()
		{
			parent::beforeFilter();
			$this->Auth->allow('admin_login','index','admin_forgetpassword');	
		}
	
	public function admin_login(){

		    $this->layout = "admin_login_layout"; 
			 if(!empty($this->data))
			  { 
				   if($this->data['User']['password'] !='')
					   {
							$this->request->data['User']['password'] = $this->Auth->password($this->data['User']['password']);
					   }
				   $this->User->set($this->data);
				   if($this->User->validates($this->data))
					   {
							$username = $this->data['User']['email'];
							$password = $this->data['User']['password'];
							$users    = $this->User->find('first', 
										array('conditions' => 
													   array('User.group' => '3', 
															  'User.email' =>trim($username), 'User.password' => $password)));
							$this->Auth->login($users);
							$this->redirect($this->Auth->loginRedirect);  
					  } 
	     }
	}
		
	public function	admin_userlist()
		{
			$this->layout = "admin_index_layout"; 
			$users        =  $this->User->find('all');
			$this->set('title','Manage User');
			$this->set('users', $users);
			$this->set('mainheding','Users');
		}
	
	public function admin_logout()
		{
			$this->Auth->logout();
			$this->Session->delete('user');
			$this->redirect($this->Auth->redirect());
		}
		
	public function index()
		{
			echo "Front End";
			exit;
		}
	
	public function admin_forgetpassword()
		{
		   $this->layout = "admin_login_layout";
		   if(!empty($this->data))
			 	{
				  $this->User->set($this->data);
				  if($this->User->validates($this->data)){
					 	$password   =  strtotime(date('Y-m-d h:m:s'));
						$message    =  "Hello,<br><br>";
						$message    .=  "Your password is $password";
						$subject    =  "Password Recovery";
						$fromemail  =   ADMIN_EMILID;
						$to         =   $this->data['User']['email'];
						$FromName   =  "Administrator";
						$mail       =   new PHPMailer();
					 	$mail->connection();
			    	  	$test = $mail->SendMail_smtp($to,$subject,$message,$fromemail,$FromName);
			 			if($test){
							$checkemail1 = $this->User->find('count',array('conditions'=>array('User.email'=> $this->data['User']['email'])));
							 if($checkemail1 > 0)
								 {
									$checkemail     =  $this->User->find('first',array('conditions'=>array('User.email'=> $this->data['User']['email'])));
									$password       =  $this->Auth->password($password);
									$this->User->id =  $checkemail['User']['id'];
									$this->User->saveField('password', $password);
									$this->redirect("login");
								 }
							}
							else
							{
								$this->set('emailstatus', '0');
							}
			 		} 
			 }
		}
}
