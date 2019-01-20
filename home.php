<?php

require_once 'MySmarty.class.php';
$smarty = new MySmarty();
$smarty->assign('title', '首頁');
$smarty->display('home.tpl');

?>
