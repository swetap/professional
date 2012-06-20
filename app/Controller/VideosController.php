<?php

App::uses('AppController', 'Controller');

class VideosController extends AppController {
	public $name       = 'Videos';
	public $components =  array('Auth','Session',"Upload");
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
					   print_r('<pre>');
					   print_r($this->data);
					   print_r('</pre>');
					    
					   $this->Video->set($this->data);
					 
			   if($this->data['Video']['source_file']['name'] != ''){
						
						
						$tempFile                   =  $this->data['Video']['source_file']['tmp_name'];// upload video
						$targetPath                 =  "files/video/";
						$filename                   =  basename($image_path, ".jpg").".mp4"; 
						$video_file                 =  $this->Upload->upload($this->data['Video']['source_file'], $targetPath, $filename, NULL, array('mp4','MP4'), NULL, true);
						$this->data['Video']['source_file']    =  $video_file;
						$this->data['Video']['source_file']  =  $image_path;
						exit;
		 				
						$filename  =  explode(".",$this->data['Video']['source_file']['name']);
						$name      =  strtotime(date('Y-m-d H:m:s'));
						$ext       =  $filename[1];
						$finalname =  $name.".".$ext;
		 				//unlink("img/gallery/".$this->data['Gallery']['imageold']);
						 
						 
						 
						 
						$this->request->data['Video']['source_file']  =  $finalname; 
					 exit;
					 }
				   else
			    	 {
						   $this->request->data['Gallery']['image'] = $this->data['Gallery']['imageold'];
					 }
					 
					   
					   
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
