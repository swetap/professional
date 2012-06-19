<div class="content">
    	<div class="title"><h5><?php echo $mainheding; ?></h5></div>
        <div class="table">
            <div class="head"><h5 class="iFrames"><?php echo $title;?></h5></div>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                    <tr>
                        <th>Group ID</th>
                        <th>Group Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php for($i=0;$i<count($groups);$i++){?>
                     <tr class="gradeX">
                        <td><?php echo $groups[$i]['Group']['id']; ?></td>
                        <td><?php echo $groups[$i]['Group']['name']; ?></td>
                        <td class="center">
        	                <?php echo $this->Html->link('Edit', WEBSITE_PATH.'admin/groups/groupedit/'.$groups[$i]['Group']['id']); ?>
                        </td>
                        <td class="center">
            	            <?php echo $this->Html->link(__('Delete', true), 
										array('action'=>'groupdelete', 
										$groups[$i]['Group']['id']), null, 
										sprintf(__('Are you sure you want to delete this Group?', true), $groups[$i]['Group']['id'])); ?>
						</td>
                     </tr>
               <?php } ?>
                </tbody>
            </table>
        </div>
</div>