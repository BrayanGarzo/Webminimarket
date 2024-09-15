<?php

class cmdDefaultPago
{

    public function execute()
    {
        $response = [
            "result" => "success",
            "data" => "",
            "message" => "",
            "view" => "usuarios/pago"
        ];
        return ($response);
    }
}