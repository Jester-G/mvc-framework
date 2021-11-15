<?php
/** @var $this jesterone\mvccore\View */
/** @var $model \app\Models\ContactForm */

use jesterone\mvccore\form\TextAreaField;

$this->title = 'Contact';
?>
<h1>Contact Us</h1>

<?php $form = \jesterone\mvccore\form\Form::begin('', 'post') ?>
<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo new TextAreaField($model, 'body') ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php \jesterone\mvccore\form\Form::end(); ?>
