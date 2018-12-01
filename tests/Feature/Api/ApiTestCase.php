<?php

namespace Tests\Feature\Api;

use Tests\TestCase;

class ApiTestCase extends TestCase
{
    protected function headers(array $userHeader = []): array
    {
        return array_merge([
            'Accept' => 'application/json',
        ], $userHeader);
    }
}
