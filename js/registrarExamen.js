console.log('funciona desde segundo javascript file');

$(document).ready(function () {
    $("#btnRegistroExamen").click(function (e) {
        e.preventDefault();
        var id = $("#Userid").text(),
            FechaExamen = $("#Fechas").val(),
            FolioP = $("#FolioP").val(),
            FechaPago = $("#fechaP").val(),
            nombre = $("#nombre").val(),
            apellidos = $("#Apellidos").val(),
            email = $("#email").val(),
            nctrl = $("#Nctrl").val(),
            semestre = $("#Semestre").val(),
            carrera = $("#Carrera").val();

        var datos = {
            "id": id,
            "FechaExamen": FechaExamen,
            "FolioP": FolioP,
            "FechaPago": FechaPago
        }
        var jsonData = {
            "id": id,
            "FechaExamen": FechaExamen,
            "FolioP": FolioP,
            "FechaPago": FechaPago,
            "nombre": nombre,
            "apellidos": apellidos,
            "email": email,
            "control": nctrl,
            "semestre": semestre,
            "carrera": carrera
        }
        var json = JSON.stringify(jsonData);
        console.log(datos);
        $.when(
            $.ajax({
                url: "php/RegistrarExamen.php",
                data: datos,
                method: "POST",
                beforeSend: function () {
                    console.log("Enviando datos");
                },
                success: function (data) {
                    console.log("Excito en envio de info...");
                    if (data == 1) {
                       
                    } else {
                        alert("Error en registro, intentelo nuevamente.");
                    }

                },
                error: function () {
                    console.log("Fallo en envio");
                }
            }),
            $.ajax({
                url: "try.php",
                method: "post",
                data: json,
                contentType: 'application/json',
                beforeSend: function () {
                    console.log("Enviando datos");
                },
                success: function (data) {

                    
                },
                error: function () {
                    console.log("Fallo en envio");
                }
            })
        ).then(function(r1,r2){
            location.href="RExamenExito.php";
    });
    });
    $('#Fechas').click(function () {
        $("#Fechas").pickadate();
    });
});