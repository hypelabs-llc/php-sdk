<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Identity attested by an external provider (Google, GitHub, Apple, ...) after the organization's own front-end(or app) completed the OAuth sign-in. The Connect API trusts the attested identity — it never talks to theprovider itself — and finds or creates the matching customer, scoped to the calling organization.
*/
class AuthenticateCustomerOAuthRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $displayName Display name reported by the provider, used when creating the customer. Null when the provider gives none.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $email Email address attested by the provider, used to link the sign-in to an existing customer or create one.    Optional: Apple only returns it on the first authorization, so later sign-ins match by the provider link alone.    Required when no customer matches yet (a first-time sign-in with no email cannot create an account).
    */
    private ?string $email = null;
    
    /**
     * @var string|null $locale Preferred locale (e.g. `en-US`) reported by the provider. Refreshed on each sign-in; ignored when null.
    */
    private ?string $locale = null;
    
    /**
     * @var string|null $provider Provider key the customer signed in through, e.g. `google`, `apple`, `discord`. A free    string, not an enum: an organization can wire up any provider without Connect needing a new release.
    */
    private ?string $provider = null;
    
    /**
     * @var string|null $providerId Stable identifier of the customer at the provider (the provider's account id).
    */
    private ?string $providerId = null;
    
    /**
     * @var string|null $pushNotificationsToken Device push-notification token (e.g. the app's APNs token), sent at sign-in. Refreshed when provided;    ignored when null.
    */
    private ?string $pushNotificationsToken = null;
    
    /**
     * Instantiates a new AuthenticateCustomerOAuthRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticateCustomerOAuthRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticateCustomerOAuthRequest {
        return new AuthenticateCustomerOAuthRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. Display name reported by the provider, used when creating the customer. Null when the provider gives none.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the email property value. Email address attested by the provider, used to link the sign-in to an existing customer or create one.    Optional: Apple only returns it on the first authorization, so later sign-ins match by the provider link alone.    Required when no customer matches yet (a first-time sign-in with no email cannot create an account).
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
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'locale' => fn(ParseNode $n) => $o->setLocale($n->getStringValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getStringValue()),
            'providerId' => fn(ParseNode $n) => $o->setProviderId($n->getStringValue()),
            'pushNotificationsToken' => fn(ParseNode $n) => $o->setPushNotificationsToken($n->getStringValue()),
        ];
    }

    /**
     * Gets the locale property value. Preferred locale (e.g. `en-US`) reported by the provider. Refreshed on each sign-in; ignored when null.
     * @return string|null
    */
    public function getLocale(): ?string {
        return $this->locale;
    }

    /**
     * Gets the provider property value. Provider key the customer signed in through, e.g. `google`, `apple`, `discord`. A free    string, not an enum: an organization can wire up any provider without Connect needing a new release.
     * @return string|null
    */
    public function getProvider(): ?string {
        return $this->provider;
    }

    /**
     * Gets the providerId property value. Stable identifier of the customer at the provider (the provider's account id).
     * @return string|null
    */
    public function getProviderId(): ?string {
        return $this->providerId;
    }

    /**
     * Gets the pushNotificationsToken property value. Device push-notification token (e.g. the app's APNs token), sent at sign-in. Refreshed when provided;    ignored when null.
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
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('locale', $this->getLocale());
        $writer->writeStringValue('provider', $this->getProvider());
        $writer->writeStringValue('providerId', $this->getProviderId());
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
     * Sets the displayName property value. Display name reported by the provider, used when creating the customer. Null when the provider gives none.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->displayName = $value;
    }

    /**
     * Sets the email property value. Email address attested by the provider, used to link the sign-in to an existing customer or create one.    Optional: Apple only returns it on the first authorization, so later sign-ins match by the provider link alone.    Required when no customer matches yet (a first-time sign-in with no email cannot create an account).
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the locale property value. Preferred locale (e.g. `en-US`) reported by the provider. Refreshed on each sign-in; ignored when null.
     * @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value): void {
        $this->locale = $value;
    }

    /**
     * Sets the provider property value. Provider key the customer signed in through, e.g. `google`, `apple`, `discord`. A free    string, not an enum: an organization can wire up any provider without Connect needing a new release.
     * @param string|null $value Value to set for the provider property.
    */
    public function setProvider(?string $value): void {
        $this->provider = $value;
    }

    /**
     * Sets the providerId property value. Stable identifier of the customer at the provider (the provider's account id).
     * @param string|null $value Value to set for the providerId property.
    */
    public function setProviderId(?string $value): void {
        $this->providerId = $value;
    }

    /**
     * Sets the pushNotificationsToken property value. Device push-notification token (e.g. the app's APNs token), sent at sign-in. Refreshed when provided;    ignored when null.
     * @param string|null $value Value to set for the pushNotificationsToken property.
    */
    public function setPushNotificationsToken(?string $value): void {
        $this->pushNotificationsToken = $value;
    }

}
