<?php
$file = file_get_contents('data.json');
$data = json_decode($file,true);

echo "<pre>";
print_r($data);
echo "</pre>";
?>