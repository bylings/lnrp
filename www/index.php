<?php
$redis = new Redis();
$redis->connect('192.168.160.100', 6379);//serverip port
$redis ->set("test" , "Hello World PHP");
echo $redis ->get("test");
