<?php

namespace spec\Omniphx\Forrest\Providers\Laravel;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LaravelRedirectSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Omniphx\Forrest\Providers\Laravel\LaravelRedirect');
    }
}
