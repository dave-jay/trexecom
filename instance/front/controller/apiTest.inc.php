<?php

//d($_REQUEST);
//die;
$error = "";
//d($_REQUEST);
if (isset($_REQUEST["SearchData"])) {
    $error = "";
    $success = "1";
    $domain_arrived = array();
    $domain_arrived[] = "www.davejay.com";
    $domain_arrived[] = "www.davejay.co.in";
    $domain_arrived[] = "www.davejay.co.in";
    $domain_arrived[] = "www.dave-jay.com";
    $domain_arrived[] = "www.dave-jay.com";
    $error = "";
    $searchvalue = $_REQUEST['txtDomains'];

    foreach ($domain_arrived as $value) {

        if ($value != $searchvalue) {

//            break;
            $success = "0";
        } else {
            $error = $value;
        }
    }
//    echo json_encode($error);
    echo json_encode(array("success" => $success, "error" => $error));
//    d($error);
    die;
}

//require_once "../../../lib/namecheap/Trexecom.php";
//
//$user = "YOUR_NAMECHEAP_USER"; // Username required to access the API 
//$key = "YOUR_NAMECHEAP_KEY"; // Password required used to access the API 
//$sandbox = true; // true for testing, false for live
//$username = null; // The Username on which a command is executed.Generally, the values of ApiUser and UserName parameters are the same. 
//
//$api = new NamecheapApi($user, $key, $sandbox, $username);
//
//// Create a new instance of the command class we want to use
//$domains = new NamecheapDomains($api);
//
//$vars = array('DomainList' => "mydomain.com");
//
//print_r($domains->check($vars)->response());

$jsInclude = 'apiTest.js.php';
_cg("page_title", "Test");
?>