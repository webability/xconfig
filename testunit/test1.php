<?php

namespace testunit;

class XconfigTest extends \PHPUnit_Framework_TestCase
{
  public function testLoad()
  {
    $x = new \xconfig\XConfig();
    var_dump($x);
    $this->assertEquals('OK', 'OK');
  }
  public function testFail()
  {
    
            // Stop here and mark this test as incomplete.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
  }
}

?>