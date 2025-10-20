<?php
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

$hostIP = '192.168.0.2';
$port = 12345;

$connect = socket_connect($socket, $hostIP, $port);

$message = "Hello Server, I am Castor, Franz - the Client";
socket_write($socket, $message, strlen($message));

$incomingMessage = socket_read($socket, 1024);
    echo "This is from Server: " . $incomingMessage . "\n";
?>
