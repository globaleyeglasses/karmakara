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
 * Update Inbound Shipment  Sample
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
 * sample for Update Inbound Shipment Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as FBAInboundServiceMWS_Model_UpdateInboundShipmentRequest
 $request = new FBAInboundServiceMWS_Model_UpdateInboundShipmentRequest();
 // $request->setSellerId(SELLER_ID);

 // invokeUpdateInboundShipment($service, $request);

                                        
/**
  * Update Inbound Shipment Action Sample
  * Updates an pre-existing inbound shipment specified by the
  * ShipmentId. It may include up to 200 items.
  * If InboundShipmentHeader is set. it replaces the header information
  * for the given shipment.
  * If InboundShipmentItems is set. it adds, replaces and removes
  * the line time to inbound shipment.
  * For non-existing item, it will add the item for new line item;
  * For existing line items, it will replace the QuantityShipped for the item.
  * For QuantityShipped = 0, it indicates the item should be removed from the shipment
  * This operation will simply return a shipment Id upon success,
  * otherwise an explicit error will be returned.  
  * @param FBAInboundServiceMWS_Interface $service instance of FBAInboundServiceMWS_Interface
  * @param mixed $request FBAInboundServiceMWS_Model_UpdateInboundShipment or array of parameters
  */
  function invokeUpdateInboundShipment(FBAInboundServiceMWS_Interface $service, $request) 
  {
      try {
              $response = $service->updateInboundShipment($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        UpdateInboundShipmentResponse\n");
                if ($response->isSetUpdateInboundShipmentResult()) { 
                    echo("            UpdateInboundShipmentResult\n");
                    $updateInboundShipmentResult = $response->getUpdateInboundShipmentResult();
                    if ($updateInboundShipmentResult->isSetShipmentId()) 
                    {
                        echo("                ShipmentId\n");
                        echo("                    " . $updateInboundShipmentResult->getShipmentId() . "\n");
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
                