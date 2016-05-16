<?php

namespace YonderWeb\LaravelQueueRackspaceCloud;

use Illuminate\Support\ServiceProvider;
use YonderWeb\LaravelQueueRackspaceCloud\Queue\Connectors\RackspaceCloudConnector;

class LaravelQueueRackspaceCloudServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/rackspace_cloud.php', 'queue.connections.RackspaceCloud'
        );
    }

    /**
     * Register the application's event listeners.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * @var \Illuminate\Queue\QueueManager $manager
         */
        $manager = $this->app['queue'];
        $manager->addConnector('RackspaceCloud', function () {
            return new RackspaceCloudConnector;
        });
    }
}