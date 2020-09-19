<?php
ob_start();
?>
<h1>Uudised (kategoorii)</h1>
<br>

<?php
ViewNew::NewsByCategory($arr);
$content = ob_get_clean();
include_once 'view/layout.php';
?>