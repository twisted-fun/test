<?php 
$file = file_get_contents('./index.php', true);
echo base64_encode($file); 
?>
