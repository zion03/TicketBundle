<?php

namespace Hackzilla\Bundle\TicketBundle\Tests\User;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserManagerTest extends WebTestCase
{
    private $object;

    public function setUp()
    {
        $this->object = new \Hackzilla\Bundle\TicketBundle\Manager\UserManager(
            $this->getMockSecurity(),
            $this->getMockUserManager()
        );
    }

    private function getMockSecurity()
    {
        $security = $this->getMock('Symfony\Component\Security\Core\SecurityContextInterface');

        return $security;
    }

    private function getMockUserManager()
    {
        $userManager = $this->getMock('FOS\UserBundle\Model\UserManagerInterface');

        return $userManager;
    }

    public function tearDown()
    {
        unset($this->object);
    }

    public function testObjectCreated()
    {
        $this->assertTrue(\is_object($this->object));
    }
}
