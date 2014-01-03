<?php

$file = $_GET['image']; 
readfile($file);
unlink($file);

?>