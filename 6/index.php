<?php

header("content-type:text/html;charset=utf-8");
$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : '';
if($ip == '172.16.1.100'){
echo 'flag{ipsrc}';
}else{
echo '只允许IP为172.16.1.100的地址访问';
}

?>
