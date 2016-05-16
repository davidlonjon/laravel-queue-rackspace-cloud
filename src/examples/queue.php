<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Queue Driver
    |--------------------------------------------------------------------------
    |
    | The Laravel queue API supports a variety of back-ends via an unified
    | API, giving you convenient access to each back-end using the same
    | syntax for each one. Here you may set the default queue driver.
    |
    | Supported: "null", "sync", "database", "beanstalkd",
    |            "sqs", "iron", "redis"
    |
    */

    'default' => env('QUEUE_DRIVER', 'sync'),

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Here you may configure the connection information for each server that
    | is used by your application. A default configuration has been added
    | for each back-end shipped with Laravel. You are free to add more.
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'expire' => 60,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'ttr' => 60,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => 'your-public-key',
            'secret' => 'your-secret-key',
            'queue' => 'your-queue-url',
            'region' => 'us-east-1',
        ],

        'iron' => [
            'driver' => 'iron',
            'host' => 'mq-aws-us-east-1.iron.io',
            'token' => 'your-token',
            'project' => 'your-project-id',
            'queue' => 'your-queue-name',
            'encrypt' => true,
        ],

        'redis' => [
            'driver' => 'redis',
            'queue' => 'default',
            'expire' => 60,
        ],

        'RackspaceCloud' => [
           'driver' => 'RackspaceCloud',
            'queue' => env('RACKSPACECLOUD_QUEUE', 'your-queue-name'), // The default queue
            'endpoint' => env('RACKSPACECLOUD_ENDPOINT', 'your-endpoint'), // US or UK
            'username' => env('RACKSPACECLOUD_USERNAME', 'your-username'), // Some Rackspace Cloud username
            'apiKey' => env('RACKSPACECLOUD_APIKEY', 'your-api_key'), // Some Rackspace Cloud api key
            'region' => env('RACKSPACECLOUD_REGION', 'your-region'), // The region the queue is setup
            'urlType'  => env('RACKSPACECLOUD_URLTYPE', 'internalURL'), // Optional, defaults to internalURL
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of failed queue job logging so you
    | can control which database and table are used to store the jobs that
    | have failed. You may change them to any database / table you wish.
    |
    */

    'failed' => [
        'database' => 'mysql', 'table' => 'failed_jobs',
    ],

];
