<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Credentials to authenticate one of the organization's customers.
*/
class AuthenticateCustomerRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $email The customer's email address.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $otp The customer's one-time password (2FA code), when they have it enabled. Omit otherwise.
    */
    private ?string $otp = null;
    
    /**
     * @var string|null $password The customer's password.
    */
    private ?string $password = null;
    
    /**
     * Instantiates a new AuthenticateCustomerRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticateCustomerRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticateCustomerRequest {
        return new AuthenticateCustomerRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the email property value. The customer's email address.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'otp' => fn(ParseNode $n) => $o->setOtp($n->getStringValue()),
            'password' => fn(ParseNode $n) => $o->setPassword($n->getStringValue()),
        ];
    }

    /**
     * Gets the otp property value. The customer's one-time password (2FA code), when they have it enabled. Omit otherwise.
     * @return string|null
    */
    public function getOtp(): ?string {
        return $this->otp;
    }

    /**
     * Gets the password property value. The customer's password.
     * @return string|null
    */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('otp', $this->getOtp());
        $writer->writeStringValue('password', $this->getPassword());
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
     * Sets the email property value. The customer's email address.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the otp property value. The customer's one-time password (2FA code), when they have it enabled. Omit otherwise.
     * @param string|null $value Value to set for the otp property.
    */
    public function setOtp(?string $value): void {
        $this->otp = $value;
    }

    /**
     * Sets the password property value. The customer's password.
     * @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value): void {
        $this->password = $value;
    }

}
