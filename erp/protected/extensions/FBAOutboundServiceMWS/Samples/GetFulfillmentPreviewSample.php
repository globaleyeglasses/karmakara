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
 * Get Fulfillment Preview  Sample
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
 * sample for Get Fulfillment Preview Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as FBAOutboundServiceMWS_Model_GetFulfillmentPreviewRequest
 $request = new FBAOutboundServiceMWS_Model_GetFulfillmentPreviewRequest();
 // $request->setSellerId(SELLER_ID);

 // invokeGetFulfillmentPreview($service, $request);

                            
/**
  * Get Fulfillment Preview Action Sample
  * Get estimated shipping dates and fees for all
  * available shipping speed given a set of seller SKUs and quantities
  * If "ShippingSpeedCategories" are inputed, only previews for those options will be returned.
  * 
  * If "ShippingSpeedCategories" are not inputed, then previews for all available options
  * are returned.
  * The service will return the fulfillment estimates for a set of Seller
  * SKUs and quantities.
  *   
  * @param FBAOutboundServiceMWS_Interface $service instance of FBAOutboundServiceMWS_Interface
  * @param mixed $request FBAOutboundServiceMWS_Model_GetFulfillmentPreview or array of parameters
  */
  function invokeGetFulfillmentPreview(FBAOutboundServiceMWS_Interface $service, $request) 
  {
      try {
              $response = $service->getFulfillmentPreview($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        GetFulfillmentPreviewResponse\n");
                if ($response->isSetGetFulfillmentPreviewResult()) { 
                    echo("            GetFulfillmentPreviewResult\n");
                    $getFulfillmentPreviewResult = $response->getGetFulfillmentPreviewResult();
                    if ($getFulfillmentPreviewResult->isSetFulfillmentPreviews()) { 
                        echo("                FulfillmentPreviews\n");
                        $fulfillmentPreviews = $getFulfillmentPreviewResult->getFulfillmentPreviews();
                        $memberList = $fulfillmentPreviews->getmember();
                        foreach ($memberList as $member) {
                            echo("                    member\n");
                            if ($member->isSetShippingSpeedCategory()) 
                            {
                                echo("                        ShippingSpeedCategory\n");
                                echo("                            " . $member->getShippingSpeedCategory() . "\n");
                            }
                            if ($member->isSetIsFulfillable()) 
                            {
                                echo("                        IsFulfillable\n");
                                echo("                            " . $member->getIsFulfillable() . "\n");
                            }
                            if ($member->isSetEstimatedShippingWeight()) { 
                                echo("                        EstimatedShippingWeight\n");
                                $estimatedShippingWeight = $member->getEstimatedShippingWeight();
                                if ($estimatedShippingWeight->isSetUnit()) 
                                {
                                    echo("                            Unit\n");
                                    echo("                                " . $estimatedShippingWeight->getUnit() . "\n");
                                }
                                if ($estimatedShippingWeight->isSetValue()) 
                                {
                                    echo("                            Value\n");
                                    echo("                                " . $estimatedShippingWeight->getValue() . "\n");
                                }
                            } 
                            if ($member->isSetEstimatedFees()) { 
                                echo("                        EstimatedFees\n");
                                $estimatedFees = $member->getEstimatedFees();
                                $member1List = $estimatedFees->getmember();
                                foreach ($member1List as $member1) {
                                    echo("                            member\n");
                                    if ($member1->isSetName()) 
                                    {
                                        echo("                                Name\n");
                                        echo("                                    " . $member1->getName() . "\n");
                                    }
                                    if ($member1->isSetAmount()) { 
                                        echo("                                Amount\n");
                                        $amount = $member1->getAmount();
                                        if ($amount->isSetCurrencyCode()) 
                                        {
                                            echo("                                    CurrencyCode\n");
                                            echo("                                        " . $amount->getCurrencyCode() . "\n");
                                        }
                                        if ($amount->isSetValue()) 
                                        {
                                            echo("                                    Value\n");
                                            echo("                                        " . $amount->getValue() . "\n");
                                        }
                                    } 
                                }
                            } 
                            if ($member->isSetFulfillmentPreviewShipments()) { 
                                echo("                        FulfillmentPreviewShipments\n");
                                $fulfillmentPreviewShipments = $member->getFulfillmentPreviewShipments();
                                $member2List = $fulfillmentPreviewShipments->getmember();
                                foreach ($member2List as $member2) {
                                    echo("                            member\n");
                                    if ($member2->isSetEarliestShipDate()) 
                                    {
                                        echo("                                EarliestShipDate\n");
                                        echo("                                    " . $member2->getEarliestShipDate() . "\n");
                                    }
                                    if ($member2->isSetLatestShipDate()) 
                                    {
                                        echo("                                LatestShipDate\n");
                                        echo("                                    " . $member2->getLatestShipDate() . "\n");
                                    }
                                    if ($member2->isSetEarliestArrivalDate()) 
                                    {
                                        echo("                                EarliestArrivalDate\n");
                                        echo("                                    " . $member2->getEarliestArrivalDate() . "\n");
                                    }
                                    if ($member2->isSetLatestArrivalDate()) 
                                    {
                                        echo("                                LatestArrivalDate\n");
                                        echo("                                    " . $member2->getLatestArrivalDate() . "\n");
                                    }
                                    if ($member2->isSetFulfillmentPreviewItems()) { 
                                        echo("                                FulfillmentPreviewItems\n");
                                        $fulfillmentPreviewItems = $member2->getFulfillmentPreviewItems();
                                        $member3List = $fulfillmentPreviewItems->getmember();
                                        foreach ($member3List as $member3) {
                                            echo("                                    member\n");
                                            if ($member3->isSetSellerSKU()) 
                                            {
                                                echo("                                        SellerSKU\n");
                                                echo("                                            " . $member3->getSellerSKU() . "\n");
                                            }
                                            if ($member3->isSetQuantity()) 
                                            {
                                                echo("                                        Quantity\n");
                                                echo("                                            " . $member3->getQuantity() . "\n");
                                            }
                                            if ($member3->isSetSellerFulfillmentOrderItemId()) 
                                            {
                                                echo("                                        SellerFulfillmentOrderItemId\n");
                                                echo("                                            " . $member3->getSellerFulfillmentOrderItemId() . "\n");
                                            }
                                            if ($member3->isSetEstimatedShippingWeight()) { 
                                                echo("                                        EstimatedShippingWeight\n");
                                                $estimatedShippingWeight1 = $member3->getEstimatedShippingWeight();
                                                if ($estimatedShippingWeight1->isSetUnit()) 
                                                {
                                                    echo("                                            Unit\n");
                                                    echo("                                                " . $estimatedShippingWeight1->getUnit() . "\n");
                                                }
                                                if ($estimatedShippingWeight1->isSetValue()) 
                                                {
                                                    echo("                                            Value\n");
                                                    echo("                                                " . $estimatedShippingWeight1->getValue() . "\n");
                                                }
                                            } 
                                            if ($member3->isSetShippingWeightCalculationMethod()) 
                                            {
                                                echo("                                        ShippingWeightCalculationMethod\n");
                                                echo("                                            " . $member3->getShippingWeightCalculationMethod() . "\n");
                                            }
                                        }
                                    } 
                                }
                            } 
                            if ($member->isSetUnfulfillablePreviewItems()) { 
                                echo("                        UnfulfillablePreviewItems\n");
                                $unfulfillablePreviewItems = $member->getUnfulfillablePreviewItems();
                                $member4List = $unfulfillablePreviewItems->getmember();
                                foreach ($member4List as $member4) {
                                    echo("                            member\n");
                                    if ($member4->isSetSellerSKU()) 
                                    {
                                        echo("                                SellerSKU\n");
                                        echo("                                    " . $member4->getSellerSKU() . "\n");
                                    }
                                    if ($member4->isSetQuantity()) 
                                    {
                                        echo("                                Quantity\n");
                                        echo("                                    " . $member4->getQuantity() . "\n");
                                    }
                                    if ($member4->isSetSellerFulfillmentOrderItemId()) 
                                    {
                                        echo("                                SellerFulfillmentOrderItemId\n");
                                        echo("                                    " . $member4->getSellerFulfillmentOrderItemId() . "\n");
                                    }
                                    if ($member4->isSetItemUnfulfillableReasons()) { 
                                        echo("                                ItemUnfulfillableReasons\n");
                                        $itemUnfulfillableReasons = $member4->getItemUnfulfillableReasons();
                                        $member5List  =  $itemUnfulfillableReasons->getmember();
                                        foreach ($member5List as $member5) { 
                                            echo("                                    member\n");
                                            echo("                                        " . $member5);
                                        }	
                                    } 
                                }
                            } 
                            if ($member->isSetOrderUnfulfillableReasons()) { 
                                echo("                        OrderUnfulfillableReasons\n");
                                $orderUnfulfillableReasons = $member->getOrderUnfulfillableReasons();
                                $member6List  =  $orderUnfulfillableReasons->getmember();
                                foreach ($member6List as $member6) { 
                                    echo("                            member\n");
                                    echo("                                " . $member6);
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
                        