<?php 
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

$hostIP = '192.168.0.2';
$port = 12345;

$result = socket_bind($socket, $hostIP, $port);
$result = socket_listen($socket, 3);
    echo "Waiting for connections...";

$accept = socket_accept($socket);

$message = "Hello Client, I am Castor, Franz - the Server";
socket_write($accept, $message, strlen($message));

$incomingMessage = socket_read($accept, 1024);
    echo "This is from Client: " . $incomingMessage . "\n";

socket_close($socket);
?>
