<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Internet service provider a proxy routes through.
*/
class Isp implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $availableProxies Count of proxies currently available (active and unallocated) behind this option.
    */
    private ?int $availableProxies = null;
    
    /**
     * @var float|null $basePrice Catalog list price of the option, before the organization's commercial terms. Shown as the struck-through reference next to decimal CatalogOption.Price.
    */
    private ?float $basePrice = null;
    
    /**
     * @var string|null $id Unique identifier of the catalog option.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isDisabled Whether the current organization has hidden this option from its storefront.
    */
    private ?bool $isDisabled = null;
    
    /**
     * @var string|null $logoUrl Absolute URL of the ISP logo, null when none is set.
    */
    private ?string $logoUrl = null;
    
    /**
     * @var string|null $name Display name of the option (ISP, datacenter, capability or product name; a location uses its city or country).
    */
    private ?string $name = null;
    
    /**
     * @var float|null $price Price the organization pays for this option: its custom override when set, otherwise the base price after its reseller discount.
    */
    private ?float $price = null;
    
    /**
     * @var float|null $retailPrice Price the organization resells this option at to its own customers (its decimal CatalogOption.Price plus margin), shown on the white-label store.
    */
    private ?float $retailPrice = null;
    
    /**
     * Instantiates a new Isp and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Isp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Isp {
        return new Isp();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the availableProxies property value. Count of proxies currently available (active and unallocated) behind this option.
     * @return int|null
    */
    public function getAvailableProxies(): ?int {
        return $this->availableProxies;
    }

    /**
     * Gets the basePrice property value. Catalog list price of the option, before the organization's commercial terms. Shown as the struck-through reference next to decimal CatalogOption.Price.
     * @return float|null
    */
    public function getBasePrice(): ?float {
        return $this->basePrice;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availableProxies' => fn(ParseNode $n) => $o->setAvailableProxies($n->getIntegerValue()),
            'basePrice' => fn(ParseNode $n) => $o->setBasePrice($n->getFloatValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isDisabled' => fn(ParseNode $n) => $o->setIsDisabled($n->getBooleanValue()),
            'logoUrl' => fn(ParseNode $n) => $o->setLogoUrl($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getFloatValue()),
            'retailPrice' => fn(ParseNode $n) => $o->setRetailPrice($n->getFloatValue()),
        ];
    }

    /**
     * Gets the id property value. Unique identifier of the catalog option.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isDisabled property value. Whether the current organization has hidden this option from its storefront.
     * @return bool|null
    */
    public function getIsDisabled(): ?bool {
        return $this->isDisabled;
    }

    /**
     * Gets the logoUrl property value. Absolute URL of the ISP logo, null when none is set.
     * @return string|null
    */
    public function getLogoUrl(): ?string {
        return $this->logoUrl;
    }

    /**
     * Gets the name property value. Display name of the option (ISP, datacenter, capability or product name; a location uses its city or country).
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the price property value. Price the organization pays for this option: its custom override when set, otherwise the base price after its reseller discount.
     * @return float|null
    */
    public function getPrice(): ?float {
        return $this->price;
    }

    /**
     * Gets the retailPrice property value. Price the organization resells this option at to its own customers (its decimal CatalogOption.Price plus margin), shown on the white-label store.
     * @return float|null
    */
    public function getRetailPrice(): ?float {
        return $this->retailPrice;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('availableProxies', $this->getAvailableProxies());
        $writer->writeFloatValue('basePrice', $this->getBasePrice());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isDisabled', $this->getIsDisabled());
        $writer->writeStringValue('logoUrl', $this->getLogoUrl());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeFloatValue('price', $this->getPrice());
        $writer->writeFloatValue('retailPrice', $this->getRetailPrice());
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
     * Sets the availableProxies property value. Count of proxies currently available (active and unallocated) behind this option.
     * @param int|null $value Value to set for the availableProxies property.
    */
    public function setAvailableProxies(?int $value): void {
        $this->availableProxies = $value;
    }

    /**
     * Sets the basePrice property value. Catalog list price of the option, before the organization's commercial terms. Shown as the struck-through reference next to decimal CatalogOption.Price.
     * @param float|null $value Value to set for the basePrice property.
    */
    public function setBasePrice(?float $value): void {
        $this->basePrice = $value;
    }

    /**
     * Sets the id property value. Unique identifier of the catalog option.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isDisabled property value. Whether the current organization has hidden this option from its storefront.
     * @param bool|null $value Value to set for the isDisabled property.
    */
    public function setIsDisabled(?bool $value): void {
        $this->isDisabled = $value;
    }

    /**
     * Sets the logoUrl property value. Absolute URL of the ISP logo, null when none is set.
     * @param string|null $value Value to set for the logoUrl property.
    */
    public function setLogoUrl(?string $value): void {
        $this->logoUrl = $value;
    }

    /**
     * Sets the name property value. Display name of the option (ISP, datacenter, capability or product name; a location uses its city or country).
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the price property value. Price the organization pays for this option: its custom override when set, otherwise the base price after its reseller discount.
     * @param float|null $value Value to set for the price property.
    */
    public function setPrice(?float $value): void {
        $this->price = $value;
    }

    /**
     * Sets the retailPrice property value. Price the organization resells this option at to its own customers (its decimal CatalogOption.Price plus margin), shown on the white-label store.
     * @param float|null $value Value to set for the retailPrice property.
    */
    public function setRetailPrice(?float $value): void {
        $this->retailPrice = $value;
    }

}
