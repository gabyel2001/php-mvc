<?php
/** @var $model \app\models\User */
?>

<h1>Login</h1>
<?php $form = \theworker\phpmvc\form\Form::begin('', "post"); ?>
<?php echo $form->field($model, 'email')->emailField(); ?>
<?php echo $form->field($model, 'password')->passwordField(); ?>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php echo \theworker\phpmvc\form\Form::end();  ?>