<table id="tblMercancias" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Fracción</th>
			<th>Descripción</th>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Serie</th>
			<th>Cant</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr>
				<td>{$row.fraccion}</td>
				<td>{$row.descripcion}</td>
				<td>{$row.marca}</td>
				<td>{$row.modelo}</td>
				<td>{$row.serie}</td>
				<td class="text-right">{$row.cantidad}</td>
				<td style="text-align: right">
					<button type="button" class="btn btn-primary btn-xs" action="getDetalleMercancia" title="Detalle" datos='{$row.json}' data-toggle="modal" data-target="#winMercancia"><i class="fa fa-mobile" aria-hidden="true"></i></button>
				</td>
			</tr>
		{/foreach}
	</tbody>
</table>