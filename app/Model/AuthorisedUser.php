<?php

App::uses('AppModel','Model');

class AuthorisedUser extends AppModel {
	public $name                 = 'AuthorisedUser';
	public $primaryKey           = 'id';
	public $validateAdminUseradd =  array(
		   'email' => array(
					 'notblank'    => array(
										  'rule'    =>   "notEmpty",
										   "message" =>  "Please Enter Email ID"
										),
					 'email'       => array(
											'rule'    =>  array('email',true),
											'message' => 'Please Enter Valid Email ID'
										),
					 'isduplicate' => array(
										'rule'    =>  array('checkemailid'),
										'message' =>  'Email ID allready Exist'
									)
				  ),
			 	 'member_num'=>array(  
							'notblank' => array(
										  "rule"    => "notEmpty",
										  "message" => "Please Enter Member Number."
									),
				 'minlength' => array(
										  'rule'    => array('minLength', '6'),
							 			  'message' => 'Mimimum 6 characters long.'
									),		
				 'member_num' => array(
										'rule'    => array('checkmembernumber'),
										'message' => 'Member Number allready Exist.'
									)		 
	 				     )
		);
	
	public $validateAdminUseredit =  array(
		   'email' => array(
				 'notblank' => array(
									  'rule'    =>   "notEmpty",
									   "message" =>  "Please Enter Email ID"
									),
					'email' => array(
										'rule'    =>  array('email',true),
										'message' => 'Please Enter Valid Email ID'
									),
					'isduplicate' => array(
										'rule'    =>  array('checkemailidedit'),
										'message' =>  'Email ID allready Exist'
									)
						  ),
				 
				 'member_num'=>array(  
						'notblank' => array(
									  "rule"    => "notEmpty",
									  "message" => "Please Enter Member Number."
								),
						'minlength' => array(
									  'rule'    => array('minLength', '6'),
									  'message' => 'Mimimum 6 characters long.'
								),		
						'member_num' => array(
									'rule'     => array('checkmembernumberedit'),
									'message'  => 'Member Number allready Exist.'
								)		 
						 )
		);
	
	public function checkemailidedit()
		{
			$username =  $this->data['AuthorisedUser']['email'];
			$id       =  $this->data['AuthorisedUser']['id'];
			$users    =  $this->find('first', array( 'conditions' =>  array('AuthorisedUser.email' => trim($username), 'AuthorisedUser.id !=' => $id )));
			if($users)
				{ 
					return false;
				}
				else
				{
					return true;
				}
		}
			
	public function checkmembernumberedit()
		{
			$member_num =  $this->data['AuthorisedUser']['member_num'];
			$id         =  $this->data['AuthorisedUser']['id'];
			$users      =  $this->find('first', array('conditions' =>  array('AuthorisedUser.member_num' =>trim($member_num), 'AuthorisedUser.id !=' => $id )));
			if($users)
				{ 
					return false;
				}
			else
				{
					return true;
				}
	}
	
	public function checkemailid()
		{
			$username =  $this->data['AuthorisedUser']['email'];
			$users    =  $this->find('first', array('conditions' =>  array('AuthorisedUser.email' =>trim($username))));
			if($users)
				{ 
					return false;
				}
				else
				{
					return true;
				}
		}

	public function checkmembernumber()
		{
		$member_num = $this->data['AuthorisedUser']['member_num'];
		$users      = $this->find('first', array('conditions' =>  array('AuthorisedUser.member_num' =>trim($member_num))));
		if($users)
			{ 
				return false;
			}
			else
			{
				return true;
			}
	}
 
function validates($options = array()) 
	{
    	/*echo "<pre>";
		print_r($options);*/
		
		// copy the data over from a custom var, otherwise
	
		$actionSet = 'validate' . Inflector::camelize(Router::getParam('action'));

		if (isset($this->validationSet)) {
			$temp = $this->validate;
			$param = 'validate' . $validationSet;
			$this->validate = $this->{$param};
		} elseif (isset($this->{$actionSet})) {
			$temp = $this->validate;
			$param = $actionSet;
			$this->validate = $this->{$param};
		} 
		
		$errors = $this->invalidFields($options);
		
		// copy it back
		if (isset($temp)) {
			$this->validate = $temp;
			unset($this->validationSet);
		}
		
		if (is_array($errors)) {
			return count($errors) === 0;
		}
		
		return $errors;
	} 
}