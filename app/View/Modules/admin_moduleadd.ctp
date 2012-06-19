<div class="content" id="container">
  <div class="title">
    <h5><?php echo $mainheding; ?></h5>
  </div>
  <?php echo $this->Form->create("Module", array("action"=>"moduleadd", "class"=>'mainForm', "id"=>"moduleadd", "name"=>"moduleadd",
  			"enctype"=>"multipart/form-data" ));?>
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
		  <?php echo $this->Form->input('Module.id',    array('type' => 'hidden', 'id'=>'req1','div'=>false,'label'=>false));?>
          <?php echo $this->Form->input('Module.title', array('type' => 'text'  , 'maxlength'=>'30','id'=>'req1','div'=>false,'label'=>false));?> </div>
          <div class="fix"> </div>
        </div>
        <div class="rowElem noborder">
          <label>Code* :</label>
          <div class="formRight">
           <?php echo $this->Form->input('Module.code',array('type'=>'text','id'=>'req2','maxlength'=>'8','div'=>false,'label'=>false));?> </div>
          <div class="fix"> </div>
        </div>
        <div class="rowElem">
          <label>Published :</label>
          <div class="formRight">
          <?php echo $this->Form->input('Module.publish',array('type'=>'checkbox','id'=>'req5','value'=>'1','div'=>false,'label'=>false));?> 
           </div>
          <div class="fix"></div>
        </div>
        <fieldset>
          <div class="widget">
            <div class="head">
            <h5 class="iPencil">Description*</h5>
            </div>
	       <?php echo $this->Form->input('Module.description',
		  					array('type'=>'textarea',"rows"=>"5","class"=>"wysiwyg",'id'=>'req1','div'=>false,'label'=>false));?>
          </div>
        </fieldset>
        <div class="rowElem">
        <div class="fix"></div>
        </div>
        <input type="submit" value="Add module" class="greyishBtn submitForm" />
        <div class="fix"></div>
      </div>
    </fieldset>
    <!-- Checkboxes and radios -->
  </form>
</div>
