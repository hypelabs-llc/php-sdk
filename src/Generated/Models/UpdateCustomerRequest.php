<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Payload to update a customer. Null fields are left unchanged.
*/
class UpdateCustomerRequest implements AdditionalDataHolder, Parsable 
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
     * @var string|null $displayName New display name. Null leaves it unchanged.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $email New email. Null leaves it unchanged.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $externalId New external id. Null leaves it unchanged.
    */
    private ?string $externalId = null;
    
    /**
     * @var UpdateCustomerRequest_externalLogins|null $externalLogins Replacement external logins (OAuth provider -&gt; subject). Null leaves them unchanged.
    */
    private ?UpdateCustomerRequest_externalLogins $externalLogins = null;
    
    /**
     * @var string|null $locale New locale (BCP-47 tag). Null leaves it unchanged.
    */
    private ?string $locale = null;
    
    /**
     * @var string|null $phoneNumber New phone number. Null leaves it unchanged.
    */
    private ?string $phoneNumber = null;
    
    /**
     * @var string|null $pushNotificationsToken New push-notifications token. Null leaves it unchanged.
    */
    private ?string $pushNotificationsToken = null;
    
    /**
     * Instantiates a new UpdateCustomerRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateCustomerRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateCustomerRequest {
        return new UpdateCustomerRequest();
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
     * Gets the displayName property value. New display name. Null leaves it unchanged.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the email property value. New email. Null leaves it unchanged.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Gets the externalId property value. New external id. Null leaves it unchanged.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * Gets the externalLogins property value. Replacement external logins (OAuth provider -&gt; subject). Null leaves them unchanged.
     * @return UpdateCustomerRequest_externalLogins|null
    */
    public function getExternalLogins(): ?UpdateCustomerRequest_externalLogins {
        return $this->externalLogins;
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
            'externalLogins' => fn(ParseNode $n) => $o->setExternalLogins($n->getObjectValue([UpdateCustomerRequest_externalLogins::class, 'createFromDiscriminatorValue'])),
            'locale' => fn(ParseNode $n) => $o->setLocale($n->getStringValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'pushNotificationsToken' => fn(ParseNode $n) => $o->setPushNotificationsToken($n->getStringValue()),
        ];
    }

    /**
     * Gets the locale property value. New locale (BCP-47 tag). Null leaves it unchanged.
     * @return string|null
    */
    public function getLocale(): ?string {
        return $this->locale;
    }

    /**
     * Gets the phoneNumber property value. New phone number. Null leaves it unchanged.
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the pushNotificationsToken property value. New push-notifications token. Null leaves it unchanged.
     * @return string|null
    */
    public function getPushNotificationsToken(): ?string {
        return $this->pushNotificationsToken;
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
        $writer->writeObjectValue('externalLogins', $this->getExternalLogins());
        $writer->writeStringValue('locale', $this->getLocale());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeStringValue('pushNotificationsToken', $this->getPushNotificationsToken());
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
     * Sets the displayName property value. New display name. Null leaves it unchanged.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->displayName = $value;
    }

    /**
     * Sets the email property value. New email. Null leaves it unchanged.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the externalId property value. New external id. Null leaves it unchanged.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->externalId = $value;
    }

    /**
     * Sets the externalLogins property value. Replacement external logins (OAuth provider -&gt; subject). Null leaves them unchanged.
     * @param UpdateCustomerRequest_externalLogins|null $value Value to set for the externalLogins property.
    */
    public function setExternalLogins(?UpdateCustomerRequest_externalLogins $value): void {
        $this->externalLogins = $value;
    }

    /**
     * Sets the locale property value. New locale (BCP-47 tag). Null leaves it unchanged.
     * @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value): void {
        $this->locale = $value;
    }

    /**
     * Sets the phoneNumber property value. New phone number. Null leaves it unchanged.
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the pushNotificationsToken property value. New push-notifications token. Null leaves it unchanged.
     * @param string|null $value Value to set for the pushNotificationsToken property.
    */
    public function setPushNotificationsToken(?string $value): void {
        $this->pushNotificationsToken = $value;
    }

}
