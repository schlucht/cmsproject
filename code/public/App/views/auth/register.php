<?php

use OTS\Core\FH;
// error_reporting = (E_ALL & ~E_NOTICE);
?>
<?php
$this->start('content'); ?>
<div>
    <h2>Register</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet minus eum quas sequi veniam, libero nisi. Illum incidunt accusantium, sit quibusdam dolore sint magni, tempore quo, expedita non veniam doloribus.</p>
    <form action="" method="POST">
        <div>

            <?= FH::inputBlock('Vorname', 'fname', '', ['class' => "input"], ['class' => ''], $this->errors) ?>
            <?= FH::inputBlock('Nachname', 'lname', '', ['class' => "input"], ['class' => ''], $this->errors) ?>
            <?= FH::inputBlock('Email', 'email', '', ['class' => "input"], ['type' => 'email'], $this->errors) ?>
            <?= FH::inputBlock('Email', 'email', '', ['class' => "input"], ['type' => 'email'], $this->errors) ?>
            <?= FH::selectBlock('Role', 'acl', '', $this->role_options, ['class' => ''], ['class' => ''], $this->errors) ?>
            <?= FH::inputBlock('Passwort', 'password', '', ['class' => "input"], ['type' => 'password'], $this->errors) ?>
            <?= FH::inputBlock('Passwort bestädigen', 'confirm_password', '', ['class' => "input"], ['type' => 'password'], $this->errors) ?>
        </div>
        <div>
            <a href="#">Cancel</a>
            <input type="submit">Speischern</input>
        </div>
        <?= FH::A("Der Link", "/bible", "Startseite"); ?>
    </form>
</div>
<?php $this->end() ?>
