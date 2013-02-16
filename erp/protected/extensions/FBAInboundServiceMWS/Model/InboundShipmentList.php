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
 *  @see FBAInboundServiceMWS_Model
 */
require_once ('FBAInboundServiceMWS/Model.php');  

    

/**
 * FBAInboundServiceMWS_Model_InboundShipmentList
 * 
 * Properties:
 * <ul>
 * 
 * <li>member: FBAInboundServiceMWS_Model_InboundShipmentInfo</li>
 *
 * </ul>
 */ 
class FBAInboundServiceMWS_Model_InboundShipmentList extends FBAInboundServiceMWS_Model
{


    /**
     * Construct new FBAInboundServiceMWS_Model_InboundShipmentList
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>member: FBAInboundServiceMWS_Model_InboundShipmentInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'member' => array('FieldValue' => array(), 'FieldType' => array('FBAInboundServiceMWS_Model_InboundShipmentInfo')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the member.
     * 
     * @return array of InboundShipmentInfo member
     */
    public function getmember() 
    {
        return $this->_fields['member']['FieldValue'];
    }

    /**
     * Sets the value of the member.
     * 
     * @param mixed InboundShipmentInfo or an array of InboundShipmentInfo member
     * @return this instance
     */
    public function setmember($member) 
    {
        if (!$this->_isNumericArray($member)) {
            $member =  array ($member);    
        }
        $this->_fields['member']['FieldValue'] = $member;
        return $this;
    }


    /**
     * Sets single or multiple values of member list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withmember($member1, $member2)</code>
     * 
     * @param InboundShipmentInfo  $inboundShipmentInfoArgs one or more member
     * @return FBAInboundServiceMWS_Model_InboundShipmentList  instance
     */
    public function withmember($inboundShipmentInfoArgs)
    {
        foreach (func_get_args() as $member) {
            $this->_fields['member']['FieldValue'][] = $member;
        }
        return $this;
    }   



    /**
     * Checks if member list is non-empty
     * 
     * @return bool true if member list is non-empty
     */
    public function isSetmember()
    {
        return count ($this->_fields['member']['FieldValue']) > 0;
    }




}