<?php

namespace HypeLabs\Connect\Sdk\Generated\Catalog\Products;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ProductsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ProductsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ProductsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ProductsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ProductsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ProductsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ProductsRequestBuilderGetQueryParameters.
     * @param bool|null $includeDisabled 
     * @return ProductsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $includeDisabled = null): ProductsRequestBuilderGetQueryParameters {
        return new ProductsRequestBuilderGetQueryParameters($includeDisabled);
    }

}
