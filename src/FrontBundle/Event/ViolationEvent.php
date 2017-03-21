<?php

namespace FrontBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Request;

/**
 * The api.violation event is dispatched each time an the api is accessed without a referer
 */
class ViolationEvent extends Event
{
    const NAME = 'api.violation';

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function getRequest()
    {
        return $this->request;
    }
}