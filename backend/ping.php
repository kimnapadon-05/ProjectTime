<?php
header('Content-Type: application/json');
// Simple health check to verify backend reachable without DB/session
echo json_encode([
    'status' => 'ok',
    'script' => __FILE__,
    'time' => date('c')
]);
?>