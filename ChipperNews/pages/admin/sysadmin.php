<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  if($_SESSION['permission']!=3)
   header('Location: ' . $BASE_URL);
  $users = getAllUsers();
  $usersID = 1;  
  $smarty->assign('users', $users);
  $smarty->assign('usersID', $usersID);
    $smarty->assign('adminpanel', 0);

  $smarty->display('common/header-no-search.tpl');
  $smarty->display('admin/adminpanel.tpl');
  $smarty->display('common/footer.tpl');
?>
