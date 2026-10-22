<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * An end user that an Organization? Customer.Organization manages through its API, scoped to that organization so twoorgs can hold the same email without collision. Not an ASP.NET Identity user (that is the platform's ownUser): customers never enter the auth pipeline.
*/
class Customer implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $allowedDomains Domains the customer's proxies authorize by default. Empty means no domain restriction set here;    `*` allows all.
    */
    private ?array $allowedDomains = null;
    
    /**
     * @var array<string>|null $allowedIps IP addresses the customer's proxies authorize by default. Empty means no IP restriction set here.
    */
    private ?array $allowedIps = null;
    
    /**
     * @var string|null $avatarUrl The user's Gravatar avatar URL, derived from their email (falls back to a neutral silhouette    when the address has no Gravatar). Computed, not stored.
    */
    private ?string $avatarUrl = null;
    
    /**
     * @var DateTime|null $bannedAt When the customer was banned. Null while active: banning disables access without deleting the    record, so the value is kept for the audit trail.
    */
    private ?DateTime $bannedAt = null;
    
    /**
     * @var CustomerBilling|null $billing The billing property
    */
    private ?CustomerBilling $billing = null;
    
    /**
     * @var string|null $countryCode The customer's ISO 3166-1 alpha-2 country code (uppercase): their billing country when set,    otherwise the region of their locale (e.g. `en-US` → `US`). Computed, not persisted.
    */
    private ?string $countryCode = null;
    
    /**
     * @var string|null $displayName Display name shown for the customer. Null when none was provided.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $email The customer's email. Unique within the owning organization.
    */
    private ?string $email = null;
    
    /**
     * @var bool|null $emailVerified Whether the email has been verified, set true when the customer follows the verification link    (see `CustomerService.VerifyEmailAsync`). Defaults to false.
    */
    private ?bool $emailVerified = null;
    
    /**
     * @var string|null $externalId Identifier this customer has in the organization's own system, matched to keep creation    idempotent. Null when the organization supplies none.
    */
    private ?string $externalId = null;
    
    /**
     * @var Customer_externalLogins|null $externalLogins The user's external OAuth logins, keyed by provider (e.g. "apple", "google") with the provider's    user identifier as the value. Stored as JSON. Null when the user has no linked social logins.
    */
    private ?Customer_externalLogins $externalLogins = null;
    
    /**
     * @var GracePeriodPolicies|null $gracePeriodPolicy The gracePeriodPolicy property
    */
    private ?GracePeriodPolicies $gracePeriodPolicy = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isActive Whether the user is allowed to authenticate. False = banned; set DateTimeOffset? Customer.BannedAt too.    Defaults to true.
    */
    private ?bool $isActive = null;
    
    /**
     * @var bool|null $isCompany Whether this customer is a company (B2B) rather than an individual. True only when billing says so;    a customer with no billing is treated as an individual. Computed, not persisted — the `isCompany` query    filter runs on this in memory, so a missing billing correctly counts as a person.
    */
    private ?bool $isCompany = null;
    
    /**
     * @var CustomerKyc|null $kyc The kyc property
    */
    private ?CustomerKyc $kyc = null;
    
    /**
     * @var DateTime|null $lastLoginAt When the user last signed in, if ever. Null until their first login.
    */
    private ?DateTime $lastLoginAt = null;
    
    /**
     * @var string|null $locale The user's preferred locale (e.g. "en", "fr") for localized emails and OTP messages. Null until set.
    */
    private ?string $locale = null;
    
    /**
     * @var Customer_metadata|null $metadata The metadata property
    */
    private ?Customer_metadata $metadata = null;
    
    /**
     * @var PasswordHashSchemes|null $passwordHashScheme Scheme that produced string? Customer.PasswordHash, defaulting to BCrypt. A Legacy hash is an import    from a previous system, verified as-is and upgraded to BCrypt on the next successful login. The scheme is    exposed to clients (the admin surface shows it) even though the hash itself never is.
    */
    private ?PasswordHashSchemes $passwordHashScheme = null;
    
    /**
     * @var string|null $paymentCustomerId The user's id with the payment processor (e.g. a Stripe customer id), if one has been created    for them. Generic across processors; null until set.
    */
    private ?string $paymentCustomerId = null;
    
    /**
     * @var string|null $phoneNumber The user's phone number, if provided. Null until set.
    */
    private ?string $phoneNumber = null;
    
    /**
     * @var string|null $pushNotificationsToken The device token used to send this user push notifications, if one has been registered. Null    until set.
    */
    private ?string $pushNotificationsToken = null;
    
    /**
     * Instantiates a new Customer and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Customer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Customer {
        return new Customer();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedDomains property value. Domains the customer's proxies authorize by default. Empty means no domain restriction set here;    `*` allows all.
     * @return array<string>|null
    */
    public function getAllowedDomains(): ?array {
        return $this->allowedDomains;
    }

    /**
     * Gets the allowedIps property value. IP addresses the customer's proxies authorize by default. Empty means no IP restriction set here.
     * @return array<string>|null
    */
    public function getAllowedIps(): ?array {
        return $this->allowedIps;
    }

    /**
     * Gets the avatarUrl property value. The user's Gravatar avatar URL, derived from their email (falls back to a neutral silhouette    when the address has no Gravatar). Computed, not stored.
     * @return string|null
    */
    public function getAvatarUrl(): ?string {
        return $this->avatarUrl;
    }

    /**
     * Gets the bannedAt property value. When the customer was banned. Null while active: banning disables access without deleting the    record, so the value is kept for the audit trail.
     * @return DateTime|null
    */
    public function getBannedAt(): ?DateTime {
        return $this->bannedAt;
    }

    /**
     * Gets the billing property value. The billing property
     * @return CustomerBilling|null
    */
    public function getBilling(): ?CustomerBilling {
        return $this->billing;
    }

    /**
     * Gets the countryCode property value. The customer's ISO 3166-1 alpha-2 country code (uppercase): their billing country when set,    otherwise the region of their locale (e.g. `en-US` → `US`). Computed, not persisted.
     * @return string|null
    */
    public function getCountryCode(): ?string {
        return $this->countryCode;
    }

    /**
     * Gets the displayName property value. Display name shown for the customer. Null when none was provided.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the email property value. The customer's email. Unique within the owning organization.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Gets the emailVerified property value. Whether the email has been verified, set true when the customer follows the verification link    (see `CustomerService.VerifyEmailAsync`). Defaults to false.
     * @return bool|null
    */
    public function getEmailVerified(): ?bool {
        return $this->emailVerified;
    }

    /**
     * Gets the externalId property value. Identifier this customer has in the organization's own system, matched to keep creation    idempotent. Null when the organization supplies none.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * Gets the externalLogins property value. The user's external OAuth logins, keyed by provider (e.g. "apple", "google") with the provider's    user identifier as the value. Stored as JSON. Null when the user has no linked social logins.
     * @return Customer_externalLogins|null
    */
    public function getExternalLogins(): ?Customer_externalLogins {
        return $this->externalLogins;
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
            'avatarUrl' => fn(ParseNode $n) => $o->setAvatarUrl($n->getStringValue()),
            'bannedAt' => fn(ParseNode $n) => $o->setBannedAt($n->getDateTimeValue()),
            'billing' => fn(ParseNode $n) => $o->setBilling($n->getObjectValue([CustomerBilling::class, 'createFromDiscriminatorValue'])),
            'countryCode' => fn(ParseNode $n) => $o->setCountryCode($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'emailVerified' => fn(ParseNode $n) => $o->setEmailVerified($n->getBooleanValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'externalLogins' => fn(ParseNode $n) => $o->setExternalLogins($n->getObjectValue([Customer_externalLogins::class, 'createFromDiscriminatorValue'])),
            'gracePeriodPolicy' => fn(ParseNode $n) => $o->setGracePeriodPolicy($n->getEnumValue(GracePeriodPolicies::class)),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'isCompany' => fn(ParseNode $n) => $o->setIsCompany($n->getBooleanValue()),
            'kyc' => fn(ParseNode $n) => $o->setKyc($n->getObjectValue([CustomerKyc::class, 'createFromDiscriminatorValue'])),
            'lastLoginAt' => fn(ParseNode $n) => $o->setLastLoginAt($n->getDateTimeValue()),
            'locale' => fn(ParseNode $n) => $o->setLocale($n->getStringValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([Customer_metadata::class, 'createFromDiscriminatorValue'])),
            'passwordHashScheme' => fn(ParseNode $n) => $o->setPasswordHashScheme($n->getEnumValue(PasswordHashSchemes::class)),
            'paymentCustomerId' => fn(ParseNode $n) => $o->setPaymentCustomerId($n->getStringValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'pushNotificationsToken' => fn(ParseNode $n) => $o->setPushNotificationsToken($n->getStringValue()),
        ];
    }

    /**
     * Gets the gracePeriodPolicy property value. The gracePeriodPolicy property
     * @return GracePeriodPolicies|null
    */
    public function getGracePeriodPolicy(): ?GracePeriodPolicies {
        return $this->gracePeriodPolicy;
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isActive property value. Whether the user is allowed to authenticate. False = banned; set DateTimeOffset? Customer.BannedAt too.    Defaults to true.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->isActive;
    }

    /**
     * Gets the isCompany property value. Whether this customer is a company (B2B) rather than an individual. True only when billing says so;    a customer with no billing is treated as an individual. Computed, not persisted — the `isCompany` query    filter runs on this in memory, so a missing billing correctly counts as a person.
     * @return bool|null
    */
    public function getIsCompany(): ?bool {
        return $this->isCompany;
    }

    /**
     * Gets the kyc property value. The kyc property
     * @return CustomerKyc|null
    */
    public function getKyc(): ?CustomerKyc {
        return $this->kyc;
    }

    /**
     * Gets the lastLoginAt property value. When the user last signed in, if ever. Null until their first login.
     * @return DateTime|null
    */
    public function getLastLoginAt(): ?DateTime {
        return $this->lastLoginAt;
    }

    /**
     * Gets the locale property value. The user's preferred locale (e.g. "en", "fr") for localized emails and OTP messages. Null until set.
     * @return string|null
    */
    public function getLocale(): ?string {
        return $this->locale;
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return Customer_metadata|null
    */
    public function getMetadata(): ?Customer_metadata {
        return $this->metadata;
    }

    /**
     * Gets the passwordHashScheme property value. Scheme that produced string? Customer.PasswordHash, defaulting to BCrypt. A Legacy hash is an import    from a previous system, verified as-is and upgraded to BCrypt on the next successful login. The scheme is    exposed to clients (the admin surface shows it) even though the hash itself never is.
     * @return PasswordHashSchemes|null
    */
    public function getPasswordHashScheme(): ?PasswordHashSchemes {
        return $this->passwordHashScheme;
    }

    /**
     * Gets the paymentCustomerId property value. The user's id with the payment processor (e.g. a Stripe customer id), if one has been created    for them. Generic across processors; null until set.
     * @return string|null
    */
    public function getPaymentCustomerId(): ?string {
        return $this->paymentCustomerId;
    }

    /**
     * Gets the phoneNumber property value. The user's phone number, if provided. Null until set.
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the pushNotificationsToken property value. The device token used to send this user push notifications, if one has been registered. Null    until set.
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
        $writer->writeCollectionOfPrimitiveValues('allowedDomains', $this->getAllowedDomains());
        $writer->writeCollectionOfPrimitiveValues('allowedIps', $this->getAllowedIps());
        $writer->writeStringValue('avatarUrl', $this->getAvatarUrl());
        $writer->writeDateTimeValue('bannedAt', $this->getBannedAt());
        $writer->writeObjectValue('billing', $this->getBilling());
        $writer->writeStringValue('countryCode', $this->getCountryCode());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeBooleanValue('emailVerified', $this->getEmailVerified());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeObjectValue('externalLogins', $this->getExternalLogins());
        $writer->writeEnumValue('gracePeriodPolicy', $this->getGracePeriodPolicy());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeBooleanValue('isCompany', $this->getIsCompany());
        $writer->writeObjectValue('kyc', $this->getKyc());
        $writer->writeDateTimeValue('lastLoginAt', $this->getLastLoginAt());
        $writer->writeStringValue('locale', $this->getLocale());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeEnumValue('passwordHashScheme', $this->getPasswordHashScheme());
        $writer->writeStringValue('paymentCustomerId', $this->getPaymentCustomerId());
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
     * Sets the allowedDomains property value. Domains the customer's proxies authorize by default. Empty means no domain restriction set here;    `*` allows all.
     * @param array<string>|null $value Value to set for the allowedDomains property.
    */
    public function setAllowedDomains(?array $value): void {
        $this->allowedDomains = $value;
    }

    /**
     * Sets the allowedIps property value. IP addresses the customer's proxies authorize by default. Empty means no IP restriction set here.
     * @param array<string>|null $value Value to set for the allowedIps property.
    */
    public function setAllowedIps(?array $value): void {
        $this->allowedIps = $value;
    }

    /**
     * Sets the avatarUrl property value. The user's Gravatar avatar URL, derived from their email (falls back to a neutral silhouette    when the address has no Gravatar). Computed, not stored.
     * @param string|null $value Value to set for the avatarUrl property.
    */
    public function setAvatarUrl(?string $value): void {
        $this->avatarUrl = $value;
    }

    /**
     * Sets the bannedAt property value. When the customer was banned. Null while active: banning disables access without deleting the    record, so the value is kept for the audit trail.
     * @param DateTime|null $value Value to set for the bannedAt property.
    */
    public function setBannedAt(?DateTime $value): void {
        $this->bannedAt = $value;
    }

    /**
     * Sets the billing property value. The billing property
     * @param CustomerBilling|null $value Value to set for the billing property.
    */
    public function setBilling(?CustomerBilling $value): void {
        $this->billing = $value;
    }

    /**
     * Sets the countryCode property value. The customer's ISO 3166-1 alpha-2 country code (uppercase): their billing country when set,    otherwise the region of their locale (e.g. `en-US` → `US`). Computed, not persisted.
     * @param string|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?string $value): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the displayName property value. Display name shown for the customer. Null when none was provided.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->displayName = $value;
    }

    /**
     * Sets the email property value. The customer's email. Unique within the owning organization.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the emailVerified property value. Whether the email has been verified, set true when the customer follows the verification link    (see `CustomerService.VerifyEmailAsync`). Defaults to false.
     * @param bool|null $value Value to set for the emailVerified property.
    */
    public function setEmailVerified(?bool $value): void {
        $this->emailVerified = $value;
    }

    /**
     * Sets the externalId property value. Identifier this customer has in the organization's own system, matched to keep creation    idempotent. Null when the organization supplies none.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->externalId = $value;
    }

    /**
     * Sets the externalLogins property value. The user's external OAuth logins, keyed by provider (e.g. "apple", "google") with the provider's    user identifier as the value. Stored as JSON. Null when the user has no linked social logins.
     * @param Customer_externalLogins|null $value Value to set for the externalLogins property.
    */
    public function setExternalLogins(?Customer_externalLogins $value): void {
        $this->externalLogins = $value;
    }

    /**
     * Sets the gracePeriodPolicy property value. The gracePeriodPolicy property
     * @param GracePeriodPolicies|null $value Value to set for the gracePeriodPolicy property.
    */
    public function setGracePeriodPolicy(?GracePeriodPolicies $value): void {
        $this->gracePeriodPolicy = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isActive property value. Whether the user is allowed to authenticate. False = banned; set DateTimeOffset? Customer.BannedAt too.    Defaults to true.
     * @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value): void {
        $this->isActive = $value;
    }

    /**
     * Sets the isCompany property value. Whether this customer is a company (B2B) rather than an individual. True only when billing says so;    a customer with no billing is treated as an individual. Computed, not persisted — the `isCompany` query    filter runs on this in memory, so a missing billing correctly counts as a person.
     * @param bool|null $value Value to set for the isCompany property.
    */
    public function setIsCompany(?bool $value): void {
        $this->isCompany = $value;
    }

    /**
     * Sets the kyc property value. The kyc property
     * @param CustomerKyc|null $value Value to set for the kyc property.
    */
    public function setKyc(?CustomerKyc $value): void {
        $this->kyc = $value;
    }

    /**
     * Sets the lastLoginAt property value. When the user last signed in, if ever. Null until their first login.
     * @param DateTime|null $value Value to set for the lastLoginAt property.
    */
    public function setLastLoginAt(?DateTime $value): void {
        $this->lastLoginAt = $value;
    }

    /**
     * Sets the locale property value. The user's preferred locale (e.g. "en", "fr") for localized emails and OTP messages. Null until set.
     * @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value): void {
        $this->locale = $value;
    }

    /**
     * Sets the metadata property value. The metadata property
     * @param Customer_metadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?Customer_metadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the passwordHashScheme property value. Scheme that produced string? Customer.PasswordHash, defaulting to BCrypt. A Legacy hash is an import    from a previous system, verified as-is and upgraded to BCrypt on the next successful login. The scheme is    exposed to clients (the admin surface shows it) even though the hash itself never is.
     * @param PasswordHashSchemes|null $value Value to set for the passwordHashScheme property.
    */
    public function setPasswordHashScheme(?PasswordHashSchemes $value): void {
        $this->passwordHashScheme = $value;
    }

    /**
     * Sets the paymentCustomerId property value. The user's id with the payment processor (e.g. a Stripe customer id), if one has been created    for them. Generic across processors; null until set.
     * @param string|null $value Value to set for the paymentCustomerId property.
    */
    public function setPaymentCustomerId(?string $value): void {
        $this->paymentCustomerId = $value;
    }

    /**
     * Sets the phoneNumber property value. The user's phone number, if provided. Null until set.
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the pushNotificationsToken property value. The device token used to send this user push notifications, if one has been registered. Null    until set.
     * @param string|null $value Value to set for the pushNotificationsToken property.
    */
    public function setPushNotificationsToken(?string $value): void {
        $this->pushNotificationsToken = $value;
    }

}
