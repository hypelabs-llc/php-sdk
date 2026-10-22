<?php

namespace HypeLabs\Connect\Sdk\Generated\Catalog\Isps;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IspsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IspsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IspsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IspsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IspsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IspsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IspsRequestBuilderGetQueryParameters.
     * @param bool|null $includeDisabled Include options the organization has disabled (hidden by default).
     * @param string|null $locationId Identifier of the selected location.
     * @param string|null $productId Identifier of the product being priced.
     * @return IspsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $includeDisabled = null, ?string $locationId = null, ?string $productId = null): IspsRequestBuilderGetQueryParameters {
        return new IspsRequestBuilderGetQueryParameters($includeDisabled, $locationId, $productId);
    }

}
