<?php

namespace Jetimob\Studio360\Api;

use Jetimob\Http\Request;

class AuthorizedRequest extends Request
{
    public function __construct($method, $uri, array $headers = [], $body = null)
    {
        parent::__construct($method, $uri, $headers, $body);
    }
}
