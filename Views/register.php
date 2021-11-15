<?php
/** @var $model \app\Models\User */
/** @var $this jesterone\mvccore\View */

$this->title = 'Registration';
?>

<h1>Registration</h1>

<?php $form = \jesterone\mvccore\form\Form::begin('', "post")  ?>
<div class="row">
    <div class="col">
        <?php echo $form->field($model, 'firstName') ?>
    </div>
    <div class="col">
        <?php echo $form->field($model, 'lastName') ?>
    </div>
</div>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<?php echo $form->field($model, 'confirmPassword')->passwordField() ?>
<button type="submit" class="btn btn-primary">Submit</button>


<?php \jesterone\mvccore\form\Form::end() ?>
