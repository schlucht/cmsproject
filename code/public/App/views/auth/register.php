<?php use OTS\Core\FH;?>
<?php $this->start('content');?>
    <div>
        <h2>Register</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet minus eum quas sequi veniam, libero nisi. Illum incidunt accusantium, sit quibusdam dolore sint magni, tempore quo, expedita non veniam doloribus.</p>
        <form action="" method="POST">
            <div>
                
                <?= FH::inputBlock('Vorname', 'fname','',['class' =>"input"] , ['class'=>''], $this->errors) ?>
                <?= FH::inputBlock('Nachname', 'lname','',['class' =>"input"] , ['class'=>''], $this->errors) ?>
            </div>
            <?= FH::A("Der Link", "/bible", "Startseite"); ?>
        </form>
    </div>
<?php $this->end() ?>