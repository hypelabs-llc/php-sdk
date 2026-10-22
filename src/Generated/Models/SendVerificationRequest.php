<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request to send a customer an email verification link. The reseller hosts the page that reads the appended token and confirms it against the verify-email endpoint.
*/
class SendVerificationRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $verificationUrl The reseller page the verification link points at; the token is appended as a query parameter.
    */
    private ?string $verificationUrl = null;
    
    /**
     * Instantiates a new SendVerificationRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendVerificationRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SendVerificationRequest {
        return new SendVerificationRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'verificationUrl' => fn(ParseNode $n) => $o->setVerificationUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the verificationUrl property value. The reseller page the verification link points at; the token is appended as a query parameter.
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
     * Sets the verificationUrl property value. The reseller page the verification link points at; the token is appended as a query parameter.
     * @param string|null $value Value to set for the verificationUrl property.
    */
    public function setVerificationUrl(?string $value): void {
        $this->verificationUrl = $value;
    }

}
