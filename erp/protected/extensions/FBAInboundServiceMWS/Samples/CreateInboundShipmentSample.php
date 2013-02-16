<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     FBAInboundServiceMWS
 *  @copyright   Copyright 2009 Amazon.com, Inc. All Rights Reserved.
 *  @link        http://mws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2010-10-01
 */
/******************************************************************************* 
 * 
 *  FBA Inbound Service MWS PHP5 Library
 *  Generated: Fri Oct 22 09:52:55 UTC 2010
 * 
 */

/**
 * Create Inbound Shipment  Sample
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
 * Instantiate Implementation of FBAInboundServiceMWS
 * 
 * ACCESS_KEY_ID and SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
 $service = new FBAInboundServiceMWS_Client(
     ACCESS_KEY_ID, 
     SECRET_ACCESS_KEY, 
     $config,
     APPLICATION_NAME,
     APPLICATION_VERSION);
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates FBAInboundServiceMWS
 * responses without calling FBAInboundServiceMWS service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under FBAInboundServiceMWS/Mock tree
 *
 ***********************************************************************/
 // $service = new FBAInboundServiceMWS_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for Create Inbound Shipment Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as FBAInboundServiceMWS_Model_CreateInboundShipmentRequest
 $request = new FBAInboundServiceMWS_Model_CreateInboundShipmentRequest();
 // $request->setSellerId(SELLER_ID);

 // invokeCreateInboundShipment($service, $request);

                                            
/**
  * Create Inbound Shipment Action Sample
  * Creates an inbound shipment. It may include up to 200 items.
  * The initial status of a shipment will be set to 'Working'.
  * This operation will simply return a shipment Id upon success,
  * otherwise an explicit error will be returned.
  * More items may be added using the Update call.  
  * @param FBAInboundServiceMWS_Interface $service instance of FBAInboundServiceMWS_Interface
  * @param mixed $request FBAInboundServiceMWS_Model_CreateInboundShipment or array of parameters
  */
  function invokeCreateInboundShipment(FBAInboundServiceMWS_Interface $service, $request) 
  {
      try {
              $response = $service->createInboundShipment($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        CreateInboundShipmentResponse\n");
                if ($response->isSetCreateInboundShipmentResult()) { 
                    echo("            CreateInboundShipmentResult\n");
                    $createInboundShipmentResult = $response->getCreateInboundShipmentResult();
                    if ($createInboundShipmentResult->isSetShipmentId()) 
                    {
                        echo("                ShipmentId\n");
                        echo("                    " . $createInboundShipmentResult->getShipmentId() . "\n");
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

     } catch (FBAInboundServiceMWS_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
     }
 }
            