<?php

class cmdSalir
{
    public function execute()
    {
        $response = [
            "result" => "success",
            "data" => "",
            "message" => "Regresar Pronto",
            "view" => "login"
        ];
        return $response;
    }
}