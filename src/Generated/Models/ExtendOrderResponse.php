<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The extended order: its id, and the checkout URL to follow when a hosted payment is needed.
*/
class ExtendOrderResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $orderId Unique order identifier.
    */
    private ?string $orderId = null;
    
    /**
     * @var string|null $returnUrl Checkout URL the caller should send the customer to, or null when none is needed.
    */
    private ?string $returnUrl = null;
    
    /**
     * Instantiates a new ExtendOrderResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExtendOrderResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExtendOrderResponse {
        return new ExtendOrderResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'orderId' => fn(ParseNode $n) => $o->setOrderId($n->getStringValue()),
            'returnUrl' => fn(ParseNode $n) => $o->setReturnUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the orderId property value. Unique order identifier.
     * @return string|null
    */
    public function getOrderId(): ?string {
        return $this->orderId;
    }

    /**
     * Gets the returnUrl property value. Checkout URL the caller should send the customer to, or null when none is needed.
     * @return string|null
    */
    public function getReturnUrl(): ?string {
        return $this->returnUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('orderId', $this->getOrderId());
        $writer->writeStringValue('returnUrl', $this->getReturnUrl());
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
     * Sets the orderId property value. Unique order identifier.
     * @param string|null $value Value to set for the orderId property.
    */
    public function setOrderId(?string $value): void {
        $this->orderId = $value;
    }

    /**
     * Sets the returnUrl property value. Checkout URL the caller should send the customer to, or null when none is needed.
     * @param string|null $value Value to set for the returnUrl property.
    */
    public function setReturnUrl(?string $value): void {
        $this->returnUrl = $value;
    }

}
