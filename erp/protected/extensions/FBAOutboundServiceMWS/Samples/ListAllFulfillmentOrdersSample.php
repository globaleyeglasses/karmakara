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
 * List All Fulfillment Orders  Sample
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
 * sample for List All Fulfillment Orders Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as FBAOutboundServiceMWS_Model_ListAllFulfillmentOrdersRequest
 $request = new FBAOutboundServiceMWS_Model_ListAllFulfillmentOrdersRequest();
 // $request->setSellerId(SELLER_ID);

 // invokeListAllFulfillmentOrders($service, $request);

                        
/**
  * List All Fulfillment Orders Action Sample
  * Gets the first set of fulfillment orders that are currently being
  * fulfilled or that were being fulfilled at some time in the past
  * (as specified by the query parameters). Also returns a NextToken
  * which can be used iterate through the remaining fulfillment orders
  * (via the ListAllFulfillmentOrdersByNextToken operation).
  * If a NextToken is not returned, it indicates the end-of-data.
  * 
  * If the QueryStartDateTime is set, the results will include all orders
  * currently being fulfilled, and all orders that were being fulfilled
  * since that date and time.
  *   
  * @param FBAOutboundServiceMWS_Interface $service instance of FBAOutboundServiceMWS_Interface
  * @param mixed $request FBAOutboundServiceMWS_Model_ListAllFulfillmentOrders or array of parameters
  */
  function invokeListAllFulfillmentOrders(FBAOutboundServiceMWS_Interface $service, $request) 
  {
      try {
              $response = $service->listAllFulfillmentOrders($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        ListAllFulfillmentOrdersResponse\n");
                if ($response->isSetListAllFulfillmentOrdersResult()) { 
                    echo("            ListAllFulfillmentOrdersResult\n");
                    $listAllFulfillmentOrdersResult = $response->getListAllFulfillmentOrdersResult();
                    if ($listAllFulfillmentOrdersResult->isSetNextToken()) 
                    {
                        echo("                NextToken\n");
                        echo("                    " . $listAllFulfillmentOrdersResult->getNextToken() . "\n");
                    }
                    if ($listAllFulfillmentOrdersResult->isSetFulfillmentOrders()) { 
                        echo("                FulfillmentOrders\n");
                        $fulfillmentOrders = $listAllFulfillmentOrdersResult->getFulfillmentOrders();
                        $memberList = $fulfillmentOrders->getmember();
                        foreach ($memberList as $member) {
                            echo("                    member\n");
                            if ($member->isSetSellerFulfillmentOrderId()) 
                            {
                                echo("                        SellerFulfillmentOrderId\n");
                                echo("                            " . $member->getSellerFulfillmentOrderId() . "\n");
                            }
                            if ($member->isSetDisplayableOrderId()) 
                            {
                                echo("                        DisplayableOrderId\n");
                                echo("                            " . $member->getDisplayableOrderId() . "\n");
                            }
                            if ($member->isSetDisplayableOrderDateTime()) 
                            {
                                echo("                        DisplayableOrderDateTime\n");
                                echo("                            " . $member->getDisplayableOrderDateTime() . "\n");
                            }
                            if ($member->isSetDisplayableOrderComment()) 
                            {
                                echo("                        DisplayableOrderComment\n");
                                echo("                            " . $member->getDisplayableOrderComment() . "\n");
                            }
                            if ($member->isSetShippingSpeedCategory()) 
                            {
                                echo("                        ShippingSpeedCategory\n");
                                echo("                            " . $member->getShippingSpeedCategory() . "\n");
                            }
                            if ($member->isSetDestinationAddress()) { 
                                echo("                        DestinationAddress\n");
                                $destinationAddress = $member->getDestinationAddress();
                                if ($destinationAddress->isSetName()) 
                                {
                                    echo("                            Name\n");
                                    echo("                                " . $destinationAddress->getName() . "\n");
                                }
                                if ($destinationAddress->isSetLine1()) 
                                {
                                    echo("                            Line1\n");
                                    echo("                                " . $destinationAddress->getLine1() . "\n");
                                }
                                if ($destinationAddress->isSetLine2()) 
                                {
                                    echo("                            Line2\n");
                                    echo("                                " . $destinationAddress->getLine2() . "\n");
                                }
                                if ($destinationAddress->isSetLine3()) 
                                {
                                    echo("                            Line3\n");
                                    echo("                                " . $destinationAddress->getLine3() . "\n");
                                }
                                if ($destinationAddress->isSetDistrictOrCounty()) 
                                {
                                    echo("                            DistrictOrCounty\n");
                                    echo("                                " . $destinationAddress->getDistrictOrCounty() . "\n");
                                }
                                if ($destinationAddress->isSetCity()) 
                                {
                                    echo("                            City\n");
                                    echo("                                " . $destinationAddress->getCity() . "\n");
                                }
                                if ($destinationAddress->isSetStateOrProvinceCode()) 
                                {
                                    echo("                            StateOrProvinceCode\n");
                                    echo("                                " . $destinationAddress->getStateOrProvinceCode() . "\n");
                                }
                                if ($destinationAddress->isSetCountryCode()) 
                                {
                                    echo("                            CountryCode\n");
                                    echo("                                " . $destinationAddress->getCountryCode() . "\n");
                                }
                                if ($destinationAddress->isSetPostalCode()) 
                                {
                                    echo("                            PostalCode\n");
                                    echo("                                " . $destinationAddress->getPostalCode() . "\n");
                                }
                                if ($destinationAddress->isSetPhoneNumber()) 
                                {
                                    echo("                            PhoneNumber\n");
                                    echo("                                " . $destinationAddress->getPhoneNumber() . "\n");
                                }
                            } 
                            if ($member->isSetFulfillmentPolicy()) 
                            {
                                echo("                        FulfillmentPolicy\n");
                                echo("                            " . $member->getFulfillmentPolicy() . "\n");
                            }
                            if ($member->isSetFulfillmentMethod()) 
                            {
                                echo("                        FulfillmentMethod\n");
                                echo("                            " . $member->getFulfillmentMethod() . "\n");
                            }
                            if ($member->isSetReceivedDateTime()) 
                            {
                                echo("                        ReceivedDateTime\n");
                                echo("                            " . $member->getReceivedDateTime() . "\n");
                            }
                            if ($member->isSetFulfillmentOrderStatus()) 
                            {
                                echo("                        FulfillmentOrderStatus\n");
                                echo("                            " . $member->getFulfillmentOrderStatus() . "\n");
                            }
                            if ($member->isSetStatusUpdatedDateTime()) 
                            {
                                echo("                        StatusUpdatedDateTime\n");
                                echo("                            " . $member->getStatusUpdatedDateTime() . "\n");
                            }
                            if ($member->isSetNotificationEmailList()) { 
                                echo("                        NotificationEmailList\n");
                                $notificationEmailList = $member->getNotificationEmailList();
                                $member1List  =  $notificationEmailList->getmember();
                                foreach ($member1List as $member1) { 
                                    echo("                            member\n");
                                    echo("                                " . $member1);
                                }	
                            } 
                        }
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
                            