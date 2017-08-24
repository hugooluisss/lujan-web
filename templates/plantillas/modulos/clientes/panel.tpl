<div class="row">
	<div class="col-sm-12">
		<h1 class="page-header">Clientes</h1>
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
						<label for="txtRazonSocial" class="col-sm-2">Razón social</label>
						<div class="col-sm-10">
							<input class="form-control" id="txtRazonSocial" name="txtRazonSocial">
						</div>
					</div>
					<div class="form-group">
						<label for="txtContacto" class="col-sm-2">Nombre del contacto</label>
						<div class="col-sm-10">
							<input class="form-control" id="txtContacto" name="txtContacto">
						</div>
					</div>
					<div class="form-group">
						<label for="txtTeléfono" class="col-sm-2">Teléfono</label>
						<div class="col-sm-5">
							<input class="form-control" id="txtTeléfono" name="txtTeléfono">
						</div>
					</div>
					<div class="form-group">
						<label for="txtCorreo" class="col-sm-2">Correo electrónico</label>
						<div class="col-sm-4">
							<input class="form-control" id="txtCorreo" name="txtCorreo" type="email">
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div>