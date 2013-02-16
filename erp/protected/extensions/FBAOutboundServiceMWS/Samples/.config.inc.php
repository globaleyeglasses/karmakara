<?php
  
   /************************************************************************
    * REQUIRED
    * 
    * Access Key ID and Secret Acess Key ID, obtained from:
    * http://mws.amazon.com
    ***********************************************************************/
     define('ACCESS_KEY_ID', '<Your Access Key ID>');
     define('SECRET_ACCESS_KEY', '<Your Secret Access Key>');  

	/************************************************************************
    * REQUIRED
    * 
    * All MWS requests must contain a User-Agent header. The application
    * name and version defined below are used in creating this value.
    ***********************************************************************/
    define('APPLICATION_NAME', '<Your Application Name>');
    define('APPLICATION_VERSION', '<Your Application Version or Build Number or Release Date>');

   /************************************************************************
    * REQUIRED
    * 
    * All MWS requests must contain the seller's seller ID.
    ***********************************************************************/
    define ('SELLER_ID', '<Your Seller Id>');

   /************************************************************************
    * REQUIRED
    * 
    * All MWS requests must contain the MWS endpoint URL,
    * please set appropiate domain name for the country you wish.
    *
    * US: mws.amazonservices.com
    * UK: mws.amazonservices.co.uk
    * Germany: mws.amazonservices.de
    * France: mws.amazonservices.fr
    * Japan: mws.amazonservices.jp
    * China: mws.amazonservices.com.cn
    * Italy: mws.amazonservices.it
    ***********************************************************************/
    define ('MWS_ENDPOINT_URL', 'https://<MWS Domain Name>/FulfillmentOutboundShipment/2010-10-01/');

   /************************************************************************ 
    * OPTIONAL ON SOME INSTALLATIONS
    *
    * Set include path to root of library, relative to Samples directory.
    * Only needed when running library from local directory.
    * If library is installed in PHP include path, this is not needed
    ***********************************************************************/   
    set_include_path(get_include_path() . PATH_SEPARATOR . '../../.');    
    
   /************************************************************************ 
    * OPTIONAL ON SOME INSTALLATIONS  
    * 
    * Autoload function is reponsible for loading classes of the library on demand
    * 
    * NOTE: Only one __autoload function is allowed by PHP per each PHP installation,
    * and this function may need to be replaced with individual require_once statements
    * in case where other framework that define an __autoload already loaded.
    * 
    * However, since this library follow common naming convention for PHP classes it
    * may be possible to simply re-use an autoload mechanism defined by other frameworks
    * (provided library is installed in the PHP include path), and so classes may just 
    * be loaded even when this function is removed
    ***********************************************************************/   
     function __autoload($className){
        $filePath = str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
        $includePaths = explode(PATH_SEPARATOR, get_include_path());
        foreach($includePaths as $includePath){
            if(file_exists($includePath . DIRECTORY_SEPARATOR . $filePath)){
                require_once $filePath;
                return;
            }
        }
    }
  


