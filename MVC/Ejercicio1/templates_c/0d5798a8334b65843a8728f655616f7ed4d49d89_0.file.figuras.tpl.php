<?php
/* Smarty version 3.1.30, created on 2016-08-30 00:04:24
  from "C:\xampp\htdocs\web2\MVC\Ejercicio1\figuras.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57c4b16868efe8_16986230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d5798a8334b65843a8728f655616f7ed4d49d89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\MVC\\Ejercicio1\\figuras.tpl',
      1 => 1472302384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c4b16868efe8_16986230 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lista de Figuras</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<h1>Lista de Figuras</h1>
<h2>Ordenadas por area de menor a mayor</h2>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['figuras']->value, 'figura');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['figura']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['figura']->value->getArea();?>
</li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
</body>
</html>
<?php }
}
