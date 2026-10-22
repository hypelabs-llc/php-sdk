<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Partial update of a customer's billing details: only the provided fields are changed, the rest are    left as they are.
*/
class PatchCustomerBillingRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $addressLine Street address (line 1). Null leaves it unchanged.
    */
    private ?string $addressLine = null;
    
    /**
     * @var string|null $city City. Null leaves it unchanged.
    */
    private ?string $city = null;
    
    /**
     * @var string|null $companyName The company's legal name. Null leaves it unchanged.
    */
    private ?string $companyName = null;
    
    /**
     * @var string|null $country Country (ISO 3166-1 alpha-2 code or name). Null leaves it unchanged.
    */
    private ?string $country = null;
    
    /**
     * @var bool|null $isCompany Whether the customer is billed as a company (B2B) rather than an individual. Null leaves it unchanged.
    */
    private ?bool $isCompany = null;
    
    /**
     * @var string|null $postalCode Postal or ZIP code. Null leaves it unchanged.
    */
    private ?string $postalCode = null;
    
    /**
     * @var string|null $registrationNumber Company registration number, distinct from the tax id. Null leaves it unchanged.
    */
    private ?string $registrationNumber = null;
    
    /**
     * @var string|null $taxId VAT or tax identification number. Null leaves it unchanged.
    */
    private ?string $taxId = null;
    
    /**
     * Instantiates a new PatchCustomerBillingRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PatchCustomerBillingRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PatchCustomerBillingRequest {
        return new PatchCustomerBillingRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the addressLine property value. Street address (line 1). Null leaves it unchanged.
     * @return string|null
    */
    public function getAddressLine(): ?string {
        return $this->addressLine;
    }

    /**
     * Gets the city property value. City. Null leaves it unchanged.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the companyName property value. The company's legal name. Null leaves it unchanged.
     * @return string|null
    */
    public function getCompanyName(): ?string {
        return $this->companyName;
    }

    /**
     * Gets the country property value. Country (ISO 3166-1 alpha-2 code or name). Null leaves it unchanged.
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'addressLine' => fn(ParseNode $n) => $o->setAddressLine($n->getStringValue()),
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'companyName' => fn(ParseNode $n) => $o->setCompanyName($n->getStringValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'isCompany' => fn(ParseNode $n) => $o->setIsCompany($n->getBooleanValue()),
            'postalCode' => fn(ParseNode $n) => $o->setPostalCode($n->getStringValue()),
            'registrationNumber' => fn(ParseNode $n) => $o->setRegistrationNumber($n->getStringValue()),
            'taxId' => fn(ParseNode $n) => $o->setTaxId($n->getStringValue()),
        ];
    }

    /**
     * Gets the isCompany property value. Whether the customer is billed as a company (B2B) rather than an individual. Null leaves it unchanged.
     * @return bool|null
    */
    public function getIsCompany(): ?bool {
        return $this->isCompany;
    }

    /**
     * Gets the postalCode property value. Postal or ZIP code. Null leaves it unchanged.
     * @return string|null
    */
    public function getPostalCode(): ?string {
        return $this->postalCode;
    }

    /**
     * Gets the registrationNumber property value. Company registration number, distinct from the tax id. Null leaves it unchanged.
     * @return string|null
    */
    public function getRegistrationNumber(): ?string {
        return $this->registrationNumber;
    }

    /**
     * Gets the taxId property value. VAT or tax identification number. Null leaves it unchanged.
     * @return string|null
    */
    public function getTaxId(): ?string {
        return $this->taxId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('addressLine', $this->getAddressLine());
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('companyName', $this->getCompanyName());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeBooleanValue('isCompany', $this->getIsCompany());
        $writer->writeStringValue('postalCode', $this->getPostalCode());
        $writer->writeStringValue('registrationNumber', $this->getRegistrationNumber());
        $writer->writeStringValue('taxId', $this->getTaxId());
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
     * Sets the addressLine property value. Street address (line 1). Null leaves it unchanged.
     * @param string|null $value Value to set for the addressLine property.
    */
    public function setAddressLine(?string $value): void {
        $this->addressLine = $value;
    }

    /**
     * Sets the city property value. City. Null leaves it unchanged.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the companyName property value. The company's legal name. Null leaves it unchanged.
     * @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value): void {
        $this->companyName = $value;
    }

    /**
     * Sets the country property value. Country (ISO 3166-1 alpha-2 code or name). Null leaves it unchanged.
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the isCompany property value. Whether the customer is billed as a company (B2B) rather than an individual. Null leaves it unchanged.
     * @param bool|null $value Value to set for the isCompany property.
    */
    public function setIsCompany(?bool $value): void {
        $this->isCompany = $value;
    }

    /**
     * Sets the postalCode property value. Postal or ZIP code. Null leaves it unchanged.
     * @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value): void {
        $this->postalCode = $value;
    }

    /**
     * Sets the registrationNumber property value. Company registration number, distinct from the tax id. Null leaves it unchanged.
     * @param string|null $value Value to set for the registrationNumber property.
    */
    public function setRegistrationNumber(?string $value): void {
        $this->registrationNumber = $value;
    }

    /**
     * Sets the taxId property value. VAT or tax identification number. Null leaves it unchanged.
     * @param string|null $value Value to set for the taxId property.
    */
    public function setTaxId(?string $value): void {
        $this->taxId = $value;
    }

}
