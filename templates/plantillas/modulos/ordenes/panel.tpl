<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">Ordenes</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar / Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">
					<div class="form-group">
						<label for="txtFecha" class="col-md-2">Fecha</label>
						<div class="col-md-2">
							<input class="form-control" id="txtFecha" name="txtFecha" readonly="true" value="{$smarty.now|date_format:"%Y-%m-%d"}">
						</div>
					</div>
					<div class="form-group">
						<label for="txtFactura" class="col-md-2">Factura</label>
						<div class="col-md-3">
							<input class="form-control" id="txtFactura" name="txtFactura">
						</div>
					</div>
					<div class="form-group">
						<label for="txtCliente" class="col-md-2">Cliente</label>
						<div class="col-md-10">
							<input class="form-control" id="txtCliente" name="txtCliente" autocomplete="no">
						</div>
					</div>
					<div class="form-group">
						<label for="selEstado" class="col-md-2">Estado</label>
						<div class="col-md-4">
							<select class="form-control" id="selEstado" name="selEstado">
								{foreach item=row from=$estados}
									<option value="{$row.idEstado}">{$row.nombre}</option>
								{/foreach}
							</select>
						</div>
						<label for="selTipo" class="col-md-2">Tipo</label>
						<div class="col-md-4">
							<select class="form-control" id="selTipo" name="selTipo">
								{foreach item=item from=$tipos}
									<option value="{$item.idTipo}">{$item.nombre}</option>
								{/foreach}
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="selUsuario" class="col-md-2">Usuario encargado</label>
						<div class="col-md-4">
							<select class="form-control" id="selUsuario" name="selUsuario">
								{foreach item=row from=$usuarios}
									<option value="">Sin asignar</option>
									<option value="{$row.idUsuario}">{$row.nombre}</option>
								{/foreach}
							</select>
						</div>
					</div>
					<br />
					<div class="form-group">
						<label for="txtLugar" class="col-md-2">Lugar</label>
						<div class="col-md-10">
							<input class="form-control" id="txtLugar" name="txtLugar">
						</div>
					</div>
					<div class="form-group">
						<label for="txtTransportista" class="col-md-2">Transportista</label>
						<div class="col-md-10">
							<input class="form-control" id="txtTransportista" name="txtTransportista">
						</div>
					</div>
					<div class="form-group">
						<label for="txtChofer" class="col-md-2">Chofer</label>
						<div class="col-md-10">
							<input class="form-control" id="txtChofer" name="txtChofer">
						</div>
					</div>
					<div class="form-group">
						<label for="txtGafete" class="col-md-2">Gafete</label>
						<div class="col-md-2">
							<select id="selGafete" name="selGafete" class="form-control">
								<option value="1">Si</option>
								<option value="0">No</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="txtContenedor" class="col-md-2">Contenedor</label>
						<div class="col-md-4">
							<input class="form-control" id="txtContenedor" name="txtContenedor">
						</div>
						<label for="txtTipoContenedor" class="col-md-2">Tipo de contenedor</label>
						<div class="col-md-4">
							<input class="form-control" id="txtTipoContenedor" name="txtTipoContenedor">
						</div>
					</div>
					<div class="form-group">
						<label for="txtClaveContenedor" class="col-md-2">Clave del contenedor</label>
						<div class="col-md-4">
							<input class="form-control" id="txtClaveContenedor" name="txtClaveContenedor">
						</div>
						<label for="txtPlacas" class="col-md-2">Placas</label>
						<div class="col-md-4">
							<input class="form-control" id="txtPlacas" name="txtPlacas">
						</div>
					</div>
					<div class="form-group">
						<label for="txtNumeroCandado" class="col-md-2">Numero del candado</label>
						<div class="col-md-3">
							<input class="form-control" id="txtNumeroCandado" name="txtNumeroCandado">
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id" name="id"/>
					<input type="hidden" id="cliente" name="cliente"/>
				</div>
			</div>
		</form>
	</div>
</div>