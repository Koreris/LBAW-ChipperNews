<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
        $smarty->display('common/header.tpl');
		$smarty->display('users/help.tpl');
?>
