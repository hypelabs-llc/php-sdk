<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Sets a customer's default allowed IPs and domains for its proxies. Each list is replaced wholesale with    what's provided (an empty list clears it).
*/
class PatchCustomerDefaultsRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $allowedDomains Domains the customer's proxies authorize by default (`*` allows all).
    */
    private ?array $allowedDomains = null;
    
    /**
     * @var array<string>|null $allowedIps IP addresses the customer's proxies authorize by default.
    */
    private ?array $allowedIps = null;
    
    /**
     * Instantiates a new PatchCustomerDefaultsRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PatchCustomerDefaultsRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PatchCustomerDefaultsRequest {
        return new PatchCustomerDefaultsRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedDomains property value. Domains the customer's proxies authorize by default (`*` allows all).
     * @return array<string>|null
    */
    public function getAllowedDomains(): ?array {
        return $this->allowedDomains;
    }

    /**
     * Gets the allowedIps property value. IP addresses the customer's proxies authorize by default.
     * @return array<string>|null
    */
    public function getAllowedIps(): ?array {
        return $this->allowedIps;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedDomains' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedDomains($val);
            },
            'allowedIps' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedIps($val);
            },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('allowedDomains', $this->getAllowedDomains());
        $writer->writeCollectionOfPrimitiveValues('allowedIps', $this->getAllowedIps());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the allowedDomains property value. Domains the customer's proxies authorize by default (`*` allows all).
     * @param array<string>|null $value Value to set for the allowedDomains property.
    */
    public function setAllowedDomains(?array $value): void {
        $this->allowedDomains = $value;
    }

    /**
     * Sets the allowedIps property value. IP addresses the customer's proxies authorize by default.
     * @param array<string>|null $value Value to set for the allowedIps property.
    */
    public function setAllowedIps(?array $value): void {
        $this->allowedIps = $value;
    }

}
