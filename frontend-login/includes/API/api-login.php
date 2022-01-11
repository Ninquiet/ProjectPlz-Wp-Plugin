<?php

function plz_api_login() {
    register_rest_route(
        "plz",
        "login", 
        array(
            "methods" => "POST",
            "callback" => "plz_login_callback"
         )
        );
}



function plz_login_callback($request) {

    $cred = array (
        "user_login" => $request["email"],
        "user_password" => $request["password"],
        "remember" => true  //relogin al regresar a la pagina
    );

    $user = wp_signon($cred);

    if ($user->get_error_code())
    {
        return "error revisa email o contraseña";
    }
    else
    {
        return "Login Exitoso";
    }
    //return $user->get_error_message();
    
}

add_action("rest_api_init","plz_api_login");