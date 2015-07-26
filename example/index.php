<?php

echo '<h1>XConfig examples</h1>';

include_once '../include/xconfig/XConfig.class.php';

$config = new XConfig(file_get_contents('myconfig.conf'), array('defparam1' => 'defvalue1', 'defparam2' => 'defvalue2', 'defparam3' => 'defvalue3'));

echo '<h2>content of $config:</h2>';
print $config;
echo '<br />';

echo '<h3>get a parameter to a local variable:</h3>';
$param1 = $config->parameter1;
echo $param1 . '<br />';
echo '<br />';

echo '<h3>use directly a parameter into a sentence:</h3>';
foreach($config->parameter2 as $p)
  echo $p . '<br />';
echo '<br />';

echo '<h3>set a new parameter:</h3>';
echo 'parameter3=value3<br />';
$config->parameter3 = 'value3';
echo '<br />';

echo '<h3>new content of $config:</h3>';
print $config;
echo '<br />';

echo '<h3>iterate the $config:</h3>';
print $config;
echo '<br />';
  
echo '<h2>Merge two config files:</h2>';

$globalconfig = new XConfig(file_get_contents('myglobalconfig.conf'));
$localconfig = new XConfig(file_get_contents('mylocalconfig.conf'));
$globalconfig->merge($localconfig);

echo '<h3>Content of merged configuration:</h3>';
print $globalconfig;
echo '<br />';

?>