<?php
header('Content-Type: application/json');
echo json_encode(["users" => ["id" => 1001, "name" => "John Doe", "email" => "john.doe@example.com"]]);
?>
