<?php
$arr = ['a', 'b', 'c'];

if (isset($_GET['key'])) {
    $key = $_GET['key'];

    if (isset($arr[$key])) {
        echo $arr[$key];
    } else {
        http_response_code(404);
        // отдать 404
        echo 'Not Found';
    }
} else {
    http_response_code(403);
    // отдать 403
    echo 'Forbidden';
}
