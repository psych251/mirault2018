<?php
header('Access-Control-Allow-Origin: web.stanford.edu/*');
$post_data = json_decode(file_get_contents('php://input'), true);
$name = "data/".$post_data['filename'];
$data = $post_data['filedata'];
file_put_contents($name, $data, FILE_APPEND);
?>
