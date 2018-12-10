<?php

$http_client_ip = $SERVER['HTTP_CLIENT_IP'];
echo '<h3>$http_client_ip is: '.$http_client_ip.'<h3>';

$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
echo '<h3>$http_x_forwarded_for is:'.$http_x_forwarded_for.'<h3>';

$remote_addr = $_SERVER['REMOTE_ADDR'];
echo '<h3>$remote_addr is: '.$remote_addr.'<h3>';

//01. If the variable statement above is not empty, then the if statement proceeds. The ip_address variable is declared for the client ip, the proxy ip and the final ip address if everything else comes back false.

if (!empty($http_client_ip)) {
  $ip_address = $http_client_ip;	
} else if (!empty($http_x_forwarded_for)) {
  $ip_address = $http_x_forwarded_for;
} else {
  $ip_address = $remote_addr;	
}

echo '<h3> $ip_address is: '.$ip_address.'</h3>';

?>