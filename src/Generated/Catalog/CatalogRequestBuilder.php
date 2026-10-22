<?php

namespace HypeLabs\Connect\Sdk\Generated\Catalog;

use HypeLabs\Connect\Sdk\Generated\Catalog\Capabilities\CapabilitiesRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Catalog\Datacenters\DatacentersRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Catalog\Isps\IspsRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Catalog\Locations\LocationsRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Catalog\Products\ProductsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /catalog
*/
class CatalogRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The capabilities property
    */
    public function capabilities(): CapabilitiesRequestBuilder {
        return new CapabilitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The datacenters property
    */
    public function datacenters(): DatacentersRequestBuilder {
        return new DatacentersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The isps property
    */
    public function isps(): IspsRequestBuilder {
        return new IspsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The locations property
    */
    public function locations(): LocationsRequestBuilder {
        return new LocationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The products property
    */
    public function products(): ProductsRequestBuilder {
        return new ProductsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CatalogRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/catalog');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
