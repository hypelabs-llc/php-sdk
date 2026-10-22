<?php

namespace HypeLabs\Connect\Sdk;

use HypeLabs\Connect\Sdk\Generated\ConnectApiClient;
use InvalidArgumentException;
use Microsoft\Kiota\Bundle\DefaultRequestAdapter;

/**
 * The entry point to the HypeLabs Connect API. Create one with your API key and use the fluent request builders
 * it returns: `$client->proxies()->get()`, `$client->customers()->post(...)`, and so on.
 *
 * ```php
 * $client = createConnectClient('hl_live_...');
 * $proxies = $client->proxies()->get()->wait();
 * ```
 *
 * The request adapter and the `X-Api-Key` authentication are wired up internally, so callers never touch the
 * generated Kiota plumbing directly.
 */
function createConnectClient(string $apiKey): ConnectApiClient
{
    if (trim($apiKey) === '') {
        throw new InvalidArgumentException('An API key is required.');
    }

    $adapter = new DefaultRequestAdapter(new ApiKeyAuthenticationProvider($apiKey));
    return new ConnectApiClient($adapter);
}
