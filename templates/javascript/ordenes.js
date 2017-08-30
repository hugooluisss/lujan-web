$(document).ready(function(){
	getLista();
	
	$("#txtFecha").datepicker({ dateFormat: 'yy-mm-dd' });
	
	$("#panelTabs li a[href=#add]").click(function(){
		$("#frmAdd").get(0).reset();
		$("#id").val("");
		$("form:not(.filter) :input:visible:enabled:first").focus();
	});
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
	});
	
	$("#txtCliente").change(function(){
		if ($("#txtCliente").val("") == '')
			$("#cliente").val("");
			
		console.log("Identificador del cliente eliminado");
	}).blur(function(){
		if ($("#txtCliente").val() == ''){
			$("#cliente").val("");
			console.log("Identificador del cliente eliminado en el blur");
		}
	}).autocomplete({
		source: "listaClientesAutocomplete",
		minLength: 3, 
		select: function(event, ui){
			$("#txtCliente").val(ui.item.nombre);
			$("#cliente").val(ui.item.identificador);
			
			console.log("Cliente seleccionado", ui.item.identificador);
		}
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			selEstado: "required",
			txtCliente: "required",
			selTipo: "required",
			selFecha: "required",
			selTipo: "required",
			txtFactura: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TOrden;
			
			obj.add({
				id: $("#id").val(), 
				estado: $("#selEstado").val(), 
				cliente: $("#cliente").val(),
				usuario: $("#selUsuario").val(),
				tipo: $("#selTipo").val(),
				fecha: $("#txtFecha").val(), 
				factura: $("#txtFactura").val(),
				lugar: $("#txtLugar").val(),
				transportista: $("#txtTransportista").val(),
				chofer: $("#txtChofer").val(),
				gafete: $("#selGafete").val(),
				contenedor: $("#txtContenedor").val(),
				tipoContenedor: $("#txtTipoContenedor").val(),
				claveContenedor: $("#txtClaveContenedor").val(),
				placas: $("#txtPlacas").val(),
				numeroCandado: $("#txtNumeroCandado").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
						}else{
							alert("Upps... Ocurrió un error al registrar la orden");
						}
					}
				}
			});
        }

    });
		
	function getLista(){
		$.get("listaOrdenes", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idOrden);
				$("#selEstado").val(el.idEstado);
				$("#txtCliente").val(el.cliente);
				$("#cliente").val(el.idCliente);
				$("#selUsuario").val(el.idUsuario);
				$("#selTipo").val(el.idTipo);
				$("#txtFecha").val(el.fecha);
				$("#txtFactura").val(el.factura);
				$("#txtLugar").val(el.lugar);
				$("#txtTransportista").val(el.transportista);
				$("#txtChofer").val(el.chofer);
				$("#selGafete").val(el.gafete);
				$("#txtContenedor").val(el.contenedor);
				$("#txtTipoContenedor").val(el.tipocontenedor);
				$("#txtClaveContenedor").val(el.clavecontenedor);
				$("#txtPlacas").val(el.placas);
				$("#txtNumeroCandado").val(el.numerocandado);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("#tblDatos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	}
});