<?php /* Smarty version Smarty-3.1.15, created on 2017-05-28 19:03:31
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\articles\edit-article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3774592b1f03bed221-06456974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c33f10c1087caa5f86039de7f0c2a44bd7cd8775' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\articles\\edit-article.tpl',
      1 => 1495819758,
      2 => 'file',
    ),
    'b1499b3ba41ee4175f06180203cc780d83af9e1c' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\articles\\edit-article-form.tpl',
      1 => 1495820000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3774592b1f03bed221-06456974',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592b1f03cabf35_50351827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592b1f03cabf35_50351827')) {function content_592b1f03cabf35_50351827($_smarty_tpl) {?><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit article page</title>
      
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-forms.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/widgEditor.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/widgContent.css">
  <link href="https://fonts.googleapis.com/css?family=Lato|Lora|Playfair+Display:700" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/newarticle.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/widgEditor.js"></script>

</head>
<div id="bg">
  <img class="bg" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/circuit.jpg" alt="">
</div>

  <body>
  

    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/articles/update.php" class="form-horizontal" id="form-edit-article"
      enctype="multipart/form-data" method="post" data-lang="en_GB" >
      <?php /*  Call merged included template "articles/edit-article-form.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('articles/edit-article-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '3774592b1f03bed221-06456974');
content_592b1f03c6b2b8_65227897($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "articles/edit-article-form.tpl" */?>
    </form>

   
  </body>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2017-05-28 19:03:31
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\articles\edit-article-form.tpl" */ ?>
<?php if ($_valid && !is_callable('content_592b1f03c6b2b8_65227897')) {function content_592b1f03c6b2b8_65227897($_smarty_tpl) {?><div class="form-div" id="new_article">
		<form  method="post">
			<fieldset>
				<legend>Edit Article</legend>
				<div class="form-group">
					<label>Title:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control center-block" required id="title" placeholder="Title" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" name="title">
						</div>
                        <input type="hidden" required id="article_id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
" name="article_id">
				</div>
				<div class="form-group">
					<label>Article Lead:</label>
						<div class="col-lg-10">
							<textarea class="form-control center-block" required rows="4" cols="50" id="headline" name="lead"><?php echo $_smarty_tpl->tpl_vars['article']->value['lead'];?>
</textarea>
						</div>
					
				</div>
				
                <div class="form-group">
                	<label >Article Body:</label>
                        <div class="col-lg-10">
                        <textarea class="form-control center-block widgEditor" required rows="10" cols="50" id="body"  name="body"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</textarea>
                        </div>
				
                </div>
                <br><br>    
				<div class="form-group">
                    <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary center-block">Update</button>
                    </div>
                </div>
			</fieldset>
			
		</form>
	</div>
      <?php }} ?>
