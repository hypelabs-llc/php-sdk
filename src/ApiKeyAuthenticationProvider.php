<?php

namespace HypeLabs\Connect\Sdk;

use Http\Promise\FulfilledPromise;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\Authentication\AuthenticationProvider;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Authenticates every request with the Connect API's `X-Api-Key` header. Kiota calls this before each outgoing
 * request; the key is supplied once when the client is created.
 */
class ApiKeyAuthenticationProvider implements AuthenticationProvider
{
    public function __construct(private readonly string $apiKey)
    {
    }

    public function authenticateRequest(RequestInformation $request, array $additionalAuthenticationContext = []): Promise
    {
        $request->tryAddHeader('X-Api-Key', $this->apiKey);
        return new FulfilledPromise(null);
    }
}
