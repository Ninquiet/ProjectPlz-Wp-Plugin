window.addEventListener("DOMContentLoaded",function()
{
    console.log ("registro Cargado");

    let $form = document.querySelector("#signin");
    let $msg2 = document.querySelector(".msg2");


    $form.addEventListener("submit",function(e){

        e.preventDefault();

        let datos = new FormData($form); // guardo  la información del formulario
        let datosParse = new  URLSearchParams(datos);

        fetch (`${plz.rest_url}/login`,
        {
        method : "POST",
        body : datosParse
        

        }
        )
        .then(res =>res.json())
        .then(json =>{
            console.log(json)
            $msg2.innerHTML = json;
        })
        .catch(err => {
            console.log('Hay un error: ${err}')
            
        })

    })
})
    // Agarra posibles errores
