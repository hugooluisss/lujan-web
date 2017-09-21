<div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Fecha</th>
					<th>Estado</th>
					<th>Factura</th>
					<th>Tipo</th>
					<th>Cliente</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr title="{$row.estado}">
						<td style="border-left: solid 3px {$row.color}">{$row.fecha}</td>
						<td style="color: {$row.color}">{$row.estado}</td>
						<td>{$row.factura}</td>
						<td>{$row.tipo}</td>
						<td>{$row.cliente}</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success btn-xs" action="factura" title="Subir factura" idOrden="{$row.idOrden}" data-toggle="modal" data-target="#winFactura"><i class="fa fa-upload"></i></button>
							<button type="button" class="btn btn-primary btn-xs" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-edit"></i></button>
							<button type="button" class="btn btn-primary btn-xs" action="getMercancias" title="Ver mercancías registradas" datos='{$row.json}' data-toggle="modal" data-target="#winListaMercancias"><i class="fa fa-archive"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>