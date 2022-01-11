<?php

function plz_script_login(){
    wp_register_script("plz-login", plugins_url( "../assets/js/login.js", __FILE__ ) );
    wp_enqueue_script("plz-login");

    //esta parte crea una variable con la ubicacion de la api rest buscada por el navegador
    // al handle plz-login creado atrás, se le creará una variable (o se modificará supongo)
    // llamada plz  y el valor de esa variable es el array (y el array regresa la URL de la apirest plz)
    wp_localize_script("plz-login","plz",array(
        "rest_url" => rest_url("plz"),
    ));
}

add_action("wp_enqueue_scripts", "plz_script_login");

function plz_add_login_form() {
    plz_script_login(); 
    $response = '
    <main class="signin">
        <div class="signin__container">
            <form class="signin__form" id="signin">
                <div class="signin__email name--campo">
                    <label for="email">Email address</label>
                    <input name="email" type="email" id="email">
                </div>
                <div class="signin__pass name--campo">
                    <label for="password">Password</label>
                    <input name="password" type="password" id="password">
                </div>
                <div class="signin__submit">
                    <input type="submit" value="Log in">
                </div>
                <div class="signin_create-link">
                    <a href="'.home_url("sing-up").'">Sign up</a>
                </div>
                <div class="msg2"> texto equis dos</div>
            </form>
        </div>
    </main>
    ';

return $response;

}

add_shortcode("plz_login","plz_add_login_form");