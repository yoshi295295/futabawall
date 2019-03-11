<?php
$a = glob("bimg/*");
header("Location: ".$a[array_rand($a)]);
?>