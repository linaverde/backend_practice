<?php

$ch = curl_init();

$userid = readline('input user id: ');

$data =  '{"jsonrpc":"2.0","method":"readmessage", "params":{"user" : '.$userid.'} ,"id":2 }';

curl_setopt($ch, CURLOPT_URL, "http://206.189.222.242/json-rpc");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$output = curl_exec($ch);
echo "$output \r\n";

curl_close($ch);
