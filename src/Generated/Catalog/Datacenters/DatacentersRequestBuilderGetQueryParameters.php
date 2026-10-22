<?php

namespace HypeLabs\Connect\Sdk\Generated\Catalog\Datacenters;

/**
 * Returns the available datacenters for a product, location and ISP.
*/
class DatacentersRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $ispId Identifier of the selected ISP.
    */
    public ?string $ispId = null;
    
    /**
     * @var string|null $locationId Identifier of the selected location.
    */
    public ?string $locationId = null;
    
    /**
     * @var string|null $productId Identifier of the product being priced.
    */
    public ?string $productId = null;
    
    /**
     * Instantiates a new DatacentersRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $ispId Identifier of the selected ISP.
     * @param string|null $locationId Identifier of the selected location.
     * @param string|null $productId Identifier of the product being priced.
    */
    public function __construct(?string $ispId = null, ?string $locationId = null, ?string $productId = null) {
        $this->ispId = $ispId;
        $this->locationId = $locationId;
        $this->productId = $productId;
    }

}
