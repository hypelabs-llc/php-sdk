<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Know-your-customer details a customer submits before their first order: intended proxy usage, acceptable-usepolicy acknowledgement, and the submitted/approved state. Stored as JSON on the Customer.
*/
class CustomerKyc implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $approved Whether the submitted KYC has been approved by HypeLabs.
    */
    private ?bool $approved = null;
    
    /**
     * @var string|null $description Free-text description of how the customer intends to use the proxies.
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $policyAcknowledged Whether the customer acknowledged the acceptable-use policy when submitting.
    */
    private ?bool $policyAcknowledged = null;
    
    /**
     * @var string|null $scopeOfUse Domain area the customer selected for their proxy usage (e.g. "ad-verification", "seo").
    */
    private ?string $scopeOfUse = null;
    
    /**
     * @var bool|null $submitted Whether the customer has submitted their KYC details.
    */
    private ?bool $submitted = null;
    
    /**
     * Instantiates a new CustomerKyc and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerKyc
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerKyc {
        return new CustomerKyc();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the approved property value. Whether the submitted KYC has been approved by HypeLabs.
     * @return bool|null
    */
    public function getApproved(): ?bool {
        return $this->approved;
    }

    /**
     * Gets the description property value. Free-text description of how the customer intends to use the proxies.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'approved' => fn(ParseNode $n) => $o->setApproved($n->getBooleanValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'policyAcknowledged' => fn(ParseNode $n) => $o->setPolicyAcknowledged($n->getBooleanValue()),
            'scopeOfUse' => fn(ParseNode $n) => $o->setScopeOfUse($n->getStringValue()),
            'submitted' => fn(ParseNode $n) => $o->setSubmitted($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the policyAcknowledged property value. Whether the customer acknowledged the acceptable-use policy when submitting.
     * @return bool|null
    */
    public function getPolicyAcknowledged(): ?bool {
        return $this->policyAcknowledged;
    }

    /**
     * Gets the scopeOfUse property value. Domain area the customer selected for their proxy usage (e.g. "ad-verification", "seo").
     * @return string|null
    */
    public function getScopeOfUse(): ?string {
        return $this->scopeOfUse;
    }

    /**
     * Gets the submitted property value. Whether the customer has submitted their KYC details.
     * @return bool|null
    */
    public function getSubmitted(): ?bool {
        return $this->submitted;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('approved', $this->getApproved());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('policyAcknowledged', $this->getPolicyAcknowledged());
        $writer->writeStringValue('scopeOfUse', $this->getScopeOfUse());
        $writer->writeBooleanValue('submitted', $this->getSubmitted());
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
     * Sets the approved property value. Whether the submitted KYC has been approved by HypeLabs.
     * @param bool|null $value Value to set for the approved property.
    */
    public function setApproved(?bool $value): void {
        $this->approved = $value;
    }

    /**
     * Sets the description property value. Free-text description of how the customer intends to use the proxies.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the policyAcknowledged property value. Whether the customer acknowledged the acceptable-use policy when submitting.
     * @param bool|null $value Value to set for the policyAcknowledged property.
    */
    public function setPolicyAcknowledged(?bool $value): void {
        $this->policyAcknowledged = $value;
    }

    /**
     * Sets the scopeOfUse property value. Domain area the customer selected for their proxy usage (e.g. "ad-verification", "seo").
     * @param string|null $value Value to set for the scopeOfUse property.
    */
    public function setScopeOfUse(?string $value): void {
        $this->scopeOfUse = $value;
    }

    /**
     * Sets the submitted property value. Whether the customer has submitted their KYC details.
     * @param bool|null $value Value to set for the submitted property.
    */
    public function setSubmitted(?bool $value): void {
        $this->submitted = $value;
    }

}
