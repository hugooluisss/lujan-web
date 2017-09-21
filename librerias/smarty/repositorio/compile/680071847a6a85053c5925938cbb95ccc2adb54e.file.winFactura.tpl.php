<?php /* Smarty version Smarty-3.1.11, created on 2017-09-19 18:40:03
         compiled from "templates/plantillas/modulos/ordenes/winFactura.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173671811059c1a8b5664326-09346404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '680071847a6a85053c5925938cbb95ccc2adb54e' => 
    array (
      0 => 'templates/plantillas/modulos/ordenes/winFactura.tpl',
      1 => 1505864367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173671811059c1a8b5664326-09346404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59c1a8b5668df2_27473551',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c1a8b5668df2_27473551')) {function content_59c1a8b5668df2_27473551($_smarty_tpl) {?><div class="modal fade" id="winFactura" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" orden="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Subir factura</h4>
			</div>
			<div class="modal-body">
				<form id="upload" method="post" action="?mod=cordenes&action=upload" enctype="multipart/form-data">
					<input type="file" name="upl" multiple />
					<br />
					<ul class="elementos list-group">
					<!-- The file list will be shown here -->
					</ul>
				</form>
				<ul class="errores list-group">
				</ul>
			</div>
		</div>
	</div>
</div><?php }} ?>