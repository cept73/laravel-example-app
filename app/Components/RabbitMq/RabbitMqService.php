<?php

namespace App\Components\RabbitMq;

use Bschmitt\Amqp\Amqp;
use Bschmitt\Amqp\Exception\Configuration;

class RabbitMqService
{
    /**
     * @throws Configuration
     */
    public static function sendMessage($data): ?bool
    {
        return (new Amqp())->publish('', json_encode($data), [
            'exchange'  => env('AMQP_QUEUE'),
        ]);
    }
}
