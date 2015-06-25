<?php
  require_once "../controller/c_menu.php"
  $menu = new C_Menu() ;
  $aux = $menu->print_menu() ;
  foreach($aux as $uri => $link) {
    echo "<a href = \"{$menu->BASE_URL}/index.php?id={$uri}\">{$link}</a><br />" ;
  }
?>
