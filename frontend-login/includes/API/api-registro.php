<?php


function plz_api_registro() {

    register_rest_route(
         "plz", 
         "registro", 
         array(
             'methods' =>'POST', 
             'callback' => 'plz_registro_callback'
             // REGISTRO DE CALLBACK
         )
         );

}

// CALLBACK
function plz_registro_callback ($request) {

    $is_user_exist = get_user_by("login",$request["name"]);
    $is_email_exist = get_user_by("email",$request["email"]);

    if ($is_user_exist || $is_email_exist){
        return array('msg' => "Ese usuario o email ya existe");
    }

    $args = array(
        "user_login" => $request["name"],
        "user_pass"  => $request["password"],
        "user_email" => $request["email"],
        "role"       => "editor"  
    );

    $user = wp_insert_user($args);

    return array("msg"=>"El usuario se registro correctamente");
}

add_action("rest_api_init","plz_api_registro");

