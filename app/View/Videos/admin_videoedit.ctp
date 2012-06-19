<div class="content" id="container">
  <div class="title">
    <h5><?php echo $mainheding; ?></h5>
  </div>
  <?php echo $this->Form->create("Group",array("action"=>"groupedit/".$groups[0]['Group']['id'], "class"=>'mainForm', "id"=>"groupedit", "name"=>"groupedit"));?>
  <form action="" class="mainForm">
  <fieldset>
      <div class="widget first">
        <div class="head">
          <h5 class="iList"><?php echo $title;?></h5>
        </div>
        <div class="rowElem noborder">
          <?php echo $this->Form->input('Group.id',array('type'=>'hidden',"value"=>$groups[0]['Group']['id'],'id'=>'req1','div'=>false,'label'=>false));?> 
          <label>Group Name*:</label>
          <div class="formRight">
          <?php echo $this->Form->input('Group.name',
		  					      array("type" 		=> 'text',
								        "value" 	=> $groups[0]['Group']['name'],
										"id"        => 'req1',
										"maxlength" => '11',
										"div"       => false,
										"label"     => false));
		  ?>
          </div>
          <div class="fix"></div>
        </div>
         <input type="submit" value="Group Edit" class="greyishBtn submitForm" />
        <div class="fix"></div>
      </div>
    </fieldset>
    
    <!-- Checkboxes and radios --> 
    
    <!-- File upload --> 
    
    <!-- WYSIWYG editor -->
    
  </form>
</div>