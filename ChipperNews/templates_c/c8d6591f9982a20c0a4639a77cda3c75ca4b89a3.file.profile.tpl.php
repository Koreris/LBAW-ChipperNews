<?php /* Smarty version Smarty-3.1.15, created on 2017-05-01 19:54:02
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\ChipperNews\templates\users\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:619859077a3c36c607-44707552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8d6591f9982a20c0a4639a77cda3c75ca4b89a3' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\profile.tpl',
      1 => 1493668436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '619859077a3c36c607-44707552',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59077a3cdd76a8_40960347',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59077a3cdd76a8_40960347')) {function content_59077a3cdd76a8_40960347($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic Bootstrap Template</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-profile.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-header.css">
    <link href="https://fonts.googleapis.com/css?family=Lora|Oswald|Slabo+27px" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
    <!-- Optional Bootstrap theme -->
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
</head>

<body>
    <div class="container">
        <div id="bg">
            <img class="bg" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/circuit.jpg" alt="">
        </div>
        <div class="row">
            <div class="col-sm-3">
                <ul class="nav nav-pills nav-stacked nav-email shadow mb-20">
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/chatbox.php">
                            <i class="fa fa-envelope-o"></i> Inbox <span class="label label-info pull-right inbox-notification"></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/posthistory.php"><i class="fa fa-book"></i> Comment History </a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/friendlist.php">
                            <i class="fa fa-users"></i> Friends <span class="label label-info pull-right inbox-notification">23</span>
                        </a>
                    </li>
                </ul>
                <!-- /.nav -->

                <h5 class="nav-email-subtitle" style="color:black"><b>More Actions</b></h5>
                <ul class="nav nav-pills nav-stacked nav-email mb-20 rounded shadow">
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/articles/newarticle.php">
                            <i class="fa fa-file-text-o"></i> Write New Article
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/myarticles.php">
                            <i class="fa fa-file-text-o"></i> Article History <span class="label label-info pull-right inbox-notification">6</span>
                        </a>
                    </li>
                </ul>
                <!-- /.nav -->
            </div>
            
            <div class="col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-heading resume-heading">
                        <div class="col-lg-12">
                            <h3>johnny_boy</h3>
                            <h5>John Doe <small>324 points</small> </h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-xs-12 col-sm-4">
                                    <figure>
                                        <img class="img-responsive" id="profilepic" alt="" src="http://www.unipromo.com.au/Images/Articles/SaveYourSanity/BoxGuy_Small.jpg">
                                    </figure>
                                    <div class="text-content">
                                        <div class="col-lg-12">
                                            <div class="col-xs-12 col-sm-8">
                                                <p>
                                                    <i class="fa fa-certificate" aria-hidden="false"></i> Administrator
                                                    <br/><i class="fa fa-envelope" aria-hidden="false"></i> john@doe.com
                                                    <br/> <i class="fa fa-map-marker" aria-hidden="false"></i> United States of America
                                                    <br/> <i class="fa fa-birthday-cake" aria-hidden="false"></i> August 1st
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#info" data-toggle="tab">Info</a></li>
                                        <li><a href="#interests" data-toggle="tab">Interests</a></li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div class="tab-pane fade active in" id="info">
                                            <ul class="list-group">
                                                <li class="list-group-item"><b>Full name:</b> John Doe <i class="fa fa-pencil"></i></li>
                                                <li class="list-group-item"><b>Bio: </b> Tech savvy and bad friends with trees. <i class="fa fa-pencil"></i></li>
                                                <li class="list-group-item"><b>Last logged in: </b> 2017-03-01, 22h03 <i class="fa fa-pencil"></i></li>
                                                <li class="list-group-item"><b>Associated newspapers or publications: </b>New York Times <i class="fa fa-pencil"></i></li>
                                                <li class="list-group-item"><b>Password: </b>********** <i class="fa fa-pencil"></i></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="interests">
                                            <p><span class="label label-info ">Programming</span>
                                                <span class="label label-success ">Mobile</span>
                                                <span class="label label-danger ">Politics</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bs-callout bs-callout-danger">
                    <h4>Most Popular Contribution</h4>
                    <p>
                        <small> <i> from </i></small><a href="article.html"><b>C++ is alive and kicking</b></a>
                        <div class="highlight">
                            <i class="fa fa-quote-left" aria-hidden="false"></i> Even all the parallel programming languages/techniques (Cuda, MPI, etc) rely on your knowledge of C++ (pointer, dereferencing, arithmetic, etc) to accomplish a task. In my
                            field of computer architecture, for instance, every famous simulator out there is written in C++. <i class="fa fa-quote-right" aria-hidden="false"></i>
                        </div>
                        <br>
                        <div id="ratings3">

                            <span id="postext3" style="color:#357266">42</span>
                            <button type="button" class="btn btn-default btn-circle btnlike">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
				</button>
                            <span id="negtext3" style="color:#f11066">29</span>
                            <button type="button" class="btn btn-default btn-circle btndislike">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
				</button>

                            <script>
                                $('#ratings3').find('.btn.btn-default.btn-circle.btnlike').on("click", function() {

                                    if ($('#ratings3').find('.btn.btn-default.btn-circle.btndislike').is(
                                            ":disabled")) {
                                        $('#ratings3').find('.btn.btn-default.btn-circle.btndislike').prop(
                                            "disabled", false);
                                        $('span#postext3').empty();
                                        $('span#postext3').append('42');
                                    } else {
                                        $('#ratings3').find('.btn.btn-default.btn-circle.btndislike').prop(
                                            "disabled", true);
                                        $('span#postext3').empty();
                                        $('span#postext3').append('43');
                                    }
                                });

                                $('#ratings3').find('.btn.btn-default.btn-circle.btndislike').on("click", function() {

                                    if ($('#ratings3').find('.btn.btn-default.btn-circle.btnlike').is(
                                            ":disabled")) {
                                        $('#ratings3').find('.btn.btn-default.btn-circle.btnlike').prop(
                                            "disabled", false);
                                        $('span#negtext3').empty();
                                        $('span#negtext3').append('29');
                                    } else {
                                        $('#ratings3').find('.btn.btn-default.btn-circle.btnlike').prop(
                                            "disabled", true);
                                        $('span#negtext3').empty();
                                        $('span#negtext3').append('30');
                                    }
                                });
                            </script>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- resume -->
    <br>
</body>

</html><?php }} ?>