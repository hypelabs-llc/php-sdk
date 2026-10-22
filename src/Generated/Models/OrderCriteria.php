<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Everything that narrows a product's price and stock: the order-cascade selection (Location → ISP → Datacenter),the required capabilities, and the billing cycle and payment method. Shared by the catalog facets and theorder flow. A null dimension widens the scope; it carries no validation itself. Callers enforce the chain(a level requires all its parents) with the catalog's chain guards.
*/
class OrderCriteria implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BillingCycles|null $billingCycle The billingCycle property
    */
    private ?BillingCycles $billingCycle = null;
    
    /**
     * @var array<CapabilityTypes>|null $capabilities Capabilities the product must provide to match.
    */
    private ?array $capabilities = null;
    
    /**
     * @var string|null $countryCode ISO 3166-1 alpha-2 country code of the selected location, resolved from Guid? OrderCriteria.LocationId so a country-level price row can match. Null until resolved.
    */
    private ?string $countryCode = null;
    
    /**
     * @var string|null $datacenterId Identifier of the selected datacenter in the order cascade.
    */
    private ?string $datacenterId = null;
    
    /**
     * @var string|null $ispId Identifier of the selected ISP in the order cascade.
    */
    private ?string $ispId = null;
    
    /**
     * @var string|null $locationId Identifier of the selected location in the order cascade.
    */
    private ?string $locationId = null;
    
    /**
     * @var PaymentMethods|null $paymentMethod The paymentMethod property
    */
    private ?PaymentMethods $paymentMethod = null;
    
    /**
     * @var string|null $productId Identifier of the product being priced or ordered.
    */
    private ?string $productId = null;
    
    /**
     * Instantiates a new OrderCriteria and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrderCriteria
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrderCriteria {
        return new OrderCriteria();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the billingCycle property value. The billingCycle property
     * @return BillingCycles|null
    */
    public function getBillingCycle(): ?BillingCycles {
        return $this->billingCycle;
    }

    /**
     * Gets the capabilities property value. Capabilities the product must provide to match.
     * @return array<CapabilityTypes>|null
    */
    public function getCapabilities(): ?array {
        return $this->capabilities;
    }

    /**
     * Gets the countryCode property value. ISO 3166-1 alpha-2 country code of the selected location, resolved from Guid? OrderCriteria.LocationId so a country-level price row can match. Null until resolved.
     * @return string|null
    */
    public function getCountryCode(): ?string {
        return $this->countryCode;
    }

    /**
     * Gets the datacenterId property value. Identifier of the selected datacenter in the order cascade.
     * @return string|null
    */
    public function getDatacenterId(): ?string {
        return $this->datacenterId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billingCycle' => fn(ParseNode $n) => $o->setBillingCycle($n->getEnumValue(BillingCycles::class)),
            'capabilities' => fn(ParseNode $n) => $o->setCapabilities($n->getCollectionOfEnumValues(CapabilityTypes::class)),
            'countryCode' => fn(ParseNode $n) => $o->setCountryCode($n->getStringValue()),
            'datacenterId' => fn(ParseNode $n) => $o->setDatacenterId($n->getStringValue()),
            'ispId' => fn(ParseNode $n) => $o->setIspId($n->getStringValue()),
            'locationId' => fn(ParseNode $n) => $o->setLocationId($n->getStringValue()),
            'paymentMethod' => fn(ParseNode $n) => $o->setPaymentMethod($n->getEnumValue(PaymentMethods::class)),
            'productId' => fn(ParseNode $n) => $o->setProductId($n->getStringValue()),
        ];
    }

    /**
     * Gets the ispId property value. Identifier of the selected ISP in the order cascade.
     * @return string|null
    */
    public function getIspId(): ?string {
        return $this->ispId;
    }

    /**
     * Gets the locationId property value. Identifier of the selected location in the order cascade.
     * @return string|null
    */
    public function getLocationId(): ?string {
        return $this->locationId;
    }

    /**
     * Gets the paymentMethod property value. The paymentMethod property
     * @return PaymentMethods|null
    */
    public function getPaymentMethod(): ?PaymentMethods {
        return $this->paymentMethod;
    }

    /**
     * Gets the productId property value. Identifier of the product being priced or ordered.
     * @return string|null
    */
    public function getProductId(): ?string {
        return $this->productId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('billingCycle', $this->getBillingCycle());
        $writer->writeCollectionOfEnumValues('capabilities', $this->getCapabilities());
        $writer->writeStringValue('countryCode', $this->getCountryCode());
        $writer->writeStringValue('datacenterId', $this->getDatacenterId());
        $writer->writeStringValue('ispId', $this->getIspId());
        $writer->writeStringValue('locationId', $this->getLocationId());
        $writer->writeEnumValue('paymentMethod', $this->getPaymentMethod());
        $writer->writeStringValue('productId', $this->getProductId());
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
     * Sets the billingCycle property value. The billingCycle property
     * @param BillingCycles|null $value Value to set for the billingCycle property.
    */
    public function setBillingCycle(?BillingCycles $value): void {
        $this->billingCycle = $value;
    }

    /**
     * Sets the capabilities property value. Capabilities the product must provide to match.
     * @param array<CapabilityTypes>|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?array $value): void {
        $this->capabilities = $value;
    }

    /**
     * Sets the countryCode property value. ISO 3166-1 alpha-2 country code of the selected location, resolved from Guid? OrderCriteria.LocationId so a country-level price row can match. Null until resolved.
     * @param string|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?string $value): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the datacenterId property value. Identifier of the selected datacenter in the order cascade.
     * @param string|null $value Value to set for the datacenterId property.
    */
    public function setDatacenterId(?string $value): void {
        $this->datacenterId = $value;
    }

    /**
     * Sets the ispId property value. Identifier of the selected ISP in the order cascade.
     * @param string|null $value Value to set for the ispId property.
    */
    public function setIspId(?string $value): void {
        $this->ispId = $value;
    }

    /**
     * Sets the locationId property value. Identifier of the selected location in the order cascade.
     * @param string|null $value Value to set for the locationId property.
    */
    public function setLocationId(?string $value): void {
        $this->locationId = $value;
    }

    /**
     * Sets the paymentMethod property value. The paymentMethod property
     * @param PaymentMethods|null $value Value to set for the paymentMethod property.
    */
    public function setPaymentMethod(?PaymentMethods $value): void {
        $this->paymentMethod = $value;
    }

    /**
     * Sets the productId property value. Identifier of the product being priced or ordered.
     * @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value): void {
        $this->productId = $value;
    }

}
