<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Register';
$this->breadcrumbs=array(
	'Register',
);
?>





<p>
	Registrarse.
</p>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'register-form',//este es el id que apunta al controlador por $POST
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name'); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name'); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->textField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	

	<?php if(CCaptcha::checkRequirements()): ?>
		<div class="row">
			<?php echo $form->labelEx($model,'verifyCode'); ?>
			<div>
				<?php $this->widget('CCaptcha'); ?>
				<?php echo $form->textField($model,'verifyCode'); ?>
			</div>
			<div class="hint">Please enter the letters as they are shown in the image above.
				<br/>Letters are not case-sensitive.</div>
				<?php echo $form->error($model,'verifyCode'); ?>
			</div>
		<?php endif; ?>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Submit'); ?>
		</div>

		<?php $this->endWidget(); ?>

	</div><!-- form -->

	<!-- <?php //endif; ?> -->