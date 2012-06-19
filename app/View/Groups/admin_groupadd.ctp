<div class="content" id="container">
  <div class="title">
    <h5><?php echo $mainheding; ?></h5>
  </div>
  <?php echo $this->Form->create("Group", array("action"=>"groupadd", "class"=>'mainForm', "id"=>"addgorup", "name"=>"addgroup"));?>
  <form action="" class="mainForm">
    <!-- Input text fields -->
    <fieldset>
      <div class="widget first">
        <div class="head"><h5 class="iList"><?php echo $title; ?></h5></div>
        
        <div class="rowElem  noborder">
          <label>Group Name*:</label>
          <div class="formRight">
         		<?php echo $this->Form->input('Group.name',array('type'=>'text','id'=>'req1','maxlength'=>'11','div'=>false,'label'=>false));?> 
          </div>
          <div class="fix"></div>
        </div>
        <input type="submit" value="Add Group" class="greyishBtn submitForm" />
        <div class="fix"></div>
      </div>
     </fieldset>
   </form>
</div>
