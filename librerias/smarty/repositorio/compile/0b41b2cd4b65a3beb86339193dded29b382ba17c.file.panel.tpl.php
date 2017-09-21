<?php /* Smarty version Smarty-3.1.11, created on 2017-09-20 11:09:29
         compiled from "templates/plantillas/modulos/ordenes/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77778909459a602d1a63231-01434469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b41b2cd4b65a3beb86339193dded29b382ba17c' => 
    array (
      0 => 'templates/plantillas/modulos/ordenes/panel.tpl',
      1 => 1505923768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77778909459a602d1a63231-01434469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59a602d1b113d8_35405331',
  'variables' => 
  array (
    'estados' => 0,
    'row' => 0,
    'tipos' => 0,
    'item' => 0,
    'previos' => 0,
    'capturistas' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a602d1b113d8_35405331')) {function content_59a602d1b113d8_35405331($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/lujan-web/librerias/smarty/plugins/modifier.date_format.php';
?><div class="row">
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
							<input class="form-control" id="txtFecha" name="txtFecha" readonly="true" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
">
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
								<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idEstado'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</option>
								<?php } ?>
							</select>
						</div>
						<label for="selTipo" class="col-md-2">Tipo</label>
						<div class="col-md-4">
							<select class="form-control" id="selTipo" name="selTipo">
								<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['idTipo'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="selPrevio" class="col-md-2">Usuario previo (revisor)</label>
						<div class="col-md-4">
							<select class="form-control" id="selPrevio" name="selPrevio">
								<option value="">Sin asignar</option>
								<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['previos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idUsuario'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</option>
								<?php } ?>
							</select>
						</div>
						<label for="selCapturista" class="col-md-2">Usuario capturista</label>
						<div class="col-md-4">
							<select class="form-control" id="selCapturista" name="selCapturista">
								<option value="">Sin asignar</option>
								<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['capturistas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idUsuario'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</option>
								<?php } ?>
							</select>
						</div>
					</div>
					<?php if (in_array($_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getIdTipo(),array(4,1))){?>
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
					<?php }?>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getIdTipo()!=4){?>
						<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<?php }?>
					<input type="hidden" id="id" name="id"/>
					<input type="hidden" id="cliente" name="cliente"/>
				</div>
				
			</div>
		</form>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/ordenes/winListaMercancias.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/ordenes/winMercancia.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/ordenes/winFactura.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>