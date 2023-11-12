<?php
$url = 'http://localhost/api/';

$curl = curl_init();
$request = "{
                'name': 'login',
                'param': {
                    'username': 'john123',
                    'password': 'johnPassword'
                }
            }";

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($curl, CURLOPT_POSTFIELDS, $request);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($curl);
$error = curl_error($curl);

if ($error) {
    echo 'Curl error: ' . $error;
} else {
    header('Content-Type: application/json');
    $response = json_decode($result, true);
}

curl_close($curl);

// Here you call your second API as above!
// copy & paste them right below this line
