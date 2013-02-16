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
 * Create Fulfillment Order  Sample
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
 * sample for Create Fulfillment Order Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as FBAOutboundServiceMWS_Model_CreateFulfillmentOrderRequest
 $request = new FBAOutboundServiceMWS_Model_CreateFulfillmentOrderRequest();
 // $request->setSellerId(SELLER_ID);

 // invokeCreateFulfillmentOrder($service, $request);

                                                
/**
  * Create Fulfillment Order Action Sample
  * The SellerFulfillmentOrderId must be unique for all fulfillment
  * orders created by the seller. If your system already has a
  * unique order identifier, then that may be a good value to put in
  * this field.
  * This DisplayableOrderDateTime will appear as the "order date" in
  * recipient-facing materials such as the packing slip.  The format
  * must be timestamp.
  * The DisplayableOrderId will appear as the "order id" in those
  * materials, and the DisplayableOrderComment will appear as well.
  * 
  * ShippingSpeedCategory is the Service Level Agreement for how long it
  * will take a shipment to be transported from the fulfillment center
  * to the recipient, once shipped. no default.
  * The following shipping speeds are available for US domestic:
  * * Standard, 3-5 business days
  * * Expedited, 2 business days
  * * Priority, 1 business day
  * Shipping speeds may vary elsewhere.  Please consult your manual for published SLAs.
  * DestinationAddress is the address the items will be shipped to.
  * FulfillmentPolicy indicates how unfulfillable items should be
  * handled. default is FillOrKill.
  * * FillOrKill if any item is determined to be unfulfillable
  * before any items have started shipping, the entire order is
  * considered unfulfillable.  Once any part of the order has
  * started shipping, as much of the order as possible will be
  * shipped.
  * * FillAll never consider any item unfulfillable.  Items must
  * either be fulfilled or merchant-cancelled.
  * * FillAllAvailable fulfill as much of the order as possible.
  * 
  * FulfillmentMethod indicates the intended recipient channel for the
  * order whether it be a consumer order or inventory return.
  * default is Consumer.
  * The available methods to fulfill a given order:
  * * Consumer indicates a customer order, this is the default.
  * * Removal indicates that the inventory should be returned to the
  * specified destination address.
  * 
  * 
  * NotificationEmailList can be used to provide a list of e-mail
  * addresses to receive ship-complete e-mail notifications. These
  * e-mails are customer-facing e-mails sent by FBA on behalf of
  * the seller.
  *   
  * @param FBAOutboundServiceMWS_Interface $service instance of FBAOutboundServiceMWS_Interface
  * @param mixed $request FBAOutboundServiceMWS_Model_CreateFulfillmentOrder or array of parameters
  */
  function invokeCreateFulfillmentOrder(FBAOutboundServiceMWS_Interface $service, $request) 
  {
      try {
              $response = $service->createFulfillmentOrder($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        CreateFulfillmentOrderResponse\n");
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
    