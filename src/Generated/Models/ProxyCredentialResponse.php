<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The credentials in effect on a proxy: the username and password to authenticate with, the IPs and domainsallowed to use it, and when they were applied. Stored in and read from Vault.
*/
class ProxyCredentialResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $allowedDomains Domains the proxy is permitted to reach. Empty when no domain allowlist applies.
    */
    private ?array $allowedDomains = null;
    
    /**
     * @var array<string>|null $allowedIps IP addresses allowed to connect through the proxy. Empty when access is not restricted by IP.
    */
    private ?array $allowedIps = null;
    
    /**
     * @var DateTime|null $appliedAt Instant these credentials were applied to the proxy in Vault.
    */
    private ?DateTime $appliedAt = null;
    
    /**
     * @var string|null $password Password used to authenticate against the proxy. Null when no credentials are stored yet.
    */
    private ?string $password = null;
    
    /**
     * @var string|null $username Username used to authenticate against the proxy. Null when no credentials are stored yet.
    */
    private ?string $username = null;
    
    /**
     * Instantiates a new ProxyCredentialResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProxyCredentialResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProxyCredentialResponse {
        return new ProxyCredentialResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedDomains property value. Domains the proxy is permitted to reach. Empty when no domain allowlist applies.
     * @return array<string>|null
    */
    public function getAllowedDomains(): ?array {
        return $this->allowedDomains;
    }

    /**
     * Gets the allowedIps property value. IP addresses allowed to connect through the proxy. Empty when access is not restricted by IP.
     * @return array<string>|null
    */
    public function getAllowedIps(): ?array {
        return $this->allowedIps;
    }

    /**
     * Gets the appliedAt property value. Instant these credentials were applied to the proxy in Vault.
     * @return DateTime|null
    */
    public function getAppliedAt(): ?DateTime {
        return $this->appliedAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedDomains' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedDomains($val);
            },
            'allowedIps' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedIps($val);
            },
            'appliedAt' => fn(ParseNode $n) => $o->setAppliedAt($n->getDateTimeValue()),
            'password' => fn(ParseNode $n) => $o->setPassword($n->getStringValue()),
            'username' => fn(ParseNode $n) => $o->setUsername($n->getStringValue()),
        ];
    }

    /**
     * Gets the password property value. Password used to authenticate against the proxy. Null when no credentials are stored yet.
     * @return string|null
    */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Gets the username property value. Username used to authenticate against the proxy. Null when no credentials are stored yet.
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
        $writer->writeCollectionOfPrimitiveValues('allowedDomains', $this->getAllowedDomains());
        $writer->writeCollectionOfPrimitiveValues('allowedIps', $this->getAllowedIps());
        $writer->writeDateTimeValue('appliedAt', $this->getAppliedAt());
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
     * Sets the allowedDomains property value. Domains the proxy is permitted to reach. Empty when no domain allowlist applies.
     * @param array<string>|null $value Value to set for the allowedDomains property.
    */
    public function setAllowedDomains(?array $value): void {
        $this->allowedDomains = $value;
    }

    /**
     * Sets the allowedIps property value. IP addresses allowed to connect through the proxy. Empty when access is not restricted by IP.
     * @param array<string>|null $value Value to set for the allowedIps property.
    */
    public function setAllowedIps(?array $value): void {
        $this->allowedIps = $value;
    }

    /**
     * Sets the appliedAt property value. Instant these credentials were applied to the proxy in Vault.
     * @param DateTime|null $value Value to set for the appliedAt property.
    */
    public function setAppliedAt(?DateTime $value): void {
        $this->appliedAt = $value;
    }

    /**
     * Sets the password property value. Password used to authenticate against the proxy. Null when no credentials are stored yet.
     * @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value): void {
        $this->password = $value;
    }

    /**
     * Sets the username property value. Username used to authenticate against the proxy. Null when no credentials are stored yet.
     * @param string|null $value Value to set for the username property.
    */
    public function setUsername(?string $value): void {
        $this->username = $value;
    }

}
