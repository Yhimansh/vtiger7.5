<?php
/* Smarty version 3.1.39, created on 2023-01-17 05:56:55
  from 'C:\xampp7.4\htdocs\YugoxTeam\vtigercrm7.5\layouts\v7\modules\Install\InstallPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63c638a7ac8e21_08142591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67c2ac27ad1c7d500acd5de8cb966f1b05e07959' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\YugoxTeam\\vtigercrm7.5\\layouts\\v7\\modules\\Install\\InstallPreProcess.tpl',
      1 => 1669872319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c638a7ac8e21_08142591 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }
}
