<?php

class cmdTest
{
    public function execute()
    {
        $db = new mysql();
        $response = [
            "result" => "success",
            "data" => $db->getConexion(),
            "message" => "Houston todo esta bine :) !!",
            "view" => "default"
        ];
        return $response;
    }
}