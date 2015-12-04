<?php
/**
 * Created by PhpStorm.
 * User=> raphael
 * Date=> 03/12/15
 * Time=> 22=>52
 */

namespace App\Http\Services;


use GuzzleHttp\Client;

class CDiscountAPI
{

    private $guzzleClient;
    private static $URL_API = "https://api.cdiscount.com/OpenApi/json/";
    private static $URL_API_SEARCH = "Search";
    private static $KEY_API = "ebd2606b-38ad-4dde-8ec9-4545512b2dbf";


    public function __construct(){
        $this->guzzleClient = new Client([ 'base_uri' => self::getSearchRequest()]);
        $request = $this->guzzleClient->request('POST', self::getSearchRequest(), self::testRequest() );

        var_dump( $request->getBody());
        /*$request = $this->guzzleClient->post(self::getSearchRequest(),array(
            'content-type' => 'application/json'
        ),array());
        $request->setBody(json_encode(self::testRequest())); #set body!
        $response = $request->send();*/


        //var_dump( $response);
    }



    public static function testRequest(){
        return self::parametersConstructor("tablette", "relevance", 5, 1, 0, 400, "computers");
    }

    public static function parametersConstructor($keyword, $sortBy, $itemsPerPage, $pageNumber = 1, $minPrice = null, $maxPrice = null, $navigation="", $includeMarketPlace=false, $condition=null){

        $parameters = array(
            "ApiKey" => self::$KEY_API,
            "SearchRequest" => array(
                "Keyword"=> $keyword,
                "SortBy"=> $sortBy,
                "Pagination"=> array(
                    "ItemsPerPage"=> $itemsPerPage,
                    "PageNumber"=> $pageNumber),
                "Filters"=> array(
                    "Price"=> array(
                        "Min"=> $minPrice,
                        "Max"=> $maxPrice
                    ),
                    "Navigation"=> $navigation,
                    "IncludeMarketPlace"=> $includeMarketPlace,
                    // TODO Brands
                    "Condition"=> $condition
                )
            )
        );


        return $parameters;
    }





    private static function getSearchRequest(){
        return self::$URL_API . self::$URL_API_SEARCH;
    }









}