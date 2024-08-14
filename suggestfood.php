<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://v1.genr.ai/api/circuit-element/prompt-to-text",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n  \"prompt\": \"Suggest best food for today from pizza,burger,noodle,shezwanrice,samosachat\",\n  \"max_tokens\": 1000,\n  \"temperature\": 0.5\n}",
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}