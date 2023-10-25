<?php

use Bref\Context\Context;
use Bref\Event\EventBridge\EventBridgeEvent;
use Bref\Event\EventBridge\EventBridgeHandler;

return new class extends EventBridgeHandler {
    public function handleEventBridge(EventBridgeEvent $event, Context $context): void {
        $this->log('event: ' . json_encode($event->toArray(), JSON_PRETTY_PRINT));
        $this->log('');
        $this->log('context: ' . json_encode($context, JSON_PRETTY_PRINT));
        $this->log('');
        
        $this->log("Start processing event with id " . $event->getId());

        sleep(10);

        $this->log('processing for event with id ' . $event->getId() . ' has been finished');
    }

    protected function log(string $message): void
    {
        echo $message . "\n";
    }
};