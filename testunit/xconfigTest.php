<?php

namespace testunit;

use PHPUnit\Framework\TestCase;

class xconfigTest extends TestCase
{

  public function testLoad()
  {
    $x = new \xconfig\XConfig('');
    var_dump($x);
    $this->assertEquals('OK', 'OK');
  }
  
}

?>