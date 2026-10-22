<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The result of a successful customer sign-in (password or OAuth): the inherited bearer token and expiry,    plus the identity the front-end needs.
*/
class CustomerAuthResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $accessToken JWT bearer token to send in the Authorization header.
    */
    private ?string $accessToken = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $avatar The customer's avatar URL (their Gravatar, falling back to a neutral silhouette).
    */
    private ?string $avatar = null;
    
    /**
     * @var string|null $email The customer's email address.
    */
    private ?string $email = null;
    
    /**
     * @var DateTime|null $expiresAt Instant the access token stops being valid.
    */
    private ?DateTime $expiresAt = null;
    
    /**
     * @var bool|null $isBanned Whether the customer is banned (suspended). False for an active account.
    */
    private ?bool $isBanned = null;
    
    /**
     * @var string|null $locale The customer's preferred locale (e.g. `en-US`), when set.
    */
    private ?string $locale = null;
    
    /**
     * @var string|null $name The customer's display name, when set.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $userId The customer's unique identifier.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new CustomerAuthResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerAuthResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerAuthResponse {
        return new CustomerAuthResponse();
    }

    /**
     * Gets the accessToken property value. JWT bearer token to send in the Authorization header.
     * @return string|null
    */
    public function getAccessToken(): ?string {
        return $this->accessToken;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the avatar property value. The customer's avatar URL (their Gravatar, falling back to a neutral silhouette).
     * @return string|null
    */
    public function getAvatar(): ?string {
        return $this->avatar;
    }

    /**
     * Gets the email property value. The customer's email address.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Gets the expiresAt property value. Instant the access token stops being valid.
     * @return DateTime|null
    */
    public function getExpiresAt(): ?DateTime {
        return $this->expiresAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessToken' => fn(ParseNode $n) => $o->setAccessToken($n->getStringValue()),
            'avatar' => fn(ParseNode $n) => $o->setAvatar($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'expiresAt' => fn(ParseNode $n) => $o->setExpiresAt($n->getDateTimeValue()),
            'isBanned' => fn(ParseNode $n) => $o->setIsBanned($n->getBooleanValue()),
            'locale' => fn(ParseNode $n) => $o->setLocale($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the isBanned property value. Whether the customer is banned (suspended). False for an active account.
     * @return bool|null
    */
    public function getIsBanned(): ?bool {
        return $this->isBanned;
    }

    /**
     * Gets the locale property value. The customer's preferred locale (e.g. `en-US`), when set.
     * @return string|null
    */
    public function getLocale(): ?string {
        return $this->locale;
    }

    /**
     * Gets the name property value. The customer's display name, when set.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the userId property value. The customer's unique identifier.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('accessToken', $this->getAccessToken());
        $writer->writeStringValue('avatar', $this->getAvatar());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeDateTimeValue('expiresAt', $this->getExpiresAt());
        $writer->writeBooleanValue('isBanned', $this->getIsBanned());
        $writer->writeStringValue('locale', $this->getLocale());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessToken property value. JWT bearer token to send in the Authorization header.
     * @param string|null $value Value to set for the accessToken property.
    */
    public function setAccessToken(?string $value): void {
        $this->accessToken = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the avatar property value. The customer's avatar URL (their Gravatar, falling back to a neutral silhouette).
     * @param string|null $value Value to set for the avatar property.
    */
    public function setAvatar(?string $value): void {
        $this->avatar = $value;
    }

    /**
     * Sets the email property value. The customer's email address.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the expiresAt property value. Instant the access token stops being valid.
     * @param DateTime|null $value Value to set for the expiresAt property.
    */
    public function setExpiresAt(?DateTime $value): void {
        $this->expiresAt = $value;
    }

    /**
     * Sets the isBanned property value. Whether the customer is banned (suspended). False for an active account.
     * @param bool|null $value Value to set for the isBanned property.
    */
    public function setIsBanned(?bool $value): void {
        $this->isBanned = $value;
    }

    /**
     * Sets the locale property value. The customer's preferred locale (e.g. `en-US`), when set.
     * @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value): void {
        $this->locale = $value;
    }

    /**
     * Sets the name property value. The customer's display name, when set.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the userId property value. The customer's unique identifier.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
