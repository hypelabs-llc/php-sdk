<p align="center">
  <img src="https://hypelabs.llc/logo.png" height="100" alt="HypeLabs" />
</p>
<h3 align="center">
  HypeLabs Connect SDK
</h3>
<p align="center">
  The PHP client for the HypeLabs Connect API.
</p>
<p align="center">
  <a href="https://packagist.org/packages/hypelabs-llc/connect"><img src="https://img.shields.io/packagist/v/hypelabs-llc/connect?color=f28d1a&label=packagist" /></a>
  <a href="https://packagist.org/packages/hypelabs-llc/connect"><img src="https://img.shields.io/packagist/dt/hypelabs-llc/connect?color=f28d1a&label=Downloads" /></a>
  <a href="https://connect.hypelabs.network"><img src="https://img.shields.io/badge/API-connect.hypelabs.network-6366f1" /></a>
  <a href="https://learn.microsoft.com/openapi/kiota/"><img src="https://img.shields.io/badge/Generated%20With-Kiota-0078d4" /></a>
  <a href="LICENSE"><img src="https://img.shields.io/badge/License-MIT-lightgrey.svg" /></a>
</p>

## Requirements

- PHP 8.1 or later
- A HypeLabs Connect API key (`hl_live_…`)

> The client authenticates with an API key, so run it **server-side** (a backend or a job) — never ship your
> key to a browser or a client app.

## Install

1. **Add the package:**

   ```bash
   composer require hypelabs-llc/connect
   ```

2. **Create your organization** on the [HypeLabs Console](https://console.hypelabs.network/?utm_source=github&utm_medium=readme&utm_campaign=php-sdk) and generate an API key.

## Usage

Create a client with your API key and call the API. Every call returns a promise resolving to typed models.

```php
<?php

require 'vendor/autoload.php';

use function HypeLabs\Connect\Sdk\createConnectClient;

$client = createConnectClient(getenv('CONNECT_API_KEY'));

$proxies = $client->proxies()->get()->wait();
foreach ($proxies ?? [] as $proxy) {
    echo $proxy->getId() . PHP_EOL;
}
```

The API is authenticated with the `X-Api-Key` header, wired up internally — you never touch the Kiota plumbing.
