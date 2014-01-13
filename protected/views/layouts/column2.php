<?php $this->beginContent('//layouts/main'); ?>

<div class="span9">
	<div id="content">
	
		<?php $this->widget('bootstrap.widgets.TbAlert'); ?>
	
		<?php echo $content; ?>

	</div><!-- content -->
</div>

<div class="span3">
	<div id="sidebar">

	<?php if (isset($this->menu) && count($this->menu)) : ?>
	<div class="subnav well">
		<?php $this->widget('bootstrap.widgets.TbMenu', array(
	    	'type'=>'list',
	    	'items'=>$this->menu,
		)); ?>
	</div>
	<?php endif; ?>
	
	</div><!-- sidebar -->
</div>

<?php $this->endContent(); ?>