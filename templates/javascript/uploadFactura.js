$(document).ready(function(){
	$("#winFactura").on('shown.bs.modal', function(e){
		$("#upload").attr("action", "?mod=cordenes&action=upload&orden=" + $("#winFactura").attr("orden"));
	});
	
	$('#upload').fileupload({
		// This function is called when a file is added to the queue
		add: function (e, data) {
			var fileType = data.files[0].name.split('.').pop(), allowdtypes = 'pdf';
			
	        if (allowdtypes.indexOf(fileType) < 0) {
	            alert('El tipo es inválido, solo se permiten archivo pdf');
	            return false;
	        }else{
	        	$('#upload .elementos').html("");
				var tpl = $('<li class="working list-group-item text-center">'+'<input type="text" value="0" data-width="48" data-height="48" data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" />'+'<p></p><span></span>' );
				            
				tpl.find('p').text(data.files[0].name);
				data.context = tpl.appendTo($('#upload .elementos'));
				tpl.find('input').knob();
				// Listen for clicks on the cancel icon
				tpl.find('span').click(function(){
					if(tpl.hasClass('working')){
						jqXHR.abort();
					}
					tpl.fadeOut(function(){
						tpl.remove();
					});
				});
				
				// Automatically upload the file once it is added to the queue
				var jqXHR = data.submit();
			}
		},
		progress: function(e, data){
		    // Calculate the completion percentage of the upload
		    var progress = parseInt(data.loaded / data.total * 100, 10);
		
		    // Update the hidden input field and trigger a change
		    // so that the jQuery knob plugin knows to update the dial
		    data.context.find('input').val(progress).change();
		
		    if(progress == 100){
		        data.context.removeClass('working');
		    }
		},
		done: function(e, data){
			var result = jQuery.parseJSON(data.result);
			if (result.status){
				$("#winFactura").modal("hide");
				alert("Factura agregada");
			}else
				alert("El archivo no pudo ser guardado en el servidor");
		},
		fail: function(){
			alert("Ocurrió un problema en el servidor, contacta al administrador del sistema");
			
			console.log("Error en el servidor al subir el archivo, checa permisos de la carpeta repositorio");
		},
	});
});