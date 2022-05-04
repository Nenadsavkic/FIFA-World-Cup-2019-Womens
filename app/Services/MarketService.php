<?php

namespace App\Services;

use App\Traits\AuthorizesMarketRequests;
use App\Traits\ConsumesExternalServices;
use App\Traits\InteractsWithMarketResponses;

use function PHPUnit\Framework\throwException;

class MarketService
{
    use ConsumesExternalServices, AuthorizesMarketRequests, InteractsWithMarketResponses;

    /**
     * The URL to send the request
     * @var string
     */
    protected $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.market.base_uri');
    }

    /**
     * Obtain the list of products from the API
     * @return stdClass
     */
    public function getProducts()
    {                           // Method    URL je preuzet iz '.env' kod pri dnu fajla (Pogledati) 
                                           //MARKET_BASE_URI=https://laravelapi.juandmegon.com/  
          return $this->makeRequest('GET', 'teams/');
    }

       /**
     * Obtain the single product from the API
     * @return stdClass
     */
    public function getProduct($id)
    {                           
          return $this->makeRequest('GET', "products/{$id}");
    }


    /**
     * Publish a product on the API 
     * @return stdClass
     */
    public function publishProduct($sellerId, $productData)
    {

      return $this->makeRequest(
            'POST', 
            "sellers/{$sellerId}/products", 
            [], 
            $productData, 
            [],
            $hasFile = true, 
      );
          
    }


    /**
     * Asociate product to the category
     * @return stdClass
     */
    public function setProductCategory($productId, $categoryId)
    {
      return $this->makeRequest(
            'PUT', 
            "products/{$productId}/categories/{$categoryId}", 
      );
            
    }


    /**
     * Update an existing product
     * @return stdClass
     */
    public function updateProduct($sellerId, $productId, $productData)
    {
          $productData['_method'] = 'PUT';

          return $this->makeRequest(
            'POST', 
            "sellers/{$sellerId}/products/{$productId}", 
            [], 
            $productData, 
            [],
            $hasFile = isset($productData['picture']) 
      );     
    }



    /**
     * Allows to purchase a product
     * @return stdClass
     * 
     */
    public function purchaseProduct($productId, $buyerId, $quantity)
    {
          
      return $this->makeRequest(
            'POST', 
            "products/{$productId}/buyers/{$buyerId}/transactions", 
            [], 
            ['quantity' => $quantity]
      ); 
    }

     /**
     * Obtain the list of categories from the API
     * @return stdClass
     */
    public function getCategories()
    {                          
          return $this->makeRequest('GET', 'categories');
    }

        /**
     * Obtain the single product from the API with specified category
     * @return stdClass
     */
    public function getCategoryProducts($id)
    {                           
          return $this->makeRequest('GET', "categories/{$id}/products");
    }

    /**
     * Retreive the user information from the API  
     * @return stdClass
     * 
     */
    public function getUserInformation()
    {
          return $this->makeRequest('GET', 'users/me');
    }


    /**
     * Obtains the list of purchases
     * @return stdClass
     */
    public function getPurchases($buyerId)
    {
     
      return $this->makeRequest('GET', "buyers/{$buyerId}/products");
          
    }


      /**
     * Obtains the list of publications
     * @return stdClass
     */
    public function getPublications($sellerId)
    {
     
      return $this->makeRequest('GET', "sellers/{$sellerId}/products");
          
    }


   

}

?>