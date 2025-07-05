$(function(){
    $("#usuarios").on("submit",function(){

        //alert("holaaa");

        var nombreape = $("#txtnombre").val();
        var telefono = $("#txttelefono").val();
        var correo = $("#txtcorreo").val();
        var mensaje = $("#txtmensaje").val();


        //alert(nombreape + telefono );

        var datos = {nom: nombreape, tel: telefono, cor: correo, men: mensaje };

        $.ajax({

            url: "datos.php",
            type: "post",
            data: datos,
            success: function(respuesta){
                    alert(respuesta);
            },
            error: function(){
                alert("ERROR!!!");
            }


        });



    });

});