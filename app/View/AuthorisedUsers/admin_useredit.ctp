<div class="content" id="container">
  <div class="title">
    <h5><?php echo $mainheding; ?></h5>
  </div>
  
  <!-- Statistics --><!-- Form begins --> 
  <?php echo $this->Form->create("AuthorisedUser", array("action"=>"useredit/".$authoriseduser[0]['AuthorisedUser']['id'], "class"=>'mainForm', "id"=>"frmdisplay", "name"=>"frmedituser"));?>
  <form action="" class="mainForm">
    <!-- Input text fields -->
    <fieldset>
      <div class="widget first">
        <div class="head">
          <h5 class="iList"><?php echo $title;?></h5>
        </div>
        <?php echo $this->Form->input('AuthorisedUser.id',
		  						array(  "type"  => 'hidden',
										"value" => $authoriseduser[0]['AuthorisedUser']['id'],
										'id'    => 'req1',
										'div'   => false,'label'=>false));?> 
        
        <div class="rowElem">
          <label>Email ID*:</label>
          <div class="formRight"> 
		  <?php echo $this->Form->input('AuthorisedUser.email',
		  						array( "type"      => 'text',
								       "value"     => $authoriseduser[0]['AuthorisedUser']['email'],
									   "id"        => "req2",
									   'maxlength' => '50',
									   'div'       =>  false,'label'=>false));?>
		 </div>
         <div class="fix"></div>
        </div>
        <div class="rowElem noborder">
          <label>Member Number*:</label>
          <div class="formRight">
          <?php echo $this->Form->input('AuthorisedUser.member_num',
		  						array( "type"      => 'text',
								       "value"     =>  $authoriseduser[0]['AuthorisedUser']['member_num'],
									   'id'        =>  'req1',
									   'maxlength' =>  '15',
									   'div'       =>   false,'label'=>false));?>
		 </div>
         <div class="fix"></div>
        </div>
        <input type="submit" value="UPDATE AUTHORISED USER" class="greyishBtn submitForm" />
        <div class="fix"></div>
      </div>
    </fieldset>
    </form>
</div>