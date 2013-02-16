<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     FBAOutboundServiceMWS
 *  @copyright   Copyright 2009 Amazon.com, Inc. All Rights Reserved.
 *  @link        http://mws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2010-10-01
 */
/******************************************************************************* 
 * 
 *  FBA Outbound Service MWS PHP5 Library
 *  Generated: Fri Oct 22 09:51:48 UTC 2010
 * 
 */

/**
 * Get Service Status  Sample
 */

include_once ('.config.inc.php'); 

/************************************************************************
* Configuration settings are:
*
* - MWS endpoint URL: it defined in the .config.inc.php located in the 
*                     same directory as this sample.
* - Proxy host and port.
* - MaxErrorRetry.
***********************************************************************/
$config = array (
  'ServiceURL' => MWS_ENDPOINT_URL,
  'ProxyHost' => null,
  'ProxyPort' => -1,
  'MaxErrorRetry' => 3
);

/************************************************************************
 * Instantiate Implementation of FBAOutboundServiceMWS
 * 
 * ACCESS_KEY_ID and SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
 $service = new FBAOutboundServiceMWS_Client(
     ACCESS_KEY_ID, 
     SECRET_ACCESS_KEY, 
     $config,
     APPLICATION_NAME,
     APPLICATION_VERSION);
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates FBAOutboundServiceMWS
 * responses without calling FBAOutboundServiceMWS service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under FBAOutboundServiceMWS/Mock tree
 *
 ***********************************************************************/
 // $service = new FBAOutboundServiceMWS_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for Get Service Status Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as FBAOutboundServiceMWS_Model_GetServiceStatusRequest
 $request = new FBAOutboundServiceMWS_Model_GetServiceStatusRequest();
 // $request->setSellerId(SELLER_ID);
 // $request->setMarketplace(MARKETPLACE_ID);

 // invokeGetServiceStatus($service, $request);

                                
/**
  * Get Service Status Action Sample
  * Request to poll the system for availability.
  * Status is one of GREEN, RED representing:
  * GREEN: This API section of the service is operating normally.
  * RED: The service is disrupted.
  *   
  * @param FBAOutboundServiceMWS_Interface $service instance of FBAOutboundServiceMWS_Interface
  * @param mixed $request FBAOutboundServiceMWS_Model_GetServiceStatus or array of parameters
  */
  function invokeGetServiceStatus(FBAOutboundServiceMWS_Interface $service, $request) 
  {
      try {
              $response = $service->getServiceStatus($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        GetServiceStatusResponse\n");
                if ($response->isSetGetServiceStatusResult()) { 
                    echo("            GetServiceStatusResult\n");
                    $getServiceStatusResult = $response->getGetServiceStatusResult();
                    if ($getServiceStatusResult->isSetStatus()) 
                    {
                        echo("                Status\n");
                        echo("                    " . $getServiceStatusResult->getStatus() . "\n");
                    }
                    if ($getServiceStatusResult->isSetTimestamp()) 
                    {
                        echo("                Timestamp\n");
                        echo("                    " . $getServiceStatusResult->getTimestamp() . "\n");
                    }
                } 
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 

     } catch (FBAOutboundServiceMWS_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
     }
 }
                    