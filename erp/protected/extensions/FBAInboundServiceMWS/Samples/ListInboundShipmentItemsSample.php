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
 * List Inbound Shipment Items  Sample
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
 * sample for List Inbound Shipment Items Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as FBAInboundServiceMWS_Model_ListInboundShipmentItemsRequest
 $request = new FBAInboundServiceMWS_Model_ListInboundShipmentItemsRequest();
 // $request->setSellerId(SELLER_ID);

 // invokeListInboundShipmentItems($service, $request);

                                                    
/**
  * List Inbound Shipment Items Action Sample
  * Gets the first set of inbound shipment items for the given ShipmentId or
  * all inbound shipment items updated between the given date range.
  * A NextToken is also returned to further iterate through the Seller's
  * remaining inbound shipment items. To get the next set of inbound
  * shipment items, you must call ListInboundShipmentItemsByNextToken and
  * pass in the 'NextToken' this call returned. If a NextToken is not
  * returned, it indicates the end-of-data. Use LastUpdatedBefore
  * and LastUpdatedAfter to filter results based on last updated time.
  * Either the ShipmentId or a pair of LastUpdatedBefore and LastUpdatedAfter
  * must be passed in. if ShipmentId is set, the LastUpdatedBefore and
  * LastUpdatedAfter will be ignored.  
  * @param FBAInboundServiceMWS_Interface $service instance of FBAInboundServiceMWS_Interface
  * @param mixed $request FBAInboundServiceMWS_Model_ListInboundShipmentItems or array of parameters
  */
  function invokeListInboundShipmentItems(FBAInboundServiceMWS_Interface $service, $request) 
  {
      try {
              $response = $service->listInboundShipmentItems($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        ListInboundShipmentItemsResponse\n");
                if ($response->isSetListInboundShipmentItemsResult()) { 
                    echo("            ListInboundShipmentItemsResult\n");
                    $listInboundShipmentItemsResult = $response->getListInboundShipmentItemsResult();
                    if ($listInboundShipmentItemsResult->isSetItemData()) { 
                        echo("                ItemData\n");
                        $itemData = $listInboundShipmentItemsResult->getItemData();
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
                    if ($listInboundShipmentItemsResult->isSetNextToken()) 
                    {
                        echo("                NextToken\n");
                        echo("                    " . $listInboundShipmentItemsResult->getNextToken() . "\n");
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
    
