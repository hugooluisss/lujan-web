<?php /* Smarty version Smarty-3.1.11, created on 2017-09-11 22:25:33
         compiled from "templates/plantillas/modulos/ordenes/listaMercancia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107247105859b745ea848a48-53760800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a326ba93e287e6507daa86d23dc97cc0f389ff0' => 
    array (
      0 => 'templates/plantillas/modulos/ordenes/listaMercancia.tpl',
      1 => 1505186568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107247105859b745ea848a48-53760800',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b745ea912370_45771129',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b745ea912370_45771129')) {function content_59b745ea912370_45771129($_smarty_tpl) {?><table id="tblMercancias" class="table table-bordered table-hover">
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
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fraccion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['descripcion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['marca'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['modelo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['serie'];?>
</td>
				<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['cantidad'];?>
</td>
				<td style="text-align: right">
					<button type="button" class="btn btn-primary btn-xs" action="getDetalleMercancia" title="Detalle" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
' data-toggle="modal" data-target="#winMercancia"><i class="fa fa-mobile" aria-hidden="true"></i></button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>