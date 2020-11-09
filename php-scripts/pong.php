<?php

$ch = curl_init();

$data = '[{ "jsonrpc":"2.0","method":"ping","params":[], "id":13 }, {"jsonrpc":"2.0","method":"readmessage", "params":{"user" : 1} ,"id":2 }]';

curl_setopt($ch, CURLOPT_URL, "http://206.189.222.242/json-rpc");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$output = curl_exec($ch);
echo "$output \r\n";

curl_close($ch);




//curl 'http://206.189.222.242/json-rpc' --data-binary '[{ "jsonrpc":"2.0","method":"ping","params":[],"id" : 1 }]'