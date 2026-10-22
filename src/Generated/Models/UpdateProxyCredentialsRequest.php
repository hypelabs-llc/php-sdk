<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Request to change an allocated proxy's credentials. A null username or password is generated from the    organization's default formats.
*/
class UpdateProxyCredentialsRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $allowedIps IP addresses allowed to use the proxy.
    */
    private ?array $allowedIps = null;
    
    /**
     * @var string|null $password New authentication password. Generated from the organization's default format when null.
    */
    private ?string $password = null;
    
    /**
     * @var string|null $username New authentication username. Generated from the organization's default format when null.
    */
    private ?string $username = null;
    
    /**
     * Instantiates a new UpdateProxyCredentialsRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateProxyCredentialsRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateProxyCredentialsRequest {
        return new UpdateProxyCredentialsRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedIps property value. IP addresses allowed to use the proxy.
     * @return array<string>|null
    */
    public function getAllowedIps(): ?array {
        return $this->allowedIps;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedIps' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedIps($val);
            },
            'password' => fn(ParseNode $n) => $o->setPassword($n->getStringValue()),
            'username' => fn(ParseNode $n) => $o->setUsername($n->getStringValue()),
        ];
    }

    /**
     * Gets the password property value. New authentication password. Generated from the organization's default format when null.
     * @return string|null
    */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Gets the username property value. New authentication username. Generated from the organization's default format when null.
     * @return string|null
    */
    public function getUsername(): ?string {
        return $this->username;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('allowedIps', $this->getAllowedIps());
        $writer->writeStringValue('password', $this->getPassword());
        $writer->writeStringValue('username', $this->getUsername());
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
     * Sets the allowedIps property value. IP addresses allowed to use the proxy.
     * @param array<string>|null $value Value to set for the allowedIps property.
    */
    public function setAllowedIps(?array $value): void {
        $this->allowedIps = $value;
    }

    /**
     * Sets the password property value. New authentication password. Generated from the organization's default format when null.
     * @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value): void {
        $this->password = $value;
    }

    /**
     * Sets the username property value. New authentication username. Generated from the organization's default format when null.
     * @param string|null $value Value to set for the username property.
    */
    public function setUsername(?string $value): void {
        $this->username = $value;
    }

}
