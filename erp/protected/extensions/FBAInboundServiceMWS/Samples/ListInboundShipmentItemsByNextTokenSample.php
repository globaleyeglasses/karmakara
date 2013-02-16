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
 * List Inbound Shipment Items By Next Token  Sample
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
 * sample for List Inbound Shipment Items By Next Token Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as FBAInboundServiceMWS_Model_ListInboundShipmentItemsByNextTokenRequest
 $request = new FBAInboundServiceMWS_Model_ListInboundShipmentItemsByNextTokenRequest();
 // $request->setSellerId(SELLER_ID);

 // invokeListInboundShipmentItemsByNextToken($service, $request);

                                                
/**
  * List Inbound Shipment Items By Next Token Action Sample
  * Gets the next set of inbound shipment items with the NextToken
  * which can be used to iterate through the remaining inbound shipment
  * items. If a NextToken is not returned, it indicates the
  * end-of-data. You must first call ListInboundShipmentItems to get
  * a 'NextToken'.  
  * @param FBAInboundServiceMWS_Interface $service instance of FBAInboundServiceMWS_Interface
  * @param mixed $request FBAInboundServiceMWS_Model_ListInboundShipmentItemsByNextToken or array of parameters
  */
  function invokeListInboundShipmentItemsByNextToken(FBAInboundServiceMWS_Interface $service, $request) 
  {
      try {
              $response = $service->listInboundShipmentItemsByNextToken($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        ListInboundShipmentItemsByNextTokenResponse\n");
                if ($response->isSetListInboundShipmentItemsByNextTokenResult()) { 
                    echo("            ListInboundShipmentItemsByNextTokenResult\n");
                    $listInboundShipmentItemsByNextTokenResult = $response->getListInboundShipmentItemsByNextTokenResult();
                    if ($listInboundShipmentItemsByNextTokenResult->isSetItemData()) { 
                        echo("                ItemData\n");
                        $itemData = $listInboundShipmentItemsByNextTokenResult->getItemData();
                        $memberList = $itemData->getmember();
                        foreach ($memberList as $member) {
                            echo("                    member\n");
                            if ($member->isSetShipmentId()) 
                            {
                                echo("                        ShipmentId\n");
                                echo("                            " . $member->getShipmentId() . "\n");
                            }
                            if ($member->isSetSellerSKU()) 
                            {
                                echo("                        SellerSKU\n");
                                echo("                            " . $member->getSellerSKU() . "\n");
                            }
                            if ($member->isSetFulfillmentNetworkSKU()) 
                            {
                                echo("                        FulfillmentNetworkSKU\n");
                                echo("                            " . $member->getFulfillmentNetworkSKU() . "\n");
                            }
                            if ($member->isSetQuantityShipped()) 
                            {
                                echo("                        QuantityShipped\n");
                                echo("                            " . $member->getQuantityShipped() . "\n");
                            }
                            if ($member->isSetQuantityReceived()) 
                            {
                                echo("                        QuantityReceived\n");
                                echo("                            " . $member->getQuantityReceived() . "\n");
                            }
                            if ($member->isSetQuantityInCase()) 
                            {
                                echo("                        QuantityInCase\n");
                                echo("                            " . $member->getQuantityInCase() . "\n");
                            }
                        }
                    } 
                    if ($listInboundShipmentItemsByNextTokenResult->isSetNextToken()) 
                    {
                        echo("                NextToken\n");
                        echo("                    " . $listInboundShipmentItemsByNextTokenResult->getNextToken() . "\n");
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
        
