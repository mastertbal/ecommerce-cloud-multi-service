<?php
header('Content-Type: application/json');
echo json_encode(["orders" => ["id" => 101, "product_id" => 1, "user_id" => 1001]]);
?>
