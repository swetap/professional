<div class="content">
    	<div class="title"><h5><?php echo $mainheding; ?></h5></div>
        <div class="table">
            <div class="head"><h5 class="iFrames"><?php echo $title;?></h5></div>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>Email</th>
                        <th>Member Number</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php for($i=0;$i<count($users);$i++){?>
                     <tr class="gradeX">
                        <td><?php echo $users[$i]['AuthorisedUser']['id']; ?></td>
                        <td><?php echo $users[$i]['AuthorisedUser']['email']; ?></td>
                        <td><?php echo $users[$i]['AuthorisedUser']['member_num']; ?></td>
                        <td class="center">
                            <?php 
							echo $this->Html->link('Edit', WEBSITE_PATH.'admin/authorised_users/useredit/'.$users[$i]['AuthorisedUser']['id']); ?>
                        </td>
                        <td class="center">
                        <?php echo $this->Html->link(__('Delete', true), array('action'=>'userdelete', $users[$i]['AuthorisedUser']['id']), null, sprintf(__('Are you sure you want to delete this User?', true), $users[$i]['AuthorisedUser']['id'])); ?>
						</td>
                     </tr>
               <?php } ?>
                </tbody>
            </table>
        </div>
</div>