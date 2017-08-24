TCliente = function(){
	var self = this;
	
	this.add = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('cclientes', {
				"id": datos.id,
				"razonsocial": datos.razonsocial,
				"contacto": datos.contacto, 
				"telefono": datos.telefono,
				"correo": datos.correo,
				"action": "add"
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (datos.fn.after !== undefined)
					datos.fn.after(data);
			}, "json");
	};
		
	this.del = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('cclientes', {
			"id": datos.id,
			"action": "del"
		}, function(data){
			if (datos.fn.after != undefined)
				datos.fn.after(data);
				
			if (!data.band){
				console.error("No se pudo eliminar el registro");
			}
		}, "json");
	};
};