<?php
  require_once "../model/m_menu.php"

  class C_Menu extends M_Menu {
    function print_menu() {
      $res = $this->return_menu ;
      while($row = mysql_fetch_array($res)){
        $m_name[$row['id']] = $row['menu_name'] ;
      }
      return $m_menu ;
    }
  }
?>
