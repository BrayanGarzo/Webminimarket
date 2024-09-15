<?php

class cmdAutenticar
{

    private $default_request_method = "POST";

    public function execute($params)
    {
        
     valid_method($this->default_request_method);
        
        
        extract($_REQUEST);
        $u = new usuariosControl();
        if (count($params) > 0)
            $result = $u->autenticar($params[0], $params[1]);
        else
        $result = $u->autenticar($email, $password);

        if (is_array($result)) {
            $response = array (
                "result" => "success",
                "data" => $result,
                "message" => "<h5>Usuario Valido</h5>",
                "view" => "home"
            );
           // if ($result[0] ["id_cargo"] == 2)
            //{
              //  $response["view"] = "home";
            //}
            if ($result[0] ["id_cargo"] == 3)
            {
                $response["view"] = "homeClien";
            }
            
            $_SESSION["usuario"] = $result[0];
                    //if($id_cargo == '1')
                        // Mostrar menú completo para administradores
                        ///include("home");
            
           // require "vista/home.php";   ///<-----------
        }
        if ($result == 0) {
            $response = array (
                "result" => "fail",
                "data" => "",
                "message" => "Faltan Datos",
                "view" => "login"
            );

            //require "vista/login.php"; ///<-----------
        }
        if ($result == 1) {
            $response = array(
                "result" => "fail",
                "data" => "",
                "message" => "<h5>Usuario Invalido</h5>",
                "view" => "login" 
            );
              //require "vista/login.php"; ///<-----------
        }
        

        return ($response);

        //print_r(json_encode( $response));
        
    }
}