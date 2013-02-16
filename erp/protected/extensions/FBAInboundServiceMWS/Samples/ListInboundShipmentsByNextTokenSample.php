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
 * List Inbound Shipments By Next Token  Sample
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
 * sample for List Inbound Shipments By Next Token Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as FBAInboundServiceMWS_Model_ListInboundShipmentsByNextTokenRequest
 $request = new FBAInboundServiceMWS_Model_ListInboundShipmentsByNextTokenRequest();
 // $request->setSellerId(SELLER_ID);

 // invokeListInboundShipmentsByNextToken($service, $request);

                                    
/**
  * List Inbound Shipments By Next Token Action Sample
  * Gets the next set of inbound shipments created by a Seller with the
  * NextToken which can be used to iterate through the remaining inbound
  * shipments. If a NextToken is not returned, it indicates the
  * end-of-data.  
  * @param FBAInboundServiceMWS_Interface $service instance of FBAInboundServiceMWS_Interface
  * @param mixed $request FBAInboundServiceMWS_Model_ListInboundShipmentsByNextToken or array of parameters
  */
  function invokeListInboundShipmentsByNextToken(FBAInboundServiceMWS_Interface $service, $request) 
  {
      try {
              $response = $service->listInboundShipmentsByNextToken($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        ListInboundShipmentsByNextTokenResponse\n");
                if ($response->isSetListInboundShipmentsByNextTokenResult()) { 
                    echo("            ListInboundShipmentsByNextTokenResult\n");
                    $listInboundShipmentsByNextTokenResult = $response->getListInboundShipmentsByNextTokenResult();
                    if ($listInboundShipmentsByNextTokenResult->isSetShipmentData()) { 
                        echo("                ShipmentData\n");
                        $shipmentData = $listInboundShipmentsByNextTokenResult->getShipmentData();
                        $memberList = $shipmentData->getmember();
                        foreach ($memberList as $member) {
                            echo("                    member\n");
                            if ($member->isSetShipmentId()) 
                            {
                                echo("                        ShipmentId\n");
                                echo("                            " . $member->getShipmentId() . "\n");
                            }
                            if ($member->isSetShipmentName()) 
                            {
                                echo("                        ShipmentName\n");
                                echo("                            " . $member->getShipmentName() . "\n");
                            }
                            if ($member->isSetShipFromAddress()) { 
                                echo("                        ShipFromAddress\n");
                                $shipFromAddress = $member->getShipFromAddress();
                                if ($shipFromAddress->isSetName()) 
                                {
                                    echo("                            Name\n");
                                    echo("                                " . $shipFromAddress->getName() . "\n");
                                }
                                if ($shipFromAddress->isSetAddressLine1()) 
                                {
                                    echo("                            AddressLine1\n");
                                    echo("                                " . $shipFromAddress->getAddressLine1() . "\n");
                                }
                                if ($shipFromAddress->isSetAddressLine2()) 
                                {
                                    echo("                            AddressLine2\n");
                                    echo("                                " . $shipFromAddress->getAddressLine2() . "\n");
                                }
                                if ($shipFromAddress->isSetDistrictOrCounty()) 
                                {
                                    echo("                            DistrictOrCounty\n");
                                    echo("                                " . $shipFromAddress->getDistrictOrCounty() . "\n");
                                }
                                if ($shipFromAddress->isSetCity()) 
                                {
                                    echo("                            City\n");
                                    echo("                                " . $shipFromAddress->getCity() . "\n");
                                }
                                if ($shipFromAddress->isSetStateOrProvinceCode()) 
                                {
                                    echo("                            StateOrProvinceCode\n");
                                    echo("                                " . $shipFromAddress->getStateOrProvinceCode() . "\n");
                                }
                                if ($shipFromAddress->isSetCountryCode()) 
                                {
                                    echo("                            CountryCode\n");
                                    echo("                                " . $shipFromAddress->getCountryCode() . "\n");
                                }
                                if ($shipFromAddress->isSetPostalCode()) 
                                {
                                    echo("                            PostalCode\n");
                                    echo("                                " . $shipFromAddress->getPostalCode() . "\n");
                                }
                            } 
                            if ($member->isSetDestinationFulfillmentCenterId()) 
                            {
                                echo("                        DestinationFulfillmentCenterId\n");
                                echo("                            " . $member->getDestinationFulfillmentCenterId() . "\n");
                            }
                            if ($member->isSetShipmentStatus()) 
                            {
                                echo("                        ShipmentStatus\n");
                                echo("                            " . $member->getShipmentStatus() . "\n");
                            }
                            if ($member->isSetLabelPrepType()) 
                            {
                                echo("                        LabelPrepType\n");
                                echo("                            " . $member->getLabelPrepType() . "\n");
                            }
                            if ($member->isSetAreCasesRequired()) 
                            {
                                echo("                        AreCasesRequired\n");
                                echo("                            " . $member->getAreCasesRequired() . "\n");
                            }
                        }
                    } 
                    if ($listInboundShipmentsByNextTokenResult->isSetNextToken()) 
                    {
                        echo("                NextToken\n");
                        echo("                    " . $listInboundShipmentsByNextTokenResult->getNextToken() . "\n");
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
                    
