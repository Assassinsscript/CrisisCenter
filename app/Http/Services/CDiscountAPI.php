<?php
/**
 * Created by PhpStorm.
 * User=> raphael
 * Date=> 03/12/15
 * Time=> 22=>52
 */

namespace App\Http\Services;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Support\Collection;

class CDiscountAPI
{

    protected $cartId;
    protected $cartUrl;

    public function __construct()
    {
        $this->client = new Client(['cookies' => true]);

    }

    public function search($term, $nbItems = 10)
    {
    $response = $this->client->post('https://api.cdiscount.com/OpenApi/json/Search', [
        'body' => json_encode($this->parameters([
            'SearchRequest' => [
                'Keyword' => $term,
                'Pagination' => ['ItemsPerPage' => $nbItems, 'PageNumber' => 0],
                'SortBy' => 'relevance',
            ]
        ]))
    ]);

        $json =  (string)$response->getBody();

        return json_decode($json);
    }

    public function searchToCollection($term, $nbItems = 10)
    {
        return $this->extractProducts($this->search($term, $nbItems))->where('BestOffer.Seller.Id', '0');
    }

    public function extractProducts($result)
    {
        return new Collection($result->Products);
    }

    public function parameters($body = [])
    {
        return array_merge([
            'ApiKey' => env('CDISCOUNT_API_KEY'),
        ], $body);
    }

    public function pushToCart($productId, $quantity = 1)
    {
        $request = [
            'ProductId' => $productId,
            'Quantity' => $quantity,
            'OfferId' => '',
            'SellerId' => '',
        ];

        if ($this->cartId !== null) {
            $request['CartGUID'] = $this->cartId;
        }

        $body = $this->parameters([
            'PushToCartRequest' => $request
        ]);

        $response = $this->client->post('https://api.cdiscount.com/OpenApi/json/PushToCart', [
            'body' => json_encode($body)
        ]);

        $json = json_decode((string)$response->getBody());

        if (!isset($json->CartGUID)) {
            $this->cartId = null;
            return false;
        }

        $this->cartId = $json->CartGUID;
        $this->cartUrl = $json->CheckoutUrl;
        return true;
    }

    public function getCart()
    {
        if ($this->cartId === null) {
            return null;
        }

        $response = $this->client->post('https://api.cdiscount.com/OpenApi/json/GetCart', [
            'body' => json_encode($this->parameters([
                'CartRequest' => [
                    'CartGUID' => $this->cartId,
                ]
            ]))
        ]);

        $json =  (string)$response->getBody();

        return json_decode($json);
    }

    /**
     * @return mixed
     */
    public function getCartId()
    {
        return $this->cartId;
    }

    /**
     * @return mixed
     */
    public function getCartUrl()
    {
        return $this->cartUrl;
    }


}