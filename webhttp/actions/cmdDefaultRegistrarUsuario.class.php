<?php

class cmdDefaultRegistrarUsuario
{
    private $default_request_method = "GET";
    public function execute($params)
    {
        valid_method($this->default_request_method);

        $response = [
            "result" => "succes",
            "data" => "",
            "message" => "",
            "view" => "usuarios/registro"

        ];


        return $response;


        //print_r(json_encode($response));
    }
}