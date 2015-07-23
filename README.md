The XConfig library is used to easily build a config object based on a descriptor file.

The configuration file have the following syntax for example:


# this file is named myconfig.conf, used in following examples
# the # denotes a comment.
parameter1=value1
parameter2=value2
parameter2=value3


This will be converted into the XConfig object.
The XConfig object is easily usable as:

$config = new XConfig('String of the config file');

or

$config = new XConfig(Array of parameters);

Concrete Example 1:

include_once 'include/xconfig/xconfig/XConfig.class.php');
$config = new XConfig(file_get_contents('myconfig.conf'));

Concrete Example 2:

include_once 'include/xconfig/xconfig/XConfig.class.php');
$config = new XConfig(array(
    'parameter1' => 'value1',
    'parameter2' => array('value2', 'value3')
  ));

Once you have an instance of your configuration, you may use it like this:

// assign a local variable
$param1 = $config->parameter1;
echo $param1 . '<br />';

// use directly the variable
foreach($config->parameter2 as $p)
  echo $p . '<br />';

// set a new parameter
$config->parameter3 = 'value3';

// iterate the config
foreach($config as $parameter => $value)
  echo $parameter . ' = ' . $value . '<br />';
  

Advanced topic
--------------

You may merge two config file (or more), for example when you have a master config file and a local replacement values config file:

include_once 'include/xconfig/xconfig/XConfig.class.php');
$globalconfig = new XConfig(file_get_contents('myglobalconfig.conf'));
$localconfig = new XConfig(file_get_contents('mylocalconfig.conf'));
$globalconfig->merge($localconfig);

with files:

#global config:
ip=127.0.0.1
port=80
domain=test.com

#local config:
port=8080
title=Welcome

The result config after merging local into global will be:
ip=127.0.0.1
port=8080
domain=test.com
title=Welcome

---
