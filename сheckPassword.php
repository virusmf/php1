<?php


foreach ($rec as $record) {
    $rrec = explode('||',$record);
}


    function сheckPassword($login, $password)
{
  return password_verify(user[$login],$password);
}