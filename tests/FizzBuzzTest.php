<?php

namespace Kenjis\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FizzBuzz
     */
    protected $skeleton;

    protected function setUp()
    {
        parent::setUp();
        $this->skeleton = new FizzBuzz;
    }

    public function testNew()
    {
        $actual = $this->skeleton;
        $this->assertInstanceOf('\Kenjis\FizzBuzz\FizzBuzz', $actual);
    }

    public function testException()
    {
        $this->setExpectedException('\Kenjis\FizzBuzz\Exception\LogicException');
        throw new Exception\LogicException;
    }
}
