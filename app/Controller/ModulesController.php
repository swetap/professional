<?php

App::uses('AppController', 'Controller');

class ModulesController extends AppController {
	public $name       = 'Modules';
	public $components =  array('Auth','Session');
	public $helpers    =  array('Html', 'Session');
	public $uses       =  array('Module');

	function beforeFilter()
		{
			parent::beforeFilter();
			$this->set('mainheding','Modules');
		}
		
	public function	admin_modulelist()
		{
			$this->layout  = "admin_index_layout"; 
			$modules        =  $this->Module->find('all');
		 	$this->set('modules', $modules);
			$this->set('title','Manage Modules');
		}
	
	public function admin_moduleadd()
		{
			$this->layout = "admin_index_layout"; 
			if(!empty($this->data))
				{
					   $this->Module->set($this->data);
					if($this->Module->validates($this->data))
						{
							$this->Module->save($this->data);
							$this->redirect('modulelist');
						}
			   }
			$this->set('title','Add Module');
			
		}
		
	public function admin_moduledelete($id = NULL)
		{
		    $this->Module->delete($id);
			$this->redirect('modulelist');
		}
		
	// This Action is used to Edit the Authorised Users Record.
	public function admin_moduleedit($id = NULL)
		{
			$this->layout = "admin_index_layout";
			$modules       =  $this->Module->find('all',array('conditions'=>array('Module.id'=>$id)));
			if(!empty($this->data))
				 {
					 $this->Module->set($this->data);
				 if(($this->Module->validates($this->data)))
					 {
						 $this->Module->id = $id;
						 $this->Module->save($this->data);	 
						 $this->redirect('modulelist');
					 }
			 	}
			$this->set('title','Edit User');
			$this->set('modules', $modules);
				
		}	
}
