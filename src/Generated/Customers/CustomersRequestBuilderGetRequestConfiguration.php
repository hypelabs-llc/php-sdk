<?php

namespace HypeLabs\Connect\Sdk\Generated\Customers;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CustomersRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CustomersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CustomersRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CustomersRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CustomersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CustomersRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CustomersRequestBuilderGetQueryParameters.
     * @param string|null $active Filter by active state.
     * @param string|null $country Filter by ISO 3166-1 alpha-2 country code.
     * @param string|null $emailVerified Filter by email-verified state.
     * @return CustomersRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $active = null, ?string $country = null, ?string $emailVerified = null): CustomersRequestBuilderGetQueryParameters {
        return new CustomersRequestBuilderGetQueryParameters($active, $country, $emailVerified);
    }

}
