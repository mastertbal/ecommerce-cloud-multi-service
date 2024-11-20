<?php
header('Content-Type: application/json');
echo json_encode(["products" => ["id" => 1, "name" => "Sample Product", "price" => 99.99]]);
?>
