<?php

App::uses('AppController', 'Controller');

// Authorised User controller
class AuthorisedUsersController extends AppController {

	public $name       = 'AuthorisedUsers';
	public $components =  array('Auth','Session','General');
	public $helpers    =  array('Html', 'Session');
	public $uses       =  array('AuthorisedUser');

	function beforeFilter()
		{
				parent::beforeFilter();
				$this->set('mainheding','Authorised Users');
		}
	
	// This Action is used for Listing the Authorised Users
	public function	admin_userlist()
		{
			$this->layout = "admin_index_layout"; 
			$users        =  $this->AuthorisedUser->find('all');
			$this->set('title','Manage Authorised User');
			$this->set('users', $users);
		}
	
	// This Action is used for Add the Authorised Users
	public function admin_useradd()
		{
			$this->layout = "admin_index_layout"; 
			if(!empty($this->data))
				{
					   $this->AuthorisedUser->set($this->data);
					if($this->AuthorisedUser->validates($this->data))
						{
							$this->AuthorisedUser->save($this->data);
							$this->redirect('userlist');
						}
			   }
			$this->set('title','Add Authorised User');
		}
	
	// This Action is used to Delete the Authorised Users.
	public function admin_userdelete($id = NULL)
		{
			$this->AuthorisedUser->delete($id);
			$this->redirect('userlist');
		}	
	
	// This Action is used to Edit the Authorised Users Record.
	public function admin_useredit($id = NULL)
		{
			$this->layout = "admin_index_layout";
			$users        =  $this->AuthorisedUser->find('all',array('conditions'=>array('AuthorisedUser.id'=>$id)));
			if(!empty($this->data))
				 {
						 $this->AuthorisedUser->set($this->data);
					 if(($this->AuthorisedUser->validates($this->data)))
						 {
							 $this->AuthorisedUser->id = $id;
							 $this->AuthorisedUser->save($this->data);	 
							 $this->redirect('userlist');
						 }
			 }
			$this->set('title','Edit User');
			$this->set('authoriseduser',$users);
				
		}	
}
