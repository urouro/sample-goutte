<?php
date_default_timezone_set('Asia/Tokyo');

require_once('./vendor/autoload.php');

/**
 *  Export to browser's js console
 */
echo 'Export to browser\'s js console';
$logger = new Monolog\Logger('try-goutte');
$logger->pushHandler(new Monolog\Handler\BrowserConsoleHandler());

/** @var string */
$target = 'https://github.com/trending';

$client = new Goutte\Client();
$crawler = $client->request('GET', $target);

$crawler->filter('ol.repo-list > li.repo-list-item > h3.repo-list-name > a')->each(function ($node) use ($logger) {
  $logger->addDebug(str_replace(["\n", ' '], '', $node->text()));
});
