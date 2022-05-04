<?php


namespace App\Traits;

trait InteractsWithMarketResponses
{
      /**
    * Decode correspondingly the response  
    * @return  sdtClass
     */ 
    public function decodeResponse($response)
    {
       $decodedResponse = json_decode($response); 

       return $decodedResponse->data ?? $decodedResponse;
    }
    
    /**
     * Resolve when request failed
     * @return void
     */
    public function checkIfErrorResponse($response)
    {
       if (isset($response->error)) {
           throw new \Exception("Something failed: {$response->error}");
       } 
    }
}

?>