<div class="content">
    	<div class="title"><h5><?php echo $mainheding; ?></h5></div>
        <div class="table">
            <div class="head"><h5 class="iFrames"><?php echo $title;?></h5></div>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Group</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php for($i=0;$i<count($users);$i++){?>
                         <tr class="gradeX">
                            <td><?php echo $users[$i]['User']['id']; ?></td>
                            <td><?php echo $users[$i]['User']['firstname']." ".$users[$i]['User']['lastname']; ?></td>
                            <td><?php echo $users[$i]['User']['email']; ?></td>
                            <td><?php echo $users[$i]['Group']['name']; ?></td>
                            <td class="center"><?php echo $users[$i]['User']['created']; ?>	</td>
                            <td class="center">
								<?php echo $this->Html->link('Edit', WEBSITE_PATH.'admin/users/useredit/'.$users[$i]['User']['id']); ?>
                            </td>
                            <td class="center">
							<?php echo $this->Html->link(__('Delete', true), array('action'=>'userdelete', $users[$i]['User']['id']), null, sprintf(__('Are you sure you want to delete this User?', true), $users[$i]['User']['id'])); ?>
							</td>
                        </tr>
               <?php } ?>
                </tbody>
            </table>
        </div>
</div>