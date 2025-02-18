<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    echo json_encode(["message" => "Hi Code invoking Successful"]);
} else {
    echo json_encode(["message" => "Invalid Request"]);
}
?>