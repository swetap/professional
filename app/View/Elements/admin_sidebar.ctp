<div class="leftNav">
  <ul id="menu">
    <li class="dash"> <a href="javascript:void(0)" title="" class="active"><span>Dashboard</span></a> </li>
    <li class="widgets"><a href="javascript:void(0)" title="" class="exp"><span>Authorised Users</span></a>
      <ul class="sub">
        <li><?php echo $this->Html->link('Manage Authorised Users', WEBSITE_PATH.'admin/authorised_users/userlist'); ?></li>
        <li><?php echo $this->Html->link('Add Authorised Users',  WEBSITE_PATH.'admin/authorised_users/useradd'); ?></li>
      </ul>
    </li>
    <li class="contacts"><a href="javascript:void(0)" title="" class="exp"><span>Users</span></a>
      <ul class="sub">
        <li><?php echo $this->Html->link('Manage Users',  WEBSITE_PATH.'admin/users/userlist'); ?></li>
        <li><?php echo $this->Html->link('Add Users', WEBSITE_PATH.'admin/users/useradd'); ?></li>
      </ul>
    </li>
    
    <li class="gallery"><a href="javascript:void(0)" title="" class="exp"><span>Groups</span></a>
      <ul class="sub">
        <li><?php echo $this->Html->link('Manage Groups',  WEBSITE_PATH.'admin/groups/grouplist'); ?></li>
        <li><?php echo $this->Html->link('Add Groups',  WEBSITE_PATH.'admin/groups/groupadd'); ?></li>
      </ul>
    </li>
    
    <li class="files"><a href="javascript:void(0)" title="" class="exp"><span>Modules</span></a>
      <ul class="sub">
        <li><?php echo $this->Html->link('Manage Modules', WEBSITE_PATH.'admin/modules/modulelist'); ?></li>
       <li><?php  echo $this->Html->link('Add Modules',  WEBSITE_PATH.'admin/modules/moduleadd'); ?></li>
      </ul>
    </li>
    
    <li class="gallery">
      <a href="javascript:void(0)" title="" class="exp"><span>Media Items</span></a>
      <ul class="sub">
        <li><?php echo $this->Html->link('Manage Media Items',  WEBSITE_PATH.'admin/media_items/media_itemslist'); ?></li>
        <li><?php echo $this->Html->link('Add Media Items',  WEBSITE_PATH.'admin/media_items/media_itemsadd'); ?></li>
      </ul>
    </li>
    <li class="gallery"><a href="javascript:void(0)" title="" class="exp"><span>videos</span></a>
      <ul class="sub">
        <li><?php echo $this->Html->link('Manage Videos',  WEBSITE_PATH.'admin/videos/videolist'); ?></li>
        <li><?php echo $this->Html->link('Add Videos',  WEBSITE_PATH.'admin/videos/videoadd'); ?></li>
      </ul>
    </li>
    <li class="gallery"><a href="javascript:void(0)" title="" class="exp"><span>Module Memberships</span></a>
      <ul class="sub">
        <li><?php echo $this->Html->link('Manage Module Memberships',  WEBSITE_PATH.'admin/module_memberships/membershiplist'); ?></li>
        <li><?php echo $this->Html->link('Add Module Memberships',  WEBSITE_PATH.'admin/module_memberships/membershipadd'); ?></li>
      </ul>
    </li>
  </ul>
</div>
