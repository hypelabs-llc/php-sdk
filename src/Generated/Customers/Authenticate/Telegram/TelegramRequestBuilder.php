<?php

namespace HypeLabs\Connect\Sdk\Generated\Customers\Authenticate\Telegram;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Models\ApiResponse;
use HypeLabs\Connect\Sdk\Generated\Models\AuthenticateCustomerTelegramRequest;
use HypeLabs\Connect\Sdk\Generated\Models\CustomerAuthResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /customers/authenticate/telegram
*/
class TelegramRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new TelegramRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/customers/authenticate/telegram');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Signs in the customer linked to a Telegram account, for your Telegram bot. The Telegram user id is trusted as reported by the Bot API. Returns the customer's identity, or fails when no customer is linked to this Telegram account.
     * @param AuthenticateCustomerTelegramRequest $body Identity attested by Telegram after a customer started the organization's bot. The Telegram user id is trustedas-is (Telegram authenticates it; it cannot be forged), and the Connect API resolves the customer alreadylinked to it. No customer is created here: the link is established elsewhere, by a signed-in customer addingtheir Telegram account, so an unlinked user is rejected rather than silently given a fresh account.
     * @param TelegramRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomerAuthResponse|null>
     * @throws Exception
    */
    public function post(AuthenticateCustomerTelegramRequest $body, ?TelegramRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '403' => [ApiResponse::class, 'createFromDiscriminatorValue'],
                '404' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomerAuthResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Signs in the customer linked to a Telegram account, for your Telegram bot. The Telegram user id is trusted as reported by the Bot API. Returns the customer's identity, or fails when no customer is linked to this Telegram account.
     * @param AuthenticateCustomerTelegramRequest $body Identity attested by Telegram after a customer started the organization's bot. The Telegram user id is trustedas-is (Telegram authenticates it; it cannot be forged), and the Connect API resolves the customer alreadylinked to it. No customer is created here: the link is established elsewhere, by a signed-in customer addingtheir Telegram account, so an unlinked user is rejected rather than silently given a fresh account.
     * @param TelegramRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AuthenticateCustomerTelegramRequest $body, ?TelegramRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return TelegramRequestBuilder
    */
    public function withUrl(string $rawUrl): TelegramRequestBuilder {
        return new TelegramRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
