
	function Boton(email,telefono,dia,mes,anio,boleta,medio_pago) {
		var parametros = {"email":email,"telefono":telefono,"dia":dia,"mes":mes,"anio":anio,"boleta":boleta,"medio_pago":medio_pago};
	
    $.ajax({
		data:parametros,
		url:'procesoAjax.php',
		type: 'post',
		beforeSend: function () {
			$("#resultado").html("Procesando, espere por favor");
		},
		success: function (response) {   
			$("#resultado").html(response);
		}
	});
	}

