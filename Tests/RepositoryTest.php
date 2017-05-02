<?php
require_once 'Repository.php';
class RepositoryTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    function GetHelloWorld()
    {
        $repository = new Repository();
        $actual     = $repository->getName();
        $this->assertThat($actual, $this->equalTo('s-hiroshi/travis-example'));
    }
}
