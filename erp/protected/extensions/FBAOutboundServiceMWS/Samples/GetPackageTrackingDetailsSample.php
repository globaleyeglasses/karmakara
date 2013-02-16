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
 *  Generated: Sun Apr 22 23:42:10 GMT 2012
 * 
 */

/**
 * Get Package Tracking Details  Sample
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
 * sample for Get Package Tracking Details Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsRequest
 $request = new FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsRequest();
 // object or array of parameters
 // invokeGetPackageTrackingDetails($service, $request);

                        
/**
  * Get Package Tracking Details Action Sample
  * Gets the tracking details for a shipment package.
  * 
  *   
  * @param FBAOutboundServiceMWS_Interface $service instance of FBAOutboundServiceMWS_Interface
  * @param mixed $request FBAOutboundServiceMWS_Model_GetPackageTrackingDetails or array of parameters
  */
  function invokeGetPackageTrackingDetails(FBAOutboundServiceMWS_Interface $service, $request) 
  {
      try {
              $response = $service->getPackageTrackingDetails($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        GetPackageTrackingDetailsResponse\n");
                if ($response->isSetGetPackageTrackingDetailsResult()) { 
                    echo("            GetPackageTrackingDetailsResult\n");
                    $getPackageTrackingDetailsResult = $response->getGetPackageTrackingDetailsResult();
                    if ($getPackageTrackingDetailsResult->isSetPackageNumber()) 
                    {
                        echo("                PackageNumber\n");
                        echo("                    " . $getPackageTrackingDetailsResult->getPackageNumber() . "\n");
                    }
                    if ($getPackageTrackingDetailsResult->isSetTrackingNumber()) 
                    {
                        echo("                TrackingNumber\n");
                        echo("                    " . $getPackageTrackingDetailsResult->getTrackingNumber() . "\n");
                    }
                    if ($getPackageTrackingDetailsResult->isSetCarrierCode()) 
                    {
                        echo("                CarrierCode\n");
                        echo("                    " . $getPackageTrackingDetailsResult->getCarrierCode() . "\n");
                    }
                    if ($getPackageTrackingDetailsResult->isSetCarrierPhoneNumber()) 
                    {
                        echo("                CarrierPhoneNumber\n");
                        echo("                    " . $getPackageTrackingDetailsResult->getCarrierPhoneNumber() . "\n");
                    }
                    if ($getPackageTrackingDetailsResult->isSetCarrierURL()) 
                    {
                        echo("                CarrierURL\n");
                        echo("                    " . $getPackageTrackingDetailsResult->getCarrierURL() . "\n");
                    }
                    if ($getPackageTrackingDetailsResult->isSetShipDate()) 
                    {
                        echo("                ShipDate\n");
                        echo("                    " . $getPackageTrackingDetailsResult->getShipDate() . "\n");
                    }
                    if ($getPackageTrackingDetailsResult->isSetEstimatedArrivalDate()) 
                    {
                        echo("                EstimatedArrivalDate\n");
                        echo("                    " . $getPackageTrackingDetailsResult->getEstimatedArrivalDate() . "\n");
                    }
                    if ($getPackageTrackingDetailsResult->isSetShipToAddress()) { 
                        echo("                ShipToAddress\n");
                        $shipToAddress = $getPackageTrackingDetailsResult->getShipToAddress();
                        if ($shipToAddress->isSetCity()) 
                        {
                            echo("                    City\n");
                            echo("                        " . $shipToAddress->getCity() . "\n");
                        }
                        if ($shipToAddress->isSetState()) 
                        {
                            echo("                    State\n");
                            echo("                        " . $shipToAddress->getState() . "\n");
                        }
                        if ($shipToAddress->isSetCountry()) 
                        {
                            echo("                    Country\n");
                            echo("                        " . $shipToAddress->getCountry() . "\n");
                        }
                    } 
                    if ($getPackageTrackingDetailsResult->isSetCurrentStatus()) 
                    {
                        echo("                CurrentStatus\n");
                        echo("                    " . $getPackageTrackingDetailsResult->getCurrentStatus() . "\n");
                    }
                    if ($getPackageTrackingDetailsResult->isSetSignedForBy()) 
                    {
                        echo("                SignedForBy\n");
                        echo("                    " . $getPackageTrackingDetailsResult->getSignedForBy() . "\n");
                    }
                    if ($getPackageTrackingDetailsResult->isSetAdditionalLocationInfo()) 
                    {
                        echo("                AdditionalLocationInfo\n");
                        echo("                    " . $getPackageTrackingDetailsResult->getAdditionalLocationInfo() . "\n");
                    }
                    if ($getPackageTrackingDetailsResult->isSetTrackingEvents()) { 
                        echo("                TrackingEvents\n");
                        $trackingEvents = $getPackageTrackingDetailsResult->getTrackingEvents();
                        $memberList = $trackingEvents->getmember();
                        foreach ($memberList as $member) {
                            echo("                    member\n");
                            if ($member->isSetEventDate()) 
                            {
                                echo("                        EventDate\n");
                                echo("                            " . $member->getEventDate() . "\n");
                            }
                            if ($member->isSetEventAddress()) { 
                                echo("                        EventAddress\n");
                                $eventAddress = $member->getEventAddress();
                                if ($eventAddress->isSetCity()) 
                                {
                                    echo("                            City\n");
                                    echo("                                " . $eventAddress->getCity() . "\n");
                                }
                                if ($eventAddress->isSetState()) 
                                {
                                    echo("                            State\n");
                                    echo("                                " . $eventAddress->getState() . "\n");
                                }
                                if ($eventAddress->isSetCountry()) 
                                {
                                    echo("                            Country\n");
                                    echo("                                " . $eventAddress->getCountry() . "\n");
                                }
                            } 
                            if ($member->isSetEventCode()) 
                            {
                                echo("                        EventCode\n");
                                echo("                            " . $member->getEventCode() . "\n");
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
                                
