<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApiResponse extends ApiException implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<ApiError>|null $errors The errors property
    */
    private ?array $errors = null;
    
    /**
     * @var string|null $escapedMessage The message property
    */
    private ?string $escapedMessage = null;
    
    /**
     * @var RequestDetails|null $requestDetails The requestDetails property
    */
    private ?RequestDetails $requestDetails = null;
    
    /**
     * @var int|null $statusCode The statusCode property
    */
    private ?int $statusCode = null;
    
    /**
     * Instantiates a new ApiResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApiResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApiResponse {
        return new ApiResponse();
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function escapedGetMessage(): ?string {
        return $this->escapedMessage;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the errors property value. The errors property
     * @return array<ApiError>|null
    */
    public function getErrors(): ?array {
        return $this->errors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([ApiError::class, 'createFromDiscriminatorValue'])),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'requestDetails' => fn(ParseNode $n) => $o->setRequestDetails($n->getObjectValue([RequestDetails::class, 'createFromDiscriminatorValue'])),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
        ];
    }

    /**
     * The primary error message.
     * @return string
    */
    public function getPrimaryErrorMessage(): string {
        return parent::getMessage();
    }

    /**
     * Gets the requestDetails property value. The requestDetails property
     * @return RequestDetails|null
    */
    public function getRequestDetails(): ?RequestDetails {
        return $this->requestDetails;
    }

    /**
     * Gets the statusCode property value. The statusCode property
     * @return int|null
    */
    public function getStatusCode(): ?int {
        return $this->statusCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('errors', $this->getErrors());
        $writer->writeStringValue('message', $this->escapedGetMessage());
        $writer->writeObjectValue('requestDetails', $this->getRequestDetails());
        $writer->writeIntegerValue('statusCode', $this->getStatusCode());
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
     * Sets the errors property value. The errors property
     * @param array<ApiError>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->escapedMessage = $value;
    }

    /**
     * Sets the requestDetails property value. The requestDetails property
     * @param RequestDetails|null $value Value to set for the requestDetails property.
    */
    public function setRequestDetails(?RequestDetails $value): void {
        $this->requestDetails = $value;
    }

    /**
     * Sets the statusCode property value. The statusCode property
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

}
