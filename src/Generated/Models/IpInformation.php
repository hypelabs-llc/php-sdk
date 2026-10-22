<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IpInformation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $asn The asn property
    */
    private ?string $asn = null;
    
    /**
     * @var string|null $asnDomain The asnDomain property
    */
    private ?string $asnDomain = null;
    
    /**
     * @var string|null $asnLogo The asnLogo property
    */
    private ?string $asnLogo = null;
    
    /**
     * @var string|null $continent The continent property
    */
    private ?string $continent = null;
    
    /**
     * @var string|null $continentCode The continentCode property
    */
    private ?string $continentCode = null;
    
    /**
     * @var string|null $country The country property
    */
    private ?string $country = null;
    
    /**
     * @var string|null $countryCode The countryCode property
    */
    private ?string $countryCode = null;
    
    /**
     * @var string|null $countryFlag The countryFlag property
    */
    private ?string $countryFlag = null;
    
    /**
     * @var string|null $countryFlagUrl The countryFlagUrl property
    */
    private ?string $countryFlagUrl = null;
    
    /**
     * @var string|null $currencyCode The currencyCode property
    */
    private ?string $currencyCode = null;
    
    /**
     * @var string|null $currencySymbol The currencySymbol property
    */
    private ?string $currencySymbol = null;
    
    /**
     * @var string|null $ipAddress The ipAddress property
    */
    private ?string $ipAddress = null;
    
    /**
     * @var bool|null $isAnycast The isAnycast property
    */
    private ?bool $isAnycast = null;
    
    /**
     * @var string|null $isp The isp property
    */
    private ?string $isp = null;
    
    /**
     * Instantiates a new IpInformation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IpInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IpInformation {
        return new IpInformation();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the asn property value. The asn property
     * @return string|null
    */
    public function getAsn(): ?string {
        return $this->asn;
    }

    /**
     * Gets the asnDomain property value. The asnDomain property
     * @return string|null
    */
    public function getAsnDomain(): ?string {
        return $this->asnDomain;
    }

    /**
     * Gets the asnLogo property value. The asnLogo property
     * @return string|null
    */
    public function getAsnLogo(): ?string {
        return $this->asnLogo;
    }

    /**
     * Gets the continent property value. The continent property
     * @return string|null
    */
    public function getContinent(): ?string {
        return $this->continent;
    }

    /**
     * Gets the continentCode property value. The continentCode property
     * @return string|null
    */
    public function getContinentCode(): ?string {
        return $this->continentCode;
    }

    /**
     * Gets the country property value. The country property
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets the countryCode property value. The countryCode property
     * @return string|null
    */
    public function getCountryCode(): ?string {
        return $this->countryCode;
    }

    /**
     * Gets the countryFlag property value. The countryFlag property
     * @return string|null
    */
    public function getCountryFlag(): ?string {
        return $this->countryFlag;
    }

    /**
     * Gets the countryFlagUrl property value. The countryFlagUrl property
     * @return string|null
    */
    public function getCountryFlagUrl(): ?string {
        return $this->countryFlagUrl;
    }

    /**
     * Gets the currencyCode property value. The currencyCode property
     * @return string|null
    */
    public function getCurrencyCode(): ?string {
        return $this->currencyCode;
    }

    /**
     * Gets the currencySymbol property value. The currencySymbol property
     * @return string|null
    */
    public function getCurrencySymbol(): ?string {
        return $this->currencySymbol;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'asn' => fn(ParseNode $n) => $o->setAsn($n->getStringValue()),
            'asnDomain' => fn(ParseNode $n) => $o->setAsnDomain($n->getStringValue()),
            'asnLogo' => fn(ParseNode $n) => $o->setAsnLogo($n->getStringValue()),
            'continent' => fn(ParseNode $n) => $o->setContinent($n->getStringValue()),
            'continentCode' => fn(ParseNode $n) => $o->setContinentCode($n->getStringValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'countryCode' => fn(ParseNode $n) => $o->setCountryCode($n->getStringValue()),
            'countryFlag' => fn(ParseNode $n) => $o->setCountryFlag($n->getStringValue()),
            'countryFlagUrl' => fn(ParseNode $n) => $o->setCountryFlagUrl($n->getStringValue()),
            'currencyCode' => fn(ParseNode $n) => $o->setCurrencyCode($n->getStringValue()),
            'currencySymbol' => fn(ParseNode $n) => $o->setCurrencySymbol($n->getStringValue()),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            'isAnycast' => fn(ParseNode $n) => $o->setIsAnycast($n->getBooleanValue()),
            'isp' => fn(ParseNode $n) => $o->setIsp($n->getStringValue()),
        ];
    }

    /**
     * Gets the ipAddress property value. The ipAddress property
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->ipAddress;
    }

    /**
     * Gets the isAnycast property value. The isAnycast property
     * @return bool|null
    */
    public function getIsAnycast(): ?bool {
        return $this->isAnycast;
    }

    /**
     * Gets the isp property value. The isp property
     * @return string|null
    */
    public function getIsp(): ?string {
        return $this->isp;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('asn', $this->getAsn());
        $writer->writeStringValue('asnDomain', $this->getAsnDomain());
        $writer->writeStringValue('asnLogo', $this->getAsnLogo());
        $writer->writeStringValue('continent', $this->getContinent());
        $writer->writeStringValue('continentCode', $this->getContinentCode());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('countryCode', $this->getCountryCode());
        $writer->writeStringValue('countryFlag', $this->getCountryFlag());
        $writer->writeStringValue('countryFlagUrl', $this->getCountryFlagUrl());
        $writer->writeStringValue('currencyCode', $this->getCurrencyCode());
        $writer->writeStringValue('currencySymbol', $this->getCurrencySymbol());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeBooleanValue('isAnycast', $this->getIsAnycast());
        $writer->writeStringValue('isp', $this->getIsp());
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
     * Sets the asn property value. The asn property
     * @param string|null $value Value to set for the asn property.
    */
    public function setAsn(?string $value): void {
        $this->asn = $value;
    }

    /**
     * Sets the asnDomain property value. The asnDomain property
     * @param string|null $value Value to set for the asnDomain property.
    */
    public function setAsnDomain(?string $value): void {
        $this->asnDomain = $value;
    }

    /**
     * Sets the asnLogo property value. The asnLogo property
     * @param string|null $value Value to set for the asnLogo property.
    */
    public function setAsnLogo(?string $value): void {
        $this->asnLogo = $value;
    }

    /**
     * Sets the continent property value. The continent property
     * @param string|null $value Value to set for the continent property.
    */
    public function setContinent(?string $value): void {
        $this->continent = $value;
    }

    /**
     * Sets the continentCode property value. The continentCode property
     * @param string|null $value Value to set for the continentCode property.
    */
    public function setContinentCode(?string $value): void {
        $this->continentCode = $value;
    }

    /**
     * Sets the country property value. The country property
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the countryCode property value. The countryCode property
     * @param string|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?string $value): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the countryFlag property value. The countryFlag property
     * @param string|null $value Value to set for the countryFlag property.
    */
    public function setCountryFlag(?string $value): void {
        $this->countryFlag = $value;
    }

    /**
     * Sets the countryFlagUrl property value. The countryFlagUrl property
     * @param string|null $value Value to set for the countryFlagUrl property.
    */
    public function setCountryFlagUrl(?string $value): void {
        $this->countryFlagUrl = $value;
    }

    /**
     * Sets the currencyCode property value. The currencyCode property
     * @param string|null $value Value to set for the currencyCode property.
    */
    public function setCurrencyCode(?string $value): void {
        $this->currencyCode = $value;
    }

    /**
     * Sets the currencySymbol property value. The currencySymbol property
     * @param string|null $value Value to set for the currencySymbol property.
    */
    public function setCurrencySymbol(?string $value): void {
        $this->currencySymbol = $value;
    }

    /**
     * Sets the ipAddress property value. The ipAddress property
     * @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->ipAddress = $value;
    }

    /**
     * Sets the isAnycast property value. The isAnycast property
     * @param bool|null $value Value to set for the isAnycast property.
    */
    public function setIsAnycast(?bool $value): void {
        $this->isAnycast = $value;
    }

    /**
     * Sets the isp property value. The isp property
     * @param string|null $value Value to set for the isp property.
    */
    public function setIsp(?string $value): void {
        $this->isp = $value;
    }

}
