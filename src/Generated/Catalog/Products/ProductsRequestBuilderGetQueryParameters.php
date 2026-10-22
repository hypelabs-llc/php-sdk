<?php

namespace HypeLabs\Connect\Sdk\Generated\Catalog\Products;

/**
 * Returns the commercial catalog (products, pricing) enriched with available locations and ISPs. Options the organization has disabled are hidden unless includeDisabled is set.
*/
class ProductsRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $includeDisabled 
    */
    public ?bool $includeDisabled = null;
    
    /**
     * Instantiates a new ProductsRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $includeDisabled 
    */
    public function __construct(?bool $includeDisabled = null) {
        $this->includeDisabled = $includeDisabled;
    }

}
