<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Order request: the same selection as a price preview, plus whether it auto-renews.
*/
class CreateOrderRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var OrderCriteria|null $criteria Priced selection the order is placed against.
    */
    private ?OrderCriteria $criteria = null;
    
    /**
     * @var string|null $customerId The organization's end customer this order is for. Required for a retail order (it bills that customer on    the organization's connected account); must be null for wholesale (the organization itself is billed).
    */
    private ?string $customerId = null;
    
    /**
     * @var string|null $externalReference Your own reference for this order, unique within your organization. Attach it to make creation    idempotent: a request that times out can be safely retried with the same reference and returns the order that    was already placed instead of creating a duplicate. Optional.
    */
    private ?string $externalReference = null;
    
    /**
     * @var OrderIntents|null $intent The intent property
    */
    private ?OrderIntents $intent = null;
    
    /**
     * @var bool|null $isAutoRenew Whether the order renews itself for another billing cycle at expiry instead of lapsing. Defaults to false.
    */
    private ?bool $isAutoRenew = null;
    
    /**
     * @var int|null $quantity Number of units to order. Defaults to 1.
    */
    private ?int $quantity = null;
    
    /**
     * Instantiates a new CreateOrderRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateOrderRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateOrderRequest {
        return new CreateOrderRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the criteria property value. Priced selection the order is placed against.
     * @return OrderCriteria|null
    */
    public function getCriteria(): ?OrderCriteria {
        return $this->criteria;
    }

    /**
     * Gets the customerId property value. The organization's end customer this order is for. Required for a retail order (it bills that customer on    the organization's connected account); must be null for wholesale (the organization itself is billed).
     * @return string|null
    */
    public function getCustomerId(): ?string {
        return $this->customerId;
    }

    /**
     * Gets the externalReference property value. Your own reference for this order, unique within your organization. Attach it to make creation    idempotent: a request that times out can be safely retried with the same reference and returns the order that    was already placed instead of creating a duplicate. Optional.
     * @return string|null
    */
    public function getExternalReference(): ?string {
        return $this->externalReference;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'criteria' => fn(ParseNode $n) => $o->setCriteria($n->getObjectValue([OrderCriteria::class, 'createFromDiscriminatorValue'])),
            'customerId' => fn(ParseNode $n) => $o->setCustomerId($n->getStringValue()),
            'externalReference' => fn(ParseNode $n) => $o->setExternalReference($n->getStringValue()),
            'intent' => fn(ParseNode $n) => $o->setIntent($n->getEnumValue(OrderIntents::class)),
            'isAutoRenew' => fn(ParseNode $n) => $o->setIsAutoRenew($n->getBooleanValue()),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the intent property value. The intent property
     * @return OrderIntents|null
    */
    public function getIntent(): ?OrderIntents {
        return $this->intent;
    }

    /**
     * Gets the isAutoRenew property value. Whether the order renews itself for another billing cycle at expiry instead of lapsing. Defaults to false.
     * @return bool|null
    */
    public function getIsAutoRenew(): ?bool {
        return $this->isAutoRenew;
    }

    /**
     * Gets the quantity property value. Number of units to order. Defaults to 1.
     * @return int|null
    */
    public function getQuantity(): ?int {
        return $this->quantity;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('criteria', $this->getCriteria());
        $writer->writeStringValue('customerId', $this->getCustomerId());
        $writer->writeStringValue('externalReference', $this->getExternalReference());
        $writer->writeEnumValue('intent', $this->getIntent());
        $writer->writeBooleanValue('isAutoRenew', $this->getIsAutoRenew());
        $writer->writeIntegerValue('quantity', $this->getQuantity());
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
     * Sets the criteria property value. Priced selection the order is placed against.
     * @param OrderCriteria|null $value Value to set for the criteria property.
    */
    public function setCriteria(?OrderCriteria $value): void {
        $this->criteria = $value;
    }

    /**
     * Sets the customerId property value. The organization's end customer this order is for. Required for a retail order (it bills that customer on    the organization's connected account); must be null for wholesale (the organization itself is billed).
     * @param string|null $value Value to set for the customerId property.
    */
    public function setCustomerId(?string $value): void {
        $this->customerId = $value;
    }

    /**
     * Sets the externalReference property value. Your own reference for this order, unique within your organization. Attach it to make creation    idempotent: a request that times out can be safely retried with the same reference and returns the order that    was already placed instead of creating a duplicate. Optional.
     * @param string|null $value Value to set for the externalReference property.
    */
    public function setExternalReference(?string $value): void {
        $this->externalReference = $value;
    }

    /**
     * Sets the intent property value. The intent property
     * @param OrderIntents|null $value Value to set for the intent property.
    */
    public function setIntent(?OrderIntents $value): void {
        $this->intent = $value;
    }

    /**
     * Sets the isAutoRenew property value. Whether the order renews itself for another billing cycle at expiry instead of lapsing. Defaults to false.
     * @param bool|null $value Value to set for the isAutoRenew property.
    */
    public function setIsAutoRenew(?bool $value): void {
        $this->isAutoRenew = $value;
    }

    /**
     * Sets the quantity property value. Number of units to order. Defaults to 1.
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

}
