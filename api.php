<?php
$word = isset($_GET['word']) ? urlencode($_GET['word']) : 'defaultWord';
$ch = curl_init("https://api.dictionaryapi.dev/api/v2/entries/en/" . $word);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);

$response = curl_exec($ch);
curl_close($ch);

header("Content-Type: application/json");
echo $response;
?>
