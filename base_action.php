<?php
  /*Главные настройки : */
  $id=' '; #Ваш id без id в начале
  $auth=' '; #Ваш auth-key
  $bossid=''; #ID босса, на которого нападать, если пусто то не нападает

  /*ВКЛ/ВЫКЛ-функции бота : */ # если 'yes',то будет работать. Если 'no' то не будет работать
  $nsborsig='yes';
  $nboss='yes';
  $nsborvprohodnoi='yes';

  /* Сбор сиг во дворе : */
  if($nsborsig=='yes')
  {
    $get1 = file_get_contents('http://109.234.156.253/prison/universal.php?user='.$id.'&method=office&key='.$auth);
    preg_match_all("/<ideascount>(.*?)<\/ideascount/i",$get1,$matches1);
    $kolsig = $matches1[1][0];
    $getfap = file_get_contents('http://109.234.156.253/prison/universal.php?user='.$id.'&key='.$auth.'&method=office&getidea='.$kolsig);
  };

  /* Нападение на боссов : */
  if($nboss=='yes')
  {
    file_get_contents('http://109.234.156.253/prison/universal.php?user='.$id.'&method=startBattle&key='.$auth.'&boss_id='.$bossid);
  };

  /* Сбор прибыли в проходной : */
  if($nsborvprohodnoi=='yes')
  {
    file_get_contents('http://109.234.156.253/prison/universal.php?user='.$id.'&method=getAllBuildingsRewards&key='.$auth);
  };
?>
