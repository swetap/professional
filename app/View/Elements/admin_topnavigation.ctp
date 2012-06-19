<div id="topNav">
    <div class="fixed">
        <div class="wrapper">
            <div class="welcome">
            <span>Welcome, 
			<?php echo $_SESSION['Auth']['User']['User']['firstname']; ?></span></div>
            <div class="userNav">
                <ul>
                    <!-- <li>
                            <a href="<?php //echo WEBSITE_PATH;?>admin/users/editprofile" title="">
                                <img src="<?php //echo ROOT_PATH_IMAGE; ?>icons/topnav/profile.png" alt="" /><span>Profile</span>
                            </a>
                   </li>-->                 
				   <li>
						<a href="<?php echo WEBSITE_PATH;?>admin/users/logout" title="">
							<img src="<?php echo ROOT_PATH_IMAGE; ?>icons/topnav/logout.png" alt="" /><span>Logout</span>
						</a>
					</li>
                </ul>
            </div>
            <div class="fix"></div>
        </div>
    </div>
</div>