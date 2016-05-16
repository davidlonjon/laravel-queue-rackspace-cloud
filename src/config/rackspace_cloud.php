<?php

/**
 * default configuration for laravel-queue-RackspaceCloud merged with project config to base key 'queue'
 */
return [

    'driver' => 'RackspaceCloud',
    'queue' => env('RACKSPACECLOUD_QUEUE', 'your-queue-name'), // The default queue
    'endpoint' => env('RACKSPACECLOUD_ENDPOINT', 'your-endpoint'), // US or UK
    'username' => env('RACKSPACECLOUD_USERNAME', 'your-username'), // Some Rackspace Cloud username
    'apiKey' => env('RACKSPACECLOUD_APIKEY', 'your-api_key'), // Some Rackspace Cloud api key
    'region' => env('RACKSPACECLOUD_REGION', 'your-region'), // The region the queue is setup
    'urlType'  => env('RACKSPACECLOUD_URLTYPE', 'internalURL'), // Optional, defaults to internalURL

];