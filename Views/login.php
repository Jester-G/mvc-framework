<?php
/** @var $model \app\Models\User */
/** @var $this jesterone\mvccore\View */

$this->title = 'Login';
?>

<h1>Login</h1>

<?php $form = \jesterone\mvccore\form\Form::begin('', "post")  ?>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<button type="submit" class="btn btn-primary">Submit</button>


<?php \jesterone\mvccore\form\Form::end() ?>