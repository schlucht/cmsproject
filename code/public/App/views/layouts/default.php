<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS?>">
    <title><?= $this->getSiteTitle()?></title>
    <script src="<?=JS?>" type="module"></script>
</head>
<body>
    <?php $this->content('header');?>
   <?php $this->content('content');?> 
</body>
</html>