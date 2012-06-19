<div class="content" id="container">
  <div class="title">
    <h5><?php echo $mainheding; ?></h5>
  </div>
  <?php echo $this->Form->create("Video", array("action"=>"videoadd", "class"=>'mainForm', "id"=>"addvideo", "name"=>"addvideo"));?>
  <form action="" class="mainForm">
    <!-- Input text fields -->
    <fieldset>
      <div class="widget first">
        <div class="head"><h5 class="iList"><?php echo $title; ?></h5></div>
        
        <div class="rowElem  noborder">
          <label>Title*:</label>
          <div class="formRight">
         		<?php echo $this->Form->input('MediaItem.title',array('type'=>'text','id'=>'req1','maxlength'=>'30','div'=>false,'label'=>false));?> 
          </div>
          <div class="fix"></div>
        </div>
        <div class="rowElem">
          <label>Code*:</label>
          <div class="formRight">
         		<?php echo $this->Form->input('MediaItem.code',array('type'=>'text','id'=>'req1','maxlength'=>'12','div'=>false,'label'=>false));?> 
          </div>
          <div class="fix"></div>
        </div>
        <div class="rowElem">
          <label>Source file*:</label>
          <div class="formRight">
         		<?php echo $this->Form->input('Video.source_file',array('type'=>'text','id'=>'req1','maxlength'=>'200','div'=>false,'label'=>false));?> 
          </div>
          <div class="fix"></div>
        </div>
        <div class="rowElem">
          <label>Container*:</label>
          <div class="formRight">
         		<?php echo $this->Form->input('Video.container',array('type'=>'text','id'=>'req1','maxlength'=>'10','div'=>false,'label'=>false));?> 
          </div>
          <div class="fix"></div>
        </div>
        <div class="rowElem">
          <label>Published :</label>
          <div class="formRight">
          <?php echo $this->Form->input('MediaItem.publish',array('type'=>'checkbox','id'=>'req5','value'=>'1','div'=>false,'label'=>false));?> 
           </div>
          <div class="fix"></div>
        </div>
        <fieldset>
          <div class="widget noborder">
            <div class="head">
              <h5 class="iPencil">Description*</h5>
            </div>
	       <?php echo $this->Form->input("MediaItem.description", 
		   					       array("type"=>"textarea",
					               "rows"=>"5","class"=>"wysiwyg",'id'=>'req1','div'=>false,'label'=>false));?>
           </div>
        </fieldset>
        <div class="rowElem">
        <div class="fix"></div>
        </div>
        <input type="submit" value="Add Group" class="greyishBtn submitForm" />
        <div class="fix"></div> 
      </div>
     </fieldset>
   </form>
</div>