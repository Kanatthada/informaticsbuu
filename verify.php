<?php
$access_token = 'Dx2ibKGAQJlLOe1fGnIPzZoaThcaEIBVOfD+vAjx4DyQOKy/hlvJMbKENA1ir8AM2mWcXnhg+MTxhqKgZxmu1NLRpQkAyVIbgoJOhR3LT/ClDTHYuR9xWX0ffUNufxc1gPqhLv1ehsVVgvqll0dNsgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
