<?php

class cmdDefaultCrearProducto
{
    private $default_request_method = "GET";
    public function execute($params)
    {
        valid_method($this->default_request_method);

        $response = [
            "result" => "succes",
            "data" => "",
            "message" => "",
            "view" => "productos/create"

        ];


        return $response;


        //print_r(json_encode($response));
    }
}