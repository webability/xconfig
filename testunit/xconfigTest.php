<?php

namespace testunit;

require_once 'PHPUnit/Autoload.php';

class xconfigTest extends \PHPUnit_Framework_TestCase
{

  public function testLoad()
  {
    $x = new \xconfig\XConfig('');
    var_dump($x);
    $this->assertEquals('OK', 'OK');
  }
  
}

?>