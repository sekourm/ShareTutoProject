<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KnpU\Guard\Tests;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use KnpU\Guard\GuardAuthenticatorHandler;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Http\SecurityEvents;

/**
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
class GuardAuthenticatorHandlerTest extends \PHPUnit_Framework_TestCase
{
    private $tokenStorage;
    private $dispatcher;
    private $token;
    private $request;
    private $guardAuthenticator;

    public function testAuthenticateWithToken()
    {
        $this->tokenStorage->expects($this->once())
            ->method('setToken')
            ->with($this->token);

        $loginEvent = new InteractiveLoginEvent($this->request, $this->token);

        $this->dispatcher
            ->expects($this->once())
            ->method('dispatch')
            ->with($this->equalTo(SecurityEvents::INTERACTIVE_LOGIN), $this->equalTo($loginEvent))
        ;

        $handler = new GuardAuthenticatorHandler($this->tokenStorage, $this->dispatcher);
        $handler->authenticateWithToken($this->token, $this->request);
    }

    public function testHandleAuthenticationSuccess()
    {
        $providerKey = 'my_handleable_firewall';
        $response = new Response('Guard all the things!');
        $this->guardAuthenticator->expects($this->once())
            ->method('onAuthenticationSuccess')
            ->with($this->request, $this->token, $providerKey)
            ->will($this->returnValue($response));

        $handler = new GuardAuthenticatorHandler($this->tokenStorage, $this->dispatcher);
        $actualResponse = $handler->handleAuthenticationSuccess($this->token, $this->request, $this->guardAuthenticator, $providerKey);
        $this->assertSame($response, $actualResponse);
    }

    public function testHandleAuthenticationFailure()
    {
        $this->tokenStorage->expects($this->once())
            ->method('setToken')
            ->with(null);
        $authException = new AuthenticationException('Bad password!');

        $response = new Response('Try again, but with the right password!');
        $this->guardAuthenticator->expects($this->once())
            ->method('onAuthenticationFailure')
            ->with($this->request, $authException)
            ->will($this->returnValue($response));

        $handler = new GuardAuthenticatorHandler($this->tokenStorage, $this->dispatcher);
        $actualResponse = $handler->handleAuthenticationFailure($authException, $this->request, $this->guardAuthenticator);
        $this->assertSame($response, $actualResponse);
    }

    protected function setUp()
    {
        $this->tokenStorage = $this->getMock('Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface');
        $this->dispatcher = $this->getMock('Symfony\Component\EventDispatcher\EventDispatcherInterface');
        $this->token = $this->getMock('Symfony\Component\Security\Core\Authentication\Token\TokenInterface');
        $this->request = new Request(array(), array(), array(), array(), array(), array());
        $this->guardAuthenticator = $this->getMock('KnpU\Guard\GuardAuthenticatorInterface');
    }

    protected function tearDown()
    {
        $this->tokenStorage = null;
        $this->dispatcher = null;
        $this->token = null;
        $this->request = null;
        $this->guardAuthenticator = null;
    }
}
