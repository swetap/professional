<?php

App::uses('AppController', 'Controller');

class GroupsController extends AppController {

	public $name       = 'Groups';
	public $components =  array('Auth','Session');
	public $helpers    =  array('Html', 'Session');
	public $uses       =  array('Group','User');

	function beforeFilter()
		{
			parent::beforeFilter();
			$this->set('Group');
			$this->set('mainheding','Groups');
		}
		
	public function	admin_grouplist()
		{
			$this->layout  = "admin_index_layout"; 
			$groups        =  $this->Group->find('all');
			$this->set('groups', $groups);
			$this->set('title','Manage Groups');
		}
	
	public function admin_groupadd()
		{
			$this->layout = "admin_index_layout"; 
			if(!empty($this->data))
				{
					   $this->Group->set($this->data);
					if($this->Group->validates($this->data))
						{
							$this->Group->save($this->data);
							$this->redirect('grouplist');
						}
			   }
			$this->set('title','Add Group');
			
		}
		
	public function admin_groupdelete($id = NULL)
		{
		    $this->Group->delete($id);
			$this->redirect('grouplist');
		}
		
	// This Action is used to Edit the Authorised Users Record.
	public function admin_groupedit($id = NULL)
		{
			$this->layout = "admin_index_layout";
			$groups       =  $this->Group->find('all',array('conditions'=>array('Group.id'=>$id)));
			if(!empty($this->data))
				 {
						 $this->Group->set($this->data);
					 if(($this->Group->validates($this->data)))
						 {
							 $this->Group->id = $id;
							 $this->Group->save($this->data);	 
							 $this->redirect('grouplist');
						 }
			 }
			$this->set('title','Edit User');
			$this->set('groups', $groups);
				
		}	
}
