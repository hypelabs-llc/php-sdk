<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Payload to create a customer (your organization's own end user).
*/
class CreateCustomerRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CustomerBilling|null $billing The billing property
    */
    private ?CustomerBilling $billing = null;
    
    /**
     * @var string|null $displayName Name shown for the customer in the dashboard and emails.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $email Email address of the customer. Must be unique within your organization.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $externalId Identifier of the customer in your own system. Matches records across systems and makes creation idempotent.
    */
    private ?string $externalId = null;
    
    /**
     * @var string|null $locale Preferred locale (e.g. "en", "fr") for emails and OTP messages.
    */
    private ?string $locale = null;
    
    /**
     * @var string|null $password Initial password of the customer, stored hashed. Omit for an OAuth-only or passwordless user.
    */
    private ?string $password = null;
    
    /**
     * @var string|null $phoneNumber Phone number of the customer.
    */
    private ?string $phoneNumber = null;
    
    /**
     * @var string|null $verificationUrl Page (your own) linked in the verification email sent on creation, with the token appended as a query parameter. Omit to leave the email unverified and skip the email.
    */
    private ?string $verificationUrl = null;
    
    /**
     * Instantiates a new CreateCustomerRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateCustomerRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateCustomerRequest {
        return new CreateCustomerRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the billing property value. The billing property
     * @return CustomerBilling|null
    */
    public function getBilling(): ?CustomerBilling {
        return $this->billing;
    }

    /**
     * Gets the displayName property value. Name shown for the customer in the dashboard and emails.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the email property value. Email address of the customer. Must be unique within your organization.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Gets the externalId property value. Identifier of the customer in your own system. Matches records across systems and makes creation idempotent.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billing' => fn(ParseNode $n) => $o->setBilling($n->getObjectValue([CustomerBilling::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'locale' => fn(ParseNode $n) => $o->setLocale($n->getStringValue()),
            'password' => fn(ParseNode $n) => $o->setPassword($n->getStringValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'verificationUrl' => fn(ParseNode $n) => $o->setVerificationUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the locale property value. Preferred locale (e.g. "en", "fr") for emails and OTP messages.
     * @return string|null
    */
    public function getLocale(): ?string {
        return $this->locale;
    }

    /**
     * Gets the password property value. Initial password of the customer, stored hashed. Omit for an OAuth-only or passwordless user.
     * @return string|null
    */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Gets the phoneNumber property value. Phone number of the customer.
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the verificationUrl property value. Page (your own) linked in the verification email sent on creation, with the token appended as a query parameter. Omit to leave the email unverified and skip the email.
     * @return string|null
    */
    public function getVerificationUrl(): ?string {
        return $this->verificationUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('billing', $this->getBilling());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeStringValue('locale', $this->getLocale());
        $writer->writeStringValue('password', $this->getPassword());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeStringValue('verificationUrl', $this->getVerificationUrl());
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
     * Sets the billing property value. The billing property
     * @param CustomerBilling|null $value Value to set for the billing property.
    */
    public function setBilling(?CustomerBilling $value): void {
        $this->billing = $value;
    }

    /**
     * Sets the displayName property value. Name shown for the customer in the dashboard and emails.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->displayName = $value;
    }

    /**
     * Sets the email property value. Email address of the customer. Must be unique within your organization.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the externalId property value. Identifier of the customer in your own system. Matches records across systems and makes creation idempotent.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->externalId = $value;
    }

    /**
     * Sets the locale property value. Preferred locale (e.g. "en", "fr") for emails and OTP messages.
     * @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value): void {
        $this->locale = $value;
    }

    /**
     * Sets the password property value. Initial password of the customer, stored hashed. Omit for an OAuth-only or passwordless user.
     * @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value): void {
        $this->password = $value;
    }

    /**
     * Sets the phoneNumber property value. Phone number of the customer.
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the verificationUrl property value. Page (your own) linked in the verification email sent on creation, with the token appended as a query parameter. Omit to leave the email unverified and skip the email.
     * @param string|null $value Value to set for the verificationUrl property.
    */
    public function setVerificationUrl(?string $value): void {
        $this->verificationUrl = $value;
    }

}
