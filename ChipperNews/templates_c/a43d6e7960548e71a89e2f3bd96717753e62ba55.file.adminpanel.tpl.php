<?php /* Smarty version Smarty-3.1.15, created on 2017-04-20 08:00:40
         compiled from "C:\wamp64\www\LBAW-ChipperNews\chippernews\templates\admin\adminpanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1601458f7872ee0e055-98897906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a43d6e7960548e71a89e2f3bd96717753e62ba55' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\chippernews\\templates\\admin\\adminpanel.tpl',
      1 => 1492675212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1601458f7872ee0e055-98897906',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f7872f203565_40024838',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f7872f203565_40024838')) {function content_58f7872f203565_40024838($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chipper News</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-ricardo.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <a class="navbar-brand" href="#">Admin Panel</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin Options <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Shut down for maintenance</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Search User</button>
                </form>

                <ul class="nav navbar-nav navbar-right">

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
        <div>
            <h1> Users </h1>
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/administration/operation.php" method="post">
             <button type="submit" class="btn btn-default">Submit</button>
                <div class="radio">
                    <label class="radio-inline"><input type="radio" name="operation" value="ban" >Ban</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="delete">Delete</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="colaborator">Promote</label>
                </div>
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Banned?</th>
                        <th>Deleted?</th>
                        <th>Last Login</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['permission_level']==0) {?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</td>
                        <td><img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/pepe.jpg" alt="..."></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['is_banned']==true) {?>
                                TRUE
                            <?php } else { ?>
                                FALSE
                            <?php }?>
                        </td>
                        <td> 
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['is_deleted']==true) {?>
                                TRUE
                            <?php } else { ?>
                                FALSE
                            <?php }?>
                        </td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['user']->value['last_login'];?>
</td>
                        <td>
                            <input type="checkbox" name="users[]" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
><br>
                        </td>  
                    </tr>
                    <?php }?>
                    <?php } ?>
                </tbody>
                </table>
            </form>
        </div>
        <div>
            <h1> Collaborators </h1>
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/administration/operation.php" method="post">
             <button type="submit" class="btn btn-default">Submit</button>
                <div class="radio">
                    <label class="radio-inline"><input type="radio" name="operation" value="ban" >Ban</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="delete">Delete</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="moderator">Promote</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="user">Demote</label>
                </div>
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Banned?</th>
                        <th>Deleted?</th>
                        <th>Last Login</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['permission_level']==1) {?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</td>
                        <td><img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/pepe.jpg" alt="..."></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['is_banned']==true) {?>
                                TRUE
                            <?php } else { ?>
                                FALSE
                            <?php }?>
                        </td>
                        <td> 
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['is_deleted']==true) {?>
                                TRUE
                            <?php } else { ?>
                                FALSE
                            <?php }?>
                        </td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['user']->value['last_login'];?>
</td>
                        <td>
                            <input type="checkbox" name="users[]" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
><br>
                        </td>    
                    </tr>
                    <?php }?>
                    <?php } ?>
                </tbody>
                </table>
            </form>
        </div>

        <div>
            <h1> Moderators </h1>
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/administration/operation.php" method="post">
             <button type="submit" class="btn btn-default">Submit</button>
                <div class="radio">
                    <label class="radio-inline"><input type="radio" name="operation" value="ban" >Ban</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="delete">Delete</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="colaborator">Demote</label>
                </div>
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Banned?</th>
                        <th>Deleted?</th>
                        <th>Last Login</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['permission_level']==2) {?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</td>
                        <td><img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/pepe.jpg" alt="..."></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['is_banned']==true) {?>
                                TRUE
                            <?php } else { ?>
                                FALSE
                            <?php }?>
                        </td>
                        <td> 
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['is_deleted']==true) {?>
                                TRUE
                            <?php } else { ?>
                                FALSE
                            <?php }?>
                        </td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['user']->value['last_login'];?>
</td>
                        <td>
                            <input type="checkbox" name="users[]" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
><br>
                        </td>  
                    </tr>
                    <?php }?>
                    <?php } ?>
                </tbody>
                </table>
            </form>
        </div>
</body>

</html><?php }} ?>