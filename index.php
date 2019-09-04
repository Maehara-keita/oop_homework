<?php
require_once('app.php');
require_once('twitter.php');

$twitter = new Twitter('Twitter','前原');
echo '<br><br><br>';

$twitter->pushSound();
echo '<br><br><br>';


//echo 'アイコンは'.$twitter->pic.'です';
echo '<br><br><br>';

echo $twitter->name.'です';
echo '<br><br><br>';

$twitter->back();

echo '<br><br><br>';


?>
