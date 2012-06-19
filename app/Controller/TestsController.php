<?php

App::uses('AppController', 'Controller');

class VideosController extends AppController {
	public $name       = 'Videos';
	public $components =  array('Auth','Session');
	public $helpers    =  array('Html', 'Session');
	public $uses       =  array('Module','Video');

	function beforeFilter()
		{
			parent::beforeFilter();
			$this->set('mainheding','Videos');
		}
		
	public function	admin_videolist()
		{
			$this->layout  = "admin_index_layout"; 
			$videos        =  $this->Video->find('all');
		 	$this->set('videos', $videos);
			$this->set('title','Manage videos');
		}
	
	public function admin_videoadd()
		{
			$this->layout = "admin_index_layout"; 
			if(!empty($this->data))
				{
					   echo "tese";
					   
					  $this->Video->set($this->data);
					if($this->Video->validates($this->data))
						{
							$this->Video->save($this->data);
							$this->redirect('videolist');
						}
			   }
			$this->set('title','Add Video');
			
		}
		
	public function admin_videodelete($id = NULL)
		{
		    $this->Module->delete($id);
			$this->redirect('modulelist');
		}
	
	// This Action is used to Edit the Authorised Users Record.
	public function admin_videoedit($id = NULL)
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
