<?php /* Smarty version Smarty-3.1.11, created on 2017-09-19 16:06:47
         compiled from "templates/plantillas/modulos/inicio/vendedor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3027865259c186e71d0d78-84572499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ee57ea53d70e70676db8cafed3964e58958da1a' => 
    array (
      0 => 'templates/plantillas/modulos/inicio/vendedor.tpl',
      1 => 1499789020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3027865259c186e71d0d78-84572499',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bazares' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59c186e7247322_60531591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c186e7247322_60531591')) {function content_59c186e7247322_60531591($_smarty_tpl) {?><div class="row">
	<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bazares']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>

				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-6 text-success">
							Total de ventas
						</div>
						<div class="col-xs-6 text-right">
							$ <?php echo $_smarty_tpl->tpl_vars['row']->value['monto'];?>

						</div>
					</div>
					<div class="row">
						<div class="col-xs-6 text-primary">
							Total de pagos
						</div>
						<div class="col-xs-6 text-right">
							$ <?php echo $_smarty_tpl->tpl_vars['row']->value['pagos'];?>

						</div>
					</div>
				</div>
				<div class="panel-footer text-right">
					<a href="puntoventa/<?php echo $_smarty_tpl->tpl_vars['row']->value['idBazar'];?>
-bazar/">Ir al punto de venta</a>
				</div>
			</div>
			
		</div>
	<?php } ?>
</div><?php }} ?>