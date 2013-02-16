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
 * Get Fulfillment Order  Sample
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
 * sample for Get Fulfillment Order Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as FBAOutboundServiceMWS_Model_GetFulfillmentOrderRequest
 $request = new FBAOutboundServiceMWS_Model_GetFulfillmentOrderRequest();
 // $request->setSellerId(SELLER_ID);

 // invokeGetFulfillmentOrder($service, $request);

                                        
/**
  * Get Fulfillment Order Action Sample
  * Get detailed information about a FulfillmentOrder.  This includes the
  * original fulfillment order request, the status of the order and its
  * items in Amazon's fulfillment network, and the shipments that have been
  * generated to fulfill the order.
  * 
  *   
  * @param FBAOutboundServiceMWS_Interface $service instance of FBAOutboundServiceMWS_Interface
  * @param mixed $request FBAOutboundServiceMWS_Model_GetFulfillmentOrder or array of parameters
  */
  function invokeGetFulfillmentOrder(FBAOutboundServiceMWS_Interface $service, $request) 
  {
      try {
              $response = $service->getFulfillmentOrder($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        GetFulfillmentOrderResponse\n");
                if ($response->isSetGetFulfillmentOrderResult()) { 
                    echo("            GetFulfillmentOrderResult\n");
                    $getFulfillmentOrderResult = $response->getGetFulfillmentOrderResult();
                    if ($getFulfillmentOrderResult->isSetFulfillmentOrder()) { 
                        echo("                FulfillmentOrder\n");
                        $fulfillmentOrder = $getFulfillmentOrderResult->getFulfillmentOrder();
                        if ($fulfillmentOrder->isSetSellerFulfillmentOrderId()) 
                        {
                            echo("                    SellerFulfillmentOrderId\n");
                            echo("                        " . $fulfillmentOrder->getSellerFulfillmentOrderId() . "\n");
                        }
                        if ($fulfillmentOrder->isSetDisplayableOrderId()) 
                        {
                            echo("                    DisplayableOrderId\n");
                            echo("                        " . $fulfillmentOrder->getDisplayableOrderId() . "\n");
                        }
                        if ($fulfillmentOrder->isSetDisplayableOrderDateTime()) 
                        {
                            echo("                    DisplayableOrderDateTime\n");
                            echo("                        " . $fulfillmentOrder->getDisplayableOrderDateTime() . "\n");
                        }
                        if ($fulfillmentOrder->isSetDisplayableOrderComment()) 
                        {
                            echo("                    DisplayableOrderComment\n");
                            echo("                        " . $fulfillmentOrder->getDisplayableOrderComment() . "\n");
                        }
                        if ($fulfillmentOrder->isSetShippingSpeedCategory()) 
                        {
                            echo("                    ShippingSpeedCategory\n");
                            echo("                        " . $fulfillmentOrder->getShippingSpeedCategory() . "\n");
                        }
                        if ($fulfillmentOrder->isSetDestinationAddress()) { 
                            echo("                    DestinationAddress\n");
                            $destinationAddress = $fulfillmentOrder->getDestinationAddress();
                            if ($destinationAddress->isSetName()) 
                            {
                                echo("                        Name\n");
                                echo("                            " . $destinationAddress->getName() . "\n");
                            }
                            if ($destinationAddress->isSetLine1()) 
                            {
                                echo("                        Line1\n");
                                echo("                            " . $destinationAddress->getLine1() . "\n");
                            }
                            if ($destinationAddress->isSetLine2()) 
                            {
                                echo("                        Line2\n");
                                echo("                            " . $destinationAddress->getLine2() . "\n");
                            }
                            if ($destinationAddress->isSetLine3()) 
                            {
                                echo("                        Line3\n");
                                echo("                            " . $destinationAddress->getLine3() . "\n");
                            }
                            if ($destinationAddress->isSetDistrictOrCounty()) 
                            {
                                echo("                        DistrictOrCounty\n");
                                echo("                            " . $destinationAddress->getDistrictOrCounty() . "\n");
                            }
                            if ($destinationAddress->isSetCity()) 
                            {
                                echo("                        City\n");
                                echo("                            " . $destinationAddress->getCity() . "\n");
                            }
                            if ($destinationAddress->isSetStateOrProvinceCode()) 
                            {
                                echo("                        StateOrProvinceCode\n");
                                echo("                            " . $destinationAddress->getStateOrProvinceCode() . "\n");
                            }
                            if ($destinationAddress->isSetCountryCode()) 
                            {
                                echo("                        CountryCode\n");
                                echo("                            " . $destinationAddress->getCountryCode() . "\n");
                            }
                            if ($destinationAddress->isSetPostalCode()) 
                            {
                                echo("                        PostalCode\n");
                                echo("                            " . $destinationAddress->getPostalCode() . "\n");
                            }
                            if ($destinationAddress->isSetPhoneNumber()) 
                            {
                                echo("                        PhoneNumber\n");
                                echo("                            " . $destinationAddress->getPhoneNumber() . "\n");
                            }
                        } 
                        if ($fulfillmentOrder->isSetFulfillmentPolicy()) 
                        {
                            echo("                    FulfillmentPolicy\n");
                            echo("                        " . $fulfillmentOrder->getFulfillmentPolicy() . "\n");
                        }
                        if ($fulfillmentOrder->isSetFulfillmentMethod()) 
                        {
                            echo("                    FulfillmentMethod\n");
                            echo("                        " . $fulfillmentOrder->getFulfillmentMethod() . "\n");
                        }
                        if ($fulfillmentOrder->isSetReceivedDateTime()) 
                        {
                            echo("                    ReceivedDateTime\n");
                            echo("                        " . $fulfillmentOrder->getReceivedDateTime() . "\n");
                        }
                        if ($fulfillmentOrder->isSetFulfillmentOrderStatus()) 
                        {
                            echo("                    FulfillmentOrderStatus\n");
                            echo("                        " . $fulfillmentOrder->getFulfillmentOrderStatus() . "\n");
                        }
                        if ($fulfillmentOrder->isSetStatusUpdatedDateTime()) 
                        {
                            echo("                    StatusUpdatedDateTime\n");
                            echo("                        " . $fulfillmentOrder->getStatusUpdatedDateTime() . "\n");
                        }
                        if ($fulfillmentOrder->isSetNotificationEmailList()) { 
                            echo("                    NotificationEmailList\n");
                            $notificationEmailList = $fulfillmentOrder->getNotificationEmailList();
                            $memberList  =  $notificationEmailList->getmember();
                            foreach ($memberList as $member) { 
                                echo("                        member\n");
                                echo("                            " . $member);
                            }	
                        } 
                    } 
                    if ($getFulfillmentOrderResult->isSetFulfillmentOrderItem()) { 
                        echo("                FulfillmentOrderItem\n");
                        $fulfillmentOrderItem = $getFulfillmentOrderResult->getFulfillmentOrderItem();
                        $member1List = $fulfillmentOrderItem->getmember();
                        foreach ($member1List as $member1) {
                            echo("                    member\n");
                            if ($member1->isSetSellerSKU()) 
                            {
                                echo("                        SellerSKU\n");
                                echo("                            " . $member1->getSellerSKU() . "\n");
                            }
                            if ($member1->isSetSellerFulfillmentOrderItemId()) 
                            {
                                echo("                        SellerFulfillmentOrderItemId\n");
                                echo("                            " . $member1->getSellerFulfillmentOrderItemId() . "\n");
                            }
                            if ($member1->isSetQuantity()) 
                            {
                                echo("                        Quantity\n");
                                echo("                            " . $member1->getQuantity() . "\n");
                            }
                            if ($member1->isSetGiftMessage()) 
                            {
                                echo("                        GiftMessage\n");
                                echo("                            " . $member1->getGiftMessage() . "\n");
                            }
                            if ($member1->isSetDisplayableComment()) 
                            {
                                echo("                        DisplayableComment\n");
                                echo("                            " . $member1->getDisplayableComment() . "\n");
                            }
                            if ($member1->isSetFulfillmentNetworkSKU()) 
                            {
                                echo("                        FulfillmentNetworkSKU\n");
                                echo("                            " . $member1->getFulfillmentNetworkSKU() . "\n");
                            }
                            if ($member1->isSetOrderItemDisposition()) 
                            {
                                echo("                        OrderItemDisposition\n");
                                echo("                            " . $member1->getOrderItemDisposition() . "\n");
                            }
                            if ($member1->isSetCancelledQuantity()) 
                            {
                                echo("                        CancelledQuantity\n");
                                echo("                            " . $member1->getCancelledQuantity() . "\n");
                            }
                            if ($member1->isSetUnfulfillableQuantity()) 
                            {
                                echo("                        UnfulfillableQuantity\n");
                                echo("                            " . $member1->getUnfulfillableQuantity() . "\n");
                            }
                            if ($member1->isSetEstimatedShipDateTime()) 
                            {
                                echo("                        EstimatedShipDateTime\n");
                                echo("                            " . $member1->getEstimatedShipDateTime() . "\n");
                            }
                            if ($member1->isSetEstimatedArrivalDateTime()) 
                            {
                                echo("                        EstimatedArrivalDateTime\n");
                                echo("                            " . $member1->getEstimatedArrivalDateTime() . "\n");
                            }
                            if ($member1->isSetPerUnitDeclaredValue()) { 
                                echo("                        PerUnitDeclaredValue\n");
                                $perUnitDeclaredValue = $member1->getPerUnitDeclaredValue();
                                if ($perUnitDeclaredValue->isSetCurrencyCode()) 
                                {
                                    echo("                            CurrencyCode\n");
                                    echo("                                " . $perUnitDeclaredValue->getCurrencyCode() . "\n");
                                }
                                if ($perUnitDeclaredValue->isSetValue()) 
                                {
                                    echo("                            Value\n");
                                    echo("                                " . $perUnitDeclaredValue->getValue() . "\n");
                                }
                            } 
                        }
                    } 
                    if ($getFulfillmentOrderResult->isSetFulfillmentShipment()) { 
                        echo("                FulfillmentShipment\n");
                        $fulfillmentShipment = $getFulfillmentOrderResult->getFulfillmentShipment();
                        $member2List = $fulfillmentShipment->getmember();
                        foreach ($member2List as $member2) {
                            echo("                    member\n");
                            if ($member2->isSetAmazonShipmentId()) 
                            {
                                echo("                        AmazonShipmentId\n");
                                echo("                            " . $member2->getAmazonShipmentId() . "\n");
                            }
                            if ($member2->isSetFulfillmentCenterId()) 
                            {
                                echo("                        FulfillmentCenterId\n");
                                echo("                            " . $member2->getFulfillmentCenterId() . "\n");
                            }
                            if ($member2->isSetFulfillmentShipmentStatus()) 
                            {
                                echo("                        FulfillmentShipmentStatus\n");
                                echo("                            " . $member2->getFulfillmentShipmentStatus() . "\n");
                            }
                            if ($member2->isSetShippingDateTime()) 
                            {
                                echo("                        ShippingDateTime\n");
                                echo("                            " . $member2->getShippingDateTime() . "\n");
                            }
                            if ($member2->isSetEstimatedArrivalDateTime()) 
                            {
                                echo("                        EstimatedArrivalDateTime\n");
                                echo("                            " . $member2->getEstimatedArrivalDateTime() . "\n");
                            }
                            if ($member2->isSetFulfillmentShipmentItem()) { 
                                echo("                        FulfillmentShipmentItem\n");
                                $fulfillmentShipmentItem = $member2->getFulfillmentShipmentItem();
                                $member3List = $fulfillmentShipmentItem->getmember();
                                foreach ($member3List as $member3) {
                                    echo("                            member\n");
                                    if ($member3->isSetSellerSKU()) 
                                    {
                                        echo("                                SellerSKU\n");
                                        echo("                                    " . $member3->getSellerSKU() . "\n");
                                    }
                                    if ($member3->isSetSellerFulfillmentOrderItemId()) 
                                    {
                                        echo("                                SellerFulfillmentOrderItemId\n");
                                        echo("                                    " . $member3->getSellerFulfillmentOrderItemId() . "\n");
                                    }
                                    if ($member3->isSetQuantity()) 
                                    {
                                        echo("                                Quantity\n");
                                        echo("                                    " . $member3->getQuantity() . "\n");
                                    }
                                    if ($member3->isSetPackageNumber()) 
                                    {
                                        echo("                                PackageNumber\n");
                                        echo("                                    " . $member3->getPackageNumber() . "\n");
                                    }
                                }
                            } 
                            if ($member2->isSetFulfillmentShipmentPackage()) { 
                                echo("                        FulfillmentShipmentPackage\n");
                                $fulfillmentShipmentPackage = $member2->getFulfillmentShipmentPackage();
                                $member4List = $fulfillmentShipmentPackage->getmember();
                                foreach ($member4List as $member4) {
                                    echo("                            member\n");
                                    if ($member4->isSetPackageNumber()) 
                                    {
                                        echo("                                PackageNumber\n");
                                        echo("                                    " . $member4->getPackageNumber() . "\n");
                                    }
                                    if ($member4->isSetCarrierCode()) 
                                    {
                                        echo("                                CarrierCode\n");
                                        echo("                                    " . $member4->getCarrierCode() . "\n");
                                    }
                                    if ($member4->isSetTrackingNumber()) 
                                    {
                                        echo("                                TrackingNumber\n");
                                        echo("                                    " . $member4->getTrackingNumber() . "\n");
                                    }
                                    if ($member4->isSetEstimatedArrivalDateTime()) 
                                    {
                                        echo("                                EstimatedArrivalDateTime\n");
                                        echo("                                    " . $member4->getEstimatedArrivalDateTime() . "\n");
                                    }
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
            