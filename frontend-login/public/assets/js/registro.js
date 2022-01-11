window.addEventListener("DOMContentLoaded",function()
{
    console.log ("registro Cargado");

    let $form = document.querySelector("#signup");
    let $msg = document.querySelector(".msg");


    $form.addEventListener("submit",function(e){

        e.preventDefault();

        let datos = new FormData($form); // guardo  la información del formulario
        let datosParse = new  URLSearchParams(datos);

        fetch (`${plz.rest_url}/registro`,
        {
        method : "POST",
        body : datosParse
        

        }
        )
        .then(res =>res.json())
        .then(json =>{
            console.log(json)
            $msg.innerHTML = json?.msg;
        })
        .catch(err => {
            console.log('Hay un error: ${err}')
            
        })

    })
})
    // Agarra posibles errores
