<?php

require __DIR__  . '/paypal/autoload.php';

define('URL_SITIO', 'https://www.psivapp.com');

//define('URL_SITIO', 'https://psivapp-shh.herokuapp.com/');

// Sandbox

/*$apiContext = new \PayPal\Rest\ApiContext(
      new \PayPal\Auth\OAuthTokenCredential(
          'Af1ZbSEkurVxJqhzWhZNFCzcb6_Tc9DX-rKHJC3-pmf3eX3iWTbiaY3Oumd6bXLEUsNTsW4N_5sfNyMM',  // ClienteID
          'EFTi3dd8tBcTFPvSximYH_gDEypgQrmzDffyYL91E-66nWpSEVjxfGiayvazDVaKdqaGYRAvgb0nURLT'  // Secret
      )
);*/

// Live

$apiContext = new \PayPal\Rest\ApiContext(
      new \PayPal\Auth\OAuthTokenCredential(
          'AbrGyetkuhOsD4_geleOTJwlr1C17a2NFPyRJ1Wy2UBEmZSl0g2xQFt4B1cbVeQKkK58oWCc5yZX05DY',  // ClienteID
          'EBBVL6OngO5ziQFfiHfaRwtfs63UDk-RSm7l51jRm-UsTdxopmYxIx8rud1xL4bR4hnwqqCEUWff-bJ7'  // Secret
      )
);

$apiContext->setConfig(
      array(
        'mode' => 'live',
      )
);
