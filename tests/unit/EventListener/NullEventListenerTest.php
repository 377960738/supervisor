<?php

namespace Test\Unit;

use Indigo\Supervisor\EventListener\NullEventListener;

/**
 * Tests for Null EventListener
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 *
 * @coversDefaultClass Indigo\Supervisor\EventListener\NullEventListener
 */
class NullEventListenerTest extends AbstractEventListenerTest
{
    public function setUp()
    {
        $this->listener = new NullEventListener;
    }

    /**
     * @covers ::doListen
     * @group  Supervisor
     */
    public function testInstance()
    {
        $event = \Mockery::mock('Indigo\\Supervisor\\Event\\EventInterface');

        $this->assertEquals(0, $this->listener->doListen($event));
    }
}
