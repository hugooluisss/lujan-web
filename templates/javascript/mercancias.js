$(document).ready(function(){
	$('#winListaMercancias').on('show.bs.modal', function(e){
		var ventana = $('#winListaMercancias');
		var orden = jQuery.parseJSON(ventana.attr("datos"));
		$.each(orden, function(key, valor){
			ventana.find("[campo=" + key + "]").text(valor);
		});
		
		$.post("listaMercancia", {
			"orden": orden.idOrden
		}, function(data){
			ventana.find(".lista").html(data);
			
			ventana.find("[action=getDetalleMercancia]").click(function(){
				$("#winMercancia").attr("datos", $(this).attr("datos"));
			});
			
			$("#tblMercancias").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	});
	
	$('#winMercancia').on('show.bs.modal', function(e){
		var ventana = $('#winMercancia');
		console.log(ventana.attr("datos"));
		var mercancia = jQuery.parseJSON(ventana.attr("datos"));
		$.each(mercancia, function(key, valor){
			ventana.find("[campo=" + key + "]").text(valor);
		});
		
		ventana.find(".listaImagenes").html("");
		$.each(mercancia.imagenes, function(){
			var imagen = this;
			var div = $("<a />", {href: imagen.src, title: "Click para descargar", target: "_blank"});
			var img = $("<img />", {
				src: imagen.src,
				class: ""
			});
			
			div.append(img);
			ventana.find(".listaImagenes").append(div);
		});
	});
});