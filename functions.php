<?php
  function Get($id,$method,$auth) {
    file_get_contents('http://109.234.156.253/prison/universal.php?user='. $id . $method . $auth);
    }
    
?>
