<div class="content">
    	<div class="title"><h5><?php echo $mainheding; ?></h5></div>
        <div class="table">
            <div class="head"><h5 class="iFrames"><?php echo $title;?></h5></div>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                    <tr>
                        <th>Module ID</th>
                        <th>Title</th>
                        <th>Code</th>
                        <th>Published</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				for($i=0;$i<count($modules);$i++){?>
                     <tr class="gradeX">
                        <td><?php echo $modules[$i]['Module']['id']; ?></td>
                        <td><?php echo $modules[$i]['Module']['title']; ?></td>
                        <td><?php echo $modules[$i]['Module']['code']; ?></td>
                        <td><?php   if($modules[$i]['Module']['publish'] == '1'){ echo "Yes"; } else {echo "No";}?> </td>
                        <td class="center">
        	                <?php echo $this->Html->link('Edit', WEBSITE_PATH.'admin/modules/moduleedit/'.$modules[$i]['Module']['id']); ?>
                        </td>
                        <td class="center">
            	            <?php echo $this->Html->link(__('Delete', true), 
										array('action'=>'moduledelete', 
										$modules[$i]['Module']['id']), null,
										sprintf(__('Are you sure you want to delete this Module?', true), $modules[$i]['Module']['id'])); ?>
						</td>
                     </tr>
               <?php } ?>
                </tbody>
            </table>
        </div>
</div>