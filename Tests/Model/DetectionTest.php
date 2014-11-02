<?php

namespace CL\Tissue\Tests\Model;

use CL\Tissue\Model\Detection;

class DetectionTest extends \PHPUnit_Framework_TestCase
{
    public function testGetPath()
    {
        $path = 'foobar1.txt';
        $detection = new Detection($path);

        $this->assertEquals($path, $detection->getPath());
    }

    public function testGetType()
    {
        $path = 'foobar1.txt';
        $type = Detection::TYPE_VIRUS;
        $detection = new Detection($path, $type);

        $this->assertEquals($type, $detection->getType());
    }
}
