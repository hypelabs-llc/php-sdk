<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Legal billing address and tax identifiers shown on a customer's invoices. Value object owned byCustomer with no identity of its own; all fields are optional.
*/
class CustomerBilling implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $addressLine Street address (line 1).
    */
    private ?string $addressLine = null;
    
    /**
     * @var string|null $city City.
    */
    private ?string $city = null;
    
    /**
     * @var string|null $companyName The company's legal name, when bool CustomerBilling.IsCompany is true.
    */
    private ?string $companyName = null;
    
    /**
     * @var string|null $country Country (ISO 3166-1 alpha-2 code or name).
    */
    private ?string $country = null;
    
    /**
     * @var bool|null $isCompany Whether the customer is billed as a company (B2B) rather than an individual (B2C). When true,    string? CustomerBilling.CompanyName and string? CustomerBilling.TaxId apply.
    */
    private ?bool $isCompany = null;
    
    /**
     * @var string|null $postalCode Postal / ZIP code.
    */
    private ?string $postalCode = null;
    
    /**
     * @var string|null $registrationNumber Company registration number (e.g. SIREN/SIRET, Companies House number), distinct from the VAT/tax    number in string? CustomerBilling.TaxId. Applies when bool CustomerBilling.IsCompany is true.
    */
    private ?string $registrationNumber = null;
    
    /**
     * @var string|null $taxId VAT / tax identification number.
    */
    private ?string $taxId = null;
    
    /**
     * Instantiates a new CustomerBilling and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerBilling
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerBilling {
        return new CustomerBilling();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the addressLine property value. Street address (line 1).
     * @return string|null
    */
    public function getAddressLine(): ?string {
        return $this->addressLine;
    }

    /**
     * Gets the city property value. City.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the companyName property value. The company's legal name, when bool CustomerBilling.IsCompany is true.
     * @return string|null
    */
    public function getCompanyName(): ?string {
        return $this->companyName;
    }

    /**
     * Gets the country property value. Country (ISO 3166-1 alpha-2 code or name).
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
     * Gets the isCompany property value. Whether the customer is billed as a company (B2B) rather than an individual (B2C). When true,    string? CustomerBilling.CompanyName and string? CustomerBilling.TaxId apply.
     * @return bool|null
    */
    public function getIsCompany(): ?bool {
        return $this->isCompany;
    }

    /**
     * Gets the postalCode property value. Postal / ZIP code.
     * @return string|null
    */
    public function getPostalCode(): ?string {
        return $this->postalCode;
    }

    /**
     * Gets the registrationNumber property value. Company registration number (e.g. SIREN/SIRET, Companies House number), distinct from the VAT/tax    number in string? CustomerBilling.TaxId. Applies when bool CustomerBilling.IsCompany is true.
     * @return string|null
    */
    public function getRegistrationNumber(): ?string {
        return $this->registrationNumber;
    }

    /**
     * Gets the taxId property value. VAT / tax identification number.
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
     * Sets the addressLine property value. Street address (line 1).
     * @param string|null $value Value to set for the addressLine property.
    */
    public function setAddressLine(?string $value): void {
        $this->addressLine = $value;
    }

    /**
     * Sets the city property value. City.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the companyName property value. The company's legal name, when bool CustomerBilling.IsCompany is true.
     * @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value): void {
        $this->companyName = $value;
    }

    /**
     * Sets the country property value. Country (ISO 3166-1 alpha-2 code or name).
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the isCompany property value. Whether the customer is billed as a company (B2B) rather than an individual (B2C). When true,    string? CustomerBilling.CompanyName and string? CustomerBilling.TaxId apply.
     * @param bool|null $value Value to set for the isCompany property.
    */
    public function setIsCompany(?bool $value): void {
        $this->isCompany = $value;
    }

    /**
     * Sets the postalCode property value. Postal / ZIP code.
     * @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value): void {
        $this->postalCode = $value;
    }

    /**
     * Sets the registrationNumber property value. Company registration number (e.g. SIREN/SIRET, Companies House number), distinct from the VAT/tax    number in string? CustomerBilling.TaxId. Applies when bool CustomerBilling.IsCompany is true.
     * @param string|null $value Value to set for the registrationNumber property.
    */
    public function setRegistrationNumber(?string $value): void {
        $this->registrationNumber = $value;
    }

    /**
     * Sets the taxId property value. VAT / tax identification number.
     * @param string|null $value Value to set for the taxId property.
    */
    public function setTaxId(?string $value): void {
        $this->taxId = $value;
    }

}
