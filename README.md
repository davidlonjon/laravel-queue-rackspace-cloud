RackspaceCloud Queue driver for Laravel
======================
WIP

####Installation

Require this package in your composer.json and run composer update:

	"davidlonjon/laravel-queue-rackspace-cloud": "dev-master"

After composer update is finished you need to add ServiceProvider to your `providers` array in `app.php`:

	YonderWeb\LaravelQueueRackspaceCloud\LaravelQueueRackspaceCloudServiceProvider::class,

Add these lines to your `app/config/queue.php` file to `connections` array:

	'RackspaceCloud' => [
		'driver' => 'RackspaceCloud',
		'queue' => env('RACKSPACECLOUD_QUEUE', 'default_tube'), // The default queue
		'endpoint' => env('RACKSPACECLOUD_ENDPOINT', 'US'), // US or UK
		'username' => env('RACKSPACECLOUD_USERNAME', 'guest'), // Some Rackspace Cloud username
		'apiKey' => env('RACKSPACECLOUD_APIKEY', '1234'), // Some Rackspace Cloud api
		'region' => env('RACKSPACECLOUD_REGION', 'DFW'), // The region the queue is setup
		'urlType'  => env('RACKSPACECLOUD_URLTYPE', 'internalURL'), /// Optional, defaults to internalURL
	],

And add these properties to `.env` with proper values:

	RACKSPACECLOUD_QUEUE=name_of_the_queue
	RACKSPACECLOUD_ENDPOINT=your_rackspace_endpoint
	RACKSPACECLOUD_USERNAME=your_rackspace_username
	RACKSPACECLOUD_APIKEY=your_rackspace_api_key
	RACKSPACECLOUD_REGION=your_rackspace_region

	QUEUE_DRIVER=RackspaceCloud

You can also find full examples in src/examples folder.

####Usage
Once you completed the configuration you can use Laravel Queue API. If you used other queue drivers you do not need to change anything else. If you do not know how to use Queue API, please refer to the official Laravel documentation: http://laravel.com/docs/queues

####PHPUnit
Unit tests will be provided soon.

####Contribution
You can contribute to this package by discovering bugs and opening issues. Enjoy!

####Attribution
This package has been guided and inspired by:
* https://github.com/vladimir-yuldashev/laravel-queue-rabbitmq
* https://github.com/tailwind/laravel-rackspace-cloudqueue

####Supported versions of Laravel/Lumen
TBC
