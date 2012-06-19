<?php

App::uses('AppModel','Model');

class Module extends AppModel {
	public $name                  = 'Module';
	public $primaryKey            = 'id';
	public $validateAdminModuleadd =  array(
	   'title' => array(
		   'notblank' => array(
						  'rule'      =>  "notEmpty",
						   "message"  =>  "Please Enter Module Title."
						),
			'minlength' => array(
						  'rule'    => array('minLength', '3'),
						  'message' => 'Mimimum 3 characters long.'
						),
				 'title' => array(
							'rule'    =>  array('checktitle'),
							'message' =>  'Title allready Exist.'
						)
				  ),
		 'code' => array(
			   'notblank' => array(
							  'rule'      =>  "notEmpty",
							   "message"  =>  "Please Enter Code."
							),
		'minlength' => array(
						  'rule'    => array('minLength', '8'),
						  'message' => 'Mimimum 8 characters long.'
						),
				'code' => array(
								'rule'    =>  array('checkcode'),
								'message' =>  'Code allready Exist.'
							)
				  ),
		 'description' => array(
		   'notblank' => array(
							  'rule'      =>  "notEmpty",
							   "message"  =>  "Please Enter description."
							),
		  'description' => array(
							 'rule'    => array('minLength', '10'),
						     'message' => 'Mimimum 10 characters long'
						)
				  )				  	  
		
		);
	public $validateAdminModuleedit =  array(
	   'title' => array(
		   'notblank' => array(
						  'rule'      =>  "notEmpty",
						   "message"  =>  "Please Enter Module Title."
						),
				 'title' => array(
							'rule'    =>  array('checktitleedit'),
							'message' =>  'Title allready Exist.'
						)
				  ),
		 'code' => array(
		   'notblank' => array(
						  'rule'      =>  "notEmpty",
						   "message"  =>  "Please Enter Code."
						),
			'minlength' => array(
						  'rule'    => array('minLength', '8'),
						  'message' => 'Mimimum 8 characters long.'
						),
			'code' => array(
							'rule'    =>  array('checkcodeedit'),
							'message' =>  'Code allready Exist.'
						)
				  ),
		 'description' => array(
		  		 'notblank' => array(
						  'rule'      =>  "notEmpty",
						   "message"  =>  "Please Enter description."
						),
				 'description' => array(
							 'rule'    => array('minLength', '10'),
						     'message' => 'Mimimum 10 characters long'
						)
				  )	
		);
	
	public function checkcodeedit()
		{
			$code  =  $this->data['Module']['code'];
			$id    =  $this->data['Module']['id'];
			$group =  $this->find('first', array( 'conditions' =>  array('Module.code' => trim($code),'Module.id !=' => $id )));
			if($group)
				{ 
					return false;
				}
			else
				{
					return true;
				}
		}
	public function checktitleedit()
		{
			
			$moduletitle =  $this->data['Module']['title'];
			$id          =  $this->data['Module']['id'];
			$value       =  $this->find('first', array( 'conditions' => array('Module.title' => trim($moduletitle),'Module.id != ' =>$id )));
			if($value)
				{ 
					return false;
				}
				else
				{
					return true;
				}
		}
		
		 
	public function checktitle()
		{
			$moduletitle =  $this->data['Module']['title'];
			$value       =  $this->find('first', array( 'conditions' => array('Module.title' => trim($moduletitle))));
			if($value)
				{ 
					return false;
				}
				else
				{
					return true;
				}
		}
 
	public function checkcode()
		{
			$modulecode  =  $this->data['Module']['code'];
			$value       =  $this->find('first', array( 'conditions' => array('Module.code' => trim($modulecode))));
			if($value)
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