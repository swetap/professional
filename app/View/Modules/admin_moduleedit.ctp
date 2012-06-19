<div class="content" id="container">
  <div class="title">
    <h5><?php echo $mainheding; ?></h5>
  </div>
  <?php echo $this->Form->create("Module", 
  							array("action"=>"moduleedit/".$modules[0]['Module']['id'], 
							"class"=>'mainForm', "id"=>"moduleedit", "name"=>"moduleedit","enctype"=>"multipart/form-data" ));?>
  <form action="" class="mainForm">
    <!-- Input text fields -->
    <fieldset>
      <div class="widget first">
        <div class="head">
          <h5 class="iList"><?php echo $title;?></h5>
        </div>
        <div class="rowElem noborder">
          <label>Module Title* :</label>
          <div class="formRight">
          <?php echo $this->Form->input('Module.id', array('type'=>'hidden','value'=> $modules[0]['Module']['id'], 'id'=>'req1','div'=>false,'label'=>false));?>
          <?php echo $this->Form->input('Module.title', 
		  							array( 'type'  => 'text',
									       'value' => $modules[0]['Module']['title'],
										   'maxlength'=>'30','id'=>'req1','div'=>false,'label'=>false));?>
          </div>
          <div class="fix"> </div>
        </div>
        <div class="rowElem noborder">
          <label>Code* :</label>
          <div class="formRight">
           <?php echo $this->Form->input('Module.code', array( 'type'  => 'text',
		                                                       'value' => $modules[0]['Module']['code'],
															   'id'    => 'req2',
															   'maxlength'=>'8','div'=>false,'label'=>false));?>
                                                               </div>
          <div class="fix"> </div>
        </div>
        <div class="rowElem">
          <label>Published :</label>
          <div class="formRight">
           <?php 
		   if($modules[0]['Module']['publish'] == '1'){ 
		      echo $this->Form->input('Module.publish',array('type'=>'checkbox','id'=>'req5','checked'=>'checked','div'=>false,'label'=>false));
            }else{
			  echo $this->Form->input('Module.publish',array('type'=>'checkbox','id'=>'req5','div'=>false,'label'=>false));	
			}
			 ?>
           </div>
          <div class="fix"></div>
        </div>
        <fieldset>
          <div class="widget">
            <div class="head">
              <h5 class="iPencil">Description*</h5>
            </div>
	       <?php echo $this->Form->input('Module.description',array( 'type'=>'textarea', "rows"=>"5",'value' => $modules[0]['Module']['description'],
		   	 "class"=>"wysiwyg",'id'=>'req1','div'=>false,'label'=>false));?> </div>
        </fieldset>
        <input type="submit" value="Edit module" class="greyishBtn submitForm" />
        <div class="fix"></div>
      </div>
    </fieldset>
    <!-- Checkboxes and radios -->
  </form>
</div>
