TOrden = function(){
	var self = this;
	
	this.add = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('cordenes', {
				"id": datos.id,
				"estado": datos.estado,
				"cliente": datos.cliente,
				"previo": datos.previo,
				"capturista": datos.capturista,
				"tipo": datos.tipo,
				"fecha": datos.fecha,
				"factura": datos.factura,
				"lugar": datos.lugar,
				"transportista": datos.transportista,
				"chofer": datos.chofer,
				"gafete": datos.gafete,
				"contenedor": datos.contenedor,
				"tipoContenedor": datos.tipoContenedor,
				"claveContenedor": datos.claveContenedor,
				"placas": datos.placas,
				"numeroCandado": datos.numeroCandado,
				"action": "add"
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (datos.fn.after !== undefined) datos.fn.after(data);
			}, "json");
	};
};