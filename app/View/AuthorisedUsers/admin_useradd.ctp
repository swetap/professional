<div class="content" id="container">
  <div class="title">
    <h5><?php echo $mainheding; ?></h5>
  </div>
  <?php echo $this->Form->create("AuthorisedUser", array("action"=>"useradd", "class"=>'mainForm', "id"=>"addauthoriseduser", "name"=>"addauthoriseduser"));?>
  <form action="" class="mainForm">
    <!-- Input text fields -->
    <fieldset>
      <div class="widget first">
        <div class="head"><h5 class="iList"><?php echo $title; ?></h5></div>
        
        <div class="rowElem  noborder">
          <label>Email ID*:</label>
          <div class="formRight">
          <?php echo $this->Form->input('AuthorisedUser.email',array('type'=>'text','id'=>'req1','maxlength'=>'50','div'=>false,'label'=>false));?> 
           </div>
          <div class="fix"></div>
        </div>
        <div class="rowElem">
          <label>Member Number* :</label>
          <div class="formRight">
          <?php echo $this->Form->input('AuthorisedUser.member_num',array('type'=>'text','id'=>'req2','maxlength'=>'15','div'=>false,'label'=>false));?> 
          </div>
          <div class="fix"></div>
        </div>
        <input type="submit" value="Add Authorised User" class="greyishBtn submitForm" />
        <div class="fix"></div>
      </div>
     </fieldset>
   </form>
</div>
