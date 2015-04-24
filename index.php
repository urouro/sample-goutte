<?php
date_default_timezone_set('Asia/Tokyo');

require_once('./vendor/autoload.php');

function debug($arg)
{
    echo '<pre>';
    var_dump($arg);
    echo '</pre>';
}

try {
    $client = new Goutte\Client();
    $crawler = $client->request('GET', 'http://www.google.com');

} catch (Exception $e) {
    echo $e->getMessage();
}
