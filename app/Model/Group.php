<?php

App::uses('AppModel','Model');

class Group extends AppModel {
	public $name                  = 'Group';
	public $primaryKey            = 'id';
	public $validateAdminGroupadd =  array(
	   'name' => array(
		   'notblank' => array(
						  'rule'      =>  "notEmpty",
						   "message"  =>  "Please Enter Group Name"
						),
			'minlength' => array(
						  'rule'    => array('minLength', '3'),
						  'message' => 'Mimimum 3 characters long.'
						),
				 'name' => array(
							'rule'    =>  array('checkgroup'),
							'message' =>  'Group allready Exist'
						)
				  )
		);
	
	public $validateAdminGroupedit =  array(
	   'name' => array(
		   'notblank' => array(
						  'rule'      =>  "notEmpty",
						   "message"  =>  "Please Enter Group Name."
						),
			'minlength' => array(
						  'rule'    => array('minLength', '3'),
						  'message' => 'Mimimum 3 characters long.'
						),
				 'name' => array(
							'rule'    =>  array('checkgroupedit'),
							'message' =>  'Group allready Exist'
						)
				  )
		);
	
	public function checkgroupedit()
		{
			$groupname =  $this->data['Group']['name'];
			$id        =  $this->data['Group']['id'];
			$group     =  $this->find('first', array( 'conditions' =>  array('Group.name' => trim($groupname),'Group.id !=' => $id )));
			if($group)
				{ 
					return false;
				}
				else
				{
					return true;
				}
		}
		 
	public function checkgroup()
		{
			$groupname =  $this->data['Group']['name'];
			$users     =  $this->find('first', array( 'conditions' =>  array('Group.name' => trim($groupname))));
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