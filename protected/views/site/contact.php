<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form TbActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Contact Us</h1>

<?php $this->widget('bootstrap.widgets.TbAlert'); ?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'contact-form',
	'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<?php //echo $form->errorSummary($model); ?>
	<?php echo $form->textFieldRow($model,'name'); ?>
	<?php echo $form->textFieldRow($model,'email'); ?>
	<?php echo $form->textFieldRow($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
	<?php echo $form->textAreaRow($model,'body',array('rows'=>6, 'cols'=>50)); ?>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="control-group">
		<label class="control-label required" for="ContactForm_verifyCode"><?php echo $model->getAttributeLabel('verifyCode'); ?> <span class="required">*</span></label>
		<div class="controls">
			<?php $this->widget('CCaptcha'); ?><br/>
			<?php echo $form->textField($model,'verifyCode'); ?>
			<?php echo $form->error($model,'verifyCode'); ?>
			<p class="help-block">Please enter the letters as they are shown in the image above.
			<br/>Letters are not case-sensitive.</p>
		</div>
	</div>
	<?php endif; ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Submit',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
