<?php

App::uses('AppModel','Model');

class User extends AppModel {
	public $name       = 'User';
	public $primaryKey = 'id';
	
	public $validateAdminLogin= array(
			'email' => array( 
					'notblank' => array(
									  'rule'    => "notEmpty",
									   "message" =>"Please Enter Email ID"
									),
					'email' => array(
										'rule'    => array('email',true),
										'message' => 'Please Enter Valid Email ID'
									),
					'email' => array(
										'rule'    => array('checkemailid'),
										'message' => 'Email ID dose not Exist'
									)
						  ),
			'password'=>array(  
							'notblank' => array(
										  "rule"    => "notEmpty",
										  "message" => "Please Enter Password"
									),
							'password' => array(
										'rule'    => array('checkpassword'),
										'message' => 'Email ID and Password does not Match.'
									)		 
	 				     )
		);
		
	public $validateAdminForgetpassword = array(
			'email' => array( 
					'notblank' => array(
								  'rule'    => "notEmpty",
								   "message" =>"Please Enter Email ID"
								),
					'email' => array(
								'rule'    => array('email',true),
								'message' => 'Please Enter Valid Email ID'
							),
					'email' => array(
										'rule'    => array('checkemailid'),
										'message' => 'Email ID dose not Exist'
									)
			)
		);
		
	public $belongsTo = array(
			 'Group' => array(
						'className'    => 'Group',
						'foreignKey'   => 'Group'
					 ) 
	);	 

	
public function checkemailid()
	{
		$username = $this->data['User']['email'];
		$users    = $this->find('first', array('conditions' =>  array( 'User.group' => '3', 'User.email' =>trim($username))));
		if($users)
			{ 
				return true;
			}
			else
			{
				return false;
			}
	}
	
public function checkpassword()
	{
		$username = $this->data['User']['email'];
		$password = $this->data['User']['password'];
		$users    = $this->find('first', array('conditions' =>  array( 'User.group' => '3', 'User.email' =>trim($username), 'User.password' => $password)));
		if($users)
			{ 
				return true;
			}
			else
			{
				return false;
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