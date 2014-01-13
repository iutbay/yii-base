<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span12">
	<div id="content">
	
		<?php $this->widget('bootstrap.widgets.TbAlert'); ?>

		<?php echo $content; ?>
	
	</div><!-- content -->
</div>
<?php $this->endContent(); ?>