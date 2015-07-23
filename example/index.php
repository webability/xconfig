<?php

echo '<h1>XConfig examples</h1>';

include_once '../include/xconfig/XConfig.class.php';

$config = new XConfig(file_get_contents('myconfig.conf'));

echo 'content of $config:<br />';
var_dump($config);
echo '<br />';
echo '<br />';

echo 'get a parameter to a local variable:<br />';
$param1 = $config->parameter1;
echo $param1 . '<br />';
echo '<br />';

echo 'use directly a parameter into a sentence:<br />';
foreach($config->parameter2 as $p)
  echo $p . '<br />';
echo '<br />';

echo 'set a new parameter:<br />';
$config->parameter3 = 'value3';
echo '<br />';

echo 'new content of $config:<br />';
var_dump($config);
echo '<br />';
echo '<br />';

echo 'iterate the $config:<br />';
foreach($config as $parameter => $value)
  echo $parameter . ' = ' . $value . '<br />';
echo '<br />';
  
echo '<h2>Merge two config files:</h2>';

$globalconfig = new XConfig(file_get_contents('myglobalconfig.conf'));
$localconfig = new XConfig(file_get_contents('mylocalconfig.conf'));
$globalconfig->merge($localconfig);

echo 'Content of merged configuration:<br />';
var_dump($globalconfig);
echo '<br />';
echo '<br />';

?>