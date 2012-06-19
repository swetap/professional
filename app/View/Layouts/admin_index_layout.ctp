<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Professional Development Site</title>
<link href="http://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet" type="text/css" />
<?php
	 echo $this->Html->css('main');
	 echo $this->Html->css('datepicker');
	 echo $this->Html->script('jquery-1.4.4.js');
	 echo $this->Html->script('spinner/jquery.mousewheel.js');
	 echo $this->Html->script('spinner/ui.spinner.js');
     echo $this->Html->script('fileManager/elfinder.min.js');
     echo $this->Html->script('wysiwyg/jquery.wysiwyg.js');
	 echo $this->Html->script('wysiwyg/wysiwyg.image.js');
	 echo $this->Html->script('wysiwyg/wysiwyg.link.js');
	 echo $this->Html->script('wysiwyg/wysiwyg.table.js');
	 echo $this->Html->script('flot/jquery.flot.js');
	 echo $this->Html->script('flot/jquery.flot.pie.js');
	 echo $this->Html->script('flot/excanvas.min.js');
	 echo $this->Html->script('dataTables/jquery.dataTables.js');
	 echo $this->Html->script('dataTables/colResizable.min.js');
	 echo $this->Html->script('forms/forms.js');
	 echo $this->Html->script('forms/autogrowtextarea.js');
	 echo $this->Html->script('forms/autotab.js');
	 echo $this->Html->script('forms/jquery.validationEngine-en.js');
	 echo $this->Html->script('forms/jquery.validationEngine.js');
	 echo $this->Html->script('colorPicker/colorpicker.js');
	 echo $this->Html->script('uploader/plupload.js');
	 echo $this->Html->script('uploader/plupload.html5.js');
	 echo $this->Html->script('uploader/plupload.html4.js');
	 echo $this->Html->script('uploader/jquery.plupload.queue.js');
	 echo $this->Html->script('ui/progress.js');
	 echo $this->Html->script('ui/jquery.jgrowl.js');
	 echo $this->Html->script('ui/jquery.tipsy.js');
	 echo $this->Html->script('ui/jquery.alerts.js');
	 echo $this->Html->script('jBreadCrumb.1.1.js');
	 echo $this->Html->script('cal.min.js');
	 echo $this->Html->script('jquery.collapsible.min.js');
	 echo $this->Html->script('jquery.ToTop.js');
	 echo $this->Html->script('jquery.listnav.js');
	 echo $this->Html->script('jquery.sourcerer.js');
	 echo $this->Html->script('custom.js');
	 //echo $this->Html->script('datepicker.js');
		 
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 
<!--<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>-->
</head>
<body>

<!-- Top navigation bar -->
<?php  echo $this->element('admin_topnavigation'); ?>
<!-- Header -->
<?php  echo $this->element('admin_top_tickers'); ?>
<!-- Content wrapper -->
<div class="wrapper">
	<!-- Left navigation -->
    <?php  echo $this->element('admin_sidebar'); ?>
    <!-- Content -->
    <?php echo $content_for_layout; ?>
    <div class="fix"></div>
</div>
<!-- Footer -->
    <?php  echo $this->element('admin_footer'); ?>
</body>
</html>