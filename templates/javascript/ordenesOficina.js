$(document).ready(function(){
	getLista();
	$("#panelTabs li a[href=#add]").hide().click(function(){
		$("#frmAdd").get(0).reset();
		$("#id").val("");
		$("form:not(.filter) :input:visible:enabled:first").focus();
	});
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
	});
	
	$("#frmAdd").find("input, select").prop("disabled", true);
			
	function getLista(){
		$.get("listaOrdenes", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idOrden);
				$("#selEstado").val(el.idEstado);
				$("#txtCliente").val(el.cliente);
				$("#cliente").val(el.idCliente);
				$("#selPrevio").val(el.idPrevio);
				$("#selCapturista").val(el.idCapturista);
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
			
			$("[action=getMercancias]").click(function(){
				$("#winListaMercancias").attr("datos", $(this).attr("datos"));
			});
			
			$("[action=factura]").click(function(){
				$("#winFactura").attr("orden", $(this).attr("idOrden"));
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