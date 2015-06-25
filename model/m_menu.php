<?php
  require_once "../db/db.php" ;

  class M_Menu extends db {
    function return_menu() {
      $sql = "select id, menu_name from pages" ;
      $res = $this->sql($sql) ;
      return $res
    }
  }
?>
