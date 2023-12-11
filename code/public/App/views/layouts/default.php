<?php

/** @var TestCase $this */

use OTS\Core\Config;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS ?>">
    <title><?= $this->getSiteTitle() ?></title>
    <script src="<?= JS ?>" type="module"></script>
    <?php $this->content('head'); ?>
</head>

<body>
    <?php $this->partial('partials/header');
    ?>
        <main>
            <?php $this->content('content'); ?>
        </main>
    <?php $this->partial('partials/footer');?>
</body>

</html>
