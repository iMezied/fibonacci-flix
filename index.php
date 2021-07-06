<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use src\Services\Fibonacci;

// set the header of the response to be json and avoid CORS restriction
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

try {
    // check request to find out the required value of fibonaccia for n
    $number = $_GET['number'] ?? 10;
    // get the value from the fibonacci class
    $fibonacci = (new Fibonacci())->getNumber($number);

    // assign status 200 to the response
    http_response_code(200);
    // encode the response into json format
    echo json_encode($fibonacci);
} catch (Exception $exception) {
    http_response_code(400);
    echo json_encode($exception->getMessage());
}
