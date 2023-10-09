<?php

return [
    'http' => [
        // how many retries before we actually throw an exception?
        'retries' => 5,

        // on which status code we should consider retrying the request?
        'retry_on_status_code' => [],

        // before retrying a failed request, wait for the specified amount of time, in milliseconds
        'retry_delay' => 2000,

        // studio 360's default token
        'authorization_header_bearer_token' => env('STUDIO360_BEARER_TOKEN', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9zdHVkaW8zNjB0b3VyLmNvbVwvYXBpXC93ZWJcL3YyXC9sb2dpbiIsImlhdCI6MTYyNTUxMDA5OSwibmJmIjoxNjI1NTEwMDk5LCJqdGkiOiJYVmk1TzJrbkh5M05ydFoxIiwic3ViIjoyNTIxLCJwcnYiOiIxM2U4ZDAyOGIzOTFmM2I3YjYzZjIxOTMzZGJhZDQ1OGZmMjEwNzJlIn0.jZ3ydjEfY3JNND4c1qetlolx5anLYkGMjHJ-bkLGlpE'),

        // guzzle configuration, given to Guzzle instance as is
        'guzzle' => [
            'base_uri' => env( 'STUDIO360_BASE_URI', 'https://api-integration.studio360.app/v1/'),

            // Number of seconds to wait while trying to connect to a server. 0 waits indefinitely.
            'connect_timeout' => 0.0,

            // Time needed to throw a timeout exception after a request is made.
            'timeout' => 0.0,

            // Set this to true if you want to debug the request/response.
            'debug' => false,

            'middlewares' => [
                \Jetimob\Http\Middlewares\AuthorizationBearerRequestMiddleware::class
            ],
        ],
    ],
];
