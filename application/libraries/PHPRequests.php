<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');  

require_once FCPATH."vendor/rmccue/requests/library/Requests.php";
class PHPRequests {
    public function __construct() {
       Requests::register_autoloader();
    }
}