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
    public $options;
    public $headers;
    public $response = array();
    
    function __construct() {
        $this->options = array(
            'url' => '',
            'method' => 'GET',
            'version' => '1.0',
            'params' => array()
        );
        $this->headers = array(
            'Content-Length: 500',
        );
    }
    
    public function getContent(){
        echo file_get_contents('view/form.php');
    }
            
    public function setOptions(array $options){
        $this->options = $options;
    }
    
    public function getOptions(){
        return $this->options;
    }
    
    public function send(){
        $this->send_request($this->options);
    } 
    
     public function setResponse(array $response){
        $this->response = $response;
        //var_dump($this->response);
    }
    
    public function getResponse(){
        //var_dump($this->response);
        return $this->response;
    }
    
    public function getResponseCode(){
        return $this->response['http_code'];
    }
    
    public function getResponseContent(){
        return $this->response['content'];
    }
}
