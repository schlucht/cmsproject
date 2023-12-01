<?php $this->start('header'); 
use OTS\Core\{DB,H};
$this->partial('partials/mainMenu');
$this->end();
$pdo = DB::getInstance();
$pdo->query("SELECT * FROM users");
// H::dnd($pdo->results());
H::dnd($pdo->count());
?>

<?php $this->start('content'); ?>
<h1>Mein Bibel teil</h1>
<?php $this->end(); ?>