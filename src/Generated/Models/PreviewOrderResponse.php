<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The computed price for an order selection, before it is placed.
*/
class PreviewOrderResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $availableProxies How many proxies are available for the selection right now.
    */
    private ?int $availableProxies = null;
    
    /**
     * @var string|null $currency ISO 4217 currency code the amounts are expressed in.
    */
    private ?string $currency = null;
    
    /**
     * @var float|null $discount Amount saved versus paying monthly for the same duration. Null when there is no saving.
    */
    private ?float $discount = null;
    
    /**
     * @var float|null $discountPercent Saving as a percentage of the monthly-rate total, from 0 to 100. Null when there is no saving.
    */
    private ?float $discountPercent = null;
    
    /**
     * @var int|null $quantity Number of units in the selection.
    */
    private ?int $quantity = null;
    
    /**
     * @var float|null $subtotal Unit price multiplied by quantity, before any future discounts.
    */
    private ?float $subtotal = null;
    
    /**
     * @var float|null $total Final amount to charge (equals subtotal until discounts exist).
    */
    private ?float $total = null;
    
    /**
     * @var float|null $unitPrice Resolved price for a single unit.
    */
    private ?float $unitPrice = null;
    
    /**
     * Instantiates a new PreviewOrderResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PreviewOrderResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PreviewOrderResponse {
        return new PreviewOrderResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the availableProxies property value. How many proxies are available for the selection right now.
     * @return int|null
    */
    public function getAvailableProxies(): ?int {
        return $this->availableProxies;
    }

    /**
     * Gets the currency property value. ISO 4217 currency code the amounts are expressed in.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the discount property value. Amount saved versus paying monthly for the same duration. Null when there is no saving.
     * @return float|null
    */
    public function getDiscount(): ?float {
        return $this->discount;
    }

    /**
     * Gets the discountPercent property value. Saving as a percentage of the monthly-rate total, from 0 to 100. Null when there is no saving.
     * @return float|null
    */
    public function getDiscountPercent(): ?float {
        return $this->discountPercent;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availableProxies' => fn(ParseNode $n) => $o->setAvailableProxies($n->getIntegerValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'discount' => fn(ParseNode $n) => $o->setDiscount($n->getFloatValue()),
            'discountPercent' => fn(ParseNode $n) => $o->setDiscountPercent($n->getFloatValue()),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
            'subtotal' => fn(ParseNode $n) => $o->setSubtotal($n->getFloatValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getFloatValue()),
            'unitPrice' => fn(ParseNode $n) => $o->setUnitPrice($n->getFloatValue()),
        ];
    }

    /**
     * Gets the quantity property value. Number of units in the selection.
     * @return int|null
    */
    public function getQuantity(): ?int {
        return $this->quantity;
    }

    /**
     * Gets the subtotal property value. Unit price multiplied by quantity, before any future discounts.
     * @return float|null
    */
    public function getSubtotal(): ?float {
        return $this->subtotal;
    }

    /**
     * Gets the total property value. Final amount to charge (equals subtotal until discounts exist).
     * @return float|null
    */
    public function getTotal(): ?float {
        return $this->total;
    }

    /**
     * Gets the unitPrice property value. Resolved price for a single unit.
     * @return float|null
    */
    public function getUnitPrice(): ?float {
        return $this->unitPrice;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('availableProxies', $this->getAvailableProxies());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeFloatValue('discount', $this->getDiscount());
        $writer->writeFloatValue('discountPercent', $this->getDiscountPercent());
        $writer->writeIntegerValue('quantity', $this->getQuantity());
        $writer->writeFloatValue('subtotal', $this->getSubtotal());
        $writer->writeFloatValue('total', $this->getTotal());
        $writer->writeFloatValue('unitPrice', $this->getUnitPrice());
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
     * Sets the availableProxies property value. How many proxies are available for the selection right now.
     * @param int|null $value Value to set for the availableProxies property.
    */
    public function setAvailableProxies(?int $value): void {
        $this->availableProxies = $value;
    }

    /**
     * Sets the currency property value. ISO 4217 currency code the amounts are expressed in.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the discount property value. Amount saved versus paying monthly for the same duration. Null when there is no saving.
     * @param float|null $value Value to set for the discount property.
    */
    public function setDiscount(?float $value): void {
        $this->discount = $value;
    }

    /**
     * Sets the discountPercent property value. Saving as a percentage of the monthly-rate total, from 0 to 100. Null when there is no saving.
     * @param float|null $value Value to set for the discountPercent property.
    */
    public function setDiscountPercent(?float $value): void {
        $this->discountPercent = $value;
    }

    /**
     * Sets the quantity property value. Number of units in the selection.
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

    /**
     * Sets the subtotal property value. Unit price multiplied by quantity, before any future discounts.
     * @param float|null $value Value to set for the subtotal property.
    */
    public function setSubtotal(?float $value): void {
        $this->subtotal = $value;
    }

    /**
     * Sets the total property value. Final amount to charge (equals subtotal until discounts exist).
     * @param float|null $value Value to set for the total property.
    */
    public function setTotal(?float $value): void {
        $this->total = $value;
    }

    /**
     * Sets the unitPrice property value. Resolved price for a single unit.
     * @param float|null $value Value to set for the unitPrice property.
    */
    public function setUnitPrice(?float $value): void {
        $this->unitPrice = $value;
    }

}
