<?php

use OTS\Core\{FH, H};
// error_reporting = (E_ALL & ~E_NOTICE);
/** @var TestCase $this */
?>
<?php $this->start('content');
?>
<div class="signin-form">
    <h2>Register</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet minus eum quas sequi veniam, libero nisi. Illum incidunt accusantium, sit quibusdam dolore sint magni, tempore quo, expedita non veniam doloribus.</p>
    <form action="" method="POST">
    <?= FH::csrfField() ?>
        <div class="control_container">
            <?= FH::inputBlock('Vorname', 'fname', $this->user->fname , ['class' => "input txt"], ['class' => 'control_group'], $this->errors) ?>
            <?= FH::inputBlock('Nachname', 'lname', $this->user->lname, ['class' => "input txt"], ['class' => 'control_group'], $this->errors) ?>
            <?= FH::inputBlock('Email', 'email', $this->user->email, ['class' => "input txt", 'type' => 'email'], ['class' => 'control_group'], $this->errors) ?>

            <?= FH::selectBlock('Role', 'acl', $this->user->acl, $this->role_options, ['class' => 'select'], ['class' => 'control_group'], $this->errors) ?>

            <?= FH::inputBlock('Passwort', 'password', $this->user->password, ['class'=> "input txt", 'type' => 'password'], ['class'=>"control_group"],$this->errors) ?>
            <?= FH::inputBlock('Passwort bestätigen', 'confirm', $this->user->confirm, ['class' => "input txt", 'type' => 'password'], ['class' => "control_group"], $this->errors) ?>
        </div>
        <div class="button_container">
            <a class="button" href="#">Cancel</a>
            <input class="button submit" type="submit" value="Save">
        </div>
        <?= FH::A("Der Link", "/bible", "Startseite"); ?>
    </form>
</div>
<?php $this->end() ?>
