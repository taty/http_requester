<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HTTPClient
 *
 * @author taty
 */
class HTTPClient {
    
    public function getContent(){
        echo file_get_contents('view/form.php');
    }
    
}
