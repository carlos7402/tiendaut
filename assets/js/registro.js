$(document).ready(function() {
    $("#btnRegistro").click(function(e) {
        e.preventDefault();
        mostrarDato();
    }); 

    async function mostrarDato() {
        const datos = new FormData(document.getElementById('registro'));

        await fetch('assets/data/loginreg.php', {
                method: 'POST',
                body: datos
            })
            .then(response => response.json()) //mandar llamar y enviar los datos
            .then(response => {
                if (response.dato == 'ok') {
                    location.href="index.html"
                }
                else{
                    alert("Datos Incorrectos")
                }
                })
            .catch(err => {
                console.log(err);
            });
        }
    });