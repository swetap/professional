<div class="content">
    	<div class="title"><h5><?php echo $mainheding; ?></h5></div>
        <div class="table">
            <div class="head"><h5 class="iFrames"><?php echo $title;?></h5></div>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                    <tr>
                        <th>Video ID</th>
                        <th>Media ID</th>
                        <th>Source File</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php for($i=0;$i<count($videos);$i++){?>
                     <tr class="gradeX">
                        <td><?php echo $videos[$i]['Video']['id']; ?></td>
                        <td><?php echo $videos[$i]['Video']['id']; ?></td>
                        <td><?php echo $videos[$i]['Video']['id']; ?></td>
                        <td class="center">
        	                <?php echo $this->Html->link('Edit', WEBSITE_PATH.'admin/videos/videoedit/'.$videos[$i]['Video']['id']); ?>
                        </td>
                        <td class="center">
            	            <?php echo $this->Html->link(__('Delete', true),
										array('action'=>'videodelete',
										$videos[$i]['Video']['id']), null,
										sprintf(__('Are you sure you want to delete this Video?', true), $videos[$i]['Video']['id'])); ?>
						</td>
                     </tr>
               <?php } ?>
                </tbody>
            </table>
        </div>
</div>