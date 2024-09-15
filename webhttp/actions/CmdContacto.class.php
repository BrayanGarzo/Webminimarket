<?php

class cmdContacto
{

    public function execute()
    {
        $response = [
            "result" => "success",
            "data" => "",
            "message" => "",
            "view" => "Contacto"
        ];
        return ($response);
    }
}