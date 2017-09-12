<?php /* Smarty version Smarty-3.1.11, created on 2017-09-11 23:08:05
         compiled from "templates/plantillas/modulos/ordenes/winMercancia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68684302059b740efbc8815-63904942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6102fb6f2df456adebe4db79517c267c3ffb8b10' => 
    array (
      0 => 'templates/plantillas/modulos/ordenes/winMercancia.tpl',
      1 => 1505189200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68684302059b740efbc8815-63904942',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b740efbcc809_58805663',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b740efbcc809_58805663')) {function content_59b740efbcc809_58805663($_smarty_tpl) {?><div class="modal fade" id="winMercancia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" datos="">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h5 class="modal-title" id="exampleModalLabel">Mercancia de la factura <span class="text-warning" campo="factura" /></h5>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12 listaImagenes"></div>
				</div>
				<hr />
				<div class="form-group row">
					<label for="txtFraccion" class="control-label col-xs-4 col-sm-2">Fracción</label>
					<div class="col-xs-8 col-sm-10" campo="fraccion">
					</div>
				</div>
				<div class="form-group row">
					<label for="txtDescripcion" class="control-label col-xs-4 col-sm-2">Descripción</label>
					<div class="col-xs-8 col-sm-10" campo="descripcion">
					</div>
				</div>
				<div class="form-group row">
					<label for="txtMarca" class="control-label col-xs-4 col-sm-2">Marca</label>
					<div class="col-xs-8 col-sm-2" campo="marca">
					</div>
					<label for="txtModelo" class="control-label col-xs-4 col-sm-2">Modelo</label>
					<div class="col-xs-8 col-sm-2" campo="modelo">
					</div>
					<label for="txtSerie" class="control-label col-xs-4 col-sm-2">Serie</label>
					<div class="col-xs-8 col-sm-2" campo="serie">
					</div>
				</div>
				<div class="form-group row">
					<label for="txtCantidad" class="control-label col-xs-4 col-sm-2">Cantidad</label>
					<div class="col-xs-4 col-sm-2" campo="cantidad">
					</div>
					<label for="txtPesoNeto" class="control-label col-xs-4 col-sm-2">Peso neto</label>
					<div class="col-xs-8 col-sm-2" campo="pesoneto">
					</div>
					<label for="txtPesoBruto" class="control-label col-xs-4 col-sm-2">Peso bruto</label>
					<div class="col-xs-8 col-sm-2" campo="pesobruto">
					</div>
				</div>
				<div class="form-group row">
					<label for="txtEmbalaje" class="control-label col-xs-4 col-sm-2">Embalaje</label>
					<div class="col-xs-8 col-sm-4" campo="embalaje">
					</div>
					<label for="txtMCTM" class="control-label col-xs-4 col-sm-2">M. C. T. M.</label>
					<div class="col-xs-4 col-sm-4" campo="mctm">
					</div>
				</div>
				<div class="form-group row">
					<label for="txtEC" class="control-label col-xs-4 col-sm-2">E. C.</label>
					<div class="col-xs-4 col-sm-2" campo="ec">
					</div>
				</div>
				<div class="form-group row">
					<label for="txtObservaciones" class="control-label col-xs-4 col-sm-2">Observaciones</label>
					<div class="col-xs-8 col-sm-10" campo="observaciones">
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>