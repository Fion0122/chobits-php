<?php
require __DIR__. '/__connect_db.php';

$stmt = $pdo->query("SELECT * FROM `address_book`");

?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>



