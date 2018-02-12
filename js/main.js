$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
   /***************************************
validacion de contraseña igual
********************************************/
$('#passconfirm').keyup(function(){
if ($('#passconfirm').val() === $('#popover').val()) {

	$("#iconotexto").remove();
		$("#passconfirm").parent().parent().attr("class","form-group has-success has-feedback");
		$("#passconfirm").parent().children("span").text("").remove();
		$("#passconfirm").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
}
else{
	$("#iconotexto").remove();
		$("#passconfirm").parent().parent().attr("class","form-group has-error has-feedback");
		$("#passconfirm").parent().children("span").text("").remove();
		$("#passconfirm").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
}
});
/**************************
Validacion de nombre
*****************************/
$('#nombre').focusout(function(){
   var nameregex = /^[a-zA-Z ]{4,}$/;

   if ($('#nombre').val().match(nameregex)) {
   	$("#iconoNombre").remove();
		$("#nombre").parent().parent().attr("class","form-group has-success has-feedback");
		$("#nombre").parent().children("span").text("").remove();
		$("#nombre").parent().append("<span id='iconoNombre' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
   }
   else{
   		$("#iconoNombre").remove();
		$("#nombre").parent().parent().attr("class","form-group has-error has-feedback");
		$("#nombre").parent().children("span").text("").remove();
		$("#nombre").parent().append("<span id='iconoNombre' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
   }
   });
/*************************
Validacion Apellido
***************************/
$('#Apellido').focusout(function(){
   var Apellido = /^[a-zA-Z ]{4,}$/;

   if ($('#Apellido').val().match(Apellido)) {
   	$("#iconoApellido").remove();
		$("#Apellido").parent().attr("class","form-group has-success has-feedback");
		$("#Apellido").parent().children("span").text("").remove();
		$("#Apellido").parent().append("<span id='iconoApellido' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
   }
   else{
   		$("#iconoApellido").remove();
		$("#Apellido").parent().attr("class","form-group has-error has-feedback");
		$("#Apellido").parent().children("span").text("").remove();
		$("#Apellido").parent().append("<span id='iconoApellido' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
   }
/***********************************
Validacion de correo institucional
************************************/
});

$('#email').keyup(function(){
   var nameregex2 = /^[a-zA-Z(0-9)?]{4,}((\.)?[a-zA-Z(0-9)?]{3,})?@tectijuana\.edu\.mx$/;

   if ($('#email').val().match(nameregex2)) {
   	$("#iconoEmail").remove();
		$("#email").parent().parent().attr("class","form-group has-success has-feedback");
		$("#email").parent().children("span").text("").remove();
		$("#email").parent().append("<span id='iconoEmail' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
   }
   else{
   		$("#iconoEmail").remove();
		$("#email").parent().parent().attr("class","form-group has-error has-feedback");
		$("#email").parent().children("span").text("").remove();
		$("#email").parent().append("<span id='iconoEmail' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
   }
});

/****************************************

VERIFICACION DE EMAIL REPETIDO CON AJAX
***************************************/

$("#email").blur(function(){

var email= $(this).val();
 var datos= 'email'+email;

 $.ajax({
 	type: "POST",
 	url: "php/Email.php",
 	data: datos,
 	success: function(data){
 		$('#Info').fadeIn(1000).html(data);
 	}
 });

});


/****************************************
VALIDACION DE NUMERO DE CONTROL
*****************************************/
$('#NCtrl').keyup(function(){
   var control = /^[0-9]{8,}$/;

   if ($('#NCtrl').val().match(control)) {
   	$("#iconoNControl").remove();
		$("#NCtrl").parent().parent().attr("class","form-group has-success has-feedback");
		$("#NCtrl").parent().children("span").text("").remove();
		$("#NCtrl").parent().append("<span id='iconoNControl' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
   }
   else{
   		$("#iconoNControl").remove();
		$("#NCtrl").parent().parent().attr("class","form-group has-error has-feedback");
		$("#NCtrl").parent().children("span").text("").remove();
		$("#NCtrl").parent().append("<span id='iconoNControl' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
   }
});
/****************************************
VALIDACION DE CONTRASEÑA
*****************************************/
$('#popover').keyup(function(){
   var contra = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;

   if ($('#popover').val().match(contra)) {
   	$("#iconoPass").remove();
		$("#popover").parent().parent().attr("class","form-group has-success has-feedback");
		$("#popover").parent().children("span").text("").remove();
		$("#popover").parent().append("<span id='iconoPass' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
   }
   else{
   		$("#iconoPass").remove();
		$("#popover").parent().parent().attr("class","form-group has-error has-feedback");
		$("#popover").parent().children("span").text("").remove();
		$("#popover").parent().append("<span id='iconoPass' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
   }
});
/***************************************
VALIDACION DE SEMESTRE 
*****************************************/
$("#Semestre").focusout(function(){
	
	if ($("#Semestre").val() === "Otro") {
			$("#iconoSemestre").remove();
		$("#Semestre").parent().parent().attr("class","form-group has-error has-feedback");
		$("#Semestre").parent().children("span").text("").remove();
		$("#Semestre").parent().append("<span id='iconoSemestre' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		//LLAMADA A FUNCION 
		otroSemestre();
		return false;		
	}
	else{
	$("#iconoSemestre").remove();		
		$("#Semestre").parent().parent().attr("class","form-group has-success has-feedback");
		$("#Semestre").parent().children("span").text("").remove();
		$("#Semestre").parent().append("<span id='iconoSemestre' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
	}
});
/***********************************
FUNCION PARA VALIDACION DE OTRO SEMESTRE 
***********************************/
function otroSemestre(){
	$("#txtOtro").focusout(function(){
		//EXPRESION REGULAR 
		var Semestre= /^(\d){2}$/;
	if($("#txtOtro").val().match(Semestre) && $("#txtOtro").val() > 12){
$("#iconoSemestreOtro").remove();		
		$("#txtOtro").parent().attr("class","form-group has-success has-feedback");
		$("#txtOtro").parent().children("span").text("").remove();
		$("#txtOtro").parent().append("<span id='iconoSemestreOtro' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
			}
			else{
				$("#iconoSemestreOtro").remove();
		$("#txtOtro").parent().attr("class","form-group has-error has-feedback");
		$("#txtOtro").parent().children("span").text("").remove();
		$("#txtOtro").parent().append("<span id='iconoSemestreOtro' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;	
	}	   
});
	}
/************************************************
VALIDACION DE CARRERA
************************************************/
	$("#Carrera").focusout(function(){
			if ($("#Carrera").val() === "" || $("#Carrera").val()===""){
					$("#iconoCarrera").remove();
		$("#Carrera").parent().parent().attr("class","form-group has-error has-feedback");
		$("#Carrera").parent().children("span").text("").remove();
		$("#Carrera").parent().append("<span id='iconoCarrera' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
			}
			else{
				$("#iconoCarrera").remove();		
		$("#Carrera").parent().parent().attr("class","form-group has-success has-feedback");
		$("#Carrera").parent().children("span").text("").remove();
		$("#Carrera").parent().append("<span id='iconoCarrera' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
			}
	});
});

