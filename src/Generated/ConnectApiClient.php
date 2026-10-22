<?php

namespace HypeLabs\Connect\Sdk\Generated;

use HypeLabs\Connect\Sdk\Generated\Announcements\AnnouncementsRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Catalog\CatalogRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Customers\CustomersRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Incidents\IncidentsRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Orders\OrdersRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Proxies\ProxiesRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Reviews\ReviewsRequestBuilder;
use Microsoft\Kiota\Abstractions\ApiClientBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Serialization\Form\FormParseNodeFactory;
use Microsoft\Kiota\Serialization\Form\FormSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Json\JsonParseNodeFactory;
use Microsoft\Kiota\Serialization\Json\JsonSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Multipart\MultipartSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Text\TextParseNodeFactory;
use Microsoft\Kiota\Serialization\Text\TextSerializationWriterFactory;

/**
 * The main entry point of the SDK, exposes the configuration and the fluent API.
*/
class ConnectApiClient extends BaseRequestBuilder 
{
    /**
     * The announcements property
    */
    public function announcements(): AnnouncementsRequestBuilder {
        return new AnnouncementsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The catalog property
    */
    public function catalog(): CatalogRequestBuilder {
        return new CatalogRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The customers property
    */
    public function customers(): CustomersRequestBuilder {
        return new CustomersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The incidents property
    */
    public function incidents(): IncidentsRequestBuilder {
        return new IncidentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The orders property
    */
    public function orders(): OrdersRequestBuilder {
        return new OrdersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The proxies property
    */
    public function proxies(): ProxiesRequestBuilder {
        return new ProxiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The reviews property
    */
    public function reviews(): ReviewsRequestBuilder {
        return new ReviewsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ConnectApiClient and sets the default values.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}');
        ApiClientBuilder::registerDefaultSerializer(JsonSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(TextSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(FormSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(MultipartSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(JsonParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(TextParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(FormParseNodeFactory::class);
        if (empty($this->requestAdapter->getBaseUrl())) {
            $this->requestAdapter->setBaseUrl('https://connect.hypelabs.network');
        }
        $this->pathParameters['baseurl'] = $this->requestAdapter->getBaseUrl();
    }

}
