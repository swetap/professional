<div class="loginWrapper">
  <div class="loginLogo"><img src="<?php echo ROOT_PATH_IMAGE; ?>logo.png" alt="" /></div>
  <div class="loginPanel">
    <div class="head">
      <h5 class="iUser">Login</h5>
    </div>
    <?php echo $this->Form->create('User',array('class'=>'mainForm'));?>
    <fieldset>
      <div class="loginRow noborder">
        <label for="req1">Email ID:</label>
        <div class="loginInput"><?php echo $this->Form->input('User.email',array('type'=>'text','id'=>'req1','div'=>false,'label'=>false)); ?></div>
        <div class="fix"></div>
      </div>
     
      <div class="loginRow">
        <label for="req2">Password:</label>
        <div class="loginInput"><?php echo $this->Form->input('User.password',array('type'=>'password','value'=>'','id'=>'req2','div'=>false,'label'=>false));?></div>
        <div class="fix"></div>
      </div>
      <div class="loginRow">
        <div class="rememberMe">
          <label><a href="admin/users/forgetpassword">Forgot Password</a></label>
        </div><?php echo $this->Form->submit('Log me in',array('class'=>'greyishBtn submitForm','div'=>false,'label'=>false));?>
        <div class="fix"></div>
      </div>
    </fieldset>
    <?php echo $this->Form->end();?> </div>
</div>
