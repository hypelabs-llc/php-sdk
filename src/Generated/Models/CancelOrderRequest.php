<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Cancels an order: how to end its billing and whether to refund.
*/
class CancelOrderRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $askRefund Request a refund of the latest payment, granted only when the order is still within its refund    window. Defaults to false.
    */
    private ?bool $askRefund = null;
    
    /**
     * @var bool|null $immediateCancellation End the order now instead of at the end of its paid period. False (the default) keeps it live until    its current expiry, then it lapses normally; true expires it immediately and releases its proxies.
    */
    private ?bool $immediateCancellation = null;
    
    /**
     * Instantiates a new CancelOrderRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CancelOrderRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CancelOrderRequest {
        return new CancelOrderRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the askRefund property value. Request a refund of the latest payment, granted only when the order is still within its refund    window. Defaults to false.
     * @return bool|null
    */
    public function getAskRefund(): ?bool {
        return $this->askRefund;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'askRefund' => fn(ParseNode $n) => $o->setAskRefund($n->getBooleanValue()),
            'immediateCancellation' => fn(ParseNode $n) => $o->setImmediateCancellation($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the immediateCancellation property value. End the order now instead of at the end of its paid period. False (the default) keeps it live until    its current expiry, then it lapses normally; true expires it immediately and releases its proxies.
     * @return bool|null
    */
    public function getImmediateCancellation(): ?bool {
        return $this->immediateCancellation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('askRefund', $this->getAskRefund());
        $writer->writeBooleanValue('immediateCancellation', $this->getImmediateCancellation());
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
     * Sets the askRefund property value. Request a refund of the latest payment, granted only when the order is still within its refund    window. Defaults to false.
     * @param bool|null $value Value to set for the askRefund property.
    */
    public function setAskRefund(?bool $value): void {
        $this->askRefund = $value;
    }

    /**
     * Sets the immediateCancellation property value. End the order now instead of at the end of its paid period. False (the default) keeps it live until    its current expiry, then it lapses normally; true expires it immediately and releases its proxies.
     * @param bool|null $value Value to set for the immediateCancellation property.
    */
    public function setImmediateCancellation(?bool $value): void {
        $this->immediateCancellation = $value;
    }

}
