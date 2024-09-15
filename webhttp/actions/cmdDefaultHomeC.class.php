<?php

class cmdDefaultHomeC
{

    public function execute()
    {
        $response = [
            "result" => "success",
            "data" => "",
            "message" => "",
            "view" => "homeClien"
        ];
        return ($response);
    }
}