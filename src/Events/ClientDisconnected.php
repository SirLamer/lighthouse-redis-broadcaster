<?php

namespace thekonz\LighthouseRedisBroadcaster\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Nuwave\Lighthouse\Subscriptions\Subscriber;

class ClientDisconnected
{
  use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var Subscriber
     */
    public $subscriber;

    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }
}
