<div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Fecha</th>
					<th>Factura</th>
					<th>Tipo</th>
					<th>Cliente</th>
					<th>Asignada</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr title="{$row.estado}">
						<td style="border-left: solid 3px {$row.color}">{$row.fecha}</td>
						<td>{$row.factura}</td>
						<td>{$row.tipo}</td>
						<td>{$row.cliente}</td>
						<td>{$row.usuario}</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-primary btn-xs" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-edit"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>