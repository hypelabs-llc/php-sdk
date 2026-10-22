<?php

namespace HypeLabs\Connect\Sdk\Generated\Catalog\Locations;

/**
 * Returns the available locations (with their ISPs) for a product. Options the organization has disabled are hidden unless includeDisabled is set.
*/
class LocationsRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $includeDisabled Include options the organization has disabled (hidden by default).
    */
    public ?bool $includeDisabled = null;
    
    /**
     * @var string|null $productId Identifier of the product whose locations to list.
    */
    public ?string $productId = null;
    
    /**
     * Instantiates a new LocationsRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $includeDisabled Include options the organization has disabled (hidden by default).
     * @param string|null $productId Identifier of the product whose locations to list.
    */
    public function __construct(?bool $includeDisabled = null, ?string $productId = null) {
        $this->includeDisabled = $includeDisabled;
        $this->productId = $productId;
    }

}
