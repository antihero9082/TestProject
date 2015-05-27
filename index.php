<?php
header('Content-Type: text/plain');
$key = $_GET['memcache_key'];
$siteCache = $_GET['site_to_cache'];
if(!isset($key)) {
    echo 'No key provided =[';
    die();
}
$memcache = new Memcache();
$item = $memcache->get($key);
if(!$item) {
    echo 'No entry found for ' . $key . '. Creating...';
    $contents = sha1(mt_rand(0, 500));
    $memcache->set($key, $contents);
} else {
    echo 'Entry found for key! \n';
    echo $item;
}
